<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:/var/www/is2or/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components/device_switch.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5532add9a4_68420247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '167a9fa9d0a37d7939790439f888026bef495105' => 
    array (
      0 => '/var/www/is2or/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components/device_switch.tpl',
      1 => 1767831042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5532add9a4_68420247 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components';
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.view_layout.phone','block_manager.view_layout.tablet','block_manager.view_layout.desktop','block_manager.view_layout.reset_filter'));
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.view_layout.phone", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable5=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.view_layout.tablet", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable6=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.view_layout.desktop", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->assign('devices', array(''=>array("name"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.view_layout.reset_filter", [], $_smarty_tpl->getSmarty()->getLanguage()),"icon_class"=>'',"btn_class"=>"btn btn-primary cm-reset-device-availability"),"phone"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable5."</span>","icon_class"=>"icon-mobile-phone","btn_class"=>"btn cm-switch-device-availability"),"tablet"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable6."</span>","icon_class"=>"icon-tablet","btn_class"=>"btn cm-switch-device-availability"),"desktop"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable7."</span>","icon_class"=>"icon-desktop","btn_class"=>"btn cm-switch-device-availability")), false, NULL);?>
<div class="device-switch-wrap" id="device_switch">
<div class="btn-group device-switch">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('devices'), 'device', false, 'device_id');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device_id')->value => $_smarty_tpl->getVariable('device')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->getValue('device')['name'],'icon'=>$_smarty_tpl->getValue('device')['icon_class'],'icon_first'=>true,'raw'=>true,'class'=>"device-switch__device ".((string)$_smarty_tpl->getValue('device')['btn_class']),'data'=>array("data-ca-device-availability-device"=>$_smarty_tpl->getValue('device_id'))), true);?>

<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<!--device_switch--></div>
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__antibot:switch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__antibot:switch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
