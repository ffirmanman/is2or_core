<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:38
  from 'tygh:views/block_manager/render/container.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fece4a76_44141615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9141c054b3443b50bc683ffe7b13896ef116671e' => 
    array (
      0 => 'views/block_manager/render/container.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/container.tpl' => 1,
  ),
))) {
function content_69fb49fece4a76_44141615 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/block_manager/render';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:frontend_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && $_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->renderSubTemplate("backend:views/block_manager/frontend_render/container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <div class="<?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fixed") {?>container-fluid<?php } else { ?>container<?php }
if (mb_strtolower((string) $_smarty_tpl->getValue('container')['position'], 'UTF-8') != "header") {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['user_class']), ENT_QUOTES, 'UTF-8');
}?>">
            <?php echo $_smarty_tpl->getValue('content');?>

        </div>
    <?php }?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "container_user_class_".((string)(mb_strtolower((string) $_smarty_tpl->getValue('container')['position'], 'UTF-8'))), null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['user_class']), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:frontend_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
