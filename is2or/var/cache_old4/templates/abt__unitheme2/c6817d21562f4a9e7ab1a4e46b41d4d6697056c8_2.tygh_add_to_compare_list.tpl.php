<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff701a69_38050395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6817d21562f4a9e7ab1a4e46b41d4d6697056c8' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ff701a69_38050395 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('add_to_comparison_list','compare','add_to_comparison_list','compare'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('product')['company_id'] && $_smarty_tpl->getValue('show_add_to_cart') && (!$_smarty_tpl->getValue('details_page') || $_smarty_tpl->getValue('quick_view'))) {?>
    <?php } else { ?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->assign('ajax_class', "cm-ajax cm-ajax-full-render", false, NULL);?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('hide_compare_list_button')) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('config') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['current_url'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"layout");
$_smarty_tpl->assign('config', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->assign('compare_button_type', (($tmp = $_smarty_tpl->getValue('compare_button_type') ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_meta', (($tmp = $_smarty_tpl->getValue('compare_but_meta') ?? null)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->getValue('ajax_class')) ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_title', (($tmp = $_smarty_tpl->getValue('compare_but_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_target_id', (($tmp = $_smarty_tpl->getValue('compare_but_target_id') ?? null)===null||$tmp==='' ? "comparison_list,account_info*" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_rel', (($tmp = $_smarty_tpl->getValue('compare_but_rel') ?? null)===null||$tmp==='' ? "nofollow" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('c_url', (($tmp = $_smarty_tpl->getValue('redirect_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_label', (($tmp = $_smarty_tpl->getValue('compare_but_label') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_label') ?? null : $tmp), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('selected_layout')) {?>
            <?php $_smarty_tpl->assign('c_url', ((string)$_smarty_tpl->getValue('c_url'))."&layout=".((string)$_smarty_tpl->getValue('selected_layout')), false, NULL);?>
        <?php }?>

        <?php ob_start();
echo rawurlencode((string)$_smarty_tpl->getValue('c_url'));
$_prefixVariable22=ob_get_clean();
$_smarty_tpl->assign('but_href', (($tmp = $_smarty_tpl->getValue('compare_but_href') ?? null)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&redirect_url=".$_prefixVariable22 ?? null : $tmp), false, NULL);?>

        <a class="
	<?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_label')) {?> label<?php }?>
    <?php if ($_smarty_tpl->getValue('but_tooltip') && !$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
        <?php if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
,abt__ut2_compared_products"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_id')) {?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

        <?php if ($_smarty_tpl->getValue('compare_button_type') == "icon") {?><i class="ut2-icon-addchart_black_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
        <?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_but_label') || $_smarty_tpl->getValue('but_label') && !$_smarty_tpl->getValue('hidden_but_label')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("compare", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>
        </a>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('product')['company_id'] && $_smarty_tpl->getValue('show_add_to_cart') && (!$_smarty_tpl->getValue('details_page') || $_smarty_tpl->getValue('quick_view'))) {?>
    <?php } else { ?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->assign('ajax_class', "cm-ajax cm-ajax-full-render", false, NULL);?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('hide_compare_list_button')) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('config') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['current_url'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"layout");
$_smarty_tpl->assign('config', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->assign('compare_button_type', (($tmp = $_smarty_tpl->getValue('compare_button_type') ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_meta', (($tmp = $_smarty_tpl->getValue('compare_but_meta') ?? null)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->getValue('ajax_class')) ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_title', (($tmp = $_smarty_tpl->getValue('compare_but_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_target_id', (($tmp = $_smarty_tpl->getValue('compare_but_target_id') ?? null)===null||$tmp==='' ? "comparison_list,account_info*" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_rel', (($tmp = $_smarty_tpl->getValue('compare_but_rel') ?? null)===null||$tmp==='' ? "nofollow" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('c_url', (($tmp = $_smarty_tpl->getValue('redirect_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_label', (($tmp = $_smarty_tpl->getValue('compare_but_label') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_label') ?? null : $tmp), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('selected_layout')) {?>
            <?php $_smarty_tpl->assign('c_url', ((string)$_smarty_tpl->getValue('c_url'))."&layout=".((string)$_smarty_tpl->getValue('selected_layout')), false, NULL);?>
        <?php }?>

        <?php ob_start();
echo rawurlencode((string)$_smarty_tpl->getValue('c_url'));
$_prefixVariable23=ob_get_clean();
$_smarty_tpl->assign('but_href', (($tmp = $_smarty_tpl->getValue('compare_but_href') ?? null)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&redirect_url=".$_prefixVariable23 ?? null : $tmp), false, NULL);?>

        <a class="
	<?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_label')) {?> label<?php }?>
    <?php if ($_smarty_tpl->getValue('but_tooltip') && !$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'] && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
        <?php if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
,abt__ut2_compared_products"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_id')) {?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

        <?php if ($_smarty_tpl->getValue('compare_button_type') == "icon") {?><i class="ut2-icon-addchart_black_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
        <?php if ($_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('hidden_but_label') || $_smarty_tpl->getValue('but_label') && !$_smarty_tpl->getValue('hidden_but_label')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("compare", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>
        </a>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
