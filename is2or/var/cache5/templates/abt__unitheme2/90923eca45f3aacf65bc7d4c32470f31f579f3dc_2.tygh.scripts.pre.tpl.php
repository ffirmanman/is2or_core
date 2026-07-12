<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/scripts.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f6971011_01809124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90923eca45f3aacf65bc7d4c32470f31f579f3dc' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/scripts.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f6971011_01809124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable46 = ob_get_clean();
$_smarty_tpl->_assignInScope('assign_data', array("config"=>array("current_url"=>$_prefixVariable46)));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "products" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "view") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['assign_data']) ? $_smarty_tpl->tpl_vars['assign_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["product"] = array("main_category"=>$_smarty_tpl->tpl_vars['product']->value['main_category'],"price"=>$_smarty_tpl->tpl_vars['product']->value['price']);
$_smarty_tpl->_assignInScope('assign_data', $_tmp_array);
}
echo '<script'; ?>
 data-no-defer><?php $_smarty_tpl->_assignInScope('buttons_data', fn_abt__ut2_get_cart_wl_compare_state());?>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['ab__device'], ENT_QUOTES, 'UTF-8');?>
',<?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {
$_smarty_tpl->_assignInScope('product_details_view', fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']));?>details_layout : '<?php echo htmlspecialchars((string) rtrim(smarty_modifier_trim(end(smarty_modifier_explode("/",$_smarty_tpl->tpl_vars['product_details_view']->value))),".tpl"), ENT_QUOTES, 'UTF-8');?>
',<?php }?>temporary: { },assign_data: '<?php echo htmlspecialchars((string) fn_abt__ut2_urlsafe_text_encrypt(json_encode($_smarty_tpl->tpl_vars['assign_data']->value,JSON_INVALID_UTF8_IGNORE)), ENT_QUOTES, 'UTF-8');?>
',request: '<?php echo htmlspecialchars((string) fn_abt__ut2_urlsafe_text_encrypt(json_encode($_REQUEST,JSON_INVALID_UTF8_IGNORE)), ENT_QUOTES, 'UTF-8');?>
',templates: { },cart: <?php echo json_encode($_smarty_tpl->tpl_vars['buttons_data']->value['cart']);?>
,wishlist: <?php echo json_encode($_smarty_tpl->tpl_vars['buttons_data']->value['wishlist']);?>
,compare: <?php echo json_encode($_smarty_tpl->tpl_vars['buttons_data']->value['compare']);?>
}});}(Tygh, Tygh.$))<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_dialog_modal_popup.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_fly_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_discussion.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_video_banners.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_cart_status'] !== 'not-show' || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_favorite_compare_status'] === "Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_cart.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['status'] == "A" && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_variation_images.js"),$_smarty_tpl);?>

<?php }?>

<?php if (in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points")) || in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points"))) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_hover_gallery.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/ut2_select_variation.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['bfcache'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_bfcache.js"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable47 = ob_get_clean();
$_smarty_tpl->_assignInScope('assign_data', array("config"=>array("current_url"=>$_prefixVariable47)));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "products" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "view") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['assign_data']) ? $_smarty_tpl->tpl_vars['assign_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["product"] = array("main_category"=>$_smarty_tpl->tpl_vars['product']->value['main_category'],"price"=>$_smarty_tpl->tpl_vars['product']->value['price']);
$_smarty_tpl->_assignInScope('assign_data', $_tmp_array);
}
echo '<script'; ?>
 data-no-defer><?php $_smarty_tpl->_assignInScope('buttons_data', fn_abt__ut2_get_cart_wl_compare_state());?>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['ab__device'], ENT_QUOTES, 'UTF-8');?>
',<?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {
$_smarty_tpl->_assignInScope('product_details_view', fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']));?>details_layout : '<?php echo htmlspecialchars((string) rtrim(smarty_modifier_trim(end(smarty_modifier_explode("/",$_smarty_tpl->tpl_vars['product_details_view']->value))),".tpl"), ENT_QUOTES, 'UTF-8');?>
',<?php }?>temporary: { },assign_data: '<?php echo htmlspecialchars((string) fn_abt__ut2_urlsafe_text_encrypt(json_encode($_smarty_tpl->tpl_vars['assign_data']->value,JSON_INVALID_UTF8_IGNORE)), ENT_QUOTES, 'UTF-8');?>
',request: '<?php echo htmlspecialchars((string) fn_abt__ut2_urlsafe_text_encrypt(json_encode($_REQUEST,JSON_INVALID_UTF8_IGNORE)), ENT_QUOTES, 'UTF-8');?>
',templates: { },cart: <?php echo json_encode($_smarty_tpl->tpl_vars['buttons_data']->value['cart']);?>
,wishlist: <?php echo json_encode($_smarty_tpl->tpl_vars['buttons_data']->value['wishlist']);?>
,compare: <?php echo json_encode($_smarty_tpl->tpl_vars['buttons_data']->value['compare']);?>
}});}(Tygh, Tygh.$))<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_dialog_modal_popup.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_fly_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_discussion.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_video_banners.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_cart_status'] !== 'not-show' || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_favorite_compare_status'] === "Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_cart.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['status'] == "A" && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_variation_images.js"),$_smarty_tpl);?>

<?php }?>

<?php if (in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points")) || in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points"))) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_hover_gallery.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/ut2_select_variation.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['bfcache'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_bfcache.js"),$_smarty_tpl);?>

<?php }
}
}
}
