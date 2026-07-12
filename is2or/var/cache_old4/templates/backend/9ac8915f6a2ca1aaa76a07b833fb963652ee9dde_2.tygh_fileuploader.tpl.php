<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:common/fileuploader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523d03ab7_30038971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ac8915f6a2ca1aaa76a07b833fb963652ee9dde' => 
    array (
      0 => 'common/fileuploader.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5523d03ab7_30038971 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','text_select_file','upload_another_file','local','server','url','text_allowed_to_upload_file_extension'));
$_smarty_tpl->assign('post_max_size', $_smarty_tpl->getValue('server_env')->getIniVar("post_max_size"), false, NULL);
$_smarty_tpl->assign('upload_max_filesize', ($_smarty_tpl->getValue('is_image') && !( !$_smarty_tpl->hasVariable('upload_max_filesize_mb') || empty($_smarty_tpl->getValue('upload_max_filesize_mb')))) ? ((string)$_smarty_tpl->getValue('upload_max_filesize_mb'))."M" : $_smarty_tpl->getValue('server_env')->getIniVar("upload_max_filesize"), false, NULL);?>

<?php if ($_smarty_tpl->getValue('max_upload_filesize')) {?>
    <?php if ($_smarty_tpl->getValue('post_max_size') > $_smarty_tpl->getValue('max_upload_filesize')) {?>
        <?php $_smarty_tpl->assign('post_max_size', $_smarty_tpl->getValue('max_upload_filesize'), false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('upload_max_filesize') > $_smarty_tpl->getValue('max_upload_filesize')) {?>
        <?php $_smarty_tpl->assign('upload_max_filesize', $_smarty_tpl->getValue('max_upload_filesize'), false, NULL);?>
    <?php }
}?>

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
    $.extend(_, {
        post_max_size_bytes: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_return_bytes')($_smarty_tpl->getValue('post_max_size'))), ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_bytes: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_return_bytes')($_smarty_tpl->getValue('upload_max_filesize'))), ENT_QUOTES, 'UTF-8');?>
',

        post_max_size_mbytes: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post_max_size')), ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_mbytes: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('upload_max_filesize')), ENT_QUOTES, 'UTF-8');?>
',
        allowed_file_path: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_http_files_dir_path')()), ENT_QUOTES, 'UTF-8');?>
'
    });

    _.tr({
        file_is_too_large: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("file_is_too_large", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        files_are_too_large: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("files_are_too_large", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/fileuploader_scripts.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/node_cloning.js"), $_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('var_name'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->assign('id_var_name', ((string)$_smarty_tpl->getValue('prefix')).$_prefixVariable1, false, NULL);?>

<div class="fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->getValue('disabled_param')) {?>hidden disabled<?php }?>>
<input type="hidden" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_id')), ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->getValue('images')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');
}?>" />

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, 'image_id');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_id')->value => $_smarty_tpl->getVariable('image')->value) {
$foreach8DoElse = false;
?>
    <div class="upload-file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['file']), ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_smarty_tpl->getValue('image')['location'] == "cart") {?>
                    <?php $_smarty_tpl->assign('delete_link', ((string)$_smarty_tpl->getValue('runtime')['controller']).".delete_file?cart_id=".((string)$_smarty_tpl->getValue('id'))."&option_id=".((string)$_smarty_tpl->getValue('po')['option_id'])."&file=".((string)$_smarty_tpl->getValue('image_id'))."&redirect_mode=cart", false, NULL);?>
                    <?php $_smarty_tpl->assign('download_link', ((string)$_smarty_tpl->getValue('runtime')['controller']).".get_custom_file?cart_id=".((string)$_smarty_tpl->getValue('id'))."&option_id=".((string)$_smarty_tpl->getValue('po')['option_id'])."&file=".((string)$_smarty_tpl->getValue('image_id')), false, NULL);?>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"fileuploader:links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php if ($_smarty_tpl->getValue('image')['is_image']) {?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('image')['detailed'])), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('image')['thumbnail'])), ENT_QUOTES, 'UTF-8');?>
" border="0" /></a><br />
            <?php }?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_smarty_tpl->getValue('delete_link')) {?><a class="cm-ajax cm-post" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('delete_link'))), ENT_QUOTES, 'UTF-8');?>
"><?php }
if (!($_smarty_tpl->getValue('po')['required'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('images')) == 1)) {
ob_start();
if ($_smarty_tpl->getValue('multiupload') !== 'Y') {
echo "Tygh.fileuploader.toggle_links('";
echo (string)$_smarty_tpl->getValue('id_var_name');
echo "', 'show');";
}
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"remove_sign",'class'=>"cm-tooltip hand flex-inline top",'id'=>"clean_selection_".((string)$_smarty_tpl->getValue('id_var_name'))."_".((string)$_smarty_tpl->getValue('image')['file']),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_this_item", [], $_smarty_tpl->getSmarty()->getLanguage()),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable2." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->getValue('id_var_name'))."', '".((string)$_smarty_tpl->getValue('label_id'))."');"),'icon_text'=>''), $_smarty_tpl);?>
&nbsp;<?php }
if ($_smarty_tpl->getValue('delete_link')) {?></a><?php }?><span class="upload-filename"><?php if ($_smarty_tpl->getValue('download_link')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('download_link'))), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['name']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('download_link')) {?></a><?php }?></span>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"fileuploader:uploaded_files"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </p>
    </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"fileuploader:uploader"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<div id="file_uploader_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="upload-file-section" id="message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden"><?php ob_start();
if ($_smarty_tpl->getValue('multiupload') !== 'Y') {
echo "Tygh.fileuploader.toggle_links(this.id, 'show');";
}
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"remove_sign",'class'=>"cm-tooltip hand flex-inline top",'id'=>"clean_selection_".((string)$_smarty_tpl->getValue('id_var_name')),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_this_item", [], $_smarty_tpl->getSmarty()->getLanguage()),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable3." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->getValue('id_var_name'))."', '".((string)$_smarty_tpl->getValue('label_id'))."');"),'icon_text'=>''), $_smarty_tpl);?>
&nbsp;<span class="upload-filename"></span></p>
        <?php if ($_smarty_tpl->getValue('multiupload') !== "Y") {?><p class="cm-fu-no-file <?php if ($_smarty_tpl->getValue('images')) {?>hidden<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_select_file", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p><?php }?>
    </div>

    <input type="hidden" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
name="file_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
value="<?php if ($_smarty_tpl->getValue('image_name')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_name')), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="file_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="cm-fileuploader-field <?php if ($_smarty_tpl->getValue('is_image')) {?>cm-image-field<?php }?>"<?php if ($_smarty_tpl->getValue('disabled_param')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 disabled<?php }
if ($_smarty_tpl->getValue('target_form')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><input type="hidden" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
name="type_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
value="<?php if ($_smarty_tpl->getValue('image_name')) {?>local<?php }?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="type_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="cm-fileuploader-field <?php if ($_smarty_tpl->getValue('is_image')) {?>cm-image-field<?php }?>"<?php if ($_smarty_tpl->getValue('disabled_param')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 disabled<?php }
if ($_smarty_tpl->getValue('target_form')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><div class="btn-group <?php if ($_smarty_tpl->getValue('multiupload') != "Y" && $_smarty_tpl->getValue('images')) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
"><div class="upload-file-local"><a class="btn"><span data-ca-multi="Y" <?php if (!$_smarty_tpl->getValue('images')) {?>class="hidden"<?php }?>><?php echo (($tmp = $_smarty_tpl->getValue('upload_another_file_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("upload_another_file", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</span><span data-ca-multi="N" <?php if ($_smarty_tpl->getValue('images')) {?>class="hidden"<?php }?>><?php echo (($tmp = $_smarty_tpl->getValue('upload_file_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("local", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</span></a><div class="image-selector"><label for=""><input type="file" name="file_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->getValue('multiupload') == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_id')), ENT_QUOTES, 'UTF-8');?>
');" class="file<?php if ($_smarty_tpl->getValue('is_image')) {?> cm-image-field<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"></label></div></div><?php if (!$_smarty_tpl->getValue('hide_server') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_user_access')($_smarty_tpl->getValue('auth')['user_id'],"edit_files")) {?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="server_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("server", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="url_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("url", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('hidden_name')) {?><input type="hidden" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="hidden_empty_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
value=""<?php if ($_smarty_tpl->getValue('target_form')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><input type="hidden" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="hidden_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hidden_value')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('target_form')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><?php }?></div><?php if ($_smarty_tpl->getValue('allowed_ext')) {?><p class="mute micro-note"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_allowed_to_upload_file_extension", array("[ext]"=>$_smarty_tpl->getValue('allowed_ext')), $_smarty_tpl->getSmarty()->getLanguage());?>
</p><?php }?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"fileuploader:uploader"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

</div><!--fileuploader-->
<?php }
}
