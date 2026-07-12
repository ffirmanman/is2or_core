<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:38
  from 'tygh:common/subheader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabe116e00_11359027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1943a5f4adae904b7e87cab5e68616477ca19722' => 
    array (
      0 => 'common/subheader.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 2,
  ),
))) {
function content_69adaabe116e00_11359027 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('class') ?? null)===null||$tmp==='' ? "ty-subheader" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getValue('extra');?>

    <?php echo $_smarty_tpl->getValue('title');?>


    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tooltip'))) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->getValue('tooltip'),'params'=>"ty-subheader__tooltip"), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/subheader.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/subheader.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('class') ?? null)===null||$tmp==='' ? "ty-subheader" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getValue('extra');?>

    <?php echo $_smarty_tpl->getValue('title');?>


    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tooltip'))) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->getValue('tooltip'),'params'=>"ty-subheader__tooltip"), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
</div><?php }
}
}
