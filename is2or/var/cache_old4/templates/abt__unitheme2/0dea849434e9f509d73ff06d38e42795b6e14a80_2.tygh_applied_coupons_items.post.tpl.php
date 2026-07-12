<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:53
  from 'tygh:addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5205028624_31560205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dea849434e9f509d73ff06d38e42795b6e14a80' => 
    array (
      0 => 'addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
    'tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl' => 2,
  ),
))) {
function content_69fb5205028624_31560205 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['use_gift_certificates'], 'ugc', false, 'ugc_key');
$foreach60DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ugc_key')->value => $_smarty_tpl->getVariable('ugc')->value) {
$foreach60DoElse = false;
?>
        <li class="ty-coupons__item">
            <span class="ty-strong ty-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->getValue('ugc_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ugc_key')), ENT_QUOTES, 'UTF-8');?>
</a>
            (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('ugc')['cost']), (int) 0, $_smarty_current_dir);
?>)
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('code'=>$_smarty_tpl->getValue('ugc_key'),'additional_ids'=>",payment-methods",'r_url'=>rawurlencode((string)$_smarty_tpl->getValue('config')['current_url'])), (int) 0, $_smarty_current_dir);
?>
        </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gift_certificates/hooks/checkout/applied_coupons_items.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['use_gift_certificates'], 'ugc', false, 'ugc_key');
$foreach61DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ugc_key')->value => $_smarty_tpl->getVariable('ugc')->value) {
$foreach61DoElse = false;
?>
        <li class="ty-coupons__item">
            <span class="ty-strong ty-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->getValue('ugc_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ugc_key')), ENT_QUOTES, 'UTF-8');?>
</a>
            (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('ugc')['cost']), (int) 0, $_smarty_current_dir);
?>)
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('code'=>$_smarty_tpl->getValue('ugc_key'),'additional_ids'=>",payment-methods",'r_url'=>rawurlencode((string)$_smarty_tpl->getValue('config')['current_url'])), (int) 0, $_smarty_current_dir);
?>
        </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
