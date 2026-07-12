<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:47:50
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_without_options.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb086a7e667_93514931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b21510bc64d5a30be0c1b01a75e17c27822487' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_without_options.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_list_templates/default_params/".((string)$_smarty_tpl->getValue(\'tmpl\')).".tpl' => 2,
    'tygh:blocks/list_templates/products_list.tpl' => 2,
  ),
))) {
function content_69afb086a7e667_93514931 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_list_html", null, null);?>
	<?php $_smarty_tpl->assign('tmpl', 'products_without_options', false, NULL);?>

	<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/default_params/".((string)$_smarty_tpl->getValue('tmpl')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
	<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('ab__cb_banner_exists')) {?>
	<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_list_html", null, null);?>
    	<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__cb_insert_category_banner')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_list_html'),'products_without_options');?>

	<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_list_html');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_without_options.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_without_options.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_list_html", null, null);?>
	<?php $_smarty_tpl->assign('tmpl', 'products_without_options', false, NULL);?>

	<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/default_params/".((string)$_smarty_tpl->getValue('tmpl')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
	<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('ab__cb_banner_exists')) {?>
	<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_list_html", null, null);?>
    	<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__cb_insert_category_banner')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_list_html'),'products_without_options');?>

	<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_list_html');
}
}
}
