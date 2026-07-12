<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:buttons/add_to_cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa958aff1_78801874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'defd0794aca6ca7a829d29888246721ae643e7a9' => 
    array (
      0 => 'buttons/add_to_cart.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 4,
  ),
))) {
function content_69afafa958aff1_78801874 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','text_login_to_add_to_cart','add_to_cart','add_to_cart','add_to_cart','sign_in_to_buy','text_login_to_add_to_cart','text_login_to_add_to_cart'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('c_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php if ($_smarty_tpl->getValue('show_price_in_button')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_price_in_button", null, null);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price']), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) > 0) {?>
                <?php $_smarty_tpl->assign('but_text', ((string)$_smarty_tpl->getValue('but_text'))."&nbsp;-&nbsp;".((string)$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_price_in_button')), false, NULL);?>
                <?php $_smarty_tpl->assign('btn_nofilter', true, false, NULL);?>
            <?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == "icon" || $_smarty_tpl->getValue('button_type_add_to_cart') == "icon_button") {?>
                <?php $_smarty_tpl->assign('but_text', false, false, NULL);?>
                <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
            <?php } elseif ($_smarty_tpl->getValue('button_type_add_to_cart') == "text") {?>
                <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
                <?php $_smarty_tpl->assign('but_icon', false, false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
                <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->assign('btn_nofilter', false, false, NULL);?>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'btn_nofilter'=>$_smarty_tpl->getValue('btn_nofilter'),'but_text'=>$_smarty_tpl->getValue('but_text'),'but_name'=>$_smarty_tpl->getValue('but_name'),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>(($tmp = $_smarty_tpl->getValue('but_role') ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_meta'=>"ty-btn__primary ty-btn__add-to-cart cm-form-dialog-closer ".((string)$_smarty_tpl->getValue('but_meta')),'but_icon'=>$_smarty_tpl->getValue('but_icon')), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>

        <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {?>
            <?php $_smarty_tpl->assign('login_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('login_url', "auth.login_form?return_url=".((string)$_smarty_tpl->getValue('c_url')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in_to_buy", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_login_to_add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>$_smarty_tpl->getValue('login_url'),'but_role'=>(($tmp = $_smarty_tpl->getValue('but_role') ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_name'=>'','but_meta'=>"cm-tooltip ty-btn__tertiary ut2-allow-shopping",'but_icon'=>"ut2-icon-outline-info"), (int) 0, $_smarty_current_dir);
?>
        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_login_to_add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"buttons:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->assign('show_buy_now', $_smarty_tpl->getValue('show_buy_now'), false, 2);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_cart.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/add_to_cart.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"buttons:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('c_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php if ($_smarty_tpl->getValue('show_price_in_button')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_price_in_button", null, null);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price']), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) > 0) {?>
                <?php $_smarty_tpl->assign('but_text', ((string)$_smarty_tpl->getValue('but_text'))."&nbsp;-&nbsp;".((string)$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_price_in_button')), false, NULL);?>
                <?php $_smarty_tpl->assign('btn_nofilter', true, false, NULL);?>
            <?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == "icon" || $_smarty_tpl->getValue('button_type_add_to_cart') == "icon_button") {?>
                <?php $_smarty_tpl->assign('but_text', false, false, NULL);?>
                <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
            <?php } elseif ($_smarty_tpl->getValue('button_type_add_to_cart') == "text") {?>
                <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
                <?php $_smarty_tpl->assign('but_icon', false, false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
                <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->assign('btn_nofilter', false, false, NULL);?>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'btn_nofilter'=>$_smarty_tpl->getValue('btn_nofilter'),'but_text'=>$_smarty_tpl->getValue('but_text'),'but_name'=>$_smarty_tpl->getValue('but_name'),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>(($tmp = $_smarty_tpl->getValue('but_role') ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_meta'=>"ty-btn__primary ty-btn__add-to-cart cm-form-dialog-closer ".((string)$_smarty_tpl->getValue('but_meta')),'but_icon'=>$_smarty_tpl->getValue('but_icon')), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>

        <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {?>
            <?php $_smarty_tpl->assign('login_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('login_url', "auth.login_form?return_url=".((string)$_smarty_tpl->getValue('c_url')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in_to_buy", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_login_to_add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>$_smarty_tpl->getValue('login_url'),'but_role'=>(($tmp = $_smarty_tpl->getValue('but_role') ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'but_name'=>'','but_meta'=>"cm-tooltip ty-btn__tertiary ut2-allow-shopping",'but_icon'=>"ut2-icon-outline-info"), (int) 0, $_smarty_current_dir);
?>
        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_login_to_add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"buttons:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->assign('show_buy_now', $_smarty_tpl->getValue('show_buy_now'), false, 2);
}
}
}
