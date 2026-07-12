<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:55
  from 'tygh:blocks/my_account.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6bd6b044_53401870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6123237d217e7e218a52b80a71227cdc0f041470' => 
    array (
      0 => 'blocks/my_account.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:views/auth/login_form.tpl' => 2,
  ),
))) {
function content_6a133f6bd6b044_53401870 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks';
\Tygh\Languages\Helper::preloadLangVars(array('my_account','profile_details','downloads','orders','view_comparison_list','track_my_order','track_my_order','order_id','email','go','go_to_admin_panel','sign_out','sign_in','register','sign_in','my_account','profile_details','downloads','orders','view_comparison_list','track_my_order','track_my_order','order_id','email','go','go_to_admin_panel','sign_out','sign_in','register','sign_in'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-dropdown-box" id="account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">
    <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"my_account:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" title="">
                <i class="ut2-icon-outline-account-circle"></i>
                <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"block:name:".((string)$_smarty_tpl->getValue('block')['block_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"my_account:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>

    <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content hidden">
        <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
        <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("my_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
        <ul class="ty-account-info">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                <?php if ($_smarty_tpl->getValue('user_info')['firstname'] || $_smarty_tpl->getValue('user_info')['lastname']) {?>
                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php } else { ?>
                    <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.downloads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("downloads", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('user_data')['firstname'] || $_smarty_tpl->getValue('user_data')['lastname']) {?>
                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } elseif ($_smarty_tpl->getValue('user_data')['email']) {?>
                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
            <?php }?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.search")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == 'Y') {?>
                    <?php $_smarty_tpl->assign('compared_products_ids', $_SESSION['comparison_list'], false, NULL);?>
                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('compared_products_ids')) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products_ids'))), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </ul>

        <?php if ($_smarty_tpl->getValue('settings')['Appearance']['display_track_orders'] == 'Y') {?>
            <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">
                <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                    <input type="hidden" name="result_ids" value="track_orders_block_*" />
                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />

                    <div class="ty-account-info__orders-txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                    <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                        <label for="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-trim hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                        <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" name="track_data" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_id", [], $_smarty_tpl->getSmarty()->getLanguage());
if (!$_smarty_tpl->getValue('auth')['user_id']) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" />
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"orders.track_request",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("go", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_orders",'align'=>"left",'sidebox'=>true), (int) 0, $_smarty_current_dir);
?>
                    </div>
                </form>
                <!--track_orders_block_<?php echo $_smarty_tpl->getValue('block')['snapping_id'];?>
--></div>
        <?php }?>

        <div class="ty-account-info__buttons buttons-container">
            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                <?php $_smarty_tpl->assign('is_vendor_with_active_company', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('auth')['user_type'] == "V") && ($_smarty_tpl->getValue('auth')['company_status'] == "A"), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>
                    <a href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::STOREFRONT")), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.login_as_vendor?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".$_prefixVariable2."&user_id=".((string)$_smarty_tpl->getValue('auth')['user_id']))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary cm-post" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <?php }?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.logout?redirect_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_out", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <?php } else { ?>
                <a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <div  id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <div class="ty-login-popup">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->getValue('block')['snapping_id'])), (int) 0, $_smarty_current_dir);
?>
                    </div>
                </div>
            <?php }?>
        </div>
<!--account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/my_account.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/my_account.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-dropdown-box" id="account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">
    <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"my_account:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" title="">
                <i class="ut2-icon-outline-account-circle"></i>
                <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"block:name:".((string)$_smarty_tpl->getValue('block')['block_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"my_account:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>

    <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content hidden">
        <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
        <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("my_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
        <ul class="ty-account-info">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                <?php if ($_smarty_tpl->getValue('user_info')['firstname'] || $_smarty_tpl->getValue('user_info')['lastname']) {?>
                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php } else { ?>
                    <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.downloads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("downloads", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('user_data')['firstname'] || $_smarty_tpl->getValue('user_data')['lastname']) {?>
                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } elseif ($_smarty_tpl->getValue('user_data')['email']) {?>
                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['email']), ENT_QUOTES, 'UTF-8');?>
</li>
            <?php }?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.search")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == 'Y') {?>
                    <?php $_smarty_tpl->assign('compared_products_ids', $_SESSION['comparison_list'], false, NULL);?>
                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('compared_products_ids')) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products_ids'))), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </ul>

        <?php if ($_smarty_tpl->getValue('settings')['Appearance']['display_track_orders'] == 'Y') {?>
            <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">
                <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                    <input type="hidden" name="result_ids" value="track_orders_block_*" />
                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />

                    <div class="ty-account-info__orders-txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>

                    <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                        <label for="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-trim hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                        <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" name="track_data" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_id", [], $_smarty_tpl->getSmarty()->getLanguage());
if (!$_smarty_tpl->getValue('auth')['user_id']) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>" />
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"orders.track_request",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("go", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_orders",'align'=>"left",'sidebox'=>true), (int) 0, $_smarty_current_dir);
?>
                    </div>
                </form>
                <!--track_orders_block_<?php echo $_smarty_tpl->getValue('block')['snapping_id'];?>
--></div>
        <?php }?>

        <div class="ty-account-info__buttons buttons-container">
            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                <?php $_smarty_tpl->assign('is_vendor_with_active_company', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('auth')['user_type'] == "V") && ($_smarty_tpl->getValue('auth')['company_status'] == "A"), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>
                    <a href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::STOREFRONT")), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.login_as_vendor?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".$_prefixVariable3."&user_id=".((string)$_smarty_tpl->getValue('auth')['user_id']))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary cm-post" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <?php }?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.logout?redirect_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_out", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <?php } else { ?>
                <a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <div  id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <div class="ty-login-popup">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->getValue('block')['snapping_id'])), (int) 0, $_smarty_current_dir);
?>
                    </div>
                </div>
            <?php }?>
        </div>
<!--account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
</div><?php }
}
}
