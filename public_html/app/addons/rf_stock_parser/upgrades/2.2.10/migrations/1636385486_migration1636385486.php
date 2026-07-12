<?php

use Phinx\Migration\AbstractMigration;

class Migration1636385486 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}rf_stock_parser add `wh_clear` TEXT NULL");
    }
}
