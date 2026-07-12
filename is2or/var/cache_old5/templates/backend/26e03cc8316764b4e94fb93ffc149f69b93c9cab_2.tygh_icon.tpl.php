<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:common/icon.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed24fc553_50163527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26e03cc8316764b4e94fb93ffc149f69b93c9cab' => 
    array (
      0 => 'common/icon.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/icons/get_fallback_source.tpl' => 1,
  ),
))) {
function content_6a133ed24fc553_50163527 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
$_smarty_tpl->renderSubTemplate("tygh:components/icons/get_fallback_source.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>$_smarty_tpl->getValue('class'),'source'=>$_smarty_tpl->getValue('source')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('show_icon', ($_smarty_tpl->getValue('show_icon') === false) ? false : (($tmp = $_smarty_tpl->getValue('show_icon') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('show_icon') && $_smarty_tpl->getValue('source')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "icon_process", null, null);
$_smarty_tpl->assign('accessibility_label', (($tmp = $_smarty_tpl->getValue('accessibility_label') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('icon_text') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('render', (($tmp = $_smarty_tpl->getValue('render') ?? null)===null||$tmp==='' ? "inline" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('icon_path', '', false, NULL);
$_smarty_tpl->assign('type', '', false, NULL);
$_smarty_tpl->assign('svg_open_tag', "<svg ", false, NULL);
$_smarty_tpl->assign('svg_close_tag', "</svg>", false, NULL);
$_smarty_tpl->assign('addons_path', "addons/", false, NULL);
$_smarty_tpl->assign('available_tones', array("base","muted","warning","error","interactive","info","success","primary","text_warning","text_error","text_info","text_success"), false, NULL);
$_smarty_tpl->assign('tone', ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('tone'),$_smarty_tpl->getValue('available_tones'))) ? $_smarty_tpl->getValue('tone') : false, false, NULL);
$_smarty_tpl->assign('is_source_is_type', (!($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('source'),$_smarty_tpl->getValue('svg_open_tag'))) || !($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('source'),$_smarty_tpl->getValue('svg_close_tag')))), false, NULL);
$_smarty_tpl->assign('config', \Tygh\Registry::get('config'), false, NULL);
$_smarty_tpl->assign('design_backend', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_rel_dir')($_smarty_tpl->getValue('config')['dir']['design_backend']), false, NULL);
if ($_smarty_tpl->getValue('is_source_is_type')) {
$_smarty_tpl->assign('type', $_smarty_tpl->getValue('source'), false, NULL);
$_smarty_tpl->assign('icon_path', (substr((string) $_smarty_tpl->getValue('type'), (int) 0, (int) (mb_strlen((string) $_smarty_tpl->getValue('addons_path'), 'UTF-8'))) === $_smarty_tpl->getValue('addons_path')) ? $_smarty_tpl->getValue('type') : "icons/".((string)$_smarty_tpl->getValue('type')).".svg", false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('file_exists')(((string)$_smarty_tpl->getValue('design_backend'))."templates/".((string)$_smarty_tpl->getValue('icon_path')))) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>((string)$_smarty_tpl->getValue('design_backend'))."templates/".((string)$_smarty_tpl->getValue('icon_path')),'assign'=>"source"), $_smarty_tpl);
} else {
$_smarty_tpl->assign('show_icon', false, false, NULL);
}
}
if ($_smarty_tpl->getValue('render') !== "img_data") {
$_smarty_tpl->assign('source', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('source')," xmlns=\"http://www.w3.org/2000/svg\"",''), false, NULL);
$_smarty_tpl->assign('source', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('source'),"<svg ","<svg class=\"cs-icon__svg\" focusable=\"false\" aria-hidden=\"true\" "), false, NULL);
if ($_smarty_tpl->getValue('color')) {
$_smarty_tpl->assign('source', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('source'),"<svg ","<svg fill=\"".((string)$_smarty_tpl->getValue('color'))."\" "), false, NULL);
} elseif ($_smarty_tpl->getValue('color') !== false) {
$_smarty_tpl->assign('source', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('source'),"<svg ","<svg fill=\"currentColor\" "), false, NULL);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('show_icon')) {?><span <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="cs-icon<?php if ($_smarty_tpl->getValue('type')) {?> cs-icon--type-<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('type'),"_","-")), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('tone')) {?> cs-icon--tone-<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('tone'),"_","-")), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('tone') || $_smarty_tpl->getValue('color')) {?> cs-icon--apply-color<?php }
if ($_smarty_tpl->getValue('class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('data')) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'data_value', false, 'data_name');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data_name')->value => $_smarty_tpl->getVariable('data_value')->value) {
$foreach11DoElse = false;
echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_value')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>><span class="cs-icon__hidden-accessible"><?php if ($_smarty_tpl->getValue('accessibility_label')) {
echo $_smarty_tpl->getValue('accessibility_label');
}?></span><?php if ($_smarty_tpl->getValue('render') === "img_data") {?><img class="cs-icon__img" src="data:image/svg+xml;utf8,<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('source'),"\"","'");?>
" alt="" aria-hidden="true"><?php } else {
echo $_smarty_tpl->getValue('source');
}?></span><?php }
}
}
}
