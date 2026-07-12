<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:blocks/lite_checkout/wrappers/checkout_block_with_heading_dropdown.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5204d5cce8_55181347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd33af2d679d71867abf503e0635effa9a4da37ee' => 
    array (
      0 => 'blocks/lite_checkout/wrappers/checkout_block_with_heading_dropdown.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5204d5cce8_55181347 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/lite_checkout/wrappers';
\Tygh\Languages\Helper::preloadLangVars(array('add','add'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php $_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);?>
    <div class="ty-dropdown-box <?php if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">    
        <div class="ty-dropdown-box__title">
            <p><?php echo $_smarty_tpl->getValue('title');?>
</p>
            <a href="javascript:void(0);" id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content hidden">
            <?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/wrappers/checkout_block_with_heading_dropdown.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/lite_checkout/wrappers/checkout_block_with_heading_dropdown.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php $_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);?>
    <div class="ty-dropdown-box <?php if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>">    
        <div class="ty-dropdown-box__title">
            <p><?php echo $_smarty_tpl->getValue('title');?>
</p>
            <a href="javascript:void(0);" id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content hidden">
            <?php echo (($tmp = $_smarty_tpl->getValue('content') ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

        </div>
    </div>
<?php }
}
}
}
