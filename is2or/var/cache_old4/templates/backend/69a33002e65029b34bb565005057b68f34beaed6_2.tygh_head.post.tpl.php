<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:34
  from 'tygh:addons/mobile_app/hooks/index/head.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fa90b1e9_43178885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69a33002e65029b34bb565005057b68f34beaed6' => 
    array (
      0 => 'addons/mobile_app/hooks/index/head.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fa90b1e9_43178885 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/mobile_app/hooks/index';
if ($_smarty_tpl->getValue('runtime')['controller'] === "addons" && $_smarty_tpl->getValue('runtime')['mode'] === "update" && $_smarty_tpl->getValue('addon')['addon'] === "mobile_app") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/mobile_app/styles.css"), $_smarty_tpl);?>

<?php }
}
}
