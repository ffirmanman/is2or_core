<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:40
  from 'tygh:blocks/our_brands.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaac06d3386_06804932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b888de42734bc7f0bd078050a629a4e0ef24d7e6' => 
    array (
      0 => 'blocks/our_brands.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
))) {
function content_69adaac06d3386_06804932 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);
$_smarty_tpl->assign('item_quantity', (($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_quantity_desktop', $_smarty_tpl->getValue('item_quantity'), false, NULL);
$_smarty_tpl->assign('item_quantity_mobile', 1, false, NULL);?>

<?php if ($_smarty_tpl->getValue('item_quantity') > 3) {?>
    <?php $_smarty_tpl->assign('item_quantity_desktop_small', $_smarty_tpl->getValue('item_quantity')-1, false, NULL);?>
    <?php $_smarty_tpl->assign('item_quantity_tablet', $_smarty_tpl->getValue('item_quantity')-2, false, NULL);
} elseif ($_smarty_tpl->getValue('item_quantity') === 1) {?>
    <?php $_smarty_tpl->assign('item_quantity_desktop_small', $_smarty_tpl->getValue('item_quantity'), false, NULL);?>
    <?php $_smarty_tpl->assign('item_quantity_tablet', $_smarty_tpl->getValue('item_quantity'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('item_quantity_desktop_small', $_smarty_tpl->getValue('item_quantity')-1, false, NULL);?>
    <?php $_smarty_tpl->assign('item_quantity_tablet', $_smarty_tpl->getValue('item_quantity')-1, false, NULL);
}
$_smarty_tpl->assign('is_grayscale', (($tmp = $_smarty_tpl->getValue('is_grayscale') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_carousel_wrapper', (($tmp = $_smarty_tpl->getValue('show_carousel_wrapper') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_carousel_wrapper')) {?>
    <div class="ty-owl-container-wrapper <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-owl-container-wrapper--outside-navigation<?php }?>">
<?php }?>

<?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"), $_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"), $_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_desktop')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_desktop_small')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_tablet')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_mobile')), ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'brand', false, NULL, 'for_brands', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brand')->value) {
$foreach0DoElse = false;
?>
            <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>(($_smarty_tpl->getValue('is_grayscale')) ? "ty-grayscale" : ''),'image_width'=>$_smarty_tpl->getValue('block')['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('block')['properties']['thumbnail_width'],'images'=>$_smarty_tpl->getValue('brand')['image_pair'],'no_ids'=>true,'lazy_load'=>true,'obj_id'=>"scr_".((string)$_smarty_tpl->getValue('block')['block_id'])."000".((string)$_smarty_tpl->getValue('brand')['variant_id'])), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('object_img', ob_get_clean(), false, 0);
?>
            <div class="ty-center ty-scroller__item">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.view?variant_id=".((string)$_smarty_tpl->getValue('brand')['variant_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('object_img');?>
</a>
            </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->getValue('show_carousel_wrapper')) {?>
    </div>
<?php }?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('brands'),'prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->getValue('obj_prefix')),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->getValue('obj_prefix'))), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/our_brands.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/our_brands.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);
$_smarty_tpl->assign('item_quantity', (($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_quantity_desktop', $_smarty_tpl->getValue('item_quantity'), false, NULL);
$_smarty_tpl->assign('item_quantity_mobile', 1, false, NULL);?>

<?php if ($_smarty_tpl->getValue('item_quantity') > 3) {?>
    <?php $_smarty_tpl->assign('item_quantity_desktop_small', $_smarty_tpl->getValue('item_quantity')-1, false, NULL);?>
    <?php $_smarty_tpl->assign('item_quantity_tablet', $_smarty_tpl->getValue('item_quantity')-2, false, NULL);
} elseif ($_smarty_tpl->getValue('item_quantity') === 1) {?>
    <?php $_smarty_tpl->assign('item_quantity_desktop_small', $_smarty_tpl->getValue('item_quantity'), false, NULL);?>
    <?php $_smarty_tpl->assign('item_quantity_tablet', $_smarty_tpl->getValue('item_quantity'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('item_quantity_desktop_small', $_smarty_tpl->getValue('item_quantity')-1, false, NULL);?>
    <?php $_smarty_tpl->assign('item_quantity_tablet', $_smarty_tpl->getValue('item_quantity')-1, false, NULL);
}
$_smarty_tpl->assign('is_grayscale', (($tmp = $_smarty_tpl->getValue('is_grayscale') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_carousel_wrapper', (($tmp = $_smarty_tpl->getValue('show_carousel_wrapper') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_carousel_wrapper')) {?>
    <div class="ty-owl-container-wrapper <?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-owl-container-wrapper--outside-navigation<?php }?>">
<?php }?>

<?php if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"), $_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"), $_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_desktop')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_desktop_small')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_tablet')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_quantity_mobile')), ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'brand', false, NULL, 'for_brands', array (
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brand')->value) {
$foreach1DoElse = false;
?>
            <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>(($_smarty_tpl->getValue('is_grayscale')) ? "ty-grayscale" : ''),'image_width'=>$_smarty_tpl->getValue('block')['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('block')['properties']['thumbnail_width'],'images'=>$_smarty_tpl->getValue('brand')['image_pair'],'no_ids'=>true,'lazy_load'=>true,'obj_id'=>"scr_".((string)$_smarty_tpl->getValue('block')['block_id'])."000".((string)$_smarty_tpl->getValue('brand')['variant_id'])), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('object_img', ob_get_clean(), false, 0);
?>
            <div class="ty-center ty-scroller__item">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.view?variant_id=".((string)$_smarty_tpl->getValue('brand')['variant_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('object_img');?>
</a>
            </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->getValue('show_carousel_wrapper')) {?>
    </div>
<?php }?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('brands'),'prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->getValue('obj_prefix')),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->getValue('obj_prefix'))), (int) 0, $_smarty_current_dir);
}
}
}
