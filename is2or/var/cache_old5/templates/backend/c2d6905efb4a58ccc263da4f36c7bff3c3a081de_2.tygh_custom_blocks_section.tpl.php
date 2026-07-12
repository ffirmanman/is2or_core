<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee36b3191_75598514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2d6905efb4a58ccc263da4f36c7bff3c3a081de' => 
    array (
      0 => 'views/index/components/custom_blocks_section/custom_blocks_section.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/custom_blocks_section/custom_blocks_card.tpl' => 1,
    'tygh:views/block_manager/frontend_render/block.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
))) {
function content_6a133ee36b3191_75598514 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/custom_blocks_section';
\Tygh\Languages\Helper::preloadLangVars(array('custom_blocks.sections.onboarding_title','custom_blocks.create_block','custom_blocks.use_this_space','custom_blocks.edit_block','custom_blocks.create_block'));
$_smarty_tpl->assign('show_custom_blocks_section', (($tmp = $_smarty_tpl->getValue('show_custom_blocks_section') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('hasLayout', false, false, NULL);
if ($_smarty_tpl->getValue('custom_blocks_section')['section'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::TOP_PANEL") || $_smarty_tpl->getValue('custom_blocks_section')['section'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::HEADER") || $_smarty_tpl->getValue('custom_blocks_section')['section'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::ONBOARDING")) {
$_smarty_tpl->assign('custom_blocks_section_class', "custom-blocks-section--fixed", false, NULL);
$_tmp_array = $_smarty_tpl->getValue('custom_blocks_section') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_fixed'] = true;
$_smarty_tpl->assign('custom_blocks_section', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('custom_blocks_section')['section'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::ONBOARDING")) {
$_tmp_array = $_smarty_tpl->getValue('custom_blocks_section') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_blocks.sections.onboarding_title", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->assign('custom_blocks_section', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('custom_blocks_section') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_editable'] = true;
$_smarty_tpl->assign('custom_blocks_section', $_tmp_array, false, NULL);
}
$_smarty_tpl->assign('return_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::ONBOARDING");
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->assign('section', (($tmp = $_smarty_tpl->getValue('section') ?? null)===null||$tmp==='' ? $_prefixVariable2 ?? null : $tmp), false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockTypes::BLOCK")), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->assign('type', (($tmp = $_smarty_tpl->getValue('type') ?? null)===null||$tmp==='' ? $_prefixVariable3 ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('custom_blocks_section')['content'] || $_smarty_tpl->getValue('custom_blocks_section')['title']) {
$_smarty_tpl->assign('create_block_button_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_blocks.create_block", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
$_smarty_tpl->assign('create_block_button_class', "custom-blocks-section__create custom-blocks-section__create--center", false, NULL);
} else {
$_smarty_tpl->assign('create_block_button_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_blocks.use_this_space", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
$_smarty_tpl->assign('create_block_button_class', "custom-blocks-section__create", false, NULL);
}
if ($_smarty_tpl->getValue('custom_blocks_section')['is_fixed']) {
$_smarty_tpl->assign('create_block_button_class', ((string)$_smarty_tpl->getValue('create_block_button_class'))." custom-blocks-section__create--fixed", false, NULL);
}?><section class="custom-blocks-section <?php echo $_smarty_tpl->getValue('custom_blocks_section_class');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('custom_blocks_section')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('show_custom_blocks_section') && ($_smarty_tpl->getValue('custom_blocks_section')['content'] || $_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'])) {?><div class="custom-blocks-section__inner" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager']) {?>data-ca-block-manager-grid-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('custom_blocks_section')['id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('custom_blocks_section')['title']) {?><h2 class="custom-blocks-section__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('custom_blocks_section')['title']), ENT_QUOTES, 'UTF-8');?>
</h2><?php }?><div class="custom-blocks-section__content"><div class="custom-blocks-section__column"<?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager']) {?>data-ca-block-manager-table="custom_blocks"data-ca-block-manager-id-name="block_id"data-ca-block-manager-blocks-place="true"<?php }?>><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_blocks_section')['content'], 'custom_blocks_card');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_blocks_card')->value) {
$foreach1DoElse = false;
ob_start();
$_smarty_tpl->renderSubTemplate("tygh:views/index/components/custom_blocks_section/custom_blocks_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_card'=>$_smarty_tpl->getValue('custom_blocks_card')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('custom_blocks_card_content', ob_get_clean(), false, 0);
$_smarty_tpl->renderSubTemplate("tygh:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('custom_blocks_card_content'),'block'=>$_smarty_tpl->getValue('custom_blocks_card'),'custom_blocks_section'=>$_smarty_tpl->getValue('custom_blocks_section'),'location_data'=>$_smarty_tpl->getValue('location_data'),'snapping_id'=>$_smarty_tpl->getValue('custom_blocks_card')['id'],'object_type'=>"custom_block",'parent_grid'=>array('location_id'=>$_smarty_tpl->getValue('custom_blocks_card')['section']),'prefix'=>$_smarty_tpl->getValue('custom_blocks_section')['id'],'popup_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_blocks.edit_block", [], $_smarty_tpl->getSmarty()->getLanguage()),'show_delete'=>true,'is_popup'=>true), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></div><?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager']) {?><div class="custom-blocks-section__footer"><?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>((string)$_smarty_tpl->getValue('custom_blocks_section')['id'])."_create_block",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_blocks.create_block", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_smarty_tpl->getValue('create_block_button_text'),'link_class'=>$_smarty_tpl->getValue('create_block_button_class'),'act'=>"link",'href'=>"block_manager.update_custom_block?object_type=custom_block&block_id=0&section=".((string)$_smarty_tpl->getValue('section'))."&type=".((string)$_smarty_tpl->getValue('type'))."&return_url=".((string)$_smarty_tpl->getValue('return_url'))), (int) 0, $_smarty_current_dir);
?></div><?php }?></div><?php }?><!--<?php echo $_smarty_tpl->getValue('custom_blocks_section')['id'];?>
--></section><?php }
}
