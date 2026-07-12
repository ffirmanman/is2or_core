<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Helpers;

use Tygh\Registry;
use Tygh\Addons\Warehouses\Manager;
use Tygh\Addons\Warehouses\ProductStock;

class WarehouseHelper
{
    public static function check(): bool
    {
        return Registry::isExist('addons.warehouses');
    }

    public static function getWarehouses($companyId, $onlyNames = false, $onlyIds = false): array
    {
        if (!self::check()) {
            return [];
        }

        $result = [];

        static $warehouses = [];

        if (!isset($warehouses[$companyId])) {
            $warehouses[$companyId] = db_get_array('
                SELECT s.store_location_id, sd.name
                FROM ?:store_locations as s
                JOIN ?:store_location_descriptions as sd ON sd.store_location_id = s.store_location_id
                WHERE s.store_type IN (?a) AND sd.lang_code = ?s AND s.company_id = ?i
            ', ['S', 'W'], CART_LANGUAGE, $companyId);
        }

        $name = __('quantity') . ' [ ' . __('warehouses.store_type_warehouse') . ': %s ]';

        foreach ($warehouses[$companyId] ?? [] as $warehouse) {
            if ($onlyIds) {
                $result[] = $warehouse['store_location_id'];
            } else {
                $result['warehouse' . $warehouse['store_location_id']] = $onlyNames ? $warehouse['name'] : sprintf($name, $warehouse['name']);
            }
        }

        return $result;
    }

    /**
     * @see  fn_warehouses_update_product_post
     *
     * @param mixed $productId
     * @param mixed $data
     */
    public static function updateAmounts($productId, $data): bool
    {
        if (!self::check()) {
            return false;
        }

        /** @var Manager $manager */
        $manager = \Tygh::$app['addons.warehouses.manager'];
        /** @var ProductStock $product_stock */
        $product_stock = $manager->createProductStockFromWarehousesData($productId, $data);

        $manager->saveProductStock($product_stock, false);

        return true;
    }

    public static function getAmounts($productIds): array
    {
        if (!self::check() || empty($productIds)) {
            return [];
        }

        $result = [];

        $amounts = db_get_array(
            '
            SELECT * FROM ?:warehouses_products_amount
            WHERE product_id IN (?a)',
            $productIds
        );

        foreach ($amounts as $amount) {
            $result[$amount['product_id']][$amount['warehouse_id']] = $amount['amount'];
        }

        return $result;
    }

    public static function setToZero($companyId, $productIds, $warehouses = null): void
    {
        if (!self::check()) {
            return;
        }

        if (empty($warehouses) || empty($productIds)) {
            return;
        }

        foreach ($warehouses as &$warehouse) {
            if ($warehouse == 'all') {
                break;
            }

            $warehouse = str_replace('warehouse', '', $warehouse);
        }
        unset($warehouse);

        $allWarehousesIds = self::getWarehouses($companyId, false, true);
        $amounts = self::getAmounts($productIds);

        foreach ($productIds as $productId) {
            $update = [];
            foreach ($allWarehousesIds as $allWarehousesId) {
                $currentAmount = $amounts[$productId][$allWarehousesId] ?? '';
                $amount = in_array('all', $warehouses) || in_array($allWarehousesId, $warehouses) ? 0 : $currentAmount;

                $update[] = [
                    'warehouse_id' => $allWarehousesId,
                    'amount' => $amount,
                ];
            }

            self::updateAmounts($productId, $update);
        }
    }
}
