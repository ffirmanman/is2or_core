<?php

use Phinx\Migration\AbstractMigration;

class Migration1629050633 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}rf_stock_parser add `amount_field_not_in_schema` varchar(255) DEFAULT 'amount'");
        $this->execute("alter table {$pr}rf_stock_parser add `amount_field_not_in_schema_value` int(11) DEFAULT 100");
    }
}
