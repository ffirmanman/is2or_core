<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:14
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/meta.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7ace6746_61630053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4aa658e8602e782dc875d18b841ce52388a0288' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/meta.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7ace6746_61630053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><meta property="og:type" content="website" />
<meta property="og:locale" content="<?php echo htmlspecialchars((string) fn_abt__ut2_get_locale(''), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:title" content="<?php echo smarty_modifier_trim(preg_replace('!\s+!u', ' ',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'page_title')));?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((string) (($tmp = html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:url" content="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'categories' && $_smarty_tpl->tpl_vars['category_data']->value && $_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'products' && $_smarty_tpl->tpl_vars['product']->value && $_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'pages' && $_smarty_tpl->tpl_vars['page']->value && $_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'product_features' && $_smarty_tpl->tpl_vars['variant_data']->value && $_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_data']->value['image_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__unitheme:og_image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <meta property="og:image" content=" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2_less']['general']['browser_interface_bg']) {?>
    <meta name="theme-color" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2_less']['general']['browser_interface_bg'], ENT_QUOTES, 'UTF-8');?>
">
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><meta property="og:type" content="website" />
<meta property="og:locale" content="<?php echo htmlspecialchars((string) fn_abt__ut2_get_locale(''), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:title" content="<?php echo smarty_modifier_trim(preg_replace('!\s+!u', ' ',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'page_title')));?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((string) (($tmp = html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:url" content="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'categories' && $_smarty_tpl->tpl_vars['category_data']->value && $_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'products' && $_smarty_tpl->tpl_vars['product']->value && $_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'pages' && $_smarty_tpl->tpl_vars['page']->value && $_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'product_features' && $_smarty_tpl->tpl_vars['variant_data']->value && $_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_data']->value['image_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__unitheme:og_image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <meta property="og:image" content=" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2_less']['general']['browser_interface_bg']) {?>
    <meta name="theme-color" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2_less']['general']['browser_interface_bg'], ENT_QUOTES, 'UTF-8');?>
">
<?php }
}
}
}
