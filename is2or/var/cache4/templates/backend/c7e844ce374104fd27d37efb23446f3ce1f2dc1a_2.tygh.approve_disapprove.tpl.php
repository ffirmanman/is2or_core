<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:59:02
  from '/srv/projects/is2or.com/public_html/design/backend/templates/buttons/approve_disapprove.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683457867a6b83_10882282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e844ce374104fd27d37efb23446f3ce1f2dc1a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/buttons/approve_disapprove.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683457867a6b83_10882282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('disapprove','approve','enter_disapproval_reason','disapprove','type_comments_here','approve'));
echo smarty_function_script(array('src'=>"js/tygh/backend/approve_disapprove.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['header_view']->value) {?>
        <?php $_smarty_tpl->_assignInScope('disapprove_btn_icon', "approve-disapprove__icon");?>
    <?php $_smarty_tpl->_assignInScope('approve_btn_icon', "approve-disapprove__icon");?>
    <?php $_smarty_tpl->_assignInScope('disapprove_btn_text', $_smarty_tpl->__("disapprove"));?>
    <?php $_smarty_tpl->_assignInScope('approve_btn_text', $_smarty_tpl->__("approve"));?>
    <?php $_smarty_tpl->_assignInScope('disapprove_btn_class', "btn approve-disapprove__btn approve-disapprove__btn--header-disapprove");?>
    <?php $_smarty_tpl->_assignInScope('approve_btn_class', "btn approve-disapprove__btn approve-disapprove__btn--header-approve btn-primary");
} else { ?>
        <?php $_smarty_tpl->_assignInScope('disapprove_btn_icon', "approve-disapprove__icon icon-thumbs-down");?>
    <?php $_smarty_tpl->_assignInScope('approve_btn_icon', "approve-disapprove__icon icon-thumbs-up");?>
    <?php $_smarty_tpl->_assignInScope('disapprove_btn_text', '');?>
    <?php $_smarty_tpl->_assignInScope('approve_btn_text', '');?>
    <?php $_smarty_tpl->_assignInScope('disapprove_btn_class', "btn approve-disapprove__btn approve-disapprove__btn--list-disapprove");?>
    <?php $_smarty_tpl->_assignInScope('approve_btn_class', "btn approve-disapprove__btn approve-disapprove__btn--list-approve");
}?>

<?php $_smarty_tpl->_assignInScope('disapprove_status', (($tmp = $_smarty_tpl->tpl_vars['disapprove_status']->value ?? null)===null||$tmp==='' ? "D" ?? null : $tmp));
$_smarty_tpl->_assignInScope('approve_status', (($tmp = $_smarty_tpl->tpl_vars['approve_status']->value ?? null)===null||$tmp==='' ? "A" ?? null : $tmp));
ob_start();
echo smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['id']->value,"status"=>$_smarty_tpl->tpl_vars['disapprove_status']->value,"notify_user"=>smarty_modifier_enum("YesNo::YES")));
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('disapprove_data', (($tmp = $_smarty_tpl->tpl_vars['disapprove_data']->value ?? null)===null||$tmp==='' ? array("data-ca-approve-disapprove-data"=>$_prefixVariable2) ?? null : $tmp));
ob_start();
echo smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['id']->value,"status"=>$_smarty_tpl->tpl_vars['approve_status']->value,"notify_user"=>smarty_modifier_enum("YesNo::YES")));
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('approve_data', (($tmp = $_smarty_tpl->tpl_vars['approve_data']->value ?? null)===null||$tmp==='' ? array("data-ca-approve-disapprove-data"=>$_prefixVariable3) ?? null : $tmp));
$_tmp_array = isset($_smarty_tpl->tpl_vars['disapprove_data']) ? $_smarty_tpl->tpl_vars['disapprove_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-approve-disapprove"] = "disapprove";
$_smarty_tpl->_assignInScope('disapprove_data', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['approve_data']) ? $_smarty_tpl->tpl_vars['approve_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-approve-disapprove"] = "approve";
$_smarty_tpl->_assignInScope('approve_data', $_tmp_array);
$_smarty_tpl->_assignInScope('return_url', (($tmp = rawurldecode($_smarty_tpl->tpl_vars['return_url']->value) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp));?>

<div class="approve-disapprove"
    data-ca-approve-disapprove="container"
    data-ca-approve-disapprove-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['disapprove_reason_name']->value) {?>
                <div class="btn-group dropleft approve-disapprove__btn-group">
            <a class="dropdown-toggle <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['disapprove_btn_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['disapprove_btn_icon']->value),$_smarty_tpl);?>

                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['disapprove_btn_text']->value, ENT_QUOTES, 'UTF-8');?>

                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu approve-disapprove__dropdown">
                <div class="approve-disapprove__content">
                    <textarea class="approve-disapprove__reason"
                        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['disapprove_reason_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-approve-disapprove="disapprove_reason"
                        placeholder="<?php echo $_smarty_tpl->__("enter_disapproval_reason");?>
"
                    ></textarea>
                </div>
                <div class="approve-disapprove__footer">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'id'=>((string)$_smarty_tpl->tpl_vars['dispatch']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value)."_approve",'class'=>"btn btn-primary approve-disapprove__btn",'text'=>$_smarty_tpl->__("disapprove"),'data'=>$_smarty_tpl->tpl_vars['disapprove_data']->value), true);?>

                </div>
            </ul>
        </div>
    <?php } else { ?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'id'=>((string)$_smarty_tpl->tpl_vars['dispatch']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value)."_approve",'class'=>$_smarty_tpl->tpl_vars['disapprove_btn_class']->value,'text'=>$_smarty_tpl->tpl_vars['disapprove_btn_text']->value,'icon'=>$_smarty_tpl->tpl_vars['disapprove_btn_icon']->value,'data'=>$_smarty_tpl->tpl_vars['disapprove_data']->value), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['approve_reason_name']->value) {?>
                <div class="btn-group dropleft approve-disapprove__btn-group">
            <a class="dropdown-toggle <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['approve_btn_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['approve_btn_icon']->value),$_smarty_tpl);?>

                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['approve_btn_text']->value, ENT_QUOTES, 'UTF-8');?>

                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu approve-disapprove__dropdown">
                <div class="approve-disapprove__content">
                    <textarea class="approve-disapprove__reason"
                        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['approve_reason_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                        placeholder="<?php echo $_smarty_tpl->__("type_comments_here");?>
"
                        data-ca-approve-disapprove="approve_reason"
                    ></textarea>
                </div>
                <div class="approve-disapprove__footer">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'id'=>((string)$_smarty_tpl->tpl_vars['dispatch']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value)."_approve",'class'=>"btn btn-primary approve-disapprove__btn",'text'=>$_smarty_tpl->__("approve"),'data'=>$_smarty_tpl->tpl_vars['approve_data']->value), true);?>

                </div>
            </ul>
        </div>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'id'=>((string)$_smarty_tpl->tpl_vars['dispatch']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value)."_approve",'class'=>$_smarty_tpl->tpl_vars['approve_btn_class']->value,'text'=>$_smarty_tpl->tpl_vars['approve_btn_text']->value,'icon'=>$_smarty_tpl->tpl_vars['approve_btn_icon']->value,'data'=>$_smarty_tpl->tpl_vars['approve_data']->value), true);?>

    <?php }?>
</div>
<?php }
}
