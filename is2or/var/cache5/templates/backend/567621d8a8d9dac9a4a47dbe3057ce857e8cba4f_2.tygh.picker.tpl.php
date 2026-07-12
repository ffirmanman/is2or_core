<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/categories/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba56478743_55013706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '567621d8a8d9dac9a4a47dbe3057ce857e8cba4f' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/pickers/categories/picker.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:pickers/categories/js.tpl' => 5,
  ),
),false)) {
function content_6835ba56478743_55013706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_categories','add_categories','add_categories','position_short','name','no_items'));
?>

<?php if (!$_smarty_tpl->tpl_vars['rnd']->value) {
$_smarty_tpl->_assignInScope('rnd', rand());
}?>

<?php $_smarty_tpl->_assignInScope('data_id', (($tmp = $_smarty_tpl->tpl_vars['data_id']->value ?? null)===null||$tmp==='' ? "categories_list" ?? null : $tmp));
$_smarty_tpl->_assignInScope('data_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
$_smarty_tpl->_assignInScope('start_pos', (($tmp = $_smarty_tpl->tpl_vars['start_pos']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('default_name', rawurlencode((string)$_smarty_tpl->tpl_vars['default_name']->value));?>

<?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
    <?php $_smarty_tpl->_assignInScope('_but_title', $_smarty_tpl->tpl_vars['but_text']->value);
} elseif ($_smarty_tpl->tpl_vars['but_title']->value) {?>
    <?php $_smarty_tpl->_assignInScope('_but_title', $_smarty_tpl->tpl_vars['but_title']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_but_title', $_smarty_tpl->__("select_categories"));
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value == '') {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', null);
}?>

<?php if ($_smarty_tpl->tpl_vars['item_ids']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "blocks") {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_buttons", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>

            <?php if ($_smarty_tpl->tpl_vars['multiple']->value == true) {?>
                <?php $_smarty_tpl->_assignInScope('display', "checkbox");?>
                <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('display', "radio");?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_url', "&get_tree=multi_level");?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['disable_cancel']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_url', ((string)$_smarty_tpl->tpl_vars['extra_url']->value)."&disable_cancel=true");?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['controller'] != "companies") {?>

                <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('_but_text', (isset($_smarty_tpl->tpl_vars['but_text']->value)) ? ($_smarty_tpl->tpl_vars['but_text']->value) : ($_smarty_tpl->__("add_categories")));?>
                    <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
                    <?php $_smarty_tpl->_assignInScope('_but_icon', (($tmp = $_smarty_tpl->tpl_vars['but_icon']->value ?? null)===null||$tmp==='' ? "icon-plus" ?? null : $tmp));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('icon_class', $_smarty_tpl->tpl_vars['but_role']->value ? '' : "icon-plus");?>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_class']->value,'assign'=>'_but_text'),$_smarty_tpl);?>

                    <?php $_smarty_tpl->_assignInScope('_but_role', (($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));?>
                    <?php $_smarty_tpl->_assignInScope('_but_icon', (($tmp = $_smarty_tpl->tpl_vars['but_icon']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['_but_role']->value != "icon") {?>
                    <?php if ($_smarty_tpl->tpl_vars['placement']->value == 'right') {?>
                    <div class="clearfix">
                        <div class="pull-right">
                    <?php }?>
                        <div class="shift-button">
                            <div class="clearfix">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("categories.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&company_ids=".((string)$_smarty_tpl->tpl_vars['company_ids']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)."&is_tristate_checkbox=".((string)$_smarty_tpl->tpl_vars['is_tristate_checkbox']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_icon'=>$_smarty_tpl->tpl_vars['_but_icon']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>((string)$_smarty_tpl->tpl_vars['but_meta']->value)." btn cm-dialog-opener"), 0, false);
?>
                            </div>
                        </div>
                    <?php if ($_smarty_tpl->tpl_vars['placement']->value == 'right') {?>
                    </div>
                        </div>
                    <?php }?>
                <?php }?>
                <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_but_title']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
            <?php }?>

        <?php } else { ?>

            <?php $_smarty_tpl->_assignInScope('display', "checkbox");?>

            <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_url', "&get_tree=multi_level");?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['controller'] != "companies") {?>
                <?php $_smarty_tpl->_assignInScope('_but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_categories") ?? null : $tmp));?>
                <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
                <?php $_smarty_tpl->_assignInScope('_but_icon', "icon-plus");?>

            <?php if ($_smarty_tpl->tpl_vars['disable_cancel']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_url', ((string)$_smarty_tpl->tpl_vars['extra_url']->value)."&disable_cancel=true");?>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("categories.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)."&company_ids=".((string)$_smarty_tpl->tpl_vars['company_ids']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_icon'=>$_smarty_tpl->tpl_vars['_but_icon']->value,'but_meta'=>((string)$_smarty_tpl->tpl_vars['but_meta']->value)." cm-dialog-opener",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value)), 0, true);
?>

            <?php }?>
            <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_but_title']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (!$_smarty_tpl->tpl_vars['prepend']->value) {?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['extra_var']->value && $_smarty_tpl->tpl_vars['view_mode']->value != "button") {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <div class="clearfix"></div>
    <div id="categories_table_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="table-responsive-wrapper">
        <table width="100%" class="table table-middle table--relative table-responsive">
        <thead>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th width="5%"><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
            <th><?php echo $_smarty_tpl->__("name");?>
</th>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"category_picker:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"category_picker:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"category_picker:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
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
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>">
    <?php }?>
            <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>c<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </td>
        </tr>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."category_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'hide_input'=>$_smarty_tpl->tpl_vars['hide_input']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'radio_input_name'=>$_smarty_tpl->tpl_vars['radio_input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0, false);
?>
        <?php }?>
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
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_category'=>$_smarty_tpl->tpl_vars['main_category']->value,'category_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'hide_input'=>$_smarty_tpl->tpl_vars['hide_input']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'view_mode'=>"list"), 0, true);
?>
            <?php
}
if ($_smarty_tpl->tpl_vars['c_id']->do_else) {
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'hide_input'=>$_smarty_tpl->tpl_vars['hide_input']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'view_mode'=>"list"), 0, true);
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
                <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?><div class="input-append choose-input"><?php }?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'hide_input'=>$_smarty_tpl->tpl_vars['hide_input']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['start_pos']->value), 0, true);
?>
                <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?></div><?php }?><!-- /.choose-input -->
            <?php
}
if ($_smarty_tpl->tpl_vars['c_id']->do_else) {
?>
                <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
                <div class="input-append choose-input">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'hide_input'=>$_smarty_tpl->tpl_vars['hide_input']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value), 0, true);
?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

                </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr>
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>" class="table-responsive__td--hide-th-mobile"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
        </tr>
        </tbody>
    </table>
    </div>
    <?php } else { ?></div><?php }
}
}
}
