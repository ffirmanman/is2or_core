<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:30
  from 'tygh:common/no_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb216dafea6_14199672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89800a206de4285bebb5e9703cbf170f943e5966' => 
    array (
      0 => 'common/no_items.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb216dafea6_14199672 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('object_not_found','text_nothing_found','reset','object_not_found','text_nothing_found','reset'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('reset_url')) {?>
    <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('type')) {?>
    <?php $_smarty_tpl->assign('text_no_found', $_smarty_tpl->getSmarty()->getModifierCallback("__")("object_not_found", array("[object]"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('type'), [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} elseif (!$_smarty_tpl->getValue('text_no_found')) {?>
    <?php $_smarty_tpl->assign('text_no_found', $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_nothing_found", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<div class="ty-no-items cm-pagination-container <?php if ($_smarty_tpl->getValue('no_items_extended')) {?>ty-no-items--extended<?php }?> <?php echo $_smarty_tpl->getValue('no_items_meta');?>
">
    <?php echo $_smarty_tpl->getValue('text_no_found');?>

    <?php if ($_smarty_tpl->getValue('no_items_extended')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-mt-s <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('reset_meta')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/no_items.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/no_items.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('reset_url')) {?>
    <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('type')) {?>
    <?php $_smarty_tpl->assign('text_no_found', $_smarty_tpl->getSmarty()->getModifierCallback("__")("object_not_found", array("[object]"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('type'), [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} elseif (!$_smarty_tpl->getValue('text_no_found')) {?>
    <?php $_smarty_tpl->assign('text_no_found', $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_nothing_found", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<div class="ty-no-items cm-pagination-container <?php if ($_smarty_tpl->getValue('no_items_extended')) {?>ty-no-items--extended<?php }?> <?php echo $_smarty_tpl->getValue('no_items_meta');?>
">
    <?php echo $_smarty_tpl->getValue('text_no_found');?>

    <?php if ($_smarty_tpl->getValue('no_items_extended')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-mt-s <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('reset_meta')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
</div>
<?php }
}
}
