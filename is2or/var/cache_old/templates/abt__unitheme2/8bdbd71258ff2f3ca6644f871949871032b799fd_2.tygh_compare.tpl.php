<?php
/* Smarty version 5.4.3, created on 2026-03-09 04:57:23
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/overrides/views/product_features/compare.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae2903b93df9_55802022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bdbd71258ff2f3ca6644f871949871032b799fd' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/overrides/views/product_features/compare.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/continue_shopping.tpl' => 2,
    'tygh:addons/ab__extended_comparison_wishlist/blocks/products/ab__ecw_list_with_features.tpl' => 2,
  ),
))) {
function content_69ae2903b93df9_55802022 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/overrides/views/product_features';
\Tygh\Languages\Helper::preloadLangVars(array('no_products_selected','ab__ecw.compare.title','compare','ab__ecw.add_more_products','ab__ecw.copy_link_to_compare_list','clear_list','attention','ab__ecw.not_enough_to_compare','no_products_selected','ab__ecw.compare.title','compare','ab__ecw.add_more_products','ab__ecw.copy_link_to_compare_list','clear_list','attention','ab__ecw.not_enough_to_compare'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('comparison_data')) {?><p class="ty-no-items ty-compare__no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_products_selected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p><div class="buttons-container ty-compare__button-empty"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?></div><?php } else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
if ($_smarty_tpl->getValue('ab__ecw_active_comparison_list')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.compare.title", array("[title]"=>$_smarty_tpl->getValue('ab__ecw_active_comparison_list')->getTitle()), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("compare", [], $_smarty_tpl->getSmarty()->getLanguage());
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?><div class="ab-ec-comparison-list"><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('ab__ecw_compare_lists')) > 1) {?><ul><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_lists"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__ecw_compare_lists'), 'comparison_list');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comparison_list')->value) {
$foreach0DoElse = false;
?><li><?php $_smarty_tpl->assign('tag', "a", false, NULL);
if ($_smarty_tpl->getValue('comparison_list')->isActive()) {
$_smarty_tpl->assign('tag', "span", false, NULL);
}?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getValue('comparison_list')->isActive()) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('comparison_list')->getHref())), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-ab-ec-reinited ab-ec-comparison-list__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('comparison_list')->getTitle()), ENT_QUOTES, 'UTF-8');?>
<span class="ab-ec-comparison-list__count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_list')->getProductList())), ENT_QUOTES, 'UTF-8');?>
</span></<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')), ENT_QUOTES, 'UTF-8');?>
></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_lists"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></ul><?php }?><div class="ab-ec-comparison__buttons"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('features_filter_behavior', $_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['features_filter_behavior'], false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__ecw_features_filter", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:features_filter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('features_filter_behavior') == "reload_page") {
if ($_smarty_tpl->getValue('runtime')['action'] == "different_only") {
$_smarty_tpl->assign('text', "different_only", false, NULL);
$_smarty_tpl->assign('action', "show_all", false, NULL);
} else {
$_smarty_tpl->assign('text', "all_features", false, NULL);
$_smarty_tpl->assign('action', "different_only", false, NULL);
}
$_smarty_tpl->assign('additional', '', false, NULL);
if ($_REQUEST['category_id']) {
$_smarty_tpl->assign('additional', "?category_id=".((string)$_REQUEST['category_id']), false, NULL);
}?><a class="ab-ec-filter-features reload ab-ec-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
 cm-ab-ec-reinited" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare.".((string)$_smarty_tpl->getValue('action')).((string)$_smarty_tpl->getValue('additional')))), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-target"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('text'), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php } elseif ($_smarty_tpl->getValue('features_filter_behavior') == "highlight_differences") {
$_smarty_tpl->assign('text', "all_features", false, NULL);?><a href="javascript:void(0)" class="ab-ec-filter-features highlight ab-ec-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
 cm-ab-ec-reinited"><i class="ty-icon-eye-open"></i><i class="ty-icon-eye-close"></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('text'), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:features_filter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__ecw_features_filter');
if ($_smarty_tpl->getValue('ab__ecw_active_comparison_list')) {?><a<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_data')['products']) == 1) {?> class="highlighted"<?php }?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('ab__ecw_active_comparison_list')->getViewMoreHref())), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-plus"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.add_more_products", array("[title]"=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_strtolower')($_smarty_tpl->getValue('ab__ecw_active_comparison_list')->getTitle())), $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }
$_smarty_tpl->assign('products', array(), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('comparison_data')['products'], 'product');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach1DoElse = false;
$_tmp_array = $_smarty_tpl->getValue('products') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('product')['product_id'];
$_smarty_tpl->assign('products', $_tmp_array, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->assign('imloded_products', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('products')), false, NULL);?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.compare?add_to_compare=".((string)$_smarty_tpl->getValue('imloded_products')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" data-cm-ab-ec-copy-from="href" class="cm-ab-ec-copy-to-clipboard cm-ab-ec-reinited"><i class="ty-icon-popup"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.copy_link_to_compare_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php $_smarty_tpl->assign('redirect_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"category_id"), false, NULL);?><a href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('redirect_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->getValue('imloded_products'))."&redirect_url=".$_prefixVariable1)), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-trashcan"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div></div><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_data')['products']) == 1) {?><div class="notification-content alert alert-warning"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("attention", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.not_enough_to_compare", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><?php }
$_smarty_tpl->assign('block', array("block_id"=>"ab__ecw_main_compare","properties"=>array("show_company_name"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"ab__ecw_enable_add_to_compare"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"),"enable_quick_view"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"outside_navigation"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"),"thumbnail_width"=>100,"show_price"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"item_quantity"=>4,"ab__ecw_enable_add_more"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"),"ab__ecw_enable_scroller"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"hide_add_to_cart_button"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"))), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__extended_comparison_wishlist/blocks/products/ab__ecw_list_with_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->getValue('block'),'items'=>$_smarty_tpl->getValue('comparison_data')['products'],'force_display'=>true), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/overrides/views/product_features/compare.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/overrides/views/product_features/compare.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('comparison_data')) {?><p class="ty-no-items ty-compare__no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_products_selected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p><div class="buttons-container ty-compare__button-empty"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?></div><?php } else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
if ($_smarty_tpl->getValue('ab__ecw_active_comparison_list')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.compare.title", array("[title]"=>$_smarty_tpl->getValue('ab__ecw_active_comparison_list')->getTitle()), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("compare", [], $_smarty_tpl->getSmarty()->getLanguage());
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?><div class="ab-ec-comparison-list"><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('ab__ecw_compare_lists')) > 1) {?><ul><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_lists"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__ecw_compare_lists'), 'comparison_list');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comparison_list')->value) {
$foreach2DoElse = false;
?><li><?php $_smarty_tpl->assign('tag', "a", false, NULL);
if ($_smarty_tpl->getValue('comparison_list')->isActive()) {
$_smarty_tpl->assign('tag', "span", false, NULL);
}?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getValue('comparison_list')->isActive()) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('comparison_list')->getHref())), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-ab-ec-reinited ab-ec-comparison-list__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('comparison_list')->getTitle()), ENT_QUOTES, 'UTF-8');?>
<span class="ab-ec-comparison-list__count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_list')->getProductList())), ENT_QUOTES, 'UTF-8');?>
</span></<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')), ENT_QUOTES, 'UTF-8');?>
></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_lists"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></ul><?php }?><div class="ab-ec-comparison__buttons"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('features_filter_behavior', $_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['features_filter_behavior'], false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__ecw_features_filter", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:features_filter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('features_filter_behavior') == "reload_page") {
if ($_smarty_tpl->getValue('runtime')['action'] == "different_only") {
$_smarty_tpl->assign('text', "different_only", false, NULL);
$_smarty_tpl->assign('action', "show_all", false, NULL);
} else {
$_smarty_tpl->assign('text', "all_features", false, NULL);
$_smarty_tpl->assign('action', "different_only", false, NULL);
}
$_smarty_tpl->assign('additional', '', false, NULL);
if ($_REQUEST['category_id']) {
$_smarty_tpl->assign('additional', "?category_id=".((string)$_REQUEST['category_id']), false, NULL);
}?><a class="ab-ec-filter-features reload ab-ec-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
 cm-ab-ec-reinited" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare.".((string)$_smarty_tpl->getValue('action')).((string)$_smarty_tpl->getValue('additional')))), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-target"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('text'), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php } elseif ($_smarty_tpl->getValue('features_filter_behavior') == "highlight_differences") {
$_smarty_tpl->assign('text', "all_features", false, NULL);?><a href="javascript:void(0)" class="ab-ec-filter-features highlight ab-ec-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
 cm-ab-ec-reinited"><i class="ty-icon-eye-open"></i><i class="ty-icon-eye-close"></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('text'), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:features_filter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__ecw_features_filter');
if ($_smarty_tpl->getValue('ab__ecw_active_comparison_list')) {?><a<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_data')['products']) == 1) {?> class="highlighted"<?php }?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('ab__ecw_active_comparison_list')->getViewMoreHref())), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-plus"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.add_more_products", array("[title]"=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_strtolower')($_smarty_tpl->getValue('ab__ecw_active_comparison_list')->getTitle())), $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }
$_smarty_tpl->assign('products', array(), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('comparison_data')['products'], 'product');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach3DoElse = false;
$_tmp_array = $_smarty_tpl->getValue('products') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('product')['product_id'];
$_smarty_tpl->assign('products', $_tmp_array, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->assign('imloded_products', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('products')), false, NULL);?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.compare?add_to_compare=".((string)$_smarty_tpl->getValue('imloded_products')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" data-cm-ab-ec-copy-from="href" class="cm-ab-ec-copy-to-clipboard cm-ab-ec-reinited"><i class="ty-icon-popup"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.copy_link_to_compare_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php $_smarty_tpl->assign('redirect_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"category_id"), false, NULL);?><a href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('redirect_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->getValue('imloded_products'))."&redirect_url=".$_prefixVariable2)), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-trashcan"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__extended_comparison_wishlist:top_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div></div><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('comparison_data')['products']) == 1) {?><div class="notification-content alert alert-warning"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("attention", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.not_enough_to_compare", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><?php }
$_smarty_tpl->assign('block', array("block_id"=>"ab__ecw_main_compare","properties"=>array("show_company_name"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"ab__ecw_enable_add_to_compare"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"),"enable_quick_view"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"outside_navigation"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"),"thumbnail_width"=>100,"show_price"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"item_quantity"=>4,"ab__ecw_enable_add_more"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"),"ab__ecw_enable_scroller"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),"hide_add_to_cart_button"=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"))), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__extended_comparison_wishlist/blocks/products/ab__ecw_list_with_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->getValue('block'),'items'=>$_smarty_tpl->getValue('comparison_data')['products'],'force_display'=>true), (int) 0, $_smarty_current_dir);
}
}
}
}
