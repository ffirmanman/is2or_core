<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:14:19
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835baab619515_99535704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377c45602fcacdebf24ef167138bbf85bc7c4004' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
    'tygh:addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl' => 4,
  ),
),false)) {
function content_6835baab619515_99535704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->_assignInScope('properties', $_smarty_tpl->tpl_vars['block']->value['properties']);
$_smarty_tpl->_assignInScope('content', $_smarty_tpl->tpl_vars['block']->value['content']);
$_smarty_tpl->_assignInScope('first_level_icon_width', $_smarty_tpl->tpl_vars['properties']->value['ab__fn_icon_width']);
$_smarty_tpl->_assignInScope('second_level', (($tmp = $_smarty_tpl->tpl_vars['second_level']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('template_name', (($tmp = $_smarty_tpl->tpl_vars['template_name']->value ?? null)===null||$tmp==='' ? 'one_level' ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['ab__fn_forced_one_level_view']->value) {
$_smarty_tpl->_assignInScope('second_level', false);
$_smarty_tpl->_assignInScope('template_name', 'one_level');
}
$_smarty_tpl->_assignInScope('first_level_scroller', $_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type'] == 'ab__fn_scroller' || $_smarty_tpl->tpl_vars['second_level']->value);
$_smarty_tpl->_assignInScope('second_level_scroller', $_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_second_level_scroll'] == 'Y');
$_smarty_tpl->_assignInScope('first_level_item_tag', 'a');
$_smarty_tpl->_assignInScope('first_level_content_tags', 'div');
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->_assignInScope('first_level_item_tag', 'span');
$_smarty_tpl->_assignInScope('first_level_content_tags', 'span');
}
$_smarty_tpl->_assignInScope('image_path', 'http_image_path');
if ((defined('HTTPS') ? constant('HTTPS') : null) === true) {
$_smarty_tpl->_assignInScope('image_path', 'https_image_path');
}
$_smarty_tpl->_assignInScope('object_type', 'static_data');
$_smarty_tpl->_assignInScope('object_name_filed', 'descr');
if ($_smarty_tpl->tpl_vars['block']->value['type'] == 'ab__fast_navigation_categories') {
$_smarty_tpl->_assignInScope('object_type', 'category');
$_smarty_tpl->_assignInScope('object_name_filed', 'category');
}
echo '<script'; ?>
>(function ( _, $ ) {_.ab__fn.blocks['<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
'] = {block_type: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
",columns: {number_of_columns_desktop: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_desktop_small: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet_small: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_mobile: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_mobile'], ENT_QUOTES, 'UTF-8');?>
},<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?>first_level_scroller: {init_scrollbar: Boolean(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar'] === 'Y', ENT_QUOTES, 'UTF-8');?>
),inited: false,},<?php }
if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>second_level_scroller: { }<?php }?>};})(Tygh, Tygh.$);<?php echo '</script'; ?>
><div class="ab-fn-parent ab-fn-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
 clearfix"><div id="ab__fn-first-level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level ab-fn-clipped <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_name']->value, ENT_QUOTES, 'UTF-8');?>
 active"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$_smarty_tpl->tpl_vars['item']->first = !$_smarty_tpl->tpl_vars['item']->index;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__fast_navigation:first_level_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div data-item-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'UTF-8');?>
" data-item-index="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->index, ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level-item<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?> scroller-item<?php }?> ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');?>
 ab-fn-dont-allow-link<?php echo htmlspecialchars((string) !$_smarty_tpl->tpl_vars['second_level']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__fast_navigation:first_level_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['second_level']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ab-fn-fl-content"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__fast_navigation:first_level_item_image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
 class="ab-fn-image-wrap<?php if (!$_smarty_tpl->tpl_vars['item']->value['image'] || !$_smarty_tpl->tpl_vars['item']->value['image']['icon']) {?> ab-fn-no-image-wrapper<?php }?>" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {
if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_use_origin_image'] == 'Y') {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__loading_spinner'=>true,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0, true);
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__loading_spinner'=>true,'image_height'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'image_width'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0, true);
}
} else { ?><span class="ab-fn-no-image" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px"><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span><?php }?></<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><span class="ab-fn-item-header"><span <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":".((string)$_smarty_tpl->tpl_vars['object_name_filed']->value).":".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text'] && $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_show'] == 'Y') {?><span class="ab-fn-label" style="background: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_background'], ENT_QUOTES, 'UTF-8');?>
;"><span style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_color'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":ab__fn_label_text:".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text'], ENT_QUOTES, 'UTF-8');?>
</span></span><?php }?></span></<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value && $_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar'] == 'Y') {?><div id="ab__fn-scrollbar-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-scrollbar"><div class="ab-fn-scrollbar-plate"></div></div><?php }
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$_smarty_tpl->tpl_vars['item']->first = !$_smarty_tpl->tpl_vars['item']->index;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->_assignInScope('elem_id', ((string)$_smarty_tpl->tpl_vars['block']->value['grid_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['item']->key));
$_smarty_tpl->_assignInScope('is_first', false);
if ($_smarty_tpl->tpl_vars['item']->first) {
$_smarty_tpl->_assignInScope('is_first', true);
}?><div id="ab__fn-second-level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elem_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-second-level <?php if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?> ab-fn-second-level-scroller<?php }?>" data-childs-count="<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['item']->value['subitems']), ENT_QUOTES, 'UTF-8');?>
" data-add-delimeter="<?php if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>false<?php } else { ?>true<?php }?>"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "children", null, null);
if ($_smarty_tpl->tpl_vars['is_first']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'scroller'=>$_smarty_tpl->tpl_vars['second_level_scroller']->value), 0, true);
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax'] == 'Y') {
echo htmlspecialchars((string) fn_ab__fn_ajax_save($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children'),"ab__fn-second-level-".((string)$_smarty_tpl->tpl_vars['elem_id']->value),$_smarty_tpl->tpl_vars['block']->value['type']), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children');
}?></div><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn'] == 'Y') {?><div class="ab-fn-common-link"><?php if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_type'] == 'ab__fn_cbt_btn') {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__primary ty-btn__big <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-common-text-link <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-product-switcher__icon ty-icon-right-circle"></i></a><?php }?></div><?php }?></div><?php }
$_smarty_tpl->_assignInScope('suffix', '');
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {
$_smarty_tpl->_assignInScope('suffix', '.min');
}
echo smarty_function_script(array('src'=>"js/addons/ab__fast_navigation/ab__fn_customer".((string)$_smarty_tpl->tpl_vars['suffix']->value).".js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->_assignInScope('properties', $_smarty_tpl->tpl_vars['block']->value['properties']);
$_smarty_tpl->_assignInScope('content', $_smarty_tpl->tpl_vars['block']->value['content']);
$_smarty_tpl->_assignInScope('first_level_icon_width', $_smarty_tpl->tpl_vars['properties']->value['ab__fn_icon_width']);
$_smarty_tpl->_assignInScope('second_level', (($tmp = $_smarty_tpl->tpl_vars['second_level']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('template_name', (($tmp = $_smarty_tpl->tpl_vars['template_name']->value ?? null)===null||$tmp==='' ? 'one_level' ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['ab__fn_forced_one_level_view']->value) {
$_smarty_tpl->_assignInScope('second_level', false);
$_smarty_tpl->_assignInScope('template_name', 'one_level');
}
$_smarty_tpl->_assignInScope('first_level_scroller', $_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type'] == 'ab__fn_scroller' || $_smarty_tpl->tpl_vars['second_level']->value);
$_smarty_tpl->_assignInScope('second_level_scroller', $_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_second_level_scroll'] == 'Y');
$_smarty_tpl->_assignInScope('first_level_item_tag', 'a');
$_smarty_tpl->_assignInScope('first_level_content_tags', 'div');
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->_assignInScope('first_level_item_tag', 'span');
$_smarty_tpl->_assignInScope('first_level_content_tags', 'span');
}
$_smarty_tpl->_assignInScope('image_path', 'http_image_path');
if ((defined('HTTPS') ? constant('HTTPS') : null) === true) {
$_smarty_tpl->_assignInScope('image_path', 'https_image_path');
}
$_smarty_tpl->_assignInScope('object_type', 'static_data');
$_smarty_tpl->_assignInScope('object_name_filed', 'descr');
if ($_smarty_tpl->tpl_vars['block']->value['type'] == 'ab__fast_navigation_categories') {
$_smarty_tpl->_assignInScope('object_type', 'category');
$_smarty_tpl->_assignInScope('object_name_filed', 'category');
}
echo '<script'; ?>
>(function ( _, $ ) {_.ab__fn.blocks['<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
'] = {block_type: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
",columns: {number_of_columns_desktop: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_desktop_small: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet_small: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_mobile: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_mobile'], ENT_QUOTES, 'UTF-8');?>
},<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?>first_level_scroller: {init_scrollbar: Boolean(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar'] === 'Y', ENT_QUOTES, 'UTF-8');?>
),inited: false,},<?php }
if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>second_level_scroller: { }<?php }?>};})(Tygh, Tygh.$);<?php echo '</script'; ?>
><div class="ab-fn-parent ab-fn-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
 clearfix"><div id="ab__fn-first-level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level ab-fn-clipped <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_name']->value, ENT_QUOTES, 'UTF-8');?>
 active"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$_smarty_tpl->tpl_vars['item']->first = !$_smarty_tpl->tpl_vars['item']->index;
$__foreach_item_2_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__fast_navigation:first_level_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div data-item-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'UTF-8');?>
" data-item-index="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->index, ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level-item<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?> scroller-item<?php }?> ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');?>
 ab-fn-dont-allow-link<?php echo htmlspecialchars((string) !$_smarty_tpl->tpl_vars['second_level']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__fast_navigation:first_level_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['second_level']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ab-fn-fl-content"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__fast_navigation:first_level_item_image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
 class="ab-fn-image-wrap<?php if (!$_smarty_tpl->tpl_vars['item']->value['image'] || !$_smarty_tpl->tpl_vars['item']->value['image']['icon']) {?> ab-fn-no-image-wrapper<?php }?>" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {
if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_use_origin_image'] == 'Y') {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__loading_spinner'=>true,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0, true);
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__loading_spinner'=>true,'image_height'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'image_width'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0, true);
}
} else { ?><span class="ab-fn-no-image" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px"><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span><?php }?></<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><span class="ab-fn-item-header"><span <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":".((string)$_smarty_tpl->tpl_vars['object_name_filed']->value).":".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text'] && $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_show'] == 'Y') {?><span class="ab-fn-label" style="background: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_background'], ENT_QUOTES, 'UTF-8');?>
;"><span style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_color'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":ab__fn_label_text:".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text'], ENT_QUOTES, 'UTF-8');?>
</span></span><?php }?></span></<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value && $_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar'] == 'Y') {?><div id="ab__fn-scrollbar-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-scrollbar"><div class="ab-fn-scrollbar-plate"></div></div><?php }
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$_smarty_tpl->tpl_vars['item']->first = !$_smarty_tpl->tpl_vars['item']->index;
$__foreach_item_3_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->_assignInScope('elem_id', ((string)$_smarty_tpl->tpl_vars['block']->value['grid_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['item']->key));
$_smarty_tpl->_assignInScope('is_first', false);
if ($_smarty_tpl->tpl_vars['item']->first) {
$_smarty_tpl->_assignInScope('is_first', true);
}?><div id="ab__fn-second-level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elem_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-second-level <?php if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?> ab-fn-second-level-scroller<?php }?>" data-childs-count="<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['item']->value['subitems']), ENT_QUOTES, 'UTF-8');?>
" data-add-delimeter="<?php if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>false<?php } else { ?>true<?php }?>"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "children", null, null);
if ($_smarty_tpl->tpl_vars['is_first']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'scroller'=>$_smarty_tpl->tpl_vars['second_level_scroller']->value), 0, true);
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax'] == 'Y') {
echo htmlspecialchars((string) fn_ab__fn_ajax_save($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children'),"ab__fn-second-level-".((string)$_smarty_tpl->tpl_vars['elem_id']->value),$_smarty_tpl->tpl_vars['block']->value['type']), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children');
}?></div><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn'] == 'Y') {?><div class="ab-fn-common-link"><?php if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_type'] == 'ab__fn_cbt_btn') {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__primary ty-btn__big <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-common-text-link <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-product-switcher__icon ty-icon-right-circle"></i></a><?php }?></div><?php }?></div><?php }
$_smarty_tpl->_assignInScope('suffix', '');
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {
$_smarty_tpl->_assignInScope('suffix', '.min');
}
echo smarty_function_script(array('src'=>"js/addons/ab__fast_navigation/ab__fn_customer".((string)$_smarty_tpl->tpl_vars['suffix']->value).".js"),$_smarty_tpl);
}
}
}
