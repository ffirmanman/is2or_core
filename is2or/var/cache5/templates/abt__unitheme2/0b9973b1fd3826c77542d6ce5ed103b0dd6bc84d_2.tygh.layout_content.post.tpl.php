<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/layout_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f66de540_31829591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b9973b1fd3826c77542d6ce5ed103b0dd6bc84d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/layout_content.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6835b9f66de540_31829591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__ut2.search_similar','ab__ut2.search_similar'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('ab__search_similar_in_category', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES"));
if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value) {?>
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("ab__ut2.search_similar"),'but_meta'=>"abt__ut2_search_similar_in_category_btn hidden"), 0, false);
$_prefixVariable38 = ob_get_clean();
$_smarty_tpl->_assignInScope('tpl_search_similar_button', $_prefixVariable38);?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_.abt__ut2.templates, {search_similar_button: `<?php echo strtr((string)smarty_modifier_trim($_smarty_tpl->tpl_vars['tpl_search_similar_button']->value), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
`});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/layout_content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/products/layout_content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('ab__search_similar_in_category', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES"));
if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value) {?>
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("ab__ut2.search_similar"),'but_meta'=>"abt__ut2_search_similar_in_category_btn hidden"), 0, true);
$_prefixVariable39 = ob_get_clean();
$_smarty_tpl->_assignInScope('tpl_search_similar_button', $_prefixVariable39);?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_.abt__ut2.templates, {search_similar_button: `<?php echo strtr((string)smarty_modifier_trim($_smarty_tpl->tpl_vars['tpl_search_similar_button']->value), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
`});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
}
}
}
