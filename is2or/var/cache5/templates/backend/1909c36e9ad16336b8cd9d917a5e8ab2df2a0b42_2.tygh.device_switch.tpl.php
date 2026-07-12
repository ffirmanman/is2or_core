<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:38:53
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components/device_switch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835c06d1a1029_27107904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1909c36e9ad16336b8cd9d917a5e8ab2df2a0b42' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/overrides/views/block_manager/components/device_switch.tpl',
      1 => 1741957648,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835c06d1a1029_27107904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.view_layout.phone','block_manager.view_layout.tablet','block_manager.view_layout.desktop','block_manager.view_layout.reset_filter'));
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.phone");
$_prefixVariable5=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.tablet");
$_prefixVariable6=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.desktop");
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('devices', array(''=>array("name"=>$_smarty_tpl->__("block_manager.view_layout.reset_filter"),"icon_class"=>'',"btn_class"=>"btn btn-primary cm-reset-device-availability"),"phone"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable5."</span>","icon_class"=>"icon-mobile-phone","btn_class"=>"btn cm-switch-device-availability"),"tablet"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable6."</span>","icon_class"=>"icon-tablet","btn_class"=>"btn cm-switch-device-availability"),"desktop"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable7."</span>","icon_class"=>"icon-desktop","btn_class"=>"btn cm-switch-device-availability")));?>
<div class="device-switch-wrap" id="device_switch">
<div class="btn-group device-switch">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'device', false, 'device_id');
$_smarty_tpl->tpl_vars['device']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device_id']->value => $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->do_else = false;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['device']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['device']->value['icon_class'],'icon_first'=>true,'raw'=>true,'class'=>"device-switch__device ".((string)$_smarty_tpl->tpl_vars['device']->value['btn_class']),'data'=>array("data-ca-device-availability-device"=>$_smarty_tpl->tpl_vars['device_id']->value)), true);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<!--device_switch--></div>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__antibot:switch"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__antibot:switch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__antibot:switch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
