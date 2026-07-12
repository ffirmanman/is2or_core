<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:components/menu/mobile_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94608617f2_36737786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e53dbe03385f4a56f56cb8208ef5066c75ee67' => 
    array (
      0 => 'components/menu/mobile_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94608617f2_36737786 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
?><div class="btn-bar-left overlay-navbar-open-container">
    <a role="button" class="btn mobile-menu-toggler">
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon icon-align-justify overlay-navbar-open"), $_smarty_tpl);?>

    </a>
</div><?php }
}
