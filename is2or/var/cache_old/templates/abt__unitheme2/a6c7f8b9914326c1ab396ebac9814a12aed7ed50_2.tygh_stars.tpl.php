<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:14
  from 'tygh:addons/discussion/views/discussion/components/stars.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96066f9585_08555970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6c7f8b9914326c1ab396ebac9814a12aed7ed50' => 
    array (
      0 => 'addons/discussion/views/discussion/components/stars.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad96066f9585_08555970 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('link_target', (($tmp = $_smarty_tpl->getValue('link_target') ?? null)===null||$tmp==='' ? "auto" ?? null : $tmp), false, NULL);
if (!($_smarty_tpl->getValue('link_target') === "auto" && ($_smarty_tpl->getValue('runtime')['controller'] == "products" || $_smarty_tpl->getValue('runtime')['controller'] == "companies") && $_smarty_tpl->getValue('runtime')['mode'] === "view" && !$_smarty_tpl->getValue('product')['average_rating'])) {
$_smarty_tpl->assign('link_target', "url", false, NULL);
}?><span class="ty-nowrap ty-stars"><?php if ($_smarty_tpl->getValue('link')) {
if ($_smarty_tpl->getValue('link_target') === "url") {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('link'))), ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><a class="cm-external-click" data-ca-scroll="discussion" data-ca-external-click-id="discussion"><?php }
}
$__section_full_star_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('stars')['full']) ? count($_loop) : max(0, (int) $_loop));
$__section_full_star_0_total = $__section_full_star_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_full_star'] = new \Smarty\Variable(array());
if ($__section_full_star_0_total !== 0) {
for ($__section_full_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index'] = 0; $__section_full_star_0_iteration <= $__section_full_star_0_total; $__section_full_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index']++){
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-star ty-stars__icon"), $_smarty_tpl);
}
}
if ($_smarty_tpl->getValue('stars')['part']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-star-half ty-stars__icon"), $_smarty_tpl);
}
$__section_full_star_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('stars')['empty']) ? count($_loop) : max(0, (int) $_loop));
$__section_full_star_0_total = $__section_full_star_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_full_star'] = new \Smarty\Variable(array());
if ($__section_full_star_0_total !== 0) {
for ($__section_full_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index'] = 0; $__section_full_star_0_iteration <= $__section_full_star_0_total; $__section_full_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index']++){
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-star-empty ty-stars__icon"), $_smarty_tpl);
}
}
if ($_smarty_tpl->getValue('link')) {
if ($_smarty_tpl->getValue('product')['discussion_amount_posts'] > 0) {?><span class="cn-comments">(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion_amount_posts']), ENT_QUOTES, 'UTF-8');?>
)</span><?php }?></a><?php }?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/stars.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/discussion/views/discussion/components/stars.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('link_target', (($tmp = $_smarty_tpl->getValue('link_target') ?? null)===null||$tmp==='' ? "auto" ?? null : $tmp), false, NULL);
if (!($_smarty_tpl->getValue('link_target') === "auto" && ($_smarty_tpl->getValue('runtime')['controller'] == "products" || $_smarty_tpl->getValue('runtime')['controller'] == "companies") && $_smarty_tpl->getValue('runtime')['mode'] === "view" && !$_smarty_tpl->getValue('product')['average_rating'])) {
$_smarty_tpl->assign('link_target', "url", false, NULL);
}?><span class="ty-nowrap ty-stars"><?php if ($_smarty_tpl->getValue('link')) {
if ($_smarty_tpl->getValue('link_target') === "url") {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('link'))), ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><a class="cm-external-click" data-ca-scroll="discussion" data-ca-external-click-id="discussion"><?php }
}
$__section_full_star_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('stars')['full']) ? count($_loop) : max(0, (int) $_loop));
$__section_full_star_0_total = $__section_full_star_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_full_star'] = new \Smarty\Variable(array());
if ($__section_full_star_0_total !== 0) {
for ($__section_full_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index'] = 0; $__section_full_star_0_iteration <= $__section_full_star_0_total; $__section_full_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index']++){
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-star ty-stars__icon"), $_smarty_tpl);
}
}
if ($_smarty_tpl->getValue('stars')['part']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-star-half ty-stars__icon"), $_smarty_tpl);
}
$__section_full_star_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('stars')['empty']) ? count($_loop) : max(0, (int) $_loop));
$__section_full_star_0_total = $__section_full_star_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_full_star'] = new \Smarty\Variable(array());
if ($__section_full_star_0_total !== 0) {
for ($__section_full_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index'] = 0; $__section_full_star_0_iteration <= $__section_full_star_0_total; $__section_full_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index']++){
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-star-empty ty-stars__icon"), $_smarty_tpl);
}
}
if ($_smarty_tpl->getValue('link')) {
if ($_smarty_tpl->getValue('product')['discussion_amount_posts'] > 0) {?><span class="cn-comments">(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion_amount_posts']), ENT_QUOTES, 'UTF-8');?>
)</span><?php }?></a><?php }?></span><?php }
}
}
