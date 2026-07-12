<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:08
  from 'tygh:addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa8cb11e0_64289396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0491196b2adff9596162fc80201c4d37dc6a3587' => 
    array (
      0 => 'addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa8cb11e0_64289396 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_communication/hooks/profiles';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.messages','vendor_communication.messages'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('communication_type', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), false, NULL);
$_smarty_tpl->assign('communication_type_active', $_smarty_tpl->getSmarty()->getModifierCallback('fn_vendor_communication_is_communication_type_active')($_smarty_tpl->getValue('communication_type')), false, NULL);?>

<?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('communication_type_active')) {?>
    <?php $_smarty_tpl->assign('dropdown_box_item_class', ($_smarty_tpl->getValue('block')['wrapper'] === "blocks/wrappers/onclick_dropdown.tpl") ? "ty-dropdown-box__item" : '', false, NULL);?>

    <li class="ty-account-info__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_box_item_class')), ENT_QUOTES, 'UTF-8');?>
"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("vendor_communication.threads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.messages", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('communication_type', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), false, NULL);
$_smarty_tpl->assign('communication_type_active', $_smarty_tpl->getSmarty()->getModifierCallback('fn_vendor_communication_is_communication_type_active')($_smarty_tpl->getValue('communication_type')), false, NULL);?>

<?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('communication_type_active')) {?>
    <?php $_smarty_tpl->assign('dropdown_box_item_class', ($_smarty_tpl->getValue('block')['wrapper'] === "blocks/wrappers/onclick_dropdown.tpl") ? "ty-dropdown-box__item" : '', false, NULL);?>

    <li class="ty-account-info__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_box_item_class')), ENT_QUOTES, 'UTF-8');?>
"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("vendor_communication.threads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.messages", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
<?php }
}
}
}
