<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/companies/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db59ac557_76609019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e210f7143df755675922dd4fa404d22a8090e365' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/companies/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:common/subheader.tpl' => 5,
    'tygh:common/ajax_select_object.tpl' => 1,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/storefronts/components/status.tpl' => 1,
    'tygh:views/storefronts/components/access_key.tpl' => 1,
    'tygh:views/storefronts/components/access_only_for_authorized_customers.tpl' => 1,
    'tygh:views/storefronts/components/theme.tpl' => 1,
    'tygh:views/storefronts/components/languages.tpl' => 1,
    'tygh:views/storefronts/components/currencies.tpl' => 1,
    'tygh:views/profiles/components/profile_fields.tpl' => 2,
    'tygh:common/select_status.tpl' => 1,
    'tygh:components/append_language.tpl' => 1,
    'tygh:views/companies/components/logos_list.tpl' => 1,
    'tygh:common/double_selectboxes.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/price.tpl' => 3,
    'tygh:buttons/approve_disapprove.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 3,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68345db59ac557_76609019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.puny_decode.php','function'=>'smarty_modifier_puny_decode',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),6=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('use_existing_store','storefront','none','recommended','information','name','storefront_url','ttc_storefront_url','design','localization','status','active','pending','new','disabled','language','company_language_field_description','create_administrator_account','settings','company','description','redirect_customer_from_storefront','entry_page','none','index','all_pages','countries','shipping_methods','available_for_vendor','shipping_methods','disabled','available_for_vendor','no_data','menu','view_vendor_products','view_vendor_categories','view_vendor_admins','view_vendor_users','view_vendor_orders','vendors_statistics','balance','orders','sales','income','active_products','out_of_stock_products','save','delete','new_vendor','add_storefront'));
if ($_smarty_tpl->tpl_vars['company_data']->value['company_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['company_data']->value['company_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}
$_smarty_tpl->_assignInScope('is_allowed_to_update_companies', fn_check_view_permissions("companies.update","POST"));
$_smarty_tpl->_assignInScope('hide_inputs', !$_smarty_tpl->tpl_vars['is_allowed_to_update_companies']->value);?>

<?php if ($_smarty_tpl->tpl_vars['company_data']->value['status'] == smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php $_smarty_tpl->_assignInScope('show_approve', true);?>
    <?php $_smarty_tpl->_assignInScope('status_display', "text");
}?>

<?php if (!$_smarty_tpl->tpl_vars['selected_section']->value) {?>
    <?php $_smarty_tpl->_assignInScope('selected_section', $_REQUEST['selected_section']);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === "update" && !$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
    <?php $_smarty_tpl->_assignInScope('input_append', "input-append");?>
    <?php $_smarty_tpl->_assignInScope('input_append_wysiwyg', "input-append input-append--wysiwyg");
}?>

<form class="form-horizontal form-edit <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['is_allowed_to_update_companies']->value) {?>cm-hide-inputs<?php }?> <?php if (!$_smarty_tpl->tpl_vars['id']->value && fn_allowed_for("ULTIMATE")) {?>cm-ajax cm-comet cm-disable-check-changes<?php }?>" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="company_update_form" enctype="multipart/form-data"> <input type="hidden" name="fake" value="1" />
<input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div id="content_detailed" class="<?php if (!empty($_smarty_tpl->tpl_vars['selected_section']->value) && $_smarty_tpl->tpl_vars['selected_section']->value !== "detailed") {?>hidden<?php }?>"> <fieldset>

<?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['id']->value && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("use_existing_store")), 0, false);
?>

    <div class="control-group">
        <label class="control-label" for="elm_company_exists_store"><?php echo $_smarty_tpl->__("storefront");?>
:</label>
        <div class="controls">
            <input type="hidden" name="company_data[clone_from]" id="elm_company_exists_store" value="" onchange="fn_switch_store_settings(this);" />
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_url'=>"companies.get_companies_list?show_all=Y&default_label=none",'text'=>$_smarty_tpl->__("none"),'result_elm'=>"elm_company_exists_store",'id'=>"exists_store_selector"), 0, false);
?>
        </div>
    </div>

    <div id="clone_settings_container" class="hidden">

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['clone_schema']->value,'size'=>ceil(sizeof($_smarty_tpl->tpl_vars['clone_schema']->value)/2),'assign'=>"splitted_objects",'vertical_delimition'=>false,'preverse_keys'=>true),$_smarty_tpl);?>

    <div class="control-group">
        <div class="controls">
            <table cellpadding="10">
            <tr valign="top">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_objects']->value, 's_object');
$_smarty_tpl->tpl_vars['s_object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s_object']->value) {
$_smarty_tpl->tpl_vars['s_object']->do_else = false;
?>
                    <td>
                    <ul class="unstyled">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['s_object']->value, 'object_data', false, 'object');
$_smarty_tpl->tpl_vars['object_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value => $_smarty_tpl->tpl_vars['object_data']->value) {
$_smarty_tpl->tpl_vars['object_data']->do_else = false;
?>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['object_data']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('label', "clone_".((string)$_smarty_tpl->tpl_vars['object']->value));?>
                                    <label class="checkbox">

                                        <input type="checkbox" name="company_data[clone][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['object_data']->value['checked_by_default']) {?>checked="checked"<?php }?> class="cm-item-s cm-dependence-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['object_data']->value['dependence']) {?>onchange="fn_check_dependence('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_data']->value['dependence'], ENT_QUOTES, 'UTF-8');?>
', this.checked)"<?php }?> />
                                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['label']->value);
if ($_smarty_tpl->tpl_vars['object_data']->value['tooltip']) {
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['object_data']->value['tooltip'])), 0, true);
}
if ($_smarty_tpl->tpl_vars['object_data']->value['checked_by_default']) {?>&nbsp;<span class="muted">(<?php echo $_smarty_tpl->__("recommended");?>
)</span><?php }?></label>
                                <?php }?>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    </td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr></table>
            <p>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_target'=>"s",'style'=>"links"), 0, false);
?>
            </p>
        </div>
    </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("information")), 0, true);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:general_information"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:general_information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
<div class="control-group">
    <label for="elm_company_name" class="control-label cm-required cm-trim"><?php echo $_smarty_tpl->__("name");?>
:</label>
    <div class="controls">
        <input type="text" name="company_data[company]" id="elm_company_name" size="32" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:storefronts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:storefronts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="control-group">
    <label for="elm_company_storefront" class="control-label cm-required cm-trim"><?php echo $_smarty_tpl->__("storefront_url");?>
:</label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            http://<?php echo htmlspecialchars((string) smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['company_data']->value['storefront']), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <input type="text" name="company_data[storefront]" id="elm_company_storefront" size="32" value="<?php echo htmlspecialchars((string) smarty_modifier_puny_decode((($tmp = $_smarty_tpl->tpl_vars['company_data']->value['storefront'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
        <?php }?>
        <p class="muted description"><?php echo $_smarty_tpl->__("ttc_storefront_url");?>
</p>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:storefronts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:storefronts_design"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:storefronts_design"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company_id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['company_data']->value['storefront_status'],'input_name'=>"company_data[storefront_status]",'meta'=>"company-switch-storefront-status-button",'extra_attrs'=>array("data-ca-company-id"=>$_prefixVariable1,"data-ca-opened-status"=>$_prefixVariable2,"data-ca-closed-status"=>$_prefixVariable3,"data-ca-return-url"=>$_prefixVariable4)), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/access_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'access_key'=>$_smarty_tpl->tpl_vars['company_data']->value['store_access_key'],'input_name'=>"company_data[store_access_key]"), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/access_only_for_authorized_customers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'is_accessible_for_authorized_customers_only'=>$_smarty_tpl->tpl_vars['company_data']->value['is_accessible_for_authorized_customers_only'],'input_name'=>"company_data[is_accessible_for_authorized_customers_only]"), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("design")), 0, true);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'theme_url'=>"themes.manage?switch_company_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'theme'=>$_smarty_tpl->tpl_vars['theme']->value,'current_theme'=>$_smarty_tpl->tpl_vars['current_theme']->value,'current_style'=>$_smarty_tpl->tpl_vars['current_style']->value,'input_name'=>"company_data[theme_name]"), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("localization")), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['storefront_id']->value,'all_languages'=>$_smarty_tpl->tpl_vars['all_languages']->value), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/currencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['storefront_id']->value,'all_currencies'=>$_smarty_tpl->tpl_vars['all_currencies']->value), 0, false);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:storefronts_design"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'include'=>array("company"),'nothing_extra'=>true,'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, false);
?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"company_data[status]",'id'=>"company_data",'obj'=>$_smarty_tpl->tpl_vars['company_data']->value,'items_status'=>fn_get_predefined_statuses("companies",$_smarty_tpl->tpl_vars['company_data']->value['status']),'display'=>$_smarty_tpl->tpl_vars['status_display']->value), 0, false);
?>
    <?php } else { ?>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("status");?>
:</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" checked="checked" id="elm_company_status"/>
                    <?php if ($_smarty_tpl->tpl_vars['company_data']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
                        <?php echo $_smarty_tpl->__("active");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['company_data']->value['status'] === smarty_modifier_enum("ObjectStatuses::PENDING")) {?>
                        <?php echo $_smarty_tpl->__("pending");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['company_data']->value['status'] === smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
                        <?php echo $_smarty_tpl->__("new");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['company_data']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
                        <?php echo $_smarty_tpl->__("disabled");?>

                    <?php }?>
                </label>
            </div>
        </div>
    <?php }?>

    <div class="control-group">
        <label class="control-label" for="elm_company_language"><?php echo $_smarty_tpl->__("language");?>
:</label>
        <div class="controls">
            <select name="company_data[lang_code]" id="elm_company_language">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'lang_code');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang_code']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['lang_code']->value == $_smarty_tpl->tpl_vars['company_data']->value['lang_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <p class="muted description"><?php echo $_smarty_tpl->__("company_language_field_description");?>
</p>
            <?php }?>
        </div>
    </div>
<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    function fn_switch_store_settings(elm)
    {
        jelm = Tygh.$(elm);
        var close = true;
        if (jelm.val() != 'all' && jelm.val() != '' && jelm.val() != 0) {
            close = false;
        }

        Tygh.$('#clone_settings_container').toggleBy(close);
    }

    function fn_check_dependence(object, enabled)
    {
        if (enabled) {
            Tygh.$('.cm-dependence-' + object).prop('checked', true).prop('readonly', true).on('click', function(e) {
                return false
            });
        } else {
            Tygh.$('.cm-dependence-' + object).prop('readonly', false).off('click');
        }
    }
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    

    <?php if (!fn_allowed_for("ULTIMATE")) {?>
        <div class="control-group">
            <label class="control-label" for="elm_company_vendor_admin"><?php echo $_smarty_tpl->__("create_administrator_account");?>
:</label>
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[is_create_vendor_admin]" id="elm_company_vendor_admin" checked="checked" value="Y" />
                </label>
            </div>
        </div>
    <?php }
}?>


<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_assignInScope('excluded_fields', array("company","company_description","accept_terms","admin_firstname","admin_lastname"));?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:contact_information"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:contact_information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'exclude'=>$_smarty_tpl->tpl_vars['excluded_fields']->value,'nothing_extra'=>true,'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, true);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:contact_information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:shipping_address"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:shipping_address"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:shipping_address"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php ob_start();
echo $_smarty_tpl->__("settings");
$_prefixVariable5=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("company");
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable5.": ".$_prefixVariable6), 0, true);
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['company_settings']->value,'section'=>"Company",'html_id_prefix'=>"field_",'html_name'=>"update"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['company_settings']->value,'section'=>"Company",'html_id_prefix'=>"field_",'html_name'=>"update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['company_settings']->value,'section'=>"Company",'html_id_prefix'=>"field_",'html_name'=>"update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:general_information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</fieldset>
</div> 


<div id="content_description" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "description") {?>hidden<?php }?>"> <fieldset>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="control-group">
    <label class="control-label" for="elm_company_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
    <div class="controls">
        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg']->value, ENT_QUOTES, 'UTF-8');?>
">
            <textarea id="elm_company_description"
                name="company_data[company_description]"
                cols="55"
                rows="8"
                class="cm-wysiwyg input-large"
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value,'simple_tooltip'=>true), 0, false);
?>
        </div>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</fieldset>
</div> 

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <div id="content_logos" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "logos") {?>hidden<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:logos"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:logos"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/logos_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logos'=>$_smarty_tpl->tpl_vars['company_data']->value['logos'],'company_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:logos"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <?php }?>


<?php if (fn_allowed_for("ULTIMATE")) {?>
<div id="content_regions" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "regions") {?>hidden<?php }?>">
    <fieldset>
        <div class="control-group">
            <div class="controls">
            <input type="hidden" name="company_data[redirect_customer]" value="N" checked="checked"/>
            <label class="checkbox"><input type="checkbox" name="company_data[redirect_customer]" id="sw_company_redirect" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['redirect_customer'] == "Y") {?>checked="checked"<?php }?> value="Y" class="cm-switch-availability cm-switch-inverse" /><?php echo $_smarty_tpl->__("redirect_customer_from_storefront");?>
</label>
            </div>
        </div>

        <div class="control-group" id="company_redirect">
            <label class="control-label" for="elm_company_entry_page"><?php echo $_smarty_tpl->__("entry_page");?>
</label>
            <div class="controls">
            <select name="company_data[entry_page]" id="elm_company_entry_page" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['redirect_customer'] == "Y") {?>disabled="disabled"<?php }?>>
                <option value="none" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['entry_page'] == "none") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
                <option value="index" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['entry_page'] == "index") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("index");?>
</option>
                <option value="all_pages" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['entry_page'] == "all_pages") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all_pages");?>
</option>
            </select>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>"company_data[countries_list]",'first_data'=>$_smarty_tpl->tpl_vars['company_data']->value['countries_list'],'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['countries_list']->value), 0, false);
?>
    </fieldset>
</div>

<?php }?>

<?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
<div id="content_shipping_methods" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "shipping_methods") {?>hidden<?php }?>">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:shipping_methods"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:shipping_methods"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
        <input type="hidden" name="company_data[shippings]" value="" />
        <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead>
            <tr>
                <th width="50%"><?php echo $_smarty_tpl->__("shipping_methods");?>
</th>
                <th class="center"><?php echo $_smarty_tpl->__("available_for_vendor");?>
</th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shippings']->value, 'shipping', false, 'shipping_id');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
            <tr>
                <td data-th="<?php echo $_smarty_tpl->__("shipping_methods");?>
"><a href="<?php echo htmlspecialchars((string) fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['shipping']->value['status'] == "D") {?> (<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->__("disabled"), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></td>
                <td class="center" data-th="<?php echo $_smarty_tpl->__("available_for_vendor");?>
">
                    <input type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['id']->value || smarty_modifier_in_array($_smarty_tpl->tpl_vars['shipping_id']->value,$_smarty_tpl->tpl_vars['company_data']->value['shippings_ids'])) {?> checked="checked"<?php }?> name="company_data[shippings][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="shipping_methods">
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:shipping_methods"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php }?>

<div id="content_addons" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "addons") {?>hidden<?php }?>">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:detailed_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:detailed_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:detailed_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</form> 
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>"companies",'active_tab'=>$_smarty_tpl->tpl_vars['selected_section']->value,'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:update_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:update_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['id']->value) {?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("menu");?>
</h6>
    <ul class="nav nav-list">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:sidebar_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:sidebar_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li><a href="<?php echo htmlspecialchars((string) fn_url("products.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>
</a></li>
        <?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <li><a href="<?php echo htmlspecialchars((string) fn_url("categories.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_categories");?>
</a></li>
        <?php }?>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <li><a href="<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("UserTypes::VENDOR"), ENT_QUOTES, 'UTF-8');
$_prefixVariable7=ob_get_clean();
echo htmlspecialchars((string) fn_url("profiles.manage?user_type=".$_prefixVariable7."&company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_admins");?>
</a></li>
        <?php } else { ?>
            <li><a href="<?php echo htmlspecialchars((string) fn_url("profiles.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_users");?>
</a></li>
        <?php }?>
        <li><a href="<?php echo htmlspecialchars((string) fn_url("orders.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_orders");?>
</a></li>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:sidebar_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
</div>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div class="sidebar-row sidebar-vendor-statistics">
    <h6><?php echo $_smarty_tpl->__("vendors_statistics");?>
</h6>
    <ul class="unstyled">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:accounting_sidebar_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:accounting_sidebar_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars((string) fn_url("companies.balance?vendor=".((string)$_smarty_tpl->tpl_vars['id']->value)."&selected_section=withdrawals"), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['company_data']->value['balance']), 0, false);
?></a>
                <span><?php echo $_smarty_tpl->__("balance");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars((string) fn_url("orders.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['orders_count'], ENT_QUOTES, 'UTF-8');?>
</a>
                <span><?php echo $_smarty_tpl->__("orders");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars((string) fn_url("orders.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&is_search=Y&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['company_data']->value['sales']), 0, true);
?></a>
                <span><?php echo $_smarty_tpl->__("sales");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars((string) fn_url("companies.balance?vendor=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['company_data']->value['income']), 0, true);
?></a>
                <span><?php echo $_smarty_tpl->__("income");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars((string) fn_url("products.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&status=A&product_type[]=P"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</a>
                <span><?php echo $_smarty_tpl->__("active_products");?>
</span>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO")) {?>
                <li class="vendor-statistics">
                    <a href="<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProductTracking::TRACK"), ENT_QUOTES, 'UTF-8');
$_prefixVariable8=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&amount_from=&amount_to=0&tracking[0]=".$_prefixVariable8), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['out_of_stock'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                    <span><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</span>
                </li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:accounting_sidebar_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
</div>
<?php }
}?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:update_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['show_approve']->value) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("save"),'class'=>"cm-update-company",'dispatch'=>"dispatch[companies.update]",'form'=>"company_update_form",'method'=>"POST"), true);?>
</li>
            <?php }?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"companies.delete?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        <?php if ($_smarty_tpl->tpl_vars['show_approve']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/approve_disapprove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'dispatch'=>"companies.update_status",'header_view'=>true), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[companies.update]",'but_target_form'=>"company_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value,'but_meta'=>"cm-update-company"), 0, false);
?>
        <?php }?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['is_companies_limit_reached']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"btn cm-promo-popup"), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[companies.add]",'but_target_form'=>"company_update_form",'but_meta'=>"cm-comet"), 0, true);
?>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "page_title", null, null);
if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>

<?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->__("new_vendor");?>

<?php } else { ?>
    <?php echo $_smarty_tpl->__("add_storefront");?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'page_title'),'select_languages'=>(bool) $_smarty_tpl->tpl_vars['id']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
