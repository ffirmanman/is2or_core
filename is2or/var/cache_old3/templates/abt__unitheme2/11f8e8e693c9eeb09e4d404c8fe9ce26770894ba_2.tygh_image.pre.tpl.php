<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:24
  from 'tygh:addons/ab__lazy_load/hooks/common/image.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2102227f0_17625673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f8e8e693c9eeb09e4d404c8fe9ce26770894ba' => 
    array (
      0 => 'addons/ab__lazy_load/hooks/common/image.pre.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__lazy_load/components/disable_lazy_load.tpl' => 2,
  ),
))) {
function content_69afb2102227f0_17625673 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__lazy_load/hooks/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__lazy_load/components/disable_lazy_load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST") && ((($tmp = $_smarty_tpl->getValue('lazy_load') ?? null)===null||$tmp==='' ? false ?? null : $tmp) || $_smarty_tpl->getValue('ab__ll')['enable']) && !$_smarty_tpl->getValue('diable_lazy_load')) {?>
    <?php $_smarty_tpl->assign('lazy_load', true, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["src"] = $_smarty_tpl->getValue('ab__ll')['placeholders']->get_placeholer($_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height'));
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_smarty_tpl->assign('class', ($_smarty_tpl->getValue('class')).(" lazyload"), false, 2);?>

    
    <?php if ($_smarty_tpl->getValue('image_additional_attrs')['srcset'] || $_smarty_tpl->getValue('image_additional_attrs')["data-srcset"]) {?>
        <?php if ($_smarty_tpl->getValue('image_additional_attrs')['srcset']) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-srcset"] = $_smarty_tpl->getValue('image_additional_attrs')['srcset'];
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
        <?php }?>
        <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['srcset'] = ((string)$_smarty_tpl->getValue('ab__ll')['placeholders']->get_placeholer($_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height'),true));
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__lazy_load/hooks/common/image.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__lazy_load/hooks/common/image.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__lazy_load/components/disable_lazy_load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST") && ((($tmp = $_smarty_tpl->getValue('lazy_load') ?? null)===null||$tmp==='' ? false ?? null : $tmp) || $_smarty_tpl->getValue('ab__ll')['enable']) && !$_smarty_tpl->getValue('diable_lazy_load')) {?>
    <?php $_smarty_tpl->assign('lazy_load', true, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["src"] = $_smarty_tpl->getValue('ab__ll')['placeholders']->get_placeholer($_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height'));
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_smarty_tpl->assign('class', ($_smarty_tpl->getValue('class')).(" lazyload"), false, 2);?>

    
    <?php if ($_smarty_tpl->getValue('image_additional_attrs')['srcset'] || $_smarty_tpl->getValue('image_additional_attrs')["data-srcset"]) {?>
        <?php if ($_smarty_tpl->getValue('image_additional_attrs')['srcset']) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-srcset"] = $_smarty_tpl->getValue('image_additional_attrs')['srcset'];
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
        <?php }?>
        <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['srcset'] = ((string)$_smarty_tpl->getValue('ab__ll')['placeholders']->get_placeholer($_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height'),true));
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php }
}
}
}
}
