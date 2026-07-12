<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/warehouses/hooks/checkout/shipping_methods_list.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29bb00e82_53687572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9297eff562a3168a738006064e868444eff7d0d' => 
    array (
      0 => 'addons/warehouses/hooks/checkout/shipping_methods_list.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea29bb00e82_53687572 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/warehouses/hooks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.shipping_delay_for_products','warehouses.shipping_delay_for_products'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['warn_about_delay']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.shipping_delay_for_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/warehouses/hooks/checkout/shipping_methods_list.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/warehouses/hooks/checkout/shipping_methods_list.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['warn_about_delay']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.shipping_delay_for_products", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </div>
    </div>
<?php }
}
}
}
