<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:48
  from 'tygh:addons/discussion/hooks/categories/view.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a081d90e6_30146373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d4b73069962524994fb1ca743ffff7c3217099' => 
    array (
      0 => 'addons/discussion/hooks/categories/view.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/block_view.tpl' => 2,
  ),
))) {
function content_69fb4a081d90e6_30146373 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/discussion/hooks/categories';
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category','discussion_title_category'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/block_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->getValue('category_data')['category_id'],'object_type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::CATEGORY"),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("discussion_title_category", [], $_smarty_tpl->getSmarty()->getLanguage()),'wrap'=>true), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/categories/view.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/discussion/hooks/categories/view.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/block_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->getValue('category_data')['category_id'],'object_type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::CATEGORY"),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("discussion_title_category", [], $_smarty_tpl->getSmarty()->getLanguage()),'wrap'=>true), (int) 0, $_smarty_current_dir);
}
}
}
