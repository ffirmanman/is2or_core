<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:38:53
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/block_manager/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835c06d1320c2_56684327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '779bcdd0bd0a7c7ead22e7350dbd713727b731c3' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/block_manager/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/render/grid.tpl' => 1,
    'tygh:views/block_manager/render/block.tpl' => 1,
    'tygh:views/block_manager/components/device_switch.tpl' => 1,
    'tygh:views/block_manager/components/update_layout.tpl' => 3,
    'tygh:common/popupbox.tpl' => 8,
    'tygh:views/block_manager/components/export_layout.tpl' => 1,
    'tygh:views/block_manager/components/import_layout.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6835c06d1320c2_56684327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.render_location.php','function'=>'smarty_function_render_location',),));
\Tygh\Languages\Helper::preloadLangVars(array('block_already_exists_in_grid','new_layout','add_layout','add_layout','export_layout','import_layout','actions.product_tabs','edit_layout_on_site','preview','make_default','properties','delete','export_layout','import_layout','block_manager.add_layout_page','block_manager.new_layout_page','switch_layout','preview','make_default','properties','delete','layout_page','dispatch','name','layout_meta_data','block_manager.manage_layout_in_tab_unavailable_by_object_id','block_manager.dynamic_entity_','block_manager.manage_layout_in_tab_not_exist_location','block_manager.dynamic_entity_','block_manager.manage_layout_in_tab_unavailable','block_manager.dynamic_entity_','editing_layout'));
$_smarty_tpl->_assignInScope('show_layout_controls', !$_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'] && (fn_allowed_for("ULTIMATE") || !$_smarty_tpl->tpl_vars['runtime']->value['company_id']));
$_smarty_tpl->_assignInScope('m_url', rawurlencode((string)$_REQUEST['manage_url']));
$_smarty_tpl->_assignInScope('storefront_id', (($tmp = $_smarty_tpl->tpl_vars['storefront']->value->storefront_id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('tabs_count', smarty_modifier_count($_smarty_tpl->tpl_vars['navigation']->value['tabs']));
$_smarty_tpl->_assignInScope('tabs_count', 'show_layout_controls' ? $_smarty_tpl->tpl_vars['tabs_count']->value+1 : $_smarty_tpl->tpl_vars['tabs_count']->value);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/block_manager.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 class="cm-ajax-force">
    var selected_location = '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['location']->value['location_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
';

    var dynamic_object_id = '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
';
    var dynamic_object_type = '<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
';

    var BlockManager = new BlockManager_Class();

    // New traslations
    Tygh.tr({
        block_already_exists_in_grid: '<?php echo strtr((string)$_smarty_tpl->__("block_already_exists_in_grid"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });

    var editObjectId = <?php echo htmlspecialchars((string) strtr((string)(($tmp = $_smarty_tpl->tpl_vars['edit_object_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
,
        editObjectType = '<?php echo htmlspecialchars((string) strtr((string)(($tmp = $_smarty_tpl->tpl_vars['edit_object_type']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
';


    if (dynamic_object_id > 0) {
        var items = null;
        var grid_items = null;
    } else {
        var items = '.block';
        var grid_items = '.grid';
    }

    (function(_, $) {
        $(document).ready(function() {
            $('#content_location_' + selected_location).appear(function(){
                BlockManager.init('.grid', {
                    // UI settings
                    connectWith: '.grid',
                    items: items,
                    grid_items: grid_items,
                    revert: true,
                    placeholder: 'ui-hover-block',
                    opacity: 0.5,

                    // BlockManager_Class settings
                    parent: this,
                    container_class: 'container',
                    grid_class: 'grid',
                    block_class: 'block',
                    hover_element_class: 'hover-element',

                    // Controls selectors
                    controls_selector: '.grid-control-menu,.block-control-menu',
                    sortable_selector: '.ui-sortable',

                    device_availability_switcher: {
                        switch_selector: '.cm-switch-device-availability',
                        reset_selector: '.cm-reset-device-availability',
                        switcher_active_class: 'btn-primary',
                        device_attribute: 'data-ca-device-availability-device',
                        block_selector: '.device-specific-block',
                        block_availability_prefix: 'data-ca-device-availability-',
                        storage_cookie: 'device_filter'
                    },

                    edit_object_id: editObjectId,
                    edit_object_type: editObjectType
                });
            });
        });
    }(Tygh, Tygh.$));

<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'] > 0) {?>
    <?php echo smarty_function_style(array('src'=>"block_manager_in_tab.css"),$_smarty_tpl);?>

<?php }
echo smarty_function_style(array('src'=>"lib/960/960.css"),$_smarty_tpl);?>


<div id="block_window" class="grid-block hidden"></div>
<div id="block_manager_menu" class="grid-menu hidden"></div>
<div id="block_manager_prop" class="grid-prop hidden"></div>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/render/grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('default_class'=>"base-grid hidden",'show_menu'=>true), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/block_manager/render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('default_class'=>"base-block hidden",'block_data'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/device_switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('container_id'=>"content_location_".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])), 0, false);
?>
    <div class="block-manager-location-wrapper">
        <div class="block-manager-location" id="content_location_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:manage_location"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:manage_location"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo smarty_function_render_location(array('dispatch'=>$_smarty_tpl->tpl_vars['location']->value['dispatch'],'location_id'=>$_smarty_tpl->tpl_vars['location']->value['location_id'],'area'=>'A','lang_code'=>$_smarty_tpl->tpl_vars['location']->value['lang_code'],'device'=>$_REQUEST['device']),$_smarty_tpl);?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:manage_location"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--content_location_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layout_data'=>array()), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->tpl_vars['show_layout_controls']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_layout",'text'=>$_smarty_tpl->__("new_layout"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"general",'icon'=>"icon-plus",'title'=>$_smarty_tpl->__("add_layout"),'link_text'=>$_smarty_tpl->__("add_layout"),'link_class'=>"btn-primary nav__actions-btn-primary"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "export_layout", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/export_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("export_layout"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'export_layout'),'id'=>"export_layout_manager"), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "import_layout", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/import_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("import_layout"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'import_layout'),'id'=>"import_layout_manager"), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['location']->value['dispatch'] === "products.view") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("actions.product_tabs"),'but_role'=>"action",'but_href'=>"tabs.manage"), 0, false);
?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_layout_controls']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['location']->value['is_frontend_editing_allowed']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=block_manager&status=enable",'but_text'=>$_smarty_tpl->__("edit_layout_on_site"),'but_role'=>"action",'but_meta'=>"btn cm-post",'but_target'=>"_blank"), 0, true);
?>
        <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <li>
                <?php ob_start();
echo htmlspecialchars((string) fn_url("?s_layout=".((string)$_smarty_tpl->tpl_vars['layout_data']->value['layout_id'])."&storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value),"C"), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'href'=>$_prefixVariable1,'target'=>"_blank"), true);?>

            </li>
            <li class="divider"></li>
            <?php if (!$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['layout_data']->value['layout_id']]['is_default']) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("make_default"),'href'=>"block_manager.set_default_layout?layout_id=".((string)$_smarty_tpl->tpl_vars['layout_data']->value['layout_id'])."&from_layout_id=".((string)$_smarty_tpl->tpl_vars['layout_data']->value['layout_id']),'class'=>"cm-ajax",'data'=>array("data-ca-target-id"=>"actions_panel,block_manager_sidebar"),'method'=>"POST"), true);?>
</li>
            <?php }?>
            <li>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layout_data'=>$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['layout_data']->value['layout_id']]), 0, true);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"update_layout_".((string)$_smarty_tpl->tpl_vars['layout_data']->value['layout_id']),'text'=>$_smarty_tpl->tpl_vars['layout_data']->value['name'],'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"link",'link_text'=>$_smarty_tpl->__("properties")), 0, true);
?>
            </li>
            <li class="divider"></li>
            <?php if (!$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['layout_data']->value['layout_id']]['is_default']) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"block_manager.delete_layout?layout_id=".((string)$_smarty_tpl->tpl_vars['layout_data']->value['layout_id']),'class'=>"cm-confirm",'method'=>"POST"), true);?>
</li>
                <li class="divider"></li>
            <?php }?>
            <li>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"export_layout_manager",'link_text'=>$_smarty_tpl->__("export_layout"),'act'=>"link",'content'=>'','general_class'=>"action-btn"), 0, true);
?>
            </li>
            <li>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"import_layout_manager",'link_text'=>$_smarty_tpl->__("import_layout"),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'content'=>'','general_class'=>"action-btn"), 0, true);
?>
            </li>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>



<div class="cm-j-tabs tabs tabs-with-conf tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['tabs'], 'tab', false, 'key', 'tabs', array (
));
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <li id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['hidden'] == "Y") {?>hidden <?php }
if ($_smarty_tpl->tpl_vars['key']->value == "location_".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])) {?>active extra-tab<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == "location_".((string)$_smarty_tpl->tpl_vars['location']->value['location_id']) && $_smarty_tpl->tpl_vars['show_layout_controls']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-ajax-force hand icon-cog",'href'=>"block_manager.update_location?location=".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])."&s_layout=".((string)$_smarty_tpl->tpl_vars['location']->value['layout_id']),'id'=>"tab_location_".((string)$_smarty_tpl->tpl_vars['location']->value['location_id']),'title'=>$_smarty_tpl->tpl_vars['tab']->value['title'],'icon'=>"icon-cog"), true);?>

                    <?php }?>
                    <a <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['show_layout_controls']->value) {?>
            <li class="cm-no-highlight">
                <?php ob_start();
echo $_smarty_tpl->__("block_manager.add_layout_page");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_location",'text'=>$_smarty_tpl->__("block_manager.new_layout_page"),'link_text'=>$_prefixVariable2."…",'act'=>"link",'href'=>"block_manager.update_location?s_layout=".((string)$_smarty_tpl->tpl_vars['location']->value['layout_id']),'opener_ajax_class'=>"cm-ajax",'link_class'=>"cm-ajax-force",'icon'=>"icon-plus",'content'=>''), 0, true);
?></li>
        <?php }?>
    </ul>
</div>
<div class="cm-tabs-content">
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox');?>

</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ((count($_smarty_tpl->tpl_vars['layouts']->value) > 1)) {?>
        <div id="block_manager_sidebar">
            <div class="sidebar-row layouts">
                <h6><?php echo $_smarty_tpl->__("switch_layout");?>
</h6>
                <ul class="nav nav-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layouts']->value, 'layout');
$_smarty_tpl->tpl_vars['layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->do_else = false;
?>
                        <li class="with-menu <?php if ($_smarty_tpl->tpl_vars['layout']->value['layout_id'] == $_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id']) {?> active<?php }?>">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                <li><?php ob_start();
echo htmlspecialchars((string) fn_url("?s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id'])."&storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value),"C"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'href'=>$_prefixVariable3,'target'=>"_blank"), true);?>
</li>
                                <?php if ($_smarty_tpl->tpl_vars['show_layout_controls']->value) {?>
                                    <li class="divider"></li>
                                    <?php if (!$_smarty_tpl->tpl_vars['layout']->value['is_default']) {?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("make_default"),'href'=>"block_manager.set_default_layout?layout_id=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id'])."&from_layout_id=".((string)$_smarty_tpl->tpl_vars['layout_data']->value['layout_id']),'class'=>"cm-ajax",'data'=>array("data-ca-target-id"=>"actions_panel,block_manager_sidebar"),'method'=>"POST"), true);?>
</li>
                                    <?php }?>
                                    <li>
                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layout_data'=>$_smarty_tpl->tpl_vars['layout']->value), 0, true);
?>
                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"update_layout_sidebar_".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id']),'text'=>$_smarty_tpl->tpl_vars['layout']->value['name'],'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"link",'link_text'=>$_smarty_tpl->__("properties")), 0, true);
?>
                                    </li>

                                    <?php if (!$_smarty_tpl->tpl_vars['layout']->value['is_default']) {?>
                                        <li class="divider"></li>
                                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"block_manager.delete_layout?layout_id=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id']),'class'=>"cm-confirm",'method'=>"POST"), true);?>
</li>
                                    <?php }?>
                                <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="pull-right">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                            </div>
                            <a href="<?php echo htmlspecialchars((string) fn_url("block_manager.manage?s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <hr>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"layouts:sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"layouts:sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"layouts:sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <!--block_manager_sidebar--></div>
    <?php }?>
    <div class="sidebar-row layouts">
        <h6><?php echo $_smarty_tpl->__("layout_page");?>
</h6>
        <ul class="unstyled">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"layouts:layout_page_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"layouts:layout_page_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <li><?php echo $_smarty_tpl->__("dispatch");?>
: <span class="wrap"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
</span></li>
                <li><?php echo $_smarty_tpl->__("name");?>
: <span class="wrap-word"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"layouts:layout_page_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </ul>

        <div class="sidebar-field text-right">
            <?php ob_start();
echo htmlspecialchars((string) fn_url("block_manager.update_location?location=".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])."&s_layout=".((string)$_smarty_tpl->tpl_vars['location']->value['layout_id'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->__("layout_meta_data"),'class'=>"cm-dialog-opener right",'href'=>$_prefixVariable4,'title'=>((string)$_smarty_tpl->tpl_vars['location']->value['name'])), true);?>

        </div>
    </div>
    <hr>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value['object_id']) {?>
    <?php if (($_smarty_tpl->tpl_vars['location']->value)) {?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

    <?php } elseif (fn_check_permissions("block_manager","update_location","admin")) {?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['location_by_dispatch']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) {?>
            <?php echo $_smarty_tpl->__("block_manager.manage_layout_in_tab_unavailable_by_object_id",array("[entity]"=>$_smarty_tpl->__("block_manager.dynamic_entity_".((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_type'])),"[link]"=>fn_url("block_manager.manage?selected_location=".((string)$_smarty_tpl->tpl_vars['location_by_dispatch']->value['location_id']),"A"),"[location_name]"=>$_smarty_tpl->tpl_vars['location_by_dispatch']->value['name'],"[entity_tab]"=>$_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_type']))));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("block_manager.manage_layout_in_tab_not_exist_location",array("[entity]"=>$_smarty_tpl->__("block_manager.dynamic_entity_".((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_type'])),"[link]"=>fn_url("block_manager.manage?s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id']),"A"),"[dispatch_value]"=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch'],"[entity_tab]"=>$_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_type']))));?>

        <?php }?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__("block_manager.manage_layout_in_tab_unavailable",array("[entity]"=>$_smarty_tpl->__("block_manager.dynamic_entity_".((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_type']))));?>

    <?php }
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_start'=>$_smarty_tpl->__("editing_layout"),'title_end'=>$_smarty_tpl->tpl_vars['layout_data']->value['name'],'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'mainbox_content_wrapper_class'=>"block-manager-wrapper",'select_storefront'=>true,'show_all_storefront'=>false), 0, false);
}
}
}
