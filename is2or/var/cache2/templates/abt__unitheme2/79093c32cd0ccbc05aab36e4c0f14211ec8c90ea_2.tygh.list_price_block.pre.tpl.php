<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/products/list_price_block.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21ba36754_23618106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79093c32cd0ccbc05aab36e4c0f14211ec8c90ea' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/products/list_price_block.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl' => 2,
  ),
),false)) {
function content_682fe21ba36754_23618106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('display_places', fn_ab__stickers_get_display_places(array('places'=>smarty_modifier_enum('Addons\Ab_stickers\StickerPlaces::PRICE_BEFORE'),'hook_themes'=>smarty_modifier_enum('YesNo::YES'))));?>

<?php if ($_smarty_tpl->tpl_vars['display_places']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->tpl_vars['display_places']->value,'is_hook'=>true), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/products/list_price_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/products/list_price_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('display_places', fn_ab__stickers_get_display_places(array('places'=>smarty_modifier_enum('Addons\Ab_stickers\StickerPlaces::PRICE_BEFORE'),'hook_themes'=>smarty_modifier_enum('YesNo::YES'))));?>

<?php if ($_smarty_tpl->tpl_vars['display_places']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->tpl_vars['display_places']->value,'is_hook'=>true), 0, true);
}
}
}
}
