<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:views/checkout/components/profile_fields/field.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29b448881_78415440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f6c18f8b4c1fb3ac18c221caae8667bcb84a1c0' => 
    array (
      0 => 'views/checkout/components/profile_fields/field.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
  ),
))) {
function content_69aea29b448881_78415440 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout/components/profile_fields';
\Tygh\Languages\Helper::preloadLangVars(array('select_state','select_country','address_residential','address_commercial','select_state','select_country','address_residential','address_commercial'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_label', (($tmp = $_smarty_tpl->getValue('show_label') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
<div class="litecheckout__field cm-field-container <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_type_class_postfix')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-error-message-target-method="append" <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('wrapper_attributes'));?>
>
    <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->assign('_country', $_smarty_tpl->getValue('settings')['Checkout']['default_country'], false, NULL);?>
        <?php $_smarty_tpl->assign('_state', (($tmp = $_smarty_tpl->getValue('field_value') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_state'] ?? null : $tmp), false, NULL);?>

        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
            class="cm-state litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->getValue('field')['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('states') && $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')]) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')], 'state');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state')->value) {
$foreach4DoElse = false;
?>
                    <option <?php if ($_smarty_tpl->getValue('_state') == $_smarty_tpl->getValue('state')['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['code']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['state']), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>

        <input
            <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_d"
            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
            size="32"
            maxlength="64"
            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_state')), ENT_QUOTES, 'UTF-8');?>
"
            disabled="disabled"
            class="cm-state <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text litecheckout__input hidden<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
        />

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->assign('_country', (($tmp = $_smarty_tpl->getValue('field_value') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_country'] ?? null : $tmp), false, NULL);?>

        <select
            <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-profile-field__select-country cm-country litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('field')['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'code');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach5DoElse = false;
?>
                <option <?php if ($_smarty_tpl->getValue('_country') == $_smarty_tpl->getValue('code')) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('code')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </select>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
              id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
              autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
              name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
              placeholder=" "
              data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
              data-ca-lite-checkout-auto-save="true"
              aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('field')['is_disabled']) {?>disabled="disabled"<?php }?> />
        <input class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
               type="checkbox"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->getValue('field_value') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>checked<?php }?>
               <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        />
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->assign('extra', "data-ca-lite-checkout-field=".((string)$_smarty_tpl->getValue('field_name_helper'))." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true ".$_prefixVariable1, false, NULL);?>
        <?php ob_start();
if ($_smarty_tpl->getValue('field')['class']) {
echo " ";
echo (string)$_smarty_tpl->getValue('field')['class'];
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->assign('date_meta', "litecheckout__input".$_prefixVariable2.((string)$_smarty_tpl->getValue('input_meta')), false, NULL);?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('field_id')),'date_name'=>$_smarty_tpl->getValue('field_name'),'date_val'=>$_smarty_tpl->getValue('field_value'),'date_meta'=>$_smarty_tpl->getValue('date_meta'),'extra'=>$_smarty_tpl->getValue('extra')), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO")) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'name', false, 'value');
$_smarty_tpl->getVariable('name')->index = -1;
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value => $_smarty_tpl->getVariable('name')->value) {
$foreach6DoElse = false;
$_smarty_tpl->getVariable('name')->index++;
$_smarty_tpl->getVariable('name')->first = !$_smarty_tpl->getVariable('name')->index;
$foreach6Backup = clone $_smarty_tpl->getVariable('name');
?>
            <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
">
                <input class="radio litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
                   type="radio"
                   id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-auto-save-on-change="true"
                   <?php if ((!$_smarty_tpl->getValue('field_value') && $_smarty_tpl->getVariable('name')->first) || $_smarty_tpl->getValue('field_value') == $_smarty_tpl->getValue('value')) {?>checked<?php }?>
                   <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

                />
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php
$_smarty_tpl->setVariable('name', $foreach6Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
        <select class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
                autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        >
            <?php if ($_smarty_tpl->getValue('field')['required'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                <option value="">--</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'name', false, 'value');
$_smarty_tpl->getVariable('name')->index = -1;
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value => $_smarty_tpl->getVariable('name')->value) {
$foreach7DoElse = false;
$_smarty_tpl->getVariable('name')->index++;
$_smarty_tpl->getVariable('name')->first = !$_smarty_tpl->getVariable('name')->index;
$foreach7Backup = clone $_smarty_tpl->getVariable('name');
?>
                <option <?php if ($_smarty_tpl->getValue('field_value') == $_smarty_tpl->getValue('value')) {?>selected<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
$_smarty_tpl->setVariable('name', $foreach7Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_residential">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
               type="radio"
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_residential"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
               value="residential"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save-on-change="true"
               <?php if (!$_smarty_tpl->getValue('field_value') || $_smarty_tpl->getValue('field_value') == "residential") {?>checked<?php }?>
               <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            />
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_residential", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </label>
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_commercial">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_commercial"
                name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
                value="commercial"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if ($_smarty_tpl->getValue('field_value') == "commercial") {?>checked<?php }?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            />
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_commercial", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </label>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE")) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>$_smarty_tpl->getValue('field_id'),'name'=>$_smarty_tpl->getValue('field_name'),'value'=>$_smarty_tpl->getValue('field_value'),'attrs'=>$_smarty_tpl->getValue('field')['attributes'],'class'=>((string)$_smarty_tpl->getValue('field')['class'])." ".((string)$_smarty_tpl->getValue('input_meta')),'aria_label'=>$_smarty_tpl->getValue('field')['description'],'autocomplete'=>$_smarty_tpl->getValue('field')['autocomplete'],'label_text'=>$_smarty_tpl->getValue('field')['description'],'label_class'=>$_smarty_tpl->getValue('label_meta'),'title'=>false,'show_control_group'=>false,'width'=>"full"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->assign('show_label', false, false, NULL);?>
    <?php } else { ?>
        <input class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
               type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
               <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('show_label')) {?>
        <label class="litecheckout__label <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_meta')), ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/field.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/profile_fields/field.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_label', (($tmp = $_smarty_tpl->getValue('show_label') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
<div class="litecheckout__field cm-field-container <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_type_class_postfix')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-error-message-target-method="append" <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('wrapper_attributes'));?>
>
    <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->assign('_country', $_smarty_tpl->getValue('settings')['Checkout']['default_country'], false, NULL);?>
        <?php $_smarty_tpl->assign('_state', (($tmp = $_smarty_tpl->getValue('field_value') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_state'] ?? null : $tmp), false, NULL);?>

        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
            class="cm-state litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->getValue('field')['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('states') && $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')]) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')], 'state');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state')->value) {
$foreach8DoElse = false;
?>
                    <option <?php if ($_smarty_tpl->getValue('_state') == $_smarty_tpl->getValue('state')['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['code']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['state']), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>

        <input
            <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_d"
            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
            size="32"
            maxlength="64"
            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_state')), ENT_QUOTES, 'UTF-8');?>
"
            disabled="disabled"
            class="cm-state <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text litecheckout__input hidden<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
        />

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->assign('_country', (($tmp = $_smarty_tpl->getValue('field_value') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_country'] ?? null : $tmp), false, NULL);?>

        <select
            <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-profile-field__select-country cm-country litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('field')['required'] !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'code');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach9DoElse = false;
?>
                <option <?php if ($_smarty_tpl->getValue('_country') == $_smarty_tpl->getValue('code')) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('code')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </select>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
              id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
              autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
              name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
              placeholder=" "
              data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
              data-ca-lite-checkout-auto-save="true"
              aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('field')['is_disabled']) {?>disabled="disabled"<?php }?> />
        <input class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
               type="checkbox"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->getValue('field_value') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>checked<?php }?>
               <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        />
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->assign('extra', "data-ca-lite-checkout-field=".((string)$_smarty_tpl->getValue('field_name_helper'))." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true ".$_prefixVariable3, false, NULL);?>
        <?php ob_start();
if ($_smarty_tpl->getValue('field')['class']) {
echo " ";
echo (string)$_smarty_tpl->getValue('field')['class'];
}
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->assign('date_meta', "litecheckout__input".$_prefixVariable4.((string)$_smarty_tpl->getValue('input_meta')), false, NULL);?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('field_id')),'date_name'=>$_smarty_tpl->getValue('field_name'),'date_val'=>$_smarty_tpl->getValue('field_value'),'date_meta'=>$_smarty_tpl->getValue('date_meta'),'extra'=>$_smarty_tpl->getValue('extra')), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO")) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'name', false, 'value');
$_smarty_tpl->getVariable('name')->index = -1;
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value => $_smarty_tpl->getVariable('name')->value) {
$foreach10DoElse = false;
$_smarty_tpl->getVariable('name')->index++;
$_smarty_tpl->getVariable('name')->first = !$_smarty_tpl->getVariable('name')->index;
$foreach10Backup = clone $_smarty_tpl->getVariable('name');
?>
            <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
">
                <input class="radio litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
                   type="radio"
                   id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-auto-save-on-change="true"
                   <?php if ((!$_smarty_tpl->getValue('field_value') && $_smarty_tpl->getVariable('name')->first) || $_smarty_tpl->getValue('field_value') == $_smarty_tpl->getValue('value')) {?>checked<?php }?>
                   <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

                />
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php
$_smarty_tpl->setVariable('name', $foreach10Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
        <select class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
                autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        >
            <?php if ($_smarty_tpl->getValue('field')['required'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                <option value="">--</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'name', false, 'value');
$_smarty_tpl->getVariable('name')->index = -1;
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value => $_smarty_tpl->getVariable('name')->value) {
$foreach11DoElse = false;
$_smarty_tpl->getVariable('name')->index++;
$_smarty_tpl->getVariable('name')->first = !$_smarty_tpl->getVariable('name')->index;
$foreach11Backup = clone $_smarty_tpl->getVariable('name');
?>
                <option <?php if ($_smarty_tpl->getValue('field_value') == $_smarty_tpl->getValue('value')) {?>selected<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
$_smarty_tpl->setVariable('name', $foreach11Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_residential">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
               type="radio"
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_residential"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
               value="residential"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save-on-change="true"
               <?php if (!$_smarty_tpl->getValue('field_value') || $_smarty_tpl->getValue('field_value') == "residential") {?>checked<?php }?>
               <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            />
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_residential", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </label>
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_commercial">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
_commercial"
                name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
                value="commercial"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if ($_smarty_tpl->getValue('field_value') == "commercial") {?>checked<?php }?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

            />
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_commercial", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </label>
    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE")) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>$_smarty_tpl->getValue('field_id'),'name'=>$_smarty_tpl->getValue('field_name'),'value'=>$_smarty_tpl->getValue('field_value'),'attrs'=>$_smarty_tpl->getValue('field')['attributes'],'class'=>((string)$_smarty_tpl->getValue('field')['class'])." ".((string)$_smarty_tpl->getValue('input_meta')),'aria_label'=>$_smarty_tpl->getValue('field')['description'],'autocomplete'=>$_smarty_tpl->getValue('field')['autocomplete'],'label_text'=>$_smarty_tpl->getValue('field')['description'],'label_class'=>$_smarty_tpl->getValue('label_meta'),'title'=>false,'show_control_group'=>false,'width'=>"full"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->assign('show_label', false, false, NULL);?>
    <?php } else { ?>
        <input class="litecheckout__input<?php if ($_smarty_tpl->getValue('field')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_meta')), ENT_QUOTES, 'UTF-8');?>
"
               placeholder=" "
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"
               type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name')), ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_value')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
"
               <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('field')['attributes']);?>

        />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('show_label')) {?>
        <label class="litecheckout__label <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_meta')), ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>
</div><?php }
}
}
