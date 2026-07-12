<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:41
  from 'tygh:views/addons/components/manage/manage_buttons.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cd5eefc5_19627527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3427c3c394a11c21035fb5784f7bde3e3593b22b' => 
    array (
      0 => 'views/addons/components/manage/manage_buttons.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/upload_addon.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
))) {
function content_69aed9cd5eefc5_19627527 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/manage';
\Tygh\Languages\Helper::preloadLangVars(array('upload_addon','upload_addon','manual_installation','tools_addons_disable_all','tools_addons_disable_third_party'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

        <?php $_smarty_tpl->assign('is_addon_management_enabled', true, false, NULL);?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('selected_storefront_id') || $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && $_smarty_tpl->getValue('runtime')['company_id']) {?>
            <?php $_smarty_tpl->assign('is_addon_management_enabled', false, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('is_addon_management_enabled') && !$_smarty_tpl->getSmarty()->getModifierCallback('defined')("RESTRICTED_ADMIN")) {?>
            <li>
                <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:views/addons/components/upload_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_prefixVariable24 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"upload_addon",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("upload_addon", [], $_smarty_tpl->getSmarty()->getLanguage()),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("upload_addon", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>($_prefixVariable24),'act'=>"edit",'link_class'=>"cm-dialog-auto-size",'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("manual_installation", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('is_addon_management_enabled') && $_smarty_tpl->getValue('settings')['init_addons'] !== 'none') {?>
            <li>
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'method'=>"POST",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("tools_addons_disable_all", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"addons.tools?init_addons=none"), true);?>

            </li>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('is_addon_management_enabled') && ($_smarty_tpl->getValue('settings')['init_addons'] !== 'core' && $_smarty_tpl->getValue('settings')['init_addons'] !== 'none')) {?>
            <li>
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'method'=>"POST",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("tools_addons_disable_third_party", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"addons.tools?init_addons=core"), true);?>

            </li>
        <?php }?>

    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list')), true);
}
}
