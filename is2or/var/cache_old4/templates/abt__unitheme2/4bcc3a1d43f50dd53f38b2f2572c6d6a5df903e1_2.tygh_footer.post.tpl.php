<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a019316b4_22767000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bcc3a1d43f50dd53f38b2f2572c6d6a5df903e1' => 
    array (
      0 => 'addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a019316b4_22767000 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ecw.all_lists','clear_list','clear_list','ab__ecw.all_lists','clear_list','clear_list'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['group_comparison_lists'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('comparison_lists', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__extended_comparison_wishlist_get_comparison_lists')(), false, NULL);?><div class="hidden" id="account_info_ab__extended_comparison_wishlist_groups"><ul class="ab-ec-comparison-modal<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_lists')) <= 1) {?> cm-ab-ec-empty-comparison_list<?php }?>"><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.all_lists", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('app')["session"]["comparison_list"]) {
$_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('app')["session"]["comparison_list"]), false, NULL);?><a href="<?php ob_start();
echo rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']);
$_prefixVariable50=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->getValue('products'))."&redirect_url=".$_prefixVariable50)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></a><?php }?></li><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('comparison_lists'), 'comparison_list');
$foreach186DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comparison_list')->value) {
$foreach186DoElse = false;
$_smarty_tpl->assign('products_arr', $_smarty_tpl->getValue('comparison_list')->getProductList(), false, NULL);
$_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('products_arr')), false, NULL);?><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('comparison_list')->getHref())), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('comparison_list')->getTitle()), ENT_QUOTES, 'UTF-8');?>
<span>(<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products_arr'))), ENT_QUOTES, 'UTF-8');?>
)</span></a><a href="<?php ob_start();
echo rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']);
$_prefixVariable51=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->getValue('products'))."&redirect_url=".$_prefixVariable51)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></a></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><!--account_info_ab__extended_comparison_wishlist_groups--></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['group_comparison_lists'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('comparison_lists', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__extended_comparison_wishlist_get_comparison_lists')(), false, NULL);?><div class="hidden" id="account_info_ab__extended_comparison_wishlist_groups"><ul class="ab-ec-comparison-modal<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_lists')) <= 1) {?> cm-ab-ec-empty-comparison_list<?php }?>"><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.all_lists", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('app')["session"]["comparison_list"]) {
$_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('app')["session"]["comparison_list"]), false, NULL);?><a href="<?php ob_start();
echo rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']);
$_prefixVariable52=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->getValue('products'))."&redirect_url=".$_prefixVariable52)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></a><?php }?></li><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('comparison_lists'), 'comparison_list');
$foreach187DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comparison_list')->value) {
$foreach187DoElse = false;
$_smarty_tpl->assign('products_arr', $_smarty_tpl->getValue('comparison_list')->getProductList(), false, NULL);
$_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('products_arr')), false, NULL);?><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('comparison_list')->getHref())), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('comparison_list')->getTitle()), ENT_QUOTES, 'UTF-8');?>
<span>(<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products_arr'))), ENT_QUOTES, 'UTF-8');?>
)</span></a><a href="<?php ob_start();
echo rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']);
$_prefixVariable53=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->getValue('products'))."&redirect_url=".$_prefixVariable53)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></a></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><!--account_info_ab__extended_comparison_wishlist_groups--></div><?php }
}
}
}
