<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/administrators.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bff6141697_98551722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c73c2609321ae06eade6a594df927b063eee4b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/administrators.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/table_col_head.tpl' => 2,
  ),
),false)) {
function content_6835bff6141697_98551722 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('person_name','person_name','email','no_data'));
?>

<?php if ($_smarty_tpl->tpl_vars['storefront_admins']->value) {?>
    <div class="table-responsive-wrapper longtap-selection">
        <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                <tr>
                    <th width="25%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"name",'text'=>$_smarty_tpl->__("person_name")), 0, false);
?>
                    </th>
                    <th width="25%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"email"), 0, true);
?>
                    </th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['storefront_admins']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
                <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['admin']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['admin']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
                    <td width="25%" class="row-status wrap" data-th="<?php echo $_smarty_tpl->__("person_name");?>
"><?php if ($_smarty_tpl->tpl_vars['admin']->value['firstname'] || $_smarty_tpl->tpl_vars['admin']->value['lastname']) {?><a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['admin']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['admin']->value['user_type'])), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['admin']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['admin']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?>-<?php }?></td>
                    <td width="25%" data-th="<?php echo $_smarty_tpl->__("email");?>
"><a class="row-status link--monochrome" href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['admin']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['admin']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }
}
}
