<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:20:43
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/categories/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc2bb373e0_40143531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ef8572aa9000e0c333e53ed3b707b61cfa5c7a9' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/categories/view.tpl',
      1 => 1736836655,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/subcategories.tpl' => 2,
    'tygh:common/no_items.tpl' => 4,
  ),
),false)) {
function content_6835bc2bb373e0_40143531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products_found','text_no_products','text_no_products_found','text_no_products'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ut2-cat-container<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position'] == 'bottom') {?> reverse<?php }?>">
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position'] != 'none') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (($_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'])) {?>
            <div class="ty-wysiwyg-content ty-mb-s" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>

        <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
                <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
                    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);?>

                <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0, true);
?>
                <?php }?>
                
                <?php } elseif (!$_smarty_tpl->tpl_vars['show_not_found_notification']->value && $_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products_found"),'no_items_extended'=>true,'reset_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"features_hash")), 0, false);
?>
                <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value || $_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products")), 0, true);
?>
                <?php } else { ?>
                    <div class="cm-pagination-container"></div>
            <?php }?>
        <!--category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ut2-cat-container<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position'] == 'bottom') {?> reverse<?php }?>">
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position'] != 'none') {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (($_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'])) {?>
            <div class="ty-wysiwyg-content ty-mb-s" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>

        <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
                <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
                    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);?>

                <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0, true);
?>
                <?php }?>
                
                <?php } elseif (!$_smarty_tpl->tpl_vars['show_not_found_notification']->value && $_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products_found"),'no_items_extended'=>true,'reset_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"features_hash")), 0, true);
?>
                <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value || $_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products")), 0, true);
?>
                <?php } else { ?>
                    <div class="cm-pagination-container"></div>
            <?php }?>
        <!--category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
