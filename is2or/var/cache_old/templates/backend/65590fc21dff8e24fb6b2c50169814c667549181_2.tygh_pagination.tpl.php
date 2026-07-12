<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467929e3f7_53107113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65590fc21dff8e24fb6b2c50169814c667549181' => 
    array (
      0 => 'common/pagination.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tools.tpl' => 1,
  ),
))) {
function content_69ae467929e3f7_53107113 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('objects_per_page','pagination_range'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:pagination"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

    <?php $_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('div_id') ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')((($tmp = $_smarty_tpl->getValue('current_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp),"page"), false, NULL);?>
    <?php $_smarty_tpl->assign('pagination', $_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_pagination')($_smarty_tpl->getValue('search')), false, NULL);?>
    <?php $_smarty_tpl->assign('show_pagination_open', (($tmp = $_smarty_tpl->getValue('show_pagination_open') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('show_pagination_open', $_smarty_tpl->getValue('show_pagination_open'), false, 2);?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                <?php $_smarty_tpl->assign('pagination_meta', " paginate-top", false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <div class="cm-pagination-container<?php if ($_smarty_tpl->getValue('pagination_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination_class')), ENT_QUOTES, 'UTF-8');
}?>" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->getValue('pagination')) {?>
        <?php $_smarty_tpl->assign('min_per_page_range', $_smarty_tpl->getSmarty()->getModifierCallback('min')($_smarty_tpl->getValue('pagination')['per_page_range']), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('save_current_page')) {?>
            <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) ((($tmp = (($tmp = $_smarty_tpl->getValue('search')['page'] ?? null)===null||$tmp==='' ? $_REQUEST['page'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_smarty_tpl->getValue('save_current_url')) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if (!$_smarty_tpl->getValue('disable_history')) {?>
            <?php $_smarty_tpl->assign('history_class', " cm-history", false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('history_class', " cm-ajax-cache", false, NULL);?>
        <?php }?>
        <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') !== "Y" && $_smarty_tpl->getValue('show_pagination_open') || $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') === "Y") {?>
            <div class="pagination-wrap clearfix">

                                <?php if ($_smarty_tpl->getValue('pagination')['total_items'] > $_smarty_tpl->getValue('min_per_page_range')) {?>
                    <div class="pagination pagination-start">
                        <ul>
                        <?php if ($_smarty_tpl->getValue('pagination')['current_page'] != "full_list" && $_smarty_tpl->getValue('pagination')['total_pages'] > 0) {?>

                                                        <li class="<?php if (!$_smarty_tpl->getValue('pagination')['prev_page']) {?>disabled<?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=1")), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="1"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon icon-double-angle-left"), $_smarty_tpl);?>

                                </a>
                            </li>

                                                        <li class="<?php if (!$_smarty_tpl->getValue('pagination')['prev_page']) {?>disabled<?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['prev_page']))), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_page']), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon icon-angle-left"), $_smarty_tpl);?>

                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>

                                        <div class="pagination-dropdown">

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pagination')['navi_pages'], 'pg', false, NULL, 'f_pg', array (
));
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pg')->value) {
$foreach10DoElse = false;
?>

                            <?php if ($_smarty_tpl->getValue('pg') == $_smarty_tpl->getValue('pagination')['current_page']) {?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "pagination_list", null, null);?>
                                <?php $_smarty_tpl->assign('range_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('c_url'),"items_per_page"), false, NULL);?>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pagination')['per_page_range'], 'step');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step')->value) {
$foreach11DoElse = false;
?>
                                    <li>
                                        <a
                                            data-ca-scroll=".cm-pagination-container"
                                            class="cm-ajax<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
 pagination-dropdown-per-page"
                                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&items_per_page=".((string)$_smarty_tpl->getValue('step')))), ENT_QUOTES, 'UTF-8');?>
"
                                            data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("objects_per_page", array("[n]"=>$_smarty_tpl->getValue('step')), $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </a>
                                    </li>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                            <?php $_smarty_tpl->assign('rnd', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"pagination_".((string)$_smarty_tpl->getValue('rnd')),'caret'=>true,'hide_actions'=>true,'tools_list'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_list'),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("pagination_range", array("[pagination.range_from]"=>$_smarty_tpl->getValue('pagination')['range_from'],"[pagination.range_to]"=>$_smarty_tpl->getValue('pagination')['range_to'],"[pagination.total_items]"=>$_smarty_tpl->getValue('pagination')['total_items']), $_smarty_tpl->getSmarty()->getLanguage()),'override_meta'=>"pagination-selector",'skip_check_permissions'=>"true",'tool_meta'=>"pagination__btn-group ".((string)$_smarty_tpl->getValue('pagination_meta'))), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>

                                        <div class="pagination pagination-end">
                        <ul>
                        <?php if ($_smarty_tpl->getValue('pagination')['current_page'] != "full_list" && $_smarty_tpl->getValue('pagination')['total_pages'] > 0) {?>

                                                        <li class="<?php if (!$_smarty_tpl->getValue('pagination')['next_page']) {?>disabled<?php }
echo $_smarty_tpl->getValue('history_class');?>
 pagination-item">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['next_page']))), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_page']), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon icon-angle-right"), $_smarty_tpl);?>

                                </a>
                            </li>

                                                        <li class="<?php if (!$_smarty_tpl->getValue('pagination')['next_page']) {?>disabled<?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>cm-ajax<?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('history_class')), ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['total_pages']))), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['total_pages']), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon icon-double-angle-right"), $_smarty_tpl);?>

                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>
                <?php }?>
                
                <?php if ($_smarty_tpl->getValue('extra')) {?>
                    <div class="pagination__extra">
                        <?php echo $_smarty_tpl->getValue('extra');?>

                    </div>
                <?php }?>

            </div>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
        <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "pagination_open", null, null);?>N<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } elseif ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "pagination_open", null, null);?>Y<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:pagination"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
