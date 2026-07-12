<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:37
  from 'tygh:addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabdf19d95_44121761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19191172f1948ec39ffdf57acc0c53f3afc305a2' => 
    array (
      0 => 'addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gdpr/componentes/agreement_checkbox.tpl' => 2,
  ),
))) {
function content_69adaabdf19d95_44121761 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/newsletters/addons/gdpr/hooks/newsletters';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_agreement', false, false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"newsletters_subscribe",'meta'=>"cm-gdpr-newsletters-agreement",'suffix'=>$_smarty_tpl->getValue('tab_id')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('show_agreement')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'agreement_contents');?>


    <?php echo '<script'; ?>
>
        (function(_, $) {
            $.ceEvent('on', 'ce.gdpr_agreement_accepted', function ($item, context) {
                var checked = $item.prop('checked');
                var $subscription_items = $item.closest('.ty-newsletters').find('input:checkbox').not($item);

                if (checked) {
                    $subscription_items.prop('disabled', false);
                } else {
                    $subscription_items.prop('disabled', true).prop('checked', false);
                }
            });

            $.ceEvent('on', 'ce.commoninit', function(context) {
                $(context).find('.ty-newsletters').find('input:checkbox').not('.cm-gdpr-newsletters-agreement, input:checked').prop('disabled', true);
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_agreement', false, false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"newsletters_subscribe",'meta'=>"cm-gdpr-newsletters-agreement",'suffix'=>$_smarty_tpl->getValue('tab_id')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('show_agreement')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'agreement_contents');?>


    <?php echo '<script'; ?>
>
        (function(_, $) {
            $.ceEvent('on', 'ce.gdpr_agreement_accepted', function ($item, context) {
                var checked = $item.prop('checked');
                var $subscription_items = $item.closest('.ty-newsletters').find('input:checkbox').not($item);

                if (checked) {
                    $subscription_items.prop('disabled', false);
                } else {
                    $subscription_items.prop('disabled', true).prop('checked', false);
                }
            });

            $.ceEvent('on', 'ce.commoninit', function(context) {
                $(context).find('.ty-newsletters').find('input:checkbox').not('.cm-gdpr-newsletters-agreement, input:checked').prop('disabled', true);
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>


<?php }
}
}
