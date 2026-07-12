<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_payment_methods.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5204a5cf67_30690557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4232c024369121196d34481d1e97736d6aafa435' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_payment_methods.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_checkout_payments.tpl' => 2,
  ),
))) {
function content_69fb5204a5cf67_30690557 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/lite_checkout';
\Tygh\Languages\Helper::preloadLangVars(array('text_no_payments_required','skip_payment','text_no_payments_required','skip_payment'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__group cm-save-fields b--pay-way b--pay-ship
    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        b--pay-way_mode_select b--pay-ship_mode_select
    <?php } else { ?>
        b--pay-way_mode_radio-list b--pay-ship_mode_radio-list
    <?php }?>" id="litecheckout_step_payment">

    <div class="b--pay-way__in b--pay-ship__in">

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:payments"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

            <?php if ($_smarty_tpl->getValue('cart')['payment_id']) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_checkout_payments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
                <div class="litecheckout__item">
                    <p>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_payments_required", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </p>
                </div>
            <?php }?>

        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:payments"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    </div><!--litecheckout_step_payment--></div>
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) && $_smarty_tpl->getValue('auth')['act_as_user']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <label>
                <input type="checkbox" id="skip_payment" name="skip_payment" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" class="checkbox" />
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("skip_payment", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </label>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_payment_methods.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_payment_methods.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__group cm-save-fields b--pay-way b--pay-ship
    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        b--pay-way_mode_select b--pay-ship_mode_select
    <?php } else { ?>
        b--pay-way_mode_radio-list b--pay-ship_mode_radio-list
    <?php }?>" id="litecheckout_step_payment">

    <div class="b--pay-way__in b--pay-ship__in">

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:payments"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

            <?php if ($_smarty_tpl->getValue('cart')['payment_id']) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_checkout_payments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
                <div class="litecheckout__item">
                    <p>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_payments_required", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </p>
                </div>
            <?php }?>

        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:payments"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    </div><!--litecheckout_step_payment--></div>
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) && $_smarty_tpl->getValue('auth')['act_as_user']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <label>
                <input type="checkbox" id="skip_payment" name="skip_payment" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" class="checkbox" />
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("skip_payment", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </label>
        </div>
    </div>
<?php }
}
}
}
