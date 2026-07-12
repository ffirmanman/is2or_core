<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/newsletters/blocks/lite_checkout/newsletters.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29bcb2208_70251525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8319ec728e6d54e2432bcfccb5eca596886abc46' => 
    array (
      0 => 'addons/newsletters/blocks/lite_checkout/newsletters.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea29bcb2208_70251525 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/newsletters/blocks/lite_checkout';
\Tygh\Languages\Helper::preloadLangVars(array('text_signup_for_subscriptions','text_signup_for_subscriptions'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mailing_lists", null, null);?>
    <?php $_smarty_tpl->assign('show_newsletters_content', false, false, NULL);?>
    <div class="subscription-container" id="subsciption_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('page_mailing_lists'), 'list');
$foreach44DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('list')->value) {
$foreach44DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('list')['show_on_checkout']) {?>
                <?php $_smarty_tpl->assign('show_newsletters_content', true, false, NULL);?>
            <?php }?>
            <input type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-newsletters__item<?php if (!$_smarty_tpl->getValue('list')['show_on_checkout']) {?> hidden<?php }?>">
                <label for="fake_subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox"
                           id="subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           name="mailing_lists[]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->getValue('user_mailing_lists')[$_smarty_tpl->getValue('list')['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox cm-news-subscribe hidden"
                    />
                    <input type="checkbox"
                           id="fake_subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id="subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->getValue('user_mailing_lists')[$_smarty_tpl->getValue('list')['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox"
                           data-ca-lite-checkout-element="newsletter-toggler"
                    /><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['object']), ENT_QUOTES, 'UTF-8');?>

                </label>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <!--subsciption_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('show_newsletters_content')) {?>
    <div class="litecheckout__group litecheckout__newsletters">
        <div class="litecheckout__item litecheckout__item--full">
            <h2 class="litecheckout__step-title"><?php echo (($tmp = $_smarty_tpl->getValue('block')['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_signup_for_subscriptions", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</h2>
        </div>
        <div class="litecheckout__item litecheckout__item--full">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mailing_lists');?>

        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/blocks/lite_checkout/newsletters.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/newsletters/blocks/lite_checkout/newsletters.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mailing_lists", null, null);?>
    <?php $_smarty_tpl->assign('show_newsletters_content', false, false, NULL);?>
    <div class="subscription-container" id="subsciption_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('page_mailing_lists'), 'list');
$foreach45DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('list')->value) {
$foreach45DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('list')['show_on_checkout']) {?>
                <?php $_smarty_tpl->assign('show_newsletters_content', true, false, NULL);?>
            <?php }?>
            <input type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-newsletters__item<?php if (!$_smarty_tpl->getValue('list')['show_on_checkout']) {?> hidden<?php }?>">
                <label for="fake_subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox"
                           id="subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           name="mailing_lists[]"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->getValue('user_mailing_lists')[$_smarty_tpl->getValue('list')['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox cm-news-subscribe hidden"
                    />
                    <input type="checkbox"
                           id="fake_subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id="subscribe_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->getValue('user_mailing_lists')[$_smarty_tpl->getValue('list')['list_id']]) {?>checked="checked"<?php }?>
                           class="checkbox"
                           data-ca-lite-checkout-element="newsletter-toggler"
                    /><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['object']), ENT_QUOTES, 'UTF-8');?>

                </label>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <!--subsciption_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('show_newsletters_content')) {?>
    <div class="litecheckout__group litecheckout__newsletters">
        <div class="litecheckout__item litecheckout__item--full">
            <h2 class="litecheckout__step-title"><?php echo (($tmp = $_smarty_tpl->getValue('block')['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_signup_for_subscriptions", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</h2>
        </div>
        <div class="litecheckout__item litecheckout__item--full">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mailing_lists');?>

        </div>
    </div>
<?php }
}
}
}
