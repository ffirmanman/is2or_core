<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:50
  from 'tygh:blocks/wrappers/abt__ut2__sidebox_important.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94fe04fd43_41381868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fb086f618a7ba500b279e1f0086b05cf4674f2c' => 
    array (
      0 => 'blocks/wrappers/abt__ut2__sidebox_important.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94fe04fd43_41381868 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/wrappers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <div class="ut2-sidebox-important<?php if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <div class="ut2-sidebox-important__title<?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?> outside-controls<?php }?>">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:sidebox_important_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span class="ut2-sidebox-important__title-wrapper"><?php echo $_smarty_tpl->getValue('title');?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:sidebox_important_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
        <div class="ut2-sidebox-important__body"><?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/abt__ut2__sidebox_important.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/wrappers/abt__ut2__sidebox_important.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <div class="ut2-sidebox-important<?php if ((true && ($_smarty_tpl->hasVariable('hide_wrapper') && null !== ($_smarty_tpl->getValue('hide_wrapper') ?? null)))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->getValue('hide_wrapper')) {?> hidden<?php }
if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">
        <div class="ut2-sidebox-important__title<?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == "Y") {?> outside-controls<?php }?>">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:sidebox_important_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span class="ut2-sidebox-important__title-wrapper"><?php echo $_smarty_tpl->getValue('title');?>
</span>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:sidebox_important_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
        <div class="ut2-sidebox-important__body"><?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
    </div>
<?php }
}
}
}
