<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:20:54
  from 'tygh:addons/ab__video_gallery/components/thumbnail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4e460f5742_83173923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8fb5dfa3060e7860407a8ddd10cd25bade380ea' => 
    array (
      0 => 'addons/ab__video_gallery/components/thumbnail.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
  ),
))) {
function content_69fb4e460f5742_83173923 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('class', "ab-vg-video-image", false, NULL);
$_smarty_tpl->assign('ab__vg_unique', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
$_smarty_tpl->assign('ab__vg_obj_id', ((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('ab__vg_unique')), false, NULL);?>

<?php if ($_smarty_tpl->getValue('video')['icon_type'] == "icon") {?>
    <?php if ($_smarty_tpl->getValue('video')['icon']) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('video')['icon'],'image_width'=>$_smarty_tpl->getValue('width'),'image_height'=>$_smarty_tpl->getValue('height'),'show_detailed_link'=>false,'obj_id'=>$_smarty_tpl->getValue('ab__vg_obj_id')), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <img src="" alt="ab_vg_placeholder" width="0" height="0" style="display: none;">
    <?php }
} elseif ($_smarty_tpl->getValue('video')['icon_type'] == "snapshot") {?>
    <?php $_smarty_tpl->assign('image', array("image_path"=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_video_icon')($_smarty_tpl->getValue('video')),"image_x"=>(($tmp = $_smarty_tpl->getValue('width') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),"image_y"=>(($tmp = $_smarty_tpl->getValue('height') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),"alt"=>preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('video')['title']),"relative_path"=>'',"absolute_path"=>''), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('image')['image_x'],'image_height'=>$_smarty_tpl->getValue('image')['image_y'],'show_detailed_link'=>false,'obj_id'=>$_smarty_tpl->getValue('ab__vg_obj_id')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/thumbnail.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/components/thumbnail.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('class', "ab-vg-video-image", false, NULL);
$_smarty_tpl->assign('ab__vg_unique', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
$_smarty_tpl->assign('ab__vg_obj_id', ((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('ab__vg_unique')), false, NULL);?>

<?php if ($_smarty_tpl->getValue('video')['icon_type'] == "icon") {?>
    <?php if ($_smarty_tpl->getValue('video')['icon']) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('video')['icon'],'image_width'=>$_smarty_tpl->getValue('width'),'image_height'=>$_smarty_tpl->getValue('height'),'show_detailed_link'=>false,'obj_id'=>$_smarty_tpl->getValue('ab__vg_obj_id')), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <img src="" alt="ab_vg_placeholder" width="0" height="0" style="display: none;">
    <?php }
} elseif ($_smarty_tpl->getValue('video')['icon_type'] == "snapshot") {?>
    <?php $_smarty_tpl->assign('image', array("image_path"=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_video_icon')($_smarty_tpl->getValue('video')),"image_x"=>(($tmp = $_smarty_tpl->getValue('width') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),"image_y"=>(($tmp = $_smarty_tpl->getValue('height') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),"alt"=>preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('video')['title']),"relative_path"=>'',"absolute_path"=>''), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('image')['image_x'],'image_height'=>$_smarty_tpl->getValue('image')['image_y'],'show_detailed_link'=>false,'obj_id'=>$_smarty_tpl->getValue('ab__vg_obj_id')), (int) 0, $_smarty_current_dir);
}
}
}
}
