<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:37
  from 'tygh:blocks/languages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fdcc5154_37649469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab416c7f61bf122ae0fc0a53b2c935aa7abca3c1' => 
    array (
      0 => 'blocks/languages.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 2,
    'tygh:common/icon.tpl' => 2,
  ),
))) {
function content_69fb49fdcc5154_37649469 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks';
\Tygh\Languages\Helper::preloadLangVars(array('change_language','change_language'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('languages') && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('languages')) > 1) {?>

<div class="ut2-languages clearfix ab__ut2--languages <?php if ($_smarty_tpl->getValue('dropdown_limit') >= $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('languages'))) {?>ab__ut2--languages_mode_plain<?php } else { ?>ab__ut2--languages_mode_dropdown<?php }?>" id="languages_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->assign('uid', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('text')) {?><div class="ty-select-block__txt"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
</div><?php }?>

        <?php if ($_smarty_tpl->getValue('format') == "ab__name_without_icons") {?>
        <?php $_smarty_tpl->assign('key_name', "name", false, NULL);?>
        <?php $_smarty_tpl->assign('icon_true', false, false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('format') == "name") {?>
        <?php $_smarty_tpl->assign('key_name', "name", false, NULL);?>
        <?php $_smarty_tpl->assign('icon_true', true, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('key_name', '', false, NULL);?>
        <?php $_smarty_tpl->assign('icon_true', true, false, NULL);?>
    <?php }?>
    <div class="ty-select-wrapper ab__ut2--languages__dropdown<?php if ($_smarty_tpl->getValue('format') == "icon") {?> format-only-icon ty-languages__icon-link<?php }?>"><?php $_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->getValue('uid')),'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"sl="),'items'=>$_smarty_tpl->getValue('languages'),'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>$_smarty_tpl->getValue('icon_true'),'key_name'=>$_smarty_tpl->getValue('key_name'),'language_var_name'=>"sl",'link_class'=>'','text'=>false), (int) 0, $_smarty_current_dir);
?></div>

        <?php if ($_smarty_tpl->getValue('dropdown_limit') >= $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('languages'))) {?>

        <div class="ty-select-wrapper ty-languages clearfix ab__ut2--languages__plain-list<?php if ($_smarty_tpl->getValue('format') == "icon") {?> format-only-icon<?php }?>">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('languages'), 'language', false, 'code');
$foreach28DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('language')->value) {
$foreach28DoElse = false;
?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"sl=".((string)$_smarty_tpl->getValue('language')['lang_code'])))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("change_language", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-languages__item<?php if ($_smarty_tpl->getValue('format') === "icon") {?> ty-languages__icon-link<?php }
if ((defined('DESCR_SL') ? constant('DESCR_SL') : null) === $_smarty_tpl->getValue('code')) {?> ty-languages__active<?php }?>">
                    <?php if ($_smarty_tpl->getValue('format') != "ab__name_without_icons" || $_smarty_tpl->getValue('format') === "icon") {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"ty-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('language')['country_code'], 'UTF-8'))),'code'=>((string)$_smarty_tpl->getValue('language')['country_code']),'format'=>((string)$_smarty_tpl->getValue('format'))), (int) 0, $_smarty_current_dir);
?>
                        <?php if ($_smarty_tpl->getValue('format') != 'icon') {?><span><?php echo htmlspecialchars((string) (mb_strtoupper((string) $_smarty_tpl->getValue('code') ?? '', 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    <?php } elseif ($_smarty_tpl->getValue('format') === "ab__name_without_icons") {?>
                        <span style="text-transform: uppercase"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language')['lang_code']), ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language')['name']), ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                </a>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

<!--languages_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/languages.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/languages.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('languages') && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('languages')) > 1) {?>

<div class="ut2-languages clearfix ab__ut2--languages <?php if ($_smarty_tpl->getValue('dropdown_limit') >= $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('languages'))) {?>ab__ut2--languages_mode_plain<?php } else { ?>ab__ut2--languages_mode_dropdown<?php }?>" id="languages_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->assign('uid', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('text')) {?><div class="ty-select-block__txt"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
</div><?php }?>

        <?php if ($_smarty_tpl->getValue('format') == "ab__name_without_icons") {?>
        <?php $_smarty_tpl->assign('key_name', "name", false, NULL);?>
        <?php $_smarty_tpl->assign('icon_true', false, false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('format') == "name") {?>
        <?php $_smarty_tpl->assign('key_name', "name", false, NULL);?>
        <?php $_smarty_tpl->assign('icon_true', true, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('key_name', '', false, NULL);?>
        <?php $_smarty_tpl->assign('icon_true', true, false, NULL);?>
    <?php }?>
    <div class="ty-select-wrapper ab__ut2--languages__dropdown<?php if ($_smarty_tpl->getValue('format') == "icon") {?> format-only-icon ty-languages__icon-link<?php }?>"><?php $_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->getValue('uid')),'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"sl="),'items'=>$_smarty_tpl->getValue('languages'),'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>$_smarty_tpl->getValue('icon_true'),'key_name'=>$_smarty_tpl->getValue('key_name'),'language_var_name'=>"sl",'link_class'=>'','text'=>false), (int) 0, $_smarty_current_dir);
?></div>

        <?php if ($_smarty_tpl->getValue('dropdown_limit') >= $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('languages'))) {?>

        <div class="ty-select-wrapper ty-languages clearfix ab__ut2--languages__plain-list<?php if ($_smarty_tpl->getValue('format') == "icon") {?> format-only-icon<?php }?>">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('languages'), 'language', false, 'code');
$foreach29DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('language')->value) {
$foreach29DoElse = false;
?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"sl=".((string)$_smarty_tpl->getValue('language')['lang_code'])))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("change_language", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-languages__item<?php if ($_smarty_tpl->getValue('format') === "icon") {?> ty-languages__icon-link<?php }
if ((defined('DESCR_SL') ? constant('DESCR_SL') : null) === $_smarty_tpl->getValue('code')) {?> ty-languages__active<?php }?>">
                    <?php if ($_smarty_tpl->getValue('format') != "ab__name_without_icons" || $_smarty_tpl->getValue('format') === "icon") {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"ty-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('language')['country_code'], 'UTF-8'))),'code'=>((string)$_smarty_tpl->getValue('language')['country_code']),'format'=>((string)$_smarty_tpl->getValue('format'))), (int) 0, $_smarty_current_dir);
?>
                        <?php if ($_smarty_tpl->getValue('format') != 'icon') {?><span><?php echo htmlspecialchars((string) (mb_strtoupper((string) $_smarty_tpl->getValue('code') ?? '', 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    <?php } elseif ($_smarty_tpl->getValue('format') === "ab__name_without_icons") {?>
                        <span style="text-transform: uppercase"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language')['lang_code']), ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language')['name']), ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                </a>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

<!--languages_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
}
