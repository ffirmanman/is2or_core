<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a72050f60_03397187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c476c086ca5f9e3c5ee31441a1655f9343ff9cd' => 
    array (
      0 => 'addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69fb4a72050f60_03397187 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/components';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.contact_vendor_name','vendor_communication.contact_vendor','vendor_communication.your_message_to_vendor_name','vendor_communication.your_message_to_admin','send','vendor_communication.contact_vendor_name','vendor_communication.contact_vendor','vendor_communication.your_message_to_vendor_name','vendor_communication.your_message_to_admin','send'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="hidden" id="new_thread_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->getValue('vendor_name')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.contact_vendor_name", array("[vendor_name]"=>$_smarty_tpl->getValue('vendor_name')), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.contact_vendor", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->getValue('no_ajax')) {?>cm-ajax<?php }?> cm-form-dialog-closer" name="add_thread_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" id="new_thread_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="new_thread_message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
,threads_container" />
        <input type="hidden" name="redirect_url" value="<?php if ($_smarty_tpl->getValue('redirect_url')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('redirect_url')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');
}?>" />
        <input type="hidden" name="thread[company_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_type]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_type')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[communication_type]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->getValue('product')) {?>
            <div class="ty-vendor-communication-product-info-container">
                <div class="ty-vendor-communication-product-info-image">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height']), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="ty-vendor-communication-product-info-header">
                    <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
            </div>
        <?php }?>

        <div id="new_thread_message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-control-group">
                <label for="thread_msg_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-trim">
                    <?php if ($_smarty_tpl->getValue('vendor_name')) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.your_message_to_vendor_name", array("[vendor_name]"=>$_smarty_tpl->getValue('vendor_name')), $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.your_message_to_admin", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php }?>
                </label>
                <textarea id="thread_msg_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" name="thread[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('initial_message')), ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        <!--new_thread_message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="buttons-container">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("send", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__primary cm-post cm-reset-link",'but_role'=>"submit",'but_name'=>"dispatch[vendor_communication.create_thread]"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </form>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="hidden" id="new_thread_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->getValue('vendor_name')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.contact_vendor_name", array("[vendor_name]"=>$_smarty_tpl->getValue('vendor_name')), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.contact_vendor", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->getValue('no_ajax')) {?>cm-ajax<?php }?> cm-form-dialog-closer" name="add_thread_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" id="new_thread_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="new_thread_message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
,threads_container" />
        <input type="hidden" name="redirect_url" value="<?php if ($_smarty_tpl->getValue('redirect_url')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('redirect_url')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');
}?>" />
        <input type="hidden" name="thread[company_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_type]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_type')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[communication_type]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->getValue('product')) {?>
            <div class="ty-vendor-communication-product-info-container">
                <div class="ty-vendor-communication-product-info-image">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height']), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="ty-vendor-communication-product-info-header">
                    <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product']), ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
            </div>
        <?php }?>

        <div id="new_thread_message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-control-group">
                <label for="thread_msg_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-trim">
                    <?php if ($_smarty_tpl->getValue('vendor_name')) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.your_message_to_vendor_name", array("[vendor_name]"=>$_smarty_tpl->getValue('vendor_name')), $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.your_message_to_admin", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php }?>
                </label>
                <textarea id="thread_msg_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
" name="thread[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('initial_message')), ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        <!--new_thread_message_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="buttons-container">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("send", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__primary cm-post cm-reset-link",'but_role'=>"submit",'but_name'=>"dispatch[vendor_communication.create_thread]"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </form>
</div>
<?php }
}
}
