<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:08:31
  from 'tygh:addons/master_products/hooks/products/add_to_cart.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9eff9bfd74_87860789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ab370d93c28fa617a8b05d276e364318b26405' => 
    array (
      0 => 'addons/master_products/hooks/products/add_to_cart.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9eff9bfd74_87860789 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['is_vendor_products_list_item']) {?>
    <div class="ty-sellers-list__options hidden">
        <?php if ($_smarty_tpl->getValue('product')['selected_options']) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['selected_options'], 'product_option', false, 'product_option_id');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_option_id')->value => $_smarty_tpl->getVariable('product_option')->value) {
$foreach19DoElse = false;
?>
                <input type="hidden"
                       name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_option_id')), ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_option')), ENT_QUOTES, 'UTF-8');?>
"
                />
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/add_to_cart.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/add_to_cart.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['is_vendor_products_list_item']) {?>
    <div class="ty-sellers-list__options hidden">
        <?php if ($_smarty_tpl->getValue('product')['selected_options']) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['selected_options'], 'product_option', false, 'product_option_id');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_option_id')->value => $_smarty_tpl->getVariable('product_option')->value) {
$foreach20DoElse = false;
?>
                <input type="hidden"
                       name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_option_id')), ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_option')), ENT_QUOTES, 'UTF-8');?>
"
                />
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
<?php }
}
}
}
