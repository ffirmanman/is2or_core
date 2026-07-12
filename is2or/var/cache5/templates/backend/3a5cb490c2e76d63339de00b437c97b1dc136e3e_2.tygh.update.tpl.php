<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bff60aeca2_77598581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a5cb490c2e76d63339de00b437c97b1dc136e3e' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 3,
    'tygh:views/storefronts/components/name.tpl' => 1,
    'tygh:views/storefronts/components/url.tpl' => 1,
    'tygh:views/storefronts/components/is_default.tpl' => 1,
    'tygh:views/storefronts/components/status.tpl' => 1,
    'tygh:views/storefronts/components/access_key.tpl' => 1,
    'tygh:views/storefronts/components/access_only_for_authorized_customers.tpl' => 1,
    'tygh:views/storefronts/components/theme.tpl' => 1,
    'tygh:views/storefronts/components/picker/picker.tpl' => 1,
    'tygh:views/storefronts/components/languages.tpl' => 1,
    'tygh:views/storefronts/components/currencies.tpl' => 1,
    'tygh:views/storefronts/components/redirect_customer.tpl' => 1,
    'tygh:views/storefronts/components/regions.tpl' => 1,
    'tygh:views/storefronts/components/companies.tpl' => 1,
    'tygh:views/storefronts/components/administrators.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6835bff60aeca2_77598581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('information','design','copy_theme_from_another_storefront','localization','mve_ultimate_license_required','add_storefront','create','creating_storefront'));
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['storefront']->value->storefront_id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
        <form id="update_storefront_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
              action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              name="storefront_update_form"
              class="form-horizontal form-edit cm-disable-empty-files <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>cm-hide-inputs<?php }?>"
        >
            <input type="hidden"
                   name="storefront_data[storefront_id]"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            />

            <div id="content_general">
                <?php $_smarty_tpl->_assignInScope('name', '');?>
                <?php $_smarty_tpl->_assignInScope('url', '');?>
                <?php $_smarty_tpl->_assignInScope('status', smarty_modifier_enum("StorefrontStatuses::OPEN"));?>
                <?php $_smarty_tpl->_assignInScope('access_key', '');?>
                <?php $_smarty_tpl->_assignInScope('is_default', false);?>
                <?php $_smarty_tpl->_assignInScope('theme', $_smarty_tpl->tpl_vars['config']->value['base_theme']);?>
                <?php $_smarty_tpl->_assignInScope('is_accessible_for_authorized_customers_only', false);?>

                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['storefront']->value->name);?>
                    <?php $_smarty_tpl->_assignInScope('url', $_smarty_tpl->tpl_vars['storefront']->value->url);?>
                    <?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['storefront']->value->status);?>
                    <?php $_smarty_tpl->_assignInScope('access_key', $_smarty_tpl->tpl_vars['storefront']->value->access_key);?>
                    <?php $_smarty_tpl->_assignInScope('is_default', $_smarty_tpl->tpl_vars['storefront']->value->is_default);?>
                    <?php $_smarty_tpl->_assignInScope('theme', $_smarty_tpl->tpl_vars['storefront']->value->theme_name);?>
                    <?php $_smarty_tpl->_assignInScope('is_accessible_for_authorized_customers_only', $_smarty_tpl->tpl_vars['storefront']->value->is_accessible_for_authorized_customers_only);?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("information")), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/is_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'is_default'=>$_smarty_tpl->tpl_vars['is_default']->value), 0, false);
?>

                <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'meta'=>"company-switch-storefront-status-button",'extra_attrs'=>array("data-ca-storefront-id"=>$_smarty_tpl->tpl_vars['id']->value,"data-ca-opened-status"=>$_prefixVariable1,"data-ca-closed-status"=>$_prefixVariable2,"data-ca-return-url"=>$_prefixVariable3,"data-ca-submit-url"=>"storefronts.update_status")), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/access_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'access_key'=>$_smarty_tpl->tpl_vars['access_key']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/access_only_for_authorized_customers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'is_accessible_for_authorized_customers_only'=>$_smarty_tpl->tpl_vars['is_accessible_for_authorized_customers_only']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("design")), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'theme'=>$_smarty_tpl->tpl_vars['theme']->value,'current_style'=>$_smarty_tpl->tpl_vars['current_style']->value,'current_theme'=>$_smarty_tpl->tpl_vars['current_theme']->value), 0, false);
?>

                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("copy_theme_from_another_storefront");?>
</label>
                        <div class="controls">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"storefront_data[extra][copy_layouts_from_storefront_id]",'show_advanced'=>false), 0, false);
?>
                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("localization")), 0, true);
?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'all_language_ids'=>$_smarty_tpl->tpl_vars['all_language_ids']->value,'all_languages'=>$_smarty_tpl->tpl_vars['all_languages']->value,'is_localization_picker_allowed'=>$_smarty_tpl->tpl_vars['is_localization_picker_allowed']->value), 0, false);
?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/currencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'all_currency_ids'=>$_smarty_tpl->tpl_vars['all_currency_ids']->value,'all_currencies'=>$_smarty_tpl->tpl_vars['all_currencies']->value,'is_localization_picker_allowed'=>$_smarty_tpl->tpl_vars['is_localization_picker_allowed']->value), 0, false);
?>
                <?php }?>
            </div>

            <div id="content_regions" class="hidden">
                <?php $_smarty_tpl->_assignInScope('selected_countries', array());?>
                <?php $_smarty_tpl->_assignInScope('redirect_customer', false);?>
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['selected_countries_list']->value))) {?>
                        <?php $_smarty_tpl->_assignInScope('selected_countries', $_smarty_tpl->tpl_vars['selected_countries_list']->value);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('redirect_customer', $_smarty_tpl->tpl_vars['storefront']->value->redirect_customer);?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/redirect_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'redirect_customer'=>$_smarty_tpl->tpl_vars['redirect_customer']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/regions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_countries'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'all_countries'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0, false);
?>
            </div>

            <div id="content_companies" class="hidden">
                <?php $_smarty_tpl->_assignInScope('selected_companies', array());?>
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('selected_companies', $_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds());?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/companies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_companies'=>$_smarty_tpl->tpl_vars['selected_companies']->value), 0, false);
?>
            </div>

            <div id="content_administrators" class="hidden">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/administrators.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'storefront_admins'=>$_smarty_tpl->tpl_vars['storefront_admins']->value), 0, false);
?>
            </div>
        </form>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"storefronts:update_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"storefronts:update_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (($_smarty_tpl->tpl_vars['runtime']->value['mode'] === "add" && $_smarty_tpl->tpl_vars['is_storefronts_limit_reached']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('promo_popup_title', $_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))));?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_override_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-size",'tool_href'=>"functionality_restrictions.mve_ultimate_license_required",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->__("add_storefront"),'link_text'=>$_smarty_tpl->__("create"),'icon'=>" ",'meta_data'=>"data-ca-dialog-title='".((string)$_smarty_tpl->tpl_vars['promo_popup_title']->value)."'"), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_name'=>"dispatch[storefronts.update]",'but_target_form'=>"update_storefront_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"storefronts:update_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['storefront']->value->name : $_smarty_tpl->__("creating_storefront"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
