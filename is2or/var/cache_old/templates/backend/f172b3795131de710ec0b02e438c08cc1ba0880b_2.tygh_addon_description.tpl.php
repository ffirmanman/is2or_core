<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/manage/addon_description.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc9a9cf9_10920963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f172b3795131de710ec0b02e438c08cc1ba0880b' => 
    array (
      0 => 'views/addons/components/manage/addon_description.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9cc9a9cf9_10920963 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/manage';
\Tygh\Languages\Helper::preloadLangVars(array('new_addon'));
$_smarty_tpl->assign('show_version', (($tmp = $_smarty_tpl->getValue('show_version') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_install_datetime', (($tmp = $_smarty_tpl->getValue('show_install_datetime') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('is_marketplace_addons')) {?>
    <?php $_smarty_tpl->assign('href', $_smarty_tpl->getValue('a')['addon_marketplace_page'], false, NULL);?>
    <?php $_smarty_tpl->assign('is_open_new_tab', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.update?addon=".((string)$_smarty_tpl->getValue('a')['addon'])), false, NULL);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('selected_storefront_id')) {?>
        <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('href'),"storefront_id=".((string)$_smarty_tpl->getValue('selected_storefront_id'))), false, NULL);?>
    <?php }
}?>

<div class="addons-addon-description">
    <div>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');?>
"
           class="row-status link--monochrome addons-addon-description__name addons-addon-description__name--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('a')['status'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
"
           title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addon_full_description')), ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->getValue('is_open_new_tab')) {?>
               target="_blank"
           <?php }?>
        >
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['short_name']), ENT_QUOTES, 'UTF-8');?>

        </a>

        <?php if ($_smarty_tpl->getValue('a')['recently_installed']) {?>
            <span class="flex-inline">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-circle addons-addon-description__new-addon addons-addon-description__new-addon--".((string)(mb_strtolower((string) $_smarty_tpl->getValue('a')['status'], 'UTF-8'))),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("new_addon", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

            </span>
        <?php }?>
    </div>
    <div class="addons-addon-description__description">
        <small class="muted addons-addon-description__description-small">
            <?php echo strip_tags((string) $_smarty_tpl->getValue('a')['description']);?>

        </small>
    </div>
    <?php if ($_smarty_tpl->getValue('show_version') || $_smarty_tpl->getValue('show_install_datetime')) {?>
        <div>
            <small class="muted" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addon_full_version_info')), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('a')['version'] ?? null)===null||$tmp==='' ? 0.1 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

            </small>
            <small class="muted">•</small>
            <?php if ($_smarty_tpl->getValue('a')['install_datetime']) {?>
                <small class="muted" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('install_datetime_full_info')), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('a')['install_datetime'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>

                </small>
            <?php } else { ?>
                <small class="muted">—</small>
            <?php }?>

        </div>
    <?php }?>

        <div class="hidden">
        <?php if ($_smarty_tpl->getValue('a')['is_long_name']) {?>
            <?php echo $_smarty_tpl->getValue('a')['name'];?>

        <?php }?>
        <?php echo $_smarty_tpl->getValue('a')['addon'];?>

    </div>
</div>
<?php }
}
