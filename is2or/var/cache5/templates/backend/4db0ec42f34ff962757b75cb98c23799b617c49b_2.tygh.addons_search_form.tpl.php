<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/manage/addons_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc40368765_06441157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4db0ec42f34ff962757b75cb98c23799b617c49b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/manage/addons_search_form.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_release_info.tpl' => 1,
  ),
),false)) {
function content_6835bc40368765_06441157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('developers','addon_type','third_party_addons','without_rating','has_additional_pages','favorites','status','any','not_installed','installed','active','disabled','install_date','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','compatibility','any','product_env.now_running','admin_search_button','reset'));
?>
<div class="sidebar-row">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_filters" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="addon_filters">
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->__("developers");?>
</strong>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['developers']->value, 'developer', false, 'developer_key');
$_smarty_tpl->tpl_vars['developer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['developer_key']->value => $_smarty_tpl->tpl_vars['developer']->value) {
$_smarty_tpl->tpl_vars['developer']->do_else = false;
?>
                <label class="control-label checkbox" for="supplier_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox" id="supplier_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="supplier[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer']->value['title'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['developer']->value['title'],$_smarty_tpl->tpl_vars['search']->value['supplier'])) {?> checked="checked"<?php }?>>
                    <span>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer']->value['title'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer']->value['position'], ENT_QUOTES, 'UTF-8');?>
)
                    </span>
                </label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->__("addon_type");?>
</strong>
            <label class="control-label checkbox" for="third_party_addons">
                <input type="checkbox" id="third_party_addons" name="source" value="third" <?php if ($_smarty_tpl->tpl_vars['search']->value['source']) {?> checked="checked"<?php }?>>
                <span>
                    <?php echo $_smarty_tpl->__("third_party_addons");?>

                </span>
            </label>
            <label class="control-label checkbox" for="without_rating">
                <input type="checkbox" id="without_rating" name="without_rating" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['without_rating']) {?> checked="checked"<?php }?>>
                <?php echo $_smarty_tpl->__("without_rating");?>

            </label>
            <label class="control-label checkbox" for="additional_pages">
                <input type="checkbox" id="additional_pages" name="add_pages" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['add_pages']) {?> checked="checked"<?php }?>>
                <span>
                    <?php echo $_smarty_tpl->__("has_additional_pages");?>

                </span>
            </label>
            <label class="control-label checkbox" for="favorites">
                <input type="checkbox" id="favorites" name="favorites" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['favorites']) {?> checked="checked"<?php }?>>
                <span>
                <?php echo $_smarty_tpl->__("favorites");?>

                </span>
            </label>
        </div>
        <div class="sidebar-field">
            <label for="addon_status"><strong><?php echo $_smarty_tpl->__("status");?>
</strong></label>
            <select id="addon_status" name="type">
                <option value="any" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['type']) || $_smarty_tpl->tpl_vars['search']->value['type'] == "any") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <option value="not_installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type'] == "not_installed") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_installed");?>
</option>
                <option value="installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type'] == "installed") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("installed");?>
</option>
                <option value="active" <?php if ($_smarty_tpl->tpl_vars['search']->value['type'] == "active") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['search']->value['type'] == "disabled") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->__("install_date");?>
</strong>

            <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects">
                <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "A" || !$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
                <optgroup label="=============">
                    <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
                    <option value="W" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
                    <option value="M" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="LD" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
                    <option value="LW" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
                    <option value="LM" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
                    <option value="LY" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="HH" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
                    <option value="HW" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
                    <option value="HM" <?php if ($_smarty_tpl->tpl_vars['search']->value['period'] === "HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
                </optgroup>
            </select>
        </div>
        <div class="sidebar-field addon-compatibility">
            <strong><?php echo $_smarty_tpl->__("compatibility");?>
</strong>
            <select name="store_version" id="version_options">
                <option value="" selected="selected"><?php echo $_smarty_tpl->__("any");?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versions']->value, 'version');
$_smarty_tpl->tpl_vars['version']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['version']->value) {
$_smarty_tpl->tpl_vars['version']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['store_version'] === $_smarty_tpl->tpl_vars['version']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="muted addon-compatibility__version">
                <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_time_shown'=>false), 0, false);
$_smarty_tpl->assign('release_info', ob_get_clean());
?>
                <?php echo $_smarty_tpl->__("product_env.now_running",array("[release_info]"=>$_smarty_tpl->tpl_vars['release_info']->value));?>

            </div>
        </div>

        <div class="sidebar-field advanced-search-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("admin_search_button");?>
">
            <a class="btn btn-link" href="<?php echo htmlspecialchars((string) fn_url("addons.manage.reset_view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reset");?>
</a>
        </div>
    </form>
</div>
<?php }
}
