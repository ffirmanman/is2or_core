<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:04
  from 'tygh:addons/is2or_management_order_status/views/is2or_order_management/manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4678d32009_61691610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61e78bda2a733a9285780736cd3a94a5ba1e4b55' => 
    array (
      0 => 'addons/is2or_management_order_status/views/is2or_order_management/manage.tpl',
      1 => 1769626349,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/orders/components/orders_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/table_col_head.tpl' => 6,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/price.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
))) {
function content_69ae4678d32009_61691610 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/is2or_management_order_status/views/is2or_order_management';
\Tygh\Languages\Helper::preloadLangVars(array('is2or_management_order_status.','orders','id','phone','shipping','id','order','invoice','credit_memo','status','date','customer','phone','shipping','tools','view','total','no_data'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);?>

    <div class="cm-j-tabs cm-track tabs">
                <?php $_smarty_tpl->assign('manage_tabs', array('incomplete'=>'tab_incomplete','paid'=>'tab_paid','packing'=>'tab_packing','shipping'=>'tab_shipping','delivered'=>'tab_delivered','complete'=>'tab_completed','declined'=>'tab_declined','cancelled'=>'tab_cancelled','return'=>'tab_returned'), false, NULL);?>

        <ul class="nav nav-tabs">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('manage_tabs'), 'tab_lang', false, 'tab_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab_id')->value => $_smarty_tpl->getVariable('tab_lang')->value) {
$foreach0DoElse = false;
?>
                                <?php $_smarty_tpl->assign('temp_search', $_smarty_tpl->getValue('search'), false, NULL);?>
                <?php $_tmp_array = $_smarty_tpl->getValue('temp_search') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['selected_tab'] = $_smarty_tpl->getValue('tab_id');
$_smarty_tpl->assign('temp_search', $_tmp_array, false, NULL);?>

                                <?php $_tmp_array = $_smarty_tpl->getValue('temp_search') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['page'] = '';
$_smarty_tpl->assign('temp_search', $_tmp_array, false, NULL);?>

                <li class="<?php if ($_smarty_tpl->getValue('active_tab') == $_smarty_tpl->getValue('tab_id')) {?>active<?php }?>">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("is2or_order_management.manage?".((string)($_smarty_tpl->getSmarty()->getModifierCallback('http_build_query')($_smarty_tpl->getValue('temp_search')))))), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_management_order_status.".((string)$_smarty_tpl->getValue('tab_lang')), [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <?php if ($_smarty_tpl->getValue('tab_counts')[$_smarty_tpl->getValue('tab_id')] > 0) {?>
                            <span class="badge badge-info"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_counts')[$_smarty_tpl->getValue('tab_id')]), ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sidebar", null, null);?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                    <?php $_smarty_tpl->assign('dispatch_url', "is2or_order_management.manage", false, NULL);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>$_smarty_tpl->getValue('dispatch_url'),'view_type'=>"orders"), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>$_smarty_tpl->getValue('dispatch_url')), (int) 0, $_smarty_current_dir);
?>

        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" name="orders_list_form" id="orders_list_form" data-ca-is-multiple-submit-allowed="true">

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"sort_by","sort_order"), false, NULL);?>
    <?php $_smarty_tpl->assign('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('page_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php $_smarty_tpl->assign('extra_status', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <?php $_smarty_tpl->assign('notify_vendor', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR"), false, NULL);?>
    <?php $_smarty_tpl->assign('notify', true, false, NULL);?>
    <?php $_smarty_tpl->assign('notify_department', true, false, NULL);?>

    <?php if ($_smarty_tpl->getValue('orders')) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "orders_table", null, null);?>
            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive table--show-checkbox table-manage-orders">
                    <thead class="thead--overflow-hidden" data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                    <tr>
                        <th width="3%" class="left mobile-hide table__check-items-column table__check-items-column--show-checkbox">
                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="15%">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"order_id",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("id", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                        </th>
                        <th width="15%">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status"), (int) 0, $_smarty_current_dir);
?>
                        </th>
                        <th width="15%">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"date"), (int) 0, $_smarty_current_dir);
?>
                        </th>
                        <th width="28%">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"customer"), (int) 0, $_smarty_current_dir);
?>
                        </th>
                        <th width="14%">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                        </th>
                        <th width="15%">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </th>
                        <th class="mobile-hide">&nbsp;</th>
                        <th width="10%" class="right">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"total"), (int) 0, $_smarty_current_dir);
?>
                        </th>

                    </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'o');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('o')->value) {
$foreach1DoElse = false;
?>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:order_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <tr class="cm-longtap-target"
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['order_id']), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <td width="3%" class="left mobile-hide table__check-items-cell table__check-items-cell--show-checkbox">
                                    <input type="checkbox" name="order_ids[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['order_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('o')['status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
" /></td>
                                <td width="15%" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.details?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']))), ENT_QUOTES, 'UTF-8');?>
" class="underlined link--monochrome"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <bdi>#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['order_id']), ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                                    <?php if ($_smarty_tpl->getValue('order_statuses')[$_smarty_tpl->getValue('o')['status']]['params']['appearance_type'] == "I" && $_smarty_tpl->getValue('o')['invoice_id']) {?>
                                        <p class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("invoice", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['invoice_id']), ENT_QUOTES, 'UTF-8');?>
</p>
                                    <?php } elseif ($_smarty_tpl->getValue('order_statuses')[$_smarty_tpl->getValue('o')['status']]['params']['appearance_type'] == "C" && $_smarty_tpl->getValue('o')['credit_memo_id']) {?>
                                        <p class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("credit_memo", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['credit_memo_id']), ENT_QUOTES, 'UTF-8');?>
</p>
                                    <?php }?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->getValue('o')), (int) 0, $_smarty_current_dir);
?>
                                </td>
                                <td width="15%" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <button type="button" class="btn btn-info o-status-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('o')['status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
 order-status">
                                        <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('order_statuses')[$_smarty_tpl->getValue('o')['status']]['description'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('o')['status'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                                    </button>
                                    <?php if ($_smarty_tpl->getValue('o')['issuer_id']) {?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('o')['issuer_name'])) {?>
                                            <p class="muted shift-left manager-order"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['issuer_name']), ENT_QUOTES, 'UTF-8');?>
</p>
                                        <?php } else { ?>
                                            <p class="muted shift-left manager-order"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['issuer_email']), ENT_QUOTES, 'UTF-8');?>
</p>
                                        <?php }?>
                                    <?php }?>
                                </td>
                                <td width="15%" class="nowrap" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("date", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('o')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</td>
                                <td width="17%" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("customer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <?php if ($_smarty_tpl->getValue('o')['email']) {?><a href="mailto:<?php echo rawurlencode((string)$_smarty_tpl->getValue('o')['email']);?>
" class="link--monochrome">@</a> <?php }?>
                                    <?php if ($_smarty_tpl->getValue('o')['company']) {?><p class="muted"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['company']), ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                                    <?php if ($_smarty_tpl->getValue('o')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::CUSTOMER") && $_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") && $_smarty_tpl->getValue('o')['user_id'] !== $_smarty_tpl->getValue('auth')['user_id'] || !$_smarty_tpl->getValue('o')['user_id']) {?>
                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['lastname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['firstname']), ENT_QUOTES, 'UTF-8');?>

                                    <?php } elseif ($_smarty_tpl->getValue('o')['user_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update?user_id=".((string)$_smarty_tpl->getValue('o')['user_id']))), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['lastname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['firstname']), ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php }?>
                                </td>
                                <td width="14%" <?php if ($_smarty_tpl->getValue('o')['phone']) {?>data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"<?php }?>><?php if ($_smarty_tpl->getValue('o')['phone']) {?><bdi><a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['phone']), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['phone']), ENT_QUOTES, 'UTF-8');?>
</a></bdi><?php }?></td>

                                <td width="15%" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                                                        <?php $_smarty_tpl->assign('order_info', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_order_info')($_smarty_tpl->getValue('o')['order_id']), false, NULL);?>

                                    <?php if ($_smarty_tpl->getValue('order_info')['shipping']) {?>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order_info')['shipping'], 'shipping');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping')->value) {
$foreach2DoElse = false;
?>
                                            <div class="muted">
                                                <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping']), ENT_QUOTES, 'UTF-8');?>
</strong>
                                                <?php if ($_smarty_tpl->getValue('shipping')['service_delivery_time']) {?>
                                                    <br><small><i class="icon-time"></i> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['service_delivery_time']), ENT_QUOTES, 'UTF-8');?>
</small>
                                                <?php }?>
                                            </div>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <span class="muted">-</span>
                                    <?php }?>
                                </td>
                                <td class="center" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tools", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_items", null, null);?>
                                        <li><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"orders.details?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']),'text'=>$_prefixVariable1), true);?>
</li>
                                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                    <div class="hidden-tools">
                                        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_items')), true);?>

                                    </div>
                                </td>

                                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('o')['total']), (int) 0, $_smarty_current_dir);
?>
                                </td>
                            </tr>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:order_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"orders_list_form",'object'=>"orders",'items'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'orders_table')), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), (int) 0, $_smarty_current_dir);
?>
</form>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>



<?php $_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('page_title'),'sidebar'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'sidebar'),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'adv_buttons'),'content_id'=>"manage_orders",'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->getValue('selected_storefront_id')), (int) 0, $_smarty_current_dir);
}
}
