<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5efb614_98685210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c0c180766324581e77bc8a264a20fcc41704ca' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/scripts.post.tpl',
      1 => 1736834968,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f5efb614_98685210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__am.note','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
$(_.doc).on('click', '.compatible-title', function (e) {
var ct = $(this).parent().find('div.compatible-text');
if (ct.hasClass('hidden')) ct.removeClass('hidden');
else ct.addClass('hidden');
});
$.ceEvent('on', 'ce.commoninit', function(context) {
var tooltips = <?php if ($_smarty_tpl->tpl_vars['abam_tooltips']->value) {
echo json_encode($_smarty_tpl->tpl_vars['abam_tooltips']->value);
} else { ?> { } <?php }?>;
if (Object.keys(tooltips).length !== 0){
$.each(tooltips, function(addon, addon_items) {
$.each(addon_items, function(item, value) {
context.find(value.selector).append('<a target="_blank" href="' + value.url + '" class="clearfix ab-am-tooltip"><i class="icon-share"></i><?php echo $_smarty_tpl->__("ab__am.note");?>
</a>');
});
});
}
});
$.ceEvent('on', 'ce.commoninit', function(context) {
var ab_am_events = <?php if ($_smarty_tpl->tpl_vars['abam_events']->value) {
echo json_encode($_smarty_tpl->tpl_vars['abam_events']->value);
} else { ?>{ available_updates: { } }<?php }?>;
var available_updates = Object.keys(ab_am_events.available_updates).length;
if (available_updates){
var menu = $('.navbar-admin-top .nav-pills');
if (menu.find('.ab__addons_manager').length){
menu.find('.ab__addons_manager').parent().parent().find('a:first > b').before('<span title="<?php echo $_smarty_tpl->__("ab__am.menu.available_updates");?>
" class="ab-am-available-updates"></span>');
menu.find('.ab__addons_manager').find('a.ab__am').append('<span title="<?php echo $_smarty_tpl->__("ab__am.menu.available_updates");?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
var menu = $('.adv-buttons');
if (menu.find('.ab__am-menu').length){
menu.find('.ab__am-menu').children('a').append('<span title="<?php echo $_smarty_tpl->__("ab__am.menu.available_updates");?>
" class="ab-am-available-updates"></span>');
if (menu.find('.ab__am-menu').find('.ab__am').length){
menu.find('.ab__am-menu').find('.ab__am').append('<span title="<?php echo $_smarty_tpl->__("ab__am.menu.available_updates");?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
}
var li_a = $('#elm_developer_pages a:contains("AlexBranding")');
if (li_a.length){
if (li_a.find('.ab-am-available-updates').length){
li_a.find('.ab-am-available-updates').remove();
}
li_a.append('<span title="<?php echo $_smarty_tpl->__("ab__am.menu.available_updates");?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
}
});
function delay(callback, ms) {
var timer = 0;
return function() {
var context = this, args = arguments;
clearTimeout(timer);
timer = setTimeout(function () {
callback.apply(context, args);
}, ms || 0);
};
}
$('#ab__am_search').on('keyup input', delay(function (e) {
var str = $(this).val();
if (str.length) {
$('#ab__am_search__clear').removeClass('hidden');
} else {
$('#ab__am_search__clear').addClass('hidden');
}
$('.ab__am-section.collapsed').click();
$('.ab-am-set-name-wrapper:not(.open)').click();
$('table.ab-am-addons tbody').each(function (index, element) {
if ($(this).find('.ab-am-addon-name,.ab-am-addon-description').text().toUpperCase().indexOf(str.toUpperCase()) >= 0){
$(this).removeClass('hidden');
} else {
$(this).addClass('hidden');
}
});
$('#ab__am_available_sets > table.ab-am-table > tbody').each(function () {
var all = 0;
var hidden = 0;
all = $(this).find('.ab-am-addons > tbody').size();
hidden = $(this).find('.ab-am-addons > tbody.hidden').size();
if (all == hidden){
$(this).addClass('hidden');
}else{
$(this).removeClass('hidden');
}
});
$('#ab__am_search__clear').on('click', function(){
$('#ab__am_search').val('').focus();
$('table.ab-am-addons tbody').removeClass('hidden');
$('table.ab-am-set tbody').removeClass('hidden');
$(this).addClass('hidden');
});
}, 500));
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
