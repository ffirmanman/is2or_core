<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:46
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/tools/view_changes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc6a334245_45223408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28277eb10f494423d9277251f02f3bae50729b46' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/tools/view_changes.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tools/components/changes_tree.tpl' => 1,
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6835bc6a334245_45223408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.formatfilesize.php','function'=>'smarty_modifier_formatfilesize',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_changes_detector.added','file_changes_detector.changed','file_changes_detector.deleted','modified_core_files_found','no_modified_core_files_found','database_structure_changes','database_data_changes','db_name','file','compare','scan_for_modified_core_files','last_scan_time','file_changes_detector.snapshot_not_found','file_changes_detector'));
if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "diff_legend", null, null);?>
    <div class="diff-legend">
        <?php if ($_smarty_tpl->tpl_vars['check_types']->value['A']) {?>
            <span class="label snapshot-added"><?php echo $_smarty_tpl->__("file_changes_detector.added");?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['check_types']->value['C']) {?>
            <span class="label snapshot-changed"><?php echo $_smarty_tpl->__("file_changes_detector.changed");?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['check_types']->value['D']) {?>
            <span class="label snapshot-deleted"><?php echo $_smarty_tpl->__("file_changes_detector.deleted");?>
</span>
        <?php }?>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <div class="items-container multi-level">
        <?php if ($_smarty_tpl->tpl_vars['changes_tree']->value) {?>
            <div class="alert alert-block">
                <p><?php echo $_smarty_tpl->__("modified_core_files_found",array('[product]'=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
            </div>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/tools/components/changes_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent_id'=>0,'show_all'=>true,'expand_all'=>true,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_modified_core_files_found");?>
</p>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['db_diff']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("database_structure_changes")), 0, false);
?>
        <pre style="height: 400px; overflow-y: scroll" class="diff-container"><?php echo $_smarty_tpl->tpl_vars['db_diff']->value;?>
</pre>
    <?php }?>

            
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="data_compare_form" enctype="multipart/form-data" class="form-horizontal form-edit">
        <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['show_database_changes']) {?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("database_data_changes")), 0, true);
?>

            <div class="control-group">
                <label class="control-label" for="name_db" ><?php echo $_smarty_tpl->__("db_name");?>
</label>
                <div class="controls">
                    <input type="text" name="compare_data[db_name]" id="name_db" value="" class="span4" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="type_base_file"><?php echo $_smarty_tpl->__("file");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['compare_data']->value['file_path']) {?>
                        <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['compare_data']->value['file_path'], ENT_QUOTES, 'UTF-8');?>
</b> (<?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['compare_data']->value['file_size']);?>
)
                    <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"base_file"), 0, false);
?>
                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['show_database_changes']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("compare"),'but_role'=>"action",'but_target_form'=>"data_compare_form",'but_name'=>"dispatch[tools.view_changes]",'but_meta'=>"cm-submit"), 0, false);
?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['dist_filename']->value) {?>
                <a class="btn btn-primary" href="<?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) fn_url("tools.create_snapshot?redirect_url=".$_prefixVariable1), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("scan_for_modified_core_files");?>
</a>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['db_d_diff']->value) {?>
        <pre style="height: 300px; overflow-y: scroll" class="diff-container"><?php echo $_smarty_tpl->tpl_vars['db_d_diff']->value;?>
</pre>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['changes_tree']->value || $_smarty_tpl->tpl_vars['db_diff']->value || $_smarty_tpl->tpl_vars['db_d_diff']->value) {?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'diff_legend');?>

    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("last_scan_time");?>
</h6>
            <p>
                <?php if ($_smarty_tpl->tpl_vars['dist_filename']->value) {?>
                    <span class="muted"><?php echo $_smarty_tpl->__("file_changes_detector.snapshot_not_found",array('[dist_filename]'=>$_smarty_tpl->tpl_vars['dist_filename']->value));?>
</span>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['creation_time']->value) {?><span class="muted"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['creation_time']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                <?php }?>
            </p>
            <hr />
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('changes_tree_keys', array_keys($_smarty_tpl->tpl_vars['changes_tree']->value));?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        Tygh.$(document).ready(function(){
            Tygh.$('#on_changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['changes_tree_keys']->value[0], ENT_QUOTES, 'UTF-8');?>
').click();
        }
        );
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("file_changes_detector"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
