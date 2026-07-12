<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:44
  from 'backend:common/image.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a04778807_07940727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '214872228a715caaf999a66bb68206b860431d7a' => 
    array (
      0 => 'common/image.tpl',
      1 => 1767831032,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a04778807_07940727 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('icon_path', ((defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::ADMIN_PANEL")) ? "common/icon_deprecated.tpl" : "common/icon.tpl", false, NULL);
$_smarty_tpl->assign('image_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('image'),$_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height')), false, NULL);
$_smarty_tpl->assign('show_detailed_link', (($tmp = $_smarty_tpl->getValue('show_detailed_link') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_attributes', array("src"=>(($tmp = $_smarty_tpl->getValue('image_data')['image_path'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->getValue('image_data')['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->getValue('image_data')['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"alt"=>(($tmp = $_smarty_tpl->getValue('image_data')['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"title"=>(($tmp = $_smarty_tpl->getValue('image_data')['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>(($tmp = $_smarty_tpl->getValue('image_css_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), false, NULL);
if ($_smarty_tpl->getValue('image_id')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["id"] = "image_".((string)$_smarty_tpl->getValue('image_id'));
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_data')['generate_image']) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["class"] = "spinner ".((string)$_smarty_tpl->getValue('image_attributes')['class']);
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->getValue('image_data')['image_path'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_detailed_link') && ($_smarty_tpl->getValue('image') || $_smarty_tpl->getValue('href'))) {?><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_css_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('href') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image')['image_path'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->getValue('href') || $_smarty_tpl->getValue('blank')) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->getValue('image_data')['image_path']) {?><img <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes'));?>
 /><?php } else { ?><div class="no-image <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('no_image_css_class')), ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image_height') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image_width') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>$_smarty_tpl->getValue('icon_path'),'class'=>"glyph-image",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</div><?php }
if ($_smarty_tpl->getValue('show_detailed_link') && ($_smarty_tpl->getValue('image') || $_smarty_tpl->getValue('href'))) {?></a><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:common/image.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"backend:common/image.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('icon_path', ((defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::ADMIN_PANEL")) ? "common/icon_deprecated.tpl" : "common/icon.tpl", false, NULL);
$_smarty_tpl->assign('image_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('image'),$_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height')), false, NULL);
$_smarty_tpl->assign('show_detailed_link', (($tmp = $_smarty_tpl->getValue('show_detailed_link') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_attributes', array("src"=>(($tmp = $_smarty_tpl->getValue('image_data')['image_path'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->getValue('image_data')['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->getValue('image_data')['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"alt"=>(($tmp = $_smarty_tpl->getValue('image_data')['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"title"=>(($tmp = $_smarty_tpl->getValue('image_data')['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>(($tmp = $_smarty_tpl->getValue('image_css_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), false, NULL);
if ($_smarty_tpl->getValue('image_id')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["id"] = "image_".((string)$_smarty_tpl->getValue('image_id'));
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_data')['generate_image']) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["class"] = "spinner ".((string)$_smarty_tpl->getValue('image_attributes')['class']);
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->getValue('image_data')['image_path'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_detailed_link') && ($_smarty_tpl->getValue('image') || $_smarty_tpl->getValue('href'))) {?><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_css_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('href') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image')['image_path'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->getValue('href') || $_smarty_tpl->getValue('blank')) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->getValue('image_data')['image_path']) {?><img <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes'));?>
 /><?php } else { ?><div class="no-image <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('no_image_css_class')), ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image_height') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image_width') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>$_smarty_tpl->getValue('icon_path'),'class'=>"glyph-image",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</div><?php }
if ($_smarty_tpl->getValue('show_detailed_link') && ($_smarty_tpl->getValue('image') || $_smarty_tpl->getValue('href'))) {?></a><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
