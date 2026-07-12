<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/select_vendor.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467903c682_23863103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da0677cc428b43abf1bb4495a91bb97faba7cea3' => 
    array (
      0 => 'common/select_vendor.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/ajax_select_object.tpl' => 1,
  ),
))) {
function content_69ae467903c682_23863103 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('search_by_vendor','search_by_owner','all_vendors'));
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? "company_id" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('name', (($tmp = $_smarty_tpl->getValue('name') ?? null)===null||$tmp==='' ? "company_id" ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->assign('lang_search_by_vendor', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_by_vendor", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>
    <?php $_smarty_tpl->assign('lang_search_by_vendor', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_by_owner", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<?php if (!$_smarty_tpl->getValue('runtime')['company_id'] && !$_smarty_tpl->getValue('runtime')['simple_ultimate']) {?>

<div class="<?php echo (($tmp = $_smarty_tpl->getValue('class') ?? null)===null||$tmp==='' ? "control-group" ?? null : $tmp);?>
">
    <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('search')['company_id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
    <label class="control-label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('lang_search_by_vendor')), ENT_QUOTES, 'UTF-8');?>
</label>
    <div class="controls">
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_url'=>"companies.get_companies_list?show_all=Y&search=Y",'text'=>(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('search')['company_id']) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("all_vendors", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'result_elm'=>$_smarty_tpl->getValue('id'),'id'=>((string)$_smarty_tpl->getValue('id'))."_selector",'relative_dropdown'=>$_smarty_tpl->getValue('relative_dropdown')), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>

<?php }
}
}
