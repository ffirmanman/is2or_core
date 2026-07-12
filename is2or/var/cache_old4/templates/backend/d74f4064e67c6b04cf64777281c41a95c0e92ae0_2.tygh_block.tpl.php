<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:views/block_manager/render/block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5532aac988_04331296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd74f4064e67c6b04cf64777281c41a95c0e92ae0' => 
    array (
      0 => 'views/block_manager/render/block.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/device_availability_attributes.tpl' => 1,
    'tygh:views/block_manager/components/device_icons.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
))) {
function content_69fb5532aac988_04331296 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager/render';
\Tygh\Languages\Helper::preloadLangVars(array('disable','enable','bm_confirm','block_options','enable_or_disable_block','block_settings','delete_block','editing_block','block_options','delete_block','on_off','select_block'));
if ($_smarty_tpl->getValue('block_data')) {?>
    <?php if ($_smarty_tpl->getValue('block_data')['status']) {?>
        <?php $_smarty_tpl->assign('status', $_smarty_tpl->getValue('block_data')['status'], false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('status', "A", false, NULL);?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('dynamic_object') && $_smarty_tpl->getValue('block_data')['items_count'] > 0) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "confirm_message", null, null);?>
            <?php if ($_smarty_tpl->getValue('status') == "A") {?>
                <?php $_smarty_tpl->assign('action', mb_strtolower((string) $_smarty_tpl->getSmarty()->getModifierCallback("__")("disable", [], $_smarty_tpl->getSmarty()->getLanguage()), 'UTF-8'), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('action', mb_strtolower((string) $_smarty_tpl->getSmarty()->getModifierCallback("__")("enable", [], $_smarty_tpl->getSmarty()->getLanguage()), 'UTF-8'), false, NULL);?>
            <?php }?>
            <span class="confirm-message hidden">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bm_confirm", array("[action]"=>$_smarty_tpl->getValue('action'),"[location_name]"=>$_smarty_tpl->getValue('location')['name']), $_smarty_tpl->getSmarty()->getLanguage());?>

            </span>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>

    <div class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('default_class') ?? null)===null||$tmp==='' ? "device-specific-block block" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('status') != "A") {?>block-off<?php }?> <?php if ($_smarty_tpl->getValue('external_render')) {?>bm-external-render<?php }?>"
         data-ca-status="<?php if ($_smarty_tpl->getValue('status') != "A") {?>disabled<?php } else { ?>active<?php }?>"
         data-block-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['block_id']), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-block-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['name']), ENT_QUOTES, 'UTF-8');?>
"
         <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->getValue('block_data')), (int) 0, $_smarty_current_dir);
?>
         id="snapping_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['snapping_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('external_render')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['block_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('external_id')), ENT_QUOTES, 'UTF-8');
}?>"
    >
        <div class="block-header" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['name']), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->getValue('block_data')), (int) 0, $_smarty_current_dir);
?>
            <div class="block-header-icon <?php if ($_smarty_tpl->getValue('block_data')['type']) {?>bmicon-<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('block_data')['type'],"_","-")), ENT_QUOTES, 'UTF-8');
}?>"></div>
            <div class="block-header__name">
                <div class="block-header-title <?php if ($_smarty_tpl->getValue('show_for_location') && $_smarty_tpl->getValue('block_data')['location'] != $_smarty_tpl->getValue('show_for_location')) {?>fixed-block<?php }?>">
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['name']), ENT_QUOTES, 'UTF-8');?>

                </div>
                <div class="block-header__secondary muted">
                    <small data-ca-block-manager="block_id">
                        #<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['block_id']), ENT_QUOTES, 'UTF-8');?>

                    </small>
                </div>
            </div>
        </div>

        <div class="bm-full-menu block-control-menu bm-control-menu <?php if ($_smarty_tpl->getValue('parent_grid')['width'] <= 2 && !$_smarty_tpl->getValue('external_render')) {?>hidden keep-hidden<?php }?>">
            <?php if (!$_smarty_tpl->getValue('external_render')) {?>
                                <?php if ((($tmp = $_smarty_tpl->getValue('block_data')['is_manageable'] ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                    <div class="cm-tooltip cm-action bm-action-properties action" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"cog"), $_smarty_tpl);?>

                    </div>
                <?php }?>
                <div class="cm-tooltip cm-action bm-action-switch<?php if ($_smarty_tpl->getValue('status') != "A") {?> switch-off<?php }
if ($_smarty_tpl->getValue('dynamic_object')) {?> bm-dynamic-object<?php }
if (!$_smarty_tpl->getValue('dynamic_object') && $_smarty_tpl->getValue('block_data')['items_count'] > 0) {?> bm-confirm<?php }?> action" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("enable_or_disable_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"<?php if ($_smarty_tpl->getValue('dynamic_object')) {?>data-ca-bm-object-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dynamic_object')['object_id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"off"), $_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'confirm_message');?>
</div>

            <?php } else { ?>
                <input type="hidden" name="block_data[block_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['block_id']), ENT_QUOTES, 'UTF-8');?>
" id="ajax_update_block_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('external_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"cog",'assign'=>'link_text_icon'), $_smarty_tpl);?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"edit_block_properties_".((string)$_smarty_tpl->getValue('block_data')['block_id'])."_".((string)$_smarty_tpl->getValue('external_id')),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_settings", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_smarty_tpl->getValue('link_text_icon'),'act'=>"link",'href'=>"block_manager.update_block?block_data[block_id]=".((string)$_smarty_tpl->getValue('block_data')['block_id'])."&ajax_update=1&html_id=".((string)$_smarty_tpl->getValue('external_id'))."&force_close=1",'opener_ajax_class'=>"cm-ajax cm-ajax-force cm",'link_class'=>"action-properties bm-action-properties",'content'=>''), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <?php if (!$_smarty_tpl->getValue('dynamic_object') && !$_smarty_tpl->getValue('external_render')) {?>
                <div class="cm-tooltip cm-action pull-right bm-action-delete extra action <?php if ($_smarty_tpl->getValue('block_data')['single_for_location']) {?>bm-block-single-for-location<?php }?>" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"trash"), $_smarty_tpl);?>

                </div>
            <?php }?>
        </div>
        <?php if (!$_smarty_tpl->getValue('external_render')) {?>
        <div class="bm-compact-menu block-control-menu bm-control-menu <?php if ($_smarty_tpl->getValue('parent_grid')['width'] > 2) {?>hidden keep-hidden<?php }?>">
            <div class="action-showmenu action-control-menu">
                <div class="btn-group action">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"align_justify"), $_smarty_tpl);?>

                </span></a>
                    <ul class="dropdown-menu droptop">
                        <?php if ($_smarty_tpl->getValue('block_data')['is_manageable']) {?>
                            <li><a class="cm-action bm-action-properties"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                            <li><a class="cm-action bm-action-delete extra"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                        <?php }?>
                        <li><a class="cm-action bm-action-switch <?php if ($_smarty_tpl->getValue('status') != "A") {?>switch-off<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("on_off", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<span class="action-switch"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php }?>

        <a class="cm-select-bm-block hidden" data-block-uid="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_encrypt_text')(((string)$_smarty_tpl->getValue('block_data')['block_id']).":".((string)$_smarty_tpl->getValue('block_data')['snapping_id']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-block-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['name']), ENT_QUOTES, 'UTF-8');?>
"><div class="text-center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div></a>
<!--snapping_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['snapping_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('external_render')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_data')['block_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('external_id')), ENT_QUOTES, 'UTF-8');
}?>--></div>
<?php }
}
}
