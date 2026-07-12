<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:18:00
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/static_templates/abt__ut2__categories_title_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345bf8534b52_26055142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8d778fb6757fb3f27f123cb2d33f9ba9e9a6a3' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/static_templates/abt__ut2__categories_title_block.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/breadcrumbs.tpl' => 2,
  ),
),false)) {
function content_68345bf8534b52_26055142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ut2-extra-block-title">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:categories_title_wrapper"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['category']) {?>
        <h1 class="ty-mainbox-title">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:categories_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:categories_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<span><?php echo $_smarty_tpl->tpl_vars['category_data']->value['category'];?>
</span>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:categories_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </h1>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>   
	<?php $_smarty_tpl->_subTemplateRender("tygh:common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/abt__ut2__categories_title_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/abt__ut2__categories_title_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ut2-extra-block-title">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:categories_title_wrapper"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['category']) {?>
        <h1 class="ty-mainbox-title">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:categories_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:categories_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<span><?php echo $_smarty_tpl->tpl_vars['category_data']->value['category'];?>
</span>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:categories_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </h1>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>   
	<?php $_smarty_tpl->_subTemplateRender("tygh:common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>

<?php }
}
}
