<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21b327d07_99237708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41b69c5abe99e8ca403361c0d7057d5b97c1f9a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21b327d07_99237708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['b_iteration']->value === 1 || $_smarty_tpl->tpl_vars['block']->value['properties']['template'] == 'addons/abt__unitheme2/blocks/abt__ut2_banner_combined.tpl') {?>
        <?php $_smarty_tpl->_assignInScope('pov', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["pov_".((string)$_smarty_tpl->tpl_vars['settings']->value['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp));?>
        <?php if (($_smarty_tpl->tpl_vars['data_backgroud_url']->value || $_smarty_tpl->tpl_vars['background_url']->value) && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->_assignInScope('pov', $_smarty_tpl->tpl_vars['pov']->value/2);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value || $_smarty_tpl->tpl_vars['background_url']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?>
                <?php $_smarty_tpl->_assignInScope('background_url', $_smarty_tpl->tpl_vars['data_backgroud_url']->value ,false ,2);?>
                <?php $_smarty_tpl->_assignInScope('data_backgroud_url', null ,false ,2);?>
            <?php }?>
            <!--ab__image_preload:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pov']->value, ENT_QUOTES, 'UTF-8');?>
>-->
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['app']) ? $_smarty_tpl->tpl_vars['app']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->tpl_vars['app']->value['ab__total_pov']+$_smarty_tpl->tpl_vars['pov']->value;
$_smarty_tpl->_assignInScope('app', $_tmp_array);?>
            <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['pov']->value ,false ,2);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['pov']->value ,false ,2);?>
        <?php }?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['b_iteration']->value === 1 || $_smarty_tpl->tpl_vars['block']->value['properties']['template'] == 'addons/abt__unitheme2/blocks/abt__ut2_banner_combined.tpl') {?>
        <?php $_smarty_tpl->_assignInScope('pov', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["pov_".((string)$_smarty_tpl->tpl_vars['settings']->value['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp));?>
        <?php if (($_smarty_tpl->tpl_vars['data_backgroud_url']->value || $_smarty_tpl->tpl_vars['background_url']->value) && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->_assignInScope('pov', $_smarty_tpl->tpl_vars['pov']->value/2);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value || $_smarty_tpl->tpl_vars['background_url']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?>
                <?php $_smarty_tpl->_assignInScope('background_url', $_smarty_tpl->tpl_vars['data_backgroud_url']->value ,false ,2);?>
                <?php $_smarty_tpl->_assignInScope('data_backgroud_url', null ,false ,2);?>
            <?php }?>
            <!--ab__image_preload:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pov']->value, ENT_QUOTES, 'UTF-8');?>
>-->
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['app']) ? $_smarty_tpl->tpl_vars['app']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->tpl_vars['app']->value['ab__total_pov']+$_smarty_tpl->tpl_vars['pov']->value;
$_smarty_tpl->_assignInScope('app', $_tmp_array);?>
            <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['pov']->value ,false ,2);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['pov']->value ,false ,2);?>
        <?php }?>
    <?php }
}
}
}
}
