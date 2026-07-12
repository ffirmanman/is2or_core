<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:21
  from 'tygh:addons/cities/hooks/profiles/profile_fields.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c4f423e9_21339264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee6ddd1a954fa43a0e51248f24ba2f1a6bab601' => 
    array (
      0 => 'addons/cities/hooks/profiles/profile_fields.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb53c4f423e9_21339264 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cities/hooks/profiles';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('type', substr((string) $_smarty_tpl->getValue('field')['field_name'], (int) 2), false, NULL);?>

<input type="text" style="display:none;" autocomplete="on | off" />
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cities/hooks/profiles/profile_fields.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cities/hooks/profiles/profile_fields.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('type', substr((string) $_smarty_tpl->getValue('field')['field_name'], (int) 2), false, NULL);?>

<input type="text" style="display:none;" autocomplete="on | off" />
<?php }
}
}
