<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:04
  from 'tygh:views/orders/components/orders_search_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4678e78498_79747799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a4ead7d1846c77b75c907ef164489b6c11f634' => 
    array (
      0 => 'views/orders/components/orders_search_form.tpl',
      1 => 1767831033,
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
))) {
function content_69ae4678e78498_79747799 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/orders/components';
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','customer','email','phone','total','manager','no_manager_assigned','period','order_status','tax_exempt','yes','no','order_id','company','has_credit_memo','credit_memo_id','has_invoice','invoice_id','shipping','payment_methods','ordered_products'));
if ($_smarty_tpl->getValue('in_popup')) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h6>
<?php }?>

<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="orders_search_form" method="get" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_meta')), ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "simple_search", null, null);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:simple_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_REQUEST['redirect_url']) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_REQUEST['redirect_url']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
if ($_smarty_tpl->getValue('selected_section') != '') {?>
<input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_section')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php echo $_smarty_tpl->getValue('extra');?>


<div class="sidebar-field">
    <label for="cname"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("customer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input type="text" name="cname" id="cname" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['cname']), ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<div class="sidebar-field">
    <label for="email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['email']), ENT_QUOTES, 'UTF-8');?>
" size="30"/>
</div>

<div class="sidebar-field">
    <label for="phone"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['phone']), ENT_QUOTES, 'UTF-8');?>
" size="50"/>
</div>

<div class="sidebar-field">
    <label for="total_from"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;(<?php echo $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')]['symbol'];?>
)</label>
    <input type="text" class="input-small" name="total_from" id="total_from" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_from']), ENT_QUOTES, 'UTF-8');?>
" size="3" /> - <input type="text" class="input-small" name="total_to" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_to']), ENT_QUOTES, 'UTF-8');?>
" size="3" />
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:simple_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "advanced_search", null, null);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:advanced_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("manager", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <div class="nowrap">
                <div class="row-fluid ">
                    <div class="span4">
                        <input type="text" name="issuer" id="issuer" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['issuer']), ENT_QUOTES, 'UTF-8');?>
" size="30" />
                    </div>
                    <div class="span6 checkbox-list">
                        <label for="no_issuer">
                            <input type="checkbox" id="no_issuer" name="no_issuer" value="Y" <?php if ($_smarty_tpl->getValue('search')['no_issuer']) {?>checked="checked"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_manager_assigned", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls">
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->getValue('search')['period'],'form_name'=>"orders_search_form"), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls checkbox-list">
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->getValue('search')['status'],'display'=>"checkboxes",'name'=>"status",'columns'=>5), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
    <div class="control-group">
        <label class="control-label" for="tax_exempt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tax_exempt", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
        <select name="tax_exempt" id="tax_exempt">
            <option value="">--</option>
            <option value="Y" <?php if ($_smarty_tpl->getValue('search')['tax_exempt'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yes", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            <option value="N" <?php if ($_smarty_tpl->getValue('search')['tax_exempt'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
        </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="order_id"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <input type="text" name="order_id" id="order_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['order_id']), ENT_QUOTES, 'UTF-8');?>
" size="10"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_company"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("company", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls">
            <input type="text" name="company" id="elm_company" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['company']), ENT_QUOTES, 'UTF-8');?>
" size="10"/>
        </div>
    </div>
    </div>

    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="has_credit_memo"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("has_credit_memo", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <input type="checkbox" name="has_credit_memo" id="has_credit_memo" value="Y"<?php if ($_smarty_tpl->getValue('search')['has_credit_memo']) {?> checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="crmemo_id"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("credit_memo_id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <input type="text" name="credit_memo_id" id="crmemo_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['credit_memo_id']), ENT_QUOTES, 'UTF-8');?>
" size="10"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="has_invoice"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("has_invoice", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <input type="checkbox" name="has_invoice" id="has_invoice" value="Y"<?php if ($_smarty_tpl->getValue('search')['has_invoice']) {?> checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inv_id"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("invoice_id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <input type="text" name="invoice_id" id="inv_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['invoice_id']), ENT_QUOTES, 'UTF-8');?>
" size="10"/>
            </div>
        </div>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls checkbox-list">
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_checkboxes')->handle(array('name'=>"shippings",'options'=>$_smarty_tpl->getValue('shippings'),'selected'=>$_smarty_tpl->getValue('search')['shippings'],'columns'=>4), $_smarty_tpl);?>

    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("payment_methods", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls checkbox-list">
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_checkboxes')->handle(array('name'=>"payments",'options'=>$_smarty_tpl->getValue('payments'),'selected'=>$_smarty_tpl->getValue('search')['payments'],'columns'=>4), $_smarty_tpl);?>

    </div>
</div>
</div>
<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ordered_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <div class="controls ">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placement'=>"right"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:advanced_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<div class="group">
    <div class="control-group">
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
</div>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->getValue('dispatch'),'view_type'=>"orders",'in_popup'=>$_smarty_tpl->getValue('in_popup')), (int) 0, $_smarty_current_dir);
?>

</form>

<?php if ($_smarty_tpl->getValue('in_popup')) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }
}
}
