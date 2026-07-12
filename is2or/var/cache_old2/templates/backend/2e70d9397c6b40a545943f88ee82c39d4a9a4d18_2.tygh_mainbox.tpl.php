<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:common/mainbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af5c4e80_28118851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e70d9397c6b40a545943f88ee82c39d4a9a4d18' => 
    array (
      0 => 'common/mainbox.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/dynamic_navigation.tpl' => 1,
    'tygh:common/sidebox.tpl' => 1,
    'tygh:common/last_viewed_items.tpl' => 1,
    'tygh:views/storefronts/components/picker/presets.tpl' => 1,
    'tygh:components/search_filters/search_filters.tpl' => 1,
    'tygh:common/saved_search_horizontal.tpl' => 1,
    'tygh:components/search_filters/context_search.tpl' => 1,
    'tygh:common/select_object.tpl' => 1,
  ),
))) {
function content_69afb1af5c4e80_28118851 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('notes','all_vendors','sidebar','language_content','sidebar'));
$_smarty_tpl->assign('show_back_button', true, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['static']['central'], 'back_button_central');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('back_button_central')->value) {
$foreach15DoElse = false;
?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('back_button_central')['items'], 'back_button_central_item');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('back_button_central_item')->value) {
$foreach16DoElse = false;
?>
        <?php if (!$_smarty_tpl->getValue('back_button_central_item') || !$_smarty_tpl->getValue('back_button_central_item')['href']) {?>
            <?php continue 1;?>
        <?php }?>
        <?php $_smarty_tpl->assign('back_button_dispatch', $_smarty_tpl->getSmarty()->getModifierCallback('explode')(".",$_smarty_tpl->getValue('back_button_central_item')['href']), false, NULL);?>
        <?php $_smarty_tpl->assign('back_button_mode_pre', $_smarty_tpl->getSmarty()->getModifierCallback('explode')("?",$_smarty_tpl->getValue('back_button_dispatch')[1]), false, NULL);?>
        <?php $_smarty_tpl->assign('back_button_mode', $_smarty_tpl->getValue('back_button_mode_pre')[0], false, NULL);?>        

        <?php if (($_smarty_tpl->getValue('runtime')['controller'] === $_smarty_tpl->getValue('back_button_dispatch')[0] && $_smarty_tpl->getValue('runtime')['mode'] === $_smarty_tpl->getValue('back_button_mode')) || ($_smarty_tpl->getValue('runtime')['controller'] === "index" && $_smarty_tpl->getValue('runtime')['mode'] === "index")) {?>
            <?php $_smarty_tpl->assign('show_back_button', false, false, NULL);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['static']['top']['administration']['items'], 'back_button_top_item');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('back_button_top_item')->value) {
$foreach17DoElse = false;
?>
    <?php if (!$_smarty_tpl->getValue('back_button_top_item') || !$_smarty_tpl->getValue('back_button_top_item')['href']) {?>
        <?php continue 1;?>
    <?php }?>
    <?php $_smarty_tpl->assign('back_button_dispatch', $_smarty_tpl->getSmarty()->getModifierCallback('explode')(".",$_smarty_tpl->getValue('back_button_top_item')['href']), false, NULL);?>
    <?php $_smarty_tpl->assign('back_button_mode_pre', $_smarty_tpl->getSmarty()->getModifierCallback('explode')("?",$_smarty_tpl->getValue('back_button_dispatch')[1]), false, NULL);?>
    <?php $_smarty_tpl->assign('back_button_mode', $_smarty_tpl->getValue('back_button_mode_pre')[0], false, NULL);?>        

    <?php if (($_smarty_tpl->getValue('runtime')['controller'] === $_smarty_tpl->getValue('back_button_dispatch')[0] && $_smarty_tpl->getValue('runtime')['mode'] === $_smarty_tpl->getValue('back_button_mode'))) {?>
        <?php $_smarty_tpl->assign('show_back_button', true, false, NULL);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php if (!$_smarty_tpl->getValue('sidebar_position')) {?>
    <?php $_smarty_tpl->assign('sidebar_position', "right", false, NULL);
}?>

<?php if (!$_smarty_tpl->getValue('sidebar_icon')) {?>
    <?php $_smarty_tpl->assign('sidebar_icon', "icon-chevron-left", false, NULL);
}?>

<?php $_smarty_tpl->assign('show_select_storefront', !((true && (true && null !== ($_smarty_tpl->getValue('_REQUEST')['show_select_storefront'] ?? null))) && $_smarty_tpl->getValue('_REQUEST')['show_select_storefront'] === "N"), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')('MULTIVENDOR') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_is_allowed')($_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Licensing\Features::MULTIPLE_STOREFRONTS"))) {?>
    <?php if (!$_smarty_tpl->getValue('runtime')['is_multiple_storefronts']) {?>
        <?php $_smarty_tpl->assign('select_storefront', false, false, NULL);?>
    <?php }?>
    <?php $_smarty_tpl->assign('selected_storefront_id', (($tmp = $_smarty_tpl->getValue('selected_storefront_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["storefront"]->storefront_id ?? null : $tmp), false, NULL);
} elseif ((!(true && ($_smarty_tpl->hasVariable('select_storefront') && null !== ($_smarty_tpl->getValue('select_storefront') ?? null))))) {?>
    <?php $_smarty_tpl->assign('select_storefront', $_smarty_tpl->getValue('runtime')['is_multiple_storefronts'], false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('anchor')) {?>
<a name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('anchor')), ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("THEMES_PANEL")) {?>
    <?php $_smarty_tpl->assign('sticky_padding_on_actions_panel', 80, false, NULL);?>
    <?php $_smarty_tpl->assign('sticky_top_on_actions_panel', 80, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('sticky_padding_on_actions_panel', 45, false, NULL);?>
    <?php $_smarty_tpl->assign('sticky_top_on_actions_panel', 45, false, NULL);
}?>

<?php $_smarty_tpl->assign('content_heading_title_class', '', false, NULL);
$_smarty_tpl->assign('content_heading_title_lg_length', 45, false, NULL);?> <?php $_smarty_tpl->assign('content_heading_title_xl_length', 90, false, NULL);?> <?php $_smarty_tpl->assign('title_text', ((true && ($_smarty_tpl->hasVariable('title_start') && null !== ($_smarty_tpl->getValue('title_start') ?? null))) && (true && ($_smarty_tpl->hasVariable('title_end') && null !== ($_smarty_tpl->getValue('title_end') ?? null)))) ? ($_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (string) (($tmp = ((string)$_smarty_tpl->getValue('title_start'))." ".((string)$_smarty_tpl->getValue('title_end')) ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp))))) : $_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (string) (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp)))), false, NULL);
if (mb_strlen((string) $_smarty_tpl->getValue('title_text'), 'UTF-8') > $_smarty_tpl->getValue('content_heading_title_xl_length')) {?>
    <?php $_smarty_tpl->assign('content_heading_title_class', "admin-content-heading__title--xl", false, NULL);
} elseif (mb_strlen((string) $_smarty_tpl->getValue('title_text'), 'UTF-8') > $_smarty_tpl->getValue('content_heading_title_lg_length')) {?>
    <?php $_smarty_tpl->assign('content_heading_title_class', "admin-content-heading__title--lg", false, NULL);
}?>

<?php $_smarty_tpl->assign('scroll_header', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['scroll_header'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
// Init ajax callback (rebuild)
var menu_content = <?php echo htmlspecialchars_decode((($tmp = $_smarty_tpl->getValue('convertible_data') ?? null)===null||$tmp==='' ? "''" ?? null : $tmp), ENT_QUOTES);?>
;
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sidebar_content", "sidebar_content", null);?>
    <?php if ($_smarty_tpl->getValue('navigation') && $_smarty_tpl->getValue('navigation')['dynamic'] && $_smarty_tpl->getValue('navigation')['dynamic']['sections']) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/dynamic_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->getValue('navigation')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <?php echo $_smarty_tpl->getValue('sidebar');?>


    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('notes')) {
throw new \Smarty\Exception('block tag \'notes\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('notes')->handle(array('assign'=>"notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('notes')->handle(array('assign'=>"notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php if ($_smarty_tpl->getValue('notes')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('notes'), 'note', false, 'sidebox_title');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sidebox_title')->value => $_smarty_tpl->getVariable('note')->value) {
$foreach18DoElse = false;
?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "note_title", null, null);?>
                <?php if ($_smarty_tpl->getValue('title') == "_note_") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notes", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
}?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('note'),'title'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'note_title')), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<!-- Actions -->
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:actions_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="actions nav__actions <?php if ($_smarty_tpl->getValue('scroll_header')) {?>nav__actions--scroll-header<?php }?>"
        data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd"
        data-ca-top="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticky_top_on_actions_panel')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-padding="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticky_padding_on_actions_panel')), ENT_QUOTES, 'UTF-8');?>
"
        id="actions_panel">
        <div class="actions__wrapper <?php if (!$_smarty_tpl->getValue('show_back_button')) {?>actions__wrapper--no-back<?php }?> <?php if ($_smarty_tpl->getValue('runtime')['is_current_storefront_closed'] || $_smarty_tpl->getValue('runtime')['are_all_storefronts_closed']) {?>actions__wrapper--disabled<?php }?>">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:actions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('show_back_button')) {?>
                <div class="btn-bar-left nav__actions-back">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/last_viewed_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>
            <div class="title nav__actions-title <?php if ($_smarty_tpl->getValue('select_storefront')) {?>title--storefronts<?php }?> visibility-hidden" data-ca-mainbox="navActionsTitle">
                <?php if ((true && ($_smarty_tpl->hasVariable('title_start') && null !== ($_smarty_tpl->getValue('title_start') ?? null))) && (true && ($_smarty_tpl->hasVariable('title_end') && null !== ($_smarty_tpl->getValue('title_end') ?? null)))) {?>
                    <h2 class="title__heading 
                        <?php if ($_smarty_tpl->getValue('select_storefront')) {?>title__heading--storefronts<?php }?>">
                        <span class="title__part-start mobile-hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')((($tmp = $_smarty_tpl->getValue('title_start') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));
if ($_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('title_end')))) !== '') {?>:<?php }?>
                         </span>
                        <span class="title__part-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')((($tmp = $_smarty_tpl->getValue('title_end') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));?>
</span>
                    </h2>
                <?php } else { ?>
                    <h2 class="title__heading <?php if ($_smarty_tpl->getValue('select_storefront')) {?>title__heading--storefronts<?php }?>">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')((($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));?>

                    </h2>
                <?php }?>
            </div>

            <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('main_buttons_meta')), ENT_QUOTES, 'UTF-8');?>
 btn-bar btn-toolbar nav__actions-bar" <?php if ($_smarty_tpl->getValue('content_id')) {?>id="tools_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_id')), ENT_QUOTES, 'UTF-8');?>
_buttons"<?php }?>>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:toolbar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:toolbar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <?php if ($_smarty_tpl->getValue('select_storefront') && $_smarty_tpl->getValue('show_select_storefront')) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/storefronts/components/picker/presets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->getValue('storefronts_picker_name'),'item_ids'=>array($_smarty_tpl->getValue('runtime')['company_data']['company_id']),'show_empty_variant'=>$_smarty_tpl->getValue('show_empty_variant'),'empty_variant_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("all_vendors", [], $_smarty_tpl->getSmarty()->getLanguage()),'select_storefront'=>$_smarty_tpl->getValue('select_storefront'),'show_all_storefront'=>$_smarty_tpl->getValue('show_all_storefront')), (int) 0, $_smarty_current_dir);
?>
                <?php }?>

                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"components/menu/actions_menu.tpl",'items'=>$_smarty_tpl->getValue('navigation')['dynamic']['actions'],'config'=>$_smarty_tpl->getValue('config')), $_smarty_tpl);?>


                <?php echo $_smarty_tpl->getValue('buttons');?>


                <?php if ($_smarty_tpl->getValue('adv_buttons')) {?>
                <div class="nav__actions-adv-buttons adv-buttons" <?php if ($_smarty_tpl->getValue('content_id')) {?>id="tools_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_id')), ENT_QUOTES, 'UTF-8');?>
_adv_buttons"<?php }?>>
                <?php echo $_smarty_tpl->getValue('adv_buttons');?>

                <?php if ($_smarty_tpl->getValue('content_id')) {?><!--tools_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_id')), ENT_QUOTES, 'UTF-8');?>
_adv_buttons--><?php }?></div>
                <?php }?>

            <?php if ($_smarty_tpl->getValue('content_id')) {?><!--tools_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_id')), ENT_QUOTES, 'UTF-8');?>
_buttons--><?php }?></div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:actions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <!--actions_panel--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:actions_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<div class="admin-content-wrapper-outer">
    <div class="admin-content-heading" data-ca-mainbox="contentHeading">
        <?php if ((true && ($_smarty_tpl->hasVariable('title_start') && null !== ($_smarty_tpl->getValue('title_start') ?? null))) && (true && ($_smarty_tpl->hasVariable('title_end') && null !== ($_smarty_tpl->getValue('title_end') ?? null)))) {?>
            <div class="admin-content-heading__title <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_heading_title_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-mainbox="contentHeadingTitle">
                <span class="title__part-start mobile-hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')((($tmp = $_smarty_tpl->getValue('title_start') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));
if ($_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('title_end')))) !== '') {?>:<?php }?>
                    </span>
                <span class="title__part-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')((($tmp = $_smarty_tpl->getValue('title_end') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));?>
</span>
            </div>
        <?php } else { ?>
            <div class="admin-content-heading__title <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_heading_title_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-mainbox="contentHeadingTitle">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sanitize_html')((($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));?>

            </div>
        <?php }?>
    </div>
<div class="admin-content-wrapper <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('mainbox_content_wrapper_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">

<!-- Sidebar left -->
<?php if (!$_smarty_tpl->getValue('no_sidebar') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('sidebar_content')) != '' && $_smarty_tpl->getValue('sidebar_position') == "left") {?>
<div class="sidebar sidebar-left cm-sidebar <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sidebar_meta')), ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sidebar", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('sidebar_icon'))." sidebar-icon"), $_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->getValue('sidebar_content');?>

    </div>
<!--elm_sidebar--></div>
<?php }?>

<!--Content-->
<div class="content page-content <?php if ($_smarty_tpl->getValue('no_sidebar')) {?> content-no-sidebar<?php }
if ($_smarty_tpl->getValue('sidebar_content') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('sidebar_content')) == '') {?> no-sidebar<?php }?> <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>ufa<?php }?>" <?php if ($_smarty_tpl->getValue('box_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('box_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <div class="content-wrap">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:content_top"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

        <?php if (($_smarty_tpl->getValue('saved_search')) || ($_smarty_tpl->getValue('tabs_navigation') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tabs_navigation'))) || ($_smarty_tpl->getValue('context_search')) || ($_smarty_tpl->getValue('select_languages') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('languages')) > 1) || ($_smarty_tpl->getValue('search_filters'))) {?>
            
                        <?php if ($_smarty_tpl->getValue('search_filters')) {?>
                <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:components/search_filters/search_filters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('search_filters'=>$_smarty_tpl->getValue('search_filters'),'dispatch'=>$_smarty_tpl->getValue('dispatch')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('search_filters_content', ob_get_clean(), false, 0);
?>
            <?php }?>

            <div class="content__top-navigation" id="content_top_navigation">
                <?php if ($_smarty_tpl->getValue('saved_search') || $_smarty_tpl->getValue('tabs_navigation') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tabs_navigation')) || $_smarty_tpl->getValue('context_search') || $_smarty_tpl->getValue('select_languages') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('languages')) > 1) {?>
                    <div class="content__top-navigation-main <?php if ($_smarty_tpl->getValue('context_search')) {?>content__top-navigation-main--wrap<?php }?>" id="content_top_navigation_main">
                        <?php if ($_smarty_tpl->getValue('saved_search') || $_smarty_tpl->getValue('tabs_navigation') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tabs_navigation'))) {?>
                            <div class="content__top-navigation-primary">
                                <?php if ($_smarty_tpl->getValue('saved_search')) {?>
                                    <div class="content__saved-search" id="saved_search_horizontal_views">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/saved_search_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>$_smarty_tpl->getValue('saved_search')['dispatch'],'view_type'=>$_smarty_tpl->getValue('saved_search')['view_type'],'is_compact_view'=>(!!$_smarty_tpl->getValue('context_search'))), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->getValue('tabs_navigation') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tabs_navigation'))) {?>
                                    <div class="content__tabs-navigation">
                                        <?php echo $_smarty_tpl->getValue('tabs_navigation');?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('context_search') || $_smarty_tpl->getValue('select_languages') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('languages')) > 1) {?>
                            <div class="content__top-navigation-secondary <?php if ($_smarty_tpl->getValue('context_search')) {?>content__top-navigation-secondary--fill<?php }?>">
                                <?php if ($_smarty_tpl->getValue('context_search')) {?>
                                    <div class="content__context-search">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:components/search_filters/context_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context_search'=>$_smarty_tpl->getValue('context_search')), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->getValue('select_languages') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('languages')) > 1) {?>
                                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "languages_select_extra", null, null);?>
                                        <li class="disabled">
                                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("language_content", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                        </li>
                                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                    <div class="content-variant-wrap content-variant-wrap--language language-wrap">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"descr_sl="),'items'=>$_smarty_tpl->getValue('languages'),'selected_id'=>(defined('DESCR_SL') ? constant('DESCR_SL') : null),'key_name'=>"name",'suffix'=>"content",'extra_pre'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'languages_select_extra'),'display_icons'=>true,'show_button_text'=>false,'show_caret'=>false), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    <!--content_top_navigation_main--></div>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('search_filters_content') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')('search_filters_content')) {?>
                    <div class="content__search-filters" id="content_search_filters">
                        <?php echo $_smarty_tpl->getValue('search_filters_content');?>

                    <!--content_search_filters--></div>
                <?php }?>
            <!--content_top_navigation--></div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('tools')) {
echo $_smarty_tpl->getValue('tools');
}?>

        <?php if ($_smarty_tpl->getValue('title_extra')) {?><div class="title">-&nbsp;</div>
            <?php echo $_smarty_tpl->getValue('title_extra');?>

        <?php }?>

        <?php if ($_smarty_tpl->getValue('extra_tools') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('extra_tools'))) {?>
            <div class="extra-tools">
                <?php echo $_smarty_tpl->getValue('extra_tools');?>

            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:content_top"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php if ($_smarty_tpl->getValue('content_id')) {?><div id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_id')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
        <?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    <?php if ($_smarty_tpl->getValue('content_id')) {?><!--content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>

    <?php if ($_smarty_tpl->getValue('box_id')) {?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('box_id')), ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div>
<!--/Content-->


<!-- Sidebar -->
<?php if (!$_smarty_tpl->getValue('no_sidebar') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('sidebar_content')) != '' && $_smarty_tpl->getValue('sidebar_position') == "right") {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:right_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('is_open_state_sidebar_save', (($tmp = $_smarty_tpl->getValue('is_open_state_sidebar_save') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<div class="sidebar cm-sidebar<?php if ($_smarty_tpl->getValue('is_open_state_sidebar_save')) {?> cm-sidebar-open-state-save<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sidebar_meta')), ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sidebar", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('sidebar_icon'))." sidebar-icon"), $_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->getValue('sidebar_content');?>

    </div>
<!--elm_sidebar--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:right_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
</div>

</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
    var ajax_callback_data = menu_content;
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/sidebar.js"), $_smarty_tpl);?>

<?php }
}
