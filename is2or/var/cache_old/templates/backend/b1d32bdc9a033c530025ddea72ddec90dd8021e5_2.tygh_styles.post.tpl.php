<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:11
  from 'tygh:addons/call_requests/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad945f6c0d29_09032665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d32bdc9a033c530025ddea72ddec90dd8021e5' => 
    array (
      0 => 'addons/call_requests/hooks/index/styles.post.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad945f6c0d29_09032665 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/call_requests/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/call_requests/styles.less"), $_smarty_tpl);?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "styles", null, null);?>
    <?php $_smarty_tpl->assign('statuses', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')('call_requests','status_colors'), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('statuses')) {?>    
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('statuses'), 'color', false, 'status');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('status')->value => $_smarty_tpl->getVariable('color')->value) {
$foreach3DoElse = false;
?>
            .cr-btn-status-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('status')), ENT_QUOTES, 'UTF-8');?>
 {
                .buttonBackground(lighten(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color')), ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color')), ENT_QUOTES, 'UTF-8');?>
, 5%));
            }
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"), $_smarty_tpl);?>

<?php }
}
