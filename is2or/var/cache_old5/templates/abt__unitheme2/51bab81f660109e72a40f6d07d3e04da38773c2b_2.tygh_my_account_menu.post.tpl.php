<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:55
  from 'tygh:addons/wishlist/hooks/profiles/my_account_menu.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6bef2de8_00572100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51bab81f660109e72a40f6d07d3e04da38773c2b' => 
    array (
      0 => 'addons/wishlist/hooks/profiles/my_account_menu.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6bef2de8_00572100 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/wishlist/hooks/profiles';
\Tygh\Languages\Helper::preloadLangVars(array('wishlist','wishlist'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('dropdown_box_item_class', ($_smarty_tpl->getValue('block')['wrapper'] === "blocks/wrappers/onclick_dropdown.tpl") ? "ty-dropdown-box__item" : '', false, NULL);?>
<li class="ty-account-info__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_box_item_class')), ENT_QUOTES, 'UTF-8');?>
"><a class="ty-account-info__a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('wishlist_count') > 0) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist_count')), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/profiles/my_account_menu.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/wishlist/hooks/profiles/my_account_menu.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('dropdown_box_item_class', ($_smarty_tpl->getValue('block')['wrapper'] === "blocks/wrappers/onclick_dropdown.tpl") ? "ty-dropdown-box__item" : '', false, NULL);?>
<li class="ty-account-info__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_box_item_class')), ENT_QUOTES, 'UTF-8');?>
"><a class="ty-account-info__a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('wishlist_count') > 0) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist_count')), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php }
}
}
