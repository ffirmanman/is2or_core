<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:00
  from 'tygh:views/products/components/product_options.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ecce33f5_12964799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1659c2ad712fae749f61f5dbc17b5eb943f33770' => 
    array (
      0 => 'views/products/components/product_options.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 4,
    'tygh:common/modifier.tpl' => 8,
    'tygh:common/fileuploader.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69ada1ecce33f5_12964799 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
\Tygh\Languages\Helper::preloadLangVars(array('select_option_above','please_select_one','select_option_above','please_select_one','na','please_select_one','select_option_above','na','nocombination','select_option_above','please_select_one','select_option_above','please_select_one','na','please_select_one','select_option_above','na','nocombination'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (($_smarty_tpl->getValue('settings')['General']['display_options_modifiers'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('auth')['user_id'] || ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] != "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id'])))) {?>
    <?php $_smarty_tpl->assign('show_modifiers', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('obj_id', (($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('id') ?? null : $tmp), false, NULL);?>

<input type="hidden" name="appearance[details_page]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('details_page')), ENT_QUOTES, 'UTF-8');?>
" />
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['detailed_params'], 'value', false, 'param');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('param')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach14DoElse = false;
?>
    <input type="hidden" name="additional_info[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('param')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->getValue('product_options')) {?>

<?php if ($_smarty_tpl->getValue('obj_prefix')) {?>
    <input type="hidden" name="appearance[obj_prefix]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('location') == "cart" || $_smarty_tpl->getValue('product')['object_id']) {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('obj_id') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('extra_id')) {?>
    <input type="hidden" name="extra_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_id')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL") && $_smarty_tpl->getValue('location') == "cart") {?>
    <?php $_smarty_tpl->assign('disabled', true, false, NULL);
}?>

<div id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_AOC">
    <div class="cm-picker-product-options ty-product-options" id="opt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_options'), 'po');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('po')->value) {
$foreach15DoElse = false;
?>
        
        <?php $_smarty_tpl->assign('selected_variant', '', false, NULL);?>

        <div class="ty-control-group ty-product-options__item <?php if (!$_smarty_tpl->getValue('capture_options_vs_qty')) {?>product-list-field<?php }?> clearfix"
             id="opt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if (!($_smarty_tpl->getValue('po')['option_type'] && ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::CHECKBOX")) && !$_smarty_tpl->getValue('po')['variants'] && $_smarty_tpl->getValue('po')['missing_variants_handling'] == "H")) {?>
                <label id="option_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->getValue('po')['option_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::FILE")) {?>
                           for="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       class="ty-control-group__label ty-product-options__item-label <?php if ($_smarty_tpl->getValue('po')['required'] == "Y") {?>cm-required<?php }?> <?php if ($_smarty_tpl->getValue('po')['regexp']) {?>cm-regexp<?php }?> <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')((($tmp = $_smarty_tpl->getValue('po')['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>ty-product-options__item-label--tooltip<?php }?>"
                       <?php if ($_smarty_tpl->getValue('po')['regexp']) {?>
                           data-ca-regexp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['regexp']), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-message="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['incorrect_message']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                >
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_name']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')((($tmp = $_smarty_tpl->getValue('po')['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {
$_smarty_tpl->renderSubTemplate("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->getValue('po')['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-desktop"), (int) 0, $_smarty_current_dir);
}?>:
                </label>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')((($tmp = $_smarty_tpl->getValue('po')['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->getValue('po')['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-mobile"), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php if ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::SELECTBOX")) {?>                 <?php if ($_smarty_tpl->getValue('po')['variants']) {?>
                    <?php if (($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) && !$_smarty_tpl->getValue('po')['not_required']) {?>
                        <input type="hidden"
                               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                               id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                        />
                    <?php }?>
                    <select name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                            <?php if (!$_smarty_tpl->getValue('po')['disabled'] && !$_smarty_tpl->getValue('disabled')) {?>
                                id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('product')['options_update']) {?>
                                onchange="fn_change_options('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                            <?php } else { ?>
                                onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc'] || $_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                disabled="disabled"
                                class="disabled"
                            <?php }?>
                    >
                        <?php if ($_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL")) {?>
                            <?php if (!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled') || ($_smarty_tpl->getValue('runtime')['checkout'] && !$_smarty_tpl->getValue('po')['value'])) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_option_above", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_select_one", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SIMULTANEOUS")) {?>
                            <?php if (!$_smarty_tpl->getValue('po')['value']) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_option_above", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_select_one", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'vr');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('vr')->value) {
$foreach16DoElse = false;
?>
                            <?php if (!($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) || (($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) && $_smarty_tpl->getValue('po')['value'] && $_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id'])) {?>
                                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "modifier", null, null);?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>
                                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id']) {?>
                                            <?php $_smarty_tpl->assign('selected_variant', $_smarty_tpl->getValue('vr')['variant_id'], false, NULL);?>
                                            selected="selected"
                                        <?php }?>
                                >
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_name']), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->getValue('show_modifiers')) {?>
                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>
                                                (<?php echo preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'modifier')));?>
)
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::RADIO_GROUP")) {?>                 <?php if ($_smarty_tpl->getValue('po')['variants']) {?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->getValue('po')['disabled'] && ($_smarty_tpl->getValue('po')['not_required'] || $_smarty_tpl->getValue('po')['required'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
                               disabled="disabled"
                           <?php }?>
                    />
                    <ul id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
_group" class="ty-product-options__elem">
                        <?php if (!$_smarty_tpl->getValue('po')['disabled'] && !$_smarty_tpl->getValue('disabled')) {?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'vr');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('vr')->value) {
$foreach17DoElse = false;
?>
                                <li>
                                    <label id="option_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__box option-items"
                                    >
                                        <input type="radio"
                                               class="radio"
                                               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                               <?php if ($_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id']) {?>
                                                   <?php $_smarty_tpl->assign('selected_variant', $_smarty_tpl->getValue('vr')['variant_id'], false, NULL);?>
                                                   checked="checked"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->getValue('product')['options_update']) {?>
                                                   onclick="fn_change_options('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php } else { ?>
                                                   onclick="fn_change_variant_image('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc'] || $_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                                   disabled="disabled"
                                               <?php }?>
                                        />
                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_name']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->getValue('show_modifiers')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>(<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>)<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
                                    </label>
                                </li>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->getValue('po')['value']) {?>
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['variants'][$_smarty_tpl->getValue('po')['value']]['variant_name']), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </ul>
                    <?php if (!$_smarty_tpl->getValue('po')['value'] && $_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL") && !($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled'))) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_select_one", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </p>
                    <?php } elseif (!$_smarty_tpl->getValue('po')['value'] && $_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL") && ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled'))) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_option_above", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </p>
                    <?php }?>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::CHECKBOX")) {?>                 <?php $_smarty_tpl->assign('default_variant_disbaled', false, false, NULL);?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'vr');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('vr')->value) {
$foreach18DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('vr')['position'] == 0) {?>
                        <?php $_smarty_tpl->assign('default_variant_disabled', ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('vr')['disabled']) || ($_smarty_tpl->getValue('disabled') && $_smarty_tpl->getValue('po')['value'] != $_smarty_tpl->getValue('vr')['variant_id']), false, NULL);?>
                        <input id="unchecked_option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                               type="hidden"
                               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                               <?php if ($_smarty_tpl->getValue('default_variant_disabled')) {?>
                                   disabled="disabled"
                               <?php }?>
                        />
                    <?php } else { ?>
                        <label class="ty-product-options__box option-items">
                            <span class="cm-field-container">
                                <input id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                                       type="checkbox"
                                       name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                       value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                       class="checkbox"
                                       <?php if ($_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id']) {?>
                                           checked="checked"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc'] || $_smarty_tpl->getValue('vr')['disabled'] || $_smarty_tpl->getValue('default_variant_disabled') || $_smarty_tpl->getValue('disabled')) {?>
                                           disabled="disabled"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->getValue('product')['options_update']) {?>
                                           onclick="fn_change_options('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php } else { ?>
                                           onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php }?>
                                />
                                <?php if ($_smarty_tpl->getValue('show_modifiers')) {?>
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>
                                            <bdi>
                                                (<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>)
                                            </bdi>
                                        <?php }?>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <?php }?>
                            </span>
                        </label>

                        <?php if ($_smarty_tpl->getValue('default_variant_disabled')) {?>
                            <input id="checked_option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                                   type="hidden"
                                   name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('vr')['disabled']) {?>
                                       disabled="disabled"
                                   <?php }?>
                            />
                        <?php }?>
                    <?php }?>
                <?php
}
if ($foreach18DoElse) {
?>
                    <label class="ty-product-options__box option-items">
                        <input type="checkbox"
                               class="checkbox"
                               disabled="disabled"
                        />
                        <?php if ($_smarty_tpl->getValue('show_modifiers')) {?>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>
                                    (<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>)
                                <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php }?>
                    </label>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::INPUT")) {?>                 <input id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                       type="text"
                       name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('po')['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('po')['inner_hint'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>
                           disabled="disabled"
                       <?php }?>
                       class="ty-valign ty-input-text <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->getValue('location') == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                       <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>
                           title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['inner_hint']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                />
            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::TEXT")) {?>                 <textarea id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                          class="ty-product-options__textarea <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->getValue('location') == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                          rows="3"
                          name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                          <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>
                              disabled="disabled"
                          <?php }?>
                          <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>
                              title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['inner_hint']), ENT_QUOTES, 'UTF-8');?>
"
                          <?php }?>
                ><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('po')['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('po')['inner_hint'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::FILE")) {?>                 <div class="ty-product-options__elem ty-product-options__fileuploader">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['extra']['custom_files'][$_smarty_tpl->getValue('po')['option_id']],'var_name'=>((string)$_smarty_tpl->getValue('name'))."[".((string)$_smarty_tpl->getValue('po')['option_id']).((string)$_smarty_tpl->getValue('id'))."]",'multiupload'=>$_smarty_tpl->getValue('po')['multiupload'],'hidden_name'=>((string)$_smarty_tpl->getValue('name'))."[custom_files][".((string)$_smarty_tpl->getValue('po')['option_id']).((string)$_smarty_tpl->getValue('id'))."]",'hidden_value'=>((string)$_smarty_tpl->getValue('id'))."_".((string)$_smarty_tpl->getValue('po')['option_id']),'label_id'=>"option_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))."_".((string)$_smarty_tpl->getValue('po')['option_id']),'prefix'=>$_smarty_tpl->getValue('obj_prefix')), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>

                <?php if ($_smarty_tpl->getValue('po')['comment']) {?>
                    <div class="ty-product-options__description"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['comment']), ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            <?php }?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variant_images", null, null);?>
                <?php if (!$_smarty_tpl->getValue('po')['disabled'] && !$_smarty_tpl->getValue('disabled')) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'var');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach19DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('var')['image_pair']['image_id']) {?>
                            <?php if ($_smarty_tpl->getValue('var')['variant_id'] == $_smarty_tpl->getValue('selected_variant')) {?>
                                <?php $_smarty_tpl->assign('_class', "product-variant-image-selected", false, NULL);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->assign('_class', "product-variant-image-unselected", false, NULL);?>
                            <?php }?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>((string)$_smarty_tpl->getValue('_class'))." ty-product-options__image",'images'=>$_smarty_tpl->getValue('var')['image_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'obj_id'=>"variant_image_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))."_".((string)$_smarty_tpl->getValue('po')['option_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id']),'image_onclick'=>"fn_set_option_value('".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))."', '".((string)$_smarty_tpl->getValue('po')['option_id'])."', '".((string)$_smarty_tpl->getValue('var')['variant_id'])."'); void(0);"), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                <div class="ty-product-variant-image ty-clear-both">
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images');?>

                </div>
            <?php }?>
        </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php if ($_smarty_tpl->getValue('product')['show_exception_warning'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <p id="warning_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options__no-combinations"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("nocombination", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
<?php }
}?>

<?php if (!$_smarty_tpl->getValue('no_script')) {
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.formpre_<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('form_name') ?? null)===null||$tmp==='' ? "product_form_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
', function(frm, elm) {
        if ($('#warning_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
').length) {
            $.ceNotification('show', {
                type: 'W', 
                title: _.tr('warning'), 
                message: _.tr('cannot_buy')
            });

            return false;
        }
            
        return true;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_options.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/product_options.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (($_smarty_tpl->getValue('settings')['General']['display_options_modifiers'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('auth')['user_id'] || ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] != "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id'])))) {?>
    <?php $_smarty_tpl->assign('show_modifiers', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('obj_id', (($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('id') ?? null : $tmp), false, NULL);?>

<input type="hidden" name="appearance[details_page]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('details_page')), ENT_QUOTES, 'UTF-8');?>
" />
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['detailed_params'], 'value', false, 'param');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('param')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach20DoElse = false;
?>
    <input type="hidden" name="additional_info[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('param')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->getValue('product_options')) {?>

<?php if ($_smarty_tpl->getValue('obj_prefix')) {?>
    <input type="hidden" name="appearance[obj_prefix]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('location') == "cart" || $_smarty_tpl->getValue('product')['object_id']) {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('obj_id') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('extra_id')) {?>
    <input type="hidden" name="extra_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_id')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL") && $_smarty_tpl->getValue('location') == "cart") {?>
    <?php $_smarty_tpl->assign('disabled', true, false, NULL);
}?>

<div id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_AOC">
    <div class="cm-picker-product-options ty-product-options" id="opt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_options'), 'po');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('po')->value) {
$foreach21DoElse = false;
?>
        
        <?php $_smarty_tpl->assign('selected_variant', '', false, NULL);?>

        <div class="ty-control-group ty-product-options__item <?php if (!$_smarty_tpl->getValue('capture_options_vs_qty')) {?>product-list-field<?php }?> clearfix"
             id="opt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if (!($_smarty_tpl->getValue('po')['option_type'] && ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::CHECKBOX")) && !$_smarty_tpl->getValue('po')['variants'] && $_smarty_tpl->getValue('po')['missing_variants_handling'] == "H")) {?>
                <label id="option_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->getValue('po')['option_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::FILE")) {?>
                           for="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       class="ty-control-group__label ty-product-options__item-label <?php if ($_smarty_tpl->getValue('po')['required'] == "Y") {?>cm-required<?php }?> <?php if ($_smarty_tpl->getValue('po')['regexp']) {?>cm-regexp<?php }?> <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')((($tmp = $_smarty_tpl->getValue('po')['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>ty-product-options__item-label--tooltip<?php }?>"
                       <?php if ($_smarty_tpl->getValue('po')['regexp']) {?>
                           data-ca-regexp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['regexp']), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-message="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['incorrect_message']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                >
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_name']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')((($tmp = $_smarty_tpl->getValue('po')['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {
$_smarty_tpl->renderSubTemplate("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->getValue('po')['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-desktop"), (int) 0, $_smarty_current_dir);
}?>:
                </label>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')((($tmp = $_smarty_tpl->getValue('po')['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->getValue('po')['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-mobile"), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php if ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::SELECTBOX")) {?>                 <?php if ($_smarty_tpl->getValue('po')['variants']) {?>
                    <?php if (($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) && !$_smarty_tpl->getValue('po')['not_required']) {?>
                        <input type="hidden"
                               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                               id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                        />
                    <?php }?>
                    <select name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                            <?php if (!$_smarty_tpl->getValue('po')['disabled'] && !$_smarty_tpl->getValue('disabled')) {?>
                                id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('product')['options_update']) {?>
                                onchange="fn_change_options('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                            <?php } else { ?>
                                onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc'] || $_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                disabled="disabled"
                                class="disabled"
                            <?php }?>
                    >
                        <?php if ($_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL")) {?>
                            <?php if (!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled') || ($_smarty_tpl->getValue('runtime')['checkout'] && !$_smarty_tpl->getValue('po')['value'])) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_option_above", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_select_one", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SIMULTANEOUS")) {?>
                            <?php if (!$_smarty_tpl->getValue('po')['value']) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_option_above", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_select_one", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'vr');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('vr')->value) {
$foreach22DoElse = false;
?>
                            <?php if (!($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) || (($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) && $_smarty_tpl->getValue('po')['value'] && $_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id'])) {?>
                                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "modifier", null, null);?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>
                                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id']) {?>
                                            <?php $_smarty_tpl->assign('selected_variant', $_smarty_tpl->getValue('vr')['variant_id'], false, NULL);?>
                                            selected="selected"
                                        <?php }?>
                                >
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_name']), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->getValue('show_modifiers')) {?>
                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>
                                                (<?php echo preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'modifier')));?>
)
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::RADIO_GROUP")) {?>                 <?php if ($_smarty_tpl->getValue('po')['variants']) {?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->getValue('po')['disabled'] && ($_smarty_tpl->getValue('po')['not_required'] || $_smarty_tpl->getValue('po')['required'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
                               disabled="disabled"
                           <?php }?>
                    />
                    <ul id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
_group" class="ty-product-options__elem">
                        <?php if (!$_smarty_tpl->getValue('po')['disabled'] && !$_smarty_tpl->getValue('disabled')) {?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'vr');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('vr')->value) {
$foreach23DoElse = false;
?>
                                <li>
                                    <label id="option_description_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__box option-items"
                                    >
                                        <input type="radio"
                                               class="radio"
                                               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                               <?php if ($_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id']) {?>
                                                   <?php $_smarty_tpl->assign('selected_variant', $_smarty_tpl->getValue('vr')['variant_id'], false, NULL);?>
                                                   checked="checked"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->getValue('product')['options_update']) {?>
                                                   onclick="fn_change_options('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php } else { ?>
                                                   onclick="fn_change_variant_image('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc'] || $_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled')) {?>
                                                   disabled="disabled"
                                               <?php }?>
                                        />
                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_name']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->getValue('show_modifiers')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>(<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>)<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
                                    </label>
                                </li>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->getValue('po')['value']) {?>
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['variants'][$_smarty_tpl->getValue('po')['value']]['variant_name']), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </ul>
                    <?php if (!$_smarty_tpl->getValue('po')['value'] && $_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL") && !($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled'))) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_select_one", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </p>
                    <?php } elseif (!$_smarty_tpl->getValue('po')['value'] && $_smarty_tpl->getValue('product')['options_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionsApplyOrder::SEQUENTIAL") && ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('disabled'))) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_option_above", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </p>
                    <?php }?>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['value']), ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::CHECKBOX")) {?>                 <?php $_smarty_tpl->assign('default_variant_disbaled', false, false, NULL);?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'vr');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('vr')->value) {
$foreach24DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('vr')['position'] == 0) {?>
                        <?php $_smarty_tpl->assign('default_variant_disabled', ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('vr')['disabled']) || ($_smarty_tpl->getValue('disabled') && $_smarty_tpl->getValue('po')['value'] != $_smarty_tpl->getValue('vr')['variant_id']), false, NULL);?>
                        <input id="unchecked_option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                               type="hidden"
                               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                               <?php if ($_smarty_tpl->getValue('default_variant_disabled')) {?>
                                   disabled="disabled"
                               <?php }?>
                        />
                    <?php } else { ?>
                        <label class="ty-product-options__box option-items">
                            <span class="cm-field-container">
                                <input id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                                       type="checkbox"
                                       name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                       value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                       class="checkbox"
                                       <?php if ($_smarty_tpl->getValue('po')['value'] == $_smarty_tpl->getValue('vr')['variant_id']) {?>
                                           checked="checked"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc'] || $_smarty_tpl->getValue('vr')['disabled'] || $_smarty_tpl->getValue('default_variant_disabled') || $_smarty_tpl->getValue('disabled')) {?>
                                           disabled="disabled"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->getValue('product')['options_update']) {?>
                                           onclick="fn_change_options('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php } else { ?>
                                           onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php }?>
                                />
                                <?php if ($_smarty_tpl->getValue('show_modifiers')) {?>
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>
                                            <bdi>
                                                (<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>)
                                            </bdi>
                                        <?php }?>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <?php }?>
                            </span>
                        </label>

                        <?php if ($_smarty_tpl->getValue('default_variant_disabled')) {?>
                            <input id="checked_option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                                   type="hidden"
                                   name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vr')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->getValue('po')['disabled'] || $_smarty_tpl->getValue('vr')['disabled']) {?>
                                       disabled="disabled"
                                   <?php }?>
                            />
                        <?php }?>
                    <?php }?>
                <?php
}
if ($foreach24DoElse) {
?>
                    <label class="ty-product-options__box option-items">
                        <input type="checkbox"
                               class="checkbox"
                               disabled="disabled"
                        />
                        <?php if ($_smarty_tpl->getValue('show_modifiers')) {?>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['modifier'])) {?>
                                    (<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['modifier'],'display_sign'=>true), (int) 0, $_smarty_current_dir);
?>)
                                <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php }?>
                    </label>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::INPUT")) {?>                 <input id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                       type="text"
                       name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('po')['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('po')['inner_hint'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>
                           disabled="disabled"
                       <?php }?>
                       class="ty-valign ty-input-text <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->getValue('location') == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                       <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>
                           title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['inner_hint']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                />
            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::TEXT")) {?>                 <textarea id="option_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
"
                          class="ty-product-options__textarea <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->getValue('location') == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                          rows="3"
                          name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['option_id']), ENT_QUOTES, 'UTF-8');?>
]"
                          <?php if ($_smarty_tpl->getValue('product')['exclude_from_calculate'] && !$_smarty_tpl->getValue('product')['aoc']) {?>
                              disabled="disabled"
                          <?php }?>
                          <?php if ($_smarty_tpl->getValue('po')['inner_hint']) {?>
                              title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['inner_hint']), ENT_QUOTES, 'UTF-8');?>
"
                          <?php }?>
                ><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('po')['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('po')['inner_hint'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->getValue('po')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::FILE")) {?>                 <div class="ty-product-options__elem ty-product-options__fileuploader">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['extra']['custom_files'][$_smarty_tpl->getValue('po')['option_id']],'var_name'=>((string)$_smarty_tpl->getValue('name'))."[".((string)$_smarty_tpl->getValue('po')['option_id']).((string)$_smarty_tpl->getValue('id'))."]",'multiupload'=>$_smarty_tpl->getValue('po')['multiupload'],'hidden_name'=>((string)$_smarty_tpl->getValue('name'))."[custom_files][".((string)$_smarty_tpl->getValue('po')['option_id']).((string)$_smarty_tpl->getValue('id'))."]",'hidden_value'=>((string)$_smarty_tpl->getValue('id'))."_".((string)$_smarty_tpl->getValue('po')['option_id']),'label_id'=>"option_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))."_".((string)$_smarty_tpl->getValue('po')['option_id']),'prefix'=>$_smarty_tpl->getValue('obj_prefix')), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>

                <?php if ($_smarty_tpl->getValue('po')['comment']) {?>
                    <div class="ty-product-options__description"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('po')['comment']), ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            <?php }?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variant_images", null, null);?>
                <?php if (!$_smarty_tpl->getValue('po')['disabled'] && !$_smarty_tpl->getValue('disabled')) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('po')['variants'], 'var');
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach25DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('var')['image_pair']['image_id']) {?>
                            <?php if ($_smarty_tpl->getValue('var')['variant_id'] == $_smarty_tpl->getValue('selected_variant')) {?>
                                <?php $_smarty_tpl->assign('_class', "product-variant-image-selected", false, NULL);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->assign('_class', "product-variant-image-unselected", false, NULL);?>
                            <?php }?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>((string)$_smarty_tpl->getValue('_class'))." ty-product-options__image",'images'=>$_smarty_tpl->getValue('var')['image_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'obj_id'=>"variant_image_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))."_".((string)$_smarty_tpl->getValue('po')['option_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id']),'image_onclick'=>"fn_set_option_value('".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))."', '".((string)$_smarty_tpl->getValue('po')['option_id'])."', '".((string)$_smarty_tpl->getValue('var')['variant_id'])."'); void(0);"), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                <div class="ty-product-variant-image ty-clear-both">
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images');?>

                </div>
            <?php }?>
        </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php if ($_smarty_tpl->getValue('product')['show_exception_warning'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <p id="warning_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options__no-combinations"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("nocombination", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
<?php }
}?>

<?php if (!$_smarty_tpl->getValue('no_script')) {
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.formpre_<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('form_name') ?? null)===null||$tmp==='' ? "product_form_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
', function(frm, elm) {
        if ($('#warning_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
').length) {
            $.ceNotification('show', {
                type: 'W', 
                title: _.tr('warning'), 
                message: _.tr('cannot_buy')
            });

            return false;
        }
            
        return true;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
}
