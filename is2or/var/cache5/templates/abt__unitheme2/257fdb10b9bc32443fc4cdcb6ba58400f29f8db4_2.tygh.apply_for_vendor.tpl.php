<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:12
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/views/companies/apply_for_vendor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba2c31d739_37982826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '257fdb10b9bc32443fc4cdcb6ba58400f29f8db4' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/views/companies/apply_for_vendor.tpl',
      1 => 1736834852,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:views/profiles/components/profile_fields.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6835ba2c31d739_37982826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('apply_for_vendor_account','submit','apply_for_vendor_account','submit'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendors:apply_page"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendors:apply_page"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="ty-company-fields">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("apply_for_vendor_account");?>
</h1>

    <div id="apply_for_vendor_account" >

        <form action="<?php echo htmlspecialchars((string) fn_url("companies.apply_for_vendor"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="apply_for_vendor_form" enctype="multipart/form-data">
            <?php if ($_smarty_tpl->tpl_vars['invitation_key']->value) {?>
                <input type="hidden" name="company_data[invitation_key]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['invitation_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendors:apply_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendors:apply_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'nothing_extra'=>"Y",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value), 0, false);
?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendors:apply_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendors:apply_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendors:apply_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <input type="hidden" name="company_data[lang_code]" value="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendors:apply_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"apply_for_vendor_account",'align'=>"left"), 0, false);
?>

            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("submit"),'but_name'=>"dispatch[companies.apply_for_vendor]",'but_id'=>"but_apply_for_vendor",'but_meta'=>"ty-btn__primary"), 0, false);
?>
            </div>
        </form>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendors:apply_page"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/apply_for_vendor.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/apply_for_vendor.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendors:apply_page"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendors:apply_page"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="ty-company-fields">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("apply_for_vendor_account");?>
</h1>

    <div id="apply_for_vendor_account" >

        <form action="<?php echo htmlspecialchars((string) fn_url("companies.apply_for_vendor"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="apply_for_vendor_form" enctype="multipart/form-data">
            <?php if ($_smarty_tpl->tpl_vars['invitation_key']->value) {?>
                <input type="hidden" name="company_data[invitation_key]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['invitation_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendors:apply_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendors:apply_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'nothing_extra'=>"Y",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value), 0, true);
?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendors:apply_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendors:apply_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendors:apply_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <input type="hidden" name="company_data[lang_code]" value="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendors:apply_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"apply_for_vendor_account",'align'=>"left"), 0, true);
?>

            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("submit"),'but_name'=>"dispatch[companies.apply_for_vendor]",'but_id'=>"but_apply_for_vendor",'but_meta'=>"ty-btn__primary"), 0, true);
?>
            </div>
        </form>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendors:apply_page"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
