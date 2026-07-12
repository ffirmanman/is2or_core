<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:views/checkout/components/customer/location.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb520462f622_96959012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20509015a8eb60c06cd07228a863192735a8f5ca' => 
    array (
      0 => 'views/checkout/components/customer/location.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
))) {
function content_69fb520462f622_96959012 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/checkout/components/customer';
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.deliver_to','lite_checkout.deliver_to'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
    <?php $_smarty_tpl->assign('show_city', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_state', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_country', false, false, NULL);?>
    <?php $_smarty_tpl->assign('exclude_fields', array(), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], 'profile_field', false, 'key');
$foreach32DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('profile_field')->value) {
$foreach32DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('profile_field')['field_name'] == "s_city") {?>
            <?php $_smarty_tpl->assign('show_city', true, false, NULL);?>
            <?php if ($_smarty_tpl->getValue('city_autocomplete')) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_city_autocomplete.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
            <?php } else { ?>
                <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_city.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('profile_field')['field_name'] == "s_state") {?>
            <?php $_smarty_tpl->assign('show_state', true, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_state.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('profile_field')['field_name'] == "s_country") {?>
            <?php $_smarty_tpl->assign('show_country', true, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_country.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getValue('show_city') && $_smarty_tpl->getValue('city_autocomplete')) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('exclude_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "s_state";
$_smarty_tpl->assign('exclude_fields', $_tmp_array, false, NULL);?>
    <?php }?>

    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo (($tmp = $_smarty_tpl->getValue('block_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.deliver_to", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</h2>
                </div>

                <?php if ((($tmp = $_smarty_tpl->getValue('show_city') ?? null)===null||$tmp==='' ? true ?? null : $tmp) || (($tmp = $_smarty_tpl->getValue('show_state') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>$_smarty_tpl->getValue('exclude_fields')), (int) 0, $_smarty_current_dir);
?>
            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
    <div class="ut2-show-checkout-block-heading"></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/location.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/customer/location.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
    <?php $_smarty_tpl->assign('show_city', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_state', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_country', false, false, NULL);?>
    <?php $_smarty_tpl->assign('exclude_fields', array(), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], 'profile_field', false, 'key');
$foreach33DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('profile_field')->value) {
$foreach33DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('profile_field')['field_name'] == "s_city") {?>
            <?php $_smarty_tpl->assign('show_city', true, false, NULL);?>
            <?php if ($_smarty_tpl->getValue('city_autocomplete')) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_city_autocomplete.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
            <?php } else { ?>
                <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_city.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('profile_field')['field_name'] == "s_state") {?>
            <?php $_smarty_tpl->assign('show_state', true, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_state.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('profile_field')['field_name'] == "s_country") {?>
            <?php $_smarty_tpl->assign('show_country', true, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('profile_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('section')][$_smarty_tpl->getValue('key')]['template'] = "views/checkout/components/profile_fields/s_country.tpl";
$_smarty_tpl->assign('profile_fields', $_tmp_array, false, NULL);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getValue('show_city') && $_smarty_tpl->getValue('city_autocomplete')) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('exclude_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "s_state";
$_smarty_tpl->assign('exclude_fields', $_tmp_array, false, NULL);?>
    <?php }?>

    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo (($tmp = $_smarty_tpl->getValue('block_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.deliver_to", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</h2>
                </div>

                <?php if ((($tmp = $_smarty_tpl->getValue('show_city') ?? null)===null||$tmp==='' ? true ?? null : $tmp) || (($tmp = $_smarty_tpl->getValue('show_state') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>$_smarty_tpl->getValue('exclude_fields')), (int) 0, $_smarty_current_dir);
?>
            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->getValue('show_profiles_on_checkout')) {?>
    <div class="ut2-show-checkout-block-heading"></div>
<?php }
}
}
}
