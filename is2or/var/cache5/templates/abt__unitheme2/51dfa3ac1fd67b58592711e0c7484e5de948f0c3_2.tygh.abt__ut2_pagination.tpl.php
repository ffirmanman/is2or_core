<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:22:04
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/abt__ut2_pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc7c222a13_72202567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51dfa3ac1fd67b58592711e0c7484e5de948f0c3' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/abt__ut2_pagination.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bc7c222a13_72202567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('p', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));
$_smarty_tpl->_assignInScope('id', ((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents");?>

<?php if ($_smarty_tpl->tpl_vars['position']->value == 'top') {?>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['position']->value == 'bottom') {?>
    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['p']->value['next_page'] > $_smarty_tpl->tpl_vars['p']->value['current_page']) {?>
        <?php $_smarty_tpl->_assignInScope('load_more_mode', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['mode'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);?>

        <?php if (defined("AJAX_REQUEST") && $_smarty_tpl->tpl_vars['load_more_mode']->value === 'semi_auto') {?>
            <?php $_smarty_tpl->_assignInScope('load_more_mode', 'auto');?>
        <?php }?>

        <div class="ut2-load-more-container ut2-load-more-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['load_more_mode']->value, ENT_QUOTES, 'UTF-8');?>
" id="load_more_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('show_more', $_smarty_tpl->tpl_vars['p']->value['items_per_page']);?>
            <?php $_smarty_tpl->_assignInScope('left_products', $_smarty_tpl->tpl_vars['p']->value['total_items']-($_smarty_tpl->tpl_vars['p']->value['items_per_page']*$_smarty_tpl->tpl_vars['p']->value['current_page']));?>
            <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],'page'));?>
            <?php $_smarty_tpl->_assignInScope('lang_variable', "abt__ut2.load_more.show_more.clear.".((string)$_smarty_tpl->tpl_vars['object']->value));?>

            <?php if ($_smarty_tpl->tpl_vars['left_products']->value < $_smarty_tpl->tpl_vars['p']->value['items_per_page']) {?>
                <?php $_smarty_tpl->_assignInScope('show_more', $_smarty_tpl->tpl_vars['left_products']->value);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['show_products_num'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum('YesNo::YES')) {?>
                <?php $_smarty_tpl->_assignInScope('lang_variable', "abt__ut2.load_more.show_more.num.".((string)$_smarty_tpl->tpl_vars['object']->value));?>
            <?php }?>

            <span class="ut2-load-more" data-ut2-load-more-url="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['p']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ut2-load-more-result-ids="<?php echo htmlspecialchars((string) ((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents", ENT_QUOTES, 'UTF-8');?>
,load_more_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_pagination_contents,ut2_pagination_block,ut2_pagination_block_bottom">
                <span class="loader-wrapper">
                    <i class="loader"></i>
                </span>
                <span class="loader-text"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['lang_variable']->value,array($_smarty_tpl->tpl_vars['show_more']->value));?>
</span>
            </span>
        <!--load_more_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/abt__ut2_pagination.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/abt__ut2_pagination.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('p', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));
$_smarty_tpl->_assignInScope('id', ((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents");?>

<?php if ($_smarty_tpl->tpl_vars['position']->value == 'top') {?>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['position']->value == 'bottom') {?>
    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['p']->value['next_page'] > $_smarty_tpl->tpl_vars['p']->value['current_page']) {?>
        <?php $_smarty_tpl->_assignInScope('load_more_mode', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['mode'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);?>

        <?php if (defined("AJAX_REQUEST") && $_smarty_tpl->tpl_vars['load_more_mode']->value === 'semi_auto') {?>
            <?php $_smarty_tpl->_assignInScope('load_more_mode', 'auto');?>
        <?php }?>

        <div class="ut2-load-more-container ut2-load-more-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['load_more_mode']->value, ENT_QUOTES, 'UTF-8');?>
" id="load_more_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('show_more', $_smarty_tpl->tpl_vars['p']->value['items_per_page']);?>
            <?php $_smarty_tpl->_assignInScope('left_products', $_smarty_tpl->tpl_vars['p']->value['total_items']-($_smarty_tpl->tpl_vars['p']->value['items_per_page']*$_smarty_tpl->tpl_vars['p']->value['current_page']));?>
            <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],'page'));?>
            <?php $_smarty_tpl->_assignInScope('lang_variable', "abt__ut2.load_more.show_more.clear.".((string)$_smarty_tpl->tpl_vars['object']->value));?>

            <?php if ($_smarty_tpl->tpl_vars['left_products']->value < $_smarty_tpl->tpl_vars['p']->value['items_per_page']) {?>
                <?php $_smarty_tpl->_assignInScope('show_more', $_smarty_tpl->tpl_vars['left_products']->value);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['show_products_num'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum('YesNo::YES')) {?>
                <?php $_smarty_tpl->_assignInScope('lang_variable', "abt__ut2.load_more.show_more.num.".((string)$_smarty_tpl->tpl_vars['object']->value));?>
            <?php }?>

            <span class="ut2-load-more" data-ut2-load-more-url="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['p']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ut2-load-more-result-ids="<?php echo htmlspecialchars((string) ((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents", ENT_QUOTES, 'UTF-8');?>
,load_more_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_pagination_contents,ut2_pagination_block,ut2_pagination_block_bottom">
                <span class="loader-wrapper">
                    <i class="loader"></i>
                </span>
                <span class="loader-text"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['lang_variable']->value,array($_smarty_tpl->tpl_vars['show_more']->value));?>
</span>
            </span>
        <!--load_more_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
}
}
}
}
