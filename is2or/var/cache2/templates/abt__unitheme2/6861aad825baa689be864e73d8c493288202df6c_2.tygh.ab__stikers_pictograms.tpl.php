<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21bc55f47_05153646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6861aad825baa689be864e73d8c493288202df6c' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl' => 2,
  ),
),false)) {
function content_682fe21bc55f47_05153646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_pictograms', false);
$_smarty_tpl->_assignInScope('theme_name', fn_get_theme_path('[theme]'));?>

<?php if ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__youpitheme') {?>
    <?php $_smarty_tpl->_assignInScope('theme_settings', $_smarty_tpl->tpl_vars['settings']->value['abt__yt']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('theme_settings', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);
}?>

<?php if ((!$_smarty_tpl->tpl_vars['tmpl']->value && fn_ab__stickers_get_view_type($_REQUEST,(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page')) {?>
    <?php if ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__youpitheme') {?>
        <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['products']['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['products']['view']['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);?>
    <?php }?>

    <?php if (empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('block', fn_ab__stickers_get_main_block());?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['tmpl']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['product_list']['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_pictograms']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('details_page'=>$_smarty_tpl->tpl_vars['details_page']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/views/ab__stickers/components/ab__stikers_pictograms.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_pictograms', false);
$_smarty_tpl->_assignInScope('theme_name', fn_get_theme_path('[theme]'));?>

<?php if ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__youpitheme') {?>
    <?php $_smarty_tpl->_assignInScope('theme_settings', $_smarty_tpl->tpl_vars['settings']->value['abt__yt']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('theme_settings', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);
}?>

<?php if ((!$_smarty_tpl->tpl_vars['tmpl']->value && fn_ab__stickers_get_view_type($_REQUEST,(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)) === 'detailed_page')) {?>
    <?php if ($_smarty_tpl->tpl_vars['theme_name']->value === 'abt__youpitheme') {?>
        <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['products']['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['products']['view']['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);?>
    <?php }?>

    <?php if (empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('block', fn_ab__stickers_get_main_block());?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['tmpl']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('show_pictograms', $_smarty_tpl->tpl_vars['theme_settings']->value['product_list']['ab__s_pictogram_position'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] === $_smarty_tpl->tpl_vars['position']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_pictograms']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__stickers/views/ab__stickers/components/pictograms_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('details_page'=>$_smarty_tpl->tpl_vars['details_page']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value), 0, true);
}
}
}
}
