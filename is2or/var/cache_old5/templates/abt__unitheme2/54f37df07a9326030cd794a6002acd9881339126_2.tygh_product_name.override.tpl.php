<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:58
  from 'tygh:addons/wishlist/hooks/products/product_name.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6e17fa60_31470590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54f37df07a9326030cd794a6002acd9881339126' => 
    array (
      0 => 'addons/wishlist/hooks/products/product_name.override.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6e17fa60_31470590 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/wishlist/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('is_wishlist')) {
if ($_smarty_tpl->getValue('show_name')) {?>
    <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->getValue('product')['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->getValue('product')['combination'];
}
$_prefixVariable20=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']).$_prefixVariable20)), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
echo $_smarty_tpl->getValue('product')['product'];
if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }
} elseif ($_smarty_tpl->getValue('show_trunc_name')) {?>
    <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->getValue('product')['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->getValue('product')['combination'];
}
$_prefixVariable21=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']).$_prefixVariable21)), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('product')['product'],44,"...",true);
if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_name.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/wishlist/hooks/products/product_name.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('is_wishlist')) {
if ($_smarty_tpl->getValue('show_name')) {?>
    <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->getValue('product')['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->getValue('product')['combination'];
}
$_prefixVariable22=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']).$_prefixVariable22)), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
echo $_smarty_tpl->getValue('product')['product'];
if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }
} elseif ($_smarty_tpl->getValue('show_trunc_name')) {?>
    <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->getValue('product')['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->getValue('product')['combination'];
}
$_prefixVariable23=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']).$_prefixVariable23)), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('product')['product'],44,"...",true);
if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }
}
}
}
}
}
