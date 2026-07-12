<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:09
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_banner_multiple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba298f6697_77269444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '568289ac0780c0110ca67a78a993e82842234520' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_banner_multiple.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl' => 4,
    'tygh:common/image.tpl' => 4,
    'tygh:common/simple_scroller_init.tpl' => 2,
  ),
),false)) {
function content_6835ba298f6697_77269444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {
$_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id']));
$_smarty_tpl->_assignInScope('elements_to_scroll', 1);
if ($_smarty_tpl->tpl_vars['items']->value) {?><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="banners ut2-scroll-container<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?> multiple<?php }?>" style="<?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['margin'])) {?>padding: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'])) {?>--ab-banner-min-width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'] ?? null)===null||$tmp==='' ? '300px' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><div class="ut2-scroll-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'b');
$_smarty_tpl->tpl_vars['b']->iteration = 0;
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
$_smarty_tpl->tpl_vars['b']->iteration++;
$__foreach_b_22_saved = $_smarty_tpl->tpl_vars['b'];
$_smarty_tpl->_assignInScope('b_iteration', $_smarty_tpl->tpl_vars['b']->iteration);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banners"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['b']->value['type'] == 'abt__ut2') {
$_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['b']->value['type'] == "G") {?><div class="ut2-banner"><?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['target'] == "B") {?> target="_blank"<?php }?>><?php }
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['b']->value['main_pair'],'image_auto_size'=>true), 0, true);
if ($_smarty_tpl->tpl_vars['b']->value['url']) {?></a><?php }?></div><?php } else { ?><div class="ut2-banner ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['b']->value['description'];?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button></div><?php }
$_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>$_smarty_tpl->tpl_vars['elements_to_scroll']->value), 0, false);
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {?><div id="banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?>native-scroller<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?> owl-pagination-true <?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?> multiple<?php }?>" style="<?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['margin'])) {?>padding: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'])) {?>--ab-banner-min-width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'] ?? null)===null||$tmp==='' ? '300px' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'b');
$_smarty_tpl->tpl_vars['b']->iteration = 0;
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
$_smarty_tpl->tpl_vars['b']->iteration++;
$__foreach_b_23_saved = $_smarty_tpl->tpl_vars['b'];
$_smarty_tpl->_assignInScope('b_iteration', $_smarty_tpl->tpl_vars['b']->iteration);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banners"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['b']->value['type'] == 'abt__ut2') {
$_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['b']->value['type'] == "G") {?><div class="ut2-banner"><?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['target'] == "B") {?> target="_blank"<?php }?>><?php }
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['b']->value['main_pair'],'image_auto_size'=>true), 0, true);
if ($_smarty_tpl->tpl_vars['b']->value['url']) {?></a><?php }?></div><?php } else { ?><div class="ut2-banner ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['b']->value['description'];?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_23_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
echo '<script'; ?>
>(function(_, $) {$.ceEvent('on', 'ce.commoninit', function(context) {var slider = context.find('#banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');if (slider.length) {slider.owlCarousel({direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',items: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'], ENT_QUOTES, 'UTF-8');?>
,singleItem: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?>false<?php } else { ?>true<?php }?>,responsive: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?>false<?php } else { ?>true<?php }?>,<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?>responsiveBaseWidth: slider,<?php }?>slideSpeed: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,autoPlay: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?>false<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['delay'] > 0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false", ENT_QUOTES, 'UTF-8');
}?>,stopOnHover: true,beforeInit: function () {$.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);},<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "N") {?>pagination: false<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?>pagination: true<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "P") {?>pagination: true,paginationNumbers: true<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "A") {?>pagination: false,navigation: true,navigationText: ['<i class="ut2-icon-arrow_back_black"></i>', '<i class="ut2-icon-arrow_forward_black"></i>']<?php }?>});}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_banner_multiple.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_banner_multiple.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {
$_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id']));
$_smarty_tpl->_assignInScope('elements_to_scroll', 1);
if ($_smarty_tpl->tpl_vars['items']->value) {?><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="banners ut2-scroll-container<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?> multiple<?php }?>" style="<?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['margin'])) {?>padding: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'])) {?>--ab-banner-min-width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'] ?? null)===null||$tmp==='' ? '300px' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><div class="ut2-scroll-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'b');
$_smarty_tpl->tpl_vars['b']->iteration = 0;
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
$_smarty_tpl->tpl_vars['b']->iteration++;
$__foreach_b_24_saved = $_smarty_tpl->tpl_vars['b'];
$_smarty_tpl->_assignInScope('b_iteration', $_smarty_tpl->tpl_vars['b']->iteration);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banners"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['b']->value['type'] == 'abt__ut2') {
$_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['b']->value['type'] == "G") {?><div class="ut2-banner"><?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['target'] == "B") {?> target="_blank"<?php }?>><?php }
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['b']->value['main_pair'],'image_auto_size'=>true), 0, true);
if ($_smarty_tpl->tpl_vars['b']->value['url']) {?></a><?php }?></div><?php } else { ?><div class="ut2-banner ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['b']->value['description'];?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_24_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button></div><?php }
$_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>$_smarty_tpl->tpl_vars['elements_to_scroll']->value), 0, true);
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {?><div id="banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?>native-scroller<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?> owl-pagination-true <?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?> multiple<?php }?>" style="<?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['margin'])) {?>padding: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'])) {?>--ab-banner-min-width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['minimal_width'] ?? null)===null||$tmp==='' ? '300px' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'b');
$_smarty_tpl->tpl_vars['b']->iteration = 0;
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
$_smarty_tpl->tpl_vars['b']->iteration++;
$__foreach_b_25_saved = $_smarty_tpl->tpl_vars['b'];
$_smarty_tpl->_assignInScope('b_iteration', $_smarty_tpl->tpl_vars['b']->iteration);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banners"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['b']->value['type'] == 'abt__ut2') {
$_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['b']->value['type'] == "G") {?><div class="ut2-banner"><?php if ($_smarty_tpl->tpl_vars['b']->value['url']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['target'] == "B") {?> target="_blank"<?php }?>><?php }
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['b']->value['main_pair'],'image_auto_size'=>true), 0, true);
if ($_smarty_tpl->tpl_vars['b']->value['url']) {?></a><?php }?></div><?php } else { ?><div class="ut2-banner ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['b']->value['description'];?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_25_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
echo '<script'; ?>
>(function(_, $) {$.ceEvent('on', 'ce.commoninit', function(context) {var slider = context.find('#banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');if (slider.length) {slider.owlCarousel({direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',items: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'], ENT_QUOTES, 'UTF-8');?>
,singleItem: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?>false<?php } else { ?>true<?php }?>,responsive: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?>false<?php } else { ?>true<?php }?>,<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['multiple_mode_items'] > 1) {?>responsiveBaseWidth: slider,<?php }?>slideSpeed: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,autoPlay: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?>false<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['delay'] > 0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false", ENT_QUOTES, 'UTF-8');
}?>,stopOnHover: true,beforeInit: function () {$.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);},<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "N") {?>pagination: false<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?>pagination: true<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "P") {?>pagination: true,paginationNumbers: true<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "A") {?>pagination: false,navigation: true,navigationText: ['<i class="ut2-icon-arrow_back_black"></i>', '<i class="ut2-icon-arrow_forward_black"></i>']<?php }?>});}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php }
}
}
}
