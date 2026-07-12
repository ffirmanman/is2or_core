<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:00
  from 'tygh:blocks/wrappers/footer_general.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f70806ff1_15491584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402044f76dc8b50892c08b2555442bd8b9a5869e' => 
    array (
      0 => 'blocks/wrappers/footer_general.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f70806ff1_15491584 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/wrappers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <div class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('sidebox_wrapper') ?? null)===null||$tmp==='' ? "ty-footer" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <div class="ty-footer-general__header <?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}?> cm-combination" id="sw_footer-general_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:footer_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span><?php echo $_smarty_tpl->getValue('title');?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:footer_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-footer-menu__icon-open"), $_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-footer-menu__icon-hide"), $_smarty_tpl);?>

        </div>
        <div class="ty-footer-general__body" id="footer-general_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/footer_general.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/wrappers/footer_general.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <div class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('sidebox_wrapper') ?? null)===null||$tmp==='' ? "ty-footer" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <div class="ty-footer-general__header <?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}?> cm-combination" id="sw_footer-general_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:footer_general_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span><?php echo $_smarty_tpl->getValue('title');?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:footer_general_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-footer-menu__icon-open"), $_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-footer-menu__icon-hide"), $_smarty_tpl);?>

        </div>
        <div class="ty-footer-general__body" id="footer-general_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>

<?php }
}
}
}
