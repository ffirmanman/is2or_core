<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571d5f0c21_81428965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f48c3da1b56125ee9477a36cf5b8ea071768d751' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/promotions/list.tpl' => 2,
  ),
),false)) {
function content_6834571d5f0c21_81428965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['promotions'] && smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions']) > 1) {?>
    <?php $_smarty_tpl->_assignInScope('items', fn_ab__dotd_get_promotions(array('promotion_id'=>array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/promotions/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('promotions'=>$_smarty_tpl->tpl_vars['items']->value[0],'show_chains'=>false), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['promotions'] && smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions']) > 1) {?>
    <?php $_smarty_tpl->_assignInScope('items', fn_ab__dotd_get_promotions(array('promotion_id'=>array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/promotions/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('promotions'=>$_smarty_tpl->tpl_vars['items']->value[0],'show_chains'=>false), 0, true);
}
}
}
}
