<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:38:53
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/block_manager/render/block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835c06d192345_14431742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98fd41e27de3934830d602b08b649eec09d46ae' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/block_manager/render/block.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/device_availability_attributes.tpl' => 1,
    'tygh:views/block_manager/components/device_icons.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_6835c06d192345_14431742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('disable','enable','bm_confirm','block_options','enable_or_disable_block','block_settings','delete_block','editing_block','block_options','delete_block','on_off','select_block'));
if ($_smarty_tpl->tpl_vars['block_data']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['block_data']->value['status']) {?>
        <?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['block_data']->value['status']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('status', "A");?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value && $_smarty_tpl->tpl_vars['block_data']->value['items_count'] > 0) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "confirm_message", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['status']->value == "A") {?>
                <?php $_smarty_tpl->_assignInScope('action', mb_strtolower($_smarty_tpl->__("disable"), 'UTF-8'));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('action', mb_strtolower($_smarty_tpl->__("enable"), 'UTF-8'));?>
            <?php }?>
            <span class="confirm-message hidden">
                <?php echo $_smarty_tpl->__("bm_confirm",array("[action]"=>$_smarty_tpl->tpl_vars['action']->value,"[location_name]"=>$_smarty_tpl->tpl_vars['location']->value['name']));?>

            </span>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>

    <div class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['default_class']->value ?? null)===null||$tmp==='' ? "device-specific-block block" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['status']->value != "A") {?>block-off<?php }?> <?php if ($_smarty_tpl->tpl_vars['external_render']->value) {?>bm-external-render<?php }?>"
         data-ca-status="<?php if ($_smarty_tpl->tpl_vars['status']->value != "A") {?>disabled<?php } else { ?>active<?php }?>"
         data-block-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"
         data-ca-block-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
         <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['block_data']->value), 0, false);
?>
         id="snapping_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['external_render']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_id']->value, ENT_QUOTES, 'UTF-8');
}?>"
    >
        <div class="block-header" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['block_data']->value), 0, false);
?>
            <div class="block-header-icon <?php if ($_smarty_tpl->tpl_vars['block_data']->value['type']) {?>bmicon-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['block_data']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');
}?>"></div>
            <div class="block-header__name">
                <div class="block-header-title <?php if ($_smarty_tpl->tpl_vars['show_for_location']->value && $_smarty_tpl->tpl_vars['block_data']->value['location'] != $_smarty_tpl->tpl_vars['show_for_location']->value) {?>fixed-block<?php }?>">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </div>
                <div class="block-header__secondary muted">
                    <small data-ca-block-manager="block_id">
                        #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>

                    </small>
                </div>
            </div>
        </div>

        <div class="bm-full-menu block-control-menu bm-control-menu <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width'] <= 2 && !$_smarty_tpl->tpl_vars['external_render']->value) {?>hidden keep-hidden<?php }?>">
            <?php if (!$_smarty_tpl->tpl_vars['external_render']->value) {?>
                                <?php if ((($tmp = $_smarty_tpl->tpl_vars['block_data']->value['is_manageable'] ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                    <div class="cm-tooltip cm-action bm-action-properties action" title="<?php echo $_smarty_tpl->__("block_options");?>
">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"cog"),$_smarty_tpl);?>

                    </div>
                <?php }?>
                <div class="cm-tooltip cm-action bm-action-switch<?php if ($_smarty_tpl->tpl_vars['status']->value != "A") {?> switch-off<?php }
if ($_smarty_tpl->tpl_vars['dynamic_object']->value) {?> bm-dynamic-object<?php }
if (!$_smarty_tpl->tpl_vars['dynamic_object']->value && $_smarty_tpl->tpl_vars['block_data']->value['items_count'] > 0) {?> bm-confirm<?php }?> action" title="<?php echo $_smarty_tpl->__("enable_or_disable_block");?>
"<?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value) {?>data-ca-bm-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"off"),$_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'confirm_message');?>
</div>

            <?php } else { ?>
                <input type="hidden" name="block_data[block_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" id="ajax_update_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"cog",'assign'=>'link_text_icon'),$_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"edit_block_properties_".((string)$_smarty_tpl->tpl_vars['block_data']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['external_id']->value),'text'=>$_smarty_tpl->__("block_settings"),'link_text'=>$_smarty_tpl->tpl_vars['link_text_icon']->value,'act'=>"link",'href'=>"block_manager.update_block?block_data[block_id]=".((string)$_smarty_tpl->tpl_vars['block_data']->value['block_id'])."&ajax_update=1&html_id=".((string)$_smarty_tpl->tpl_vars['external_id']->value)."&force_close=1",'opener_ajax_class'=>"cm-ajax cm-ajax-force cm",'link_class'=>"action-properties bm-action-properties",'content'=>''), 0, false);
?>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value && !$_smarty_tpl->tpl_vars['external_render']->value) {?>
                <div class="cm-tooltip cm-action pull-right bm-action-delete extra action <?php if ($_smarty_tpl->tpl_vars['block_data']->value['single_for_location']) {?>bm-block-single-for-location<?php }?>" title="<?php echo $_smarty_tpl->__("delete_block");?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"trash"),$_smarty_tpl);?>

                </div>
            <?php }?>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['external_render']->value) {?>
        <div class="bm-compact-menu block-control-menu bm-control-menu <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width'] > 2) {?>hidden keep-hidden<?php }?>">
            <div class="action-showmenu action-control-menu">
                <div class="btn-group action">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="cm-tooltip" title="<?php echo $_smarty_tpl->__("editing_block");?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"align_justify"),$_smarty_tpl);?>

                </span></a>
                    <ul class="dropdown-menu droptop">
                        <?php if ($_smarty_tpl->tpl_vars['block_data']->value['is_manageable']) {?>
                            <li><a class="cm-action bm-action-properties"><?php echo $_smarty_tpl->__("block_options");?>
</a></li>
                            <li><a class="cm-action bm-action-delete extra"><?php echo $_smarty_tpl->__("delete_block");?>
</a></li>
                        <?php }?>
                        <li><a class="cm-action bm-action-switch <?php if ($_smarty_tpl->tpl_vars['status']->value != "A") {?>switch-off<?php }?>"><?php echo $_smarty_tpl->__("on_off");?>
<span class="action-switch"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php }?>

        <a class="cm-select-bm-block hidden" data-block-uid="<?php echo htmlspecialchars((string) fn_encrypt_text(((string)$_smarty_tpl->tpl_vars['block_data']->value['block_id']).":".((string)$_smarty_tpl->tpl_vars['block_data']->value['snapping_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-block-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><div class="text-center"><?php echo $_smarty_tpl->__("select_block");?>
</div></a>
<!--snapping_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['external_render']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_id']->value, ENT_QUOTES, 'UTF-8');
}?>--></div>
<?php }
}
}
