<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:addons/ab__seo_for_blog/hooks/pages/page_extra.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae61525974d5_74779075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '426fd672ba0730f25ee65c0907acc062debf9ef6' => 
    array (
      0 => 'addons/ab__seo_for_blog/hooks/pages/page_extra.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae61525974d5_74779075 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_for_blog/hooks/pages';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('page')['ab__sfb_microdata_schema_type'] && !$_smarty_tpl->getValue('page')['abt__ut2_microdata_schema_type'] && !$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__sfb_print_page_markup')($_smarty_tpl->getValue('page'));?>

    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_for_blog/hooks/pages/page_extra.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_for_blog/hooks/pages/page_extra.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('page')['ab__sfb_microdata_schema_type'] && !$_smarty_tpl->getValue('page')['abt__ut2_microdata_schema_type'] && !$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__sfb_print_page_markup')($_smarty_tpl->getValue('page'));?>

    <?php echo '</script'; ?>
>
<?php }
}
}
}
