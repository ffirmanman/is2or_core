<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:08:31
  from 'tygh:addons/call_requests/hooks/products/add_to_cart.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9effb4a114_95549566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed2bd88361ed50cb60f307b29c32922abbef7f2' => 
    array (
      0 => 'addons/call_requests/hooks/products/add_to_cart.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ad9effb4a114_95549566 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/call_requests/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('details_page')) {
if (!$_smarty_tpl->getValue('hide_form') && $_smarty_tpl->getValue('addons')['call_requests']['buy_now_with_one_click'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('auth')['user_id'] || $_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "allow_shopping") && (($tmp = $_smarty_tpl->getValue('show_buy_now') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <?php $_smarty_tpl->assign('is_not_required_option', true, false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['product_options'], 'option');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach21DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('option')['required'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_smarty_tpl->assign('is_not_required_option', false, false, NULL);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php if (($_smarty_tpl->getValue('settings')['General']['inventory_tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || $_smarty_tpl->getValue('settings')['General']['allow_negative_amount'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || ($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty']) || $_smarty_tpl->getValue('product')['tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->getValue('product')['is_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php if ($_smarty_tpl->getValue('show_product_options') || ($_smarty_tpl->getValue('is_not_required_option') || $_smarty_tpl->getValue('details_page'))) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&obj_prefix=".((string)$_smarty_tpl->getValue('obj_prefix')),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage()),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_icon'=>'','id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'link_meta'=>"ty-btn ty-btn__outline cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->getValue('product')['product_id'],"data-ca-dialog-purpose"=>"call_request")), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_meta'=>"ty-btn ty-cr-product-button"), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php }
}
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/products/add_to_cart.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/call_requests/hooks/products/add_to_cart.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('details_page')) {
if (!$_smarty_tpl->getValue('hide_form') && $_smarty_tpl->getValue('addons')['call_requests']['buy_now_with_one_click'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('auth')['user_id'] || $_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "allow_shopping") && (($tmp = $_smarty_tpl->getValue('show_buy_now') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <?php $_smarty_tpl->assign('is_not_required_option', true, false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['product_options'], 'option');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach22DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('option')['required'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_smarty_tpl->assign('is_not_required_option', false, false, NULL);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php if (($_smarty_tpl->getValue('settings')['General']['inventory_tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || $_smarty_tpl->getValue('settings')['General']['allow_negative_amount'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || ($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty']) || $_smarty_tpl->getValue('product')['tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->getValue('product')['is_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php if ($_smarty_tpl->getValue('show_product_options') || ($_smarty_tpl->getValue('is_not_required_option') || $_smarty_tpl->getValue('details_page'))) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&obj_prefix=".((string)$_smarty_tpl->getValue('obj_prefix')),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage()),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_icon'=>'','id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'link_meta'=>"ty-btn ty-btn__outline cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->getValue('product')['product_id'],"data-ca-dialog-purpose"=>"call_request")), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.buy_now_with_one_click", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_meta'=>"ty-btn ty-cr-product-button"), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php }
}
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
