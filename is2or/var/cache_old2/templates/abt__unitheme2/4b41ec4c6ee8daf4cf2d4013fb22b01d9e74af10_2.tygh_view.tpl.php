<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:views/categories/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa91048a5_26649237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b41ec4c6ee8daf4cf2d4013fb22b01d9e74af10' => 
    array (
      0 => 'views/categories/view.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/subcategories.tpl' => 2,
    'tygh:common/no_items.tpl' => 4,
  ),
))) {
function content_69afafa91048a5_26649237 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/categories';
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products_found','text_no_products','text_no_products_found','text_no_products'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ut2-cat-container">
	    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'][$_smarty_tpl->getValue('settings')['ab__device']] == 'top') {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if (($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'])) {?>
            <div class="ty-wysiwyg-content ty-mb-m <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == "mobile") {?>ty-mt-m<?php }?>" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
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
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

            <?php if ($_smarty_tpl->getValue('products')) {?>
                <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('category_data')['product_columns']) {?>
                    <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('category_data')['product_columns'], false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'], false, NULL);?>
                <?php }?>
                <?php $_smarty_tpl->assign('is_selected_filters', $_REQUEST['features_hash'], false, NULL);?>

                <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('product_columns')), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                
                <?php } elseif (!$_smarty_tpl->getValue('show_not_found_notification') && $_smarty_tpl->getValue('is_selected_filters')) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products_found", [], $_smarty_tpl->getSmarty()->getLanguage()),'no_items_extended'=>true,'reset_url'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"features_hash")), (int) 0, $_smarty_current_dir);
?>
                <?php } elseif (!$_smarty_tpl->getValue('subcategories') || $_smarty_tpl->getValue('show_no_products_block')) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                <?php } else { ?>
                    <div class="cm-pagination-container"></div>
            <?php }?>
        <!--category_products_<?php echo $_smarty_tpl->getValue('block')['block_id'];?>
--></div>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'][$_smarty_tpl->getValue('settings')['ab__device']] == 'bottom') {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if (($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'])) {?>
                <div class="ty-wysiwyg-content ty-mt-m" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php }?>
    </div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['category']), ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/categories/view.tpl"), $_smarty_tpl);?>
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

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ut2-cat-container">
	    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'][$_smarty_tpl->getValue('settings')['ab__device']] == 'top') {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if (($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'])) {?>
            <div class="ty-wysiwyg-content ty-mb-m <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == "mobile") {?>ty-mt-m<?php }?>" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
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
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

            <?php if ($_smarty_tpl->getValue('products')) {?>
                <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('category_data')['product_columns']) {?>
                    <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('category_data')['product_columns'], false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('product_columns', $_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list'], false, NULL);?>
                <?php }?>
                <?php $_smarty_tpl->assign('is_selected_filters', $_REQUEST['features_hash'], false, NULL);?>

                <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('product_columns')), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                
                <?php } elseif (!$_smarty_tpl->getValue('show_not_found_notification') && $_smarty_tpl->getValue('is_selected_filters')) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products_found", [], $_smarty_tpl->getSmarty()->getLanguage()),'no_items_extended'=>true,'reset_url'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"features_hash")), (int) 0, $_smarty_current_dir);
?>
                <?php } elseif (!$_smarty_tpl->getValue('subcategories') || $_smarty_tpl->getValue('show_no_products_block')) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_products", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                <?php } else { ?>
                    <div class="cm-pagination-container"></div>
            <?php }?>
        <!--category_products_<?php echo $_smarty_tpl->getValue('block')['block_id'];?>
--></div>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['description_position'][$_smarty_tpl->getValue('settings')['ab__device']] == 'bottom') {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if (($_smarty_tpl->getValue('category_data')['description'] || $_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'])) {?>
                <div class="ty-wysiwyg-content ty-mt-m" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:description:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('category_data')['description'];?>
</div>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php }?>
    </div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"category:category:".((string)$_smarty_tpl->getValue('category_data')['category_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['category']), ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"categories:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
