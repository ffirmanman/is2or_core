<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/discussion/hooks/products/data_block.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff403db5_01260588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39765b1813c4c32b3f17852c915d66939edcfb88' => 
    array (
      0 => 'addons/discussion/hooks/products/data_block.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
  ),
))) {
function content_69fb49ff403db5_01260588 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/discussion/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_rating') && $_smarty_tpl->getValue('addons')['product_reviews']['status'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] == "R" || $_smarty_tpl->getValue('product')['discussion_type'] == "B") {
if ($_smarty_tpl->getValue('product')['average_rating']) {
$_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('product')['average_rating'], false, NULL);
} elseif ($_smarty_tpl->getValue('product')['discussion']['average_rating']) {
$_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('product')['discussion']['average_rating'], false, NULL);
}
if ($_smarty_tpl->getValue('average_rating') > 0) {
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating')),'link'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&selected_section=discussion#discussion"), (int) 0, $_smarty_current_dir);
}
}
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/products/data_block.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/discussion/hooks/products/data_block.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_rating') && $_smarty_tpl->getValue('addons')['product_reviews']['status'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] == "R" || $_smarty_tpl->getValue('product')['discussion_type'] == "B") {
if ($_smarty_tpl->getValue('product')['average_rating']) {
$_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('product')['average_rating'], false, NULL);
} elseif ($_smarty_tpl->getValue('product')['discussion']['average_rating']) {
$_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('product')['discussion']['average_rating'], false, NULL);
}
if ($_smarty_tpl->getValue('average_rating') > 0) {
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating')),'link'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&selected_section=discussion#discussion"), (int) 0, $_smarty_current_dir);
}
}
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
