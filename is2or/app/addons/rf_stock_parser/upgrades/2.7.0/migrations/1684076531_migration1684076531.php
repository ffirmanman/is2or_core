<?php

use Phinx\Migration\AbstractMigration;

class Migration1684076531 extends AbstractMigration
{
    public function up()
    {
        db_query(
            '
            alter table ?:rf_stock_parser
            modify extra_charge_custom longtext null;
        '
        );

        try {
            db_query(
                '
                create index products_rf_product_code_index
                on ?:products (product_code);
            '
            );
        } catch (\Throwable $e) {
        }

        try {
            db_query(
                '
                create index products_rf_manufacturer_code_index
                on ?:products (manufacturer_code);
            '
            );
        } catch (\Throwable $e) {
        }

        $data = db_get_array(
            '
            SELECT my_supplier_id, extra_charge, extra_charge_type, extra_charge_custom
            FROM ?:rf_stock_parser
        '
        );

        foreach ($data as $item) {
            $item['extra_charge_custom'] = unserialize($item['extra_charge_custom']);

            $temp = [
                'default' => [
                    'type' => $item['extra_charge_type'],
                    'charge' => $item['extra_charge'],
                    'custom' => array_values($item['extra_charge_custom']),
                ],
            ];

            unset($item['extra_charge'], $item['extra_charge_type']);

            db_query(
                'UPDATE ?:rf_stock_parser SET extra_charge_custom = ?s WHERE my_supplier_id = ?i',
                serialize($temp),
                $item['my_supplier_id']
            );
        }
    }
}
