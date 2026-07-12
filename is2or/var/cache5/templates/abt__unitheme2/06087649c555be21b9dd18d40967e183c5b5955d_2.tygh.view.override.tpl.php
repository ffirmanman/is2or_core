<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:20:43
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__landing_categories/hooks/categories/view.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc2bb8e2f3_81555721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06087649c555be21b9dd18d40967e183c5b5955d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__landing_categories/hooks/categories/view.override.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6835bc2bb8e2f3_81555721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__lc.landing_category.show_more','ab__lc.landing_category.show_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!empty($_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value)) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1'])) {
echo htmlspecialchars((string) smarty_modifier_trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_trim($_smarty_tpl->tpl_vars['category_data']->value['category']), ENT_QUOTES, 'UTF-8');
}?></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('show_max_item', (($tmp = $_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('thumb_width', empty($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width']) ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'] : $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width']);
$_smarty_tpl->_assignInScope('thumb_height', empty($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height']) ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'] : $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height']);
$_smarty_tpl->_assignInScope('item_columns', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['columns_count']);
echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>
<div class="row-fluid ab-lc-wrap ab-lc-cols-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value, 'item1', false, NULL, 'item1', array (
));
$_smarty_tpl->tpl_vars['item1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->do_else = false;
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__landing_categories:category"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__landing_categories:category"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__landing_categories:category"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['item1']->value['param_id']) {
echo smarty_function_counter(array('print'=>false),$_smarty_tpl);?>
<div class="ab-lc-landing"><div class="head"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item1']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><div class="image"><?php if ($_smarty_tpl->tpl_vars['item1']->value['main_pair'] || $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>(($tmp = $_smarty_tpl->tpl_vars['item1']->value['main_pair'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'] ?? null : $tmp),'image_width'=>$_smarty_tpl->tpl_vars['thumb_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumb_height']->value,'ab__is_object_name'=>$_smarty_tpl->tpl_vars['item1']->value['item']), 0, true);
}?></div><div class="cat-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['item'], ENT_QUOTES, 'UTF-8');?>
</div></a></div><?php if (intval($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories']) > 0 && !empty($_smarty_tpl->tpl_vars['item1']->value['subitems'])) {?><ul class="items-level-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['show_max_item']->value) {
break 1;
}?><li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php if (count($_smarty_tpl->tpl_vars['item1']->value['subitems']) > $_smarty_tpl->tpl_vars['show_max_item']->value) {?><ul class="hidden-items-level-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['show_max_item']->value) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><span class="show-hidden-items-level-2"><?php echo $_smarty_tpl->__("ab__lc.landing_category.show_more");?>
</span><?php }
}?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
ob_start();
echo smarty_function_counter(array(),$_smarty_tpl);
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->tpl_vars['blank'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['blank']->step = 1;$_smarty_tpl->tpl_vars['blank']->total = (int) ceil(($_smarty_tpl->tpl_vars['blank']->step > 0 ? $_prefixVariable5%$_smarty_tpl->tpl_vars['item_columns']->value+1 - (0) : 0-($_prefixVariable5%$_smarty_tpl->tpl_vars['item_columns']->value)+1)/abs($_smarty_tpl->tpl_vars['blank']->step));
if ($_smarty_tpl->tpl_vars['blank']->total > 0) {
for ($_smarty_tpl->tpl_vars['blank']->value = 0, $_smarty_tpl->tpl_vars['blank']->iteration = 1;$_smarty_tpl->tpl_vars['blank']->iteration <= $_smarty_tpl->tpl_vars['blank']->total;$_smarty_tpl->tpl_vars['blank']->value += $_smarty_tpl->tpl_vars['blank']->step, $_smarty_tpl->tpl_vars['blank']->iteration++) {
$_smarty_tpl->tpl_vars['blank']->first = $_smarty_tpl->tpl_vars['blank']->iteration === 1;$_smarty_tpl->tpl_vars['blank']->last = $_smarty_tpl->tpl_vars['blank']->iteration === $_smarty_tpl->tpl_vars['blank']->total;?><div class="ab-lc-landing"></div><?php }
}
?></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?><div class="ab-category-description ty-wysiwyg-content ty-mt-l" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__landing_categories/hooks/categories/view.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__landing_categories/hooks/categories/view.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!empty($_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value)) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1'])) {
echo htmlspecialchars((string) smarty_modifier_trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_trim($_smarty_tpl->tpl_vars['category_data']->value['category']), ENT_QUOTES, 'UTF-8');
}?></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('show_max_item', (($tmp = $_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('thumb_width', empty($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width']) ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'] : $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width']);
$_smarty_tpl->_assignInScope('thumb_height', empty($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height']) ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'] : $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height']);
$_smarty_tpl->_assignInScope('item_columns', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['ab__landing_categories']['columns_count']);
echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>
<div class="row-fluid ab-lc-wrap ab-lc-cols-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value, 'item1', false, NULL, 'item1', array (
));
$_smarty_tpl->tpl_vars['item1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->do_else = false;
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__landing_categories:category"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__landing_categories:category"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__landing_categories:category"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['item1']->value['param_id']) {
echo smarty_function_counter(array('print'=>false),$_smarty_tpl);?>
<div class="ab-lc-landing"><div class="head"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item1']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><div class="image"><?php if ($_smarty_tpl->tpl_vars['item1']->value['main_pair'] || $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>(($tmp = $_smarty_tpl->tpl_vars['item1']->value['main_pair'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'] ?? null : $tmp),'image_width'=>$_smarty_tpl->tpl_vars['thumb_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumb_height']->value,'ab__is_object_name'=>$_smarty_tpl->tpl_vars['item1']->value['item']), 0, true);
}?></div><div class="cat-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['item'], ENT_QUOTES, 'UTF-8');?>
</div></a></div><?php if (intval($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories']) > 0 && !empty($_smarty_tpl->tpl_vars['item1']->value['subitems'])) {?><ul class="items-level-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['show_max_item']->value) {
break 1;
}?><li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php if (count($_smarty_tpl->tpl_vars['item1']->value['subitems']) > $_smarty_tpl->tpl_vars['show_max_item']->value) {?><ul class="hidden-items-level-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['show_max_item']->value) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><span class="show-hidden-items-level-2"><?php echo $_smarty_tpl->__("ab__lc.landing_category.show_more");?>
</span><?php }
}?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
ob_start();
echo smarty_function_counter(array(),$_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->tpl_vars['blank'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['blank']->step = 1;$_smarty_tpl->tpl_vars['blank']->total = (int) ceil(($_smarty_tpl->tpl_vars['blank']->step > 0 ? $_prefixVariable6%$_smarty_tpl->tpl_vars['item_columns']->value+1 - (0) : 0-($_prefixVariable6%$_smarty_tpl->tpl_vars['item_columns']->value)+1)/abs($_smarty_tpl->tpl_vars['blank']->step));
if ($_smarty_tpl->tpl_vars['blank']->total > 0) {
for ($_smarty_tpl->tpl_vars['blank']->value = 0, $_smarty_tpl->tpl_vars['blank']->iteration = 1;$_smarty_tpl->tpl_vars['blank']->iteration <= $_smarty_tpl->tpl_vars['blank']->total;$_smarty_tpl->tpl_vars['blank']->value += $_smarty_tpl->tpl_vars['blank']->step, $_smarty_tpl->tpl_vars['blank']->iteration++) {
$_smarty_tpl->tpl_vars['blank']->first = $_smarty_tpl->tpl_vars['blank']->iteration === 1;$_smarty_tpl->tpl_vars['blank']->last = $_smarty_tpl->tpl_vars['blank']->iteration === $_smarty_tpl->tpl_vars['blank']->total;?><div class="ab-lc-landing"></div><?php }
}
?></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?><div class="ab-category-description ty-wysiwyg-content ty-mt-l" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
