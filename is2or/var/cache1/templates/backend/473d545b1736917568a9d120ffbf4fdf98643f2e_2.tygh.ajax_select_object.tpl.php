<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:33:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/ajax_select_object.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fde797dbf05_72527214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473d545b1736917568a9d120ffbf4fdf98643f2e' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/ajax_select_object.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fde797dbf05_72527214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','loading'));
$_smarty_tpl->_assignInScope('relative_dropdown', (($tmp = $_smarty_tpl->tpl_vars['relative_dropdown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ajax_select_content", null, null);?>

<a <?php if ($_smarty_tpl->tpl_vars['span_wrapping']->value == false) {?>id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['type']->value != "list") {?>btn btn-link link--monochrome<?php }?> dropdown-toggle" data-toggle="dropdown">
    <?php if ($_smarty_tpl->tpl_vars['span_wrapping']->value) {?>
        <span id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['text']->value,40,"...",true), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['dropdown_icon']->value) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['dropdown_icon']->value)." dropdown-menu__icon"),$_smarty_tpl);?>

        <?php }?>
        <b class="caret"></b>
    <?php } else { ?>
        <?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['text']->value,40,"...",true), ENT_QUOTES, 'UTF-8');?>

        <?php if ($_smarty_tpl->tpl_vars['dropdown_icon']->value) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['dropdown_icon']->value)." dropdown-menu__icon"),$_smarty_tpl);?>

        <?php }?>
        <b class="caret"></b>
    <?php }?>
</a>

<?php if ($_smarty_tpl->tpl_vars['label']->value) {?><label><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</label><?php }?>

<?php if ($_smarty_tpl->tpl_vars['js_action']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.picker_js_action_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', function(elm) {
        <?php echo $_smarty_tpl->tpl_vars['js_action']->value;?>

    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<ul
    class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['type']->value == "opened") {?>dropdown-opened<?php }?>"
    id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_ajax_select_object"
    <?php if ($_smarty_tpl->tpl_vars['extra_data_old_id']->value) {?>data-ca-target-old-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_data_old_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['extra_data_new_id']->value) {?>data-ca-target-new-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_data_new_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
>
    <li>
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_" class="search-shop cm-smart-position">
            <input type="text" placeholder="<?php echo $_smarty_tpl->__("admin_search_field");?>
..." class="span3 input-text cm-ajax-content-input" data-ca-target-id="content_loader_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" size="16">
        </div>
    </li>
    <li>
        <div class="ajax-popup-tools" id="scroller_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <ul class="cm-select-list" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objects']->value, 'item', false, 'object_id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
                    <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['item']->value['name']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('name', smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['name'],40,"...",true));?>
                <?php }?>
                <li>
                    <a data-ca-action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['object_type']->value === "companies" && $_smarty_tpl->tpl_vars['item']->value['storefront_status'] === smarty_modifier_enum("StorefrontStatuses::CLOSED")) {?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-lock dropdown-menu__item-icon"),$_smarty_tpl);?>

                        <?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></ul>
            <ul>
                <li id="content_loader_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax-content-more ajax-content-more" data-ca-target-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['data_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_elm']->value, ENT_QUOTES, 'UTF-8');?>
"><span><?php echo $_smarty_tpl->__("loading");?>
</span></li>
            </ul>
        </div>
    </li>
    <?php echo $_smarty_tpl->tpl_vars['extra_content']->value;?>

</ul>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'list') {?>
    <li class="<?php if ($_smarty_tpl->tpl_vars['relative_dropdown']->value) {?>dropdown<?php }?> vendor-submenu"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ajax_select_content');?>
</li>
<?php } else { ?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['relative_dropdown']->value) {?>btn-group<?php }?>"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ajax_select_content');?>
</div>
<?php }
}
}
