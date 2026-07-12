<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/video_popups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c4476b8_39983304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159ffbc4b8f17e6b1b2c4511f418fd0fccc1e568' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/video_popups.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/thumbnail.tpl' => 2,
  ),
),false)) {
function content_6834571c4476b8_39983304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__vg_videos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('autoplay', $_smarty_tpl->tpl_vars['video']->value['autoplay'] === smarty_modifier_enum("YesNo::YES"));?>
    <?php $_smarty_tpl->_assignInScope('video_url', fn_ab__vg_get_video_embed_url($_smarty_tpl->tpl_vars['video']->value));?>
    <?php $_smarty_tpl->_assignInScope('video_params', json_encode(array('url'=>$_smarty_tpl->tpl_vars['video_url']->value,'type'=>$_smarty_tpl->tpl_vars['video']->value['type'],'path'=>$_smarty_tpl->tpl_vars['video']->value['video_path'],'autoplay'=>$_smarty_tpl->tpl_vars['autoplay']->value)));?>

    <div id="ab__vg_video_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_video_popup cm-popup-box hidden" data-ca-keep-in-place="true" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
        <div id="ab__vg_iframe_video_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['unique_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading ab__vg_video_player"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes'];
} else { ?> data-frameborder="0"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['controls'] === smarty_modifier_enum("YesNo::YES")) {?> data-allowfullscreen="1"<?php }
}?> data-ab-vg-video-params="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_params']->value, ENT_QUOTES, 'UTF-8');?>
" data-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_url']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value), 0, true);
?>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/video_popups.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/components/video_popups.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__vg_videos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('autoplay', $_smarty_tpl->tpl_vars['video']->value['autoplay'] === smarty_modifier_enum("YesNo::YES"));?>
    <?php $_smarty_tpl->_assignInScope('video_url', fn_ab__vg_get_video_embed_url($_smarty_tpl->tpl_vars['video']->value));?>
    <?php $_smarty_tpl->_assignInScope('video_params', json_encode(array('url'=>$_smarty_tpl->tpl_vars['video_url']->value,'type'=>$_smarty_tpl->tpl_vars['video']->value['type'],'path'=>$_smarty_tpl->tpl_vars['video']->value['video_path'],'autoplay'=>$_smarty_tpl->tpl_vars['autoplay']->value)));?>

    <div id="ab__vg_video_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_video_popup cm-popup-box hidden" data-ca-keep-in-place="true" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
        <div id="ab__vg_iframe_video_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['unique_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading ab__vg_video_player"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes'];
} else { ?> data-frameborder="0"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['controls'] === smarty_modifier_enum("YesNo::YES")) {?> data-allowfullscreen="1"<?php }
}?> data-ab-vg-video-params="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_params']->value, ENT_QUOTES, 'UTF-8');?>
" data-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_url']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value), 0, true);
?>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
