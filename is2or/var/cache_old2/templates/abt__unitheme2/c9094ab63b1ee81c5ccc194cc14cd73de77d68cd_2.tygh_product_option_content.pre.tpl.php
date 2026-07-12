<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/master_products/hooks/products/product_option_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa97caa85_71902344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9094ab63b1ee81c5ccc194cc14cd73de77d68cd' => 
    array (
      0 => 'addons/master_products/hooks/products/product_option_content.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa97caa85_71902344 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->getValue('product')['master_product_id'] && !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['best_product_offer_id'], false, 2);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_option_content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/product_option_content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->getValue('product')['master_product_id'] && !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['best_product_offer_id'], false, 2);
}
}
}
}
