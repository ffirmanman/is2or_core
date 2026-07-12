<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:55:28
  from 'tygh:addons/ab__deal_of_the_day/components/category_filter_item.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae8b00965205_48895961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cdd1641e5d1f314962c7bae3e261a10e7c469b1' => 
    array (
      0 => 'addons/ab__deal_of_the_day/components/category_filter_item.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/ab__deal_of_the_day/components/category_filter_item.tpl' => 3,
  ),
))) {
function content_69ae8b00965205_48895961 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__deal_of_the_day/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('is_active', $_smarty_tpl->getValue('category')['category_id'] == $_smarty_tpl->getValue('selected_category_id'), false, NULL);?>

<?php $_smarty_tpl->assign('url_pattern', "promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']), false, NULL);
if ($_smarty_tpl->getValue('category')['category_id']) {?>
    <?php $_smarty_tpl->assign('url_pattern', ((string)$_smarty_tpl->getValue('url_pattern'))."&cid=".((string)$_smarty_tpl->getValue('category')['category_id']), false, NULL);
}?>
<li class="<?php if ($_smarty_tpl->getValue('category')['level'] > 0) {?>level-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['level']), ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->getValue('category')['all_categories']) {?>all-categories <?php }
if ($_smarty_tpl->getValue('category')['icon']) {?>cat-icon <?php }
if ($_smarty_tpl->getValue('is_active')) {?>active<?php }?>"><?php if (!$_smarty_tpl->getValue('is_active')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('url_pattern'))), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('category')['icon']) {?><span class="ab-dotd-filter-icon"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('category')['icon'],'image_width'=>24), (int) 0, $_smarty_current_dir);
?></span><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('category')['total_products']) {?> <span class="cat-count">(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['total_products']), ENT_QUOTES, 'UTF-8');?>
)</span><?php }
if (!$_smarty_tpl->getValue('is_active')) {?></a><?php }?></li><?php if ($_smarty_tpl->getValue('category')['subcategories']) {?><li><ul><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['subcategories'], '_category');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_category')->value) {
$foreach4DoElse = false;
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/category_filter_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->getValue('_category')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul></li><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/category_filter_item.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/components/category_filter_item.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('is_active', $_smarty_tpl->getValue('category')['category_id'] == $_smarty_tpl->getValue('selected_category_id'), false, NULL);?>

<?php $_smarty_tpl->assign('url_pattern', "promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']), false, NULL);
if ($_smarty_tpl->getValue('category')['category_id']) {?>
    <?php $_smarty_tpl->assign('url_pattern', ((string)$_smarty_tpl->getValue('url_pattern'))."&cid=".((string)$_smarty_tpl->getValue('category')['category_id']), false, NULL);
}?>
<li class="<?php if ($_smarty_tpl->getValue('category')['level'] > 0) {?>level-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['level']), ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->getValue('category')['all_categories']) {?>all-categories <?php }
if ($_smarty_tpl->getValue('category')['icon']) {?>cat-icon <?php }
if ($_smarty_tpl->getValue('is_active')) {?>active<?php }?>"><?php if (!$_smarty_tpl->getValue('is_active')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('url_pattern'))), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('category')['icon']) {?><span class="ab-dotd-filter-icon"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('category')['icon'],'image_width'=>24), (int) 0, $_smarty_current_dir);
?></span><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('category')['total_products']) {?> <span class="cat-count">(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['total_products']), ENT_QUOTES, 'UTF-8');?>
)</span><?php }
if (!$_smarty_tpl->getValue('is_active')) {?></a><?php }?></li><?php if ($_smarty_tpl->getValue('category')['subcategories']) {?><li><ul><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['subcategories'], '_category');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_category')->value) {
$foreach5DoElse = false;
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/category_filter_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->getValue('_category')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul></li><?php }
}
}
}
