<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/addons/addon_favorite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc40152c87_59901972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fae34de5a9d0c2f87ca3a7d3aeea834902a69b18' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/components/addons/addon_favorite.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bc40152c87_59901972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_addon_to_favorites','remove_addon_from_favorites','favorites'));
$_smarty_tpl->_assignInScope('show_favorite', (($tmp = $_smarty_tpl->tpl_vars['show_favorite']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_favorite']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite'] === smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->_assignInScope('new_favorite_status', smarty_modifier_enum("YesNo::NO"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('new_favorite_status', smarty_modifier_enum("YesNo::YES"));?>
    <?php }?>
    <form action="<?php echo htmlspecialchars((string) fn_url("addons.set_favorite"), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="addons_set_favorite"
        class="form-edit form-horizontal cm-ajax form--no-margin"
        enctype="multipart/form-data"
    >
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="addon" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['addon'], ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="favorite" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_favorite_status']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="detailed" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['detailed']->value, ENT_QUOTES, 'UTF-8');?>
"/>

        <button type="submit" class="btn btn-link btn-mini link--monochrome">
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['a']->value['is_favorite'] === smarty_modifier_enum('YesNo::YES')) {
echo " hidden";
}
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_star_empty', "icon-star-empty".$_prefixVariable19);?>
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['a']->value['is_favorite'] !== smarty_modifier_enum('YesNo::YES')) {
echo " hidden";
}
$_prefixVariable20=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_star', "icon-star".$_prefixVariable20);?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_star_empty']->value,'title'=>$_smarty_tpl->__("add_addon_to_favorites")),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_star']->value,'title'=>$_smarty_tpl->__("remove_addon_from_favorites")),$_smarty_tpl);?>

        </button>

                <span class="hidden">
            <?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite'] === smarty_modifier_enum("YesNo::YES")) {?>
                <?php echo $_smarty_tpl->__("favorites");?>

            <?php }?>
        </span>
    </form>
<?php }
}
}
