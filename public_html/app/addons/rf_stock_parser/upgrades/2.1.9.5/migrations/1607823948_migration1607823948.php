<?php

use Phinx\Migration\AbstractMigration;

class Migration1607823948 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}images add rf_original varchar(255) null");
    }
}
