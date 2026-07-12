<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__video_gallery/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa985e2f3_71924301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed605a746a44ff26d894cce1a03431f2a7d9a433' => 
    array (
      0 => 'addons/ab__video_gallery/hooks/index/scripts.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa985e2f3_71924301 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.ab__video_gallery = {
            settings: {
                on_thumbnail_click: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['on_thumbnail_click']), ENT_QUOTES, 'UTF-8');?>
',
                controls: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['controls']), ENT_QUOTES, 'UTF-8');?>
',
                loop: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['repeat']), ENT_QUOTES, 'UTF-8');?>
',
            },
            players: { },
            youtube_api_loaded: 0,
            vimeo_api_loaded: 0
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/func.js"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        _.ab__video_gallery = {
            settings: {
                on_thumbnail_click: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['on_thumbnail_click']), ENT_QUOTES, 'UTF-8');?>
',
                controls: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['controls']), ENT_QUOTES, 'UTF-8');?>
',
                loop: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['repeat']), ENT_QUOTES, 'UTF-8');?>
',
            },
            players: { },
            youtube_api_loaded: 0,
            vimeo_api_loaded: 0
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/func.js"), $_smarty_tpl);
}
}
}
