<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__stickers/hooks/companies/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5b65336_33369617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f52e8e81364863b9049f66ddd933ac616e3aa61' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__stickers/hooks/companies/tabs_content.post.tpl',
      1 => 1736835237,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/sticker_preview.tpl' => 1,
  ),
),false)) {
function content_68345db5b65336_33369617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__stickers.added_by_addon','id','position_short','name','ab__stickers.params.type','status','id','position_short','name','ab__stickers.params.type','ab__stickers.params.type.','status','active','disabled','no_data'));
if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['enable_for_vendors'] == smarty_modifier_enum("YesNo::YES") && (fn_check_view_permissions('ab__stickers.view','GET') || $_smarty_tpl->tpl_vars['addons']->value['vendor_privileges']['status'] != smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
<div id="content_ab__stickers" class="hidden">
<p class="muted"><?php echo $_smarty_tpl->__("ab__stickers.added_by_addon");?>
</p>
<?php if ($_smarty_tpl->tpl_vars['ab__stickers']->value) {?>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive">
<thead>
<tr>
<th width="2%" class="mobile-hide"><?php echo $_smarty_tpl->__("id");?>
</th>
<th width="2%" class="mobile-hide"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=position&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("position_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "position") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="21%" class="mobile-hide"></th>
<th width="30%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name_for_admin&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="25%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=type&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("ab__stickers.params.type");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "type") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="7%" class="right mobile-hide">&nbsp;</th>
<th width="13%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__stickers']->value, 'sticker');
$_smarty_tpl->tpl_vars['sticker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->do_else = false;
$_smarty_tpl->_assignInScope('status', (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['vendor_status'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['sticker']->value['status'] ?? null : $tmp));?>
<tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
<td data-th="<?php echo $_smarty_tpl->__("id");?>
" class="muted mobile-hide ty-center">#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['sticker_id'], ENT_QUOTES, 'UTF-8');?>
</td>
<td data-th="<?php echo $_smarty_tpl->__("position_short");?>
" class="mobile-hide ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['position'], ENT_QUOTES, 'UTF-8');?>
</td>
<td class="mobile-hide ty-center">
<?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__stickers/views/ab__stickers/components/sticker_preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_link'=>true), 0, true);
?>
</td>
<td data-th="<?php echo $_smarty_tpl->__("name");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['name_for_admin'], ENT_QUOTES, 'UTF-8');?>
</td>
<td data-th="<?php echo $_smarty_tpl->__("ab__stickers.params.type");?>
"><?php echo $_smarty_tpl->__("ab__stickers.params.type.".((string)$_smarty_tpl->tpl_vars['sticker']->value['type']));?>
</td>
<td></td>
<td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
<?php $_smarty_tpl->_assignInScope('tag', "a");
if ((!fn_check_view_permissions("ab__stickers.edit","POST")) && $_smarty_tpl->tpl_vars['addons']->value['vendor_privileges']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
$_smarty_tpl->_assignInScope('tag', "span");
}
$_smarty_tpl->_assignInScope('change_status_href', "ab__stickers.change_vendor_status?sticker_id=".((string)$_smarty_tpl->tpl_vars['sticker']->value['sticker_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])."&result_ids=content_ab__stickers");
if ($_smarty_tpl->tpl_vars['status']->value == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="cm-post" data-ca-target-id="content_ab__stickers" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['change_status_href']->value)."&status=D"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("active");?>
</<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
>
<?php } else { ?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="cm-post" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['change_status_href']->value)."&status=A"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("disabled");?>
</<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
>
<?php }?>
</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</div>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--content_ab__stickers--></div>
<?php }
}
}
