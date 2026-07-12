<?php

use Phinx\Migration\AbstractMigration;
use Tygh\Registry;

class Migration1586111051 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}products add rf_stop_update_price varchar(1) not null default 'N'");
        $this->execute("alter table {$pr}products add rf_stop_update_amount varchar(1) not null default 'N'");
        $rfCostExists = db_get_field(
            '
            SELECT 1
            FROM information_schema.COLUMNS
            WHERE TABLE_SCHEMA = ?s AND TABLE_NAME = "' . DEFAULT_TABLE_PREFIX . 'products" and COLUMN_NAME="rf_cost"',
            Registry::get('config.db_name')
        );

        if (!$rfCostExists) {
            $this->execute("alter table {$pr}products change opt_price rf_cost decimal(12,2) unsigned default '0.00' not null");
        }
    }
}
