<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f6626a61_33639211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f6f97da27650294ebe3f9fbb0e871a7f84e8371' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/common/pagination.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f6626a61_33639211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next'));
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
$_smarty_tpl->_assignInScope('pagination', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));?>

<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <div class="ty-pagination-container cm-pagination-container" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['save_current_page']->value) {?>
        <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search']->value['page'] ?? null)===null||$tmp==='' ? $_REQUEST['page'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['save_current_url']->value) {?>
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_pages'] > 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['top_pagination'] == "Y" && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y" || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"page"));?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', !$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] || $_smarty_tpl->tpl_vars['force_ajax']->value ? "cm-ajax" : '');?>
    <?php $_smarty_tpl->_assignInScope('ajax_full_render_class', $_smarty_tpl->tpl_vars['full_render']->value ? "cm-ajax-full-render" : '');?>
    <?php $_smarty_tpl->_assignInScope('extra_id', (($tmp = $_smarty_tpl->tpl_vars['extra_id']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <div class="ty-pagination__bottom">
    <?php }?>
        <?php if (!($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile" && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['mode'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "auto" && $_smarty_tpl->tpl_vars['ut2_load_more']->value)) {?>
            <div class="ty-pagination" id="ut2_pagination_block<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>_bottom<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_range']) {?>
                    <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history hidden-phone ty-pagination__item ty-pagination__range <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
                <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>ty-pagination__prev cm-history <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_page'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-pagination__text-arrow"),$_smarty_tpl);?>
&nbsp;<span class="ty-pagination__text"><?php echo $_smarty_tpl->__("prev_page");?>
</span></a>

                <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                    <div class="ty-pagination__items">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['navi_pages'], 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['pg']->value != $_smarty_tpl->tpl_vars['pagination']->value['current_page']) {?>
                                <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pg']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                            <?php } else { ?>
                                <span class="ty-pagination__selected"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>

                <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>ty-pagination__next cm-history <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');
}?> ty-pagination__right-arrow" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><span class="ty-pagination__text"><?php echo $_smarty_tpl->__("next");?>
</span>&nbsp;<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-pagination__text-arrow"),$_smarty_tpl);?>
</a>

                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_range']) {?>
                    <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item hidden-phone ty-pagination__range <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
            <!--ut2_pagination_block<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>_bottom<?php }?>--></div>
        <?php }?>


    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
        </div>
    <?php }?>
    <?php } else { ?>
        <div class="hidden"><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden"></a></div>
    <?php }
}?>

<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>N<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} elseif ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
