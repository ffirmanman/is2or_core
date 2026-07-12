<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:59
  from 'tygh:addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6f181a76_52193746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3a06f736b473e3c24fb52add461469963c606b' => 
    array (
      0 => 'addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl' => 2,
  ),
))) {
function content_6a133f6f181a76_52193746 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_pictograms', false, false, NULL);
$_smarty_tpl->assign('theme_name', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_theme_path')('[theme]'), false, NULL);?>

<?php if ($_smarty_tpl->getValue('theme_name') === 'abt__youpitheme') {?>
    <?php $_smarty_tpl->assign('theme_settings', $_smarty_tpl->getValue('settings')['abt__yt'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('theme_settings', $_smarty_tpl->getValue('settings')['abt__ut2'], false, NULL);
}?>

<?php if ((!$_smarty_tpl->getValue('tmpl') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_view_type')($_REQUEST,(($tmp = $_smarty_tpl->getValue('block') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page')) {?>
    <?php if ($_smarty_tpl->getValue('theme_name') === 'abt__youpitheme') {?>
        <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['products']['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['products']['view']['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);?>
    <?php }?>

    <?php if (( !$_smarty_tpl->hasVariable('block') || empty($_smarty_tpl->getValue('block')))) {?>
        <?php $_smarty_tpl->assign('block', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_main_block')(), false, NULL);?>
    <?php }
} elseif ($_smarty_tpl->getValue('tmpl')) {?>
    <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['product_list'][$_smarty_tpl->getValue('tmpl')]['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['product_list']['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_pictograms')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('details_page'=>$_smarty_tpl->getValue('details_page'),'product'=>$_smarty_tpl->getValue('product'),'block'=>$_smarty_tpl->getValue('block')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_pictograms', false, false, NULL);
$_smarty_tpl->assign('theme_name', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_theme_path')('[theme]'), false, NULL);?>

<?php if ($_smarty_tpl->getValue('theme_name') === 'abt__youpitheme') {?>
    <?php $_smarty_tpl->assign('theme_settings', $_smarty_tpl->getValue('settings')['abt__yt'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('theme_settings', $_smarty_tpl->getValue('settings')['abt__ut2'], false, NULL);
}?>

<?php if ((!$_smarty_tpl->getValue('tmpl') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_view_type')($_REQUEST,(($tmp = $_smarty_tpl->getValue('block') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page')) {?>
    <?php if ($_smarty_tpl->getValue('theme_name') === 'abt__youpitheme') {?>
        <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['products']['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['products']['view']['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);?>
    <?php }?>

    <?php if (( !$_smarty_tpl->hasVariable('block') || empty($_smarty_tpl->getValue('block')))) {?>
        <?php $_smarty_tpl->assign('block', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_main_block')(), false, NULL);?>
    <?php }
} elseif ($_smarty_tpl->getValue('tmpl')) {?>
    <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['product_list'][$_smarty_tpl->getValue('tmpl')]['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('show_pictograms', $_smarty_tpl->getValue('theme_settings')['product_list']['ab__s_pictogram_position'][$_smarty_tpl->getValue('settings')['abt__device']] === $_smarty_tpl->getValue('position'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_pictograms')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('details_page'=>$_smarty_tpl->getValue('details_page'),'product'=>$_smarty_tpl->getValue('product'),'block'=>$_smarty_tpl->getValue('block')), (int) 0, $_smarty_current_dir);
}
}
}
}
