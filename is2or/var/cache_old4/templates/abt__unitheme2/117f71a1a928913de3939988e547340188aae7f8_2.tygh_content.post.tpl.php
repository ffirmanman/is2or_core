<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/is2or_mobile_menu/hooks/index/content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0175cd27_41696442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '117f71a1a928913de3939988e547340188aae7f8' => 
    array (
      0 => 'addons/is2or_mobile_menu/hooks/index/content.post.tpl',
      1 => 1776512862,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a0175cd27_41696442 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_mobile_menu/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('is2or_uri', $_SERVER['REQUEST_URI'], false, NULL);?>

<?php if (($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('is2or_uri'),"/faq")) || ($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('is2or_uri'),"/buyer-protection")) || ($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('is2or_uri'),"/accepted-payment-methods"))) {?>
<style>
    .ut2-sticky-panel__wrap,
    .ut2-sticky-panel {
        display: none !important;
    }
</style>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_mobile_menu/hooks/index/content.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_mobile_menu/hooks/index/content.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('is2or_uri', $_SERVER['REQUEST_URI'], false, NULL);?>

<?php if (($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('is2or_uri'),"/faq")) || ($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('is2or_uri'),"/buyer-protection")) || ($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('is2or_uri'),"/accepted-payment-methods"))) {?>
<style>
    .ut2-sticky-panel__wrap,
    .ut2-sticky-panel {
        display: none !important;
    }
</style>
<?php }
}
}
}
