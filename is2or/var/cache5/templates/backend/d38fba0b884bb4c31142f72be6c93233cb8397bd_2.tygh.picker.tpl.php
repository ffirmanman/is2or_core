<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/storefronts/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba564bd3a9_44056295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd38fba0b884bb4c31142f72be6c93233cb8397bd' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/storefronts/picker.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:pickers/storefronts/js.tpl' => 3,
  ),
),false)) {
function content_6835ba564bd3a9_44056295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_storefronts','add_storefronts','name','no_items'));
$_smarty_tpl->_assignInScope('data_id', (($tmp = $_smarty_tpl->tpl_vars['data_id']->value ?? null)===null||$tmp==='' ? "storefronts_list" ?? null : $tmp));
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('data_id', ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value));?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if (fn_allowed_for('MULTIVENDOR:ULTIMATE') && !empty($_smarty_tpl->tpl_vars['auth']->value['storefront_id'])) {?>
    <?php $_smarty_tpl->_assignInScope('view_only', true);?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['item_ids']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('item_ids', $_smarty_tpl->tpl_vars['auth']->value['storefront_id']);?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['item_ids']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="choose-input">
    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_buttons", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value == true) {?>
            <?php $_smarty_tpl->_assignInScope('display', "checkbox");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('display', "radio");?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
            <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
            <div class="pull-right">
                <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?>
                    <div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>choose-icon input-append<?php } else { ?>buttons-container<?php }?>">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('_but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_storefronts") ?? null : $tmp));?>
                    <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
                    <?php $_smarty_tpl->_assignInScope('_but_icon', (($tmp = $_smarty_tpl->tpl_vars['but_icon']->value ?? null)===null||$tmp==='' ? "icon-plus" ?? null : $tmp));?>
                <?php } else { ?>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus",'assign'=>'_but_text'),$_smarty_tpl);?>

                    <?php $_smarty_tpl->_assignInScope('_but_role', "icon");?>
                <?php }?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['multiple']->value) {
echo "multiple";
} else {
echo "single";
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("storefronts.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&select_mode=".$_prefixVariable3."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_icon'=>$_smarty_tpl->tpl_vars['_but_icon']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener add-on btn",'method'=>"GET"), 0, false);
?>
                <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?>
                    </div>
                <?php }?>
            </div>
        <?php }?>

        <div class="hidden"
             id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
             title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_storefronts") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        ></div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (!$_smarty_tpl->tpl_vars['prepend']->value) {?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="clearfix"></div>
        <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive table-responsive-w-titles">
            <thead>
            <tr>
                <th width="100%">
                    <?php echo $_smarty_tpl->__("name");?>

                </th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?>class="hidden"<?php }?>
            >
    <?php } else { ?>
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
             class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value && !$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>cm-display-radio pull-left<?php }?>"
        >
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <tr class="hidden">
            <td colspan="2" data-th="&nbsp;">
    <?php }?>
    <input id="a<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids"
           type="hidden"
           class="cm-picker-value"
           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>"
    />
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </td>
        </tr>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'p_id');
$_smarty_tpl->tpl_vars['p_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p_id']->value) {
$_smarty_tpl->tpl_vars['p_id']->do_else = false;
?>
            <div class="input-append">
                <div class="pull-left">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('storefront_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_input'=>true), 0, true);
?>
                </div>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="input-append">
            <div class="pull-left">
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('storefront_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value), 0, true);
?>
            </div>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('storefront_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."storefront_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_input'=>true,'clone'=>true), 0, true);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </tbody>
            <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"
                   <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>class="hidden"<?php }?>
            >
            <tr>
                <td colspan="2" data-th="&nbsp;" class="table-responsive__td--hide-th-mobile">
                    <p class="no-items">
                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>

                    </p>
                </td>
            </tr>
            </tbody>
            </table>
        </div><!--/table-wrapper-->
    <?php } else { ?>
        </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        </div><!--/choose-input-->
    <?php }?>
</div><!--/clearfix-->
<?php }
}
