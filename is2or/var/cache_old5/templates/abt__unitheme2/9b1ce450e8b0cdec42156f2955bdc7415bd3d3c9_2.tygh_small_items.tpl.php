<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:00
  from 'tygh:blocks/list_templates/small_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f704a9a28_91908841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b1ce450e8b0cdec42156f2955bdc7415bd3d3c9' => 
    array (
      0 => 'blocks/list_templates/small_items.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/product_list_templates/components/average_rating.tpl' => 2,
    'tygh:common/simple_scroller_init.tpl' => 2,
  ),
))) {
function content_6a133f704a9a28_91908841 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/list_templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('tmpl', 'small_items', false, NULL);?>

<?php $_smarty_tpl->assign('thumbnail_width', (($tmp = $_smarty_tpl->getValue('block')['properties']['thumbnail_width'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('thumbnail_height', (($tmp = $_smarty_tpl->getValue('block')['properties']['thumbnail_height'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_price', true, false, NULL);
$_smarty_tpl->assign('show_old_price', true, false, NULL);
$_smarty_tpl->assign('show_clean_price', true, false, NULL);
$_smarty_tpl->assign('show_list_discount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, NULL);
$_smarty_tpl->assign('show_product_labels', true, false, NULL);
$_smarty_tpl->assign('show_discount_label', true, false, NULL);
$_smarty_tpl->assign('show_shipping_label', false, false, NULL);
$_smarty_tpl->assign('show_amount_label', false, false, NULL);
$_smarty_tpl->assign('hide_qty_label', true, false, NULL);
$_smarty_tpl->assign('show_sku', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_product_amount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_qty', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>

<?php $_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
$_smarty_tpl->assign('show_labels_in_title', false, false, NULL);?>

<?php if ($_smarty_tpl->getValue('products_scroller')) {
$_smarty_tpl->assign('id', "simple_products_scroller_".((string)$_smarty_tpl->getValue('obj_prefix')), false, NULL);?>
<div class="ut2-scroll-container<?php if ($_smarty_tpl->getValue('rows') !== "0") {?> one-row<?php } else { ?> multi-row<?php }?>" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
<?php }?>

<ul class="ut2-template-small<?php if ($_smarty_tpl->getValue('products_scroller')) {?> ut2-scroll-content<?php }?>" style="--si-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--si-product-image-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('thumbnail_width')), ENT_QUOTES, 'UTF-8');?>
px;--si-columns: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$foreach134DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach134DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
    <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
    <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_labels_in_title'=>$_smarty_tpl->getValue('show_labels_in_title')), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <li class="ut2-template-small__item clearfix<?php if ($_smarty_tpl->getValue('products_scroller')) {?> ut2-scroll-item<?php }?>">
        <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>


        <div class="ut2-template-small__item-img">
            <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>


            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('thumbnail_width'),'image_height'=>$_smarty_tpl->getValue('thumbnail_height'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'no_ids'=>true), (int) 0, $_smarty_current_dir);
?></a>
        </div>

        <?php if ($_smarty_tpl->getValue('block')['properties']['item_number'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span class="ut2-hit"><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_products')['iteration'] ?? null)), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>

        <div class="ut2-template-small__item-description">

                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>


                <?php if ($_smarty_tpl->getValue('product')['product_code']) {?>
                    <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "small_items_list_control_data_wrapper", null, null);?>
                    <?php if ($_smarty_tpl->getValue('show_add_to_cart') && $_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?>

                        <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                        <div class="ut2-template-small__control <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>">

                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "small_items_list_control_data", null, null);?>
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:small_items_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>


                                <?php if ($_smarty_tpl->getValue('show_qty') && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:small_items_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'small_items_list_control_data');?>

                        </div>
                    <?php }?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    <div class="ut2-template-small__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>">
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_price')) {?>
                    <div class="ut2-template-small__item-price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>">
                        <div>
                            <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));?>


                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }?>
                            <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}?>

                            <?php $_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));?>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?>
                        </div>
                        <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'small_items_list_control_data'))) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'small_items_list_control_data_wrapper');?>

                <?php }?>

                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                     </div>
                <?php }?>
            </div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>

        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </li>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_small_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->getValue('products_scroller')) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>
<?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>$_smarty_tpl->getValue('elements_to_scroll')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/small_items.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/list_templates/small_items.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('tmpl', 'small_items', false, NULL);?>

<?php $_smarty_tpl->assign('thumbnail_width', (($tmp = $_smarty_tpl->getValue('block')['properties']['thumbnail_width'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('thumbnail_height', (($tmp = $_smarty_tpl->getValue('block')['properties']['thumbnail_height'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_price', true, false, NULL);
$_smarty_tpl->assign('show_old_price', true, false, NULL);
$_smarty_tpl->assign('show_clean_price', true, false, NULL);
$_smarty_tpl->assign('show_list_discount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, NULL);
$_smarty_tpl->assign('show_product_labels', true, false, NULL);
$_smarty_tpl->assign('show_discount_label', true, false, NULL);
$_smarty_tpl->assign('show_shipping_label', false, false, NULL);
$_smarty_tpl->assign('show_amount_label', false, false, NULL);
$_smarty_tpl->assign('hide_qty_label', true, false, NULL);
$_smarty_tpl->assign('show_sku', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_product_amount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_qty', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>

<?php $_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
$_smarty_tpl->assign('show_labels_in_title', false, false, NULL);?>

<?php if ($_smarty_tpl->getValue('products_scroller')) {
$_smarty_tpl->assign('id', "simple_products_scroller_".((string)$_smarty_tpl->getValue('obj_prefix')), false, NULL);?>
<div class="ut2-scroll-container<?php if ($_smarty_tpl->getValue('rows') !== "0") {?> one-row<?php } else { ?> multi-row<?php }?>" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
<?php }?>

<ul class="ut2-template-small<?php if ($_smarty_tpl->getValue('products_scroller')) {?> ut2-scroll-content<?php }?>" style="--si-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--si-product-image-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('thumbnail_width')), ENT_QUOTES, 'UTF-8');?>
px;--si-columns: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$foreach135DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach135DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
    <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
    <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_labels_in_title'=>$_smarty_tpl->getValue('show_labels_in_title')), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <li class="ut2-template-small__item clearfix<?php if ($_smarty_tpl->getValue('products_scroller')) {?> ut2-scroll-item<?php }?>">
        <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>


        <div class="ut2-template-small__item-img">
            <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>


            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('thumbnail_width'),'image_height'=>$_smarty_tpl->getValue('thumbnail_height'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'no_ids'=>true), (int) 0, $_smarty_current_dir);
?></a>
        </div>

        <?php if ($_smarty_tpl->getValue('block')['properties']['item_number'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span class="ut2-hit"><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_products')['iteration'] ?? null)), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>

        <div class="ut2-template-small__item-description">

                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>


                <?php if ($_smarty_tpl->getValue('product')['product_code']) {?>
                    <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "small_items_list_control_data_wrapper", null, null);?>
                    <?php if ($_smarty_tpl->getValue('show_add_to_cart') && $_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?>

                        <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                        <div class="ut2-template-small__control <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>">

                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "small_items_list_control_data", null, null);?>
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:small_items_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>


                                <?php if ($_smarty_tpl->getValue('show_qty') && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:small_items_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'small_items_list_control_data');?>

                        </div>
                    <?php }?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    <div class="ut2-template-small__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>">
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_price')) {?>
                    <div class="ut2-template-small__item-price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>">
                        <div>
                            <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));?>


                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }?>
                            <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}?>

                            <?php $_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));?>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?>
                        </div>
                        <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'small_items_list_control_data'))) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'small_items_list_control_data_wrapper');?>

                <?php }?>

                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                     </div>
                <?php }?>
            </div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>

        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </li>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_small_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->getValue('products_scroller')) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>
<?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>$_smarty_tpl->getValue('elements_to_scroll')), (int) 0, $_smarty_current_dir);
}
}
}
}
