<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:59:02
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/companies/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834578667afc5_79435273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b69ebe8692f07a7cecdab18f1735c62d4b31d436' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/companies/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/companies/components/status_on_manage.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/companies/components/reason_container.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/tools.tpl' => 2,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/companies/components/companies_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6834578667afc5_79435273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.puny_decode.php','function'=>'smarty_modifier_puny_decode',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('id','name','email','storefront_url','registered','status','ttc_stores_status','stores_status','id','name','email','storefront','registered','tools','view_vendor_products','view_vendor_admins','view_vendor_users','view_vendor_orders','merge','edit','delete','delete','status','stores_status','no_data','proceed','change_to_status','change_to_status','add_vendor','add_storefront','ultimate_or_storefront_license_required.','vendors','storefronts'));
$_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="companies_form" id="companies_form">
<input type="hidden" name="fake" value="1" />

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('c_statuses', fn_get_predefined_statuses("companies",$_smarty_tpl->tpl_vars['company']->value['status']));
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('return_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('name_col_width', fn_allowed_for("MULTIVENDOR") ? "18%" : "40%");?>

<?php if ($_smarty_tpl->tpl_vars['companies']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "companies_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead data-ca-bulkedit-default-object="true">
            <tr>
                <th class="left mobile-hide table__check-items-column">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['c_statuses']->value,'meta'=>"table__check-items"), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="8%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "id") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name_col_width']->value, ENT_QUOTES, 'UTF-8');?>
"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=company&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "company") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                    <th width="25%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=email&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("email");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "email") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php }?>
                <?php if (fn_allowed_for("ULTIMATE")) {?>
                    <th width="25%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=storefront&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("storefront_url");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "storefront") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php }?>
                <th><a class="cm-ajax nowrap" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("registered");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:list_extra_th"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:list_extra_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:list_extra_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <th width="4%" class="nowrap">&nbsp;</th>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                    <th width="7%" class="nowrap right"><a class="nowrap cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>
                <?php } else { ?>
                    <th width="7%"><span class="nowrap cm-tooltip" title="<?php echo $_smarty_tpl->__("ttc_stores_status");?>
"><?php echo $_smarty_tpl->__("stores_status");?>
&nbsp;<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign flex-inline top"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "stores_status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></span></th>
                <?php }?>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
            <tr class="cm-row-status-<?php if (fn_allowed_for("MULTIVENDOR")) {
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['company']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['company']->value['storefront_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
}?> cm-longtap-target"
                    data-ct-company-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-bulkedit-dispatch-parameter="company_ids[]"
            >
                <td class="left mobile-hide table__check-items-cell">
                    <input type="checkbox"
                        name="company_ids[]"
                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-item cm-item-status-<?php if (fn_allowed_for("MULTIVENDOR")) {
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['company']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['company']->value['storefront_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
}?> hide"
                    />
                </td>
                <td width="8%" class="row-status table__first-column" data-th="<?php echo $_smarty_tpl->__("id");?>
"><a href="<?php echo htmlspecialchars((string) fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome">&nbsp;<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</a></td>
                <td width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-status wrap" data-th="<?php echo $_smarty_tpl->__("name");?>
"><a href="<?php echo htmlspecialchars((string) fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                    <td width="25%" class="row-status wrap" data-th="<?php echo $_smarty_tpl->__("email");?>
"><a href="mailto:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                <?php }?>
                <?php if (fn_allowed_for("ULTIMATE")) {?>
                    <?php $_smarty_tpl->_assignInScope('storefront_href', "http://".((string)$_smarty_tpl->tpl_vars['company']->value['storefront']));?>
                    <?php if ($_smarty_tpl->tpl_vars['company']->value['storefront_status'] === smarty_modifier_enum("StorefrontStatuses::CLOSED") && $_smarty_tpl->tpl_vars['company']->value['store_access_key']) {?>
                        <?php $_smarty_tpl->_assignInScope('storefront_href', fn_link_attach($_smarty_tpl->tpl_vars['storefront_href']->value,"store_access_key=".((string)$_smarty_tpl->tpl_vars['company']->value['store_access_key'])));?>
                    <?php }?>
                    <td width="25%" data-th="<?php echo $_smarty_tpl->__("storefront");?>
" id="storefront_url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_href']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['company']->value['storefront']), ENT_QUOTES, 'UTF-8');?>
</a><!--storefront_url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
--></td>
                <?php }?>
                <td class="nowrap row-status" data-th="<?php echo $_smarty_tpl->__("registered");?>
"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['company']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:list_extra_td"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:list_extra_td"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:list_extra_td"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <td width="4%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"products.manage?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'text'=>$_smarty_tpl->__("view_vendor_products")), true);?>
</li>
                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                            <li><?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("UserTypes::VENDOR"), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"profiles.manage?user_type=".$_prefixVariable1."&company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'text'=>$_smarty_tpl->__("view_vendor_admins")), true);?>
</li>
                        <?php } else { ?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"profiles.manage?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'text'=>$_smarty_tpl->__("view_vendor_users")), true);?>
</li>
                        <?php }?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"orders.manage?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'text'=>$_smarty_tpl->__("view_vendor_orders")), true);?>
</li>
                        <?php if (!fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"companies.merge?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'text'=>$_smarty_tpl->__("merge")), true);?>
</li>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_check_view_permissions("companies.update","POST")) {?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'text'=>$_smarty_tpl->__("edit")), true);?>
</li>
                            <li class="divider"></li>
                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                                <li class="disabled"><a><?php echo $_smarty_tpl->__("delete");?>
</a></li>
                            <?php } else { ?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'href'=>"companies.delete?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'text'=>$_smarty_tpl->__("delete"),'method'=>"POST"), true);?>
</li>
                            <?php }?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

                    </div>
                </td>
                <td width="7%"
                    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                        class="right nowrap"
                        data-th="<?php echo $_smarty_tpl->__("status");?>
"
                    <?php } else { ?>
                        class="row-status"
                        data-th="<?php echo $_smarty_tpl->__("stores_status");?>
"
                    <?php }?>
                >
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/status_on_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'status'=>$_smarty_tpl->tpl_vars['company']->value['status'],'items_status'=>fn_get_predefined_statuses("companies",$_smarty_tpl->tpl_vars['company']->value['status']),'company'=>$_smarty_tpl->tpl_vars['company']->value), 0, true);
?>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"companies_form",'object'=>"companies",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'companies_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['companies']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c_statuses']->value, 'status_name', false, 'status');
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('capture_name', "selected_make_status_".((string)$_smarty_tpl->tpl_vars['status']->value));?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value, null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/reason_container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['status']->value), 0, true);
?>
                <div class="buttons-container">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("proceed"),'but_href'=>fn_url("companies.m_update_statuses?status=".((string)$_smarty_tpl->tpl_vars['status']->value)),'cancel_action'=>"close",'but_meta'=>"cm-ajax cm-post cm-ajax-send-form",'but_target_form'=>"#companies_form",'but_target_id'=>"pagination_contents"), 0, true);
?>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['capture_name']->value,'text'=>$_smarty_tpl->__("change_to_status",array("[status]"=>((string)$_smarty_tpl->tpl_vars['status_name']->value))),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value),'link_text'=>$_smarty_tpl->__("change_to_status",array("[status]"=>((string)$_smarty_tpl->tpl_vars['status_name']->value)))), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items'),'class'=>"mobile-hide"), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_assignInScope('add_vendor_text', $_smarty_tpl->__("add_vendor"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('add_vendor_text', $_smarty_tpl->__("add_storefront"));
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:manage_adv_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:manage_adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['is_companies_limit_reached']->value || fn_allowed_for("ULTIMATE:FREE")) {?>
            <?php $_smarty_tpl->_assignInScope('title_suffix', fn_get_product_state_suffix(''));?>
            <?php $_smarty_tpl->_assignInScope('promo_popup_title', $_smarty_tpl->__("ultimate_or_storefront_license_required.".((string)$_smarty_tpl->tpl_vars['title_suffix']->value),array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))));?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_override_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-height nav__actions-btn-primary",'tool_href'=>"functionality_restrictions.ultimate_or_storefront_license_required",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->tpl_vars['add_vendor_text']->value,'link_text'=>$_smarty_tpl->tpl_vars['add_vendor_text']->value,'icon'=>"icon-plus",'meta_data'=>"data-ca-dialog-title='".((string)$_smarty_tpl->tpl_vars['promo_popup_title']->value)."'"), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"companies.add",'tool_override_meta'=>"btn btn-primary nav__actions-btn-primary",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->tpl_vars['add_vendor_text']->value,'link_text'=>$_smarty_tpl->tpl_vars['add_vendor_text']->value,'icon'=>"icon-plus"), 0, true);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:manage_adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"companies.manage",'view_type'=>"companies"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/companies_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"companies.manage"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "page_title", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:manage_mainbox_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:manage_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php echo $_smarty_tpl->__("vendors");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("storefronts");?>

        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:manage_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'page_title'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
