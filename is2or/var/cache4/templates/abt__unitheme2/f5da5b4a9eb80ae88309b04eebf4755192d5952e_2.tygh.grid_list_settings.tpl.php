<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:37
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/grid_list_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455c91547d0_18683803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5da5b4a9eb80ae88309b04eebf4755192d5952e' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/grid_list_settings.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683455c91547d0_18683803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('pd', 5);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {
$_smarty_tpl->_assignInScope('mc', 1.075);
} else {
$_smarty_tpl->_assignInScope('mc', 1);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])) {?>
    <?php $_smarty_tpl->_assignInScope('t1', $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('t1', intval((($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp)));
}?>

<?php if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>
    <?php $_smarty_tpl->_assignInScope('t2', ($_smarty_tpl->tpl_vars['mc']->value*22));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t3', ($_smarty_tpl->tpl_vars['mc']->value*20.4));
}?>

<?php $_smarty_tpl->_assignInScope('nl', ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]*16.5));
$_smarty_tpl->_assignInScope('t4', ($_smarty_tpl->tpl_vars['mc']->value*($_smarty_tpl->tpl_vars['nl']->value+2)));?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t5', ($_smarty_tpl->tpl_vars['mc']->value*16.5));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t6', ($_smarty_tpl->tpl_vars['mc']->value*50));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('t6', ($_smarty_tpl->tpl_vars['mc']->value*46));
}?>

<?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_and_text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'text')) {?>
        <?php $_smarty_tpl->_assignInScope('t7', 46);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
            <?php $_smarty_tpl->_assignInScope('t7', 46);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('t7', 0);?>
        <?php }?>
    <?php }
} elseif (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']) && $_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] === smarty_modifier_enum("YesNo::NO")) {?>
    <?php $_smarty_tpl->_assignInScope('t7', 36);
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "full") {?>
    <?php $_smarty_tpl->_assignInScope('t8', ($_smarty_tpl->tpl_vars['mc']->value*28));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t9', ($_smarty_tpl->tpl_vars['mc']->value*20));
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ut2__grid_list_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ut2__grid_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ut2__grid_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>




<?php $_smarty_tpl->_assignInScope('pth', (($tmp = $_smarty_tpl->tpl_vars['t6']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t8']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t9']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_pr_block_height", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pth']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('thc', (($tmp = $_smarty_tpl->tpl_vars['t2']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t3']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t4']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t5']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t7']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t10']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t11']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t12']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->tpl_vars['pd']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('thc', (($tmp = $_smarty_tpl->tpl_vars['t2']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t3']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t4']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t5']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t7']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t10']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t11']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t12']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->tpl_vars['pth']->value+$_smarty_tpl->tpl_vars['pd']->value);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_gl_content_height", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thc']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list_item_height"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_item_height"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('th', (($tmp = $_smarty_tpl->tpl_vars['t1']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->tpl_vars['thc']->value+$_smarty_tpl->tpl_vars['pd']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_item_height"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_gl_item_height", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/components/grid_list_settings.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/components/grid_list_settings.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('pd', 5);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {
$_smarty_tpl->_assignInScope('mc', 1.075);
} else {
$_smarty_tpl->_assignInScope('mc', 1);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])) {?>
    <?php $_smarty_tpl->_assignInScope('t1', $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('t1', intval((($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp)));
}?>

<?php if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>
    <?php $_smarty_tpl->_assignInScope('t2', ($_smarty_tpl->tpl_vars['mc']->value*22));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t3', ($_smarty_tpl->tpl_vars['mc']->value*20.4));
}?>

<?php $_smarty_tpl->_assignInScope('nl', ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]*16.5));
$_smarty_tpl->_assignInScope('t4', ($_smarty_tpl->tpl_vars['mc']->value*($_smarty_tpl->tpl_vars['nl']->value+2)));?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t5', ($_smarty_tpl->tpl_vars['mc']->value*16.5));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t6', ($_smarty_tpl->tpl_vars['mc']->value*50));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('t6', ($_smarty_tpl->tpl_vars['mc']->value*46));
}?>

<?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_and_text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'text')) {?>
        <?php $_smarty_tpl->_assignInScope('t7', 46);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
            <?php $_smarty_tpl->_assignInScope('t7', 46);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('t7', 0);?>
        <?php }?>
    <?php }
} elseif (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']) && $_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] === smarty_modifier_enum("YesNo::NO")) {?>
    <?php $_smarty_tpl->_assignInScope('t7', 36);
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "full") {?>
    <?php $_smarty_tpl->_assignInScope('t8', ($_smarty_tpl->tpl_vars['mc']->value*28));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('t9', ($_smarty_tpl->tpl_vars['mc']->value*20));
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ut2__grid_list_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ut2__grid_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ut2__grid_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>




<?php $_smarty_tpl->_assignInScope('pth', (($tmp = $_smarty_tpl->tpl_vars['t6']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t8']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t9']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_pr_block_height", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pth']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('thc', (($tmp = $_smarty_tpl->tpl_vars['t2']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t3']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t4']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t5']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t7']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t10']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t11']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t12']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->tpl_vars['pd']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('thc', (($tmp = $_smarty_tpl->tpl_vars['t2']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t3']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t4']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t5']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t7']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t10']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t11']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+(($tmp = $_smarty_tpl->tpl_vars['t12']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->tpl_vars['pth']->value+$_smarty_tpl->tpl_vars['pd']->value);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_gl_content_height", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thc']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list_item_height"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_item_height"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('th', (($tmp = $_smarty_tpl->tpl_vars['t1']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)+$_smarty_tpl->tpl_vars['thc']->value+$_smarty_tpl->tpl_vars['pd']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_item_height"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_gl_item_height", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
