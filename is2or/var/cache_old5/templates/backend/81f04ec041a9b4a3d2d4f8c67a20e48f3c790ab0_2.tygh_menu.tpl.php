<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed29fded9_50330253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f04ec041a9b4a3d2d4f8c67a20e48f3c790ab0' => 
    array (
      0 => 'menu.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/get_primary_items.tpl' => 1,
    'tygh:components/menu/main_menu.tpl' => 2,
    'tygh:components/menu/get_secondary_items.tpl' => 1,
    'tygh:common/quick_menu.tpl' => 1,
  ),
))) {
function content_6a133ed29fded9_50330253 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates';
?><div class="cs-main-menu">
    <div class="cs-main-menu__outer" id="header_navbar">
        <div class="cs-main-menu__header-mobile mobile-visible">
            <button type="button" class="btn mobile-menu-closer mobile-menu-closer-btn">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove overlay-navbar-open"), $_smarty_tpl);?>

            </button>
        </div>
        <div class="cs-main-menu__inner">
            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/get_primary_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->getValue('navigation'),'quick_menu'=>$_smarty_tpl->getValue('quick_menu')), (int) 0, $_smarty_current_dir);
?>
                <div class="cs-main-menu__primary <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('main_menu_primary_class')), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('primary_items'),'prefix'=>"primary",'show_collapse_default'=>$_smarty_tpl->getValue('show_collapse_default')), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/get_secondary_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->getValue('navigation')), (int) 0, $_smarty_current_dir);
?>
                <?php if ($_smarty_tpl->getValue('secondary_items')) {?>
                    <div class="cs-main-menu__secondary">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('secondary_items'),'prefix'=>"secondary",'show_collapse_default'=>$_smarty_tpl->getValue('show_collapse_default')), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php }?>
            <?php }?>
        </div>
    <!--header_navbar--></div>
</div>
<div class="cs-main-menu__backdrop mobile-menu-closer">
</div>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/quick_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_menu'=>$_smarty_tpl->getValue('quick_menu')), (int) 0, $_smarty_current_dir);
}
}
