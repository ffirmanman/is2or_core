<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:00
  from 'tygh:buttons/sticky_add_to_cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ecee94f1_81084299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8114001c5bf96d7774555ffdd58f4ee8ecc8105a' => 
    array (
      0 => 'buttons/sticky_add_to_cart.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/product_templates/components/product_rating.tpl' => 2,
    'tygh:blocks/product_templates/components/product_price.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
  ),
))) {
function content_69ada1ecee94f1_81084299 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('but_role', 'act', false, NULL);
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>

<div class="ut2-pb__sticky-add-to-cart <?php if ($_smarty_tpl->getValue('sticky_add_to_cart_position')) {?>position-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticky_add_to_cart_position')), ENT_QUOTES, 'UTF-8');
}?> cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" id="ut2_pb__sticky_add_to_cart">
    <div class="ut2-pb__sticky-add-to-cart_block">
        <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
        <div class="ut2-pb__sticky-add-to-cart_product">
            <div class="ut2-pb__sticky-add-to-cart_product-img">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div class="ut2-pb__sticky-add-to-cart_product-content">
                <div class="ut2-pb__sticky-add-to-cart_product-name"><?php echo (($tmp = $_smarty_tpl->getValue('product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp);?>
</div>

                <div class="ut2-pb__sticky-add-to-cart_product-rating">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            </div>
        </div>
        <?php }?>

        <div class="ut2-pb__sticky-add-to-cart_price">
            <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('list_discount', false, false, NULL);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pp_compact_view'=>true), (int) 0, $_smarty_current_dir);
?>
        </div>

        <div class="ut2-pb__sticky-add-to-cart_list-buttons" id="abt__service_buttons_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">

            <?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button')) {?>
            <div class="cm-external-click" data-ca-external-click-id="button_wishlist_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_id')),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>"text",'hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false), (int) 0, $_smarty_current_dir);
?>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button')) {?>
            <div>
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false,'compare_but_href'=>null,'product_id'=>$_smarty_tpl->getValue('obj_id')), (int) 0, $_smarty_current_dir);
?>
            </div>
            <?php }?>

        <!--abt__service_buttons_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="cm-external-click" data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_but_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'but_target_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'but_meta'=>$_smarty_tpl->getValue('add_to_cart_meta'),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'show_price_in_button'=>false), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
    <!--ut2_pb__sticky_add_to_cart--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/sticky_add_to_cart.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/sticky_add_to_cart.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('but_role', 'act', false, NULL);
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>

<div class="ut2-pb__sticky-add-to-cart <?php if ($_smarty_tpl->getValue('sticky_add_to_cart_position')) {?>position-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticky_add_to_cart_position')), ENT_QUOTES, 'UTF-8');
}?> cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" id="ut2_pb__sticky_add_to_cart">
    <div class="ut2-pb__sticky-add-to-cart_block">
        <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
        <div class="ut2-pb__sticky-add-to-cart_product">
            <div class="ut2-pb__sticky-add-to-cart_product-img">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div class="ut2-pb__sticky-add-to-cart_product-content">
                <div class="ut2-pb__sticky-add-to-cart_product-name"><?php echo (($tmp = $_smarty_tpl->getValue('product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp);?>
</div>

                <div class="ut2-pb__sticky-add-to-cart_product-rating">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            </div>
        </div>
        <?php }?>

        <div class="ut2-pb__sticky-add-to-cart_price">
            <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_smarty_tpl->assign('list_discount', false, false, NULL);?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pp_compact_view'=>true), (int) 0, $_smarty_current_dir);
?>
        </div>

        <div class="ut2-pb__sticky-add-to-cart_list-buttons" id="abt__service_buttons_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">

            <?php if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button')) {?>
            <div class="cm-external-click" data-ca-external-click-id="button_wishlist_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_id')),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>"text",'hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false), (int) 0, $_smarty_current_dir);
?>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button')) {?>
            <div>
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false,'compare_but_href'=>null,'product_id'=>$_smarty_tpl->getValue('obj_id')), (int) 0, $_smarty_current_dir);
?>
            </div>
            <?php }?>

        <!--abt__service_buttons_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="cm-external-click" data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_but_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'but_target_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'but_meta'=>$_smarty_tpl->getValue('add_to_cart_meta'),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'show_price_in_button'=>false), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
    <!--ut2_pb__sticky_add_to_cart--></div>
<?php }
}
}
