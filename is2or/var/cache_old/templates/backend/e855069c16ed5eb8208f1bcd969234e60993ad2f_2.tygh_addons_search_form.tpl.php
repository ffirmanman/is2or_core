<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:41
  from 'tygh:views/addons/components/manage/addons_search_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cd5738f7_09598533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e855069c16ed5eb8208f1bcd969234e60993ad2f' => 
    array (
      0 => 'views/addons/components/manage/addons_search_form.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_release_info.tpl' => 1,
  ),
))) {
function content_69aed9cd5738f7_09598533 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/manage';
\Tygh\Languages\Helper::preloadLangVars(array('developers','addon_type','third_party_addons','without_rating','has_additional_pages','favorites','status','any','not_installed','installed','active','disabled','install_date','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','compatibility','any','product_env.now_running','admin_search_button','reset'));
?>
<div class="sidebar-row">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="addons_filters" method="get" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_meta')), ENT_QUOTES, 'UTF-8');?>
" id="addon_filters">
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("developers", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('developers'), 'developer', false, 'developer_key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('developer_key')->value => $_smarty_tpl->getVariable('developer')->value) {
$foreach3DoElse = false;
?>
                <label class="control-label checkbox" for="supplier_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('developer_key')), ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox" id="supplier_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('developer_key')), ENT_QUOTES, 'UTF-8');?>
" name="supplier[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('developer')['title']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('developer')['title'],$_smarty_tpl->getValue('search')['supplier'])) {?> checked="checked"<?php }?>>
                    <span>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('developer')['title']), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('developer')['position']), ENT_QUOTES, 'UTF-8');?>
)
                    </span>
                </label>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("addon_type", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong>
            <label class="control-label checkbox" for="third_party_addons">
                <input type="checkbox" id="third_party_addons" name="source" value="third" <?php if ($_smarty_tpl->getValue('search')['source']) {?> checked="checked"<?php }?>>
                <span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("third_party_addons", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </span>
            </label>
            <label class="control-label checkbox" for="without_rating">
                <input type="checkbox" id="without_rating" name="without_rating" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['without_rating']) {?> checked="checked"<?php }?>>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("without_rating", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </label>
            <label class="control-label checkbox" for="additional_pages">
                <input type="checkbox" id="additional_pages" name="add_pages" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['add_pages']) {?> checked="checked"<?php }?>>
                <span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("has_additional_pages", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </span>
            </label>
            <label class="control-label checkbox" for="favorites">
                <input type="checkbox" id="favorites" name="favorites" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['favorites']) {?> checked="checked"<?php }?>>
                <span>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("favorites", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </span>
            </label>
        </div>
        <div class="sidebar-field">
            <label for="addon_status"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong></label>
            <select id="addon_status" name="type">
                <option value="any" <?php if (( !true || empty($_smarty_tpl->getValue('search')['type'])) || $_smarty_tpl->getValue('search')['type'] == "any") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("any", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="not_installed" <?php if ($_smarty_tpl->getValue('search')['type'] == "not_installed") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("not_installed", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="installed" <?php if ($_smarty_tpl->getValue('search')['type'] == "installed") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installed", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="active" <?php if ($_smarty_tpl->getValue('search')['type'] == "active") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="disabled" <?php if ($_smarty_tpl->getValue('search')['type'] == "disabled") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("disabled", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            </select>
        </div>
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("install_date", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong>

            <select name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
period" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
period_selects">
                <option value="A" <?php if ($_smarty_tpl->getValue('search')['period'] === "A" || !$_smarty_tpl->getValue('period')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <optgroup label="=============">
                    <option value="D" <?php if ($_smarty_tpl->getValue('search')['period'] === "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_day", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="W" <?php if ($_smarty_tpl->getValue('search')['period'] === "W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_week", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="M" <?php if ($_smarty_tpl->getValue('search')['period'] === "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_month", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="Y" <?php if ($_smarty_tpl->getValue('search')['period'] === "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_year", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="LD" <?php if ($_smarty_tpl->getValue('search')['period'] === "LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yesterday", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="LW" <?php if ($_smarty_tpl->getValue('search')['period'] === "LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("previous_week", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="LM" <?php if ($_smarty_tpl->getValue('search')['period'] === "LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("previous_month", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="LY" <?php if ($_smarty_tpl->getValue('search')['period'] === "LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("previous_year", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="HH" <?php if ($_smarty_tpl->getValue('search')['period'] === "HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("last_24hours", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="HW" <?php if ($_smarty_tpl->getValue('search')['period'] === "HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("last_n_days", array("[N]"=>7), $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                    <option value="HM" <?php if ($_smarty_tpl->getValue('search')['period'] === "HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("last_n_days", array("[N]"=>30), $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                </optgroup>
            </select>
        </div>
        <div class="sidebar-field addon-compatibility">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("compatibility", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong>
            <select name="store_version" id="version_options">
                <option value="" selected="selected"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("any", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('versions'), 'version');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('version')->value) {
$foreach4DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('version')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['store_version'] === $_smarty_tpl->getValue('version')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('version')), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <div class="muted addon-compatibility__version">
                <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_time_shown'=>false), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('release_info', ob_get_clean(), false, 0);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_env.now_running", array("[release_info]"=>$_smarty_tpl->getValue('release_info')), $_smarty_tpl->getSmarty()->getLanguage());?>

            </div>
        </div>

        <div class="sidebar-field advanced-search-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dispatch')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_button", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
            <a class="btn btn-link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("addons.manage.reset_view")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        </div>
    </form>
</div>
<?php }
}
