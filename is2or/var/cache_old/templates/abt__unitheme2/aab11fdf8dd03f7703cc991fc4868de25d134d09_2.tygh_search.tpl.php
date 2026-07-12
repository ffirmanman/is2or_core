<?php
/* Smarty version 5.4.3, created on 2026-03-10 06:01:06
  from 'tygh:views/products/search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69af8972c21da6_36940499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aab11fdf8dd03f7703cc991fc4868de25d134d09' => 
    array (
      0 => 'views/products/search.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/no_items.tpl' => 4,
  ),
))) {
function content_69af8972c21da6_36940499 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/products';
\Tygh\Languages\Helper::preloadLangVars(array('products_found','text_no_products_found','text_no_matching_products_found','search_results','products_found','text_no_products_found','text_no_matching_products_found','search_results'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="products_search_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->assign('products_search', "Y", false, NULL);
$_smarty_tpl->assign('is_selected_filters', $_REQUEST['features_hash'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('products')) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("products_found", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->assign('title_extra', $_prefixVariable1.": ".((string)$_smarty_tpl->getValue('search')['total_items']), false, NULL);?>
    <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'],'show_qty'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }
} else { ?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if (!$_smarty_tpl->getValue('show_not_found_notification') && $_smarty_tpl->getValue('is_selected_filters')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products_found", [], $_smarty_tpl->getSmarty()->getLanguage()),'no_items_extended'=>true,'reset_url'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"features_hash")), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_matching_products_found", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

<!--products_search_<?php echo $_smarty_tpl->getValue('block')['block_id'];?>
--></div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_results", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('title_extra');?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/search.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/search.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="products_search_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->assign('products_search', "Y", false, NULL);
$_smarty_tpl->assign('is_selected_filters', $_REQUEST['features_hash'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('products')) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("products_found", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->assign('title_extra', $_prefixVariable2.": ".((string)$_smarty_tpl->getValue('search')['total_items']), false, NULL);?>
    <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'],'show_qty'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }
} else { ?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if (!$_smarty_tpl->getValue('show_not_found_notification') && $_smarty_tpl->getValue('is_selected_filters')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products_found", [], $_smarty_tpl->getSmarty()->getLanguage()),'no_items_extended'=>true,'reset_url'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"features_hash")), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_matching_products_found", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

<!--products_search_<?php echo $_smarty_tpl->getValue('block')['block_id'];?>
--></div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_results", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('title_extra');?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
