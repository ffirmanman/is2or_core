<?php

use Phinx\Migration\AbstractMigration;

class Migration1585239223 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        try {
            $this->execute("alter table {$pr}my_suppliers_brands drop primary key");
        } catch (\Exception $e) {
            echo $e->getMessage() . '<br>';
        }

        try {
            $this->execute("alter table {$pr}my_suppliers_brands add id int auto_increment primary key first");
        } catch (\Exception $e) {
            echo $e->getMessage() . '<br>';
        }

        try {
            $this->execute("create index my_supplier_id on {$pr}my_suppliers_brands (my_supplier_id)");
        } catch (\Exception $e) {
            echo $e->getMessage() . '<br>';
        }

        try {
            $this->execute("create index added on {$pr}my_suppliers_logs_not_found (added)");
        } catch (\Exception $e) {
            echo $e->getMessage() . '<br>';
        }

        try {
            $this->execute("create index my_supplier_id on {$pr}my_suppliers_logs_not_found (my_supplier_id)");
        } catch (\Exception $e) {
            echo $e->getMessage() . '<br>';
        }
    }
}
