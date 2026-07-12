<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:01
  from 'tygh:addons/abt__unitheme2/hooks/index/scripts.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f710ae585_83541161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae734d9f2f65b69a45582249951896435b925e2' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/scripts.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f710ae585_83541161 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable46 = ob_get_clean();
$_smarty_tpl->assign('assign_data', array("config"=>array("current_url"=>$_prefixVariable46)), false, NULL);
if ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('runtime')['mode'] == "view") {
$_tmp_array = $_smarty_tpl->getValue('assign_data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["product"] = array("main_category"=>$_smarty_tpl->getValue('product')['main_category'],"price"=>$_smarty_tpl->getValue('product')['price']);
$_smarty_tpl->assign('assign_data', $_tmp_array, false, NULL);
}
echo '<script'; ?>
 data-no-defer><?php $_smarty_tpl->assign('buttons_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_cart_wl_compare_state')(), false, NULL);?>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->getValue('settings')['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['controller']), ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['mode']), ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['ab__device']), ENT_QUOTES, 'UTF-8');?>
',<?php if ($_smarty_tpl->getValue('product')['product_id']) {
$_smarty_tpl->assign('product_details_view', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_details_view')($_smarty_tpl->getValue('product')['product_id']), false, NULL);?>details_layout : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('end')($_smarty_tpl->getSmarty()->getModifierCallback('explode')("/",$_smarty_tpl->getValue('product_details_view')))),".tpl")), ENT_QUOTES, 'UTF-8');?>
',<?php }?>temporary: { },assign_data: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_urlsafe_text_encrypt')(json_encode($_smarty_tpl->getValue('assign_data'), (int) JSON_INVALID_UTF8_IGNORE))), ENT_QUOTES, 'UTF-8');?>
',request: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_urlsafe_text_encrypt')(json_encode($_REQUEST, (int) JSON_INVALID_UTF8_IGNORE))), ENT_QUOTES, 'UTF-8');?>
',templates: { },cart: <?php echo json_encode($_smarty_tpl->getValue('buttons_data')['cart']);?>
,wishlist: <?php echo json_encode($_smarty_tpl->getValue('buttons_data')['wishlist']);?>
,compare: <?php echo json_encode($_smarty_tpl->getValue('buttons_data')['compare']);?>
}});}(Tygh, Tygh.$))<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_dialog_modal_popup.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_fly_menu.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_discussion.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_video_banners.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_cart_status'] !== 'not-show' || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_favorite_compare_status'] === "Y") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_cart.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['product_variations']['status'] == "A" && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_variation_images.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_hover_gallery.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/ut2_select_variation.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['bfcache'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_bfcache.js"), $_smarty_tpl);?>

<?php }
if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] === "A") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_customer_reviews.js"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/scripts.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/index/scripts.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable47 = ob_get_clean();
$_smarty_tpl->assign('assign_data', array("config"=>array("current_url"=>$_prefixVariable47)), false, NULL);
if ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('runtime')['mode'] == "view") {
$_tmp_array = $_smarty_tpl->getValue('assign_data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["product"] = array("main_category"=>$_smarty_tpl->getValue('product')['main_category'],"price"=>$_smarty_tpl->getValue('product')['price']);
$_smarty_tpl->assign('assign_data', $_tmp_array, false, NULL);
}
echo '<script'; ?>
 data-no-defer><?php $_smarty_tpl->assign('buttons_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_cart_wl_compare_state')(), false, NULL);?>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->getValue('settings')['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['controller']), ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['mode']), ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['ab__device']), ENT_QUOTES, 'UTF-8');?>
',<?php if ($_smarty_tpl->getValue('product')['product_id']) {
$_smarty_tpl->assign('product_details_view', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_details_view')($_smarty_tpl->getValue('product')['product_id']), false, NULL);?>details_layout : '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('end')($_smarty_tpl->getSmarty()->getModifierCallback('explode')("/",$_smarty_tpl->getValue('product_details_view')))),".tpl")), ENT_QUOTES, 'UTF-8');?>
',<?php }?>temporary: { },assign_data: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_urlsafe_text_encrypt')(json_encode($_smarty_tpl->getValue('assign_data'), (int) JSON_INVALID_UTF8_IGNORE))), ENT_QUOTES, 'UTF-8');?>
',request: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_urlsafe_text_encrypt')(json_encode($_REQUEST, (int) JSON_INVALID_UTF8_IGNORE))), ENT_QUOTES, 'UTF-8');?>
',templates: { },cart: <?php echo json_encode($_smarty_tpl->getValue('buttons_data')['cart']);?>
,wishlist: <?php echo json_encode($_smarty_tpl->getValue('buttons_data')['wishlist']);?>
,compare: <?php echo json_encode($_smarty_tpl->getValue('buttons_data')['compare']);?>
}});}(Tygh, Tygh.$))<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_dialog_modal_popup.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_fly_menu.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_discussion.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_video_banners.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_cart_status'] !== 'not-show' || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_favorite_compare_status'] === "Y") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_cart.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['product_variations']['status'] == "A" && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_variation_images.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_hover_gallery.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/ut2_select_variation.js"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['bfcache'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_bfcache.js"), $_smarty_tpl);?>

<?php }
if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] === "A") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_customer_reviews.js"), $_smarty_tpl);?>

<?php }
}
}
}
