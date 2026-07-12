<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/small_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6b2d9753_29843388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f93e3fd6fa57973d284a0d7b9e2f8089a76f86' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/small_items.tpl',
      1 => 1747370623,
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
),false)) {
function content_682fdd6b2d9753_29843388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('tmpl', 'small_items');?>

<?php $_smarty_tpl->_assignInScope('thumbnail_width', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp));
$_smarty_tpl->_assignInScope('thumbnail_height', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_height'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_price', true);
$_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_clean_price', true);
$_smarty_tpl->_assignInScope('show_list_discount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none");
$_smarty_tpl->_assignInScope('show_product_labels', true);
$_smarty_tpl->_assignInScope('show_discount_label', true);
$_smarty_tpl->_assignInScope('show_shipping_label', false);
$_smarty_tpl->_assignInScope('show_amount_label', false);
$_smarty_tpl->_assignInScope('hide_qty_label', true);
$_smarty_tpl->_assignInScope('show_sku', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('show_qty', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));?>

<?php $_smarty_tpl->_assignInScope('button_type_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);
$_smarty_tpl->_assignInScope('show_labels_in_title', false);?>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {
$_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));?>
<div class="ut2-scroll-container<?php if ($_smarty_tpl->tpl_vars['rows']->value !== "0") {?> one-row<?php } else { ?> multi-row<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
<?php }?>

<ul class="ut2-template-small<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-content<?php }?>" style="--si-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;--si-product-image-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;--si-columns: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_labels_in_title'=>$_smarty_tpl->tpl_vars['show_labels_in_title']->value), 0, true);
?>
    <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_small_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <li class="ut2-template-small__item clearfix<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-item<?php }?>">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


        <div class="ut2-template-small__item-img">
            <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['thumbnail_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumbnail_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0, true);
?></a>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number'] == smarty_modifier_enum("YesNo::YES")) {?><span class="ut2-hit"><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>

        <div class="ut2-template-small__item-description">

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>


                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                    <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "small_items_list_control_data_wrapper", null, null);?>
                    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value && $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?>

                        <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                        <div class="ut2-template-small__control <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value, ENT_QUOTES, 'UTF-8');
}?>">

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "small_items_list_control_data", null, null);?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:small_items_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:small_items_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                                <?php if ($_smarty_tpl->tpl_vars['show_qty']->value && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:small_items_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'small_items_list_control_data');?>

                        </div>
                    <?php }?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
                    <div class="ut2-template-small__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>">
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                    <div class="ut2-template-small__item-price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>">
                        <div>
                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }?>
                            <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                            <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                    </div>
                <?php }?>

                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'small_items_list_control_data'))) {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'small_items_list_control_data_wrapper');?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
                     </div>
                <?php }?>
            </div>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </li>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_small_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>$_smarty_tpl->tpl_vars['elements_to_scroll']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/small_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/small_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('tmpl', 'small_items');?>

<?php $_smarty_tpl->_assignInScope('thumbnail_width', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp));
$_smarty_tpl->_assignInScope('thumbnail_height', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_height'] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_price', true);
$_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_clean_price', true);
$_smarty_tpl->_assignInScope('show_list_discount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none");
$_smarty_tpl->_assignInScope('show_product_labels', true);
$_smarty_tpl->_assignInScope('show_discount_label', true);
$_smarty_tpl->_assignInScope('show_shipping_label', false);
$_smarty_tpl->_assignInScope('show_amount_label', false);
$_smarty_tpl->_assignInScope('hide_qty_label', true);
$_smarty_tpl->_assignInScope('show_sku', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('show_qty', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));?>

<?php $_smarty_tpl->_assignInScope('button_type_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);
$_smarty_tpl->_assignInScope('show_labels_in_title', false);?>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {
$_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));?>
<div class="ut2-scroll-container<?php if ($_smarty_tpl->tpl_vars['rows']->value !== "0") {?> one-row<?php } else { ?> multi-row<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
<?php }?>

<ul class="ut2-template-small<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-content<?php }?>" style="--si-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;--si-product-image-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;--si-columns: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_labels_in_title'=>$_smarty_tpl->tpl_vars['show_labels_in_title']->value), 0, true);
?>
    <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_small_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <li class="ut2-template-small__item clearfix<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-item<?php }?>">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


        <div class="ut2-template-small__item-img">
            <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['thumbnail_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumbnail_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0, true);
?></a>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number'] == smarty_modifier_enum("YesNo::YES")) {?><span class="ut2-hit"><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>

        <div class="ut2-template-small__item-description">

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>


                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                    <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "small_items_list_control_data_wrapper", null, null);?>
                    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value && $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?>

                        <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                        <div class="ut2-template-small__control <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value, ENT_QUOTES, 'UTF-8');
}?>">

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "small_items_list_control_data", null, null);?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:small_items_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:small_items_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                                <?php if ($_smarty_tpl->tpl_vars['show_qty']->value && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:small_items_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'small_items_list_control_data');?>

                        </div>
                    <?php }?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
                    <div class="ut2-template-small__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>">
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                    <div class="ut2-template-small__item-price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>">
                        <div>
                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }?>
                            <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                            <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                    </div>
                <?php }?>

                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'small_items_list_control_data'))) {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'small_items_list_control_data_wrapper');?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
                     </div>
                <?php }?>
            </div>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </li>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_small_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>$_smarty_tpl->tpl_vars['elements_to_scroll']->value), 0, true);
}
}
}
}
