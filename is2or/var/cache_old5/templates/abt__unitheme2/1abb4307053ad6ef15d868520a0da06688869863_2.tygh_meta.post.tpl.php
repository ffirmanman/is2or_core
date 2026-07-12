<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:53
  from 'tygh:addons/social_buttons/hooks/index/meta.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f698120f0_84270519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1abb4307053ad6ef15d868520a0da06688869863' => 
    array (
      0 => 'addons/social_buttons/hooks/index/meta.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f698120f0_84270519 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/social_buttons/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('display_button_block')) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_meta_data')['all'], 'meta_value', false, 'meta_name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('meta_name')->value => $_smarty_tpl->getVariable('meta_value')->value) {
$foreach0DoElse = false;
?>
        <meta property="og:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta_name')), ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta_value')), ENT_QUOTES, 'UTF-8');?>
" />
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_settings'), 'provider_data');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach1DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('provider_data') && $_smarty_tpl->getValue('provider_data')['meta_template']) {?>
            <?php $_smarty_tpl->renderSubTemplate("addons/social_buttons/meta_templates/".((string)$_smarty_tpl->getValue('provider_data')['meta_template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/index/meta.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/social_buttons/hooks/index/meta.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('display_button_block')) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_meta_data')['all'], 'meta_value', false, 'meta_name');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('meta_name')->value => $_smarty_tpl->getVariable('meta_value')->value) {
$foreach2DoElse = false;
?>
        <meta property="og:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta_name')), ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta_value')), ENT_QUOTES, 'UTF-8');?>
" />
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_settings'), 'provider_data');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach3DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('provider_data') && $_smarty_tpl->getValue('provider_data')['meta_template']) {?>
            <?php $_smarty_tpl->renderSubTemplate("addons/social_buttons/meta_templates/".((string)$_smarty_tpl->getValue('provider_data')['meta_template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
