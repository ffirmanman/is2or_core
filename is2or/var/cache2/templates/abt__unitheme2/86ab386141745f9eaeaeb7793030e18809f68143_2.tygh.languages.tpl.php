<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:58
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21acfe475_66942764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ab386141745f9eaeaeb7793030e18809f68143' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/languages.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 2,
    'tygh:common/icon.tpl' => 2,
  ),
),false)) {
function content_682fe21acfe475_66942764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('change_language','change_language'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['languages']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>

<div class="ut2-languages clearfix ab__ut2--languages <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value >= smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)) {?>ab__ut2--languages_mode_plain<?php } else { ?>ab__ut2--languages_mode_dropdown<?php }?>" id="languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->_assignInScope('uid', uniqid());?>

    <?php if ($_smarty_tpl->tpl_vars['text']->value) {?><div class="ty-select-block__txt"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['format']->value == "ab__name_without_icons") {?>
        <?php $_smarty_tpl->_assignInScope('key_name', "name");?>
        <?php $_smarty_tpl->_assignInScope('icon_true', false);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['format']->value == "name") {?>
        <?php $_smarty_tpl->_assignInScope('key_name', "name");?>
        <?php $_smarty_tpl->_assignInScope('icon_true', true);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('key_name', '');?>
        <?php $_smarty_tpl->_assignInScope('icon_true', true);?>
    <?php }?>
    <div class="ty-select-wrapper ab__ut2--languages__dropdown<?php if ($_smarty_tpl->tpl_vars['format']->value == "icon") {?> format-only-icon ty-languages__icon-link<?php }?>"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>$_smarty_tpl->tpl_vars['icon_true']->value,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value,'language_var_name'=>"sl",'link_class'=>'','text'=>false), 0, false);
?></div>

        <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value >= smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)) {?>

        <div class="ty-select-wrapper ty-languages clearfix ab__ut2--languages__plain-list<?php if ($_smarty_tpl->tpl_vars['format']->value == "icon") {?> format-only-icon<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'code');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("change_language");?>
" class="ty-languages__item<?php if ($_smarty_tpl->tpl_vars['format']->value === "icon") {?> ty-languages__icon-link<?php }
if ((defined('DESCR_SL') ? constant('DESCR_SL') : null) === $_smarty_tpl->tpl_vars['code']->value) {?> ty-languages__active<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['format']->value != "ab__name_without_icons" || $_smarty_tpl->tpl_vars['format']->value === "icon") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"ty-flag ty-flag-".((string)(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'], 'UTF-8'))),'code'=>((string)$_smarty_tpl->tpl_vars['language']->value['country_code']),'format'=>((string)$_smarty_tpl->tpl_vars['format']->value)), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['format']->value != 'icon') {?><span><?php echo htmlspecialchars((string) mb_strtoupper($_smarty_tpl->tpl_vars['code']->value ?? '', 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['format']->value === "ab__name_without_icons") {?>
                        <span style="text-transform: uppercase"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

<!--languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/languages.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/languages.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['languages']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>

<div class="ut2-languages clearfix ab__ut2--languages <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value >= smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)) {?>ab__ut2--languages_mode_plain<?php } else { ?>ab__ut2--languages_mode_dropdown<?php }?>" id="languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->_assignInScope('uid', uniqid());?>

    <?php if ($_smarty_tpl->tpl_vars['text']->value) {?><div class="ty-select-block__txt"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['format']->value == "ab__name_without_icons") {?>
        <?php $_smarty_tpl->_assignInScope('key_name', "name");?>
        <?php $_smarty_tpl->_assignInScope('icon_true', false);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['format']->value == "name") {?>
        <?php $_smarty_tpl->_assignInScope('key_name', "name");?>
        <?php $_smarty_tpl->_assignInScope('icon_true', true);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('key_name', '');?>
        <?php $_smarty_tpl->_assignInScope('icon_true', true);?>
    <?php }?>
    <div class="ty-select-wrapper ab__ut2--languages__dropdown<?php if ($_smarty_tpl->tpl_vars['format']->value == "icon") {?> format-only-icon ty-languages__icon-link<?php }?>"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>$_smarty_tpl->tpl_vars['icon_true']->value,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value,'language_var_name'=>"sl",'link_class'=>'','text'=>false), 0, true);
?></div>

        <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value >= smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)) {?>

        <div class="ty-select-wrapper ty-languages clearfix ab__ut2--languages__plain-list<?php if ($_smarty_tpl->tpl_vars['format']->value == "icon") {?> format-only-icon<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'code');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("change_language");?>
" class="ty-languages__item<?php if ($_smarty_tpl->tpl_vars['format']->value === "icon") {?> ty-languages__icon-link<?php }
if ((defined('DESCR_SL') ? constant('DESCR_SL') : null) === $_smarty_tpl->tpl_vars['code']->value) {?> ty-languages__active<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['format']->value != "ab__name_without_icons" || $_smarty_tpl->tpl_vars['format']->value === "icon") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"ty-flag ty-flag-".((string)(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'], 'UTF-8'))),'code'=>((string)$_smarty_tpl->tpl_vars['language']->value['country_code']),'format'=>((string)$_smarty_tpl->tpl_vars['format']->value)), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['format']->value != 'icon') {?><span><?php echo htmlspecialchars((string) mb_strtoupper($_smarty_tpl->tpl_vars['code']->value ?? '', 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['format']->value === "ab__name_without_icons") {?>
                        <span style="text-transform: uppercase"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

<!--languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
}
