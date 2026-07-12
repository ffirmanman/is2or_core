<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/additional_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7cbcf249_96953606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d0348add4a02d03b2623e1f7d0cf91c9dda97d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/additional_info.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/coming_soon_notice.tpl' => 2,
  ),
),false)) {
function content_682fdd7cbcf249_96953606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null))) {?>
	<?php $_smarty_tpl->_subTemplateRender("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->tpl_vars['product']->value['avail_since'],'add_to_cart'=>$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/additional_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/products/additional_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null))) {?>
	<?php $_smarty_tpl->_subTemplateRender("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->tpl_vars['product']->value['avail_since'],'add_to_cart'=>$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']), 0, true);
}
}
}
}
