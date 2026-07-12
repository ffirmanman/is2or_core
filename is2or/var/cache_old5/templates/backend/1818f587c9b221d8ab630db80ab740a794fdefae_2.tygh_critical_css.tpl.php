<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:21
  from 'tygh:common/critical_css.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed155d134_13833646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1818f587c9b221d8ab630db80ab740a794fdefae' => 
    array (
      0 => 'common/critical_css.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:design/backend/css/tygh/critical.css' => 1,
  ),
))) {
function content_6a133ed155d134_13833646 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
$_smarty_tpl->assign('enable_minify_critical_css', (($tmp = $_smarty_tpl->getValue('enable_minify_critical_css') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "critical_css", 'critical_css', null);?><style><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:critical_css"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->renderSubTemplate("tygh:design/backend/css/tygh/critical.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK")) {?>input, textarea, button {--cs-critical-css-border-color: #8f9499;}<?php } elseif ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::SYSTEM")) {?>@media (prefers-color-scheme: light) {input, textarea, button {--cs-critical-css-border-color: #dde4ef;}}@media (prefers-color-scheme: dark) {input, textarea, button {--cs-critical-css-border-color: #8f9499;}}<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:critical_css"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></style><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('enable_minify_critical_css')) {
ob_start();?>{<?php $_prefixVariable2=ob_get_clean();
ob_start();?>{<?php $_prefixVariable3=ob_get_clean();
ob_start();?>}<?php $_prefixVariable4=ob_get_clean();
ob_start();?>}<?php $_prefixVariable5=ob_get_clean();
ob_start();?>{<?php $_prefixVariable6=ob_get_clean();
ob_start();?>{<?php $_prefixVariable7=ob_get_clean();
ob_start();?>}<?php $_prefixVariable8=ob_get_clean();
ob_start();?>}<?php $_prefixVariable9=ob_get_clean();
$_smarty_tpl->assign('critical_css', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('critical_css'),"/[\r\n\t]/",''),"  "," "),"  "," ")," ".$_prefixVariable2,$_prefixVariable3)," ".$_prefixVariable4,$_prefixVariable5),$_prefixVariable6." ",$_prefixVariable7),$_prefixVariable8." ",$_prefixVariable9),", ",","),": ",":"),"; ",";"), false, NULL);
}
echo $_smarty_tpl->getValue('critical_css');?>

<?php }
}
