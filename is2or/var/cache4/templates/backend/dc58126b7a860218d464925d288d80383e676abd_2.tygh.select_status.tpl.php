<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/select_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5a2cd98_13304698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc58126b7a860218d464925d288d80383e676abd' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/select_status.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345db5a2cd98_13304698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('active','hidden','disabled','new','active','hidden','disabled','status','status','active','hidden','pending','new','disabled'));
if ($_smarty_tpl->tpl_vars['display']->value == "select" || $_smarty_tpl->tpl_vars['display']->value == "popup" || $_smarty_tpl->tpl_vars['display']->value == "text") {
$_smarty_tpl->_assignInScope('selected_st', (($tmp = $_smarty_tpl->tpl_vars['obj']->value['status'] ?? null)===null||$tmp==='' ? "A" ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "status_title", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['selected_st']->value == "A") {?>
        <?php echo $_smarty_tpl->__("active");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['selected_st']->value == "H") {?>
        <?php echo $_smarty_tpl->__("hidden");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['selected_st']->value == "D") {?>
        <?php echo $_smarty_tpl->__("disabled");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['selected_st']->value == "N") {?>
        <?php echo $_smarty_tpl->__("new");?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['display']->value == "select") {?>
<select class="input-small <?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <option value="A" <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
    <?php if ($_smarty_tpl->tpl_vars['hidden']->value) {?>
    <option value="H" <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == "H") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("hidden");?>
</option>
    <?php }?>
    <option value="D" <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
</select>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value == "popup") {?>
<input <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['input_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_st']->value, ENT_QUOTES, 'UTF-8');?>
" />
<div class="cm-popup-box btn-group dropleft">
    <a id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle btn btn-link" data-toggle="dropdown">
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'status_title');?>

    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu cm-select">
        <?php $_smarty_tpl->_assignInScope('items_status', fn_get_default_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value));?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'val', false, 'st');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['st']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
            <li <?php if ($_smarty_tpl->tpl_vars['selected_st']->value == $_smarty_tpl->tpl_vars['st']->value) {?>class="disabled"<?php }?>><a class="status-link-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['selected_st']->value == $_smarty_tpl->tpl_vars['st']->value) {?>active<?php }?>"  onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['st']->value]['color'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>');" data-ca-result-id="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['input_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'avail_box')) {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/select_popup.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "avail_box", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
} elseif ($_smarty_tpl->tpl_vars['display']->value == "text") {?>
<div class="control-group">
    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <div class="controls">
    <p>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'status_title');?>

    </p>
    </div>
</div>
<?php } else {
$_smarty_tpl->_assignInScope('can_be_disabled', (($tmp = $_smarty_tpl->tpl_vars['can_be_disabled']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
<div class="control-group">
    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['items_status']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'val', false, 'st', 'status_cycle', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['st']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['index'];
?>
                <label class="radio inline" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == $_smarty_tpl->tpl_vars['st']->value || (!$_smarty_tpl->tpl_vars['obj']->value['status'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['first'] : null))) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
</label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <label class="radio inline" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_a"><input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_a" <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == "A" || !$_smarty_tpl->tpl_vars['obj']->value['status']) {?>checked="checked"<?php }?> value="A" /><?php echo $_smarty_tpl->__("active");?>
</label>

        <?php if ($_smarty_tpl->tpl_vars['hidden']->value) {?>
            <label class="radio inline" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_h"><input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_h" <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == "H") {?>checked="checked"<?php }?> value="H" /><?php echo $_smarty_tpl->__("hidden");?>
</label>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == "P") {?>
            <label class="radio inline" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_p"><input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_p" checked="checked" value="P"/><?php echo $_smarty_tpl->__("pending");?>
</label>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] == "N") {?>
            <label class="radio inline" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_n"><input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_n" checked="checked" value="N"/><?php echo $_smarty_tpl->__("new");?>
</label>
        <?php }?>
            <label class="radio inline" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_d"><input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_d" <?php if ($_smarty_tpl->tpl_vars['obj']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ObjectStatuses::DISABLED"), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['can_be_disabled']->value) {?>disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->__("disabled");?>
</label>
        <?php }?>
    </div>
</div>
<?php }
}
}
