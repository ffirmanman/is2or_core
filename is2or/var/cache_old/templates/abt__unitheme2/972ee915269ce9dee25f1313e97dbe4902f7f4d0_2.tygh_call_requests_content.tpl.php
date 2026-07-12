<?php
/* Smarty version 5.4.3, created on 2026-03-08 20:28:49
  from 'tygh:addons/call_requests/views/call_requests/components/call_requests_content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adb1d1511372_05693300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972ee915269ce9dee25f1313e97dbe4902f7f4d0' => 
    array (
      0 => 'addons/call_requests/views/call_requests/components/call_requests_content.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69adb1d1511372_05693300 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/call_requests/views/call_requests/components';
\Tygh\Languages\Helper::preloadLangVars(array('your_name','or','email','call_requests.enter_phone_or_email_text','call_requests.convenient_time','submit','your_name','or','email','call_requests.enter_phone_or_email_text','call_requests.convenient_time','submit'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">

<form name="call_requests_form<?php if (!$_smarty_tpl->getValue('product')) {?>_main<?php }?>" id="form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax<?php if (!$_smarty_tpl->getValue('product')) {?> cm-ajax-full-render<?php }?> cm-processing-personal-data" data-ca-processing-personal-data-without-click="true" <?php if ($_smarty_tpl->getValue('product')) {?> data-ca-product-form="product_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"call_requests:call_requests_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_id')), ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->getValue('product')) {?>
    <input type="hidden" name="call_data[product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" />
    <div class="ty-cr-product-info-container">
        <div class="ty-cr-product-info-image">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height']), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div class="ty-cr-product-info-header">
            <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
        </div>
    </div>
<?php }?>

<div class="ty-control-group">
    <label class="ty-control-group__title" for="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("your_name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_name" size="50" class="ty-input-text-full" type="text" name="call_data[name]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('call_data')['name']), ENT_QUOTES, 'UTF-8');?>
" />
</div>

<?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"call_data_".((string)$_smarty_tpl->getValue('id'))."_phone",'name'=>"call_data[phone]",'value'=>$_smarty_tpl->getValue('call_data')['phone'],'required'=>!$_smarty_tpl->getValue('product'),'width'=>"full"), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('product')) {?>

    <div class="ty-cr-or">— <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("or", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 —</div>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_email" class="ty-control-group__title cm-email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_email" class="ty-input-text-full" size="50" type="text" name="call_data[email]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('call_data')['email']), ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="cr-popup-error-box">
        <div class="hidden cm-cr-error-box help-inline">
            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.enter_phone_or_email_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        </div>
    </div>

<?php } else { ?>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.convenient_time", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <bdi>
            <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_from]" value="" placeholder="<?php echo htmlspecialchars((string) ((defined('CALL_REQUESTS_DEFAULT_TIME_FROM') ? constant('CALL_REQUESTS_DEFAULT_TIME_FROM') : null)), ENT_QUOTES, 'UTF-8');?>
" /> -
            <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_convenient_time_to" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_to]" value="" placeholder="<?php echo htmlspecialchars((string) ((defined('CALL_REQUESTS_DEFAULT_TIME_TO') ? constant('CALL_REQUESTS_DEFAULT_TIME_TO') : null)), ENT_QUOTES, 'UTF-8');?>
" />
        </bdi>
    </div>

<?php }?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"call_request"), (int) 0, $_smarty_current_dir);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"call_requests:call_requests_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<div class="cm-block-add-subscribe">
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[call_requests.request]",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("submit", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), (int) 0, $_smarty_current_dir);
?>
</div>

</form>

<!--<?php echo $_smarty_tpl->getValue('id');?>
--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/views/call_requests/components/call_requests_content.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/call_requests/views/call_requests/components/call_requests_content.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">

<form name="call_requests_form<?php if (!$_smarty_tpl->getValue('product')) {?>_main<?php }?>" id="form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax<?php if (!$_smarty_tpl->getValue('product')) {?> cm-ajax-full-render<?php }?> cm-processing-personal-data" data-ca-processing-personal-data-without-click="true" <?php if ($_smarty_tpl->getValue('product')) {?> data-ca-product-form="product_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"call_requests:call_requests_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_id')), ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->getValue('product')) {?>
    <input type="hidden" name="call_data[product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" />
    <div class="ty-cr-product-info-container">
        <div class="ty-cr-product-info-image">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height']), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div class="ty-cr-product-info-header">
            <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
        </div>
    </div>
<?php }?>

<div class="ty-control-group">
    <label class="ty-control-group__title" for="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("your_name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_name" size="50" class="ty-input-text-full" type="text" name="call_data[name]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('call_data')['name']), ENT_QUOTES, 'UTF-8');?>
" />
</div>

<?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"call_data_".((string)$_smarty_tpl->getValue('id'))."_phone",'name'=>"call_data[phone]",'value'=>$_smarty_tpl->getValue('call_data')['phone'],'required'=>!$_smarty_tpl->getValue('product'),'width'=>"full"), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('product')) {?>

    <div class="ty-cr-or">— <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("or", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 —</div>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_email" class="ty-control-group__title cm-email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_email" class="ty-input-text-full" size="50" type="text" name="call_data[email]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('call_data')['email']), ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="cr-popup-error-box">
        <div class="hidden cm-cr-error-box help-inline">
            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.enter_phone_or_email_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        </div>
    </div>

<?php } else { ?>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("call_requests.convenient_time", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <bdi>
            <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_from]" value="" placeholder="<?php echo htmlspecialchars((string) ((defined('CALL_REQUESTS_DEFAULT_TIME_FROM') ? constant('CALL_REQUESTS_DEFAULT_TIME_FROM') : null)), ENT_QUOTES, 'UTF-8');?>
" /> -
            <input id="call_data_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_convenient_time_to" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_to]" value="" placeholder="<?php echo htmlspecialchars((string) ((defined('CALL_REQUESTS_DEFAULT_TIME_TO') ? constant('CALL_REQUESTS_DEFAULT_TIME_TO') : null)), ENT_QUOTES, 'UTF-8');?>
" />
        </bdi>
    </div>

<?php }?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"call_request"), (int) 0, $_smarty_current_dir);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"call_requests:call_requests_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<div class="cm-block-add-subscribe">
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[call_requests.request]",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("submit", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), (int) 0, $_smarty_current_dir);
?>
</div>

</form>

<!--<?php echo $_smarty_tpl->getValue('id');?>
--></div>
<?php }
}
}
