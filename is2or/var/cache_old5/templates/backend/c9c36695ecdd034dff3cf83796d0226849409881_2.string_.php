<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'string:<p><img src="design/backend/media/images/custom_blocks/custom_blocks_1.svg" width="150" height="150" style="width: 150px; height: 150px; float: right; margin: 0px 0px 10px 10px;"></p><h4>1. Set up your profile</h4><p>Upload your logo, tell the customers about yourself, and leave your contact and legal information.</p><p><a href="{'profiles.update'|fn_url}" class="btn">Go to your profile</a></p>' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee36ff462_34417617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ee36ff462_34417617 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '.';
?><p><img src="design/backend/media/images/custom_blocks/custom_blocks_1.svg" width="150" height="150" style="width: 150px; height: 150px; float: right; margin: 0px 0px 10px 10px;"></p><h4>1. Set up your profile</h4><p>Upload your logo, tell the customers about yourself, and leave your contact and legal information.</p><p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('profiles.update')), ENT_QUOTES, 'UTF-8');?>
" class="btn">Go to your profile</a></p><?php }
}
