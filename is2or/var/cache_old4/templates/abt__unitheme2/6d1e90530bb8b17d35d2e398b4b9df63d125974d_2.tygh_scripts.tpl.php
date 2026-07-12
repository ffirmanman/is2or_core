<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:common/scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01a50e81_18841906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d1e90530bb8b17d35d2e398b4b9df63d125974d' => 
    array (
      0 => 'common/scripts.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a01a50e81_18841906 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.sku_copy_status_success','abt__ut2.sku_copy_status_fail','sku','copied','cannot_buy','no_products_selected','error_no_items_selected','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','notice','warning','error','empty','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_phone_mask','error_validator_phone_mask_with_phone','error_validator_phone_phone_number_with_country_selection','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','placing_order','order_was_not_placed','file_browser','browse','more','text_no_products_found','cookie_is_disabled','insert_image','image_url','loading','product_in_wishlist','abt__ut2.add_to_wishlist.tooltip','product_added_to_cl','add_to_comparison_list','text_editing','save','cancel','of','abt__ut2.link_copied','abt__ut2.product_reviews.all_reviews','abt__ut2.product_reviews.customer_review','abt__ut2.product_reviews.photo_n_of','abt__ut2.sku_copy_status_success','abt__ut2.sku_copy_status_fail','sku','copied','cannot_buy','no_products_selected','error_no_items_selected','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','notice','warning','error','empty','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_phone_mask','error_validator_phone_mask_with_phone','error_validator_phone_phone_number_with_country_selection','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','placing_order','order_was_not_placed','file_browser','browse','more','text_no_products_found','cookie_is_disabled','insert_image','image_url','loading','product_in_wishlist','abt__ut2.add_to_wishlist.tooltip','product_added_to_cl','add_to_comparison_list','text_editing','save','cancel','of','abt__ut2.link_copied','abt__ut2.product_reviews.all_reviews','abt__ut2.product_reviews.customer_review','abt__ut2.product_reviews.photo_n_of'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_jquery_version')("main")), ENT_QUOTES, 'UTF-8');
$_prefixVariable54=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jquery/jquery-".$_prefixVariable54.".min.js",'no-defer'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('scripts')) {
throw new \Smarty\Exception('block tag \'scripts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('scripts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js",'no-defer'=>true), $_smarty_tpl);?>


    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/modernizr/modernizr.custom.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/core.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/ajax.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/history.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/autonumeric/autoNumeric.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"), $_smarty_tpl);?>


<?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/tools/tooltip.min.js"), $_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/editors/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_wysiwyg_editor']).".editor.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/responsive.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/autosize/jquery.autosize.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/live_editor_mode.js"), $_smarty_tpl);?>

<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {

    _.tr({
        abt__ut2__sku_copy_status_success: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sku_copy_status_success", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        abt__ut2__sku_copy_status_fail: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sku_copy_status_fail", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        sku: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        copied: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("copied", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
        empty: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("empty", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
        placing_order: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("placing_order", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        order_was_not_placed: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("order_was_not_placed", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        file_browser: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("file_browser", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        browse: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("browse", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        more: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_no_products_found: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products_found", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
        loading: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        product_in_wishlist:'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_in_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        'abt__ut2.add_to_wishlist.tooltip':'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.add_to_wishlist.tooltip", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        product_added_to_cl:'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_added_to_cl", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        add_to_comparison_list:'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_editing_raw: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_editing", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        save_raw: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("save", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        cancel_raw: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        abt__ut2_of: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("of", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.link_copied': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.link_copied", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.product_reviews.all_reviews': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.all_reviews", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.product_reviews.customer_review': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_review", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.product_reviews.photo_n_of': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.photo_n_of", [], $_smarty_tpl->getSmarty()->getLanguage());?>
'
    });

    $.extend(_, {
        index_script: '<?php echo strtr((string)$_smarty_tpl->getValue('config')['customer_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        changes_warning: /*'<?php echo strtr((string)$_smarty_tpl->getValue('settings')['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'*/'N',
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
        regexp: [],
        current_url: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        current_host: '<?php echo strtr((string)$_smarty_tpl->getValue('config')['current_host'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        init_context: '<?php echo strtr((string)$_REQUEST['init_context'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        phone_validation_mode: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode']), ENT_QUOTES, 'UTF-8');?>
',
        hash_of_available_countries: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_of_available_countries')), ENT_QUOTES, 'UTF-8');?>
',
        hash_of_phone_masks: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_of_phone_masks')), ENT_QUOTES, 'UTF-8');?>
',
        deferred_scripts: []
    });

    <?php if ($_smarty_tpl->getValue('live_editor_objects')) {?>
        $.extend(_, {
            live_editor_mode: true,
            live_editor_objects: <?php echo json_encode($_smarty_tpl->getValue('live_editor_objects'));?>

        });
    <?php }?>

    <?php if (!$_REQUEST['init_context']) {?>

        $(document).ready(function(){
            turnOffPhoneSafariAutofill();

            $.runCart('C');
        });

        $.ceEvent('on', 'ce.commoninit', function () {
            turnOffPhoneSafariAutofill();
        });

        function turnOffPhoneSafariAutofill () {
            if ($.browser.safari) {
                const searchFakeSpan = '<span data-ca-validator="ignore" style="position: absolute; overflow: hidden; width: 1px; height: 1px;">search</span>';

                $('.autofill-off').each(function() {
                    const $field = $(this);
                    if ($field.data('caAutofillIsSet')) {
                        return;
                    }
                    $('[for="' + $field.attr('id') + '"').append(searchFakeSpan);
                    $field.data('caAutofillIsSet', true)
                })

                $('[x-autocompletetype="tel"]').removeAttr('x-autocompletetype');
                var $maskPhoneLabels =  $('.cm-mask-phone-label:not(.autofill-on)');
                if (!$maskPhoneLabels.length || $('[data-ca-validator="ignore"]', $maskPhoneLabels).length) {
                    return;
                }
                $maskPhoneLabels.append(searchFakeSpan);
            }
        }

    <?php }?>

    <?php if ($_smarty_tpl->getValue('config')['tweaks']['anti_csrf']) {?>
        _.security_hash = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_security_hash')('')), ENT_QUOTES, 'UTF-8');?>
';
    <?php }?>
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/libphonenumber-js/libphonenumber-max.js"), $_smarty_tpl);?>

<?php }
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/phone_mask.js"), $_smarty_tpl);?>



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
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scripts.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/scripts.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_jquery_version')("main")), ENT_QUOTES, 'UTF-8');
$_prefixVariable55=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jquery/jquery-".$_prefixVariable55.".min.js",'no-defer'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('scripts')) {
throw new \Smarty\Exception('block tag \'scripts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('scripts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js",'no-defer'=>true), $_smarty_tpl);?>


    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/modernizr/modernizr.custom.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/core.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/ajax.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/history.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/autonumeric/autoNumeric.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"), $_smarty_tpl);?>


<?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/tools/tooltip.min.js"), $_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/editors/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_wysiwyg_editor']).".editor.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/responsive.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/autosize/jquery.autosize.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/live_editor_mode.js"), $_smarty_tpl);?>

<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {

    _.tr({
        abt__ut2__sku_copy_status_success: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sku_copy_status_success", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        abt__ut2__sku_copy_status_fail: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sku_copy_status_fail", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        sku: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        copied: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("copied", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
        empty: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("empty", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
        placing_order: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("placing_order", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        order_was_not_placed: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("order_was_not_placed", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        file_browser: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("file_browser", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        browse: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("browse", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        more: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_no_products_found: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products_found", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
        loading: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        product_in_wishlist:'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_in_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        'abt__ut2.add_to_wishlist.tooltip':'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.add_to_wishlist.tooltip", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        product_added_to_cl:'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_added_to_cl", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        add_to_comparison_list:'<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        text_editing_raw: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_editing", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        save_raw: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("save", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        cancel_raw: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        abt__ut2_of: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("of", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.link_copied': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.link_copied", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.product_reviews.all_reviews': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.all_reviews", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.product_reviews.customer_review': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_review", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        'abt__ut2.product_reviews.photo_n_of': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.photo_n_of", [], $_smarty_tpl->getSmarty()->getLanguage());?>
'
    });

    $.extend(_, {
        index_script: '<?php echo strtr((string)$_smarty_tpl->getValue('config')['customer_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        changes_warning: /*'<?php echo strtr((string)$_smarty_tpl->getValue('settings')['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'*/'N',
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
        regexp: [],
        current_url: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        current_host: '<?php echo strtr((string)$_smarty_tpl->getValue('config')['current_host'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        init_context: '<?php echo strtr((string)$_REQUEST['init_context'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        phone_validation_mode: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode']), ENT_QUOTES, 'UTF-8');?>
',
        hash_of_available_countries: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_of_available_countries')), ENT_QUOTES, 'UTF-8');?>
',
        hash_of_phone_masks: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_of_phone_masks')), ENT_QUOTES, 'UTF-8');?>
',
        deferred_scripts: []
    });

    <?php if ($_smarty_tpl->getValue('live_editor_objects')) {?>
        $.extend(_, {
            live_editor_mode: true,
            live_editor_objects: <?php echo json_encode($_smarty_tpl->getValue('live_editor_objects'));?>

        });
    <?php }?>

    <?php if (!$_REQUEST['init_context']) {?>

        $(document).ready(function(){
            turnOffPhoneSafariAutofill();

            $.runCart('C');
        });

        $.ceEvent('on', 'ce.commoninit', function () {
            turnOffPhoneSafariAutofill();
        });

        function turnOffPhoneSafariAutofill () {
            if ($.browser.safari) {
                const searchFakeSpan = '<span data-ca-validator="ignore" style="position: absolute; overflow: hidden; width: 1px; height: 1px;">search</span>';

                $('.autofill-off').each(function() {
                    const $field = $(this);
                    if ($field.data('caAutofillIsSet')) {
                        return;
                    }
                    $('[for="' + $field.attr('id') + '"').append(searchFakeSpan);
                    $field.data('caAutofillIsSet', true)
                })

                $('[x-autocompletetype="tel"]').removeAttr('x-autocompletetype');
                var $maskPhoneLabels =  $('.cm-mask-phone-label:not(.autofill-on)');
                if (!$maskPhoneLabels.length || $('[data-ca-validator="ignore"]', $maskPhoneLabels).length) {
                    return;
                }
                $maskPhoneLabels.append(searchFakeSpan);
            }
        }

    <?php }?>

    <?php if ($_smarty_tpl->getValue('config')['tweaks']['anti_csrf']) {?>
        _.security_hash = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_security_hash')('')), ENT_QUOTES, 'UTF-8');?>
';
    <?php }?>
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/libphonenumber-js/libphonenumber-max.js"), $_smarty_tpl);?>

<?php }
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/phone_mask.js"), $_smarty_tpl);?>



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
}
