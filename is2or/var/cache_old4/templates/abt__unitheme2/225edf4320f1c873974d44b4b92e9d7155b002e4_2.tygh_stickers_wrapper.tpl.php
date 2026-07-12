<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ffd53ae2_18719082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225edf4320f1c873974d44b4b92e9d7155b002e4' => 
    array (
      0 => 'addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ffd53ae2_18719082 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('text_style', $_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerStyles::TEXT'), false, NULL);
$_smarty_tpl->assign('graphic_style', $_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerStyles::GRAPHIC'), false, NULL);
$_smarty_tpl->assign('product_labels_place', $_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerPlaces::PRODUCT_IMAGE'), false, NULL);?>

<?php $_smarty_tpl->assign('show_stickers', (($tmp = $_smarty_tpl->getValue('show_stickers') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('controller_mode', ((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('controller_mode') === "product_features.compare" && $_smarty_tpl->getValue('block')['type'] === "main") {?>
    <?php $_smarty_tpl->assign('show_stickers', false, false, NULL);
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:show_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_stickers')) {?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_view_type')($_REQUEST,(($tmp = $_smarty_tpl->getValue('block') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
        <?php $_smarty_tpl->assign('template', "detailed_page", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('block')['type'] !== "main" && $_smarty_tpl->getValue('block')['properties']['template']) {?>
        <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('block')['properties']['template'], false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('ab__stickers_current_tmpl')) {?>
        <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('ab__stickers_current_tmpl'), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('template_id', '', false, NULL);?>
    <?php $_smarty_tpl->assign('displays', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_templates_displays')(), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('displays'), 'display');
$foreach86DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display')->value) {
$foreach86DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('display')['tpl'] === $_smarty_tpl->getValue('template')) {?>
            <?php $_smarty_tpl->assign('template_id', $_smarty_tpl->getValue('display')['id'], false, NULL);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->assign('product_id', 0, false, NULL);?>
    <?php $_smarty_tpl->assign('used_obj_id', (($tmp = $_smarty_tpl->getValue('ab__stickers_obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('obj_id') ?? null : $tmp), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('product')['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_REQUEST['product_id'], false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('display_places', (($tmp = $_smarty_tpl->getValue('display_places') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('display_places'), 'display_place');
$foreach87DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display_place')->value) {
$foreach87DoElse = false;
?>
        <?php $_smarty_tpl->assign('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->getValue('display_place')['id'])."_".((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('stickers_capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['ab__stickers'], 'sticker_display_place', false, 'sticker_display_place_key');
$foreach88DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sticker_display_place_key')->value => $_smarty_tpl->getVariable('sticker_display_place')->value) {
$foreach88DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('obj_prefix') && $_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->getValue('sticker_display_place_key'))."_".((string)$_smarty_tpl->getValue('obj_real_id')), null, null);?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                    <div class="ab-stickers-wrapper ab-hidden">
                <?php }?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sticker_display_place'), 'position');
$foreach89DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('position')->key => $_smarty_tpl->getVariable('position')->value) {
$foreach89DoElse = false;
$foreach89Backup = clone $_smarty_tpl->getVariable('position');
?>
                    <?php $_smarty_tpl->assign('pos_counter', 0, false, NULL);?>
                    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('str_replace')('.','_',$_smarty_tpl->getValue('sticker_display_place_key'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable28=ob_get_clean();
$_smarty_tpl->assign('container_class', "ab-stickers-container__".$_prefixVariable28, false, NULL);?>

                    <?php if ($_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                        <?php $_smarty_tpl->assign('container_class', ((string)$_smarty_tpl->getValue('container_class'))." ab-stickers-container__".((string)$_smarty_tpl->getVariable('position')->key).((string)$_smarty_tpl->getValue('addons')['ab__stickers']['output_position']), false, NULL);?>
                        <?php $_smarty_tpl->assign('container_class', ((string)$_smarty_tpl->getValue('container_class'))." ".((string)$_smarty_tpl->getValue('addons')['ab__stickers'][((string)$_smarty_tpl->getVariable('position')->key).((string)$_smarty_tpl->getValue('addons')['ab__stickers']['output_position'])."_output_type"])."-filling", false, NULL);?>
                    <?php }?>

                    <div class="ab-stickers-container <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_class')), ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('position'), 'sticker');
$foreach90DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sticker')->value) {
$foreach90DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('pos_counter') < $_smarty_tpl->getValue('addons')['ab__stickers'][((string)$_smarty_tpl->getVariable('position')->key).((string)$_smarty_tpl->getValue('addons')['ab__stickers']['output_position'])."_max_count"] || $_smarty_tpl->getValue('sticker_display_place_key') !== $_smarty_tpl->getValue('product_labels_place')) {?>
                                <?php if ($_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                                    <?php $_smarty_tpl->assign('pos_counter', $_smarty_tpl->getValue('pos_counter')+1, false, NULL);?>
                                <?php }?>

                                <?php $_smarty_tpl->assign('view_type', (($tmp = $_smarty_tpl->getValue('sticker')['display_on'][$_smarty_tpl->getValue('template')] ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp), false, NULL);?>
                                <?php $_smarty_tpl->assign('sticker_class', '', false, NULL);?>

                                <?php if ($_smarty_tpl->getValue('sticker')['style'] == $_smarty_tpl->getValue('graphic_style')) {?>
                                    <?php $_smarty_tpl->assign('sticker_class', " small-image-size-".((string)$_smarty_tpl->getValue('sticker')['appearance']['small_size_image_size']), false, NULL);?>
                                    <?php $_smarty_tpl->assign('sticker_class', ((string)$_smarty_tpl->getValue('sticker_class'))." full-image-size-".((string)$_smarty_tpl->getValue('sticker')['appearance']['full_size_image_size']), false, NULL);?>
                                <?php }?>

                                <div class="ab-sticker-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_type')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticker_class')), ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticker')['sticker_id']), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('template_id')) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('template_id')), ENT_QUOTES, 'UTF-8');
}?>"></div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                <?php
$_smarty_tpl->setVariable('position', $foreach89Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                    </div>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('display_places'), 'display_place');
$foreach91DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display_place')->value) {
$foreach91DoElse = false;
?>
        <?php $_smarty_tpl->assign('display_place_id', $_smarty_tpl->getValue('display_place')['id'], false, NULL);?>
        <?php $_smarty_tpl->assign('display_place_pos', $_smarty_tpl->getValue('display_place')['position'], false, NULL);?>
        <?php $_smarty_tpl->assign('display_place_capture_key', $_smarty_tpl->getSmarty()->getModifierCallback('explode')('.',$_smarty_tpl->getValue('display_place_id')), false, NULL);?>
        <?php $_smarty_tpl->assign('display_place_capture_key', (($tmp = $_smarty_tpl->getValue('display_place_capture_key')[0] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product_labels_place') ?? null : $tmp), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('obj_prefix') && $_smarty_tpl->getValue('display_place_capture_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('capture_name', ((string)$_smarty_tpl->getValue('display_place_capture_key'))."_".((string)$_smarty_tpl->getValue('obj_real_id')), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('is_hook')) {?>
            <?php $_smarty_tpl->assign('capture_name', ((string)$_smarty_tpl->getValue('capture_name'))."_hook", false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('sticker_exists', false, false, NULL);?>
        <?php $_smarty_tpl->assign('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->getValue('display_place_id'))."_".((string)$_smarty_tpl->getValue('obj_real_id')), false, NULL);?>
        <?php $_smarty_tpl->assign('stickers_capture_content', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('stickers_capture_name')), false, NULL);?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_strip_tags')($_smarty_tpl->getValue('stickers_capture_content'),"<div>"))) {?>
            <?php $_smarty_tpl->assign('sticker_exists', true, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('sticker_exists')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('capture_name'), null, null);?>
                <?php if ($_smarty_tpl->getValue('is_hook') || !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('display_place_pos'),array('before','after'))) {?>
                    <?php echo $_smarty_tpl->getValue('stickers_capture_content');?>

                <?php } elseif ($_smarty_tpl->getValue('display_place_pos') === 'before') {?>
                    <?php echo $_smarty_tpl->getValue('stickers_capture_content');?>

                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

                <?php } elseif ($_smarty_tpl->getValue('display_place_pos') === 'after') {?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

                    <?php echo $_smarty_tpl->getValue('stickers_capture_content');?>

                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getValue('is_hook')) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('display_place_capture_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('stickers_capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:show_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('text_style', $_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerStyles::TEXT'), false, NULL);
$_smarty_tpl->assign('graphic_style', $_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerStyles::GRAPHIC'), false, NULL);
$_smarty_tpl->assign('product_labels_place', $_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerPlaces::PRODUCT_IMAGE'), false, NULL);?>

<?php $_smarty_tpl->assign('show_stickers', (($tmp = $_smarty_tpl->getValue('show_stickers') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('controller_mode', ((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('controller_mode') === "product_features.compare" && $_smarty_tpl->getValue('block')['type'] === "main") {?>
    <?php $_smarty_tpl->assign('show_stickers', false, false, NULL);
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:show_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_stickers')) {?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_view_type')($_REQUEST,(($tmp = $_smarty_tpl->getValue('block') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
        <?php $_smarty_tpl->assign('template', "detailed_page", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('block')['type'] !== "main" && $_smarty_tpl->getValue('block')['properties']['template']) {?>
        <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('block')['properties']['template'], false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('ab__stickers_current_tmpl')) {?>
        <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('ab__stickers_current_tmpl'), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('template_id', '', false, NULL);?>
    <?php $_smarty_tpl->assign('displays', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_templates_displays')(), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('displays'), 'display');
$foreach92DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display')->value) {
$foreach92DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('display')['tpl'] === $_smarty_tpl->getValue('template')) {?>
            <?php $_smarty_tpl->assign('template_id', $_smarty_tpl->getValue('display')['id'], false, NULL);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->assign('product_id', 0, false, NULL);?>
    <?php $_smarty_tpl->assign('used_obj_id', (($tmp = $_smarty_tpl->getValue('ab__stickers_obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('obj_id') ?? null : $tmp), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('product')['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
    <?php } elseif ($_REQUEST['product_id']) {?>
        <?php $_smarty_tpl->assign('product_id', $_REQUEST['product_id'], false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('display_places', (($tmp = $_smarty_tpl->getValue('display_places') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('display_places'), 'display_place');
$foreach93DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display_place')->value) {
$foreach93DoElse = false;
?>
        <?php $_smarty_tpl->assign('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->getValue('display_place')['id'])."_".((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('stickers_capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['ab__stickers'], 'sticker_display_place', false, 'sticker_display_place_key');
$foreach94DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sticker_display_place_key')->value => $_smarty_tpl->getVariable('sticker_display_place')->value) {
$foreach94DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('obj_prefix') && $_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__stickers_".((string)$_smarty_tpl->getValue('sticker_display_place_key'))."_".((string)$_smarty_tpl->getValue('obj_real_id')), null, null);?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                    <div class="ab-stickers-wrapper ab-hidden">
                <?php }?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sticker_display_place'), 'position');
$foreach95DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('position')->key => $_smarty_tpl->getVariable('position')->value) {
$foreach95DoElse = false;
$foreach95Backup = clone $_smarty_tpl->getVariable('position');
?>
                    <?php $_smarty_tpl->assign('pos_counter', 0, false, NULL);?>
                    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('str_replace')('.','_',$_smarty_tpl->getValue('sticker_display_place_key'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable29=ob_get_clean();
$_smarty_tpl->assign('container_class', "ab-stickers-container__".$_prefixVariable29, false, NULL);?>

                    <?php if ($_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                        <?php $_smarty_tpl->assign('container_class', ((string)$_smarty_tpl->getValue('container_class'))." ab-stickers-container__".((string)$_smarty_tpl->getVariable('position')->key).((string)$_smarty_tpl->getValue('addons')['ab__stickers']['output_position']), false, NULL);?>
                        <?php $_smarty_tpl->assign('container_class', ((string)$_smarty_tpl->getValue('container_class'))." ".((string)$_smarty_tpl->getValue('addons')['ab__stickers'][((string)$_smarty_tpl->getVariable('position')->key).((string)$_smarty_tpl->getValue('addons')['ab__stickers']['output_position'])."_output_type"])."-filling", false, NULL);?>
                    <?php }?>

                    <div class="ab-stickers-container <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_class')), ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('position'), 'sticker');
$foreach96DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sticker')->value) {
$foreach96DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('pos_counter') < $_smarty_tpl->getValue('addons')['ab__stickers'][((string)$_smarty_tpl->getVariable('position')->key).((string)$_smarty_tpl->getValue('addons')['ab__stickers']['output_position'])."_max_count"] || $_smarty_tpl->getValue('sticker_display_place_key') !== $_smarty_tpl->getValue('product_labels_place')) {?>
                                <?php if ($_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                                    <?php $_smarty_tpl->assign('pos_counter', $_smarty_tpl->getValue('pos_counter')+1, false, NULL);?>
                                <?php }?>

                                <?php $_smarty_tpl->assign('view_type', (($tmp = $_smarty_tpl->getValue('sticker')['display_on'][$_smarty_tpl->getValue('template')] ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp), false, NULL);?>
                                <?php $_smarty_tpl->assign('sticker_class', '', false, NULL);?>

                                <?php if ($_smarty_tpl->getValue('sticker')['style'] == $_smarty_tpl->getValue('graphic_style')) {?>
                                    <?php $_smarty_tpl->assign('sticker_class', " small-image-size-".((string)$_smarty_tpl->getValue('sticker')['appearance']['small_size_image_size']), false, NULL);?>
                                    <?php $_smarty_tpl->assign('sticker_class', ((string)$_smarty_tpl->getValue('sticker_class'))." full-image-size-".((string)$_smarty_tpl->getValue('sticker')['appearance']['full_size_image_size']), false, NULL);?>
                                <?php }?>

                                <div class="ab-sticker-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_type')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticker_class')), ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sticker')['sticker_id']), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('template_id')) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('template_id')), ENT_QUOTES, 'UTF-8');
}?>"></div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                <?php
$_smarty_tpl->setVariable('position', $foreach95Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('sticker_display_place_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
                    </div>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('display_places'), 'display_place');
$foreach97DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display_place')->value) {
$foreach97DoElse = false;
?>
        <?php $_smarty_tpl->assign('display_place_id', $_smarty_tpl->getValue('display_place')['id'], false, NULL);?>
        <?php $_smarty_tpl->assign('display_place_pos', $_smarty_tpl->getValue('display_place')['position'], false, NULL);?>
        <?php $_smarty_tpl->assign('display_place_capture_key', $_smarty_tpl->getSmarty()->getModifierCallback('explode')('.',$_smarty_tpl->getValue('display_place_id')), false, NULL);?>
        <?php $_smarty_tpl->assign('display_place_capture_key', (($tmp = $_smarty_tpl->getValue('display_place_capture_key')[0] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product_labels_place') ?? null : $tmp), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('obj_prefix') && $_smarty_tpl->getValue('display_place_capture_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('obj_real_id', ((string)$_smarty_tpl->getValue('used_obj_id')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('capture_name', ((string)$_smarty_tpl->getValue('display_place_capture_key'))."_".((string)$_smarty_tpl->getValue('obj_real_id')), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('is_hook')) {?>
            <?php $_smarty_tpl->assign('capture_name', ((string)$_smarty_tpl->getValue('capture_name'))."_hook", false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('sticker_exists', false, false, NULL);?>
        <?php $_smarty_tpl->assign('stickers_capture_name', "ab__stickers_".((string)$_smarty_tpl->getValue('display_place_id'))."_".((string)$_smarty_tpl->getValue('obj_real_id')), false, NULL);?>
        <?php $_smarty_tpl->assign('stickers_capture_content', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('stickers_capture_name')), false, NULL);?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_strip_tags')($_smarty_tpl->getValue('stickers_capture_content'),"<div>"))) {?>
            <?php $_smarty_tpl->assign('sticker_exists', true, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('sticker_exists')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('capture_name'), null, null);?>
                <?php if ($_smarty_tpl->getValue('is_hook') || !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('display_place_pos'),array('before','after'))) {?>
                    <?php echo $_smarty_tpl->getValue('stickers_capture_content');?>

                <?php } elseif ($_smarty_tpl->getValue('display_place_pos') === 'before') {?>
                    <?php echo $_smarty_tpl->getValue('stickers_capture_content');?>

                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

                <?php } elseif ($_smarty_tpl->getValue('display_place_pos') === 'after') {?>
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

                    <?php echo $_smarty_tpl->getValue('stickers_capture_content');?>

                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getValue('is_hook')) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('display_place_capture_key') === $_smarty_tpl->getValue('product_labels_place')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('stickers_capture_name'), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:show_stickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
