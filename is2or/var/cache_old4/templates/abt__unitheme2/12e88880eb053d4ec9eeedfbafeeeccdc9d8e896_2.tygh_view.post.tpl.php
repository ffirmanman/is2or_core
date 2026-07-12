<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:48
  from 'tygh:addons/ab__custom_h1/hooks/categories/view.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0825d231_84600260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e88880eb053d4ec9eeedfbafeeeccdc9d8e896' => 
    array (
      0 => 'addons/ab__custom_h1/hooks/categories/view.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a0825d231_84600260 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__custom_h1/hooks/categories';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['category']), ENT_QUOTES, 'UTF-8');
if ($_REQUEST['page'] > 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ch1.page_no', array('[page]'=>$_smarty_tpl->getValue('_REQUEST')['page']), $_smarty_tpl->getSmarty()->getLanguage());
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__custom_h1/hooks/categories/view.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__custom_h1/hooks/categories/view.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['category']), ENT_QUOTES, 'UTF-8');
if ($_REQUEST['page'] > 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ch1.page_no', array('[page]'=>$_smarty_tpl->getValue('_REQUEST')['page']), $_smarty_tpl->getSmarty()->getLanguage());
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
