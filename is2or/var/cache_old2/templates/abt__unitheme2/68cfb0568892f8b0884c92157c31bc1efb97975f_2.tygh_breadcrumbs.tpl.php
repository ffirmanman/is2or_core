<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:08
  from 'tygh:common/breadcrumbs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa8e56b03_97435242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68cfb0568892f8b0884c92157c31bc1efb97975f' => 
    array (
      0 => 'common/breadcrumbs.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/view_tools.tpl' => 2,
  ),
))) {
function content_69afafa8e56b03_97435242 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="breadcrumbs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->getValue('breadcrumbs') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('breadcrumbs')) > 1) {?>
        <?php $_smarty_tpl->assign('is_mobile', $_smarty_tpl->getValue('settings')['ab__device'] === "mobile", false, NULL);?>
        <div class="ty-breadcrumbs clearfix">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('breadcrumbs'), 'bc', false, 'key', 'bcn', array (
));
$foreach32DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('bc')->value) {
$foreach32DoElse = false;
if ($_smarty_tpl->getValue('key') != "0") {?><span class="ty-breadcrumbs__slash">/</span><?php }
if ($_smarty_tpl->getValue('bc')['link']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('bc')['link'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->getValue('additional_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('additional_class')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('bc')['nofollow']) {?> rel="nofollow"<?php }?>><bdi><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</bdi></a><?php } else { ?><span class="ty-breadcrumbs__current"><bdi><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</bdi></span><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->renderSubTemplate("tygh:common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>

        <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {?>
        <?php echo '<script'; ?>
 type="application/ld+json">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_print_bc_markup')($_smarty_tpl->getValue('breadcrumbs'));?>

        <?php echo '</script'; ?>
>
        <?php }?>
    <?php }?>
<!--breadcrumbs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/breadcrumbs.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/breadcrumbs.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="breadcrumbs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->getValue('breadcrumbs') && $_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('breadcrumbs')) > 1) {?>
        <?php $_smarty_tpl->assign('is_mobile', $_smarty_tpl->getValue('settings')['ab__device'] === "mobile", false, NULL);?>
        <div class="ty-breadcrumbs clearfix">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('breadcrumbs'), 'bc', false, 'key', 'bcn', array (
));
$foreach33DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('bc')->value) {
$foreach33DoElse = false;
if ($_smarty_tpl->getValue('key') != "0") {?><span class="ty-breadcrumbs__slash">/</span><?php }
if ($_smarty_tpl->getValue('bc')['link']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('bc')['link'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->getValue('additional_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('additional_class')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('bc')['nofollow']) {?> rel="nofollow"<?php }?>><bdi><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</bdi></a><?php } else { ?><span class="ty-breadcrumbs__current"><bdi><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('bc')['title']);?>
</bdi></span><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->renderSubTemplate("tygh:common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>

        <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {?>
        <?php echo '<script'; ?>
 type="application/ld+json">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_print_bc_markup')($_smarty_tpl->getValue('breadcrumbs'));?>

        <?php echo '</script'; ?>
>
        <?php }?>
    <?php }?>
<!--breadcrumbs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
