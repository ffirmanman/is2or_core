<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:01
  from 'tygh:addons/ab__preload/hooks/products/image_wrap.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ed3288e4_19797544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea80315936bd22bc8f178c36f2ceafa24aeca389' => 
    array (
      0 => 'addons/ab__preload/hooks/products/image_wrap.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1ed3288e4_19797544 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('no_images') && $_smarty_tpl->getValue('ab__preload_settings')['preload_main_product_image'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php if ($_smarty_tpl->getValue('addons')['hidpi']['status'] === "A") {?>
        <?php $_smarty_tpl->assign('ab__preload', 50, false, 2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('ab__preload', 100, false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/products/image_wrap.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/products/image_wrap.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('no_images') && $_smarty_tpl->getValue('ab__preload_settings')['preload_main_product_image'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php if ($_smarty_tpl->getValue('addons')['hidpi']['status'] === "A") {?>
        <?php $_smarty_tpl->assign('ab__preload', 50, false, 2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('ab__preload', 100, false, 2);?>
    <?php }
}
}
}
}
