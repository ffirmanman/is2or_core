<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/abt__unitheme2/hooks/products/layout_content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a012774e0_93205166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e0c682873de4a820fb011f468b19ba9e2d5c45' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/products/layout_content.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69fb4a012774e0_93205166 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ut2.search_similar','ab__ut2.search_similar'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('ab__search_similar_in_category', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
if ($_smarty_tpl->getValue('ab__search_similar_in_category')) {?>
    <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ut2.search_similar", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"abt__ut2_search_similar_in_category_btn hidden"), (int) 0, $_smarty_current_dir);
$_prefixVariable48 = ob_get_clean();
$_smarty_tpl->assign('tpl_search_similar_button', $_prefixVariable48, false, NULL);?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_.abt__ut2.templates, {search_similar_button: `<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tpl_search_similar_button')), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
`});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/layout_content.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/products/layout_content.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('ab__search_similar_in_category', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
if ($_smarty_tpl->getValue('ab__search_similar_in_category')) {?>
    <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ut2.search_similar", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"abt__ut2_search_similar_in_category_btn hidden"), (int) 0, $_smarty_current_dir);
$_prefixVariable49 = ob_get_clean();
$_smarty_tpl->assign('tpl_search_similar_button', $_prefixVariable49, false, NULL);?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_.abt__ut2.templates, {search_similar_button: `<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('tpl_search_similar_button')), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
`});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
}
}
}
