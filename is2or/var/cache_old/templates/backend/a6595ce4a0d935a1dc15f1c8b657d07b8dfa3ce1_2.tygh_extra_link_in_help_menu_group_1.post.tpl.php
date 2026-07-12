<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:addons/onboarding_guide/hooks/bottom_panel/extra_link_in_help_menu_group_1.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94603d0122_43948465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6595ce4a0d935a1dc15f1c8b657d07b8dfa3ce1' => 
    array (
      0 => 'addons/onboarding_guide/hooks/bottom_panel/extra_link_in_help_menu_group_1.post.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94603d0122_43948465 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/onboarding_guide/hooks/bottom_panel';
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.reset_onboarding'));
if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") && $_smarty_tpl->getValue('auth')['is_root'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getSmarty()->getModifierCallback('fn_onboarding_guide_has_progress')() || $_smarty_tpl->getSmarty()->getModifierCallback('fn_onboarding_guide_is_dismissed')())) {?>
<a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("onboarding_guide.restart")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.reset_onboarding", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
<?php }
}
}
