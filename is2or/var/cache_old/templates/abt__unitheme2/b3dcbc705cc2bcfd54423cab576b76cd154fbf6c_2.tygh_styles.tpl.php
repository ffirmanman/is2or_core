<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:28
  from 'tygh:common/styles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9470e96603_68209885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3dcbc705cc2bcfd54423cab576b76cd154fbf6c' => 
    array (
      0 => 'common/styles.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9470e96603_68209885 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('styles')) {
throw new \Smarty\Exception('block tag \'styles\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->getValue('reflect_less')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/fonts.less"), $_smarty_tpl);?>

	
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"styles.less"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/supports.css"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/responsive.less"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"lib/select2/select2.min.css"), $_smarty_tpl);?>


        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'] || $_smarty_tpl->getValue('runtime')['customization_mode']['design']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/design_mode.css"), $_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/wysiwyg.less"), $_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/theme_editor.css"), $_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/components/block_manager.less"), $_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->getValue('language_direction') == 'rtl') {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/rtl.less"), $_smarty_tpl);?>

    <?php }?>
    
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->getValue('reflect_less')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/styles.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/styles.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('styles')) {
throw new \Smarty\Exception('block tag \'styles\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->getValue('reflect_less')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/fonts.less"), $_smarty_tpl);?>

	
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"styles.less"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/supports.css"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/responsive.less"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"lib/select2/select2.min.css"), $_smarty_tpl);?>


        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'] || $_smarty_tpl->getValue('runtime')['customization_mode']['design']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/design_mode.css"), $_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/wysiwyg.less"), $_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/theme_editor.css"), $_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/components/block_manager.less"), $_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->getValue('language_direction') == 'rtl') {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/rtl.less"), $_smarty_tpl);?>

    <?php }?>
    
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->getValue('reflect_less')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
