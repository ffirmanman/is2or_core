<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:36
  from 'tygh:addons/ab__preload/hooks/index/head_scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fca9f973_81582238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '776faaffa5e791a94b87d45f2eaa7a8ab508b6fb' => 
    array (
      0 => 'addons/ab__preload/hooks/index/head_scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fca9f973_81582238 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('timestamp', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__p_get_css_timestamp')(), false, NULL);
$_smarty_tpl->assign('links', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__p_get_links')(), false, NULL);?>

<?php if ($_smarty_tpl->getValue('links') && $_smarty_tpl->getValue('timestamp')) {?>
    <?php $_smarty_tpl->assign('formats', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')('ab__preload','formats'), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('links'), 'link');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('link')->value) {
$foreach10DoElse = false;
?>
        <link rel="preload" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link')['url']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('link')['use_timestamp'] == 'Y') {?>?<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('timestamp')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['type']) {?> as="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['type']), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['mime_type']) {?> type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['mime_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> crossorigin="anonymous">
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/index/head_scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/index/head_scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('timestamp', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__p_get_css_timestamp')(), false, NULL);
$_smarty_tpl->assign('links', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__p_get_links')(), false, NULL);?>

<?php if ($_smarty_tpl->getValue('links') && $_smarty_tpl->getValue('timestamp')) {?>
    <?php $_smarty_tpl->assign('formats', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')('ab__preload','formats'), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('links'), 'link');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('link')->value) {
$foreach11DoElse = false;
?>
        <link rel="preload" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link')['url']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('link')['use_timestamp'] == 'Y') {?>?<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('timestamp')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['type']) {?> as="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['type']), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['mime_type']) {?> type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('formats')[$_smarty_tpl->getValue('link')['format']]['mime_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> crossorigin="anonymous">
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
