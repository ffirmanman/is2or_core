<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:59:02
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/saved_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683457868679d6_46662070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29bb3fd3352ec82d666b94c9fe159f2d617cfe6b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/saved_search.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_683457868679d6_46662070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
\Tygh\Languages\Helper::preloadLangVars(array('saved_search','all','more','more','saved_search.set_as_non_default_confirm','saved_search.set_as_non_default','saved_search.set_as_default_confirm','saved_search.set_as_default','delete','custom_search','new_saved_search'));
$_smarty_tpl->_assignInScope('new_search', (($tmp = $_smarty_tpl->tpl_vars['allow_new_search']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('views', fn_get_views($_smarty_tpl->tpl_vars['view_type']->value));
$_smarty_tpl->_assignInScope('max_items', 4);
$_smarty_tpl->_assignInScope('return_current_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"view_id","new_view"));
$_smarty_tpl->_assignInScope('redirect_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"advanced_search:views"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"advanced_search:views"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
        <div class="sidebar-row" id="views">
            <h6><?php echo $_smarty_tpl->__("saved_search");?>
</h6>
            <ul class="nav nav-list saved-search">
                <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['search']->value['view_id'] && !$_smarty_tpl->tpl_vars['search']->value['temp_view']) {?>class="active"<?php }?>>
                        <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['dispatch']->value).".reset_view?".((string)$_smarty_tpl->tpl_vars['view_suffix']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("all");?>
</a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'view', false, NULL, 'views', array (
  'index' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_views']->value['index']++;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_views']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_views']->value['index'] : null) == $_smarty_tpl->tpl_vars['max_items']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('s_id', sprintf("saved_searches_%s",fn_crc32($_smarty_tpl->tpl_vars['dispatch']->value)));?>
                            <li>
                                <span class="more hand">
                                    <a id="on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapsed cm-combination cm-save-state link--monochrome <?php if ($_COOKIE[$_smarty_tpl->tpl_vars['s_id']->value]) {?>hidden<?php }?>">
                                        <?php echo $_smarty_tpl->__("more");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down",'class'=>"flex-inline top saved-search__more-icon"),$_smarty_tpl);?>

                                    </a>
                                    <a id="off_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination cm-save-state link--monochrome <?php if (!$_COOKIE[$_smarty_tpl->tpl_vars['s_id']->value]) {?>hidden<?php }?>">
                                        <?php echo $_smarty_tpl->__("more");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_up",'class'=>"flex-inline top saved-search__more-icon"),$_smarty_tpl);?>

                                    </a>
                                </span>
                            </li>
                            <li id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_COOKIE[$_smarty_tpl->tpl_vars['s_id']->value]) {?>hidden<?php }?>">
                                <ul class="nav nav-list">
                        <?php }?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['view']->value['view_id'] == $_smarty_tpl->tpl_vars['search']->value['view_id']) {?>active<?php }?> saved-search__item">
                            <a class="cm-view-name saved-search__item-name
                            <?php if ($_smarty_tpl->tpl_vars['last_view_current_object_schema']->value['allow_default_view']) {?>
                                saved-search__item-name--default-view
                            <?php }?>
                            "
                                data-ca-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
"
                                href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['dispatch']->value)."?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id']).((string)$_smarty_tpl->tpl_vars['view_additional_parameters']->value)."&".((string)$_smarty_tpl->tpl_vars['view_suffix']->value)), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['name'], ENT_QUOTES, 'UTF-8');?>

                            </a>

                            <?php if ($_smarty_tpl->tpl_vars['last_view_current_object_schema']->value['allow_default_view']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['view']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) {?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['dispatch']->value).".unset_default_view?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-confirm cm-tooltip nav-list__btn saved-search__pin saved-search__pin--pinned"
                                        <?php echo smarty_modifier_render_tag_attrs((array("data-ca-confirm-text"=>$_smarty_tpl->__("saved_search.set_as_non_default_confirm",array("[name]"=>$_smarty_tpl->tpl_vars['view']->value['name'])),"title"=>$_smarty_tpl->__("saved_search.set_as_non_default"))));?>

                                    >
                                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"pushpin",'class'=>"flex-inline"),$_smarty_tpl);?>

                                    </a>
                                <?php } else { ?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['dispatch']->value).".set_default_view?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-confirm cm-tooltip nav-list__btn saved-search__pin saved-search__pin saved-search__pin--unpinned"
                                        <?php echo smarty_modifier_render_tag_attrs((array("data-ca-confirm-text"=>$_smarty_tpl->__("saved_search.set_as_default_confirm",array("[name]"=>$_smarty_tpl->tpl_vars['view']->value['name'])),"title"=>$_smarty_tpl->__("saved_search.set_as_default"))));?>

                                    >
                                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"pushpin",'class'=>"flex-inline"),$_smarty_tpl);?>

                                    </a>
                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['new_search']->value) {?>
                                <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['dispatch']->value).".delete_view?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-confirm cm-tooltip nav-list__btn saved-search__delete"
                                    title="<?php echo $_smarty_tpl->__("delete");?>
"
                                >
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"trash",'class'=>"flex-inline"),$_smarty_tpl);?>

                                </a>
                            <?php }?>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php if ($_smarty_tpl->tpl_vars['search']->value['temp_view']) {?>
                         <li class="active">
                             <a href="#"><?php echo $_smarty_tpl->__("custom_search");?>
</a>
                         </li>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_views']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_views']->value['total'] : null) > $_smarty_tpl->tpl_vars['max_items']->value) {?>
                            </ul>
                        </li>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['new_search']->value) {?>
                    <li class="last">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("new_saved_search"),'but_role'=>"text",'but_meta'=>"text-button cm-dialog-opener",'but_target_id'=>"adv_search"), 0, false);
?>
                    </li>
                <?php }?>
            </ul>
        </div>
        <hr>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"advanced_search:views"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
