<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:11
  from 'tygh:views/statuses/components/styles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad945f603541_38307403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e288a83ef8c407250b21dcc4251e41686484c083' => 
    array (
      0 => 'views/statuses/components/styles.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad945f603541_38307403 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/statuses/components';
$_smarty_tpl->assign('statuses', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_statuses')($_smarty_tpl->getValue('type')), false, NULL);
if ($_smarty_tpl->getValue('statuses')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "styles", null, null);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('statuses'), 'status_data', false, 'status');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('status')->value => $_smarty_tpl->getVariable('status_data')->value) {
$foreach1DoElse = false;
?>
        <?php if (!$_smarty_tpl->getValue('status_data') || !$_smarty_tpl->getValue('status_data')['params'] || !$_smarty_tpl->getValue('status_data')['params']['color']) {?>
            <?php continue 1;?>
        <?php }?>
        .<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('type'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
-status-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('status'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
 {
            .buttonBackground(lighten(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('status_data')['params']['color']), ENT_QUOTES, 'UTF-8');?>
, 5%), darken(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('status_data')['params']['color']), ENT_QUOTES, 'UTF-8');?>
, 5%));
        }
        .<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('type'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
-status-dropdown-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('status'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
:before,
        .<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('type'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
-status-link-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('status'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
:before, {
            color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('status_data')['params']['color']), ENT_QUOTES, 'UTF-8');?>
;
        }
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"), $_smarty_tpl);?>

<?php }
}
}
