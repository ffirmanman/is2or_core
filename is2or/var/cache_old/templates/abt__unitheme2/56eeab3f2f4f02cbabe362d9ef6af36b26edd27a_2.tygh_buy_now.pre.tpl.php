<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:00
  from 'tygh:addons/wishlist/hooks/products/buy_now.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eca81276_06223237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56eeab3f2f4f02cbabe362d9ef6af36b26edd27a' => 
    array (
      0 => 'addons/wishlist/hooks/products/buy_now.pre.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
  ),
))) {
function content_69ada1eca81276_06223237 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/wishlist/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('hide_wishlist_button')) {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wishlist_but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'wishlist_but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'wishlist_but_role'=>"text"), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/buy_now.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/wishlist/hooks/products/buy_now.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('hide_wishlist_button')) {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wishlist_but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'wishlist_but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'wishlist_but_role'=>"text"), (int) 0, $_smarty_current_dir);
}
}
}
}
