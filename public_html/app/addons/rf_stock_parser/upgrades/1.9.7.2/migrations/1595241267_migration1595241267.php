<?php

use Phinx\Migration\AbstractMigration;
use Tygh\Registry;

class Migration1595241267 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("UPDATE {$pr}addons set priority = 5000 WHERE addon = 'rf_stock_parser'");
    }
}
