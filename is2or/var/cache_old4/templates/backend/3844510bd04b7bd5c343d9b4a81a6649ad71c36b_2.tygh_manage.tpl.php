<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:views/block_manager/manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb553295f092_01876900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3844510bd04b7bd5c343d9b4a81a6649ad71c36b' => 
    array (
      0 => 'views/block_manager/manage.tpl',
      1 => 1767831034,
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
))) {
function content_69fb553295f092_01876900 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager';
\Tygh\Languages\Helper::preloadLangVars(array('block_already_exists_in_grid','new_layout','add_layout','add_layout','export_layout','import_layout','actions.product_tabs','edit_layout_on_site','preview','make_default','properties','delete','export_layout','import_layout','block_manager.add_layout_page','block_manager.new_layout_page','switch_layout','preview','make_default','properties','delete','layout_page','dispatch','name','layout_meta_data','block_manager.manage_layout_in_tab_unavailable_by_object_id','block_manager.dynamic_entity_','block_manager.manage_layout_in_tab_not_exist_location','block_manager.dynamic_entity_','block_manager.manage_layout_in_tab_unavailable','block_manager.dynamic_entity_','editing_layout'));
$_smarty_tpl->assign('show_layout_controls', !$_smarty_tpl->getValue('dynamic_object')['object_id'] && ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") || !$_smarty_tpl->getValue('runtime')['company_id']), false, NULL);
$_smarty_tpl->assign('m_url', rawurlencode((string)$_REQUEST['manage_url']), false, NULL);
$_smarty_tpl->assign('storefront_id', (($tmp = $_smarty_tpl->getValue('storefront')->storefront_id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('tabs_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('navigation')['tabs']), false, NULL);
$_smarty_tpl->assign('tabs_count', ('show_layout_controls') ? $_smarty_tpl->getValue('tabs_count')+1 : $_smarty_tpl->getValue('tabs_count'), false, NULL);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/block_manager.js"), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
 class="cm-ajax-force">
    var selected_location = '<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('location')['location_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
';

    var dynamic_object_id = '<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('dynamic_object')['object_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
';
    var dynamic_object_type = '<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('dynamic_object_scheme')['object_type'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
';

    var BlockManager = new BlockManager_Class();

    // New traslations
    Tygh.tr({
        block_already_exists_in_grid: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_already_exists_in_grid", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
    });

    var editObjectId = <?php echo strtr((string)(($tmp = $_smarty_tpl->getValue('edit_object_id') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
,
        editObjectType = '<?php echo strtr((string)(($tmp = $_smarty_tpl->getValue('edit_object_type') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
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
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('dynamic_object')['object_id'] > 0) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"block_manager_in_tab.css"), $_smarty_tpl);?>

<?php }
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"lib/960/960.css"), $_smarty_tpl);?>


<div id="block_window" class="grid-block hidden"></div>
<div id="block_manager_menu" class="grid-menu hidden"></div>
<div id="block_manager_prop" class="grid-prop hidden"></div>

<?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/render/grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('default_class'=>"base-grid hidden",'show_menu'=>true), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:views/block_manager/render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('default_class'=>"base-block hidden",'block_data'=>true), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/device_switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('container_id'=>"content_location_".((string)$_smarty_tpl->getValue('location')['location_id'])), (int) 0, $_smarty_current_dir);
?>
    <div class="block-manager-location-wrapper">
        <div class="block-manager-location" id="content_location_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['location_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:manage_location"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_location')->handle(array('dispatch'=>$_smarty_tpl->getValue('location')['dispatch'],'location_id'=>$_smarty_tpl->getValue('location')['location_id'],'area'=>'A','lang_code'=>$_smarty_tpl->getValue('location')['lang_code'],'device'=>$_REQUEST['device']), $_smarty_tpl);?>

            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:manage_location"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--content_location_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['location_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_new_picker", null, null);?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layout_data'=>array()), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->getValue('show_layout_controls')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_layout",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("new_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"general",'icon'=>"icon-plus",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_class'=>"btn-primary nav__actions-btn-primary"), (int) 0, $_smarty_current_dir);
?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "export_layout", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/export_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("export_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'export_layout'),'id'=>"export_layout_manager"), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "import_layout", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/import_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("import_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'import_layout'),'id'=>"import_layout_manager"), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->getValue('location')['dispatch'] === "products.view") {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("actions.product_tabs", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_href'=>"tabs.manage"), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('show_layout_controls')) {?>
        <?php if ($_smarty_tpl->getValue('location')['is_frontend_editing_allowed']) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=block_manager&status=enable",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_layout_on_site", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>"btn cm-post",'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>
            <li>
                <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("?s_layout=".((string)$_smarty_tpl->getValue('layout_data')['layout_id'])."&storefront_id=".((string)$_smarty_tpl->getValue('storefront_id')),"C");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("preview", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>$_prefixVariable1,'target'=>"_blank"), true);?>

            </li>
            <li class="divider"></li>
            <?php if (!$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('layout_data')['layout_id']]['is_default']) {?>
                <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("make_default", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"block_manager.set_default_layout?layout_id=".((string)$_smarty_tpl->getValue('layout_data')['layout_id'])."&from_layout_id=".((string)$_smarty_tpl->getValue('layout_data')['layout_id']),'class'=>"cm-ajax",'data'=>array("data-ca-target-id"=>"actions_panel,block_manager_sidebar"),'method'=>"POST"), true);?>
</li>
            <?php }?>
            <li>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_new_picker", null, null);?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layout_data'=>$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('layout_data')['layout_id']]), (int) 0, $_smarty_current_dir);
?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"update_layout_".((string)$_smarty_tpl->getValue('layout_data')['layout_id']),'text'=>$_smarty_tpl->getValue('layout_data')['name'],'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"link",'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("properties", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            </li>
            <li class="divider"></li>
            <?php if (!$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('layout_data')['layout_id']]['is_default']) {?>
                <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"block_manager.delete_layout?layout_id=".((string)$_smarty_tpl->getValue('layout_data')['layout_id']),'class'=>"cm-confirm",'method'=>"POST"), true);?>
</li>
                <li class="divider"></li>
            <?php }?>
            <li>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"export_layout_manager",'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("export_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'act'=>"link",'content'=>'','general_class'=>"action-btn"), (int) 0, $_smarty_current_dir);
?>
            </li>
            <li>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"import_layout_manager",'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("import_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'content'=>'','general_class'=>"action-btn"), (int) 0, $_smarty_current_dir);
?>
            </li>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/tabs.js"), $_smarty_tpl);?>



<div class="cm-j-tabs tabs tabs-with-conf tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabs_count')), ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['layout_id']), ENT_QUOTES, 'UTF-8');?>
" />
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['tabs'], 'tab', false, 'key', 'tabs', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('tab')->value) {
$foreach0DoElse = false;
?>
                <li id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_suffix')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('tab')['hidden'] == "Y") {?>hidden <?php }
if ($_smarty_tpl->getValue('key') == "location_".((string)$_smarty_tpl->getValue('location')['location_id'])) {?>active extra-tab<?php }?>">
                    <?php if ($_smarty_tpl->getValue('key') == "location_".((string)$_smarty_tpl->getValue('location')['location_id']) && $_smarty_tpl->getValue('show_layout_controls')) {?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-ajax-force hand icon-cog",'href'=>"block_manager.update_location?location=".((string)$_smarty_tpl->getValue('location')['location_id'])."&s_layout=".((string)$_smarty_tpl->getValue('location')['layout_id']),'id'=>"tab_location_".((string)$_smarty_tpl->getValue('location')['location_id']),'title'=>$_smarty_tpl->getValue('tab')['title'],'icon'=>"icon-cog"), true);?>

                    <?php }?>
                    <a <?php if ($_smarty_tpl->getValue('tab')['href']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('tab')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['title']), ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->getValue('show_layout_controls')) {?>
            <li class="cm-no-highlight">
                <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.add_layout_page", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_location",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.new_layout_page", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_prefixVariable2."…",'act'=>"link",'href'=>"block_manager.update_location?s_layout=".((string)$_smarty_tpl->getValue('location')['layout_id']),'opener_ajax_class'=>"cm-ajax",'link_class'=>"cm-ajax-force",'icon'=>"icon-plus",'content'=>''), (int) 0, $_smarty_current_dir);
?></li>
        <?php }?>
    </ul>
</div>
<div class="cm-tabs-content">
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox');?>

</div>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('layouts')) > 1)) {?>
        <div id="block_manager_sidebar">
            <div class="sidebar-row layouts">
                <h6><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("switch_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h6>
                <ul class="nav nav-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('layouts'), 'layout');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('layout')->value) {
$foreach1DoElse = false;
?>
                        <li class="with-menu <?php if ($_smarty_tpl->getValue('layout')['layout_id'] == $_smarty_tpl->getValue('runtime')['layout']['layout_id']) {?> active<?php }?>">
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>
                                <li><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("?s_layout=".((string)$_smarty_tpl->getValue('layout')['layout_id'])."&storefront_id=".((string)$_smarty_tpl->getValue('storefront_id')),"C");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("preview", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>$_prefixVariable3,'target'=>"_blank"), true);?>
</li>
                                <?php if ($_smarty_tpl->getValue('show_layout_controls')) {?>
                                    <li class="divider"></li>
                                    <?php if (!$_smarty_tpl->getValue('layout')['is_default']) {?>
                                    <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("make_default", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"block_manager.set_default_layout?layout_id=".((string)$_smarty_tpl->getValue('layout')['layout_id'])."&from_layout_id=".((string)$_smarty_tpl->getValue('layout_data')['layout_id']),'class'=>"cm-ajax",'data'=>array("data-ca-target-id"=>"actions_panel,block_manager_sidebar"),'method'=>"POST"), true);?>
</li>
                                    <?php }?>
                                    <li>
                                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_new_picker", null, null);?>
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layout_data'=>$_smarty_tpl->getValue('layout')), (int) 0, $_smarty_current_dir);
?>
                                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"update_layout_sidebar_".((string)$_smarty_tpl->getValue('layout')['layout_id']),'text'=>$_smarty_tpl->getValue('layout')['name'],'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"link",'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("properties", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                    </li>

                                    <?php if (!$_smarty_tpl->getValue('layout')['is_default']) {?>
                                        <li class="divider"></li>
                                        <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"block_manager.delete_layout?layout_id=".((string)$_smarty_tpl->getValue('layout')['layout_id']),'class'=>"cm-confirm",'method'=>"POST"), true);?>
</li>
                                    <?php }?>
                                <?php }?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                            <div class="pull-right">
                                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                            </div>
                            <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.manage?s_layout=".((string)$_smarty_tpl->getValue('layout')['layout_id']));?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('layout')['name']), ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <hr>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"layouts:sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"layouts:sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <!--block_manager_sidebar--></div>
    <?php }?>
    <div class="sidebar-row layouts">
        <h6><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("layout_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h6>
        <ul class="unstyled">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"layouts:layout_page_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <li><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("dispatch", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <span class="wrap"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['dispatch']), ENT_QUOTES, 'UTF-8');?>
</span></li>
                <li><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <span class="wrap-word"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['name']), ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"layouts:layout_page_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </ul>

        <div class="sidebar-field text-right">
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.update_location?location=".((string)$_smarty_tpl->getValue('location')['location_id'])."&s_layout=".((string)$_smarty_tpl->getValue('location')['layout_id']));
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("layout_meta_data", [], $_smarty_tpl->getSmarty()->getLanguage()),'class'=>"cm-dialog-opener right",'href'=>$_prefixVariable4,'title'=>((string)$_smarty_tpl->getValue('location')['name'])), true);?>

        </div>
    </div>
    <hr>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('dynamic_object')['object_id']) {?>
    <?php if (($_smarty_tpl->getValue('location'))) {?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox');?>

    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("block_manager","update_location","admin")) {?>
        <?php if ((($tmp = $_smarty_tpl->getValue('location_by_dispatch') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.manage_layout_in_tab_unavailable_by_object_id", array("[entity]"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.dynamic_entity_".((string)$_smarty_tpl->getValue('dynamic_object')['object_type']), [], $_smarty_tpl->getSmarty()->getLanguage()),"[link]"=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.manage?selected_location=".((string)$_smarty_tpl->getValue('location_by_dispatch')['location_id']),"A"),"[location_name]"=>$_smarty_tpl->getValue('location_by_dispatch')['name'],"[entity_tab]"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('dynamic_object')['object_type']), [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.manage_layout_in_tab_not_exist_location", array("[entity]"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.dynamic_entity_".((string)$_smarty_tpl->getValue('dynamic_object')['object_type']), [], $_smarty_tpl->getSmarty()->getLanguage()),"[link]"=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.manage?s_layout=".((string)$_smarty_tpl->getValue('layout')['layout_id']),"A"),"[dispatch_value]"=>$_smarty_tpl->getValue('dynamic_object_scheme')['customer_dispatch'],"[entity_tab]"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('dynamic_object')['object_type']), [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.manage_layout_in_tab_unavailable", array("[entity]"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("block_manager.dynamic_entity_".((string)$_smarty_tpl->getValue('dynamic_object')['object_type']), [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl->getSmarty()->getLanguage());?>

    <?php }
} else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_start'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_layout", [], $_smarty_tpl->getSmarty()->getLanguage()),'title_end'=>$_smarty_tpl->getValue('layout_data')['name'],'adv_buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'sidebar'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'sidebar'),'mainbox_content_wrapper_class'=>"block-manager-wrapper",'select_storefront'=>true,'show_all_storefront'=>false), (int) 0, $_smarty_current_dir);
}
}
}
