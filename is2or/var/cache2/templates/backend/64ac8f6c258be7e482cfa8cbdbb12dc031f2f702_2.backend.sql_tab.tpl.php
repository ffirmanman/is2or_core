<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:46:59
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/debugger/components/sql_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe1a3ae4d83_42308313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ac8f6c258be7e482cfa8cbdbb12dc031f2f702' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/debugger/components/sql_tab.tpl',
      1 => 1728377996,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/debugger/components/sorter.tpl' => 2,
    'backend:buttons/button.tpl' => 1,
  ),
),false)) {
function content_682fe1a3ae4d83_42308313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="deb-tab-content" id="DebugToolbarTabSQLContent">
    <?php $_smarty_tpl->_assignInScope('warnings', array());?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sql_tabs", null, null);?>
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLList">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sql_list_table", null, null);?>
        <div class="table-wrapper">
            <table class="deb-table" id="DebugToolbarSubTabSQLListTable">
                <caption>Queries
                    <small class="deb-font-gray">total time: <?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
 s.</small>
                </caption>
                <tr>
                    <th style="width: 35px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>"debugger.sql",'text'=>"№",'field'=>"number",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabSQLContent"), 0, false);
?></th>
                    <th>Query</th>
                    <th style="width: 60px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>"debugger.sql",'text'=>"Time",'field'=>"time",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabSQLContent"), 0, true);
?></th>
                    <th style="width: 70px;">Actions</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['list'], 'query', false, 'key');
$_smarty_tpl->tpl_vars['query']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->tpl_vars['query']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light-red");?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['warnings']) ? $_smarty_tpl->tpl_vars['warnings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['list'] = true;
$_smarty_tpl->_assignInScope('warnings', $_tmp_array);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light2-red");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('color', false);?>
                    <?php }?>
                    <tr>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="<?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>">
                                <pre><code><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre>
                                <ul class="deb-backtrace"
                                    data-ca-query-backtrace="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <h4>Backtrace</h4>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['query']->value['backtrace'], 'backtrace_item');
$_smarty_tpl->tpl_vars['backtrace_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['backtrace_item']->value) {
$_smarty_tpl->tpl_vars['backtrace_item']->do_else = false;
?>
                                        <li class="deb-backtrace__item">
                                            <code class="deb-backtrace-item_who"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['backtrace_item']->value['who'], ENT_QUOTES, 'UTF-8');?>
</code>
                                            <span class="deb-backtrace-item_where"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['backtrace_item']->value['where'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="deb-table__actions-cell">
                            <a href="<?php echo htmlspecialchars((string) fn_url("debugger.sql_parse?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)."&sql_id=".((string)$_smarty_tpl->tpl_vars['key']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarSubTabSQLParse" class="cm-ajax cm-ajax-cache query deb-table__action-link">Re-run</a>
                            <a href="#" data-ca-query-backtrace-trigger="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="deb-table__action-link">Backtrace</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->tpl_vars['warnings']->value['list']) {?>
            <p class="deb-notice">
                <strong>Warning</strong>
                Some queries are taking longer than <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['long_query_time']->value, ENT_QUOTES, 'UTF-8');?>
 seconds to execute
            </p>
        <?php }?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sql_list_table');?>

    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLCount">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sql_count_table", null, null);?>
        <div class="table-wrapper">
            <table class="deb-table">
                <caption>Queries
                    <small class="deb-font-gray">max count: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['totals']['rcount'], ENT_QUOTES, 'UTF-8');?>
</small>
                </caption>
                <tr>
                    <th>Query</th>
                    <th>Count</th>
                    <th>Min time</th>
                    <th>Max time</th>
                    <th>Average time</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['count'], 'query');
$_smarty_tpl->tpl_vars['query']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->tpl_vars['query']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['count'] > 1) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light-red");?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['warnings']) ? $_smarty_tpl->tpl_vars['warnings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['count'] = true;
$_smarty_tpl->_assignInScope('warnings', $_tmp_array);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('color', false);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('average_time', $_smarty_tpl->tpl_vars['query']->value['total_time']/$_smarty_tpl->tpl_vars['query']->value['count_time']);?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['query']->value['backtrace']) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['query']->value['backtrace'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>">
                            <pre><code><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre>
                        </td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 60px;"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['query']->value['count'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 60px;"><strong><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['query']->value['min_time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 60px;"><strong><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['query']->value['max_time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 120px;"><strong><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['average_time']->value,"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->tpl_vars['warnings']->value['count']) {?>
            <p class="deb-notice">
                <strong>Warning</strong>
                Some queries are being executed multiple times
            </p>
        <?php }?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sql_count_table');?>

    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLParse">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax" id="DebugToolbarSqlParce">
            <input type="hidden" name="result_ids" value="DebugToolbarSubTabSQLParse" />
            <input type="hidden" name="dispatch[debugger.sql_parse]" value="save" />
            <input type="hidden" name="exec" value="N" />
            <div class="table-wrapper">
                <table width="100%">
                    <tr>
                        <td colspan="2"><textarea cols="100" rows="20" name="query"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 100px; padding-top: 10px;"><?php $_smarty_tpl->_subTemplateRender("backend:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>"Send",'but_id'=>"DebugToolbarSubTabSQLParseSubmit",'id'=>"DebugToolbarSubTabSQLParseSubmit",'but_name'=>"submit",'but_role'=>"submit",'but_meta'=>"btn-primary"), 0, false);
?></td>
                        <td valign="middle">
                            <label><input type="checkbox" name="exec" value="Y" checked="checked" /> Sandbox</label>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabSQLList">Queries list<?php if ($_smarty_tpl->tpl_vars['warnings']->value['list']) {?> <span class="deb-warning">!</span><?php }?></a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabSQLCount">Queries count<?php if ($_smarty_tpl->tpl_vars['warnings']->value['count']) {?> <span class="deb-warning">!</span><?php }?></a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabSQLParse">Queries parse</a></li>
        </ul>
    </div>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sql_tabs');?>

    <!--DebugToolbarTabSQLContent--></div>
<?php }
}
