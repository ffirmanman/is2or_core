<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:52
  from 'tygh:addons/abt__unitheme2/hooks/products/product_data.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad95000d3519_61552674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '760a52006302557edf99a38be6b21ebca565391a' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/products/product_data.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/sticky_add_to_cart.tpl' => 2,
  ),
))) {
function content_69ad95000d3519_61552674 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__service_buttons_id", null, null);
if ($_smarty_tpl->getValue('block')['properties']) {?>ut2_list_buttons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
_<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('str_replace')("/","_",substr((string) (($tmp = $_smarty_tpl->getValue('block')['properties']['template'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), (int) 0, (int) -4))), ENT_QUOTES, 'UTF-8');
$_prefixVariable33 = ob_get_clean();
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('selected_layout') ?? null)===null||$tmp==='' ? $_prefixVariable33 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>


<?php $_smarty_tpl->assign('c_name', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
$_smarty_tpl->assign('sticky_add_to_cart_position', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
if ($_smarty_tpl->getValue('sticky_add_to_cart_position') !== "none" && $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('c_name')),"checkout.add..") && ($_REQUEST['dispatch'] == "products.view" || $_REQUEST['dispatch'] === "products.options")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/sticky_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sticky_add_to_cart_position'=>$_smarty_tpl->getValue('sticky_add_to_cart_position')), (int) 0, $_smarty_current_dir);
}?>


<?php $_smarty_tpl->assign('_block', (($tmp = $_smarty_tpl->getValue('block_data') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('block') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('form_capture_id', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('form_capture_id'), null, null);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_capture_id'));?>

    <input type="hidden" name="abt__ut2_variations_block_key" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['block_key'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_block_unique_id')($_smarty_tpl->getValue('_block')['block_id']) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="abt__ut2_variations_template_name" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['template_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_current_template_name')($_smarty_tpl->getValue('_block')) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="abt__ut2_variations_form_name" value="form_open_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/product_data.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/products/product_data.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__service_buttons_id", null, null);
if ($_smarty_tpl->getValue('block')['properties']) {?>ut2_list_buttons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
_<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('str_replace')("/","_",substr((string) (($tmp = $_smarty_tpl->getValue('block')['properties']['template'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), (int) 0, (int) -4))), ENT_QUOTES, 'UTF-8');
$_prefixVariable34 = ob_get_clean();
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('selected_layout') ?? null)===null||$tmp==='' ? $_prefixVariable34 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>


<?php $_smarty_tpl->assign('c_name', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
$_smarty_tpl->assign('sticky_add_to_cart_position', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
if ($_smarty_tpl->getValue('sticky_add_to_cart_position') !== "none" && $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('c_name')),"checkout.add..") && ($_REQUEST['dispatch'] == "products.view" || $_REQUEST['dispatch'] === "products.options")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/sticky_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sticky_add_to_cart_position'=>$_smarty_tpl->getValue('sticky_add_to_cart_position')), (int) 0, $_smarty_current_dir);
}?>


<?php $_smarty_tpl->assign('_block', (($tmp = $_smarty_tpl->getValue('block_data') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('block') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('form_capture_id', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('form_capture_id'), null, null);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_capture_id'));?>

    <input type="hidden" name="abt__ut2_variations_block_key" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['block_key'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_block_unique_id')($_smarty_tpl->getValue('_block')['block_id']) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="abt__ut2_variations_template_name" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['template_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_current_template_name')($_smarty_tpl->getValue('_block')) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="abt__ut2_variations_form_name" value="form_open_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
