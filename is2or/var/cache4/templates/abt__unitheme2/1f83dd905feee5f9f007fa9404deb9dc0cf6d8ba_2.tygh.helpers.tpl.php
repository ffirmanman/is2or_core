<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:15
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571bc73156_67948494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f83dd905feee5f9f007fa9404deb9dc0cf6d8ba' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/helpers.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/video.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/videos.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/product_thumbnail.tpl' => 2,
  ),
),false)) {
function content_6834571bc73156_67948494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'fn_ab__vg_get_videos_by_pos' => 
  array (
    'compiled_filepath' => '/srv/projects/is2or.com/public_html/var/cache/templates/abt__unitheme2/1f83dd905feee5f9f007fa9404deb9dc0cf6d8ba_2.tygh.helpers.tpl.php',
    'uid' => '1f83dd905feee5f9f007fa9404deb9dc0cf6d8ba',
    'call_name' => 'smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188',
  ),
  'fn_ab__vg_get_videos_thumbs_by_pos' => 
  array (
    'compiled_filepath' => '/srv/projects/is2or.com/public_html/var/cache/templates/abt__unitheme2/1f83dd905feee5f9f007fa9404deb9dc0cf6d8ba_2.tygh.helpers.tpl.php',
    'uid' => '1f83dd905feee5f9f007fa9404deb9dc0cf6d8ba',
    'call_name' => 'smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/helpers.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/components/helpers.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>

<?php }
}
/* smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188')) {
function smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('videos'=>(($tmp = $_smarty_tpl->tpl_vars['videos']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM"),'image_iterator'=>(($tmp = $_smarty_tpl->tpl_vars['image_iterator']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'total_images'=>(($tmp = $_smarty_tpl->tpl_vars['total_images']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->_assignInScope('videos_by_pos', fn_ab__vg_get_videos_by_position($_smarty_tpl->tpl_vars['videos']->value,$_smarty_tpl->tpl_vars['position']->value,$_smarty_tpl->tpl_vars['image_iterator']->value,$_smarty_tpl->tpl_vars['total_images']->value));?>
    <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['videos']->value ,false ,2);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos_by_pos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/videos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__vg_videos'=>fn_ab__vg_get_videos_by_position($_smarty_tpl->tpl_vars['videos']->value,$_smarty_tpl->tpl_vars['position']->value,$_smarty_tpl->tpl_vars['image_iterator']->value,$_smarty_tpl->tpl_vars['total_images']->value)), 0, false);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188 */
/* smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188')) {
function smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('videos'=>(($tmp = $_smarty_tpl->tpl_vars['videos']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM"),'image_iterator'=>(($tmp = $_smarty_tpl->tpl_vars['image_iterator']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'total_images'=>(($tmp = $_smarty_tpl->tpl_vars['total_images']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'video_iterator'=>(($tmp = $_smarty_tpl->tpl_vars['video_iterator']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->_assignInScope('videos_by_pos', fn_ab__vg_get_videos_by_position($_smarty_tpl->tpl_vars['videos']->value,$_smarty_tpl->tpl_vars['position']->value,$_smarty_tpl->tpl_vars['image_iterator']->value,$_smarty_tpl->tpl_vars['total_images']->value));?>
    <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['videos']->value ,false ,2);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos_by_pos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('video_iterator', $_smarty_tpl->tpl_vars['video_iterator']->value+1 ,false ,2);?>
        <?php $_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1 ,false ,2);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'thumbnail_type'=>"video"), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188 */
/* smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188')) {
function smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('videos'=>(($tmp = $_smarty_tpl->tpl_vars['videos']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM"),'image_iterator'=>(($tmp = $_smarty_tpl->tpl_vars['image_iterator']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'total_images'=>(($tmp = $_smarty_tpl->tpl_vars['total_images']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->_assignInScope('videos_by_pos', fn_ab__vg_get_videos_by_position($_smarty_tpl->tpl_vars['videos']->value,$_smarty_tpl->tpl_vars['position']->value,$_smarty_tpl->tpl_vars['image_iterator']->value,$_smarty_tpl->tpl_vars['total_images']->value));?>
    <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['videos']->value ,false ,2);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos_by_pos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/videos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__vg_videos'=>fn_ab__vg_get_videos_by_position($_smarty_tpl->tpl_vars['videos']->value,$_smarty_tpl->tpl_vars['position']->value,$_smarty_tpl->tpl_vars['image_iterator']->value,$_smarty_tpl->tpl_vars['total_images']->value)), 0, true);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_by_pos_20570244936834571bc65613_56337188 */
/* smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188')) {
function smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('videos'=>(($tmp = $_smarty_tpl->tpl_vars['videos']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM"),'image_iterator'=>(($tmp = $_smarty_tpl->tpl_vars['image_iterator']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'total_images'=>(($tmp = $_smarty_tpl->tpl_vars['total_images']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'video_iterator'=>(($tmp = $_smarty_tpl->tpl_vars['video_iterator']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->_assignInScope('videos_by_pos', fn_ab__vg_get_videos_by_position($_smarty_tpl->tpl_vars['videos']->value,$_smarty_tpl->tpl_vars['position']->value,$_smarty_tpl->tpl_vars['image_iterator']->value,$_smarty_tpl->tpl_vars['total_images']->value));?>
    <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['videos']->value ,false ,2);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos_by_pos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('video_iterator', $_smarty_tpl->tpl_vars['video_iterator']->value+1 ,false ,2);?>
        <?php $_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1 ,false ,2);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'thumbnail_type'=>"video"), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_20570244936834571bc65613_56337188 */
}
