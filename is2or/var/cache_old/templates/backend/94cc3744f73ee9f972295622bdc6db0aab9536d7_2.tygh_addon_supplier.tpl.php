<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons/addon_supplier.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc9bd726_04789503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94cc3744f73ee9f972295622bdc6db0aab9536d7' => 
    array (
      0 => 'views/addons/components/addons/addon_supplier.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9cc9bd726_04789503 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/addons';
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
$_smarty_tpl->assign('show_supplier_link', (($tmp = $_smarty_tpl->getValue('show_supplier_link') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('a')['supplier']) {?>
    <div class="addons-addon-supplier">
        <?php if ($_smarty_tpl->getValue('show_supplier_link')) {?>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.manage&supplier=".((string)$_smarty_tpl->getValue('a')['supplier']))), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome addons-addon-supplier__name addons-addon-supplier__name--link row-status">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['supplier']), ENT_QUOTES, 'UTF-8');?>

            </a>
        <?php } else { ?>
            <span class="addons-addon-supplier__name row-status">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['supplier']), ENT_QUOTES, 'UTF-8');?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('a')['identified'] || $_smarty_tpl->getValue('a')['is_core_addon']) {?>
            <span class="flex-inline">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--".((string)(mb_strtolower((string) $_smarty_tpl->getValue('a')['status'], 'UTF-8'))),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("verified_developer", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('a')['personal_review']) {?>
            <span class="flex-inline">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-comment addons-addon-supplier__has-admin-review",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("addon_has_admin_review", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

            </span>
        <?php }?>
    </div>
<?php }
}
}
