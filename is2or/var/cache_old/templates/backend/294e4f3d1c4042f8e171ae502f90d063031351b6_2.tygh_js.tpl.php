<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:pickers/products/js.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4679148764_81190444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294e4f3d1c4042f8e171ae502f90d063031351b6' => 
    array (
      0 => 'pickers/products/js.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 2,
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69ae4679148764_81190444 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/pickers/products';
\Tygh\Languages\Helper::preloadLangVars(array('name','quantity','delete','position_short','name','tools','edit','remove'));
$_smarty_tpl->assign('product_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_data')($_smarty_tpl->getValue('product_id'),$_SESSION['auth'],(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),"?:products.company_id,?:product_descriptions.product",false,false,false,false,false,false,true), false, NULL);
if ($_smarty_tpl->getValue('runtime')['company_id'] && $_smarty_tpl->getValue('product_data')['company_id'] != $_smarty_tpl->getValue('runtime')['company_id']) {?>
    <?php $_smarty_tpl->assign('product', (($tmp = $_smarty_tpl->getValue('product_data')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product') ?? null : $tmp), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('owner_company_id') && $_smarty_tpl->getValue('owner_company_id') != $_smarty_tpl->getValue('runtime')['company_id']) {?>
        <?php $_smarty_tpl->assign('show_only_name', true, false, NULL);?>
    <?php }
}?>

<?php if ($_smarty_tpl->getValue('type') == "options") {?>
<tr <?php if (!$_smarty_tpl->getValue('clone')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('root_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('delete_id')), ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->getValue('clone')) {?> cm-clone hidden<?php }?>">
<?php if ($_smarty_tpl->getValue('position_field')) {?><td data-th="&nbsp;"><input type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('delete_id')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"a*b",'a'=>$_smarty_tpl->getValue('position'),'b'=>10), $_smarty_tpl);?>
" size="3" class="input-micro" <?php if ($_smarty_tpl->getValue('clone')) {?>disabled="disabled"<?php }?> /></td><?php }?>
<td name="product_picker_object_name" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('show_only_name')) {
$_smarty_tpl->renderSubTemplate("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->getValue('product_data')), (int) 0, $_smarty_current_dir);
}?>
    <?php if ($_smarty_tpl->getValue('options')) {?>
        <br>
        <small><?php echo $_smarty_tpl->getValue('options');?>
</small>
    <?php }?>
    <?php if (is_array($_smarty_tpl->getValue('options_array'))) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('options_array'), 'value', false, 'option_id');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option_id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach8DoElse = false;
?>
            <?php if (is_array($_smarty_tpl->getValue('value'))) {?>
                <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')['option_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')['value']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('clone')) {?> disabled="disabled"<?php }?> />
            <?php } else { ?>
                <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('option_id')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('clone')) {?> disabled="disabled"<?php }?> />
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('aoc')) {?>
        <input type="hidden"
            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[aoc]"
            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('aoc')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-pickers-product-js="aoc"
            <?php if ($_smarty_tpl->getValue('clone')) {?>
                disabled="disabled"
            <?php }?>
        />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('product_id')) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('clone')) {?> disabled="disabled"<?php }?> />
    <?php }?>
    <?php if ($_smarty_tpl->getValue('amount_input') == "hidden") {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('amount')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('clone')) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php if ($_smarty_tpl->getValue('amount_input') == "text") {?>
<td class="center" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
    <?php if ($_smarty_tpl->getValue('show_only_name')) {?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('amount')), ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
        <input type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('amount')), ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro cm-value-decimal product-picker__amount"<?php if ($_smarty_tpl->getValue('clone')) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php }?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_column_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_column_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
<td class="nowrap">
    <?php if (!$_smarty_tpl->getValue('hide_delete_button') && !$_smarty_tpl->getValue('show_only_name')) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>
            <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage()),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->getValue('root_id'))."', '".((string)$_smarty_tpl->getValue('delete_id'))."', 'p'); return false;"), true);?>
</li>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <div class="hidden-tools">
            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        </div>
    <?php } else { ?>&nbsp;<?php }?>
</td>
</tr>

<?php } elseif ($_smarty_tpl->getValue('type') == "product") {?>
    <tr <?php if (!$_smarty_tpl->getValue('clone')) {?>id="<?php echo $_smarty_tpl->getValue('root_id');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('delete_id')), ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->getValue('clone')) {?> cm-clone hidden<?php }?>">
        <?php if ($_smarty_tpl->getValue('position_field')) {?><td data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("position_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><input type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('delete_id')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"a*b",'a'=>$_smarty_tpl->getValue('position'),'b'=>10), $_smarty_tpl);?>
" size="3" class="input-micro" <?php if ($_smarty_tpl->getValue('clone')) {?>disabled="disabled"<?php }?> /></td><?php }?>
        <td data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_column_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if (!$_smarty_tpl->getValue('show_only_name')) {?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.update?product_id=".((string)$_smarty_tpl->getValue('delete_id')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('product');?>
</a>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getValue('product');?>

                <?php }?>

                <?php $_smarty_tpl->assign('product_data_for_company_name', array("company_name"=>$_smarty_tpl->getValue('company_name')), false, NULL);?>

                <?php if (!$_smarty_tpl->getValue('clone')) {?>
                    <?php $_smarty_tpl->assign('product_data_for_company_name', $_smarty_tpl->getValue('product_data'), false, NULL);?>
                <?php }?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->getValue('product_data_for_company_name')), (int) 0, $_smarty_current_dir);
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_column_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </td>
        <td class="mobile-hide" data-th="&nbsp;">&nbsp;</td>
        <td class="nowrap" data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tools", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php if (!$_smarty_tpl->getValue('hide_delete_button') && !$_smarty_tpl->getValue('show_only_name')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"products.update?product_id=".((string)$_smarty_tpl->getValue('delete_id'))), true);?>
</li>
                <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage()),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->getValue('root_id'))."', '".((string)$_smarty_tpl->getValue('delete_id'))."', 'p'); return false;"), true);?>
</li>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <div class="hidden-tools">
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list')), true);?>

            </div>
        <?php }?></td>
    </tr>

<?php } elseif ($_smarty_tpl->getValue('type') == "single") {?>
<span <?php if (!$_smarty_tpl->getValue('clone')) {?>id="<?php echo $_smarty_tpl->getValue('holder');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item <?php if ($_smarty_tpl->getValue('clone')) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->getValue('first_item') && $_smarty_tpl->getValue('single_line')) {?><span class="cm-comma<?php if ($_smarty_tpl->getValue('clone')) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>

    <div class="input-append">
    <input class="cm-picker-value-description <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_class')), ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('display_input_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display_input_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="product_name" readonly="readonly" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra')), ENT_QUOTES, 'UTF-8');?>
 id="appendedInputButton">

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-plus",'assign'=>'_but_text'), $_smarty_tpl);?>

    <?php $_smarty_tpl->assign('_but_role', "icon", false, NULL);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->getValue('data_id')),'but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.picker?display=radio&company_ids=".((string)$_smarty_tpl->getValue('company_ids'))."&picker_for=".((string)$_smarty_tpl->getValue('picker_for'))."&extra=".((string)$_smarty_tpl->getValue('extra_var'))."&checkbox_name=".((string)$_smarty_tpl->getValue('checkbox_name'))."&except_id=".((string)$_smarty_tpl->getValue('except_id'))."&data_id=".((string)$_smarty_tpl->getValue('data_id')).((string)$_smarty_tpl->getValue('extra_url'))),'but_text'=>$_smarty_tpl->getValue('_but_text'),'but_role'=>$_smarty_tpl->getValue('_but_role'),'but_icon'=>$_smarty_tpl->getValue('_but_icon'),'but_target_id'=>"content_".((string)$_smarty_tpl->getValue('data_id')),'but_meta'=>((string)$_smarty_tpl->getValue('but_meta'))." cm-dialog-opener add-on btn"), (int) 0, $_smarty_current_dir);
?>

    </div>
    </span>
<?php }
}
}
