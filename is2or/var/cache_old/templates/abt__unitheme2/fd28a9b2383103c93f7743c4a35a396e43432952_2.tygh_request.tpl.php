<?php
/* Smarty version 5.4.3, created on 2026-03-08 20:28:49
  from 'tygh:addons/call_requests/views/call_requests/request.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adb1d14e4a01_06984518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd28a9b2383103c93f7743c4a35a396e43432952' => 
    array (
      0 => 'addons/call_requests/views/call_requests/request.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/call_requests/views/call_requests/components/call_requests_content.tpl' => 2,
  ),
))) {
function content_69adb1d14e4a01_06984518 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/call_requests/views/call_requests';
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')) {?>
    <?php $_smarty_tpl->assign('id', "buy_now_with_one_click_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('id', "call_request_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
}?>

<div class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/call_requests/views/call_requests/components/call_requests_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'id'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
?>
<!--content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/views/call_requests/request.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/call_requests/views/call_requests/request.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')) {?>
    <?php $_smarty_tpl->assign('id', "buy_now_with_one_click_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('id', "call_request_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
}?>

<div class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/call_requests/views/call_requests/components/call_requests_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'id'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
?>
<!--content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
