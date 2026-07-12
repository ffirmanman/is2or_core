<?php
/* Smarty version 5.4.3, created on 2026-03-08 22:48:36
  from 'tygh:views/products/components/ab__similar_filter.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69add294476810_22048271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85437c3689bbdf92e64384d4aa315d9a165f3d4' => 
    array (
      0 => 'views/products/components/ab__similar_filter.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69add294476810_22048271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('ab__enable_similar_filter_show', false, false, 32);?>

<?php if ($_smarty_tpl->getValue('ab__search_similar_in_category') && $_smarty_tpl->getValue('feature')['filter_id']) {?>
    <?php $_smarty_tpl->assign('ab__enable_similar_filter', true, false, 32);?>
    <?php $_smarty_tpl->assign('ab__enable_similar_filter_show', true, false, 32);?>
    <input type="checkbox" class="cm-ab-similar-filter" name="features_hash[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" data-ab-show-search-button="<?php if ($_smarty_tpl->getValue('ab__features_count') > 2) {?>true<?php } else { ?>false<?php }?>" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_id')), ENT_QUOTES, 'UTF-8');?>
">
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/ab__similar_filter.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/ab__similar_filter.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('ab__enable_similar_filter_show', false, false, 32);?>

<?php if ($_smarty_tpl->getValue('ab__search_similar_in_category') && $_smarty_tpl->getValue('feature')['filter_id']) {?>
    <?php $_smarty_tpl->assign('ab__enable_similar_filter', true, false, 32);?>
    <?php $_smarty_tpl->assign('ab__enable_similar_filter_show', true, false, 32);?>
    <input type="checkbox" class="cm-ab-similar-filter" name="features_hash[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" data-ab-show-search-button="<?php if ($_smarty_tpl->getValue('ab__features_count') > 2) {?>true<?php } else { ?>false<?php }?>" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_id')), ENT_QUOTES, 'UTF-8');?>
">
<?php }
}
}
}
