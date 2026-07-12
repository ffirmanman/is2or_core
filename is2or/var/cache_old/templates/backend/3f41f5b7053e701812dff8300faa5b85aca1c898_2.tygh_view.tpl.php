<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:views/administration/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94604b67e2_46225766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f41f5b7053e701812dff8300faa5b85aca1c898' => 
    array (
      0 => 'views/administration/view.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_icon.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
))) {
function content_69ad94604b67e2_46225766 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/administration';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'menu_attrs' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/backend/3f41f5b7053e701812dff8300faa5b85aca1c898_2.tygh_view.tpl.php',
    'uid' => '3f41f5b7053e701812dff8300faa5b85aca1c898',
    'call_name' => 'smarty_template_function_menu_attrs_44739847169ad9460479d51_04719904',
  ),
));
\Tygh\Languages\Helper::preloadLangVars(array('settings'));
$_smarty_tpl->assign('redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);
$_smarty_tpl->assign('description_characters_threshold', 80, false, NULL);?>



<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);?><div class="administration-page"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sections'), 'section', false, 'section_key');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('section_key')->value => $_smarty_tpl->getVariable('section')->value) {
$foreach9DoElse = false;
if ($_smarty_tpl->getValue('section')['type'] === "title" && !$_smarty_tpl->getValue('section')['subitems'] && !$_smarty_tpl->getValue('section')['href']) {
continue 1;
}
$_smarty_tpl->assign('title', (($tmp = (($tmp = $_smarty_tpl->getValue('section')['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('section')['id'], [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('section_key'), [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('a_tag', ($_smarty_tpl->getValue('section')['href'] && $_smarty_tpl->getValue('section')['subitems']) ? "a" : "div", false, NULL);
$_smarty_tpl->assign('a_wrapper_tag', ($_smarty_tpl->getValue('section')['href'] && !$_smarty_tpl->getValue('section')['subitems']) ? "a" : "div", false, NULL);
$_smarty_tpl->assign('section_identifier', ($_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('section')['id'])."_menu_description", [], $_smarty_tpl->getSmarty()->getLanguage()) === mb_strtolower((string) "_".((string)$_smarty_tpl->getValue('section')['id'])."_menu_description", 'UTF-8')) ? $_smarty_tpl->getValue('section_key') : $_smarty_tpl->getValue('section')['id'], false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "administration_item", null, null);?><<?php echo $_smarty_tpl->getValue('a_tag');?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('section')['href'] && $_smarty_tpl->getValue('section')['subitems']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('section')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="administration-page__block-icon-wrapper <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('section')['attrs']['class'] === "is-addon" && !$_smarty_tpl->getValue('section')['icon']) {?>administration-page__block-icon-wrapper--no-icon <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
><?php if ($_smarty_tpl->getValue('section')['attrs']['class'] === "is-addon" && !$_smarty_tpl->getValue('section')['icon']) {
$_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>array('name'=>$_smarty_tpl->getValue('title')),'show_description'=>false), (int) 0, $_smarty_current_dir);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>(($tmp = $_smarty_tpl->getValue('section')['icon'] ?? null)===null||$tmp==='' ? "gear" ?? null : $tmp),'class'=>((string)$_smarty_tpl->getValue('section')['icon'])." administration-page__block-icon"), $_smarty_tpl);
}?></<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_tag')), ENT_QUOTES, 'UTF-8');?>
><div class="administration-page__block-description"><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_tag')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('section')['href'] && $_smarty_tpl->getValue('section')['subitems']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('section')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="administration-page__block-description-main" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
><div class="administration-page__block-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('section_identifier'))."_menu_description", [], $_smarty_tpl->getSmarty()->getLanguage()) !== "_".((string)$_smarty_tpl->getValue('section_identifier'))."_menu_description") {?><div><span class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('section_identifier'))."_menu_description", [], $_smarty_tpl->getSmarty()->getLanguage()),$_smarty_tpl->getValue('description_characters_threshold'));?>
</span></div><?php }?></<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_tag')), ENT_QUOTES, 'UTF-8');?>
><?php if ($_smarty_tpl->getValue('section')['subitems']) {?><div class="administration-page__block-subitems"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('section')['subitems'], 'section_item', false, 'section_item_key');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('section_item_key')->value => $_smarty_tpl->getVariable('section_item')->value) {
$foreach10DoElse = false;
if (!$_smarty_tpl->getValue('section_item')['href']) {
continue 1;
}?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('section_item')['href'])), ENT_QUOTES, 'UTF-8');?>
" class="administration-page_subitems-item"><?php echo (($tmp = $_smarty_tpl->getValue('section_item')['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('section_item_key'), [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_wrapper_tag')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('section')['href'] && !$_smarty_tpl->getValue('section')['subitems']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('section')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="administration-page__block <?php if ($_smarty_tpl->getValue('section')['attrs']['class_href']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('section')['attrs']['class_href']), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->getValue('section')['attrs']['href']), true);?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'administration_item');?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a_wrapper_tag')), ENT_QUOTES, 'UTF-8');?>
><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("settings", [], $_smarty_tpl->getSmarty()->getLanguage()),'buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox'),'select_storefront'=>$_smarty_tpl->getValue('select_storefront'),'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), (int) 0, $_smarty_current_dir);
}
/* smarty_template_function_menu_attrs_44739847169ad9460479d51_04719904 */
if (!function_exists('smarty_template_function_menu_attrs_44739847169ad9460479d51_04719904')) {
function smarty_template_function_menu_attrs_44739847169ad9460479d51_04719904(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/administration';
$params = array_merge(array('name'=>'menu_attrs','attrs'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('attrs'), 'value', false, 'attr');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('attr')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach8DoElse = false;
?>
        <?php echo $_smarty_tpl->getValue('attr');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_menu_attrs_44739847169ad9460479d51_04719904 */
}
