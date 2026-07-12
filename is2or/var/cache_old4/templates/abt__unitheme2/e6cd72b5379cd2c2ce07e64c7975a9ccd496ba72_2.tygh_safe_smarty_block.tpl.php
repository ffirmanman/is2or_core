<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:blocks/safe_smarty_block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a013de6e8_59176241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6cd72b5379cd2c2ce07e64c7975a9ccd496ba72' => 
    array (
      0 => 'blocks/safe_smarty_block.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a013de6e8_59176241 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('no_wrap')) {?><div class="ty-wysiwyg-content" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"block:content:".((string)$_smarty_tpl->getValue('block')['block_id']),'phrase'=>$_smarty_tpl->getValue('content'),'need_render'=>true), $_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_type']), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo $_smarty_tpl->getSmarty()->getFunctionHandler('safe_eval_string')->handle(array('var'=>$_smarty_tpl->getValue('content')), $_smarty_tpl);
if (!$_smarty_tpl->getValue('no_wrap')) {?></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/safe_smarty_block.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/safe_smarty_block.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('no_wrap')) {?><div class="ty-wysiwyg-content" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"block:content:".((string)$_smarty_tpl->getValue('block')['block_id']),'phrase'=>$_smarty_tpl->getValue('content'),'need_render'=>true), $_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_type']), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo $_smarty_tpl->getSmarty()->getFunctionHandler('safe_eval_string')->handle(array('var'=>$_smarty_tpl->getValue('content')), $_smarty_tpl);
if (!$_smarty_tpl->getValue('no_wrap')) {?></div><?php }
}
}
}
