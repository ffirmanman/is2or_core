<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:22:04
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc7c191a60_00443186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8e0b05e6bb488a4843392eb0f669cf82e1e912' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_list_templates/default_params/".((string)$_smarty_tpl->tpl_vars[\'tmpl\']->value).".tpl' => 2,
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
  ),
),false)) {
function content_6835bc7c191a60_00443186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_grid_html", null, null);?>
    <?php $_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/default_params/".((string)$_smarty_tpl->tpl_vars['tmpl']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['ab__cb_banner_exists']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_grid_html", null, null);?>
        <?php echo fn_ab__cb_insert_category_banner($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_grid_html'),'products_multicolumns');?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_grid_html');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_grid_html", null, null);?>
    <?php $_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/default_params/".((string)$_smarty_tpl->tpl_vars['tmpl']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['ab__cb_banner_exists']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_grid_html", null, null);?>
        <?php echo fn_ab__cb_insert_category_banner($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_grid_html'),'products_multicolumns');?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_grid_html');
}
}
}
