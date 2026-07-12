<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:27
  from 'tygh:views/block_manager/components/update_layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb553320dd17_69329968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810547d4994a10357176650ebbd8e8dcb609c6ec' => 
    array (
      0 => 'views/block_manager/components/update_layout.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
))) {
function content_69fb553320dd17_69329968 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager/components';
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.forbid_changing_layout_in_css_mode','general','name','link_from_layout','restore_original','default','block_manager.grid_columns','block_manager.layout_width','block_manager.fixed_layout','block_manager.fluid_layout','block_manager.full_width_layout','block_manager.min_width','block_manager.max_width','delete'));
if ($_smarty_tpl->getValue('layout_data')) {?>
    <?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('layout_data')['layout_id'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('id', 0, false, NULL);
}
$_smarty_tpl->assign('tabs_count', 1, false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
Tygh.tr({
    'block_manager.forbid_changing_layout_in_css_mode': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.forbid_changing_layout_in_css_mode", array("[url]"=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->getValue('id')))), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
});
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="update_layout_form" class="form-horizontal form-edit ">
<input type="hidden" name="layout_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">

<div class="add-new-object-group">
    <div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabs_count')), ENT_QUOTES, 'UTF-8');?>
">
        <ul class="nav nav-tabs">
            <li id="tab_update_layout_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("general", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content" id="content_tab_update_layout_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <div class="control-group">
            <label class="control-label cm-required" for="elm_layout_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <input type="text" id="elm_layout_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="layout_data[name]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout_data')['name']), ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:change_layout_param"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:change_layout_param"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <?php if (!$_smarty_tpl->getValue('id')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:update_layout_copy"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="control-group">
            <label class="control-label cm-required" for="elm_layout_copy_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("link_from_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <select name="layout_data[from_layout_id]" id="elm_layout_copy_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('default_layouts_sources'), 'layout_source');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('layout_source')->value) {
$foreach7DoElse = false;
?>
                        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout_source')['theme_name']), ENT_QUOTES, 'UTF-8');?>
|<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout_source')['filename']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("restore_original", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('themes')['installed'][$_smarty_tpl->getValue('layout_source')['theme_name']]['title']), ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout_source')['name']), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_layouts'), 'layout');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('layout')->value) {
$foreach8DoElse = false;
?>
                        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout')['layout_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('themes')['installed'][$_smarty_tpl->getValue('layout')['theme_name']]['title']), ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout')['name']), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:update_layout_copy"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_layout_is_default_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("default", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <input type="checkbox" id="elm_layout_is_default_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="layout_data[is_default]" value="1" <?php if ($_smarty_tpl->getValue('layout_data')['is_default']) {?>checked="checked" disabled="disabled"<?php }?> />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_layout_width_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.grid_columns", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <select name="layout_data[width]" id="elm_layout_width_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
                    <option value="12" <?php if ($_smarty_tpl->getValue('layout_data')['width'] == "12") {?>selected="selected"<?php }?>>12</option>
                    <option value="16" <?php if ($_smarty_tpl->getValue('layout_data')['width'] == "16" || !$_smarty_tpl->getValue('layout_data')['width']) {?>selected="selected"<?php }?>>16</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_layout_width_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.layout_width", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <div class="controls">
                <select name="layout_data[layout_width]" id="elm_layout_type_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
                    <option value="fixed" <?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] == "fixed") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.fixed_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="fluid" <?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] == "fluid") {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.fluid_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="full_width" <?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] == "full_width") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.full_width_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                </select>
            </div>
        </div>

        <div id="fluid_layout_settings_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fluid") {?>class="hidden"<?php }?>>
            <div class="control-group">
                <label class="control-label" for="elm_min_width_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.min_width", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                <div class="controls">
                    <input type="text" id="elm_min_width_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="layout_data[min_width]" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('layout_data')['min_width'] ?? null)===null||$tmp==='' ? 760 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_max_width_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.max_width", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                <div class="controls">
                    <input type="text" id="elm_max_width_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="layout_data[max_width]" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('layout_data')['max_width'] ?? null)===null||$tmp==='' ? 960 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            </div>
        </div>

    </fieldset>
    </div>
</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
    (function(_, $) {
        var is_theme_converted_to_css = !!parseInt('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme_manifest')['converted_to_css']), ENT_QUOTES, 'UTF-8');?>
'),
            prev_value;

        $("#elm_layout_type_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
").one('focus', function() {
            prev_value = this.value;
        }).change(function(){
            if (is_theme_converted_to_css) {
                $.ceNotification('show', {
                    type: 'E',
                    title: _.tr('error'),
                    message: _.tr('block_manager.forbid_changing_layout_in_css_mode'),
                });
                this.value = prev_value;
            } else {
                if(this.value == "fluid") {
                    $("#fluid_layout_settings_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
").removeClass('hidden');
                } else {
                    $("#fluid_layout_settings_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
").addClass('hidden');
                }
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<div class="buttons-container">
    <?php if ($_smarty_tpl->getValue('id') && !$_smarty_tpl->getValue('layout_data')['is_default']) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.delete_layout?layout_id=".((string)$_smarty_tpl->getValue('layout_data')['layout_id']))), ENT_QUOTES, 'UTF-8');?>
" class="cm-confirm cm-post pull-left btn cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-trash"), $_smarty_tpl);?>
</a>
    <?php }?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[block_manager.update_layout]",'cancel_action'=>"close",'save'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
?>
</div>

</form>
<?php }
}
