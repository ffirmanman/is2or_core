<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:09
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/simple_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba29d60923_70392118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90743e327891550f1d634a87fc4558de98a74fe8' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/simple_list.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/quick_view_link.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:blocks/product_list_templates/components/average_rating.tpl' => 2,
  ),
),false)) {
function content_6835ba29d60923_70392118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_clean_price', true);
$_smarty_tpl->_assignInScope('show_rating', true);
$_smarty_tpl->_assignInScope('show_qty', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('hide_qty_label', true);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('show_product_amount', true);
}?>

<?php $_smarty_tpl->_assignInScope('button_type_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_labels_in_title'=>$_smarty_tpl->tpl_vars['show_labels_in_title']->value), 0, false);
?>

    <div class="ut2-simple-list clearfix" style="--sl-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

        <?php if ($_smarty_tpl->tpl_vars['item_number']->value == smarty_modifier_enum("YesNo::YES")) {?><strong><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>

        <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


        <div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_scroller']['show_quick_view_button'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") || !$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_quick_view_button']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, false);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0, false);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0, false);
?>
            <?php }?>
            <!--<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="ut2-simple-list__wrap <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] == smarty_modifier_enum("YesNo::YES")) {?>price-top-position<?php }?>">
            <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>

            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>


            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
}?>

            <?php if ($_smarty_tpl->tpl_vars['show_features']->value || $_smarty_tpl->tpl_vars['show_descr']->value) {?>
                <div class="ut2-simple-list__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div>
                <div class="ut2-simple-list__descr"><?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>


            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

            <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>


            <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_list_control_data_wrapper", null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value && $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?>

                    <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                    <div class="ut2-simple-list__control <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value, ENT_QUOTES, 'UTF-8');
}?>">

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_list_control_data", null, null);?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:simple_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:simple_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['show_qty']->value && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>

                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:simple_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data');?>

                    </div>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
            <div class="ut2-simple-list__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>">
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['hide_price']->value) {?>
                <div class="ut2-simple-list__price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
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

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data'))) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data_wrapper');?>

                    <?php }?>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
            </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_and_text' || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data_wrapper');?>

            <?php }?>
        <?php }?>

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
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/simple_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/simple_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_clean_price', true);
$_smarty_tpl->_assignInScope('show_rating', true);
$_smarty_tpl->_assignInScope('show_qty', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('hide_qty_label', true);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('show_product_amount', true);
}?>

<?php $_smarty_tpl->_assignInScope('button_type_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_labels_in_title'=>$_smarty_tpl->tpl_vars['show_labels_in_title']->value), 0, true);
?>

    <div class="ut2-simple-list clearfix" style="--sl-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

        <?php if ($_smarty_tpl->tpl_vars['item_number']->value == smarty_modifier_enum("YesNo::YES")) {?><strong><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>

        <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


        <div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_scroller']['show_quick_view_button'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") || !$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_quick_view_button']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0, true);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0, true);
?>
            <?php }?>
            <!--<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="ut2-simple-list__wrap <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] == smarty_modifier_enum("YesNo::YES")) {?>price-top-position<?php }?>">
            <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>

            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>


            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
}?>

            <?php if ($_smarty_tpl->tpl_vars['show_features']->value || $_smarty_tpl->tpl_vars['show_descr']->value) {?>
                <div class="ut2-simple-list__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div>
                <div class="ut2-simple-list__descr"><?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>


            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

            <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>


            <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_list_control_data_wrapper", null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value && $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?>

                    <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                    <div class="ut2-simple-list__control <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value, ENT_QUOTES, 'UTF-8');
}?>">

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_list_control_data", null, null);?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:simple_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:simple_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['show_qty']->value && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>

                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:simple_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data');?>

                    </div>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
            <div class="ut2-simple-list__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>">
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['hide_price']->value) {?>
                <div class="ut2-simple-list__price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
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

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data'))) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data_wrapper');?>

                    <?php }?>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {?>
            </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_and_text' || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_list_control_data_wrapper');?>

            <?php }?>
        <?php }?>

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
    </div>
<?php }
}
}
}
