<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:15
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/bottom_panel/extra_element_on_panel.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7b837f52_41009249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b357d7da91bd35f832cf5b50eb7563c6d384e8' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/bottom_panel/extra_element_on_panel.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7b837f52_41009249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><button class="cm-ab-p-calculate-pov" style="
    position: fixed;
    top: 20px;
    right: 20px;
    height: 40px;
    width: 40px;
    padding: 5px;
    border: 0;
    border-radius: 25px;
    box-shadow: none;
    background-color: var(--bp-panel-bg);
    opacity: .6;">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;fill: white;width: 24px;text-shadow: 0 -1px #333, -1px 0 #333, 0 1px #333, 1px 0 #333;" xml:space="preserve">
    <g><g><path d="M216.74,132.612c-28.37,0-51.45,23.081-51.45,51.45c0,28.371,23.08,51.451,51.45,51.451s51.45-23.081,51.45-51.451
    C268.19,155.692,245.11,132.612,216.74,132.612z"/></g></g><g><g><path d="M494.14,416.287h-42.127c0-18.674,0-319.846,0-338.439c0-9.864-7.997-17.86-17.86-17.86H95.713V17.86
    C95.713,7.997,87.716,0,77.853,0c-9.864,0-17.86,7.997-17.86,17.86v42.132H17.86C7.997,59.992,0,67.989,0,77.853
    c0,9.864,7.997,17.86,17.86,17.86h42.127c0,13.864,0,322.829,0,338.439c0,9.864,7.997,17.86,17.86,17.86h338.439v42.127
    c0,9.864,7.997,17.86,17.86,17.86c9.864,0,17.86-7.997,17.86-17.86v-42.132h42.132c9.864,0,17.86-7.997,17.86-17.86
    C512,424.284,504.003,416.287,494.14,416.287z M416.292,259.923l-50.95-53.997c-6.966-7.384-18.895-7.51-25.983,0.001
    L226.78,325.275L172.7,267.94c-7.039-7.467-18.957-7.445-25.985,0l-51.007,54.071V95.708h320.583V259.923z"/>
    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
    </svg>
</button><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/bottom_panel/extra_element_on_panel.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/bottom_panel/extra_element_on_panel.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button class="cm-ab-p-calculate-pov" style="
    position: fixed;
    top: 20px;
    right: 20px;
    height: 40px;
    width: 40px;
    padding: 5px;
    border: 0;
    border-radius: 25px;
    box-shadow: none;
    background-color: var(--bp-panel-bg);
    opacity: .6;">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;fill: white;width: 24px;text-shadow: 0 -1px #333, -1px 0 #333, 0 1px #333, 1px 0 #333;" xml:space="preserve">
    <g><g><path d="M216.74,132.612c-28.37,0-51.45,23.081-51.45,51.45c0,28.371,23.08,51.451,51.45,51.451s51.45-23.081,51.45-51.451
    C268.19,155.692,245.11,132.612,216.74,132.612z"/></g></g><g><g><path d="M494.14,416.287h-42.127c0-18.674,0-319.846,0-338.439c0-9.864-7.997-17.86-17.86-17.86H95.713V17.86
    C95.713,7.997,87.716,0,77.853,0c-9.864,0-17.86,7.997-17.86,17.86v42.132H17.86C7.997,59.992,0,67.989,0,77.853
    c0,9.864,7.997,17.86,17.86,17.86h42.127c0,13.864,0,322.829,0,338.439c0,9.864,7.997,17.86,17.86,17.86h338.439v42.127
    c0,9.864,7.997,17.86,17.86,17.86c9.864,0,17.86-7.997,17.86-17.86v-42.132h42.132c9.864,0,17.86-7.997,17.86-17.86
    C512,424.284,504.003,416.287,494.14,416.287z M416.292,259.923l-50.95-53.997c-6.966-7.384-18.895-7.51-25.983,0.001
    L226.78,325.275L172.7,267.94c-7.039-7.467-18.957-7.445-25.985,0l-51.007,54.071V95.708h320.583V259.923z"/>
    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
    </svg>
</button><?php }
}
}
