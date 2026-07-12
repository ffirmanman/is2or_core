<?php

use Phinx\Migration\AbstractMigration;

class MyfatoorahAddonUpdateVersion extends AbstractMigration {

    public function up() {
        $options = $this->adapter->getOptions();
        $pr      = $options['prefix'];

        //1- add countryMode option
        //get section data
        $mfSection   = $this->fetchRow("SELECT `section_id` FROM `{$pr}settings_sections` WHERE `name`='myfatoorah'");
        $mfSectionId = $mfSection['section_id'];

        $mfSectionTab   = $this->fetchRow("SELECT `section_id` FROM `{$pr}settings_sections` WHERE `parent_id`=$mfSectionId");
        $mfSectionTabId = $mfSectionTab['section_id'];

        //insert option
        $this->execute(" 
INSERT INTO `{$pr}settings_objects`
(`object_id`, `edition_type`, `name`, `section_id`, `section_tab_id`, `type`, `value`, `position`, `is_global`, `handler`, `parent_id`) 
VALUES 
(NULL, 'ROOT,ULT:VENDOR', 'countryMode', $mfSectionId, $mfSectionTabId, 'S', 'KWT', '0', 'N', '', '0');
");

        //insert option desc 
        $mfCountryMode       = $this->fetchRow("SELECT `object_id` FROM `{$pr}settings_objects` WHERE `name`='countryMode' and `section_id`=$mfSectionId and `section_tab_id`=$mfSectionTabId");
        $countryModeObjectId = $mfCountryMode['object_id'];

        $en        = "Vendor\'s Country";
        $ar        = 'دولة البائع';
        $enTooltip = "Select your MyFatoorah vendor\'s country. After that, use the API token key that belongs to this country.";
        $arTooltip = 'اختار بلد البائع الخاص بماي فاتورة ومن ثم استخدم رمز التكامل الخاص بتلك الدولة.';

        $this->execute(" 
INSERT INTO `{$pr}settings_descriptions`
(`object_id`, `object_type`, `lang_code`, `value`, `tooltip`)
VALUES 
($countryModeObjectId, 'O', 'en', '$en', '$enTooltip'),
($countryModeObjectId, 'O', 'ar', '$ar', '$arTooltip');
");

        //2- update testMode position
        $this->execute("UPDATE `{$pr}settings_objects` SET `position`='5' WHERE `name`='testMode' AND `section_id`=$mfSectionId AND `section_tab_id`=$mfSectionTabId;");

        //Finally, update the version
        $this->execute("UPDATE {$pr}addons SET version = '2.0.0.2' WHERE `addon`='myfatoorah'");
    }

}
