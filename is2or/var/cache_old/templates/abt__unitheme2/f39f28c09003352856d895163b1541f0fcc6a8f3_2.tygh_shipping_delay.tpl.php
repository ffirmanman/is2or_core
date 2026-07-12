<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/warehouses/components/shipping_delay.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ee2131c5_82565160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f39f28c09003352856d895163b1541f0fcc6a8f3' => 
    array (
      0 => 'addons/warehouses/components/shipping_delay.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1ee2131c5_82565160 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/warehouses/components';
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.shipping_delay.description','warehouses.shipping_delay.description.default','warehouses.shipping_delay.description','warehouses.shipping_delay.description.default'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('warn_about_delay')) {?>
    <?php $_smarty_tpl->assign('uid', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "warehouse_shipping_delay_".((string)$_smarty_tpl->getValue('uid')), null, null);?>
        <?php if ($_smarty_tpl->getValue('shipping_delay')) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.shipping_delay.description", array("[shipping_delay]"=>$_smarty_tpl->getValue('shipping_delay')), $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.shipping_delay.description.default", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <div class="ty-warehouses-shipping__delay">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "warehouse_shipping_delay_".((string)$_smarty_tpl->getValue('uid')));?>

    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/warehouses/components/shipping_delay.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/warehouses/components/shipping_delay.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('warn_about_delay')) {?>
    <?php $_smarty_tpl->assign('uid', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "warehouse_shipping_delay_".((string)$_smarty_tpl->getValue('uid')), null, null);?>
        <?php if ($_smarty_tpl->getValue('shipping_delay')) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.shipping_delay.description", array("[shipping_delay]"=>$_smarty_tpl->getValue('shipping_delay')), $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.shipping_delay.description.default", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <div class="ty-warehouses-shipping__delay">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "warehouse_shipping_delay_".((string)$_smarty_tpl->getValue('uid')));?>

    </div>
<?php }
}
}
}
