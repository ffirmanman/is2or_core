<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:views/checkout/components/user_profiles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb52046b4696_09587306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ace52926edfa7544576eedad234c4b150124bc03' => 
    array (
      0 => 'views/checkout/components/user_profiles.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
  ),
))) {
function content_69fb52046b4696_09587306 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout/components';
\Tygh\Languages\Helper::preloadLangVars(array('checkout_select_profile_before_order','editing_profile_name','edit','editing_profile_name','edit','checkout_select_profile_before_order','editing_profile_name','edit','editing_profile_name','edit'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<label for="user_profiles_list"
       class="cm-required cm-multiple-radios hidden"
       data-ca-validator-error-message="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout_select_profile_before_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></label>

<div id="user_profiles_list"
    class="litecheckout__group"
    data-ca-error-message-target-node="#user_profiles_list_error_message_target">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_profiles'), 'profile');
$foreach34DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('profile')->value) {
$foreach34DoElse = false;
?>
        <div class="ty-tiles litecheckout__field litecheckout__field--xsmall">
            <input type="radio"
                   name="profile_id"
                   id="user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-tiles__radio hidden js-lite-checkout-user-profile-radio <?php if (!$_smarty_tpl->getValue('profile')['is_selectable']) {?>js-lite-checkout-edit-profile-popup-opener<?php } else { ?>js-lite-checkout-profile-selector<?php }?>"
                   data-ca-profile-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->getValue('profile')['profile_id'] == $_smarty_tpl->getValue('cart')['profile_id'] && $_smarty_tpl->getValue('profile')['is_selectable']) {?>checked<?php }?>
            />

            <label id="user_profiles_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-tiles__wrapper"
                   for="user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
            >
                <p class="ty-tiles__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_address']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_address_2']), ENT_QUOTES, 'UTF-8');?>
</p>

                <?php if ($_smarty_tpl->getValue('profile')['s_city'] || $_smarty_tpl->getValue('profile')['s_state_descr'] || $_smarty_tpl->getValue('profile')['s_zipcode']) {?>
                    <p class="ty-tiles__text"><?php if ($_smarty_tpl->getValue('profile')['s_city']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_city']), ENT_QUOTES, 'UTF-8');?>
, <?php }
if ($_smarty_tpl->getValue('profile')['s_state_descr']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_state_descr']), ENT_QUOTES, 'UTF-8');?>
, <?php }
if ($_smarty_tpl->getValue('profile')['s_zipcode']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_zipcode']), ENT_QUOTES, 'UTF-8');
}?></p>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('profile')['s_country_descr']) {?>
                    <p class="ty-tiles__text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_country_descr']), ENT_QUOTES, 'UTF-8');?>
</p>
                <?php }?>
                <div class="ty-tiles__actions">
                    <a
                        class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-tiles__link"
                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id']))), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id="edit_user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_profile_name", array('[name]'=>$_smarty_tpl->getValue('profile')['profile_name']), $_smarty_tpl->getSmarty()->getLanguage());?>
"
                    ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>

                    <?php if (!$_smarty_tpl->getValue('profile')['is_selectable']) {?>
                        <a
                            class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close hidden js-edit-profile-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id'])."&switch_after_update=1")), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-target-id="edit_user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_profile_name", array('[name]'=>$_smarty_tpl->getValue('profile')['profile_name']), $_smarty_tpl->getSmarty()->getLanguage());?>
"
                        ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    <?php }?>
                </div>
            </label>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<div class="litecheckout__group"><div id="user_profiles_list_error_message_target" class="litecheckout__item"></div></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/user_profiles.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/user_profiles.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<label for="user_profiles_list"
       class="cm-required cm-multiple-radios hidden"
       data-ca-validator-error-message="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout_select_profile_before_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></label>

<div id="user_profiles_list"
    class="litecheckout__group"
    data-ca-error-message-target-node="#user_profiles_list_error_message_target">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_profiles'), 'profile');
$foreach35DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('profile')->value) {
$foreach35DoElse = false;
?>
        <div class="ty-tiles litecheckout__field litecheckout__field--xsmall">
            <input type="radio"
                   name="profile_id"
                   id="user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-tiles__radio hidden js-lite-checkout-user-profile-radio <?php if (!$_smarty_tpl->getValue('profile')['is_selectable']) {?>js-lite-checkout-edit-profile-popup-opener<?php } else { ?>js-lite-checkout-profile-selector<?php }?>"
                   data-ca-profile-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->getValue('profile')['profile_id'] == $_smarty_tpl->getValue('cart')['profile_id'] && $_smarty_tpl->getValue('profile')['is_selectable']) {?>checked<?php }?>
            />

            <label id="user_profiles_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-tiles__wrapper"
                   for="user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
            >
                <p class="ty-tiles__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_address']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_address_2']), ENT_QUOTES, 'UTF-8');?>
</p>

                <?php if ($_smarty_tpl->getValue('profile')['s_city'] || $_smarty_tpl->getValue('profile')['s_state_descr'] || $_smarty_tpl->getValue('profile')['s_zipcode']) {?>
                    <p class="ty-tiles__text"><?php if ($_smarty_tpl->getValue('profile')['s_city']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_city']), ENT_QUOTES, 'UTF-8');?>
, <?php }
if ($_smarty_tpl->getValue('profile')['s_state_descr']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_state_descr']), ENT_QUOTES, 'UTF-8');?>
, <?php }
if ($_smarty_tpl->getValue('profile')['s_zipcode']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_zipcode']), ENT_QUOTES, 'UTF-8');
}?></p>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('profile')['s_country_descr']) {?>
                    <p class="ty-tiles__text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_country_descr']), ENT_QUOTES, 'UTF-8');?>
</p>
                <?php }?>
                <div class="ty-tiles__actions">
                    <a
                        class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-tiles__link"
                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id']))), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id="edit_user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_profile_name", array('[name]'=>$_smarty_tpl->getValue('profile')['profile_name']), $_smarty_tpl->getSmarty()->getLanguage());?>
"
                    ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>

                    <?php if (!$_smarty_tpl->getValue('profile')['is_selectable']) {?>
                        <a
                            class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close hidden js-edit-profile-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id'])."&switch_after_update=1")), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-target-id="edit_user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_profile_name", array('[name]'=>$_smarty_tpl->getValue('profile')['profile_name']), $_smarty_tpl->getSmarty()->getLanguage());?>
"
                        ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    <?php }?>
                </div>
            </label>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<div class="litecheckout__group"><div id="user_profiles_list_error_message_target" class="litecheckout__item"></div></div>
<?php }
}
}
