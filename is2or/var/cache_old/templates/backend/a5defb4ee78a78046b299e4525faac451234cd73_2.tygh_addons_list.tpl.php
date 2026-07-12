<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc910513_78237818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5defb4ee78a78046b299e4525faac451234cd73' => 
    array (
      0 => 'views/addons/components/addons_list.tpl',
      1 => 1767831035,
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
))) {
function content_69aed9cc910513_78237818 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components';
\Tygh\Languages\Helper::preloadLangVars(array('favorites','name','installed_date','developer','cscart_marketplace.price','status','view_more_addons','no_data'));
$_smarty_tpl->assign('show_favorite', (($tmp = $_smarty_tpl->getValue('show_favorite') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_install_datetime', (($tmp = $_smarty_tpl->getValue('show_install_datetime') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_addon_status', (($tmp = $_smarty_tpl->getValue('show_addon_status') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_addon_tools', (($tmp = $_smarty_tpl->getValue('show_addon_tools') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_marketplace_addons', (($tmp = $_smarty_tpl->getValue('is_marketplace_addons') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('is_marketplace_addons')) {?>
    <?php $_smarty_tpl->assign('show_favorite', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_install_datetime', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_version', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_install_datetime', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_supplier_link', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_addon_status', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_price', true, false, NULL);?>
    <?php $_smarty_tpl->assign('show_addon_tools', false, false, NULL);?>
    <?php $_smarty_tpl->assign('show_view_more_addons', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('addons_list')) {?>
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
                    <?php if ($_smarty_tpl->getValue('show_favorite')) {?>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%">
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-star-empty",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("favorites", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

                    </th>
                    <?php }?>
                    <th class="sorter-false" width="8%"></th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="40%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                    <?php if ($_smarty_tpl->getValue('show_install_datetime')) {?>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installed_date", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-calendar muted"), $_smarty_tpl);?>

                    </th>
                    <?php }?>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="18%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("developer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                    <?php if ($_smarty_tpl->getValue('show_price')) {?>
                    <th class="sorter-false" width="14%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cscart_marketplace.price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('show_addon_tools')) {?>
                    <th class="sorter-false" width="7%"></th>
                    <?php }?>
                    <th class="<?php if ($_smarty_tpl->getValue('is_marketplace_addons')) {?>sorter-false<?php } else { ?>cm-tablesorter<?php }?> right" <?php if (!$_smarty_tpl->getValue('is_marketplace_addons')) {?>data-ca-sortable-column="true"<?php }?> width="20%"><?php if (!$_smarty_tpl->getValue('is_marketplace_addons')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></th>
                </tr>
            </thead>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('addons_list'), 'a', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('a')->value) {
$foreach0DoElse = false;
?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_full_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->getValue('a'),'is_marketplace_addons'=>$_smarty_tpl->getValue('is_marketplace_addons')), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->assign('addon_filter_source_suffix', ($_smarty_tpl->getValue('a')['is_core_addon']) ? "built_in" : "third_party", false, NULL);?>

            <tr class="cm-row-status-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('a')['status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
 cm-row-item
                filter_status_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['status']), ENT_QUOTES, 'UTF-8');?>
 filter_source_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addon_filter_source_suffix')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('additional_class')), ENT_QUOTES, 'UTF-8');?>
"
                id="addon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
"
                data-supplier="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['supplier']), ENT_QUOTES, 'UTF-8');?>
"
                data-category="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['category']), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php if ($_smarty_tpl->getValue('show_favorite')) {?>
                <td>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_favorite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('result_ids'=>"addon_table",'detailed'=>false), (int) 0, $_smarty_current_dir);
?>
                </td>
                <?php }?>
                <td>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->getValue('a'),'href'=>true,'show_description'=>true), (int) 0, $_smarty_current_dir);
?>
                </td>
                <td>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/manage/addon_description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </td>
                <?php if ($_smarty_tpl->getValue('show_install_datetime')) {?>
                <td>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/manage/addon_install_datetime.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </td>
                <?php }?>
                <td>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_supplier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </td>
                <?php if ($_smarty_tpl->getValue('show_price')) {?>
                <td>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/marketplace/addon_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </td>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('show_addon_status')) {?>
                <td class="nowrap row-status">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </td>
                <?php }?>
                <td class="nowrap right">
                    <?php if ($_smarty_tpl->getValue('is_marketplace_addons')) {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/marketplace/marketplace_addon_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>
                </td>
            <!--addon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
--></tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </table>
    <!--addon_table--></div>

    <?php if ($_smarty_tpl->getValue('show_view_more_addons')) {?>
        <div class="addons-list__view-more-addons">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("helpdesk_connector.view_more_addons"),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("view_more_addons", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"btn btn-primary",'but_role'=>"action",'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }
} else { ?>
    <p id="elm_addon_no_items" class="no-items <?php if ($_smarty_tpl->getValue('addon_list')) {?>hidden<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
<?php }
}
}
