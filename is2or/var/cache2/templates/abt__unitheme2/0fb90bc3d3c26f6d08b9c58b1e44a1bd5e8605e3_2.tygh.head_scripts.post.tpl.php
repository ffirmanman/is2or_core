<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:58
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21a792080_36338904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fb90bc3d3c26f6d08b9c58b1e44a1bd5e8605e3' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21a792080_36338904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
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
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/addons/hidpi/hooks/index/head_scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
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
