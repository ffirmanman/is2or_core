<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f6a7ae05_65136951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba4d21504cf7dd6a3b967f8db5132f4837b86cea' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/index/scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f6a7ae05_65136951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>(function (_, $) {const extend_obj = {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars((string) fn_ab__stickers_sticker_is_cache_allowed(), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars((string) fn_get_storage_data("cache_id"), ENT_QUOTES, 'UTF-8');?>
',},settings: {abt__ut2: {less: <?php echo json_encode(fn_ab__stickers_get_unitheme_less_settings(true));?>
}}}};if (_?.ab__stickers?.functions) {extend_obj.ab__stickers.functions = _.ab__stickers.functions;}$.extend(_, extend_obj);})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/func.js"),$_smarty_tpl);
$_smarty_tpl->_assignInScope('theme_name', fn_get_theme_path('[theme]'));
if ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__unitheme2') {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/abt__ut2.js"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__youpitheme') {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/abt__yt.js"),$_smarty_tpl);
} else {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/responsive.js"),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['status'] === smarty_modifier_enum('ObjectStatuses::ACTIVE')) {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/ab__dotd.js"),$_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>(function (_, $) {const extend_obj = {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars((string) fn_ab__stickers_sticker_is_cache_allowed(), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars((string) fn_get_storage_data("cache_id"), ENT_QUOTES, 'UTF-8');?>
',},settings: {abt__ut2: {less: <?php echo json_encode(fn_ab__stickers_get_unitheme_less_settings(true));?>
}}}};if (_?.ab__stickers?.functions) {extend_obj.ab__stickers.functions = _.ab__stickers.functions;}$.extend(_, extend_obj);})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/func.js"),$_smarty_tpl);
$_smarty_tpl->_assignInScope('theme_name', fn_get_theme_path('[theme]'));
if ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__unitheme2') {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/abt__ut2.js"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__youpitheme') {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/abt__yt.js"),$_smarty_tpl);
} else {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/responsive.js"),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['status'] === smarty_modifier_enum('ObjectStatuses::ACTIVE')) {
echo smarty_function_script(array('src'=>"js/addons/ab__stickers/ab__dotd.js"),$_smarty_tpl);
}
}
}
}
