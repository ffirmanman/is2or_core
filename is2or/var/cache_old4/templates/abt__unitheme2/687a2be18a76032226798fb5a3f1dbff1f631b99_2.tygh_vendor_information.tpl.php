<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_information.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a72013d45_12912838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '687a2be18a76032226798fb5a3f1dbff1f631b99' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_information.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' => 2,
  ),
))) {
function content_69fb4a72013d45_12912838 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors';
\Tygh\Languages\Helper::preloadLangVars(array('extra','vendor_communication.ask_a_question','extra','vendor_communication.ask_a_question'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-vendor-information">

	<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	<div class="ut2-vendor-name"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.view?company_id=".((string)$_smarty_tpl->getValue('vendor_info')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vendor_info')['company']), ENT_QUOTES, 'UTF-8');?>
</a></div>
	<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

	<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']] != "0") {?>
		<p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('vendor_info')['company_description']),$_smarty_tpl->getValue('settings')['abt__ut2']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']],"...",true);?>
</p>
	<?php }?>

	<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	<p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.view?company_id=".((string)$_smarty_tpl->getValue('vendor_info')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("extra", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>
	<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('settings')['abt__ut2']['vendor']['show_ask_question_link'][$_smarty_tpl->getValue('settings')['abt__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('addons')['vendor_communication']['show_on_vendor'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
		<?php $_smarty_tpl->assign('uniq', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);?>
		<?php $_smarty_tpl->assign('object_id', ((string)$_smarty_tpl->getValue('company_id'))."_".((string)$_smarty_tpl->getValue('uniq')), false, NULL);?>
		<div class="vendor_communication-btn">
			<?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.ask_a_question", [], $_smarty_tpl->getSmarty()->getLanguage()),'object_id'=>$_smarty_tpl->getValue('object_id'),'show_form'=>true), (int) 0, $_smarty_current_dir);
?>
		</div>

		<?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->getValue('object_id'),'company_id'=>$_smarty_tpl->getValue('company_id'),'vendor_name'=>$_smarty_tpl->getValue('vendor_info')['company']), (int) 0, $_smarty_current_dir);
?>
	<?php }?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_information.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_information.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-vendor-information">

	<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	<div class="ut2-vendor-name"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.view?company_id=".((string)$_smarty_tpl->getValue('vendor_info')['company_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('vendor_info')['company']), ENT_QUOTES, 'UTF-8');?>
</a></div>
	<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

	<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']] != "0") {?>
		<p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('vendor_info')['company_description']),$_smarty_tpl->getValue('settings')['abt__ut2']['vendor']['truncate_short_description'][$_smarty_tpl->getValue('settings')['abt__device']],"...",true);?>
</p>
	<?php }?>

	<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	<p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.view?company_id=".((string)$_smarty_tpl->getValue('vendor_info')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("extra", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></p>
	<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('settings')['abt__ut2']['vendor']['show_ask_question_link'][$_smarty_tpl->getValue('settings')['abt__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('addons')['vendor_communication']['show_on_vendor'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
		<?php $_smarty_tpl->assign('uniq', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);?>
		<?php $_smarty_tpl->assign('object_id', ((string)$_smarty_tpl->getValue('company_id'))."_".((string)$_smarty_tpl->getValue('uniq')), false, NULL);?>
		<div class="vendor_communication-btn">
			<?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.ask_a_question", [], $_smarty_tpl->getSmarty()->getLanguage()),'object_id'=>$_smarty_tpl->getValue('object_id'),'show_form'=>true), (int) 0, $_smarty_current_dir);
?>
		</div>

		<?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->getValue('object_id'),'company_id'=>$_smarty_tpl->getValue('company_id'),'vendor_name'=>$_smarty_tpl->getValue('vendor_info')['company']), (int) 0, $_smarty_current_dir);
?>
	<?php }?>
</div>
<?php }
}
}
