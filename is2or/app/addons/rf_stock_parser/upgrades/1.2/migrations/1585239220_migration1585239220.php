<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class Migration1585239220 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $table = $this->table("{$pr}my_suppliers_brands", ['id' => false, 'primary_key' => ['my_supplier_id', 'brand_id']]);
        $table->addColumn('my_supplier_id', 'integer', ['signed' => false, 'limit' => 8])
            ->addColumn('brand_id', 'integer', ['signed' => false, 'limit' => 8])
            ->create()
        ;

        $this->execute("alter table {$pr}my_suppliers add manufacturer_field varchar(128) default 'manufacturer_code' not null");
    }
}
