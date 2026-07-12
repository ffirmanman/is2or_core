<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/is2or_size_charts/hooks/products/product_option_content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ffb31613_54207271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3e5c01c0848f30ac0d924451217c7f18e8c3cd' => 
    array (
      0 => 'addons/is2or_size_charts/hooks/products/product_option_content.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/is2or_size_charts/components/size_chart.tpl' => 2,
  ),
))) {
function content_69fb49ffb31613_54207271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_size_charts/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_product_page'] == "L1") {?>
    <?php $_smarty_tpl->assign('show_texts', true, false, NULL);?>
    <?php if ($_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_product_page_type'] == 'table' && $_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_table_mode_texts'] == 'N') {?>
        <?php $_smarty_tpl->assign('show_texts', false, false, NULL);?>
    <?php }?>
    <div class="ty-expiry-date-group">
        <span class="ty-control-group__label product-list-field">&nbsp;</span>
        <span class="ty-control-group__item">
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_size_charts/components/size_chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_popup'=>($_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_product_page_type'] == "link")), (int) 0, $_smarty_current_dir);
?>
        </span>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_size_charts/hooks/products/product_option_content.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_size_charts/hooks/products/product_option_content.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_product_page'] == "L1") {?>
    <?php $_smarty_tpl->assign('show_texts', true, false, NULL);?>
    <?php if ($_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_product_page_type'] == 'table' && $_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_table_mode_texts'] == 'N') {?>
        <?php $_smarty_tpl->assign('show_texts', false, false, NULL);?>
    <?php }?>
    <div class="ty-expiry-date-group">
        <span class="ty-control-group__label product-list-field">&nbsp;</span>
        <span class="ty-control-group__item">
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_size_charts/components/size_chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_popup'=>($_smarty_tpl->getValue('addons')['is2or_size_charts']['show_in_product_page_type'] == "link")), (int) 0, $_smarty_current_dir);
?>
        </span>
    </div>
<?php }
}
}
}
