<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:30
  from 'tygh:addons/ab__landing_categories/hooks/categories/view.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb216d55427_32967246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de85601731e36e10977701a348dfa591ccabfdfb' => 
    array (
      0 => 'addons/ab__landing_categories/hooks/categories/view.override.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69afb216d55427_32967246 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__landing_categories/hooks/categories';
\Tygh\Languages\Helper::preloadLangVars(array('ab__lc.landing_category.show_more','ab__lc.landing_category.show_more'));
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
$_smarty_tpl->assign('item_columns', $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['columns_count'], false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('start'=>0,'print'=>false), $_smarty_tpl);?>
<div class="row-fluid ab-lc-wrap ab-lc-cols-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_columns')), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__lc_landing_categories'), 'item1', false, NULL, 'item1', array (
));
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item1')->value) {
$foreach10DoElse = false;
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
"><div class="image"><?php if ($_smarty_tpl->getValue('item1')['main_pair'] || $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>(($tmp = $_smarty_tpl->getValue('item1')['main_pair'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'] ?? null : $tmp),'image_width'=>$_smarty_tpl->getValue('thumb_width'),'image_height'=>$_smarty_tpl->getValue('thumb_height'),'ab__is_object_name'=>$_smarty_tpl->getValue('item1')['item']), (int) 0, $_smarty_current_dir);
}?></div><div class="cat-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['item']), ENT_QUOTES, 'UTF-8');?>
</div></a></div><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('category_data')['ab__lc_subsubcategories']) > 0 && !( !true || empty($_smarty_tpl->getValue('item1')['subitems']))) {?><ul class="items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach11DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) > $_smarty_tpl->getValue('show_max_item')) {
break 1;
}?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')['subitems']) > $_smarty_tpl->getValue('show_max_item')) {?><ul class="hidden-items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach12DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) <= $_smarty_tpl->getValue('show_max_item')) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><span class="show-hidden-items-level-2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__lc.landing_category.show_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }
}?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
ob_start();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array(), $_smarty_tpl);
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->assign('blank', null);$_smarty_tpl->tpl_vars['blank']->step = 1;$_smarty_tpl->tpl_vars['blank']->total = (int) ceil(($_smarty_tpl->tpl_vars['blank']->step > 0 ? $_prefixVariable5%$_smarty_tpl->getValue('item_columns')+1 - (0) : 0-($_prefixVariable5%$_smarty_tpl->getValue('item_columns'))+1)/abs($_smarty_tpl->tpl_vars['blank']->step));
if ($_smarty_tpl->tpl_vars['blank']->total > 0) {
for ($_smarty_tpl->tpl_vars['blank']->value = 0, $_smarty_tpl->tpl_vars['blank']->iteration = 1;$_smarty_tpl->tpl_vars['blank']->iteration <= $_smarty_tpl->tpl_vars['blank']->total;$_smarty_tpl->tpl_vars['blank']->value += $_smarty_tpl->tpl_vars['blank']->step, $_smarty_tpl->tpl_vars['blank']->iteration++) {
$_smarty_tpl->tpl_vars['blank']->first = $_smarty_tpl->tpl_vars['blank']->iteration === 1;$_smarty_tpl->tpl_vars['blank']->last = $_smarty_tpl->tpl_vars['blank']->iteration === $_smarty_tpl->tpl_vars['blank']->total;?><div class="ab-lc-landing"></div><?php }
}
?></div><?php $_block_repeat=true;
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
$_smarty_tpl->assign('item_columns', $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__landing_categories']['columns_count'], false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array('start'=>0,'print'=>false), $_smarty_tpl);?>
<div class="row-fluid ab-lc-wrap ab-lc-cols-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_columns')), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__lc_landing_categories'), 'item1', false, NULL, 'item1', array (
));
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item1')->value) {
$foreach13DoElse = false;
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
"><div class="image"><?php if ($_smarty_tpl->getValue('item1')['main_pair'] || $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>(($tmp = $_smarty_tpl->getValue('item1')['main_pair'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('item1')['abt__ut2_mwi__icon'] ?? null : $tmp),'image_width'=>$_smarty_tpl->getValue('thumb_width'),'image_height'=>$_smarty_tpl->getValue('thumb_height'),'ab__is_object_name'=>$_smarty_tpl->getValue('item1')['item']), (int) 0, $_smarty_current_dir);
}?></div><div class="cat-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item1')['item']), ENT_QUOTES, 'UTF-8');?>
</div></a></div><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('category_data')['ab__lc_subsubcategories']) > 0 && !( !true || empty($_smarty_tpl->getValue('item1')['subitems']))) {?><ul class="items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach14DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) > $_smarty_tpl->getValue('show_max_item')) {
break 1;
}?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('item1')['subitems']) > $_smarty_tpl->getValue('show_max_item')) {?><ul class="hidden-items-level-2"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item1')['subitems'], 'item2', false, NULL, 'item2', array (
  'iteration' => true,
));
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item2')->value) {
$foreach15DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item2']->value['iteration']++;
if ($_smarty_tpl->getValue('item2')['param_id']) {
if (($_smarty_tpl->getValue('__smarty_foreach_item2')['iteration'] ?? null) <= $_smarty_tpl->getValue('show_max_item')) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item2')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item2')['item']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><span class="show-hidden-items-level-2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__lc.landing_category.show_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php }
}?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
ob_start();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array(), $_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->assign('blank', null);$_smarty_tpl->tpl_vars['blank']->step = 1;$_smarty_tpl->tpl_vars['blank']->total = (int) ceil(($_smarty_tpl->tpl_vars['blank']->step > 0 ? $_prefixVariable6%$_smarty_tpl->getValue('item_columns')+1 - (0) : 0-($_prefixVariable6%$_smarty_tpl->getValue('item_columns'))+1)/abs($_smarty_tpl->tpl_vars['blank']->step));
if ($_smarty_tpl->tpl_vars['blank']->total > 0) {
for ($_smarty_tpl->tpl_vars['blank']->value = 0, $_smarty_tpl->tpl_vars['blank']->iteration = 1;$_smarty_tpl->tpl_vars['blank']->iteration <= $_smarty_tpl->tpl_vars['blank']->total;$_smarty_tpl->tpl_vars['blank']->value += $_smarty_tpl->tpl_vars['blank']->step, $_smarty_tpl->tpl_vars['blank']->iteration++) {
$_smarty_tpl->tpl_vars['blank']->first = $_smarty_tpl->tpl_vars['blank']->iteration === 1;$_smarty_tpl->tpl_vars['blank']->last = $_smarty_tpl->tpl_vars['blank']->iteration === $_smarty_tpl->tpl_vars['blank']->total;?><div class="ab-lc-landing"></div><?php }
}
?></div><?php $_block_repeat=true;
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
