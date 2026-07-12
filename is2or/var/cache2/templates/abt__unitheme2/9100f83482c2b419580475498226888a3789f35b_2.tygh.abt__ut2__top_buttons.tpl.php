<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:58
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/static_templates/abt__ut2__top_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21ad55493_49888423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9100f83482c2b419580475498226888a3789f35b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/static_templates/abt__ut2__top_buttons.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21ad55493_49888423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('tmpl_abt__ut2__top_buttons.compare_list.tooltip','view_wishlist','tmpl_abt__ut2__top_buttons.compare_list.tooltip','view_wishlist'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value || $_smarty_tpl->tpl_vars['product']->value['feature_comparison'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('compared_products', fn_get_comparison_products(''));?>
    <div class="ut2-top-compared-products" id="abt__ut2_compared_products">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-compare__a <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value) > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("tmpl_abt__ut2__top_buttons.compare_list.tooltip");?>
"><span><i class="ut2-icon-baseline-equalizer"></i><?php if ($_smarty_tpl->tpl_vars['compared_products']->value) {?><span class="count"><?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_compared_products--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == "A" && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php $_smarty_tpl->_assignInScope('wishlist_count', fn_abt__ut2_polyfill_fn_wishlist_get_count());?>

    <div class="ut2-top-wishlist-count" id="abt__ut2_wishlist_count">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><span><i class="ut2-icon-baseline-favorite-border"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value > 0) {?><span class="count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_wishlist_count--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/abt__ut2__top_buttons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/abt__ut2__top_buttons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value || $_smarty_tpl->tpl_vars['product']->value['feature_comparison'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('compared_products', fn_get_comparison_products(''));?>
    <div class="ut2-top-compared-products" id="abt__ut2_compared_products">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-compare__a <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value) > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("tmpl_abt__ut2__top_buttons.compare_list.tooltip");?>
"><span><i class="ut2-icon-baseline-equalizer"></i><?php if ($_smarty_tpl->tpl_vars['compared_products']->value) {?><span class="count"><?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_compared_products--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == "A" && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php $_smarty_tpl->_assignInScope('wishlist_count', fn_abt__ut2_polyfill_fn_wishlist_get_count());?>

    <div class="ut2-top-wishlist-count" id="abt__ut2_wishlist_count">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value > 0) {?>active<?php }?>" href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><span><i class="ut2-icon-baseline-favorite-border"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value > 0) {?><span class="count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
        <!--abt__ut2_wishlist_count--></div>
<?php }
}
}
}
