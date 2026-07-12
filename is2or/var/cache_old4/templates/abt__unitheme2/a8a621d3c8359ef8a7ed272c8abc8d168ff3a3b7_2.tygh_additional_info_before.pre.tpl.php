<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:47
  from 'tygh:addons/product_variations/hooks/products/additional_info_before.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0778eac6_13308354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a621d3c8359ef8a7ed272c8abc8d168ff3a3b7' => 
    array (
      0 => 'addons/product_variations/hooks/products/additional_info_before.pre.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a0778eac6_13308354 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('limit', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['limit'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] != 'variations' && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] != 'features_and_variations') {?>
    <?php $_smarty_tpl->assign('limit', 0, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_features') && $_smarty_tpl->getValue('product')['variation_features_variants']) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variation_features_variants", null, null);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variation_features_variants'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_prepare_variation_features_variants')($_smarty_tpl->getValue('product')['variation_features_variants'],$_smarty_tpl->getValue('product')['abt__ut2_features'],$_smarty_tpl->getValue('product')['product_id']);
$_smarty_tpl->assign('product', $_tmp_array, false, NULL);?>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'variation_feature');
$_smarty_tpl->getVariable('variation_feature')->index = -1;
$foreach58DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variation_feature')->value) {
$foreach58DoElse = false;
$_smarty_tpl->getVariable('variation_feature')->index++;
$foreach58Backup = clone $_smarty_tpl->getVariable('variation_feature');
?>
            <?php if ($_smarty_tpl->getValue('variation_feature')['display_on_catalog'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('variation_feature')['filter_style'] != 'color' || ($_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color' && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'dont_display'))) {?>

                <?php if ($_smarty_tpl->getValue('limit') > 0) {?>

                    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variants_count') < $_smarty_tpl->getVariable('variation_feature')->index) {?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variants_count", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getVariable('variation_feature')->index+1), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                    <?php }?>

                    <div class="ut2-lv__features-description"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variation_feature')['description']), ENT_QUOTES, 'UTF-8');?>
</div>

                    <div class="ut2-lv__features-item">
                        <?php $_smarty_tpl->assign('printed_variations', 0, false, NULL);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variation_feature')['variants'], 'variant');
$foreach59DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach59DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('printed_variations') < $_smarty_tpl->getValue('limit') && ($_smarty_tpl->getValue('variant')['product_id'] || $_smarty_tpl->getValue('addons')['product_variations']['variations_show_all_possible_feature_variants'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>

                                                                <?php if ($_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color') {?>
                                    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_as_links'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variant')['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__color-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['color']), ENT_QUOTES, 'UTF-8');?>
">&nbsp;</a>
                                    <?php } else { ?>
                                        <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['color']), ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_as_links'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variant')['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__features-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php } else { ?>
                                        <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                            <?php $_smarty_tpl->assign('printed_variations', $_smarty_tpl->getValue('printed_variations')+1, false, NULL);?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants']) > $_smarty_tpl->getValue('limit')) {?><span class="ut2-lv__more">+<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants'])-$_smarty_tpl->getValue('limit')), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    </div>
                <?php }?>

            <?php }?>
        <?php
$_smarty_tpl->setVariable('variation_feature', $foreach58Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variation_features_variants'))) {?>
        <div class="ut2-lv__item-features">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variation_features_variants');?>

            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <?php }
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "variations") {?>
    <?php $_smarty_tpl->assign('hide_features', true, false, 2);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/additional_info_before.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_variations/hooks/products/additional_info_before.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('limit', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['limit'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] != 'variations' && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] != 'features_and_variations') {?>
    <?php $_smarty_tpl->assign('limit', 0, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_features') && $_smarty_tpl->getValue('product')['variation_features_variants']) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variation_features_variants", null, null);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variation_features_variants'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_prepare_variation_features_variants')($_smarty_tpl->getValue('product')['variation_features_variants'],$_smarty_tpl->getValue('product')['abt__ut2_features'],$_smarty_tpl->getValue('product')['product_id']);
$_smarty_tpl->assign('product', $_tmp_array, false, NULL);?>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'variation_feature');
$_smarty_tpl->getVariable('variation_feature')->index = -1;
$foreach60DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variation_feature')->value) {
$foreach60DoElse = false;
$_smarty_tpl->getVariable('variation_feature')->index++;
$foreach60Backup = clone $_smarty_tpl->getVariable('variation_feature');
?>
            <?php if ($_smarty_tpl->getValue('variation_feature')['display_on_catalog'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('variation_feature')['filter_style'] != 'color' || ($_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color' && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'dont_display'))) {?>

                <?php if ($_smarty_tpl->getValue('limit') > 0) {?>

                    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variants_count') < $_smarty_tpl->getVariable('variation_feature')->index) {?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variants_count", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getVariable('variation_feature')->index+1), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                    <?php }?>

                    <div class="ut2-lv__features-description"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variation_feature')['description']), ENT_QUOTES, 'UTF-8');?>
</div>

                    <div class="ut2-lv__features-item">
                        <?php $_smarty_tpl->assign('printed_variations', 0, false, NULL);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variation_feature')['variants'], 'variant');
$foreach61DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach61DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('printed_variations') < $_smarty_tpl->getValue('limit') && ($_smarty_tpl->getValue('variant')['product_id'] || $_smarty_tpl->getValue('addons')['product_variations']['variations_show_all_possible_feature_variants'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>

                                                                <?php if ($_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color') {?>
                                    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_as_links'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variant')['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__color-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['color']), ENT_QUOTES, 'UTF-8');?>
">&nbsp;</a>
                                    <?php } else { ?>
                                        <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['color']), ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_as_links'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variant')['product_id']) {?>
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ut2-lv__features-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php } else { ?>
                                        <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->getValue('variant')['active']) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                            <?php $_smarty_tpl->assign('printed_variations', $_smarty_tpl->getValue('printed_variations')+1, false, NULL);?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants']) > $_smarty_tpl->getValue('limit')) {?><span class="ut2-lv__more">+<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants'])-$_smarty_tpl->getValue('limit')), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    </div>
                <?php }?>

            <?php }?>
        <?php
$_smarty_tpl->setVariable('variation_feature', $foreach60Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variation_features_variants'))) {?>
        <div class="ut2-lv__item-features">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variation_features_variants');?>

            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <?php }
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "variations") {?>
    <?php $_smarty_tpl->assign('hide_features', true, false, 2);
}
}
}
}
