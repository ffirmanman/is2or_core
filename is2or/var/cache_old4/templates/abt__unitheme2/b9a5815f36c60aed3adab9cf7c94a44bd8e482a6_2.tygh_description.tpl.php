<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:blocks/product_tabs/description.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00b46cd5_87266029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9a5815f36c60aed3adab9cf7c94a44bd8e482a6' => 
    array (
      0 => 'blocks/product_tabs/description.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a00b46cd5_87266029 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks/product_tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['full_description']) {?>
    <div <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:full_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->getValue('product')['short_description']) {?>
    <div <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:short_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['short_description'];?>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/description.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_tabs/description.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['full_description']) {?>
    <div <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:full_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->getValue('product')['short_description']) {?>
    <div <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:short_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['short_description'];?>
</div>
<?php }
}
}
}
