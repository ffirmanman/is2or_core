<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:36
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345280df6d11_69016733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce4edda8df9c5c124c823fe83287012f14af1c0' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345280df6d11_69016733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__ecw.all_lists','clear_list','clear_list','ab__ecw.all_lists','clear_list','clear_list'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['group_comparison_lists'] === smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_assignInScope('comparison_lists', fn_ab__extended_comparison_wishlist_get_comparison_lists());?><div class="hidden" id="account_info_ab__extended_comparison_wishlist_groups"><ul class="ab-ec-comparison-modal<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['comparison_lists']->value) <= 1) {?> cm-ab-ec-empty-comparison_list<?php }?>"><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo $_smarty_tpl->__("ab__ecw.all_lists");?>
</a><?php if ($_smarty_tpl->tpl_vars['app']->value["session"]["comparison_list"]) {
$_smarty_tpl->_assignInScope('products', implode(",",$_smarty_tpl->tpl_vars['app']->value["session"]["comparison_list"]));?><a href="<?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable32=ob_get_clean();
echo htmlspecialchars((string) fn_url("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->tpl_vars['products']->value)."&redirect_url=".$_prefixVariable32), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->__("clear_list");?>
"></a><?php }?></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_lists']->value, 'comparison_list');
$_smarty_tpl->tpl_vars['comparison_list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comparison_list']->value) {
$_smarty_tpl->tpl_vars['comparison_list']->do_else = false;
$_smarty_tpl->_assignInScope('products_arr', $_smarty_tpl->tpl_vars['comparison_list']->value->getProductList());
$_smarty_tpl->_assignInScope('products', implode(",",$_smarty_tpl->tpl_vars['products_arr']->value));?><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['comparison_list']->value->getHref()), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comparison_list']->value->getTitle(), ENT_QUOTES, 'UTF-8');?>
<span>(<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['products_arr']->value), ENT_QUOTES, 'UTF-8');?>
)</span></a><a href="<?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable33=ob_get_clean();
echo htmlspecialchars((string) fn_url("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->tpl_vars['products']->value)."&redirect_url=".$_prefixVariable33), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->__("clear_list");?>
"></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><!--account_info_ab__extended_comparison_wishlist_groups--></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__extended_comparison_wishlist/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['group_comparison_lists'] === smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_assignInScope('comparison_lists', fn_ab__extended_comparison_wishlist_get_comparison_lists());?><div class="hidden" id="account_info_ab__extended_comparison_wishlist_groups"><ul class="ab-ec-comparison-modal<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['comparison_lists']->value) <= 1) {?> cm-ab-ec-empty-comparison_list<?php }?>"><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo $_smarty_tpl->__("ab__ecw.all_lists");?>
</a><?php if ($_smarty_tpl->tpl_vars['app']->value["session"]["comparison_list"]) {
$_smarty_tpl->_assignInScope('products', implode(",",$_smarty_tpl->tpl_vars['app']->value["session"]["comparison_list"]));?><a href="<?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable34=ob_get_clean();
echo htmlspecialchars((string) fn_url("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->tpl_vars['products']->value)."&redirect_url=".$_prefixVariable34), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->__("clear_list");?>
"></a><?php }?></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_lists']->value, 'comparison_list');
$_smarty_tpl->tpl_vars['comparison_list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comparison_list']->value) {
$_smarty_tpl->tpl_vars['comparison_list']->do_else = false;
$_smarty_tpl->_assignInScope('products_arr', $_smarty_tpl->tpl_vars['comparison_list']->value->getProductList());
$_smarty_tpl->_assignInScope('products', implode(",",$_smarty_tpl->tpl_vars['products_arr']->value));?><li class="ab-ec-comparison-modal__item"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['comparison_list']->value->getHref()), ENT_QUOTES, 'UTF-8');?>
" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comparison_list']->value->getTitle(), ENT_QUOTES, 'UTF-8');?>
<span>(<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['products_arr']->value), ENT_QUOTES, 'UTF-8');?>
)</span></a><a href="<?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable35=ob_get_clean();
echo htmlspecialchars((string) fn_url("ab__extended_comparison_wishlist.clear_list?product_ids=".((string)$_smarty_tpl->tpl_vars['products']->value)."&redirect_url=".$_prefixVariable35), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="<?php echo $_smarty_tpl->__("clear_list");?>
"></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><!--account_info_ab__extended_comparison_wishlist_groups--></div><?php }
}
}
}
