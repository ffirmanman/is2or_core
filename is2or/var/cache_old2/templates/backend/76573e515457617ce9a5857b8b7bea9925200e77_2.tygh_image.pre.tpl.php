<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:46
  from 'tygh:addons/hidpi/hooks/common/image.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ae8107f4_39064853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76573e515457617ce9a5857b8b7bea9925200e77' => 
    array (
      0 => 'addons/hidpi/hooks/common/image.pre.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ae8107f4_39064853 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/hidpi/hooks/common';
if ($_smarty_tpl->getValue('image_data')['is_thumbnail']) {?>
    <?php $_smarty_tpl->assign('width', $_smarty_tpl->getValue('image_data')['width']*2, false, NULL);?>
    <?php $_smarty_tpl->assign('height', $_smarty_tpl->getValue('image_data')['height']*2, false, NULL);?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('image'),$_smarty_tpl->getValue('width'),$_smarty_tpl->getValue('height')), false, NULL);
} elseif ($_smarty_tpl->getValue('image')['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getValue('image_data'), false, NULL);?>
    <?php $_smarty_tpl->assign('image_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('image'),$_smarty_tpl->getValue('image')['image_x'],$_smarty_tpl->getValue('image')['image_y']), false, 2);
} elseif ($_smarty_tpl->getValue('image')['original_image_path']) {?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getValue('image'), false, NULL);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_data2x') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->getValue('image')['original_image_path'];
$_smarty_tpl->assign('image_data2x', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_data2x')['image_path']) {?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["srcset"] = ((string)$_smarty_tpl->getValue('image_data2x')['image_path'])." 2x";
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, 2);
}
}
}
