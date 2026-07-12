<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:07
  from 'tygh:addons/ab__preload/hooks/index/content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa7c3dcd0_71385651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65eada8d131f95dd59e6b5883beef8dfbd4b2e67' => 
    array (
      0 => 'addons/ab__preload/hooks/index/content.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa7c3dcd0_71385651 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('ab__p_ignore_product_preload_positions') && $_smarty_tpl->getValue('ab__p_ignore_product_preload_layout') && $_smarty_tpl->getValue('ab__preload_settings')[$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout')]) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__p_ignore_product_preload_positions'), 'pos');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pos')->value) {
$foreach14DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('pos') <= $_smarty_tpl->getValue('ab__preload_settings')[$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout')]) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('ab__preload_settings') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["ignore_".((string)$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout'))] = $_smarty_tpl->getValue('ab__preload_settings')["ignore_".((string)$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout'))]+1;
$_smarty_tpl->assign('ab__preload_settings', $_tmp_array, false, 32);?>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/index/content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/index/content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('ab__p_ignore_product_preload_positions') && $_smarty_tpl->getValue('ab__p_ignore_product_preload_layout') && $_smarty_tpl->getValue('ab__preload_settings')[$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout')]) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__p_ignore_product_preload_positions'), 'pos');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pos')->value) {
$foreach15DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('pos') <= $_smarty_tpl->getValue('ab__preload_settings')[$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout')]) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('ab__preload_settings') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["ignore_".((string)$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout'))] = $_smarty_tpl->getValue('ab__preload_settings')["ignore_".((string)$_smarty_tpl->getValue('ab__p_ignore_product_preload_layout'))]+1;
$_smarty_tpl->assign('ab__preload_settings', $_tmp_array, false, 32);?>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
