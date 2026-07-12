<?php

use Phinx\Migration\AbstractMigration;

class Migration1603638844 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("rename table {$pr}my_suppliers to {$pr}rf_stock_parser");
        $this->execute("rename table {$pr}my_suppliers_brands to {$pr}rf_stock_parser_brands");
        $this->execute("rename table {$pr}my_suppliers_logs to {$pr}rf_stock_parser_logs");
        $this->execute("rename table {$pr}my_suppliers_logs_detailed to {$pr}rf_stock_parser_logs_detailed");
        $this->execute("rename table {$pr}my_suppliers_logs_not_found to {$pr}rf_stock_parser_logs_not_found");
        $this->execute("rename table {$pr}my_suppliers_xml_nodes to {$pr}rf_stock_parser_xml_nodes");

        $this->execute("alter table {$pr}rf_stock_parser add xml_fix_wrong_encode tinyint(1) default 0 not null");
    }
}
