<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons/addon_actions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cca0f169_59393863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f18ab7ea7d2ce581a65d8efbab67ba37bbce248' => 
    array (
      0 => 'views/addons/components/addons/addon_actions.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_license_required.tpl' => 1,
  ),
))) {
function content_69aed9cca0f169_59393863 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/addons';
\Tygh\Languages\Helper::preloadLangVars(array('not_installed','disabled','active','open_action','addons.activate','addons.install','addons.install','addons.disabled','addons.activate','active','addons.upgrade_available','addons.upgrade_available','open_action','active','addons.upgrade_available','addons.upgrade_available','active'));
$_smarty_tpl->assign('target_id', "addons_list,top_bar,header_navbar,header_subnav,addons_counter,elm_developer_pages,elm_all_dev_pages", false, NULL);
$_smarty_tpl->assign('c_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('runtime')['company_id']) {?>
    <?php $_smarty_tpl->assign('hide_for_vendor', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->assign('status_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("not_installed", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->assign('status_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("disabled", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->assign('status_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("open_action", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable22=ob_get_clean();
$_smarty_tpl->assign('action_btn_text', ($_smarty_tpl->getValue('a')['main_page']) ? "<span class=\"caret\"></span>" : $_prefixVariable22." <span class=\"caret\"></span>", false, NULL);?>

<?php if ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && $_smarty_tpl->getValue('a')['menu_items']) {?>
    <?php $_smarty_tpl->assign('position', "10", false, NULL);
} elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->assign('position', "20", false, NULL);
} elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->assign('position', "30", false, NULL);
} elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->assign('position', "40", false, NULL);
}?>

<?php $_smarty_tpl->assign('license_required_popup_id', "license_required_popup_".((string)$_smarty_tpl->getValue('key')), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_license_required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->getValue('key'),'popup_id'=>$_smarty_tpl->getValue('license_required_popup_id')), (int) 0, $_smarty_current_dir);
?>

<div>
    <div class="hidden">
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['short_name']), ENT_QUOTES, 'UTF-8');?>

    </div>

    <?php if (!$_smarty_tpl->getValue('a')['snapshot_correct']) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:snapshot_incorrect"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <a class="btn cm-dialog-opener cm-dialog-auto-height"
            data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('license_required_popup_id')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-dialog-class="left wrap-normal"
        >
            <?php if ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::DISABLED")) {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.activate", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.install", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
        </a>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:snapshot_incorrect"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php } elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::NEW_OBJECT")) {?>
        <?php if (!$_smarty_tpl->getValue('hide_for_vendor')) {?>
            <div>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:install"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.install?addon=".((string)$_smarty_tpl->getValue('key'))."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->getValue('c_url')))));?>
"
                    class="btn cm-post cm-ajax cm-ajax-full-render"
                    data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_id')), ENT_QUOTES, 'UTF-8');?>
"
                >
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.install", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:install"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </div>
            <?php }?>
    <?php } elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::DISABLED")) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:activate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('a')['is_disabled'] === true || $_smarty_tpl->getValue('is_storefront_admin')) {?>
            <span class="shift-right"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.disabled", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 </span>
        <?php } else { ?>
            <a href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")), ENT_QUOTES, 'UTF-8');
$_prefixVariable23=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.update_status?id=".((string)$_smarty_tpl->getValue('key'))."&status=".$_prefixVariable23."&redirect_url=".((string)(rawurlencode((string)$_smarty_tpl->getValue('c_url')))));?>
"
               class="btn cm-ajax cm-post cm-ajax-full-render"
               data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_id')), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-event="ce.update_object_status_callback"
            >
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.activate", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </a>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:activate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php } elseif ($_smarty_tpl->getValue('a')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && $_smarty_tpl->getValue('a')['menu_items']) {?>
        <?php if ($_smarty_tpl->getValue('a')['upgrade_available']) {?>
            <span class="shift-right muted" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>
. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.upgrade_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.upgrade_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </span>
        <?php }?>
        <div class="nowrap inline-block-basic">
            <div class="btn-group dropleft">
                <?php if ($_smarty_tpl->getValue('a')['main_page']) {?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('a')['main_page'])), ENT_QUOTES, 'UTF-8');?>
" class="btn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("open_action", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <?php }?>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <?php echo $_smarty_tpl->getValue('action_btn_text');?>

                </button>
                <ul class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('a')['menu_items'], 'menu_item', false, 'href');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('href')->value => $_smarty_tpl->getVariable('menu_item')->value) {
$foreach1DoElse = false;
?>
                        <li>
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo ($_smarty_tpl->getValue('menu_item')['title']) ? $_smarty_tpl->getValue('menu_item')['title'] : $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('menu_item')['id'], [], $_smarty_tpl->getSmarty()->getLanguage());?>

                            <?php if ($_smarty_tpl->getValue('menu_item')['parents']) {?>
                                (<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu_item')['parents'], 'parent', false, NULL, 'addon_menu_item_parents', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('parent')->value) {
$foreach2DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['total'];
echo ($_smarty_tpl->getValue('parent')['title']) ? $_smarty_tpl->getValue('parent')['title'] : $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('parent')['id'], [], $_smarty_tpl->getSmarty()->getLanguage());
if (!($_smarty_tpl->getValue('__smarty_foreach_addon_menu_item_parents')['last'] ?? null)) {?> / <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>)
                            <?php }?>
                        </a>
                        </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>

    <?php } else { ?>

        <?php if ($_smarty_tpl->getValue('a')['upgrade_available']) {?>
            <span class="shift-right muted" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>
. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.upgrade_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.upgrade_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </span>
        <?php } else { ?>
            <span class="shift-right view-status view-status-a view-status--type view-status--type-addons"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <?php }?>

    <?php }?>
</div>
<?php }
}
