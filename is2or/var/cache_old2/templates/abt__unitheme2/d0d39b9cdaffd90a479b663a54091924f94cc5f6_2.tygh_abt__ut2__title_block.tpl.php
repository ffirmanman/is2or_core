<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:11
  from 'tygh:blocks/static_templates/abt__ut2__title_block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafab1adc31_14315572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0d39b9cdaffd90a479b663a54091924f94cc5f6' => 
    array (
      0 => 'blocks/static_templates/abt__ut2__title_block.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafab1adc31_14315572 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/static_templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('title') || $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
    <div class="ty-mainbox-container clearfix<?php if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('details_page')) {?> details-page<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-mainbox-title<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut_center_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-center-title<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_title_line_decoration'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-title-line-decoration<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_big_size_title'] === "big") {?> ut2-big-size-title<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_big_size_title'] === "biggest") {?> ut2-biggest-size-title<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_title_opacity'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-title-opacity<?php }?>">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <span>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('title');?>

                        <?php }?>
                    </span>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/abt__ut2__title_block.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/static_templates/abt__ut2__title_block.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('title') || $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
    <div class="ty-mainbox-container clearfix<?php if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('details_page')) {?> details-page<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-mainbox-title<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut_center_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-center-title<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_title_line_decoration'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-title-line-decoration<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_big_size_title'] === "big") {?> ut2-big-size-title<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_big_size_title'] === "biggest") {?> ut2-biggest-size-title<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut_title_opacity'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-title-opacity<?php }?>">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <span>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('title');?>

                        <?php }?>
                    </span>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<?php }
}
}
}
