<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/links_thumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21b621334_14429769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '010f4da644675d637bc039f2ac7d44d29894bd08' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/links_thumb.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:common/simple_scroller_init.tpl' => 2,
  ),
),false)) {
function content_682fe21b621334_14429769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('tmpl', 'links_thumb');?>

<?php $_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));
$_smarty_tpl->_assignInScope('button_type_add_to_cart', 'text');?>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>
<div class="ut2-scroll-container<?php if ($_smarty_tpl->tpl_vars['rows']->value !== "0") {?> one-row<?php } else { ?> multi-row<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php }?>

    <div class="ut2-thumbnail-list<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-content<?php }?>" style="--tls-pr-count: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? 10 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
            <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'hide_links'=>$_smarty_tpl->tpl_vars['hide_links']->value), 0, true);
?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_thumbnail_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_thumbnail_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ut2-thumbnail-list__item <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>ut2-scroll-item<?php }?>">
                <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                <a class="ut2-thumbnail-list__img-block <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>cm-tooltip<?php }?>" <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>"100",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true,'class'=>"ty-thumbnail-list__img"), 0, true);
if (!$_smarty_tpl->tpl_vars['products_scroller']->value) {?></a><?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['products_scroller']->value) {?>
                    <div class="ut2-thumbnail-list__name"><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number'] == "Y") {
echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                    <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi></div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                    <span class="ut2-template-small__item-price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>">
                        <span>
                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }?>
                                <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                                <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?>
                        </span>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                    </span>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?></a><?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                    <div class="ut2-thumbnail-list__butons">
                        <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_thumbnail_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>$_smarty_tpl->tpl_vars['elements_to_scroll']->value), 0, false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/links_thumb.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/links_thumb.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('tmpl', 'links_thumb');?>

<?php $_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));
$_smarty_tpl->_assignInScope('button_type_add_to_cart', 'text');?>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>
<div class="ut2-scroll-container<?php if ($_smarty_tpl->tpl_vars['rows']->value !== "0") {?> one-row<?php } else { ?> multi-row<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php }?>

    <div class="ut2-thumbnail-list<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-content<?php }?>" style="--tls-pr-count: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? 10 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
            <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'hide_links'=>$_smarty_tpl->tpl_vars['hide_links']->value), 0, true);
?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_thumbnail_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_thumbnail_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ut2-thumbnail-list__item <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>ut2-scroll-item<?php }?>">
                <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                <a class="ut2-thumbnail-list__img-block <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>cm-tooltip<?php }?>" <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>"100",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true,'class'=>"ty-thumbnail-list__img"), 0, true);
if (!$_smarty_tpl->tpl_vars['products_scroller']->value) {?></a><?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['products_scroller']->value) {?>
                    <div class="ut2-thumbnail-list__name"><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number'] == "Y") {
echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                    <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi></div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                    <span class="ut2-template-small__item-price pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>">
                        <span>
                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }?>
                                <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                                <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?>
                        </span>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                    </span>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?></a><?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                    <div class="ut2-thumbnail-list__butons">
                        <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_thumbnail_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>$_smarty_tpl->tpl_vars['elements_to_scroll']->value), 0, true);
}?>

<?php }
}
}
