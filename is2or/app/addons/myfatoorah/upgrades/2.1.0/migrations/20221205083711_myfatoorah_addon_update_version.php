<?php

use Phinx\Migration\AbstractMigration;

class MyfatoorahAddonUpdateVersion extends AbstractMigration {

    public function up() {
        fn_clear_cache();
        
        $options = $this->adapter->getOptions();
        $pr      = $options['prefix'];

        
        //upgrage processor
        $mfProcessor   = $this->fetchRow("SELECT `processor_id` FROM `{$pr}payment_processors` WHERE `processor_script`='myfatoorah_payment_processor.php'");
        $mfProcessorId = $mfProcessor['processor_id'];
        
        $tempSQL = "template = 'addons/myfatoorah/views/orders/components/payments/myfatoorah.tpl' WHERE `processor_id`=$mfProcessorId";
        $this->execute("UPDATE {$pr}payment_processors SET processor_$tempSQL");        
        $this->execute("UPDATE {$pr}payments SET $tempSQL");        
        
        
        //add new options
        //get section data
        $mfSection   = $this->fetchRow("SELECT `section_id` FROM `{$pr}settings_sections` WHERE `name`='myfatoorah'");
        $mfSectionId = $mfSection['section_id'];

        $mfSectionTab   = $this->fetchRow("SELECT `section_id` FROM `{$pr}settings_sections` WHERE `parent_id`=$mfSectionId");
        $mfSectionTabId = $mfSectionTab['section_id'];

        //insert option
        $this->execute(" 
INSERT INTO `{$pr}settings_objects`
(`edition_type`, `name`, `section_id`, `section_tab_id`, `type`, `value`, `position`, `is_global`) VALUES 
('ROOT,ULT:VENDOR', 'listOptions', $mfSectionId, $mfSectionTabId, 'S', 'multigateways', '27', 'N'),
('ROOT,ULT:VENDOR', 'isApplePayRegistered', $mfSectionId, $mfSectionTabId, 'C', 'N', '28', 'N');
");

        //insert option desc 
        $mfListOptions       = $this->fetchRow("SELECT `object_id` FROM `{$pr}settings_objects` WHERE `name`='listOptions' and `section_id`=$mfSectionId and `section_tab_id`=$mfSectionTabId");
        $mfIsApplePayRegistered       = $this->fetchRow("SELECT `object_id` FROM `{$pr}settings_objects` WHERE `name`='isApplePayRegistered' and `section_id`=$mfSectionId and `section_tab_id`=$mfSectionTabId");
        
        $mfListOptionsId = $mfListOptions['object_id'];
        $mfIsApplePayRegisteredId = $mfIsApplePayRegistered['object_id'];

        $enLO        = 'List Payment Options';
        $arLO        = 'قائمة خيارات الدفع';
        $enLOTooltip = 'Select how to list payments on your checkout page.';
        $arLOTooltip = 'حدد كيفية سرد الدفع على صفحة الخروج الخاصة بك.';
        
        $enIsApplePayRegistered        = 'Apple Pay Embedded';
        $arIsApplePayRegistered        = 'عرض زر أبل باي';
        $enTooltipIsApplePayRegistered = "Create a folder named \".well-known\" in the root path and copy the apple-developer-merchantid-domain-association file which you received from MyFatoorah support team (tech@myfatoorah.com)";
        $arTooltipIsApplePayRegistered = 'قم بإنشاء مجلد باسم \.well-known\ في المسار الرئيسي للموقع، ثم انسخ ملف apple-developer-merchantid-domain-association الذي استلمته من فريق الدعم بماي فاتورة (tech@myfatoorah.com).';

        $this->execute(" 
INSERT INTO `{$pr}settings_descriptions`
(`object_id`, `object_type`, `lang_code`, `value`, `tooltip`)
VALUES 
($mfListOptionsId, 'O', 'en', '$enLO ', '$enLOTooltip'),
($mfListOptionsId, 'O', 'ar', '$arLO ', '$arLOTooltip'),
($mfIsApplePayRegisteredId, 'O', 'en', '$enIsApplePayRegistered', '$enTooltipIsApplePayRegistered'),
($mfIsApplePayRegisteredId, 'O', 'ar', '$arIsApplePayRegistered', '$arTooltipIsApplePayRegistered');
");

        //update the version
        $this->execute("UPDATE {$pr}addons SET version = '2.1.0' WHERE `addon`='myfatoorah'");
        $this->execute("UPDATE {$pr}addon_descriptions SET name='MyFatoorah' WHERE `addon`='myfatoorah' AND `lang_code`='ar'");
    }

}
