<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:51
  from 'tygh:addons/ab__stickers/hooks/products/product_data.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94ffe41885_16629976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5770aa563dfab216ae7747d4d16f463839b8cc75' => 
    array (
      0 => 'addons/ab__stickers/hooks/products/product_data.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl' => 2,
  ),
))) {
function content_69ad94ffe41885_16629976 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('display_places', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_display_places')(array('hook_themes'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO'))), false, NULL);?>

<?php if ($_smarty_tpl->getValue('display_places')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->getValue('display_places')), (int) 0, $_smarty_current_dir);
}?>

<?php if (!$_smarty_tpl->getValue('display_places')['product_labels']) {?>
    <?php $_smarty_tpl->assign('product_id', 0, false, NULL);?>

    <?php if ($_smarty_tpl->getValue('product')['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_REQUEST['product_id'], false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list') && $_smarty_tpl->getValue('product_id')) {?>
        <?php if ($_smarty_tpl->getValue('obj_prefix')) {?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix'))."_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('product_id')), false, NULL);?>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('real_capture_name', "product_labels_".((string)$_smarty_tpl->getValue('obj_real_id')), false, NULL);?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('real_capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/products/product_data.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/hooks/products/product_data.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('display_places', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_display_places')(array('hook_themes'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO'))), false, NULL);?>

<?php if ($_smarty_tpl->getValue('display_places')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->getValue('display_places')), (int) 0, $_smarty_current_dir);
}?>

<?php if (!$_smarty_tpl->getValue('display_places')['product_labels']) {?>
    <?php $_smarty_tpl->assign('product_id', 0, false, NULL);?>

    <?php if ($_smarty_tpl->getValue('product')['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_REQUEST['product_id'], false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list') && $_smarty_tpl->getValue('product_id')) {?>
        <?php if ($_smarty_tpl->getValue('obj_prefix')) {?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix'))."_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('product_id')), false, NULL);?>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('real_capture_name', "product_labels_".((string)$_smarty_tpl->getValue('obj_real_id')), false, NULL);?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('real_capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
