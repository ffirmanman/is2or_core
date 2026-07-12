<?php
/* Smarty version 5.4.3, created on 2026-03-10 05:44:25
  from 'tygh:addons/wishlist/views/wishlist/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69af85899d6683_65140091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7b87333afacfa6a87425af31a6b33cfa3780e6' => 
    array (
      0 => 'addons/wishlist/views/wishlist/view.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/continue_shopping.tpl' => 4,
  ),
))) {
function content_69af85899d6683_65140091 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/wishlist/views/wishlist';
\Tygh\Languages\Helper::preloadLangVars(array('empty','clear_wishlist','wishlist_content','empty','clear_wishlist','wishlist_content'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('columns', $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['wishlist_products']['item_quantity'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

<?php if (!$_smarty_tpl->getValue('wishlist_is_empty')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

    <?php $_smarty_tpl->assign('show_hr', false, false, NULL);?>
    <?php $_smarty_tpl->assign('location', "cart", false, NULL);
}?>

<?php $_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>

<?php if ($_smarty_tpl->getValue('products')) {?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('columns'),'show_empty'=>false,'show_name'=>true,'show_trunc_name'=>false,'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_discount_label'=>true,'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_amount'=>true,'show_amount_label'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_sku'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable1 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable2 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_reset_button'=>true,'show_custom_class'=>"ut2-wl__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'is_wishlist'=>true,'tmpl_extra'=>"products_multicolumns_extra"), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"), $_smarty_tpl);?>

    <div class="ty-grid-list<?php if ($_smarty_tpl->getValue('wishlist_is_empty')) {?> ty-wish-list-empty<?php }?>">
        <?php $_smarty_tpl->assign('iteration', 0, false, NULL);?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('iteration')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wishlist:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wishlist:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_smarty_tpl->assign('iteration', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'iteration'), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('iteration') == 0 || $_smarty_tpl->getValue('iteration')%$_smarty_tpl->getValue('columns') != 0) {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->getValue('iteration'),'c'=>$_smarty_tpl->getValue('columns')), $_smarty_tpl);?>

            <?php
$__section_empty_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('empty_count')) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_0_total = $__section_empty_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new \Smarty\Variable(array());
if ($__section_empty_rows_0_total !== 0) {
for ($__section_empty_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_0_iteration <= $__section_empty_rows_0_total; $__section_empty_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?>
                <div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-product-empty">
                        <span class="ty-product-empty__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </div>
                </div>
            <?php
}
}
?>
        <?php }?>
    </div>
<?php }?>

<?php if (!$_smarty_tpl->getValue('wishlist_is_empty')) {?>
    <div class="buttons-container ut2-wish-list__buttons">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"wishlist.clear",'but_meta'=>"ty-btn__outline"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php } else { ?>
    <div class="buttons-container ut2-wish-list__buttons ty-wish-list__continue">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist_content", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/wishlist/views/wishlist/view.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('columns', $_smarty_tpl->getValue('settings')['abt__ut2']['addons']['wishlist_products']['item_quantity'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

<?php if (!$_smarty_tpl->getValue('wishlist_is_empty')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

    <?php $_smarty_tpl->assign('show_hr', false, false, NULL);?>
    <?php $_smarty_tpl->assign('location', "cart", false, NULL);
}?>

<?php $_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>

<?php if ($_smarty_tpl->getValue('products')) {?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('columns'),'show_empty'=>false,'show_name'=>true,'show_trunc_name'=>false,'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_discount_label'=>true,'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_amount'=>true,'show_amount_label'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_sku'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable3 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable4 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_reset_button'=>true,'show_custom_class'=>"ut2-wl__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'is_wishlist'=>true,'tmpl_extra'=>"products_multicolumns_extra"), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"), $_smarty_tpl);?>

    <div class="ty-grid-list<?php if ($_smarty_tpl->getValue('wishlist_is_empty')) {?> ty-wish-list-empty<?php }?>">
        <?php $_smarty_tpl->assign('iteration', 0, false, NULL);?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('iteration')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wishlist:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"wishlist:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_smarty_tpl->assign('iteration', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'iteration'), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('iteration') == 0 || $_smarty_tpl->getValue('iteration')%$_smarty_tpl->getValue('columns') != 0) {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->getValue('iteration'),'c'=>$_smarty_tpl->getValue('columns')), $_smarty_tpl);?>

            <?php
$__section_empty_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('empty_count')) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_0_total = $__section_empty_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new \Smarty\Variable(array());
if ($__section_empty_rows_0_total !== 0) {
for ($__section_empty_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_0_iteration <= $__section_empty_rows_0_total; $__section_empty_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?>
                <div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-product-empty">
                        <span class="ty-product-empty__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </div>
                </div>
            <?php
}
}
?>
        <?php }?>
    </div>
<?php }?>

<?php if (!$_smarty_tpl->getValue('wishlist_is_empty')) {?>
    <div class="buttons-container ut2-wish-list__buttons">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("clear_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"wishlist.clear",'but_meta'=>"ty-btn__outline"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php } else { ?>
    <div class="buttons-container ut2-wish-list__buttons ty-wish-list__continue">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"text"), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("wishlist_content", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
