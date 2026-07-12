<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:13:32
  from 'tygh:addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4c8c5634f7_75586012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed4635feed1df9f0003c02546f9cdddb0bf5d372' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69fb4c8c5634f7_75586012 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('items')) {?><div id="banner_slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel <?php if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "D" && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > 1 || $_smarty_tpl->getValue('block')['properties']['navigation'] == "P" && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > 1) {?>owl-pagination-true <?php }?>" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('block')['properties']['margin'])) {?>style="--ab-banner-block-margin: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['margin']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'b');
$_smarty_tpl->getVariable('b')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('b')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('b');
$_smarty_tpl->assign('b_iteration', $_smarty_tpl->getVariable('b')->iteration, false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('b')['type'] == 'abt__ut2') {
$_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('b')['type'] == "G") {?><div class="ut2-banner"><?php if ($_smarty_tpl->getValue('b')['url']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['target'] == "B") {?> target="_blank"<?php }?>><?php }
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('b')['main_pair'],'image_auto_size'=>true), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('b')['url']) {?></a><?php }?></div><?php } else { ?><div class="ut2-banner ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('b')['description'];?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->setVariable('b', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }
echo '<script'; ?>
>(function(_, $) {$.ceEvent('on', 'ce.commoninit', function(context) {var slider = context.find('#banner_slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
');if (slider.length) {slider.owlCarousel({direction: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
',items: 1,singleItem: true,responsive: true,slideSpeed: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,autoPlay: <?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('block')['properties']['delay'] > 0) ? $_smarty_tpl->getValue('block')['properties']['delay']*1000 : "false"), ENT_QUOTES, 'UTF-8');?>
,stopOnHover: true,beforeInit: function () {$.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);},<?php if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "N") {?>pagination: false<?php }
if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "D") {?>pagination: true<?php }
if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "P") {?>pagination: true,paginationNumbers: true<?php }
if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "A") {?>pagination: false,navigation: true,navigationText: ['<i class="ut2-icon-arrow_back_black"></i>', '<i class="ut2-icon-arrow_forward_black"></i>']<?php }?>});}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('items')) {?><div id="banner_slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel <?php if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "D" && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > 1 || $_smarty_tpl->getValue('block')['properties']['navigation'] == "P" && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > 1) {?>owl-pagination-true <?php }?>" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('block')['properties']['margin'])) {?>style="--ab-banner-block-margin: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['margin']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'b');
$_smarty_tpl->getVariable('b')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('b')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('b');
$_smarty_tpl->assign('b_iteration', $_smarty_tpl->getVariable('b')->iteration, false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('b')['type'] == 'abt__ut2') {
$_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('b')['type'] == "G") {?><div class="ut2-banner"><?php if ($_smarty_tpl->getValue('b')['url']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['target'] == "B") {?> target="_blank"<?php }?>><?php }
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('b')['main_pair'],'image_auto_size'=>true), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('b')['url']) {?></a><?php }?></div><?php } else { ?><div class="ut2-banner ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('b')['description'];?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->setVariable('b', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }
echo '<script'; ?>
>(function(_, $) {$.ceEvent('on', 'ce.commoninit', function(context) {var slider = context.find('#banner_slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
');if (slider.length) {slider.owlCarousel({direction: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
',items: 1,singleItem: true,responsive: true,slideSpeed: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,autoPlay: <?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('block')['properties']['delay'] > 0) ? $_smarty_tpl->getValue('block')['properties']['delay']*1000 : "false"), ENT_QUOTES, 'UTF-8');?>
,stopOnHover: true,beforeInit: function () {$.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);},<?php if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "N") {?>pagination: false<?php }
if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "D") {?>pagination: true<?php }
if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "P") {?>pagination: true,paginationNumbers: true<?php }
if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "A") {?>pagination: false,navigation: true,navigationText: ['<i class="ut2-icon-arrow_back_black"></i>', '<i class="ut2-icon-arrow_forward_black"></i>']<?php }?>});}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php }
}
}
