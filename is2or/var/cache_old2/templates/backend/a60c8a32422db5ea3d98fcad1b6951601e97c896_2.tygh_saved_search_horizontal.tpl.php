<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:common/saved_search_horizontal.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af770e16_98890673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60c8a32422db5ea3d98fcad1b6951601e97c896' => 
    array (
      0 => 'common/saved_search_horizontal.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1af770e16_98890673 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('all','saved_search.set_as_non_default_confirm','saved_search.set_as_non_default','saved_search.set_as_default_confirm','saved_search.set_as_default','delete','custom_search','saved_search.more_short'));
if ($_smarty_tpl->getValue('saved_search') && $_smarty_tpl->getValue('saved_search')['dispatch'] && $_smarty_tpl->getValue('view_type')) {?>
    
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/saved_search_horizontal.js"), $_smarty_tpl);?>


    <?php $_smarty_tpl->assign('new_search', (($tmp = $_smarty_tpl->getValue('saved_search')['allow_new_search'] ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('views', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_views')($_smarty_tpl->getValue('view_type')), false, NULL);?>
    <?php $_smarty_tpl->assign('return_current_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"view_id","new_view"), false, NULL);?>
    <?php $_smarty_tpl->assign('redirect_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

        <?php $_smarty_tpl->assign('saved_search_count_threshold_difference', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['saved_search']['count_threshold_difference'] ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('saved_search_count_threshold_xl', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['saved_search']['count_threshold_xl'] ?? null)===null||$tmp==='' ? 9 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('saved_search_count_threshold_xxl', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['saved_search']['count_threshold_xxl'] ?? null)===null||$tmp==='' ? 11 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('saved_search_count_threshold_xxxl', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['saved_search']['count_threshold_xxxl'] ?? null)===null||$tmp==='' ? 13 ?? null : $tmp), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('is_compact_view')) {?>
        <?php $_smarty_tpl->assign('saved_search_count_threshold_xl', $_smarty_tpl->getValue('saved_search_count_threshold_xl')-$_smarty_tpl->getValue('saved_search_count_threshold_difference'), false, NULL);?>
        <?php $_smarty_tpl->assign('saved_search_count_threshold_xxl', $_smarty_tpl->getValue('saved_search_count_threshold_xxl')-$_smarty_tpl->getValue('saved_search_count_threshold_difference'), false, NULL);?>
        <?php $_smarty_tpl->assign('saved_search_count_threshold_xxxl', $_smarty_tpl->getValue('saved_search_count_threshold_xxxl')-$_smarty_tpl->getValue('saved_search_count_threshold_difference'), false, NULL);?>
    <?php }?>
        <?php $_smarty_tpl->assign('saved_search_count_threshold_xl', $_smarty_tpl->getValue('saved_search_count_threshold_xl')-1, false, NULL);?>
    <?php $_smarty_tpl->assign('saved_search_count_threshold_xxl', $_smarty_tpl->getValue('saved_search_count_threshold_xxl')-1, false, NULL);?>
    <?php $_smarty_tpl->assign('saved_search_count_threshold_xxxl', $_smarty_tpl->getValue('saved_search_count_threshold_xxxl')-1, false, NULL);?>
    
    <?php $_smarty_tpl->assign('saved_search_btn_group_class', '', false, NULL);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('views')) > $_smarty_tpl->getValue('saved_search_count_threshold_xxxl')) {?>
                <?php $_smarty_tpl->assign('saved_search_btn_group_class', "saved-search__btn-group--xxxxl", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('views')) > $_smarty_tpl->getValue('saved_search_count_threshold_xxl')) {?>
        <?php $_smarty_tpl->assign('saved_search_btn_group_class', "saved-search__btn-group--xxxl", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('views')) > $_smarty_tpl->getValue('saved_search_count_threshold_xl')) {?>
        <?php $_smarty_tpl->assign('saved_search_btn_group_class', "saved-search__btn-group--xxl", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('views')) > 0) {?>
        <?php $_smarty_tpl->assign('saved_search_btn_group_class', "saved-search__btn-group--xl", false, NULL);?>
    <?php }?>

        <?php $_smarty_tpl->assign('views_prepare', $_smarty_tpl->getValue('views'), false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('views_prepare'), 'view_prepare', false, 'view_prepare_key');
$_smarty_tpl->getVariable('view_prepare')->index = -1;
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('view_prepare_key')->value => $_smarty_tpl->getVariable('view_prepare')->value) {
$foreach25DoElse = false;
$_smarty_tpl->getVariable('view_prepare')->index++;
$foreach25Backup = clone $_smarty_tpl->getVariable('view_prepare');
?>
        <?php $_tmp_array = $_smarty_tpl->getValue('views_prepare') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('view_prepare_key')]['index'] = $_smarty_tpl->getVariable('view_prepare')->index;
$_smarty_tpl->assign('views_prepare', $_tmp_array, false, NULL);?>
    <?php
$_smarty_tpl->setVariable('view_prepare', $foreach25Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->assign('search_iteration', ($_smarty_tpl->getValue('views_prepare')[$_smarty_tpl->getValue('search')['view_id']]['index']+1), false, NULL);?>

    <div class="pills">
        <ul class="nav nav-pills saved-search-horizontal" data-ca-saved-search-horizontal="nav">
            <li class="saved-search__item saved-search__item--horizontal
                <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('search')['view_id']) && !$_smarty_tpl->getValue('search')['temp_view']) {?>active<?php }?>" data-ca-saved-search-horizontal="item">
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('saved_search')['dispatch']).".reset_view?".((string)$_smarty_tpl->getValue('view_suffix')));?>
" class="saved-search__item-name saved-search__item-name--horizontal"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </li>
            <?php if ($_smarty_tpl->getValue('views')) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('views'), 'view', false, NULL, 'views', array (
));
$_smarty_tpl->getVariable('view')->iteration = 0;
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('view')->value) {
$foreach26DoElse = false;
$_smarty_tpl->getVariable('view')->iteration++;
$foreach26Backup = clone $_smarty_tpl->getVariable('view');
?>
                    <?php $_smarty_tpl->assign('saved_search_item_class', '', false, NULL);?>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('view')['view_id']) !== $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('search')['view_id'])) {?>
                        <?php if ($_smarty_tpl->getVariable('view')->iteration > (($_smarty_tpl->getValue('search_iteration') > $_smarty_tpl->getValue('saved_search_count_threshold_xxxl')) ? ($_smarty_tpl->getValue('saved_search_count_threshold_xxxl')-1) : $_smarty_tpl->getValue('saved_search_count_threshold_xxxl'))) {?>
                            <?php $_smarty_tpl->assign('saved_search_item_class', ((string)$_smarty_tpl->getValue('saved_search_item_class'))." saved-search__item--visible-xxxl", false, NULL);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('view')->iteration > (($_smarty_tpl->getValue('search_iteration') > $_smarty_tpl->getValue('saved_search_count_threshold_xxl')) ? ($_smarty_tpl->getValue('saved_search_count_threshold_xxl')-1) : $_smarty_tpl->getValue('saved_search_count_threshold_xxl'))) {?>
                            <?php $_smarty_tpl->assign('saved_search_item_class', ((string)$_smarty_tpl->getValue('saved_search_item_class'))." saved-search__item--visible-xxl", false, NULL);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('view')->iteration > (($_smarty_tpl->getValue('search_iteration') > $_smarty_tpl->getValue('saved_search_count_threshold_xl')) ? ($_smarty_tpl->getValue('saved_search_count_threshold_xl')-1) : $_smarty_tpl->getValue('saved_search_count_threshold_xl'))) {?>
                            <?php $_smarty_tpl->assign('saved_search_item_class', ((string)$_smarty_tpl->getValue('saved_search_item_class'))." saved-search__item--visible-xl", false, NULL);?>
                        <?php }?>
                    <?php }?>

                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('view')['view_id']) === $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('search')['view_id']) && ($_smarty_tpl->getValue('last_view_current_object_schema')['allow_default_view'] || $_smarty_tpl->getValue('new_search'))) {?>
                    <li class="dropdown active saved-search__item saved-search__item--horizontal <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('saved_search_item_class')), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-saved-search-horizontal="item">
                        <a class="cm-view-name dropdown-toggle saved-search__item-name saved-search__item-name--horizontal"
                            href="#"
                            data-toggle="dropdown"
                            data-ca-saved-search-horizontal-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['view_id']), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['name']), ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['name']), ENT_QUOTES, 'UTF-8');?>
 <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if ($_smarty_tpl->getValue('last_view_current_object_schema')['allow_default_view']) {?>
                                <li>
                                    <?php if ($_smarty_tpl->getValue('view')['is_default'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('saved_search')['dispatch']).".unset_default_view?view_id=".((string)$_smarty_tpl->getValue('view')['view_id'])."&redirect_url=".((string)$_smarty_tpl->getValue('redirect_current_url')))), ENT_QUOTES, 'UTF-8');?>
"
                                            class="cm-confirm"
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')((array("data-ca-confirm-text"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_non_default_confirm", array("[name]"=>$_smarty_tpl->getValue('view')['name']), $_smarty_tpl->getSmarty()->getLanguage()))));?>

                                        >
                                            <span class="flex-inline top">
                                                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-pushpin"), $_smarty_tpl);?>

                                            </span>
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_non_default", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </a>
                                    <?php } else { ?>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('saved_search')['dispatch']).".set_default_view?view_id=".((string)$_smarty_tpl->getValue('view')['view_id'])."&redirect_url=".((string)$_smarty_tpl->getValue('redirect_current_url')))), ENT_QUOTES, 'UTF-8');?>
"
                                            class="cm-confirm"
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')((array("data-ca-confirm-text"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_default_confirm", array("[name]"=>$_smarty_tpl->getValue('view')['name']), $_smarty_tpl->getSmarty()->getLanguage()))));?>

                                        >
                                            <span class="flex-inline top">
                                                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-pushpin"), $_smarty_tpl);?>

                                            </span>
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.set_as_default", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </a>
                                    <?php }?>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('new_search')) {?>
                                <li>
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('saved_search')['dispatch']).".delete_view?view_id=".((string)$_smarty_tpl->getValue('view')['view_id'])."&redirect_url=".((string)$_smarty_tpl->getValue('redirect_current_url')))), ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-confirm text-error"
                                    >
                                        <span class="flex-inline top">
                                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-trash"), $_smarty_tpl);?>

                                        </span>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </li>
                                        <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('view')['view_id']) === $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('search')['view_id'])) {?>
                    <li class="active saved-search__item saved-search__item--horizontal <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('saved_search_item_class')), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-saved-search-horizontal="item">
                        <a class="cm-view-name saved-search__item-name"
                            href="#"
                            data-ca-saved-search-horizontal-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['view_id']), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['name']), ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['name']), ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </li>
                    <?php } else { ?>
                                        <li class="saved-search__item saved-search__item--horizontal <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('saved_search_item_class')), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-saved-search-horizontal="item">
                        <a class="cm-view-name saved-search__item-name saved-search__item-name--horizontal"
                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('saved_search')['dispatch'])."?view_id=".((string)$_smarty_tpl->getValue('view')['view_id']).((string)$_smarty_tpl->getValue('view_additional_parameters'))."&".((string)$_smarty_tpl->getValue('view_suffix')))), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['view_id']), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['name']), ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['name']), ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </li>
                    <?php }?>
                <?php
$_smarty_tpl->setVariable('view', $foreach26Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>

                        <?php if ($_smarty_tpl->getValue('search')['temp_view']) {?>
                <li class="saved-search__item saved-search__item--horizontal active <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('saved_search_item_class')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-saved-search-horizontal="item">
                    <a href="#"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                </li>
            <?php }?>

                        <?php if ($_smarty_tpl->getValue('views')) {?>
                <li class="btn-group saved-search__btn-group <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('saved_search_btn_group_class')), ENT_QUOTES, 'UTF-8');?>
">
                    <a class="saved-search__item-name--horizontal saved-search__item-name--more dropdown-toggle" data-toggle="dropdown">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("saved_search.more_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <span class="caret"></span>
                    </a>
                    <ul id="tools_list_saved_search_horizontal" class="dropdown-menu cm-smart-position">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('views'), 'view');
$_smarty_tpl->getVariable('view')->iteration = 0;
$foreach27DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('view')->value) {
$foreach27DoElse = false;
$_smarty_tpl->getVariable('view')->iteration++;
$foreach27Backup = clone $_smarty_tpl->getVariable('view');
?>
                            <?php $_smarty_tpl->assign('view_class', '', false, NULL);?>
                            <?php if ($_smarty_tpl->getVariable('view')->iteration === $_smarty_tpl->getValue('search_iteration')) {?>
                                <?php $_smarty_tpl->assign('view_class', ((string)$_smarty_tpl->getValue('view_class'))." hidden", false, NULL);?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->getVariable('view')->iteration <= (($_smarty_tpl->getValue('search_iteration') > $_smarty_tpl->getValue('saved_search_count_threshold_xxxl')) ? ($_smarty_tpl->getValue('saved_search_count_threshold_xxxl')-1) : $_smarty_tpl->getValue('saved_search_count_threshold_xxxl'))) {?>
                                    <?php $_smarty_tpl->assign('view_class', ((string)$_smarty_tpl->getValue('view_class'))." saved-search__dropdown-item--hidden-xxxl", false, NULL);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('view')->iteration <= (($_smarty_tpl->getValue('search_iteration') > $_smarty_tpl->getValue('saved_search_count_threshold_xxl')) ? ($_smarty_tpl->getValue('saved_search_count_threshold_xxl')-1) : $_smarty_tpl->getValue('saved_search_count_threshold_xxl'))) {?>
                                    <?php $_smarty_tpl->assign('view_class', ((string)$_smarty_tpl->getValue('view_class'))." saved-search__dropdown-item--hidden-xxl", false, NULL);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('view')->iteration <= (($_smarty_tpl->getValue('search_iteration') > $_smarty_tpl->getValue('saved_search_count_threshold_xl')) ? ($_smarty_tpl->getValue('saved_search_count_threshold_xl')-1) : $_smarty_tpl->getValue('saved_search_count_threshold_xl'))) {?>
                                    <?php $_smarty_tpl->assign('view_class', ((string)$_smarty_tpl->getValue('view_class'))." saved-search__dropdown-item--hidden-xl", false, NULL);?>
                                <?php }?>
                            <?php }?>

                            <li class="saved-search__dropdown-item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('view_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('view')['view_id']) === $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('search')['view_id'])) {?>active<?php }?> <?php if ($_smarty_tpl->getValue('view')['wrapper_class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('view')['wrapper_class']), ENT_QUOTES, 'UTF-8');
}?>">
                                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>(($tmp = $_smarty_tpl->getValue('view')['type'] ?? null)===null||$tmp==='' ? "list" ?? null : $tmp),'href'=>((string)$_smarty_tpl->getValue('saved_search')['dispatch'])."?view_id=".((string)$_smarty_tpl->getValue('view')['view_id']).((string)$_smarty_tpl->getValue('view_additional_parameters'))."&".((string)$_smarty_tpl->getValue('view_suffix')),'text'=>$_smarty_tpl->getValue('view')['name'],'title'=>$_smarty_tpl->getValue('view')['description'],'id'=>$_smarty_tpl->getValue('view')['id'],'method'=>$_smarty_tpl->getValue('view')['method'],'target'=>$_smarty_tpl->getValue('view')['target'],'process'=>$_smarty_tpl->getValue('view')['process'],'class'=>($_smarty_tpl->getValue('view')['meta']) ? "saved-search__dropdown-item-name ".((string)$_smarty_tpl->getValue('view')['meta']) : "saved-search__dropdown-item-name",'form'=>$_smarty_tpl->getValue('view')['form'],'dispatch'=>$_smarty_tpl->getValue('view')['dispatch'],'data'=>array("data-ca-saved-search-horizontal-view-id"=>$_smarty_tpl->getValue('view')['view_id'],"data-ca-saved-search-horizontal-view-name"=>$_smarty_tpl->getValue('view')['name']),'onclick'=>$_smarty_tpl->getValue('view')['onclick'],'raw'=>$_smarty_tpl->getValue('view')['raw'],'icon'=>$_smarty_tpl->getValue('view')['icon']), true);?>

                            </li>
                        <?php
$_smarty_tpl->setVariable('view', $foreach27Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
            <?php }?>

                        <?php if ($_smarty_tpl->getValue('new_search')) {?>
                <li class="saved-search__item saved-search__item--horizontal saved-search__item--new"
                    data-ca-saved-search-horizontal="item">
                    <button type="button"
                        class="saved-search__item-name saved-search__item-name--horizontal saved-search__item-name--new"
                        data-ca-saved-search-horizontal="searchSave"
                    >
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-plus"), $_smarty_tpl);?>

                    </button>
                </li>
            <?php }?>
        </ul>
    </div>
<?php }
}
}
