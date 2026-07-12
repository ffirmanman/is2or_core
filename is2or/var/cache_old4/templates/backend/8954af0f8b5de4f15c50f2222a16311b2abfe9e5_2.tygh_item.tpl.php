<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:12
  from 'tygh:views/storefronts/components/picker/item.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb552434bf31_24621352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8954af0f8b5de4f15c50f2222a16311b2abfe9e5' => 
    array (
      0 => 'views/storefronts/components/picker/item.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb552434bf31_24621352 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/storefronts/components/picker';
?><div class="object-picker__storefronts-main">
    <div class="object-picker__storefronts-name">
        <div class="object-picker__storefronts-name-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_pre')), ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_post')), ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }
}
