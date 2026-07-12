<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:18:12
  from 'tygh:addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a1340e4d4d259_22448946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b906ea23b65df334465b3d91fd9048b3a22cec3' => 
    array (
      0 => 'addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1340e4d4d259_22448946 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/abt__unitheme';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__youpitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('runtime')['controller'] == "promotions" && $_smarty_tpl->getValue('promotion')['image']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['image']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__youpitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl"), $_smarty_tpl);?>
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

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__youpitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('runtime')['controller'] == "promotions" && $_smarty_tpl->getValue('promotion')['image']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['image']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__youpitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
