<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:53
  from 'tygh:addons/is2or_checkout_page/components/shipping_item.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5205325b09_50586078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7401e2b344cef0774286f80c694877420ae0b24a' => 
    array (
      0 => 'addons/is2or_checkout_page/components/shipping_item.tpl',
      1 => 1773830174,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69fb5205325b09_50586078 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/components';
\Tygh\Languages\Helper::preloadLangVars(array('free','free'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><label class="is2or-shipping-item <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('shipping')['group_key']] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>is2or-shipping-item--active<?php }?>"
       onclick="is2orSelectShipping(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['group_key']), ENT_QUOTES, 'UTF-8');?>
)">
    <?php if ($_smarty_tpl->getValue('shipping')['image']) {?>
        <div class="is2or-shipping-item__logo">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('shipping')['shipping_id'],'images'=>$_smarty_tpl->getValue('shipping')['image'],'image_width'=>40,'image_height'=>20), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
    <input type="radio"
           class="litecheckout__shipping-method__radio"
           id="sh_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['group_key']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
           name="shipping_ids[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['group_key']), ENT_QUOTES, 'UTF-8');?>
]"
           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
           form="litecheckout_payments_form"
           <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('shipping')['group_key']] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>checked<?php }?>
           data-ca-lite-checkout-element="shipping-method"
           data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->getValue('shipping')['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>"
    />
    <div class="is2or-shipping-item__info">
        <div class="is2or-shipping-item__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping']), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php if ($_smarty_tpl->getValue('shipping')['delivery_time']) {?>
            <div class="is2or-shipping-item__eta"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['delivery_time']), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
    </div>
    <div class="is2or-shipping-item__price">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('shipping')['rate'])) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate']), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    </div>
</label><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_checkout_page/components/shipping_item.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_checkout_page/components/shipping_item.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><label class="is2or-shipping-item <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('shipping')['group_key']] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>is2or-shipping-item--active<?php }?>"
       onclick="is2orSelectShipping(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['group_key']), ENT_QUOTES, 'UTF-8');?>
)">
    <?php if ($_smarty_tpl->getValue('shipping')['image']) {?>
        <div class="is2or-shipping-item__logo">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('shipping')['shipping_id'],'images'=>$_smarty_tpl->getValue('shipping')['image'],'image_width'=>40,'image_height'=>20), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
    <input type="radio"
           class="litecheckout__shipping-method__radio"
           id="sh_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['group_key']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
           name="shipping_ids[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['group_key']), ENT_QUOTES, 'UTF-8');?>
]"
           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
           form="litecheckout_payments_form"
           <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('shipping')['group_key']] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>checked<?php }?>
           data-ca-lite-checkout-element="shipping-method"
           data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->getValue('shipping')['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>"
    />
    <div class="is2or-shipping-item__info">
        <div class="is2or-shipping-item__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping']), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php if ($_smarty_tpl->getValue('shipping')['delivery_time']) {?>
            <div class="is2or-shipping-item__eta"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['delivery_time']), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
    </div>
    <div class="is2or-shipping-item__price">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('shipping')['rate'])) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate']), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    </div>
</label><?php }
}
}
