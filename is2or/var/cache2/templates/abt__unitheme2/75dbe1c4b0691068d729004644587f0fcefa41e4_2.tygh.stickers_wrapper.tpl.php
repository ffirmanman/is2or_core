<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21b53edd6_41047759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75dbe1c4b0691068d729004644587f0fcefa41e4' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21b53edd6_41047759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('text_style', smarty_modifier_enum('Addons\Ab_stickers\StickerStyles::TEXT'));
$_smarty_tpl->_assignInScope('graphic_style', smarty_modifier_enum('Addons\Ab_stickers\StickerStyles::GRAPHIC'));
$_smarty_tpl->_assignInScope('product_labels_place', smarty_modifier_enum('Addons\Ab_stickers\StickerPlaces::PRODUCT_IMAGE'));?>

<?php $_smarty_tpl->_assignInScope('show_stickers', (($tmp = $_smarty_tpl->tpl_vars['show_stickers']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('controller_mode', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']));?>

<?php if ($_smarty_tpl->tpl_vars['controller_mode']->value === "product_features.compare" && $_smarty_tpl->tpl_vars['block']->value['type'] === "main") {?>
    <?php $_smarty_tpl->_assignInScope('show_stickers', false);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:show_stickers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:show_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_stickers']->value) {?>
    <?php if (fn_ab__stickers_get_view_type($_REQUEST,(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
        <?php $_smarty_tpl->_assignInScope('template', "detailed_page");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] !== "main" && $_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
        <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['block']->value['properties']['template']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
        <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value);?>
    <?php }?>

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
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_assignInScope('product_id', 0);?>
    <?php $_smarty_tpl->_assignInScope('used_obj_id', (($tmp = $_smarty_tpl->tpl_vars['ab__stickers_obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['obj_id']->value ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_REQUEST['product_id']);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('display_places', (($tmp = $_smarty_tpl->tpl_vars['display_places']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_places']->value, 'display_place');
$_smarty_tpl->tpl_vars['display_place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display_place']->value) {
$_smarty_tpl->tpl_vars['display_place']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->tpl_vars['display_place']->value['id'])."_".((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers_capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__stickers'], 'sticker_display_place', false, 'sticker_display_place_key');
$_smarty_tpl->tpl_vars['sticker_display_place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker_display_place_key']->value => $_smarty_tpl->tpl_vars['sticker_display_place']->value) {
$_smarty_tpl->tpl_vars['sticker_display_place']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value && $_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['sticker_display_place_key']->value)."_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value), null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                    <div class="ab-stickers-wrapper ab-hidden">
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sticker_display_place']->value, 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
$__foreach_position_65_saved = $_smarty_tpl->tpl_vars['position'];
?>
                    <?php $_smarty_tpl->_assignInScope('pos_counter', 0);?>
                    <?php ob_start();
echo htmlspecialchars((string) str_replace('.','_',$_smarty_tpl->tpl_vars['sticker_display_place_key']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable42=ob_get_clean();
$_smarty_tpl->_assignInScope('container_class', "ab-stickers-container__".$_prefixVariable42);?>

                    <?php if ($_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('container_class', ((string)$_smarty_tpl->tpl_vars['container_class']->value)." ab-stickers-container__".((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position']));?>
                        <?php $_smarty_tpl->_assignInScope('container_class', ((string)$_smarty_tpl->tpl_vars['container_class']->value)." ".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_output_type"])."-filling");?>
                    <?php }?>

                    <div class="ab-stickers-container <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'sticker');
$_smarty_tpl->tpl_vars['sticker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['pos_counter']->value < $_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_max_count"] || $_smarty_tpl->tpl_vars['sticker_display_place_key']->value !== $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('pos_counter', $_smarty_tpl->tpl_vars['pos_counter']->value+1);?>
                                <?php }?>

                                <?php $_smarty_tpl->_assignInScope('view_type', (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['display_on'][$_smarty_tpl->tpl_vars['template']->value] ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp));?>
                                <?php $_smarty_tpl->_assignInScope('sticker_class', '');?>

                                <?php if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['graphic_style']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('sticker_class', " small-image-size-".((string)$_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size']));?>
                                    <?php $_smarty_tpl->_assignInScope('sticker_class', ((string)$_smarty_tpl->tpl_vars['sticker_class']->value)." full-image-size-".((string)$_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']));?>
                                <?php }?>

                                <div class="ab-sticker-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_type']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['sticker_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['template_id']->value) {?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8');
}?>"></div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['position'] = $__foreach_position_65_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                    </div>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_places']->value, 'display_place');
$_smarty_tpl->tpl_vars['display_place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display_place']->value) {
$_smarty_tpl->tpl_vars['display_place']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('display_place_id', $_smarty_tpl->tpl_vars['display_place']->value['id']);?>
        <?php $_smarty_tpl->_assignInScope('display_place_pos', $_smarty_tpl->tpl_vars['display_place']->value['position']);?>
        <?php $_smarty_tpl->_assignInScope('display_place_capture_key', explode('.',$_smarty_tpl->tpl_vars['display_place_id']->value));?>
        <?php $_smarty_tpl->_assignInScope('display_place_capture_key', (($tmp = $_smarty_tpl->tpl_vars['display_place_capture_key']->value[0] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_labels_place']->value ?? null : $tmp));?>

        <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value && $_smarty_tpl->tpl_vars['display_place_capture_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('capture_name', ((string)$_smarty_tpl->tpl_vars['display_place_capture_key']->value)."_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value));?>

        <?php if ($_smarty_tpl->tpl_vars['is_hook']->value) {?>
            <?php $_smarty_tpl->_assignInScope('capture_name', ((string)$_smarty_tpl->tpl_vars['capture_name']->value)."_hook");?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('sticker_exists', false);?>
        <?php $_smarty_tpl->_assignInScope('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->tpl_vars['display_place_id']->value)."_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value));?>
        <?php $_smarty_tpl->_assignInScope('stickers_capture_content', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers_capture_name']->value));?>

        <?php if (trim(strip_tags($_smarty_tpl->tpl_vars['stickers_capture_content']->value,"<div>"))) {?>
            <?php $_smarty_tpl->_assignInScope('sticker_exists', true);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sticker_exists']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value, null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['is_hook']->value || !smarty_modifier_in_array($_smarty_tpl->tpl_vars['display_place_pos']->value,array('before','after'))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['stickers_capture_content']->value;?>

                <?php } elseif ($_smarty_tpl->tpl_vars['display_place_pos']->value === 'before') {?>
                    <?php echo $_smarty_tpl->tpl_vars['stickers_capture_content']->value;?>

                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['display_place_pos']->value === 'after') {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

                    <?php echo $_smarty_tpl->tpl_vars['stickers_capture_content']->value;?>

                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['is_hook']->value) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['display_place_capture_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers_capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:show_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('text_style', smarty_modifier_enum('Addons\Ab_stickers\StickerStyles::TEXT'));
$_smarty_tpl->_assignInScope('graphic_style', smarty_modifier_enum('Addons\Ab_stickers\StickerStyles::GRAPHIC'));
$_smarty_tpl->_assignInScope('product_labels_place', smarty_modifier_enum('Addons\Ab_stickers\StickerPlaces::PRODUCT_IMAGE'));?>

<?php $_smarty_tpl->_assignInScope('show_stickers', (($tmp = $_smarty_tpl->tpl_vars['show_stickers']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('controller_mode', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']));?>

<?php if ($_smarty_tpl->tpl_vars['controller_mode']->value === "product_features.compare" && $_smarty_tpl->tpl_vars['block']->value['type'] === "main") {?>
    <?php $_smarty_tpl->_assignInScope('show_stickers', false);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:show_stickers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:show_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_stickers']->value) {?>
    <?php if (fn_ab__stickers_get_view_type($_REQUEST,(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
        <?php $_smarty_tpl->_assignInScope('template', "detailed_page");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] !== "main" && $_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
        <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['block']->value['properties']['template']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
        <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value);?>
    <?php }?>

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
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_assignInScope('product_id', 0);?>
    <?php $_smarty_tpl->_assignInScope('used_obj_id', (($tmp = $_smarty_tpl->tpl_vars['ab__stickers_obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['obj_id']->value ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->_assignInScope('product_id', $_REQUEST['product_id']);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('display_places', (($tmp = $_smarty_tpl->tpl_vars['display_places']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_places']->value, 'display_place');
$_smarty_tpl->tpl_vars['display_place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display_place']->value) {
$_smarty_tpl->tpl_vars['display_place']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->tpl_vars['display_place']->value['id'])."_".((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers_capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['ab__stickers'], 'sticker_display_place', false, 'sticker_display_place_key');
$_smarty_tpl->tpl_vars['sticker_display_place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker_display_place_key']->value => $_smarty_tpl->tpl_vars['sticker_display_place']->value) {
$_smarty_tpl->tpl_vars['sticker_display_place']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value && $_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->tpl_vars['sticker_display_place_key']->value)."_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value), null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:product_stickers_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                    <div class="ab-stickers-wrapper ab-hidden">
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sticker_display_place']->value, 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
$__foreach_position_71_saved = $_smarty_tpl->tpl_vars['position'];
?>
                    <?php $_smarty_tpl->_assignInScope('pos_counter', 0);?>
                    <?php ob_start();
echo htmlspecialchars((string) str_replace('.','_',$_smarty_tpl->tpl_vars['sticker_display_place_key']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable43=ob_get_clean();
$_smarty_tpl->_assignInScope('container_class', "ab-stickers-container__".$_prefixVariable43);?>

                    <?php if ($_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('container_class', ((string)$_smarty_tpl->tpl_vars['container_class']->value)." ab-stickers-container__".((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position']));?>
                        <?php $_smarty_tpl->_assignInScope('container_class', ((string)$_smarty_tpl->tpl_vars['container_class']->value)." ".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_output_type"])."-filling");?>
                    <?php }?>

                    <div class="ab-stickers-container <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'sticker');
$_smarty_tpl->tpl_vars['sticker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['pos_counter']->value < $_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_max_count"] || $_smarty_tpl->tpl_vars['sticker_display_place_key']->value !== $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('pos_counter', $_smarty_tpl->tpl_vars['pos_counter']->value+1);?>
                                <?php }?>

                                <?php $_smarty_tpl->_assignInScope('view_type', (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['display_on'][$_smarty_tpl->tpl_vars['template']->value] ?? null)===null||$tmp==='' ? (smarty_modifier_enum('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp));?>
                                <?php $_smarty_tpl->_assignInScope('sticker_class', '');?>

                                <?php if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['graphic_style']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('sticker_class', " small-image-size-".((string)$_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size']));?>
                                    <?php $_smarty_tpl->_assignInScope('sticker_class', ((string)$_smarty_tpl->tpl_vars['sticker_class']->value)." full-image-size-".((string)$_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']));?>
                                <?php }?>

                                <div class="ab-sticker-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_type']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['sticker_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['template_id']->value) {?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8');
}?>"></div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['position'] = $__foreach_position_71_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['sticker_display_place_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
                    </div>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_places']->value, 'display_place');
$_smarty_tpl->tpl_vars['display_place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display_place']->value) {
$_smarty_tpl->tpl_vars['display_place']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('display_place_id', $_smarty_tpl->tpl_vars['display_place']->value['id']);?>
        <?php $_smarty_tpl->_assignInScope('display_place_pos', $_smarty_tpl->tpl_vars['display_place']->value['position']);?>
        <?php $_smarty_tpl->_assignInScope('display_place_capture_key', explode('.',$_smarty_tpl->tpl_vars['display_place_id']->value));?>
        <?php $_smarty_tpl->_assignInScope('display_place_capture_key', (($tmp = $_smarty_tpl->tpl_vars['display_place_capture_key']->value[0] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_labels_place']->value ?? null : $tmp));?>

        <?php if ($_smarty_tpl->tpl_vars['obj_prefix']->value && $_smarty_tpl->tpl_vars['display_place_capture_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('obj_real_id', ((string)$_smarty_tpl->tpl_vars['used_obj_id']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('capture_name', ((string)$_smarty_tpl->tpl_vars['display_place_capture_key']->value)."_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value));?>

        <?php if ($_smarty_tpl->tpl_vars['is_hook']->value) {?>
            <?php $_smarty_tpl->_assignInScope('capture_name', ((string)$_smarty_tpl->tpl_vars['capture_name']->value)."_hook");?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('sticker_exists', false);?>
        <?php $_smarty_tpl->_assignInScope('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->tpl_vars['display_place_id']->value)."_".((string)$_smarty_tpl->tpl_vars['obj_real_id']->value));?>
        <?php $_smarty_tpl->_assignInScope('stickers_capture_content', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers_capture_name']->value));?>

        <?php if (trim(strip_tags($_smarty_tpl->tpl_vars['stickers_capture_content']->value,"<div>"))) {?>
            <?php $_smarty_tpl->_assignInScope('sticker_exists', true);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sticker_exists']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value, null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['is_hook']->value || !smarty_modifier_in_array($_smarty_tpl->tpl_vars['display_place_pos']->value,array('before','after'))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['stickers_capture_content']->value;?>

                <?php } elseif ($_smarty_tpl->tpl_vars['display_place_pos']->value === 'before') {?>
                    <?php echo $_smarty_tpl->tpl_vars['stickers_capture_content']->value;?>

                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['display_place_pos']->value === 'after') {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

                    <?php echo $_smarty_tpl->tpl_vars['stickers_capture_content']->value;?>

                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['is_hook']->value) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['display_place_capture_key']->value === $_smarty_tpl->tpl_vars['product_labels_place']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers_capture_name']->value, null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:show_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
