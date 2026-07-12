<?php

use Phinx\Migration\AbstractMigration;
use Tygh\Registry;

class Migration1586960235 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}products modify supplier_access_count int default 0 not null");
    }
}
