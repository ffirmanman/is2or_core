<?php
/* Smarty version 5.4.3, created on 2026-03-08 21:52:27
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/is2or_changes/overrides/blocks/vendors/vendor_information.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adc56b7512f2_05309071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c8683f97e9401ecbaeb5549f6e23b5a6da11517' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/is2or_changes/overrides/blocks/vendors/vendor_information.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/company_data.tpl' => 2,
  ),
))) {
function content_69adc56b7512f2_05309071 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_changes/overrides/blocks/vendors';
\Tygh\Languages\Helper::preloadLangVars(array('rating','yes','no','contact_information','shipping_address','rating','yes','no','contact_information','shipping_address'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('vendor_info')['company_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->getValue('vendor_info'),'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'show_links'=>true,'show_address'=>true,'show_location_full'=>true), (int) 0, $_smarty_current_dir);
?>
<div class="ty-company-detail clearfix">

    <div id="block_company_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vendor_info')['company_id']), ENT_QUOTES, 'UTF-8');?>
" class="clearfix">
        <h1 class="ty-mainbox-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vendor_info')['company']), ENT_QUOTES, 'UTF-8');?>
</h1>
        
        <div class="ty-company-detail__info">
            <div class="ty-company-detail__logo">
                <?php $_smarty_tpl->assign('capture_name', "logo_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

            </div>

            <?php if ($_smarty_tpl->getValue('addons')['vendor_rating']['status'] === 'A') {?>
                <div class="ty-company-detail__info-list ty-company-detail_info-first">
                    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("rating", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>
                    <div class="ty-company-detail__control-group">
                        <span>Orders success rate: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_changes_get_company_success_order_rate')($_smarty_tpl->getValue('vendor_info')['company_id'])), ENT_QUOTES, 'UTF-8');?>
%</strong></span>
                    </div>
                    <div class="ty-company-detail__control-group">
                        <span>Total orders: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_changes_get_company_total_orders')($_smarty_tpl->getValue('vendor_info')['company_id'])), ENT_QUOTES, 'UTF-8');?>
</strong></span>
                    </div>
                    <div class="ty-company-detail__control-group">
                        <span>Total products sold: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_changes_get_company_products_sold')($_smarty_tpl->getValue('vendor_info')['company_id'],true)), ENT_QUOTES, 'UTF-8');?>
</strong></span>
                    </div>
                    <div class="ty-company-detail__control-group">
                        <span>Average products rating: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_change_get_company_average_products_rating')($_smarty_tpl->getValue('vendor_info')['company_id'])), ENT_QUOTES, 'UTF-8');?>
</strong> of 5</span>
                    </div>
                </div>
            <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::CONTACT_INFORMATION")], 'field_data', false, 'field_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('field_data')->value) {
$foreach0DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('field_data')['field_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::EMAIL") && ($_smarty_tpl->getValue('field_data')['field_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field_data')['autocomplete_type'] !== "phone-full")) {?>
                        <?php $_smarty_tpl->assign('data_source', $_smarty_tpl->getValue('vendor_info')['fields'], false, NULL);?>
                        <?php if ($_smarty_tpl->getValue('field_data')['is_default'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <?php $_smarty_tpl->assign('field_id', $_smarty_tpl->getValue('field_data')['field_name'], false, NULL);?>
                            <?php $_smarty_tpl->assign('data_source', $_smarty_tpl->getValue('vendor_info'), false, NULL);?>
                        <?php }?>
                        <?php if (!$_smarty_tpl->getValue('data_source')[$_smarty_tpl->getValue('field_id')]) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('data_source')[$_smarty_tpl->getValue('field_id')], false, NULL);?>
                        <div class="ty-company-detail__control-group">
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:profile_field_value"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <label class="ty-company-detail__control-label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_data')['description']), ENT_QUOTES, 'UTF-8');?>
:</label>
                                <?php if ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::EMAIL")) {?>
                                    <span><a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
                                    <span><?php if ($_smarty_tpl->getValue('field_value') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yes", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('field_value'),((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO") || $_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_data')['values'][$_smarty_tpl->getValue('field_value')]), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::FILE") && $_smarty_tpl->getValue('field_value')['file_name']) {?>
                                    <span><a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('field_value')['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')['file_name']), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_id') === "url") {?>                                     <span><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('normalize_url')($_smarty_tpl->getValue('field_value'))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || ($_smarty_tpl->getValue('field_data')['autocomplete_type'] === "phone-full")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('field_value'))), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_state_name')($_smarty_tpl->getValue('field_value'),$_smarty_tpl->getValue('vendor_info')['country'])), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } else { ?>
                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:profile_field_value"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->getValue('obj_id'))))) {?>
                <div class="ty-company-detail__info-list">
                    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_information", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->getValue('obj_id')));?>

                </div>
            <?php }?>

            <?php $_smarty_tpl->assign('address', "address_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('location_full', "location_full_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('address'))) || $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location_full'))) || $_smarty_tpl->getValue('vendor_info')['country']) {?>
                <div class="ty-company-detail__info-list ty-company-detail_info-first">
                    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('address')))) {?>
                        <div class="ty-company-detail__control-group">
                            <span><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('address'));?>
</span>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location_full')))) {?>
                        <div class="ty-company-detail__control-group">
                            <span><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location_full'));?>
</span>
                        </div>
                    <?php }?>

                    <div class="ty-company-detail__control-group">
                        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('vendor_info')['country'])), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/is2or_changes/overrides/blocks/vendors/vendor_information.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/is2or_changes/overrides/blocks/vendors/vendor_information.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('vendor_info')['company_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->getValue('vendor_info'),'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'show_links'=>true,'show_address'=>true,'show_location_full'=>true), (int) 0, $_smarty_current_dir);
?>
<div class="ty-company-detail clearfix">

    <div id="block_company_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vendor_info')['company_id']), ENT_QUOTES, 'UTF-8');?>
" class="clearfix">
        <h1 class="ty-mainbox-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vendor_info')['company']), ENT_QUOTES, 'UTF-8');?>
</h1>
        
        <div class="ty-company-detail__info">
            <div class="ty-company-detail__logo">
                <?php $_smarty_tpl->assign('capture_name', "logo_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

            </div>

            <?php if ($_smarty_tpl->getValue('addons')['vendor_rating']['status'] === 'A') {?>
                <div class="ty-company-detail__info-list ty-company-detail_info-first">
                    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("rating", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>
                    <div class="ty-company-detail__control-group">
                        <span>Orders success rate: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_changes_get_company_success_order_rate')($_smarty_tpl->getValue('vendor_info')['company_id'])), ENT_QUOTES, 'UTF-8');?>
%</strong></span>
                    </div>
                    <div class="ty-company-detail__control-group">
                        <span>Total orders: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_changes_get_company_total_orders')($_smarty_tpl->getValue('vendor_info')['company_id'])), ENT_QUOTES, 'UTF-8');?>
</strong></span>
                    </div>
                    <div class="ty-company-detail__control-group">
                        <span>Total products sold: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_changes_get_company_products_sold')($_smarty_tpl->getValue('vendor_info')['company_id'],true)), ENT_QUOTES, 'UTF-8');?>
</strong></span>
                    </div>
                    <div class="ty-company-detail__control-group">
                        <span>Average products rating: <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_change_get_company_average_products_rating')($_smarty_tpl->getValue('vendor_info')['company_id'])), ENT_QUOTES, 'UTF-8');?>
</strong> of 5</span>
                    </div>
                </div>
            <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::CONTACT_INFORMATION")], 'field_data', false, 'field_id');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('field_data')->value) {
$foreach1DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('field_data')['field_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::EMAIL") && ($_smarty_tpl->getValue('field_data')['field_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field_data')['autocomplete_type'] !== "phone-full")) {?>
                        <?php $_smarty_tpl->assign('data_source', $_smarty_tpl->getValue('vendor_info')['fields'], false, NULL);?>
                        <?php if ($_smarty_tpl->getValue('field_data')['is_default'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <?php $_smarty_tpl->assign('field_id', $_smarty_tpl->getValue('field_data')['field_name'], false, NULL);?>
                            <?php $_smarty_tpl->assign('data_source', $_smarty_tpl->getValue('vendor_info'), false, NULL);?>
                        <?php }?>
                        <?php if (!$_smarty_tpl->getValue('data_source')[$_smarty_tpl->getValue('field_id')]) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('data_source')[$_smarty_tpl->getValue('field_id')], false, NULL);?>
                        <div class="ty-company-detail__control-group">
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:profile_field_value"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <label class="ty-company-detail__control-label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_data')['description']), ENT_QUOTES, 'UTF-8');?>
:</label>
                                <?php if ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::EMAIL")) {?>
                                    <span><a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
                                    <span><?php if ($_smarty_tpl->getValue('field_value') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yes", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('field_value'),((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO") || $_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_data')['values'][$_smarty_tpl->getValue('field_value')]), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::FILE") && $_smarty_tpl->getValue('field_value')['file_name']) {?>
                                    <span><a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('field_value')['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')['file_name']), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_id') === "url") {?>                                     <span><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('normalize_url')($_smarty_tpl->getValue('field_value'))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || ($_smarty_tpl->getValue('field_data')['autocomplete_type'] === "phone-full")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('field_value'))), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } elseif ($_smarty_tpl->getValue('field_data')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
                                    <span><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_state_name')($_smarty_tpl->getValue('field_value'),$_smarty_tpl->getValue('vendor_info')['country'])), ENT_QUOTES, 'UTF-8');?>
</bdi></span>
                                <?php } else { ?>
                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:profile_field_value"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->getValue('obj_id'))))) {?>
                <div class="ty-company-detail__info-list">
                    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_information", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "profile_fields_".((string)$_smarty_tpl->getValue('obj_id')));?>

                </div>
            <?php }?>

            <?php $_smarty_tpl->assign('address', "address_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('location_full', "location_full_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('address'))) || $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location_full'))) || $_smarty_tpl->getValue('vendor_info')['country']) {?>
                <div class="ty-company-detail__info-list ty-company-detail_info-first">
                    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('address')))) {?>
                        <div class="ty-company-detail__control-group">
                            <span><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('address'));?>
</span>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location_full')))) {?>
                        <div class="ty-company-detail__control-group">
                            <span><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location_full'));?>
</span>
                        </div>
                    <?php }?>

                    <div class="ty-company-detail__control-group">
                        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('vendor_info')['country'])), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
}
