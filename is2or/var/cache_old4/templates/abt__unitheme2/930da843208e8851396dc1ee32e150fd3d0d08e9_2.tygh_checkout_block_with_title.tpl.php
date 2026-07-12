<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:blocks/lite_checkout/wrappers/checkout_block_with_title.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5204c05176_91016462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '930da843208e8851396dc1ee32e150fd3d0d08e9' => 
    array (
      0 => 'blocks/lite_checkout/wrappers/checkout_block_with_title.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5204c05176_91016462 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/lite_checkout/wrappers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <div class="ty-mainbox-container clearfix<?php if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('details_page')) {?> details-page<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->getValue('title') || $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div class="ty-mainbox-title">
                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getValue('title');?>

                    <?php }?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php }?>
        <div class="ty-mainbox-body"><?php echo $_smarty_tpl->getValue('content');?>
</div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/wrappers/checkout_block_with_title.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/lite_checkout/wrappers/checkout_block_with_title.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <div class="ty-mainbox-container clearfix<?php if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('details_page')) {?> details-page<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->getValue('title') || $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div class="ty-mainbox-title">
                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getValue('title');?>

                    <?php }?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:mainbox_general_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php }?>
        <div class="ty-mainbox-body"><?php echo $_smarty_tpl->getValue('content');?>
</div>
    </div>
<?php }
}
}
}
