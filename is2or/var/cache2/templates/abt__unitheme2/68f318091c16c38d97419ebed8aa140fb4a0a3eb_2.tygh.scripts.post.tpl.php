<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:49:00
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21c0b6271_56555245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f318091c16c38d97419ebed8aa140fb4a0a3eb' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/hooks/index/scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21c0b6271_56555245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.ab__video_gallery = {
            settings: {
                on_thumbnail_click: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click'], ENT_QUOTES, 'UTF-8');?>
',
                controls: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['controls'], ENT_QUOTES, 'UTF-8');?>
',
                loop: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['repeat'], ENT_QUOTES, 'UTF-8');?>
',
            },
            players: { },
            youtube_api_loaded: 0,
            vimeo_api_loaded: 0
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/func.js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        _.ab__video_gallery = {
            settings: {
                on_thumbnail_click: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click'], ENT_QUOTES, 'UTF-8');?>
',
                controls: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['controls'], ENT_QUOTES, 'UTF-8');?>
',
                loop: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['repeat'], ENT_QUOTES, 'UTF-8');?>
',
            },
            players: { },
            youtube_api_loaded: 0,
            vimeo_api_loaded: 0
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/func.js"),$_smarty_tpl);
}
}
}
