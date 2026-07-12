<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:common/select_popup.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523e1a5c9_48459850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85e8fdc42ea4a083b2730937bbeaaa6913df218' => 
    array (
      0 => 'common/select_popup.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
))) {
function content_69fb5523e1a5c9_48459850 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('active','hidden','disabled','pending','new','active','disabled','hidden','pending','new'));
$_smarty_tpl->assign('notify_customer_status', true, false, NULL);
$_smarty_tpl->assign('notify_department_status', true, false, NULL);
$_smarty_tpl->assign('notify_vendor_status', true, false, NULL);
$_smarty_tpl->assign('_update_controller', (($tmp = $_smarty_tpl->getValue('update_controller') ?? null)===null||$tmp==='' ? "tools" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('custom_href', (($tmp = $_smarty_tpl->getValue('custom_href') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('status', (($tmp = $_smarty_tpl->getValue('status') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('text_class', '', false, NULL);
$_smarty_tpl->assign('status_long_length', 10, false, NULL);
if ($_smarty_tpl->getValue('items_status')) {?>
    <?php $_smarty_tpl->assign('items_status_text', (($tmp = $_smarty_tpl->getValue('items_status')[$_smarty_tpl->getValue('status')] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('default_status_text') ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('is_items_status_text_long', mb_strlen((string) $_smarty_tpl->getValue('items_status_text'), 'UTF-8') > $_smarty_tpl->getValue('status_long_length'), false, NULL);?>
    <?php $_smarty_tpl->assign('text_class', ($_smarty_tpl->getValue('is_items_status_text_long')) ? "status--long" : '', false, NULL);
}
if ($_smarty_tpl->getValue('type')) {?>
    <?php $_smarty_tpl->assign('type_class', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('type'),"_","-"), false, NULL);
}?>

<?php if (!$_smarty_tpl->getValue('non_editable')) {?>
    <?php $_smarty_tpl->assign('has_permission', $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')($_smarty_tpl->getValue('_update_controller'),"update_status","admin","POST",array("table"=>$_smarty_tpl->getValue('table'))), false, NULL);?>
    <?php if (!$_smarty_tpl->getValue('has_permission')) {?>
        <?php $_smarty_tpl->assign('non_editable', true, false, NULL);?>
    <?php }
}?>

<?php if ($_smarty_tpl->getValue('non_editable') || $_smarty_tpl->getValue('display') == "text") {?>
    <span class="view-status view-status-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('status'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('type_class')) {?>view-status--type view-status--type-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type_class')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('items_status') && $_smarty_tpl->getValue('is_items_status_text_long')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('items_status_text')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('items_status')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('items_status_text')), ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->getValue('status') == "A") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "H") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hidden", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "D") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("disabled", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "P") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("pending", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "N") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("new", [], $_smarty_tpl->getSmarty()->getLanguage());
}
}?></span>
<?php } else {
$_smarty_tpl->assign('prefix', (($tmp = $_smarty_tpl->getValue('prefix') ?? null)===null||$tmp==='' ? "select" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('btn_meta', (($tmp = $_smarty_tpl->getValue('btn_meta') ?? null)===null||$tmp==='' ? "btn btn-link" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('popup_additional_class', $_smarty_tpl->getValue('popup_additional_class'), false, NULL);?>
<div class="cm-popup-box <?php if (!$_smarty_tpl->getValue('hide_for_vendor')) {?>dropdown<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_additional_class')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->getValue('hide_for_vendor')) {?>
        <a href="#" <?php if ($_smarty_tpl->getValue('id')) {?>id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_wrap"<?php }?> class="<?php if ($_smarty_tpl->getValue('btn_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('btn_meta')), ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text_class')), ENT_QUOTES, 'UTF-8');?>
 status-dropdown status-dropdown-<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('status'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('type_class')) {?>status-dropdown--type status-dropdown--type-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type_class')), ENT_QUOTES, 'UTF-8');
}?> btn dropdown-toggle<?php if ($_smarty_tpl->getValue('id')) {?> cm-combination<?php }?> <?php if ($_smarty_tpl->getValue('text_wrap')) {?>dropdown-toggle--text-wrap<?php }?>" <?php if ($_smarty_tpl->getValue('items_status') && $_smarty_tpl->getValue('is_items_status_text_long')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('items_status_text')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-toggle="dropdown"><?php }
if ($_smarty_tpl->getValue('items_status')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('items_status_text')), ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->getValue('status') == "A") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "D") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("disabled", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "H") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hidden", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "P") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("pending", [], $_smarty_tpl->getSmarty()->getLanguage());
} elseif ($_smarty_tpl->getValue('status') == "N") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("new", [], $_smarty_tpl->getSmarty()->getLanguage());
}
}
if (!$_smarty_tpl->getValue('hide_for_vendor')) {?><span class="caret status-caret"></span></a>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('id') && !$_smarty_tpl->getValue('hide_for_vendor')) {?>
        <?php if ($_smarty_tpl->getValue('table') && $_smarty_tpl->getValue('object_id_name')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "_extra", null, null);?>&table=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('table')), ENT_QUOTES, 'UTF-8');?>
&id_name=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id_name')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>
            <ul class="dropdown-menu">
            <?php if (!$_smarty_tpl->getValue('items_status')) {?>
                <?php $_smarty_tpl->assign('items_status', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_default_statuses')($_smarty_tpl->getValue('status'),$_smarty_tpl->getValue('hidden')), false, NULL);?>
                <?php $_smarty_tpl->assign('extra_params', "&table=".((string)$_smarty_tpl->getValue('table'))."&id_name=".((string)$_smarty_tpl->getValue('object_id_name')), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('extra_params', ((string)$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, '_extra')).((string)$_smarty_tpl->getValue('extra')), false, NULL);?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('st_return_url')) {?>
                <?php $_smarty_tpl->assign('return_url', rawurlencode((string)$_smarty_tpl->getValue('st_return_url')), false, NULL);?>
                <?php $_smarty_tpl->assign('extra_params', ((string)$_smarty_tpl->getValue('extra_params'))."&redirect_url=".((string)$_smarty_tpl->getValue('return_url')), false, NULL);?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('items_status')) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items_status'), 'val', false, 'st');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('st')->value => $_smarty_tpl->getVariable('val')->value) {
$foreach11DoElse = false;
?>
                <?php $_smarty_tpl->assign('st', (($tmp = $_smarty_tpl->getValue('st') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
                <li <?php if ($_smarty_tpl->getValue('status') == $_smarty_tpl->getValue('st')) {?>class="disabled"<?php }?>>
                    <a
                        class="<?php if ($_smarty_tpl->getValue('text_wrap')) {?>dropdown--text-wrap<?php }?> <?php if ($_smarty_tpl->getValue('confirm')) {?>cm-confirm <?php }?>status-link status-link-<?php echo mb_strtolower((string) $_smarty_tpl->getValue('st'), 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('type_class')) {?>status-link--type status-link--type-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type_class')), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->getValue('status') == $_smarty_tpl->getValue('st')) {?>active<?php } else { ?>cm-ajax cm-post<?php if ($_smarty_tpl->getValue('ajax_full_render')) {?> cm-ajax-full-render<?php }
}?> <?php if ($_smarty_tpl->getValue('status_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('status_meta')), ENT_QUOTES, 'UTF-8');
}?>"
                        <?php if ($_smarty_tpl->getValue('status_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('status_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        <?php if ($_smarty_tpl->getValue('custom_href')) {?>
                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('custom_href')), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('_update_controller')).".update_status?id=".((string)$_smarty_tpl->getValue('id'))."&status=".((string)$_smarty_tpl->getValue('st')).((string)$_smarty_tpl->getValue('extra_params')).((string)$_smarty_tpl->getValue('dynamic_object')))), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('st'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->getValue('statuses')) {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('statuses')[$_smarty_tpl->getValue('st')]['params']['color'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}?>');"
                        <?php if ($_smarty_tpl->getValue('st_result_ids')) {?>data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('st_result_ids')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        data-ca-event="ce.update_object_status_callback"
                        <?php if (mb_strlen((string) $_smarty_tpl->getValue('val'), 'UTF-8') > $_smarty_tpl->getValue('status_long_length')) {?>data-ca-select-popup-is-long-status="true"<?php }?>
                        title="<?php if ($_smarty_tpl->getValue('custom_title')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('custom_title')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('val')), ENT_QUOTES, 'UTF-8');
}?>"
                    ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('val')), ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "list_items", null, null);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'list_items'))) {?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'list_items');?>

            <?php }?>
        </ul>
        <?php if (!$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'avail_box')) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/select_popup.js"), $_smarty_tpl);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "avail_box", null, null);?>Y<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
    <?php }?>
</div>
<?php }
}
}
