<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:59:02
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/companies/components/companies_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683457868a3b97_88308352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b40bac7d3d3049516720d605561d0e153944d750' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/companies/components/companies_search_form.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_683457868a3b97_88308352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','name','email','address','city','country','select_country','state','select_state','status','active','pending','suspended','new','disabled','zip_postal_code','phone','url'));
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>

<form name="companies_search_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>

<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['selected_section']->value != '') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['user_type']) {?>
    <input type="hidden" name="user_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['company_id']->value) {?>
    <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback")),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:search_form_main"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:search_form_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<div class="sidebar-field">
    <label for="elm_name"><?php echo $_smarty_tpl->__("name");?>
</label>
    <input type="text" name="company" id="elm_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['company'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div class="sidebar-field">
    <label for="elm_email"><?php echo $_smarty_tpl->__("email");?>
</label>
    <input type="text" name="email" id="elm_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:search_form_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_advanced_search", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('extra_advanced_search', trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra_advanced_search')));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);
if (fn_allowed_for("MULTIVENDOR") || $_smarty_tpl->tpl_vars['extra_advanced_search']->value) {?>
<div class="row-fluid">
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div class="group span6 form-horizontal">
    <div class="control-group">
        <label for="elm_address" class='control-label'><?php echo $_smarty_tpl->__("address");?>
</label>
        <div class="controls">
            <input type="text" name="address" id="elm_address" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['address'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_city"><?php echo $_smarty_tpl->__("city");?>
</label>
        <div class="controls">
            <input type="text" name="city" id="elm_city" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['city'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    <div class="control-group">
        <label for="srch_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
        <div class="controls">
            <select id="srch_country" name="country" class="cm-country cm-location-search">
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['country'] == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label for="srch_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
        <div class="controls">
            <select id="srch_state" class="cm-state cm-location-search hidden" name="state_code">
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            </select>
            <input class="cm-state cm-location-search" type="text" id="srch_state_d" name="state" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="status"><?php echo $_smarty_tpl->__("status");?>
</label>
        <div class="controls">
        <select name="status" id="status">
            <option value="">--</option>
            <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == smarty_modifier_enum("VendorStatuses::ACTIVE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::PENDING"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == smarty_modifier_enum("VendorStatuses::PENDING")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("pending");?>
</option>
            <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::SUSPENDED"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == smarty_modifier_enum("VendorStatuses::SUSPENDED")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("suspended");?>
</option>
            <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("new");?>
</option>
            <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("VendorStatuses::DISABLED"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == smarty_modifier_enum("VendorStatuses::DISABLED")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
        </div>
    </div>
</div>
<?php }?>
<div class="group span6 form-horizontal">
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <div class="control-group">
        <label class="control-label" for="elm_zipcode"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
        <div class="controls">
            <input type="text" name="zipcode" id="elm_zipcode" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_phone"><?php echo $_smarty_tpl->__("phone");?>
</label>
        <div class="controls">
            <input type="text" name="phone" id="elm_phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_url"><?php echo $_smarty_tpl->__("url");?>
</label>
        <div class="controls">
            <input type="text" name="url" id="elm_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['url'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>

    <?php }?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra_advanced_search');?>

</div>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('no_adv_link', fn_allowed_for("ULTIMATE") && empty($_smarty_tpl->tpl_vars['extra_advanced_search']->value));
$_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"companies",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value,'no_adv_link'=>$_smarty_tpl->tpl_vars['no_adv_link']->value), 0, false);
?>

</form>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }
}
}
