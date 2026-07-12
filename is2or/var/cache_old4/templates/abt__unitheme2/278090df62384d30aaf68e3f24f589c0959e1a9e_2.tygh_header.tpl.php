<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:38:19
  from 'tygh:addons/hw_infocenter/views/hw_infocenter/components/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb525bc464e6_33217001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '278090df62384d30aaf68e3f24f589c0959e1a9e' => 
    array (
      0 => 'addons/hw_infocenter/views/hw_infocenter/components/header.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb525bc464e6_33217001 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hw_infocenter/views/hw_infocenter/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('breadcrumbs') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('breadcrumbs')) > 1) {?>
<div class="hw-infocenter__breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('breadcrumbs'), 'bc', false, 'key', 'bcn', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('bc')->value) {
$foreach4DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['total'];
if ($_smarty_tpl->getValue('key') > 1) {?><span class="ty-breadcrumbs__slash" <?php if ($_smarty_tpl->getValue('breadcrumbs_hide_last') && ($_smarty_tpl->getValue('__smarty_foreach_bcn')['last'] ?? null)) {?>style="display:none!important"<?php }?>>/</span><?php }?><span class="bread-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('key') == 0 || ($_smarty_tpl->getValue('breadcrumbs_hide_last') && ($_smarty_tpl->getValue('__smarty_foreach_bcn')['last'] ?? null))) {?> hidden<?php }?>" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><?php if ($_smarty_tpl->getValue('bc')['link']) {?><a itemprop="item" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('bc')['link'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->getValue('additional_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('additional_class')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('bc')['nofollow']) {?> rel="nofollow"<?php }?>><meta itemprop="position" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')+1), ENT_QUOTES, 'UTF-8');?>
" /><meta itemprop="name" content="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
" /><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</a><?php } else { ?><span itemprop="item" class="ty-breadcrumbs__current"><meta itemprop="position" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')+1), ENT_QUOTES, 'UTF-8');?>
" /><meta itemprop="name" content="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
" /><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</span><?php }?></span><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<?php }?>
<div class="hw-infocenter__heading">
    <h1 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');?>
</h1>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hw_infocenter/views/hw_infocenter/components/header.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hw_infocenter/views/hw_infocenter/components/header.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('breadcrumbs') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('breadcrumbs')) > 1) {?>
<div class="hw-infocenter__breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('breadcrumbs'), 'bc', false, 'key', 'bcn', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('bc')->value) {
$foreach5DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_bcn']->value['total'];
if ($_smarty_tpl->getValue('key') > 1) {?><span class="ty-breadcrumbs__slash" <?php if ($_smarty_tpl->getValue('breadcrumbs_hide_last') && ($_smarty_tpl->getValue('__smarty_foreach_bcn')['last'] ?? null)) {?>style="display:none!important"<?php }?>>/</span><?php }?><span class="bread-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('key') == 0 || ($_smarty_tpl->getValue('breadcrumbs_hide_last') && ($_smarty_tpl->getValue('__smarty_foreach_bcn')['last'] ?? null))) {?> hidden<?php }?>" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><?php if ($_smarty_tpl->getValue('bc')['link']) {?><a itemprop="item" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('bc')['link'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->getValue('additional_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('additional_class')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('bc')['nofollow']) {?> rel="nofollow"<?php }?>><meta itemprop="position" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')+1), ENT_QUOTES, 'UTF-8');?>
" /><meta itemprop="name" content="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
" /><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</a><?php } else { ?><span itemprop="item" class="ty-breadcrumbs__current"><meta itemprop="position" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')+1), ENT_QUOTES, 'UTF-8');?>
" /><meta itemprop="name" content="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
" /><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</span><?php }?></span><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<?php }?>
<div class="hw-infocenter__heading">
    <h1 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page']), ENT_QUOTES, 'UTF-8');?>
</h1>
</div><?php }
}
}
