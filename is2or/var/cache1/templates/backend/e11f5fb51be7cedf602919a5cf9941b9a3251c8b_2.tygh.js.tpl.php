<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:33:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/products/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fde7981dc86_10229727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11f5fb51be7cedf602919a5cf9941b9a3251c8b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/products/js.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 2,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_682fde7981dc86_10229727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','quantity','delete','position_short','name','tools','edit','remove'));
$_smarty_tpl->_assignInScope('product_data', fn_get_product_data($_smarty_tpl->tpl_vars['product_id']->value,$_SESSION['auth'],(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),"?:products.company_id,?:product_descriptions.product",false,false,false,false,false,false,true));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->_assignInScope('product', (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value ?? null : $tmp));?>
    <?php if ($_smarty_tpl->tpl_vars['owner_company_id']->value && $_smarty_tpl->tpl_vars['owner_company_id']->value != $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->_assignInScope('show_only_name', true);?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "options") {?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td data-th="&nbsp;"><input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro" <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>disabled="disabled"<?php }?> /></td><?php }?>
<td name="product_picker_object_name" data-th="<?php echo $_smarty_tpl->__("name");?>
">
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['show_only_name']->value) {
$_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product_data']->value), 0, false);
}?>
    <?php if ($_smarty_tpl->tpl_vars['options']->value) {?>
        <br>
        <small><?php echo $_smarty_tpl->tpl_vars['options']->value;?>
</small>
    <?php }?>
    <?php if (is_array($_smarty_tpl->tpl_vars['options_array']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options_array']->value, 'value', false, 'option_id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
                <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
            <?php } else { ?>
                <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['aoc']->value) {?>
        <input type="hidden"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[aoc]"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['aoc']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-pickers-product-js="aoc"
            <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>
                disabled="disabled"
            <?php }?>
        />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value == "hidden") {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value == "text") {?>
<td class="center" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_only_name']->value) {?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
        <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro cm-value-decimal product-picker__amount"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_picker:table_column_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_picker:table_column_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_picker:table_column_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<td class="nowrap">
    <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value && !$_smarty_tpl->tpl_vars['show_only_name']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['root_id']->value)."', '".((string)$_smarty_tpl->tpl_vars['delete_id']->value)."', 'p'); return false;"), true);?>
</li>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <div class="hidden-tools">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        </div>
    <?php } else { ?>&nbsp;<?php }?>
</td>
</tr>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "product") {?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro" <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>disabled="disabled"<?php }?> /></td><?php }?>
        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_picker:table_column_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_picker:table_column_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if (!$_smarty_tpl->tpl_vars['show_only_name']->value) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['delete_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</a>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value;?>

                <?php }?>

                <?php $_smarty_tpl->_assignInScope('product_data_for_company_name', array("company_name"=>$_smarty_tpl->tpl_vars['company_name']->value));?>

                <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('product_data_for_company_name', $_smarty_tpl->tpl_vars['product_data']->value);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product_data_for_company_name']->value), 0, true);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_picker:table_column_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </td>
        <td class="mobile-hide" data-th="&nbsp;">&nbsp;</td>
        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
"><?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value && !$_smarty_tpl->tpl_vars['show_only_name']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"products.update?product_id=".((string)$_smarty_tpl->tpl_vars['delete_id']->value)), true);?>
</li>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['root_id']->value)."', '".((string)$_smarty_tpl->tpl_vars['delete_id']->value)."', 'p'); return false;"), true);?>
</li>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <div class="hidden-tools">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

            </div>
        <?php }?></td>
    </tr>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "single") {?>
<span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['first_item']->value && $_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>

    <div class="input-append">
    <input class="cm-picker-value-description <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="product_name" readonly="readonly" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 id="appendedInputButton">

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus",'assign'=>'_but_text'),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('_but_role', "icon");?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("products.picker?display=radio&company_ids=".((string)$_smarty_tpl->tpl_vars['company_ids']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_icon'=>$_smarty_tpl->tpl_vars['_but_icon']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>((string)$_smarty_tpl->tpl_vars['but_meta']->value)." cm-dialog-opener add-on btn"), 0, false);
?>

    </div>
    </span>
<?php }
}
}
