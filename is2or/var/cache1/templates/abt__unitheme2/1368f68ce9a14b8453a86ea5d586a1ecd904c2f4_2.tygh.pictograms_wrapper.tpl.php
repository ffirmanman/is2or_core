<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:16
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7cc1a493_52809380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1368f68ce9a14b8453a86ea5d586a1ecd904c2f4' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7cc1a493_52809380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('controller_mode', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']));?>

<?php $_smarty_tpl->_assignInScope('skip', false);
if ($_smarty_tpl->tpl_vars['controller_mode']->value == "product_features.compare" && $_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
    <?php $_smarty_tpl->_assignInScope('skip', true);
}?>

<?php if (fn_ab__stickers_get_view_type($_REQUEST,(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
    <?php $_smarty_tpl->_assignInScope('template', "detailed_page");
} elseif ($_smarty_tpl->tpl_vars['block']->value['type'] != "main" && $_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
    <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['block']->value['properties']['template']);
} elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
    <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value);
}?>

<?php $_smarty_tpl->_assignInScope('template_id', '');?>

<?php $_smarty_tpl->_assignInScope('displays', fn_ab__stickers_get_templates_displays());?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displays']->value, 'display');
$_smarty_tpl->tpl_vars['display']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display']->value) {
$_smarty_tpl->tpl_vars['display']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['display']->value['tpl'] === $_smarty_tpl->tpl_vars['template']->value) {?>
        <?php $_smarty_tpl->_assignInScope('template_id', $_smarty_tpl->tpl_vars['display']->value['id']);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('pictogram_views', array(smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')=>array(0),smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')=>array(0)));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms'], 'pictogram');
$_smarty_tpl->tpl_vars['pictogram']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pictogram']->key => $_smarty_tpl->tpl_vars['pictogram']->value) {
$_smarty_tpl->tpl_vars['pictogram']->do_else = false;
$__foreach_pictogram_103_saved = $_smarty_tpl->tpl_vars['pictogram'];
?>
    <?php $_smarty_tpl->_assignInScope('view_type', (($tmp = $_smarty_tpl->tpl_vars['pictogram']->value['display_on'][$_smarty_tpl->tpl_vars['template']->value] ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('view_type_var', ((string)$_smarty_tpl->tpl_vars['view_type']->value)."_image_size");?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['pictogram_views']) ? $_smarty_tpl->tpl_vars['pictogram_views']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['view_type']->value][] = $_smarty_tpl->tpl_vars['pictogram']->value['appearance'][$_smarty_tpl->tpl_vars['view_type_var']->value];
$_smarty_tpl->_assignInScope('pictogram_views', $_tmp_array);
$_smarty_tpl->tpl_vars['pictogram'] = $__foreach_pictogram_103_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('pictogram_views', array_unique(array_merge($_smarty_tpl->tpl_vars['pictogram_views']->value[smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')],$_smarty_tpl->tpl_vars['pictogram_views']->value[smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')])));?>

<?php if ($_smarty_tpl->tpl_vars['skip']->value === false) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_pictograms"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms']) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_pictograms_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ab-s-pictograms-wrapper ab-s-pictograms-wrapper-h-<?php echo htmlspecialchars((string) max($_smarty_tpl->tpl_vars['pictogram_views']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['position']->value) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['key_1']->value) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_1']->value, ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms'], 'pictogram');
$_smarty_tpl->tpl_vars['pictogram']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pictogram']->key => $_smarty_tpl->tpl_vars['pictogram']->value) {
$_smarty_tpl->tpl_vars['pictogram']->do_else = false;
$__foreach_pictogram_104_saved = $_smarty_tpl->tpl_vars['pictogram'];
?>
                    <?php $_smarty_tpl->_assignInScope('view_type', (($tmp = $_smarty_tpl->tpl_vars['pictogram']->value['display_on'][$_smarty_tpl->tpl_vars['template']->value] ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp));?>

                    <div class="ab-s-pictogram ab-sticker-<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['view_type']->value ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 small-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pictogram']->value['appearance']['small_size_image_size'], ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pictogram']->value['appearance']['full_size_image_size'], ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pictogram']->key, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['template_id']->value) {?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8');
}?>"></div>
                <?php
$_smarty_tpl->tpl_vars['pictogram'] = $__foreach_pictogram_104_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('controller_mode', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']));?>

<?php $_smarty_tpl->_assignInScope('skip', false);
if ($_smarty_tpl->tpl_vars['controller_mode']->value == "product_features.compare" && $_smarty_tpl->tpl_vars['block']->value['type'] == "main") {?>
    <?php $_smarty_tpl->_assignInScope('skip', true);
}?>

<?php if (fn_ab__stickers_get_view_type($_REQUEST,(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
    <?php $_smarty_tpl->_assignInScope('template', "detailed_page");
} elseif ($_smarty_tpl->tpl_vars['block']->value['type'] != "main" && $_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
    <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['block']->value['properties']['template']);
} elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
    <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value);
}?>

<?php $_smarty_tpl->_assignInScope('template_id', '');?>

<?php $_smarty_tpl->_assignInScope('displays', fn_ab__stickers_get_templates_displays());?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displays']->value, 'display');
$_smarty_tpl->tpl_vars['display']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display']->value) {
$_smarty_tpl->tpl_vars['display']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['display']->value['tpl'] === $_smarty_tpl->tpl_vars['template']->value) {?>
        <?php $_smarty_tpl->_assignInScope('template_id', $_smarty_tpl->tpl_vars['display']->value['id']);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('pictogram_views', array(smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')=>array(0),smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')=>array(0)));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms'], 'pictogram');
$_smarty_tpl->tpl_vars['pictogram']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pictogram']->key => $_smarty_tpl->tpl_vars['pictogram']->value) {
$_smarty_tpl->tpl_vars['pictogram']->do_else = false;
$__foreach_pictogram_106_saved = $_smarty_tpl->tpl_vars['pictogram'];
?>
    <?php $_smarty_tpl->_assignInScope('view_type', (($tmp = $_smarty_tpl->tpl_vars['pictogram']->value['display_on'][$_smarty_tpl->tpl_vars['template']->value] ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('view_type_var', ((string)$_smarty_tpl->tpl_vars['view_type']->value)."_image_size");?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['pictogram_views']) ? $_smarty_tpl->tpl_vars['pictogram_views']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['view_type']->value][] = $_smarty_tpl->tpl_vars['pictogram']->value['appearance'][$_smarty_tpl->tpl_vars['view_type_var']->value];
$_smarty_tpl->_assignInScope('pictogram_views', $_tmp_array);
$_smarty_tpl->tpl_vars['pictogram'] = $__foreach_pictogram_106_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('pictogram_views', array_unique(array_merge($_smarty_tpl->tpl_vars['pictogram_views']->value[smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')],$_smarty_tpl->tpl_vars['pictogram_views']->value[smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')])));?>

<?php if ($_smarty_tpl->tpl_vars['skip']->value === false) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_pictograms"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms']) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_pictograms_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ab-s-pictograms-wrapper ab-s-pictograms-wrapper-h-<?php echo htmlspecialchars((string) max($_smarty_tpl->tpl_vars['pictogram_views']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['position']->value) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['key_1']->value) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_1']->value, ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__s_pictograms'], 'pictogram');
$_smarty_tpl->tpl_vars['pictogram']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pictogram']->key => $_smarty_tpl->tpl_vars['pictogram']->value) {
$_smarty_tpl->tpl_vars['pictogram']->do_else = false;
$__foreach_pictogram_107_saved = $_smarty_tpl->tpl_vars['pictogram'];
?>
                    <?php $_smarty_tpl->_assignInScope('view_type', (($tmp = $_smarty_tpl->tpl_vars['pictogram']->value['display_on'][$_smarty_tpl->tpl_vars['template']->value] ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp));?>

                    <div class="ab-s-pictogram ab-sticker-<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['view_type']->value ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 small-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pictogram']->value['appearance']['small_size_image_size'], ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pictogram']->value['appearance']['full_size_image_size'], ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pictogram']->key, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['template_id']->value) {?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8');
}?>"></div>
                <?php
$_smarty_tpl->tpl_vars['pictogram'] = $__foreach_pictogram_107_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_pictograms"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
