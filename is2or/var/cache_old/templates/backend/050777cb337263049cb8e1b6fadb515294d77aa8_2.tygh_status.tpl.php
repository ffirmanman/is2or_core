<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/status.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46791e5b75_18653490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '050777cb337263049cb8e1b6fadb515294d77aa8' => 
    array (
      0 => 'common/status.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae46791e5b75_18653490 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
if (!$_smarty_tpl->getValue('order_status_descr')) {?>
    <?php if (!$_smarty_tpl->getValue('status_type')) {
$_smarty_tpl->assign('status_type', (defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null), false, NULL);
}?>
    <?php $_smarty_tpl->assign('order_status_descr', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_simple_statuses')($_smarty_tpl->getValue('status_type')), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('display') == "view") {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('order_status_descr')[$_smarty_tpl->getValue('status')]), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('display') == "select") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_options')->handle(array('name'=>$_smarty_tpl->getValue('name'),'options'=>$_smarty_tpl->getValue('order_status_descr'),'selected'=>$_smarty_tpl->getValue('status'),'id'=>$_smarty_tpl->getValue('select_id')), $_smarty_tpl);
} elseif ($_smarty_tpl->getValue('display') == "checkboxes") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_checkboxes')->handle(array('name'=>$_smarty_tpl->getValue('name'),'options'=>$_smarty_tpl->getValue('order_status_descr'),'selected'=>$_smarty_tpl->getValue('status'),'columns'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? 4 ?? null : $tmp),'assign'=>'_html_checkboxes','labels'=>false), $_smarty_tpl);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_html_checkboxes'), 'item');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach9DoElse = false;
?><label><?php echo $_smarty_tpl->getValue('item');?>
</label><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
