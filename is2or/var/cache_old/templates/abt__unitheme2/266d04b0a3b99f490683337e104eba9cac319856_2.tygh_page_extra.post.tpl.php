<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:addons/ab__custom_h1/hooks/pages/page_extra.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae615274baa4_14470372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266d04b0a3b99f490683337e104eba9cac319856' => 
    array (
      0 => 'addons/ab__custom_h1/hooks/pages/page_extra.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae615274baa4_14470372 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__custom_h1/hooks/pages';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');
if ($_REQUEST['page'] > 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ch1.page_no', array('[page]'=>$_smarty_tpl->getValue('_REQUEST')['page']), $_smarty_tpl->getSmarty()->getLanguage());
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__custom_h1/hooks/pages/page_extra.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__custom_h1/hooks/pages/page_extra.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');
if ($_REQUEST['page'] > 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ch1.page_no', array('[page]'=>$_smarty_tpl->getValue('_REQUEST')['page']), $_smarty_tpl->getSmarty()->getLanguage());
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
