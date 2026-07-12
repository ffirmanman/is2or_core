<?php
/* Smarty version 5.4.3, created on 2026-03-10 07:40:50
  from 'tygh:addons/hybrid_auth/views/auth/loading.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afa0d2977d10_06310774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227e47bf93af72420cfe39eedf8a8ff4b0036150' => 
    array (
      0 => 'addons/hybrid_auth/views/auth/loading.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afa0d2977d10_06310774 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hybrid_auth/views/auth';
\Tygh\Languages\Helper::preloadLangVars(array('loading','hybrid_auth.connecting_provider','loading','hybrid_auth.connecting_provider'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><table width="100%" border="0">
	<tr>
		<td align="center" height="190px" valign="middle"><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/loading.gif" /></td>
	</tr>
	<tr>
		<td align="center"><br /><h3><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage());?>
...</h3><br /></td> 
	</tr>
	<tr>
		<td align="center">
			<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.connecting_provider", array("[provider]"=>$_smarty_tpl->getValue('provider')), $_smarty_tpl->getSmarty()->getLanguage());?>

		</td>
	</tr> 
</table>
<?php echo '<script'; ?>
 data-no-defer>
	setTimeout(function()<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

		window.location.href = window.location.href + "&redirect_to_idp=Y";
	<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
, 1000);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/views/auth/loading.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hybrid_auth/views/auth/loading.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><table width="100%" border="0">
	<tr>
		<td align="center" height="190px" valign="middle"><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/loading.gif" /></td>
	</tr>
	<tr>
		<td align="center"><br /><h3><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("loading", [], $_smarty_tpl->getSmarty()->getLanguage());?>
...</h3><br /></td> 
	</tr>
	<tr>
		<td align="center">
			<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.connecting_provider", array("[provider]"=>$_smarty_tpl->getValue('provider')), $_smarty_tpl->getSmarty()->getLanguage());?>

		</td>
	</tr> 
</table>
<?php echo '<script'; ?>
 data-no-defer>
	setTimeout(function()<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

		window.location.href = window.location.href + "&redirect_to_idp=Y";
	<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
, 1000);
<?php echo '</script'; ?>
><?php }
}
}
