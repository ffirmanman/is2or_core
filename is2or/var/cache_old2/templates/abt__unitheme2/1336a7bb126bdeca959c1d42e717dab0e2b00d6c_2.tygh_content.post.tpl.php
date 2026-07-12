<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/abt__unitheme2/hooks/index/content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa936e3c9_22206084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1336a7bb126bdeca959c1d42e717dab0e2b00d6c' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/content.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 4,
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 4,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/proceed_to_checkout.tpl' => 2,
    'tygh:buttons/go.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:views/auth/login_form.tpl' => 2,
  ),
))) {
function content_69afafa936e3c9_22206084 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('home','menu','search','search','search_products','search','search','cart','cart','cart_is_empty','total_items','items','for','view_cart','checkout','wishlist','compare','abt__ut2.settings.general.sticky_panel.account','account','profile_details','downloads','orders','view_comparison_list','track_my_order','track_my_order','order_id','email','go','go_to_admin_panel','sign_out','sign_in','register','sign_in','abt__ut2.settings.general.sticky_panel.phones','abt__ut2.settings.general.sticky_panel.phones','address','home','menu','search','search','search_products','search','search','cart','cart','cart_is_empty','total_items','items','for','view_cart','checkout','wishlist','compare','abt__ut2.settings.general.sticky_panel.account','account','profile_details','downloads','orders','view_comparison_list','track_my_order','track_my_order','order_id','email','go','go_to_admin_panel','sign_out','sign_in','register','sign_in','abt__ut2.settings.general.sticky_panel.phones','abt__ut2.settings.general.sticky_panel.phones','address'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('block_snapping_id_replacement', "sticky_item", false, NULL);
$_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block_snapping_id_replacement'), false, NULL);
$_smarty_tpl->assign('r_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'bottom_content');?>


<?php if ($_REQUEST['dispatch'] != 'checkout.checkout') {?>
<div class="ut2-sticky-panel__wrap<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> labels-true<?php }?>">

        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:sticky_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ut2-sticky-panel">
                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['link_home'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['link_home']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['link_home']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        	<?php $_smarty_tpl->assign('url', '', false, NULL);?>
        	<?php if ($_smarty_tpl->getValue('use_vendor_url') && ((true && (true && null !== ($_REQUEST['company_id'] ?? null))) || (true && ($_smarty_tpl->hasVariable('object_id') && null !== ($_smarty_tpl->getValue('object_id') ?? null))))) {?>
        		<?php if ($_REQUEST['company_id']) {?>
        			<?php $_smarty_tpl->assign('url', "companies.view&company_id=".((string)$_REQUEST['company_id']), false, NULL);?>
        		<?php } else { ?>
        			<?php $_smarty_tpl->assign('url', "companies.view&company_id=".((string)$_smarty_tpl->getValue('object_id')), false, NULL);?>
        		<?php }?>
        	<?php }?>

        	<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('url'))), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sticky-panel__link<?php if ($_REQUEST['dispatch'] == "index.index") {?> active<?php }?>"><i class="ut2-icon-home_page"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("home", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['catalog'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['catalog']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['catalog']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

        	<a class="ut2-sticky-panel__link cm-external-trigger"><i class="ut2-icon-outline-menu"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("menu", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['search'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['search']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['search']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <a id="on_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_search" href="#" rel="nofollow" class="ut2-btn-search ut2-sticky-panel__link cm-combination cm-abt--ut2-toggle-scroll"><i class="ut2-icon-search"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
            <a id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_search" href="#" rel="nofollow" class="ut2-btn-search ut2-sticky-panel__link cm-combination cm-abt--ut2-toggle-scroll" style="display:none;"><i class="ut2-icon-baseline-close"></i></a>

            <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_search" class=" ty-search-block hidden">
                <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
                    <input type="hidden" name="match" value="all" />
                    <input type="hidden" name="subcats" value="Y" />
                    <input type="hidden" name="pcode_from_q" value="Y" />
                    <input type="hidden" name="pshort" value="Y" />
                    <input type="hidden" name="pfull" value="Y" />
                    <input type="hidden" name="pname" value="Y" />
                    <input type="hidden" name="pkeywords" value="Y" />
                    <input type="hidden" name="search_performed" value="Y" />

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_products", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?><input type="text" name="q" value="<?php echo $_smarty_tpl->getValue('search')['q'];?>
" autocomplete="off" id="search_input<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'search_input_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search_title')), ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
}?>

                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "search_input_id", null, null);
echo $_smarty_tpl->getValue('block_snapping_id_replacement');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                </form>
            </div>
                <div class="ut2-sticky-panel__item__overlay"></div>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['cart'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('block') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['properties']['products_links_type'] = "thumb";
$_smarty_tpl->assign('block', $_tmp_array, false, NULL);?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['cart']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['cart']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <div class="ty-dropdown-box" id="cart_status_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination cm-abt--ut2-toggle-scroll">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sticky-panel__link" id="cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                            <i class="ut2-icon-use_icon_cart filled"><?php if ($_SESSION['cart']['amount']) {?><em class="count"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
</em><?php }?></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?>
                        <!--cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></a>
                    </div>
                    <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__content ty-dropdown-box__content--cart hidden">

                        <a href="#" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="cm-external-click ut2-btn-close cm-abt--ut2-toggle-scroll" ><i class="ut2-icon-baseline-close"></i></a>
                        <div class="ty-dropdown-box__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <div class="cm-cart-content cm-cart-content-thumb" id="cart_content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                                    <div class="ty-cart-items">
                                        <?php if ($_SESSION['cart']['amount']) {?>
                                            <ul class="ty-cart-items__list">
                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                    <?php $_smarty_tpl->assign('_cart_products', $_smarty_tpl->getSmarty()->getModifierCallback('array_reverse')($_SESSION['cart']['products'],true), false, NULL);?>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_cart_products'), 'product', false, 'key', 'cart_products', array (
));
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach4DoElse = false;
?>
                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                        <?php if (!$_smarty_tpl->getValue('product')['extra']['parent']) {?>
                                                            <li class="ty-cart-items__list-item">
                                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                                                                <div class="ty-cart-items__list-item-image">
                                                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                                                    </a>
                                                                </div>

                                                                <div class="ty-cart-items__list-item-desc">
                                                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp);?>
</a>
                                                                <p>
                                                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key'))."_".((string)$_smarty_tpl->getValue('dropdown_id')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                                                                </p>
                                                                </div>
                                                                <div class="ty-cart-items__list-item-tools">
                                                                    <?php if ((!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('product')['extra']['exclude_from_calculate']) {?>
                                                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_url=".((string)$_smarty_tpl->getValue('r_url')),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_content*,cart_icon*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                                                                    <?php }?>
                                                                </div>
                                                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                            </li>
                                                        <?php }?>
                                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                            </ul>
                                        <?php } else { ?>
                                            <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart_is_empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                        <?php }?>
                                    </div>

                                    <div class="cm-cart-buttons ty-cart-content__buttons buttons-container<?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">

                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php if ($_SESSION['cart']['amount'] > 1 || $_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
                                        <div class="ut2-mini-cart__subtotal b-top"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:&nbsp;<span class="ty-float-right"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("for", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<br><strong><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), (int) 0, $_smarty_current_dir);
?></strong></span><br>&nbsp;</div>
                                        <?php }?>
                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                        <?php if ($_smarty_tpl->getValue('settings')['Checkout']['checkout_redirect'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                        <?php }?>
                                    </div>
                            <!--cart_content_<?php echo $_smarty_tpl->getValue('dropdown_id');?>
--></div>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
            <!--cart_status_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['wishlist'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == "A" && !$_smarty_tpl->getValue('hide_wishlist_button')) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['wishlist']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['wishlist']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php $_smarty_tpl->assign('wishlist_count', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_polyfill_fn_wishlist_get_count')(), false, NULL);?>
                <div id="abt__ut2_wishlist_count">
                    <a class="ut2-sticky-panel__link<?php if ($_REQUEST['dispatch'] == "wishlist.view") {?> active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ut2-icon-baseline-favorite-border"><?php if ($_smarty_tpl->getValue('wishlist_count') > 0) {?><em class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist_count')), ENT_QUOTES, 'UTF-8');?>
</em><?php }?></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                    <!--abt__ut2_wishlist_count--></div>
            </div>
        <?php }?>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['comparison'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['comparison']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['comparison']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php $_smarty_tpl->assign('compared_products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_comparison_products')(''), false, NULL);?>
                <div id="abt__ut2_compared_products">
                    <a class="ut2-sticky-panel__link<?php if ($_REQUEST['dispatch'] == "product_features.compare") {?> active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ut2-icon-addchart"><?php if ($_smarty_tpl->getValue('compared_products')) {?><em class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products'))), ENT_QUOTES, 'UTF-8');?>
</em><?php }?></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("compare", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                <!--abt__ut2_compared_products--></div>
            </div>
        <?php }?>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['account'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['account']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['account']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <div class="ty-dropdown-box" id="account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc">
                    <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc" class="ty-dropdown-box__title cm-combination cm-abt--ut2-toggle-scroll">
                        <a class="ut2-sticky-panel__link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-outline-account-circle"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.settings.general.sticky_panel.account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                    </div>
                    <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc" class="ty-dropdown-box__content hidden">

                        <a href="#" rel="nofollow" class="ut2-btn-close cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc"><i class="ut2-icon-baseline-close"></i></a>
                        <div class="ty-dropdown-box__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                        <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
                        <ul class="ty-account-info">
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                                <?php if ($_smarty_tpl->getValue('user_info')['firstname'] || $_smarty_tpl->getValue('user_info')['lastname']) {?>
                                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->getValue('user_info')['firstname'];?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php } else { ?>
                                    <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php }?>
                                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.downloads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("downloads", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->getValue('user_data')['firstname'] || $_smarty_tpl->getValue('user_data')['lastname']) {?>
                                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                            <?php } elseif ($_smarty_tpl->getValue('user_data')['email']) {?>
                                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
                            <?php }?>
                                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.search")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == 'Y') {?>
                                    <?php $_smarty_tpl->assign('compared_products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_comparison_products')(''), false, NULL);?>
                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('compared_products')) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products'))), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </ul>

                        <?php if ($_smarty_tpl->getValue('settings')['Appearance']['display_track_orders'] == 'Y') {?>
                            <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
">
                                <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                                    <input type="hidden" name="result_ids" value="track_orders_block_*" />
                                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />

                                    <div class="ty-account-info__orders-txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                                    <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                                        <label for="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" class="cm-required hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                                        <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" name="track_data" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_id", [], $_smarty_tpl->getSmarty()->getLanguage());
if (!$_smarty_tpl->getValue('auth')['user_id']) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" />
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"orders.track_request",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("go", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_orders",'align'=>"left",'sidebox'=>true), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                </form>
                                <!--track_orders_block_<?php echo $_smarty_tpl->getValue('block_snapping_id_replacement');?>
--></div>
                        <?php }?>

                        <div class="ty-account-info__buttons buttons-container">
                            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                                <?php $_smarty_tpl->assign('is_vendor_with_active_company', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('auth')['user_type'] == "V") && ($_smarty_tpl->getValue('auth')['company_status'] == "A"), false, NULL);?>
                                <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['vendor_index'])), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                <?php }?>
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.logout?redirect_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_out", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php } else { ?>
                                <a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                <div  id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <div class="ty-login-popup">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->getValue('block_snapping_id_replacement'))), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                <!--account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
--></div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
                </div>
            </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['phones'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['phones']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['phones']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <div class="ty-dropdown-box" id="phones_info_acc">
                    <div id="sw_dropdown_phones_info_acc" class="ty-dropdown-box__title cm-combination cm-abt--ut2-toggle-scroll">
                        <a class="ut2-sticky-panel__link" href="#" rel="nofollow"><i class="ut2-icon-local_phone"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.settings.general.sticky_panel.phones", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                    </div>
                    <div id="dropdown_phones_info_acc" class="ty-dropdown-box__content hidden">
                        <a href="#" rel="nofollow" class="ut2-btn-close cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_phones_info_acc"><i class="ut2-icon-baseline-close"></i></a>
                        <div class="ty-dropdown-box__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.settings.general.sticky_panel.phones", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                        <?php if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['sticky_panel_contacts_block_id']))) {?>
                            <div class="ut2-pn__contacts_block">
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['sticky_panel_contacts_block_id']),'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                            </div>
                        <?php } else { ?>
                            <div class="ut2-pn__items">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_sticky_panel:phones"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                    <p>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_phone'])) {?>
                                            <a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone']), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone']), ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_phone_2'])) {?>
                                            <a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone_2']), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone_2']), ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                                        <?php }?>
                                        <!-- Edit work time -->
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('call_request.work_time', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</small>
                                    </p>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_sticky_panel:phones"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <hr>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_orders_department'])) {?>
                                    <p><small>Email</small><a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_orders_department'])), ENT_QUOTES, 'UTF-8');?>
" style="font-weight:normal;font-size: inherit;"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_orders_department']), ENT_QUOTES, 'UTF-8');?>
</a></p>
                                <?php }?>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('settings')['Company']['company_country']) || $_smarty_tpl->getValue('settings')['Company']['company_city'] || $_smarty_tpl->getValue('settings')['Company']['company_address']) {?>
                                    <p><small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</small><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('settings')['Company']['company_country'])), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_city']), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_address']), ENT_QUOTES, 'UTF-8');?>
</p>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
                </div>
            </div>
        <?php }?>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:sticky_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>

</div>
<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/content.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/index/content.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('block_snapping_id_replacement', "sticky_item", false, NULL);
$_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block_snapping_id_replacement'), false, NULL);
$_smarty_tpl->assign('r_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'bottom_content');?>


<?php if ($_REQUEST['dispatch'] != 'checkout.checkout') {?>
<div class="ut2-sticky-panel__wrap<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> labels-true<?php }?>">

        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:sticky_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ut2-sticky-panel">
                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['link_home'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['link_home']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['link_home']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        	<?php $_smarty_tpl->assign('url', '', false, NULL);?>
        	<?php if ($_smarty_tpl->getValue('use_vendor_url') && ((true && (true && null !== ($_REQUEST['company_id'] ?? null))) || (true && ($_smarty_tpl->hasVariable('object_id') && null !== ($_smarty_tpl->getValue('object_id') ?? null))))) {?>
        		<?php if ($_REQUEST['company_id']) {?>
        			<?php $_smarty_tpl->assign('url', "companies.view&company_id=".((string)$_REQUEST['company_id']), false, NULL);?>
        		<?php } else { ?>
        			<?php $_smarty_tpl->assign('url', "companies.view&company_id=".((string)$_smarty_tpl->getValue('object_id')), false, NULL);?>
        		<?php }?>
        	<?php }?>

        	<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('url'))), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sticky-panel__link<?php if ($_REQUEST['dispatch'] == "index.index") {?> active<?php }?>"><i class="ut2-icon-home_page"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("home", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['catalog'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['catalog']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['catalog']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

        	<a class="ut2-sticky-panel__link cm-external-trigger"><i class="ut2-icon-outline-menu"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("menu", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['search'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['search']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['search']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <a id="on_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_search" href="#" rel="nofollow" class="ut2-btn-search ut2-sticky-panel__link cm-combination cm-abt--ut2-toggle-scroll"><i class="ut2-icon-search"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
            <a id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_search" href="#" rel="nofollow" class="ut2-btn-search ut2-sticky-panel__link cm-combination cm-abt--ut2-toggle-scroll" style="display:none;"><i class="ut2-icon-baseline-close"></i></a>

            <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_search" class=" ty-search-block hidden">
                <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
                    <input type="hidden" name="match" value="all" />
                    <input type="hidden" name="subcats" value="Y" />
                    <input type="hidden" name="pcode_from_q" value="Y" />
                    <input type="hidden" name="pshort" value="Y" />
                    <input type="hidden" name="pfull" value="Y" />
                    <input type="hidden" name="pname" value="Y" />
                    <input type="hidden" name="pkeywords" value="Y" />
                    <input type="hidden" name="search_performed" value="Y" />

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_products", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?><input type="text" name="q" value="<?php echo $_smarty_tpl->getValue('search')['q'];?>
" autocomplete="off" id="search_input<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'search_input_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search_title')), ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
}?>

                    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "search_input_id", null, null);
echo $_smarty_tpl->getValue('block_snapping_id_replacement');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                </form>
            </div>
                <div class="ut2-sticky-panel__item__overlay"></div>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['cart'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('block') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['properties']['products_links_type'] = "thumb";
$_smarty_tpl->assign('block', $_tmp_array, false, NULL);?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['cart']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['cart']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <div class="ty-dropdown-box" id="cart_status_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination cm-abt--ut2-toggle-scroll">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sticky-panel__link" id="cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                            <i class="ut2-icon-use_icon_cart filled"><?php if ($_SESSION['cart']['amount']) {?><em class="count"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
</em><?php }?></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?>
                        <!--cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></a>
                    </div>
                    <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__content ty-dropdown-box__content--cart hidden">

                        <a href="#" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="cm-external-click ut2-btn-close cm-abt--ut2-toggle-scroll" ><i class="ut2-icon-baseline-close"></i></a>
                        <div class="ty-dropdown-box__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <div class="cm-cart-content cm-cart-content-thumb" id="cart_content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                                    <div class="ty-cart-items">
                                        <?php if ($_SESSION['cart']['amount']) {?>
                                            <ul class="ty-cart-items__list">
                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                    <?php $_smarty_tpl->assign('_cart_products', $_smarty_tpl->getSmarty()->getModifierCallback('array_reverse')($_SESSION['cart']['products'],true), false, NULL);?>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_cart_products'), 'product', false, 'key', 'cart_products', array (
));
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach5DoElse = false;
?>
                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                        <?php if (!$_smarty_tpl->getValue('product')['extra']['parent']) {?>
                                                            <li class="ty-cart-items__list-item">
                                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                                                                <div class="ty-cart-items__list-item-image">
                                                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                                                    </a>
                                                                </div>

                                                                <div class="ty-cart-items__list-item-desc">
                                                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp);?>
</a>
                                                                <p>
                                                                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key'))."_".((string)$_smarty_tpl->getValue('dropdown_id')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                                                                </p>
                                                                </div>
                                                                <div class="ty-cart-items__list-item-tools">
                                                                    <?php if ((!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('product')['extra']['exclude_from_calculate']) {?>
                                                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_url=".((string)$_smarty_tpl->getValue('r_url')),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_content*,cart_icon*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                                                                    <?php }?>
                                                                </div>
                                                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                            </li>
                                                        <?php }?>
                                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                            </ul>
                                        <?php } else { ?>
                                            <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart_is_empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                        <?php }?>
                                    </div>

                                    <div class="cm-cart-buttons ty-cart-content__buttons buttons-container<?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">

                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php if ($_SESSION['cart']['amount'] > 1 || $_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
                                        <div class="ut2-mini-cart__subtotal b-top"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:&nbsp;<span class="ty-float-right"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("for", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<br><strong><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), (int) 0, $_smarty_current_dir);
?></strong></span><br>&nbsp;</div>
                                        <?php }?>
                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                        <?php if ($_smarty_tpl->getValue('settings')['Checkout']['checkout_redirect'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                        <?php }?>
                                    </div>
                            <!--cart_content_<?php echo $_smarty_tpl->getValue('dropdown_id');?>
--></div>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
            <!--cart_status_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['wishlist'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == "A" && !$_smarty_tpl->getValue('hide_wishlist_button')) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['wishlist']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['wishlist']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php $_smarty_tpl->assign('wishlist_count', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_polyfill_fn_wishlist_get_count')(), false, NULL);?>
                <div id="abt__ut2_wishlist_count">
                    <a class="ut2-sticky-panel__link<?php if ($_REQUEST['dispatch'] == "wishlist.view") {?> active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ut2-icon-baseline-favorite-border"><?php if ($_smarty_tpl->getValue('wishlist_count') > 0) {?><em class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist_count')), ENT_QUOTES, 'UTF-8');?>
</em><?php }?></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                    <!--abt__ut2_wishlist_count--></div>
            </div>
        <?php }?>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['comparison'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['comparison']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['comparison']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php $_smarty_tpl->assign('compared_products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_comparison_products')(''), false, NULL);?>
                <div id="abt__ut2_compared_products">
                    <a class="ut2-sticky-panel__link<?php if ($_REQUEST['dispatch'] == "product_features.compare") {?> active<?php }?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ut2-icon-addchart"><?php if ($_smarty_tpl->getValue('compared_products')) {?><em class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products'))), ENT_QUOTES, 'UTF-8');?>
</em><?php }?></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("compare", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                <!--abt__ut2_compared_products--></div>
            </div>
        <?php }?>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['account'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['account']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['account']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <div class="ty-dropdown-box" id="account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc">
                    <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc" class="ty-dropdown-box__title cm-combination cm-abt--ut2-toggle-scroll">
                        <a class="ut2-sticky-panel__link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-outline-account-circle"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.settings.general.sticky_panel.account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                    </div>
                    <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc" class="ty-dropdown-box__content hidden">

                        <a href="#" rel="nofollow" class="ut2-btn-close cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
_acc"><i class="ut2-icon-baseline-close"></i></a>
                        <div class="ty-dropdown-box__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                        <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
                        <ul class="ty-account-info">
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                                <?php if ($_smarty_tpl->getValue('user_info')['firstname'] || $_smarty_tpl->getValue('user_info')['lastname']) {?>
                                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->getValue('user_info')['firstname'];?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php } else { ?>
                                    <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php }?>
                                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.downloads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("downloads", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->getValue('user_data')['firstname'] || $_smarty_tpl->getValue('user_data')['lastname']) {?>
                                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                            <?php } elseif ($_smarty_tpl->getValue('user_data')['email']) {?>
                                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
                            <?php }?>
                                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.search")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == 'Y') {?>
                                    <?php $_smarty_tpl->assign('compared_products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_comparison_products')(''), false, NULL);?>
                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('compared_products')) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products'))), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </ul>

                        <?php if ($_smarty_tpl->getValue('settings')['Appearance']['display_track_orders'] == 'Y') {?>
                            <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
">
                                <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                                    <input type="hidden" name="result_ids" value="track_orders_block_*" />
                                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />

                                    <div class="ty-account-info__orders-txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                                    <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                                        <label for="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" class="cm-required hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                                        <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" name="track_data" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_id", [], $_smarty_tpl->getSmarty()->getLanguage());
if (!$_smarty_tpl->getValue('auth')['user_id']) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" />
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"orders.track_request",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("go", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_orders",'align'=>"left",'sidebox'=>true), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                </form>
                                <!--track_orders_block_<?php echo $_smarty_tpl->getValue('block_snapping_id_replacement');?>
--></div>
                        <?php }?>

                        <div class="ty-account-info__buttons buttons-container">
                            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                                <?php $_smarty_tpl->assign('is_vendor_with_active_company', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('auth')['user_type'] == "V") && ($_smarty_tpl->getValue('auth')['company_status'] == "A"), false, NULL);?>
                                <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['vendor_index'])), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                <?php }?>
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.logout?redirect_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_out", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php } else { ?>
                                <a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                <div  id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <div class="ty-login-popup">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->getValue('block_snapping_id_replacement'))), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                <!--account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_snapping_id_replacement')), ENT_QUOTES, 'UTF-8');?>
--></div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
                </div>
            </div>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['phones'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <div class="ut2-sticky-panel__item" <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['phones']['position']) {?>style="order:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['phones']['position']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <div class="ty-dropdown-box" id="phones_info_acc">
                    <div id="sw_dropdown_phones_info_acc" class="ty-dropdown-box__title cm-combination cm-abt--ut2-toggle-scroll">
                        <a class="ut2-sticky-panel__link" href="#" rel="nofollow"><i class="ut2-icon-local_phone"></i><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel_labels'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.settings.general.sticky_panel.phones", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></a>
                    </div>
                    <div id="dropdown_phones_info_acc" class="ty-dropdown-box__content hidden">
                        <a href="#" rel="nofollow" class="ut2-btn-close cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_phones_info_acc"><i class="ut2-icon-baseline-close"></i></a>
                        <div class="ty-dropdown-box__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.settings.general.sticky_panel.phones", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                        <?php if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['sticky_panel_contacts_block_id']))) {?>
                            <div class="ut2-pn__contacts_block">
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['sticky_panel_contacts_block_id']),'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                            </div>
                        <?php } else { ?>
                            <div class="ut2-pn__items">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_sticky_panel:phones"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                    <p>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_phone'])) {?>
                                            <a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone']), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone']), ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_phone_2'])) {?>
                                            <a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone_2']), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_phone_2']), ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                                        <?php }?>
                                        <!-- Edit work time -->
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('call_request.work_time', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</small>
                                    </p>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_sticky_panel:phones"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <hr>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_orders_department'])) {?>
                                    <p><small>Email</small><a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('settings')['Company']['company_orders_department'])), ENT_QUOTES, 'UTF-8');?>
" style="font-weight:normal;font-size: inherit;"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_orders_department']), ENT_QUOTES, 'UTF-8');?>
</a></p>
                                <?php }?>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('settings')['Company']['company_country']) || $_smarty_tpl->getValue('settings')['Company']['company_city'] || $_smarty_tpl->getValue('settings')['Company']['company_address']) {?>
                                    <p><small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</small><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('settings')['Company']['company_country'])), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_city']), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Company']['company_address']), ENT_QUOTES, 'UTF-8');?>
</p>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
                </div>
            </div>
        <?php }?>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:sticky_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>

</div>
<?php }?>

<?php }
}
}
