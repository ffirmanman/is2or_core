<?php

use Phinx\Migration\AbstractMigration;

class Migration1585239222 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute(
            "CREATE TABLE IF NOT EXISTS `{$pr}my_suppliers_logs_not_found` (
            `id` int UNSIGNED NOT NULL auto_increment,
            `my_supplier_id` mediumint(8) UNSIGNED NOT NULL,
            `value` MEDIUMTEXT NULL,
            `added` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
            PRIMARY KEY (`id`),
            INDEX (`my_supplier_id`),
            INDEX (`added`)
            ) ENGINE=InnoDB DEFAULT CHARSET=UTF8
        "
        );

        try {
            $this->execute("alter table {$pr}my_suppliers_logs drop column not_found");
        } catch (\Exception $e) {
        }
    }
}
