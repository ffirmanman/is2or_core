<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:components/menu/logo_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af7c8343_74318806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d707a7798c813d4c63fb351b094c0f15309ac85' => 
    array (
      0 => 'components/menu/logo_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1af7c8343_74318806 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
\Tygh\Languages\Helper::preloadLangVars(array('admin.go_to_the_homepage'));
$_smarty_tpl->assign('logo_path_light', "cart_logo.svg", false, NULL);
$_smarty_tpl->assign('logo_path_dark', "cart_logo_white.svg", false, NULL);?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (" "), ENT_QUOTES, 'UTF-8');?>
class="top-bar__btn top-bar__btn--not-hover mobile-hidden" <?php echo htmlspecialchars((string) (" "), ENT_QUOTES, 'UTF-8');?>
title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin.go_to_the_homepage", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" <?php echo htmlspecialchars((string) (" "), ENT_QUOTES, 'UTF-8');?>
><span class="top-bar__btn-inner logo-menu__btn-inner"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:logo_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK")) {?><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logo_path_dark')), ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart"/><?php } elseif ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::SYSTEM")) {?><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logo_path_light')), ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart logo-menu__logo--light"/><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logo_path_dark')), ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart logo-menu__logo--dark"/><?php } else { ?><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logo_path_light')), ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart"/><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:logo_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span></a><?php }
}
