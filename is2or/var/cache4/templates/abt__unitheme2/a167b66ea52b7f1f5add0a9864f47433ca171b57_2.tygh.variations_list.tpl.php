<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/blocks/products/variations_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571cb9a407_40256904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a167b66ea52b7f1f5add0a9864f47433ca171b57' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/blocks/products/variations_list.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6834571cb9a407_40256904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.menu.filling_variants.column_filling','sort_by','price','sort_by','availability','sort_by','sku','sort_by','text_out_of_stock','sku','abt__ut2.menu.filling_variants.column_filling','sort_by','price','sort_by','availability','sort_by','sku','sort_by','text_out_of_stock','sku'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.hide_add_to_wishlist_button"] == smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', true);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['items']->value);?>
    <?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_wishlist', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable13 = ob_get_clean();
$_smarty_tpl->_assignInScope('show_sku', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_product_code"] ?? null)===null||$tmp==='' ? $_prefixVariable13 ?? null : $tmp) == smarty_modifier_enum("YesNo::YES"));?>
    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_assignInScope('show_variation_thumbnails', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_variation_thumbnails"] ?? null)===null||$tmp==='' ? $_prefixVariable14 ?? null : $tmp) == smarty_modifier_enum("YesNo::YES"));?>
    <?php $_smarty_tpl->_assignInScope('show_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_old_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_clean_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_role', "action");?>
    <?php $_smarty_tpl->_assignInScope('hide_form', true);?>
    <?php $_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO"));?>
    <?php $_smarty_tpl->_assignInScope('hide_stock_info', false);?>
    <?php $_smarty_tpl->_assignInScope('show_out_of_stock', true);?>
    <?php $_smarty_tpl->_assignInScope('show_amount_label', false);?>
    <?php $_smarty_tpl->_assignInScope('show_qty', true);?>
    <?php $_smarty_tpl->_assignInScope('hide_qty_label', true);?>
    <?php $_smarty_tpl->_assignInScope('show_variations', true);?>
    <?php $_smarty_tpl->_assignInScope('show_sku_label', false);?>
    <?php $_smarty_tpl->_assignInScope('image_width', (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? 50 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('image_height', (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? 50 ?? null : $tmp));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>


    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
        <?php $_smarty_tpl->_assignInScope('first_product', reset($_smarty_tpl->tpl_vars['products']->value));?>
    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <div class="ut2-variations-list__wrapper">

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
    <div class="ut2-variations-list__style"><input type="checkbox"/><?php echo $_smarty_tpl->__("abt__ut2.menu.filling_variants.column_filling");?>
</div>
    <?php }?>

    <table class="ut2-variations-list<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == smarty_modifier_enum("YesNo::NO")) {?> ut2-vl-cart-bt<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_variation_thumbnails"] == smarty_modifier_enum("YesNo::YES")) {?> ut2-vl-var-thumb<?php }?>" style="--ut2-variations-list-image-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-sortable="true" data-ca-sort-list="[[1, 0]]">
        <thead>
            <tr>
                <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true" aria-sort="ask"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo $_smarty_tpl->__("price");?>
</th>

                <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo $_smarty_tpl->__("availability");?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo $_smarty_tpl->__("sku");?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first_product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                        <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </tr>

        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key', 'variations_list', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

                <?php $_smarty_tpl->_assignInScope('variation_link', fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>
                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_select_variations_button'=>false), 0, true);
?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                    <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                    <tr class="ut2-variations-list__item">

                        <td class="ut2-variations-list__product-elem ut2-variations-list__price">
                            <?php if ($_smarty_tpl->tpl_vars['show_variation_thumbnails']->value) {?>
                            <div class="ut2-variations-list__thumb">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0, true);
?>
                                </a>
                            </div>
                            <?php }?>
                            <div class="ut2-vl__price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>">
                                <div>
                                    <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                                    <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>
                                </div>
                                <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                            </div>
                        </td>

                        <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                        <td class="ut2-variations-list__product-elem ut2-variations-list__product-elem-options">

                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                            <div class="ut2-variations-list__amount">
                                <form <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__ut2_wishlist_count" />
                                    <input type="hidden" name="redirect_url" value="<?php if ($_REQUEST['redirect_url']) {
echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
}?>" />
                                    <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <div class="ut2-vl__control ut2-vl__mix-price-and-button icon_button">
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"variations_list:list_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                                        <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </div>
                                </form>

                                <?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id'] && !((($tmp = $_smarty_tpl->tpl_vars['product']->value['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] ?? null : $tmp))) {?>
                                <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_out_of_stock");?>
</span>
                                <?php }?>
                            </div>
                        </td>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['show_sku']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['product']->value['product_code'])) {?>
                            <td class="ut2-variations-content__product-var ut2-variations-list__sku">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {?><div class="label"><?php echo $_smarty_tpl->__("sku");?>
:</div><?php }?>
                                <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                            </td>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <td class="ut2-variations-content__product-var">
                                <div class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</div>
                                <bdi>
                                    <span class="ty-product-options">
                                        <span class="ty-product-options-content">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                        </span>
                                    </span>
                                </bdi>
                            </td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tr>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/blocks/products/variations_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/blocks/products/variations_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.hide_add_to_wishlist_button"] == smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', true);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['items']->value);?>
    <?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_wishlist', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable15 = ob_get_clean();
$_smarty_tpl->_assignInScope('show_sku', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_product_code"] ?? null)===null||$tmp==='' ? $_prefixVariable15 ?? null : $tmp) == smarty_modifier_enum("YesNo::YES"));?>
    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable16 = ob_get_clean();
$_smarty_tpl->_assignInScope('show_variation_thumbnails', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_variation_thumbnails"] ?? null)===null||$tmp==='' ? $_prefixVariable16 ?? null : $tmp) == smarty_modifier_enum("YesNo::YES"));?>
    <?php $_smarty_tpl->_assignInScope('show_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_old_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_clean_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_role', "action");?>
    <?php $_smarty_tpl->_assignInScope('hide_form', true);?>
    <?php $_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO"));?>
    <?php $_smarty_tpl->_assignInScope('hide_stock_info', false);?>
    <?php $_smarty_tpl->_assignInScope('show_out_of_stock', true);?>
    <?php $_smarty_tpl->_assignInScope('show_amount_label', false);?>
    <?php $_smarty_tpl->_assignInScope('show_qty', true);?>
    <?php $_smarty_tpl->_assignInScope('hide_qty_label', true);?>
    <?php $_smarty_tpl->_assignInScope('show_variations', true);?>
    <?php $_smarty_tpl->_assignInScope('show_sku_label', false);?>
    <?php $_smarty_tpl->_assignInScope('image_width', (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? 50 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('image_height', (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? 50 ?? null : $tmp));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>


    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
        <?php $_smarty_tpl->_assignInScope('first_product', reset($_smarty_tpl->tpl_vars['products']->value));?>
    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <div class="ut2-variations-list__wrapper">

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
    <div class="ut2-variations-list__style"><input type="checkbox"/><?php echo $_smarty_tpl->__("abt__ut2.menu.filling_variants.column_filling");?>
</div>
    <?php }?>

    <table class="ut2-variations-list<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == smarty_modifier_enum("YesNo::NO")) {?> ut2-vl-cart-bt<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_variation_thumbnails"] == smarty_modifier_enum("YesNo::YES")) {?> ut2-vl-var-thumb<?php }?>" style="--ut2-variations-list-image-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-sortable="true" data-ca-sort-list="[[1, 0]]">
        <thead>
            <tr>
                <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true" aria-sort="ask"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo $_smarty_tpl->__("price");?>
</th>

                <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo $_smarty_tpl->__("availability");?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo $_smarty_tpl->__("sku");?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first_product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                        <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sort_by");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </tr>

        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key', 'variations_list', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

                <?php $_smarty_tpl->_assignInScope('variation_link', fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>
                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_select_variations_button'=>false), 0, true);
?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                    <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                    <tr class="ut2-variations-list__item">

                        <td class="ut2-variations-list__product-elem ut2-variations-list__price">
                            <?php if ($_smarty_tpl->tpl_vars['show_variation_thumbnails']->value) {?>
                            <div class="ut2-variations-list__thumb">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0, true);
?>
                                </a>
                            </div>
                            <?php }?>
                            <div class="ut2-vl__price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>">
                                <div>
                                    <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                                    <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>
                                </div>
                                <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                            </div>
                        </td>

                        <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                        <td class="ut2-variations-list__product-elem ut2-variations-list__product-elem-options">

                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                            <div class="ut2-variations-list__amount">
                                <form <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__ut2_wishlist_count" />
                                    <input type="hidden" name="redirect_url" value="<?php if ($_REQUEST['redirect_url']) {
echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
}?>" />
                                    <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <div class="ut2-vl__control ut2-vl__mix-price-and-button icon_button">
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"variations_list:list_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                                        <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </div>
                                </form>

                                <?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id'] && !((($tmp = $_smarty_tpl->tpl_vars['product']->value['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] ?? null : $tmp))) {?>
                                <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_out_of_stock");?>
</span>
                                <?php }?>
                            </div>
                        </td>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['show_sku']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['product']->value['product_code'])) {?>
                            <td class="ut2-variations-content__product-var ut2-variations-list__sku">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {?><div class="label"><?php echo $_smarty_tpl->__("sku");?>
:</div><?php }?>
                                <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                            </td>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <td class="ut2-variations-content__product-var">
                                <div class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</div>
                                <bdi>
                                    <span class="ty-product-options">
                                        <span class="ty-product-options-content">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                        </span>
                                    </span>
                                </bdi>
                            </td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tr>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
<?php }
}
}
}
