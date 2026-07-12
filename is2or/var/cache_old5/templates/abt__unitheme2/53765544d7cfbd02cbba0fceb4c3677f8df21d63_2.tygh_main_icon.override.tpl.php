<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:58
  from 'tygh:addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6eb89928_92537523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53765544d7cfbd02cbba0fceb4c3677f8df21d63' => 
    array (
      0 => 'addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/list_video.tpl' => 2,
  ),
))) {
function content_6a133f6eb89928_92537523 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/product_icon';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product')['product_id'],array('autoplay'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'),'show_in_list'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'),'limit'=>1)), false, NULL);?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos')) {?>
    <div class="ab__vg-product_list-wrapper">
        <div class="ab__vg-product_list-image">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/list_video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('ab__vg_videos'))), (int) 0, $_smarty_current_dir);
?>

        <?php if (!$_smarty_tpl->getValue('product')['main_pair']) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['main_pair'] = array(true);
$_smarty_tpl->assign('product', $_tmp_array, false, 2);?>
        <?php } else { ?>
            <?php if (!is_array($_smarty_tpl->getValue('product')['image_pairs'])) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = array();
$_smarty_tpl->assign('product', $_tmp_array, false, NULL);?>
            <?php }?>

            <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_array_unshift')($_smarty_tpl->getValue('product')['image_pairs'],$_smarty_tpl->getValue('product')['main_pair']);
$_smarty_tpl->assign('product', $_tmp_array, false, 2);?>
        <?php }?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product')['product_id'],array('autoplay'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'),'show_in_list'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'),'limit'=>1)), false, NULL);?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos')) {?>
    <div class="ab__vg-product_list-wrapper">
        <div class="ab__vg-product_list-image">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('obj_id_prefix'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'class'=>"img-ab-hover-gallery"), (int) 0, $_smarty_current_dir);
?>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/list_video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('ab__vg_videos'))), (int) 0, $_smarty_current_dir);
?>

        <?php if (!$_smarty_tpl->getValue('product')['main_pair']) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['main_pair'] = array(true);
$_smarty_tpl->assign('product', $_tmp_array, false, 2);?>
        <?php } else { ?>
            <?php if (!is_array($_smarty_tpl->getValue('product')['image_pairs'])) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = array();
$_smarty_tpl->assign('product', $_tmp_array, false, NULL);?>
            <?php }?>

            <?php $_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_array_unshift')($_smarty_tpl->getValue('product')['image_pairs'],$_smarty_tpl->getValue('product')['main_pair']);
$_smarty_tpl->assign('product', $_tmp_array, false, 2);?>
        <?php }?>
    </div>
<?php }
}
}
}
