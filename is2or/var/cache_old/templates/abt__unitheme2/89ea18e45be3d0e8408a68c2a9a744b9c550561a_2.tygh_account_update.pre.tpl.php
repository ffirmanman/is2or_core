<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:37
  from 'tygh:addons/newsletters/hooks/profiles/account_update.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabde920a8_65069252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ea18e45be3d0e8408a68c2a9a744b9c550561a' => 
    array (
      0 => 'addons/newsletters/hooks/profiles/account_update.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
))) {
function content_69adaabde920a8_65069252 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/newsletters/hooks/profiles';
\Tygh\Languages\Helper::preloadLangVars(array('text_signup_for_subscriptions','mailing_lists','text_signup_for_subscriptions','mailing_lists'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('page_mailing_lists')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mailing_lists", null, null);?>
        <?php $_smarty_tpl->assign('show_newsletters_content', false, false, NULL);?>

        <div class="ty-newsletters">

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"newsletters:profile_email_subscription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_signup_for_subscriptions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"newsletters:profile_email_subscription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('page_mailing_lists'), 'list');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('list')->value) {
$foreach20DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('list')['show_on_registration']) {?>
                    <?php $_smarty_tpl->assign('show_newsletters_content', true, false, NULL);?>
                <?php }?>
                <input id="all_profile_mailing_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-newsletters__item<?php if (!$_smarty_tpl->getValue('list')['show_on_registration']) {?> hidden<?php }?>">
                    <input id="profile_mailing_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('user_mailing_lists')[$_smarty_tpl->getValue('list')['list_id']]) {?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['object']), ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->getValue('show_newsletters_content')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("mailing_lists", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>

        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mailing_lists');?>

    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/hooks/profiles/account_update.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/newsletters/hooks/profiles/account_update.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('page_mailing_lists')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mailing_lists", null, null);?>
        <?php $_smarty_tpl->assign('show_newsletters_content', false, false, NULL);?>

        <div class="ty-newsletters">

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"newsletters:profile_email_subscription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_signup_for_subscriptions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"newsletters:profile_email_subscription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('page_mailing_lists'), 'list');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('list')->value) {
$foreach21DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('list')['show_on_registration']) {?>
                    <?php $_smarty_tpl->assign('show_newsletters_content', true, false, NULL);?>
                <?php }?>
                <input id="all_profile_mailing_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-newsletters__item<?php if (!$_smarty_tpl->getValue('list')['show_on_registration']) {?> hidden<?php }?>">
                    <input id="profile_mailing_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('user_mailing_lists')[$_smarty_tpl->getValue('list')['list_id']]) {?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['list_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('list')['object']), ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->getValue('show_newsletters_content')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("mailing_lists", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>

        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mailing_lists');?>

    <?php }
}
}
}
}
