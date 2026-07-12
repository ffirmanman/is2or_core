<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons/addon_full_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc947178_46998042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f87bffc1f897250ce80fea1d91caf32662684ca' => 
    array (
      0 => 'views/addons/components/addons/addon_full_info.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9cc947178_46998042 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/addons';
\Tygh\Languages\Helper::preloadLangVars(array('active','disabled','not_installed','na','na','verified','installed_version','addons.latest_version','installed_version','addons.latest_version','addons.latest_available_for_installation_version','installed_version','developer','addon_id','version','installed_date','developer','addon_id','status','installed_date'));
?>

<?php $_smarty_tpl->assign('ADDON_NAME_LIMIT', 50, false, 2);?>

<?php if ($_smarty_tpl->getValue('addon')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->assign('status_description', $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} elseif ($_smarty_tpl->getValue('addon')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->assign('status_description', $_smarty_tpl->getSmarty()->getModifierCallback("__")("disabled", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} elseif ($_smarty_tpl->getValue('addon')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->assign('status_description', $_smarty_tpl->getSmarty()->getModifierCallback("__")("not_installed", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}
$_smarty_tpl->assign('installed_version', $_smarty_tpl->getValue('addon')['version'], false, NULL);
$_smarty_tpl->assign('latest_version', (($tmp = $_smarty_tpl->getValue('addon')['latest_upgrade_version'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('actual_version', (($tmp = $_smarty_tpl->getValue('addon')['actual_version'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("verified", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->assign('verified_developer', ($_smarty_tpl->getValue('a')['identified'] || $_smarty_tpl->getValue('a')['is_core_addon']) ? " (".$_prefixVariable4.")" : '', false, NULL);?>

<?php $_tmp_array = $_smarty_tpl->getValue('a') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_long_name'] = (mb_strlen((string) preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('a')['name']), 'UTF-8') > $_smarty_tpl->getValue('ADDON_NAME_LIMIT'));
$_smarty_tpl->assign('a', $_tmp_array, false, 2);
$_tmp_array = $_smarty_tpl->getValue('a') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['short_name'] = (($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('a')['name'],$_smarty_tpl->getValue('ADDON_NAME_LIMIT'),"...",true) ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('key') ?? null : $tmp);
$_smarty_tpl->assign('a', $_tmp_array, false, 2);?>

<?php if ($_smarty_tpl->getValue('addon')['is_core_addon'] || !$_smarty_tpl->getValue('addon')['actual_version']) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installed_version", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->assign('addon_full_version_info', $_prefixVariable5.":
".((string)$_smarty_tpl->getValue('installed_version')), false, 2);?>

<?php } elseif ($_smarty_tpl->getValue('actual_version') === $_smarty_tpl->getValue('latest_version')) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.latest_version", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable6=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installed_version", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->assign('addon_full_version_info', $_prefixVariable6.":
".((string)$_smarty_tpl->getValue('actual_version'))."

".$_prefixVariable7.":
".((string)$_smarty_tpl->getValue('installed_version')), false, 2);?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.latest_version", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable8=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addons.latest_available_for_installation_version", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable9=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installed_version", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->assign('addon_full_version_info', $_prefixVariable8.":
".((string)$_smarty_tpl->getValue('actual_version'))."

".$_prefixVariable9.":
".((string)$_smarty_tpl->getValue('latest_version'))."

".$_prefixVariable10.":
".((string)$_smarty_tpl->getValue('installed_version')), false, 2);?>

<?php }?>

<?php $_smarty_tpl->assign('install_datetime_format', $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('a')['install_datetime'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format'])), false, NULL);?>

<?php if ($_smarty_tpl->getValue('is_marketplace_addons')) {
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("developer", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable11=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addon_id", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->assign('addon_full_description', ((string)$_smarty_tpl->getValue('addon')['name'])."

".((string)(strip_tags((string) $_smarty_tpl->getValue('addon')['description'])))."

".$_prefixVariable11.": ".((string)$_smarty_tpl->getValue('a')['supplier']).((string)$_smarty_tpl->getValue('verified_developer'))."
".$_prefixVariable12.": ".((string)$_smarty_tpl->getValue('addon')['addon']), false, 2);
} else { ?>  
<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("version", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable13=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installed_date", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable14=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("developer", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable15=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addon_id", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable16=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable17=ob_get_clean();
$_smarty_tpl->assign('addon_full_description', ((string)$_smarty_tpl->getValue('addon')['name'])."

".((string)(strip_tags((string) $_smarty_tpl->getValue('addon')['description'])))."

".$_prefixVariable13.": ".((string)((($tmp = $_smarty_tpl->getValue('addon')['version'] ?? null)===null||$tmp==='' ? 0.1 ?? null : $tmp)))."
".$_prefixVariable14.": ".((string)$_smarty_tpl->getValue('install_datetime_format'))."
".$_prefixVariable15.": ".((string)$_smarty_tpl->getValue('a')['supplier']).((string)$_smarty_tpl->getValue('verified_developer'))."
".$_prefixVariable16.": ".((string)$_smarty_tpl->getValue('addon')['addon'])."
".$_prefixVariable17.": ".((string)$_smarty_tpl->getValue('status_description')), false, 2);
}?>

<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installed_date", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable18=ob_get_clean();
$_smarty_tpl->assign('install_datetime_full_info', $_prefixVariable18.":
".((string)$_smarty_tpl->getValue('install_datetime_format')), false, 2);
}
}
