<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a004511e8_23768379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc9463ae8bf929b345ae3808d229935f87fdd56c' => 
    array (
      0 => 'addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a004511e8_23768379 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('controller_mode', ((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']), false, NULL);?>

<?php $_smarty_tpl->assign('skip', false, false, NULL);
if ($_smarty_tpl->getValue('controller_mode') == "product_features.compare" && $_smarty_tpl->getValue('block')['type'] == "main") {?>
    <?php $_smarty_tpl->assign('skip', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_view_type')($_REQUEST,(($tmp = $_smarty_tpl->getValue('block') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
    <?php $_smarty_tpl->assign('template', "detailed_page", false, NULL);
} elseif ($_smarty_tpl->getValue('block')['type'] != "main" && $_smarty_tpl->getValue('block')['properties']['template']) {?>
    <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('block')['properties']['template'], false, NULL);
} elseif ($_smarty_tpl->getValue('ab__stickers_current_tmpl')) {?>
    <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('ab__stickers_current_tmpl'), false, NULL);
}?>

<?php $_smarty_tpl->assign('template_id', '', false, NULL);?>

<?php $_smarty_tpl->assign('displays', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_templates_displays')(), false, NULL);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('displays'), 'display');
$foreach112DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display')->value) {
$foreach112DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('display')['tpl'] === $_smarty_tpl->getValue('template')) {?>
        <?php $_smarty_tpl->assign('template_id', $_smarty_tpl->getValue('display')['id'], false, NULL);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->assign('pictogram_views', array($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')=>array(0),$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')=>array(0)), false, NULL);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['ab__s_pictograms'], 'pictogram');
$foreach113DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pictogram')->key => $_smarty_tpl->getVariable('pictogram')->value) {
$foreach113DoElse = false;
$foreach113Backup = clone $_smarty_tpl->getVariable('pictogram');
?>
    <?php $_smarty_tpl->assign('view_type', (($tmp = $_smarty_tpl->getValue('pictogram')['display_on'][$_smarty_tpl->getValue('template')] ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('view_type_var', ((string)$_smarty_tpl->getValue('view_type'))."_image_size", false, NULL);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('pictogram_views') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('view_type')][] = $_smarty_tpl->getValue('pictogram')['appearance'][$_smarty_tpl->getValue('view_type_var')];
$_smarty_tpl->assign('pictogram_views', $_tmp_array, false, NULL);
$_smarty_tpl->setVariable('pictogram', $foreach113Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->assign('pictogram_views', $_smarty_tpl->getSmarty()->getModifierCallback('array_unique')($_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('pictogram_views')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')],$_smarty_tpl->getValue('pictogram_views')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')])), false, NULL);?>

<?php if ($_smarty_tpl->getValue('skip') === false) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('product')['ab__s_pictograms']) {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ab-s-pictograms-wrapper ab-s-pictograms-wrapper-h-<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('max')($_smarty_tpl->getValue('pictogram_views'))), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('position')) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('key_1')) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_1')), ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php if ($_smarty_tpl->getValue('product')['ab__s_pictograms']) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['ab__s_pictograms'], 'pictogram');
$foreach114DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pictogram')->key => $_smarty_tpl->getVariable('pictogram')->value) {
$foreach114DoElse = false;
$foreach114Backup = clone $_smarty_tpl->getVariable('pictogram');
?>
                    <?php $_smarty_tpl->assign('view_type', (($tmp = $_smarty_tpl->getValue('pictogram')['display_on'][$_smarty_tpl->getValue('template')] ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp), false, NULL);?>

                    <div class="ab-s-pictogram ab-sticker-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('view_type') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 small-image-size-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pictogram')['appearance']['small_size_image_size']), ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pictogram')['appearance']['full_size_image_size']), ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('pictogram')->key), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('template_id')) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('template_id')), ENT_QUOTES, 'UTF-8');
}?>"></div>
                <?php
$_smarty_tpl->setVariable('pictogram', $foreach114Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('controller_mode', ((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']), false, NULL);?>

<?php $_smarty_tpl->assign('skip', false, false, NULL);
if ($_smarty_tpl->getValue('controller_mode') == "product_features.compare" && $_smarty_tpl->getValue('block')['type'] == "main") {?>
    <?php $_smarty_tpl->assign('skip', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_view_type')($_REQUEST,(($tmp = $_smarty_tpl->getValue('block') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page') {?>
    <?php $_smarty_tpl->assign('template', "detailed_page", false, NULL);
} elseif ($_smarty_tpl->getValue('block')['type'] != "main" && $_smarty_tpl->getValue('block')['properties']['template']) {?>
    <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('block')['properties']['template'], false, NULL);
} elseif ($_smarty_tpl->getValue('ab__stickers_current_tmpl')) {?>
    <?php $_smarty_tpl->assign('template', $_smarty_tpl->getValue('ab__stickers_current_tmpl'), false, NULL);
}?>

<?php $_smarty_tpl->assign('template_id', '', false, NULL);?>

<?php $_smarty_tpl->assign('displays', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_templates_displays')(), false, NULL);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('displays'), 'display');
$foreach115DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('display')->value) {
$foreach115DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('display')['tpl'] === $_smarty_tpl->getValue('template')) {?>
        <?php $_smarty_tpl->assign('template_id', $_smarty_tpl->getValue('display')['id'], false, NULL);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->assign('pictogram_views', array($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')=>array(0),$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')=>array(0)), false, NULL);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['ab__s_pictograms'], 'pictogram');
$foreach116DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pictogram')->key => $_smarty_tpl->getVariable('pictogram')->value) {
$foreach116DoElse = false;
$foreach116Backup = clone $_smarty_tpl->getVariable('pictogram');
?>
    <?php $_smarty_tpl->assign('view_type', (($tmp = $_smarty_tpl->getValue('pictogram')['display_on'][$_smarty_tpl->getValue('template')] ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('view_type_var', ((string)$_smarty_tpl->getValue('view_type'))."_image_size", false, NULL);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('pictogram_views') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('view_type')][] = $_smarty_tpl->getValue('pictogram')['appearance'][$_smarty_tpl->getValue('view_type_var')];
$_smarty_tpl->assign('pictogram_views', $_tmp_array, false, NULL);
$_smarty_tpl->setVariable('pictogram', $foreach116Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->assign('pictogram_views', $_smarty_tpl->getSmarty()->getModifierCallback('array_unique')($_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('pictogram_views')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')],$_smarty_tpl->getValue('pictogram_views')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')])), false, NULL);?>

<?php if ($_smarty_tpl->getValue('skip') === false) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('product')['ab__s_pictograms']) {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ab-s-pictograms-wrapper ab-s-pictograms-wrapper-h-<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('max')($_smarty_tpl->getValue('pictogram_views'))), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('position')) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('key_1')) {?> ab-s-pictograms-wrapper-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_1')), ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php if ($_smarty_tpl->getValue('product')['ab__s_pictograms']) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['ab__s_pictograms'], 'pictogram');
$foreach117DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pictogram')->key => $_smarty_tpl->getVariable('pictogram')->value) {
$foreach117DoElse = false;
$foreach117Backup = clone $_smarty_tpl->getVariable('pictogram');
?>
                    <?php $_smarty_tpl->assign('view_type', (($tmp = $_smarty_tpl->getValue('pictogram')['display_on'][$_smarty_tpl->getValue('template')] ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::SMALL')) ?? null : $tmp), false, NULL);?>

                    <div class="ab-s-pictogram ab-sticker-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('view_type') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerSizes::FULL')) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 small-image-size-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pictogram')['appearance']['small_size_image_size']), ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pictogram')['appearance']['full_size_image_size']), ENT_QUOTES, 'UTF-8');?>
" data-ab-sticker-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('pictogram')->key), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('template_id')) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('template_id')), ENT_QUOTES, 'UTF-8');
}?>"></div>
                <?php
$_smarty_tpl->setVariable('pictogram', $foreach117Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__stickers:product_pictograms"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
