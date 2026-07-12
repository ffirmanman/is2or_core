<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:54
  from 'tygh:common/notification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6a8f0be8_58207301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a4134bf606c18bf388d356f5f02e0fba212149c' => 
    array (
      0 => 'common/notification.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6a8f0be8_58207301 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="cm-notification-container notification-container">
<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_notifications')(''), 'message', false, 'key');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('message')->value) {
$foreach12DoElse = false;
if ($_smarty_tpl->getValue('message')['type'] == "I") {?>
    <div class="ui-widget-overlay" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
"></div>
    <div class="cm-notification-content cm-notification-content-extended notification-content-extended<?php if ($_smarty_tpl->getValue('message')['message_state'] == "I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
        <h1><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close <?php if ($_smarty_tpl->getValue('message')['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>"></span></h1>
        <div class="notification-body-extended">
            <?php echo $_smarty_tpl->getValue('message')['message'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->getValue('message')['type'] == "O") {?>
    <div class="cm-notification-content notification-content alert-error" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close" <?php if ($_smarty_tpl->getValue('message')['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <?php echo $_smarty_tpl->getValue('message')['message'];?>

    </div>
<?php } else { ?>
    <div class="cm-notification-content notification-content<?php if ($_smarty_tpl->getValue('message')['message_state'] == "I") {?> cm-auto-hide<?php }?> <?php if ($_smarty_tpl->getValue('message')['type'] == "N") {?>alert-success<?php } elseif ($_smarty_tpl->getValue('message')['type'] == "W") {?>alert-warning<?php } else { ?>alert-error<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close <?php if ($_smarty_tpl->getValue('message')['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->getValue('message')['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php echo $_smarty_tpl->getValue('message')['message'];?>

    </div>
<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/notification.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/notification.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="cm-notification-container notification-container">
<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_notifications')(''), 'message', false, 'key');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('message')->value) {
$foreach13DoElse = false;
if ($_smarty_tpl->getValue('message')['type'] == "I") {?>
    <div class="ui-widget-overlay" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
"></div>
    <div class="cm-notification-content cm-notification-content-extended notification-content-extended<?php if ($_smarty_tpl->getValue('message')['message_state'] == "I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
        <h1><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close <?php if ($_smarty_tpl->getValue('message')['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>"></span></h1>
        <div class="notification-body-extended">
            <?php echo $_smarty_tpl->getValue('message')['message'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->getValue('message')['type'] == "O") {?>
    <div class="cm-notification-content notification-content alert-error" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close" <?php if ($_smarty_tpl->getValue('message')['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <?php echo $_smarty_tpl->getValue('message')['message'];?>

    </div>
<?php } else { ?>
    <div class="cm-notification-content notification-content<?php if ($_smarty_tpl->getValue('message')['message_state'] == "I") {?> cm-auto-hide<?php }?> <?php if ($_smarty_tpl->getValue('message')['type'] == "N") {?>alert-success<?php } elseif ($_smarty_tpl->getValue('message')['type'] == "W") {?>alert-warning<?php } else { ?>alert-error<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close <?php if ($_smarty_tpl->getValue('message')['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->getValue('message')['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php echo $_smarty_tpl->getValue('message')['message'];?>

    </div>
<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>
</div><?php }
}
}
