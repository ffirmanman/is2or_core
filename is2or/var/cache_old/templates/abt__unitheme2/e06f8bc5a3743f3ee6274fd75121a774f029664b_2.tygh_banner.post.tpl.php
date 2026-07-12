<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:12
  from 'tygh:addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96044daf60_50433469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e06f8bc5a3743f3ee6274fd75121a774f029664b' => 
    array (
      0 => 'addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad96044daf60_50433469 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/abt__ut2_banner';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('block')['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->getValue('b_iteration') === 1 || $_smarty_tpl->getValue('block')['properties']['template'] == 'addons/abt__unitheme2/blocks/abt__ut2_banner_combined.tpl') {?>
        <?php $_smarty_tpl->assign('pov', (($tmp = $_smarty_tpl->getValue('block')['properties']["pov_".((string)$_smarty_tpl->getValue('settings')['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), false, NULL);?>
        <?php if (($_smarty_tpl->getValue('data_backgroud_url') || $_smarty_tpl->getValue('background_url')) && $_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->assign('pov', $_smarty_tpl->getValue('pov')/2, false, NULL);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('data_backgroud_url') || $_smarty_tpl->getValue('background_url')) {?>
            <?php if ($_smarty_tpl->getValue('data_backgroud_url')) {?>
                <?php $_smarty_tpl->assign('background_url', $_smarty_tpl->getValue('data_backgroud_url'), false, 2);?>
                <?php $_smarty_tpl->assign('data_backgroud_url', null, false, 2);?>
            <?php }?>
            <!--ab__image_preload:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('background_url')), ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pov')), ENT_QUOTES, 'UTF-8');?>
>-->
            <?php $_tmp_array = $_smarty_tpl->getValue('app') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->getValue('app')['ab__total_pov']+$_smarty_tpl->getValue('pov');
$_smarty_tpl->assign('app', $_tmp_array, false, NULL);?>
            <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('pov'), false, 2);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('pov'), false, 2);?>
        <?php }?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/abt__ut2_banner/banner.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('block')['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->getValue('b_iteration') === 1 || $_smarty_tpl->getValue('block')['properties']['template'] == 'addons/abt__unitheme2/blocks/abt__ut2_banner_combined.tpl') {?>
        <?php $_smarty_tpl->assign('pov', (($tmp = $_smarty_tpl->getValue('block')['properties']["pov_".((string)$_smarty_tpl->getValue('settings')['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), false, NULL);?>
        <?php if (($_smarty_tpl->getValue('data_backgroud_url') || $_smarty_tpl->getValue('background_url')) && $_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->assign('pov', $_smarty_tpl->getValue('pov')/2, false, NULL);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('data_backgroud_url') || $_smarty_tpl->getValue('background_url')) {?>
            <?php if ($_smarty_tpl->getValue('data_backgroud_url')) {?>
                <?php $_smarty_tpl->assign('background_url', $_smarty_tpl->getValue('data_backgroud_url'), false, 2);?>
                <?php $_smarty_tpl->assign('data_backgroud_url', null, false, 2);?>
            <?php }?>
            <!--ab__image_preload:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('background_url')), ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pov')), ENT_QUOTES, 'UTF-8');?>
>-->
            <?php $_tmp_array = $_smarty_tpl->getValue('app') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->getValue('app')['ab__total_pov']+$_smarty_tpl->getValue('pov');
$_smarty_tpl->assign('app', $_tmp_array, false, NULL);?>
            <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('pov'), false, 2);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?>
            <?php $_smarty_tpl->assign('ab__preload', $_smarty_tpl->getValue('pov'), false, 2);?>
        <?php }?>
    <?php }
}
}
}
}
