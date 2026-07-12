<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/product_variations/hooks/products/add_to_cart.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff499724_41669832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad3e6ef8344733c90e7ab8e85f384c2c9647a2f' => 
    array (
      0 => 'addons/product_variations/hooks/products/add_to_cart.override.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
))) {
function content_69fb49ff499724_41669832 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart','add_to_cart'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_select_variations_button', (($tmp = $_smarty_tpl->getValue('show_select_variations_button') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('product')['has_child_variations'] && $_smarty_tpl->getValue('show_select_variations_button') && $_smarty_tpl->getValue('force_show_add_to_cart_button') != "Y") {?>

    <?php if ($_REQUEST['redirect_url']) {?>
        <?php $_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_REQUEST['redirect_url']), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == "icon" || $_smarty_tpl->getValue('button_type_add_to_cart') == "icon_button") {?>
        <?php $_smarty_tpl->assign('but_text', false, false, NULL);?>
        <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('button_type_add_to_cart') == "text") {?>
        <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_icon', false, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
        <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
    <?php }?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('preselected_options', $_smarty_tpl->getValue('product')['combination'], false, NULL);?>
    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>
        <span class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-ab-load-select-variation-content" data-ca-product-id="<?php echo $_smarty_tpl->getValue('product')['product_id'];?>
"<?php if ($_smarty_tpl->getValue('preselected_options')) {?> data-ca-combination="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preselected_options')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_icon')) {?><span><i class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_icon')), ENT_QUOTES, 'UTF-8');?>
"></i></span><?php }
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi><?php }
if ($_smarty_tpl->getValue('but_icon')) {?></span><?php }?>
    <?php } else { ?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

        <?php $_smarty_tpl->assign('href', "products.ut2_select_variation?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url')), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('preselected_options')) {?>
            <?php $_smarty_tpl->assign('href', ((string)$_smarty_tpl->getValue('href'))."&combination=".((string)$_smarty_tpl->getValue('preselected_options')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>((string)$_smarty_tpl->getValue('href')),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"ut2_select_variation_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'link_text'=>$_smarty_tpl->getValue('but_text'),'link_icon'=>$_smarty_tpl->getValue('but_icon'),'link_icon_first'=>true,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_meta'=>"ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->getValue('product')['product_id'],"data-ca-dialog-purpose"=>"ut2_select_variantion")), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/add_to_cart.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_variations/hooks/products/add_to_cart.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_select_variations_button', (($tmp = $_smarty_tpl->getValue('show_select_variations_button') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('product')['has_child_variations'] && $_smarty_tpl->getValue('show_select_variations_button') && $_smarty_tpl->getValue('force_show_add_to_cart_button') != "Y") {?>

    <?php if ($_REQUEST['redirect_url']) {?>
        <?php $_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_REQUEST['redirect_url']), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == "icon" || $_smarty_tpl->getValue('button_type_add_to_cart') == "icon_button") {?>
        <?php $_smarty_tpl->assign('but_text', false, false, NULL);?>
        <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('button_type_add_to_cart') == "text") {?>
        <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('but_icon', false, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('but_icon', "ut2-icon-use_icon_cart", false, NULL);?>
        <?php $_smarty_tpl->assign('but_text', (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>
    <?php }?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('preselected_options', $_smarty_tpl->getValue('product')['combination'], false, NULL);?>
    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>
        <span class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-ab-load-select-variation-content" data-ca-product-id="<?php echo $_smarty_tpl->getValue('product')['product_id'];?>
"<?php if ($_smarty_tpl->getValue('preselected_options')) {?> data-ca-combination="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preselected_options')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_icon')) {?><span><i class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_icon')), ENT_QUOTES, 'UTF-8');?>
"></i></span><?php }
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi><?php }
if ($_smarty_tpl->getValue('but_icon')) {?></span><?php }?>
    <?php } else { ?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

        <?php $_smarty_tpl->assign('href', "products.ut2_select_variation?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url')), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('preselected_options')) {?>
            <?php $_smarty_tpl->assign('href', ((string)$_smarty_tpl->getValue('href'))."&combination=".((string)$_smarty_tpl->getValue('preselected_options')), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>((string)$_smarty_tpl->getValue('href')),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"ut2_select_variation_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'link_text'=>$_smarty_tpl->getValue('but_text'),'link_icon'=>$_smarty_tpl->getValue('but_icon'),'link_icon_first'=>true,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_meta'=>"ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->getValue('product')['product_id'],"data-ca-dialog-purpose"=>"ut2_select_variantion")), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
