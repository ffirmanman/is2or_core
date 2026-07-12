<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:45:23
  from 'tygh:blocks/products/products_small_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afaff3282743_87351968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c32ba5b77d450a692142029fef7ab7d2cb00a0' => 
    array (
      0 => 'blocks/products/products_small_items.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/small_items.tpl' => 2,
  ),
))) {
function content_69afaff3282743_87351968 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('_show_name', "true", false, NULL);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('items'),'obj_prefix'=>((string)$_smarty_tpl->getValue('block')['block_id'])."000",'item_number'=>$_smarty_tpl->getValue('block')['properties']['item_number'],'show_name'=>$_smarty_tpl->getValue('_show_name'),'show_trunc_name'=>$_smarty_tpl->getValue('_show_trunc_name'),'show_price'=>false,'show_rating'=>true,'show_total_product_reviews'=>$_smarty_tpl->getValue('show_total_product_reviews'),'show_add_to_cart'=>$_smarty_tpl->getValue('_show_add_to_cart'),'show_quick_view_for_options'=>$_smarty_tpl->getValue('show_quick_view_for_options'),'show_add_to_cart_secondary'=>$_smarty_tpl->getValue('show_add_to_cart_secondary'),'show_list_buttons'=>((($tmp = $_smarty_tpl->getValue('show_list_buttons') ?? null)===null||$tmp==='' ? false ?? null : $tmp)),'show_features'=>$_smarty_tpl->getValue('show_features'),'add_to_cart_meta'=>"text-button-add",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_small_items.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/products/products_small_items.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('_show_name', "true", false, NULL);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('items'),'obj_prefix'=>((string)$_smarty_tpl->getValue('block')['block_id'])."000",'item_number'=>$_smarty_tpl->getValue('block')['properties']['item_number'],'show_name'=>$_smarty_tpl->getValue('_show_name'),'show_trunc_name'=>$_smarty_tpl->getValue('_show_trunc_name'),'show_price'=>false,'show_rating'=>true,'show_total_product_reviews'=>$_smarty_tpl->getValue('show_total_product_reviews'),'show_add_to_cart'=>$_smarty_tpl->getValue('_show_add_to_cart'),'show_quick_view_for_options'=>$_smarty_tpl->getValue('show_quick_view_for_options'),'show_add_to_cart_secondary'=>$_smarty_tpl->getValue('show_add_to_cart_secondary'),'show_list_buttons'=>((($tmp = $_smarty_tpl->getValue('show_list_buttons') ?? null)===null||$tmp==='' ? false ?? null : $tmp)),'show_features'=>$_smarty_tpl->getValue('show_features'),'add_to_cart_meta'=>"text-button-add",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
}
}
}
