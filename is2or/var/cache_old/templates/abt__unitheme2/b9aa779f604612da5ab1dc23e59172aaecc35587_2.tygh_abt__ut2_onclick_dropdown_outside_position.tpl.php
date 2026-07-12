<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:49
  from 'tygh:blocks/wrappers/abt__ut2_onclick_dropdown_outside_position.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94fdb51204_99747559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9aa779f604612da5ab1dc23e59172aaecc35587' => 
    array (
      0 => 'blocks/wrappers/abt__ut2_onclick_dropdown_outside_position.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94fdb51204_99747559 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/wrappers';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php $_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);?>
    <div class="ty-dropdown-box cm-abt--ut2-move-bottom <?php if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>" <?php if ($_smarty_tpl->getValue('block')['properties']['abt__menu_compact_view'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>style="position: relative;"<?php }?>>

        <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination <?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>cm-abt--ut2-toggle-scroll<?php }?>">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:onclick_dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span><i class="ut2-icon"></i><span><?php echo $_smarty_tpl->getValue('title');?>
</span></span>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:onclick_dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>

        <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content <?php if ($_smarty_tpl->getValue('content_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_class')), ENT_QUOTES, 'UTF-8');
}?> hidden">
            <div class="ty-dropdown-box__title cm-external-click <?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}?> hidden-desktop" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                <i class="ut2-icon"></i><?php echo $_smarty_tpl->getValue('title');?>
<span class="ut2-btn-close"><i class="ut2-icon-baseline-close"></i></span>
            </div>
            <?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

        </div>

        <div class="cm-external-click ui-widget-overlay hidden" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
"></div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/abt__ut2_onclick_dropdown_outside_position.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/wrappers/abt__ut2_onclick_dropdown_outside_position.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php $_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);?>
    <div class="ty-dropdown-box cm-abt--ut2-move-bottom <?php if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>" <?php if ($_smarty_tpl->getValue('block')['properties']['abt__menu_compact_view'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>style="position: relative;"<?php }?>>

        <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination <?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>cm-abt--ut2-toggle-scroll<?php }?>">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:onclick_dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');?>

            <?php } else { ?>
                <span><i class="ut2-icon"></i><span><?php echo $_smarty_tpl->getValue('title');?>
</span></span>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wrapper:onclick_dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>

        <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content <?php if ($_smarty_tpl->getValue('content_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content_class')), ENT_QUOTES, 'UTF-8');
}?> hidden">
            <div class="ty-dropdown-box__title cm-external-click <?php if ($_smarty_tpl->getValue('header_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('header_class')), ENT_QUOTES, 'UTF-8');
}?> hidden-desktop" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                <i class="ut2-icon"></i><?php echo $_smarty_tpl->getValue('title');?>
<span class="ut2-btn-close"><i class="ut2-icon-baseline-close"></i></span>
            </div>
            <?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

        </div>

        <div class="cm-external-click ui-widget-overlay hidden" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
"></div>
    </div>
<?php }
}
}
}
