<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/rma/views/products/components/return_period_representation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ffbadba9_50579753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c71c2b4f2769f9980c0705506c476aaa36b519c1' => 
    array (
      0 => 'addons/rma/views/products/components/return_period_representation.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ffbadba9_50579753 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/rma/views/products/components';
\Tygh\Languages\Helper::preloadLangVars(array('return_period','days','return_period','days'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_return_period', (($tmp = $_smarty_tpl->getValue('show_return_period') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_return_period') && $_smarty_tpl->getValue('addons')['rma']['display_product_return_period'] == "Y" && $_smarty_tpl->getValue('product')['return_period'] && $_smarty_tpl->getValue('product')['is_returnable'] == "Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("return_period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['return_period']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("days", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/products/components/return_period_representation.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/rma/views/products/components/return_period_representation.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_return_period', (($tmp = $_smarty_tpl->getValue('show_return_period') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_return_period') && $_smarty_tpl->getValue('addons')['rma']['display_product_return_period'] == "Y" && $_smarty_tpl->getValue('product')['return_period'] && $_smarty_tpl->getValue('product')['is_returnable'] == "Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("return_period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['return_period']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("days", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    </div>
<?php }
}
}
}
