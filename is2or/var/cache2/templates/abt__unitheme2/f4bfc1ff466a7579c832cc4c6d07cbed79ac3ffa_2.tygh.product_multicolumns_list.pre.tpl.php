<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/products/product_multicolumns_list.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21b9d7fe6_46342460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4bfc1ff466a7579c832cc4c6d07cbed79ac3ffa' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/products/product_multicolumns_list.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21b9d7fe6_46342460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
    <?php echo smarty_function_counter(array('name'=>"products_multicolumns",'assign'=>"c",'print'=>false),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['c']->value <= $_smarty_tpl->tpl_vars['ab__preload_settings']->value['products_multicolumns']-$_smarty_tpl->tpl_vars['ab__preload_settings']->value['ignore_products_multicolumns']) {?>
        <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['ab__preload_settings']->value['products_multicolumns_pov'] ,false ,2);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/products/product_multicolumns_list.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/products/product_multicolumns_list.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
    <?php echo smarty_function_counter(array('name'=>"products_multicolumns",'assign'=>"c",'print'=>false),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['c']->value <= $_smarty_tpl->tpl_vars['ab__preload_settings']->value['products_multicolumns']-$_smarty_tpl->tpl_vars['ab__preload_settings']->value['ignore_products_multicolumns']) {?>
        <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['ab__preload_settings']->value['products_multicolumns_pov'] ,false ,2);?>
    <?php }
}
}
}
}
