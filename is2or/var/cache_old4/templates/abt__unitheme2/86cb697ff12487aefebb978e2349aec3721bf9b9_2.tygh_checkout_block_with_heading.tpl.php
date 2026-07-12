<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:51
  from 'tygh:blocks/lite_checkout/wrappers/checkout_block_with_heading.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5203d78fe2_40435934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86cb697ff12487aefebb978e2349aec3721bf9b9' => 
    array (
      0 => 'blocks/lite_checkout/wrappers/checkout_block_with_heading.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5203d78fe2_40435934 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/lite_checkout/wrappers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php if ($_smarty_tpl->getValue('block')['user_class'] || $_smarty_tpl->getValue('content_alignment') == 'RIGHT' || $_smarty_tpl->getValue('content_alignment') == 'LEFT') {?>
        <div class="<?php if ($_smarty_tpl->getValue('block')['user_class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->getValue('content_alignment') == 'RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == 'LEFT') {?>ty-float-left<?php }?>">
    <?php }?>
        <div class="litecheckout__container ab_step-container">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <div class="litecheckout__ab_step-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['name']), ENT_QUOTES, 'UTF-8');?>
</div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getValue('content');?>

        </div>
    <?php if ($_smarty_tpl->getValue('block')['user_class'] || $_smarty_tpl->getValue('content_alignment') == 'RIGHT' || $_smarty_tpl->getValue('content_alignment') == 'LEFT') {?>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/wrappers/checkout_block_with_heading.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/lite_checkout/wrappers/checkout_block_with_heading.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php if ($_smarty_tpl->getValue('block')['user_class'] || $_smarty_tpl->getValue('content_alignment') == 'RIGHT' || $_smarty_tpl->getValue('content_alignment') == 'LEFT') {?>
        <div class="<?php if ($_smarty_tpl->getValue('block')['user_class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->getValue('content_alignment') == 'RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == 'LEFT') {?>ty-float-left<?php }?>">
    <?php }?>
        <div class="litecheckout__container ab_step-container">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <div class="litecheckout__ab_step-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['name']), ENT_QUOTES, 'UTF-8');?>
</div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getValue('content');?>

        </div>
    <?php if ($_smarty_tpl->getValue('block')['user_class'] || $_smarty_tpl->getValue('content_alignment') == 'RIGHT' || $_smarty_tpl->getValue('content_alignment') == 'LEFT') {?>
        </div>
    <?php }
}
}
}
}
