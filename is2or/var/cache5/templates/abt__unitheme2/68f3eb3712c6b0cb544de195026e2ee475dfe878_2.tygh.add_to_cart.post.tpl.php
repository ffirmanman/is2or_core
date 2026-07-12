<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/call_requests/hooks/products/add_to_cart.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5c0bb25_97688451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f3eb3712c6b0cb544de195026e2ee475dfe878' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/call_requests/hooks/products/add_to_cart.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6835b9f5c0bb25_97688451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.ab__hide_content.php','function'=>'smarty_block_ab__hide_content',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['details_page']->value) {
if (!$_smarty_tpl->tpl_vars['hide_form']->value && $_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click'] == smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping") && (($tmp = $_smarty_tpl->tpl_vars['show_buy_now']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <?php $_smarty_tpl->_assignInScope('is_not_required_option', true);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required'] === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('is_not_required_option', false);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] == smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] == smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['is_edp'] == smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value || ($_smarty_tpl->tpl_vars['is_not_required_option']->value || $_smarty_tpl->tpl_vars['details_page']->value)) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'link_icon'=>'','id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__outline cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn ty-cr-product-button"), 0, false);
?>
        <?php }?>
    <?php }
}
}
$_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/products/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/products/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['details_page']->value) {
if (!$_smarty_tpl->tpl_vars['hide_form']->value && $_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click'] == smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping") && (($tmp = $_smarty_tpl->tpl_vars['show_buy_now']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <?php $_smarty_tpl->_assignInScope('is_not_required_option', true);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required'] === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('is_not_required_option', false);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] == smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] == smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['is_edp'] == smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value || ($_smarty_tpl->tpl_vars['is_not_required_option']->value || $_smarty_tpl->tpl_vars['details_page']->value)) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'link_icon'=>'','id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__outline cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn ty-cr-product-button"), 0, true);
?>
        <?php }?>
    <?php }
}
}
$_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
