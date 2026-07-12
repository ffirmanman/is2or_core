<?php

use Phinx\Migration\AbstractMigration;
use Tygh\RfStockParser\Column;

class Migration1650292771 extends AbstractMigration
{
    public function up()
    {
        db_query(
            '
            alter table ?:rf_stock_parser
            add link_to_products tinyint(1) unsigned not null;'
        );

        $parsers = db_get_array(
            '
            SELECT p.my_supplier_id, b.id as brand
            FROM ?:rf_stock_parser as p
            LEFT JOIN ?:rf_stock_parser_brands as b ON b.my_supplier_id = p.my_supplier_id
            GROUP BY p.my_supplier_id
        '
        );

        foreach ($parsers as $parser) {
            $type = 3;
            if (!empty($parser['brand'])) {
                $type = 2;
            }

            db_query(
                '
                UPDATE ?:rf_stock_parser SET link_to_products = ?i
                WHERE my_supplier_id = ?i
            ',
                $type,
                $parser['my_supplier_id']
            );
        }
    }
}
