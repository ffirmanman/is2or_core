<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:47
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bfef9ee2f9_73581514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41b7fda95747661aa2d686cc3daa8c0698119c9' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/pagination.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tools.tpl' => 1,
  ),
),false)) {
function content_6835bfef9ee2f9_73581514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('objects_per_page','pagination_range'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"common:pagination"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"common:pagination"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['div_id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove((($tmp = $_smarty_tpl->tpl_vars['current_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp),"page"));?>
    <?php $_smarty_tpl->_assignInScope('pagination', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));?>
    <?php $_smarty_tpl->_assignInScope('show_pagination_open', (($tmp = $_smarty_tpl->tpl_vars['show_pagination_open']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_pagination_open', $_smarty_tpl->tpl_vars['show_pagination_open']->value ,false ,2);?>

    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                <?php $_smarty_tpl->_assignInScope('pagination_meta', " paginate-top");?>
    <?php }?>

    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <div class="cm-pagination-container<?php if ($_smarty_tpl->tpl_vars['pagination_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination_class']->value, ENT_QUOTES, 'UTF-8');
}?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
        <?php $_smarty_tpl->_assignInScope('min_per_page_range', min($_smarty_tpl->tpl_vars['pagination']->value['per_page_range']));?>

        <?php if ($_smarty_tpl->tpl_vars['save_current_page']->value) {?>
            <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) (($tmp = (($tmp = $_smarty_tpl->tpl_vars['search']->value['page'] ?? null)===null||$tmp==='' ? $_REQUEST['page'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['save_current_url']->value) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['disable_history']->value) {?>
            <?php $_smarty_tpl->_assignInScope('history_class', " cm-history");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('history_class', " cm-ajax-cache");?>
        <?php }?>
        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') !== "Y" && $_smarty_tpl->tpl_vars['show_pagination_open']->value || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') === "Y") {?>
            <div class="pagination-wrap clearfix">

                                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_items'] > $_smarty_tpl->tpl_vars['min_per_page_range']->value) {?>
                    <div class="pagination pagination-start">
                        <ul>
                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['current_page'] != "full_list" && $_smarty_tpl->tpl_vars['pagination']->value['total_pages'] > 0) {?>

                                                        <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>disabled<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>
                                        href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=1"), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="1"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-double-angle-left"),$_smarty_tpl);?>

                                </a>
                            </li>

                                                        <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>disabled<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>
                                        href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_page'])), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_page'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-angle-left"),$_smarty_tpl);?>

                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>

                                        <div class="pagination-dropdown">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['navi_pages'], 'pg', false, NULL, 'f_pg', array (
));
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>

                            <?php if ($_smarty_tpl->tpl_vars['pg']->value == $_smarty_tpl->tpl_vars['pagination']->value['current_page']) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_list", null, null);?>
                                <?php $_smarty_tpl->_assignInScope('range_url', fn_query_remove($_smarty_tpl->tpl_vars['c_url']->value,"items_per_page"));?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['per_page_range'], 'step');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
                                    <li>
                                        <a
                                            data-ca-scroll=".cm-pagination-container"
                                            class="cm-ajax<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-dropdown-per-page"
                                            href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['step']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                            data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->__("objects_per_page",array("[n]"=>$_smarty_tpl->tpl_vars['step']->value));?>

                                        </a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php $_smarty_tpl->_assignInScope('rnd', rand());?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"pagination_".((string)$_smarty_tpl->tpl_vars['rnd']->value),'caret'=>true,'hide_actions'=>true,'tools_list'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_list'),'link_text'=>$_smarty_tpl->__("pagination_range",array("[pagination.range_from]"=>$_smarty_tpl->tpl_vars['pagination']->value['range_from'],"[pagination.range_to]"=>$_smarty_tpl->tpl_vars['pagination']->value['range_to'],"[pagination.total_items]"=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),'override_meta'=>"pagination-selector",'skip_check_permissions'=>"true",'tool_meta'=>"pagination__btn-group ".((string)$_smarty_tpl->tpl_vars['pagination_meta']->value)), 0, true);
?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>

                                        <div class="pagination pagination-end">
                        <ul>
                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['current_page'] != "full_list" && $_smarty_tpl->tpl_vars['pagination']->value['total_pages'] > 0) {?>

                                                        <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>disabled<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>
                                        href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_page'])), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_page'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-angle-right"),$_smarty_tpl);?>

                                </a>
                            </li>

                                                        <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>disabled<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>
                                        href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['total_pages'])), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['total_pages'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-double-angle-right"),$_smarty_tpl);?>

                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['extra']->value) {?>
                    <div class="pagination__extra">
                        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

                    </div>
                <?php }?>

            </div>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>N<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php } elseif ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"common:pagination"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
