<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:views/index/components/custom_blocks_section/custom_blocks_card.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee36e9eb4_10602923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed1b857dc2278fb243da08da4222a5d33ca15c3' => 
    array (
      0 => 'views/index/components/custom_blocks_section/custom_blocks_card.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ee36e9eb4_10602923 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/custom_blocks_section';
\Tygh\Languages\Helper::preloadLangVars(array('custom_blocks.dismissed_by_vendor','dismiss'));
if ($_smarty_tpl->getValue('custom_blocks_card')) {
$_smarty_tpl->assign('actions_button_icon', ($_smarty_tpl->getValue('custom_blocks_card')['is_dismissed']) ? "icon-eye-close" : "icon-ellipsis-horizontal", false, NULL);
$_smarty_tpl->assign('is_vendor_only', ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && !$_smarty_tpl->getValue('auth')['act_as_user']), false, NULL);
$_smarty_tpl->assign('is_admin_act_as_vendor', ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && $_smarty_tpl->getValue('auth')['act_as_user'] && $_smarty_tpl->getValue('auth')['act_as_area'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")), false, NULL);
$_smarty_tpl->assign('show_actions', ($_smarty_tpl->getValue('custom_blocks_section')['is_editable'] && ($_smarty_tpl->getValue('is_vendor_only') || ($_smarty_tpl->getValue('is_admin_act_as_vendor') && !(defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)))) || $_smarty_tpl->getValue('custom_blocks_card')['is_dismissed'], false, NULL);?><div class="custom-blocks-card" id="custom_blocks_card_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('custom_blocks_card')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('show_actions')) {?><div class="custom-blocks-card__actions"><form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
"method="post"class="custom-blocks-card__actions-form"name="custom_blocks_card_actions_form"enctype="multipart/form-data"><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?><li><?php if ($_smarty_tpl->getValue('custom_blocks_card')['is_dismissed']) {?><span class="dropdown--text-wrap dropdown--text-wrap-long"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_blocks.dismissed_by_vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php } else {
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-post cm-ajax",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("dismiss", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"index.dismiss_block?block_id=".((string)$_smarty_tpl->getValue('custom_blocks_card')['id'])."&return_url=".((string)$_smarty_tpl->getValue('return_url')),'form'=>"custom_blocks_card_action_form_".((string)$_smarty_tpl->getValue('custom_blocks_card')['id']),'data'=>array("data-ca-target-id"=>$_smarty_tpl->getValue('custom_blocks_section')['id'])), true);
}?></li><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list'),'icon'=>$_smarty_tpl->getValue('actions_button_icon'),'no_caret'=>true,'class'=>"custom-blocks-card__actions-btn-group"), true);?>
</form></div><?php }?><div class="custom-blocks-card__inner <?php echo '';
if ($_smarty_tpl->getValue('custom_blocks_section')['is_fixed']) {?>custom-blocks-card__inner--fixed<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('custom_blocks_section')['is_editable']) {?>custom-blocks-card__inner--editable<?php }
if (!$_smarty_tpl->getValue('show_actions')) {?>custom-blocks-card__inner--hide-actions<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('safe_eval_string')->handle(array('var'=>$_smarty_tpl->getValue('custom_blocks_card')['content']), $_smarty_tpl);?>
</div><!--custom_blocks_card_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('custom_blocks_card')['id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
