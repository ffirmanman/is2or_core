<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:24
  from 'tygh:buttons/magnifier.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb21080e410_40969388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53290e3a1b1bd918621c104eb675a215abbb745e' => 
    array (
      0 => 'buttons/magnifier.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb21080e410_40969388 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/buttons';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><button title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('alt')), ENT_QUOTES, 'UTF-8');?>
" class="ty-search-magnifier" type="submit"><i class="ut2-icon-search"></i></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
" /><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/magnifier.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/magnifier.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('alt')), ENT_QUOTES, 'UTF-8');?>
" class="ty-search-magnifier" type="submit"><i class="ut2-icon-search"></i></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
" /><?php }
}
}
