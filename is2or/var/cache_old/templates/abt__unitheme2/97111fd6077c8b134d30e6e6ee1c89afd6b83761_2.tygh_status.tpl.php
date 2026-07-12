<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:37:46
  from 'tygh:common/status.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea2fae21724_39239865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97111fd6077c8b134d30e6e6ee1c89afd6b83761' => 
    array (
      0 => 'common/status.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea2fae21724_39239865 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('order_status_descr')) {?>
    <?php if (!$_smarty_tpl->getValue('status_type')) {
$_smarty_tpl->assign('status_type', (defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null), false, NULL);
}?>
    <?php $_smarty_tpl->assign('order_status_descr', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_simple_statuses')($_smarty_tpl->getValue('status_type'),true,true), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('display') == "view") {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('order_status_descr')[$_smarty_tpl->getValue('status')]), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('display') == "select") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_options')->handle(array('name'=>$_smarty_tpl->getValue('name'),'options'=>$_smarty_tpl->getValue('order_status_descr'),'selected'=>$_smarty_tpl->getValue('status'),'id'=>$_smarty_tpl->getValue('select_id')), $_smarty_tpl);
} elseif ($_smarty_tpl->getValue('display') == "checkboxes") {?><div class="ty-status-info"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_checkboxes')->handle(array('name'=>$_smarty_tpl->getValue('name'),'options'=>$_smarty_tpl->getValue('order_status_descr'),'selected'=>$_smarty_tpl->getValue('status'),'columns'=>4,'class'=>$_smarty_tpl->getValue('checkboxes_meta')), $_smarty_tpl);?>
</div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/status.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/status.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('order_status_descr')) {?>
    <?php if (!$_smarty_tpl->getValue('status_type')) {
$_smarty_tpl->assign('status_type', (defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null), false, NULL);
}?>
    <?php $_smarty_tpl->assign('order_status_descr', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_simple_statuses')($_smarty_tpl->getValue('status_type'),true,true), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('display') == "view") {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('order_status_descr')[$_smarty_tpl->getValue('status')]), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('display') == "select") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_options')->handle(array('name'=>$_smarty_tpl->getValue('name'),'options'=>$_smarty_tpl->getValue('order_status_descr'),'selected'=>$_smarty_tpl->getValue('status'),'id'=>$_smarty_tpl->getValue('select_id')), $_smarty_tpl);
} elseif ($_smarty_tpl->getValue('display') == "checkboxes") {?><div class="ty-status-info"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_checkboxes')->handle(array('name'=>$_smarty_tpl->getValue('name'),'options'=>$_smarty_tpl->getValue('order_status_descr'),'selected'=>$_smarty_tpl->getValue('status'),'columns'=>4,'class'=>$_smarty_tpl->getValue('checkboxes_meta')), $_smarty_tpl);?>
</div><?php }
}
}
}
