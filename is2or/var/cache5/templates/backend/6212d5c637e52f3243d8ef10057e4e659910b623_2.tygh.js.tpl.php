<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/storefronts/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba564cabc6_81540083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6212d5c637e52f3243d8ef10057e4e659910b623' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/storefronts/js.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835ba564cabc6_81540083 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('remove'));
$_smarty_tpl->_assignInScope('storefront', fn_get_storefront($_smarty_tpl->tpl_vars['storefront_id']->value));
$_smarty_tpl->_assignInScope('storefront_name', (($tmp = $_smarty_tpl->tpl_vars['storefront']->value->name ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."storefront".((string)$_smarty_tpl->tpl_vars['rdelim']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_text_storefront_names', $_smarty_tpl->tpl_vars['view_only']->value || !fn_check_view_permissions("storefronts.update","GET"));?>

<?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['storefront_id']) && fn_allowed_for('MULTIVENDOR:ULTIMATE')) {?>
    <?php $_smarty_tpl->_assignInScope('view_only', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        class="cm-js-item storefront <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>cm-clone hidden<?php }?>"
        data-ca-storefront-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-storefront-company-ids="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds()), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?>
            <td data-th="&nbsp;">
                <input type="text"
                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value*10, ENT_QUOTES, 'UTF-8');?>
"
                       size="3"
                       class="input-micro" <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>disabled="disabled"<?php }?>
                />
            </td>
        <?php }?>

        <td data-th="&nbsp;">
            <?php if ($_smarty_tpl->tpl_vars['show_text_storefront_names']->value) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_name']->value, ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <a class="storefront__name"
                   href="<?php echo htmlspecialchars((string) fn_url("storefronts.update?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)), ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>

        </td>

        <td data-th="&nbsp;">
            <div class="hidden-tools storefront__tools">
                <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value && !$_smarty_tpl->tpl_vars['view_only']->value && $_smarty_tpl->tpl_vars['storefront_owner_id']->value != $_smarty_tpl->tpl_vars['storefront_id']->value) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <li>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)."', 'a'); return false;"), true);?>

                        </li>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                <?php }?>
            </div>
        </td>
        <?php if (!$_smarty_tpl->tpl_vars['hide_input']->value) {?>
            <input <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                   type="hidden"
                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
    </tr>
<?php } else { ?>
    <span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          class="cm-js-item no-margin <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>cm-clone hidden<?php }?>"
    >
        <?php if (!$_smarty_tpl->tpl_vars['first_item']->value && $_smarty_tpl->tpl_vars['single_line']->value) {?>
            <span class="cm-comma <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>hidden<?php }?>">,&nbsp;&nbsp;</span>
        <?php }?>
        <input class="cm-picker-value-description <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="text"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
               size="10"
               name="storefront_name"
               readonly="readonly"
               <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>

        >&nbsp;
    </span>
<?php }
}
}
