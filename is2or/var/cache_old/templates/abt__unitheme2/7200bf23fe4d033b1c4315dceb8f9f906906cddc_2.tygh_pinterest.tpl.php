<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:01
  from 'tygh:addons/social_buttons/providers/pinterest.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ed250492_67973980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7200bf23fe4d033b1c4315dceb8f9f906906cddc' => 
    array (
      0 => 'addons/social_buttons/providers/pinterest.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1ed250492_67973980 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/social_buttons/providers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['social_buttons']['pinterest_enable'] == "Y" && $_smarty_tpl->getValue('provider_settings')['pinterest']['data']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:pinterest"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<span class="pinterest__wrapper">
    <a href="//pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['url'];?>
&amp;media=<?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['media'];?>
&amp;description=<?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['description'];?>
" <?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['params'];?>
><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['social_buttons']['pinterest_size']), ENT_QUOTES, 'UTF-8');?>
.png" alt="Pinterest"></a>
</span>
<div hidden
    data-ca-social-buttons="pinterest"
    data-ca-social-buttons-src="//assets.pinterest.com/js/pinit.js"></div>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/social_buttons/providers/pinterest.js",'class'=>"cm-ajax-force",'cookie-name'=>"pinterest"), $_smarty_tpl);?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:pinterest"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/pinterest.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/social_buttons/providers/pinterest.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['social_buttons']['pinterest_enable'] == "Y" && $_smarty_tpl->getValue('provider_settings')['pinterest']['data']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:pinterest"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<span class="pinterest__wrapper">
    <a href="//pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['url'];?>
&amp;media=<?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['media'];?>
&amp;description=<?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['description'];?>
" <?php echo $_smarty_tpl->getValue('provider_settings')['pinterest']['data']['params'];?>
><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['social_buttons']['pinterest_size']), ENT_QUOTES, 'UTF-8');?>
.png" alt="Pinterest"></a>
</span>
<div hidden
    data-ca-social-buttons="pinterest"
    data-ca-social-buttons-src="//assets.pinterest.com/js/pinit.js"></div>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/social_buttons/providers/pinterest.js",'class'=>"cm-ajax-force",'cookie-name'=>"pinterest"), $_smarty_tpl);?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"social_buttons:pinterest"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
