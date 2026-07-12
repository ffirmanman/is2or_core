<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:58:43
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683457735deb93_43418360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3ba240b1c6d3c0ec5e66750ccd2a7534dcf73b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__intelligent_accessories/views/components/product_list_templates/in_add_to_cart.tpl' => 2,
  ),
),false)) {
function content_683457735deb93_43418360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__ia.products_in_add_to_cart','ab__ia.products_in_add_to_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('p_id', smarty_modifier_replace($_REQUEST['dispatch'],"checkout.add..",''));
if ($_smarty_tpl->tpl_vars['p_id']->value > 0) {?>
    <?php $_smarty_tpl->_assignInScope('exclude_pid', array_keys(fn_array_value_to_key($_SESSION['cart']['products'],'product_id')));?>
    <?php $_smarty_tpl->_assignInScope('d', fn_ab__ia_get_join_list_by_product(array('product_id'=>$_smarty_tpl->tpl_vars['p_id']->value),"in_add_to_cart",(($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__intelligent_accessories']['max_ia_tabs_in_added_to_cart'] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)));?>
    <?php if ($_smarty_tpl->tpl_vars['d']->value[0] && is_array($_smarty_tpl->tpl_vars['d']->value[0])) {?>
        <div class="ty-ab__ia_joins clearfix">
            <span><?php echo $_smarty_tpl->__("ab__ia.products_in_add_to_cart");?>
</span>
            <?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

            <div class="ty-tabs cm-j-tabs cm-j-tabs-disable-convertation">
                <ul class="ty-tabs__list" style="padding-right:0">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value[0], 'j');
$_smarty_tpl->tpl_vars['j']->index = -1;
$_smarty_tpl->tpl_vars['j']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->do_else = false;
$_smarty_tpl->tpl_vars['j']->index++;
$_smarty_tpl->tpl_vars['j']->first = !$_smarty_tpl->tpl_vars['j']->index;
$__foreach_j_2_saved = $_smarty_tpl->tpl_vars['j'];
?>
                    <li id="ab__ia_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['j']->key, ENT_QUOTES, 'UTF-8');?>
" class="abt__ut2_grid_tabs ty-tabs__item cm-js <?php if ($_smarty_tpl->tpl_vars['j']->first) {?>active<?php }?>">
                        <span><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</span>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>

            <div class="cm-tabs-content ty-tabs__content clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value[0], 'j');
$_smarty_tpl->tpl_vars['j']->index = -1;
$_smarty_tpl->tpl_vars['j']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->do_else = false;
$_smarty_tpl->tpl_vars['j']->index++;
$_smarty_tpl->tpl_vars['j']->first = !$_smarty_tpl->tpl_vars['j']->index;
$__foreach_j_3_saved = $_smarty_tpl->tpl_vars['j'];
?>
                    <div id="content_ab__ia_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['j']->key, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__intelligent_accessories/views/components/product_list_templates/in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_pagination'=>true,'no_sorting'=>true,'products'=>(($tmp = fn_ab__ia_get_products_by_join(array('product_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'join_id'=>$_smarty_tpl->tpl_vars['j']->value['join_id'],'exclude_pid'=>$_smarty_tpl->tpl_vars['exclude_pid']->value),$_smarty_tpl->tpl_vars['addons']->value['ab__intelligent_accessories']['max_products_of_ia_tab_in_added_to_cart']) ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), 0, true);
?>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            Tygh.$.commonInit('div.ty-ab__ia_joins.clearfix');
        <?php echo '</script'; ?>
>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('p_id', smarty_modifier_replace($_REQUEST['dispatch'],"checkout.add..",''));
if ($_smarty_tpl->tpl_vars['p_id']->value > 0) {?>
    <?php $_smarty_tpl->_assignInScope('exclude_pid', array_keys(fn_array_value_to_key($_SESSION['cart']['products'],'product_id')));?>
    <?php $_smarty_tpl->_assignInScope('d', fn_ab__ia_get_join_list_by_product(array('product_id'=>$_smarty_tpl->tpl_vars['p_id']->value),"in_add_to_cart",(($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__intelligent_accessories']['max_ia_tabs_in_added_to_cart'] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)));?>
    <?php if ($_smarty_tpl->tpl_vars['d']->value[0] && is_array($_smarty_tpl->tpl_vars['d']->value[0])) {?>
        <div class="ty-ab__ia_joins clearfix">
            <span><?php echo $_smarty_tpl->__("ab__ia.products_in_add_to_cart");?>
</span>
            <?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

            <div class="ty-tabs cm-j-tabs cm-j-tabs-disable-convertation">
                <ul class="ty-tabs__list" style="padding-right:0">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value[0], 'j');
$_smarty_tpl->tpl_vars['j']->index = -1;
$_smarty_tpl->tpl_vars['j']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->do_else = false;
$_smarty_tpl->tpl_vars['j']->index++;
$_smarty_tpl->tpl_vars['j']->first = !$_smarty_tpl->tpl_vars['j']->index;
$__foreach_j_4_saved = $_smarty_tpl->tpl_vars['j'];
?>
                    <li id="ab__ia_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['j']->key, ENT_QUOTES, 'UTF-8');?>
" class="abt__ut2_grid_tabs ty-tabs__item cm-js <?php if ($_smarty_tpl->tpl_vars['j']->first) {?>active<?php }?>">
                        <span><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</span>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>

            <div class="cm-tabs-content ty-tabs__content clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value[0], 'j');
$_smarty_tpl->tpl_vars['j']->index = -1;
$_smarty_tpl->tpl_vars['j']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->do_else = false;
$_smarty_tpl->tpl_vars['j']->index++;
$_smarty_tpl->tpl_vars['j']->first = !$_smarty_tpl->tpl_vars['j']->index;
$__foreach_j_5_saved = $_smarty_tpl->tpl_vars['j'];
?>
                    <div id="content_ab__ia_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['j']->key, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__intelligent_accessories/views/components/product_list_templates/in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_pagination'=>true,'no_sorting'=>true,'products'=>(($tmp = fn_ab__ia_get_products_by_join(array('product_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'join_id'=>$_smarty_tpl->tpl_vars['j']->value['join_id'],'exclude_pid'=>$_smarty_tpl->tpl_vars['exclude_pid']->value),$_smarty_tpl->tpl_vars['addons']->value['ab__intelligent_accessories']['max_products_of_ia_tab_in_added_to_cart']) ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), 0, true);
?>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            Tygh.$.commonInit('div.ty-ab__ia_joins.clearfix');
        <?php echo '</script'; ?>
>
    <?php }
}
}
}
}
