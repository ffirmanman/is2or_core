<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:46
  from 'tygh:blocks/product_list_templates/components/grid_list_settings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a06c3c3d9_87313028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba8ff753c431a44ca2277e71c1394c1c62def61' => 
    array (
      0 => 'blocks/product_list_templates/components/grid_list_settings.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a06c3c3d9_87313028 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('pd', 6, false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {
$_smarty_tpl->assign('mc', 1.075, false, NULL);
} else {
$_smarty_tpl->assign('mc', 1, false, NULL);
}?>

<?php if (!( !true || empty($_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height']))) {?>
    <?php $_smarty_tpl->assign('t1', $_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('t1', $_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp)), false, NULL);
}?>

<?php $_smarty_tpl->assign('nl', ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]*16.5), false, NULL);
$_smarty_tpl->assign('t4', ($_smarty_tpl->getValue('mc')*($_smarty_tpl->getValue('nl')+5)), false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t3', ($_smarty_tpl->getValue('mc')*20), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_rating')) {?>
    <?php $_smarty_tpl->assign('t2', ($_smarty_tpl->getValue('mc')*20), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t5', ($_smarty_tpl->getValue('mc')*20), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t6', ($_smarty_tpl->getValue('mc')*50), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('t6', ($_smarty_tpl->getValue('mc')*36), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_and_text' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'text')) {?>
        <?php $_smarty_tpl->assign('t7', 46, false, NULL);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
            <?php $_smarty_tpl->assign('t7', 46, false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('t7', 0, false, NULL);?>
        <?php }?>
    <?php }
} elseif (!( !true || empty($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'])) && $_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
    <?php $_smarty_tpl->assign('t7', 41, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full") {?>
    <?php $_smarty_tpl->assign('t8', ($_smarty_tpl->getValue('mc')*28), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['Appearance']['show_prices_taxed_clean'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t9', ($_smarty_tpl->getValue('mc')*16), false, NULL);
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2__grid_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2__grid_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if (( !true || empty($_smarty_tpl->getValue('block')['properties'])) && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations") {?>
        <?php $_smarty_tpl->assign('t10', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['max_features'][$_smarty_tpl->getValue('settings')['ab__device']]*($_smarty_tpl->getValue('mc')*20), false, NULL);?>
        <?php $_smarty_tpl->assign('fth', (($tmp = $_smarty_tpl->getValue('t10') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description") {?>
        <?php $_smarty_tpl->assign('t11', (($_smarty_tpl->getValue('mc')*50)+10), false, NULL);?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "variations" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations") {?>
        <?php $_smarty_tpl->assign('t12', ($_smarty_tpl->getValue('mc')*0), false, NULL);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_gl_features_height", null, null);
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('fth') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] === 'color') {?>
    <?php $_smarty_tpl->assign('t13', ($_smarty_tpl->getValue('mc')*26), false, NULL);
}?>

<?php $_smarty_tpl->assign('pth', (($tmp = $_smarty_tpl->getValue('t6') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t8') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t9') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_pr_block_height", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('pth')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('thc', (($tmp = $_smarty_tpl->getValue('t2') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t3') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t4') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t5') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t7') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t10') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t11') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t12') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t13') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->getValue('pd'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('thc', (($tmp = $_smarty_tpl->getValue('t2') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t3') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t4') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t5') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t7') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t10') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t11') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t12') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t13') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->getValue('pth')+$_smarty_tpl->getValue('pd'), false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_gl_content_height", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('thc')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_item_height"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('th', (($tmp = $_smarty_tpl->getValue('t1') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->getValue('thc')+$_smarty_tpl->getValue('pd'), false, NULL);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_item_height"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_gl_item_height", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('th')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/components/grid_list_settings.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_list_templates/components/grid_list_settings.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('pd', 6, false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {
$_smarty_tpl->assign('mc', 1.075, false, NULL);
} else {
$_smarty_tpl->assign('mc', 1, false, NULL);
}?>

<?php if (!( !true || empty($_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height']))) {?>
    <?php $_smarty_tpl->assign('t1', $_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('t1', $_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp)), false, NULL);
}?>

<?php $_smarty_tpl->assign('nl', ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]*16.5), false, NULL);
$_smarty_tpl->assign('t4', ($_smarty_tpl->getValue('mc')*($_smarty_tpl->getValue('nl')+5)), false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t3', ($_smarty_tpl->getValue('mc')*20), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_rating')) {?>
    <?php $_smarty_tpl->assign('t2', ($_smarty_tpl->getValue('mc')*20), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t5', ($_smarty_tpl->getValue('mc')*20), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t6', ($_smarty_tpl->getValue('mc')*50), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('t6', ($_smarty_tpl->getValue('mc')*36), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_and_text' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'text')) {?>
        <?php $_smarty_tpl->assign('t7', 46, false, NULL);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
            <?php $_smarty_tpl->assign('t7', 46, false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('t7', 0, false, NULL);?>
        <?php }?>
    <?php }
} elseif (!( !true || empty($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'])) && $_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
    <?php $_smarty_tpl->assign('t7', 41, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full") {?>
    <?php $_smarty_tpl->assign('t8', ($_smarty_tpl->getValue('mc')*28), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['Appearance']['show_prices_taxed_clean'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('t9', ($_smarty_tpl->getValue('mc')*16), false, NULL);
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2__grid_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2__grid_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if (( !true || empty($_smarty_tpl->getValue('block')['properties'])) && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations") {?>
        <?php $_smarty_tpl->assign('t10', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['max_features'][$_smarty_tpl->getValue('settings')['ab__device']]*($_smarty_tpl->getValue('mc')*20), false, NULL);?>
        <?php $_smarty_tpl->assign('fth', (($tmp = $_smarty_tpl->getValue('t10') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description") {?>
        <?php $_smarty_tpl->assign('t11', (($_smarty_tpl->getValue('mc')*50)+10), false, NULL);?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "variations" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations") {?>
        <?php $_smarty_tpl->assign('t12', ($_smarty_tpl->getValue('mc')*0), false, NULL);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_gl_features_height", null, null);
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('fth') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] === 'color') {?>
    <?php $_smarty_tpl->assign('t13', ($_smarty_tpl->getValue('mc')*26), false, NULL);
}?>

<?php $_smarty_tpl->assign('pth', (($tmp = $_smarty_tpl->getValue('t6') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t8') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t9') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_pr_block_height", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('pth')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('thc', (($tmp = $_smarty_tpl->getValue('t2') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t3') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t4') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t5') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t7') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t10') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t11') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t12') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t13') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->getValue('pd'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('thc', (($tmp = $_smarty_tpl->getValue('t2') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t3') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t4') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t5') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t7') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t10') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t11') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t12') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->getValue('t13') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->getValue('pth')+$_smarty_tpl->getValue('pd'), false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_gl_content_height", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('thc')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_item_height"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('th', (($tmp = $_smarty_tpl->getValue('t1') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->getValue('thc')+$_smarty_tpl->getValue('pd'), false, NULL);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_item_height"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_gl_item_height", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('th')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
