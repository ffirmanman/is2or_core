<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_plan_storefront_notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba564ab609_68218298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7ea6c3073a4e16f688f53855662fcbed26f5802' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_plan_storefront_notification.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835ba564ab609_68218298 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.update_for_plan.title','vendor_plans.update_for_plan.general_message','vendor_plans.storefronts_update_for_plan.add_storefronts_message','vendor_plans.storefronts_update_for_plan.remove_storefronts_message'));
?>
<div class="hidden alert alert-block" data-ca-vendor-plans="updatePlanStorefrontVendorsNotification">

    <h4>
        <?php echo $_smarty_tpl->__("vendor_plans.update_for_plan.title");?>

    </h4>

    <div>
        <div>
            <?php echo $_smarty_tpl->__("vendor_plans.update_for_plan.general_message",array($_smarty_tpl->tpl_vars['affected_vendors_count']->value,"[search_url]"=>fn_url("companies.manage?plan_id=".((string)$_smarty_tpl->tpl_vars['plan_id']->value))));?>

        </div>

        <div>
            <div data-ca-vendor-plans="updatePlanStorefrontVendorsAddNotification">
                <label class="checkbox">
                    <input type="checkbox" name="plan_data[add_vendors_to_new_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_plan.add_storefronts_message",array($_smarty_tpl->tpl_vars['affected_vendors_count']->value));?>

                </label>
            </div>

            <div data-ca-vendor-plans="updatePlanStorefrontVendorsRemoveNotification">
                <label class="checkbox">
                    <input type="checkbox" name="plan_data[remove_vendors_from_old_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_plan.remove_storefronts_message",array($_smarty_tpl->tpl_vars['affected_vendors_count']->value));?>

                </label>
            </div>
        </div>
    </div>
</div>
<?php }
}
