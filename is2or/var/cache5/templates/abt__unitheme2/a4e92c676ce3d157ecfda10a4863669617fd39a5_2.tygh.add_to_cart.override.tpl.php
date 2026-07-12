<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/add_to_cart.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5bc3603_31681193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e92c676ce3d157ecfda10a4863669617fd39a5' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/add_to_cart.override.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
),false)) {
function content_6835b9f5bc3603_31681193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.ab__hide_content.php','function'=>'smarty_block_ab__hide_content',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value && $_smarty_tpl->tpl_vars['force_show_add_to_cart_button']->value != "Y") {?>

    <?php if ($_REQUEST['redirect_url']) {?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_REQUEST['redirect_url']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon" || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon_button") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', false);?>
        <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "text") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_icon', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {?>
        <span class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-ab-load-select-variation-content" data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?><span><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i></span><?php }
if ($_smarty_tpl->tpl_vars['but_text']->value) {?><bdi><?php echo $_smarty_tpl->__("add_to_cart");?>
</bdi><?php }
if ($_smarty_tpl->tpl_vars['but_icon']->value) {?></span><?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"products.ut2_select_variation?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'text'=>$_smarty_tpl->__("add_to_cart"),'id'=>"ut2_select_variation_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'link_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value,'link_icon_first'=>true,'title'=>$_smarty_tpl->__("add_to_cart"),'link_meta'=>"ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"ut2_select_variantion")), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/add_to_cart.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/add_to_cart.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value && $_smarty_tpl->tpl_vars['force_show_add_to_cart_button']->value != "Y") {?>

    <?php if ($_REQUEST['redirect_url']) {?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_REQUEST['redirect_url']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('current_url', urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon" || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "icon_button") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', false);?>
        <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == "text") {?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('but_icon', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('but_icon', "ut2-icon-use_icon_cart");?>
        <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") ?? null : $tmp));?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {?>
        <span class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-ab-load-select-variation-content" data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?><span><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i></span><?php }
if ($_smarty_tpl->tpl_vars['but_text']->value) {?><bdi><?php echo $_smarty_tpl->__("add_to_cart");?>
</bdi><?php }
if ($_smarty_tpl->tpl_vars['but_icon']->value) {?></span><?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"products.ut2_select_variation?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'text'=>$_smarty_tpl->__("add_to_cart"),'id'=>"ut2_select_variation_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'link_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value,'link_icon_first'=>true,'title'=>$_smarty_tpl->__("add_to_cart"),'link_meta'=>"ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"ut2_select_variantion")), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
