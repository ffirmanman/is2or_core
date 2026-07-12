<?php

use Phinx\Migration\AbstractMigration;

class Migration1585239219 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}my_suppliers add extra_charge_custom text default null null");
    }
}
