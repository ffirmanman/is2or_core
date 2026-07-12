<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:48
  from 'tygh:addons/ab__seo_filters/hooks/categories/view.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a082741b9_54531088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f09ba798db371e16796077d8be7339ad2ebc736f' => 
    array (
      0 => 'addons/ab__seo_filters/hooks/categories/view.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a082741b9_54531088 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/hooks/categories';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('ids', $_smarty_tpl->getSmarty()->getModifierCallback('explode')(',',$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('addons')['ab__seo_filters']['block_id'])), false, NULL);
if ($_smarty_tpl->getValue('ab__sf_seo_page') == 'Y' && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products')) == 0 && $_smarty_tpl->getValue('ids')) {?>
    <?php $_smarty_tpl->assign('temp_mainbox_title', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox_title'), false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ids'), 'id');
$foreach66DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value) {
$foreach66DoElse = false;
echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('id'),'dispatch'=>"categories.view",'use_cache'=>true,'parse_js'=>false), $_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getValue('temp_mainbox_title');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_filters/hooks/categories/view.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_filters/hooks/categories/view.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('ids', $_smarty_tpl->getSmarty()->getModifierCallback('explode')(',',$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('addons')['ab__seo_filters']['block_id'])), false, NULL);
if ($_smarty_tpl->getValue('ab__sf_seo_page') == 'Y' && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products')) == 0 && $_smarty_tpl->getValue('ids')) {?>
    <?php $_smarty_tpl->assign('temp_mainbox_title', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox_title'), false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ids'), 'id');
$foreach67DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value) {
$foreach67DoElse = false;
echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('id'),'dispatch'=>"categories.view",'use_cache'=>true,'parse_js'=>false), $_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getValue('temp_mainbox_title');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
