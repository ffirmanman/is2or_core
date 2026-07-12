<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:28:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/administration/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345e8678f185_14308059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2727eca51ceca8970c976d0d720636250c7aa110' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/administration/view.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_icon.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68345e8678f185_14308059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu_attrs' => 
  array (
    'compiled_filepath' => '/srv/projects/is2or.com/public_html/var/cache/templates/backend/2727eca51ceca8970c976d0d720636250c7aa110_2.tygh.view.tpl.php',
    'uid' => '2727eca51ceca8970c976d0d720636250c7aa110',
    'call_name' => 'smarty_template_function_menu_attrs_78200245768345e867661c5_65324811',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('settings'));
$_smarty_tpl->_assignInScope('redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('description_characters_threshold', 80);?>



<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?><div class="administration-page"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section', false, 'section_key');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_key']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
if ($_smarty_tpl->tpl_vars['section']->value['type'] === "title" && !$_smarty_tpl->tpl_vars['section']->value['subitems'] && !$_smarty_tpl->tpl_vars['section']->value['href']) {
continue 1;
}
$_smarty_tpl->_assignInScope('title', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['section']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['section']->value['id']) ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_key']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('a_tag', $_smarty_tpl->tpl_vars['section']->value['href'] && $_smarty_tpl->tpl_vars['section']->value['subitems'] ? "a" : "div");
$_smarty_tpl->_assignInScope('a_wrapper_tag', $_smarty_tpl->tpl_vars['section']->value['href'] && !$_smarty_tpl->tpl_vars['section']->value['subitems'] ? "a" : "div");
$_smarty_tpl->_assignInScope('section_identifier', $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['section']->value['id'])."_menu_description") === mb_strtolower("_".((string)$_smarty_tpl->tpl_vars['section']->value['id'])."_menu_description", 'UTF-8') ? $_smarty_tpl->tpl_vars['section_key']->value : $_smarty_tpl->tpl_vars['section']->value['id']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "administration_item", null, null);?><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_tag']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['section']->value['href'] && $_smarty_tpl->tpl_vars['section']->value['subitems']) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['section']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="administration-page__block-icon-wrapper <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['section']->value['attrs']['class'] === "is-addon" && !$_smarty_tpl->tpl_vars['section']->value['icon']) {?>administration-page__block-icon-wrapper--no-icon <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
><?php if ($_smarty_tpl->tpl_vars['section']->value['attrs']['class'] === "is-addon" && !$_smarty_tpl->tpl_vars['section']->value['icon']) {
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>array('name'=>$_smarty_tpl->tpl_vars['title']->value),'show_description'=>false), 0, true);
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>(($tmp = $_smarty_tpl->tpl_vars['section']->value['icon'] ?? null)===null||$tmp==='' ? "gear" ?? null : $tmp),'class'=>((string)$_smarty_tpl->tpl_vars['section']->value['icon'])." administration-page__block-icon"),$_smarty_tpl);
}?></<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_tag']->value, ENT_QUOTES, 'UTF-8');?>
><div class="administration-page__block-description"><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_tag']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['section']->value['href'] && $_smarty_tpl->tpl_vars['section']->value['subitems']) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['section']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="administration-page__block-description-main" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
><div class="administration-page__block-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['section_identifier']->value)."_menu_description") !== "_".((string)$_smarty_tpl->tpl_vars['section_identifier']->value)."_menu_description") {?><div><span class="muted"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['section_identifier']->value)."_menu_description"),$_smarty_tpl->tpl_vars['description_characters_threshold']->value), ENT_QUOTES, 'UTF-8');?>
</span></div><?php }?></<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php if ($_smarty_tpl->tpl_vars['section']->value['subitems']) {?><div class="administration-page__block-subitems"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['subitems'], 'section_item', false, 'section_item_key');
$_smarty_tpl->tpl_vars['section_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_item_key']->value => $_smarty_tpl->tpl_vars['section_item']->value) {
$_smarty_tpl->tpl_vars['section_item']->do_else = false;
if (!$_smarty_tpl->tpl_vars['section_item']->value['href']) {
continue 1;
}?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['section_item']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="administration-page_subitems-item"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['section_item']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_item_key']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_wrapper_tag']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['section']->value['href'] && !$_smarty_tpl->tpl_vars['section']->value['subitems']) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['section']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="administration-page__block <?php if ($_smarty_tpl->tpl_vars['section']->value['attrs']['class_href']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['section']->value['attrs']['href']), true);?>
 <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'administration_item');?>
</<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a_wrapper_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("settings"),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), 0, false);
}
/* smarty_template_function_menu_attrs_78200245768345e867661c5_65324811 */
if (!function_exists('smarty_template_function_menu_attrs_78200245768345e867661c5_65324811')) {
function smarty_template_function_menu_attrs_78200245768345e867661c5_65324811(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('attrs'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attrs']->value, 'value', false, 'attr');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attr']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_menu_attrs_78200245768345e867661c5_65324811 */
}
