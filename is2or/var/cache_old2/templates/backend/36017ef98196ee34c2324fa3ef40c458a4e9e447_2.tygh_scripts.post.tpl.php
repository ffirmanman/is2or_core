<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/ab__extended_comparison_wishlist/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afc2fc85_95400439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36017ef98196ee34c2324fa3ef40c458a4e9e447' => 
    array (
      0 => 'addons/ab__extended_comparison_wishlist/hooks/index/scripts.post.tpl',
      1 => 1767831043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afc2fc85_95400439 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__extended_comparison_wishlist/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ecw.add_products'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
(function(_, $){
_.tr({
'ab__ecw.add_products': '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.add_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
