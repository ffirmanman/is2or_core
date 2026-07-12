<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:33
  from 'tygh:addons/vendor_panel_configurator/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49f98a5493_21546144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70733ed20e3678b465a7b1fbddaa69413ae825c3' => 
    array (
      0 => 'addons/vendor_panel_configurator/hooks/index/styles.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
))) {
function content_69fb49f98a5493_21546144 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/vendor_panel_configurator/styles.less"), $_smarty_tpl);?>


<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && $_smarty_tpl->getValue('color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::LIGHT")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "styles", null, null);?>
        <?php $_smarty_tpl->assign('calculatedSaturation', ($_smarty_tpl->getValue('isGrayMainColor')) ? "0%" : "100%", false, NULL);?>

        @mainColor: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mainColor')), ENT_QUOTES, 'UTF-8');?>
;
        @tableBackgroundHover: spin(hsl(hue(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mainColor')), ENT_QUOTES, 'UTF-8');?>
), <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('calculatedSaturation')), ENT_QUOTES, 'UTF-8');?>
, 98%), 5);
        @wellBackground: spin(hsl(hue(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mainColor')), ENT_QUOTES, 'UTF-8');?>
), <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('calculatedSaturation')), ENT_QUOTES, 'UTF-8');?>
, 98%), 5);
        @menuSidebarColor: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menuSidebarColor')), ENT_QUOTES, 'UTF-8');?>
;
        @menuSidebarColorActive: spin(hsla(hue(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mainColor')), ENT_QUOTES, 'UTF-8');?>
), <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('calculatedSaturation')), ENT_QUOTES, 'UTF-8');?>
, 40%, 0.1), 5);
        @menuSidebarBg: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menuSidebarBg')), ENT_QUOTES, 'UTF-8');?>
;
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/vendor_panel_configurator/theme_editor.less"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/responsive/css/tygh/theme_editor.css"), $_smarty_tpl);?>

<?php }
}
}
