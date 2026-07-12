<?php

use Phinx\Migration\AbstractMigration;

class Migration1606229474 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}products add rf_stop_update_status varchar(1) not null default 'N'");
    }
}
