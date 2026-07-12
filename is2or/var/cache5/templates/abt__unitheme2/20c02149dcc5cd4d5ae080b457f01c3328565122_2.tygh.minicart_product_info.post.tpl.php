<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:18:51
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/buy_together/hooks/checkout/minicart_product_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbbb939552_27163224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c02149dcc5cd4d5ae080b457f01c3328565122' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/buy_together/hooks/checkout/minicart_product_info.post.tpl',
      1 => 1747376920,
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
function content_6835bbbb939552_27163224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['extra']['buy_together']) {?>
    <ul class="ty-buy-together-cart-items__list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_cart_products']->value, '_product', false, '_key');
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_key']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['_product']->value['extra']['parent']['buy_together'] == $_smarty_tpl->tpl_vars['key']->value) {?>
                <li class="ty-buy-together-cart-items__list-item">
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
                        <div class="ty-cart-items__list-item-image">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair'],'no_ids'=>true,'lazy_load'=>false), 0, true);
?>
                        </div>
                    <?php }?>
                    <div class="ty-cart-items__list-item-desc">
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                           class="ty-buy-together-cart__item-link"><?php echo (($tmp = $_smarty_tpl->tpl_vars['_product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['_product']->value['product_id']) ?? null : $tmp);?>
</a>
                        <p>
                            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, true);
?></p>
                    </div>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_option_data']) {?>
                    <li class="ty-buy-together-cart__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['_product']->value['product_option_data']), 0, true);
?></li>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/buy_together/hooks/checkout/minicart_product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/buy_together/hooks/checkout/minicart_product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['extra']['buy_together']) {?>
    <ul class="ty-buy-together-cart-items__list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_cart_products']->value, '_product', false, '_key');
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_key']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['_product']->value['extra']['parent']['buy_together'] == $_smarty_tpl->tpl_vars['key']->value) {?>
                <li class="ty-buy-together-cart-items__list-item">
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
                        <div class="ty-cart-items__list-item-image">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair'],'no_ids'=>true,'lazy_load'=>false), 0, true);
?>
                        </div>
                    <?php }?>
                    <div class="ty-cart-items__list-item-desc">
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                           class="ty-buy-together-cart__item-link"><?php echo (($tmp = $_smarty_tpl->tpl_vars['_product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['_product']->value['product_id']) ?? null : $tmp);?>
</a>
                        <p>
                            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, true);
?></p>
                    </div>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_option_data']) {?>
                    <li class="ty-buy-together-cart__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['_product']->value['product_option_data']), 0, true);
?></li>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
}
