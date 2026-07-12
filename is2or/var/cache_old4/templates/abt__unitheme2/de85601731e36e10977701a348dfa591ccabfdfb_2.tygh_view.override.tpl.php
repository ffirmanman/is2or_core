<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:46
  from 'tygh:addons/ab__landing_categories/hooks/categories/view.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a06864400_79689430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de85601731e36e10977701a348dfa591ccabfdfb' => 
    array (
      0 => 'addons/ab__landing_categories/hooks/categories/view.override.tpl',
      1 => 1777316042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69fb4a06864400_79689430 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__landing_categories/hooks/categories';
\Tygh\Languages\Helper::preloadLangVars(array('ab__lc.catalog.show_more','ab__lc.catalog.show_more'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!( !$_smarty_tpl->hasVariable('ab__lc_landing_categories') || empty($_smarty_tpl->getValue('ab__lc_landing_categories')))) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['ab__custom_category_h1'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['ab__custom_category_h1'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['category'])), ENT_QUOTES, 'UTF-8');
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->assign('show_max_item', (($tmp = $_smarty_tpl->getValue('category_data')['ab__lc_subsubcategories'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('thumb_width', (( !true || empty($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width']))) ? $_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'] : $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width'], false, NULL);
$_smarty_tpl->assign('thumb_height', (( !true || empty($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height']))) ? $_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'] : $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height'], false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('start'=>0,'print'=>false), $_smarty_tpl);
$_smarty_tpl->assign('number_of_columns', $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['columns_count']), false, NULL);
if ($_smarty_tpl->getValue('number_of_columns') <= 0) {
$_smarty_tpl->assign('number_of_columns', 4, false, NULL);
}?><div class="ab-lc-wrap" style="--number-of-columns:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('number_of_columns')), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__lc_landing_categories'), 'item1', false, NULL, 'item1', array (
));
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item1')->value) {
$foreach18DoElse = false;
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__landing_categories:category"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__landing_categories:category"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('item1')['param_id']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('print'=>false), $_smarty_tpl);?>
<div class="ab-lc-landing"><div class="head"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item1')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('item1')['main_pair'] || $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon']) {?><div class="image"><div class="cat-pict-underlay"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>(($tmp = $_smarty_tpl->getValue('item1')['main_pair'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'] ?? null : $tmp),'image_width'=>$_smarty_tpl->getValue('thumb_width'),'image_height'=>$_smarty_tpl->getValue('thumb_height'),'ab__is_object_name'=>$_smarty_tpl->getValue('item1')['item']), (int) 0, $_smarty_current_dir);
?></div></div><?php }?><div class="cat-title"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['item']), ENT_QUOTES, 'UTF-8');?>
</span></div></a></div><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('category_data')['ab__lc_subsubcategories']) > 0 && !( !true || empty($_smarty_tpl->getValue('item1')['subitems']))) {?><ul class="items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach19DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) > $_smarty_tpl->getValue('show_max_item')) {
break 1;
}?><li data-subcategories="<?php if (!( !true || empty($_smarty_tpl->getValue('item2')['subitems']))) {?>Y<?php } else { ?>N<?php }?>"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</span><?php if (!( !true || empty($_smarty_tpl->getValue('item2')['subitems']))) {?><i class="icon-subitems"></i><?php }?></a><?php if (!( !true || empty($_smarty_tpl->getValue('item2')['subitems']))) {?><ul class="items-level-3"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item2')['subitems'], 'item3');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item3')->value) {
$foreach20DoElse = false;
?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item3')['href'])), ENT_QUOTES, 'UTF-8');?>
"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['item']), ENT_QUOTES, 'UTF-8');?>
</span></a></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php }?></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')['subitems']) > $_smarty_tpl->getValue('show_max_item')) {?><ul class="hidden-items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach21DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) <= $_smarty_tpl->getValue('show_max_item')) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</span></a></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><span class="show-hidden-items-level-2"><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__lc.catalog.show_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i class="icon-more"></i></bdi></span><?php }
}?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?><div class="ab-category-description ty-wysiwyg-content ty-mt-l" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__landing_categories/hooks/categories/view.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__landing_categories/hooks/categories/view.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!( !$_smarty_tpl->hasVariable('ab__lc_landing_categories') || empty($_smarty_tpl->getValue('ab__lc_landing_categories')))) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['ab__custom_category_h1'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['ab__custom_category_h1'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['category'])), ENT_QUOTES, 'UTF-8');
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->assign('show_max_item', (($tmp = $_smarty_tpl->getValue('category_data')['ab__lc_subsubcategories'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('thumb_width', (( !true || empty($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width']))) ? $_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'] : $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_width'], false, NULL);
$_smarty_tpl->assign('thumb_height', (( !true || empty($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height']))) ? $_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'] : $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['thumbnail_height'], false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('start'=>0,'print'=>false), $_smarty_tpl);
$_smarty_tpl->assign('number_of_columns', $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['columns_count']), false, NULL);
if ($_smarty_tpl->getValue('number_of_columns') <= 0) {
$_smarty_tpl->assign('number_of_columns', 4, false, NULL);
}?><div class="ab-lc-wrap" style="--number-of-columns:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('number_of_columns')), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__lc_landing_categories'), 'item1', false, NULL, 'item1', array (
));
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item1')->value) {
$foreach22DoElse = false;
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__landing_categories:category"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__landing_categories:category"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('item1')['param_id']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('print'=>false), $_smarty_tpl);?>
<div class="ab-lc-landing"><div class="head"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item1')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('item1')['main_pair'] || $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon']) {?><div class="image"><div class="cat-pict-underlay"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>(($tmp = $_smarty_tpl->getValue('item1')['main_pair'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'] ?? null : $tmp),'image_width'=>$_smarty_tpl->getValue('thumb_width'),'image_height'=>$_smarty_tpl->getValue('thumb_height'),'ab__is_object_name'=>$_smarty_tpl->getValue('item1')['item']), (int) 0, $_smarty_current_dir);
?></div></div><?php }?><div class="cat-title"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['item']), ENT_QUOTES, 'UTF-8');?>
</span></div></a></div><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('category_data')['ab__lc_subsubcategories']) > 0 && !( !true || empty($_smarty_tpl->getValue('item1')['subitems']))) {?><ul class="items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach23DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) > $_smarty_tpl->getValue('show_max_item')) {
break 1;
}?><li data-subcategories="<?php if (!( !true || empty($_smarty_tpl->getValue('item2')['subitems']))) {?>Y<?php } else { ?>N<?php }?>"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</span><?php if (!( !true || empty($_smarty_tpl->getValue('item2')['subitems']))) {?><i class="icon-subitems"></i><?php }?></a><?php if (!( !true || empty($_smarty_tpl->getValue('item2')['subitems']))) {?><ul class="items-level-3"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item2')['subitems'], 'item3');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item3')->value) {
$foreach24DoElse = false;
?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item3')['href'])), ENT_QUOTES, 'UTF-8');?>
"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item3')['item']), ENT_QUOTES, 'UTF-8');?>
</span></a></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php }?></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')['subitems']) > $_smarty_tpl->getValue('show_max_item')) {?><ul class="hidden-items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach25DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) <= $_smarty_tpl->getValue('show_max_item')) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><span class="cat-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</span></a></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><span class="show-hidden-items-level-2"><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__lc.catalog.show_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i class="icon-more"></i></bdi></span><?php }
}?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?><div class="ab-category-description ty-wysiwyg-content ty-mt-l" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
