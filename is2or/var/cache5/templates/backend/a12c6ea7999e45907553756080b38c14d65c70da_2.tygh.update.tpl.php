<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/views/vendor_plans/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba563d28a0_57836717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a12c6ea7999e45907553756080b38c14d65c70da' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/views/vendor_plans/update.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:views/categories/components/picker/picker.tpl' => 1,
    'tygh:addons/vendor_plans/views/vendor_plans/components/update_for_plan_storefront_notification.tpl' => 1,
    'tygh:pickers/storefronts/picker.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_6835ba563d28a0_57836717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','vendor_plans.best_choise','description','position','price','vendor_plans.transaction_fee','vendor_plans.products_limit','vendor_plans.products_limit_tooltip','vendor_plans.revenue_up_to','vendor_plans.revenue_up_to_tooltip','vendor_plans.vendor_store','vendor_plans.vendor_store_tooltip','vendor_plans.all_categories_included','vendor_plans.all_storefronts_included'));
$_smarty_tpl->_assignInScope('id', 0);
if ($_smarty_tpl->tpl_vars['plan']->value['plan_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['plan']->value['plan_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('can_be_disabled', false);
}?>

<?php $_smarty_tpl->_assignInScope('action_context', (($tmp = $_smarty_tpl->tpl_vars['action_context']->value ?? null)===null||$tmp==='' ? $_REQUEST['_action_context'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('plans_count', (($tmp = $_smarty_tpl->tpl_vars['plans_count']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<div id="content_plan_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
      method="post"
      enctype="multipart/form-data"
      name="update_plan_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
      class="<?php if ($_smarty_tpl->tpl_vars['ajax_mode']->value) {?>cm-ajax <?php }?>form-horizontal form-edit"
      data-ca-vendor-plans-is-update-form="<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>true<?php } else { ?>false<?php }?>"
      data-ca-vendor-plans-selected-storefronts="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['plan']->value['storefront_ids']), ENT_QUOTES, 'UTF-8');?>
"
      data-ca-vendor-plans-affected-vendors="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['affected_vendors']->value), ENT_QUOTES, 'UTF-8');?>
"
      data-ca-vendor-plans-vendors-update-dialog-id="update_plan_vendors_update_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
      <?php if ($_smarty_tpl->tpl_vars['action_context']->value) {?>data-ca-ajax-done-event="ce.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action_context']->value, ENT_QUOTES, 'UTF-8');?>
.vendor_plan_save"<?php }?>
>
<input type="hidden" name="plan_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    
    <div id="content_plan_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:details_general_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:details_general_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <div class="control-group">
            <label class="control-label cm-required" for="elm_plan_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_plan_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[plan]" size="35" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_is_default_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_plans.best_choise");?>
:</label>
            <div class="controls">
                <input type="hidden" name="plan_data[is_default]" value="<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default'] || !$_smarty_tpl->tpl_vars['plans_count']->value) {?>1<?php } else { ?>0<?php }?>" />
                <input type="checkbox" id="elm_is_default_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[is_default]" size="10" value="1"<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default'] || !$_smarty_tpl->tpl_vars['plans_count']->value) {?> checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default'] || !$_smarty_tpl->tpl_vars['plans_count']->value || $_smarty_tpl->tpl_vars['plan']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?> disabled="disabled"<?php }?>/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_plan_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                 <textarea id="elm_plan_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    name="plan_data[description]"
                    cols="55"
                    rows="8"
                    class="cm-wysiwyg input-large"
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[position]" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" />
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"plan_data[status]",'id'=>"plan_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['plan']->value,'hidden'=>true,'can_be_disabled'=>$_smarty_tpl->tpl_vars['can_be_disabled']->value), 0, false);
?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:details_general_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <div id="content_plan_commission_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        
        <div class="control-group">
            <label class="control-label" for="elm_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</label>
            <div class="controls">
                <input type="text" id="elm_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[price]" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['price'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" />
                <select name="plan_data[periodicity]" class="input-small">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periodicities']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['plan']->value['periodicity']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_commission_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_plans.transaction_fee");?>
:</label>
            <div class="controls">
                <input id="elm_commission_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="plan_data[commission]" class="input-mini" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['commission'], ENT_QUOTES, 'UTF-8');?>
" size="4"> % + <input type="text" name="plan_data[fixed_commission]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['fixed_commission'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" size="4"> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</div>
        </div>
    </div>

    <div id="content_plan_restrictions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:update_restrictions"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:update_restrictions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

            <div class="control-group">
                <label class="control-label" for="elm_products_limit_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_plans.products_limit");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_products_limit_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[products_limit]" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['products_limit'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" />
                    <p class="muted description"><?php echo $_smarty_tpl->__("vendor_plans.products_limit_tooltip");?>
</p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_revenue_limit_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</label>
                <div class="controls">
                    <input type="text" id="elm_revenue_limit_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[revenue_limit]" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['revenue_limit'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" />
                    <p class="muted description"><?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_tooltip");?>
</p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_vendor_store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");?>
:</label>
                <div class="controls">
                    <input type="hidden" name="plan_data[vendor_store]" value="0" />
                    <input type="checkbox" id="elm_vendor_store_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[vendor_store]" size="10" value="1"<?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?> checked="checked"<?php }?> />
                    <p class="muted description"><?php echo $_smarty_tpl->__("vendor_plans.vendor_store_tooltip");?>
</p>
                </div>
            </div>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:update_restrictions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </div>

    <div id="content_plan_categories_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
        <?php $_smarty_tpl->_assignInScope('item_ids', $_smarty_tpl->tpl_vars['plan']->value['categories'] && !is_array($_smarty_tpl->tpl_vars['plan']->value['categories']) ? (smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['plan']->value['categories'])) : ($_smarty_tpl->tpl_vars['plan']->value['categories']));?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:details_categories"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:details_categories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <input type="hidden" name="plan_data[categories]" class="cm-picker-value"/>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"plan_data[categories][]",'simple_class'=>"cm-field-container",'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'show_advanced'=>true,'view_mode'=>"external",'result_class'=>"object-picker__result--inline",'selection_class'=>"object-picker__selection--product-categories",'close_on_select'=>false,'allow_multiple_created_objects'=>true,'no_items_text'=>$_smarty_tpl->__("vendor_plans.all_categories_included")), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:details_categories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <div id="content_plan_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden" data-ca-vendor-plans="vendorPlanStorefronts">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:details_storefronts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:details_storefronts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_plans/views/vendor_plans/components/update_for_plan_storefront_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('plan_id'=>$_smarty_tpl->tpl_vars['id']->value,'affected_vendors_count'=>$_smarty_tpl->tpl_vars['plan']->value['companies_count']), 0, false);
?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'input_name'=>"plan_data[storefronts]",'item_ids'=>(($tmp = $_smarty_tpl->tpl_vars['plan']->value['storefronts'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'data_id'=>"storefront_ids",'use_keys'=>"N",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("vendor_plans.all_storefronts_included")), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:details_storefronts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:details_tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:details_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:details_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox')), 0, false);
?>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[vendor_plans.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0, false);
?>
</div>

</form>
<!--content_plan_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
