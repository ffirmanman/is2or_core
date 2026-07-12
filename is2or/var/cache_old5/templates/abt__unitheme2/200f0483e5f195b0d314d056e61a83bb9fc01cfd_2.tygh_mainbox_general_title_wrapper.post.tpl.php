<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:00
  from 'tygh:addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f707068c9_14705174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200f0483e5f195b0d314d056e61a83bb9fc01cfd' => 
    array (
      0 => 'addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/rss_feed/blocks/rss_feed.tpl' => 2,
  ),
))) {
function content_6a133f707068c9_14705174 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/rss_feed/hooks/wrapper';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_REQUEST['category_id']) {?>
    <?php if ($_smarty_tpl->getValue('addons')['rss_feed']['display_rss_feed_in_category'] == "Y") {
$_smarty_tpl->renderSubTemplate("tygh:addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), (int) 0, $_smarty_current_dir);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_REQUEST['category_id']) {?>
    <?php if ($_smarty_tpl->getValue('addons')['rss_feed']['display_rss_feed_in_category'] == "Y") {
$_smarty_tpl->renderSubTemplate("tygh:addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), (int) 0, $_smarty_current_dir);
}
}
}
}
}
