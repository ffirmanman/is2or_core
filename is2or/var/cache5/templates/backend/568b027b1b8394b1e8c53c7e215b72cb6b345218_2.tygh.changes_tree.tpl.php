<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:46
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/tools/components/changes_tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc6a341136_18175892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '568b027b1b8394b1e8c53c7e215b72cb6b345218' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/tools/components/changes_tree.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tools/components/changes_tree.tpl' => 2,
  ),
),false)) {
function content_6835bc6a341136_18175892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items'));
if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
<div class="hidden" id="changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changes_tree']->value, 'item', false, 'item_id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<div class="table-wrapper">
    <table width="100%" class="table table-tree table-middle table--relative">
    <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['level']%2) {?>class="multiple-table-row"<?php }?>>
        <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['level'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"shift"),$_smarty_tpl);?>

        <td<?php if ($_smarty_tpl->tpl_vars['item']->value['action']) {?> class="snapshot-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['action'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <span style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {
if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value && $_smarty_tpl->tpl_vars['item']->value['action'] != "added") {?>hidden<?php }?>"><span class="icon-caret-right"></span></span><?php } else { ?><span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination"><span class="icon-caret-right"></span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value || !$_smarty_tpl->tpl_vars['show_all']->value || $_smarty_tpl->tpl_vars['item']->value['action'] == "added") {?> hidden<?php }?>"><span class="icon-caret-down"></span></span><?php } else { ?>&nbsp;<?php }?><span <?php if (!$_smarty_tpl->tpl_vars['item']->value['content']) {?> style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 14px;"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
        </td>
    </tr>
    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
    <div<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value || $_smarty_tpl->tpl_vars['item']->value['action'] == "added") {?> class="hidden"<?php }?> id="changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/tools/components/changes_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('changes_tree'=>$_smarty_tpl->tpl_vars['item']->value['content'],'parent_id'=>false,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, true);
?>
    <?php }?>
    <!--changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--changes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
