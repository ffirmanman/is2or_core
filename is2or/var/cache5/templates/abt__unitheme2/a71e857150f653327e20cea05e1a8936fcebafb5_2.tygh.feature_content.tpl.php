<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:30:31
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/product_features/components/feature_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835be7793a256_72769678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a71e857150f653327e20cea05e1a8936fcebafb5' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/product_features/components/feature_content.tpl',
      1 => 1736836655,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6835be7793a256_72769678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products','text_no_products'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="ut2-feat-container<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['features']['description_position'] == 'bottom') {?> reverse<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['features']['description_position'] != 'none') {?>
            <div class="ty-feature">
                <div class="ty-feature__description ty-wysiwyg-content">
                    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
                        <div class="ty-feature__image">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0, false);
?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
                        <p><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <div class="ab-ut2-feature-content">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:ab__additional_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:ab__additional_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
                <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0, true);
?>
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:ab__additional_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php } else { ?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
        <?php }?>
    </div>
<!--category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/components/feature_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/components/feature_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="ut2-feat-container<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['features']['description_position'] == 'bottom') {?> reverse<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['features']['description_position'] != 'none') {?>
            <div class="ty-feature">
                <div class="ty-feature__description ty-wysiwyg-content">
                    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
                        <div class="ty-feature__image">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0, true);
?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
                        <p><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <div class="ab-ut2-feature-content">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:ab__additional_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:ab__additional_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
                <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0, true);
?>
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:ab__additional_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php } else { ?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
        <?php }?>
    </div>
<!--category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
