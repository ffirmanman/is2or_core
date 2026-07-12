<?php

use Phinx\Migration\AbstractMigration;

class Migration1626374459 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}rf_stock_parser add attach_to_master tinyint(1) default 0 not null");
    }
}
