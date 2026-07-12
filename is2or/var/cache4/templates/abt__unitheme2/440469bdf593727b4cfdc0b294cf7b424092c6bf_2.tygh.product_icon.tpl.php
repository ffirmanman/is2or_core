<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:37
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455c9226259_70379050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '440469bdf593727b4cfdc0b294cf7b424092c6bf' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_icon.tpl',
      1 => 1736836655,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
    'tygh:views/products/components/ab__hover_gallery.tpl' => 2,
  ),
),false)) {
function content_683455c9226259_70379050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('product_detail_view_url', "products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_detail_view_url", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_view_url"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('product_detail_view_url', smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_detail_view_url')));
if (in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points"))) {?>
    <?php $_smarty_tpl->_assignInScope('show_gallery', false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "main_icon", null, null);?>
    <a class="product_icon_lnk" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_icon:main_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_icon:main_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'class'=>"img-ab-hover-gallery"), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_icon:main_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if (in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points"))) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__hover_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_pairs'=>$_smarty_tpl->tpl_vars['product']->value['image_pairs'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'additional_class'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]), 0, false);
?>
        <?php }?>
    </a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs'] && $_smarty_tpl->tpl_vars['show_gallery']->value) {?>
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
        data-ca-items-count="1"
        data-ca-items-responsive="true"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
        data-ca-product-list="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tmpl']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="icons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_icon');?>

            </div>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('fewer_items', array_slice($_smarty_tpl->tpl_vars['product']->value['image_pairs'],0,5,true));?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fewer_items']->value, 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
                <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                    <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0, true);
?>
                    </a>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_icon');?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_icon.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_icon.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('product_detail_view_url', "products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_detail_view_url", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_view_url"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('product_detail_view_url', smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_detail_view_url')));
if (in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points"))) {?>
    <?php $_smarty_tpl->_assignInScope('show_gallery', false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "main_icon", null, null);?>
    <a class="product_icon_lnk" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_icon:main_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_icon:main_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'class'=>"img-ab-hover-gallery"), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_icon:main_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if (in_array($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']],array("lines","points"))) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__hover_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_pairs'=>$_smarty_tpl->tpl_vars['product']->value['image_pairs'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'additional_class'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['enable_hover_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]), 0, true);
?>
        <?php }?>
    </a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs'] && $_smarty_tpl->tpl_vars['show_gallery']->value) {?>
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
        data-ca-items-count="1"
        data-ca-items-responsive="true"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
        data-ca-product-list="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tmpl']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="icons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_icon');?>

            </div>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('fewer_items', array_slice($_smarty_tpl->tpl_vars['product']->value['image_pairs'],0,5,true));?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fewer_items']->value, 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
                <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                    <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0, true);
?>
                    </a>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_icon');?>

<?php }
}
}
}
