<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:47
  from 'tygh:views/products/components/product_icon.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0715c008_74757187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7564989e0e0ef2e34aac4130ef2ee326aa1269bb' => 
    array (
      0 => 'views/products/components/product_icon.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
    'tygh:views/products/components/ab__hover_gallery.tpl' => 2,
  ),
))) {
function content_69fb4a0715c008_74757187 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('product_detail_view_url', "products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_detail_view_url", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_detail_view_url')), ENT_QUOTES, 'UTF-8');?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('product_detail_view_url', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_detail_view_url')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
    <?php $_smarty_tpl->assign('show_gallery', false, false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "main_icon", null, null);?>
    <a class="product_icon_lnk" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('product_detail_view_url')))), ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_icon:main_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_icon:main_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__hover_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_pairs'=>$_smarty_tpl->getValue('product')['image_pairs'],'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'additional_class'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']]), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    </a>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('product')['image_pairs'] && $_smarty_tpl->getValue('show_gallery')) {?>
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
        data-ca-items-count="1"
        data-ca-items-responsive="true"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
        data-ca-product-list="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tmpl')), ENT_QUOTES, 'UTF-8');?>
"
        id="icons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id_prefix')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('product')['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_icon');?>

            </div>
        <?php }?>
        <?php $_smarty_tpl->assign('fewer_items', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('product')['image_pairs'],0,5,true), false, NULL);?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fewer_items'), 'image_pair');
$foreach44DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach44DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('image_pair')) {?>
                <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('product_detail_view_url')))), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->getValue('image_pair'),'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
                    </a>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_icon');?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_icon.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/product_icon.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('product_detail_view_url', "products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_detail_view_url", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_detail_view_url')), ENT_QUOTES, 'UTF-8');?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('product_detail_view_url', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_detail_view_url')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
    <?php $_smarty_tpl->assign('show_gallery', false, false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "main_icon", null, null);?>
    <a class="product_icon_lnk" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('product_detail_view_url')))), ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_icon:main_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_icon:main_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']],array("lines","points"))) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__hover_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_pairs'=>$_smarty_tpl->getValue('product')['image_pairs'],'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'additional_class'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['enable_hover_gallery'][$_smarty_tpl->getValue('settings')['ab__device']]), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    </a>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('product')['image_pairs'] && $_smarty_tpl->getValue('show_gallery')) {?>
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
        data-ca-items-count="1"
        data-ca-items-responsive="true"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
        data-ca-product-list="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tmpl')), ENT_QUOTES, 'UTF-8');?>
"
        id="icons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id_prefix')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('product')['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_icon');?>

            </div>
        <?php }?>
        <?php $_smarty_tpl->assign('fewer_items', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('product')['image_pairs'],0,5,true), false, NULL);?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fewer_items'), 'image_pair');
$foreach45DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach45DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('image_pair')) {?>
                <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('product_detail_view_url')))), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->getValue('image_pair'),'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
                    </a>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_icon');?>

<?php }
}
}
}
