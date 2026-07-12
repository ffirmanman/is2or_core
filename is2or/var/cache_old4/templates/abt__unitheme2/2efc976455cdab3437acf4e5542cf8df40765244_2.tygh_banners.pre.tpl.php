<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:13:32
  from 'tygh:addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4c8c2f3392_86477863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2efc976455cdab3437acf4e5542cf8df40765244' => 
    array (
      0 => 'addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4c8c2f3392_86477863 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/abt__ut2_banner';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('block')['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->getValue('b_iteration') === 1 && $_smarty_tpl->getValue('b')['type'] == "G") {?>
        <?php $_smarty_tpl->assign('pov', (($tmp = $_smarty_tpl->getValue('block')['properties']["pov_".((string)$_smarty_tpl->getValue('settings')['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('pov'), false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('block')['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->getValue('b_iteration') === 1 && $_smarty_tpl->getValue('b')['type'] == "G") {?>
        <?php $_smarty_tpl->assign('pov', (($tmp = $_smarty_tpl->getValue('block')['properties']["pov_".((string)$_smarty_tpl->getValue('settings')['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('pov'), false, 2);?>
    <?php }
}
}
}
}
