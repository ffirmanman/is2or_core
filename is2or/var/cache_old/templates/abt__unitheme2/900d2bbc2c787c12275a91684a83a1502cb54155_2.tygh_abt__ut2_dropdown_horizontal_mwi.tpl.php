<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:49
  from 'tygh:blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94fd158192_69274577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900d2bbc2c787c12275a91684a83a1502cb54155' => 
    array (
      0 => 'blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/abt__ut2_dropdown_horizontal_mwi.tpl' => 2,
  ),
))) {
function content_69ad94fd158192_69274577 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/menu';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:blocks/abt__ut2_dropdown_horizontal_mwi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('items'),'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:blocks/abt__ut2_dropdown_horizontal_mwi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('items'),'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), (int) 0, $_smarty_current_dir);
}
}
}
