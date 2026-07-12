<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/call_requests/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa98ebfc9_51516590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3153b0fdf0ba7de1e1e08c0cca3d2e77edc28b51' => 
    array (
      0 => 'addons/call_requests/hooks/index/scripts.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa98ebfc9_51516590 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/call_requests/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/call_requests/index.js"), $_smarty_tpl);?>


<?php echo '<script'; ?>
>
<?php if ($_smarty_tpl->getValue('addons')['call_requests']['phone_mask']) {?>
    Tygh.call_phone_mask = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['call_requests']['phone_mask']), ENT_QUOTES, 'UTF-8');?>
';
<?php }
echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/call_requests/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/call_requests/index.js"), $_smarty_tpl);?>


<?php echo '<script'; ?>
>
<?php if ($_smarty_tpl->getValue('addons')['call_requests']['phone_mask']) {?>
    Tygh.call_phone_mask = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['call_requests']['phone_mask']), ENT_QUOTES, 'UTF-8');?>
';
<?php }
echo '</script'; ?>
>
<?php }
}
}
