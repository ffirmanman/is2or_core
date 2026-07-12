<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:12
  from 'tygh:views/themes/components/logo_item.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb552402cf44_53026381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '107e1ef09626a3c971b232245d2d51f93633e47b' => 
    array (
      0 => 'views/themes/components/logo_item.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
  ),
))) {
function content_69fb552402cf44_53026381 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/themes/components';
\Tygh\Languages\Helper::preloadLangVars(array('logo_section.','no_image','alt_text'));
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('logo')['logo_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image', (($tmp = $_smarty_tpl->getValue('logo')['image'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('id')) {?>
    <input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
    <input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="logos-section__item attach-images control-group">
        <div class="upload-box clearfix">
            <div class="row-fluid">
                <div class="span12">
                    <h5><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("logo_section.".((string)$_smarty_tpl->getValue('type')), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>
                </div>
            </div>
            <div class="row-fluid">
                <div class="logos-section__image <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
 span4">
                    <div class="image <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->getValue('image')) {?>
                            <img class="solid-border" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['image_path']), ENT_QUOTES, 'UTF-8');?>
" width="152">
                        <?php } else { ?>
                            <div class="no-image"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon_deprecated.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</div>
                        <?php }?>
                    </div>
                    <?php if ((($tmp = $_smarty_tpl->getValue('show_alt') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                        <div class="image-alt">
                            <div class="input-prepend">
                                <span class="add-on cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("alt_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-comment"), $_smarty_tpl);?>
</span>
                                <input type="text" class="input-text cm-image-field" id="alt_text_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image')['alt'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('company_name') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" value="">
                            </div>
                        </div>
                    <?php }?>
                </div>

                <div class="logos-section image-upload span8">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->getValue('type'))."]",'is_image'=>true,'show_hidpi_checkbox'=>(($tmp = $_smarty_tpl->getValue('show_hidpi_checkbox') ?? null)===null||$tmp==='' ? true ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
                    <?php if ($_smarty_tpl->getValue('description')) {?>
                        <div><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('description')), ENT_QUOTES, 'UTF-8');?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
