<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:22:14
  from 'tygh:addons/ab__preload/hooks/products/product_block_image.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4e96123944_36743349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09a4def0ca7d4957396c50389efa16f30a6600f7' => 
    array (
      0 => 'addons/ab__preload/hooks/products/product_block_image.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4e96123944_36743349 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('block')['type'] == "main") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('name'=>"products_without_options",'assign'=>"c",'print'=>false), $_smarty_tpl);?>

    <?php if ($_smarty_tpl->getValue('c') <= $_smarty_tpl->getValue('ab__preload_settings')['products_without_options']-$_smarty_tpl->getValue('ab__preload_settings')['ignore_products_without_options']) {?>
        <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('ab__preload_settings')['products_without_options_pov'], false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/products/product_block_image.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/products/product_block_image.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('block')['type'] == "main") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('name'=>"products_without_options",'assign'=>"c",'print'=>false), $_smarty_tpl);?>

    <?php if ($_smarty_tpl->getValue('c') <= $_smarty_tpl->getValue('ab__preload_settings')['products_without_options']-$_smarty_tpl->getValue('ab__preload_settings')['ignore_products_without_options']) {?>
        <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('ab__preload_settings')['products_without_options_pov'], false, 2);?>
    <?php }
}
}
}
}
