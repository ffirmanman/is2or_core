<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:53
  from 'tygh:addons/ab__stickers/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f69bcfb65_48136836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32a24a2c6a929aa42696a7800ac3dd91a866fa69' => 
    array (
      0 => 'addons/ab__stickers/hooks/index/styles.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f69bcfb65_48136836 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/styles.less"), $_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_sticker_get_ts_appearance_styles')(), 'appearance_style');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('appearance_style')->key => $_smarty_tpl->getVariable('appearance_style')->value) {
$foreach8DoElse = false;
$foreach8Backup = clone $_smarty_tpl->getVariable('appearance_style');
?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/".((string)$_smarty_tpl->getVariable('appearance_style')->key)."_stickers.less"), $_smarty_tpl);?>

<?php
$_smarty_tpl->setVariable('appearance_style', $foreach8Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/theme.less"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('language_direction') == "rtl") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/rtl.less"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/index/styles.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/hooks/index/styles.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/styles.less"), $_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_sticker_get_ts_appearance_styles')(), 'appearance_style');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('appearance_style')->key => $_smarty_tpl->getVariable('appearance_style')->value) {
$foreach9DoElse = false;
$foreach9Backup = clone $_smarty_tpl->getVariable('appearance_style');
?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/".((string)$_smarty_tpl->getVariable('appearance_style')->key)."_stickers.less"), $_smarty_tpl);?>

<?php
$_smarty_tpl->setVariable('appearance_style', $foreach9Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/theme.less"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('language_direction') == "rtl") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/rtl.less"), $_smarty_tpl);?>

<?php }
}
}
}
