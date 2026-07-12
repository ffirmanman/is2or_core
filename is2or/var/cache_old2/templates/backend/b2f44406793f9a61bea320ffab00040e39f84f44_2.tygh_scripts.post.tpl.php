<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/vendor_panel_configurator/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afc483d3_96590926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f44406793f9a61bea320ffab00040e39f84f44' => 
    array (
      0 => 'addons/vendor_panel_configurator/hooks/index/scripts.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afc483d3_96590926 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_panel_configurator/vendor_panel_configurator.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_panel_configurator/colors.js"), $_smarty_tpl);?>

<?php }
}
