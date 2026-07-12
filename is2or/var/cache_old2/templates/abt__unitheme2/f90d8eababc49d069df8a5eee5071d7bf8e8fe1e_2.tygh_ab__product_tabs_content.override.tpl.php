<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa883d55_05438272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90d8eababc49d069df8a5eee5071d7bf8e8fe1e' => 
    array (
      0 => 'addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaa883d55_05438272 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/tabs';
\Tygh\Languages\Helper::preloadLangVars(array('ab__smc.more','ab__smc.less','ab__smc.more','ab__smc.less'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'))))) {?><div id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" data-ab-smc-tab-hide="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('implode')('|',$_smarty_tpl->getValue('tab')['ab__smc_hide_content'])), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-more="<?php echo (($tmp = $_smarty_tpl->getValue('tab')['ab__smc_show_more'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.more", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
"data-ab-smc-less="<?php echo (($tmp = $_smarty_tpl->getValue('tab')['ab__smc_show_less'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.less", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
"data-ab-smc-height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__smc_height']), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-tab-override-h="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__smc_override']), ENT_QUOTES, 'UTF-8');?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('product_details_in_tab') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="tab-list-title" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'))))) {?><div id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" data-ab-smc-tab-hide="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('implode')('|',$_smarty_tpl->getValue('tab')['ab__smc_hide_content'])), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-more="<?php echo (($tmp = $_smarty_tpl->getValue('tab')['ab__smc_show_more'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.more", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
"data-ab-smc-less="<?php echo (($tmp = $_smarty_tpl->getValue('tab')['ab__smc_show_less'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.less", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
"data-ab-smc-height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__smc_height']), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-tab-override-h="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__smc_override']), ENT_QUOTES, 'UTF-8');?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('product_details_in_tab') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="tab-list-title" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));?>
</div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
