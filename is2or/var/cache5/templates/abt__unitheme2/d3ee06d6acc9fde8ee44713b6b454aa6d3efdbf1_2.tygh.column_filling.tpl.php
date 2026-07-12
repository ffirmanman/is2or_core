<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:18:51
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/column_filling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbbb1dcc23_20780092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ee06d6acc9fde8ee44713b6b454aa6d3efdbf1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/column_filling.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/menu/components/vertical/two_level_columns.tpl' => 2,
    'tygh:blocks/menu/components/vertical/three_level_columns.tpl' => 2,
  ),
),false)) {
function content_6835bbbb1dcc23_20780092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_topmenu_more','text_topmenu_more','text_topmenu_more','text_topmenu_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('has_icon', false);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['child']->value['abt__ut2_mwi__icon']) {?>
                <?php $_smarty_tpl->_assignInScope('has_icon', true);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="ut2-menu__submenu__carrier ut2-simple <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner<?php }
}?>">
            <div class="ut2-menu__submenu__wrapper">
                <div class="ut2-menu__2nd-list">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/vertical/two_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                    <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']) {?> show-not-mobile<?php }?>">
                        <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                            <span class="ut2-menu__more-cat-link__in">
                                <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                            </span>
                        </a>
                    </div>
                <?php }?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                    <div class="ut2-mwi-html__in">
                        <?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>

                    </div>
                </div>
            <?php }?>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ut2-menu__submenu__carrier <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>cascading <?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner<?php }
}?>">
            <div class="ut2-menu__submenu__wrapper">
                <div class="ut2-menu__2nd-list">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/vertical/three_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                    <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']) {?> show-not-mobile<?php }?>">
                        <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                            <span class="ut2-menu__more-cat-link__in">
                                <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                            </span>
                        </a>
                    </div>
                <?php }?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                    <div class="ut2-mwi-html__in">
                        <?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>

                    </div>
                </div>
            <?php }?>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/components/vertical/column_filling.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/components/vertical/column_filling.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('has_icon', false);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['child']->value['abt__ut2_mwi__icon']) {?>
                <?php $_smarty_tpl->_assignInScope('has_icon', true);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="ut2-menu__submenu__carrier ut2-simple <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner<?php }
}?>">
            <div class="ut2-menu__submenu__wrapper">
                <div class="ut2-menu__2nd-list">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/vertical/two_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                    <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']) {?> show-not-mobile<?php }?>">
                        <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                            <span class="ut2-menu__more-cat-link__in">
                                <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                            </span>
                        </a>
                    </div>
                <?php }?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                    <div class="ut2-mwi-html__in">
                        <?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>

                    </div>
                </div>
            <?php }?>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ut2-menu__submenu__carrier <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?>cascading <?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'] !== "bottom") {?>submenu-1st-has-side-banner <?php } else { ?>submenu-1st-has-bottom-banner<?php }
}?>">
            <div class="ut2-menu__submenu__wrapper">
                <div class="ut2-menu__2nd-list">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/menu/components/vertical/three_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['item1_url']->value && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                    <div class="ut2-menu__more-cat-link<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']) {?> show-not-mobile<?php }?>">
                        <a class="ty-btn-text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
                            <span class="ut2-menu__more-cat-link__in">
                                <?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>

                            </span>
                        </a>
                    </div>
                <?php }?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
                <div class="ut2-mwi-html <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone">
                    <div class="ut2-mwi-html__in">
                        <?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>

                    </div>
                </div>
            <?php }?>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
