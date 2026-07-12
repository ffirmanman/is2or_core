<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:04
  from 'tygh:common/saved_search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4678def103_86421208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df675931308ef5ab94f2dce4caf2b106d7e8ca7a' => 
    array (
      0 => 'common/saved_search.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69ae4678def103_86421208 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('saved_search','all','more','more','saved_search.set_as_non_default_confirm','saved_search.set_as_non_default','saved_search.set_as_default_confirm','saved_search.set_as_default','delete','custom_search','new_saved_search'));
$_smarty_tpl->assign('new_search', (($tmp = $_smarty_tpl->getValue('allow_new_search') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('views', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_views')($_smarty_tpl->getValue('view_type')), false, NULL);
$_smarty_tpl->assign('max_items', 4, false, NULL);
$_smarty_tpl->assign('return_current_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"view_id","new_view"), false, NULL);
$_smarty_tpl->assign('redirect_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"advanced_search:views"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('views')) {?>
        <div class="sidebar-row" id="views">
            <h6><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h6>
            <ul class="nav nav-list saved-search">
                <?php if ($_smarty_tpl->getValue('views')) {?>
                    <li <?php if (!$_smarty_tpl->getValue('search')['view_id'] && !$_smarty_tpl->getValue('search')['temp_view']) {?>class="active"<?php }?>>
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('dispatch')).".reset_view?".((string)$_smarty_tpl->getValue('view_suffix')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    </li>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('views'), 'view', false, NULL, 'views', array (
  'index' => true,
  'total' => true,
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('view')->value) {
$foreach3DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_views']->value['index']++;
?>
                        <?php if (($_smarty_tpl->getValue('__smarty_foreach_views')['index'] ?? null) == $_smarty_tpl->getValue('max_items')) {?>
                            <?php $_smarty_tpl->assign('s_id', sprintf("saved_searches_%s",$_smarty_tpl->getSmarty()->getModifierCallback('fn_crc32')($_smarty_tpl->getValue('dispatch'))), false, NULL);?>
                            <li>
                                <span class="more hand">
                                    <a id="on_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('s_id')), ENT_QUOTES, 'UTF-8');?>
" class="collapsed cm-combination cm-save-state link--monochrome <?php if ($_COOKIE[$_smarty_tpl->getValue('s_id')]) {?>hidden<?php }?>">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"caret_down",'class'=>"flex-inline top saved-search__more-icon"), $_smarty_tpl);?>

                                    </a>
                                    <a id="off_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('s_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination cm-save-state link--monochrome <?php if (!$_COOKIE[$_smarty_tpl->getValue('s_id')]) {?>hidden<?php }?>">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"caret_up",'class'=>"flex-inline top saved-search__more-icon"), $_smarty_tpl);?>

                                    </a>
                                </span>
                            </li>
                            <li id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('s_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_COOKIE[$_smarty_tpl->getValue('s_id')]) {?>hidden<?php }?>">
                                <ul class="nav nav-list">
                        <?php }?>
                        <li class="<?php if ($_smarty_tpl->getValue('view')['view_id'] == $_smarty_tpl->getValue('search')['view_id']) {?>active<?php }?> saved-search__item">
                            <a class="cm-view-name saved-search__item-name
                            <?php if ($_smarty_tpl->getValue('last_view_current_object_schema')['allow_default_view']) {?>
                                saved-search__item-name--default-view
                            <?php }?>
                            "
                                data-ca-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['view_id']), ENT_QUOTES, 'UTF-8');?>
"
                                href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('dispatch'))."?view_id=".((string)$_smarty_tpl->getValue('view')['view_id']).((string)$_smarty_tpl->getValue('view_additional_parameters'))."&".((string)$_smarty_tpl->getValue('view_suffix')))), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['name']), ENT_QUOTES, 'UTF-8');?>

                            </a>

                            <?php if ($_smarty_tpl->getValue('last_view_current_object_schema')['allow_default_view']) {?>
                                <?php if ($_smarty_tpl->getValue('view')['is_default'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('dispatch')).".unset_default_view?view_id=".((string)$_smarty_tpl->getValue('view')['view_id'])."&redirect_url=".((string)$_smarty_tpl->getValue('redirect_current_url')))), ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-confirm cm-tooltip nav-list__btn saved-search__pin saved-search__pin--pinned"
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')((array("data-ca-confirm-text"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_non_default_confirm", array("[name]"=>$_smarty_tpl->getValue('view')['name']), $_smarty_tpl->getSmarty()->getLanguage()),"title"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_non_default", [], $_smarty_tpl->getSmarty()->getLanguage()))));?>

                                    >
                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"pushpin",'class'=>"flex-inline"), $_smarty_tpl);?>

                                    </a>
                                <?php } else { ?>
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('dispatch')).".set_default_view?view_id=".((string)$_smarty_tpl->getValue('view')['view_id'])."&redirect_url=".((string)$_smarty_tpl->getValue('redirect_current_url')))), ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-confirm cm-tooltip nav-list__btn saved-search__pin saved-search__pin saved-search__pin--unpinned"
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')((array("data-ca-confirm-text"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_default_confirm", array("[name]"=>$_smarty_tpl->getValue('view')['name']), $_smarty_tpl->getSmarty()->getLanguage()),"title"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_default", [], $_smarty_tpl->getSmarty()->getLanguage()))));?>

                                    >
                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"pushpin",'class'=>"flex-inline"), $_smarty_tpl);?>

                                    </a>
                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('new_search')) {?>
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('dispatch')).".delete_view?view_id=".((string)$_smarty_tpl->getValue('view')['view_id'])."&redirect_url=".((string)$_smarty_tpl->getValue('redirect_current_url')))), ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-confirm cm-tooltip nav-list__btn saved-search__delete"
                                    title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                                >
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"trash",'class'=>"flex-inline"), $_smarty_tpl);?>

                                </a>
                            <?php }?>
                        </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    <?php if ($_smarty_tpl->getValue('search')['temp_view']) {?>
                         <li class="active">
                             <a href="#"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                         </li>
                    <?php }?>

                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_views')['total'] ?? null) > $_smarty_tpl->getValue('max_items')) {?>
                            </ul>
                        </li>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('new_search')) {?>
                    <li class="last">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("new_saved_search", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"text",'but_meta'=>"text-button cm-dialog-opener",'but_target_id'=>"adv_search"), (int) 0, $_smarty_current_dir);
?>
                    </li>
                <?php }?>
            </ul>
        </div>
        <hr>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"advanced_search:views"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
