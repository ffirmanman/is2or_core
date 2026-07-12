<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__motivation_block/hooks/companies/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5b55b15_61580936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c415b5d055ea8c9da2d92803c16a5a784ef8633' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__motivation_block/hooks/companies/tabs_content.post.tpl',
      1 => 1736835084,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
  ),
),false)) {
function content_68345db5b55b15_61580936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront','ab__mb.description','no_data'));
if (fn_allowed_for("MULTIVENDOR") && (fn_check_view_permissions('ab__motivation_block.view','GET') || $_smarty_tpl->tpl_vars['addons']->value['vendor_privileges']['status'] != smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
<div id="content_ab__motivation_block" class="hidden">
<?php if (($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum('UserTypes::VENDOR')) && $_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['description_type'] == 'smarty') {
$_tmp_array = isset($_smarty_tpl->tpl_vars['addons']) ? $_smarty_tpl->tpl_vars['addons']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__motivation_block']['description_type'] = 'html';
$_smarty_tpl->_assignInScope('addons', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['ab__mb_items']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__mb_items']->value, 'ab__mb_item', false, '_key');
$_smarty_tpl->tpl_vars['ab__mb_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_key']->value => $_smarty_tpl->tpl_vars['ab__mb_item']->value) {
$_smarty_tpl->tpl_vars['ab__mb_item']->do_else = false;
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__mb:companies_motivation_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__mb:companies_motivation_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['status'] != smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
<div style="margin: 20px 0">
<h5><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__mb_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>
<p class="muted"><?php echo $_smarty_tpl->__("storefront");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['app']->value["storefront.repository"]->findById($_smarty_tpl->tpl_vars['ab__mb_item']->value['storefront_id'])->name, ENT_QUOTES, 'UTF-8');?>
</p>
<?php if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['template_path'] == 'addons/ab__motivation_block/blocks/components/item_templates/custom_content.tpl') {?>
<input type="hidden" name="ab__mb_items[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][motivation_item_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'], ENT_QUOTES, 'UTF-8');?>
" />
<div class="control-group">
<label class="control-label" for="ab__mb_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__mb.description");?>
:</label>
<div class="controls">
<textarea id="ab__mb_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="ab__mb_items[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="35" rows="8" class="<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['description_type'] == 'html') {?>cm-wysiwyg <?php }?>input-large" style="width: calc(100% - 50px);"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__mb_item']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
<a data-ca-field="description" data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'], ENT_QUOTES, 'UTF-8');?>
" class="btn ab__mb_restore_default" target="_blank" title="<?php echo $_smarty_tpl->__('ab__mb.set_default_value');?>
"><i class="icon-cog"></i></a>
</div>
</div>
<?php $_smarty_tpl->_assignInScope('tmpl', array('status'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['vendor_status']));
$_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"ab__mb_items[".((string)$_smarty_tpl->tpl_vars['_key']->value)."][status]",'id'=>"ab__mb_".((string)$_smarty_tpl->tpl_vars['_key']->value)."_status",'obj_id'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'],'obj'=>$_smarty_tpl->tpl_vars['tmpl']->value,'hidden'=>false), 0, true);
} else { ?>
<p class="no-items ty-mt-m text-center"><span style="display: inline-block; max-width: 70%;"><?php echo $_smarty_tpl->__('ab__mb.vendor.motivation_item.template_choosen');?>
</span></p>
<?php }?>
</div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__mb:companies_motivation_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function (_, $) {
$('.ab__mb_restore_default').click(function () {
var btn = $(this);
var item_id = btn.data('caId');
var field = btn.data('caField');
if (item_id !== undefined && field !== undefined) {
$.ceAjax('request', fn_url("ab__motivation_block.get_default_value"), {
method: 'get',
data: {
motivation_item_id: item_id,
field: field
},
callback: function(data){
var input = btn.closest('.controls').find('*[name$="[' + field + ']"]');
if (data.value !== undefined && input.length) {
if (input.attr('type') === "checkbox") {
input.prop('checked', (data.value === <?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
));
} else {
input.val(data.value);
if (input.hasClass('cm-wysiwyg')) {
input.ceEditor('destroy');
input.ceEditor('recover');
}
$.ceEvent('trigger', 'ab__mb.restored_default', [ item_id, data.value ]);
}
}
}
});
}
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
</div>
<?php }
}
}
