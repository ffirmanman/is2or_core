<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f656b7e3_76202357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a833321e300230db2aaed44cc3298f31d002bc79' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f656b7e3_76202357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__smc.more','ab__smc.less','ab__smc.more','ab__smc.less'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__product_tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (strlen((string) smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value)))) {?><div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" data-ab-smc-tab-hide="<?php echo htmlspecialchars((string) implode('|',$_smarty_tpl->tpl_vars['tab']->value['ab__smc_hide_content']), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-more="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_more'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.more") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-less="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_less'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.less") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['ab__smc_height'], ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-tab-override-h="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['ab__smc_override'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__product_tabs_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value === smarty_modifier_enum("YesNo::NO")) {?><div class="tab-list-title" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value);?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__product_tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (strlen((string) smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value)))) {?><div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" data-ab-smc-tab-hide="<?php echo htmlspecialchars((string) implode('|',$_smarty_tpl->tpl_vars['tab']->value['ab__smc_hide_content']), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-more="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_more'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.more") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-less="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_less'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.less") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['ab__smc_height'], ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-tab-override-h="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['ab__smc_override'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__product_tabs_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value === smarty_modifier_enum("YesNo::NO")) {?><div class="tab-list-title" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value);?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
