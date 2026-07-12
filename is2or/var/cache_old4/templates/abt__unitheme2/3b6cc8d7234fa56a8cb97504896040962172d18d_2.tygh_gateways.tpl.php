<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:addons/amazon_payment_services/common/gateways.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5204b8ebe3_48161826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b6cc8d7234fa56a8cb97504896040962172d18d' => 
    array (
      0 => 'addons/amazon_payment_services/common/gateways.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/amazon_payment_services/common/gateways/".((string)$_smarty_tpl->getValue(\'gw_type\')).".tpl' => 2,
  ),
))) {
function content_69fb5204b8ebe3_48161826 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/amazon_payment_services/common';
\Tygh\Languages\Helper::preloadLangVars(array('aps_no_payment_option','aps_no_payment_option'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!( !$_smarty_tpl->hasVariable('gateways') || empty($_smarty_tpl->getValue('gateways')))) {?>
	<div class="aps_gateways_list">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gateways'), 'gateway', false, 'gw_type');
$foreach48DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gw_type')->value => $_smarty_tpl->getVariable('gateway')->value) {
$foreach48DoElse = false;
?>
			<div class="gateway_item gateway_type-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('gw_type') == 'apple' && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('gateways')) > 1) {?> hidden<?php }?>">
				<label class="gt-label" for="elm_aps_gateway_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
">
		            <input type="radio" name="payment_data[aps][gateway]" id="elm_aps_gateway_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('gateway')['first']) {?> checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
"/>
		            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gateway')['title']), ENT_QUOTES, 'UTF-8');?>


		            <?php if (!( !true || empty($_smarty_tpl->getValue('gateway')['object']->logos))) {?>
		            <span class="aps_logos">
		            	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gateway')['object']->logos, '_logo');
$foreach49DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_logo')->value) {
$foreach49DoElse = false;
?>
		            		<img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_logo')), ENT_QUOTES, 'UTF-8');?>
" height="19" />
		            	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		            </span>
		            <?php }?>
		        </label>
		        <?php if ($_smarty_tpl->getValue('gateway')['object']->template) {?>
		        <div class="tpl_gateway"<?php if (!$_smarty_tpl->getValue('gateway')['first']) {?> style="display:none;"<?php }?> id="tpl_aps_gateway_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
">
		        	<?php $_smarty_tpl->renderSubTemplate("tygh:addons/amazon_payment_services/common/gateways/".((string)$_smarty_tpl->getValue('gw_type')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gateway'=>$_smarty_tpl->getValue('gateway')['object'],'type'=>$_smarty_tpl->getValue('gw_type'),'is_active'=>$_smarty_tpl->getValue('gateway')['first']), (int) 0, $_smarty_current_dir);
?>
		        </div>
		        <?php }?>	
			</div>
			
			<?php if ($_smarty_tpl->getValue('gateway')['object']->integration_type == 'standard_checkout') {?>
				<input id="iframe_standard_checkout_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
" type="hidden" value="Y">
			<?php }?>
			
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</div>

	<div class="hidden" title="" class="aps_payment_iframe_container" id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"><div class="iframe_container"></div></div>
	
	<a id="opener_aps_payment_iframe_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size hidden" data-ca-target-id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" title="" rel="nofollow"></a>

<?php } else { ?>
	<p class="ty-error-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("aps_no_payment_option", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 !</p>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/amazon_payment_services/common/gateways.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/amazon_payment_services/common/gateways.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!( !$_smarty_tpl->hasVariable('gateways') || empty($_smarty_tpl->getValue('gateways')))) {?>
	<div class="aps_gateways_list">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gateways'), 'gateway', false, 'gw_type');
$foreach50DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gw_type')->value => $_smarty_tpl->getVariable('gateway')->value) {
$foreach50DoElse = false;
?>
			<div class="gateway_item gateway_type-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('gw_type') == 'apple' && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('gateways')) > 1) {?> hidden<?php }?>">
				<label class="gt-label" for="elm_aps_gateway_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
">
		            <input type="radio" name="payment_data[aps][gateway]" id="elm_aps_gateway_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('gateway')['first']) {?> checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
"/>
		            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gateway')['title']), ENT_QUOTES, 'UTF-8');?>


		            <?php if (!( !true || empty($_smarty_tpl->getValue('gateway')['object']->logos))) {?>
		            <span class="aps_logos">
		            	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gateway')['object']->logos, '_logo');
$foreach51DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_logo')->value) {
$foreach51DoElse = false;
?>
		            		<img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_logo')), ENT_QUOTES, 'UTF-8');?>
" height="19" />
		            	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		            </span>
		            <?php }?>
		        </label>
		        <?php if ($_smarty_tpl->getValue('gateway')['object']->template) {?>
		        <div class="tpl_gateway"<?php if (!$_smarty_tpl->getValue('gateway')['first']) {?> style="display:none;"<?php }?> id="tpl_aps_gateway_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
">
		        	<?php $_smarty_tpl->renderSubTemplate("tygh:addons/amazon_payment_services/common/gateways/".((string)$_smarty_tpl->getValue('gw_type')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gateway'=>$_smarty_tpl->getValue('gateway')['object'],'type'=>$_smarty_tpl->getValue('gw_type'),'is_active'=>$_smarty_tpl->getValue('gateway')['first']), (int) 0, $_smarty_current_dir);
?>
		        </div>
		        <?php }?>	
			</div>
			
			<?php if ($_smarty_tpl->getValue('gateway')['object']->integration_type == 'standard_checkout') {?>
				<input id="iframe_standard_checkout_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gw_type')), ENT_QUOTES, 'UTF-8');?>
" type="hidden" value="Y">
			<?php }?>
			
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</div>

	<div class="hidden" title="" class="aps_payment_iframe_container" id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"><div class="iframe_container"></div></div>
	
	<a id="opener_aps_payment_iframe_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size hidden" data-ca-target-id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" title="" rel="nofollow"></a>

<?php } else { ?>
	<p class="ty-error-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("aps_no_payment_option", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 !</p>
<?php }
}
}
}
