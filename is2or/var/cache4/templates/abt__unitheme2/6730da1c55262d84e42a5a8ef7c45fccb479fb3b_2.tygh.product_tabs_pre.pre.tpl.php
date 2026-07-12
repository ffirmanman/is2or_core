<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c9ebd36_00562410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6730da1c55262d84e42a5a8ef7c45fccb479fb3b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl' => 2,
  ),
),false)) {
function content_6834571c9ebd36_00562410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__intelligent_accessories']['display_block'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == 'pre') {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__intelligent_accessories']['display_block'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == 'pre') {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
}
