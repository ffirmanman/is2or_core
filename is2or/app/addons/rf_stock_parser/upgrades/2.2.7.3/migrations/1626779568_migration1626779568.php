<?php

use Phinx\Migration\AbstractMigration;

class Migration1626779568 extends AbstractMigration
{
    public function up()
    {
        db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('manage_rf_stock_parser', 'Y', 'products', 'rf_stock_parser', 'N')");
        db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('view_rf_stock_parser', 'Y', 'products', 'rf_stock_parser', 'Y')");
    }
}
