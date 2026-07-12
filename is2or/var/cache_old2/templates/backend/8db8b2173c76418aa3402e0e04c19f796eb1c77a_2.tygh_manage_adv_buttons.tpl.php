<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:views/addons/components/manage/manage_adv_buttons.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af4fcaa1_44370355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db8b2173c76418aa3402e0e04c19f796eb1c77a' => 
    array (
      0 => 'views/addons/components/manage/manage_adv_buttons.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69afb1af4fcaa1_44370355 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/manage';
\Tygh\Languages\Helper::preloadLangVars(array('visit_marketplace'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("helpdesk_connector.visit_marketplace"),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("visit_marketplace", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"btn btn-primary",'but_role'=>"action",'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
