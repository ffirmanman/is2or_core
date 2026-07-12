<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:01
  from 'tygh:addons/social_buttons/providers/twitter.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ed184537_83746863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e4b9246b7aa5239470a1c8cb476117316982b8' => 
    array (
      0 => 'addons/social_buttons/providers/twitter.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1ed184537_83746863 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/social_buttons/providers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['social_buttons']['twitter_enable'] == "Y" && $_smarty_tpl->getValue('provider_settings')['twitter']['data']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:twitter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->getValue('provider_settings')['twitter']['data'];?>
>Tweet</a>
<div hidden
    data-ca-social-buttons="twitter"
    data-ca-social-buttons-src="//platform.twitter.com/widgets.js"></div>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/social_buttons/providers/twitter.js",'class'=>"cm-ajax-force",'cookie-name'=>"twitter"), $_smarty_tpl);?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:twitter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/twitter.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/social_buttons/providers/twitter.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['social_buttons']['twitter_enable'] == "Y" && $_smarty_tpl->getValue('provider_settings')['twitter']['data']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:twitter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->getValue('provider_settings')['twitter']['data'];?>
>Tweet</a>
<div hidden
    data-ca-social-buttons="twitter"
    data-ca-social-buttons-src="//platform.twitter.com/widgets.js"></div>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/social_buttons/providers/twitter.js",'class'=>"cm-ajax-force",'cookie-name'=>"twitter"), $_smarty_tpl);?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:twitter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
