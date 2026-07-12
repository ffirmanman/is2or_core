<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:views/block_manager/frontend_render/block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fb6b0c92_62440974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595c3e31785d3fbf28661d5db35bc47f4e3296ee' => 
    array (
      0 => 'views/block_manager/frontend_render/block.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/components/block_menu.tpl' => 1,
  ),
))) {
function content_69fb49fb6b0c92_62440974 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager/frontend_render';
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
    <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && $_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->assign('tag', (($tmp = $_smarty_tpl->getValue('tag') ?? null)===null||$tmp==='' ? "div" ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('is_clearfix_class', ((($tmp = $_smarty_tpl->getValue('is_clearfix') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) ? "clearfix" : '', false, NULL);?>
        <<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')), ENT_QUOTES, 'UTF-8');?>
 class="<?php if ($_smarty_tpl->getValue('block')['status'] === "D") {?>bm-block-manager__block--disabled<?php }?>
            bm-block-manager__block bm-block-manager__block--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location_data')['dispatch']), ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
                bm-block-manager__block--draggable
            <?php }?>
            <?php if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}?>
            <?php if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> ty-float-right
            <?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> ty-float-left<?php }?>"
            data-ca-block-manager-snapping-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('snapping_id')), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->getValue('block')['snapping_id']) {?> id="snapping_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <?php $_smarty_tpl->renderSubTemplate("backend:views/block_manager/frontend_render/components/block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <div class="bm-block-manager__block-content <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('is_clearfix_class')), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getValue('content');?>

            </div>
        <?php if ($_smarty_tpl->getValue('block')['snapping_id']) {?><!--snapping_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--><?php }?></<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')), ENT_QUOTES, 'UTF-8');?>
>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getValue('content');?>

    <?php }
}
}
}
