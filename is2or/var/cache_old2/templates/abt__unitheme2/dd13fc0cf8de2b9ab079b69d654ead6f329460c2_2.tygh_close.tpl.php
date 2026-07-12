<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:buttons/close.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa48b614_24153899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd13fc0cf8de2b9ab079b69d654ead6f329460c2' => 
    array (
      0 => 'buttons/close.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69afafaa48b614_24153899 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('close','close'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("close", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>$_smarty_tpl->getValue('but_role')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/close.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/close.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("close", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>$_smarty_tpl->getValue('but_role')), (int) 0, $_smarty_current_dir);
}
}
}
