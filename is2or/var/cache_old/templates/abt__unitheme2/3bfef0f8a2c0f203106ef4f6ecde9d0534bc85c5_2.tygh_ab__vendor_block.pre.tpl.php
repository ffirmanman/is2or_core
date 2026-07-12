<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ee36da13_87782124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bfef0f8a2c0f203106ef4f6ecde9d0534bc85c5' => 
    array (
      0 => 'addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69ada1ee36da13_87782124 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('vendor','vendor'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('company_name') || $_smarty_tpl->getValue('company_id')) && $_smarty_tpl->getValue('settings')['Vendors']['display_vendor'] == "Y") {?>
    <div class="ut2-vendor-block">
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_logo'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {?>
        	<div class="ut2-vendor-block__logo"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('company_data')['logos']['theme']['image'],'image_width'=>"80",'image_height'=>"80"), (int) 0, $_smarty_current_dir);
?></div>
        <?php }?>
        <div class="ut2-vendor-block__content">
			<div class="ut2-vendor-block__name">
				<label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
				<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company_id')))), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('company_name')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_name')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('company_id'))), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {?></a><?php }?>
			</div>
			
			<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']] != "0") {?>
	        	<div class="ut2-vendor-block__info"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('company_data')['company_description']),$_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']],"...",true)), ENT_QUOTES, 'UTF-8');?>
</div>
	        <?php }?>

	        <div class="ut2-vendor-block__contacts">
				<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_phone'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y" && $_smarty_tpl->getValue('company_data')['phone']) {?><div class="ut2-vendor-block__phone"><i class="ut2-icon-outline-headset_mic"></i> <?php if ($_smarty_tpl->getValue('settings')['abt__device'] == "mobile") {?><a href="tel:<?php echo $_smarty_tpl->getValue('company_data')['phone'];?>
"><?php }
echo $_smarty_tpl->getValue('company_data')['phone'];
if ($_smarty_tpl->getValue('settings')['abt__device'] == "mobile") {?></a><?php }?></div><?php }?>
				<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_ask_question_link'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
			</div>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2_mv/hooks/products/ab__vendor_block.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('company_name') || $_smarty_tpl->getValue('company_id')) && $_smarty_tpl->getValue('settings')['Vendors']['display_vendor'] == "Y") {?>
    <div class="ut2-vendor-block">
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_logo'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {?>
        	<div class="ut2-vendor-block__logo"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('company_data')['logos']['theme']['image'],'image_width'=>"80",'image_height'=>"80"), (int) 0, $_smarty_current_dir);
?></div>
        <?php }?>
        <div class="ut2-vendor-block__content">
			<div class="ut2-vendor-block__name">
				<label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
				<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company_id')))), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('company_name')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_name')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('company_id'))), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {?></a><?php }?>
			</div>
			
			<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']] != "0") {?>
	        	<div class="ut2-vendor-block__info"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('company_data')['company_description']),$_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']],"...",true)), ENT_QUOTES, 'UTF-8');?>
</div>
	        <?php }?>

	        <div class="ut2-vendor-block__contacts">
				<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_phone'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y" && $_smarty_tpl->getValue('company_data')['phone']) {?><div class="ut2-vendor-block__phone"><i class="ut2-icon-outline-headset_mic"></i> <?php if ($_smarty_tpl->getValue('settings')['abt__device'] == "mobile") {?><a href="tel:<?php echo $_smarty_tpl->getValue('company_data')['phone'];?>
"><?php }
echo $_smarty_tpl->getValue('company_data')['phone'];
if ($_smarty_tpl->getValue('settings')['abt__device'] == "mobile") {?></a><?php }?></div><?php }?>
				<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['vendor']['show_ask_question_link'][$_smarty_tpl->getValue('settings')['abt__device']] == "Y") {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
			</div>
        </div>
    </div>
<?php }
}
}
}
