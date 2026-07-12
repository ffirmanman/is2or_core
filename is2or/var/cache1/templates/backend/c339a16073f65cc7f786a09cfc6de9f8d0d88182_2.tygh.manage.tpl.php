<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:33:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/orders/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fde7970e045_57339721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c339a16073f65cc7f786a09cfc6de9f8d0d88182' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/orders/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/orders/components/orders_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 6,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/price.tpl' => 5,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_682fde7970e045_57339721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_admin_new_orders','orders','id','phone','id','order','invoice','credit_memo','status','date','customer','phone','tools','view','edit','copy','delete','total','no_data','for_this_page_orders','gross_total','totally_paid','for_all_found_orders','gross_total','totally_paid','add_order','add_order'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "new") {?>
    <p><?php echo $_smarty_tpl->__("text_admin_new_orders");?>
</p>
<?php }?>

<?php $_smarty_tpl->_assignInScope('order_status_descr', fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null),true,true));
$_smarty_tpl->_assignInScope('order_statuses', fn_get_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null),$_smarty_tpl->tpl_vars['statuses']->value,true,true));
$_smarty_tpl->_assignInScope('can_change_status', fn_check_view_permissions("orders.update_status","POST"));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"orders.manage",'view_type'=>"orders"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"orders.manage"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" name="orders_list_form" id="orders_list_form" data-ca-is-multiple-submit-allowed="true">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
$_smarty_tpl->_assignInScope('page_title', $_smarty_tpl->__("orders"));
$_smarty_tpl->_assignInScope('extra_status', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('notify_vendor', fn_allowed_for("MULTIVENDOR"));
$_smarty_tpl->_assignInScope('notify', true);
$_smarty_tpl->_assignInScope('notify_department', true);?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "orders_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden table--show-checkbox table-manage-orders">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
            <tr>
                <th width="3%" class="left mobile-hide table__check-items-column table__check-items-column--show-checkbox">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_checkbox'=>true,'check_statuses'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'meta'=>"table__check-items table__check-items--show-checkbox",'class'=>"check-items--show-checkbox"), 0, false);
?>
                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="15%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"order_id",'text'=>$_smarty_tpl->__("id")), 0, false);
?>
                </th>
                <th width="15%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status"), 0, true);
?>
                </th>
                <th width="15%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"date"), 0, true);
?>
                </th>
                <th width="28%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"customer"), 0, true);
?>
                </th>
                <th width="14%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("phone")), 0, true);
?>
                </th>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <th class="mobile-hide">&nbsp;</th>
                <th width="10%" class="right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"total"), 0, true);
?>
                </th>

            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:order_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:order_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <tr class="cm-longtap-target"
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td width="3%" class="left mobile-hide table__check-items-cell table__check-items-cell--show-checkbox">
                    <input type="checkbox" name="order_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['o']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" /></td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                    <a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined link--monochrome"><?php echo $_smarty_tpl->__("order");?>
 <bdi>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                    <?php if ($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['o']->value['status']]['params']['appearance_type'] == "I" && $_smarty_tpl->tpl_vars['o']->value['invoice_id']) {?>
                        <p class="muted"><?php echo $_smarty_tpl->__("invoice");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['invoice_id'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['o']->value['status']]['params']['appearance_type'] == "C" && $_smarty_tpl->tpl_vars['o']->value['credit_memo_id']) {?>
                        <p class="muted"><?php echo $_smarty_tpl->__("credit_memo");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['credit_memo_id'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['o']->value), 0, true);
?>
                </td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"orders",'suffix'=>"o",'order_info'=>$_smarty_tpl->tpl_vars['o']->value,'id'=>$_smarty_tpl->tpl_vars['o']->value['order_id'],'status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'update_controller'=>"orders",'notify'=>$_smarty_tpl->tpl_vars['notify']->value,'notify_department'=>$_smarty_tpl->tpl_vars['notify_department']->value,'notify_vendor'=>$_smarty_tpl->tpl_vars['notify_vendor']->value,'status_target_id'=>"orders_total,".((string)$_smarty_tpl->tpl_vars['rev']->value),'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['extra_status']->value),'statuses'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'btn_meta'=>mb_strtolower("btn btn-info o-status-".((string)$_smarty_tpl->tpl_vars['o']->value['status'])." order-status", 'UTF-8'),'text_wrap'=>true), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['issuer_id']) {?>
                        <?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['o']->value['issuer_name'])) {?>
                            <p class="muted shift-left manager-order"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['issuer_name'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php } else { ?>
                            <p class="muted shift-left manager-order"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['issuer_email'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php }?>
                    <?php }?>
                </td>
                <td width="15%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                <td width="17%" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['email']) {?><a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['o']->value['email']), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome">@</a> <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['company']) {?><p class="muted"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['company'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['user_type'] !== smarty_modifier_enum("UserTypes::CUSTOMER") && $_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['o']->value['user_id'] !== $_smarty_tpl->tpl_vars['auth']->value['user_id'] || !$_smarty_tpl->tpl_vars['o']->value['user_id']) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['user_id']) {?>
                        <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['o']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }?>
                </td>
                <td width="14%" <?php if ($_smarty_tpl->tpl_vars['o']->value['phone']) {?>data-th="<?php echo $_smarty_tpl->__("phone");?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['o']->value['phone']) {?><bdi><a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['o']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></bdi><?php }?></td>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <td class="center" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
                        <li><?php ob_start();
echo $_smarty_tpl->__("view");
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'text'=>$_prefixVariable1), true);?>
</li>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <li><?php ob_start();
echo $_smarty_tpl->__("edit");
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'text'=>$_prefixVariable2), true);?>
</li>
                            <li><?php ob_start();
echo $_smarty_tpl->__("copy");
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])."&copy=1",'text'=>$_prefixVariable3), true);?>
</li>
                            <?php $_smarty_tpl->_assignInScope('current_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                            <li><?php ob_start();
echo $_smarty_tpl->__("delete");
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"orders.delete?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value),'class'=>"cm-confirm",'text'=>$_prefixVariable4,'method'=>"POST"), true);?>
</li>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

                    </div>
                </td>
                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("total");?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0, true);
?>
                </td>
            </tr>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:order_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"orders_list_form",'object'=>"orders",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'orders_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <div class="statistic clearfix" id="orders_total">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:statistic_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:statistic_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="table-wrapper">
            <table class="pull-right ">
                <?php if ($_smarty_tpl->tpl_vars['total_pages']->value > 1 && $_smarty_tpl->tpl_vars['search']->value['page'] != "full_list") {?>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="100px"><?php echo $_smarty_tpl->__("for_this_page_orders");?>
:</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                        <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['gross_total']), 0, true);
?></td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("totally_paid");?>
:</td>
                        <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['totally_paid']), 0, true);
?></td>
                    </tr>
                    <hr />
                    <tr>
                        <td><?php echo $_smarty_tpl->__("for_all_found_orders");?>
:</td>
                    </tr>
                <?php }?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                    <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['gross_total']), 0, true);
?></td>
                </tr>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals_stats"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals_stats"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("totally_paid");?>
:</h4></td>
                    <td class="price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['totally_paid']), 0, true);
?></td>
                </tr>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals_stats"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </table>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:statistic_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--orders_total--></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), 0, true);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:manage_tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:manage_tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"order_management.new",'tool_override_meta'=>"btn btn-primary nav__actions-btn-primary",'prefix'=>"bottom",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_order"),'link_text'=>$_smarty_tpl->__("add_order"),'icon'=>"icon-plus"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:manage_tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:list_tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:list_tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:list_tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"bulkedit-dropdown--legacy hide"), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'content_id'=>"manage_orders",'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0, false);
}
}
