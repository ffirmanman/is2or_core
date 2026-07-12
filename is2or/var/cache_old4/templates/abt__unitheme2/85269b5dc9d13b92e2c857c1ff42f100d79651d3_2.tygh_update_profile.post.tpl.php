<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:21
  from 'tygh:addons/gdpr/hooks/checkout/update_profile.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c508b724_88211880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85269b5dc9d13b92e2c857c1ff42f100d79651d3' => 
    array (
      0 => 'addons/gdpr/hooks/checkout/update_profile.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gdpr/componentes/agreement_checkbox.tpl' => 2,
  ),
))) {
function content_69fb53c508b724_88211880 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gdpr/hooks/checkout';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_agreement', false, false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkout_profiles_update",'agreement_required'=>true), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('show_agreement')) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'agreement_contents');?>

        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/checkout/update_profile.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gdpr/hooks/checkout/update_profile.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_agreement', false, false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkout_profiles_update",'agreement_required'=>true), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('show_agreement')) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'agreement_contents');?>

        </div>
    </div>
<?php }
}
}
}
