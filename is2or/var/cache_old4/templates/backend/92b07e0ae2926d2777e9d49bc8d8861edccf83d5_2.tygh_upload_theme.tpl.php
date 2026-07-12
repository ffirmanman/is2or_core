<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:views/themes/components/upload_theme.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523cb7347_77770141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b07e0ae2926d2777e9d49bc8d8861edccf83d5' => 
    array (
      0 => 'views/themes/components/upload_theme.tpl',
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
function content_69fb5523cb7347_77770141 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/themes/components';
\Tygh\Languages\Helper::preloadLangVars(array('install_theme_text','marketplace_find_more','upload'));
?>
<div class="install-addon" id="theme_upload_container">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="theme_upload_container" />
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />

            <p class="install-addon-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("install_theme_text", array('[exts]'=>$_smarty_tpl->getSmarty()->getModifierCallback('implode')(',',$_smarty_tpl->getValue('config')['allowed_pack_exts'])), $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"theme_pack[0]"), (int) 0, $_smarty_current_dir);
?>

            <div class="marketplace">
                <p class="marketplace-link"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("marketplace_find_more", array("[href]"=>$_smarty_tpl->getValue('config')['resources']['marketplace_url']), $_smarty_tpl->getSmarty()->getLanguage());?>
 </p>
            </div>

        </div>

        <div class="buttons-container">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[themes.upload]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("upload", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
        </div>
    </form>
<!--theme_upload_container--></div>
<?php }
}
