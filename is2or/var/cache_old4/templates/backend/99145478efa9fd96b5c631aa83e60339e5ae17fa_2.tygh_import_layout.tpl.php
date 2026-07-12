<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:27
  from 'tygh:views/block_manager/components/import_layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb55332f71f2_64839701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99145478efa9fd96b5c631aa83e60339e5ae17fa' => 
    array (
      0 => 'views/block_manager/components/import_layout.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
))) {
function content_69fb55332f71f2_64839701 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager/components';
\Tygh\Languages\Helper::preloadLangVars(array('create_new_layout','update_current_layout','clean_up_all_locations_on_import','override_by_dispatch','import'));
?>
<div class="install-addon">

<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="import_locations" enctype="multipart/form-data">

    <div class="install-addon-wrapper">
        <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151" height="141" />

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"filename[0]",'allowed_ext'=>"xml"), (int) 0, $_smarty_current_dir);
?>

    </div>

    <div class="control-group">
        <div class="controls">
            <label class="radio" for="sw_import_style_options_suffix_create">
            <input type="radio" id="sw_import_style_options_suffix_create" name="import_style" value="create" checked="checked" class="cm-switch-availability cm-switch-visibility cm-switch-inverse" />
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_new_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>

            <label class="radio" for="sw_import_style_options_suffix_update">
            <input type="radio" id="sw_import_style_options_suffix_update" name="import_style" value="update" class="cm-switch-availability cm-switch-visibility"/>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("update_current_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>

            <input type="hidden" name="clean_up" value="N" />
            <input type="hidden" name="override_by_dispatch" value="N" />

            <div class="hidden shift-left" id="import_style_options">
                <label class="checkbox" for="elm_clean_up_export">
                <input id="elm_clean_up_export" type="checkbox" name="clean_up" value="Y" disabled />
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("clean_up_all_locations_on_import", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                <label class="checkbox" for="elm_override_by_dispatch">
                <input id="elm_override_by_dispatch" type="checkbox" name="override_by_dispatch" value="Y" checked="checked" disabled />
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("override_by_dispatch", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            </div>
        </div>
    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("import", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>"dispatch[block_manager.import_layout]",'cancel_action'=>"close"), (int) 0, $_smarty_current_dir);
?>
    </div>
</form>

</div>
<?php }
}
