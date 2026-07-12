<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:22:04
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/sorting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc7c203ce1_97145764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9af3da3f6f437f087830206ebbdb9c77ef46d7' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/sorting.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bc7c203ce1_97145764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.ab__hide_content.php','function'=>'smarty_block_ab__hide_content',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.sort_by_','sort_by','abt__ut2.sort_by_','abt__ut2.sort_by_','sort_by','abt__ut2.sort_by_'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="ty-sort-dropdown">
	<div class="ut2-sort-label"><?php echo $_smarty_tpl->__('sort_by');?>
:</div>
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><span><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));?>
</span><i class="ut2-icon-outline-expand_more"></i></a>
    <div id="elm_sort_fields" class="ty-sort-dropdown__content cm-smart-position-h cm-popup-box hidden">
        <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->__("sort_by");?>
<div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_elm_sort_fields"><i class="ut2-icon-baseline-close"></i></div></div>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'value', false, 'option');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == $_smarty_tpl->tpl_vars['option']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order_rev']);?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                        <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['value']->value['default_order']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('sort_order', "asc");?>
                    <?php }?>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting_orders']->value, 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] != $_smarty_tpl->tpl_vars['option']->value || $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == $_smarty_tpl->tpl_vars['sort_order']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('sort_class', "sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                        <?php $_smarty_tpl->_assignInScope('sort_key', ((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                        <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value || $_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value] == 'Y') {?>
                        <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                            <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__selected_filters'))) {?> cm-ajax-full-render<?php }?> ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                        </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="ty-sort-dropdown">
	<div class="ut2-sort-label"><?php echo $_smarty_tpl->__('sort_by');?>
:</div>
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><span><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));?>
</span><i class="ut2-icon-outline-expand_more"></i></a>
    <div id="elm_sort_fields" class="ty-sort-dropdown__content cm-smart-position-h cm-popup-box hidden">
        <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->__("sort_by");?>
<div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_elm_sort_fields"><i class="ut2-icon-baseline-close"></i></div></div>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'value', false, 'option');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == $_smarty_tpl->tpl_vars['option']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['search']->value['sort_order_rev']);?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                        <?php $_smarty_tpl->_assignInScope('sort_order', $_smarty_tpl->tpl_vars['value']->value['default_order']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('sort_order', "asc");?>
                    <?php }?>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting_orders']->value, 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] != $_smarty_tpl->tpl_vars['option']->value || $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == $_smarty_tpl->tpl_vars['sort_order']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('sort_class', "sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                        <?php $_smarty_tpl->_assignInScope('sort_key', ((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
                        <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value || $_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value] == 'Y') {?>
                        <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                            <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__selected_filters'))) {?> cm-ajax-full-render<?php }?> ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("abt__ut2.sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                        </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
