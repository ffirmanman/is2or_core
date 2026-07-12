<?php

use Phinx\Migration\AbstractMigration;

class MyfatoorahAddonUpdateVersion extends AbstractMigration {

    public function up() {
        fn_clear_cache();
        
        $options = $this->adapter->getOptions();
        $pr      = $options['prefix'];

        //update the version
        $this->execute("UPDATE {$pr}addons SET version = '2.1.1' WHERE `addon`='myfatoorah'");
    }

}
