<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21bc1f147_68276774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a85c0b0ad55955c4095aa29763bc069003999f57' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21bc1f147_68276774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists'] && $_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->_assignInScope('promotions_ids', fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true,"show_in_products_lists"=>true)));?>
    <?php $_smarty_tpl->_assignInScope('promotions_ids', array_slice($_smarty_tpl->tpl_vars['promotions_ids']->value,0,$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']));?>

    <div class="ab-dotd-promos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotions_ids']->value, 'promotion_id');
$_smarty_tpl->tpl_vars['promotion_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->value) {
$_smarty_tpl->tpl_vars['promotion_id']->do_else = false;
?>
            <div class="ab-dotd-category-promo" data-ca-promotion-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists'] && $_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->_assignInScope('promotions_ids', fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true,"show_in_products_lists"=>true)));?>
    <?php $_smarty_tpl->_assignInScope('promotions_ids', array_slice($_smarty_tpl->tpl_vars['promotions_ids']->value,0,$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']));?>

    <div class="ab-dotd-promos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotions_ids']->value, 'promotion_id');
$_smarty_tpl->tpl_vars['promotion_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->value) {
$_smarty_tpl->tpl_vars['promotion_id']->do_else = false;
?>
            <div class="ab-dotd-category-promo" data-ca-promotion-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
