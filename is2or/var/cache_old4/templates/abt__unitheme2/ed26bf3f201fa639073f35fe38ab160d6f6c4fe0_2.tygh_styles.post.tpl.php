<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:addons/is2or_customer_coordinates/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fbc0e9a4_14886738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed26bf3f201fa639073f35fe38ab160d6f6c4fe0' => 
    array (
      0 => 'addons/is2or_customer_coordinates/hooks/index/styles.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fbc0e9a4_14886738 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_customer_coordinates/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><style>
.customer-map-selector .object-container {
    padding: 0 !important;
}
.customer-map-selector .buttons-container {
    margin-bottom: 0 !important;
}
</style><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_customer_coordinates/hooks/index/styles.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_customer_coordinates/hooks/index/styles.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
.customer-map-selector .object-container {
    padding: 0 !important;
}
.customer-map-selector .buttons-container {
    margin-bottom: 0 !important;
}
</style><?php }
}
}
