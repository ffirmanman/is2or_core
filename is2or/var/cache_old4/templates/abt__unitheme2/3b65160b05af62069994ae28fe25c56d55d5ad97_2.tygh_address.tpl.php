<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:views/checkout/components/customer/address.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb520466f452_94488574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b65160b05af62069994ae28fe25c56d55d5ad97' => 
    array (
      0 => 'views/checkout/components/customer/address.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/user_profiles.tpl' => 2,
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
))) {
function content_69fb520466f452_94488574 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/checkout/components/customer';
\Tygh\Languages\Helper::preloadLangVars(array('create_profile','create_profile','create_profile','create_profile'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('element_identifier', "address-group", false, NULL);
$_smarty_tpl->assign('group_meta', "hidden", false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
    <?php $_smarty_tpl->assign('element_identifier', "user-profiles", false, NULL);?>
    <?php $_smarty_tpl->assign('group_meta', '', false, NULL);
}?>

<div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_meta')), ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_identifier')), ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Checkout']['address_position']), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('allow_multiple_profiles')) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                    class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile")), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="create_user_profile"
                    data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
            ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/address.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/customer/address.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('element_identifier', "address-group", false, NULL);
$_smarty_tpl->assign('group_meta', "hidden", false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
    <?php $_smarty_tpl->assign('element_identifier', "user-profiles", false, NULL);?>
    <?php $_smarty_tpl->assign('group_meta', '', false, NULL);
}?>

<div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_meta')), ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_identifier')), ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Checkout']['address_position']), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('allow_multiple_profiles')) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                    class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile")), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="create_user_profile"
                    data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
            ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
</div>
<?php }
}
}
