<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:12
  from 'tygh:addons/ab__deal_of_the_day/components/promotion_label.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb204e14e68_27060000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c184cb22f5030c77723ff45a2b589a7aa76c11c3' => 
    array (
      0 => 'addons/ab__deal_of_the_day/components/promotion_label.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb204e14e68_27060000 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['promotions'] && $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_filter_applied_promotions')($_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']),array('show_label_in_products_lists'=>true,'exclude_hidden'=>true))) {?>
    <span class="ab_dotd_product_label ut2-icon-local_activity cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_product_label', [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></span>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/promotion_label.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/components/promotion_label.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['promotions'] && $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_filter_applied_promotions')($_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']),array('show_label_in_products_lists'=>true,'exclude_hidden'=>true))) {?>
    <span class="ab_dotd_product_label ut2-icon-local_activity cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_product_label', [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></span>
<?php }
}
}
}
