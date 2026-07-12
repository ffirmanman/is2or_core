<?php

use Phinx\Migration\AbstractMigration;

class Migration1585239225 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}my_suppliers add extra_charge_type tinyint(1) default 0 not null after extra_charge");
        $this->execute("alter table {$pr}my_suppliers modify extra_charge DECIMAL(10,2) default 0 not null");
        $this->execute("alter table {$pr}my_suppliers add autoimport tinyint(1) default 0 not null");
        $this->execute("alter table {$pr}my_suppliers_logs add categories mediumtext default NULL null");
        $this->execute("UPDATE {$pr}my_suppliers SET column_settings = REPLACE(column_settings, 's:5:\"price\"', 's:16:\"price_usergroup0\"')");
    }
}
