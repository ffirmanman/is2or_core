<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:16
  from 'tygh:views/companies/components/companies_search_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f807a050_43246344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cc2d73269ba056ae0cf85726891da295902e937' => 
    array (
      0 => 'views/companies/components/companies_search_form.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/advanced_search.tpl' => 1,
  ),
))) {
function content_69ae86f807a050_43246344 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies/components';
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','name','email','address','city','country','select_country','state','select_state','status','active','pending','suspended','new','disabled','zip_postal_code','phone','url'));
if ($_smarty_tpl->getValue('in_popup')) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h6>
<?php }?>

<form name="companies_search_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_meta')), ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "simple_search", null, null);?>

<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_REQUEST['redirect_url']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('selected_section') != '') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_section')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('search')['user_type']) {?>
    <input type="hidden" name="user_type" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['user_type']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('company_id')) {?>
    <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_id')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->getValue('put_request_vars')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('array_to_fields')->handle(array('data'=>$_REQUEST,'skip'=>array("callback")), $_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getValue('extra');?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:search_form_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<div class="sidebar-field">
    <label for="elm_name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input type="text" name="company" id="elm_name" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['company']), ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
<div class="sidebar-field">
    <label for="elm_email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input type="text" name="email" id="elm_email" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['email']), ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:search_form_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "extra_advanced_search", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('extra_advanced_search', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'extra_advanced_search')), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "advanced_search", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") || $_smarty_tpl->getValue('extra_advanced_search')) {?>
<div class="row-fluid">
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
<div class="group span6 form-horizontal">
    <div class="control-group">
        <label for="elm_address" class='control-label'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <input type="text" name="address" id="elm_address" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['address']), ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_city"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("city", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <input type="text" name="city" id="elm_city" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['city']), ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    <div class="control-group">
        <label for="srch_country" class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <select id="srch_country" name="country" class="cm-country cm-location-search">
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'code');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach4DoElse = false;
?>
                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('code')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['country'] == $_smarty_tpl->getValue('code')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label for="srch_state" class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <select id="srch_state" class="cm-state cm-location-search hidden" name="state_code">
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            </select>
            <input class="cm-state cm-location-search" type="text" id="srch_state_d" name="state" maxlength="64" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['state']), ENT_QUOTES, 'UTF-8');?>
" disabled="disabled"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="status"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
        <select name="status" id="status">
            <option value="">--</option>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::ACTIVE")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::ACTIVE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::PENDING")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::PENDING")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("pending", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::SUSPENDED")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::SUSPENDED")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("suspended", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::NEW_ACCOUNT")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::NEW_ACCOUNT")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("new", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::DISABLED")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::DISABLED")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("disabled", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
        </select>
        </div>
    </div>
</div>
<?php }?>
<div class="group span6 form-horizontal">
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
    <div class="control-group">
        <label class="control-label" for="elm_zipcode"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("zip_postal_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <input type="text" name="zipcode" id="elm_zipcode" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['zipcode']), ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_phone"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <input type="text" name="phone" id="elm_phone" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['phone']), ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("url", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <input type="text" name="url" id="elm_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['url']), ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>

    <?php }?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'extra_advanced_search');?>

</div>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('no_adv_link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && ( !$_smarty_tpl->hasVariable('extra_advanced_search') || empty($_smarty_tpl->getValue('extra_advanced_search'))), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->getValue('dispatch'),'view_type'=>"companies",'in_popup'=>$_smarty_tpl->getValue('in_popup'),'no_adv_link'=>$_smarty_tpl->getValue('no_adv_link')), (int) 0, $_smarty_current_dir);
?>

</form>

<?php if ($_smarty_tpl->getValue('in_popup')) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }
}
}
