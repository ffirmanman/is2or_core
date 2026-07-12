<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__stickers/hooks/products/ab__s_pictograms_pos_2.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9c10676_54848848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '240c96611a132b6f3fd7944519e9760122636777' => 
    array (
      0 => 'addons/ab__stickers/hooks/products/ab__s_pictograms_pos_2.override.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl' => 2,
  ),
))) {
function content_69afafa9c10676_54848848 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('details_page'=>$_smarty_tpl->getValue('details_page'),'product'=>$_smarty_tpl->getValue('product'),'block'=>$_smarty_tpl->getValue('block'),'position'=>"position_2",'tmpl'=>$_smarty_tpl->getValue('tmpl')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/products/ab__s_pictograms_pos_2.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/hooks/products/ab__s_pictograms_pos_2.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('details_page'=>$_smarty_tpl->getValue('details_page'),'product'=>$_smarty_tpl->getValue('product'),'block'=>$_smarty_tpl->getValue('block'),'position'=>"position_2",'tmpl'=>$_smarty_tpl->getValue('tmpl')), (int) 0, $_smarty_current_dir);
}
}
}
