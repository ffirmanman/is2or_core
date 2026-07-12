<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:08
  from 'tygh:views/block_manager/render/block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa82a42f9_18538399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6124801be552ca5b1915af9f3d679a32f7f930fe' => 
    array (
      0 => 'views/block_manager/render/block.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/block.tpl' => 1,
  ),
))) {
function content_69afafa82a42f9_18538399 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/block_manager/render';
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && $_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->renderSubTemplate("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('block')['user_class'] || $_smarty_tpl->getValue('content_alignment') == 'RIGHT' || $_smarty_tpl->getValue('content_alignment') == 'LEFT' || $_smarty_tpl->getValue('block')['snapping_id']) {?>
            <div class="<?php if ($_smarty_tpl->getValue('block')['user_class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->getValue('content_alignment') == 'RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == 'LEFT') {?>ty-float-left<?php }?>"<?php if ($_smarty_tpl->getValue('block')['snapping_id']) {?> id="snapping_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php }?>
        <?php echo $_smarty_tpl->getValue('content');?>

        <?php if ($_smarty_tpl->getValue('block')['user_class'] || $_smarty_tpl->getValue('content_alignment') == 'RIGHT' || $_smarty_tpl->getValue('content_alignment') == 'LEFT' || $_smarty_tpl->getValue('block')['snapping_id']) {?>
            <?php if ($_smarty_tpl->getValue('block')['snapping_id']) {?><!--snapping_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
        <?php }?>
    <?php }
}
}
}
