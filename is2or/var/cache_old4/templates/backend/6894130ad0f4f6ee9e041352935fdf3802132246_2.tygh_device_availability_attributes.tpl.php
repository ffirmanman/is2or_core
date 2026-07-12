<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:/var/www/is2or/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components/device_availability_attributes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb55329beb95_71744556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6894130ad0f4f6ee9e041352935fdf3802132246' => 
    array (
      0 => '/var/www/is2or/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components/device_availability_attributes.tpl',
      1 => 1767831042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb55329beb95_71744556 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components';
$_smarty_tpl->assign('devices', (($tmp = $_smarty_tpl->getValue('item')['availability'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('devices'), 'is_available', false, 'device');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->value => $_smarty_tpl->getVariable('is_available')->value) {
$foreach2DoElse = false;
?>
data-ca-device-availability-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('device')), ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->getValue('is_available')) {?>true<?php } else { ?>false<?php }?>"
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__antibot:attributes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__antibot:attributes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
