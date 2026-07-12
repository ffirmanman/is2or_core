<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:12
  from 'tygh:views/checkout/cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafacc774f6_58671567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c4ee456d8ecd3df9f41012fb334e31088e9b289' => 
    array (
      0 => 'views/checkout/cart.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/cart_content.tpl' => 2,
    'tygh:buttons/continue_shopping.tpl' => 2,
  ),
))) {
function content_69afafacc774f6_58671567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('text_cart_empty','text_cart_empty'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/checkout.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/cart_content.js"), $_smarty_tpl);?>


<div id="cart_main">
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_cart_is_empty')($_smarty_tpl->getValue('cart'))) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_cart_empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>

        <div class="buttons-container wrap">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"submit"), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
<!--cart_main--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/cart.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/cart.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/checkout.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/cart_content.js"), $_smarty_tpl);?>


<div id="cart_main">
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_cart_is_empty')($_smarty_tpl->getValue('cart'))) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_cart_empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>

        <div class="buttons-container wrap">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"submit"), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
<!--cart_main--></div>
<?php }
}
}
