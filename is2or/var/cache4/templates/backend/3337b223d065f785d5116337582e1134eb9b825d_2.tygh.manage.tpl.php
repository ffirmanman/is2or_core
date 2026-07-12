<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:29:51
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/settings/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345ebfcfe5e8_86586545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3337b223d065f785d5116337582e1134eb9b825d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/settings/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68345ebfcfe5e8_86586545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),));
\Tygh\Languages\Helper::preloadLangVars(array('settings'));
echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>fn_get_all_states(1),'states_are_optional'=>true), 0, false);
?>

<?php if ($_REQUEST['highlight']) {
$_smarty_tpl->_assignInScope('highlight', smarty_modifier_explode(",",$_REQUEST['highlight']));
}?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="settings_form" class=" form-horizontal form-edit form-setting">
    <input type="hidden" name="section_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="text" class="hidden"> 
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'subsection', false, 'ukey');
$_smarty_tpl->tpl_vars['subsection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ukey']->value => $_smarty_tpl->tpl_vars['subsection']->value) {
$_smarty_tpl->tpl_vars['subsection']->do_else = false;
?>
            <div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type'] == "SEPARATE_TAB") {?>class="cm-hide-save-button"<?php }?>>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['subsection']->value,'section'=>$_smarty_tpl->tpl_vars['section_id']->value,'html_id_prefix'=>"field_",'html_name'=>"update",'highlight'=>$_smarty_tpl->tpl_vars['highlight']->value));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['subsection']->value,'section'=>$_smarty_tpl->tpl_vars['section_id']->value,'html_id_prefix'=>"field_",'html_name'=>"update",'highlight'=>$_smarty_tpl->tpl_vars['highlight']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['subsection']->value,'section'=>$_smarty_tpl->tpl_vars['section_id']->value,'html_id_prefix'=>"field_",'html_name'=>"update",'highlight'=>$_smarty_tpl->tpl_vars['highlight']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[settings.update]",'but_role'=>"submit-link",'but_target_form'=>"settings_form",'but_meta'=>"nav__actions-btn-save"), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'track'=>true), 0, false);
?>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_start'=>$_smarty_tpl->__("settings"),'title_end'=>$_smarty_tpl->tpl_vars['settings_title']->value,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar_position'=>"left",'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), 0, false);
?>

<?php }
}
