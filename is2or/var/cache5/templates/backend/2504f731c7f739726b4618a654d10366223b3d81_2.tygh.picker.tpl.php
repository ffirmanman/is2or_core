<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:47
  from '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/companies/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bfefac3226_85119362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2504f731c7f739726b4618a654d10366223b3d81' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/companies/picker.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:pickers/companies/js.tpl' => 5,
  ),
),false)) {
function content_6835bfefac3226_85119362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_companies','choose','add_companies','choose','add_companies','add_companies','add_companies','position_short','name','no_items'));
$_smarty_tpl->_assignInScope('data_id', (($tmp = $_smarty_tpl->tpl_vars['data_id']->value ?? null)===null||$tmp==='' ? "companies_list" ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['rnd']->value) {
$_smarty_tpl->_assignInScope('rnd', rand());
}
$_smarty_tpl->_assignInScope('data_id', ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
$_smarty_tpl->_assignInScope('start_pos', (($tmp = $_smarty_tpl->tpl_vars['start_pos']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_but_text', (($tmp = $_smarty_tpl->tpl_vars['show_but_text']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('icon', (($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? "icon-plus" ?? null : $tmp));?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['item_ids']->value == '') {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', null);
}?>

<?php if ($_smarty_tpl->tpl_vars['item_ids']->value && $_smarty_tpl->tpl_vars['multiple']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<?php if ($_smarty_tpl->tpl_vars['show_add_button']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php $_smarty_tpl->_assignInScope('_but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('lang_choose', $_smarty_tpl->__("choose"));?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-",'title'=>$_smarty_tpl->tpl_vars['lang_choose']->value,'assign'=>'_but_text'),$_smarty_tpl);?>

        <?php $_smarty_tpl->_assignInScope('_but_role', "icon");?>
    <?php }?>
    <div class="pull-right">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("companies.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener btn",'but_icon'=>"icon-plus"), 0, false);
?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value == true) {?>
        <?php $_smarty_tpl->_assignInScope('display', "checkbox");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('display', "radio");?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_url', "&get_tree=multi_level");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['controller'] != "companies") {?>
    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>choose-icon<?php } else { ?>button-container<?php }?>"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php $_smarty_tpl->_assignInScope('_but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") ?? null : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('lang_choose', $_smarty_tpl->__("choose"));?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-",'title'=>$_smarty_tpl->tpl_vars['lang_choose']->value,'assign'=>'_but_text'),$_smarty_tpl);?>

            <?php $_smarty_tpl->_assignInScope('_but_role', "icon");?>
        <?php }?>
    <div class="pull-right">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_icon'=>$_smarty_tpl->tpl_vars['icon']->value,'but_href'=>fn_url("companies.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"btn cm-dialog-opener"), 0, true);
?>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
    <?php }?>
    <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('display', "checkbox");?>

    <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_url', "&get_tree=multi_level");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['controller'] != "companies") {?>
        <?php $_smarty_tpl->_assignInScope('_but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
    <?php }?>
    <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['extra_var']->value && $_smarty_tpl->tpl_vars['view_mode']->value != "button") {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <div class="clearfix"></div>
    <div class="table-responsive-wrapper">
        <table width="100%" class="table table-middle table--relative table-responsive table-responsive-w-titles">
        <thead>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
            <th width="100%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <?php } else { ?>
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value && !$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {
if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>cm-display-radio<?php }
}?> choose-category">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <tr class="hidden">
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>" data-th="&nbsp;">
    <?php }?>
            <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>m<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {
$_smarty_tpl->_assignInScope('_item_ids', $_smarty_tpl->tpl_vars['item_ids']->value);
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['_item_ids']->value), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_ids']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </td>
        </tr>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "list") {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'c_id', false, NULL, 'items', array (
  'first' => true,
  'iteration' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['c_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_id']->value) {
$_smarty_tpl->tpl_vars['c_id']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>false,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['start_pos']->value), 0, true);
?>
                <?php
}
if ($_smarty_tpl->tpl_vars['c_id']->do_else) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'c_id', false, NULL, 'items', array (
  'first' => true,
  'iteration' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['c_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_id']->value) {
$_smarty_tpl->tpl_vars['c_id']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['start_pos']->value), 0, true);
?>
                <?php
}
if ($_smarty_tpl->tpl_vars['c_id']->do_else) {
?>
                    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value), 0, true);
?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."company_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'radio_input_name'=>$_smarty_tpl->tpl_vars['radio_input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0, true);
?>
        <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr>
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>" data-th="&nbsp;" class="table-responsive__td--hide-th-mobile"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
        </tr>
        </tbody>
    </table>
    </div>
    <?php } else { ?></div><?php }
}
}
}
