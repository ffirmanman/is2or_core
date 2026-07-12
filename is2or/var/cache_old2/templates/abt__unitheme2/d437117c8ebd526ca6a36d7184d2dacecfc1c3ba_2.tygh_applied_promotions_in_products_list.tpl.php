<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9a86770_88647656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd437117c8ebd526ca6a36d7184d2dacecfc1c3ba' => 
    array (
      0 => 'addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa9a86770_88647656 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__deal_of_the_day/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['amount_of_promos_in_prods_lists'] && $_smarty_tpl->getValue('product')['promotions']) {?>
    <?php $_smarty_tpl->assign('promotions_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_filter_applied_promotions')($_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']),array("exclude_hidden"=>true,"show_in_products_lists"=>true)), false, NULL);?>
    <?php $_smarty_tpl->assign('promotions_ids', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('promotions_ids'),0,$_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']), false, NULL);?>

    <div class="ab-dotd-promos">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promotions_ids'), 'promotion_id');
$foreach63DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('promotion_id')->value) {
$foreach63DoElse = false;
?>
            <div class="ab-dotd-category-promo" data-ca-promotion-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion_id')), ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['amount_of_promos_in_prods_lists'] && $_smarty_tpl->getValue('product')['promotions']) {?>
    <?php $_smarty_tpl->assign('promotions_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_filter_applied_promotions')($_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']),array("exclude_hidden"=>true,"show_in_products_lists"=>true)), false, NULL);?>
    <?php $_smarty_tpl->assign('promotions_ids', $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('promotions_ids'),0,$_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']), false, NULL);?>

    <div class="ab-dotd-promos">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promotions_ids'), 'promotion_id');
$foreach64DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('promotion_id')->value) {
$foreach64DoElse = false;
?>
            <div class="ab-dotd-category-promo" data-ca-promotion-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion_id')), ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
