<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:36
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/abt__ut2_dropdown_horizontal_mwi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683452808eabf1_25868449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96b0c5b62459ad8c12bbba58cb47cb22b447ba77' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/abt__ut2_dropdown_horizontal_mwi.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/menu/components/horizontal/".((string)((($tmp = $_smarty_tpl->tpl_vars[\'block\']->value[\'properties\'][\'abt__ut2_filling_type\'] ?? null)===null||$tmp===\'\' ? \'column_filling\' ?? null : $tmp))).".tpl' => 2,
  ),
),false)) {
function content_683452808eabf1_25868449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('go_back','next','go_back','next'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?><div class="ut2-h__menu ut2-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names'] === smarty_modifier_enum("YesNo::YES")) {?> multi-line-1st-item<?php }
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable18 = ob_get_clean();
if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable18 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES")) {?> ut2-m-slider<?php }?>" style="--ut2-horizontal-menu-block-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'] ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?><a href="javascript:void(0);" onclick="$(this).next().toggleClass('view');$(this).toggleClass('open');" class="ut2-h__menu__burger<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['open_on_sticky_panel_button'] === "Y") {?> cm-external-triggered<?php }?>"><i class="ut2-icon-outline-menu"></i></a><?php }
$_smarty_tpl->_assignInScope('settings_cols', min(6,(($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_columns_count'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)));?><ul class="ut2-menu__list" style="--menu-columns: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item1', false, NULL, 'item1', array (
));
$_smarty_tpl->tpl_vars['item1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->do_else = false;
$_smarty_tpl->_assignInScope('item1_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']));
$_smarty_tpl->_assignInScope('unique_elm_id', "topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".((string)(md5($_smarty_tpl->tpl_vars['item1_url']->value))));
$_smarty_tpl->_assignInScope('subitems_count', smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]));
$_smarty_tpl->_assignInScope('show_second_level', $_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements'] && ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value] || ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])));?><li class="ut2-menu__item<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> item-1st-no-drop<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['show_second_level']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?><a class="ty-menu__item-toggle cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item1_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['item1']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?> class="ut2-menu__link<?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> item-1st-has-childs<?php } elseif ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) {?> mwi-html<?php }?>"><span class="ut2-menu__link__in<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {?> item-icon<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}?><span<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names'] === smarty_modifier_enum("YesNo::YES")) {?> style="max-width: <?php echo htmlspecialchars((string) (($tmp = intval($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names_max_width']) ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px"<?php }?> class="ut2-menu__link__text"><span class="ut2-menu__link__name"><?php echo $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut1_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
<span class="arrow" style="border-color: <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'] === "#ffffff") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');
}?> transparent transparent transparent;"></span></span><?php }?>
                                </span>
	                        </span>
	                    </a>

                        <?php if ($_smarty_tpl->tpl_vars['show_second_level']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                            <div class="ut2-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->_assignInScope('col_width', 100/$_smarty_tpl->tpl_vars['settings_cols']->value);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/horizontal/".((string)((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_filling_type'] ?? null)===null||$tmp==='' ? 'column_filling' ?? null : $tmp))).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </ul>

            </div>
<?php }?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            abt__ut2_go_back: '<?php echo $_smarty_tpl->__("go_back");?>
',
            abt__ut2_go_next: '<?php echo $_smarty_tpl->__("next");?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable19 = ob_get_clean();
if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable19 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_horizontal_menu_slider.js"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/abt__ut2_dropdown_horizontal_mwi.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/abt__ut2_dropdown_horizontal_mwi.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?><div class="ut2-h__menu ut2-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names'] === smarty_modifier_enum("YesNo::YES")) {?> multi-line-1st-item<?php }
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable20 = ob_get_clean();
if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable20 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES")) {?> ut2-m-slider<?php }?>" style="--ut2-horizontal-menu-block-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'] ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?><a href="javascript:void(0);" onclick="$(this).next().toggleClass('view');$(this).toggleClass('open');" class="ut2-h__menu__burger<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['open_on_sticky_panel_button'] === "Y") {?> cm-external-triggered<?php }?>"><i class="ut2-icon-outline-menu"></i></a><?php }
$_smarty_tpl->_assignInScope('settings_cols', min(6,(($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_columns_count'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)));?><ul class="ut2-menu__list" style="--menu-columns: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item1', false, NULL, 'item1', array (
));
$_smarty_tpl->tpl_vars['item1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->do_else = false;
$_smarty_tpl->_assignInScope('item1_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']));
$_smarty_tpl->_assignInScope('unique_elm_id', "topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".((string)(md5($_smarty_tpl->tpl_vars['item1_url']->value))));
$_smarty_tpl->_assignInScope('subitems_count', smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]));
$_smarty_tpl->_assignInScope('show_second_level', $_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements'] && ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value] || ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])));?><li class="ut2-menu__item<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> item-1st-no-drop<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['show_second_level']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?><a class="ty-menu__item-toggle cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item1_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['item1']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?> class="ut2-menu__link<?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> item-1st-has-childs<?php } elseif ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) {?> mwi-html<?php }?>"><span class="ut2-menu__link__in<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {?> item-icon<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}?><span<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names'] === smarty_modifier_enum("YesNo::YES")) {?> style="max-width: <?php echo htmlspecialchars((string) (($tmp = intval($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_long_names_max_width']) ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px"<?php }?> class="ut2-menu__link__text"><span class="ut2-menu__link__name"><?php echo $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut1_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
<span class="arrow" style="border-color: <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'] === "#ffffff") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');
}?> transparent transparent transparent;"></span></span><?php }?>
                                </span>
	                        </span>
	                    </a>

                        <?php if ($_smarty_tpl->tpl_vars['show_second_level']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                            <div class="ut2-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->_assignInScope('col_width', 100/$_smarty_tpl->tpl_vars['settings_cols']->value);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/horizontal/".((string)((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_filling_type'] ?? null)===null||$tmp==='' ? 'column_filling' ?? null : $tmp))).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </ul>

            </div>
<?php }?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            abt__ut2_go_back: '<?php echo $_smarty_tpl->__("go_back");?>
',
            abt__ut2_go_next: '<?php echo $_smarty_tpl->__("next");?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable21 = ob_get_clean();
if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable21 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_horizontal_menu_slider.js"),$_smarty_tpl);?>

<?php }
}
}
}
