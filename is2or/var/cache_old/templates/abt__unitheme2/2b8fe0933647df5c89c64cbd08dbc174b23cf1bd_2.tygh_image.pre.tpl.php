<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:30
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9472942d65_81055039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8fe0933647df5c89c64cbd08dbc174b23cf1bd' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9472942d65_81055039 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('image_data')['is_thumbnail']) {?>
    <?php $_smarty_tpl->assign('width', $_smarty_tpl->getValue('image_data')['width']*2, false, NULL);?>
    <?php $_smarty_tpl->assign('height', $_smarty_tpl->getValue('image_data')['height']*2, false, NULL);?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('images'),$_smarty_tpl->getValue('width'),$_smarty_tpl->getValue('height')), false, NULL);
} elseif ($_smarty_tpl->getValue('images')['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getValue('image_data'), false, NULL);?>
    <?php $_smarty_tpl->assign('image_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('images'),$_smarty_tpl->getValue('images')['icon']['image_x'],$_smarty_tpl->getValue('images')['icon']['image_y']), false, 2);
} elseif ($_smarty_tpl->getValue('images')['original_image_path']) {?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getValue('images'), false, NULL);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_data2x') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->getValue('images')['original_image_path'];
$_smarty_tpl->assign('image_data2x', $_tmp_array, false, NULL);
}?>


<?php if ($_smarty_tpl->getValue('ab__preload') && $_smarty_tpl->getValue('image_data2x')['image_path'] && $_smarty_tpl->getValue('app')['ab__total_pov'] <= 100) {?>
    <?php if (($_COOKIE['ab__p_dpr'] && $_COOKIE['ab__p_dpr'] >= 2) || (!$_COOKIE['ab__p_dpr'] && $_smarty_tpl->getValue('settings')['ab__device'] === "mobile")) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('app') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->getValue('app')['ab__total_pov']+(($tmp = $_smarty_tpl->getValue('ab__preload') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->assign('app', $_tmp_array, false, NULL);?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data2x')['image_path']), ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__preload')), ENT_QUOTES, 'UTF-8');?>
>-->
        <?php $_smarty_tpl->assign('ab__preload', false, false, 32);?>
    <?php }?>
    <?php $_smarty_tpl->assign('lazy_load', false, false, 2);?>
    <?php $_smarty_tpl->assign('diable_lazy_load', true, false, 2);
}?>

<?php if ($_smarty_tpl->getValue('lazy_load')) {?>
    <?php $_smarty_tpl->assign('attr_name', 'data-srcset', false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('attr_name', 'srcset', false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('image_data2x')['image_path']) {?>
    <?php if ($_smarty_tpl->getValue('capture_image')) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "icon_image_path_hidpi", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data2x')['image_path']), ENT_QUOTES, 'UTF-8');?>
 2x<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } else { ?>
        <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('attr_name')] = ((string)$_smarty_tpl->getValue('image_data2x')['image_path'])." 2x";
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('image_data')['is_thumbnail']) {?>
    <?php $_smarty_tpl->assign('width', $_smarty_tpl->getValue('image_data')['width']*2, false, NULL);?>
    <?php $_smarty_tpl->assign('height', $_smarty_tpl->getValue('image_data')['height']*2, false, NULL);?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('images'),$_smarty_tpl->getValue('width'),$_smarty_tpl->getValue('height')), false, NULL);
} elseif ($_smarty_tpl->getValue('images')['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getValue('image_data'), false, NULL);?>
    <?php $_smarty_tpl->assign('image_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('images'),$_smarty_tpl->getValue('images')['icon']['image_x'],$_smarty_tpl->getValue('images')['icon']['image_y']), false, 2);
} elseif ($_smarty_tpl->getValue('images')['original_image_path']) {?>
    <?php $_smarty_tpl->assign('image_data2x', $_smarty_tpl->getValue('images'), false, NULL);?>
    <?php $_tmp_array = $_smarty_tpl->getValue('image_data2x') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->getValue('images')['original_image_path'];
$_smarty_tpl->assign('image_data2x', $_tmp_array, false, NULL);
}?>


<?php if ($_smarty_tpl->getValue('ab__preload') && $_smarty_tpl->getValue('image_data2x')['image_path'] && $_smarty_tpl->getValue('app')['ab__total_pov'] <= 100) {?>
    <?php if (($_COOKIE['ab__p_dpr'] && $_COOKIE['ab__p_dpr'] >= 2) || (!$_COOKIE['ab__p_dpr'] && $_smarty_tpl->getValue('settings')['ab__device'] === "mobile")) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('app') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->getValue('app')['ab__total_pov']+(($tmp = $_smarty_tpl->getValue('ab__preload') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->assign('app', $_tmp_array, false, NULL);?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data2x')['image_path']), ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__preload')), ENT_QUOTES, 'UTF-8');?>
>-->
        <?php $_smarty_tpl->assign('ab__preload', false, false, 32);?>
    <?php }?>
    <?php $_smarty_tpl->assign('lazy_load', false, false, 2);?>
    <?php $_smarty_tpl->assign('diable_lazy_load', true, false, 2);
}?>

<?php if ($_smarty_tpl->getValue('lazy_load')) {?>
    <?php $_smarty_tpl->assign('attr_name', 'data-srcset', false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('attr_name', 'srcset', false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('image_data2x')['image_path']) {?>
    <?php if ($_smarty_tpl->getValue('capture_image')) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "icon_image_path_hidpi", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data2x')['image_path']), ENT_QUOTES, 'UTF-8');?>
 2x<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } else { ?>
        <?php $_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('attr_name')] = ((string)$_smarty_tpl->getValue('image_data2x')['image_path'])." 2x";
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, 2);?>
    <?php }
}
}
}
}
