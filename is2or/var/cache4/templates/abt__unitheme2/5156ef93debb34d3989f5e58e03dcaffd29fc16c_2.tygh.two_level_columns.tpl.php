<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:45
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/two_level_columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455d102a205_86092355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5156ef93debb34d3989f5e58e03dcaffd29fc16c' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/two_level_columns.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_683455d102a205_86092355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('items_in_big_cols', ceil(($_smarty_tpl->tpl_vars['subitems_count']->value/$_smarty_tpl->tpl_vars['settings_cols']->value)));
$_smarty_tpl->_assignInScope('big_cols_count', $_smarty_tpl->tpl_vars['subitems_count']->value%$_smarty_tpl->tpl_vars['settings_cols']->value);?>

<?php $_smarty_tpl->_assignInScope('splited_elements', fn_abt__ut2_split_elements_for_menu($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['settings_cols']->value,$_smarty_tpl->tpl_vars['items_in_big_cols']->value,$_smarty_tpl->tpl_vars['big_cols_count']->value));
$_smarty_tpl->_assignInScope('second_level_counter', 0);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splited_elements']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('Viewlimit', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__no_hidden_elements_third_level_view'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>

    <div class="ut2-menu__2nd-col">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
            <div class="ut2-menu__2nd-item" data-elem-index="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_level_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('second_level_counter', $_smarty_tpl->tpl_vars['second_level_counter']->value+1);?>

                <?php $_smarty_tpl->_assignInScope('item2_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                <div class="ut2-menu__2nd-item__header<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?> ut2-mwi-icon-wrap<?php }
if (empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?> no-items<?php }?>">
                    <a <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" || !$_smarty_tpl->tpl_vars['item2']->value['childs']) {?>href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item2_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                       <?php } else { ?>href="javascript:void(0)"<?php }
if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?>
                       class="ut2-menu__2nd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                        <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                        <?php }?>
                        <span class="ut2-menu__2nd-link__text"><span class="ut2-menu__2nd-link__name"><?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
                        <i class="ut2-icon-outline-arrow_forward"></i>
                    <?php }?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_column_calculator.js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/components/vertical/two_level_columns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/components/vertical/two_level_columns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('items_in_big_cols', ceil(($_smarty_tpl->tpl_vars['subitems_count']->value/$_smarty_tpl->tpl_vars['settings_cols']->value)));
$_smarty_tpl->_assignInScope('big_cols_count', $_smarty_tpl->tpl_vars['subitems_count']->value%$_smarty_tpl->tpl_vars['settings_cols']->value);?>

<?php $_smarty_tpl->_assignInScope('splited_elements', fn_abt__ut2_split_elements_for_menu($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['settings_cols']->value,$_smarty_tpl->tpl_vars['items_in_big_cols']->value,$_smarty_tpl->tpl_vars['big_cols_count']->value));
$_smarty_tpl->_assignInScope('second_level_counter', 0);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splited_elements']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('Viewlimit', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__no_hidden_elements_third_level_view'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>

    <div class="ut2-menu__2nd-col">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
            <div class="ut2-menu__2nd-item" data-elem-index="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_level_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('second_level_counter', $_smarty_tpl->tpl_vars['second_level_counter']->value+1);?>

                <?php $_smarty_tpl->_assignInScope('item2_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                <div class="ut2-menu__2nd-item__header<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?> ut2-mwi-icon-wrap<?php }
if (empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?> no-items<?php }?>">
                    <a <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" || !$_smarty_tpl->tpl_vars['item2']->value['childs']) {?>href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['item2_url']->value ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                       <?php } else { ?>href="javascript:void(0)"<?php }
if ($_smarty_tpl->tpl_vars['item2_url']->value && $_smarty_tpl->tpl_vars['item2']->value['new_window'] == smarty_modifier_enum("YesNo::YES")) {?> target="_blank"<?php }?>
                       class="ut2-menu__2nd-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                        <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'] && $_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0, true);
?>
                        <?php }?>
                        <span class="ut2-menu__2nd-link__text"><span class="ut2-menu__2nd-link__name"><?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</span><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'] == '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>
                        <i class="ut2-icon-outline-arrow_forward"></i>
                    <?php }?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_column_calculator.js"),$_smarty_tpl);
}
}
}
