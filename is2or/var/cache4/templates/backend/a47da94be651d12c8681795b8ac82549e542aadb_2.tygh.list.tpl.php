<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:26:46
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/snippets/components/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345e06ce1812_93512224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47da94be651d12c8681795b8ac82549e542aadb' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/snippets/components/list.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
  ),
),false)) {
function content_68345e06ce1812_93512224 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','name','code','status','name','code','tools','delete','status','no_data'));
$_smarty_tpl->_assignInScope('return_url_escape', rawurlencode((string)$_smarty_tpl->tpl_vars['return_url']->value));
$_smarty_tpl->_assignInScope('can_update', fn_check_permissions('snippets','update','admin','POST'));
$_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("edit"));?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("view"));
}?>

<div id="snippet_list">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="snippets_form" class="form-horizontal" id="snippets_form">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['snippets']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "snippets_table", null, null);?>
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative table-responsive" width="100%">
                        <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                        >
                            <tr>
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <th width="1%" class="center mobile-hide">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                        <input type="checkbox"
                                               class="bulkedit-toggler hide"
                                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                        />
                                    </th>
                                <?php }?>
                                <th width="40%">
                                    <?php echo $_smarty_tpl->__("name");?>

                                </th>
                                <th width="20%">
                                    <?php echo $_smarty_tpl->__("code");?>

                                </th>
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <th class="right">&nbsp;</th>
                                    <th width="10%" class="right">
                                        <?php echo $_smarty_tpl->__("status");?>

                                    </th>
                                <?php }?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['snippets']->value, 'snippet');
$_smarty_tpl->tpl_vars['snippet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->value) {
$_smarty_tpl->tpl_vars['snippet']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('snippet_result_ids', ((string)$_smarty_tpl->tpl_vars['result_ids']->value).",snippet_content_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."_*");?>

                            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['snippet']->value->getStatus(), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 row-snippet cm-longtap-target"
                                data-snippet-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <td class="center mobile-hide">
                                        <input type="checkbox" name="snippet_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['snippet']->value->getStatus(), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                                    </td>
                                <?php }?>
                                <td class="row-status" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                    <a class="cm-external-click link--monochrome" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="<?php echo htmlspecialchars((string) "opener_snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</a>
                                </td>
                                <td class="row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
">
                                    <a class="cm-external-click link--monochrome" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="<?php echo htmlspecialchars((string) "opener_snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
</a>
                                </td>
                                <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                        <li>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()),'text'=>$_smarty_tpl->tpl_vars['snippet']->value->getName(),'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'act'=>"link",'href'=>"snippets.update?snippet_id=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['snippet_result_ids']->value)), 0, true);
?>
                                        </li>
                                        <li>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'method'=>"post",'class'=>"cm-confirm cm-ajax",'href'=>"snippets.delete?snippet_ids=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&result_ids=".((string)$_smarty_tpl->tpl_vars['snippet_result_ids']->value),'data'=>array("data-ca-target-id"=>$_smarty_tpl->tpl_vars['result_ids']->value)), true);?>

                                        </li>
                                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <div class="hidden-tools">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                    </div>
                                </td>
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"template_snippets",'id'=>$_smarty_tpl->tpl_vars['snippet']->value->getId(),'status'=>$_smarty_tpl->tpl_vars['snippet']->value->getStatus(),'table'=>"template_snippets",'object_id_name'=>"snippet_id",'update_controller'=>"snippets",'st_return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'st_result_ids'=>$_smarty_tpl->tpl_vars['snippet_result_ids']->value), 0, true);
?>
                                    </td>
                                <?php }?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"snippets_form",'object'=>"snippets",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'snippets_table')), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

    </form>

<!--content_snippets--></div><?php }
}
