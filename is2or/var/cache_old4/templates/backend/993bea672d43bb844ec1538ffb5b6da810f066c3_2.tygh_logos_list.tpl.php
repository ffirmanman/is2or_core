<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:12
  from 'tygh:views/themes/components/logos_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5524012ba0_39910540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993bea672d43bb844ec1538ffb5b6da810f066c3' => 
    array (
      0 => 'views/themes/components/logos_list.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/themes/components/logo_item.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69fb5524012ba0_39910540 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/themes/components';
\Tygh\Languages\Helper::preloadLangVars(array('logos','show_extra_logos','theme_editor.favicon_size','hide_extra_logos'));
?>
<div class="logos-section">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_logos_form" id="update_logos_form" enctype="multipart/form-data">
        <div class="row-fluid">
            <div class="span12" id="title_theme_logo">
                <h4><?php if ($_smarty_tpl->getValue('default_layout_name')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('default_layout_name')), ENT_QUOTES, 'UTF-8');?>
: <?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("logos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
            </div>
        </div>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/themes/components/logo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"theme",'logo'=>$_smarty_tpl->getValue('logos')['theme']), (int) 0, $_smarty_current_dir);
?>
        <div class="row-fluid">
            <div class="span12">
                <?php ob_start();
if ($_smarty_tpl->getValue('show_all_logos')) {
echo " hidden";
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("show_extra_logos", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_id'=>"on_attach_additional_logos",'but_meta'=>"cm-combination ".$_prefixVariable5), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
        <div id="attach_additional_logos" name="attach_additional_logos"<?php if (!$_smarty_tpl->getValue('show_all_logos')) {?> class="hidden"<?php }?>>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('logos'), 'logo', false, 'type');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('type')->value => $_smarty_tpl->getVariable('logo')->value) {
$foreach12DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('type') == "theme") {?>
                    <?php continue 1;?>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:views/themes/components/logo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->getValue('type'),'logo'=>$_smarty_tpl->getValue('logo'),'show_alt'=>($_smarty_tpl->getValue('type') != "favicon"),'show_hidpi_checkbox'=>($_smarty_tpl->getValue('type') != "favicon"),'description'=>($_smarty_tpl->getValue('type') == "favicon") ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor.favicon_size", [], $_smarty_tpl->getSmarty()->getLanguage()) : ''), (int) 0, $_smarty_current_dir);
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <div class="row-fluid">
                <div class="span12">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("hide_extra_logos", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_id'=>"off_attach_additional_logos",'but_meta'=>"cm-combination"), (int) 0, $_smarty_current_dir);
?>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }
}
