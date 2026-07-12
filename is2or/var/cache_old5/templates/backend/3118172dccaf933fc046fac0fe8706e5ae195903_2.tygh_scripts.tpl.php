<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:common/scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2d47475_93481204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3118172dccaf933fc046fac0fe8706e5ae195903' => 
    array (
      0 => 'common/scripts.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2d47475_93481204 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('no_data','text_nothing_found','bulk_edit.unable_to_delete_all_categories','cannot_buy','no_products_selected','error_no_items_selected','text_select_vendor','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','loading','notice','warning','error','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_phone_mask','error_validator_phone_mask_with_phone','error_validator_phone_phone_number_with_country_selection','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','error_validator_color','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','text_block_trial_notice','text_expired_license','file_browser','editing_block','editing_grid','adding_grid','adding_block_to_grid','manage_blocks','add_block','text_position_updating','more','browse','enter_new_lang_code','no_image','cookie_is_disabled','insert_image','image_url','manage','file_uploading_in_progress_please_wait','please_copy_api_key','select_block','block_manager'));
$_smarty_tpl->assign('jquery_version', "3.5.1", false, NULL);
$_smarty_tpl->assign('jquery_migrate_version', "3.3.0", false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('scripts')) {
throw new \Smarty\Exception('block tag \'scripts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('scripts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jquery/jquery-".((string)$_smarty_tpl->getValue('jquery_version')).".min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jquery/jquery-migrate-".((string)$_smarty_tpl->getValue('jquery_migrate_version')).".min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/modernizr/modernizr.custom.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/core.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/history.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/twitterbootstrap/bootstrap.min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/autonumeric/autoNumeric.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/tools/tooltip.min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/bootstrap_switch/js/bootstrapSwitch.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/companies.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/editors/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_wysiwyg_editor']).".editor.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/ajax.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/header.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/components/dropdown.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/quick_menu.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/storefront_switcher.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/company_switcher.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/buttons/update_for_all.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/bulkedit.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/tap.plugin.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/tap_multiple_selection.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/mobile_menu.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/text_toggle.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/libphonenumber-js/libphonenumber-max.js"), $_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/phone_mask.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/autocomplete.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/notifications_center_background.js"), $_smarty_tpl);?>


<?php if ((defined('AREA') ? constant('AREA') : null) !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::STOREFRONT") && $_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::SYSTEM")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/system_color_scheme_identifier.js"), $_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "promo_data", null, null);?>
    <div class="commercial-promotion-text">
        <p><?php echo $_smarty_tpl->getValue('addon_permissions_text')['text'];?>
</p>
    <div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
(function(_, $) {
    _.tr({
        no_data: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        nothing_found: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_nothing_found", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        unable_to_delete_all_categories: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("bulk_edit.unable_to_delete_all_categories", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        cannot_buy: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("cannot_buy", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        no_products_selected: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_products_selected", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_no_items_selected: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_no_items_selected", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_select_vendor: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_select_vendor", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        delete_confirmation: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_confirmation", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_out_of_stock: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_out_of_stock", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        items: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_required_group_product: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_required_group_product", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        save: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("save", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        close: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("close", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        loading: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        notice: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("notice", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        warning: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("warning", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_are_you_sure_to_proceed: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_are_you_sure_to_proceed", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_invalid_url: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_invalid_url", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_email: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_email", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_phone: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_phone", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_phone_mask: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_phone_mask", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_phone_mask_with_phone: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_phone_mask_with_phone", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_phone_phone_number_with_country_selection: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_phone_phone_number_with_country_selection", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_integer: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_integer", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_multiple: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_multiple", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_password: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_password", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_required: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_required", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_zipcode: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_zipcode", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_message: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_message", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_validator_color: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_validator_color", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_page_loading: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_page_loading", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        error_ajax: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("error_ajax", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_changes_not_saved: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_changes_not_saved", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_data_changed: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_data_changed", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        trial_notice: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_block_trial_notice", array("[href]"=>$_smarty_tpl->getValue('config')['resources']['license_url']), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        expired_license: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_expired_license", array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        file_browser: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("file_browser", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        editing_block: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_block", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        editing_grid: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_grid", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        adding_grid: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("adding_grid", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        adding_block_to_grid: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("adding_block_to_grid", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        manage_blocks: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("manage_blocks", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        add_block: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_block", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_position_updating: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_position_updating", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        more: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        browse: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("browse", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        enter_new_lang_code: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("enter_new_lang_code", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        no_image: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        cookie_is_disabled: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("cookie_is_disabled", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        insert_image: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_image", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        image_url: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("image_url", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        manage: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("manage", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        file_uploading_in_progress_please_wait: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("file_uploading_in_progress_please_wait", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        please_copy_api_key: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("please_copy_api_key", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        select_block: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("select_block", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        block_manager: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
    });

    $.extend(_, {
        index_script: '<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) == 'vendor') {
echo strtr((string)$_smarty_tpl->getValue('config')['vendor_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));
} else {
echo strtr((string)$_smarty_tpl->getValue('config')['admin_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));
}?>',
        changes_warning: '<?php echo strtr((string)$_smarty_tpl->getValue('settings')['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        currencies: {
            'primary': {
                'decimals_separator': '<?php echo strtr((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                'thousands_separator': '<?php echo strtr((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                'decimals': '<?php echo strtr((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
            },
            'secondary': {
                'decimals_separator': '<?php echo strtr((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                'thousands_separator': '<?php echo strtr((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                'decimals': '<?php echo strtr((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                'coefficient': '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['coefficient']), ENT_QUOTES, 'UTF-8');?>
'
            }
        },
        default_editor: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['default_wysiwyg_editor']), ENT_QUOTES, 'UTF-8');?>
',
        default_previewer: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['default_image_previewer']), ENT_QUOTES, 'UTF-8');?>
',
        current_path: '<?php echo strtr((string)$_smarty_tpl->getValue('config')['current_path'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        current_location: '<?php echo strtr((string)$_smarty_tpl->getValue('config')['current_location'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        images_dir: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
',
        notice_displaying_time: <?php if ($_smarty_tpl->getValue('settings')['Appearance']['notice_displaying_time']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['notice_displaying_time']), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
        cart_language: '<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
',
        language_direction: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
',
        default_language: '<?php echo htmlspecialchars((string) ((defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
',
        default_country: '<?php echo strtr((string)$_smarty_tpl->getValue('settings')['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        cart_prices_w_taxes: <?php if (($_smarty_tpl->getValue('settings')['Appearance']['cart_prices_w_taxes'] == 'Y')) {?>true<?php } else { ?>false<?php }?>,
        current_url: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        <?php if ($_smarty_tpl->getValue('config')['tweaks']['anti_csrf']) {?>
        security_hash: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_security_hash')('')), ENT_QUOTES, 'UTF-8');?>
', // CSRF form protection key
        <?php }?>
        promo_data: {
            title: '<?php echo strtr((string)$_smarty_tpl->getValue('addon_permissions_text')['title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            text: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'promo_data'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
        },
        phone_validation_mode: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode']), ENT_QUOTES, 'UTF-8');?>
',
        hash_of_available_countries: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_of_available_countries')), ENT_QUOTES, 'UTF-8');?>
',
        product_version: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_version')), ENT_QUOTES, 'UTF-8');?>
',
        product_edition: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_edition')), ENT_QUOTES, 'UTF-8');?>
',
        current_dispatch: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('current_dispatch')), ENT_QUOTES, 'UTF-8');?>
',
        product_build: '<?php echo htmlspecialchars((string) ((defined('PRODUCT_BUILD') ? constant('PRODUCT_BUILD') : null)), ENT_QUOTES, 'UTF-8');?>
',
        current_host: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_host']), ENT_QUOTES, 'UTF-8');?>
',
        allowed_image_extensions: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('allowed_supported_image_extensions'));?>
,
        hash_of_phone_masks: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_of_phone_masks')), ENT_QUOTES, 'UTF-8');?>
',
    });

    $.extend(_, {
        fileManagerOptions: {
            rememberLastDir: true,
            useBrowserHistory: true,
            resizable: false,
            lang: $.ceFileUploader('getAvailableLanguage', _.cart_language),
            ui: ['toolbar', 'tree', 'path', 'stat'],
            uiOptions: {
                toolbar: [
                    ['back', 'forward'],
                    ['mkdir', 'mkfile', 'upload'],
                    ['download'],
                    ['info'],
                    ['quicklook'],
                    ['copy', 'cut', 'paste'],
                    ['rm', 'rename'],
                    ['edit'],
                    ['extract', 'archive'],
                    ['search'],
                    ['view']
                ],
                toolbarExtra: {
                    displayTextLabel: 'none'
                }
            },
            contextmenu: {
                files: [
                    'getfile', '|',
                    'open', 'quicklook', '|',
                    'download', '|',
                    'copy', 'cut', 'paste', 'duplicate', '|',
                    'rm', '|',
                    'edit', 'rename', '|',
                    'archive', 'extract', '|',
                    'info'
                ],
                navbar: [
                    'open', '|',
                    'copy', 'cut', 'paste', 'duplicate', '|',
                    'rm', '|',
                    'info'
                ],
                cwd: [
                    'reload', 'back', '|',
                    'upload', 'mkdir', 'mkfile', 'paste', '|',
                    'sort', '|',
                    'info'
                ],
            },
            requestType: 'post',
            commands : [
            	'archive', 'back', 'chmod', 'colwidth', 'copy', 'cut', 'download', 'duplicate', 'edit', 'extract',
            	'forward', 'fullscreen', 'getfile', 'help', 'home', 'info', 'mkdir', 'mkfile',
            	'open', 'opendir', 'paste', 'quicklook', 'reload', 'rename', 'restore', 'rm',
            	'search', 'sort', 'up', 'upload', 'view'
            ],
            commandsOptions: {
                info: {
                    showHashAlgorisms: [],
                    showHashOpts: []
                }
            }
        }
    });

    $(document).ready(function(){
        $.runCart('A');
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>


<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('scripts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
