<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a722dee76_94663312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2830b215174ae8ab806a1ed45e6e3936f22527' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/products.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69fb4a722dee76_94663312 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_products','products_found','text_no_matching_products_found','vendor_products','products_found','text_no_matching_products_found'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('_title', (($tmp = $_smarty_tpl->getValue('category_data')['category'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_products", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->assign('products_search', "Y", false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<div class="ut2-cat-container<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'] == 'bottom') {?> reverse<?php }?>">
    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'] != 'none') {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'])) {?>
        <div class="ty-wysiwyg-content ty-mb-s" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>

    <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subcategories')),'c'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp)), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('subcategories'),'size'=>$_smarty_tpl->getValue('rows'),'assign'=>"splitted_subcategories"), $_smarty_tpl);?>

    
    <?php if ($_smarty_tpl->getValue('subcategories') && $_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_subcategories'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <ul class="subcategories clearfix">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_subcategories'), 'ssubcateg');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ssubcateg')->value) {
$foreach2DoElse = false;
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ssubcateg'), 'category', false, NULL, 'ssubcateg', array (
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach3DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('category')) {?>
                    <li class="ty-subcategories__item <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>cat-img<?php }?>">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?category_id=".((string)$_smarty_tpl->getValue('category')['category_id'])."&company_id=".((string)$_smarty_tpl->getValue('company_id')))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->getValue('category')['main_pair'],'no_ids'=>true,'lazy_load'=>$_smarty_tpl->getValue('settings')['abt__ut2']['general']['lazy_load'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'image_id'=>"category_image",'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('products')) {?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("products_found", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->assign('title_extra', $_prefixVariable1.": ".((string)$_smarty_tpl->getValue('search')['total_items']), false, NULL);?>
        <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('category_data')['product_columns']) {?>
            <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('category_data')['product_columns'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'], false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
            <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('product_columns'),'show_qty'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php } elseif (!$_smarty_tpl->getValue('subcategories')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_matching_products_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>
    <!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
</div>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_title')), ENT_QUOTES, 'UTF-8');?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('title_extra');?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/products.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/products.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('_title', (($tmp = $_smarty_tpl->getValue('category_data')['category'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_products", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->assign('products_search', "Y", false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<div class="ut2-cat-container<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'] == 'bottom') {?> reverse<?php }?>">
    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'] != 'none') {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'])) {?>
        <div class="ty-wysiwyg-content ty-mb-s" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div>
    <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>

    <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subcategories')),'c'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp)), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('subcategories'),'size'=>$_smarty_tpl->getValue('rows'),'assign'=>"splitted_subcategories"), $_smarty_tpl);?>

    
    <?php if ($_smarty_tpl->getValue('subcategories') && $_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_subcategories'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <ul class="subcategories clearfix">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_subcategories'), 'ssubcateg');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ssubcateg')->value) {
$foreach4DoElse = false;
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ssubcateg'), 'category', false, NULL, 'ssubcateg', array (
));
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach5DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('category')) {?>
                    <li class="ty-subcategories__item <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>cat-img<?php }?>">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?category_id=".((string)$_smarty_tpl->getValue('category')['category_id'])."&company_id=".((string)$_smarty_tpl->getValue('company_id')))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('category')['main_pair']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->getValue('category')['main_pair'],'no_ids'=>true,'lazy_load'=>$_smarty_tpl->getValue('settings')['abt__ut2']['general']['lazy_load'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'image_id'=>"category_image",'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('products')) {?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("products_found", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->assign('title_extra', $_prefixVariable2.": ".((string)$_smarty_tpl->getValue('search')['total_items']), false, NULL);?>
        <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('category_data')['product_columns']) {?>
            <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('category_data')['product_columns'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'], false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
            <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('product_columns'),'show_qty'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php } elseif (!$_smarty_tpl->getValue('subcategories')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_matching_products_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>
    <!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
</div>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_title')), ENT_QUOTES, 'UTF-8');?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('title_extra');?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
