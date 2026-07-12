<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:05
  from 'tygh:meta.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa5c752c5_41386885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de28c19d07c197ec87809fbf0ac9e19e6327a53' => 
    array (
      0 => 'meta.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa5c752c5_41386885 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('display_base_href')) {?>
<base href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/" />
<?php }?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo htmlspecialchars((string) ((defined('CHARSET') ? constant('CHARSET') : null)), ENT_QUOTES, 'UTF-8');?>
" data-ca-mode="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('store_trigger')), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0,viewport-fit=cover" />
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<meta name="description" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')((($tmp = $_smarty_tpl->getValue('meta_description') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_description'] ?? null : $tmp),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8")), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_keywords"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <meta name="keywords" content="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('meta_keywords') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_keywords'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_keywords"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
<meta name="format-detection" content="telephone=no">
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getValue('location_data')['custom_html'];?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="meta.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"meta.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('display_base_href')) {?>
<base href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/" />
<?php }?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo htmlspecialchars((string) ((defined('CHARSET') ? constant('CHARSET') : null)), ENT_QUOTES, 'UTF-8');?>
" data-ca-mode="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('store_trigger')), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0,viewport-fit=cover" />
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<meta name="description" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')((($tmp = $_smarty_tpl->getValue('meta_description') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_description'] ?? null : $tmp),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8")), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_keywords"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <meta name="keywords" content="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('meta_keywords') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_keywords'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta_keywords"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
<meta name="format-detection" content="telephone=no">
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:meta"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getValue('location_data')['custom_html'];?>

<?php }
}
}
