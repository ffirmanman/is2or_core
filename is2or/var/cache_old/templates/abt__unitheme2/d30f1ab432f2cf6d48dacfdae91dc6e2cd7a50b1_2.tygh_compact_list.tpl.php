<?php
/* Smarty version 5.4.3, created on 2026-03-08 20:45:35
  from 'tygh:blocks/list_templates/compact_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adb5bf698671_24551022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd30f1ab432f2cf6d48dacfdae91dc6e2cd7a50b1' => 
    array (
      0 => 'blocks/list_templates/compact_list.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 4,
    'tygh:views/products/components/sorting.tpl' => 2,
    'tygh:common/abt__ut2_pagination.tpl' => 4,
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/product_list_templates/components/average_rating.tpl' => 2,
    'tygh:views/products/components/quick_view_link.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
  ),
))) {
function content_69adb5bf698671_24551022 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/list_templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('products')) {?>

	<?php $_smarty_tpl->assign('tmpl', 'short_list', false, NULL);?>
	
	    <?php $_smarty_tpl->assign('tbw', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('tbh', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>


    <?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('no_sorting')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php $_smarty_tpl->assign('image_width', (($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_height', (($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('show_list_discount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, NULL);?>

    <?php $_smarty_tpl->assign('show_labels_in_title', false, false, NULL);?>
    <?php $_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>
    
    <div class="ty-compact-list <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['short_list']['show_two_columns'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> show-two-columns<?php }?>">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

        <?php if ($_smarty_tpl->getValue('ut2_load_more')) {
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_prefixVariable1,'position'=>"top"), (int) 0, $_smarty_current_dir);
}?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'key', 'products', array (
  'first' => true,
  'index' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'];
?>
            <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
            <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_form'=>false,'product'=>$_smarty_tpl->getValue('product'),'product_labels_position'=>"left-top",'show_labels_in_title'=>false), (int) 0, $_smarty_current_dir);
?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div class="ty-compact-list__item <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>" <?php if ($_smarty_tpl->getValue('ut2_load_more') && ($_smarty_tpl->getValue('__smarty_foreach_products')['first'] ?? null)) {?> data-ut2-load-more="first-item"<?php }?>>

                    <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>


                        <div class="ty-compact-list__content">

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <div class="ty-compact-list__image">
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix')), (int) 0, $_smarty_current_dir);
?>
                                </a>
                                <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>

                            </div>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <div class="ty-compact-list__title">
                                <?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                                <div class="ty-compact-list__name"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>
</div>

                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
?>
    							
    							<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['short_list']['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['product_code']) {?>
    							    <div class="ty-compact-list__sku">
                                        <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                                    </div>
                                <?php }?>
                                
                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['short_list']['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    							    <div class="ty-compact-list__amount">
                                        <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>

                                    </div>
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
                            </div>

                            <div class="ty-compact-list__controls <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>">

		                        <div class="ty-compact-list__price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
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
                                <div class="ty-compact-list__buttons">

                                    <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != "none") {?>
                                    <div class="ty-compact-list__qty-wrap">
                                        <?php if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
                                            <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>

                                        <?php }?>
                                        <?php if (!$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'capt_options_vs_qty')) {?>
                                            <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>


                                            <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>

                                        <?php }?>
                                    </div>
                                    <?php }?>

                                    <div class="ut2-cl-bt" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if (!$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->getValue('quick_nav_ids')), (int) 0, $_smarty_current_dir);
?>
                                        <?php }?>
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
                            </div>
                        </div>

                    <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>

                </div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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

        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>

<?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('force_ajax'=>$_smarty_tpl->getValue('force_ajax')), (int) 0, $_smarty_current_dir);
}?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/compact_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/list_templates/compact_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('products')) {?>

	<?php $_smarty_tpl->assign('tmpl', 'short_list', false, NULL);?>
	
	    <?php $_smarty_tpl->assign('tbw', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('tbh', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>


    <?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('no_sorting')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php $_smarty_tpl->assign('image_width', (($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_height', (($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? 100 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('show_list_discount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, NULL);?>

    <?php $_smarty_tpl->assign('show_labels_in_title', false, false, NULL);?>
    <?php $_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>
    
    <div class="ty-compact-list <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['short_list']['show_two_columns'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> show-two-columns<?php }?>">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

        <?php if ($_smarty_tpl->getValue('ut2_load_more')) {
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_prefixVariable3,'position'=>"top"), (int) 0, $_smarty_current_dir);
}?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product', false, 'key', 'products', array (
  'first' => true,
  'index' => true,
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach1DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'];
?>
            <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
            <?php $_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_form'=>false,'product'=>$_smarty_tpl->getValue('product'),'product_labels_position'=>"left-top",'show_labels_in_title'=>false), (int) 0, $_smarty_current_dir);
?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div class="ty-compact-list__item <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>" <?php if ($_smarty_tpl->getValue('ut2_load_more') && ($_smarty_tpl->getValue('__smarty_foreach_products')['first'] ?? null)) {?> data-ut2-load-more="first-item"<?php }?>>

                    <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>


                        <div class="ty-compact-list__content">

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <div class="ty-compact-list__image">
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('obj_id_prefix')), (int) 0, $_smarty_current_dir);
?>
                                </a>
                                <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>

                            </div>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <div class="ty-compact-list__title">
                                <?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                                <div class="ty-compact-list__name"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>
</div>

                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
?>
    							
    							<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['short_list']['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['product_code']) {?>
    							    <div class="ty-compact-list__sku">
                                        <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                                    </div>
                                <?php }?>
                                
                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['short_list']['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    							    <div class="ty-compact-list__amount">
                                        <?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>

                                    </div>
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
                            </div>

                            <div class="ty-compact-list__controls <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>">

		                        <div class="ty-compact-list__price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
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
                                <div class="ty-compact-list__buttons">

                                    <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') != "none") {?>
                                    <div class="ty-compact-list__qty-wrap">
                                        <?php if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
                                            <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>

                                        <?php }?>
                                        <?php if (!$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'capt_options_vs_qty')) {?>
                                            <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>


                                            <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>

                                        <?php }?>
                                    </div>
                                    <?php }?>

                                    <div class="ut2-cl-bt" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if (!$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->getValue('quick_nav_ids')), (int) 0, $_smarty_current_dir);
?>
                                        <?php }?>
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
                            </div>
                        </div>

                    <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>

                </div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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

        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_compact_list_view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>

<?php if (!$_smarty_tpl->getValue('no_pagination')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('force_ajax'=>$_smarty_tpl->getValue('force_ajax')), (int) 0, $_smarty_current_dir);
}?>

<?php }
}
}
}
