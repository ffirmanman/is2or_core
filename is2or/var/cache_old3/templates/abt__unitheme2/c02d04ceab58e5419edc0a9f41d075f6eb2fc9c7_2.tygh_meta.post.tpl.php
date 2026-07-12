<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:21
  from 'tygh:addons/abt__unitheme2/hooks/index/meta.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb20de70557_98186451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c02d04ceab58e5419edc0a9f41d075f6eb2fc9c7' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/meta.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb20de70557_98186451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><meta property="og:type" content="website" />
<meta property="og:locale" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_locale')('')), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:title" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')(preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'page_title')));?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('meta_description'),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_description'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:url" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->getValue('runtime')['controller'] == 'categories' && $_smarty_tpl->getValue('category_data') && $_smarty_tpl->getValue('category_data')['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['main_pair']['detailed']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == 'products' && $_smarty_tpl->getValue('product') && $_smarty_tpl->getValue('product')['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['main_pair']['detailed']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == 'pages' && $_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['main_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == 'product_features' && $_smarty_tpl->getValue('variant_data') && $_smarty_tpl->getValue('variant_data')['image_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['image_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__unitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logos')['theme']['image']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__unitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2_less']['general']['browser_interface_bg']) {?>
    <meta name="theme-color" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2_less']['general']['browser_interface_bg']), ENT_QUOTES, 'UTF-8');?>
">
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/meta.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/index/meta.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><meta property="og:type" content="website" />
<meta property="og:locale" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_locale')('')), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:title" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')(preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'page_title')));?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('meta_description'),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_description'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:url" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->getValue('runtime')['controller'] == 'categories' && $_smarty_tpl->getValue('category_data') && $_smarty_tpl->getValue('category_data')['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['main_pair']['detailed']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == 'products' && $_smarty_tpl->getValue('product') && $_smarty_tpl->getValue('product')['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['main_pair']['detailed']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == 'pages' && $_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['main_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == 'product_features' && $_smarty_tpl->getValue('variant_data') && $_smarty_tpl->getValue('variant_data')['image_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['image_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__unitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('logos')['theme']['image']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__unitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2_less']['general']['browser_interface_bg']) {?>
    <meta name="theme-color" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2_less']['general']['browser_interface_bg']), ENT_QUOTES, 'UTF-8');?>
">
<?php }
}
}
}
