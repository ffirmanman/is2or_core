<?php

use Phinx\Migration\AbstractMigration;

class MyfatoorahAddonUpdateVersion extends AbstractMigration {

    public function up() {
        $options = $this->adapter->getOptions();
        $pr      = $options['prefix'];

        //update the version
        $this->execute("UPDATE {$pr}addons SET version = '2.0.0.1' WHERE `addon`='myfatoorah'");

        //  1 add save card feature
        $mfSection      = $this->fetchRow("SELECT `section_id` FROM `{$pr}settings_sections` WHERE `name`='myfatoorah'");
        $mfSectionId    = $mfSection['section_id'];

        $mfSectionTab   = $this->fetchRow("SELECT `section_id` FROM `{$pr}settings_sections` WHERE `parent_id`=$mfSectionId");
        $mfSectionTabId = $mfSectionTab['section_id'];

        $this->execute(" 
INSERT INTO `{$pr}settings_objects`
(`object_id`, `edition_type`, `name`, `section_id`, `section_tab_id`, `type`, `value`, `position`, `is_global`, `handler`, `parent_id`) 
VALUES 
(NULL, 'ROOT,ULT:VENDOR', 'saveCard', $mfSectionId, $mfSectionTabId, 'C', 'N', '30', 'N', '', '0');
");

        //  2 add the Arabic language
        $mfProcessor   = $this->fetchRow("SELECT `processor_id` FROM `{$pr}payment_processors` WHERE `processor_script`='myfatoorah_payment_processor.php'");
        $mfProcessorId = $mfProcessor['processor_id'];
        
        $mfPayment     = $this->fetchRow("SELECT `payment_id`   FROM `{$pr}payments`           WHERE `processor_id`=$mfProcessorId");
        $mfPaymentId   = $mfPayment['payment_id'];
        
        $mfImage       = $this->fetchRow("SELECT `image_id`     FROM `{$pr}images`             WHERE `image_path`='myfatoorah.png'");
        $mfImageId     = $mfImage['image_id'];

        $this->execute(" 
INSERT INTO `{$pr}payment_descriptions`
(`payment`, `description`, `surcharge_title`, `lang_code`, `payment_id`) 
VALUES 
('ماي فاتورة', 'إدفع مع ماي فاتورة', '', 'ar', $mfPaymentId);
");

        $this->execute(" 
INSERT INTO `{$pr}common_descriptions`
(`object_id`, `object_type`, `description`, `lang_code`, `object`, `object_holder`)
VALUES 
($mfImageId, 'image', 'ماي فاتورة', 'ar', '', 'images');
");

        $this->execute(" 
UPDATE `{$pr}common_descriptions` 
SET `description`='MyFatoorah', `object_type`='image' WHERE 
`object_id` = $mfImageId AND 
`lang_code` = 'en' AND 
`object_holder` = 'images';");
    }

}
