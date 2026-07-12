<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:12
  from 'tygh:views/categories/components/categories_multicolumns.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96045405f8_25463547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02df27efb872b70696d55a5f13a729fff85e03bb' => 
    array (
      0 => 'views/categories/components/categories_multicolumns.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69ad96045405f8_25463547 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/categories/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('categories'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "3" ?? null : $tmp),'assign'=>"splitted_categories"), $_smarty_tpl);?>

<div class="ty-subcategories">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_categories'), 'scats');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('scats')->value) {
$foreach2DoElse = false;
?><div class="ty-subcategories-block"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scats'), 'category');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach3DoElse = false;
if ($_smarty_tpl->getValue('category')) {?><div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
 ty-subcategories-block__item"><?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('category'),$_smarty_tpl->getValue('block')['type']), false, NULL);?><a href="<?php if ($_smarty_tpl->getValue('href')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('category')['category_id']))), ENT_QUOTES, 'UTF-8');
}?>" class="ty-subcategories-block__a"><?php if ($_smarty_tpl->getValue('category')['main_pair']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->getValue('category')['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), (int) 0, $_smarty_current_dir);
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>
</a></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/components/categories_multicolumns.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/categories/components/categories_multicolumns.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('categories'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "3" ?? null : $tmp),'assign'=>"splitted_categories"), $_smarty_tpl);?>

<div class="ty-subcategories">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_categories'), 'scats');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('scats')->value) {
$foreach4DoElse = false;
?><div class="ty-subcategories-block"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scats'), 'category');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach5DoElse = false;
if ($_smarty_tpl->getValue('category')) {?><div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
 ty-subcategories-block__item"><?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('category'),$_smarty_tpl->getValue('block')['type']), false, NULL);?><a href="<?php if ($_smarty_tpl->getValue('href')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('category')['category_id']))), ENT_QUOTES, 'UTF-8');
}?>" class="ty-subcategories-block__a"><?php if ($_smarty_tpl->getValue('category')['main_pair']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->getValue('category')['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), (int) 0, $_smarty_current_dir);
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>
</a></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
