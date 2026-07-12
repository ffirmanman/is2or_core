<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:36
  from 'tygh:addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fca88b68_04715519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852e7b84150b2687b6079a0d81854b370ae2ee4d' => 
    array (
      0 => 'addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fca88b68_04715519 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/addons/hidpi/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_COOKIE['ab__p_dpr']) {?>
    <?php echo '<script'; ?>
>
        (function (_, $) {
            $(_.doc).ready(function () {
                let pr = 1;
                if ('devicePixelRatio' in window) {
                     pr = window.devicePixelRatio;
                }
                $.cookie.set('ab__p_dpr', pr, '', '/');
            })
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_COOKIE['ab__p_dpr']) {?>
    <?php echo '<script'; ?>
>
        (function (_, $) {
            $(_.doc).ready(function () {
                let pr = 1;
                if ('devicePixelRatio' in window) {
                     pr = window.devicePixelRatio;
                }
                $.cookie.set('ab__p_dpr', pr, '', '/');
            })
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
}
}
}
