<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/buttons/sticky_add_to_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5f353c3_01754516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4218b5ca0c5c1745c33e1baef226cb1ec2aa3194' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/buttons/sticky_add_to_cart.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/product_templates/components/product_rating.tpl' => 2,
    'tygh:blocks/product_templates/components/product_price.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
  ),
),false)) {
function content_6835b9f5f353c3_01754516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('but_role', 'act');
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>

<div class="ut2-pb__sticky-add-to-cart <?php if ($_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value) {?>position-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value, ENT_QUOTES, 'UTF-8');
}?> cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="ut2_pb__sticky_add_to_cart">
    <div class="ut2-pb__sticky-add-to-cart_block">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
        <div class="ut2-pb__sticky-add-to-cart_product">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'lazy_load'=>false), 0, false);
?>

            <div class="ut2-pb__sticky-add-to-cart_product-content">
                <div class="ut2-pb__sticky-add-to-cart_product-name"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</div>

                <div class="ut2-pb__sticky-add-to-cart_product-rating">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
        <?php }?>

        <div class="ut2-pb__sticky-add-to-cart_price">
            <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php $_smarty_tpl->_assignInScope('list_discount', false);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pp_compact_view'=>true), 0, false);
?>
        </div>

        <div class="ut2-pb__sticky-add-to-cart_list-buttons" id="abt__service_buttons_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
            <div class="cm-external-click" data-ca-external-click-id="button_wishlist_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>"text",'hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false), 0, false);
?>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
            <div>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false,'compare_but_href'=>null,'product_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, false);
?>
            </div>
            <?php }?>

        <!--abt__service_buttons_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="cm-external-click<?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?> cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');
}?>" data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_but_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'but_target_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_meta'=>$_smarty_tpl->tpl_vars['add_to_cart_meta']->value,'but_text'=>$_smarty_tpl->__("add_to_cart"),'show_price_in_button'=>false), 0, false);
?>
        <!--ut2_pb__sticky_add_to_cart--></div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/sticky_add_to_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/sticky_add_to_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('but_role', 'act');
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>

<div class="ut2-pb__sticky-add-to-cart <?php if ($_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value) {?>position-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value, ENT_QUOTES, 'UTF-8');
}?> cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="ut2_pb__sticky_add_to_cart">
    <div class="ut2-pb__sticky-add-to-cart_block">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
        <div class="ut2-pb__sticky-add-to-cart_product">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true,'lazy_load'=>false), 0, true);
?>

            <div class="ut2-pb__sticky-add-to-cart_product-content">
                <div class="ut2-pb__sticky-add-to-cart_product-name"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</div>

                <div class="ut2-pb__sticky-add-to-cart_product-rating">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
        </div>
        <?php }?>

        <div class="ut2-pb__sticky-add-to-cart_price">
            <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php $_smarty_tpl->_assignInScope('list_discount', false);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pp_compact_view'=>true), 0, true);
?>
        </div>

        <div class="ut2-pb__sticky-add-to-cart_list-buttons" id="abt__service_buttons_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
            <div class="cm-external-click" data-ca-external-click-id="button_wishlist_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>"text",'hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false), 0, true);
?>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
            <div>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hidden_label'=>true,'hidden_but_label'=>true,'but_title'=>false,'but_tooltip'=>false,'compare_but_href'=>null,'product_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, true);
?>
            </div>
            <?php }?>

        <!--abt__service_buttons_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="cm-external-click<?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?> cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');
}?>" data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_but_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'but_target_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_meta'=>$_smarty_tpl->tpl_vars['add_to_cart_meta']->value,'but_text'=>$_smarty_tpl->__("add_to_cart"),'show_price_in_button'=>false), 0, true);
?>
        <!--ut2_pb__sticky_add_to_cart--></div>
    </div>
</div>
<?php }
}
}
