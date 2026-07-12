<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:views/themes/manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523c75aa4_53125729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '549525e74cb4406f5fde1cd4ce97092a684f3c91' => 
    array (
      0 => 'views/themes/manage.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/previewer.tpl' => 1,
    'tygh:views/themes/components/upload_theme.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:buttons/button.tpl' => 7,
    'tygh:views/themes/components/logos_list.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
))) {
function content_69fb5523c75aa4_53125729 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/themes';
\Tygh\Languages\Helper::preloadLangVars(array('settings_overwrite_title','settings_overwrite_text','current_setting_value','new_setting_value','cancel','overwrite_selected_settings','current_theme','theme_styles_and_layouts','layout','theme_editor.style','layout','theme_editor.style','none','theme_no_styles_text','theme_editor','theme_editor_not_supported','theme_editor','edit_layout_on_site','edit_content_on_site','active','cannot_remove_theme_has_dependent_themes','remove_theme','layouts','theme_editor.styles','activate','use_this_style','currently_in_use','currently_in_use','activate','no_themes_available','install','preview','install','no_themes_available','rebuild_cache_automatically','rebuild_cache_automatically_tooltip','theme_information','name','directory','layouts','theme_editor.styles','developer','marketplace','marketplace_find_more','upload_theme','upload_theme','upload_theme','themes'));
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/bootstrap_switch/js/bootstrapSwitch.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->renderSubTemplate("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "upload_theme", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/themes/components/upload_theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('theme', $_smarty_tpl->getValue('available_themes')['current'], false, NULL);
$_smarty_tpl->assign('theme_name', $_smarty_tpl->getValue('available_themes')['current']['theme_name'], false, NULL);
$_smarty_tpl->assign('redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

<?php if ((defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::ADMIN_PANEL")) {?>
    <?php $_smarty_tpl->assign('act_as_vendor', $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") && $_smarty_tpl->getValue('auth')['act_as_user'], false, NULL);
}
$_smarty_tpl->assign('tabs_count', 1, false, NULL);?>

<?php if ($_smarty_tpl->getValue('conflicts')) {?>
<div class="row-fluid">
    <div id="conflicts">
        <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("settings_overwrite_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("settings_overwrite_text", array("[theme_name]"=>$_smarty_tpl->getValue('requested_theme_name')), $_smarty_tpl->getSmarty()->getLanguage());?>
:</p>
        <form method="post" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("themes.set")), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="theme_name" value="<?php echo htmlspecialchars((string) ($_GET['theme_name']), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="style" value="<?php echo htmlspecialchars((string) ($_GET['style']), ENT_QUOTES, 'UTF-8');?>
">
            <div class="table-wrapper">
                <table class="table table-condensed table--relative">
                    <thead>
                        <tr>
                            <th width="1"><?php $_smarty_tpl->renderSubTemplate("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></th>
                            <th></th>
                            <th width="20%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("current_setting_value", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("new_setting_value", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('conflicts'), 'setting_section', false, 'section_name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('section_name')->value => $_smarty_tpl->getVariable('setting_section')->value) {
$foreach0DoElse = false;
?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('setting_section')['settings'], 'setting', false, 'setting_name');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('setting_name')->value => $_smarty_tpl->getVariable('setting')->value) {
$foreach1DoElse = false;
?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="settings_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('setting')['object_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('setting')['object_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-item" checked="checked">
                                </td>
                                <td>
                                    <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('setting_section')['name']), ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('setting')['name']), ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td>
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('setting')['current_value_readable']), ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td>
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('setting')['new_value_readable']), ENT_QUOTES, 'UTF-8');?>

                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
            <div class="clearfix right">
                <a class="btn" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("themes.manage")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <button class="btn btn-primary" type="submit" name="allow_overwrite" value="Y"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("overwrite_selected_settings", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
            </div>
        </form>
    </div>
</div>
<?php } else { ?>

<div class="themes" id="themes_list">

<div class="row-fluid">
    <div class="span12">
        <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("current_theme", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
    </div>
</div>
<div class="row-fluid">
    <div class="span12 section-headers">
        <h4 class="lead"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme')['title']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('layout')['style_name']) {?>: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout')['style_name']), ENT_QUOTES, 'UTF-8');
}?></h4>
        <span class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_styles_and_layouts", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    </div>
</div>
<div class="row-fluid">
    <?php if ($_smarty_tpl->getValue('theme')['screenshot']) {?>
        <div id="theme_image" class="span4">
            <?php if ($_smarty_tpl->getValue('theme')['styles'][$_smarty_tpl->getValue('layout')['style_id']]['image']) {?>
                <img class="screenshot" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme')['styles'][$_smarty_tpl->getValue('layout')['style_id']]['image']), ENT_QUOTES, 'UTF-8');?>
">
            <?php } else { ?>
                <img class="screenshot" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/user_styles.png" alt="">
            <?php }?>

        <!--theme_image--></div>
    <?php }?>
    <div class="span8 theme-description" id="theme_description_container">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:current_theme_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                    <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor.style", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:list_extra_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:list_extra_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->assign('has_styles', !!$_smarty_tpl->getValue('theme')['styles'], false, NULL);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('theme')['layouts'], 'available_layout');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('available_layout')->value) {
$foreach2DoElse = false;
?>
                            <tr>
                                <td data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('available_layout')['name']), ENT_QUOTES, 'UTF-8');?>
</td>
                                <td data-th="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor.style", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                    <?php $_smarty_tpl->assign('styles_descr', array(), false, NULL);?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('available_themes')['current']['styles'], 'style');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('style')->value) {
$foreach3DoElse = false;
?>
                                        <?php $_tmp_array = $_smarty_tpl->getValue('styles_descr') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('style')['style_id']] = $_smarty_tpl->getValue('style')['name'];
$_smarty_tpl->assign('styles_descr', $_tmp_array, false, NULL);?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    <?php if ($_smarty_tpl->getValue('has_styles')) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"themes_styles",'id'=>$_smarty_tpl->getValue('available_layout')['layout_id'],'status'=>$_smarty_tpl->getValue('available_layout')['style_id'],'items_status'=>$_smarty_tpl->getValue('styles_descr'),'update_controller'=>"themes.styles",'status_target_id'=>"theme_description_container,themes_list",'statuses'=>$_smarty_tpl->getValue('available_themes')['current']['styles'],'btn_meta'=>mb_strtolower((string) "btn btn-link o-status-".((string)$_smarty_tpl->getValue('o')['status']), 'UTF-8'),'default_status_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("none", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <span class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_no_styles_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                    <?php }?>
                                </td>
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:list_extra_td"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:list_extra_td"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <td class="right btn-toolbar btn-toolbar--theme-editor" data-th="&nbsp;">
                                    <?php if ($_smarty_tpl->getValue('available_layout')['is_default']) {?>
                                        <?php $_smarty_tpl->assign('default_layout_name', $_smarty_tpl->getValue('available_layout')['name'], false, NULL);?>
                                        <?php $_smarty_tpl->assign('but_meta', "btn-small btn-primary cm-post", false, NULL);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->assign('but_meta', "btn-small cm-post", false, NULL);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('has_styles')) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->getValue('available_layout')['layout_id'])."&s_storefront=".((string)$_smarty_tpl->getValue('storefront')->storefront_id),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor_not_supported", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"btn",'but_meta'=>"btn btn-small disabled cm-tooltip"), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                    <?php if (!$_smarty_tpl->getValue('act_as_vendor')) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=block_manager&status=enable&s_layout=".((string)$_smarty_tpl->getValue('available_layout')['layout_id'])."&s_storefront=".((string)$_smarty_tpl->getValue('storefront')->storefront_id),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_layout_on_site", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&s_layout=".((string)$_smarty_tpl->getValue('available_layout')['layout_id'])."&s_storefront=".((string)$_smarty_tpl->getValue('storefront')->storefront_id),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_content_on_site", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
?>
                                </td>
                            <tr>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:current_theme_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <!--theme_description_container--></div>
</div>
<?php if ($_smarty_tpl->getValue('theme_logos')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/themes/components/logos_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logos'=>$_smarty_tpl->getValue('theme_logos'),'company_id'=>$_smarty_tpl->getValue('id'),'default_layout_name'=>(($tmp = $_smarty_tpl->getValue('default_layout_name') ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), (int) 0, $_smarty_current_dir);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox", null, null);
if ($_smarty_tpl->getValue('can_manage_themes')) {?>
<div id="content_installed_themes">
    <div id="themes_manage" class="themes-current clearfix">

    <div class="themes-available">
    <?php if ($_smarty_tpl->getValue('available_themes')['installed']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('array_reverse')($_smarty_tpl->getValue('available_themes')['installed'],true), 'installed_theme', false, 'theme_id');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme_id')->value => $_smarty_tpl->getVariable('installed_theme')->value) {
$foreach4DoElse = false;
?>
        <div class="row-fluid">
        <?php if ($_smarty_tpl->getValue('installed_theme')) {?>
            <div class="theme-subtitle clearfix">
                <h4 id="anchor_<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('installed_theme')['title']," ","_");?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('installed_theme')['title']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('theme_id') == $_smarty_tpl->getValue('theme_name')) {?> <span class="label label-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }?></h4>
                <?php if ($_smarty_tpl->getValue('installed_theme')['dependent_themes']) {?>
                    <?php $_smarty_tpl->assign('can_remove', false, false, NULL);?>
                    <?php $_smarty_tpl->assign('tooltip', $_smarty_tpl->getSmarty()->getModifierCallback("__")("cannot_remove_theme_has_dependent_themes", array("[dependent_themes]"=>$_smarty_tpl->getSmarty()->getModifierCallback('implode')(', ',$_smarty_tpl->getValue('installed_theme')['dependent_themes'])), $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('can_remove', true, false, NULL);?>
                    <?php $_smarty_tpl->assign('tooltip', $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_theme", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                <?php }?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:remove_theme"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <a class="<?php if ($_smarty_tpl->getValue('can_remove')) {?>cm-confirm cm-post <?php }?>cm-tooltip btn pull-right btn-small"<?php if (!$_smarty_tpl->getValue('can_remove')) {?> disabled="disabled"<?php }?> data-ce-tooltip-position="top"<?php if ($_smarty_tpl->getValue('can_remove')) {?> href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("themes.delete?theme_name=".((string)$_smarty_tpl->getValue('theme_id')));?>
"<?php }?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tooltip')), ENT_QUOTES, 'UTF-8');?>
"> <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-trash"), $_smarty_tpl);?>
</a>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:remove_theme"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <span class="label pull-right"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('installed_theme')['layouts'])), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("layouts", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <span class="label pull-right"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('installed_theme')['styles'])), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor.styles", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </div>
            <div class="themes-list">
            <?php if ($_smarty_tpl->getValue('installed_theme')['styles']) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('installed_theme')['styles'], 'style');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('style')->value) {
$foreach5DoElse = false;
?>
                    <div class="span3">
                        <div class="theme <?php if ($_smarty_tpl->getValue('style')['style_id'] == $_smarty_tpl->getValue('layout')['style_id'] && $_smarty_tpl->getValue('layout')['theme_name'] == $_smarty_tpl->getValue('theme_id')) {?>theme-selected<?php }?>">
                            <div class="theme-title">
                               <span title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('installed_theme')['title']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('installed_theme')['title']), ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('style')['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                            <?php if ($_smarty_tpl->getValue('theme_id') != $_smarty_tpl->getValue('runtime')['layout']['theme_name'] || $_smarty_tpl->getValue('style')['style_id'] != $_smarty_tpl->getValue('layout')['style_id']) {?>
                                <div class="theme-use">
                                    <?php if ($_smarty_tpl->getValue('theme_id') != $_smarty_tpl->getValue('runtime')['layout']['theme_name']) {?>
                                        <?php $_smarty_tpl->assign('but_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("activate", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->assign('but_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("use_this_style", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                    <?php }?>

                                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"themes.set?theme_name=".((string)$_smarty_tpl->getValue('theme_id'))."&amp;style=".((string)$_smarty_tpl->getValue('style')['style_id']),'but_text'=>$_smarty_tpl->getValue('but_text'),'but_role'=>"action",'but_meta'=>"btn-primary cm-post"), (int) 0, $_smarty_current_dir);
?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('style')['image']) {?>
                                <a id="image_img_<?php echo $_smarty_tpl->getValue('theme_id');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('style')['style_id']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('style')['image']), ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('style')['style_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer">
                                    <?php if ($_smarty_tpl->getValue('style')['style_id'] == $_smarty_tpl->getValue('layout')['style_id'] && $_smarty_tpl->getValue('layout')['theme_name'] == $_smarty_tpl->getValue('theme_id')) {?>
                                        <span class="theme-in-use"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("currently_in_use", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                    <?php }?>
                                    <img class="screenshot" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('style')['image']), ENT_QUOTES, 'UTF-8');?>
" alt="">
                                </a>
                            <?php } else { ?>
                                <div>
                                    <?php if ($_smarty_tpl->getValue('style')['style_id'] == $_smarty_tpl->getValue('layout')['style_id'] && $_smarty_tpl->getValue('layout')['theme_name'] == $_smarty_tpl->getValue('theme_id')) {?>
                                        <span class="theme-in-use"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("currently_in_use", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                    <?php }?>
                                    <img class="screenshot" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/user_styles.png" alt="">
                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <?php } else { ?>
                <div class="span3">
                    <div class="theme">
                        <div class="theme-title">
                           <span title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme')['title']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('installed_theme')['title']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <?php if ($_smarty_tpl->getValue('theme_id') != $_smarty_tpl->getValue('runtime')['layout']['theme_name']) {?>
                            <div class="theme-use">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"themes.set?theme_name=".((string)$_smarty_tpl->getValue('theme_id')),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("activate", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>"btn-primary cm-post"), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('installed_theme')['screenshot']) {?>
                            <a id="image_img_<?php echo $_smarty_tpl->getValue('theme_id');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('installed_theme')['screenshot']), ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('installed_theme')['screenshot']), ENT_QUOTES, 'UTF-8');?>
" alt=""></a>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        </div>
        <?php }?>
        <!--/row--></div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_themes_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </div>
    <?php }?>
    </div>
</div>
</div>
<div id="content_browse_all_available_themes">

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:install_themes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('available_themes')['repo'],'size'=>3,'assign'=>"splitted_themes",'simple'=>true), $_smarty_tpl);?>

    <div class="themes-available">

    <?php if ($_smarty_tpl->getValue('available_themes')['repo']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_themes'), 'repo_themes');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('repo_themes')->value) {
$foreach6DoElse = false;
?>
    <div class="row-fluid">
        <div class="themes-list">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('repo_themes'), 'repo_theme', false, 'theme_id');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme_id')->value => $_smarty_tpl->getVariable('repo_theme')->value) {
$foreach7DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('repo_theme')) {?>
                <div class="span3">
                    <div class="theme">

                        <div class="theme-title">
                        <span title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme')['title']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('repo_theme')['title']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>

                        <div class="theme-use">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"themes.install?theme_name=".((string)$_smarty_tpl->getValue('theme_id')),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("install", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>"btn-primary cm-comet cm-ajax cm-post",'but_target_id'=>"themes_list"), (int) 0, $_smarty_current_dir);
?>
                        </div>

                        <?php if ($_smarty_tpl->getValue('repo_theme')['screenshot']) {?>
                        <a id="image_img_<?php echo $_smarty_tpl->getValue('theme_id');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('repo_theme')['screenshot']), ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('repo_theme')['screenshot']), ENT_QUOTES, 'UTF-8');?>
" alt=""></a>
                        <?php }?>

                        <div class="theme-actions">
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>

                                <?php if ($_smarty_tpl->getValue('repo_theme')['screenshot']) {?>
                                <li><a id="image_img_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme_id')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('repo_theme')['screenshot']), ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("preview", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                                <?php }?>

                                                                <li><a class="cm-comet cm-ajax cm-post" data-ca-target-id="themes_list" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("themes.install?theme_name=".((string)$_smarty_tpl->getValue('theme_id')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="themes_list"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("install", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list'),'placement'=>"right"), true);?>

                        </div>
                    </div>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_themes_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </div>
    <?php }?>
    </div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:install_themes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), (int) 0, $_smarty_current_dir);
?>
<!--themes_list--></div>
<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sidebar", null, null);?>
    <?php if ($_smarty_tpl->getValue('can_manage_themes')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="container themes-side">

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="sidebar-row">
            <ul class="unstyled list-with-btns">
                <li>
                    <div class="list-description">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("rebuild_cache_automatically", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <span class="flex-inline">
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"cm-tooltip icon-question-sign",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("rebuild_cache_automatically_tooltip", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

                        </span>
                    </div>
                    <div class="switch switch-mini cm-switch-change list-btns" id="rebuild_cache_automatically">
                        <input type="checkbox" name="compile_check" value="1" <?php if ($_smarty_tpl->getValue('dev_modes')['compile_check']) {?>checked="checked"<?php }?>/>
                    </div>
                </li>
            </ul>
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

            (function (_, $) {
                $(_.doc).on('switch-change', '.cm-switch-change', function (e, data) {
                    var value = data.value;
                    $.ceAjax('request', fn_url("themes.update_dev_mode"), {
                        method: 'post',
                        data: {
                            dev_mode: data.el.prop('name'),
                            state: value ? 1 : 0
                        }
                    });
                });

                $.ceEvent('on', 'ce.ajaxdone', function(){
                    if ($('.switch .switch-mini').length == 0) {
                        $('.switch')['bootstrapSwitch']();
                    }
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <hr>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="form-horizontal sidebar-row clearfix">
            <h6><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_information", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h6>
            <div class="control-group">
                <div class="control-label muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                <div class="controls right"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme')['title']), ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
            <div class="control-group">
                <div class="control-label muted" title="/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('storefront')->theme_name), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("directory", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                <div class="controls right"><a class="pull-right" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("templates.manage?selected_path=".((string)$_smarty_tpl->getValue('storefront')->theme_name))), ENT_QUOTES, 'UTF-8');?>
">/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('storefront')->theme_name), ENT_QUOTES, 'UTF-8');?>
</a></div>
            </div>
            <div class="control-group">
                <div class="control-label muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("layouts", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                <div class="controls right"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.manage")), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('theme')['layouts'])), ENT_QUOTES, 'UTF-8');?>
</a></div>
            </div>
            <div class="control-group">
                <div class="control-label muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor.styles", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                <div class="controls right"><a href="#anchor_<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('theme')['title']," ","_")), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('theme')['styles'])), ENT_QUOTES, 'UTF-8');?>
</a> </div>
            </div>
            <div class="control-group">
                <div class="control-label muted" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("developer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                <div class="controls right"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme')['developer']), ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
        </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <hr>
        <div class="sidebar-row marketplace">
            <h6><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("marketplace", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h6>
            <p class="marketplace-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("marketplace_find_more", array("[href]"=>$_smarty_tpl->getValue('config')['resources']['marketplace_url']), $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        </div>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && $_smarty_tpl->getValue('runtime')['company_id']) || ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && !$_smarty_tpl->getValue('runtime')['company_id'])) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"upload_theme",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("upload_theme", [], $_smarty_tpl->getSmarty()->getLanguage()),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("upload_theme", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("upload_theme", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'upload_theme'),'act'=>"general",'link_class'=>"btn-primary cm-dialog-auto-size nav__actions-btn-primary",'icon'=>"icon-plus"), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"themes:tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php if ($_smarty_tpl->getValue('theme_logos')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[themes.update_logos]",'but_role'=>"action",'but_target_form'=>"update_logos_form",'but_meta'=>"cm-submit nav__actions-btn-save"), (int) 0, $_smarty_current_dir);
?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("themes", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons'),'select_storefront'=>true,'show_all_storefront'=>false), (int) 0, $_smarty_current_dir);
}
}
