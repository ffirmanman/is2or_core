<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:53
  from 'tygh:blocks/lite_checkout/abt__ut2_place_order_button.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb520507e916_36722251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd728df9d9559abe8dfbbee6966d2909592e64938' => 
    array (
      0 => 'blocks/lite_checkout/abt__ut2_place_order_button.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image_verification.tpl' => 2,
    'tygh:views/checkout/components/final_section.tpl' => 2,
  ),
))) {
function content_69fb520507e916_36722251 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/lite_checkout';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "image_verification", null, null);
$_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"checkout"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_verification')) {?>
    <div class="litecheckout__group">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_verification');?>

    </div>
<?php }?>

<div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->getValue('payment')['payment_id']), (int) 0, $_smarty_current_dir);
?>
<!--litecheckout_final_section--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/abt__ut2_place_order_button.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/lite_checkout/abt__ut2_place_order_button.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "image_verification", null, null);
$_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"checkout"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_verification')) {?>
    <div class="litecheckout__group">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'image_verification');?>

    </div>
<?php }?>

<div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->getValue('payment')['payment_id']), (int) 0, $_smarty_current_dir);
?>
<!--litecheckout_final_section--></div><?php }
}
}
