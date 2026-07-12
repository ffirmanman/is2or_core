<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:33:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/products/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fde79803f58_18308521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869c11bbf68e65f8015f255fac67ab2736c946df' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/products/picker.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/js.tpl' => 5,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/options_info.tpl' => 2,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_682fde79803f58_18308521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_products','position_short','name','deleted_product','no_items','close','editing_defined_products','defined_items','name','quantity','options','any_option_combinations','deleted_product','no_items','add_products','add_products'));
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('data_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
$_smarty_tpl->_assignInScope('start_pos', (($tmp = $_smarty_tpl->tpl_vars['start_pos']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('icon', (($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? "icon-plus" ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_but_text', (($tmp = $_smarty_tpl->tpl_vars['show_but_text']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('get_option_info', (($tmp = $_smarty_tpl->tpl_vars['get_option_info']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value) && $_smarty_tpl->tpl_vars['type']->value != "table") {?>
        <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>
    <?php if ($_smarty_tpl->tpl_vars['placement']->value == 'right') {?>
        <div class="clearfix shift-button">
            <div class="pull-right">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['type']->value != "single") {?>
    <a data-ca-external-click-id="opener_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-external-click btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <span class="btn__icon <?php if ($_smarty_tpl->tpl_vars['show_but_text']->value) {?>btn__icon--with-text<?php }?>">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_but_text']->value) {?>
            <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_products") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

        <?php }?>
    </a>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['placement']->value == 'right') {?>
            </div>
        </div>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "button") {
if ($_smarty_tpl->tpl_vars['type']->value == "links") {?>
    <input type="hidden" id="p<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_list", null, null);?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
        <thead>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th width="5%"><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
            <th width="100%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php }?> cm-picker-product">
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('clone'=>true,'product'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'company_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."company_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'company_name'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."company_name".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'delete_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."delete_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'type'=>"product",'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'product', false, NULL, 'items', array (
  'first' => true,
  'iteration' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value,'product'=>(($tmp = fn_get_product_name($_smarty_tpl->tpl_vars['product']->value) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'delete_id'=>strtr((string)$_smarty_tpl->tpl_vars['product']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )),'type'=>"product",'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['start_pos']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr>
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>4<?php } else { ?>3<?php }?>" data-th="&nbsp;"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
        </tr>
        </tbody>
        </table>

        <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>
            <div class="buttons-container">
                <a class="cm-dialog-closer cm-cancel tool-link btn btn-primary"><?php echo $_smarty_tpl->__("close");?>
</a>
            </div>
        <?php }?>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>
        <div class="shift-button">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"inner_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'link_text'=>smarty_modifier_count($_smarty_tpl->tpl_vars['item_ids']->value),'act'=>"link",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_list'),'text'=>$_smarty_tpl->__("editing_defined_products"),'picker_meta'=>"cm-bg-close",'method'=>"GET",'no_icon_link'=>true), 0, false);
echo $_smarty_tpl->__("defined_items");?>

        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_list');?>

    <?php }
} elseif ($_smarty_tpl->tpl_vars['type']->value == "table") {?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['display']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('display', "options");?>
    <?php }?>
    <div class="clearfix"></div>
    <div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-responsive <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <thead>
    <tr>
        <th width="80%"><?php echo $_smarty_tpl->__("name");?>
</th>
        <th class="center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_picker:table_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_picker:table_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_picker:table_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden <?php }?>cm-picker<?php if ($_smarty_tpl->tpl_vars['display']->value) {?>-options<?php }?>">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_picker:table_rows"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_picker:table_rows"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'product', false, 'product_id');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_id']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['display']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);?>
                <?php $_smarty_tpl->_assignInScope('prod_opts', fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                <?php if ($_smarty_tpl->tpl_vars['prod_opts']->value && !$_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <span><?php echo $_smarty_tpl->__("options");?>
: </span>&nbsp;<?php echo $_smarty_tpl->__("any_option_combinations");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options_value']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('product_options', $_smarty_tpl->tpl_vars['get_option_info']->value ? (fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['product']->value['product_options'])) : $_smarty_tpl->tpl_vars['product']->value['product_options']);?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product_options']->value), 0, true);
?>
                    <?php }?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
            <?php $_smarty_tpl->_assignInScope('product_name', $_smarty_tpl->tpl_vars['product']->value['product']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('product_name', (($tmp = fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp));?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_name']->value,'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'delete_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['product_id']->value)."]",'amount'=>$_smarty_tpl->tpl_vars['product']->value['amount'],'amount_input'=>"text",'type'=>"options",'options'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options'),'options_array'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_info'=>$_smarty_tpl->tpl_vars['product']->value,'aoc'=>$_smarty_tpl->tpl_vars['product']->value['aoc']), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_picker:table_rows"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('clone'=>true,'product'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'company_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."company_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'company_name'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."company_name".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'delete_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."delete_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."]",'amount'=>"1",'amount_input'=>"text",'type'=>"options",'options'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."options".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'product_id'=>'','aoc'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."aoc".((string)$_smarty_tpl->tpl_vars['rdelim']->value)), 0, true);
?>
    </tbody>
    <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <tr>
        <td colspan="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['colspan']->value ?? null)===null||$tmp==='' ? "3" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" data-th="&nbsp;" class="table-responsive__td--hide-th-mobile"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
    </tr>
    </tbody>
    </table>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "single") {?>
<div class="cm-display-radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>c<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />
    <div class="input-append choose-input">
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'hide_input'=>$_smarty_tpl->tpl_vars['hide_input']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'type'=>"single"), 0, true);
?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

    </div>
</div>
<?php }
}
if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>
    <div class="hidden">
        <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
            <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container"><?php }
if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['segment']->value) {
echo "&segment=";
echo (string)$_smarty_tpl->tpl_vars['segment']->value;
}
$_prefixVariable5=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['for_current_storefront']->value) {
echo "&for_current_storefront=";
echo (string)$_smarty_tpl->tpl_vars['for_current_storefront']->value;
}
$_prefixVariable6=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['additional_query_params']->value) {
echo "&";
echo (string)$_smarty_tpl->tpl_vars['additional_query_params']->value;
}
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("products.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)."&company_ids=".((string)$_smarty_tpl->tpl_vars['company_ids']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&aoc=".((string)$_smarty_tpl->tpl_vars['aoc']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)."&is_order_management=".((string)$_smarty_tpl->tpl_vars['is_order_management']->value)."&only_selectable_options=".((string)$_smarty_tpl->tpl_vars['only_selectable_options']->value).$_prefixVariable5.$_prefixVariable6.$_prefixVariable7),'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_products") ?? null : $tmp),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener ".((string)$_smarty_tpl->tpl_vars['dialog_opener_meta']->value)), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
        <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_products") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
<?php }
}
}
