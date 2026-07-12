<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:09
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba29b65759_60290069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3605654392030155400927858189da326937f864' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/list_video.tpl' => 2,
  ),
),false)) {
function content_6835ba29b65759_60290069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id'],array('autoplay'=>smarty_modifier_enum('YesNo::YES'),'show_in_list'=>smarty_modifier_enum('YesNo::YES'),'limit'=>1)));?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <div class="ab__vg-product_list-wrapper">
        <div class="ab__vg-product_list-image">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'class'=>"img-ab-hover-gallery"), 0, false);
?>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/list_video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>reset($_smarty_tpl->tpl_vars['ab__vg_videos']->value)), 0, false);
?>

        <?php if (!$_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['main_pair'] = array(true);
$_smarty_tpl->_assignInScope('product', $_tmp_array ,false ,2);?>
        <?php } else { ?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['product']->value['image_pairs'])) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = array();
$_smarty_tpl->_assignInScope('product', $_tmp_array);?>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('_junk', array_unshift($_smarty_tpl->tpl_vars['product']->value['image_pairs'],$_smarty_tpl->tpl_vars['product']->value['main_pair']));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = $_smarty_tpl->tpl_vars['product']->value['image_pairs'];
$_smarty_tpl->_assignInScope('product', $_tmp_array ,false ,2);?>
        <?php }?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/product_icon/main_icon.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id'],array('autoplay'=>smarty_modifier_enum('YesNo::YES'),'show_in_list'=>smarty_modifier_enum('YesNo::YES'),'limit'=>1)));?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <div class="ab__vg-product_list-wrapper">
        <div class="ab__vg-product_list-image">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'class'=>"img-ab-hover-gallery"), 0, true);
?>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/list_video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>reset($_smarty_tpl->tpl_vars['ab__vg_videos']->value)), 0, true);
?>

        <?php if (!$_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['main_pair'] = array(true);
$_smarty_tpl->_assignInScope('product', $_tmp_array ,false ,2);?>
        <?php } else { ?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['product']->value['image_pairs'])) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = array();
$_smarty_tpl->_assignInScope('product', $_tmp_array);?>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('_junk', array_unshift($_smarty_tpl->tpl_vars['product']->value['image_pairs'],$_smarty_tpl->tpl_vars['product']->value['main_pair']));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['image_pairs'] = $_smarty_tpl->tpl_vars['product']->value['image_pairs'];
$_smarty_tpl->_assignInScope('product', $_tmp_array ,false ,2);?>
        <?php }?>
    </div>
<?php }
}
}
}
