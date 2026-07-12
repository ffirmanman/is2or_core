<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:18:50
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/abt__ut2_dropdown_vertical_mwi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbbaeede71_20837347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '431b791fbf50b7284fc9e39236bd0806576bf092' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/abt__ut2_dropdown_vertical_mwi.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/abt__ut2_dropdown_vertical_mwi.tpl' => 2,
  ),
),false)) {
function content_6835bbbaeede71_20837347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:blocks/abt__ut2_dropdown_vertical_mwi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/abt__ut2_dropdown_vertical_mwi.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/abt__ut2_dropdown_vertical_mwi.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:blocks/abt__ut2_dropdown_vertical_mwi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0, true);
}
}
}
