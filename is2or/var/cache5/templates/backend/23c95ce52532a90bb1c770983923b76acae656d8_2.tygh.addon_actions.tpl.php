<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/addons/addon_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc4019dac6_02585685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23c95ce52532a90bb1c770983923b76acae656d8' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/addons/addon_actions.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_license_required.tpl' => 1,
  ),
),false)) {
function content_6835bc4019dac6_02585685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('not_installed','disabled','active','open_action','addons.activate','addons.install','addons.install','addons.disabled','addons.activate','active','addons.upgrade_available','addons.upgrade_available','open_action','active','addons.upgrade_available','addons.upgrade_available','active'));
$_smarty_tpl->_assignInScope('target_id', "addons_list,top_bar,header_navbar,header_subnav,addons_counter,elm_developer_pages,elm_all_dev_pages");
$_smarty_tpl->_assignInScope('c_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->_assignInScope('hide_for_vendor', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->_assignInScope('status_text', $_smarty_tpl->__("not_installed"));
} elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->_assignInScope('status_text', $_smarty_tpl->__("disabled"));
} elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->_assignInScope('status_text', $_smarty_tpl->__("active"));
}?>

<?php ob_start();
echo $_smarty_tpl->__("open_action");
$_prefixVariable22=ob_get_clean();
$_smarty_tpl->_assignInScope('action_btn_text', $_smarty_tpl->tpl_vars['a']->value['main_page'] ? "<span class=\"caret\"></span>" : $_prefixVariable22." <span class=\"caret\"></span>");?>

<?php if ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE") && $_smarty_tpl->tpl_vars['a']->value['menu_items']) {?>
    <?php $_smarty_tpl->_assignInScope('position', "10");
} elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->_assignInScope('position', "20");
} elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->_assignInScope('position', "30");
} elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->_assignInScope('position', "40");
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_license_required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <div class="hidden">
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['short_name'], ENT_QUOTES, 'UTF-8');?>

    </div>

    <?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>
        <a href=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['license_required']->value['href'], ENT_QUOTES, 'UTF-8');?>

            class="btn cm-post cm-dialog-opener cm-dialog-auto-size"
            data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['license_required']->value['target_id'], ENT_QUOTES, 'UTF-8');?>

            data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['license_required']->value['promo_popup_title'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
                <?php echo $_smarty_tpl->__("addons.activate");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("addons.install");?>

            <?php }?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <div>
                <a href="<?php echo htmlspecialchars((string) fn_url("addons.install?addon=".((string)$_smarty_tpl->tpl_vars['key']->value)."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['c_url']->value)))), ENT_QUOTES, 'UTF-8');?>
"
                    class="btn cm-post cm-ajax cm-ajax-full-render"
                    data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>

                >
                    <?php echo $_smarty_tpl->__("addons.install");?>

                </a>
            </div>
            <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['is_disabled'] === true || $_smarty_tpl->tpl_vars['is_storefront_admin']->value) {?>
            <span class="shift-right"> <?php echo $_smarty_tpl->__("addons.disabled");?>
 </span>
        <?php } else { ?>
            <a href="<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable23=ob_get_clean();
echo htmlspecialchars((string) fn_url("addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&status=".$_prefixVariable23."&redirect_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['c_url']->value)))), ENT_QUOTES, 'UTF-8');?>
"
               class="btn cm-ajax cm-post cm-ajax-full-render"
               data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-event="ce.update_object_status_callback"
            >
                <?php echo $_smarty_tpl->__("addons.activate");?>

            </a>
        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE") && $_smarty_tpl->tpl_vars['a']->value['menu_items']) {?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['upgrade_available']) {?>
            <span class="shift-right muted" title="<?php echo $_smarty_tpl->__("active");?>
. <?php echo $_smarty_tpl->__("addons.upgrade_available");?>
">
                <?php echo $_smarty_tpl->__("addons.upgrade_available");?>

            </span>
        <?php }?>
        <div class="nowrap inline-block-basic">
            <div class="btn-group dropleft">
                <?php if ($_smarty_tpl->tpl_vars['a']->value['main_page']) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['a']->value['main_page']), ENT_QUOTES, 'UTF-8');?>
" class="btn"><?php echo $_smarty_tpl->__("open_action");?>
</a>
                <?php }?>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <?php echo $_smarty_tpl->tpl_vars['action_btn_text']->value;?>

                </button>
                <ul class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['a']->value['menu_items'], 'menu_item', false, 'href');
$_smarty_tpl->tpl_vars['menu_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['href']->value => $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->do_else = false;
?>
                        <li>
                        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_item']->value['title'] ? $_smarty_tpl->tpl_vars['menu_item']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['menu_item']->value['id']), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['menu_item']->value['parents']) {?>
                                (<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_item']->value['parents'], 'parent', false, NULL, 'addon_menu_item_parents', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['parent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['total'];
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent']->value['title'] ? $_smarty_tpl->tpl_vars['parent']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['parent']->value['id']), ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['last'] : null)) {?> / <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)
                            <?php }?>
                        </a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>

    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['a']->value['upgrade_available']) {?>
            <span class="shift-right muted" title="<?php echo $_smarty_tpl->__("active");?>
. <?php echo $_smarty_tpl->__("addons.upgrade_available");?>
">
                <?php echo $_smarty_tpl->__("addons.upgrade_available");?>

            </span>
        <?php } else { ?>
            <span class="shift-right view-status view-status-a view-status--type view-status--type-addons"><?php echo $_smarty_tpl->__("active");?>
</span>
        <?php }?>

    <?php }?>
</div>
<?php }
}
