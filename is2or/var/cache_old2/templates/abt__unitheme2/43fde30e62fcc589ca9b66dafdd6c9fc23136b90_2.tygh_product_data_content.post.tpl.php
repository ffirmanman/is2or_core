<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/master_products/hooks/products/product_data_content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa96de858_03645372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43fde30e62fcc589ca9b66dafdd6c9fc23136b90' => 
    array (
      0 => 'addons/master_products/hooks/products/product_data_content.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa96de858_03645372 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('master_products.view_product_offers','master_products.view_product_offers','master_products.view_product_offers','master_products.view_product_offers'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('product')['company_id'] && $_smarty_tpl->getValue('show_view_offers_btn') && !$_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list') && (!$_smarty_tpl->getValue('details_page') || $_smarty_tpl->getValue('quick_view'))) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ty-product-offers-btn" id="view_product_offers_btn_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn__offers ty-btn__primary ty-btn__big ty-btn__add-to-cart ty-btn"><i class="ut2-icon-use_icon_cart cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.view_product_offers", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></i><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.view_product_offers", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></a>
        <!--view_product_offers_btn_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->getValue('no_capture')) {?>
        <?php $_smarty_tpl->assign('capture_name', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_data_content.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/product_data_content.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('product')['company_id'] && $_smarty_tpl->getValue('show_view_offers_btn') && !$_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list') && (!$_smarty_tpl->getValue('details_page') || $_smarty_tpl->getValue('quick_view'))) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ty-product-offers-btn" id="view_product_offers_btn_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn__offers ty-btn__primary ty-btn__big ty-btn__add-to-cart ty-btn"><i class="ut2-icon-use_icon_cart cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.view_product_offers", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></i><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.view_product_offers", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></a>
        <!--view_product_offers_btn_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->getValue('no_capture')) {?>
        <?php $_smarty_tpl->assign('capture_name', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

    <?php }
}
}
}
}
