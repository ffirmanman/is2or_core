<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:24
  from 'tygh:addons/ab__video_gallery/hooks/common/image.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2101f69f3_86664883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26fba10a3454839bf649e702fb97823b91dd9efd' => 
    array (
      0 => 'addons/ab__video_gallery/hooks/common/image.pre.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb2101f69f3_86664883 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/hooks/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('ab__vg_gallery_image')) {?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->getValue('image_width');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->getValue('image_height');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/common/image.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/hooks/common/image.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('ab__vg_gallery_image')) {?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->getValue('image_width');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->getValue('image_height');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);
}
}
}
}
