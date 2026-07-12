<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:04
  from 'tygh:addons/is2or_management_order_status/hooks/orders/advanced_search.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4678eee411_09545406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f62c3780cb52159e7cc26ed57647cc9c00de601' => 
    array (
      0 => 'addons/is2or_management_order_status/hooks/orders/advanced_search.override.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/select_vendor.tpl' => 1,
    'tygh:common/products_to_search.tpl' => 1,
  ),
))) {
function content_69ae4678eee411_09545406 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/is2or_management_order_status/hooks/orders';
\Tygh\Languages\Helper::preloadLangVars(array('manager','no_manager_assigned','period','tax_exempt','yes','no','order_id','company','has_credit_memo','credit_memo_id','has_invoice','invoice_id','shipping','payment_methods','ordered_products'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:advanced_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <input type="hidden" name="selected_tab" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_tab')), ENT_QUOTES, 'UTF-8');?>
" />
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
}
}
