<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:24
  from 'tygh:addons/abt__unitheme2/hooks/index/footer.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb210dfbf52_89795167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a49dd719a4508f9320fdda0491ed78d3904c725' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/footer.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb210dfbf52_89795167 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_microdata')(''), false, NULL);
if ($_smarty_tpl->getValue('data')) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo json_encode($_smarty_tpl->getValue('data'));?>

    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/footer.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/index/footer.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_microdata')(''), false, NULL);
if ($_smarty_tpl->getValue('data')) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo json_encode($_smarty_tpl->getValue('data'));?>

    <?php echo '</script'; ?>
>
<?php }
}
}
}
