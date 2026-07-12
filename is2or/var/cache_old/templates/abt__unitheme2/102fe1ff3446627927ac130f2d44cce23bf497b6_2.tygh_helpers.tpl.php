<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:01
  from 'tygh:addons/ab__video_gallery/components/helpers.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ed51ae68_65351054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102fe1ff3446627927ac130f2d44cce23bf497b6' => 
    array (
      0 => 'addons/ab__video_gallery/components/helpers.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/video.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/product_thumbnail.tpl' => 4,
    'tygh:components/video/video_previewer.tpl' => 2,
  ),
))) {
function content_69ada1ed51ae68_65351054 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'fn_ab__vg_get_videos_by_pos' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/abt__unitheme2/102fe1ff3446627927ac130f2d44cce23bf497b6_2.tygh_helpers.tpl.php',
    'uid' => '102fe1ff3446627927ac130f2d44cce23bf497b6',
    'call_name' => 'smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689',
  ),
  'fn_ab__vg_get_videos_thumbs_by_pos' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/abt__unitheme2/102fe1ff3446627927ac130f2d44cce23bf497b6_2.tygh_helpers.tpl.php',
    'uid' => '102fe1ff3446627927ac130f2d44cce23bf497b6',
    'call_name' => 'smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689',
  ),
  'fn_ab__vg_get_core_videos' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/abt__unitheme2/102fe1ff3446627927ac130f2d44cce23bf497b6_2.tygh_helpers.tpl.php',
    'uid' => '102fe1ff3446627927ac130f2d44cce23bf497b6',
    'call_name' => 'smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689',
  ),
  'fn_ab__vg_get_core_videos_thumbs' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/abt__unitheme2/102fe1ff3446627927ac130f2d44cce23bf497b6_2.tygh_helpers.tpl.php',
    'uid' => '102fe1ff3446627927ac130f2d44cce23bf497b6',
    'call_name' => 'smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689',
  ),
  'fn_ab__vg_get_video_icon' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/abt__unitheme2/102fe1ff3446627927ac130f2d44cce23bf497b6_2.tygh_helpers.tpl.php',
    'uid' => '102fe1ff3446627927ac130f2d44cce23bf497b6',
    'call_name' => 'smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689',
  ),
));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>







<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/helpers.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/components/helpers.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>







<?php }
}
/* smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_videos_by_pos",'position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php $_smarty_tpl->assign('total_images', (($tmp = $_smarty_tpl->getValue('total_images') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator'), false, NULL);?>

    <?php $_smarty_tpl->assign('videos', (($tmp = $_smarty_tpl->getValue('videos') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_videos')() ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos_by_position')($_smarty_tpl->getValue('videos'),$_smarty_tpl->getValue('position'),$_smarty_tpl->getValue('image_iterator'),$_smarty_tpl->getValue('total_images')), false, NULL);?>

    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_set_template_videos')($_smarty_tpl->getValue('_videos')[1])), ENT_QUOTES, 'UTF-8');?>


    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_videos')[0], 'video');
$foreach32DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach32DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('video_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video')), (int) 0, $_smarty_current_dir);
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_videos_thumbs_by_pos",'position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php $_smarty_tpl->assign('total_images', (($tmp = $_smarty_tpl->getValue('total_images') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator'), false, NULL);?>

    <?php $_smarty_tpl->assign('videos', (($tmp = $_smarty_tpl->getValue('videos') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_videos')() ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos_by_position')($_smarty_tpl->getValue('videos'),$_smarty_tpl->getValue('position'),$_smarty_tpl->getValue('image_iterator'),$_smarty_tpl->getValue('total_images')), false, NULL);?>

    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_set_template_videos')($_smarty_tpl->getValue('_videos')[1])), ENT_QUOTES, 'UTF-8');?>


    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_videos')[0], 'video');
$foreach33DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach33DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('video_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'thumbnail_type'=>"video"), (int) 0, $_smarty_current_dir);
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_core_videos"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php $_smarty_tpl->assign('total_images', (($tmp = $_smarty_tpl->getValue('total_images') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('core_videos', (($tmp = $_smarty_tpl->getValue('core_videos') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('core_videos'), 'video');
$foreach34DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach34DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:components/video/video_previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'obj_id'=>((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id']),'preview_id'=>$_smarty_tpl->getValue('preview_id'),'link_class'=>$_smarty_tpl->getValue('_link_class')), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM"),'total_images'=>$_smarty_tpl->getValue('total_images')), true);?>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_core_videos_thumbs",'core_videos'=>(($tmp = $_smarty_tpl->getValue('core_videos') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('core_videos'), 'video');
$foreach35DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach35DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('video')['preview'],'thumbnail_type'=>"core_video",'obj_id'=>((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_mini"), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_video_icon"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
$_smarty_tpl->assign('video', (($tmp = $_smarty_tpl->getValue('video') ?? null)===null||$tmp==='' ? array('type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_videoGallery\VideoTypes::RESOURCE'),'icon_type'=>'icon','icon'=>array()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('allowed_icon_types', array(), false, NULL);
if ($_smarty_tpl->getValue('video')['icon']) {
$_smarty_tpl->assign('allowed_icon_types', array('icon'), false, NULL);
}
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('video')['type'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_videoGallery\VideoTypes::YOUTUBE'),$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_videoGallery\VideoTypes::VIMEO')))) {
$_smarty_tpl->assign('allowed_icon_types', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_array_unshift')($_smarty_tpl->getValue('allowed_icon_types'),'snapshot'), false, NULL);
}
if ($_smarty_tpl->getValue('autoplay')) {
$_tmp_array = $_smarty_tpl->getValue('allowed_icon_types') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'none';
$_smarty_tpl->assign('allowed_icon_types', $_tmp_array, false, NULL);
}
if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('video')['icon_type'],$_smarty_tpl->getValue('allowed_icon_types'))) {
if ($_smarty_tpl->getValue('allowed_icon_types')) {
$_tmp_array = $_smarty_tpl->getValue('video') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['icon_type'] = $_smarty_tpl->getValue('allowed_icon_types')[0];
$_smarty_tpl->assign('video', $_tmp_array, false, NULL);
} else {
$_tmp_array = $_smarty_tpl->getValue('video') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['icon_type'] = 'icon';
$_smarty_tpl->assign('video', $_tmp_array, false, NULL);
}
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['icon_type']), ENT_QUOTES, 'UTF-8');
}}
/*/ smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_videos_by_pos",'position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php $_smarty_tpl->assign('total_images', (($tmp = $_smarty_tpl->getValue('total_images') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator'), false, NULL);?>

    <?php $_smarty_tpl->assign('videos', (($tmp = $_smarty_tpl->getValue('videos') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_videos')() ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos_by_position')($_smarty_tpl->getValue('videos'),$_smarty_tpl->getValue('position'),$_smarty_tpl->getValue('image_iterator'),$_smarty_tpl->getValue('total_images')), false, NULL);?>

    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_set_template_videos')($_smarty_tpl->getValue('_videos')[1])), ENT_QUOTES, 'UTF-8');?>


    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_videos')[0], 'video');
$foreach36DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach36DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('video_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video')), (int) 0, $_smarty_current_dir);
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_by_pos_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_videos_thumbs_by_pos",'position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php $_smarty_tpl->assign('total_images', (($tmp = $_smarty_tpl->getValue('total_images') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator'), false, NULL);?>

    <?php $_smarty_tpl->assign('videos', (($tmp = $_smarty_tpl->getValue('videos') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_videos')() ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos_by_position')($_smarty_tpl->getValue('videos'),$_smarty_tpl->getValue('position'),$_smarty_tpl->getValue('image_iterator'),$_smarty_tpl->getValue('total_images')), false, NULL);?>

    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_set_template_videos')($_smarty_tpl->getValue('_videos')[1])), ENT_QUOTES, 'UTF-8');?>


    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_videos')[0], 'video');
$foreach37DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach37DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('video_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'thumbnail_type'=>"video"), (int) 0, $_smarty_current_dir);
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_videos_thumbs_by_pos_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_core_videos"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php $_smarty_tpl->assign('total_images', (($tmp = $_smarty_tpl->getValue('total_images') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('core_videos', (($tmp = $_smarty_tpl->getValue('core_videos') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('core_videos'), 'video');
$foreach38DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach38DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:components/video/video_previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'obj_id'=>((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id']),'preview_id'=>$_smarty_tpl->getValue('preview_id'),'link_class'=>$_smarty_tpl->getValue('_link_class')), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM"),'total_images'=>$_smarty_tpl->getValue('total_images')), true);?>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_core_videos_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_core_videos_thumbs",'core_videos'=>(($tmp = $_smarty_tpl->getValue('core_videos') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('core_videos'), 'video');
$foreach39DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach39DoElse = false;
?>
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_counter')), ENT_QUOTES, 'UTF-8');?>

        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_increase_template_iterator')('image_iterator')), ENT_QUOTES, 'UTF-8');?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('video')['preview'],'thumbnail_type'=>"core_video",'obj_id'=>((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_mini"), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_fn_ab__vg_get_core_videos_thumbs_214058611969ada1ed4a1ab1_53565689 */
/* smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689 */
if (!function_exists('smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689')) {
function smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
$params = array_merge(array('name'=>"fn_ab__vg_get_video_icon"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
$_smarty_tpl->assign('video', (($tmp = $_smarty_tpl->getValue('video') ?? null)===null||$tmp==='' ? array('type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_videoGallery\VideoTypes::RESOURCE'),'icon_type'=>'icon','icon'=>array()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('allowed_icon_types', array(), false, NULL);
if ($_smarty_tpl->getValue('video')['icon']) {
$_smarty_tpl->assign('allowed_icon_types', array('icon'), false, NULL);
}
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('video')['type'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_videoGallery\VideoTypes::YOUTUBE'),$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_videoGallery\VideoTypes::VIMEO')))) {
$_smarty_tpl->assign('allowed_icon_types', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_array_unshift')($_smarty_tpl->getValue('allowed_icon_types'),'snapshot'), false, NULL);
}
if ($_smarty_tpl->getValue('autoplay')) {
$_tmp_array = $_smarty_tpl->getValue('allowed_icon_types') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'none';
$_smarty_tpl->assign('allowed_icon_types', $_tmp_array, false, NULL);
}
if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('video')['icon_type'],$_smarty_tpl->getValue('allowed_icon_types'))) {
if ($_smarty_tpl->getValue('allowed_icon_types')) {
$_tmp_array = $_smarty_tpl->getValue('video') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['icon_type'] = $_smarty_tpl->getValue('allowed_icon_types')[0];
$_smarty_tpl->assign('video', $_tmp_array, false, NULL);
} else {
$_tmp_array = $_smarty_tpl->getValue('video') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['icon_type'] = 'icon';
$_smarty_tpl->assign('video', $_tmp_array, false, NULL);
}
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['icon_type']), ENT_QUOTES, 'UTF-8');
}}
/*/ smarty_template_function_fn_ab__vg_get_video_icon_214058611969ada1ed4a1ab1_53565689 */
}
