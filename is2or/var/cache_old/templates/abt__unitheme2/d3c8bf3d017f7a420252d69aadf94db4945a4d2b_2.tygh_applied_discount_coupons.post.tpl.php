<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:12
  from 'tygh:addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29c063df5_59986127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c8bf3d017f7a420252d69aadf94db4945a4d2b' => 
    array (
      0 => 'addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69aea29c063df5_59986127 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/reward_points/hooks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('points_to_use','apply','apply','text_point_in_account','points_lowercase','points_in_use_lowercase','points_to_use','apply','apply','text_point_in_account','points_lowercase','points_in_use_lowercase'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('runtime')['mode'] == "checkout" && $_smarty_tpl->getValue('cart_products') && $_smarty_tpl->getValue('cart')['points_info']['total_price'] && $_smarty_tpl->getValue('user_info')['points'] > 0) {?>
    <form class="cm-ajax cm-ajax-full-render" name="point_payment_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" id="point_payment_form">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,litecheckout_form" />

        <div class="ty-discount-coupon__control-group ty-reward-points__coupon ty-input-append ty-inline-block">
            <input type="text" class="ty-input-text ty-valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_to_use", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" />
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.point_payment",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
    </form>

    <?php if ($_smarty_tpl->getValue('user_info')['points']) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:reward_points"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-coupons__item ty-discount-info ut2_points-info">
                <span class="ty-caret-info">
                    <span class="ty-caret-outer"></span>
                    <span class="ty-caret-inner"></span>
                </span>
                <span class="ty-reward-points__txt-point"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_point_in_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('user_info')['points']), $_smarty_tpl->getSmarty()->getLanguage());?>
.</span>
                <?php if ($_smarty_tpl->getValue('cart')['points_info']['in_use']['points']) {?>
                    <?php $_smarty_tpl->assign('_redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('use_ajax')) {
$_smarty_tpl->assign('_class', "cm-ajax", false, NULL);
}?>
                    <span class="ty-reward-points__points-in-use">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_in_use_lowercase", array($_smarty_tpl->getValue('cart')['points_info']['in_use']['points']), $_smarty_tpl->getSmarty()->getLanguage());?>
.
                        (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['points_info']['in_use']['cost']), (int) 0, $_smarty_current_dir);
?>)
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->getValue('_redirect_url'))." ",'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points,litecheckout_form"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                <?php }?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:reward_points"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/reward_points/hooks/checkout/applied_discount_coupons.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('runtime')['mode'] == "checkout" && $_smarty_tpl->getValue('cart_products') && $_smarty_tpl->getValue('cart')['points_info']['total_price'] && $_smarty_tpl->getValue('user_info')['points'] > 0) {?>
    <form class="cm-ajax cm-ajax-full-render" name="point_payment_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" id="point_payment_form">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,litecheckout_form" />

        <div class="ty-discount-coupon__control-group ty-reward-points__coupon ty-input-append ty-inline-block">
            <input type="text" class="ty-input-text ty-valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_to_use", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" />
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.point_payment",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
    </form>

    <?php if ($_smarty_tpl->getValue('user_info')['points']) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:reward_points"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-coupons__item ty-discount-info ut2_points-info">
                <span class="ty-caret-info">
                    <span class="ty-caret-outer"></span>
                    <span class="ty-caret-inner"></span>
                </span>
                <span class="ty-reward-points__txt-point"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_point_in_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('user_info')['points']), $_smarty_tpl->getSmarty()->getLanguage());?>
.</span>
                <?php if ($_smarty_tpl->getValue('cart')['points_info']['in_use']['points']) {?>
                    <?php $_smarty_tpl->assign('_redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('use_ajax')) {
$_smarty_tpl->assign('_class', "cm-ajax", false, NULL);
}?>
                    <span class="ty-reward-points__points-in-use">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_in_use_lowercase", array($_smarty_tpl->getValue('cart')['points_info']['in_use']['points']), $_smarty_tpl->getSmarty()->getLanguage());?>
.
                        (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['points_info']['in_use']['cost']), (int) 0, $_smarty_current_dir);
?>)
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->getValue('_redirect_url'))." ",'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points,litecheckout_form"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                <?php }?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:reward_points"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
}
}
}
}
