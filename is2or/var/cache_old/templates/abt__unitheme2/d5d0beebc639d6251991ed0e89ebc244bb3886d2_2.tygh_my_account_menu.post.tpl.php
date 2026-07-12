<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:31
  from 'tygh:addons/rma/hooks/profiles/my_account_menu.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94734ff705_60018518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d0beebc639d6251991ed0e89ebc244bb3886d2' => 
    array (
      0 => 'addons/rma/hooks/profiles/my_account_menu.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94734ff705_60018518 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/rma/hooks/profiles';
\Tygh\Languages\Helper::preloadLangVars(array('return_requests','return_requests'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('dropdown_box_item_class', ($_smarty_tpl->getValue('block')['wrapper'] === "blocks/wrappers/onclick_dropdown.tpl") ? "ty-dropdown-box__item" : '', false, NULL);?>
<li class="ty-account-info__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_box_item_class')), ENT_QUOTES, 'UTF-8');?>
">
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("rma.returns")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-account-info__a"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("return_requests", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
</li><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/hooks/profiles/my_account_menu.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/rma/hooks/profiles/my_account_menu.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('dropdown_box_item_class', ($_smarty_tpl->getValue('block')['wrapper'] === "blocks/wrappers/onclick_dropdown.tpl") ? "ty-dropdown-box__item" : '', false, NULL);?>
<li class="ty-account-info__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_box_item_class')), ENT_QUOTES, 'UTF-8');?>
">
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("rma.returns")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-account-info__a"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("return_requests", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
</li><?php }
}
}
