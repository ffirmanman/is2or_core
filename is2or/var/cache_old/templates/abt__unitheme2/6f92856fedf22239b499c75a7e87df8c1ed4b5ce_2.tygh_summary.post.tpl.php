<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/gift_certificates/hooks/checkout/summary.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29beb9708_49366484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f92856fedf22239b499c75a7e87df8c1ed4b5ce' => 
    array (
      0 => 'addons/gift_certificates/hooks/checkout/summary.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69aea29beb9708_49366484 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['use_gift_certificates'], 'ugc', false, 'ugc_key');
$foreach50DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ugc_key')->value => $_smarty_tpl->getVariable('ugc')->value) {
$foreach50DoElse = false;
?>
        <tr>
            <td class="ty-checkout-summary__item">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->getValue('ugc_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ugc_key')), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('code'=>$_smarty_tpl->getValue('ugc_key'),'r_url'=>rawurlencode((string)$_smarty_tpl->getValue('config')['current_url'])), (int) 0, $_smarty_current_dir);
?>
            </td>
            <td class="ty-checkout-summary__item ty-right">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->getValue('ugc')['cost'])), (int) 0, $_smarty_current_dir);
?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/summary.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gift_certificates/hooks/checkout/summary.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['use_gift_certificates'], 'ugc', false, 'ugc_key');
$foreach51DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ugc_key')->value => $_smarty_tpl->getVariable('ugc')->value) {
$foreach51DoElse = false;
?>
        <tr>
            <td class="ty-checkout-summary__item">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->getValue('ugc_key')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ugc_key')), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('code'=>$_smarty_tpl->getValue('ugc_key'),'r_url'=>rawurlencode((string)$_smarty_tpl->getValue('config')['current_url'])), (int) 0, $_smarty_current_dir);
?>
            </td>
            <td class="ty-checkout-summary__item ty-right">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->getValue('ugc')['cost'])), (int) 0, $_smarty_current_dir);
?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
