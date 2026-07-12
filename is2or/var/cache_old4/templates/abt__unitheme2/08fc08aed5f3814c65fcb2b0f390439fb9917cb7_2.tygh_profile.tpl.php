<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:20
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/views/checkout/components/profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c4cc0223_87487982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08fc08aed5f3814c65fcb2b0f390439fb9917cb7' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/views/checkout/components/profile.tpl',
      1 => 1778074272,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profile_fields.tpl' => 4,
  ),
))) {
function content_69fb53c4cc0223_87487982 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/views/checkout/components';
\Tygh\Languages\Helper::preloadLangVars(array('profile_name','shipping_address','billing_address','save','create','profile_name','shipping_address','billing_address','save','create'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-account ty-account--nopadding clearfix">
    <form method="POST" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile")), ENT_QUOTES, 'UTF-8');?>
" id="is2or_profile_form">
        <input type="hidden" name="dispatch" value="checkout.update_profile" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:update_profile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('profile_id')) {?>
                <input type="hidden" name="user_data[profile_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile_id')), ENT_QUOTES, 'UTF-8');?>
" />
                <?php if ($_smarty_tpl->getValue('switch_after_update')) {?>
                    <input type="hidden" name="switch_after_update" value="1" />
                <?php }?>
            <?php } else { ?>
                <div class="ty-control-group ty-profile-field__item">
                    <label
                        for="elm_profile_name"
                        class="ty-control-group__title cm-profile-field cm-required cm-trim"
                    ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                    <input type="text" class="ty-input-text" name="user_data[profile_name]" id="elm_profile_name" />
                </div>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS"),'profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage()),'profile_data'=>$_smarty_tpl->getValue('user_profile'),'ship_to_another'=>$_smarty_tpl->getValue('ship_to_another')), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::BILLING_ADDRESS"),'profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("billing_address", [], $_smarty_tpl->getSmarty()->getLanguage()),'profile_data'=>$_smarty_tpl->getValue('user_profile'),'grid_wrap'=>"billing_address_fields",'ship_to_another'=>$_smarty_tpl->getValue('ship_to_another'),'hide_fields'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:update_profile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <div class="ty-padding-bottom" style="padding-bottom: 50px;"></div>

        <div class="buttons-container">
            <?php if ($_smarty_tpl->getValue('profile_id')) {?>
                <button type="submit" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
            <?php } else { ?>
                <button type="submit" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
            <?php }?>
        </div>
    </form>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/views/checkout/components/profile.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/views/checkout/components/profile.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-account ty-account--nopadding clearfix">
    <form method="POST" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile")), ENT_QUOTES, 'UTF-8');?>
" id="is2or_profile_form">
        <input type="hidden" name="dispatch" value="checkout.update_profile" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:update_profile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('profile_id')) {?>
                <input type="hidden" name="user_data[profile_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile_id')), ENT_QUOTES, 'UTF-8');?>
" />
                <?php if ($_smarty_tpl->getValue('switch_after_update')) {?>
                    <input type="hidden" name="switch_after_update" value="1" />
                <?php }?>
            <?php } else { ?>
                <div class="ty-control-group ty-profile-field__item">
                    <label
                        for="elm_profile_name"
                        class="ty-control-group__title cm-profile-field cm-required cm-trim"
                    ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                    <input type="text" class="ty-input-text" name="user_data[profile_name]" id="elm_profile_name" />
                </div>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS"),'profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage()),'profile_data'=>$_smarty_tpl->getValue('user_profile'),'ship_to_another'=>$_smarty_tpl->getValue('ship_to_another')), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::BILLING_ADDRESS"),'profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("billing_address", [], $_smarty_tpl->getSmarty()->getLanguage()),'profile_data'=>$_smarty_tpl->getValue('user_profile'),'grid_wrap'=>"billing_address_fields",'ship_to_another'=>$_smarty_tpl->getValue('ship_to_another'),'hide_fields'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:update_profile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <div class="ty-padding-bottom" style="padding-bottom: 50px;"></div>

        <div class="buttons-container">
            <?php if ($_smarty_tpl->getValue('profile_id')) {?>
                <button type="submit" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
            <?php } else { ?>
                <button type="submit" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
            <?php }?>
        </div>
    </form>
</div><?php }
}
}
