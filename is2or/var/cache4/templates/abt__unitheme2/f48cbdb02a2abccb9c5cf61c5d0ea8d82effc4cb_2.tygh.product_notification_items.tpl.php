<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:58:43
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_notification_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834577354f191_49699008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f48cbdb02a2abccb9c5cf61c5d0ea8d82effc4cb' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_notification_items.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:common/options_info.tpl' => 2,
  ),
),false)) {
function content_6834577354f191_49699008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:notification_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:notification_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['added_products']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['added_products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:notification_product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:notification_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-product-notification__item">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), 0, true);
?>
                <div class="ty-product-notification__content">
                    <div class="ut2-product-notification__head">
                        <div class="ut2-product-notification__head__title">
                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']);?>
</a>
                        </div>
                        <?php if (!($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
                            <div class="ty-product-notification__price">
                                <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                                    <span class="none"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_option_data']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_option_data']), 0, true);
?>
                    <?php }?>
                </div>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:notification_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['empty_text']->value, ENT_QUOTES, 'UTF-8');?>

    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:notification_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_notification_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_notification_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:notification_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:notification_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['added_products']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['added_products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:notification_product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:notification_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-product-notification__item">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), 0, true);
?>
                <div class="ty-product-notification__content">
                    <div class="ut2-product-notification__head">
                        <div class="ut2-product-notification__head__title">
                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']);?>
</a>
                        </div>
                        <?php if (!($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
                            <div class="ty-product-notification__price">
                                <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                                    <span class="none"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_option_data']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_option_data']), 0, true);
?>
                    <?php }?>
                </div>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:notification_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['empty_text']->value, ENT_QUOTES, 'UTF-8');?>

    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:notification_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
