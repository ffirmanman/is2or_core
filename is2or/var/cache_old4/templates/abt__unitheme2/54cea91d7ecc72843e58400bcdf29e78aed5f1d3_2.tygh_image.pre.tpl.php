<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:37
  from 'tygh:addons/ab__images_seo/hooks/common/image.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fd6f34e7_38581450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54cea91d7ecc72843e58400bcdf29e78aed5f1d3' => 
    array (
      0 => 'addons/ab__images_seo/hooks/common/image.pre.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fd6f34e7_38581450 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__images_seo/hooks/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('product_obj_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::PRODUCT"), false, NULL);
$_smarty_tpl->assign('category_obj_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::CATEGORY"), false, NULL);
$_smarty_tpl->assign('feature_obj_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::FEATURE"), false, NULL);?>

<?php $_smarty_tpl->assign('alt_attr_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::ALT"), false, NULL);
$_smarty_tpl->assign('title_attr_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::TITLE"), false, NULL);
$_smarty_tpl->assign('image_number_attr_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::IMAGE_NUMBER"), false, NULL);?>

<?php $_smarty_tpl->assign('image_object_type', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_object_type')($_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('image_object_type')) {?>
    <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getValue('image_additional_attrs')['alt'], false, NULL);?>
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('alt')) || $_smarty_tpl->getValue('addons')['ab__images_seo']['override'] == 'always_generate') {?>
        <?php if ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'product') {?>
            <?php $_smarty_tpl->assign('num', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_count')('alt',$_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('num') > 0) {?>
                <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),$_smarty_tpl->getValue('product')['product'],$_smarty_tpl->getValue('num'),$_smarty_tpl->getValue('product')['variation_features']), false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'category') {?>
            <?php $_smarty_tpl->assign('alt', (($tmp = $_smarty_tpl->getValue('ab__is_object_name') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('category_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),$_smarty_tpl->getValue('category')['category']) ?? null : $tmp), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'feature_variant') {?>
            <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('feature_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),(($tmp = $_smarty_tpl->getValue('variant_data')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('brand_feature')['variant'] ?? null : $tmp)), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'variant_image') {?>
            <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_product_option_variant_text')($_smarty_tpl->getValue('product'),$_smarty_tpl->getValue('image_object_type')['object_id']),1), false, NULL);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->assign('title', $_smarty_tpl->getValue('image_additional_attrs')['title'], false, NULL);?>
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('title')) || $_smarty_tpl->getValue('addons')['ab__images_seo']['override'] == 'always_generate') {?>
        <?php if ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'product') {?>
            <?php $_smarty_tpl->assign('num', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_count')('title',$_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('num') > 0) {?>
                <?php $_smarty_tpl->assign('text', $_smarty_tpl->getValue('product')['product'], false, NULL);?>
                <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'feature');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach18DoElse = false;
?>
                        <?php $_smarty_tpl->assign('text', ((string)$_smarty_tpl->getValue('text')).", ".((string)$_smarty_tpl->getValue('feature')['description']).": ".((string)$_smarty_tpl->getValue('feature')['variant']), false, NULL);?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>

                <?php $_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('text'),$_smarty_tpl->getValue('num')), false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'category') {?>
            <?php $_smarty_tpl->assign('title', (($tmp = $_smarty_tpl->getValue('ab__is_object_name') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('category_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('category')['category']) ?? null : $tmp), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'feature_variant') {?>
            <?php $_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('feature_obj_type'),$_smarty_tpl->getValue('title_attr_type'),(($tmp = $_smarty_tpl->getValue('variant_data')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('brand_feature')['variant'] ?? null : $tmp)), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'variant_image') {?>
            <?php $_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_product_option_variant_text')($_smarty_tpl->getValue('product'),$_smarty_tpl->getValue('image_object_type')['object_id']),1), false, NULL);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->assign('detailed_title', $_smarty_tpl->getValue('image_link_additional_attrs')['title'], false, NULL);?>
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('detailed_title')) || $_smarty_tpl->getValue('addons')['ab__images_seo']['override'] == 'always_generate') {?>
        <?php if ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'product') {?>
            <?php $_smarty_tpl->assign('num', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_count')('title',$_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('num') > 0) {?>
                <?php $_smarty_tpl->assign('text', $_smarty_tpl->getValue('product')['product'], false, NULL);?>
                <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'feature');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach19DoElse = false;
?>
                        <?php $_smarty_tpl->assign('text', ((string)$_smarty_tpl->getValue('text')).", ".((string)$_smarty_tpl->getValue('feature')['description']).": ".((string)$_smarty_tpl->getValue('feature')['variant']), false, NULL);?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>

                <?php $_smarty_tpl->assign('detailed_title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('text'),$_smarty_tpl->getValue('num')), false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'category') {?>
            <?php $_smarty_tpl->assign('detailed_title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('category_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('category')['category']), false, NULL);?>
        <?php }?>
    <?php }?>

    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['alt'] = $_smarty_tpl->getValue('alt');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_smarty_tpl->getValue('title');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_link_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_smarty_tpl->getValue('detailed_title');
$_smarty_tpl->assign('image_link_additional_attrs', $_tmp_array, false, 2);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__images_seo/hooks/common/image.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__images_seo/hooks/common/image.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('product_obj_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::PRODUCT"), false, NULL);
$_smarty_tpl->assign('category_obj_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::CATEGORY"), false, NULL);
$_smarty_tpl->assign('feature_obj_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::FEATURE"), false, NULL);?>

<?php $_smarty_tpl->assign('alt_attr_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::ALT"), false, NULL);
$_smarty_tpl->assign('title_attr_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::TITLE"), false, NULL);
$_smarty_tpl->assign('image_number_attr_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::IMAGE_NUMBER"), false, NULL);?>

<?php $_smarty_tpl->assign('image_object_type', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_object_type')($_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('image_object_type')) {?>
    <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getValue('image_additional_attrs')['alt'], false, NULL);?>
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('alt')) || $_smarty_tpl->getValue('addons')['ab__images_seo']['override'] == 'always_generate') {?>
        <?php if ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'product') {?>
            <?php $_smarty_tpl->assign('num', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_count')('alt',$_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('num') > 0) {?>
                <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),$_smarty_tpl->getValue('product')['product'],$_smarty_tpl->getValue('num'),$_smarty_tpl->getValue('product')['variation_features']), false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'category') {?>
            <?php $_smarty_tpl->assign('alt', (($tmp = $_smarty_tpl->getValue('ab__is_object_name') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('category_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),$_smarty_tpl->getValue('category')['category']) ?? null : $tmp), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'feature_variant') {?>
            <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('feature_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),(($tmp = $_smarty_tpl->getValue('variant_data')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('brand_feature')['variant'] ?? null : $tmp)), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'variant_image') {?>
            <?php $_smarty_tpl->assign('alt', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('alt_attr_type'),$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_product_option_variant_text')($_smarty_tpl->getValue('product'),$_smarty_tpl->getValue('image_object_type')['object_id']),1), false, NULL);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->assign('title', $_smarty_tpl->getValue('image_additional_attrs')['title'], false, NULL);?>
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('title')) || $_smarty_tpl->getValue('addons')['ab__images_seo']['override'] == 'always_generate') {?>
        <?php if ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'product') {?>
            <?php $_smarty_tpl->assign('num', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_count')('title',$_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('num') > 0) {?>
                <?php $_smarty_tpl->assign('text', $_smarty_tpl->getValue('product')['product'], false, NULL);?>
                <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'feature');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach20DoElse = false;
?>
                        <?php $_smarty_tpl->assign('text', ((string)$_smarty_tpl->getValue('text')).", ".((string)$_smarty_tpl->getValue('feature')['description']).": ".((string)$_smarty_tpl->getValue('feature')['variant']), false, NULL);?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>

                <?php $_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('text'),$_smarty_tpl->getValue('num')), false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'category') {?>
            <?php $_smarty_tpl->assign('title', (($tmp = $_smarty_tpl->getValue('ab__is_object_name') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('category_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('category')['category']) ?? null : $tmp), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'feature_variant') {?>
            <?php $_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('feature_obj_type'),$_smarty_tpl->getValue('title_attr_type'),(($tmp = $_smarty_tpl->getValue('variant_data')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('brand_feature')['variant'] ?? null : $tmp)), false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'variant_image') {?>
            <?php $_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_product_option_variant_text')($_smarty_tpl->getValue('product'),$_smarty_tpl->getValue('image_object_type')['object_id']),1), false, NULL);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->assign('detailed_title', $_smarty_tpl->getValue('image_link_additional_attrs')['title'], false, NULL);?>
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('detailed_title')) || $_smarty_tpl->getValue('addons')['ab__images_seo']['override'] == 'always_generate') {?>
        <?php if ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'product') {?>
            <?php $_smarty_tpl->assign('num', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_get_image_count')('title',$_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('images')['pair_id']), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('num') > 0) {?>
                <?php $_smarty_tpl->assign('text', $_smarty_tpl->getValue('product')['product'], false, NULL);?>
                <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'feature');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach21DoElse = false;
?>
                        <?php $_smarty_tpl->assign('text', ((string)$_smarty_tpl->getValue('text')).", ".((string)$_smarty_tpl->getValue('feature')['description']).": ".((string)$_smarty_tpl->getValue('feature')['variant']), false, NULL);?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>

                <?php $_smarty_tpl->assign('detailed_title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('product_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('text'),$_smarty_tpl->getValue('num')), false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('image_object_type')['object_type'] == 'category') {?>
            <?php $_smarty_tpl->assign('detailed_title', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__is_generate_text')($_smarty_tpl->getValue('category_obj_type'),$_smarty_tpl->getValue('title_attr_type'),$_smarty_tpl->getValue('category')['category']), false, NULL);?>
        <?php }?>
    <?php }?>

    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['alt'] = $_smarty_tpl->getValue('alt');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_smarty_tpl->getValue('title');
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_link_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_smarty_tpl->getValue('detailed_title');
$_smarty_tpl->assign('image_link_additional_attrs', $_tmp_array, false, 2);
}
}
}
}
