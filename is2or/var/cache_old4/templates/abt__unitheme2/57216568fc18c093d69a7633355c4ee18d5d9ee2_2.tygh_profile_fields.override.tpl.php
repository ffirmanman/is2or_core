<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:20
  from 'tygh:addons/is2or_customer_coordinates/hooks/profiles/profile_fields.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c4f1aa56_00878704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57216568fc18c093d69a7633355c4ee18d5d9ee2' => 
    array (
      0 => 'addons/is2or_customer_coordinates/hooks/profiles/profile_fields.override.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/is2or_customer_coordinates/pickers/map.tpl' => 2,
  ),
))) {
function content_69fb53c4f1aa56_00878704 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_customer_coordinates/hooks/profiles';
\Tygh\Languages\Helper::preloadLangVars(array('latitude_short','longitude_short','latitude','longitude','select','latitude_short','longitude_short','latitude','longitude','select'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('field')['field_type'] == 'L') {?>
    <?php if ($_smarty_tpl->getValue('section') == 'S') {?>
        <?php $_smarty_tpl->assign('latitude', (($tmp = $_smarty_tpl->getValue('profile_data')['s_latitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('longitude', (($tmp = $_smarty_tpl->getValue('profile_data')['s_longitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('latitude_name', 'user_data[s_latitude]', false, NULL);?>
        <?php $_smarty_tpl->assign('longitude_name', 'user_data[s_longitude]', false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('latitude', (($tmp = $_smarty_tpl->getValue('profile_data')['b_latitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('longitude', (($tmp = $_smarty_tpl->getValue('profile_data')['b_longitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('latitude_name', 'user_data[b_latitude]', false, NULL);?>
        <?php $_smarty_tpl->assign('longitude_name', 'user_data[b_longitude]', false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('disabled', $_smarty_tpl->getValue('shipping_flag') && !$_smarty_tpl->getValue('ship_to_another'), false, NULL);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_customer_coordinates/pickers/map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('field')['field_id'],'latitude'=>$_smarty_tpl->getValue('latitude'),'longitude'=>$_smarty_tpl->getValue('longitude')), (int) 0, $_smarty_current_dir);
?>

    <div class="ty-control-group">
        <label class="ty-control-group__title <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('coordinates', [], $_smarty_tpl->getSmarty()->getLanguage());?>
  (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("latitude_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 &times; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("longitude_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>
):</label>
        <label class="control-label <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?> hidden" for="elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("latitude", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <label class="control-label <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?> hidden" for="elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("longitude", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>

        <input type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude_name')), ENT_QUOTES, 'UTF-8');?>
" id="elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude')), ENT_QUOTES, 'UTF-8');?>
" data-ca-latest-latitude="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude')), ENT_QUOTES, 'UTF-8');?>
" class="input-small" <?php echo $_smarty_tpl->getValue('disabled_param');?>
>
        &times;
        <input type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude_name')), ENT_QUOTES, 'UTF-8');?>
" id="elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude')), ENT_QUOTES, 'UTF-8');?>
" data-ca-latest-longitude="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude')), ENT_QUOTES, 'UTF-8');?>
" class="input-small" <?php echo $_smarty_tpl->getValue('disabled_param');?>
>

        <button type="button" class="ty-btn ty-btn__secondary cm-dialog-opener cm-hide-with-inputs customer-coordinates-picker-opener" data-ca-target-id="map_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('disabled')) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_customer_coordinates/hooks/profiles/profile_fields.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_customer_coordinates/hooks/profiles/profile_fields.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('field')['field_type'] == 'L') {?>
    <?php if ($_smarty_tpl->getValue('section') == 'S') {?>
        <?php $_smarty_tpl->assign('latitude', (($tmp = $_smarty_tpl->getValue('profile_data')['s_latitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('longitude', (($tmp = $_smarty_tpl->getValue('profile_data')['s_longitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('latitude_name', 'user_data[s_latitude]', false, NULL);?>
        <?php $_smarty_tpl->assign('longitude_name', 'user_data[s_longitude]', false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('latitude', (($tmp = $_smarty_tpl->getValue('profile_data')['b_latitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('longitude', (($tmp = $_smarty_tpl->getValue('profile_data')['b_longitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('latitude_name', 'user_data[b_latitude]', false, NULL);?>
        <?php $_smarty_tpl->assign('longitude_name', 'user_data[b_longitude]', false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('disabled', $_smarty_tpl->getValue('shipping_flag') && !$_smarty_tpl->getValue('ship_to_another'), false, NULL);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_customer_coordinates/pickers/map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('field')['field_id'],'latitude'=>$_smarty_tpl->getValue('latitude'),'longitude'=>$_smarty_tpl->getValue('longitude')), (int) 0, $_smarty_current_dir);
?>

    <div class="ty-control-group">
        <label class="ty-control-group__title <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('coordinates', [], $_smarty_tpl->getSmarty()->getLanguage());?>
  (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("latitude_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 &times; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("longitude_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>
):</label>
        <label class="control-label <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?> hidden" for="elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("latitude", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <label class="control-label <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?> hidden" for="elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("longitude", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>

        <input type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude_name')), ENT_QUOTES, 'UTF-8');?>
" id="elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude')), ENT_QUOTES, 'UTF-8');?>
" data-ca-latest-latitude="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude')), ENT_QUOTES, 'UTF-8');?>
" class="input-small" <?php echo $_smarty_tpl->getValue('disabled_param');?>
>
        &times;
        <input type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude_name')), ENT_QUOTES, 'UTF-8');?>
" id="elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude')), ENT_QUOTES, 'UTF-8');?>
" data-ca-latest-longitude="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude')), ENT_QUOTES, 'UTF-8');?>
" class="input-small" <?php echo $_smarty_tpl->getValue('disabled_param');?>
>

        <button type="button" class="ty-btn ty-btn__secondary cm-dialog-opener cm-hide-with-inputs customer-coordinates-picker-opener" data-ca-target-id="map_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('disabled')) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
    </div>
<?php }
}
}
}
