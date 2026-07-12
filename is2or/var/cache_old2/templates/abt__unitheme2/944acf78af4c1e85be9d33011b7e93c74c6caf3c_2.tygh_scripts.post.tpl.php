<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__image_previewers/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa98c4e14_25844052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '944acf78af4c1e85be9d33011b7e93c74c6caf3c' => 
    array (
      0 => 'addons/ab__image_previewers/hooks/index/scripts.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa98c4e14_25844052 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        ab__ip_ps_settings: {
            display_zoom: <?php if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_zoom'] == "Y") {?> true <?php } else { ?> false <?php }?>,
            display_fullscreen: <?php if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_fullscreen'] == "Y") {?> true <?php } else { ?> false <?php }?>,
            close_with_gesture: <?php if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_close_with_gesture'] == "Y") {?> true <?php } else { ?> false <?php }?>
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__image_previewers/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        ab__ip_ps_settings: {
            display_zoom: <?php if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_zoom'] == "Y") {?> true <?php } else { ?> false <?php }?>,
            display_fullscreen: <?php if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_fullscreen'] == "Y") {?> true <?php } else { ?> false <?php }?>,
            close_with_gesture: <?php if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_close_with_gesture'] == "Y") {?> true <?php } else { ?> false <?php }?>
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php }
}
}
