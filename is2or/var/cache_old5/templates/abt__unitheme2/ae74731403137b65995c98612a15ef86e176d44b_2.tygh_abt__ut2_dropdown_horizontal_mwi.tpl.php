<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:56
  from 'tygh:blocks/abt__ut2_dropdown_horizontal_mwi.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6c788b68_95176000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae74731403137b65995c98612a15ef86e176d44b' => 
    array (
      0 => 'blocks/abt__ut2_dropdown_horizontal_mwi.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/menu/components/horizontal/".((string)((($tmp = $_smarty_tpl->getValue(\'block\')[\'properties\'][\'abt__ut2_filling_type\'] ?? null)===null||$tmp===\'\' ? \'column_filling\' ?? null : $tmp))).".tpl' => 2,
  ),
))) {
function content_6a133f6c788b68_95176000 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks';
\Tygh\Languages\Helper::preloadLangVars(array('go_back','next','go_back','next'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<?php if ($_smarty_tpl->getValue('items')) {?><div class="ut2-h__menu ut2-menu<?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_long_names'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> multi-line-1st-item<?php }
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable4 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-m-slider<?php }?>" style="--ut2-horizontal-menu-block-height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_menu_min_height'] ?? null)===null||$tmp==='' ? 430 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;"><div class="ut2-h__menu__in"><?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?><a href="javascript:void(0);" onclick="$(this).next().toggleClass('view');$(this).toggleClass('open');" class="ut2-h__menu__burger<?php if ($_smarty_tpl->getValue('block')['properties']['open_on_sticky_panel_button'] === "Y") {?> cm-external-triggered<?php }?>"><i class="ut2-icon-outline-menu"></i></a><?php }
$_smarty_tpl->assign('settings_cols', $_smarty_tpl->getSmarty()->getModifierCallback('min')(6,(($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_columns_count'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), false, NULL);?><ul class="ut2-menu__list" style="--menu-columns: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings_cols')), ENT_QUOTES, 'UTF-8');?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item1', false, NULL, 'item1', array (
));
$foreach34DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item1')->value) {
$foreach34DoElse = false;
$_smarty_tpl->assign('item1_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item1'),$_smarty_tpl->getValue('block')['type']), false, NULL);
$_smarty_tpl->assign('unique_elm_id', "topmenu_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('block')['snapping_id'])."_".((string)($_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('item1_url')))), false, NULL);
$_smarty_tpl->assign('subitems_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]), false, NULL);
$_smarty_tpl->assign('show_second_level', $_smarty_tpl->getValue('block')['properties']['dropdown_second_level_elements'] && ($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')] || ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text'])), false, NULL);?><li class="ut2-menu__item<?php if (!$_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]) {?> item-1st-no-drop<?php }
if ($_smarty_tpl->getValue('item1')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['class']), ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')])), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('show_second_level') && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?><a class="ty-menu__item-toggle cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item1_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('item1_url') && $_smarty_tpl->getValue('item1')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> target="_blank"<?php }?> class="ut2-menu__link<?php if ($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]) {?> item-1st-has-childs<?php } elseif ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text']) {?> mwi-html<?php }?>"><span class="ut2-menu__link__in<?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon']) {?> item-icon<?php }?>"><?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'image_width'=>32,'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}?><span<?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_long_names'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> style="max-width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('block')['properties']['abt_menu_long_names_max_width']) ?? null)===null||$tmp==='' ? 100 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px"<?php }?> class="ut2-menu__link__text"><span class="ut2-menu__link__name"><?php echo $_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut1_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
<span class="arrow" style="border-color: <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background'] === "#ffffff") {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');
}?> transparent transparent transparent;"></span></span><?php }?>
                                </span>
                                <?php if ($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]) {?>
                                    <i class="ut2-icon-outline-expand_more"></i>
                                <?php }?>
	                        </span>
	                    </a>

                        <?php if ($_smarty_tpl->getValue('show_second_level') && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                            <div class="ut2-menu__submenu" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('unique_elm_id')), ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->assign('col_width', 100/$_smarty_tpl->getValue('settings_cols'), false, NULL);?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/menu/components/horizontal/".((string)((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_filling_type'] ?? null)===null||$tmp==='' ? 'column_filling' ?? null : $tmp))).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_top_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            </ul>

        </div>
    </div>
<?php }?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            abt__ut2_go_back: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_back", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
            abt__ut2_go_next: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable5 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_horizontal_menu_slider.js"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/abt__ut2_dropdown_horizontal_mwi.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/abt__ut2_dropdown_horizontal_mwi.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<?php if ($_smarty_tpl->getValue('items')) {?><div class="ut2-h__menu ut2-menu<?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_long_names'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> multi-line-1st-item<?php }
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable6 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-m-slider<?php }?>" style="--ut2-horizontal-menu-block-height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_menu_min_height'] ?? null)===null||$tmp==='' ? 430 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;"><div class="ut2-h__menu__in"><?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?><a href="javascript:void(0);" onclick="$(this).next().toggleClass('view');$(this).toggleClass('open');" class="ut2-h__menu__burger<?php if ($_smarty_tpl->getValue('block')['properties']['open_on_sticky_panel_button'] === "Y") {?> cm-external-triggered<?php }?>"><i class="ut2-icon-outline-menu"></i></a><?php }
$_smarty_tpl->assign('settings_cols', $_smarty_tpl->getSmarty()->getModifierCallback('min')(6,(($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_columns_count'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp)), false, NULL);?><ul class="ut2-menu__list" style="--menu-columns: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings_cols')), ENT_QUOTES, 'UTF-8');?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item1', false, NULL, 'item1', array (
));
$foreach35DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item1')->value) {
$foreach35DoElse = false;
$_smarty_tpl->assign('item1_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('item1'),$_smarty_tpl->getValue('block')['type']), false, NULL);
$_smarty_tpl->assign('unique_elm_id', "topmenu_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('block')['snapping_id'])."_".((string)($_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('item1_url')))), false, NULL);
$_smarty_tpl->assign('subitems_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]), false, NULL);
$_smarty_tpl->assign('show_second_level', $_smarty_tpl->getValue('block')['properties']['dropdown_second_level_elements'] && ($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')] || ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text'])), false, NULL);?><li class="ut2-menu__item<?php if (!$_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]) {?> item-1st-no-drop<?php }
if ($_smarty_tpl->getValue('item1')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['class']), ENT_QUOTES, 'UTF-8');
}?>" data-subitems-count="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')])), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('show_second_level') && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?><a class="ty-menu__item-toggle cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('item1_url') ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('item1_url') && $_smarty_tpl->getValue('item1')['new_window'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> target="_blank"<?php }?> class="ut2-menu__link<?php if ($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]) {?> item-1st-has-childs<?php } elseif ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__text']) {?> mwi-html<?php }?>"><span class="ut2-menu__link__in<?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon']) {?> item-icon<?php }?>"><?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'] && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'image_width'=>32,'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}?><span<?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_long_names'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> style="max-width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('block')['properties']['abt_menu_long_names_max_width']) ?? null)===null||$tmp==='' ? 100 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px"<?php }?> class="ut2-menu__link__text"><span class="ut2-menu__link__name"><?php echo $_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('name')];?>
</span><?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item1')['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background'] === "#ffffff") {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['abt__ut1_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
<span class="arrow" style="border-color: <?php if ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background'] === "#ffffff") {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');
}?> transparent transparent transparent;"></span></span><?php }?>
                                </span>
                                <?php if ($_smarty_tpl->getValue('item1')[$_smarty_tpl->getValue('childs')]) {?>
                                    <i class="ut2-icon-outline-expand_more"></i>
                                <?php }?>
	                        </span>
	                    </a>

                        <?php if ($_smarty_tpl->getValue('show_second_level') && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>
                            <div class="ut2-menu__submenu" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('unique_elm_id')), ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->assign('col_width', 100/$_smarty_tpl->getValue('settings_cols'), false, NULL);?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/menu/components/horizontal/".((string)((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_filling_type'] ?? null)===null||$tmp==='' ? 'column_filling' ?? null : $tmp))).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown_top_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            </ul>

        </div>
    </div>
<?php }?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            abt__ut2_go_back: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_back", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
            abt__ut2_go_next: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__menu_add_horizontal_scroll_sections'] ?? null)===null||$tmp==='' ? $_prefixVariable7 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_horizontal_menu_slider.js"), $_smarty_tpl);?>

<?php }
}
}
}
