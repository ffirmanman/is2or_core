<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:49
  from 'tygh:addons/ab__seo_filters/hooks/categories/view_description.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94fdd79905_99998490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54b58e646797d415d5a222b8bbcaf115b72915c' => 
    array (
      0 => 'addons/ab__seo_filters/hooks/categories/view_description.override.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94fdd79905_99998490 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/hooks/categories';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('category_data')['short_description']) {?><div class="ty-wysiwyg-content ty-mb-s ab__sf_short_desc" <?php if ((defined('ABSF_NEW_VERSION_UT2') ? constant('ABSF_NEW_VERSION_UT2') : null)) {?>style="order: -1;"<?php } else { ?>style="order: 1;"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['short_description']);?>
</div><?php }?><div class="ab__sf_cat_desc" <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);
}?>><?php if ($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('category_data')['ab__mcd_descs']) {
if ($_smarty_tpl->getValue('ab__sf_seo_page') == 'Y' && !$_smarty_tpl->getValue('category_data')['ab__mcd_descs']) {?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['description']);?>
</div><?php } else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__multiple_cat_descriptions:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['description']);?>
</div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__multiple_cat_descriptions:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}?></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_filters/hooks/categories/view_description.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_filters/hooks/categories/view_description.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('category_data')['short_description']) {?><div class="ty-wysiwyg-content ty-mb-s ab__sf_short_desc" <?php if ((defined('ABSF_NEW_VERSION_UT2') ? constant('ABSF_NEW_VERSION_UT2') : null)) {?>style="order: -1;"<?php } else { ?>style="order: 1;"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['short_description']);?>
</div><?php }?><div class="ab__sf_cat_desc" <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);
}?>><?php if ($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('category_data')['ab__mcd_descs']) {
if ($_smarty_tpl->getValue('ab__sf_seo_page') == 'Y' && !$_smarty_tpl->getValue('category_data')['ab__mcd_descs']) {?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['description']);?>
</div><?php } else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__multiple_cat_descriptions:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['description']);?>
</div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__multiple_cat_descriptions:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}?></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
