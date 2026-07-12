<?php

use Phinx\Migration\AbstractMigration;

class MyfatoorahAddonUpdateVersion extends AbstractMigration {

    public function up() {
        $options = $this->adapter->getOptions();
        $pr      = $options['prefix'];

        //1- add webhookSecretKey option
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
(NULL, 'ROOT,ULT:VENDOR', 'webhookSecretKey', $mfSectionId, $mfSectionTabId, 'I', '', '25', 'N', '', '0');
");

        //insert option desc 
        $mfWebhookSecretKey       = $this->fetchRow("SELECT `object_id` FROM `{$pr}settings_objects` WHERE `name`='webhookSecretKey' and `section_id`=$mfSectionId and `section_tab_id`=$mfSectionTabId");
        $webhookSecretKeyObjectId = $mfWebhookSecretKey['object_id'];

        $en        = 'Webhook Secret Key';
        $ar        = 'مفتاح الويب هوك السري';
        $enTooltip = "Get your Webhook Secret Key from MyFatoorah Vendor Account.";
        $arTooltip = 'يمكنك نسخ مفتاح الويب هوك السري من حساب ماي فاتورة.';

        $this->execute(" 
INSERT INTO `{$pr}settings_descriptions`
(`object_id`, `object_type`, `lang_code`, `value`, `tooltip`)
VALUES 
($webhookSecretKeyObjectId, 'O', 'en', '$en', '$enTooltip'),
($webhookSecretKeyObjectId, 'O', 'ar', '$ar', '$arTooltip');
");

        //Finally, update the version
        $this->execute("UPDATE {$pr}addons SET version = '2.0.0.3' WHERE `addon`='myfatoorah'");
        $this->execute("UPDATE {$pr}addon_descriptions SET name='ماي فاتورة' WHERE `addon`='myfatoorah' AND `lang_code`='ar'");
    }

}
