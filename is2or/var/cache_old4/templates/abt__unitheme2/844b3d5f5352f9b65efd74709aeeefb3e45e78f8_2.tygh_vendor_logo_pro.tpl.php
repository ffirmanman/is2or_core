<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:33
  from 'tygh:addons/cr_vendor_page_pro/blocks/static_templates/vendor_logo_pro.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a71e6b1d6_85541843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844b3d5f5352f9b65efd74709aeeefb3e45e78f8' => 
    array (
      0 => 'addons/cr_vendor_page_pro/blocks/static_templates/vendor_logo_pro.tpl',
      1 => 1776438348,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69fb4a71e6b1d6_85541843 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/blocks/static_templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_REQUEST['company_id']) {?>
    <div class="logo-container">
        <?php $_smarty_tpl->assign('company_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_data')($_REQUEST['company_id']), false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('company_data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['logos'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_logos')($_REQUEST['company_id']);
$_smarty_tpl->assign('company_data', $_tmp_array, false, NULL);?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company_data')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><span><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('company_data')['logos']['theme']['image'],'image_width'=>$_smarty_tpl->getValue('addons')['cr_vendor_page_pro']['vendor_logo_width'],'image_height'=>$_smarty_tpl->getValue('addons')['cr_vendor_page_pro']['vendor_logo_height']), (int) 0, $_smarty_current_dir);
?></span></a>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cr_vendor_page_pro/blocks/static_templates/vendor_logo_pro.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cr_vendor_page_pro/blocks/static_templates/vendor_logo_pro.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_REQUEST['company_id']) {?>
    <div class="logo-container">
        <?php $_smarty_tpl->assign('company_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_data')($_REQUEST['company_id']), false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('company_data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['logos'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_logos')($_REQUEST['company_id']);
$_smarty_tpl->assign('company_data', $_tmp_array, false, NULL);?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company_data')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><span><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('company_data')['logos']['theme']['image'],'image_width'=>$_smarty_tpl->getValue('addons')['cr_vendor_page_pro']['vendor_logo_width'],'image_height'=>$_smarty_tpl->getValue('addons')['cr_vendor_page_pro']['vendor_logo_height']), (int) 0, $_smarty_current_dir);
?></span></a>
    </div>
<?php }
}
}
}
