<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff6c7337_90577609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '416283bc62f77ee37489952df159ac7582908f6a' => 
    array (
      0 => 'addons/wishlist/views/wishlist/components/add_to_wishlist.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ff6c7337_90577609 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/wishlist/views/wishlist/components';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.add_to_wishlist.tooltip','add_to_wishlist','abt__ut2.add_to_wishlist.tooltip','add_to_wishlist'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('wishlist_button_type', (($tmp = $_smarty_tpl->getValue('wishlist_button_type') ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_id', (($tmp = $_smarty_tpl->getValue('wishlist_but_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_id') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_name', (($tmp = $_smarty_tpl->getValue('wishlist_but_name') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_name') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_title', (($tmp = $_smarty_tpl->getValue('wishlist_but_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.add_to_wishlist.tooltip", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_meta', (($tmp = $_smarty_tpl->getValue('wishlist_but_meta') ?? null)===null||$tmp==='' ? "ut2-add-to-wish ".((string)$_smarty_tpl->getValue('ajax_class')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_href', (($tmp = $_smarty_tpl->getValue('wishlist_but_href') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_href') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_label', (($tmp = $_smarty_tpl->getValue('wishlist_but_label') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_label') ?? null : $tmp), false, NULL);?>

<a class="
	<?php if ($_smarty_tpl->getValue('but_meta')) {
echo $_smarty_tpl->getValue('but_meta');
}?>
	<?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_label')) {?> label<?php }?>
	<?php if ($_smarty_tpl->getValue('but_name')) {?> cm-submit<?php }?>
	<?php if ($_smarty_tpl->getValue('but_tooltip') && !$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('but_id')) {?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->getValue('wishlist_button_type') == "icon") {?><i class="ut2-icon-baseline-favorite_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
    <?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_but_label') || $_smarty_tpl->getValue('but_label') && !$_smarty_tpl->getValue('hidden_but_label')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>
</a>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/wishlist/views/wishlist/components/add_to_wishlist.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('wishlist_button_type', (($tmp = $_smarty_tpl->getValue('wishlist_button_type') ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_id', (($tmp = $_smarty_tpl->getValue('wishlist_but_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_id') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_name', (($tmp = $_smarty_tpl->getValue('wishlist_but_name') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_name') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_title', (($tmp = $_smarty_tpl->getValue('wishlist_but_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.add_to_wishlist.tooltip", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_meta', (($tmp = $_smarty_tpl->getValue('wishlist_but_meta') ?? null)===null||$tmp==='' ? "ut2-add-to-wish ".((string)$_smarty_tpl->getValue('ajax_class')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_href', (($tmp = $_smarty_tpl->getValue('wishlist_but_href') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_href') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('but_label', (($tmp = $_smarty_tpl->getValue('wishlist_but_label') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_label') ?? null : $tmp), false, NULL);?>

<a class="
	<?php if ($_smarty_tpl->getValue('but_meta')) {
echo $_smarty_tpl->getValue('but_meta');
}?>
	<?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_label')) {?> label<?php }?>
	<?php if ($_smarty_tpl->getValue('but_name')) {?> cm-submit<?php }?>
	<?php if ($_smarty_tpl->getValue('but_tooltip') && !$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('but_id')) {?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->getValue('wishlist_button_type') == "icon") {?><i class="ut2-icon-baseline-favorite_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
    <?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_but_label') || $_smarty_tpl->getValue('but_label') && !$_smarty_tpl->getValue('hidden_but_label')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>
</a>
<?php }
}
}
