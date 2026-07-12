<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:views/products/components/sorting.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9590a97_06239220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bd0a3173847a8759726c5e039a3b36621b6a9b2' => 
    array (
      0 => 'views/products/components/sorting.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/sorting.tpl' => 2,
  ),
))) {
function content_69afafa9590a97_06239220 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
\Tygh\Languages\Helper::preloadLangVars(array('per_page','per_page','per_page','per_page','per_page','per_page'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<div class="ty-sort-container">
    <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->assign('ajax_class', "cm-ajax", false, NULL);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__selected_filters');?>


    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"sort_by","sort_order","result_ids","layout"), false, NULL);?>
    <?php $_smarty_tpl->assign('sorting', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_sorting')(''), false, NULL);?>
    <?php $_smarty_tpl->assign('sorting_orders', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_sorting_orders')(''), false, NULL);?>
    <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,false), false, NULL);?>
    <?php $_smarty_tpl->assign('pagination_id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('avail_sorting', $_smarty_tpl->getValue('settings')['Appearance']['available_product_list_sortings'], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('search')['sort_order_rev'] == "asc") {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sorting_text", null, null);?>
            <a><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sorting')[$_smarty_tpl->getValue('search')['sort_by']]['description']), ENT_QUOTES, 'UTF-8');
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir"), $_smarty_tpl);?>
</a>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } else { ?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sorting_text", null, null);?>
            <a><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sorting')[$_smarty_tpl->getValue('search')['sort_by']]['description']), ENT_QUOTES, 'UTF-8');
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir"), $_smarty_tpl);?>
</a>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>

    <div class="ut2-sorting-wrap">

        <?php if ($_smarty_tpl->getValue('avail_sorting')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <?php $_smarty_tpl->assign('pagination', $_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_pagination')($_smarty_tpl->getValue('search')), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('pagination')['total_items']) {?>
            <?php $_smarty_tpl->assign('range_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"items_per_page","page"), false, NULL);?>
            <?php $_smarty_tpl->assign('product_steps', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_pagination_steps')($_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'],$_smarty_tpl->getValue('settings')['Appearance']['products_per_page']), false, NULL);?>

            <div class="ty-sort-dropdown">
                <div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                <a id="sw_elm_pagination_steps" class="ty-sort-dropdown__wrapper cm-combination <?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>cm-tooltip<?php }?>" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['items_per_page']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("per_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['items_per_page']), ENT_QUOTES, 'UTF-8');?>
</span><i class="ut2-icon-outline-expand_more"></i></a>

                <div id="elm_pagination_steps" class="ty-sort-dropdown__content cm-popup-box hidden">
                    <span class="ut2-popup-box-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['items_per_page']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("per_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<span class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_elm_pagination_steps"><i class="ut2-icon-baseline-close"></i></span></span>
                    <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_steps'), 'step');
$foreach31DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step')->value) {
$foreach31DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('step') != $_smarty_tpl->getValue('pagination')['items_per_page']) {?>
                                <li class="ty-sort-dropdown__content-item">
                                    <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
 cm-ajax-full-render ty-sort-dropdown__content-item-a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('range_url'))."&items_per_page=".((string)$_smarty_tpl->getValue('step')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('step')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("per_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        <?php }?>

        <?php if (!(($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['selected_views']) == 1) || ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['selected_views']) == 0 && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',true)) <= 1)) && !$_smarty_tpl->getValue('hide_layouts')) {?>
            <div class="ty-sort-container__views-icons">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('layouts'), 'item', false, 'layout');
$foreach32DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('layout')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach32DoElse = false;
?>
                    <?php if (($_smarty_tpl->getValue('category_data')['selected_views'][$_smarty_tpl->getValue('layout')]) || (!$_smarty_tpl->getValue('category_data')['selected_views'] && $_smarty_tpl->getValue('item')['active'])) {?>
                        <?php if ($_smarty_tpl->getValue('layout') == $_smarty_tpl->getValue('selected_layout')) {?>
                            <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('search')['sort_order_rev'], false, NULL);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('search')['sort_order'], false, NULL);?>
                        <?php }?>
                        <a class="ty-sort-container__views-a cm-ajax-full-render <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('layout') == $_smarty_tpl->getValue('selected_layout')) {?>active<?php }?>" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination_id')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('curl'))."&sort_by=".((string)$_smarty_tpl->getValue('search')['sort_by'])."&sort_order=".((string)$_smarty_tpl->getValue('sort_order'))."&layout=".((string)$_smarty_tpl->getValue('layout')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ut2-icon-".((string)($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('layout'),'_','-')))), $_smarty_tpl);?>

                        </a>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/sorting.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/sorting.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<div class="ty-sort-container">
    <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->assign('ajax_class', "cm-ajax", false, NULL);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__selected_filters');?>


    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"sort_by","sort_order","result_ids","layout"), false, NULL);?>
    <?php $_smarty_tpl->assign('sorting', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_sorting')(''), false, NULL);?>
    <?php $_smarty_tpl->assign('sorting_orders', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_sorting_orders')(''), false, NULL);?>
    <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,false), false, NULL);?>
    <?php $_smarty_tpl->assign('pagination_id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('avail_sorting', $_smarty_tpl->getValue('settings')['Appearance']['available_product_list_sortings'], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('search')['sort_order_rev'] == "asc") {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sorting_text", null, null);?>
            <a><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sorting')[$_smarty_tpl->getValue('search')['sort_by']]['description']), ENT_QUOTES, 'UTF-8');
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir"), $_smarty_tpl);?>
</a>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } else { ?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sorting_text", null, null);?>
            <a><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sorting')[$_smarty_tpl->getValue('search')['sort_by']]['description']), ENT_QUOTES, 'UTF-8');
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir"), $_smarty_tpl);?>
</a>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>

    <div class="ut2-sorting-wrap">

        <?php if ($_smarty_tpl->getValue('avail_sorting')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <?php $_smarty_tpl->assign('pagination', $_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_pagination')($_smarty_tpl->getValue('search')), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('pagination')['total_items']) {?>
            <?php $_smarty_tpl->assign('range_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"items_per_page","page"), false, NULL);?>
            <?php $_smarty_tpl->assign('product_steps', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_pagination_steps')($_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'],$_smarty_tpl->getValue('settings')['Appearance']['products_per_page']), false, NULL);?>

            <div class="ty-sort-dropdown">
                <div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                <a id="sw_elm_pagination_steps" class="ty-sort-dropdown__wrapper cm-combination <?php if (!$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>cm-tooltip<?php }?>" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['items_per_page']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("per_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['items_per_page']), ENT_QUOTES, 'UTF-8');?>
</span><i class="ut2-icon-outline-expand_more"></i></a>

                <div id="elm_pagination_steps" class="ty-sort-dropdown__content cm-popup-box hidden">
                    <span class="ut2-popup-box-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['items_per_page']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("per_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<span class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_elm_pagination_steps"><i class="ut2-icon-baseline-close"></i></span></span>
                    <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_steps'), 'step');
$foreach33DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step')->value) {
$foreach33DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('step') != $_smarty_tpl->getValue('pagination')['items_per_page']) {?>
                                <li class="ty-sort-dropdown__content-item">
                                    <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
 cm-ajax-full-render ty-sort-dropdown__content-item-a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('range_url'))."&items_per_page=".((string)$_smarty_tpl->getValue('step')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('step')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("per_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        <?php }?>

        <?php if (!(($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['selected_views']) == 1) || ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['selected_views']) == 0 && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',true)) <= 1)) && !$_smarty_tpl->getValue('hide_layouts')) {?>
            <div class="ty-sort-container__views-icons">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('layouts'), 'item', false, 'layout');
$foreach34DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('layout')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach34DoElse = false;
?>
                    <?php if (($_smarty_tpl->getValue('category_data')['selected_views'][$_smarty_tpl->getValue('layout')]) || (!$_smarty_tpl->getValue('category_data')['selected_views'] && $_smarty_tpl->getValue('item')['active'])) {?>
                        <?php if ($_smarty_tpl->getValue('layout') == $_smarty_tpl->getValue('selected_layout')) {?>
                            <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('search')['sort_order_rev'], false, NULL);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('search')['sort_order'], false, NULL);?>
                        <?php }?>
                        <a class="ty-sort-container__views-a cm-ajax-full-render <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('layout') == $_smarty_tpl->getValue('selected_layout')) {?>active<?php }?>" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination_id')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('curl'))."&sort_by=".((string)$_smarty_tpl->getValue('search')['sort_by'])."&sort_order=".((string)$_smarty_tpl->getValue('sort_order'))."&layout=".((string)$_smarty_tpl->getValue('layout')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ut2-icon-".((string)($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('layout'),'_','-')))), $_smarty_tpl);?>

                        </a>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
