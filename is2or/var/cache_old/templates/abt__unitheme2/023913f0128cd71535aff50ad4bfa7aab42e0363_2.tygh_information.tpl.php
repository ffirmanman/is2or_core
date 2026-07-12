<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:views/checkout/components/customer/information.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29b317324_22887631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '023913f0128cd71535aff50ad4bfa7aab42e0363' => 
    array (
      0 => 'views/checkout/components/customer/information.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
))) {
function content_69aea29b317324_22887631 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout/components/customer';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="litecheckout_step_customer_info" class="litecheckout__group">
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::CONTACT_INFORMATION")), (int) 0, $_smarty_current_dir);
?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/information.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/customer/information.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="litecheckout_step_customer_info" class="litecheckout__group">
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::CONTACT_INFORMATION")), (int) 0, $_smarty_current_dir);
?>
</div>
<?php }
}
}
