<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:40
  from 'tygh:blocks/html_block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaac0d0a097_25927660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7734dd2720f7b2bb904b499e43473b63e3291df' => 
    array (
      0 => 'blocks/html_block.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69adaac0d0a097_25927660 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-wysiwyg-content" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"block:content:".((string)$_smarty_tpl->getValue('block')['block_id']),'input_type'=>"wysiwyg"), $_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_type']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('content');?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/html_block.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/html_block.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-wysiwyg-content" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"block:content:".((string)$_smarty_tpl->getValue('block')['block_id']),'input_type'=>"wysiwyg"), $_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['object_type']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('content');?>
</div><?php }
}
}
