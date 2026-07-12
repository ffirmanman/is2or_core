<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:56
  from 'tygh:blocks/menu/components/horizontal/row_filling.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6c952b82_16077407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df78d53537c7fbcf2d973e871868bab6c45374d' => 
    array (
      0 => 'blocks/menu/components/horizontal/row_filling.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 6,
  ),
))) {
function content_6a133f6c952b82_16077407 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/menu/components/horizontal';
\Tygh\Languages\Helper::preloadLangVars(array('more','more','text_topmenu_more','text_topmenu_more','more','more','text_topmenu_more','text_topmenu_more'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('cols_tree_level', 1, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('cols_tree_level', $_smarty_tpl->getValue('settings_cols'), false, NULL);
}?>

<?php $_smarty_tpl->assign('second_level_counter', 0, false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ut2-menu__submenu__carrier <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>cascading <?php } elseif ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__text']) {
if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner <?php }
}?>row-filling <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_class')), ENT_QUOTES, 'UTF-8');?>
" data-cols-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cols_tree_level')), ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->assign('Viewlimit', (($tmp = $_smarty_tpl->getValue('block')['properties']['abt__no_hidden_elements_third_level_view'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), false, NULL);?>

        <div class="ut2-menu__submenu__wrapper">
            <div class="ut2-menu__2nd-list">
                <div class="ut2-menu__2nd-col">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')], 'item2', false, NULL, 'item2', array (
));
$foreach36DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach36DoElse = false;
?>
                        <div class="ut2-menu__2nd-item" data-elem-index="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('second_level_counter')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->assign('second_level_counter', $_smarty_tpl->getValue('second_level_counter')+1, false, NULL);?>
                            <?php $_smarty_tpl->assign('item2_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item2'),$_smarty_tpl->getValue('block')['type']), false, NULL);?>

                            <div class="ut2-menu__2nd-item__header<?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> ut2-mwi-icon-wrap<?php }
if (( !true || empty($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]))) {?> no-items<?php }?>">
                                <a <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile" || !$_smarty_tpl->getValue('item2')['childs']) {?>href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item2_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                                   <?php } else { ?>href="javascript:void(0)"<?php }
if ($_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('item2')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> target="_blank"<?php }?>
                                   class="ut2-menu__2nd-link <?php if ($_smarty_tpl->getValue('item2')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['class']), ENT_QUOTES, 'UTF-8');
}?>">
                                    <?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                    <span class="ut2-menu__2nd-link__text"><span class="ut2-menu__2nd-link__name"><?php echo $_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                </a>
                                <?php if ($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')] && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <i class="ut2-icon-outline-arrow_forward"></i>
                                <?php }?>
                            </div>

                            <?php if ($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) {?>
                                <span class="ty-menu__item-toggle cm-responsive-menu-toggle">
                                    <i class="ut2-mark-fold-unfold"></i>
                                </span>
                            <?php }?>

                            <?php if (!( !true || empty($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]))) {?>
                                <div class="ut2-menu__2nd-submenu<?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__text']) {
if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__text_position'] !== "bottom") {?> submenu-2nd-has-side-banner<?php } else { ?> submenu-2nd-has-bottom-banner<?php }
}?>">
                                    <div class="ut2-menu__2nd-submenu__wrapper">
                                        <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                            <?php $_smarty_tpl->assign('max_amount_3rd', (($tmp = $_smarty_tpl->getValue('block')['properties']['dropdown_third_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp), false, NULL);?>
                                            <?php $_tmp_array = $_smarty_tpl->getValue('item2') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('childs')] = $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')],0,$_smarty_tpl->getValue('max_amount_3rd'),true);
$_smarty_tpl->assign('item2', $_tmp_array, false, NULL);?>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('array_chunk')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')],$_smarty_tpl->getSmarty()->getModifierCallback('ceil')($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')])/$_smarty_tpl->getValue('cols_tree_level')),true), 'item2_childs');
$foreach37DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2_childs')->value) {
$foreach37DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('item2_childs')) {?>
                                                    <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > 19) {?>multicol <?php }
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > $_smarty_tpl->getValue('Viewlimit')) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings_cols')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > $_smarty_tpl->getValue('Viewlimit') && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>style="--menu-items:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('Viewlimit')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                        <?php if ($_smarty_tpl->getValue('item2')['href'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                            <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('item2')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->getValue('item2')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['class']), ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                                                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->getValue('item2_url')) {?>
                                                                        <span class="ut2-menu__3rd-link__text">
                                                                            <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getValue('item2')['item'];?>
</span>
                                                                        </span>
                                                                    <?php }?>
                                                                </a>
                                                            </div>
                                                        <?php }?>
                                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item2_childs'), 'item3', false, NULL, 'item3', array (
));
$foreach38DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item3')->value) {
$foreach38DoElse = false;
?>
                                                            <?php $_smarty_tpl->assign('item3_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item3'),$_smarty_tpl->getValue('block')['type']), false, NULL);?>
                                                            <div class="ut2-menu__3rd-item">
                                                                <a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item3_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->getValue('item3_url') && $_smarty_tpl->getValue('item3')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->getValue('item3')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['class']), ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getValue('item3')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                                </a>
                                                            </div>
                                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                    </div>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) {?>
                                                <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > 19) {?>multicol <?php }
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) > $_smarty_tpl->getValue('Viewlimit')) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings_cols')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) > $_smarty_tpl->getValue('Viewlimit')) {?>style="--menu-items:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('Viewlimit')), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                    <?php if ($_smarty_tpl->getValue('item2')['href'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                        <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('item2')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link <?php if ($_smarty_tpl->getValue('item2')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['class']), ENT_QUOTES, 'UTF-8');
}?>"
                                                               title="">
                                                                <?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                                                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->getValue('item2_url')) {?>
                                                                    <span class="ut2-menu__3rd-link__text">
                                                                        <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getValue('item2')['item'];?>
</span>
                                                                    </span>
                                                                <?php }?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')], 'item3', false, NULL, 'item3', array (
));
$foreach39DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item3')->value) {
$foreach39DoElse = false;
?>
                                                        <?php $_smarty_tpl->assign('item3_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item3'),$_smarty_tpl->getValue('block')['type']), false, NULL);?>
                                                        <div class="ut2-menu__3rd-item<?php if ($_smarty_tpl->getValue('item3')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['class']), ENT_QUOTES, 'UTF-8');
}?>">
                                                            <a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item3_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->getValue('item3_url') && $_smarty_tpl->getValue('item3')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link" title="">
                                                                <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getValue('item3')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                            </a>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) > $_smarty_tpl->getValue('Viewlimit')) {?>
                                                <?php if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? "view_items" ?? null : $tmp) === "view_items") {?>
                                                    <a class="ut2-more-btn view-items" href="javascript:void(0);" onclick="$(this).prev().addClass('view');$(this).addClass('hidden');" rel="nofollow">
                                                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-expand_more"></i>
                                                    </a>
                                                <?php } else { ?>
                                                    <a class="ut2-more-btn load-url" href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item2_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                                                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-arrow_forward"></i>
                                                    </a>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                                            <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->getValue('item2')['show_more']) {?> show-not-mobile<?php }?>">
                                                <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2_url')), ENT_QUOTES, 'UTF-8');?>
" title="">
                                                    <span class="ut2-menu__more-cat-link__in">
                                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_topmenu_more", array("[item]"=>$_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('name')]), $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    </span>
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>

                                    <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__text'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                                        <div class="ut2-mwi-html <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                                            <div class="ut2-mwi-html__in">
                                                <?php echo $_smarty_tpl->getValue('item2')['abt__ut2_mwi__text'];?>

                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>

            <?php if ($_smarty_tpl->getValue('item1_url') && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->getValue('item1')['show_more']) {?> show-not-mobile<?php }?>">
                    <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1_url')), ENT_QUOTES, 'UTF-8');?>
" title="">
                        <span class="ut2-menu__more-cat-link__in">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_topmenu_more", array("[item]"=>$_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('name')]), $_smarty_tpl->getSmarty()->getLanguage());?>

                        </span>
                    </a>
                </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
            <div class="ut2-mwi-html <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                <div class="ut2-mwi-html__in">
                    <?php echo $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text'];?>

                </div>
            </div>
        <?php }?>
    </div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/components/horizontal/row_filling.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/menu/components/horizontal/row_filling.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('cols_tree_level', 1, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('cols_tree_level', $_smarty_tpl->getValue('settings_cols'), false, NULL);
}?>

<?php $_smarty_tpl->assign('second_level_counter', 0, false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ut2-menu__submenu__carrier <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>cascading <?php } elseif ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__text']) {
if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner <?php }
}?>row-filling <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_class')), ENT_QUOTES, 'UTF-8');?>
" data-cols-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cols_tree_level')), ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->assign('Viewlimit', (($tmp = $_smarty_tpl->getValue('block')['properties']['abt__no_hidden_elements_third_level_view'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), false, NULL);?>

        <div class="ut2-menu__submenu__wrapper">
            <div class="ut2-menu__2nd-list">
                <div class="ut2-menu__2nd-col">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')], 'item2', false, NULL, 'item2', array (
));
$foreach40DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach40DoElse = false;
?>
                        <div class="ut2-menu__2nd-item" data-elem-index="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('second_level_counter')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->assign('second_level_counter', $_smarty_tpl->getValue('second_level_counter')+1, false, NULL);?>
                            <?php $_smarty_tpl->assign('item2_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item2'),$_smarty_tpl->getValue('block')['type']), false, NULL);?>

                            <div class="ut2-menu__2nd-item__header<?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> ut2-mwi-icon-wrap<?php }
if (( !true || empty($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]))) {?> no-items<?php }?>">
                                <a <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile" || !$_smarty_tpl->getValue('item2')['childs']) {?>href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item2_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                                   <?php } else { ?>href="javascript:void(0)"<?php }
if ($_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('item2')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> target="_blank"<?php }?>
                                   class="ut2-menu__2nd-link <?php if ($_smarty_tpl->getValue('item2')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['class']), ENT_QUOTES, 'UTF-8');
}?>">
                                    <?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                    <span class="ut2-menu__2nd-link__text"><span class="ut2-menu__2nd-link__name"><?php echo $_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                </a>
                                <?php if ($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')] && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <i class="ut2-icon-outline-arrow_forward"></i>
                                <?php }?>
                            </div>

                            <?php if ($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) {?>
                                <span class="ty-menu__item-toggle cm-responsive-menu-toggle">
                                    <i class="ut2-mark-fold-unfold"></i>
                                </span>
                            <?php }?>

                            <?php if (!( !true || empty($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]))) {?>
                                <div class="ut2-menu__2nd-submenu<?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__text']) {
if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__text_position'] !== "bottom") {?> submenu-2nd-has-side-banner<?php } else { ?> submenu-2nd-has-bottom-banner<?php }
}?>">
                                    <div class="ut2-menu__2nd-submenu__wrapper">
                                        <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                            <?php $_smarty_tpl->assign('max_amount_3rd', (($tmp = $_smarty_tpl->getValue('block')['properties']['dropdown_third_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp), false, NULL);?>
                                            <?php $_tmp_array = $_smarty_tpl->getValue('item2') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('childs')] = $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')],0,$_smarty_tpl->getValue('max_amount_3rd'),true);
$_smarty_tpl->assign('item2', $_tmp_array, false, NULL);?>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('array_chunk')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')],$_smarty_tpl->getSmarty()->getModifierCallback('ceil')($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')])/$_smarty_tpl->getValue('cols_tree_level')),true), 'item2_childs');
$foreach41DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2_childs')->value) {
$foreach41DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('item2_childs')) {?>
                                                    <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > 19) {?>multicol <?php }
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > $_smarty_tpl->getValue('Viewlimit')) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings_cols')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > $_smarty_tpl->getValue('Viewlimit') && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>style="--menu-items:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('Viewlimit')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                        <?php if ($_smarty_tpl->getValue('item2')['href'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                            <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('item2')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->getValue('item2')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['class']), ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                                                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->getValue('item2_url')) {?>
                                                                        <span class="ut2-menu__3rd-link__text">
                                                                            <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getValue('item2')['item'];?>
</span>
                                                                        </span>
                                                                    <?php }?>
                                                                </a>
                                                            </div>
                                                        <?php }?>
                                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item2_childs'), 'item3', false, NULL, 'item3', array (
));
$foreach42DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item3')->value) {
$foreach42DoElse = false;
?>
                                                            <?php $_smarty_tpl->assign('item3_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item3'),$_smarty_tpl->getValue('block')['type']), false, NULL);?>
                                                            <div class="ut2-menu__3rd-item">
                                                                <a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item3_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->getValue('item3_url') && $_smarty_tpl->getValue('item3')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->getValue('item3')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['class']), ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getValue('item3')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                                </a>
                                                            </div>
                                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                    </div>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) {?>
                                                <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2_childs')) > 19) {?>multicol <?php }
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) > $_smarty_tpl->getValue('Viewlimit')) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings_cols')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) > $_smarty_tpl->getValue('Viewlimit')) {?>style="--menu-items:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('Viewlimit')), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                    <?php if ($_smarty_tpl->getValue('item2')['href'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                        <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('item2')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link <?php if ($_smarty_tpl->getValue('item2')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['class']), ENT_QUOTES, 'UTF-8');
}?>"
                                                               title="">
                                                                <?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                                                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item2')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->getValue('item2_url')) {?>
                                                                    <span class="ut2-menu__3rd-link__text">
                                                                        <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getValue('item2')['item'];?>
</span>
                                                                    </span>
                                                                <?php }?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')], 'item3', false, NULL, 'item3', array (
));
$foreach43DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item3')->value) {
$foreach43DoElse = false;
?>
                                                        <?php $_smarty_tpl->assign('item3_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item3'),$_smarty_tpl->getValue('block')['type']), false, NULL);?>
                                                        <div class="ut2-menu__3rd-item<?php if ($_smarty_tpl->getValue('item3')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['class']), ENT_QUOTES, 'UTF-8');
}?>">
                                                            <a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item3_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->getValue('item3_url') && $_smarty_tpl->getValue('item3')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link" title="">
                                                                <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->getValue('item3')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                            </a>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('childs')]) > $_smarty_tpl->getValue('Viewlimit')) {?>
                                                <?php if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? "view_items" ?? null : $tmp) === "view_items") {?>
                                                    <a class="ut2-more-btn view-items" href="javascript:void(0);" onclick="$(this).prev().addClass('view');$(this).addClass('hidden');" rel="nofollow">
                                                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-expand_more"></i>
                                                    </a>
                                                <?php } else { ?>
                                                    <a class="ut2-more-btn load-url" href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item2_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                                                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-arrow_forward"></i>
                                                    </a>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2_url') && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                                            <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->getValue('item2')['show_more']) {?> show-not-mobile<?php }?>">
                                                <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2_url')), ENT_QUOTES, 'UTF-8');?>
" title="">
                                                    <span class="ut2-menu__more-cat-link__in">
                                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_topmenu_more", array("[item]"=>$_smarty_tpl->getValue('item2')[$_smarty_tpl->getValue('name')]), $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    </span>
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>

                                    <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item2')['abt__ut2_mwi__text'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                                        <div class="ut2-mwi-html <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                                            <div class="ut2-mwi-html__in">
                                                <?php echo $_smarty_tpl->getValue('item2')['abt__ut2_mwi__text'];?>

                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>

            <?php if ($_smarty_tpl->getValue('item1_url') && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
                <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->getValue('item1')['show_more']) {?> show-not-mobile<?php }?>">
                    <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1_url')), ENT_QUOTES, 'UTF-8');?>
" title="">
                        <span class="ut2-menu__more-cat-link__in">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_topmenu_more", array("[item]"=>$_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('name')]), $_smarty_tpl->getSmarty()->getLanguage());?>

                        </span>
                    </a>
                </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
            <div class="ut2-mwi-html <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                <div class="ut2-mwi-html__in">
                    <?php echo $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text'];?>

                </div>
            </div>
        <?php }?>
    </div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
