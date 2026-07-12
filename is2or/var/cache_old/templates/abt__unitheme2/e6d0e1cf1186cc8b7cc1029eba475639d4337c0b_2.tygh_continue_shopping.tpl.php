<?php
/* Smarty version 5.4.3, created on 2026-03-08 20:44:09
  from 'tygh:buttons/continue_shopping.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adb569de63f8_64028377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d0e1cf1186cc8b7cc1029eba475639d4337c0b' => 
    array (
      0 => 'buttons/continue_shopping.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69adb569de63f8_64028377 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('continue_shopping','continue_shopping'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("continue_shopping", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>$_smarty_tpl->getValue('but_role'),'but_meta'=>"ty-btn__secondary"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/continue_shopping.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/continue_shopping.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("continue_shopping", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>$_smarty_tpl->getValue('but_role'),'but_meta'=>"ty-btn__secondary"), (int) 0, $_smarty_current_dir);
}
}
}
