<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/ab__addons_manager/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afbc0774_25459540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d4d717727934987da2cd15d96c72aa96ee36f9f' => 
    array (
      0 => 'addons/ab__addons_manager/hooks/index/scripts.post.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afbc0774_25459540 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__addons_manager/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__am.note','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates','ab__am.menu.available_updates'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
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
var tooltips = <?php if ($_smarty_tpl->getValue('abam_tooltips')) {
echo json_encode($_smarty_tpl->getValue('abam_tooltips'));
} else { ?> { } <?php }?>;
if (Object.keys(tooltips).length !== 0){
$.each(tooltips, function(addon, addon_items) {
$.each(addon_items, function(item, value) {
context.find(value.selector).append('<a target="_blank" href="' + value.url + '" class="clearfix ab-am-tooltip"><i class="icon-share"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__am.note", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>');
});
});
}
});
$.ceEvent('on', 'ce.commoninit', function(context) {
var ab_am_events = <?php if ($_smarty_tpl->getValue('abam_events')) {
echo json_encode($_smarty_tpl->getValue('abam_events'));
} else { ?>{ available_updates: { } }<?php }?>;
var available_updates = Object.keys(ab_am_events.available_updates).length;
if (available_updates){
var menu = $('.navbar-admin-top .nav-pills');
if (menu.find('.ab__addons_manager').length){
menu.find('.ab__addons_manager').parent().parent().find('a:first > b').before('<span title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__am.menu.available_updates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ab-am-available-updates"></span>');
menu.find('.ab__addons_manager').find('a.ab__am').append('<span title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__am.menu.available_updates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
var menu = $('.adv-buttons');
if (menu.find('.ab__am-menu').length){
menu.find('.ab__am-menu').children('a').append('<span title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__am.menu.available_updates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ab-am-available-updates"></span>');
if (menu.find('.ab__am-menu').find('.ab__am').length){
menu.find('.ab__am-menu').find('.ab__am').append('<span title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__am.menu.available_updates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ab-am-available-updates">' + available_updates + '</span>');
}
}
var li_a = $('#elm_developer_pages a:contains("AlexBranding")');
if (li_a.length){
if (li_a.find('.ab-am-available-updates').length){
li_a.find('.ab-am-available-updates').remove();
}
li_a.append('<span title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__am.menu.available_updates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
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
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
