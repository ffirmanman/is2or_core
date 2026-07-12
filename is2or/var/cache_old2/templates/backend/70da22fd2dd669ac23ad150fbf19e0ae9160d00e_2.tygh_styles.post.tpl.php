<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:45
  from 'tygh:addons/store_locator/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ad1df3a2_22417433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70da22fd2dd669ac23ad150fbf19e0ae9160d00e' => 
    array (
      0 => 'addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1767831037,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ad1df3a2_22417433 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/store_locator/hooks/index';
if ($_smarty_tpl->getValue('store_locator_shipping') && $_smarty_tpl->getValue('shipping')['company_id'] == 0) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/store_locator/styles.less"), $_smarty_tpl);?>

<?php }
}
}
