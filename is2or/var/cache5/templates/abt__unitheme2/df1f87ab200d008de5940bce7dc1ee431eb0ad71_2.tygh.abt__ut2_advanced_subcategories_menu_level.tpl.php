<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:20:43
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc2ba80739_18700375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1f87ab200d008de5940bce7dc1ee431eb0ad71' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl' => 3,
  ),
),false)) {
function content_6835bc2ba80739_18700375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('more','more','less','less','more','more','less','less'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ut2-items level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'categories', array (
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
?>
    <?php if ($_smarty_tpl->tpl_vars['level']->value == 2 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_2']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)-$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_2'], ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->__("more");?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 3 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_3']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)-$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_3'], ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->__("more");?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['current']) {?>
        <?php $_smarty_tpl->_assignInScope('parent', false);?>
    <?php }?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['category']->value['current']) {?> current<?php }
if ($_smarty_tpl->tpl_vars['parent']->value) {?> parent<?php } else { ?> ut2-item<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_item']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['category']->value['current']) {?>
            <span><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>

                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_products_count'] == smarty_modifier_enum("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) fn_abt__ut2_get_category_products_count($_smarty_tpl->tpl_vars['category']->value['category_id'],true), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo htmlspecialchars((string) $_prefixVariable1, ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </span>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['parent']->value) {?><div class="ut2-item"><?php }?>
            <a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['parent']->value) {?>
                    <span><i class="ut2-icon-arrow_back_black"></i><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
</span>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_products_count'] == smarty_modifier_enum("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) fn_abt__ut2_get_category_products_count($_smarty_tpl->tpl_vars['category']->value['category_id'],true), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo htmlspecialchars((string) $_prefixVariable2, ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['parent']->value) {?></div><?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['subcategories'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'parent'=>$_smarty_tpl->tpl_vars['parent']->value), 0, true);
?>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['level']->value == 2 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_2'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_item']->value, ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->__("less");?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 3 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_3'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_item']->value, ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->__("less");?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ut2-items level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'categories', array (
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
?>
    <?php if ($_smarty_tpl->tpl_vars['level']->value == 2 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_2']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)-$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_2'], ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->__("more");?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 3 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_3']+1) {?>
        <div class="ut2-item ut2-more-btn" data-action="show"><span>+<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)-$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_3'], ENT_QUOTES, 'UTF-8');?>
<span><?php echo $_smarty_tpl->__("more");?>
</span><i class="ty-icon-down-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['current']) {?>
        <?php $_smarty_tpl->_assignInScope('parent', false);?>
    <?php }?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['category']->value['current']) {?> current<?php }
if ($_smarty_tpl->tpl_vars['parent']->value) {?> parent<?php } else { ?> ut2-item<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_item']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['category']->value['current']) {?>
            <span><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>

                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_products_count'] == smarty_modifier_enum("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) fn_abt__ut2_get_category_products_count($_smarty_tpl->tpl_vars['category']->value['category_id'],true), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
echo htmlspecialchars((string) $_prefixVariable3, ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </span>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['parent']->value) {?><div class="ut2-item"><?php }?>
            <a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['parent']->value) {?>
                    <span><i class="ut2-icon-arrow_back_black"></i><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
</span>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_products_count'] == smarty_modifier_enum("YesNo::YES")) {?>
                    <em><?php ob_start();
echo htmlspecialchars((string) fn_abt__ut2_get_category_products_count($_smarty_tpl->tpl_vars['category']->value['category_id'],true), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
echo htmlspecialchars((string) $_prefixVariable4, ENT_QUOTES, 'UTF-8');?>
</em>
                <?php }?>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['parent']->value) {?></div><?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['subcategories'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'parent'=>$_smarty_tpl->tpl_vars['parent']->value), 0, true);
?>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['level']->value == 2 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_2'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_item']->value, ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->__("less");?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 3 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_category_count_level_3'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null) == (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'] : null)) {?>
        <div class="ut2-item ut2-more-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_item']->value, ENT_QUOTES, 'UTF-8');?>
" data-action="hide"><span><span><?php echo $_smarty_tpl->__("less");?>
</span><i class="ty-icon-up-open"></i></span></div>
        <?php $_smarty_tpl->_assignInScope('hidden_item', 'hidden-item hidden');?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php }
}
}
