<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:views/companies/manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7964211_98421820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1951a5cb5c95928ff1dce9cb35b898020dba6bf' => 
    array (
      0 => 'views/companies/manage.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/companies/components/company_full_info.tpl' => 1,
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
))) {
function content_69ae86f7964211_98421820 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies';
\Tygh\Languages\Helper::preloadLangVars(array('name','id','email','storefront_url','registered','registered_short','status','ttc_stores_status','stores_status','name','id','email','storefront','registered_short','tools','view_vendor_products','view_vendor_admins','view_vendor_users','view_vendor_orders','merge','edit','delete','delete','status','stores_status','no_data','proceed','change_to_status','change_to_status','add_vendor','add_storefront','licensing.feature_not_allowed.title','vendors','storefronts'));
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="companies_form" id="companies_form">
<input type="hidden" name="fake" value="1" />

<?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"sort_by","sort_order"), false, NULL);
$_smarty_tpl->assign('c_statuses', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_predefined_statuses')("companies",$_smarty_tpl->getValue('company')['status']), false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->getValue('search')['sort_order_rev']),'assign'=>'c_icon'), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'), $_smarty_tpl);?>

<?php $_smarty_tpl->assign('return_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('companies')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "companies_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead data-ca-bulkedit-default-object="true">
            <tr>
                <th class="left mobile-hide table__check-items-column">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->getValue('c_statuses'),'meta'=>"table__check-items"), (int) 0, $_smarty_current_dir);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="40%"><div class="company-list__labels-th"><a class="cm-ajax" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=company&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']));?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('search')['sort_by'] === "company") {
echo $_smarty_tpl->getValue('c_icon');
} else {
echo $_smarty_tpl->getValue('c_dummy');
}?></a><a class="cm-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=id&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("id", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('search')['sort_by'] === "id") {
echo $_smarty_tpl->getValue('c_icon');
} else {
echo $_smarty_tpl->getValue('c_dummy');
}?></a><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?><a class="cm-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=email&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('search')['sort_by'] === "email") {
echo $_smarty_tpl->getValue('c_icon');
} else {
echo $_smarty_tpl->getValue('c_dummy');
}?></a><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_additional_info_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_additional_info_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div></th>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>
                    <th width="25%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=storefront&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_url", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('search')['sort_by'] === "storefront") {
echo $_smarty_tpl->getValue('c_icon');
} else {
echo $_smarty_tpl->getValue('c_dummy');
}?></a></th>
                <?php }?>
                <th><a class="cm-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=date&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("registered", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("registered_short", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('search')['sort_by'] === "date") {
echo $_smarty_tpl->getValue('c_icon');
} else {
echo $_smarty_tpl->getValue('c_dummy');
}?></a></th>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "companies_list_extra_data_th", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_data_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_data_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'companies_list_extra_data_th'))) {?>
                    <th>
                        <div class="company-list__labels-secondary-th">
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'companies_list_extra_data_th');?>

                        </div>
                    </th>
                <?php }?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <th width="4%" class="nowrap">&nbsp;</th>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
                    <th width="7%" class="nowrap right"><a class="nowrap cm-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=status&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('search')['sort_by'] === "status") {
echo $_smarty_tpl->getValue('c_icon');
}?></a></th>
                <?php } else { ?>
                    <th width="7%"><span class="nowrap cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ttc_stores_status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("stores_status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign flex-inline top"), $_smarty_tpl);
if ($_smarty_tpl->getValue('search')['sort_by'] === "stores_status") {
echo $_smarty_tpl->getValue('c_icon');
}?></span></th>
                <?php }?>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('companies'), 'company');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach0DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/company_full_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->getValue('company')), (int) 0, $_smarty_current_dir);
?>

            <tr class="cm-row-status-<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {
echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('company')['status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('company')['storefront_status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');
}?> cm-longtap-target"
                    data-ct-company-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-bulkedit-dispatch-parameter="company_ids[]"
            >
                <td class="left mobile-hide table__check-items-cell">
                    <input type="checkbox"
                        name="company_ids[]"
                        value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-item cm-item-status-<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {
echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('company')['status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('company')['storefront_status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');
}?> hide"
                    />
                </td>
                <td width="40%" class="row-status wrap" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 / <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>/ <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_additional_info_th_mobile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_additional_info_th_mobile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>" id="companies_manage_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
">
                    <div>
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.update?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_full_description')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company']), ENT_QUOTES, 'UTF-8');?>
</a>
                        <span class="muted" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_full_description')), ENT_QUOTES, 'UTF-8');?>
"><small> #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
</small></span>
                    </div>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
                        <div>
                            <a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['email']), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome text-small-adaptive" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_full_description')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['email']), ENT_QUOTES, 'UTF-8');?>
</a>
                        </div>
                    <?php }?>
                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "companies_company_additional_info", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'companies_company_additional_info'))) {?>
                        <div class="company-list__labels">
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'companies_company_additional_info');?>

                        </div>
                    <?php }?>
                <!--companies_manage_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
--></td>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>
                    <?php $_smarty_tpl->assign('storefront_href', "http://".((string)$_smarty_tpl->getValue('company')['storefront']), false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('company')['storefront_status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("StorefrontStatuses::CLOSED") && $_smarty_tpl->getValue('company')['store_access_key']) {?>
                        <?php $_smarty_tpl->assign('storefront_href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('storefront_href'),"store_access_key=".((string)$_smarty_tpl->getValue('company')['store_access_key'])), false, NULL);?>
                    <?php }?>
                    <td width="25%" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="storefront_url_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('storefront_href')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('puny_decode')($_smarty_tpl->getValue('company')['storefront'])), ENT_QUOTES, 'UTF-8');?>
</a><!--storefront_url_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['company_id']), ENT_QUOTES, 'UTF-8');?>
--></td>
                <?php }?>
                <td class="row-status" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("registered_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><span class="text-small-adaptive"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('company')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</span></td>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "companies_list_extra_data_td", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_data_td"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_data_td"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'companies_list_extra_data_td'))) {?>
                    <td class="row-status wrap" data-th="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_data_th_mobile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_data_th_mobile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>">
                        <div class="company-list__labels-secondary">
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'companies_list_extra_data_td');?>

                        </div>
                    </td>
                <?php }?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_td"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_td"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <td width="4%" class="nowrap" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tools", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_items", null, null);?>
                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"products.manage?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("view_vendor_products", [], $_smarty_tpl->getSmarty()->getLanguage())), true);?>
</li>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
                            <li><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"profiles.manage?user_type=".$_prefixVariable1."&company_id=".((string)$_smarty_tpl->getValue('company')['company_id']),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("view_vendor_admins", [], $_smarty_tpl->getSmarty()->getLanguage())), true);?>
</li>
                        <?php } else { ?>
                            <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"profiles.manage?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("view_vendor_users", [], $_smarty_tpl->getSmarty()->getLanguage())), true);?>
</li>
                        <?php }?>
                        <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"orders.manage?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("view_vendor_orders", [], $_smarty_tpl->getSmarty()->getLanguage())), true);?>
</li>
                        <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && !$_smarty_tpl->getValue('runtime')['company_id']) {?>
                            <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"companies.merge?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("merge", [], $_smarty_tpl->getSmarty()->getLanguage())), true);?>
</li>
                        <?php }?>
                        <?php if (!$_smarty_tpl->getValue('runtime')['company_id'] && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')("companies.update","POST")) {?>
                            <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"companies.update?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage())), true);?>
</li>
                            <li class="divider"></li>
                            <?php if ($_smarty_tpl->getValue('runtime')['simple_ultimate']) {?>
                                <li class="disabled"><a><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                            <?php } else { ?>
                                <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'href'=>"companies.delete?company_id=".((string)$_smarty_tpl->getValue('company')['company_id'])."&redirect_url=".((string)$_smarty_tpl->getValue('return_current_url')),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage()),'method'=>"POST"), true);?>
</li>
                            <?php }?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_items')), true);?>

                    </div>
                </td>
                <td width="7%"
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
                        class="right nowrap"
                        data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                    <?php } else { ?>
                        class="row-status"
                        data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("stores_status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                    <?php }?>
                >
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/status_on_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('company')['company_id'],'status'=>$_smarty_tpl->getValue('company')['status'],'items_status'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_predefined_statuses')("companies",$_smarty_tpl->getValue('company')['status']),'company'=>$_smarty_tpl->getValue('company')), (int) 0, $_smarty_current_dir);
?>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"companies_form",'object'=>"companies",'items'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'companies_table')), (int) 0, $_smarty_current_dir);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
<?php }?>

<?php if ($_smarty_tpl->getValue('companies')) {?>
    <?php if (!$_smarty_tpl->getValue('runtime')['company_id']) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('c_statuses'), 'status_name', false, 'status');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('status')->value => $_smarty_tpl->getVariable('status_name')->value) {
$foreach1DoElse = false;
?>
            <?php $_smarty_tpl->assign('capture_name', "selected_make_status_".((string)$_smarty_tpl->getValue('status')), false, NULL);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('capture_name'), null, null);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/reason_container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->getValue('status')), (int) 0, $_smarty_current_dir);
?>
                <div class="buttons-container">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("proceed", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.m_update_statuses?status=".((string)$_smarty_tpl->getValue('status'))),'cancel_action'=>"close",'but_meta'=>"cm-ajax cm-post cm-ajax-send-form",'but_target_form'=>"#companies_form",'but_target_id'=>"pagination_contents"), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('capture_name'),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("change_to_status", array("[status]"=>((string)$_smarty_tpl->getValue('status_name'))), $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name')),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("change_to_status", array("[status]"=>((string)$_smarty_tpl->getValue('status_name'))), $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }
}?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</form>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_items", null, null);?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_items'),'class'=>"mobile-hide"), true);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->assign('add_vendor_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_vendor", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('add_vendor_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_storefront", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('is_companies_limit_reached') || $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE:FREE")) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licensing.feature_not_allowed.title", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_override_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-height nav__actions-btn-primary",'tool_href'=>"functionality_restrictions.ultimate_or_storefront_license_required",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->getValue('add_vendor_text'),'link_text'=>$_smarty_tpl->getValue('add_vendor_text'),'icon'=>"icon-plus",'meta_data'=>"data-ca-dialog-title='".$_prefixVariable2."'"), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"companies.add",'tool_override_meta'=>"btn btn-primary nav__actions-btn-primary",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->getValue('add_vendor_text'),'link_text'=>$_smarty_tpl->getValue('add_vendor_text'),'icon'=>"icon-plus"), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"companies.manage",'view_type'=>"companies"), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/companies_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"companies.manage"), (int) 0, $_smarty_current_dir);
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "page_title", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendors", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefronts", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:manage_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'page_title'),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'sidebar')), (int) 0, $_smarty_current_dir);
}
}
