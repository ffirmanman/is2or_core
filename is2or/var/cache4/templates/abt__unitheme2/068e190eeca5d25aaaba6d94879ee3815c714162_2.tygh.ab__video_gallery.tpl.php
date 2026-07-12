<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571d5e71b8_35620597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068e190eeca5d25aaaba6d94879ee3815c714162' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/thumbnail.tpl' => 2,
  ),
),false)) {
function content_6834571d5e71b8_35620597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('tmb_width', 360);
$_smarty_tpl->_assignInScope('tmb_height', 240);?>

<?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product_id']->value,array('autoplay'=>smarty_modifier_enum('YesNo::NO'))));?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
<div class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__vg_videos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
            <div class="ab__vg-video">
                <a href="javascript:void(0)" class="cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb ab-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['tmb_width']->value,'height'=>$_smarty_tpl->tpl_vars['tmb_height']->value), 0, true);
?>
                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['video']->value['description'];?>
</div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('tmb_width', 360);
$_smarty_tpl->_assignInScope('tmb_height', 240);?>

<?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product_id']->value,array('autoplay'=>smarty_modifier_enum('YesNo::NO'))));?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
<div class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__vg_videos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
            <div class="ab__vg-video">
                <a href="javascript:void(0)" class="cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb ab-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['tmb_width']->value,'height'=>$_smarty_tpl->tpl_vars['tmb_height']->value), 0, true);
?>
                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['video']->value['description'];?>
</div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
}
}
