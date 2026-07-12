<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:addons/hidpi/hooks/fileuploader/uploader.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523d57299_54593841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76540226616fbd78435530019c3d945c41b3b0de' => 
    array (
      0 => 'addons/hidpi/hooks/fileuploader/uploader.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5523d57299_54593841 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/hidpi/hooks/fileuploader';
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip'));
if ($_smarty_tpl->getValue('is_image') && (($tmp = $_smarty_tpl->getValue('show_hidpi_checkbox') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ((defined('HIDPI_IS_HIGH_RES_FALSE') ? constant('HIDPI_IS_HIGH_RES_FALSE') : null)), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
_hidden" class="cm-image-field" />
    <label for="is_high_res_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" class="hidpi-mark checkbox">
        <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ((defined('HIDPI_IS_HIGH_RES_TRUE') ? constant('HIDPI_IS_HIGH_RES_TRUE') : null)), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_var_name')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('addons')['hidpi']['default_upload_high_res_image'] === "Y") {?>checked="checked"<?php }?> class="cm-image-field" />
        <span class="top"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hidpi.upload_high_res_image", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span> <span class="flex-inline"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign cm-tooltip",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("hidpi.upload_high_res_image.tooltip", [], $_smarty_tpl->getSmarty()->getLanguage()),'icon_text'=>''), $_smarty_tpl);?>
</span>
    </label>
<?php }
}
}
