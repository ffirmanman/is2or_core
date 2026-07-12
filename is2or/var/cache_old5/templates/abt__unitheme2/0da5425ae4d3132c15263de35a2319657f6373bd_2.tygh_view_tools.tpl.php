<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:56
  from 'tygh:common/view_tools.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6ceb25e7_54134167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da5425ae4d3132c15263de35a2319657f6373bd' => 
    array (
      0 => 'common/view_tools.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6ceb25e7_54134167 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','quick_product_viewer','of','next','quick_product_viewer','prev_page','quick_product_viewer','of','next','quick_product_viewer'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('view_tools') && $_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?>
	<div class="ty-product-switcher">
	    <a class="ty-product-switcher__a ty-product-switcher__a-left <?php if (!$_smarty_tpl->getValue('view_tools')['prev_id']) {?>disabled<?php } elseif ($_smarty_tpl->getValue('quick_view')) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->getValue('view_tools')['prev_id']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['prev_url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->getValue('view_tools')['links_label']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['links_label']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('view_tools')['show_item_id']) {?> #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['prev_id']), ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("prev_page", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" <?php if ($_smarty_tpl->getValue('quick_view')) {?>data-ca-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['prev_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_product_viewer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" rel="nofollow"<?php }
}?>><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-circle ty-product-switcher__icon"), $_smarty_tpl);?>
</a>
	        <span class="switcher-selected-product"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['current']), ENT_QUOTES, 'UTF-8');?>
</span>
	        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("of", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
	        <span class="switcher-total"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['total']), ENT_QUOTES, 'UTF-8');?>
</span>
	    <a class="ty-product-switcher__a ty-product-switcher__a-right <?php if (!$_smarty_tpl->getValue('view_tools')['next_id']) {?>disabled<?php } elseif ($_smarty_tpl->getValue('quick_view')) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->getValue('view_tools')['next_id']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['next_url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->getValue('view_tools')['links_label']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['links_label']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('view_tools')['show_item_id']) {?> #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['next_id']), ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" <?php if ($_smarty_tpl->getValue('quick_view')) {?>data-ca-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['next_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_product_viewer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" rel="nofollow"<?php }
}?>><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-circle ty-product-switcher__icon"), $_smarty_tpl);?>
</a>
	</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/view_tools.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/view_tools.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('view_tools') && $_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?>
	<div class="ty-product-switcher">
	    <a class="ty-product-switcher__a ty-product-switcher__a-left <?php if (!$_smarty_tpl->getValue('view_tools')['prev_id']) {?>disabled<?php } elseif ($_smarty_tpl->getValue('quick_view')) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->getValue('view_tools')['prev_id']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['prev_url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->getValue('view_tools')['links_label']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['links_label']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('view_tools')['show_item_id']) {?> #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['prev_id']), ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("prev_page", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" <?php if ($_smarty_tpl->getValue('quick_view')) {?>data-ca-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['prev_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_product_viewer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" rel="nofollow"<?php }
}?>><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-circle ty-product-switcher__icon"), $_smarty_tpl);?>
</a>
	        <span class="switcher-selected-product"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['current']), ENT_QUOTES, 'UTF-8');?>
</span>
	        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("of", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
	        <span class="switcher-total"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['total']), ENT_QUOTES, 'UTF-8');?>
</span>
	    <a class="ty-product-switcher__a ty-product-switcher__a-right <?php if (!$_smarty_tpl->getValue('view_tools')['next_id']) {?>disabled<?php } elseif ($_smarty_tpl->getValue('quick_view')) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->getValue('view_tools')['next_id']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['next_url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->getValue('view_tools')['links_label']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['links_label']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('view_tools')['show_item_id']) {?> #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['next_id']), ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" <?php if ($_smarty_tpl->getValue('quick_view')) {?>data-ca-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_tools')['next_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_product_viewer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" rel="nofollow"<?php }
}?>><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-circle ty-product-switcher__icon"), $_smarty_tpl);?>
</a>
	</div>
<?php }
}
}
}
