<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:27:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/templates/components/file_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bdb52b3e02_64047870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ead5110bdd38245d2725f1b12646d6488f37b8b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/templates/components/file_list.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bdb52b3e02_64047870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
$_smarty_tpl->_assignInScope('render_placed', false);?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'item_id', 'it', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('forbidden', false);?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "F") {?>
            <?php $_smarty_tpl->_assignInScope('file_ext', '');?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "gif") {
$_smarty_tpl->_assignInScope('file_ext', "gif");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "jpg") {
$_smarty_tpl->_assignInScope('file_ext', "jpg");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "jpeg") {
$_smarty_tpl->_assignInScope('file_ext', "jpg");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "png") {
$_smarty_tpl->_assignInScope('file_ext', "png");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "html" || $_smarty_tpl->tpl_vars['item']->value['ext'] == "htm") {
$_smarty_tpl->_assignInScope('file_ext', "html");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "tgz" || $_smarty_tpl->tpl_vars['item']->value['ext'] == "zip" || $_smarty_tpl->tpl_vars['item']->value['ext'] == "zip2" || $_smarty_tpl->tpl_vars['item']->value['ext'] == "gz" || $_smarty_tpl->tpl_vars['item']->value['ext'] == "bz" || $_smarty_tpl->tpl_vars['item']->value['ext'] == "rar") {
$_smarty_tpl->_assignInScope('file_ext', "zip");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "tpl" || $_smarty_tpl->tpl_vars['item']->value['ext'] == "txt") {
$_smarty_tpl->_assignInScope('file_ext', "tpl");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "php") {
$_smarty_tpl->_assignInScope('file_ext', "php");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "css") {
$_smarty_tpl->_assignInScope('file_ext', "css");
}?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext'] == "js") {
$_smarty_tpl->_assignInScope('file_ext', "js");
}?>
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['ext'],$_smarty_tpl->tpl_vars['config']->value['forbidden_file_extensions'])) {
$_smarty_tpl->_assignInScope('forbidden', true);
}?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('uniqid', uniqid(10));?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['item']->value['name'] == $_smarty_tpl->tpl_vars['active_object']->value) {?>parent<?php }?> <?php if ($_smarty_tpl->tpl_vars['last_object']->value && $_smarty_tpl->tpl_vars['item']->value['name'] == $_smarty_tpl->tpl_vars['active_object']->value) {?>active<?php }?>">
            <a data-ca-item-full-path="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['full_path'], ENT_QUOTES, 'UTF-8');?>
" data-ca-item-path="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['path'], ENT_QUOTES, 'UTF-8');?>
" data-ca-item-filename="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']) {?>data-ca-item-ext="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['ext'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-item-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-te-file" id="file_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['uniqid']->value, ENT_QUOTES, 'UTF-8');?>
">
                <span class="overlay"></span>
                <span class="item">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "D") {?>
                    <span class="flex-inline top">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-caret-right"),$_smarty_tpl);?>

                    </span>
                <?php } elseif ($_smarty_tpl->tpl_vars['file_ext']->value == "gif" || $_smarty_tpl->tpl_vars['file_ext']->value == "jpg" || $_smarty_tpl->tpl_vars['file_ext']->value == "jpeg" || $_smarty_tpl->tpl_vars['file_ext']->value == "png") {?>
                    <span class="flex-inline top">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-picture"),$_smarty_tpl);?>

                    </span>
                <?php } else { ?>
                    <span class="flex-inline top">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-file"),$_smarty_tpl);?>

                    </span>
                <?php }?>
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                </span>
            </a>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['name'] == $_smarty_tpl->tpl_vars['active_object']->value) {?>
                <?php $_smarty_tpl->_assignInScope('render_placed', true);?>
                <!--render_place-->
            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if (!$_smarty_tpl->tpl_vars['render_placed']->value) {?>
        <!--render_place-->
    <?php }?>
</ul>
<?php }
}
