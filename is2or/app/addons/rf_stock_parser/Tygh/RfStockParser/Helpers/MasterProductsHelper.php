<?php

namespace Tygh\RfStockParser\Helpers;

use Tygh\Registry;
use Tygh\Addons\MasterProducts\ServiceProvider;

class MasterProductsHelper
{
    public function update($products)
    {
        $enabled = Registry::isExist('addons.master_products') && Registry::get('addons.master_products.status') != 'D';

        if (!$enabled) {
            return false;
        }

        $masterProductIds = array_column($products, 'master_product_id');

        if (empty($masterProductIds)) {
            return false;
        }

        $showOutOfStock = Registry::get('settings.General.show_out_of_stock_products') === 'Y';
        $fields = [
            'p.master_product_id',
            'SUM(p.amount) as amount',
            $showOutOfStock ? 'SUM(IF(p.amount > 0, 1, 0)) as offer' : 'COUNT(p.product_id) as offer',
            'MIN(IF(percentage_discount = 0, price, price - (price * percentage_discount)/100)) as price',
        ];

        $amounts = db_get_array(
            '
            SELECT ?p
            FROM ?:products as p
            JOIN ?:companies as c ON p.company_id = c.company_id
            JOIN ?:product_prices as price ON price.product_id = p.product_id
            WHERE master_product_id IN (?a) AND p.status = "A" AND c.status = "A"
            GROUP BY p.master_product_id
        ',
            implode(',', $fields),
            $masterProductIds
        );

        if (empty($amounts)) {
            return false;
        }

        $updateAmount = 'amount = CASE ';
        $updateOffers = 'master_product_offers_count = CASE ';
        $updatePrices = 'price = CASE';

        foreach ($amounts as $item) {
            $updateAmount .= db_quote(' WHEN product_id = ?i THEN ?i ', $item['master_product_id'], $item['amount']);
            $updateOffers .= db_quote(' WHEN product_id = ?i THEN ?i ', $item['master_product_id'], $item['offer']);
            $updatePrices .= db_quote(' WHEN product_id = ?i THEN ?i ', $item['master_product_id'], $item['price']);
        }

        $updateAmount .= ' ELSE amount END';
        $updateOffers .= ' ELSE master_product_offers_count END';
        $updatePrices .= ' ELSE price END';

        db_query(
            '
            UPDATE ?:products
            SET ?p, ?p
            WHERE product_id IN (?a)',
            $updateAmount,
            $updateOffers,
            $masterProductIds
        );

        db_query(
            '
            UPDATE ?:product_prices
            SET ?p
            WHERE product_id IN (?a) AND lower_limit = 1 AND usergroup_id = 0',
            $updatePrices,
            $masterProductIds
        );

        $service = ServiceProvider::getService();

        $reflection = new \ReflectionClass($service);
        $property = $reflection->getProperty('indexer');
        $property->setAccessible(true);
        $indexer = $property->getValue($service);

        $indexer->reindexStorefrontOffersCountByProductIds($masterProductIds);
    }

    public function getMasters($productCodes, $field)
    {
        $enabled = Registry::isExist('addons.master_products') && Registry::get('addons.master_products.status') != 'D';

        if (!$enabled || empty($productCodes)) {
            return [];
        }

        return db_get_hash_array(
            '
            SELECT ?f, product_id, master_product_status
            FROM ?:products
            WHERE ?f IN (?a) AND company_id = 0
        ',
            $field,
            $field,
            $field,
            $productCodes
        );
    }
}
