<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/addons_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc401303f7_08863669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27334c4f6be5bac19177e838bfe6c3a6982f3a12' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/addons_list.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_full_info.tpl' => 1,
    'tygh:views/addons/components/addons/addon_favorite.tpl' => 1,
    'tygh:views/addons/components/addons/addon_icon.tpl' => 1,
    'tygh:views/addons/components/manage/addon_description.tpl' => 1,
    'tygh:views/addons/components/manage/addon_install_datetime.tpl' => 1,
    'tygh:views/addons/components/addons/addon_supplier.tpl' => 1,
    'tygh:views/addons/components/marketplace/addon_price.tpl' => 1,
    'tygh:views/addons/components/addons/addon_status.tpl' => 1,
    'tygh:views/addons/components/marketplace/marketplace_addon_actions.tpl' => 1,
    'tygh:views/addons/components/addons/addon_actions.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6835bc401303f7_08863669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('favorites','name','installed_date','developer','cscart_marketplace.price','status','view_more_addons','no_data'));
$_smarty_tpl->_assignInScope('show_favorite', (($tmp = $_smarty_tpl->tpl_vars['show_favorite']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_install_datetime', (($tmp = $_smarty_tpl->tpl_vars['show_install_datetime']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_addon_status', (($tmp = $_smarty_tpl->tpl_vars['show_addon_status']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_addon_tools', (($tmp = $_smarty_tpl->tpl_vars['show_addon_tools']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_marketplace_addons', (($tmp = $_smarty_tpl->tpl_vars['is_marketplace_addons']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_favorite', false);?>
    <?php $_smarty_tpl->_assignInScope('show_install_datetime', false);?>
    <?php $_smarty_tpl->_assignInScope('show_version', false);?>
    <?php $_smarty_tpl->_assignInScope('show_install_datetime', false);?>
    <?php $_smarty_tpl->_assignInScope('show_supplier_link', false);?>
    <?php $_smarty_tpl->_assignInScope('show_addon_status', false);?>
    <?php $_smarty_tpl->_assignInScope('show_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_addon_tools', false);?>
    <?php $_smarty_tpl->_assignInScope('show_view_more_addons', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['addons_list']->value) {?>
    <div class="table-responsive-wrapper addons-list" id="addon_table">
        <table class="table table-addons table-middle cm-filter-table ty-table--sorter
            table-responsive table-responsive-w-titles"
            data-ca-sortable="true"
            data-ca-sort-list="[[0, 1], [2, 0]]"
            data-ca-input-id="elm_addon"
            data-ca-clear-id="elm_addon_clear"
            data-ca-empty-id="elm_addon_no_items"
            data-ca-filter-table-is-logical-and="true"
        >
            <thead>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['show_favorite']->value) {?>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-star-empty",'title'=>$_smarty_tpl->__("favorites")),$_smarty_tpl);?>

                    </th>
                    <?php }?>
                    <th class="sorter-false" width="8%"></th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="40%"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <?php if ($_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%" title="<?php echo $_smarty_tpl->__("installed_date");?>
">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-calendar muted"),$_smarty_tpl);?>

                    </th>
                    <?php }?>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="18%"><?php echo $_smarty_tpl->__("developer");?>
</th>
                    <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                    <th class="sorter-false" width="14%"><?php echo $_smarty_tpl->__("cscart_marketplace.price");?>
</th>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_addon_tools']->value) {?>
                    <th class="sorter-false" width="7%"></th>
                    <?php }?>
                    <th class="<?php if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>sorter-false<?php } else { ?>cm-tablesorter<?php }?> right" <?php if (!$_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>data-ca-sortable-column="true"<?php }?> width="20%"><?php if (!$_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {
echo $_smarty_tpl->__("status");
}?></th>
                </tr>
            </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_list']->value, 'a', false, 'key');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_full_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['a']->value,'is_marketplace_addons'=>$_smarty_tpl->tpl_vars['is_marketplace_addons']->value), 0, true);
?>

            <?php $_smarty_tpl->_assignInScope('addon_filter_source_suffix', $_smarty_tpl->tpl_vars['a']->value['is_core_addon'] ? "built_in" : "third_party");?>

            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-row-item
                filter_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['status'], ENT_QUOTES, 'UTF-8');?>
 filter_source_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_filter_source_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="addon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-supplier="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
"
                data-category="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['category'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php if ($_smarty_tpl->tpl_vars['show_favorite']->value) {?>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_favorite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('result_ids'=>"addon_table",'detailed'=>false), 0, true);
?>
                </td>
                <?php }?>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['a']->value,'href'=>true,'show_description'=>true), 0, true);
?>
                </td>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/addon_description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/addon_install_datetime.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <?php }?>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_supplier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/marketplace/addon_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_addon_status']->value) {?>
                <td class="nowrap row-status">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <?php }?>
                <td class="nowrap right">
                    <?php if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/marketplace/marketplace_addon_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php }?>
                </td>
            <!--addon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    <!--addon_table--></div>

    <?php if ($_smarty_tpl->tpl_vars['show_view_more_addons']->value) {?>
        <div class="addons-list__view-more-addons">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url("helpdesk_connector.view_more_addons"),'but_text'=>$_smarty_tpl->__("view_more_addons"),'but_meta'=>"btn btn-primary",'but_role'=>"action",'but_target'=>"_blank"), 0, false);
?>
        </div>
    <?php }
} else { ?>
    <p id="elm_addon_no_items" class="no-items <?php if ($_smarty_tpl->tpl_vars['addon_list']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }
}
}
