<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:58
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/cart_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21ad7c176_36719390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb1ea78b88dee6db22c99a03d27cc65a600dcdc' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/cart_content.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 4,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/proceed_to_checkout.tpl' => 2,
  ),
),false)) {
function content_682fe21ad7c176_36719390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cart','cart','cart_items','cart_is_empty','total_items','items','for','view_cart','checkout','cart','cart','cart_items','cart_is_empty','total_items','items','for','view_cart','checkout'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('dropdown_id', $_smarty_tpl->tpl_vars['block']->value['snapping_id']);
$_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-dropdown-box" id="cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" class="ty-hand" id="cart_icon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:dropdown_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_SESSION['cart']['amount']) {?>
                    <i class="ut2-icon-use_icon_cart filled"><span class="ty-minicart-count"><?php echo htmlspecialchars((string) $_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
</span></i><span><?php echo $_smarty_tpl->__("cart");?>
</span>
                <?php } else { ?>
                    <i class="ut2-icon-use_icon_cart empty"><span class="ty-minicart-count ty-hand empty">0</span></i><span><?php echo $_smarty_tpl->__("cart");?>
</span>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--cart_icon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == smarty_modifier_enum("YesNo::YES")) {?>cm-cart-content-delete<?php }?>" id="cart_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->__("cart_items");?>
: <div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
                        <div class="ty-cart-items">
                            <?php if ($_SESSION['cart']['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:cart_status"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_assignInScope('_cart_products', array_reverse($_SESSION['cart']['products'],true));?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item">
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'lazy_load'=>false), 0, true);
?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, true);
?>
                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == smarty_modifier_enum("YesNo::YES")) {?>
                                                        <div class="ty-cart-items__list-item-tools">
                                                            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['force_items_deletion']->value) && !$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                                                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_content*,cart_icon*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                            <?php }?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</div>
                            <?php }?>
                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons'] == smarty_modifier_enum("YesNo::YES")) {?>
                        <div class="cm-cart-buttons buttons-container <?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_subtotal"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_subtotal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_SESSION['cart']['amount'] > 1 || $_smarty_tpl->tpl_vars['product']->value['extra']['buy_together']) {?>
                            <p class="cart_subtotal"><?php echo $_smarty_tpl->__("total_items");?>
:&nbsp;<span class="ty-float-right"><?php echo htmlspecialchars((string) $_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;&nbsp;<strong><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), 0, true);
?></strong></span><br>&nbsp;</p>
                            <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_subtotal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__outline"><?php echo $_smarty_tpl->__("view_cart");?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect'] != smarty_modifier_enum("YesNo::YES")) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("checkout")), 0, false);
?>
                            <?php }?>
                        </div>
                    <?php }?>

                <!--cart_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('dropdown_id', $_smarty_tpl->tpl_vars['block']->value['snapping_id']);
$_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-dropdown-box" id="cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" class="ty-hand" id="cart_icon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:dropdown_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_SESSION['cart']['amount']) {?>
                    <i class="ut2-icon-use_icon_cart filled"><span class="ty-minicart-count"><?php echo htmlspecialchars((string) $_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
</span></i><span><?php echo $_smarty_tpl->__("cart");?>
</span>
                <?php } else { ?>
                    <i class="ut2-icon-use_icon_cart empty"><span class="ty-minicart-count ty-hand empty">0</span></i><span><?php echo $_smarty_tpl->__("cart");?>
</span>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--cart_icon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == smarty_modifier_enum("YesNo::YES")) {?>cm-cart-content-delete<?php }?>" id="cart_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->__("cart_items");?>
: <div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
                        <div class="ty-cart-items">
                            <?php if ($_SESSION['cart']['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:cart_status"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_assignInScope('_cart_products', array_reverse($_SESSION['cart']['products'],true));?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item">
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'lazy_load'=>false), 0, true);
?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, true);
?>
                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == smarty_modifier_enum("YesNo::YES")) {?>
                                                        <div class="ty-cart-items__list-item-tools">
                                                            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['force_items_deletion']->value) && !$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                                                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_content*,cart_icon*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                            <?php }?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</div>
                            <?php }?>
                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons'] == smarty_modifier_enum("YesNo::YES")) {?>
                        <div class="cm-cart-buttons buttons-container <?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_subtotal"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_subtotal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_SESSION['cart']['amount'] > 1 || $_smarty_tpl->tpl_vars['product']->value['extra']['buy_together']) {?>
                            <p class="cart_subtotal"><?php echo $_smarty_tpl->__("total_items");?>
:&nbsp;<span class="ty-float-right"><?php echo htmlspecialchars((string) $_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;&nbsp;<strong><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), 0, true);
?></strong></span><br>&nbsp;</p>
                            <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_subtotal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__outline"><?php echo $_smarty_tpl->__("view_cart");?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect'] != smarty_modifier_enum("YesNo::YES")) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("checkout")), 0, true);
?>
                            <?php }?>
                        </div>
                    <?php }?>

                <!--cart_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
