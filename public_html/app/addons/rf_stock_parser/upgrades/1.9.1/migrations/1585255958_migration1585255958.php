<?php

use Phinx\Migration\AbstractMigration;

class Migration1585255958 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $this->execute("alter table {$pr}my_suppliers add price_round TEXT null");
    }
}
