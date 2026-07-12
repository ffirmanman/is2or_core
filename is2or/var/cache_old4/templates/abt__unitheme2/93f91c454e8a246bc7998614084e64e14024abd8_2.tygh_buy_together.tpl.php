<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__buy_together/overrides/addons/buy_together/blocks/product_tabs/buy_together.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a010fb754_59864200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f91c454e8a246bc7998614084e64e14024abd8' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__buy_together/overrides/addons/buy_together/blocks/product_tabs/buy_together.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__buy_together/components/buy_together_block.tpl' => 2,
  ),
))) {
function content_69fb4a010fb754_59864200 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__buy_together/overrides/addons/buy_together/blocks/product_tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_buy_together']['view'] == 'as_tab_in_tabs' || ($_smarty_tpl->getValue('runtime')['controller'] == 'products' && $_smarty_tpl->getValue('runtime')['mode'] == 'options' && $_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST"))) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__buy_together/components/buy_together_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__buy_together/overrides/addons/buy_together/blocks/product_tabs/buy_together.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__buy_together/overrides/addons/buy_together/blocks/product_tabs/buy_together.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_buy_together']['view'] == 'as_tab_in_tabs' || ($_smarty_tpl->getValue('runtime')['controller'] == 'products' && $_smarty_tpl->getValue('runtime')['mode'] == 'options' && $_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST"))) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__buy_together/components/buy_together_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
}
