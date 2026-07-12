<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/reward_points/views/products/components/product_representation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ffbd41b7_67635477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f67bbabcea1445dc59a2cb831efaefa0e45a8cc' => 
    array (
      0 => 'addons/reward_points/views/products/components/product_representation.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ffbd41b7_67635477 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/reward_points/views/products/components';
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','points_lowercase','reward_points','points_lowercase','price_in_points','points_lowercase','reward_points','points_lowercase'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_price_in_points', (($tmp = $_smarty_tpl->getValue('show_price_in_points') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_price_in_points') && $_smarty_tpl->getValue('product')['points_info']['price']) {?>
    <div class="ty-reward-group">
        <span class="ty-control-group__label ty-reward-points-product-representation__label ty-reward-points-product-representation__label--price-in-points product-list-field"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price_in_points", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
        <span class="ty-control-group__item ty-reward-points-product-representation__item ty-reward-points-product-representation__item--price-in-points" id="price_in_points_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('product')['points_info']['price']), $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></span>
    </div>
<?php }?>
<div class="ty-reward-group product-list-field<?php if (!$_smarty_tpl->getValue('product')['points_info']['reward']['amount']) {?> hidden<?php }?>">
    <span class="ty-control-group__label ty-reward-points-product-representation__label ty-reward-points-product-representation__label--reward-points"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reward_points", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
    <span class="ty-control-group__item ty-reward-points-product-representation__item ty-reward-points-product-representation__item--reward-points" id="reward_points_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('product')['points_info']['reward']['amount']), $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></span>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/views/products/components/product_representation.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/reward_points/views/products/components/product_representation.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_price_in_points', (($tmp = $_smarty_tpl->getValue('show_price_in_points') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('show_price_in_points') && $_smarty_tpl->getValue('product')['points_info']['price']) {?>
    <div class="ty-reward-group">
        <span class="ty-control-group__label ty-reward-points-product-representation__label ty-reward-points-product-representation__label--price-in-points product-list-field"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price_in_points", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
        <span class="ty-control-group__item ty-reward-points-product-representation__item ty-reward-points-product-representation__item--price-in-points" id="price_in_points_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('product')['points_info']['price']), $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></span>
    </div>
<?php }?>
<div class="ty-reward-group product-list-field<?php if (!$_smarty_tpl->getValue('product')['points_info']['reward']['amount']) {?> hidden<?php }?>">
    <span class="ty-control-group__label ty-reward-points-product-representation__label ty-reward-points-product-representation__label--reward-points"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reward_points", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
    <span class="ty-control-group__item ty-reward-points-product-representation__item ty-reward-points-product-representation__item--reward-points" id="reward_points_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('product')['points_info']['reward']['amount']), $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></span>
</div><?php }
}
}
