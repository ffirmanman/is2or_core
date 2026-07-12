<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:37
  from 'tygh:blocks/static_templates/abt__ut2__my_account.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fd7cf288_40168994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d4fb4d8482254084faae50c1b54698421ad9b2' => 
    array (
      0 => 'blocks/static_templates/abt__ut2__my_account.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/auth/login_form.tpl' => 2,
    'tygh:buttons/go.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
  ),
))) {
function content_69fb49fd7cf288_40168994 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('go_to_admin_panel','sign_out','sign_in','register','sign_in','sign_in','sign_in','register','abt__ut2_sign_in_please','account','orders','wishlist','comparison_list','downloads','track_my_order','track_my_order','order_id','email','go','go_to_admin_panel','sign_out','sign_in','register','sign_in','sign_in','sign_in','register','abt__ut2_sign_in_please','account','orders','wishlist','comparison_list','downloads','track_my_order','track_my_order','order_id','email','go'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<div class="ut2-account-info">
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php if ($_smarty_tpl->getValue('user_info')['firstname'] || $_smarty_tpl->getValue('user_info')['lastname']) {?>
            <div class="ut2-account-info__avatar"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getValue('user_info')['firstname'],0,1);?>
</div>
            <p><a class="ut2-account-info__a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['lastname']), ENT_QUOTES, 'UTF-8');?>
<br/><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['email']), ENT_QUOTES, 'UTF-8');?>
</span>
            </a></p>
        <?php }?>

        <div class="ut2-account-info__buttons">
            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                <?php $_smarty_tpl->assign('is_vendor_with_active_company', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('auth')['user_type'] == "V") && ($_smarty_tpl->getValue('auth')['company_status'] == "A"), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['vendor_index'])), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
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
        
    <?php } else { ?>
        <div class="ut2-account-info__avatar"><i class="ut2-icon-outline-account-circle"></i></div>
        <p><a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="underlined cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" class="underlined" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><br/><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2_sign_in_please", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></p>
    <?php }?>
<!--account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile" || $_smarty_tpl->getValue('auth')['user_id']) {?>
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <nav class="ut2-fm ut2-account-links">
        <div class="ut2-fmw toggle-it">
        <div class="ut2-mt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i></i></div>
        <div class="ut2-lfl">
            <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.search")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>
            <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>

            <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == 'Y') {?>
                <?php $_smarty_tpl->assign('compared_products_ids', $_SESSION['comparison_list'], false, NULL);?>
                <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('compared_products_ids')) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products_ids'))), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></p>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('settings')['General']['enable_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.downloads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("downloads", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>
            <?php }?>
        </div>
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
" class="cm-required hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
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
        </div>
    </nav>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/abt__ut2__my_account.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/static_templates/abt__ut2__my_account.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ut2-account-info">
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php if ($_smarty_tpl->getValue('user_info')['firstname'] || $_smarty_tpl->getValue('user_info')['lastname']) {?>
            <div class="ut2-account-info__avatar"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getValue('user_info')['firstname'],0,1);?>
</div>
            <p><a class="ut2-account-info__a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['lastname']), ENT_QUOTES, 'UTF-8');?>
<br/><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['email']), ENT_QUOTES, 'UTF-8');?>
</span>
            </a></p>
        <?php }?>

        <div class="ut2-account-info__buttons">
            <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
                <?php $_smarty_tpl->assign('is_vendor_with_active_company', $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('auth')['user_type'] == "V") && ($_smarty_tpl->getValue('auth')['company_status'] == "A"), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('is_vendor_with_active_company')) {?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['vendor_index'])), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("go_to_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
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
        
    <?php } else { ?>
        <div class="ut2-account-info__avatar"><i class="ut2-icon-outline-account-circle"></i></div>
        <p><a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="underlined cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" class="underlined" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><br/><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2_sign_in_please", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></p>
    <?php }?>
<!--account_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile" || $_smarty_tpl->getValue('auth')['user_id']) {?>
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <nav class="ut2-fm ut2-account-links">
        <div class="ut2-fmw toggle-it">
        <div class="ut2-mt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i></i></div>
        <div class="ut2-lfl">
            <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.search")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>
            <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("wishlist.view")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>

            <?php if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == 'Y') {?>
                <?php $_smarty_tpl->assign('compared_products_ids', $_SESSION['comparison_list'], false, NULL);?>
                <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("comparison_list", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('compared_products_ids')) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('compared_products_ids'))), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></p>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('settings')['General']['enable_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.downloads")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("downloads", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>
            <?php }?>
        </div>
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
" class="cm-required hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("track_my_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
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
        </div>
    </nav>
<?php }
}
}
}
