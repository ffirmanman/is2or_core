<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:46
  from 'tygh:views/addons/components/manage/addons_disabled_msg.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ae89d626_61777568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45f82f61d1d250bc411af723d0d3f3146f1d2901' => 
    array (
      0 => 'views/addons/components/manage/addons_disabled_msg.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ae89d626_61777568 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/manage';
\Tygh\Languages\Helper::preloadLangVars(array('tools_addons_disabled_msg','tools_re_enable_add_ons'));
$_smarty_tpl->assign('is_addon_management_enabled', true, false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('selected_storefront_id') || $_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && $_smarty_tpl->getValue('runtime')['company_id']) {?>
    <?php $_smarty_tpl->assign('is_addon_management_enabled', false, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('is_addon_management_enabled') && ($_smarty_tpl->getValue('settings')['init_addons'] === 'none' || $_smarty_tpl->getValue('settings')['init_addons'] === 'core')) {?>
    <div class="alert alert-block addon-info-msg">
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tools_addons_disabled_msg", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="addons.tools">
            <button type="submit" class="btn btn-warning" name="init_addons" value="restore">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("tools_re_enable_add_ons", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </button>
        </form>
    </div>
<?php }?>

<?php }
}
