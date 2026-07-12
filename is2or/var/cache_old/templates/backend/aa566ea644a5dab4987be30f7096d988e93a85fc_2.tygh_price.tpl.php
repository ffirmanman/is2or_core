<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:38
  from 'tygh:common/price.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae465ec493b5_42516429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa566ea644a5dab4987be30f7096d988e93a85fc' => 
    array (
      0 => 'common/price.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae465ec493b5_42516429 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
$_smarty_tpl->assign('show_currency', (($tmp = $_smarty_tpl->getValue('show_currency') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('space', ((($tmp = $_smarty_tpl->getValue('enable_non_breaking_space') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) ? "&nbsp;" : " ", false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "currencies", null, null);
if ($_smarty_tpl->getValue('settings')['General']['alternative_currency'] == "use_selected_and_alternative") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),false);
if ($_smarty_tpl->getValue('secondary_currency') != $_smarty_tpl->getValue('primary_currency')) {
echo $_smarty_tpl->getValue('space');?>
(<?php if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),true,$_smarty_tpl->getValue('is_integer'));
if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"></span><?php }?>)<?php }
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),true);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('view') == "input") {?><input type="text" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" class="cm-numeric <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('placeholder')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('show_currency')) {?>data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')]['symbol']);?>
"<?php }?> <?php if ($_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')]['after'] == "Y") {?>data-p-sign="s"<?php }?> data-a-dec="." data-a-sep="," <?php if ($_smarty_tpl->getValue('product_id')) {?>data-ct-product="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'currencies');
}
}
}
