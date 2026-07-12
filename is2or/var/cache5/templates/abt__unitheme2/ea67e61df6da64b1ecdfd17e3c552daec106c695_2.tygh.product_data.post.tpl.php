<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/products/product_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5e59276_61723043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea67e61df6da64b1ecdfd17e3c552daec106c695' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/products/product_data.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl' => 2,
  ),
),false)) {
function content_6835b9f5e59276_61723043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('display_places', fn_ab__stickers_get_display_places(array('hook_themes'=>smarty_modifier_enum('YesNo::NO'))));?>

<?php if ($_smarty_tpl->tpl_vars['display_places']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->tpl_vars['display_places']->value), 0, false);
}?>

<?php if (!$_smarty_tpl->tpl_vars['display_places']->value['product_labels']) {?>
    <?php $_smarty_tpl->_assignInScope('product_id', 0);?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_REQUEST['product_id']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_allow_add_common_products_to_cart_list']->value && $_smarty_tpl->tpl_vars['product_id']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('real_capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['real_capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('display_places', fn_ab__stickers_get_display_places(array('hook_themes'=>smarty_modifier_enum('YesNo::NO'))));?>

<?php if ($_smarty_tpl->tpl_vars['display_places']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->tpl_vars['display_places']->value), 0, true);
}?>

<?php if (!$_smarty_tpl->tpl_vars['display_places']->value['product_labels']) {?>
    <?php $_smarty_tpl->_assignInScope('product_id', 0);?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_REQUEST['product_id']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_allow_add_common_products_to_cart_list']->value && $_smarty_tpl->tpl_vars['product_id']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('real_capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['real_capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
