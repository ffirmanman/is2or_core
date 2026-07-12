<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:38
  from 'tygh:addons/gdpr/hooks/gdpr/popup_content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabe0fde16_14846046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '738af6d325f69a14e12f30dbaeddd11aae4482d2' => 
    array (
      0 => 'addons/gdpr/hooks/gdpr/popup_content.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69adaabe0fde16_14846046 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/gdpr/hooks/gdpr';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('input_id') == "gdpr_agreements_product_subscription") {?>
    <?php echo '<script'; ?>
>
        (function () {
            $('#opener_gdpr_popup_gdpr_agreements_product_subscription_label')
                .append($('#content_gdpr_popup_gdpr_agreements_product_subscription_label'))
                .parent()
                .addClass('object-container');
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/gdpr/popup_content.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gdpr/hooks/gdpr/popup_content.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('input_id') == "gdpr_agreements_product_subscription") {?>
    <?php echo '<script'; ?>
>
        (function () {
            $('#opener_gdpr_popup_gdpr_agreements_product_subscription_label')
                .append($('#content_gdpr_popup_gdpr_agreements_product_subscription_label'))
                .parent()
                .addClass('object-container');
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
}
}
}
