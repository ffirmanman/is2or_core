<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/overrides/common/previewer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a003807b0_67324369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb5143dd4edaba12a3e67fb16b3b436e3b9eca5e' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/overrides/common/previewer.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a003807b0_67324369 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/overrides/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><!--override with ab__image_previewers-->
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ip_is_ab_previewer')()) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__image_previewers/previewers/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_image_previewer']).".previewer.js"), $_smarty_tpl);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_image_previewer']).".previewer.js"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/overrides/common/previewer.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/overrides/common/previewer.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><!--override with ab__image_previewers-->
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ip_is_ab_previewer')()) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__image_previewers/previewers/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_image_previewer']).".previewer.js"), $_smarty_tpl);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_image_previewer']).".previewer.js"), $_smarty_tpl);?>

<?php }
}
}
}
