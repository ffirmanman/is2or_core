<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:addons/vendor_rating/hooks/companies/list_extra_data_th.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7a2f768_54837072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd611c01581052746d631b32c269550fbafdf4ca7' => 
    array (
      0 => 'addons/vendor_rating/hooks/companies/list_extra_data_th.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f7a2f768_54837072 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_rating/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.absolute_vendor_rating','vendor_rating.absolute_vendor_rating_short_2'));
?>
<a class="cm-ajax"
    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=absolute_vendor_rating&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-target-id="pagination_contents"
    title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_rating.absolute_vendor_rating", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_rating.absolute_vendor_rating_short_2", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    <?php if ($_smarty_tpl->getValue('search')['sort_by'] == "absolute_vendor_rating") {
echo $_smarty_tpl->getValue('c_icon');
} else {
echo $_smarty_tpl->getValue('c_dummy');
}?>
</a><?php }
}
