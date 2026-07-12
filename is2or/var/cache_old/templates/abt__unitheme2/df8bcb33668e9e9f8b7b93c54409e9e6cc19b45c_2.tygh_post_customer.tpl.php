<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_customer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f472174_20637285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df8bcb33668e9e9f8b7b93c54409e9e6cc19b45c' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_customer.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada21f472174_20637285 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.product_reviews.most_helpfull_reviews.positive','abt__ut2.product_reviews.most_helpfull_reviews.critical','anonymous','product_reviews.verified_purchase','abt__ut2.product_reviews.more_than_x_time_in_use','abt__ut2.product_reviews.most_helpfull_reviews.positive','abt__ut2.product_reviews.most_helpfull_reviews.critical','anonymous','product_reviews.verified_purchase','abt__ut2.product_reviews.more_than_x_time_in_use'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product_review')) {?>
    <?php $_smarty_tpl->assign('date_machine_format', "%Y-%m-%dT%H:%M:%S", false, NULL);?>
    <?php if ($_smarty_tpl->getValue('review_header')) {?>
        <div class="ty-product-review-post-type" data-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('review_header')), ENT_QUOTES, 'UTF-8');?>
">
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.most_helpfull_reviews.positive", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.most_helpfull_reviews.critical", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) (($_smarty_tpl->getValue('review_header') == "positive") ? $_prefixVariable1 : $_prefixVariable2), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
    <section class="ty-product-review-post-customer" id="review-post-customer-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
">
        <address class="ty-product-review-post-customer__address ty-address">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_reviews:post_customer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                <div class="ty-product-review-post-customer__name ut2-ellipsis">

                    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] !== "none") {?>
                        <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] === "country" && ($_smarty_tpl->getValue('product_review')['user_data']['country_code'] || $_smarty_tpl->getValue('product_review')['user_data']['country'])) {?>
                            <div class="ty-product-review-post-customer__location">
                                <div class="ty-product-review-post-customer__location-flag cm-tooltip" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['user_data']['country']), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('product_review')['user_data']['country_code'], 'UTF-8')))." ty-product-review-post-customer__location-flag-content"), $_smarty_tpl);?>

                                </div>
                            </div>
                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('product_review')['user_data']['name']) {?>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['user_data']['name']), ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("anonymous", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] !== "none" && $_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] === "city" && $_smarty_tpl->getValue('product_review')['user_data']['city']) {?>
                        <div class="ty-product-review-post-customer__location">
                            (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['user_data']['city']), ENT_QUOTES, 'UTF-8');?>
)
                        </div>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->getValue('product_review')['user_data']['is_buyer'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>

                    <?php $_smarty_tpl->assign('time', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_dates_diff')($_smarty_tpl->getValue('product_review')['abt__ut2_first_buy_date'],$_smarty_tpl->getValue('product_review')['product_review_timestamp']), false, NULL);?>

                    <div class="ty-product-review-post-customer__verified">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.verified_purchase", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </div>
                <?php }?>

            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_reviews:post_customer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </address>

        <?php if ($_smarty_tpl->getValue('time')) {?>
            <div class="ab__ut2--customer__verified-in-use">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.more_than_x_time_in_use", array('[time]'=>$_smarty_tpl->getValue('time')), $_smarty_tpl->getSmarty()->getLanguage());?>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('product_review')['product_review_timestamp']) {?>
            <time class="ty-product-review-post-customer__date" datetime="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('product_review')['product_review_timestamp'],$_smarty_tpl->getValue('date_machine_format'))), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('product_review')['product_review_timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>

            </time>
        <?php }?>

    </section>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_customer.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_customer.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product_review')) {?>
    <?php $_smarty_tpl->assign('date_machine_format', "%Y-%m-%dT%H:%M:%S", false, NULL);?>
    <?php if ($_smarty_tpl->getValue('review_header')) {?>
        <div class="ty-product-review-post-type" data-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('review_header')), ENT_QUOTES, 'UTF-8');?>
">
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.most_helpfull_reviews.positive", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable3=ob_get_clean();
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.most_helpfull_reviews.critical", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable4=ob_get_clean();
echo htmlspecialchars((string) (($_smarty_tpl->getValue('review_header') == "positive") ? $_prefixVariable3 : $_prefixVariable4), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
    <section class="ty-product-review-post-customer" id="review-post-customer-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
">
        <address class="ty-product-review-post-customer__address ty-address">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_reviews:post_customer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                <div class="ty-product-review-post-customer__name ut2-ellipsis">

                    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] !== "none") {?>
                        <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] === "country" && ($_smarty_tpl->getValue('product_review')['user_data']['country_code'] || $_smarty_tpl->getValue('product_review')['user_data']['country'])) {?>
                            <div class="ty-product-review-post-customer__location">
                                <div class="ty-product-review-post-customer__location-flag cm-tooltip" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['user_data']['country']), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('product_review')['user_data']['country_code'], 'UTF-8')))." ty-product-review-post-customer__location-flag-content"), $_smarty_tpl);?>

                                </div>
                            </div>
                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('product_review')['user_data']['name']) {?>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['user_data']['name']), ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("anonymous", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] !== "none" && $_smarty_tpl->getValue('addons')['product_reviews']['review_ask_for_customer_location'] === "city" && $_smarty_tpl->getValue('product_review')['user_data']['city']) {?>
                        <div class="ty-product-review-post-customer__location">
                            (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['user_data']['city']), ENT_QUOTES, 'UTF-8');?>
)
                        </div>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->getValue('product_review')['user_data']['is_buyer'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>

                    <?php $_smarty_tpl->assign('time', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_dates_diff')($_smarty_tpl->getValue('product_review')['abt__ut2_first_buy_date'],$_smarty_tpl->getValue('product_review')['product_review_timestamp']), false, NULL);?>

                    <div class="ty-product-review-post-customer__verified">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.verified_purchase", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </div>
                <?php }?>

            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"product_reviews:post_customer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </address>

        <?php if ($_smarty_tpl->getValue('time')) {?>
            <div class="ab__ut2--customer__verified-in-use">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.more_than_x_time_in_use", array('[time]'=>$_smarty_tpl->getValue('time')), $_smarty_tpl->getSmarty()->getLanguage());?>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('product_review')['product_review_timestamp']) {?>
            <time class="ty-product-review-post-customer__date" datetime="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('product_review')['product_review_timestamp'],$_smarty_tpl->getValue('date_machine_format'))), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('product_review')['product_review_timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>

            </time>
        <?php }?>

    </section>
<?php }
}
}
}
