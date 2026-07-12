<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:addons/cr_vendor_page_pro/blocks/static_templates/vendor_shipping_address.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a72108e82_04221495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953bc659020ed18718ae10290f31d500dbe91631' => 
    array (
      0 => 'addons/cr_vendor_page_pro/blocks/static_templates/vendor_shipping_address.tpl',
      1 => 1776438348,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a72108e82_04221495 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('shipping_address','shipping_address'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-company-detail__info-list">
    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>

    <div class="ty-company-detail__control-group">
        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['address']), ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
    <div class="ty-company-detail__control-group">
                            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['city']), ENT_QUOTES, 'UTF-8');?>

                                , <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_state_name')($_smarty_tpl->getValue('company_data')['state'],$_smarty_tpl->getValue('company_data')['country'])), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['zipcode']), ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
    <div class="ty-company-detail__control-group">
        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('company_data')['country'])), ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cr_vendor_page_pro/blocks/static_templates/vendor_shipping_address.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cr_vendor_page_pro/blocks/static_templates/vendor_shipping_address.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-company-detail__info-list">
    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>

    <div class="ty-company-detail__control-group">
        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['address']), ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
    <div class="ty-company-detail__control-group">
                            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['city']), ENT_QUOTES, 'UTF-8');?>

                                , <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_state_name')($_smarty_tpl->getValue('company_data')['state'],$_smarty_tpl->getValue('company_data')['country'])), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['zipcode']), ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
    <div class="ty-company-detail__control-group">
        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_country_name')($_smarty_tpl->getValue('company_data')['country'])), ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
</div><?php }
}
}
