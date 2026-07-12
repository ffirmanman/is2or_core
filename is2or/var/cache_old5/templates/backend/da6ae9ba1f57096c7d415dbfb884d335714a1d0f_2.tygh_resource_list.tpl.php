<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee3796b35_91686262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da6ae9ba1f57096c7d415dbfb884d335714a1d0f' => 
    array (
      0 => 'views/index/components/analytics_section/analytics_card/resource_list.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 1,
    'tygh:common/price.tpl' => 1,
  ),
))) {
function content_6a133ee3796b35_91686262 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/analytics_section/analytics_card';
\Tygh\Languages\Helper::preloadLangVars(array('no_data'));
if ($_smarty_tpl->getValue('resource_list') && ($_smarty_tpl->getValue('resource_list')['content'] || ( !true || empty($_smarty_tpl->getValue('resource_list')['content'])))) {?><div class="analytics-card-resource-list"><?php if ($_smarty_tpl->getValue('resource_list')['title']) {?><div class="analytics-card-resource-list__title"><?php echo $_smarty_tpl->getValue('resource_list')['title'];?>
</div><?php }?><div class="analytics-card-resource-list__content"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('resource_list')['content'], 'item');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach11DoElse = false;
?><div class="analytics-card-resource-list__item <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['description'] || $_smarty_tpl->getValue('item')['description_href'] || $_smarty_tpl->getValue('item')['small_text']) {?>analytics-card-resource-list__item--divider<?php }?>"><?php if ($_smarty_tpl->getValue('item')['image']) {?><div class="analytics-card-resource-list__image"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('item')['image'],'image_id'=>((string)$_smarty_tpl->getValue('analytics_card')['id'])."_".((string)$_smarty_tpl->getValue('item')['id']),'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_admin_mini_icon_height'],'href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), (int) 0, $_smarty_current_dir);
?></div><?php }?><div class="analytics-card-resource-list__item-content"><?php if ($_smarty_tpl->getValue('item')['name'] || $_smarty_tpl->getValue('item')['href'] || $_smarty_tpl->getValue('item')['value'] || $_smarty_tpl->getValue('item')['value_href']) {?><div class="analytics-card-resource-list__primary"><div class="analytics-card-resource-list__name"><?php if ($_smarty_tpl->getValue('item')['href']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');?>
"class="link--monochrome analytics-card-resource-list__name-text analytics-card-resource-list__name-text--link"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</a><?php } else { ?><div class="analytics-card-resource-list__name-text"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</div><?php }
if ($_smarty_tpl->getValue('item')['label_text']) {?><div class="analytics-card-resource-list__label label btn-info label--text-wrap <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['label_class']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['label_text']), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "item_value", null, null);
if ($_smarty_tpl->getValue('item')['use_price_for_value']) {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('item')['value']), (int) 0, $_smarty_current_dir);
} else {
echo $_smarty_tpl->getValue('item')['value'];
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('item')['value_href'] && (true && (true && null !== ($_smarty_tpl->getValue('item')['value'] ?? null)))) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['value_href'])), ENT_QUOTES, 'UTF-8');?>
"class="analytics-card-resource-list__value analytics-card-resource-list__value--link"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'item_value');?>
</a><?php } elseif ((true && (true && null !== ($_smarty_tpl->getValue('item')['value'] ?? null)))) {?><div class="analytics-card-resource-list__value"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'item_value');?>
</div><?php }?></div><?php }
if ($_smarty_tpl->getValue('item')['description'] || $_smarty_tpl->getValue('item')['description_href'] || $_smarty_tpl->getValue('item')['small_text']) {?><div class="analytics-card-resource-list__secondary"><?php if ($_smarty_tpl->getValue('item')['description_href']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['description_href'])), ENT_QUOTES, 'UTF-8');?>
"class="analytics-card-resource-list__description analytics-card-resource-list__description--link"><?php echo $_smarty_tpl->getValue('item')['description'];?>
</a><?php } else { ?><div class="analytics-card-resource-list__description"><?php echo $_smarty_tpl->getValue('item')['description'];?>
</div><?php }
if ($_smarty_tpl->getValue('item')['small_text']) {?><div class="analytics-card-resource-list__small-text"><?php echo $_smarty_tpl->getValue('item')['small_text'];?>
</div><?php }?></div><?php }?></div></div><?php
}
if ($foreach11DoElse) {
?><div class="analytics-card-resource-list__item analytics-card-resource-list__item--empty"><div class="analytics-card-resource-list__no-items no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
