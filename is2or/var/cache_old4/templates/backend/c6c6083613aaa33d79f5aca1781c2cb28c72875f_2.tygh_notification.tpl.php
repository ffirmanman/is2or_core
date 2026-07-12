<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:34
  from 'tygh:common/notification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49facba9a0_84606766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6c6083613aaa33d79f5aca1781c2cb28c72875f' => 
    array (
      0 => 'common/notification.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49facba9a0_84606766 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "notification_content", null, null);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_notifications')(''), 'message', false, 'key');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('message')->value) {
$foreach7DoElse = false;
if ($_smarty_tpl->getValue('message')['type'] == "I") {?><div class="cm-notification-content cm-notification-content-extended notification-content-extended <?php if ($_smarty_tpl->getValue('message')['message_state'] == "I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
"><h1><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close close popup-close <?php if ($_smarty_tpl->getValue('message')['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>"></span></h1><div class="notification-body-extended"><?php echo $_smarty_tpl->getValue('message')['message'];?>
</div></div><?php } else { ?><div class="alert cm-notification-content<?php if ($_smarty_tpl->getValue('message')['type'] == "N") {?> alert-success<?php } elseif ($_smarty_tpl->getValue('message')['type'] == "W") {?> alert-warning<?php } elseif ($_smarty_tpl->getValue('message')['type'] == "E") {?> alert-error<?php } elseif ($_smarty_tpl->getValue('message')['type'] == "S") {?> alert-info<?php }?> <?php if ($_smarty_tpl->getValue('message')['message_state'] == "I") {?> cm-auto-hide<?php }?>" id="notification_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
"><button type="button" class="close cm-notification-close<?php if ($_smarty_tpl->getValue('message')['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->getValue('message')['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button><?php if ($_smarty_tpl->getValue('message')['title']) {?><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
</strong><?php }
echo $_smarty_tpl->getValue('message')['message'];?>
</div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('view_mode') == "simple") {?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'notification_content');?>

<?php }?>

<div class="cm-notification-container alert-wrap <?php if ($_smarty_tpl->getValue('view_mode') == "simple") {?>notification-container-top<?php }?>">
    <?php if ($_smarty_tpl->getValue('view_mode') != "simple") {?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'notification_content');?>

    <?php }?>
</div>

<?php }
}
}
