<?php

use Phinx\Migration\AbstractMigration;

class MyfatoorahAddonUpdateVersion extends AbstractMigration {

    public function up() {
        $options = $this->adapter->getOptions();
        $pr      = $options['prefix'];

        //update the version
        $this->execute("UPDATE {$pr}addons SET version = '2.0.0.4' WHERE `addon`='myfatoorah'");
        $this->execute("UPDATE {$pr}addon_descriptions SET name='MyFatoorah' WHERE `addon`='myfatoorah' AND `lang_code`='ar'");
    }

}
