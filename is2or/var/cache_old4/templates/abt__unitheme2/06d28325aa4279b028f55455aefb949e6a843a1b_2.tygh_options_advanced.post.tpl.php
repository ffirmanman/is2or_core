<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/reward_points/hooks/products/options_advanced.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ffbc0b85_03864354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06d28325aa4279b028f55455aefb949e6a843a1b' => 
    array (
      0 => 'addons/reward_points/hooks/products/options_advanced.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/reward_points/views/products/components/product_representation.tpl' => 2,
  ),
))) {
function content_69fb49ffbc0b85_03864354 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/reward_points/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dont_show_points')), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->getValue('show_price_values') && !$_smarty_tpl->getValue('dont_show_points')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_advanced.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/reward_points/hooks/products/options_advanced.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dont_show_points')), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->getValue('show_price_values') && !$_smarty_tpl->getValue('dont_show_points')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
}
