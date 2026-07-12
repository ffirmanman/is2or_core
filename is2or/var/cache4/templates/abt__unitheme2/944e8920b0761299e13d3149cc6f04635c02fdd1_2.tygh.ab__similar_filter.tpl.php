<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/ab__similar_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571cab3b96_78009216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '944e8920b0761299e13d3149cc6f04635c02fdd1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/ab__similar_filter.tpl',
      1 => 1736836655,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834571cab3b96_78009216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('ab__enable_similar_filter_show', false ,false ,32);?>

<?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value && $_smarty_tpl->tpl_vars['feature']->value['filter_id']) {?>
    <?php $_smarty_tpl->_assignInScope('ab__enable_similar_filter', true ,false ,32);?>
    <?php $_smarty_tpl->_assignInScope('ab__enable_similar_filter_show', true ,false ,32);?>
    <input type="checkbox" class="cm-ab-similar-filter" name="features_hash[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" data-ab-show-search-button="<?php if ($_smarty_tpl->tpl_vars['ab__features_count']->value > 2) {?>true<?php } else { ?>false<?php }?>" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/ab__similar_filter.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/ab__similar_filter.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('ab__enable_similar_filter_show', false ,false ,32);?>

<?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value && $_smarty_tpl->tpl_vars['feature']->value['filter_id']) {?>
    <?php $_smarty_tpl->_assignInScope('ab__enable_similar_filter', true ,false ,32);?>
    <?php $_smarty_tpl->_assignInScope('ab__enable_similar_filter_show', true ,false ,32);?>
    <input type="checkbox" class="cm-ab-similar-filter" name="features_hash[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" data-ab-show-search-button="<?php if ($_smarty_tpl->tpl_vars['ab__features_count']->value > 2) {?>true<?php } else { ?>false<?php }?>" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }
}
}
}
