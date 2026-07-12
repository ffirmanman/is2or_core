<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:38
  from 'tygh:buttons/register_profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabe19eb98_54336615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8fd6c2cba1bb636642daff6698ec02c481fb68' => 
    array (
      0 => 'buttons/register_profile.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69adaabe19eb98_54336615 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('register','register'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_meta'=>"ty-btn__secondary",'but_role'=>$_smarty_tpl->getValue('but_role')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/register_profile.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/register_profile.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_meta'=>"ty-btn__secondary",'but_role'=>$_smarty_tpl->getValue('but_role')), (int) 0, $_smarty_current_dir);
}
}
}
