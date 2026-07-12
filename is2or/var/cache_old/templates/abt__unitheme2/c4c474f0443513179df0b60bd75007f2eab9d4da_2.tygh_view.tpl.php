<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:55:28
  from 'tygh:addons/ab__deal_of_the_day/views/promotions/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae8b005261f1_41112132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c474f0443513179df0b60bd75007f2eab9d4da' => 
    array (
      0 => 'addons/ab__deal_of_the_day/views/promotions/view.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae8b005261f1_41112132 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__deal_of_the_day/views/promotions';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('promotion')['hide_products_block'] != 'Y') {?>
    <?php if ($_smarty_tpl->getValue('products')) {?>
    <div id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
        <div class="ab__dotd_promotions-products" id="promotion_products">
            <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        <!--promotion_products--></div>
    <!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('category_groups')) {?>
    <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
    <?php $_smarty_tpl->assign('tmpl_extra', "products_multicolumns_extra", false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category_groups'), 'category_group');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category_group')->value) {
$foreach0DoElse = false;
?>
        <div class="clearfix ty-mb-s">
            <h2 class="ty-mainbox-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_group')['category']), ENT_QUOTES, 'UTF-8');?>
</h2>
            <?php $_smarty_tpl->assign('products', $_smarty_tpl->getValue('category_group')['products'], false, NULL);?>
            <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/views/promotions/view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/views/promotions/view.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('promotion')['hide_products_block'] != 'Y') {?>
    <?php if ($_smarty_tpl->getValue('products')) {?>
    <div id="category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">
        <div class="ab__dotd_promotions-products" id="promotion_products">
            <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        <!--promotion_products--></div>
    <!--category_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('category_groups')) {?>
    <?php $_smarty_tpl->assign('layouts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_products_views')('',false,0), false, NULL);?>
    <?php $_smarty_tpl->assign('tmpl_extra', "products_multicolumns_extra", false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category_groups'), 'category_group');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category_group')->value) {
$foreach1DoElse = false;
?>
        <div class="clearfix ty-mb-s">
            <h2 class="ty-mainbox-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_group')['category']), ENT_QUOTES, 'UTF-8');?>
</h2>
            <?php $_smarty_tpl->assign('products', $_smarty_tpl->getValue('category_group')['products'], false, NULL);?>
            <?php if ($_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('layouts')[$_smarty_tpl->getValue('selected_layout')]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->getValue('settings')['Appearance']['columns_in_products_list']), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }
}
}
}
}
