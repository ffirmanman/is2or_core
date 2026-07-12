<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:16:47
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/theme_editor/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bb3fc2b766_03466079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056ebeb6a1623d59f93c1ae20ccf105eee120a6c' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/theme_editor/view.tpl',
      1 => 1728377996,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/theme_editor/components/fileuploader.tpl' => 6,
    'backend:views/theme_editor/components/colorpicker.tpl' => 6,
  ),
),false)) {
function content_6835bb3fc2b766_03466079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),6=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),7=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('theme_editor.color_scheme','theme_editor.styles','theme_editor.style_name','theme_editor.incorrect_style_name','theme_editor.text_close_editor','theme_editor.text_close_editor_unsaved','theme_editor.text_reset_changes','theme_editor.error_style_exists','theme_editor.confirm_enable_less','theme_editor.hide_show','theme_editor.close','theme_editor.page_cant_be_configured','layout','layout','theme_editor','none','clone','delete','save','theme_editor.customize','save','files','none','save','theme_editor.favicon','theme_editor.favicon_size','theme_editor.on','theme_editor.off','theme_editor.reset_general','theme_editor.reset_css','theme_editor_logo.','theme_editor_logo.','alt_text','image','theme_editor.reset_colors','theme_editor.system_fonts','theme_editor.popular_fonts','theme_editor.other_fonts','theme_editor.reset_fonts','theme_editor.background_color','theme_editor.gradient','theme_editor.on','theme_editor.off','theme_editor.full_width','theme_editor.on','theme_editor.off','theme_editor.full_width','theme_editor.on','theme_editor.off','theme_editor.transparent','theme_editor.pattern','theme_editor.upload_image','theme_editor.position','theme_editor.repeat','theme_editor.repeat','theme_editor.repeat_x','theme_editor.repeat_x','theme_editor.repeat_y','theme_editor.repeat_y','theme_editor.no_repeat','theme_editor.no_repeat','theme_editor.repeat','theme_editor.scroll','theme_editor.scroll','theme_editor.fixed','theme_editor.fixed','theme_editor.scroll','theme_editor.reset_backgrounds','theme_editor.enable_less','theme_editor.warning_css_changes_will_be_reverted','theme_editor.color_scheme','theme_editor.styles','theme_editor.style_name','theme_editor.incorrect_style_name','theme_editor.text_close_editor','theme_editor.text_close_editor_unsaved','theme_editor.text_reset_changes','theme_editor.error_style_exists','theme_editor.confirm_enable_less','theme_editor.hide_show','theme_editor.close','theme_editor.page_cant_be_configured','layout','layout','theme_editor','none','clone','delete','save','theme_editor.customize','save','files','none','save','theme_editor.favicon','theme_editor.favicon_size','theme_editor.on','theme_editor.off','theme_editor.reset_general','theme_editor.reset_css','theme_editor_logo.','theme_editor_logo.','alt_text','image','theme_editor.reset_colors','theme_editor.system_fonts','theme_editor.popular_fonts','theme_editor.other_fonts','theme_editor.reset_fonts','theme_editor.background_color','theme_editor.gradient','theme_editor.on','theme_editor.off','theme_editor.full_width','theme_editor.on','theme_editor.off','theme_editor.full_width','theme_editor.on','theme_editor.off','theme_editor.transparent','theme_editor.pattern','theme_editor.upload_image','theme_editor.position','theme_editor.repeat','theme_editor.repeat','theme_editor.repeat_x','theme_editor.repeat_x','theme_editor.repeat_y','theme_editor.repeat_y','theme_editor.no_repeat','theme_editor.no_repeat','theme_editor.repeat','theme_editor.scroll','theme_editor.scroll','theme_editor.fixed','theme_editor.fixed','theme_editor.scroll','theme_editor.reset_backgrounds','theme_editor.enable_less','theme_editor.warning_css_changes_will_be_reverted'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_layouts', (($tmp = $_smarty_tpl->tpl_vars['show_layouts']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_converted_to_css', (($tmp = $_smarty_tpl->tpl_vars['show_converted_to_css']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_reset_button', (($tmp = $_smarty_tpl->tpl_vars['show_reset_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_duplicate_style', (($tmp = $_smarty_tpl->tpl_vars['show_duplicate_style']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('active_style_id', (($tmp = $_smarty_tpl->tpl_vars['active_style_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['layout']['style_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_can_change_style_name', (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['is_can_change_style_name'] ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('content_container', (($tmp = $_smarty_tpl->tpl_vars['content_container']->value ?? null)===null||$tmp==='' ? "tygh_main_container" ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('header_height', 200);
$_smarty_tpl->_assignInScope('bottom_height', 73);
$_smarty_tpl->_assignInScope('converted_to_css_height', 16);
$_smarty_tpl->_assignInScope('sections_height', 51);?>

<?php if (!$_smarty_tpl->tpl_vars['show_converted_to_css']->value) {?>
    <?php $_smarty_tpl->_assignInScope('header_height', $_smarty_tpl->tpl_vars['header_height']->value-$_smarty_tpl->tpl_vars['converted_to_css_height']->value);
}
if ($_smarty_tpl->tpl_vars['te_sections']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['te_sections']->value) <= 1) {?>
    <?php $_smarty_tpl->_assignInScope('header_height', $_smarty_tpl->tpl_vars['header_height']->value-$_smarty_tpl->tpl_vars['sections_height']->value);
}
if (!$_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
    <?php $_smarty_tpl->_assignInScope('bottom_height', 0);
}?>

<?php $_smarty_tpl->_assignInScope('styles_subtitle', (defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") ? $_smarty_tpl->__("theme_editor.color_scheme") : $_smarty_tpl->__("theme_editor.styles"));
$_smarty_tpl->_assignInScope('icon_path', (defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") ? "common/icon_deprecated.tpl" : "common/icon.tpl");?>

<div class="theme-editor-container" id="theme_editor">

<?php echo '<script'; ?>
>
Tygh.tr({
    'theme_editor.style_name': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.style_name"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.incorrect_style_name': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.incorrect_style_name"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.text_close_editor': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.text_close_editor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.text_close_editor_unsaved': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.text_close_editor_unsaved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.text_reset_changes': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.text_reset_changes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.error_style_exists': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.error_style_exists"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.confirm_enable_less': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.confirm_enable_less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
});
Tygh.te_custom_fonts = <?php echo smarty_modifier_to_json($_smarty_tpl->tpl_vars['current_style']->value['custom_fonts']);?>
;
<?php echo '</script'; ?>
>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax" name="theme_editor_form" enctype="multipart/form-data">
<?php if ($_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?>
    <input type="hidden" name="selected_css_file" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_css_file']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <input type="hidden"
        name="style_id"
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-is-default="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['is_default'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-is-can-change-style-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_can_change_style_name']->value ? 1 : 0, ENT_QUOTES, 'UTF-8');?>
"
    >
    <input type="hidden" name="style[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="theme_editor">

<span class="te-nav"><a id="sw_theme_editor_container" class="te-minimize cm-combination" title="<?php echo $_smarty_tpl->__("theme_editor.hide_show");?>
">
        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-left-open",'data'=>array("data-ca-theme-editor"=>"minimizeIconClose")),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-right-open hidden",'data'=>array("data-ca-theme-editor"=>"minimizeIconOpen")),$_smarty_tpl);?>

    </a>
<a href="<?php echo htmlspecialchars((string) fn_url("customization.disable_mode?type=theme_editor"), ENT_QUOTES, 'UTF-8');?>
" class="te-close cm-te-close-editor" title="<?php echo $_smarty_tpl->__("theme_editor.close");?>
"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-cancel"),$_smarty_tpl);?>
</a>
        </span>
</span>

<div class="theme-editor <?php if ($_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?> te-converted-to-css<?php }?>"
    data-ca-te-use-dynamic-style="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_id']) {?>true<?php } else { ?>false<?php }?>"
    data-ca-te-content-container="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_container']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-bp-sidebar="true"
    style="--te-header-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_height']->value, ENT_QUOTES, 'UTF-8');?>
px; --te-bottom-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bottom_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
    id="theme_editor_container">
    <div class="te-overlay<?php if ((($tmp = $_smarty_tpl->tpl_vars['is_theme_editor_allowed']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?> hidden<?php }?>">
        <div class="te-notification-wrapper">
            <p class="notification-content alert-warning"><?php echo $_smarty_tpl->__("theme_editor.page_cant_be_configured");?>
</p>
        </div>
    </div>
    <div class="te-header<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value) {?> te-header-no-schema<?php }?>" id="te_styles_list">
        <?php if ($_smarty_tpl->tpl_vars['show_layouts']->value) {?>            
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['layouts']->value) == 1) {?>
            <a class="te-layout-name"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title te-layout-nolink"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
        <?php } else { ?>
            <a id="sw_te-layouts" class="te-layout-name cm-combination"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <ul id="te-layouts" class="te-layout-dropdown cm-popup-box">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'layout');
$_smarty_tpl->tpl_vars['layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->do_else = false;
?>
                    <li><a class="cm-te-change-layout" data-ca-layout-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_id'] != $_smarty_tpl->tpl_vars['layout']->value['layout_id']) {?>href="<?php echo htmlspecialchars((string) fn_link_attach($_smarty_tpl->tpl_vars['theme_url']->value,"s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
        <?php }?>
        <span class="te-title">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"theme_editor:title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"theme_editor:title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo $_smarty_tpl->__("theme_editor");?>

            <?php if ($_smarty_tpl->tpl_vars['show_converted_to_css']->value && !$_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css'] && !$_smarty_tpl->tpl_vars['runtime']->value['vendor_id']) {?>
                <a class="te-action-link cm-te-convert-to-css cm-confirm">
                    <span class="te-action-link-title"><?php echo $_smarty_tpl->__('theme_editor.convert_to_css');?>
&nbsp;<?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"ty-icon-help-circle icon-question-sign cm-tooltip",'title'=>$_smarty_tpl->__('theme_editor.text_convert_to_css')),$_smarty_tpl);?>
</span>
                </a>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"theme_editor:title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </span>

        <?php if (!$_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?>

            <?php if ($_smarty_tpl->tpl_vars['props_schema']->value) {?>
            <span class="te-subtitle"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['styles_subtitle']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <div class="te-header-menu-wrap">
                <div class="te-header-menu-wrap-left">
                    <?php $_smarty_tpl->_assignInScope('current_style_name', $_smarty_tpl->tpl_vars['current_style']->value['name']);?>

                    <div class="te-select-box cm-te-selectbox te-theme" tabindex="0"><span class="cm-style-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                    <ul class="te-select-dropdown" id="elm_te_styles">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles_list']->value, 's_item');
$_smarty_tpl->tpl_vars['s_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s_item']->value) {
$_smarty_tpl->tpl_vars['s_item']->do_else = false;
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['active_style_id']->value === $_smarty_tpl->tpl_vars['s_item']->value['style_id']) {?>active<?php }?>">
                                <a class="cm-te-load-style te-list-item <?php if ($_smarty_tpl->tpl_vars['active_style_id']->value === $_smarty_tpl->tpl_vars['s_item']->value['style_id']) {?>active<?php }?>"
                                    data-ca-target-id="theme_editor"
                                    href="<?php echo htmlspecialchars((string) fn_url("theme_editor.view?style_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['style_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-style-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-style-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                </a>

                                <?php if ($_smarty_tpl->tpl_vars['show_duplicate_style']->value) {?>
                                <a class="ty-icon-wrap-duplicate cm-te-duplicate-style" data-ca-style-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"ty-icon-docs icon-copy te-duplicate-style__icon",'title'=>$_smarty_tpl->__("clone")),$_smarty_tpl);?>

                                </a>
                                <?php }?>

                                <?php if ((($tmp = $_smarty_tpl->tpl_vars['s_item']->value['is_removable'] ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                                    <a class="ty-icon-wrap-remove cm-ajax cm-confirm" data-ca-target-id="te_styles_list" href="<?php echo htmlspecialchars((string) fn_url("theme_editor.delete_style?style_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['style_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"ty-icon-trashcan icon-trash te-delete-style__icon",'title'=>$_smarty_tpl->__("delete")),$_smarty_tpl);?>

                                    </a>
                                <?php }?>
                            </li>
                        <?php
}
if ($_smarty_tpl->tpl_vars['s_item']->do_else) {
?>
                            <li class="active">
                                <a class="cm-te-load-style te-list-item active">--</a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    </div>
                </div>
                <div class="te-header-menu-wrap-right">
                    <button class="te-btn-action ty-float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
                </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['te_sections']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['te_sections']->value) > 1) {?>
                <span class="te-subtitle"><?php echo $_smarty_tpl->__("theme_editor.customize");?>
</span>
                <div class="te-select-box cm-te-selectbox te-customize" tabindex="0">
                    <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['te_sections']->value[$_smarty_tpl->tpl_vars['selected_section']->value]);?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                    <ul class="te-select-dropdown cm-te-sections">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['te_sections']->value, 's', false, 'section');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['selected_section']->value == $_smarty_tpl->tpl_vars['section']->value) {?>class="active"<?php }?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['s']->value);?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['props_schema']->value) {?>
                <div class="te-no-schema">
                    <button class="te-btn-action ty-float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
                </div>
            <?php }?>
        <?php } else { ?>
            <span class="te-subtitle"><?php echo $_smarty_tpl->__("files");?>
</span>
            <div class="te-header-menu-wrap">
                <div class="te-header-menu-wrap-left">
                    <div class="te-select-box cm-te-selectbox te-theme" tabindex="0"><span class="cm-style-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['selected_css_file']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                        <ul class="te-select-dropdown">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files_list']->value, 'css_file');
$_smarty_tpl->tpl_vars['css_file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_file']->value) {
$_smarty_tpl->tpl_vars['css_file']->do_else = false;
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['css_file']->value == $_smarty_tpl->tpl_vars['selected_css_file']->value) {?>active<?php }?>">
                                    <a class="te-list-item <?php if ($_smarty_tpl->tpl_vars['css_file']->value == $_smarty_tpl->tpl_vars['selected_css_file']->value) {?>active<?php }?> cm-te-change-css-file" data-ca-target-id="theme_editor" href="<?php echo htmlspecialchars((string) fn_url("theme_editor.view?selected_css_file=".((string)$_smarty_tpl->tpl_vars['css_file']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['css_file']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                </li>
                            <?php
}
if ($_smarty_tpl->tpl_vars['css_file']->do_else) {
?>
                                <li class="active">
                                    <a class="te-list-item active">--</a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
                <div class="te-header-menu-wrap-right">
                    <button class="te-btn-action float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
                </div>
            </div>


        <?php }?>
    <!--te_styles_list--></div>
<div class="te-content<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value) {?> te-content-no-schema<?php }?>">
<div class="te-section cm-te-disable-scroll">
<?php if (!$_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_general']) {?>
    <div class="te-wrap te-general cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_general") {?>hidden<?php }?>" id="te_general">
        <div class="te-inner-wrap">
            <div class="te-general-group">

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value && $_smarty_tpl->tpl_vars['cse_logos']->value['favicon']) {?>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['logo_id']);?>
                    <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['image']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('id', 0);?>
                    <?php $_smarty_tpl->_assignInScope('image', array());?>
                <?php }?>

                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <div class="te-image te-favicon-wrap clearfix">
                    <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.favicon");?>
</span><?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]",'disabled'=>$_smarty_tpl->tpl_vars['current_style']->value['is_default']), 0, false);
?>
                    <div class="te-favicon cm-te-logo" data-ca-image-area="favicon" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                    <div class="te-description"><?php echo $_smarty_tpl->__("theme_editor.favicon_size");?>
</div>
                </div>

            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['general']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "checkbox") {?>
                    <div class="te-general-group">
                        <div class="te-checkbox clearfix">
                            <label for="elm_toggle_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="false" class="cm-te-value-changer" />
                                <input type="checkbox" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value] == "true") {?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</span></label>
                        </div>
                    </div>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_general");?>
</button></div>
        <?php }?>
    <!--te_general--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_css']) {?>
    <div class="te-wrap te-css cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_css") {?>hidden<?php }?>" id="te_css">
        <div class="te-inner-wrap">
            <textarea name="style[custom_css]" cols="30" rows="10"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['custom_css'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_css");?>
</button></div>
        <?php }?>

    <!--te_css--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_logos']) {?>
    <div class="te-wrap te-logos cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_logos") {?>hidden<?php }?>" id="te_logos">

        <div class="te-tabs cm-te-tabs">
            <ul class="te-pills">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cse_logo_types']->value, 'logo', false, 'type');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "favicon") {?>
                    <?php continue 1;?>
                <?php }?>
                <li <?php if ($_smarty_tpl->tpl_vars['type']->value == "theme") {?>class="active"<?php }?>><a data-ca-target-id="elm_logo_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("theme_editor_logo.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
"><span><?php echo $_smarty_tpl->__("theme_editor_logo.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</span></a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cse_logo_types']->value, 'logo', false, 'type');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "favicon") {?>
                    <?php continue 1;?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value && $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id']);?>
                    <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('id', 0);?>
                    <?php $_smarty_tpl->_assignInScope('image', array());?>
                <?php }?>

                <div class="cm-te-tab-contents" <?php if ($_smarty_tpl->tpl_vars['type']->value != "theme") {?>style="display:none;"<?php }?> id="elm_logo_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="attach-images">
                        <div class="upload-box clearfix">
                            <div class="image-wrap pull-left">
                                <div class="te-image">
                                    <div class="te-bg-image cm-te-logo" data-ca-image-area="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                                </div>
                                <div class="logo-alt"><input type="text" class="cm-image-field" id="alt_text_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("alt_text");?>
"></div>
                            </div>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"theme_editor:logo_uploader"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="te-logos-upload clearfix">
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("image");?>
&nbsp;</span>
                                <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]",'disabled'=>$_smarty_tpl->tpl_vars['current_style']->value['is_default']), 0, true);
?>
                            </div>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

            <!--te_logos--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_colors']) {?>
    <div class="te-wrap te-colors cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_colors") {?>hidden<?php }?>" id="te_colors">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['colors']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <div class="te-colors clearfix">
            <label for="elm_te_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>

            <?php $_smarty_tpl->_assignInScope('cp_value', (($tmp = ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value]) ?? null)===null||$tmp==='' ? ((($tmp = ($_smarty_tpl->tpl_vars['field']->value['default']) ?? null)===null||$tmp==='' ? "#ffffff" ?? null : $tmp)) ?? null : $tmp));?>

            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"style[data][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>$_smarty_tpl->tpl_vars['cp_value']->value,'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0, true);
?>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_colors");?>
</button></div>
        <?php }?>

    <!--te_colors--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_fonts']) {?>
    <div class="te-wrap te-fonts cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_fonts") {?>hidden<?php }?>" id="te_fonts">
        <div class="te-inner-wrap">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <div class="ty-control-group control-group te-font-group">
                <label for="elm_te_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
                <div class="te-select-box cm-te-selectbox cm-te-google cm-te-value-changer" tabindex="0" data-ca-select-box-default="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
"><span></span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                    <input type="text" class="hidden cm-te-selectbox-storage" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value]) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) key($_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families']), ENT_QUOTES, 'UTF-8');
}?>">

                    <ul class="te-select-dropdown">
                        <li class="te-selectbox-group cm-te-selectbox-group"><?php echo $_smarty_tpl->__("theme_editor.system_fonts");?>
</li>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families'], 'family_name', false, 'family');
$_smarty_tpl->tpl_vars['family_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['family']->value => $_smarty_tpl->tpl_vars['family_name']->value) {
$_smarty_tpl->tpl_vars['family_name']->do_else = false;
?>
                        <li data-ca-select-box-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value] == $_smarty_tpl->tpl_vars['family']->value) {?>class="active"<?php }?> style="font-family: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['family_name']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <li class="te-selectbox-group cm-te-selectbox-group cm-te-google-popular"><?php echo $_smarty_tpl->__("theme_editor.popular_fonts");?>
</li>
                        <li class="te-selectbox-group cm-te-selectbox-group cm-te-google-other"><?php echo $_smarty_tpl->__("theme_editor.other_fonts");?>
</li>
                        <li class="hidden te-selectbox-group cm-te-selectbox-group cm-te-google-custom"></li>
                    </ul>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['size']) {?>
                    <?php $_smarty_tpl->_assignInScope('size_name', $_smarty_tpl->tpl_vars['field']->value['properties']['size']['match']);?>
                    <?php $_smarty_tpl->_assignInScope('current_value', smarty_modifier_replace($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['size_name']->value],$_smarty_tpl->tpl_vars['field']->value['properties']['size']['unit'],''));?>

                    <div class="te-select-box te-font-size cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_value']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                        <input type="text" class="hidden cm-te-selectbox-storage" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['size_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['size_name']->value], ENT_QUOTES, 'UTF-8');?>
">
                        <ul class="te-select-dropdown">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['properties']['size']['values'], 'font_size');
$_smarty_tpl->tpl_vars['font_size']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['font_size']->value) {
$_smarty_tpl->tpl_vars['font_size']->do_else = false;
?>
                            <li data-ca-select-box-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
px" <?php if ($_smarty_tpl->tpl_vars['current_value']->value == $_smarty_tpl->tpl_vars['font_size']->value) {?>class="active"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['style']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['properties']['style'], 'prop', false, 'key');
$_smarty_tpl->tpl_vars['prop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('prop_name', $_smarty_tpl->tpl_vars['prop']->value['match']);?>

                <div class="te-font-style-wrap">
                    <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop']->value['default'], ENT_QUOTES, 'UTF-8');?>
" />
                    <input class="cm-te-value-changer te-font-style-checkbox" type="checkbox" id="font_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop']->value['property'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['prop_name']->value] == $_smarty_tpl->tpl_vars['prop']->value['property']) {?>checked="checked"<?php }?> /><label for="font_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-font-style <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop']->value['property'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
    <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_fonts");?>
</button></div>
    <?php }?>

    <!--te_fonts--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_backgrounds']) {?>
    <div class="te-wrap te-bg cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_backgrounds") {?>hidden<?php }?>" id="te_backgrounds">

        <div class="te-inner-wrap">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"theme_editor:backgrounds"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"theme_editor:backgrounds"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['backgrounds']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <div class="ty-control-group te-bg-group">
                <label for="elm_te_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>

                <div>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['color']) {?>
                        <?php $_smarty_tpl->_assignInScope('field_name', $_smarty_tpl->tpl_vars['field']->value['properties']['color']['match']);?>

                        <div class="te-color-picker-container te-colors clearfix">
                            <span class="te-bg-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['properties']['color']['description']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("theme_editor.background_color") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
&nbsp;</span>

                            <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient'] || $_smarty_tpl->tpl_vars['field']->value['transparent'] || $_smarty_tpl->tpl_vars['field']->value['full_width']) {?>
                            <a id="sw_backgrounds_adv_color_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination te-advanced-options"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-cog"),$_smarty_tpl);?>
</a>
                            <?php }?>

                            <?php $_smarty_tpl->_assignInScope('color', smarty_modifier_replace($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field_name']->value],"transparent",''));?>

                            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"style[data][".((string)$_smarty_tpl->tpl_vars['field_name']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>(($tmp = $_smarty_tpl->tpl_vars['color']->value ?? null)===null||$tmp==='' ? "#ffffff" ?? null : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0, true);
?>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient'] || $_smarty_tpl->tpl_vars['field']->value['transparent'] || $_smarty_tpl->tpl_vars['field']->value['full_width']) {?>
                    <div id="backgrounds_adv_color_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden clearfix">
                            <div class="te-advanced-connector"></div>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']) {?>
                        <?php $_smarty_tpl->_assignInScope('field_gradient', $_smarty_tpl->tpl_vars['field']->value['gradient']['match']);?>
                        <div class="te-gradient-color clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.gradient");?>
&nbsp;</span>
                            <?php $_smarty_tpl->_assignInScope('gradient_color', (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field_gradient']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field_name']->value] ?? null : $tmp));?>
                            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"style[data][".((string)$_smarty_tpl->tpl_vars['field_gradient']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value)."_gradient",'cp_value'=>(($tmp = (smarty_modifier_replace($_smarty_tpl->tpl_vars['gradient_color']->value,"transparent",'')) ?? null)===null||$tmp==='' ? "#ffffff" ?? null : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0, true);
?>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['full_width']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['full_width']['type']) {?>
                            <div class="te-fullwidth te-checkbox clearfix">
                                <label for="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['full_width']['match'], ENT_QUOTES, 'UTF-8');?>
]" value="false" class="cm-te-value-changer" />
                                    <input type="checkbox" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['full_width']['match'], ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['full_width']['match']] == "true") {?>checked="checked"<?php }?>>
                                    <span class="te-toggle">
                                        <span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span>
                                        <span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span>
                                        <span class="te-toggle-trigger"></span>
                                    </span>
                                        <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.full_width");?>
</span>
                                    </label>
                            </div>
                            <?php } else { ?>
                            <div class="te-fullwidth te-checkbox clearfix">
                                <label for="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="style[data][copy][full_width][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="0">
                                    <input type="checkbox" name="style[data][copy][full_width][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['color']['match']] == $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['full_width']['match']]) {?>checked="checked"<?php }?>>
                                    <span class="te-toggle">
                                        <span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span>
                                        <span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span>
                                        <span class="te-toggle-trigger"></span>
                                    </span>
                                        <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.full_width");?>
</span>
                                </label>
                            </div>
                            <?php }?>
                        <?php }?>


                        <?php if ($_smarty_tpl->tpl_vars['field']->value['transparent']) {?>
                        <div class="te-transparent te-checkbox clearfix">
                            <label for="elm_toggle_transparent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['transparent']['match'], ENT_QUOTES, 'UTF-8');?>
]" value="false" class="cm-te-value-changer">
                                <input type="checkbox" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['transparent']['match'], ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_transparent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['transparent']['match']] == "true") {?>checked="checked"<?php }?>>
                                <span class="te-toggle">
                                    <span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span>
                                    <span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span>
                                    <span class="te-toggle-trigger"></span>
                                </span>
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.transparent");?>
</span>
                            </label>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['pattern']) {?>
                        <div class="te-bg-pattern-group clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.pattern");?>
</span>
                            <a id="sw_backgrounds_adv_pattern_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-advanced-options cm-combination"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-cog"),$_smarty_tpl);?>
</a>
                            <div id="elm_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-pattern-preview <?php if (!$_smarty_tpl->tpl_vars['current_style']->value['parsed']) {?> te-pattern-empty<?php }?> input-prepend cm-te-pattern-selector" data-ca-pattern-dialog="backgrounds_adv_pattern_selector_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->tpl_vars['current_style']->value['parsed']) {?>
                                    <div class="te-pattern-preview__img cm-pattern-preview__img"
                                        data-te-pattern-preview-img-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['parsed'][$_smarty_tpl->tpl_vars['field']->value['properties']['pattern']], ENT_QUOTES, 'UTF-8');?>
"
                                        style="--te-pattern-preview-img: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['parsed'][$_smarty_tpl->tpl_vars['field']->value['properties']['pattern']], ENT_QUOTES, 'UTF-8');?>
');"
                                    ></div>
                                <?php } else { ?>
                                    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-image te-pattern-empty__icon"),$_smarty_tpl);?>

                                <?php }?>
                            </div>
                            <div id="backgrounds_adv_pattern_selector_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden te-bg-pattern-selector cm-te-patterns-container">
                                <div class="te-bg-pattern-container">
                                    <div class="te-bg-pattern-list">
                                        <ul class="cm-te-pattern-list" data-ca-holder-id="elm_holder_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <li><div class="te-pattern-preview te-pattern-empty cm-te-select-pattern">
                                                    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-image te-pattern-empty__icon"),$_smarty_tpl);?>

                                                </div></li>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme_patterns']->value, 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
                                                <li><div class="te-pattern-preview cm-te-select-pattern">
                                                        <div class="te-pattern-preview__img cm-pattern-preview__img"
                                                            data-te-pattern-preview-img-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value, ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) (defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
"
                                                            style="--te-pattern-preview-img: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value, ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) (defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
');"
                                                        ></div>
                                                    </div></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <li class="divider"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="hidden cm-te-pattern-holder cm-te-value-changer" id="elm_holder_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['pattern'], ENT_QUOTES, 'UTF-8');?>
]" data-ca-preview-id="elm_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['parsed'][$_smarty_tpl->tpl_vars['field']->value['properties']['pattern']] ?? null)===null||$tmp==='' ? "transparent" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php }?>

                    <div id="backgrounds_adv_pattern_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden">
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['pattern']) {?>
                            <div class="te-bg-custome-image clearfix">
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.upload_image");?>
</span>
                            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"backgrounds[".((string)$_smarty_tpl->tpl_vars['field']->value['properties']['pattern'])."]",'disabled'=>$_smarty_tpl->tpl_vars['current_style']->value['is_default']), 0, true);
?>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['position']) {?>
                            <div class="te-advanced-connector"></div>
                            <div class="te-bg-position clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.position");?>
&nbsp;</span>
                                <div class="sse-bg-position-main-wrap clearfix">
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_left" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="top left" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "top left") {?>checked="checked"<?php }?> /><label for="top_left"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-up-left"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_center" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="top center" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "top center") {?>checked="checked"<?php }?> /><label for="top_center"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-up"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_right" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="top right" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "top right") {?>checked="checked"<?php }?> /><label for="top_right"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-up-right"),$_smarty_tpl);?>
</label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_left" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" if="center_left" value="center left" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "center left") {?>checked="checked"<?php }?> /><label for="center_left"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-left"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_center" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="center center" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "center center") {?>checked="checked"<?php }?> /><label for="center_center"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-square"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_right" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="center right" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "center right") {?>checked="checked"<?php }?> /><label for="center_right"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-right"),$_smarty_tpl);?>
</label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_left" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="bottom left" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "bottom left") {?>checked="checked"<?php }?> /><label for="bottom_left"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-down-left"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_center" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="bottom center" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "bottom center") {?>checked="checked"<?php }?> /><label for="bottom_center"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-down"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_right" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="bottom right" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "bottom right") {?>checked="checked"<?php }?> /><label for="bottom_right"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-down-right"),$_smarty_tpl);?>
</label></div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['repeat']) {?>
                        <div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "repeat_content", null, null);?>
                                <input type="text" class="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['repeat'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] ?? null)===null||$tmp==='' ? "repeat" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="repeat" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "repeat") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.repeat"));
}?>><?php echo $_smarty_tpl->__("theme_editor.repeat");?>
</li>
                                    <li data-ca-select-box-value="repeat-x" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "repeat-x") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.repeat_x"));
}?>><?php echo $_smarty_tpl->__("theme_editor.repeat_x");?>
</li>
                                    <li data-ca-select-box-value="repeat-y" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "repeat-y") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.repeat_y"));
}?>><?php echo $_smarty_tpl->__("theme_editor.repeat_y");?>
</li>
                                    <li data-ca-select-box-value="no-repeat" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "no-repeat") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.no_repeat"));
}?>><?php echo $_smarty_tpl->__("theme_editor.no_repeat");?>
</li>
                                </ul>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['repeat_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("theme_editor.repeat") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'repeat_content');?>

                            </div>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['attachment']) {?>
                        <div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "scroll_content", null, null);?>
                                <input type="text" class="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['attachment'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['attachment']] ?? null)===null||$tmp==='' ? "scroll" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="scroll" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['attachment']] == "scroll") {?>class="active" <?php $_smarty_tpl->_assignInScope('scroll_title', $_smarty_tpl->__("theme_editor.scroll"));
}?>><?php echo $_smarty_tpl->__("theme_editor.scroll");?>
</li>
                                    <li data-ca-select-box-value="fixed" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['attachment']] == "fixed") {?>class="active" <?php $_smarty_tpl->_assignInScope('scroll_title', $_smarty_tpl->__("theme_editor.fixed"));
}?>><?php echo $_smarty_tpl->__("theme_editor.fixed");?>
</li>
                                </ul>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['scroll_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("theme_editor.scroll") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'scroll_content');?>

                            </div>
                        </div>
                        <?php }?>
                    </div>

                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"theme_editor:backgrounds"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_backgrounds");?>
</button></div>
        <?php }?>

    <!--te_backgrounds--></div>
    <?php }
} else { ?>
    <div class="te-wrap te-css cm-te-section">
        <div class="te-inner-wrap">
            <div id="css_content" class="cm-te-css-editor"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['css_content']->value, ENT_QUOTES, 'UTF-8');?>
</div>
        </div>

        <div class="te-reset-wrap te-enable-less-container">
            <button class="te-btn cm-te-restore-less"><?php echo $_smarty_tpl->__("theme_editor.enable_less");?>
</button>
            <span class="te-warning-info"><?php echo $_smarty_tpl->__("theme_editor.warning_css_changes_will_be_reverted");?>
</span>
        </div>

    </div>

<?php }?>
</div>
</div>


</div>

</form>
<!--theme_editor--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/theme_editor/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/theme_editor/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_layouts', (($tmp = $_smarty_tpl->tpl_vars['show_layouts']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_converted_to_css', (($tmp = $_smarty_tpl->tpl_vars['show_converted_to_css']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_reset_button', (($tmp = $_smarty_tpl->tpl_vars['show_reset_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_duplicate_style', (($tmp = $_smarty_tpl->tpl_vars['show_duplicate_style']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('active_style_id', (($tmp = $_smarty_tpl->tpl_vars['active_style_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['layout']['style_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_can_change_style_name', (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['is_can_change_style_name'] ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('content_container', (($tmp = $_smarty_tpl->tpl_vars['content_container']->value ?? null)===null||$tmp==='' ? "tygh_main_container" ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('header_height', 200);
$_smarty_tpl->_assignInScope('bottom_height', 73);
$_smarty_tpl->_assignInScope('converted_to_css_height', 16);
$_smarty_tpl->_assignInScope('sections_height', 51);?>

<?php if (!$_smarty_tpl->tpl_vars['show_converted_to_css']->value) {?>
    <?php $_smarty_tpl->_assignInScope('header_height', $_smarty_tpl->tpl_vars['header_height']->value-$_smarty_tpl->tpl_vars['converted_to_css_height']->value);
}
if ($_smarty_tpl->tpl_vars['te_sections']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['te_sections']->value) <= 1) {?>
    <?php $_smarty_tpl->_assignInScope('header_height', $_smarty_tpl->tpl_vars['header_height']->value-$_smarty_tpl->tpl_vars['sections_height']->value);
}
if (!$_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
    <?php $_smarty_tpl->_assignInScope('bottom_height', 0);
}?>

<?php $_smarty_tpl->_assignInScope('styles_subtitle', (defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") ? $_smarty_tpl->__("theme_editor.color_scheme") : $_smarty_tpl->__("theme_editor.styles"));
$_smarty_tpl->_assignInScope('icon_path', (defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") ? "common/icon_deprecated.tpl" : "common/icon.tpl");?>

<div class="theme-editor-container" id="theme_editor">

<?php echo '<script'; ?>
>
Tygh.tr({
    'theme_editor.style_name': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.style_name"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.incorrect_style_name': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.incorrect_style_name"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.text_close_editor': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.text_close_editor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.text_close_editor_unsaved': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.text_close_editor_unsaved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.text_reset_changes': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.text_reset_changes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.error_style_exists': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.error_style_exists"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
    'theme_editor.confirm_enable_less': '<?php echo strtr((string)$_smarty_tpl->__("theme_editor.confirm_enable_less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
});
Tygh.te_custom_fonts = <?php echo smarty_modifier_to_json($_smarty_tpl->tpl_vars['current_style']->value['custom_fonts']);?>
;
<?php echo '</script'; ?>
>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax" name="theme_editor_form" enctype="multipart/form-data">
<?php if ($_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?>
    <input type="hidden" name="selected_css_file" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_css_file']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <input type="hidden"
        name="style_id"
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-is-default="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['is_default'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-is-can-change-style-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_can_change_style_name']->value ? 1 : 0, ENT_QUOTES, 'UTF-8');?>
"
    >
    <input type="hidden" name="style[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="theme_editor">

<span class="te-nav"><a id="sw_theme_editor_container" class="te-minimize cm-combination" title="<?php echo $_smarty_tpl->__("theme_editor.hide_show");?>
">
        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-left-open",'data'=>array("data-ca-theme-editor"=>"minimizeIconClose")),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-right-open hidden",'data'=>array("data-ca-theme-editor"=>"minimizeIconOpen")),$_smarty_tpl);?>

    </a>
<a href="<?php echo htmlspecialchars((string) fn_url("customization.disable_mode?type=theme_editor"), ENT_QUOTES, 'UTF-8');?>
" class="te-close cm-te-close-editor" title="<?php echo $_smarty_tpl->__("theme_editor.close");?>
"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-cancel"),$_smarty_tpl);?>
</a>
        </span>
</span>

<div class="theme-editor <?php if ($_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?> te-converted-to-css<?php }?>"
    data-ca-te-use-dynamic-style="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_id']) {?>true<?php } else { ?>false<?php }?>"
    data-ca-te-content-container="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_container']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-bp-sidebar="true"
    style="--te-header-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header_height']->value, ENT_QUOTES, 'UTF-8');?>
px; --te-bottom-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bottom_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
    id="theme_editor_container">
    <div class="te-overlay<?php if ((($tmp = $_smarty_tpl->tpl_vars['is_theme_editor_allowed']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?> hidden<?php }?>">
        <div class="te-notification-wrapper">
            <p class="notification-content alert-warning"><?php echo $_smarty_tpl->__("theme_editor.page_cant_be_configured");?>
</p>
        </div>
    </div>
    <div class="te-header<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value) {?> te-header-no-schema<?php }?>" id="te_styles_list">
        <?php if ($_smarty_tpl->tpl_vars['show_layouts']->value) {?>            
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['layouts']->value) == 1) {?>
            <a class="te-layout-name"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title te-layout-nolink"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
        <?php } else { ?>
            <a id="sw_te-layouts" class="te-layout-name cm-combination"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <ul id="te-layouts" class="te-layout-dropdown cm-popup-box">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'layout');
$_smarty_tpl->tpl_vars['layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->do_else = false;
?>
                    <li><a class="cm-te-change-layout" data-ca-layout-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_id'] != $_smarty_tpl->tpl_vars['layout']->value['layout_id']) {?>href="<?php echo htmlspecialchars((string) fn_link_attach($_smarty_tpl->tpl_vars['theme_url']->value,"s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
        <?php }?>
        <span class="te-title">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"theme_editor:title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"theme_editor:title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo $_smarty_tpl->__("theme_editor");?>

            <?php if ($_smarty_tpl->tpl_vars['show_converted_to_css']->value && !$_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css'] && !$_smarty_tpl->tpl_vars['runtime']->value['vendor_id']) {?>
                <a class="te-action-link cm-te-convert-to-css cm-confirm">
                    <span class="te-action-link-title"><?php echo $_smarty_tpl->__('theme_editor.convert_to_css');?>
&nbsp;<?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"ty-icon-help-circle icon-question-sign cm-tooltip",'title'=>$_smarty_tpl->__('theme_editor.text_convert_to_css')),$_smarty_tpl);?>
</span>
                </a>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"theme_editor:title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </span>

        <?php if (!$_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?>

            <?php if ($_smarty_tpl->tpl_vars['props_schema']->value) {?>
            <span class="te-subtitle"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['styles_subtitle']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <div class="te-header-menu-wrap">
                <div class="te-header-menu-wrap-left">
                    <?php $_smarty_tpl->_assignInScope('current_style_name', $_smarty_tpl->tpl_vars['current_style']->value['name']);?>

                    <div class="te-select-box cm-te-selectbox te-theme" tabindex="0"><span class="cm-style-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                    <ul class="te-select-dropdown" id="elm_te_styles">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles_list']->value, 's_item');
$_smarty_tpl->tpl_vars['s_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s_item']->value) {
$_smarty_tpl->tpl_vars['s_item']->do_else = false;
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['active_style_id']->value === $_smarty_tpl->tpl_vars['s_item']->value['style_id']) {?>active<?php }?>">
                                <a class="cm-te-load-style te-list-item <?php if ($_smarty_tpl->tpl_vars['active_style_id']->value === $_smarty_tpl->tpl_vars['s_item']->value['style_id']) {?>active<?php }?>"
                                    data-ca-target-id="theme_editor"
                                    href="<?php echo htmlspecialchars((string) fn_url("theme_editor.view?style_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['style_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-style-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-style-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                </a>

                                <?php if ($_smarty_tpl->tpl_vars['show_duplicate_style']->value) {?>
                                <a class="ty-icon-wrap-duplicate cm-te-duplicate-style" data-ca-style-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_item']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"ty-icon-docs icon-copy te-duplicate-style__icon",'title'=>$_smarty_tpl->__("clone")),$_smarty_tpl);?>

                                </a>
                                <?php }?>

                                <?php if ((($tmp = $_smarty_tpl->tpl_vars['s_item']->value['is_removable'] ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                                    <a class="ty-icon-wrap-remove cm-ajax cm-confirm" data-ca-target-id="te_styles_list" href="<?php echo htmlspecialchars((string) fn_url("theme_editor.delete_style?style_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['style_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"ty-icon-trashcan icon-trash te-delete-style__icon",'title'=>$_smarty_tpl->__("delete")),$_smarty_tpl);?>

                                    </a>
                                <?php }?>
                            </li>
                        <?php
}
if ($_smarty_tpl->tpl_vars['s_item']->do_else) {
?>
                            <li class="active">
                                <a class="cm-te-load-style te-list-item active">--</a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    </div>
                </div>
                <div class="te-header-menu-wrap-right">
                    <button class="te-btn-action ty-float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
                </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['te_sections']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['te_sections']->value) > 1) {?>
                <span class="te-subtitle"><?php echo $_smarty_tpl->__("theme_editor.customize");?>
</span>
                <div class="te-select-box cm-te-selectbox te-customize" tabindex="0">
                    <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['te_sections']->value[$_smarty_tpl->tpl_vars['selected_section']->value]);?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                    <ul class="te-select-dropdown cm-te-sections">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['te_sections']->value, 's', false, 'section');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['selected_section']->value == $_smarty_tpl->tpl_vars['section']->value) {?>class="active"<?php }?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['s']->value);?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['props_schema']->value) {?>
                <div class="te-no-schema">
                    <button class="te-btn-action ty-float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
                </div>
            <?php }?>
        <?php } else { ?>
            <span class="te-subtitle"><?php echo $_smarty_tpl->__("files");?>
</span>
            <div class="te-header-menu-wrap">
                <div class="te-header-menu-wrap-left">
                    <div class="te-select-box cm-te-selectbox te-theme" tabindex="0"><span class="cm-style-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['selected_css_file']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                        <ul class="te-select-dropdown">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files_list']->value, 'css_file');
$_smarty_tpl->tpl_vars['css_file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_file']->value) {
$_smarty_tpl->tpl_vars['css_file']->do_else = false;
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['css_file']->value == $_smarty_tpl->tpl_vars['selected_css_file']->value) {?>active<?php }?>">
                                    <a class="te-list-item <?php if ($_smarty_tpl->tpl_vars['css_file']->value == $_smarty_tpl->tpl_vars['selected_css_file']->value) {?>active<?php }?> cm-te-change-css-file" data-ca-target-id="theme_editor" href="<?php echo htmlspecialchars((string) fn_url("theme_editor.view?selected_css_file=".((string)$_smarty_tpl->tpl_vars['css_file']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['css_file']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                </li>
                            <?php
}
if ($_smarty_tpl->tpl_vars['css_file']->do_else) {
?>
                                <li class="active">
                                    <a class="te-list-item active">--</a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
                <div class="te-header-menu-wrap-right">
                    <button class="te-btn-action float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
                </div>
            </div>


        <?php }?>
    <!--te_styles_list--></div>
<div class="te-content<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value) {?> te-content-no-schema<?php }?>">
<div class="te-section cm-te-disable-scroll">
<?php if (!$_smarty_tpl->tpl_vars['theme_manifest']->value['converted_to_css']) {?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_general']) {?>
    <div class="te-wrap te-general cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_general") {?>hidden<?php }?>" id="te_general">
        <div class="te-inner-wrap">
            <div class="te-general-group">

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value && $_smarty_tpl->tpl_vars['cse_logos']->value['favicon']) {?>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['logo_id']);?>
                    <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['image']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('id', 0);?>
                    <?php $_smarty_tpl->_assignInScope('image', array());?>
                <?php }?>

                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <div class="te-image te-favicon-wrap clearfix">
                    <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.favicon");?>
</span><?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]",'disabled'=>$_smarty_tpl->tpl_vars['current_style']->value['is_default']), 0, true);
?>
                    <div class="te-favicon cm-te-logo" data-ca-image-area="favicon" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                    <div class="te-description"><?php echo $_smarty_tpl->__("theme_editor.favicon_size");?>
</div>
                </div>

            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['general']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "checkbox") {?>
                    <div class="te-general-group">
                        <div class="te-checkbox clearfix">
                            <label for="elm_toggle_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="false" class="cm-te-value-changer" />
                                <input type="checkbox" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value] == "true") {?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</span></label>
                        </div>
                    </div>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_general");?>
</button></div>
        <?php }?>
    <!--te_general--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_css']) {?>
    <div class="te-wrap te-css cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_css") {?>hidden<?php }?>" id="te_css">
        <div class="te-inner-wrap">
            <textarea name="style[custom_css]" cols="30" rows="10"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['custom_css'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_css");?>
</button></div>
        <?php }?>

    <!--te_css--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_logos']) {?>
    <div class="te-wrap te-logos cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_logos") {?>hidden<?php }?>" id="te_logos">

        <div class="te-tabs cm-te-tabs">
            <ul class="te-pills">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cse_logo_types']->value, 'logo', false, 'type');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "favicon") {?>
                    <?php continue 1;?>
                <?php }?>
                <li <?php if ($_smarty_tpl->tpl_vars['type']->value == "theme") {?>class="active"<?php }?>><a data-ca-target-id="elm_logo_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("theme_editor_logo.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
"><span><?php echo $_smarty_tpl->__("theme_editor_logo.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</span></a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cse_logo_types']->value, 'logo', false, 'type');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "favicon") {?>
                    <?php continue 1;?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value && $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id']);?>
                    <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('id', 0);?>
                    <?php $_smarty_tpl->_assignInScope('image', array());?>
                <?php }?>

                <div class="cm-te-tab-contents" <?php if ($_smarty_tpl->tpl_vars['type']->value != "theme") {?>style="display:none;"<?php }?> id="elm_logo_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="attach-images">
                        <div class="upload-box clearfix">
                            <div class="image-wrap pull-left">
                                <div class="te-image">
                                    <div class="te-bg-image cm-te-logo" data-ca-image-area="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                                </div>
                                <div class="logo-alt"><input type="text" class="cm-image-field" id="alt_text_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("alt_text");?>
"></div>
                            </div>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"theme_editor:logo_uploader"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="te-logos-upload clearfix">
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("image");?>
&nbsp;</span>
                                <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]",'disabled'=>$_smarty_tpl->tpl_vars['current_style']->value['is_default']), 0, true);
?>
                            </div>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

            <!--te_logos--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_colors']) {?>
    <div class="te-wrap te-colors cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_colors") {?>hidden<?php }?>" id="te_colors">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['colors']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <div class="te-colors clearfix">
            <label for="elm_te_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>

            <?php $_smarty_tpl->_assignInScope('cp_value', (($tmp = ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value]) ?? null)===null||$tmp==='' ? ((($tmp = ($_smarty_tpl->tpl_vars['field']->value['default']) ?? null)===null||$tmp==='' ? "#ffffff" ?? null : $tmp)) ?? null : $tmp));?>

            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"style[data][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>$_smarty_tpl->tpl_vars['cp_value']->value,'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0, true);
?>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_colors");?>
</button></div>
        <?php }?>

    <!--te_colors--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_fonts']) {?>
    <div class="te-wrap te-fonts cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_fonts") {?>hidden<?php }?>" id="te_fonts">
        <div class="te-inner-wrap">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <div class="ty-control-group control-group te-font-group">
                <label for="elm_te_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
                <div class="te-select-box cm-te-selectbox cm-te-google cm-te-value-changer" tabindex="0" data-ca-select-box-default="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
"><span></span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                    <input type="text" class="hidden cm-te-selectbox-storage" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value]) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) key($_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families']), ENT_QUOTES, 'UTF-8');
}?>">

                    <ul class="te-select-dropdown">
                        <li class="te-selectbox-group cm-te-selectbox-group"><?php echo $_smarty_tpl->__("theme_editor.system_fonts");?>
</li>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families'], 'family_name', false, 'family');
$_smarty_tpl->tpl_vars['family_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['family']->value => $_smarty_tpl->tpl_vars['family_name']->value) {
$_smarty_tpl->tpl_vars['family_name']->do_else = false;
?>
                        <li data-ca-select-box-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['name']->value] == $_smarty_tpl->tpl_vars['family']->value) {?>class="active"<?php }?> style="font-family: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['family_name']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <li class="te-selectbox-group cm-te-selectbox-group cm-te-google-popular"><?php echo $_smarty_tpl->__("theme_editor.popular_fonts");?>
</li>
                        <li class="te-selectbox-group cm-te-selectbox-group cm-te-google-other"><?php echo $_smarty_tpl->__("theme_editor.other_fonts");?>
</li>
                        <li class="hidden te-selectbox-group cm-te-selectbox-group cm-te-google-custom"></li>
                    </ul>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['size']) {?>
                    <?php $_smarty_tpl->_assignInScope('size_name', $_smarty_tpl->tpl_vars['field']->value['properties']['size']['match']);?>
                    <?php $_smarty_tpl->_assignInScope('current_value', smarty_modifier_replace($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['size_name']->value],$_smarty_tpl->tpl_vars['field']->value['properties']['size']['unit'],''));?>

                    <div class="te-select-box te-font-size cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_value']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                        <input type="text" class="hidden cm-te-selectbox-storage" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['size_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['size_name']->value], ENT_QUOTES, 'UTF-8');?>
">
                        <ul class="te-select-dropdown">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['properties']['size']['values'], 'font_size');
$_smarty_tpl->tpl_vars['font_size']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['font_size']->value) {
$_smarty_tpl->tpl_vars['font_size']->do_else = false;
?>
                            <li data-ca-select-box-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
px" <?php if ($_smarty_tpl->tpl_vars['current_value']->value == $_smarty_tpl->tpl_vars['font_size']->value) {?>class="active"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['style']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['properties']['style'], 'prop', false, 'key');
$_smarty_tpl->tpl_vars['prop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('prop_name', $_smarty_tpl->tpl_vars['prop']->value['match']);?>

                <div class="te-font-style-wrap">
                    <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop']->value['default'], ENT_QUOTES, 'UTF-8');?>
" />
                    <input class="cm-te-value-changer te-font-style-checkbox" type="checkbox" id="font_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop']->value['property'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['prop_name']->value] == $_smarty_tpl->tpl_vars['prop']->value['property']) {?>checked="checked"<?php }?> /><label for="font_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-font-style <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prop']->value['property'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
    <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_fonts");?>
</button></div>
    <?php }?>

    <!--te_fonts--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['te_sections']->value['te_backgrounds']) {?>
    <div class="te-wrap te-bg cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "te_backgrounds") {?>hidden<?php }?>" id="te_backgrounds">

        <div class="te-inner-wrap">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"theme_editor:backgrounds"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"theme_editor:backgrounds"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props_schema']->value['backgrounds']['fields'], 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <div class="ty-control-group te-bg-group">
                <label for="elm_te_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>

                <div>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['color']) {?>
                        <?php $_smarty_tpl->_assignInScope('field_name', $_smarty_tpl->tpl_vars['field']->value['properties']['color']['match']);?>

                        <div class="te-color-picker-container te-colors clearfix">
                            <span class="te-bg-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['properties']['color']['description']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("theme_editor.background_color") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
&nbsp;</span>

                            <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient'] || $_smarty_tpl->tpl_vars['field']->value['transparent'] || $_smarty_tpl->tpl_vars['field']->value['full_width']) {?>
                            <a id="sw_backgrounds_adv_color_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination te-advanced-options"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-cog"),$_smarty_tpl);?>
</a>
                            <?php }?>

                            <?php $_smarty_tpl->_assignInScope('color', smarty_modifier_replace($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field_name']->value],"transparent",''));?>

                            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"style[data][".((string)$_smarty_tpl->tpl_vars['field_name']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>(($tmp = $_smarty_tpl->tpl_vars['color']->value ?? null)===null||$tmp==='' ? "#ffffff" ?? null : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0, true);
?>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient'] || $_smarty_tpl->tpl_vars['field']->value['transparent'] || $_smarty_tpl->tpl_vars['field']->value['full_width']) {?>
                    <div id="backgrounds_adv_color_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden clearfix">
                            <div class="te-advanced-connector"></div>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']) {?>
                        <?php $_smarty_tpl->_assignInScope('field_gradient', $_smarty_tpl->tpl_vars['field']->value['gradient']['match']);?>
                        <div class="te-gradient-color clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.gradient");?>
&nbsp;</span>
                            <?php $_smarty_tpl->_assignInScope('gradient_color', (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field_gradient']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field_name']->value] ?? null : $tmp));?>
                            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cp_name'=>"style[data][".((string)$_smarty_tpl->tpl_vars['field_gradient']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value)."_gradient",'cp_value'=>(($tmp = (smarty_modifier_replace($_smarty_tpl->tpl_vars['gradient_color']->value,"transparent",'')) ?? null)===null||$tmp==='' ? "#ffffff" ?? null : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0, true);
?>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['full_width']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['full_width']['type']) {?>
                            <div class="te-fullwidth te-checkbox clearfix">
                                <label for="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['full_width']['match'], ENT_QUOTES, 'UTF-8');?>
]" value="false" class="cm-te-value-changer" />
                                    <input type="checkbox" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['full_width']['match'], ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['full_width']['match']] == "true") {?>checked="checked"<?php }?>>
                                    <span class="te-toggle">
                                        <span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span>
                                        <span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span>
                                        <span class="te-toggle-trigger"></span>
                                    </span>
                                        <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.full_width");?>
</span>
                                    </label>
                            </div>
                            <?php } else { ?>
                            <div class="te-fullwidth te-checkbox clearfix">
                                <label for="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="style[data][copy][full_width][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="0">
                                    <input type="checkbox" name="style[data][copy][full_width][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_full_width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['color']['match']] == $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['full_width']['match']]) {?>checked="checked"<?php }?>>
                                    <span class="te-toggle">
                                        <span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span>
                                        <span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span>
                                        <span class="te-toggle-trigger"></span>
                                    </span>
                                        <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.full_width");?>
</span>
                                </label>
                            </div>
                            <?php }?>
                        <?php }?>


                        <?php if ($_smarty_tpl->tpl_vars['field']->value['transparent']) {?>
                        <div class="te-transparent te-checkbox clearfix">
                            <label for="elm_toggle_transparent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['transparent']['match'], ENT_QUOTES, 'UTF-8');?>
]" value="false" class="cm-te-value-changer">
                                <input type="checkbox" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['transparent']['match'], ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_transparent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['transparent']['match']] == "true") {?>checked="checked"<?php }?>>
                                <span class="te-toggle">
                                    <span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span>
                                    <span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span>
                                    <span class="te-toggle-trigger"></span>
                                </span>
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.transparent");?>
</span>
                            </label>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['pattern']) {?>
                        <div class="te-bg-pattern-group clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.pattern");?>
</span>
                            <a id="sw_backgrounds_adv_pattern_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-advanced-options cm-combination"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-cog"),$_smarty_tpl);?>
</a>
                            <div id="elm_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-pattern-preview <?php if (!$_smarty_tpl->tpl_vars['current_style']->value['parsed']) {?> te-pattern-empty<?php }?> input-prepend cm-te-pattern-selector" data-ca-pattern-dialog="backgrounds_adv_pattern_selector_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->tpl_vars['current_style']->value['parsed']) {?>
                                    <div class="te-pattern-preview__img cm-pattern-preview__img"
                                        data-te-pattern-preview-img-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['parsed'][$_smarty_tpl->tpl_vars['field']->value['properties']['pattern']], ENT_QUOTES, 'UTF-8');?>
"
                                        style="--te-pattern-preview-img: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['parsed'][$_smarty_tpl->tpl_vars['field']->value['properties']['pattern']], ENT_QUOTES, 'UTF-8');?>
');"
                                    ></div>
                                <?php } else { ?>
                                    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-image te-pattern-empty__icon"),$_smarty_tpl);?>

                                <?php }?>
                            </div>
                            <div id="backgrounds_adv_pattern_selector_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden te-bg-pattern-selector cm-te-patterns-container">
                                <div class="te-bg-pattern-container">
                                    <div class="te-bg-pattern-list">
                                        <ul class="cm-te-pattern-list" data-ca-holder-id="elm_holder_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <li><div class="te-pattern-preview te-pattern-empty cm-te-select-pattern">
                                                    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-image te-pattern-empty__icon"),$_smarty_tpl);?>

                                                </div></li>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme_patterns']->value, 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
                                                <li><div class="te-pattern-preview cm-te-select-pattern">
                                                        <div class="te-pattern-preview__img cm-pattern-preview__img"
                                                            data-te-pattern-preview-img-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value, ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) (defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
"
                                                            style="--te-pattern-preview-img: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pattern']->value, ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) (defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
');"
                                                        ></div>
                                                    </div></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <li class="divider"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="hidden cm-te-pattern-holder cm-te-value-changer" id="elm_holder_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['pattern'], ENT_QUOTES, 'UTF-8');?>
]" data-ca-preview-id="elm_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['parsed'][$_smarty_tpl->tpl_vars['field']->value['properties']['pattern']] ?? null)===null||$tmp==='' ? "transparent" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php }?>

                    <div id="backgrounds_adv_pattern_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden">
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['pattern']) {?>
                            <div class="te-bg-custome-image clearfix">
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.upload_image");?>
</span>
                            <?php $_smarty_tpl->_subTemplateRender("backend:views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"backgrounds[".((string)$_smarty_tpl->tpl_vars['field']->value['properties']['pattern'])."]",'disabled'=>$_smarty_tpl->tpl_vars['current_style']->value['is_default']), 0, true);
?>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['position']) {?>
                            <div class="te-advanced-connector"></div>
                            <div class="te-bg-position clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.position");?>
&nbsp;</span>
                                <div class="sse-bg-position-main-wrap clearfix">
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_left" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="top left" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "top left") {?>checked="checked"<?php }?> /><label for="top_left"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-up-left"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_center" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="top center" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "top center") {?>checked="checked"<?php }?> /><label for="top_center"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-up"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_right" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="top right" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "top right") {?>checked="checked"<?php }?> /><label for="top_right"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-up-right"),$_smarty_tpl);?>
</label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_left" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" if="center_left" value="center left" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "center left") {?>checked="checked"<?php }?> /><label for="center_left"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-left"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_center" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="center center" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "center center") {?>checked="checked"<?php }?> /><label for="center_center"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-square"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_right" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="center right" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "center right") {?>checked="checked"<?php }?> /><label for="center_right"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-right"),$_smarty_tpl);?>
</label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_left" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="bottom left" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "bottom left") {?>checked="checked"<?php }?> /><label for="bottom_left"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-down-left"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_center" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="bottom center" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "bottom center") {?>checked="checked"<?php }?> /><label for="bottom_center"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-down"),$_smarty_tpl);?>
</label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_right" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['position'], ENT_QUOTES, 'UTF-8');?>
]" value="bottom right" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['position']] == "bottom right") {?>checked="checked"<?php }?> /><label for="bottom_right"><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-arrow-down-right"),$_smarty_tpl);?>
</label></div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['repeat']) {?>
                        <div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "repeat_content", null, null);?>
                                <input type="text" class="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['repeat'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] ?? null)===null||$tmp==='' ? "repeat" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="repeat" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "repeat") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.repeat"));
}?>><?php echo $_smarty_tpl->__("theme_editor.repeat");?>
</li>
                                    <li data-ca-select-box-value="repeat-x" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "repeat-x") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.repeat_x"));
}?>><?php echo $_smarty_tpl->__("theme_editor.repeat_x");?>
</li>
                                    <li data-ca-select-box-value="repeat-y" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "repeat-y") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.repeat_y"));
}?>><?php echo $_smarty_tpl->__("theme_editor.repeat_y");?>
</li>
                                    <li data-ca-select-box-value="no-repeat" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['repeat']] == "no-repeat") {?>class="active" <?php $_smarty_tpl->_assignInScope('repeat_title', $_smarty_tpl->__("theme_editor.no_repeat"));
}?>><?php echo $_smarty_tpl->__("theme_editor.no_repeat");?>
</li>
                                </ul>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['repeat_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("theme_editor.repeat") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'repeat_content');?>

                            </div>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['attachment']) {?>
                        <div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "scroll_content", null, null);?>
                                <input type="text" class="hidden" name="style[data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['properties']['attachment'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['attachment']] ?? null)===null||$tmp==='' ? "scroll" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="scroll" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['attachment']] == "scroll") {?>class="active" <?php $_smarty_tpl->_assignInScope('scroll_title', $_smarty_tpl->__("theme_editor.scroll"));
}?>><?php echo $_smarty_tpl->__("theme_editor.scroll");?>
</li>
                                    <li data-ca-select-box-value="fixed" <?php if ($_smarty_tpl->tpl_vars['current_style']->value['data'][$_smarty_tpl->tpl_vars['field']->value['properties']['attachment']] == "fixed") {?>class="active" <?php $_smarty_tpl->_assignInScope('scroll_title', $_smarty_tpl->__("theme_editor.fixed"));
}?>><?php echo $_smarty_tpl->__("theme_editor.fixed");?>
</li>
                                </ul>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['scroll_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("theme_editor.scroll") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['icon_path']->value,'class'=>"glyph-down-open te-select-box__icon"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'scroll_content');?>

                            </div>
                        </div>
                        <?php }?>
                    </div>

                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"theme_editor:backgrounds"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['show_reset_button']->value) {?>
        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_backgrounds");?>
</button></div>
        <?php }?>

    <!--te_backgrounds--></div>
    <?php }
} else { ?>
    <div class="te-wrap te-css cm-te-section">
        <div class="te-inner-wrap">
            <div id="css_content" class="cm-te-css-editor"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['css_content']->value, ENT_QUOTES, 'UTF-8');?>
</div>
        </div>

        <div class="te-reset-wrap te-enable-less-container">
            <button class="te-btn cm-te-restore-less"><?php echo $_smarty_tpl->__("theme_editor.enable_less");?>
</button>
            <span class="te-warning-info"><?php echo $_smarty_tpl->__("theme_editor.warning_css_changes_will_be_reverted");?>
</span>
        </div>

    </div>

<?php }?>
</div>
</div>


</div>

</form>
<!--theme_editor--></div>
<?php }
}
}
