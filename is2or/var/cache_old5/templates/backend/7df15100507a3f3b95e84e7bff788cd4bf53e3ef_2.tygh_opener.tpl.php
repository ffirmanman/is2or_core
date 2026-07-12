<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:components/notifications_center/opener.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed28a8350_93595235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df15100507a3f3b95e84e7bff788cd4bf53e3ef' => 
    array (
      0 => 'components/notifications_center/opener.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed28a8350_93595235 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/notifications_center';
\Tygh\Languages\Helper::preloadLangVars(array('loading','show_more','show_less','notifications_center.no_notifications','notifications_center.notifications','notifications_center.mark_all_as_read','notifications_center.notifications','notifications_center.notifications','notifications_center.notifications','loading'));
?>
<div class="top-bar__btn-wrapper btn-group dropdown-top-menu-item notifications-center__opener-wrapper cm-dropdown-skip-processing"
    data-ca-notifications-center="main"
    data-ca-notifications-center-text-loading="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
    data-ca-notifications-center-text-show-more="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
    data-ca-notifications-center-text-show-less="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_less", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
    data-ca-notifications-center-text-no-data="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notifications_center.no_notifications", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
    data-ca-notifications-center-text-notifications="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notifications_center.notifications", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
    data-ca-notifications-center-text-mark-all-as-read="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notifications_center.mark_all_as_read", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
>
    <button class="dropdown-toggle dropdown-top-menu-item-link top-bar__btn notifications-center__opener-btn"
        data-toggle="dropdown"
        type="button"
        title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notifications_center.notifications", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
    >
        <span class="top-bar__btn-inner notifications-center__opener-btn-inner">
            <span>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"bell"), $_smarty_tpl);?>

                <span class="cs-notifications-center__counter"
                    data-ca-notifications-center-counter
                    data-ca-notifications-center-count=""></span>
            </span>
        </span>
    </button>
    <ul class="dropdown-menu pull-right notifications-center__root" data-ca-notifications-center-root>
        <div class="cc-dropdown">
            <div class="cc-dropdown__title-wrapper" text="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notifications_center.notifications", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                <span class="cc-dropdown__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notifications_center.notifications", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </div>
            <div class="cc-all-read">
                <div class="cc-all-read--inner"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
            </div>
        </div>
    </ul>
</div>
<?php }
}
