<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5dd53f4_93231943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55d40ff7f1e23d586b9a398aa670b875377e723' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_options.tpl',
      1 => 1736836655,
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
),false)) {
function content_6835b9f5dd53f4_93231943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_option_above','please_select_one','select_option_above','please_select_one','na','please_select_one','select_option_above','na','nocombination','select_option_above','please_select_one','select_option_above','please_select_one','na','please_select_one','select_option_above','na','nocombination'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] != "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id'])))) {?>
    <?php $_smarty_tpl->_assignInScope('show_modifiers', true);
}?>

<?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp));?>

<input type="hidden" name="appearance[details_page]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['details_page']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['detailed_params'], 'value', false, 'param');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['param']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <input type="hidden" name="additional_info[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['param']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value) {?>
    <input type="hidden" name="appearance[obj_prefix]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value == "cart" || $_smarty_tpl->tpl_vars['product']->value['object_id']) {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['obj_id']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['extra_id']->value) {?>
    <input type="hidden" name="extra_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL") && $_smarty_tpl->tpl_vars['location']->value == "cart") {?>
    <?php $_smarty_tpl->_assignInScope('disabled', true);
}?>

<div id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
    <div class="cm-picker-product-options ty-product-options" id="opt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
        
        <?php $_smarty_tpl->_assignInScope('selected_variant', '');?>

        <div class="ty-control-group ty-product-options__item <?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?>product-list-field<?php }?> clearfix"
             id="opt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if (!($_smarty_tpl->tpl_vars['po']->value['option_type'] && ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) && !$_smarty_tpl->tpl_vars['po']->value['variants'] && $_smarty_tpl->tpl_vars['po']->value['missing_variants_handling'] == "H")) {?>
                <label id="option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type'] !== smarty_modifier_enum("ProductOptionTypes::FILE")) {?>
                           for="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       class="ty-control-group__label ty-product-options__item-label <?php if ($_smarty_tpl->tpl_vars['po']->value['required'] == "Y") {?>cm-required<?php }?> <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>cm-regexp<?php }?> <?php if (smarty_modifier_trim((($tmp = $_smarty_tpl->tpl_vars['po']->value['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>ty-product-options__item-label--tooltip<?php }?>"
                       <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>
                           data-ca-regexp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['regexp'], ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-message="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['incorrect_message'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                >
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');
if (smarty_modifier_trim((($tmp = $_smarty_tpl->tpl_vars['po']->value['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['po']->value['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-desktop"), 0, true);
}?>:
                </label>
                <?php if (smarty_modifier_trim((($tmp = $_smarty_tpl->tpl_vars['po']->value['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['po']->value['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-mobile"), 0, true);
?>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX")) {?>                 <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                    <?php if (($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) && !$_smarty_tpl->tpl_vars['po']->value['not_required']) {?>
                        <input type="hidden"
                               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                               id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                        />
                    <?php }?>
                    <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                            <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled'] && !$_smarty_tpl->tpl_vars['disabled']->value) {?>
                                id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>
                                onchange="fn_change_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                            <?php } else { ?>
                                onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                disabled="disabled"
                                class="disabled"
                            <?php }?>
                    >
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL")) {?>
                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value || ($_smarty_tpl->tpl_vars['runtime']->value['checkout'] && !$_smarty_tpl->tpl_vars['po']->value['value'])) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                        <?php echo $_smarty_tpl->__("select_option_above");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->__("please_select_one");?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SIMULTANEOUS")) {?>
                            <?php if (!$_smarty_tpl->tpl_vars['po']->value['value']) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                        <?php echo $_smarty_tpl->__("select_option_above");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->__("please_select_one");?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                            <?php if (!($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) || (($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) && $_smarty_tpl->tpl_vars['po']->value['value'] && $_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id'])) {?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "modifier", null, null);?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>
                                            <?php $_smarty_tpl->_assignInScope('selected_variant', $_smarty_tpl->tpl_vars['vr']->value['variant_id']);?>
                                            selected="selected"
                                        <?php }?>
                                >
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>
                                                (<?php echo preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modifier') ?: ''));?>
)
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->__("na");?>
</span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")) {?>                 <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] && ($_smarty_tpl->tpl_vars['po']->value['not_required'] || $_smarty_tpl->tpl_vars['po']->value['required'] != smarty_modifier_enum("YesNo::YES"))) {?>
                               disabled="disabled"
                           <?php }?>
                    />
                    <ul id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
_group" class="ty-product-options__elem">
                        <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled'] && !$_smarty_tpl->tpl_vars['disabled']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                                <li>
                                    <label id="option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__box option-items"
                                    >
                                        <input type="radio"
                                               class="radio"
                                               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                               <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>
                                                   <?php $_smarty_tpl->_assignInScope('selected_variant', $_smarty_tpl->tpl_vars['vr']->value['variant_id']);?>
                                                   checked="checked"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>
                                                   onclick="fn_change_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php } else { ?>
                                                   onclick="fn_change_variant_image('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                                   disabled="disabled"
                                               <?php }?>
                                        />
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                                    </label>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']]['variant_name'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </ul>
                    <?php if (!$_smarty_tpl->tpl_vars['po']->value['value'] && $_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL") && !($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value)) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->__("please_select_one");?>

                        </p>
                    <?php } elseif (!$_smarty_tpl->tpl_vars['po']->value['value'] && $_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL") && ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value)) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->__("select_option_above");?>

                        </p>
                    <?php }?>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->__("na");?>
</span>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?>                 <?php $_smarty_tpl->_assignInScope('default_variant_disbaled', false);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vr']->value['position'] == 0) {?>
                        <?php $_smarty_tpl->_assignInScope('default_variant_disabled', ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['vr']->value['disabled']) || ($_smarty_tpl->tpl_vars['disabled']->value && $_smarty_tpl->tpl_vars['po']->value['value'] != $_smarty_tpl->tpl_vars['vr']->value['variant_id']));?>
                        <input id="unchecked_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                               type="hidden"
                               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                               <?php if ($_smarty_tpl->tpl_vars['default_variant_disabled']->value) {?>
                                   disabled="disabled"
                               <?php }?>
                        />
                    <?php } else { ?>
                        <label class="ty-product-options__box option-items">
                            <span class="cm-field-container">
                                <input id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       type="checkbox"
                                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       class="checkbox"
                                       <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>
                                           checked="checked"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['vr']->value['disabled'] || $_smarty_tpl->tpl_vars['default_variant_disabled']->value || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                           disabled="disabled"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>
                                           onclick="fn_change_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php } else { ?>
                                           onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php }?>
                                />
                                <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>
                                            <bdi>
                                                (<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)
                                            </bdi>
                                        <?php }?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            </span>
                        </label>

                        <?php if ($_smarty_tpl->tpl_vars['default_variant_disabled']->value) {?>
                            <input id="checked_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                                   type="hidden"
                                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['vr']->value['disabled']) {?>
                                       disabled="disabled"
                                   <?php }?>
                            />
                        <?php }?>
                    <?php }?>
                <?php
}
if ($_smarty_tpl->tpl_vars['vr']->do_else) {
?>
                    <label class="ty-product-options__box option-items">
                        <input type="checkbox"
                               class="checkbox"
                               disabled="disabled"
                        />
                        <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>
                                    (<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::INPUT")) {?>                 <input id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                       type="text"
                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['po']->value['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>
                           disabled="disabled"
                       <?php }?>
                       class="ty-valign ty-input-text <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['location']->value == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                       <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>
                           title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                />
            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::TEXT")) {?>                 <textarea id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                          class="ty-product-options__textarea <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['location']->value == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                          rows="3"
                          name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>
                              disabled="disabled"
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>
                              title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php }?>
                ><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['po']->value['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::FILE")) {?>                 <div class="ty-product-options__elem ty-product-options__fileuploader">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']],'var_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'multiupload'=>$_smarty_tpl->tpl_vars['po']->value['multiupload'],'hidden_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[custom_files][".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'hidden_value'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'label_id'=>"option_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value), 0, true);
?>
                </div>
            <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['po']->value['comment']) {?>
                    <div class="ty-product-options__description"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['comment'], ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variant_images", null, null);?>
                <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled'] && !$_smarty_tpl->tpl_vars['disabled']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['var']->value['image_pair']['image_id']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id'] == $_smarty_tpl->tpl_vars['selected_variant']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('_class', "product-variant-image-selected");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('_class', "product-variant-image-unselected");?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>((string)$_smarty_tpl->tpl_vars['_class']->value)." ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['var']->value['image_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'],'obj_id'=>"variant_image_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."_".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id']),'image_onclick'=>"fn_set_option_value('".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."', '".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."', '".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id'])."'); void(0);"), 0, true);
?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                <div class="ty-product-variant-image ty-clear-both">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images');?>

                </div>
            <?php }?>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['product']->value['show_exception_warning'] == smarty_modifier_enum("YesNo::YES")) {?>
    <p id="warning_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options__no-combinations"><?php echo $_smarty_tpl->__("nocombination");?>
</p>
<?php }
}?>

<?php if (!$_smarty_tpl->tpl_vars['no_script']->value) {
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.formpre_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['form_name']->value ?? null)===null||$tmp==='' ? "product_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
', function(frm, elm) {
        if ($('#warning_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
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
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_options.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_options.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] || ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] != "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id'])))) {?>
    <?php $_smarty_tpl->_assignInScope('show_modifiers', true);
}?>

<?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp));?>

<input type="hidden" name="appearance[details_page]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['details_page']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['detailed_params'], 'value', false, 'param');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['param']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <input type="hidden" name="additional_info[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['param']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value) {?>
    <input type="hidden" name="appearance[obj_prefix]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['location']->value == "cart" || $_smarty_tpl->tpl_vars['product']->value['object_id']) {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['obj_id']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['extra_id']->value) {?>
    <input type="hidden" name="extra_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL") && $_smarty_tpl->tpl_vars['location']->value == "cart") {?>
    <?php $_smarty_tpl->_assignInScope('disabled', true);
}?>

<div id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
    <div class="cm-picker-product-options ty-product-options" id="opt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
        
        <?php $_smarty_tpl->_assignInScope('selected_variant', '');?>

        <div class="ty-control-group ty-product-options__item <?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?>product-list-field<?php }?> clearfix"
             id="opt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if (!($_smarty_tpl->tpl_vars['po']->value['option_type'] && ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) && !$_smarty_tpl->tpl_vars['po']->value['variants'] && $_smarty_tpl->tpl_vars['po']->value['missing_variants_handling'] == "H")) {?>
                <label id="option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type'] !== smarty_modifier_enum("ProductOptionTypes::FILE")) {?>
                           for="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       class="ty-control-group__label ty-product-options__item-label <?php if ($_smarty_tpl->tpl_vars['po']->value['required'] == "Y") {?>cm-required<?php }?> <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>cm-regexp<?php }?> <?php if (smarty_modifier_trim((($tmp = $_smarty_tpl->tpl_vars['po']->value['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>ty-product-options__item-label--tooltip<?php }?>"
                       <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>
                           data-ca-regexp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['regexp'], ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-message="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['incorrect_message'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                >
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');
if (smarty_modifier_trim((($tmp = $_smarty_tpl->tpl_vars['po']->value['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['po']->value['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-desktop"), 0, true);
}?>:
                </label>
                <?php if (smarty_modifier_trim((($tmp = $_smarty_tpl->tpl_vars['po']->value['description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['po']->value['description'],'wrapper_class'=>"ty-tooltip-block--options ty-tooltip-block--options-mobile"), 0, true);
?>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX")) {?>                 <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                    <?php if (($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) && !$_smarty_tpl->tpl_vars['po']->value['not_required']) {?>
                        <input type="hidden"
                               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                               id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                        />
                    <?php }?>
                    <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                            <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled'] && !$_smarty_tpl->tpl_vars['disabled']->value) {?>
                                id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>
                                onchange="fn_change_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                            <?php } else { ?>
                                onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                disabled="disabled"
                                class="disabled"
                            <?php }?>
                    >
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL")) {?>
                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value || ($_smarty_tpl->tpl_vars['runtime']->value['checkout'] && !$_smarty_tpl->tpl_vars['po']->value['value'])) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                        <?php echo $_smarty_tpl->__("select_option_above");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->__("please_select_one");?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SIMULTANEOUS")) {?>
                            <?php if (!$_smarty_tpl->tpl_vars['po']->value['value']) {?>
                                <option value="">
                                    <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                        <?php echo $_smarty_tpl->__("select_option_above");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->__("please_select_one");?>

                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                            <?php if (!($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) || (($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) && $_smarty_tpl->tpl_vars['po']->value['value'] && $_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id'])) {?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "modifier", null, null);?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>
                                            <?php $_smarty_tpl->_assignInScope('selected_variant', $_smarty_tpl->tpl_vars['vr']->value['variant_id']);?>
                                            selected="selected"
                                        <?php }?>
                                >
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>
                                                (<?php echo preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modifier') ?: ''));?>
)
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                </option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->__("na");?>
</span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")) {?>                 <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] && ($_smarty_tpl->tpl_vars['po']->value['not_required'] || $_smarty_tpl->tpl_vars['po']->value['required'] != smarty_modifier_enum("YesNo::YES"))) {?>
                               disabled="disabled"
                           <?php }?>
                    />
                    <ul id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
_group" class="ty-product-options__elem">
                        <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled'] && !$_smarty_tpl->tpl_vars['disabled']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                                <li>
                                    <label id="option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__box option-items"
                                    >
                                        <input type="radio"
                                               class="radio"
                                               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                               <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>
                                                   <?php $_smarty_tpl->_assignInScope('selected_variant', $_smarty_tpl->tpl_vars['vr']->value['variant_id']);?>
                                                   checked="checked"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>
                                                   onclick="fn_change_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php } else { ?>
                                                   onclick="fn_change_variant_image('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                               <?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                                   disabled="disabled"
                                               <?php }?>
                                        />
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                                    </label>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']]['variant_name'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </ul>
                    <?php if (!$_smarty_tpl->tpl_vars['po']->value['value'] && $_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL") && !($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value)) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->__("please_select_one");?>

                        </p>
                    <?php } elseif (!$_smarty_tpl->tpl_vars['po']->value['value'] && $_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL") && ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['disabled']->value)) {?>
                        <p class="ty-product-options__description ty-clear-both">
                            <?php echo $_smarty_tpl->__("select_option_above");?>

                        </p>
                    <?php }?>
                <?php } else { ?>
                    <input type="hidden"
                           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                           id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <span><?php echo $_smarty_tpl->__("na");?>
</span>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?>                 <?php $_smarty_tpl->_assignInScope('default_variant_disbaled', false);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vr']->value['position'] == 0) {?>
                        <?php $_smarty_tpl->_assignInScope('default_variant_disabled', ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['vr']->value['disabled']) || ($_smarty_tpl->tpl_vars['disabled']->value && $_smarty_tpl->tpl_vars['po']->value['value'] != $_smarty_tpl->tpl_vars['vr']->value['variant_id']));?>
                        <input id="unchecked_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                               type="hidden"
                               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                               <?php if ($_smarty_tpl->tpl_vars['default_variant_disabled']->value) {?>
                                   disabled="disabled"
                               <?php }?>
                        />
                    <?php } else { ?>
                        <label class="ty-product-options__box option-items">
                            <span class="cm-field-container">
                                <input id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       type="checkbox"
                                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       class="checkbox"
                                       <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>
                                           checked="checked"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['vr']->value['disabled'] || $_smarty_tpl->tpl_vars['default_variant_disabled']->value || $_smarty_tpl->tpl_vars['disabled']->value) {?>
                                           disabled="disabled"
                                       <?php }?>
                                       <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update']) {?>
                                           onclick="fn_change_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php } else { ?>
                                           onchange="fn_change_variant_image('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"
                                       <?php }?>
                                />
                                <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>
                                            <bdi>
                                                (<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)
                                            </bdi>
                                        <?php }?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            </span>
                        </label>

                        <?php if ($_smarty_tpl->tpl_vars['default_variant_disabled']->value) {?>
                            <input id="checked_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                                   type="hidden"
                                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled'] || $_smarty_tpl->tpl_vars['vr']->value['disabled']) {?>
                                       disabled="disabled"
                                   <?php }?>
                            />
                        <?php }?>
                    <?php }?>
                <?php
}
if ($_smarty_tpl->tpl_vars['vr']->do_else) {
?>
                    <label class="ty-product-options__box option-items">
                        <input type="checkbox"
                               class="checkbox"
                               disabled="disabled"
                        />
                        <?php if ($_smarty_tpl->tpl_vars['show_modifiers']->value) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_modifiers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>
                                    (<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_modifiers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::INPUT")) {?>                 <input id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                       type="text"
                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['po']->value['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>
                           disabled="disabled"
                       <?php }?>
                       class="ty-valign ty-input-text <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['location']->value == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                       <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>
                           title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                />
            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::TEXT")) {?>                 <textarea id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
"
                          class="ty-product-options__textarea <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>cm-hint<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['location']->value == "cart") {?>cm-cart-contents-updatable-field<?php }?>"
                          rows="3"
                          name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>
                              disabled="disabled"
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>
                              title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php }?>
                ><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['po']->value['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::FILE")) {?>                 <div class="ty-product-options__elem ty-product-options__fileuploader">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']],'var_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'multiupload'=>$_smarty_tpl->tpl_vars['po']->value['multiupload'],'hidden_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[custom_files][".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'hidden_value'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'label_id'=>"option_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value), 0, true);
?>
                </div>
            <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['po']->value['comment']) {?>
                    <div class="ty-product-options__description"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['comment'], ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variant_images", null, null);?>
                <?php if (!$_smarty_tpl->tpl_vars['po']->value['disabled'] && !$_smarty_tpl->tpl_vars['disabled']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['var']->value['image_pair']['image_id']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id'] == $_smarty_tpl->tpl_vars['selected_variant']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('_class', "product-variant-image-selected");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('_class', "product-variant-image-unselected");?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>((string)$_smarty_tpl->tpl_vars['_class']->value)." ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['var']->value['image_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'],'obj_id'=>"variant_image_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."_".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id']),'image_onclick'=>"fn_set_option_value('".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)."', '".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."', '".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id'])."'); void(0);"), 0, true);
?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                <div class="ty-product-variant-image ty-clear-both">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images');?>

                </div>
            <?php }?>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['product']->value['show_exception_warning'] == smarty_modifier_enum("YesNo::YES")) {?>
    <p id="warning_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options__no-combinations"><?php echo $_smarty_tpl->__("nocombination");?>
</p>
<?php }
}?>

<?php if (!$_smarty_tpl->tpl_vars['no_script']->value) {
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.formpre_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['form_name']->value ?? null)===null||$tmp==='' ? "product_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
', function(frm, elm) {
        if ($('#warning_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
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
