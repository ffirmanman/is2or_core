<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:58
  from 'tygh:addons/master_products/hooks/products/add_to_cart.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6e2e29b4_34301104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7050d1c9329948e7044a1b4b42037776e051e8' => 
    array (
      0 => 'addons/master_products/hooks/products/add_to_cart.override.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 4,
  ),
))) {
function content_6a133f6e2e29b4_34301104 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('select_options','add_to_cart_short','select_options','add_to_cart_short'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['best_product_offer_id'], false, NULL);?>
        <?php if ($_smarty_tpl->getValue('product')['has_options'] && !$_smarty_tpl->getValue('show_product_options') && !$_smarty_tpl->getValue('details_page')) {?>
            <?php if ($_smarty_tpl->getValue('but_role') == "text") {?>
                <?php $_smarty_tpl->assign('opt_but_role', "text", false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('opt_but_role', "action", false, NULL);?>
            <?php }?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("select_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']),'but_role'=>$_smarty_tpl->getValue('opt_but_role'),'but_name'=>'','but_meta'=>"ty-btn__primary ty-btn__big"), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_smarty_tpl->assign('_but_id', "button_cart_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <?php if ($_smarty_tpl->getValue('extra_button')) {
echo $_smarty_tpl->getValue('extra_button');?>
&nbsp;<?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('_but_id'),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'but_meta'=>$_smarty_tpl->getValue('add_to_cart_meta')), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_button_secondary_temp_".((string)$_smarty_tpl->getValue('obj_id')), "add_to_cart_button_secondary_temp_".((string)$_smarty_tpl->getValue('obj_id')), null);?>
                <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_secondary_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>((string)$_smarty_tpl->getValue('_but_id'))."_secondary",'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'add_to_cart_meta'=>((string)$_smarty_tpl->getValue('add_to_cart_meta'))." ty-btn__add-to-cart--secondary",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart_short", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                <!--add_to_cart_update_secondary_<?php echo $_smarty_tpl->getValue('obj_prefix');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_button_secondary_temp_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                        <?php $_smarty_tpl->assign('add_to_cart_button_secondary_temp_override_'.($_smarty_tpl->getValue('obj_id')), $_smarty_tpl->getValue('add_to_cart_button_secondary_temp_'.($_smarty_tpl->getValue('obj_id'))), false, 2);?>
            <?php $_smarty_tpl->assign('obj_id_override', $_smarty_tpl->getValue('obj_id'), false, 2);?>
            
            <?php $_smarty_tpl->assign('cart_button_exists', true, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('product')['best_product_offer_id']) {?>
            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['best_product_offer_id']), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/add_to_cart.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/add_to_cart.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['best_product_offer_id'], false, NULL);?>
        <?php if ($_smarty_tpl->getValue('product')['has_options'] && !$_smarty_tpl->getValue('show_product_options') && !$_smarty_tpl->getValue('details_page')) {?>
            <?php if ($_smarty_tpl->getValue('but_role') == "text") {?>
                <?php $_smarty_tpl->assign('opt_but_role', "text", false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('opt_but_role', "action", false, NULL);?>
            <?php }?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("select_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']),'but_role'=>$_smarty_tpl->getValue('opt_but_role'),'but_name'=>'','but_meta'=>"ty-btn__primary ty-btn__big"), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_smarty_tpl->assign('_but_id', "button_cart_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <?php if ($_smarty_tpl->getValue('extra_button')) {
echo $_smarty_tpl->getValue('extra_button');?>
&nbsp;<?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('_but_id'),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'but_meta'=>$_smarty_tpl->getValue('add_to_cart_meta')), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_button_secondary_temp_".((string)$_smarty_tpl->getValue('obj_id')), "add_to_cart_button_secondary_temp_".((string)$_smarty_tpl->getValue('obj_id')), null);?>
                <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_secondary_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>((string)$_smarty_tpl->getValue('_but_id'))."_secondary",'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'add_to_cart_meta'=>((string)$_smarty_tpl->getValue('add_to_cart_meta'))." ty-btn__add-to-cart--secondary",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart_short", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                <!--add_to_cart_update_secondary_<?php echo $_smarty_tpl->getValue('obj_prefix');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_button_secondary_temp_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                        <?php $_smarty_tpl->assign('add_to_cart_button_secondary_temp_override_'.($_smarty_tpl->getValue('obj_id')), $_smarty_tpl->getValue('add_to_cart_button_secondary_temp_'.($_smarty_tpl->getValue('obj_id'))), false, 2);?>
            <?php $_smarty_tpl->assign('obj_id_override', $_smarty_tpl->getValue('obj_id'), false, 2);?>
            
            <?php $_smarty_tpl->assign('cart_button_exists', true, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('product')['best_product_offer_id']) {?>
            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['best_product_offer_id']), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
