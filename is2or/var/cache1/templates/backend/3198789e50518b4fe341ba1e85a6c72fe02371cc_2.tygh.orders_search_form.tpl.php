<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:33:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/orders/components/orders_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fde79773307_98234719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3198789e50518b4fe341ba1e85a6c72fe02371cc' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/orders/components/orders_search_form.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/status.tpl' => 1,
    'tygh:common/select_vendor.tpl' => 1,
    'tygh:common/products_to_search.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_682fde79773307_98234719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','customer','email','phone','total','manager','no_manager_assigned','period','order_status','tax_exempt','yes','no','order_id','company','has_credit_memo','credit_memo_id','has_invoice','invoice_id','shipping','payment_methods','ordered_products'));
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="orders_search_form" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:simple_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:simple_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_REQUEST['redirect_url']) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['selected_section']->value != '') {?>
<input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<div class="sidebar-field">
    <label for="cname"><?php echo $_smarty_tpl->__("customer");?>
</label>
    <input type="text" name="cname" id="cname" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['cname'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<div class="sidebar-field">
    <label for="email"><?php echo $_smarty_tpl->__("email");?>
</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="30"/>
</div>

<div class="sidebar-field">
    <label for="phone"><?php echo $_smarty_tpl->__("phone");?>
</label>
    <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" size="50"/>
</div>

<div class="sidebar-field">
    <label for="total_from"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
    <input type="text" class="input-small" name="total_from" id="total_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" /> - <input type="text" class="input-small" name="total_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" />
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:simple_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:advanced_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:advanced_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("manager");?>
</label>
        <div class="controls">
            <div class="nowrap">
                <div class="row-fluid ">
                    <div class="span4">
                        <input type="text" name="issuer" id="issuer" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['issuer'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
                    </div>
                    <div class="span6 checkbox-list">
                        <label for="no_issuer">
                            <input type="checkbox" id="no_issuer" name="no_issuer" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['no_issuer']) {?>checked="checked"<?php }?>><?php echo $_smarty_tpl->__("no_manager_assigned");?>

                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
</label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0, false);
?>
    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <div class="controls checkbox-list">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'columns'=>5), 0, false);
?>
    </div>
</div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
    <div class="control-group">
        <label class="control-label" for="tax_exempt"><?php echo $_smarty_tpl->__("tax_exempt");?>
</label>
        <div class="controls">
        <select name="tax_exempt" id="tax_exempt">
            <option value="">--</option>
            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
            <option value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
        </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="order_id"><?php echo $_smarty_tpl->__("order_id");?>
</label>
        <div class="controls">
            <input type="text" name="order_id" id="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_company"><?php echo $_smarty_tpl->__("company");?>
</label>
        <div class="controls">
            <input type="text" name="company" id="elm_company" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['company'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
        </div>
    </div>
    </div>

    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="has_credit_memo"><?php echo $_smarty_tpl->__("has_credit_memo");?>
</label>
            <div class="controls">
                <input type="checkbox" name="has_credit_memo" id="has_credit_memo" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['has_credit_memo']) {?> checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="crmemo_id"><?php echo $_smarty_tpl->__("credit_memo_id");?>
</label>
            <div class="controls">
                <input type="text" name="credit_memo_id" id="crmemo_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['credit_memo_id'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="has_invoice"><?php echo $_smarty_tpl->__("has_invoice");?>
</label>
            <div class="controls">
                <input type="checkbox" name="has_invoice" id="has_invoice" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['has_invoice']) {?> checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inv_id"><?php echo $_smarty_tpl->__("invoice_id");?>
</label>
            <div class="controls">
                <input type="text" name="invoice_id" id="inv_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['invoice_id'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("shipping");?>
</label>
    <div class="controls checkbox-list">
        <?php echo smarty_function_html_checkboxes(array('name'=>"shippings",'options'=>$_smarty_tpl->tpl_vars['shippings']->value,'selected'=>$_smarty_tpl->tpl_vars['search']->value['shippings'],'columns'=>4),$_smarty_tpl);?>

    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("payment_methods");?>
</label>
    <div class="controls checkbox-list">
        <?php echo smarty_function_html_checkboxes(array('name'=>"payments",'options'=>$_smarty_tpl->tpl_vars['payments']->value,'selected'=>$_smarty_tpl->tpl_vars['search']->value['payments'],'columns'=>4),$_smarty_tpl);?>

    </div>
</div>
</div>
<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("ordered_products");?>
</label>
        <div class="controls ">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placement'=>"right"), 0, false);
?>
        </div>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:advanced_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="group">
    <div class="control-group">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"orders",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0, false);
?>

</form>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }
}
}
