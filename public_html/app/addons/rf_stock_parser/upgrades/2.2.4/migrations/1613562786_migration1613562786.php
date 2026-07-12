<?php

use Phinx\Migration\AbstractMigration;

class Migration1613562786 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}rf_stock_parser modify extra_charge decimal(10,2) default 0.00 not null");
    }
}
