<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa6b8200_98249807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9d3387c521c45cef172619d36f627974e9ac2a' => 
    array (
      0 => 'addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl' => 2,
  ),
))) {
function content_69afafaa6b8200_98249807 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/vendor_communication/views/vendor_communication/components';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.ask_a_question','vendor_communication.ask_a_question'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('communication_type', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), false, NULL);
$_smarty_tpl->assign('allow_new_thread', $_smarty_tpl->getSmarty()->getModifierCallback('fn_vendor_communication_is_communication_type_active')($_smarty_tpl->getValue('communication_type')), false, NULL);
$_smarty_tpl->assign('title', (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.ask_a_question", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('allow_new_thread')) {?>
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <a title="<?php echo $_smarty_tpl->getValue('title');?>
" class="vc__l<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?> ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/abt__ut2_icon.tpl",'class'=>"ut2-icon-outline-announcement"), $_smarty_tpl);?>

            <span class="ajx-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    
        <a title="<?php echo $_smarty_tpl->getValue('title');?>
" data-ca-target-id="new_thread_login_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="vc__l cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?> ty-vendor-communication__post-write<?php }?>" rel="nofollow">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/abt__ut2_icon.tpl",'class'=>"ut2-icon-outline-announcement"), $_smarty_tpl);?>

            <span class="ajx-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
    
        <?php if ($_smarty_tpl->getValue('show_form')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('communication_type', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), false, NULL);
$_smarty_tpl->assign('allow_new_thread', $_smarty_tpl->getSmarty()->getModifierCallback('fn_vendor_communication_is_communication_type_active')($_smarty_tpl->getValue('communication_type')), false, NULL);
$_smarty_tpl->assign('title', (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.ask_a_question", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('allow_new_thread')) {?>
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <a title="<?php echo $_smarty_tpl->getValue('title');?>
" class="vc__l<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?> ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/abt__ut2_icon.tpl",'class'=>"ut2-icon-outline-announcement"), $_smarty_tpl);?>

            <span class="ajx-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    
        <a title="<?php echo $_smarty_tpl->getValue('title');?>
" data-ca-target-id="new_thread_login_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="vc__l cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?> ty-vendor-communication__post-write<?php }?>" rel="nofollow">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/abt__ut2_icon.tpl",'class'=>"ut2-icon-outline-announcement"), $_smarty_tpl);?>

            <span class="ajx-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
    
        <?php if ($_smarty_tpl->getValue('show_form')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php }
}
}
}
}
