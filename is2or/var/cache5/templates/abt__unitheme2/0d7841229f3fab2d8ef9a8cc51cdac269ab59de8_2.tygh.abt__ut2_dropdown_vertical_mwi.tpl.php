<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:18:50
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/abt__ut2_dropdown_vertical_mwi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbbaf18960_20681357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7841229f3fab2d8ef9a8cc51cdac269ab59de8' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/abt__ut2_dropdown_vertical_mwi.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/menu/components/vertical/".((string)((($tmp = $_smarty_tpl->tpl_vars[\'block\']->value[\'properties\'][\'abt__ut2_filling_type\'] ?? null)===null||$tmp===\'\' ? \'column_filling\' ?? null : $tmp))).".tpl' => 2,
    'tygh:blocks/menu/components/ajax_upload.tpl' => 2,
  ),
),false)) {
function content_6835bbbaf18960_20681357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['properties']['abt_menu_ajax_load'] = smarty_modifier_enum("YesNo::NO");
$_smarty_tpl->_assignInScope('block', $_tmp_array);
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?><div class="ut2-menu__backdrop cm-external-click" style="display: none" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"></div><?php }?><div class="ut2-menu__header-mobile" style="display: none"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php $_smarty_tpl->_assignInScope('settings_cols', min(6,(($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_columns_count'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)));?><div class="ut2-v__menu ut2-menu" style="--ut2-vertical-menu-block-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'] ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><div class="ut2-menu__inbox<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['open_on_sticky_panel_button'] === "Y") {?> cm-external-triggered<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_compact_view'] === smarty_modifier_enum("YesNo::YES")) {?> compact<?php }?>"><ul class="ut2-menu__list" style="--menu-columns: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
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
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_assignInScope('url_mobile', $_smarty_tpl->tpl_vars['item1_url']->value);
}
ob_start();
echo htmlspecialchars((string) substr(crc32(serialize($_smarty_tpl->tpl_vars['item1']->value)),0,10), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('unique_elm_id', "topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".$_prefixVariable3);
$_smarty_tpl->_assignInScope('subitems_count', smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]));
$_smarty_tpl->_assignInScope('show_second_level', ($_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements'] > 0 || !(isset($_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements']))) && ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value] || ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])));?><li class="ut2-menu__item<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> item-1st-no-drop<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><span class="ty-menu__item-toggle cm-responsive-menu-toggle"><i class="ut2-mark-fold-unfold"></i></span><?php }?><a href="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) < 1) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item1_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['url_mobile']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['item1']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?> class="ut2-menu__link"><span class="ut2-menu__link__in <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'] ?: ''))) {?>has-descr<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}?><span class="ut2-menu__link__text"><span class="ut2-menu__link__name"><?php echo $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                                    <?php if (smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'] ?: ''))) {?>
                                        <span class="ut2-mwi-text"><?php echo htmlspecialchars((string) smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'] ?: '')), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                </span>
                                <?php if ($_smarty_tpl->tpl_vars['show_second_level']->value) {?>
                                    <i class="ut2-icon-outline-arrow_forward"></i>
                                <?php }?>
                            </span>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['show_second_level']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "children", null, null);?>
                            <?php $_smarty_tpl->_assignInScope('col_width', 100/$_smarty_tpl->tpl_vars['settings_cols']->value);?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/vertical/".((string)((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_filling_type'] ?? null)===null||$tmp==='' ? 'column_filling' ?? null : $tmp))).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load'] === smarty_modifier_enum("YesNo::NO")) {?>
                            <div class="ut2-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="ut2-menu__mob-more-cat-link" target="_self">
                                        <span class="ut2-menu__mob-more-cat-link__in"><?php echo $_smarty_tpl->__('all');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <span class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__('view');?>
</span>
                                    </a>
                                <?php }?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children');?>

                            </div>
                        <?php } else { ?>
                            <div class="abt__ut2_am ut2-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['ab__device'], ENT_QUOTES, 'UTF-8');?>
"></div>
                            <?php echo htmlspecialchars((string) fn_abt__ut2_ajax_menu_save($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children'),$_smarty_tpl->tpl_vars['unique_elm_id']->value), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
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
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ut2_mwi_ajax_upload_included')) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ut2_mwi_ajax_upload_included", null, null);?>1<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/ajax_upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/abt__ut2_dropdown_vertical_mwi.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/abt__ut2_dropdown_vertical_mwi.tpl"),$_smarty_tpl);?>
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

<?php if ($_smarty_tpl->tpl_vars['items']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['properties']['abt_menu_ajax_load'] = smarty_modifier_enum("YesNo::NO");
$_smarty_tpl->_assignInScope('block', $_tmp_array);
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?><div class="ut2-menu__backdrop cm-external-click" style="display: none" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"></div><?php }?><div class="ut2-menu__header-mobile" style="display: none"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php $_smarty_tpl->_assignInScope('settings_cols', min(6,(($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_columns_count'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)));?><div class="ut2-v__menu ut2-menu" style="--ut2-vertical-menu-block-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'] ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><div class="ut2-menu__inbox<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['open_on_sticky_panel_button'] === "Y") {?> cm-external-triggered<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__menu_compact_view'] === smarty_modifier_enum("YesNo::YES")) {?> compact<?php }?>"><ul class="ut2-menu__list" style="--menu-columns: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
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
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_assignInScope('url_mobile', $_smarty_tpl->tpl_vars['item1_url']->value);
}
ob_start();
echo htmlspecialchars((string) substr(crc32(serialize($_smarty_tpl->tpl_vars['item1']->value)),0,10), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('unique_elm_id', "topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".$_prefixVariable4);
$_smarty_tpl->_assignInScope('subitems_count', smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]));
$_smarty_tpl->_assignInScope('show_second_level', ($_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements'] > 0 || !(isset($_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements']))) && ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value] || ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])));?><li class="ut2-menu__item<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> item-1st-no-drop<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><span class="ty-menu__item-toggle cm-responsive-menu-toggle"><i class="ut2-mark-fold-unfold"></i></span><?php }?><a href="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) < 1) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item1_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['url_mobile']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['item1']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?> class="ut2-menu__link"><span class="ut2-menu__link__in <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'] ?: ''))) {?>has-descr<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}?><span class="ut2-menu__link__text"><span class="ut2-menu__link__name"><?php echo $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                                    <?php if (smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'] ?: ''))) {?>
                                        <span class="ut2-mwi-text"><?php echo htmlspecialchars((string) smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'] ?: '')), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                </span>
                                <?php if ($_smarty_tpl->tpl_vars['show_second_level']->value) {?>
                                    <i class="ut2-icon-outline-arrow_forward"></i>
                                <?php }?>
                            </span>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['show_second_level']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "children", null, null);?>
                            <?php $_smarty_tpl->_assignInScope('col_width', 100/$_smarty_tpl->tpl_vars['settings_cols']->value);?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/vertical/".((string)((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_filling_type'] ?? null)===null||$tmp==='' ? 'column_filling' ?? null : $tmp))).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load'] === smarty_modifier_enum("YesNo::NO")) {?>
                            <div class="ut2-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="ut2-menu__mob-more-cat-link" target="_self">
                                        <span class="ut2-menu__mob-more-cat-link__in"><?php echo $_smarty_tpl->__('all');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <span class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__('view');?>
</span>
                                    </a>
                                <?php }?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children');?>

                            </div>
                        <?php } else { ?>
                            <div class="abt__ut2_am ut2-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['ab__device'], ENT_QUOTES, 'UTF-8');?>
"></div>
                            <?php echo htmlspecialchars((string) fn_abt__ut2_ajax_menu_save($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children'),$_smarty_tpl->tpl_vars['unique_elm_id']->value), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
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
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ut2_mwi_ajax_upload_included')) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ut2_mwi_ajax_upload_included", null, null);?>1<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/ajax_upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
