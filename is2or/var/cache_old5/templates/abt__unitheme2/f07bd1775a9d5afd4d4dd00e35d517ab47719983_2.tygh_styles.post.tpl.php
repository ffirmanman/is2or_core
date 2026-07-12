<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:53
  from 'tygh:addons/ab__image_previewers/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f69c2e384_16595916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f07bd1775a9d5afd4d4dd00e35d517ab47719983' => 
    array (
      0 => 'addons/ab__image_previewers/hooks/index/styles.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f69c2e384_16595916 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__image_previewers/styles.less"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('language_direction') == 'rtl') {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__image_previewers/rtl.less"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/index/styles.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__image_previewers/hooks/index/styles.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__image_previewers/styles.less"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('language_direction') == 'rtl') {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__image_previewers/rtl.less"), $_smarty_tpl);?>

<?php }
}
}
}
