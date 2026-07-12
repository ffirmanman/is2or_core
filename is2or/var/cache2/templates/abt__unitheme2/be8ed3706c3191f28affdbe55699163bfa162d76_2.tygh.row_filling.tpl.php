<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/components/horizontal/row_filling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21b023c86_26174605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be8ed3706c3191f28affdbe55699163bfa162d76' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/components/horizontal/row_filling.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 6,
  ),
),false)) {
function content_682fe21b023c86_26174605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('more','text_topmenu_more','text_topmenu_more','more','text_topmenu_more','text_topmenu_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('cols_tree_level', 1);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('cols_tree_level', $_smarty_tpl->tpl_vars['settings_cols']->value);
}?>

<?php $_smarty_tpl->_assignInScope('second_level_counter', 0);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ut2-menu__submenu__carrier <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>cascading <?php } elseif ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner <?php }
}?>row-filling <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-cols-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cols_tree_level']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->_assignInScope('Viewlimit', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__no_hidden_elements_third_level_view'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>

        <div class="ut2-menu__submenu__wrapper">
            <div class="ut2-menu__2nd-list">
                <div class="ut2-menu__2nd-col">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
                        <div class="ut2-menu__2nd-item" data-elem-index="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_level_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->_assignInScope('second_level_counter', $_smarty_tpl->tpl_vars['second_level_counter']->value+1);?>
                            <?php $_smarty_tpl->_assignInScope('item2_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>

                            <div class="ut2-menu__2nd-item__header<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?> ut2-mwi-icon-wrap<?php }
if (empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?> no-items<?php }?>">
                                <a <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" || !$_smarty_tpl->tpl_vars['item2']->value['childs']) {?>href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item2_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                   <?php } else { ?>href="javascript:void(0)"<?php }
if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?>
                                   class="ut2-menu__2nd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                                    <?php }?>
                                    <span class="ut2-menu__2nd-link__text"><span class="ut2-menu__2nd-link__name"><?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
                                    <i class="ut2-icon-outline-arrow_forward"></i>
                                <?php }?>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                <span class="ty-menu__item-toggle cm-responsive-menu-toggle">
                                    <i class="ut2-mark-fold-unfold"></i>
                                </span>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?>
                                <div class="ut2-menu__2nd-submenu<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text']) {
if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'] !== "bottom") {?> submenu-2nd-has-side-banner<?php } else { ?> submenu-2nd-has-bottom-banner<?php }
}?>">
                                    <div class="ut2-menu__2nd-submenu__wrapper">
                                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
                                            <?php $_smarty_tpl->_assignInScope('max_amount_3rd', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_third_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp));?>
                                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item2']) ? $_smarty_tpl->tpl_vars['item2']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['childs']->value] = array_slice($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],0,$_smarty_tpl->tpl_vars['max_amount_3rd']->value,true);
$_smarty_tpl->_assignInScope('item2', $_tmp_array);?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_chunk($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],ceil(smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])/$_smarty_tpl->tpl_vars['cols_tree_level']->value),true), 'item2_childs');
$_smarty_tpl->tpl_vars['item2_childs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2_childs']->value) {
$_smarty_tpl->tpl_vars['item2_childs']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['item2_childs']->value) {?>
                                                    <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > 19) {?>multicol <?php }
} elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > $_smarty_tpl->tpl_vars['Viewlimit']->value && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?>style="--menu-items:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['Viewlimit']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item2']->value['href'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
                                                            <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                                <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?>
                                                                        <span class="ut2-menu__3rd-link__text">
                                                                            <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->__('all');?>
 <?php echo $_smarty_tpl->tpl_vars['item2']->value['item'];?>
</span>
                                                                        </span>
                                                                    <?php }?>
                                                                </a>
                                                            </div>
                                                        <?php }?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2_childs']->value, 'item3', false, NULL, 'item3', array (
));
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                                            <?php $_smarty_tpl->_assignInScope('item3_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                                            <div class="ut2-menu__3rd-item">
                                                                <a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item3_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->tpl_vars['item3_url']->value && $_smarty_tpl->tpl_vars['item3']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->tpl_vars['item3']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                                </a>
                                                            </div>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </div>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > 19) {?>multicol <?php }
} elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>style="--menu-items:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['Viewlimit']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value['href'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
                                                        <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                                                               title="">
                                                                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?>
                                                                    <span class="ut2-menu__3rd-link__text">
                                                                        <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->__('all');?>
 <?php echo $_smarty_tpl->tpl_vars['item2']->value['item'];?>
</span>
                                                                    </span>
                                                                <?php }?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item3', false, NULL, 'item3', array (
));
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                                        <?php $_smarty_tpl->_assignInScope('item3_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                                        <div class="ut2-menu__3rd-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                            <a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item3_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->tpl_vars['item3_url']->value && $_smarty_tpl->tpl_vars['item3']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link" title="">
                                                                <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                            </a>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </div>
                                            <?php }?>
                                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>
                                                <a <?php if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? "view_items" ?? null : $tmp) === "view_items") {?>href="javascript:void(0);" onclick="$(this).prev().addClass('view');$(this).addClass('hidden');" <?php } else { ?>href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item2_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"<?php }?> class="ut2-more-btn" title=""><span><?php echo $_smarty_tpl->__("more");?>
</span></a>
                                            <?php }?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                                            <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item2']->value['show_more']) {?> show-not-mobile<?php }?>">
                                                <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                                                    <span class="ut2-menu__more-cat-link__in">
                                                        <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                                                    </span>
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                                        <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                                            <div class="ut2-mwi-html__in">
                                                <?php echo $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'];?>

                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']) {?> show-not-mobile<?php }?>">
                    <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                        <span class="ut2-menu__more-cat-link__in">
                            <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                        </span>
                    </a>
                </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
            <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                <div class="ut2-mwi-html__in">
                    <?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>

                </div>
            </div>
        <?php }?>
    </div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/components/horizontal/row_filling.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/components/horizontal/row_filling.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('cols_tree_level', 1);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('cols_tree_level', $_smarty_tpl->tpl_vars['settings_cols']->value);
}?>

<?php $_smarty_tpl->_assignInScope('second_level_counter', 0);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ut2-menu__submenu__carrier <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>cascading <?php } elseif ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner <?php }
}?>row-filling <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-cols-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cols_tree_level']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->_assignInScope('Viewlimit', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__no_hidden_elements_third_level_view'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>

        <div class="ut2-menu__submenu__wrapper">
            <div class="ut2-menu__2nd-list">
                <div class="ut2-menu__2nd-col">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
                        <div class="ut2-menu__2nd-item" data-elem-index="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_level_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->_assignInScope('second_level_counter', $_smarty_tpl->tpl_vars['second_level_counter']->value+1);?>
                            <?php $_smarty_tpl->_assignInScope('item2_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>

                            <div class="ut2-menu__2nd-item__header<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?> ut2-mwi-icon-wrap<?php }
if (empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?> no-items<?php }?>">
                                <a <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" || !$_smarty_tpl->tpl_vars['item2']->value['childs']) {?>href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item2_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                   <?php } else { ?>href="javascript:void(0)"<?php }
if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?>
                                   class="ut2-menu__2nd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                                    <?php }?>
                                    <span class="ut2-menu__2nd-link__text"><span class="ut2-menu__2nd-link__name"><?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
                                    <i class="ut2-icon-outline-arrow_forward"></i>
                                <?php }?>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                <span class="ty-menu__item-toggle cm-responsive-menu-toggle">
                                    <i class="ut2-mark-fold-unfold"></i>
                                </span>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?>
                                <div class="ut2-menu__2nd-submenu<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text']) {
if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'] !== "bottom") {?> submenu-2nd-has-side-banner<?php } else { ?> submenu-2nd-has-bottom-banner<?php }
}?>">
                                    <div class="ut2-menu__2nd-submenu__wrapper">
                                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
                                            <?php $_smarty_tpl->_assignInScope('max_amount_3rd', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_third_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp));?>
                                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item2']) ? $_smarty_tpl->tpl_vars['item2']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['childs']->value] = array_slice($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],0,$_smarty_tpl->tpl_vars['max_amount_3rd']->value,true);
$_smarty_tpl->_assignInScope('item2', $_tmp_array);?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_chunk($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],ceil(smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])/$_smarty_tpl->tpl_vars['cols_tree_level']->value),true), 'item2_childs');
$_smarty_tpl->tpl_vars['item2_childs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2_childs']->value) {
$_smarty_tpl->tpl_vars['item2_childs']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['item2_childs']->value) {?>
                                                    <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > 19) {?>multicol <?php }
} elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > $_smarty_tpl->tpl_vars['Viewlimit']->value && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?>style="--menu-items:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['Viewlimit']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item2']->value['href'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
                                                            <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                                <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?>
                                                                        <span class="ut2-menu__3rd-link__text">
                                                                            <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->__('all');?>
 <?php echo $_smarty_tpl->tpl_vars['item2']->value['item'];?>
</span>
                                                                        </span>
                                                                    <?php }?>
                                                                </a>
                                                            </div>
                                                        <?php }?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2_childs']->value, 'item3', false, NULL, 'item3', array (
));
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                                            <?php $_smarty_tpl->_assignInScope('item3_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                                            <div class="ut2-menu__3rd-item">
                                                                <a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item3_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                                                   <?php if ($_smarty_tpl->tpl_vars['item3_url']->value && $_smarty_tpl->tpl_vars['item3']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                                   class="ut2-menu__3rd-link <?php if ($_smarty_tpl->tpl_vars['item3']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                                                                   title="">
                                                                    <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                                </a>
                                                            </div>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </div>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                <div class="ut2-menu__3rd-list <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value) > 19) {?>multicol <?php }
} elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>clipped <?php }?>" data-cols-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>style="--menu-items:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['Viewlimit']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value['href'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
                                                        <div class="ut2-menu__3rd-item item-3rd-has-more-cat-link">
                                                            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"
                                                               title="">
                                                                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?>
                                                                    <span class="ut2-menu__3rd-link__text">
                                                                        <span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->__('all');?>
 <?php echo $_smarty_tpl->tpl_vars['item2']->value['item'];?>
</span>
                                                                    </span>
                                                                <?php }?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item3', false, NULL, 'item3', array (
));
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                                        <?php $_smarty_tpl->_assignInScope('item3_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                                        <div class="ut2-menu__3rd-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                            <a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item3_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                                               <?php if ($_smarty_tpl->tpl_vars['item3_url']->value && $_smarty_tpl->tpl_vars['item3']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?>target="_blank"<?php }?>
                                                               class="ut2-menu__3rd-link" title="">
                                                                <span class="ut2-menu__3rd-link__text"><span class="ut2-menu__3rd-link__name"><?php echo $_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                                                            </a>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </div>
                                            <?php }?>
                                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) > $_smarty_tpl->tpl_vars['Viewlimit']->value) {?>
                                                <a <?php if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? "view_items" ?? null : $tmp) === "view_items") {?>href="javascript:void(0);" onclick="$(this).prev().addClass('view');$(this).addClass('hidden');" <?php } else { ?>href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item2_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"<?php }?> class="ut2-more-btn" title=""><span><?php echo $_smarty_tpl->__("more");?>
</span></a>
                                            <?php }?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                                            <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item2']->value['show_more']) {?> show-not-mobile<?php }?>">
                                                <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                                                    <span class="ut2-menu__more-cat-link__in">
                                                        <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                                                    </span>
                                                </a>
                                            </div>
                                        <?php }?>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                                        <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                                            <div class="ut2-mwi-html__in">
                                                <?php echo $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'];?>

                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']) {?> show-not-mobile<?php }?>">
                    <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                        <span class="ut2-menu__more-cat-link__in">
                            <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                        </span>
                    </a>
                </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
            <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                <div class="ut2-mwi-html__in">
                    <?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>

                </div>
            </div>
        <?php }?>
    </div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
