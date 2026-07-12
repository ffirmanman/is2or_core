<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:top_bar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af7b0338_63421267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d987f324af97afa2d0e73a10e7a6bdeee4d1fc' => 
    array (
      0 => 'top_bar.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/mobile_menu.tpl' => 1,
    'tygh:components/menu/logo_menu.tpl' => 1,
    'tygh:components/menu/storefront_menu.tpl' => 1,
    'tygh:components/menu/search_menu.tpl' => 1,
    'tygh:components/menu/notification_menu.tpl' => 1,
    'tygh:components/menu/user_menu.tpl' => 1,
  ),
))) {
function content_69afb1af7b0338_63421267 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates';
$_smarty_tpl->assign('scroll_header', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['scroll_header'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>
<div class="top-bar <?php if ($_smarty_tpl->getValue('scroll_header')) {?>top-bar--scroll-header<?php }?>" id="top_bar">
    <div class="top-bar__inner
        <?php if ($_smarty_tpl->getValue('runtime')['is_current_storefront_closed'] || $_smarty_tpl->getValue('runtime')['are_all_storefronts_closed']) {?>top-bar__inner--disabled<?php }?>
        <?php if ($_smarty_tpl->getValue('scroll_header')) {?>top-bar__inner--scroll-header<?php }?>"
        data-ca-top-bar="inner"
    >
        <div class="top-bar__left" id="top_bar_left">
            <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/logo_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/storefront_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <!--top_bar_left--></div>

        <div class="top-bar__search" id="top_bar_search">
            <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/search_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <!--top_bar_search--></div>

        <div class="top-bar__right" id="top_bar_right">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:top_bar_right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/notification_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/user_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:top_bar_right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--top_bar_right--></div>
    </div>
<!--top_bar--></div>
<?php }
}
