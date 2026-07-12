<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:addons/social_buttons/hooks/pages/page_content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae61524b63a4_11801252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9bb70ab542ae0f389b92f8ff4cbcf488896819' => 
    array (
      0 => 'addons/social_buttons/hooks/pages/page_content.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae61524b63a4_11801252 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/social_buttons/hooks/pages';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('display_button_block') && !$_smarty_tpl->getValue('subpages')) {?>
    <div class="ty-social-buttons clearfix">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_settings'), 'provider_data');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach14DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('provider_data') && $_smarty_tpl->getValue('provider_data')['template'] && $_smarty_tpl->getValue('provider_data')['data']) {?>
            <div class="ty-social-buttons__inline"><?php $_smarty_tpl->renderSubTemplate("addons/social_buttons/providers/".((string)$_smarty_tpl->getValue('provider_data')['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></div>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/pages/page_content.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/social_buttons/hooks/pages/page_content.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('display_button_block') && !$_smarty_tpl->getValue('subpages')) {?>
    <div class="ty-social-buttons clearfix">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_settings'), 'provider_data');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach15DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('provider_data') && $_smarty_tpl->getValue('provider_data')['template'] && $_smarty_tpl->getValue('provider_data')['data']) {?>
            <div class="ty-social-buttons__inline"><?php $_smarty_tpl->renderSubTemplate("addons/social_buttons/providers/".((string)$_smarty_tpl->getValue('provider_data')['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></div>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
