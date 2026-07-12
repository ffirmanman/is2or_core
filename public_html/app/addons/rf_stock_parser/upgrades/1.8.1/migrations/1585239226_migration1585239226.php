<?php

use Phinx\Migration\AbstractMigration;

class Migration1585239226 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}my_suppliers add brand_synonyms text null");
        $this->execute("alter table {$pr}my_suppliers change node_attributes filter_attributes varchar(255) null");
        $this->execute("alter table {$pr}my_suppliers add node_attributes text default null null");

        $this->execute("alter table {$pr}my_suppliers_logs_not_found add manufacturer_code varchar(255) not null");
        $this->execute("alter table {$pr}my_suppliers_logs_not_found add brand varchar(255) null");
        $this->execute("alter table {$pr}my_suppliers_logs_not_found add category_id int default null null");

        $this->execute("create index {$pr}my_suppliers_logs_not_found_brand_index on cscart_my_suppliers_logs_not_found (brand)");
        $this->execute("create index {$pr}my_suppliers_logs_not_found_manufacturer_code_index on cscart_my_suppliers_logs_not_found (manufacturer_code)");
        $this->execute("create index {$pr}my_suppliers_logs_not_found_category_id_index on cscart_my_suppliers_logs_not_found (category_id)");
    }
}
