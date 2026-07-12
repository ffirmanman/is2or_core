<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:addons/abt__unitheme2/hooks/pages/page_extra.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae6152732706_44617417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f7ef5f12c5ede3cd9e042376171ab0ccc758c8' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/pages/page_extra.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae6152732706_44617417 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/pages';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('page')['abt__ut2_microdata_schema_type'] && !$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__print_page_murkup')($_smarty_tpl->getValue('page'));?>

    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/pages/page_extra.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/pages/page_extra.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('page')['abt__ut2_microdata_schema_type'] && !$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST")) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__print_page_murkup')($_smarty_tpl->getValue('page'));?>

    <?php echo '</script'; ?>
>
<?php }
}
}
}
