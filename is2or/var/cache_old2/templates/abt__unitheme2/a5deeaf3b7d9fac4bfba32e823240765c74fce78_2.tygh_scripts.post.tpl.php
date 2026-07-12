<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__motivation_block/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa986c1b2_83443502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5deeaf3b7d9fac4bfba32e823240765c74fce78' => 
    array (
      0 => 'addons/ab__motivation_block/hooks/index/scripts.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa986c1b2_83443502 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__motivation_block/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('ab__motivation_items')) {?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__mb: {addon_settings: {template_variant: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['template_variant']), ENT_QUOTES, 'UTF-8');?>
',save_element_state: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['save_element_state']), ENT_QUOTES, 'UTF-8');?>
',},}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__motivation_block/func.js"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__motivation_block/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('ab__motivation_items')) {?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__mb: {addon_settings: {template_variant: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['template_variant']), ENT_QUOTES, 'UTF-8');?>
',save_element_state: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['save_element_state']), ENT_QUOTES, 'UTF-8');?>
',},}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__motivation_block/func.js"), $_smarty_tpl);?>

<?php }
}
}
}
