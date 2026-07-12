<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:addons/ab__seo_for_tags/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fbae33a2_49295616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19aecaa9a21595c94b8125d24e7d994414951333' => 
    array (
      0 => 'addons/ab__seo_for_tags/hooks/index/scripts.post.tpl',
      1 => 1767831043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fbae33a2_49295616 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__seo_for_tags/hooks/index';
if ($_smarty_tpl->getValue('runtime')['controller'] == 'tags' && $_smarty_tpl->getValue('runtime')['mode'] == 'manage' && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')('ab__seo_for_tags.update','GET')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
(function (_, $) {
$.ceEvent('on', 'ce.commoninit', function (context) {
$('input[name^=tag_ids]', context).each(function() {
var input = $(this);
if (!input.data('ab__sft_inited')) {
var url = fn_url('ab__seo_for_tags.update?tag_id=' + this.value);
$(this).closest('tr').find('.hidden-tools .dropdown-menu').prepend('<li><a href="' + url + '"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__seo_for_tags.edit_seo_data', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>');
input.data('ab__sft_inited', true);
}
});
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
