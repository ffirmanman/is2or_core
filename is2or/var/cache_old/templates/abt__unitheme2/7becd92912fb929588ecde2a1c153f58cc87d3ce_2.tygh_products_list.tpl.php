<?php
/* Smarty version 5.4.3, created on 2026-03-08 20:18:48
  from 'tygh:blocks/list_templates/products_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaf78d3f866_20575665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7becd92912fb929588ecde2a1c153f58cc87d3ce' => 
    array (
      0 => 'blocks/list_templates/products_list.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_list_templates/components/show_features_conditions.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:views/products/components/sorting.tpl' => 2,
    'tygh:common/abt__ut2_pagination.tpl' => 4,
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 8,
    'tygh:views/products/components/ab__hover_gallery.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:blocks/product_list_templates/components/average_rating.tpl' => 2,
  ),
))) {
function content_69adaf78d3f866_20575665 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/list_templates';
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('products')) {?>
    <?php $_smarty_tpl->assign('tmpl', 'products_without_options', false, NULL);?>
	<?php $_smarty_tpl->assign('show_list_buttons', false, false, NULL);?>

	    <?php $_smarty_tpl->assign('tbw', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('tbh', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp), false, NULL);?>

	<?php $_smarty_tpl->assign('show_labels_in_title', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_brand_name', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name", false, NULL);?>
    <?php $_smarty_tpl->assign('show_brand_logo', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo", false, NULL);?>
    <?php $_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

	<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>


    <?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('no_sorting')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('ut2_load_more')) {
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_prefixVariable1,'position'=>"top",'object'=>"products"), (int) 0, $_smarty_current_dir);
}?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'key', 'products', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'];
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "capt_options_vs_qty", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
            <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'min_qty'=>true,'product_labels_position'=>"left-top",'show_labels_in_title'=>false), (int) 0, $_smarty_current_dir);
?>

            <div class="ty-product-list clearfix <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"<?php if ($_smarty_tpl->getValue('ut2_load_more') && ($_smarty_tpl->getValue('__smarty_foreach_products')['first'] ?? null)) {?> data-ut2-load-more="first-item"<?php }?>>

                <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>

                <?php if ($_smarty_tpl->getValue('bulk_addition')) {?>
                    <input class="cm-item ty-float-right ty-product-list__bulk" type="checkbox" id="bulk_addition_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php if ($_smarty_tpl->getValue('js_product_var')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" <?php if (($_smarty_tpl->getValue('product')['zero_price_action'] == "R" && $_smarty_tpl->getValue('product')['price'] == 0)) {?>disabled="disabled"<?php }?> />
                <?php }?>

                <div class="ut2-pl__wrap">
                <div class="ut2-pl__image" style="--pl-thumbs-width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbw'))), ENT_QUOTES, 'UTF-8');?>
px;--pl-thumbs-height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbh'))), ENT_QUOTES, 'UTF-8');?>
px">
                    <?php $_smarty_tpl->assign('product_link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])), false, NULL);?>
                    <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>


                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                        <div class="ty-center-block">
                            <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
                                 data-ca-items-count="1"
                                 data-ca-items-responsive="true"
                                 data-ca-scroller-item="1"
                                 data-ca-scroller-item-desktop="1"
                                 data-ca-scroller-item-desktop-small="1"
                                 data-ca-scroller-item-tablet="1"
                                 data-ca-scroller-item-mobile="1"
                                 data-ca-product-list="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tmpl')), ENT_QUOTES, 'UTF-8');?>
"
                                 id="icons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id_prefix')), ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->getValue('product')['main_pair']) {?>
                                    <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_link')), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
                                        </a>
                                    </div>
                                <?php } else { ?>
                                    <span class="ty-no-image" style="width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbw'))), ENT_QUOTES, 'UTF-8');?>
px;height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbh'))), ENT_QUOTES, 'UTF-8');?>
px;aspect-ratio: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbw'))), ENT_QUOTES, 'UTF-8');?>
 / <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbh'))), ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</span>
                                <?php }?>
                                <?php $_smarty_tpl->assign('fewer_items', array(), false, NULL);?>
                                <?php if ($_smarty_tpl->getValue('product')['image_pairs']) {?>
                                    <?php $_smarty_tpl->assign('fewer_items', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('product')['image_pairs'],0,5,true), false, NULL);?>
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fewer_items'), 'image_pair');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach1DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('image_pair')) {?>
                                        <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                                            <a href="<?php echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('product_link'))), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->getValue('image_pair'),'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh')), (int) 0, $_smarty_current_dir);
?>
                                            </a>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);?>

                    <?php } else { ?>
                        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ut2-image-reload" id="list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if (!$_smarty_tpl->getValue('hide_links')) {?>
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_link')), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][link]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" />
                            <?php }?>

                            <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][data]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id_prefix')), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
,product" />
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
                               <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__hover_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_pairs'=>$_smarty_tpl->getValue('product')['image_pairs'],'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'additional_class'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']]), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            <?php if (!$_smarty_tpl->getValue('hide_links')) {?>
                                </a>
                            <?php }?>
                        <!--list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
                    <?php }?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
                </div>

                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

                <div class="ut2-pl__content">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if ($_smarty_tpl->getValue('js_product_var')) {?>
                        <input type="hidden" id="product_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
" />
                    <?php }?>
                                        <?php if ($_smarty_tpl->getValue('item_number') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><strong><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_products')['iteration'] ?? null)), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>
                    
                    <div class="ut2-pl__info">
                        <div class="ut2-pl__info__head-group">
                            <div class="ut2-pl__info__head-group__main">
                                <div class="ut2-pl__item-name">
                                    <?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>

                                </div>

                                <div class="ut2-pl__extra-block clearfix">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
?>
                                    <?php if ($_smarty_tpl->getValue('product')['product_code']) {
$_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));
}?>
                                </div>
                            </div>
                            <div class="ut2-pl__info__head-group__aside">
                                <?php if ($_smarty_tpl->getValue('show_brand_logo') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
                                    <?php $_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
                                    <?php if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs']) {?>
                                        <div class="brand-img">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>40,'image_width'=>60,'images'=>$_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>

						<?php $_smarty_tpl->assign('prod_descr', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                        <?php if ($_smarty_tpl->getValue('show_descr') && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'))) {?>
                            <div class="ut2-pl__description">
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'));?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

						<?php if ($_smarty_tpl->getValue('show_features') && !$_smarty_tpl->getValue('hide_features') && $_smarty_tpl->getValue('product')['abt__ut2_features'] && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none") {?>
                            <div class="ut2-features-list">
                                <?php $_smarty_tpl->assign('product_features', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_features'));?>

                            </div>
                        <?php }?>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    </div>

                    <div class="ut2-pl__control<?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <div class="ut2-pl__price <?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?>ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
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
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        <?php if (!$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'capt_options_vs_qty')) {?>
                            <div class="ty-product-list__option">
                                <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>

                            </div>

                            <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


                            <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != "none") {?>
                            <div class="ut2-pl__qty-wrap">
                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>

                                <?php }?>

                                <?php $_smarty_tpl->assign('min_qty', "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('min_qty'));?>


                                <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>

                            </div>
                            <?php }?>
                        <?php }?>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        <?php $_smarty_tpl->assign('product_edp', "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_edp'));?>

                    </div>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
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
            </div>
            <?php if (!($_smarty_tpl->getValue('__smarty_foreach_products')['last'] ?? null)) {
}?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->getValue('ut2_load_more')) {
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_prefixVariable2,'position'=>"bottom",'object'=>"products"), (int) 0, $_smarty_current_dir);
}?>

    <?php if ($_smarty_tpl->getValue('bulk_addition')) {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {

                $(document).ready(function() {

                    $.ceEvent('on', 'ce.commoninit', function(context) {
                        if (context.find('input[type=checkbox][id^=bulk_addition_]').length) {
                            context.find('.cm-picker-product-options').switchAvailability(true, false);
                        }
                    });

                    $(_.doc).on('click', '.cm-item', function() {
                        $('#opt_' + $(this).prop('id').replace('bulk_addition_', '')).switchAvailability(!this.checked, false);
                    });
                });

            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('force_ajax'=>$_smarty_tpl->getValue('force_ajax')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/products_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/list_templates/products_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('products')) {?>
    <?php $_smarty_tpl->assign('tmpl', 'products_without_options', false, NULL);?>
	<?php $_smarty_tpl->assign('show_list_buttons', false, false, NULL);?>

	    <?php $_smarty_tpl->assign('tbw', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('tbh', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp), false, NULL);?>

	<?php $_smarty_tpl->assign('show_labels_in_title', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_brand_name', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name", false, NULL);?>
    <?php $_smarty_tpl->assign('show_brand_logo', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo", false, NULL);?>
    <?php $_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

	<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>


    <?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('no_sorting')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('ut2_load_more')) {
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_prefixVariable3,'position'=>"top",'object'=>"products"), (int) 0, $_smarty_current_dir);
}?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'key', 'products', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach2DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'];
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "capt_options_vs_qty", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
            <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'min_qty'=>true,'product_labels_position'=>"left-top",'show_labels_in_title'=>false), (int) 0, $_smarty_current_dir);
?>

            <div class="ty-product-list clearfix <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"<?php if ($_smarty_tpl->getValue('ut2_load_more') && ($_smarty_tpl->getValue('__smarty_foreach_products')['first'] ?? null)) {?> data-ut2-load-more="first-item"<?php }?>>

                <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>

                <?php if ($_smarty_tpl->getValue('bulk_addition')) {?>
                    <input class="cm-item ty-float-right ty-product-list__bulk" type="checkbox" id="bulk_addition_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php if ($_smarty_tpl->getValue('js_product_var')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" <?php if (($_smarty_tpl->getValue('product')['zero_price_action'] == "R" && $_smarty_tpl->getValue('product')['price'] == 0)) {?>disabled="disabled"<?php }?> />
                <?php }?>

                <div class="ut2-pl__wrap">
                <div class="ut2-pl__image" style="--pl-thumbs-width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbw'))), ENT_QUOTES, 'UTF-8');?>
px;--pl-thumbs-height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbh'))), ENT_QUOTES, 'UTF-8');?>
px">
                    <?php $_smarty_tpl->assign('product_link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])), false, NULL);?>
                    <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>


                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                        <div class="ty-center-block">
                            <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
                                 data-ca-items-count="1"
                                 data-ca-items-responsive="true"
                                 data-ca-scroller-item="1"
                                 data-ca-scroller-item-desktop="1"
                                 data-ca-scroller-item-desktop-small="1"
                                 data-ca-scroller-item-tablet="1"
                                 data-ca-scroller-item-mobile="1"
                                 data-ca-product-list="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tmpl')), ENT_QUOTES, 'UTF-8');?>
"
                                 id="icons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id_prefix')), ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->getValue('product')['main_pair']) {?>
                                    <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_link')), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
                                        </a>
                                    </div>
                                <?php } else { ?>
                                    <span class="ty-no-image" style="width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbw'))), ENT_QUOTES, 'UTF-8');?>
px;height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbh'))), ENT_QUOTES, 'UTF-8');?>
px;aspect-ratio: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbw'))), ENT_QUOTES, 'UTF-8');?>
 / <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('tbh'))), ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</span>
                                <?php }?>
                                <?php $_smarty_tpl->assign('fewer_items', array(), false, NULL);?>
                                <?php if ($_smarty_tpl->getValue('product')['image_pairs']) {?>
                                    <?php $_smarty_tpl->assign('fewer_items', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('product')['image_pairs'],0,5,true), false, NULL);?>
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fewer_items'), 'image_pair');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach3DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('image_pair')) {?>
                                        <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                                            <a href="<?php echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('product_link'))), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->getValue('image_pair'),'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh')), (int) 0, $_smarty_current_dir);
?>
                                            </a>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);?>

                    <?php } else { ?>
                        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ut2-image-reload" id="list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if (!$_smarty_tpl->getValue('hide_links')) {?>
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_link')), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][link]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" />
                            <?php }?>

                            <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][data]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id_prefix')), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
,product" />
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
                               <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__hover_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_pairs'=>$_smarty_tpl->getValue('product')['image_pairs'],'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'additional_class'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']]), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            <?php if (!$_smarty_tpl->getValue('hide_links')) {?>
                                </a>
                            <?php }?>
                        <!--list_image_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
                    <?php }?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
                </div>

                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

                <div class="ut2-pl__content">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if ($_smarty_tpl->getValue('js_product_var')) {?>
                        <input type="hidden" id="product_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
" />
                    <?php }?>
                                        <?php if ($_smarty_tpl->getValue('item_number') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><strong><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_foreach_products')['iteration'] ?? null)), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>
                    
                    <div class="ut2-pl__info">
                        <div class="ut2-pl__info__head-group">
                            <div class="ut2-pl__info__head-group__main">
                                <div class="ut2-pl__item-name">
                                    <?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>

                                </div>

                                <div class="ut2-pl__extra-block clearfix">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
?>
                                    <?php if ($_smarty_tpl->getValue('product')['product_code']) {
$_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));
}?>
                                </div>
                            </div>
                            <div class="ut2-pl__info__head-group__aside">
                                <?php if ($_smarty_tpl->getValue('show_brand_logo') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
                                    <?php $_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
                                    <?php if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs']) {?>
                                        <div class="brand-img">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>40,'image_width'=>60,'images'=>$_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>

						<?php $_smarty_tpl->assign('prod_descr', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                        <?php if ($_smarty_tpl->getValue('show_descr') && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'))) {?>
                            <div class="ut2-pl__description">
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'));?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

						<?php if ($_smarty_tpl->getValue('show_features') && !$_smarty_tpl->getValue('hide_features') && $_smarty_tpl->getValue('product')['abt__ut2_features'] && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none") {?>
                            <div class="ut2-features-list">
                                <?php $_smarty_tpl->assign('product_features', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_features'));?>

                            </div>
                        <?php }?>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    </div>

                    <div class="ut2-pl__control<?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <div class="ut2-pl__price <?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?>ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
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
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        <?php if (!$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'capt_options_vs_qty')) {?>
                            <div class="ty-product-list__option">
                                <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>

                            </div>

                            <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


                            <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != "none") {?>
                            <div class="ut2-pl__qty-wrap">
                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>

                                <?php }?>

                                <?php $_smarty_tpl->assign('min_qty', "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('min_qty'));?>


                                <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>

                            </div>
                            <?php }?>
                        <?php }?>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        <?php $_smarty_tpl->assign('product_edp', "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_edp'));?>

                    </div>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
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
            </div>
            <?php if (!($_smarty_tpl->getValue('__smarty_foreach_products')['last'] ?? null)) {
}?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->getValue('ut2_load_more')) {
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_prefixVariable4,'position'=>"bottom",'object'=>"products"), (int) 0, $_smarty_current_dir);
}?>

    <?php if ($_smarty_tpl->getValue('bulk_addition')) {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {

                $(document).ready(function() {

                    $.ceEvent('on', 'ce.commoninit', function(context) {
                        if (context.find('input[type=checkbox][id^=bulk_addition_]').length) {
                            context.find('.cm-picker-product-options').switchAvailability(true, false);
                        }
                    });

                    $(_.doc).on('click', '.cm-item', function() {
                        $('#opt_' + $(this).prop('id').replace('bulk_addition_', '')).switchAvailability(!this.checked, false);
                    });
                });

            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('force_ajax'=>$_smarty_tpl->getValue('force_ajax')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
