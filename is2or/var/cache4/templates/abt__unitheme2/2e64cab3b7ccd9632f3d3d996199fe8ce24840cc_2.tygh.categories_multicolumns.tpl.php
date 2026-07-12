<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:45
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/views/categories/components/categories_multicolumns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455d1eaa997_98340676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e64cab3b7ccd9632f3d3d996199fe8ce24840cc' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/views/categories/components/categories_multicolumns.tpl',
      1 => 1736834852,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_683455d1eaa997_98340676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['categories']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "3" ?? null : $tmp),'assign'=>"splitted_categories"),$_smarty_tpl);?>

<div class="ty-subcategories">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_categories']->value, 'scats');
$_smarty_tpl->tpl_vars['scats']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scats']->value) {
$_smarty_tpl->tpl_vars['scats']->do_else = false;
?><div class="ty-subcategories-block"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scats']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
if ($_smarty_tpl->tpl_vars['category']->value) {?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
 ty-subcategories-block__item"><?php $_smarty_tpl->_assignInScope('href', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?><a href="<?php if ($_smarty_tpl->tpl_vars['href']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');
}?>" class="ty-subcategories-block__a"><?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0, true);
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/components/categories_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/components/categories_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['categories']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "3" ?? null : $tmp),'assign'=>"splitted_categories"),$_smarty_tpl);?>

<div class="ty-subcategories">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_categories']->value, 'scats');
$_smarty_tpl->tpl_vars['scats']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scats']->value) {
$_smarty_tpl->tpl_vars['scats']->do_else = false;
?><div class="ty-subcategories-block"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scats']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
if ($_smarty_tpl->tpl_vars['category']->value) {?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
 ty-subcategories-block__item"><?php $_smarty_tpl->_assignInScope('href', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?><a href="<?php if ($_smarty_tpl->tpl_vars['href']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');
}?>" class="ty-subcategories-block__a"><?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0, true);
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
