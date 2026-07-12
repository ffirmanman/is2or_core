<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:pickers/products/picker.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4679102cf4_70674888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc5bcfcb3034a00ded5ffb1af3e31c55ec0d0b71' => 
    array (
      0 => 'pickers/products/picker.tpl',
      1 => 1767831036,
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
))) {
function content_69ae4679102cf4_70674888 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/pickers/products';
\Tygh\Languages\Helper::preloadLangVars(array('add_products','position_short','name','deleted_product','no_items','close','editing_defined_products','defined_items','name','quantity','options','any_option_combinations','deleted_product','no_items','add_products','add_products'));
$_smarty_tpl->assign('rnd', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
$_smarty_tpl->assign('data_id', (($tmp = $_smarty_tpl->getValue('picker_id') ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->getValue('data_id'))."_".((string)$_smarty_tpl->getValue('rnd')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('view_mode', (($tmp = $_smarty_tpl->getValue('view_mode') ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('start_pos', (($tmp = $_smarty_tpl->getValue('start_pos') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('icon', (($tmp = $_smarty_tpl->getValue('icon') ?? null)===null||$tmp==='' ? "icon-plus" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_but_text', (($tmp = $_smarty_tpl->getValue('show_but_text') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('get_option_info', (($tmp = $_smarty_tpl->getValue('get_option_info') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/picker.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('item_ids') && !is_array($_smarty_tpl->getValue('item_ids')) && $_smarty_tpl->getValue('type') != "table") {?>
        <?php $_smarty_tpl->assign('item_ids', $_smarty_tpl->getSmarty()->getModifierCallback('explode')(",",$_smarty_tpl->getValue('item_ids')), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('view_mode') != "list") {?>
    <?php if ($_smarty_tpl->getValue('placement') == 'right') {?>
        <div class="clearfix">
            <div class="pull-right <?php if (!$_smarty_tpl->getValue('no_container')) {?>buttons-container<?php }?>">
    <?php } elseif (!$_smarty_tpl->getValue('no_container') && $_smarty_tpl->getValue('type') !== "single") {?>
        <div class="buttons-container buttons-container--inline">
    <?php }?>

    <?php if ($_smarty_tpl->getValue('type') != "single") {?>
    <a data-ca-external-click-id="opener_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-external-click btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('icon')) {?>
            <span class="btn__icon <?php if ($_smarty_tpl->getValue('show_but_text')) {?>btn__icon--with-text<?php }?>">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('show_but_text')) {?>
            <?php echo (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_products", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>

        <?php }?>
    </a>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('placement') == 'right') {?>
            </div>
        </div>
    <?php } elseif (!$_smarty_tpl->getValue('no_container') && $_smarty_tpl->getValue('type') !== "single") {?>
        </div>
    <?php }
}?>

<?php if ($_smarty_tpl->getValue('view_mode') != "button") {
if ($_smarty_tpl->getValue('type') == "links") {?>
    <input type="hidden" id="p<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
_ids" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->getValue('item_ids')) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('item_ids'))), ENT_QUOTES, 'UTF-8');
}?>" />
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_list", null, null);?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
        <thead>
        <tr>
            <?php if ($_smarty_tpl->getValue('positions')) {?><th width="5%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("position_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th><?php }?>
            <th width="100%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->getValue('item_ids')) {?>hidden<?php }?> cm-picker-product">
        <?php $_smarty_tpl->renderSubTemplate("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('clone'=>true,'product'=>((string)$_smarty_tpl->getValue('ldelim'))."product".((string)$_smarty_tpl->getValue('rdelim')),'company_id'=>((string)$_smarty_tpl->getValue('ldelim'))."company_id".((string)$_smarty_tpl->getValue('rdelim')),'company_name'=>((string)$_smarty_tpl->getValue('ldelim'))."company_name".((string)$_smarty_tpl->getValue('rdelim')),'root_id'=>$_smarty_tpl->getValue('data_id'),'delete_id'=>((string)$_smarty_tpl->getValue('ldelim'))."delete_id".((string)$_smarty_tpl->getValue('rdelim')),'type'=>"product",'position_field'=>$_smarty_tpl->getValue('positions'),'position'=>"0"), (int) 0, $_smarty_current_dir);
?>
        <?php if ($_smarty_tpl->getValue('item_ids')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item_ids'), 'product', false, NULL, 'items', array (
  'first' => true,
  'iteration' => true,
  'index' => true,
));
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach6DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('product'),'product'=>(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("deleted_product", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'root_id'=>$_smarty_tpl->getValue('data_id'),'delete_id'=>strtr((string)$_smarty_tpl->getValue('product'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{")),'type'=>"product",'first_item'=>($_smarty_tpl->getValue('__smarty_foreach_items')['first'] ?? null),'position_field'=>$_smarty_tpl->getValue('positions'),'position'=>($_smarty_tpl->getValue('__smarty_foreach_items')['iteration'] ?? null)+$_smarty_tpl->getValue('start_pos')), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
        </tbody>
        <tbody id="<?php echo $_smarty_tpl->getValue('data_id');?>
_no_item"<?php if ($_smarty_tpl->getValue('item_ids')) {?> class="hidden"<?php }?>>
        <tr>
            <td colspan="<?php if ($_smarty_tpl->getValue('positions')) {?>4<?php } else { ?>3<?php }?>" data-th="&nbsp;"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->getValue('no_item_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_items", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</p></td>
        </tr>
        </tbody>
        </table>

        <?php if ($_smarty_tpl->getValue('picker_view')) {?>
            <div class="buttons-container">
                <a class="cm-dialog-closer cm-cancel tool-link btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("close", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        <?php }?>
    </div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->getValue('picker_view')) {?>
        <div class="shift-button">
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"inner_".((string)$_smarty_tpl->getValue('data_id')),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item_ids')),'act'=>"link",'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_list'),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_defined_products", [], $_smarty_tpl->getSmarty()->getLanguage()),'picker_meta'=>"cm-bg-close",'method'=>"GET",'no_icon_link'=>true), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("defined_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_list');?>

    <?php }
} elseif ($_smarty_tpl->getValue('type') == "table") {?>
    <?php if (!(true && ($_smarty_tpl->hasVariable('display') && null !== ($_smarty_tpl->getValue('display') ?? null)))) {?>
        <?php $_smarty_tpl->assign('display', "options", false, NULL);?>
    <?php }?>
    <div class="clearfix"></div>
    <div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-responsive <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('table_meta')), ENT_QUOTES, 'UTF-8');?>
">
    <thead>
    <tr>
        <th width="80%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
        <th class="center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->getValue('item_ids')) {?>hidden <?php }?>cm-picker<?php if ($_smarty_tpl->getValue('display')) {?>-options<?php }?>">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_rows"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('item_ids')) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item_ids'), 'product', false, 'product_id');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_id')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach7DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('display')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options", null, null);?>
                <?php $_smarty_tpl->assign('prod_opts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_options')($_smarty_tpl->getValue('product')['product_id']), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('prod_opts') && !$_smarty_tpl->getValue('product')['product_options']) {?>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: </span>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("any_option_combinations", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php } elseif ($_smarty_tpl->getValue('product')['product_options']) {?>
                    <?php if ($_smarty_tpl->getValue('product')['product_options_value']) {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options_value']), (int) 0, $_smarty_current_dir);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('product_options', ($_smarty_tpl->getValue('get_option_info')) ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_selected_product_options_info')($_smarty_tpl->getValue('product')['product_options'])) : $_smarty_tpl->getValue('product')['product_options'], false, NULL);?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product_options')), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('product')['product']) {?>
            <?php $_smarty_tpl->assign('product_name', $_smarty_tpl->getValue('product')['product'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('product_name', (($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("deleted_product", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product_name'),'root_id'=>$_smarty_tpl->getValue('data_id'),'delete_id'=>$_smarty_tpl->getValue('product_id'),'input_name'=>((string)$_smarty_tpl->getValue('input_name'))."[".((string)$_smarty_tpl->getValue('product_id'))."]",'amount'=>$_smarty_tpl->getValue('product')['amount'],'amount_input'=>"text",'type'=>"options",'options'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_options'),'options_array'=>$_smarty_tpl->getValue('product')['product_options'],'product_id'=>$_smarty_tpl->getValue('product')['product_id'],'product_info'=>$_smarty_tpl->getValue('product'),'aoc'=>$_smarty_tpl->getValue('product')['aoc']), (int) 0, $_smarty_current_dir);
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_picker:table_rows"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php $_smarty_tpl->assign('aoc', ($_smarty_tpl->getValue('display') || $_smarty_tpl->getValue('options')) ? ((string)$_smarty_tpl->getValue('ldelim'))."aoc".((string)$_smarty_tpl->getValue('rdelim')) : null, false, NULL);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('clone'=>true,'product'=>((string)$_smarty_tpl->getValue('ldelim'))."product".((string)$_smarty_tpl->getValue('rdelim')),'company_id'=>((string)$_smarty_tpl->getValue('ldelim'))."company_id".((string)$_smarty_tpl->getValue('rdelim')),'company_name'=>((string)$_smarty_tpl->getValue('ldelim'))."company_name".((string)$_smarty_tpl->getValue('rdelim')),'root_id'=>$_smarty_tpl->getValue('data_id'),'delete_id'=>((string)$_smarty_tpl->getValue('ldelim'))."delete_id".((string)$_smarty_tpl->getValue('rdelim')),'input_name'=>((string)$_smarty_tpl->getValue('input_name'))."[".((string)$_smarty_tpl->getValue('ldelim'))."product_id".((string)$_smarty_tpl->getValue('rdelim'))."]",'amount'=>"1",'amount_input'=>"text",'type'=>"options",'options'=>((string)$_smarty_tpl->getValue('ldelim'))."options".((string)$_smarty_tpl->getValue('rdelim')),'product_id'=>'','aoc'=>$_smarty_tpl->getValue('aoc')), (int) 0, $_smarty_current_dir);
?>
    </tbody>
    <tbody id="<?php echo $_smarty_tpl->getValue('data_id');?>
_no_item"<?php if ($_smarty_tpl->getValue('item_ids')) {?> class="hidden"<?php }?>>
    <tr>
        <td colspan="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('colspan') ?? null)===null||$tmp==='' ? "3" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" data-th="&nbsp;" class="table-responsive__td--hide-th-mobile"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->getValue('no_item_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_items", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</p></td>
    </tr>
    </tbody>
    </table>
    </div>
<?php } elseif ($_smarty_tpl->getValue('type') == "single") {?>
<div class="cm-display-radio" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
">
    <input id="<?php if ($_smarty_tpl->getValue('input_id')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');
} else { ?>c<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->getValue('item_ids'))) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('implode')(",",$_smarty_tpl->getValue('item_ids'))), ENT_QUOTES, 'UTF-8');
}?>" />
    <div class="input-append choose-input">
        <?php $_smarty_tpl->renderSubTemplate("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>'','holder'=>$_smarty_tpl->getValue('data_id'),'hide_input'=>$_smarty_tpl->getValue('hide_input'),'input_name'=>$_smarty_tpl->getValue('input_name'),'hide_link'=>$_smarty_tpl->getValue('hide_link'),'hide_delete_button'=>$_smarty_tpl->getValue('hide_delete_button'),'type'=>"single"), (int) 0, $_smarty_current_dir);
?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'add_buttons');?>

    </div>
</div>
<?php }
}
if ($_smarty_tpl->getValue('view_mode') != "list") {?>
    <div class="hidden">
        <?php if ($_smarty_tpl->getValue('extra_var')) {?>
            <?php $_smarty_tpl->assign('extra_var', rawurlencode((string)$_smarty_tpl->getValue('extra_var')), false, NULL);?>
        <?php }?>
        <?php if (!$_smarty_tpl->getValue('no_container')) {?><div class="buttons-container"><?php }
if ($_smarty_tpl->getValue('picker_view')) {?>[<?php }?>
            <?php ob_start();
if ($_smarty_tpl->getValue('segment')) {
echo "&segment=";
echo (string)$_smarty_tpl->getValue('segment');
}
$_prefixVariable2=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('for_current_storefront')) {
echo "&for_current_storefront=";
echo (string)$_smarty_tpl->getValue('for_current_storefront');
}
$_prefixVariable3=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('additional_query_params')) {
echo "&";
echo (string)$_smarty_tpl->getValue('additional_query_params');
}
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->getValue('data_id')),'but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.picker?display=".((string)$_smarty_tpl->getValue('display'))."&company_id=".((string)$_smarty_tpl->getValue('company_id'))."&company_ids=".((string)$_smarty_tpl->getValue('company_ids'))."&picker_for=".((string)$_smarty_tpl->getValue('picker_for'))."&extra=".((string)$_smarty_tpl->getValue('extra_var'))."&checkbox_name=".((string)$_smarty_tpl->getValue('checkbox_name'))."&aoc=".((string)$_smarty_tpl->getValue('aoc'))."&data_id=".((string)$_smarty_tpl->getValue('data_id'))."&is_order_management=".((string)$_smarty_tpl->getValue('is_order_management'))."&only_selectable_options=".((string)$_smarty_tpl->getValue('only_selectable_options')).$_prefixVariable2.$_prefixVariable3.$_prefixVariable4),'but_text'=>(($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_products", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->getValue('data_id')),'but_meta'=>"cm-dialog-opener ".((string)$_smarty_tpl->getValue('dialog_opener_meta'))), (int) 0, $_smarty_current_dir);
?>
        <?php if ($_smarty_tpl->getValue('picker_view')) {?>]<?php }
if (!$_smarty_tpl->getValue('no_container')) {?></div><?php }?>
        <div class="hidden" id="content_<?php echo $_smarty_tpl->getValue('data_id');?>
" title="<?php echo (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_products", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
">
        </div>
    </div>
<?php }
}
}
