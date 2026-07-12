<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:14
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7addaea4_09309863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e6928df5137e116b236d0f2196718b176ee0e12' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/styles.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7addaea4_09309863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/abt__unitheme2/styles.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_locations/theme.less"),$_smarty_tpl);?>

<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/components/checkout/abt__ut2_simple_shipping_methods.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/components/checkout/abt__ut2_checkout.less"),$_smarty_tpl);?>

<?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/abt__unitheme2/styles.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_locations/theme.less"),$_smarty_tpl);?>

<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/components/checkout/abt__ut2_simple_shipping_methods.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/components/checkout/abt__ut2_checkout.less"),$_smarty_tpl);?>

<?php }?>
    <?php }
}
}
