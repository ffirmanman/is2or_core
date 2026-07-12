<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:37
  from 'tygh:blocks/static_templates/abt__ut2__top_buttons.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fdeaf522_66630589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c0d71658e1f705faf9fcf50946c951354295752' => 
    array (
      0 => 'blocks/static_templates/abt__ut2__top_buttons.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fdeaf522_66630589 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('tmpl_abt__ut2__top_buttons.compare_list.tooltip','view_wishlist','tmpl_abt__ut2__top_buttons.compare_list.tooltip','view_wishlist'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('compared_products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_comparison_products')(''), false, NULL);?>
    <div class="ut2-top-compared-products" id="abt__ut2_compared_products">
        <a class="<?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-compare__a <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products')) > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tmpl_abt__ut2__top_buttons.compare_list.tooltip", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><span><i class="ut2-icon-baseline-equalizer"></i><?php if ($_smarty_tpl->getValue('compared_products')) {?><span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products'))), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_compared_products--></div>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == "A" && !$_smarty_tpl->getValue('hide_wishlist_button')) {?>
    <?php $_smarty_tpl->assign('wishlist_count', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_polyfill_fn_wishlist_get_count')(), false, NULL);?>

    <div class="ut2-top-wishlist-count" id="abt__ut2_wishlist_count">
        <a class="<?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-wishlist__a <?php if ($_smarty_tpl->getValue('wishlist_count') > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><span><i class="ut2-icon-baseline-favorite-border"></i><?php if ($_smarty_tpl->getValue('wishlist_count') > 0) {?><span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist_count')), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_wishlist_count--></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/abt__ut2__top_buttons.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/static_templates/abt__ut2__top_buttons.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('compared_products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_comparison_products')(''), false, NULL);?>
    <div class="ut2-top-compared-products" id="abt__ut2_compared_products">
        <a class="<?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-compare__a <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products')) > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tmpl_abt__ut2__top_buttons.compare_list.tooltip", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><span><i class="ut2-icon-baseline-equalizer"></i><?php if ($_smarty_tpl->getValue('compared_products')) {?><span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products'))), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_compared_products--></div>
<?php }?>

<?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == "A" && !$_smarty_tpl->getValue('hide_wishlist_button')) {?>
    <?php $_smarty_tpl->assign('wishlist_count', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_polyfill_fn_wishlist_get_count')(), false, NULL);?>

    <div class="ut2-top-wishlist-count" id="abt__ut2_wishlist_count">
        <a class="<?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-wishlist__a <?php if ($_smarty_tpl->getValue('wishlist_count') > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><span><i class="ut2-icon-baseline-favorite-border"></i><?php if ($_smarty_tpl->getValue('wishlist_count') > 0) {?><span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist_count')), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_wishlist_count--></div>
<?php }
}
}
}
