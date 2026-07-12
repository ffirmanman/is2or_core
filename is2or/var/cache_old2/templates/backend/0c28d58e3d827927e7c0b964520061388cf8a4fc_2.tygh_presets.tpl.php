<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:views/storefronts/components/picker/presets.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af6384f6_97098619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c28d58e3d827927e7c0b964520061388cf8a4fc' => 
    array (
      0 => 'views/storefronts/components/picker/presets.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/storefronts/components/picker/picker.tpl' => 1,
  ),
))) {
function content_69afb1af6384f6_97098619 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/storefronts/components/picker';
\Tygh\Languages\Helper::preloadLangVars(array('show_all_storefronts','all_storefronts_short','all_storefronts_short','select_storefront','show_all_storefronts_with_count','all_storefronts_short','all_storefronts_short','all_storefronts'));
$_smarty_tpl->assign('is_enabled', $_smarty_tpl->getValue('app')["storefront.switcher.is_enabled"], false, NULL);
$_smarty_tpl->assign('is_available_for_disaptch', $_smarty_tpl->getValue('app')['storefront.switcher.is_available_for_dispatch'], false, NULL);
$_smarty_tpl->assign('measurement_error_threshold', 2, false, NULL);
$_smarty_tpl->assign('measurement_error_secondary_threshold', 2*$_smarty_tpl->getValue('measurement_error_threshold'), false, NULL);
$_smarty_tpl->assign('storefront_image_max', 500, false, NULL);
$_smarty_tpl->assign('storefront_image_size', 64, false, NULL);?>

<?php $_smarty_tpl->assign('canvas_ratio', (56-2*2)/(36-2*2), false, NULL);?>

<?php if ($_smarty_tpl->getValue('is_enabled') && $_smarty_tpl->getValue('is_available_for_disaptch')) {?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')('MULTIVENDOR') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_is_allowed')($_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Licensing\Features::MULTIPLE_STOREFRONTS"))) {?>
        <?php $_smarty_tpl->assign('selected_storefront_id', (($tmp = $_smarty_tpl->getValue('selected_storefront_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["storefront.switcher.selected_storefront_id"] ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('storefront_switcher_param_name', (($tmp = $_smarty_tpl->getValue('storefront_switcher_param_name') ?? null)===null||$tmp==='' ? "s_storefront" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('storefront_switcher_data_name', "storefront_id", false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('selected_storefront_id', $_smarty_tpl->getValue('app')["storefront.switcher.selected_storefront_id"], false, NULL);?>
        <?php $_smarty_tpl->assign('storefront_switcher_param_name', "switch_company_id", false, NULL);?>
        <?php $_smarty_tpl->assign('storefront_switcher_data_name', "company_id", false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('show_all_storefront', (($tmp = $_smarty_tpl->getValue('show_all_storefront') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

    <?php $_smarty_tpl->assign('preset_data', $_smarty_tpl->getSmarty()->getModifierCallback('call_user_func')($_smarty_tpl->getValue('app')["storefront.switcher.preset_data.factory"],$_smarty_tpl->getValue('selected_storefront_id')), false, NULL);?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "storefronts_list", null, null);?>
        <?php if ($_smarty_tpl->getValue('show_all_storefront')) {?>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],((string)$_smarty_tpl->getValue('storefront_switcher_param_name'))."=0".((string)$_smarty_tpl->getValue('storefront_picker_link_suffix'))))), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link"
                title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_all_storefronts", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if (!$_smarty_tpl->getValue('selected_storefront_id')) {?>
                        storefront__picker-logo-wrapper--active
                    <?php }?>">
                    <div class="storefront__picker-logo-text
                        <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->getSmarty()->getModifierCallback("__")("all_storefronts_short", [], $_smarty_tpl->getSmarty()->getLanguage()), $tmp) > 3) {?>storefront__picker-logo-text--small<?php }?>
                        <?php if (!$_smarty_tpl->getValue('selected_storefront_id')) {?>storefront__picker-logo-text--active<?php }?>">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("all_storefronts_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </div>
                </div>
            </a>
        <?php }?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('preset_data')['storefronts'], 'storefront');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('storefront')->value) {
$foreach20DoElse = false;
?>
            <?php $_smarty_tpl->assign('_storefront_picker_logo_img_class', $_smarty_tpl->getValue('storefront_picker_logo_img_class'), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('storefront')['is_selected']) {?>
                <?php $_smarty_tpl->assign('storefront_picker_logo_img_class', "storefront__picker-logo-img--active ".((string)$_smarty_tpl->getValue('_storefront_picker_logo_img_class')), false, NULL);?>
            <?php }?>

                        <?php $_smarty_tpl->assign('logo_img_class', '', false, NULL);?>
            <?php if ($_smarty_tpl->getValue('storefront')['images']) {?>
                <?php $_smarty_tpl->assign('image_ratio', $_smarty_tpl->getValue('storefront')['images']['image_x']/$_smarty_tpl->getValue('storefront')['images']['image_y'], false, NULL);?>
                <?php if ($_smarty_tpl->getValue('image_ratio')/$_smarty_tpl->getValue('canvas_ratio') > $_smarty_tpl->getValue('measurement_error_secondary_threshold') || $_smarty_tpl->getValue('canvas_ratio')/$_smarty_tpl->getValue('image_ratio') > $_smarty_tpl->getValue('measurement_error_secondary_threshold')) {?>
                    <?php $_smarty_tpl->assign('logo_img_class', "storefront__picker-logo-img--xlong", false, NULL);?>
                <?php } elseif ($_smarty_tpl->getValue('image_ratio')/$_smarty_tpl->getValue('canvas_ratio') > $_smarty_tpl->getValue('measurement_error_threshold') || $_smarty_tpl->getValue('canvas_ratio')/$_smarty_tpl->getValue('image_ratio') > $_smarty_tpl->getValue('measurement_error_threshold')) {?>
                    <?php $_smarty_tpl->assign('logo_img_class', "storefront__picker-logo-img--long", false, NULL);?>
                <?php }?>
            <?php }?>
                        <?php $_smarty_tpl->assign('storefront_image_height', false, false, NULL);?>
            <?php if ($_smarty_tpl->getValue('storefront')['images']['image_x'] > $_smarty_tpl->getValue('storefront_image_max') || $_smarty_tpl->getValue('storefront')['images']['image_y'] > $_smarty_tpl->getValue('storefront_image_max')) {?>
                <?php $_smarty_tpl->assign('storefront_image_height', $_smarty_tpl->getValue('storefront_image_size'), false, NULL);?>
            <?php }?>

            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],((string)$_smarty_tpl->getValue('storefront_switcher_param_name'))."=".((string)$_smarty_tpl->getValue('storefront')[$_smarty_tpl->getValue('storefront_switcher_data_name')]).((string)$_smarty_tpl->getValue('storefront_picker_link_suffix'))))), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link <?php if ($_smarty_tpl->getValue('storefront')['is_selected']) {?>storefront__picker-logo-link--active<?php }?>"
                title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_storefront", array("[store]"=>$_smarty_tpl->getValue('storefront')['name']), $_smarty_tpl->getSmarty()->getLanguage());?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if ($_smarty_tpl->getValue('storefront')['is_selected']) {?>storefront__picker-logo-wrapper--active<?php }?>">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/image.tpl",'image'=>$_smarty_tpl->getValue('storefront')['images'],'image_height'=>$_smarty_tpl->getValue('storefront_image_height'),'image_css_class'=>"storefront__picker-logo-img storefront__picker-logo-img--inactive ".((string)$_smarty_tpl->getValue('storefront_picker_logo_img_class'))." ".((string)$_smarty_tpl->getValue('logo_img_class')),'show_detailed_link'=>false), $_smarty_tpl);?>

                </div>
            </a>
            <?php if ($_smarty_tpl->getValue('storefront')['is_selected']) {?>
                <?php $_smarty_tpl->assign('storefront_picker_logo_img_class', $_smarty_tpl->getValue('_storefront_picker_logo_img_class'), false, NULL);?>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->getValue('runtime')['is_multiple_storefronts']) {?>
        <div class="storefront__picker-logo-list js-storefront-switcher"
            data-ca-switcher-param-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('storefront_switcher_param_name')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-switcher-data-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('storefront_switcher_data_name')), ENT_QUOTES, 'UTF-8');?>
">

            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'storefronts_list');?>

            <div class="dropdown storefront__picker-dropdown <?php if ($_smarty_tpl->getValue('runtime')['storefronts_count'] > $_smarty_tpl->getValue('preset_data')['threshold']) {?>storefront__picker-dropdown--threshold<?php }?>">
                <a class="dropdown-toggle storefront__picker-logo-link storefront__picker-logo-link--dropdown-toggle"
                    data-toggle="dropdown"
                    data-ca-dropdown-object-picker-autoopen=".object-picker__select--storefronts"
                    title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_all_storefronts_with_count", array("[count]"=>$_smarty_tpl->getValue('runtime')['storefronts_count']), $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php if ($_smarty_tpl->getValue('selected_storefront_id')) {?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('preset_data')['storefronts'], 'storefront');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('storefront')->value) {
$foreach21DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('storefront')['is_selected']) {?>
                                                                <?php $_smarty_tpl->assign('logo_img_class', '', false, NULL);?>
                                <?php if ($_smarty_tpl->getValue('storefront')['images']) {?>
                                    <?php $_smarty_tpl->assign('image_ratio', $_smarty_tpl->getValue('storefront')['images']['image_x']/$_smarty_tpl->getValue('storefront')['images']['image_y'], false, NULL);?>
                                    <?php if ($_smarty_tpl->getValue('image_ratio')/$_smarty_tpl->getValue('canvas_ratio') > $_smarty_tpl->getValue('measurement_error_secondary_threshold') || $_smarty_tpl->getValue('canvas_ratio')/$_smarty_tpl->getValue('image_ratio') > $_smarty_tpl->getValue('measurement_error_secondary_threshold')) {?>
                                        <?php $_smarty_tpl->assign('logo_img_class', "storefront__picker-logo-img--xlong", false, NULL);?>
                                    <?php } elseif ($_smarty_tpl->getValue('image_ratio')/$_smarty_tpl->getValue('canvas_ratio') > $_smarty_tpl->getValue('measurement_error_threshold') || $_smarty_tpl->getValue('canvas_ratio')/$_smarty_tpl->getValue('image_ratio') > $_smarty_tpl->getValue('measurement_error_threshold')) {?>
                                        <?php $_smarty_tpl->assign('logo_img_class', "storefront__picker-logo-img--long", false, NULL);?>
                                    <?php }?>
                                <?php }?>

                                                                <?php $_smarty_tpl->assign('storefront_image_height', false, false, NULL);?>
                                <?php if ($_smarty_tpl->getValue('storefront')['images']['image_x'] > $_smarty_tpl->getValue('storefront_image_max') || $_smarty_tpl->getValue('storefront')['images']['image_y'] > $_smarty_tpl->getValue('storefront_image_max')) {?>
                                    <?php $_smarty_tpl->assign('storefront_image_height', $_smarty_tpl->getValue('storefront_image_size'), false, NULL);?>
                                <?php }?>

                                <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--mobile">
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/image.tpl",'image'=>$_smarty_tpl->getValue('storefront')['images'],'image_height'=>$_smarty_tpl->getValue('storefront_image_height'),'image_css_class'=>"storefront__picker-logo-img ".((string)$_smarty_tpl->getValue('storefront_picker_logo_img_class'))." ".((string)$_smarty_tpl->getValue('logo_img_class')),'show_detailed_link'=>false), $_smarty_tpl);?>

                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--mobile">
                            <div class="storefront__picker-logo-text
                                <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->getSmarty()->getModifierCallback("__")("all_storefronts_short", [], $_smarty_tpl->getSmarty()->getLanguage()), $tmp) > 3) {?>storefront__picker-logo-text--small<?php }?>">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("all_storefronts_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                            </div>
                        </div>
                    <?php }?>
                    <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--desktop">
                        <div class="storefront__picker-logo-text">
                            +<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('runtime')['storefronts_count']-$_smarty_tpl->getValue('preset_data')['threshold'])), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu storefront__picker-dropdown-menu" id="storefront_picker_dropdown_menu">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>'','item_ids'=>array($_smarty_tpl->getValue('selected_storefront_id')),'show_empty_variant'=>$_smarty_tpl->getValue('show_all_storefront'),'dropdown_parent_selector'=>"#storefront_picker_dropdown_menu",'empty_variant_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("all_storefronts", [], $_smarty_tpl->getSmarty()->getLanguage()),'show_advanced'=>false,'dropdown_css_class'=>"storefront__picker-dropdown-picker"), (int) 0, $_smarty_current_dir);
?>
                </ul>
            </div>
        </div>
    <?php }
}
}
}
