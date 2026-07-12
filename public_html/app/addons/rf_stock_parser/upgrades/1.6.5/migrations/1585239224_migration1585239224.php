<?php

use Phinx\Migration\AbstractMigration;

class Migration1585239224 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute(
            "CREATE TABLE `{$pr}my_suppliers_logs_detailed` (
            `id` BIGINT UNSIGNED NOT NULL auto_increment,
            `my_supplier_id` mediumint(8) UNSIGNED NOT NULL,
            `access_count` int NOT NULL default 0,
            `product_id` mediumint(8) UNSIGNED NOT NULL,
            `type` TINYINT(2) UNSIGNED NOT NULL default 0,
            `value` MEDIUMTEXT NULL,
            `p_price` mediumint(8) UNSIGNED NOT NULL DEFAULT 0,
            `large_percentage` TINYINT(1) UNSIGNED NOT NULL default 0,
            PRIMARY KEY (`id`),
            INDEX (my_supplier_id, access_count),
            INDEX (product_id),
            INDEX (large_percentage)
            ) ENGINE=InnoDB DEFAULT CHARSET=UTF8
        "
        );

        $this->execute("alter table {$pr}my_suppliers_logs drop column detailed");
        $this->execute("alter table {$pr}my_suppliers_logs drop column large_percentage");
        $this->execute("alter table {$pr}my_suppliers_logs add access_count int default 0 not null");

        $this->execute("alter table {$pr}my_suppliers_logs add detailed TINYINT(1) default 0 not null");
        $this->execute("alter table {$pr}my_suppliers_logs add large_percentage TINYINT(1) default 0 not null");
    }
}
