<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:30
  from 'tygh:addons/ab__multiple_cat_descriptions/views/categories/components/ab__mcd_view_description.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb216e026d0_33638931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e57242f0bb2157495fe6b04ea675c2a22ef3fa' => 
    array (
      0 => 'addons/ab__multiple_cat_descriptions/views/categories/components/ab__mcd_view_description.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb216e026d0_33638931 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__multiple_cat_descriptions/views/categories/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!( !true || empty($_smarty_tpl->getValue('category_data')['ab__mcd_descs'])) && ((( !true || empty($_REQUEST['page'])) || $_REQUEST['page'] == 1) || ($_smarty_tpl->getValue('runtime')['controller'] == "product_features" && $_smarty_tpl->getValue('runtime')['mode'] == "view"))) {?><div class="ab__mcd_descs ty-mb-s ty-mt-m"><?php $_smarty_tpl->assign('mh', '', false, NULL);
if ($_smarty_tpl->getValue('addons')['ab__multiple_cat_descriptions']['max_height'] != "disabled") {
ob_start();
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('addons')['ab__multiple_cat_descriptions']['max_height'] ?? null)===null||$tmp==='' ? 500 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->assign('mh', "max-height: ".$_prefixVariable7."px; overflow-y:auto;", false, NULL);
}
$_smarty_tpl->assign('is_exist_main_description', $_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['main'], false, NULL);
$_smarty_tpl->assign('is_exist_multi_descriptions', ($_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['main'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['ab__mcd_descs']) >= 2) || (!$_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['main'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['ab__mcd_descs']) >= 1), false, NULL);
if ($_smarty_tpl->getValue('is_exist_main_description')) {?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['description'];?>
</div><?php }
if ($_smarty_tpl->getValue('is_exist_multi_descriptions')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "under_accordion", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('category_data')['ab__mcd_object']) {?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['ab__mcd_object']['tag']), ENT_QUOTES, 'UTF-8');?>
 class="ab-md-header"><?php echo $_smarty_tpl->getValue('category_data')['ab__mcd_object']['title'];?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['ab__mcd_object']['tag']), ENT_QUOTES, 'UTF-8');?>
><?php }
$_smarty_tpl->assign('mark_as_faqpage', array("@context"=>"https://schema.org","@type"=>"FAQPage","mainEntity"=>array()), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category_data')['ab__mcd_descs'], 'd');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->key => $_smarty_tpl->getVariable('d')->value) {
$foreach20DoElse = false;
$foreach20Backup = clone $_smarty_tpl->getVariable('d');
if ($_smarty_tpl->getValue('d')['main']) {
continue 1;
}
if ($_smarty_tpl->getValue('d')['is_faq'] == 'Y') {
$_tmp_array = $_smarty_tpl->getValue('mark_as_faqpage') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['mainEntity'][] = array("@type"=>"Question","name"=>$_smarty_tpl->getValue('d')['title'],"acceptedAnswer"=>array("@type"=>"Answer","text"=>$_smarty_tpl->getValue('d')['description']));
$_smarty_tpl->assign('mark_as_faqpage', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('d')['position_on_page'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Ab_multipleCatDescriptions\\PagePositions::UNDER")) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "under_accordion", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'under_accordion');?>
<div class="ab__mcd_descs-section"><div class="ab__mcd_descs-section-title ty-hand"><<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->getValue('d')['title'];?>
</<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
></div><div id="ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
"><div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="<?php echo $_smarty_tpl->getValue('mh');?>
"><?php echo $_smarty_tpl->getValue('d')['description'];?>
</div></div></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else { ?><div class="ab__mcd_descs-section"><?php $_smarty_tpl->assign('is_open', $_smarty_tpl->getValue('d')['main'] || $_smarty_tpl->getValue('d')['is_open'] == 'Y', false, NULL);?><div class="ab__mcd_descs-section-title cm-combination ty-hand<?php if ($_smarty_tpl->getValue('is_open')) {?> open<?php }?>" id="sw_ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
"><<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->getValue('d')['title'];?>
</<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
><i id="on_ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-down-open cm-combination<?php if ($_smarty_tpl->getValue('is_open')) {?> hidden<?php }?>"></i><i id="off_ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-up-open cm-combination<?php if (!$_smarty_tpl->getValue('is_open')) {?> hidden<?php }?>"></i></div><div id="ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->getValue('is_open')) {?> hidden<?php }?>"><div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="<?php echo $_smarty_tpl->getValue('mh');?>
"><?php echo $_smarty_tpl->getValue('d')['description'];?>
</div></div></div><?php }
$_smarty_tpl->setVariable('d', $foreach20Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'under_accordion'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'under_accordion');
}
if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST") && $_smarty_tpl->getValue('mark_as_faqpage')['mainEntity']) {
echo '<script'; ?>
 type="application/ld+json" data-no-defer><?php echo json_encode($_smarty_tpl->getValue('mark_as_faqpage'));
echo '</script'; ?>
><?php }
}?></div><?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['description'])) {?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div><?php } else { ?>&nbsp;<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__multiple_cat_descriptions/views/categories/components/ab__mcd_view_description.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__multiple_cat_descriptions/views/categories/components/ab__mcd_view_description.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!( !true || empty($_smarty_tpl->getValue('category_data')['ab__mcd_descs'])) && ((( !true || empty($_REQUEST['page'])) || $_REQUEST['page'] == 1) || ($_smarty_tpl->getValue('runtime')['controller'] == "product_features" && $_smarty_tpl->getValue('runtime')['mode'] == "view"))) {?><div class="ab__mcd_descs ty-mb-s ty-mt-m"><?php $_smarty_tpl->assign('mh', '', false, NULL);
if ($_smarty_tpl->getValue('addons')['ab__multiple_cat_descriptions']['max_height'] != "disabled") {
ob_start();
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('addons')['ab__multiple_cat_descriptions']['max_height'] ?? null)===null||$tmp==='' ? 500 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->assign('mh', "max-height: ".$_prefixVariable8."px; overflow-y:auto;", false, NULL);
}
$_smarty_tpl->assign('is_exist_main_description', $_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['main'], false, NULL);
$_smarty_tpl->assign('is_exist_multi_descriptions', ($_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['main'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['ab__mcd_descs']) >= 2) || (!$_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['main'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('category_data')['ab__mcd_descs']) >= 1), false, NULL);
if ($_smarty_tpl->getValue('is_exist_main_description')) {?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('category_data')['ab__mcd_descs'][0]['description'];?>
</div><?php }
if ($_smarty_tpl->getValue('is_exist_multi_descriptions')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "under_accordion", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('category_data')['ab__mcd_object']) {?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['ab__mcd_object']['tag']), ENT_QUOTES, 'UTF-8');?>
 class="ab-md-header"><?php echo $_smarty_tpl->getValue('category_data')['ab__mcd_object']['title'];?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['ab__mcd_object']['tag']), ENT_QUOTES, 'UTF-8');?>
><?php }
$_smarty_tpl->assign('mark_as_faqpage', array("@context"=>"https://schema.org","@type"=>"FAQPage","mainEntity"=>array()), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category_data')['ab__mcd_descs'], 'd');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->key => $_smarty_tpl->getVariable('d')->value) {
$foreach21DoElse = false;
$foreach21Backup = clone $_smarty_tpl->getVariable('d');
if ($_smarty_tpl->getValue('d')['main']) {
continue 1;
}
if ($_smarty_tpl->getValue('d')['is_faq'] == 'Y') {
$_tmp_array = $_smarty_tpl->getValue('mark_as_faqpage') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['mainEntity'][] = array("@type"=>"Question","name"=>$_smarty_tpl->getValue('d')['title'],"acceptedAnswer"=>array("@type"=>"Answer","text"=>$_smarty_tpl->getValue('d')['description']));
$_smarty_tpl->assign('mark_as_faqpage', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('d')['position_on_page'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Ab_multipleCatDescriptions\\PagePositions::UNDER")) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "under_accordion", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'under_accordion');?>
<div class="ab__mcd_descs-section"><div class="ab__mcd_descs-section-title ty-hand"><<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->getValue('d')['title'];?>
</<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
></div><div id="ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
"><div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="<?php echo $_smarty_tpl->getValue('mh');?>
"><?php echo $_smarty_tpl->getValue('d')['description'];?>
</div></div></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else { ?><div class="ab__mcd_descs-section"><?php $_smarty_tpl->assign('is_open', $_smarty_tpl->getValue('d')['main'] || $_smarty_tpl->getValue('d')['is_open'] == 'Y', false, NULL);?><div class="ab__mcd_descs-section-title cm-combination ty-hand<?php if ($_smarty_tpl->getValue('is_open')) {?> open<?php }?>" id="sw_ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
"><<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->getValue('d')['title'];?>
</<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('d')['tag'] ?? null)===null||$tmp==='' ? 'div' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
><i id="on_ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-down-open cm-combination<?php if ($_smarty_tpl->getValue('is_open')) {?> hidden<?php }?>"></i><i id="off_ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
" class="ty-icon-up-open cm-combination<?php if (!$_smarty_tpl->getValue('is_open')) {?> hidden<?php }?>"></i></div><div id="ab__mcd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('d')->key), ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->getValue('is_open')) {?> hidden<?php }?>"><div class="ab__mcd_descs-section-content ty-wysiwyg-content" style="<?php echo $_smarty_tpl->getValue('mh');?>
"><?php echo $_smarty_tpl->getValue('d')['description'];?>
</div></div></div><?php }
$_smarty_tpl->setVariable('d', $foreach21Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'under_accordion'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'under_accordion');
}
if (!$_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST") && $_smarty_tpl->getValue('mark_as_faqpage')['mainEntity']) {
echo '<script'; ?>
 type="application/ld+json" data-no-defer><?php echo json_encode($_smarty_tpl->getValue('mark_as_faqpage'));
echo '</script'; ?>
><?php }
}?></div><?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('category_data')['description'])) {?><div class="ty-wysiwyg-content ty-mb-s"><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div><?php } else { ?>&nbsp;<?php }
}
}
}
