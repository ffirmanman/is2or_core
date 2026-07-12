<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f6467d45_82607261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30fc14140f8c1a1f7548d8e55a3a8956c3e7e3f1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6835b9f6467d45_82607261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor','vendor'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['company_id']->value) && $_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor'] == "Y") {?>
    <div class="ut2-vendor-block">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {?>
        	<div class="ut2-vendor-block__logo"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['company_data']->value['logos']['theme']['image'],'image_width'=>"80",'image_height'=>"80"), 0, false);
?></div>
        <?php }?>
        <div class="ut2-vendor-block__content">
			<div class="ut2-vendor-block__name">
				<label><?php echo $_smarty_tpl->__("vendor");?>
:</label>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {?></a><?php }?>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] != "0") {?>
	        	<div class="ut2-vendor-block__info"><?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company_data']->value['company_description'] ?: ''),$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']],"...",true), ENT_QUOTES, 'UTF-8');?>
</div>
	        <?php }?>

	        <div class="ut2-vendor-block__contacts">
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_phone'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y" && $_smarty_tpl->tpl_vars['company_data']->value['phone']) {?><div class="ut2-vendor-block__phone"><i class="ut2-icon-outline-headset_mic"></i> <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] == "mobile") {?><a href="tel:<?php echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];
if ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] == "mobile") {?></a><?php }?></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_ask_question_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:product_company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
			</div>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['company_id']->value) && $_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor'] == "Y") {?>
    <div class="ut2-vendor-block">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {?>
        	<div class="ut2-vendor-block__logo"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['company_data']->value['logos']['theme']['image'],'image_width'=>"80",'image_height'=>"80"), 0, true);
?></div>
        <?php }?>
        <div class="ut2-vendor-block__content">
			<div class="ut2-vendor-block__name">
				<label><?php echo $_smarty_tpl->__("vendor");?>
:</label>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {?><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {?></a><?php }?>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] != "0") {?>
	        	<div class="ut2-vendor-block__info"><?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company_data']->value['company_description'] ?: ''),$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']],"...",true), ENT_QUOTES, 'UTF-8');?>
</div>
	        <?php }?>

	        <div class="ut2-vendor-block__contacts">
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_phone'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y" && $_smarty_tpl->tpl_vars['company_data']->value['phone']) {?><div class="ut2-vendor-block__phone"><i class="ut2-icon-outline-headset_mic"></i> <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] == "mobile") {?><a href="tel:<?php echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];
if ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] == "mobile") {?></a><?php }?></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_ask_question_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] == "Y") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:product_company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
			</div>
        </div>
    </div>
<?php }
}
}
}
