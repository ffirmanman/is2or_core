<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:53
  from 'tygh:buttons/place_order.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5205105706_83047127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62c52caea79a5660dae860c9d0c04df3839eaf1' => 
    array (
      0 => 'buttons/place_order.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69fb5205105706_83047127 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('place_order','place_order'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><button class="litecheckout__submit-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"
        type="submit"
        name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_disabled')) {?>disabled<?php }?>
>
    <span class="litecheckout__submit-btn__in">
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "order_total", null, null);?>
            <?php if ($_smarty_tpl->getValue('cart')['payment_surcharge'] && !$_smarty_tpl->getValue('take_surcharge_from_vendor')) {?>
                <?php $_smarty_tpl->assign('_total', $_smarty_tpl->getValue('cart')['total']+$_smarty_tpl->getValue('cart')['payment_surcharge'], false, NULL);?>
            <?php }?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('_total') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['total'] ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php if (!$_smarty_tpl->getValue('but_text')) {?>
                        <?php $_smarty_tpl->assign('but_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("place_order", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
        <?php }?>

        <span class="ut2-icon-outline-verified_user"></span><span class="litecheckout__submit-btn__caption"><?php echo $_smarty_tpl->getValue('but_text');?>
</span>&#32;<span class="litecheckout__submit-btn__order-total">(<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'order_total');?>
)</span>
    </span>
<?php if ($_smarty_tpl->getValue('but_id')) {?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
--><?php }?></button>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/place_order.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/place_order.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button class="litecheckout__submit-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"
        type="submit"
        name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('but_disabled')) {?>disabled<?php }?>
>
    <span class="litecheckout__submit-btn__in">
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "order_total", null, null);?>
            <?php if ($_smarty_tpl->getValue('cart')['payment_surcharge'] && !$_smarty_tpl->getValue('take_surcharge_from_vendor')) {?>
                <?php $_smarty_tpl->assign('_total', $_smarty_tpl->getValue('cart')['total']+$_smarty_tpl->getValue('cart')['payment_surcharge'], false, NULL);?>
            <?php }?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('_total') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['total'] ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php if (!$_smarty_tpl->getValue('but_text')) {?>
                        <?php $_smarty_tpl->assign('but_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("place_order", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
        <?php }?>

        <span class="ut2-icon-outline-verified_user"></span><span class="litecheckout__submit-btn__caption"><?php echo $_smarty_tpl->getValue('but_text');?>
</span>&#32;<span class="litecheckout__submit-btn__order-total">(<?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'order_total');?>
)</span>
    </span>
<?php if ($_smarty_tpl->getValue('but_id')) {?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
--><?php }?></button>
<?php }
}
}
