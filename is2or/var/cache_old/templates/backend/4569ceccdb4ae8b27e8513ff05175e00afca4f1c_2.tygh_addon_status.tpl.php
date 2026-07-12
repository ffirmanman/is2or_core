<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons/addon_status.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc9da1f1_48378498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4569ceccdb4ae8b27e8513ff05175e00afca4f1c' => 
    array (
      0 => 'views/addons/components/addons/addon_status.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/enjoying_addon_notification.tpl' => 1,
  ),
))) {
function content_69aed9cc9da1f1_48378498 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/addons';
\Tygh\Languages\Helper::preloadLangVars(array('upgrade','refresh','disable','uninstall'));
$_smarty_tpl->assign('show_addon_status', (($tmp = $_smarty_tpl->getValue('show_addon_status') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_addon_status')) {?>
    <?php $_smarty_tpl->assign('target_id', "addons_list,top_bar,header_navbar,header_subnav,addons_counter,elm_developer_pages,elm_all_dev_pages", false, NULL);?>
    <?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>

    <div>
        <?php if ($_smarty_tpl->getValue('a')['status'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::NEW_OBJECT")) {?>
            <div class="hidden-tools">

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>
                <?php if (!$_smarty_tpl->getValue('is_storefront_admin')) {?>
                    <?php if (!$_smarty_tpl->getValue('a')['is_core_addon'] && $_smarty_tpl->getValue('a')['identified'] && !$_smarty_tpl->getValue('a')['personal_review'] && !$_smarty_tpl->getValue('a')['hide_post_review']) {?>
                        <li class="dropdown__item wrap-normal">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->getValue('a'),'id'=>"addons_write_review_manage_".((string)$_smarty_tpl->getValue('a')['addon']),'is_big_heading'=>false), (int) 0, $_smarty_current_dir);
?>
                        </li>
                        <li class="divider"></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('a')['upgrade_available']) {?>
                        <li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("upgrade", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"upgrade_center.manage",'class'=>"text-success"), true);?>
</li>
                        <li class="divider"></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('a')['refresh_url']) {?>
                        <li>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("refresh", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>$_smarty_tpl->getValue('a')['refresh_url'],'method'=>"POST"), true);?>

                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?>
                        <li>
                            <a class="cm-ajax cm-post cm-ajax-full-render"
                                data-ca-target-id="<?php echo $_smarty_tpl->getValue('target_id');?>
"
                                href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::DISABLED")), ENT_QUOTES, 'UTF-8');
$_prefixVariable21=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.update_status?id=".((string)$_smarty_tpl->getValue('key'))."&status=".$_prefixVariable21."&redirect_url=".((string)(rawurlencode((string)$_smarty_tpl->getValue('c_url')))));?>
"
                                data-ca-event="ce.update_object_status_callback"
                            >
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("disable", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                            </a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('a')['delete_url']) {?>
                        <?php $_smarty_tpl->assign('btn_delete_data', array("data-ca-target-id"=>"addons_list,top_bar,header_navbar,header_subnav"), false, NULL);?>
                        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('a')['confirmation_deleting'] ?? null)))) {?>
                            <?php $_tmp_array = $_smarty_tpl->getValue('btn_delete_data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-confirm-text"] = $_smarty_tpl->getValue('a')['confirmation_deleting'];
$_smarty_tpl->assign('btn_delete_data', $_tmp_array, false, NULL);?>
                        <?php }?>

                        <li>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm text-error",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("uninstall", [], $_smarty_tpl->getSmarty()->getLanguage()),'data'=>$_smarty_tpl->getValue('btn_delete_data'),'href'=>$_smarty_tpl->getValue('a')['delete_url'],'method'=>"POST"), true);?>

                        </li>
                    <?php }?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list'),'icon'=>(($_smarty_tpl->getValue('a')['upgrade_available']) ? "icon-cloud-download" : "icon-cog")), true);?>


            </div>
        <?php }?>
    </div>
<?php }
}
}
