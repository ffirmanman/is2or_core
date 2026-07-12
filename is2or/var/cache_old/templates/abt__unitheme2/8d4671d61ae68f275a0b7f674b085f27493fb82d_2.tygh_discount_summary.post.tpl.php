<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/reward_points/hooks/checkout/discount_summary.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29be53eb9_09390706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d4671d61ae68f275a0b7f674b085f27493fb82d' => 
    array (
      0 => 'addons/reward_points/hooks/checkout/discount_summary.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69aea29be53eb9_09390706 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/reward_points/hooks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('points_in_use','points_lowercase','points_in_use','points_lowercase'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['points_info']['in_use']) {
$_smarty_tpl->assign('_redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <tr class="ty-checkout-summary__order_discount">
        <td class="ty-checkout-summary__item">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_in_use", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('cart')['points_info']['in_use']['points']), $_smarty_tpl->getSmarty()->getLanguage());?>
)
        </td>
        <td class="ty-checkout-summary__item ty-right discount-price">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->getValue('_redirect_url')),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->getValue('additional_ids'))), (int) 0, $_smarty_current_dir);
?>
        </td>
    </tr>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/discount_summary.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/reward_points/hooks/checkout/discount_summary.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['points_info']['in_use']) {
$_smarty_tpl->assign('_redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <tr class="ty-checkout-summary__order_discount">
        <td class="ty-checkout-summary__item">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_in_use", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('cart')['points_info']['in_use']['points']), $_smarty_tpl->getSmarty()->getLanguage());?>
)
        </td>
        <td class="ty-checkout-summary__item ty-right discount-price">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->getValue('_redirect_url')),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->getValue('additional_ids'))), (int) 0, $_smarty_current_dir);
?>
        </td>
    </tr>
<?php }
}
}
}
