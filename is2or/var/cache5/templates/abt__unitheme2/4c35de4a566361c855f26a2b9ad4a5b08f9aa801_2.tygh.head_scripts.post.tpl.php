<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/index/head_scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5074495_66440300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c35de4a566361c855f26a2b9ad4a5b08f9aa801' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/index/head_scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f5074495_66440300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('timestamp', fn_ab__p_get_css_timestamp());
$_smarty_tpl->_assignInScope('links', fn_ab__p_get_links());?>

<?php if ($_smarty_tpl->tpl_vars['links']->value && $_smarty_tpl->tpl_vars['timestamp']->value) {?>
    <?php $_smarty_tpl->_assignInScope('formats', fn_get_schema('ab__preload','formats'));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
        <link rel="preload" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['link']->value['use_timestamp'] == 'Y') {?>?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['type']) {?> as="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['type'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['mime_type']) {?> type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['mime_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> crossorigin="anonymous">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/index/head_scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/index/head_scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('timestamp', fn_ab__p_get_css_timestamp());
$_smarty_tpl->_assignInScope('links', fn_ab__p_get_links());?>

<?php if ($_smarty_tpl->tpl_vars['links']->value && $_smarty_tpl->tpl_vars['timestamp']->value) {?>
    <?php $_smarty_tpl->_assignInScope('formats', fn_get_schema('ab__preload','formats'));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
        <link rel="preload" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['link']->value['use_timestamp'] == 'Y') {?>?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['type']) {?> as="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['type'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['mime_type']) {?> type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['link']->value['format']]['mime_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> crossorigin="anonymous">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
