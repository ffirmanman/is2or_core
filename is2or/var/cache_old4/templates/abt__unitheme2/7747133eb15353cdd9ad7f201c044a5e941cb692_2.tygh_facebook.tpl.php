<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/social_buttons/providers/facebook.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff775849_73660219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7747133eb15353cdd9ad7f201c044a5e941cb692' => 
    array (
      0 => 'addons/social_buttons/providers/facebook.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ff775849_73660219 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/social_buttons/providers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['social_buttons']['facebook_enable'] == "Y" && $_smarty_tpl->getValue('provider_settings')['facebook']['data']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:facebook"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('facebook_lang', $_smarty_tpl->getValue('addons')['social_buttons']['facebook_lang'], false, NULL);
$_smarty_tpl->assign('facebook_app_id', $_smarty_tpl->getValue('addons')['social_buttons']['facebook_app_id'], false, NULL);?>

<div id="fb-root"></div>

<div class="fb-like" <?php echo $_smarty_tpl->getValue('provider_settings')['facebook']['data'];?>
></div>
<div hidden
    data-ca-social-buttons="facebook"
    data-ca-social-buttons-src="//connect.facebook.net/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('facebook_lang')), ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('facebook_app_id')), ENT_QUOTES, 'UTF-8');?>
"></div>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/social_buttons/providers/facebook.js",'class'=>"cm-ajax-force",'cookie-name'=>"facebook"), $_smarty_tpl);?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:facebook"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/facebook.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/social_buttons/providers/facebook.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['social_buttons']['facebook_enable'] == "Y" && $_smarty_tpl->getValue('provider_settings')['facebook']['data']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:facebook"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('facebook_lang', $_smarty_tpl->getValue('addons')['social_buttons']['facebook_lang'], false, NULL);
$_smarty_tpl->assign('facebook_app_id', $_smarty_tpl->getValue('addons')['social_buttons']['facebook_app_id'], false, NULL);?>

<div id="fb-root"></div>

<div class="fb-like" <?php echo $_smarty_tpl->getValue('provider_settings')['facebook']['data'];?>
></div>
<div hidden
    data-ca-social-buttons="facebook"
    data-ca-social-buttons-src="//connect.facebook.net/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('facebook_lang')), ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('facebook_app_id')), ENT_QUOTES, 'UTF-8');?>
"></div>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/social_buttons/providers/facebook.js",'class'=>"cm-ajax-force",'cookie-name'=>"facebook"), $_smarty_tpl);?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:facebook"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
