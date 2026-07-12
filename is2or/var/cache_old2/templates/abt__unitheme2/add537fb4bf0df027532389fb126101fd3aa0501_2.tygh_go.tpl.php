<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:08
  from 'tygh:buttons/go.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa8d30a23_40045452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add537fb4bf0df027532389fb126101fd3aa0501' => 
    array (
      0 => 'buttons/go.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa8d30a23_40045452 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/buttons';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><button title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('alt')), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
" type="submit"><?php if ($_smarty_tpl->getValue('but_text')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-dir ty-btn-go__icon ".((string)$_smarty_tpl->getValue('but_icon_meta'))), $_smarty_tpl);
}?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/go.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/go.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('alt')), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
" type="submit"><?php if ($_smarty_tpl->getValue('but_text')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-dir ty-btn-go__icon ".((string)$_smarty_tpl->getValue('but_icon_meta'))), $_smarty_tpl);
}?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
