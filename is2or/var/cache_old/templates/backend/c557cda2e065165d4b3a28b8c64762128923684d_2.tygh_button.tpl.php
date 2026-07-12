<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:buttons/button.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460de13b1_72749461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c557cda2e065165d4b3a28b8c64762128923684d' => 
    array (
      0 => 'buttons/button.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9460de13b1_72749461 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
if ($_smarty_tpl->getValue('but_role') == "text") {?>
    <?php $_smarty_tpl->assign('class', '', false, NULL);?>
    <?php } else { ?>
    <?php $_smarty_tpl->assign('class', "btn", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('but_permission_data')) {?>
    <?php $_smarty_tpl->assign('r', $_smarty_tpl->getValue('but_permission_data'), false, NULL);
} elseif ($_smarty_tpl->getValue('but_name')) {?>
    <?php $_smarty_tpl->assign('r', $_smarty_tpl->getValue('but_name'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('r', $_smarty_tpl->getValue('but_href'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('but_icon')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "icon_content", "icon_content", null);?><span class="btn__icon <?php if ($_smarty_tpl->getValue('but_role') === "text") {?>btn__icon--text<?php }?> <?php if ($_smarty_tpl->getValue('but_text')) {?>btn__icon--with-text<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('but_icon')), $_smarty_tpl);?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

<?php $_smarty_tpl->assign('is_btn_primary', (($tmp = $_smarty_tpl->getValue('is_btn_primary') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->assign('method', (($tmp = $_smarty_tpl->getValue('method') ?? null)===null||$tmp==='' ? "POST" ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('r'),$_smarty_tpl->getValue('method'))) {?>

<?php if ($_smarty_tpl->getValue('but_group')) {?><div class="btn-group"><?php }?>

<?php if ($_smarty_tpl->getValue('but_role') == "submit" || $_smarty_tpl->getValue('but_role') == "button_main" || $_smarty_tpl->getValue('but_type') || $_smarty_tpl->getValue('but_role') == "big") {?>     <input <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('is_btn_primary')) {?> btn-primary<?php }?>" type="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('but_type') ?? null)===null||$tmp==='' ? "submit" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('but_name')) {?> name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('tabindex')) {?>tabindex="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabindex')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_check_filter')) {?> data-ca-check-filter="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_check_filter')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_disabled')) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->getValue('but_confirm_text')) {?>data-ca-confirm-text="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_confirm_text')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> />

<?php } elseif ($_smarty_tpl->getValue('but_role') && $_smarty_tpl->getValue('but_role') != "submit" && $_smarty_tpl->getValue('but_role') != "action" && $_smarty_tpl->getValue('but_role') != "submit-link" && $_smarty_tpl->getValue('but_role') != "advanced-search" && $_smarty_tpl->getValue('but_role') != "button" && $_smarty_tpl->getValue('but_role') != "submit-button" && $_smarty_tpl->getValue('but_role') != "button-icon") {?>     <a <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }
if ($_smarty_tpl->getValue('but_target')) {?> target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->getValue('but_meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getValue('icon_content');?>
 <?php echo $_smarty_tpl->getValue('but_text');?>
</a>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "action" || $_smarty_tpl->getValue('but_role') == "advanced-search" || $_smarty_tpl->getValue('but_role') == "submit-link") {?>     <a <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->getValue('but_target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn<?php if ($_smarty_tpl->getValue('but_role') == "submit-link") {
if ($_smarty_tpl->getValue('is_btn_primary')) {?> btn-primary<?php }?> cm-submit<?php }
if ($_smarty_tpl->getValue('but_meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->getValue('icon_content');?>
 <?php echo $_smarty_tpl->getValue('but_text');?>
</a>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "submit-button") {?>
    <button type="submit" <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->getValue('but_target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->getValue('is_btn_primary')) {?>btn-primary<?php }?> cm-submit<?php if ($_smarty_tpl->getValue('but_meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>" form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('but_disabled')) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->getValue('icon_content');?>
 <?php echo $_smarty_tpl->getValue('but_text');?>
</button>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "button") {?>
    <input <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_meta')) {?>class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="button" <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('tabindex')) {?>tabindex="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabindex')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> />

<?php } elseif ($_smarty_tpl->getValue('but_role') == "button-icon") {?>
    <button <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_meta')) {?>class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="button" <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('tabindex')) {?>tabindex="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabindex')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getValue('icon_content');?>
 <?php echo $_smarty_tpl->getValue('but_text');?>
</button>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "icon") {?>     <a <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->getValue('but_target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->getValue('but_meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->getValue('but_text');?>
</a>

<?php } elseif (!$_smarty_tpl->getValue('but_role') || !$_smarty_tpl->getValue('but_name')) {?>     <input <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>" type="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('but_type') ?? null)===null||$tmp==='' ? "submit" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('but_name')) {?> name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_onclick')), ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('tabindex')) {?>tabindex="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabindex')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_disabled')) {?>disabled="disabled"<?php }?>  />
<?php }?>

<?php if ($_smarty_tpl->getValue('but_group')) {?></div><?php }
}
}
}
