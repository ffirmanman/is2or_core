<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:05
  from 'tygh:addons/ab__preload/hooks/common/image.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa5cd0506_75237889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d95d1c95e2bd5f637e47e808b3284654b5a4ad' => 
    array (
      0 => 'addons/ab__preload/hooks/common/image.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa5cd0506_75237889 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('ab__preload') && $_smarty_tpl->getValue('image_data')['image_path']) {?>
    <?php if ($_smarty_tpl->getValue('lazy_load')) {?>
        <?php $_smarty_tpl->assign('restore', true, false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('app')['ab__total_pov'] <= 100) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('app') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->getValue('app')['ab__total_pov']+(($tmp = $_smarty_tpl->getValue('ab__preload') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->assign('app', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->assign('lazy_load', false, false, 2);?>
        <?php if ($_smarty_tpl->getValue('restore')) {?>

            <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lazy_load_disabled'] = true;
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
            <?php $_smarty_tpl->assign('restore', false, false, NULL);?>
        <?php }?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['image_path']), ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__preload')), ENT_QUOTES, 'UTF-8');?>
>-->
    <?php }?>
    <?php $_smarty_tpl->assign('ab__preload', false, false, 32);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/common/image.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/common/image.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('ab__preload') && $_smarty_tpl->getValue('image_data')['image_path']) {?>
    <?php if ($_smarty_tpl->getValue('lazy_load')) {?>
        <?php $_smarty_tpl->assign('restore', true, false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('app')['ab__total_pov'] <= 100) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('app') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->getValue('app')['ab__total_pov']+(($tmp = $_smarty_tpl->getValue('ab__preload') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->assign('app', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->assign('lazy_load', false, false, 2);?>
        <?php if ($_smarty_tpl->getValue('restore')) {?>

            <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lazy_load_disabled'] = true;
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
            <?php $_smarty_tpl->assign('restore', false, false, NULL);?>
        <?php }?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['image_path']), ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__preload')), ENT_QUOTES, 'UTF-8');?>
>-->
    <?php }?>
    <?php $_smarty_tpl->assign('ab__preload', false, false, 32);
}
}
}
}
