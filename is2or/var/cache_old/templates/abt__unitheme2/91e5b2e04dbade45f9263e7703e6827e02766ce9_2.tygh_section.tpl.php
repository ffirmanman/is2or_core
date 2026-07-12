<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:37:46
  from 'tygh:common/section.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea2fae45839_34093273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91e5b2e04dbade45f9263e7703e6827e02766ce9' => 
    array (
      0 => 'common/section.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea2fae45839_34093273 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('open_action','hide','open_action','hide'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('id', sprintf("s_%s",$_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('section_title'))), false, NULL);
$_smarty_tpl->assign('rnd', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
if ($_COOKIE[$_smarty_tpl->getValue('id')] || $_smarty_tpl->getValue('collapse')) {?>
    <?php $_smarty_tpl->assign('collapse', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('collapse', false, false, NULL);
}?>

<div class="ty-section<?php if ($_smarty_tpl->getValue('class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');
}?>" id="ds_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rnd')), ENT_QUOTES, 'UTF-8');?>
">
    <div  class="ty-section__title <?php if (!$_smarty_tpl->getValue('collapse')) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
        <span><?php echo $_smarty_tpl->getValue('section_title');?>
</span>
        <span class="ty-section__switch ty-section_switch_on"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("open_action", [], $_smarty_tpl->getSmarty()->getLanguage());
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-section__arrow",'id'=>''), $_smarty_tpl);?>
</span>
        <span class="ty-section__switch ty-section_switch_off"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hide", [], $_smarty_tpl->getSmarty()->getLanguage());
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-section__arrow",'id'=>''), $_smarty_tpl);?>
</span>
    </div>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('section_body_class') ?? null)===null||$tmp==='' ? "ty-section__body" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('collapse')) {?>hidden<?php }?>"><?php echo $_smarty_tpl->getValue('section_content');?>
</div>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/section.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/section.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('id', sprintf("s_%s",$_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('section_title'))), false, NULL);
$_smarty_tpl->assign('rnd', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
if ($_COOKIE[$_smarty_tpl->getValue('id')] || $_smarty_tpl->getValue('collapse')) {?>
    <?php $_smarty_tpl->assign('collapse', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('collapse', false, false, NULL);
}?>

<div class="ty-section<?php if ($_smarty_tpl->getValue('class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');
}?>" id="ds_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rnd')), ENT_QUOTES, 'UTF-8');?>
">
    <div  class="ty-section__title <?php if (!$_smarty_tpl->getValue('collapse')) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
        <span><?php echo $_smarty_tpl->getValue('section_title');?>
</span>
        <span class="ty-section__switch ty-section_switch_on"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("open_action", [], $_smarty_tpl->getSmarty()->getLanguage());
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-section__arrow",'id'=>''), $_smarty_tpl);?>
</span>
        <span class="ty-section__switch ty-section_switch_off"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hide", [], $_smarty_tpl->getSmarty()->getLanguage());
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-section__arrow",'id'=>''), $_smarty_tpl);?>
</span>
    </div>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('section_body_class') ?? null)===null||$tmp==='' ? "ty-section__body" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('collapse')) {?>hidden<?php }?>"><?php echo $_smarty_tpl->getValue('section_content');?>
</div>
</div>
<?php }
}
}
