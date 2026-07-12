<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaadd7aa1_38211506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2b0ae5458b535cc5783f78fdab5755025134113' => 
    array (
      0 => 'addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/promotions/list.tpl' => 2,
  ),
))) {
function content_69afafaadd7aa1_38211506 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/blocks/product_tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['promotions'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['promotions']) > 1) {?>
    <?php $_smarty_tpl->assign('items', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_promotions')(array('promotion_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']))), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/promotions/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('promotions'=>$_smarty_tpl->getValue('items')[0],'show_chains'=>false), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['promotions'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['promotions']) > 1) {?>
    <?php $_smarty_tpl->assign('items', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_promotions')(array('promotion_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']))), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/promotions/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('promotions'=>$_smarty_tpl->getValue('items')[0],'show_chains'=>false), (int) 0, $_smarty_current_dir);
}
}
}
}
