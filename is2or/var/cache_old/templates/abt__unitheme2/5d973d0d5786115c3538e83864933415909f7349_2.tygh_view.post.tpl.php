<?php
/* Smarty version 5.4.3, created on 2026-03-10 05:44:25
  from 'tygh:addons/gift_certificates/hooks/wishlist/view.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69af8589b3e4e3_55673620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d973d0d5786115c3538e83864933415909f7349' => 
    array (
      0 => 'addons/gift_certificates/hooks/wishlist/view.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl' => 4,
    'tygh:common/price.tpl' => 12,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/options_info.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
  ),
))) {
function content_69af8589b3e4e3_55673620 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/gift_certificates/hooks/wishlist';
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove','quick_view','gift_certificate','free_products','quick_view','gift_certificate','edit','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','product','price','quantity','subtotal','price_summary','remove','remove','quick_view','gift_certificate','free_products','quick_view','gift_certificate','edit','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','product','price','quantity','subtotal','price_summary'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('wishlist')['gift_certificates']) {?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('wishlist')['gift_certificates'], 'gift', false, 'gift_key', 'gift_certificates', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gift_key')->value => $_smarty_tpl->getVariable('gift')->value) {
$foreach0DoElse = false;
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"it + 1",'assign'=>"iteration",'it'=>$_smarty_tpl->getValue('iteration')), $_smarty_tpl);?>


<div class="ty-gift-certificate-wishlist ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="ut2-gl__item">
        <div class="ty-twishlist-item">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.wishlist_delete?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" class="cm-post ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"), $_smarty_tpl);?>
<span class="ty-remove__txt ty-twishlist-item__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
        </div>
        <form>
        <div class="ut2-gl__body" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
px">

            <div class="ut2-gl__image" style="height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
px">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'],'height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height']), (int) 0, $_smarty_current_dir);
?></a>
            </div>
            
            <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable5 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    <div class="ut2-gl__mix-price-and-button" style="align-items: flex-start;">
                <?php }?>

                <div class="ut2-gl__price ty-price-num" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['amount']), (int) 0, $_smarty_current_dir);
?>
                </div>

                <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' && (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable6 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button' && (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable7 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <a id="opener_gift_cert_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="gift_cert_quick_view_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_view", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <?php }?>
            
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    </div>
                <?php }?>
            <?php }?>

            <div class="ut2-gl__content" style="height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px">
                
                <div class="ut2-gl__name">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('gift')['products']) {?> + <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free_products", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></a>
                </div>
                
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    <div class="ut2-gl__mix-price-and-button">
                <?php }?>
                <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable8 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                    <div class="ut2-gl__price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;">
                        <div><span class="ty-price-update"><span class="ty-price ty-price-num"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['amount']), (int) 0, $_smarty_current_dir);
?></span></span></div>
                    </div>
    
                    <div class="ut2-gl__control">
                        <a id="opener_gift_cert_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="gift_cert_quick_view_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_view", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    </form>
</div>

<div class="hidden" id="gift_cert_quick_view_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-form-dialog-closer"<?php }?> method="post" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_prefix')), ENT_QUOTES, 'UTF-8');?>
gift_cert_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
">

    <input type="hidden" value="cart_status*,wish_list*" name="result_ids" />
    <input type="hidden" name="gift_cert_data[send_via]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['send_via']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['amount']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[correct_amount]" value="N" />
    <input type="hidden" name="gift_cert_data[recipient]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['recipient']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[sender]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['sender']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[message]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['message']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php if ($_smarty_tpl->getValue('gift')['email']) {?><input type="hidden" name="gift_cert_data[email]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['email']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['title']) {?><input type="hidden" name="gift_cert_data[title]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['title']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['firstname']) {?><input type="hidden" name="gift_cert_data[firstname]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['firstname']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['lastname']) {?><input type="hidden" name="gift_cert_data[lastname]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['lastname']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['address']) {?><input type="hidden" name="gift_cert_data[address]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['address']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['city']) {?><input type="hidden" name="gift_cert_data[city]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['city']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['country']) {?><input type="hidden" name="gift_cert_data[country]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['country']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['state']) {?><input type="hidden" name="gift_cert_data[state]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['state']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['zipcode']) {?><input type="hidden" name="gift_cert_data[zipcode]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['zipcode']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

    <div class="ty-quick-view__wrapper ty-product-block">
        <div class="ty-product-block__img-wrapper">
            <div class="ty-product-block__img">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>"150",'height'=>"150"), (int) 0, $_smarty_current_dir);
?></a>
    
                <div class="ty-mtb-xs ty-center"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?></div>
            </div>
        </div>
        <div class="ty-product-block__left">
            <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')));?>
" class="product-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_cert_to", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['recipient']), ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_cert_from", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['sender']), ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['amount']), (int) 0, $_smarty_current_dir);
?></span>
            </div>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("send_via", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php if ($_smarty_tpl->getValue('gift')['send_via'] == "E") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("postal_mail", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
            </div>

            <div class="clearfix"></div>
            <?php if ($_smarty_tpl->getValue('gift')['products'] && $_smarty_tpl->getValue('addons')['gift_certificates']['free_products_allow'] == "Y") {?>
            <div class="clearfix">

                <p><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</strong></p>

                <?php $_smarty_tpl->assign('gift_price', '', false, NULL);?>
                <div class="ut2-table-carrier">
                    <table class="ty-table">
                        <tr>
                            <th style="width: 50%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th style="width: 10%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th style="width: 10%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th class="ty-right" style="width: 10%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("subtotal", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('extra_products'), '_product', false, 'key_cert_prod');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_cert_prod')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach1DoElse = false;
?>

                            <?php if ($_smarty_tpl->getValue('wishlist')['products'][$_smarty_tpl->getValue('key_cert_prod')]['extra']['parent']['certificate'] == $_smarty_tpl->getValue('gift_key')) {?>

                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_cert_prod')), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist')['products'][$_smarty_tpl->getValue('key_cert_prod')]['product_id']), ENT_QUOTES, 'UTF-8');?>
" />
                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_cert_prod')), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist')['products'][$_smarty_tpl->getValue('key_cert_prod')]['amount']), ENT_QUOTES, 'UTF-8');?>
" class="cm-value-decimal"/>

                                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->getValue('_product')['subtotal'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->getValue('gift_price') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"), $_smarty_tpl);?>

                                <tr>
                                    <td>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['product']), ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php if ($_smarty_tpl->getValue('_product')['product_options']) {?>
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_options'],'fields_prefix'=>"gift_cert_data[products][".((string)$_smarty_tpl->getValue('key_cert_prod'))."][product_options]"), (int) 0, $_smarty_current_dir);
?>
                                        <?php }?>
                                    </td>
                                    <td class="ty-center">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['price']), (int) 0, $_smarty_current_dir);
?></td>
                                    <td class="ty-center ty-nowrap">
                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['products'][$_smarty_tpl->getValue('key_cert_prod')]['amount']), ENT_QUOTES, 'UTF-8');?>
</td>
                                    <td class="ty-right ty-nowrap">
                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"item_price*amount",'item_price'=>(($tmp = $_smarty_tpl->getValue('_product')['price'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"subtotal",'amount'=>$_smarty_tpl->getValue('gift')['products'][$_smarty_tpl->getValue('key_cert_prod')]['amount']), $_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"subtotal + gift_",'subtotal'=>(($tmp = $_smarty_tpl->getValue('subtotal') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->getValue('gift_price') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"), $_smarty_tpl);?>

                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('subtotal')), (int) 0, $_smarty_current_dir);
?></td>
                                </tr>
                            <?php }?>

                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </table>
                </div>

                <div class="ty-control-group product-list-field ty-float-right">
                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price_summary", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                    <span class="ty-control-group__item">
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->getValue('gift_price') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->getValue('gift')['amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"), $_smarty_tpl);?>

                        <strong><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift_price')), (int) 0, $_smarty_current_dir);
?></strong>
                    </span>
                </div>
            </div>
            <?php }?>

            <div class="ty-product-block__button">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"big",'but_name'=>"dispatch[gift_certificates.add]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    </div>
</form>
</div>

<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('iteration')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/wishlist/view.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gift_certificates/hooks/wishlist/view.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('wishlist')['gift_certificates']) {?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('wishlist')['gift_certificates'], 'gift', false, 'gift_key', 'gift_certificates', array (
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gift_key')->value => $_smarty_tpl->getVariable('gift')->value) {
$foreach2DoElse = false;
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"it + 1",'assign'=>"iteration",'it'=>$_smarty_tpl->getValue('iteration')), $_smarty_tpl);?>


<div class="ty-gift-certificate-wishlist ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="ut2-gl__item">
        <div class="ty-twishlist-item">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.wishlist_delete?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" class="cm-post ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"), $_smarty_tpl);?>
<span class="ty-remove__txt ty-twishlist-item__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
        </div>
        <form>
        <div class="ut2-gl__body" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
px">

            <div class="ut2-gl__image" style="height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
px">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'],'height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height']), (int) 0, $_smarty_current_dir);
?></a>
            </div>
            
            <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable9 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    <div class="ut2-gl__mix-price-and-button" style="align-items: flex-start;">
                <?php }?>

                <div class="ut2-gl__price ty-price-num" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['amount']), (int) 0, $_smarty_current_dir);
?>
                </div>

                <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' && (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable10 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button' && (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable11 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <a id="opener_gift_cert_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="gift_cert_quick_view_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_view", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <?php }?>
            
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    </div>
                <?php }?>
            <?php }?>

            <div class="ut2-gl__content" style="height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px">
                
                <div class="ut2-gl__name">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('gift')['products']) {?> + <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free_products", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></a>
                </div>
                
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    <div class="ut2-gl__mix-price-and-button">
                <?php }?>
                <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable12 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable12 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                    <div class="ut2-gl__price pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;">
                        <div><span class="ty-price-update"><span class="ty-price ty-price-num"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['amount']), (int) 0, $_smarty_current_dir);
?></span></span></div>
                    </div>
    
                    <div class="ut2-gl__control">
                        <a id="opener_gift_cert_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="gift_cert_quick_view_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_view", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    </form>
</div>

<div class="hidden" id="gift_cert_quick_view_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-form-dialog-closer"<?php }?> method="post" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_prefix')), ENT_QUOTES, 'UTF-8');?>
gift_cert_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift_key')), ENT_QUOTES, 'UTF-8');?>
">

    <input type="hidden" value="cart_status*,wish_list*" name="result_ids" />
    <input type="hidden" name="gift_cert_data[send_via]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['send_via']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['amount']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[correct_amount]" value="N" />
    <input type="hidden" name="gift_cert_data[recipient]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['recipient']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[sender]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['sender']), ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="gift_cert_data[message]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['message']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php if ($_smarty_tpl->getValue('gift')['email']) {?><input type="hidden" name="gift_cert_data[email]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['email']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['title']) {?><input type="hidden" name="gift_cert_data[title]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['title']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['firstname']) {?><input type="hidden" name="gift_cert_data[firstname]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['firstname']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['lastname']) {?><input type="hidden" name="gift_cert_data[lastname]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['lastname']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['address']) {?><input type="hidden" name="gift_cert_data[address]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['address']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['city']) {?><input type="hidden" name="gift_cert_data[city]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['city']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['country']) {?><input type="hidden" name="gift_cert_data[country]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['country']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['state']) {?><input type="hidden" name="gift_cert_data[state]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['state']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->getValue('gift')['zipcode']) {?><input type="hidden" name="gift_cert_data[zipcode]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['zipcode']), ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

    <div class="ty-quick-view__wrapper ty-product-block">
        <div class="ty-product-block__img-wrapper">
            <div class="ty-product-block__img">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>"150",'height'=>"150"), (int) 0, $_smarty_current_dir);
?></a>
    
                <div class="ty-mtb-xs ty-center"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?></div>
            </div>
        </div>
        <div class="ty-product-block__left">
            <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->getValue('gift_key')));?>
" class="product-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_cert_to", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['recipient']), ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_cert_from", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['sender']), ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['amount']), (int) 0, $_smarty_current_dir);
?></span>
            </div>
            <div class="ty-control-group product-list-field">
                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("send_via", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <span class="ty-control-group__item"><?php if ($_smarty_tpl->getValue('gift')['send_via'] == "E") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("postal_mail", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
            </div>

            <div class="clearfix"></div>
            <?php if ($_smarty_tpl->getValue('gift')['products'] && $_smarty_tpl->getValue('addons')['gift_certificates']['free_products_allow'] == "Y") {?>
            <div class="clearfix">

                <p><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</strong></p>

                <?php $_smarty_tpl->assign('gift_price', '', false, NULL);?>
                <div class="ut2-table-carrier">
                    <table class="ty-table">
                        <tr>
                            <th style="width: 50%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th style="width: 10%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th style="width: 10%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th class="ty-right" style="width: 10%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("subtotal", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('extra_products'), '_product', false, 'key_cert_prod');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_cert_prod')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach3DoElse = false;
?>

                            <?php if ($_smarty_tpl->getValue('wishlist')['products'][$_smarty_tpl->getValue('key_cert_prod')]['extra']['parent']['certificate'] == $_smarty_tpl->getValue('gift_key')) {?>

                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_cert_prod')), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist')['products'][$_smarty_tpl->getValue('key_cert_prod')]['product_id']), ENT_QUOTES, 'UTF-8');?>
" />
                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_cert_prod')), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wishlist')['products'][$_smarty_tpl->getValue('key_cert_prod')]['amount']), ENT_QUOTES, 'UTF-8');?>
" class="cm-value-decimal"/>

                                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->getValue('_product')['subtotal'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->getValue('gift_price') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"), $_smarty_tpl);?>

                                <tr>
                                    <td>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['product']), ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php if ($_smarty_tpl->getValue('_product')['product_options']) {?>
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_options'],'fields_prefix'=>"gift_cert_data[products][".((string)$_smarty_tpl->getValue('key_cert_prod'))."][product_options]"), (int) 0, $_smarty_current_dir);
?>
                                        <?php }?>
                                    </td>
                                    <td class="ty-center">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['price']), (int) 0, $_smarty_current_dir);
?></td>
                                    <td class="ty-center ty-nowrap">
                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gift')['products'][$_smarty_tpl->getValue('key_cert_prod')]['amount']), ENT_QUOTES, 'UTF-8');?>
</td>
                                    <td class="ty-right ty-nowrap">
                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"item_price*amount",'item_price'=>(($tmp = $_smarty_tpl->getValue('_product')['price'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"subtotal",'amount'=>$_smarty_tpl->getValue('gift')['products'][$_smarty_tpl->getValue('key_cert_prod')]['amount']), $_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"subtotal + gift_",'subtotal'=>(($tmp = $_smarty_tpl->getValue('subtotal') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->getValue('gift_price') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"), $_smarty_tpl);?>

                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('subtotal')), (int) 0, $_smarty_current_dir);
?></td>
                                </tr>
                            <?php }?>

                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </table>
                </div>

                <div class="ty-control-group product-list-field ty-float-right">
                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price_summary", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                    <span class="ty-control-group__item">
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->getValue('gift_price') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->getValue('gift')['amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"), $_smarty_tpl);?>

                        <strong><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift_price')), (int) 0, $_smarty_current_dir);
?></strong>
                    </span>
                </div>
            </div>
            <?php }?>

            <div class="ty-product-block__button">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"big",'but_name'=>"dispatch[gift_certificates.add]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    </div>
</form>
</div>

<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('iteration')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
