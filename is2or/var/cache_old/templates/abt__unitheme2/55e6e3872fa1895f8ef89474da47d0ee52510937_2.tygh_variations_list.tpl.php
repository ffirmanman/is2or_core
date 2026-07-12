<?php
/* Smarty version 5.4.3, created on 2026-03-09 14:14:02
  from 'tygh:addons/product_variations/blocks/products/variations_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aeab7a910fd2_96994412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e6e3872fa1895f8ef89474da47d0ee52510937' => 
    array (
      0 => 'addons/product_variations/blocks/products/variations_list.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69aeab7a910fd2_96994412 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_variations/blocks/products';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.menu.filling_variants.column_filling','sort_by','price','sort_by','availability','sort_by','sku','sort_by','text_out_of_stock','sku','abt__ut2.menu.filling_variants.column_filling','sort_by','price','sort_by','availability','sort_by','sku','sort_by','text_out_of_stock','sku'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('items')) {?>
    <?php if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('block')['properties']["product_variations.hide_add_to_wishlist_button"] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php $_smarty_tpl->assign('_show_add_to_wishlist', false, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('_show_add_to_wishlist', true, false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('products', $_smarty_tpl->getValue('items'), false, NULL);?>
    <?php $_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);?>
    <?php $_smarty_tpl->assign('show_add_to_wishlist', (($tmp = $_smarty_tpl->getValue('_show_add_to_wishlist') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->assign('show_sku', (($tmp = $_smarty_tpl->getValue('block')['properties']["product_variations.show_product_code"] ?? null)===null||$tmp==='' ? $_prefixVariable1 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->assign('show_variation_thumbnails', (($tmp = $_smarty_tpl->getValue('block')['properties']["product_variations.show_variation_thumbnails"] ?? null)===null||$tmp==='' ? $_prefixVariable2 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
    <?php $_smarty_tpl->assign('show_price', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_old_price', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_clean_price', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_add_to_cart', (($tmp = $_smarty_tpl->getValue('_show_add_to_cart') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('but_role', "action", false, NULL);?>
    <?php $_smarty_tpl->assign('hide_form', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_product_amount', $_smarty_tpl->getValue('settings')['General']['inventory_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);?>
    <?php $_smarty_tpl->assign('hide_stock_info', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_out_of_stock', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_amount_label', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_qty', true, false, NULL);?>
    <?php $_smarty_tpl->assign('hide_qty_label', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_variations', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_sku_label', false, false, NULL);?>
    <?php $_smarty_tpl->assign('image_width', (($tmp = $_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'] ?? null)===null||$tmp==='' ? 50 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_height', (($tmp = $_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'] ?? null)===null||$tmp==='' ? 50 ?? null : $tmp), false, NULL);?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php $_smarty_tpl->assign('list_buttons', "list_buttons_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_buttons'));?>


    <?php if ($_smarty_tpl->getValue('show_variations')) {?>
        <?php $_smarty_tpl->assign('first_product', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('products')), false, NULL);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

    <div class="ut2-variations-list__wrapper">

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
    <div class="ut2-variations-list__style"><input type="checkbox"/><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.menu.filling_variants.column_filling", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }?>

    <table class="ut2-variations-list<?php if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> ut2-vl-cart-bt<?php }
if ($_smarty_tpl->getValue('block')['properties']["product_variations.show_variation_thumbnails"] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-vl-var-thumb<?php }?>" style="--ut2-variations-list-image-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_width')), ENT_QUOTES, 'UTF-8');?>
px;--ut2-variations-list-image-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_height')), ENT_QUOTES, 'UTF-8');?>
px;" data-ca-sortable="true" data-ca-sort-list="[[1, 0]]">
        <thead>
            <tr>
                <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true" aria-sort="ask"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>

                <?php if ($_smarty_tpl->getValue('show_product_amount')) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_sku')) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_variations')) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('first_product')['variation_features'], 'feature');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach0DoElse = false;
?>
                        <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</th>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>
            </tr>

        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'key', 'variations_list', array (
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach1DoElse = false;
?>

                <?php $_smarty_tpl->assign('variation_link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])), false, NULL);?>
                <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
                <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_select_variations_button'=>false), (int) 0, $_smarty_current_dir);
?>

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                    <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                    <tr class="ut2-variations-list__item">

                        <td class="ut2-variations-list__product-elem ut2-variations-list__price">
                            <?php if ($_smarty_tpl->getValue('show_variation_thumbnails')) {?>
                            <div class="ut2-variations-list__thumb">
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variation_link')), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix')), (int) 0, $_smarty_current_dir);
?>
                                </a>
                            </div>
                            <?php }?>
                            <div class="ut2-vl__price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>">
                                <div>
                                    <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));?>


                                    <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}?>
                                </div>
                                <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>

                            </div>
                        </td>

                        <?php if ($_smarty_tpl->getValue('show_product_amount')) {?>
                        <td class="ut2-variations-list__product-elem ut2-variations-list__product-elem-options">

                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


                            <div class="ut2-variations-list__amount">
                                <form <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
">

                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__ut2_wishlist_count" />
                                    <input type="hidden" name="redirect_url" value="<?php if ($_REQUEST['redirect_url']) {
echo htmlspecialchars((string) ($_REQUEST['redirect_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');
}?>" />
                                    <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">

                                    <div class="ut2-vl__control ut2-vl__mix-price-and-button icon_button">
                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>


                                        <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>

                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"variations_list:list_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                    </div>
                                </form>

                                <?php if (!$_smarty_tpl->getValue('product')['company_id'] && !((($tmp = $_smarty_tpl->getValue('product')['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['amount'] ?? null : $tmp))) {?>
                                <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_out_of_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <?php }?>
                            </div>
                        </td>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('show_sku') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['product_code'])) {?>
                            <td class="ut2-variations-content__product-var ut2-variations-list__sku">
                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?><div class="label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div><?php }?>
                                <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                            </td>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'feature');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach2DoElse = false;
?>
                            <td class="ut2-variations-content__product-var">
                                <div class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
:</div>
                                <bdi>
                                    <span class="ty-product-options">
                                        <span class="ty-product-options-content">
                                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['variant']), ENT_QUOTES, 'UTF-8');?>

                                        </span>
                                    </span>
                                </bdi>
                            </td>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </tr>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/blocks/products/variations_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_variations/blocks/products/variations_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('items')) {?>
    <?php if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('block')['properties']["product_variations.hide_add_to_wishlist_button"] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php $_smarty_tpl->assign('_show_add_to_wishlist', false, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('_show_add_to_wishlist', true, false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('products', $_smarty_tpl->getValue('items'), false, NULL);?>
    <?php $_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);?>
    <?php $_smarty_tpl->assign('show_add_to_wishlist', (($tmp = $_smarty_tpl->getValue('_show_add_to_wishlist') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->assign('show_sku', (($tmp = $_smarty_tpl->getValue('block')['properties']["product_variations.show_product_code"] ?? null)===null||$tmp==='' ? $_prefixVariable3 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->assign('show_variation_thumbnails', (($tmp = $_smarty_tpl->getValue('block')['properties']["product_variations.show_variation_thumbnails"] ?? null)===null||$tmp==='' ? $_prefixVariable4 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
    <?php $_smarty_tpl->assign('show_price', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_old_price', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_clean_price', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_add_to_cart', (($tmp = $_smarty_tpl->getValue('_show_add_to_cart') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('but_role', "action", false, NULL);?>
    <?php $_smarty_tpl->assign('hide_form', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_product_amount', $_smarty_tpl->getValue('settings')['General']['inventory_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);?>
    <?php $_smarty_tpl->assign('hide_stock_info', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_out_of_stock', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_amount_label', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_qty', true, false, NULL);?>
    <?php $_smarty_tpl->assign('hide_qty_label', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_variations', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_sku_label', false, false, NULL);?>
    <?php $_smarty_tpl->assign('image_width', (($tmp = $_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'] ?? null)===null||$tmp==='' ? 50 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_height', (($tmp = $_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'] ?? null)===null||$tmp==='' ? 50 ?? null : $tmp), false, NULL);?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php $_smarty_tpl->assign('list_buttons', "list_buttons_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_buttons'));?>


    <?php if ($_smarty_tpl->getValue('show_variations')) {?>
        <?php $_smarty_tpl->assign('first_product', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('products')), false, NULL);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

    <div class="ut2-variations-list__wrapper">

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
    <div class="ut2-variations-list__style"><input type="checkbox"/><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.menu.filling_variants.column_filling", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }?>

    <table class="ut2-variations-list<?php if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> ut2-vl-cart-bt<?php }
if ($_smarty_tpl->getValue('block')['properties']["product_variations.show_variation_thumbnails"] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-vl-var-thumb<?php }?>" style="--ut2-variations-list-image-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_width')), ENT_QUOTES, 'UTF-8');?>
px;--ut2-variations-list-image-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_height')), ENT_QUOTES, 'UTF-8');?>
px;" data-ca-sortable="true" data-ca-sort-list="[[1, 0]]">
        <thead>
            <tr>
                <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true" aria-sort="ask"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>

                <?php if ($_smarty_tpl->getValue('show_product_amount')) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_sku')) {?>
                    <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_variations')) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('first_product')['variation_features'], 'feature');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach3DoElse = false;
?>
                        <th class="ut2-variations-list__title cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</th>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>
            </tr>

        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'key', 'variations_list', array (
));
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach4DoElse = false;
?>

                <?php $_smarty_tpl->assign('variation_link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])), false, NULL);?>
                <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
                <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_select_variations_button'=>false), (int) 0, $_smarty_current_dir);
?>

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                    <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                    <tr class="ut2-variations-list__item">

                        <td class="ut2-variations-list__product-elem ut2-variations-list__price">
                            <?php if ($_smarty_tpl->getValue('show_variation_thumbnails')) {?>
                            <div class="ut2-variations-list__thumb">
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variation_link')), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix')), (int) 0, $_smarty_current_dir);
?>
                                </a>
                            </div>
                            <?php }?>
                            <div class="ut2-vl__price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>">
                                <div>
                                    <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));?>


                                    <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}?>
                                </div>
                                <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>

                            </div>
                        </td>

                        <?php if ($_smarty_tpl->getValue('show_product_amount')) {?>
                        <td class="ut2-variations-list__product-elem ut2-variations-list__product-elem-options">

                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


                            <div class="ut2-variations-list__amount">
                                <form <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
">

                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__ut2_wishlist_count" />
                                    <input type="hidden" name="redirect_url" value="<?php if ($_REQUEST['redirect_url']) {
echo htmlspecialchars((string) ($_REQUEST['redirect_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');
}?>" />
                                    <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">

                                    <div class="ut2-vl__control ut2-vl__mix-price-and-button icon_button">
                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>


                                        <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>

                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"variations_list:list_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                    </div>
                                </form>

                                <?php if (!$_smarty_tpl->getValue('product')['company_id'] && !((($tmp = $_smarty_tpl->getValue('product')['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['amount'] ?? null : $tmp))) {?>
                                <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_out_of_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <?php }?>
                            </div>
                        </td>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('show_sku') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['product_code'])) {?>
                            <td class="ut2-variations-content__product-var ut2-variations-list__sku">
                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?><div class="label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div><?php }?>
                                <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                            </td>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'feature');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach5DoElse = false;
?>
                            <td class="ut2-variations-content__product-var">
                                <div class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
:</div>
                                <bdi>
                                    <span class="ty-product-options">
                                        <span class="ty-product-options-content">
                                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['variant']), ENT_QUOTES, 'UTF-8');?>

                                        </span>
                                    </span>
                                </bdi>
                            </td>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </tr>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_variations_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
<?php }
}
}
}
