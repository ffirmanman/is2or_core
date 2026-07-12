<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/additional_info_before.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6bbe46e1_66239582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0a7424b859823e381f0a2ef0369d736aaf11a7' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/additional_info_before.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd6bbe46e1_66239582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.ab__hide_content.php','function'=>'smarty_block_ab__hide_content',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('more','more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('limit', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit']);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] != 'variations' && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] != 'features_and_variations') {?>
	<?php $_smarty_tpl->_assignInScope('limit', 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_features']->value && $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variation_features_variants", null, null);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variation_features_variants'] = fn_abt__ut2_prepare_variation_features_variants($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'],$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']);
$_smarty_tpl->_assignInScope('product', $_tmp_array);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'variation_feature');
$_smarty_tpl->tpl_vars['variation_feature']->index = -1;
$_smarty_tpl->tpl_vars['variation_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->do_else = false;
$_smarty_tpl->tpl_vars['variation_feature']->index++;
$__foreach_variation_feature_98_saved = $_smarty_tpl->tpl_vars['variation_feature'];
?>
            <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog'] === smarty_modifier_enum("YesNo::YES")) {?>

                <?php if ($_smarty_tpl->tpl_vars['limit']->value > 0) {?>
                
                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variants_count') < $_smarty_tpl->tpl_vars['variation_feature']->index) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variants_count", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_feature']->index+1, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php }?>

                <div class="ut2-lv__features-item">
                    <p class="ut2-lv__features-description">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                    </p>
                    <?php $_smarty_tpl->_assignInScope('printed_variations', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variation_feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['printed_variations']->value < $_smarty_tpl->tpl_vars['limit']->value && ($_smarty_tpl->tpl_vars['variant']->value['product_id'] || $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES"))) {?>

                                                                <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['filter_style'] == 'color') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</a>
                                    <?php } else { ?>
                                        <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</a>   
                                    <?php } else { ?>
                                        <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                </a>
                            <?php }?>
						<?php }?>
                        <?php $_smarty_tpl->_assignInScope('printed_variations', $_smarty_tpl->tpl_vars['printed_variations']->value+1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants']) > $_smarty_tpl->tpl_vars['limit']->value) {?><span class="ut2-lv__more">(<?php echo $_smarty_tpl->__("more");?>
 +<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])-$_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
)</span><?php }?>
                </div>
                <?php }?>

            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['variation_feature'] = $__foreach_variation_feature_98_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants'))) {?>
        <div class="ut2-lv__item-features">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants');?>

            <?php $_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php }
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "variations") {?>
    <?php $_smarty_tpl->_assignInScope('hide_features', true ,false ,2);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/additional_info_before.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/additional_info_before.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('limit', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit']);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] != 'variations' && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] != 'features_and_variations') {?>
	<?php $_smarty_tpl->_assignInScope('limit', 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_features']->value && $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variation_features_variants", null, null);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variation_features_variants'] = fn_abt__ut2_prepare_variation_features_variants($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'],$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']);
$_smarty_tpl->_assignInScope('product', $_tmp_array);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'variation_feature');
$_smarty_tpl->tpl_vars['variation_feature']->index = -1;
$_smarty_tpl->tpl_vars['variation_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->do_else = false;
$_smarty_tpl->tpl_vars['variation_feature']->index++;
$__foreach_variation_feature_100_saved = $_smarty_tpl->tpl_vars['variation_feature'];
?>
            <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog'] === smarty_modifier_enum("YesNo::YES")) {?>

                <?php if ($_smarty_tpl->tpl_vars['limit']->value > 0) {?>
                
                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variants_count') < $_smarty_tpl->tpl_vars['variation_feature']->index) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variants_count", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_feature']->index+1, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php }?>

                <div class="ut2-lv__features-item">
                    <p class="ut2-lv__features-description">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                    </p>
                    <?php $_smarty_tpl->_assignInScope('printed_variations', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variation_feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['printed_variations']->value < $_smarty_tpl->tpl_vars['limit']->value && ($_smarty_tpl->tpl_vars['variant']->value['product_id'] || $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES"))) {?>

                                                                <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['filter_style'] == 'color') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</a>
                                    <?php } else { ?>
                                        <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</a>   
                                    <?php } else { ?>
                                        <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['display_as_links'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['variant']->value['product_id']) {?>
                                </a>
                            <?php }?>
						<?php }?>
                        <?php $_smarty_tpl->_assignInScope('printed_variations', $_smarty_tpl->tpl_vars['printed_variations']->value+1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants']) > $_smarty_tpl->tpl_vars['limit']->value) {?><span class="ut2-lv__more">(<?php echo $_smarty_tpl->__("more");?>
 +<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])-$_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
)</span><?php }?>
                </div>
                <?php }?>

            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['variation_feature'] = $__foreach_variation_feature_100_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants'))) {?>
        <div class="ut2-lv__item-features">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_variants');?>

            <?php $_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php }
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "variations") {?>
    <?php $_smarty_tpl->_assignInScope('hide_features', true ,false ,2);
}
}
}
}
