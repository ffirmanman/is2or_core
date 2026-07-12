<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:31
  from 'tygh:views/block_manager/render/grid.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9473703882_63102958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd34ae6e7eabcdccb7a0c1996ba85061588ef4b70' => 
    array (
      0 => 'views/block_manager/render/grid.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/grid.tpl' => 1,
    'tygh:views/block_manager/extract_nested_forms.tpl' => 1,
  ),
))) {
function content_69ad9473703882_63102958 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/block_manager/render';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && $_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
    <?php $_smarty_tpl->renderSubTemplate("backend:views/block_manager/frontend_render/grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fixed") {?>
        <?php if ($_smarty_tpl->getValue('parent_grid')['width'] > 0) {?>
            <?php $_smarty_tpl->assign('fluid_width', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_grid_fluid_width')($_smarty_tpl->getValue('layout_data')['width'],$_smarty_tpl->getValue('parent_grid')['width'],$_smarty_tpl->getValue('grid')['width']), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('fluid_width', $_smarty_tpl->getValue('grid')['width'], false, NULL);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('grid')['status'] == "A" && $_smarty_tpl->getValue('content')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"grid:abt__content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('grid')['alpha']) {?><div class="<?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fixed") {?>row-fluid<?php } else { ?>row<?php }?>"><?php }?>
            <?php $_smarty_tpl->assign('width', (($tmp = $_smarty_tpl->getValue('fluid_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('grid')['width'] ?? null : $tmp), false, NULL);?>
            <div class="span<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('grid')['offset']) {?>offset<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['offset']), ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['user_class']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['abt__ut2_padding']), ENT_QUOTES, 'UTF-8');?>
" >
                <?php if ($_smarty_tpl->getValue('grid')['wrapper']) {?>

                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/extract_nested_forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wrapper'=>$_smarty_tpl->getValue('grid')['wrapper'],'content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>

                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('grid')['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('content')), (int) 0, $_smarty_current_dir);
?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getValue('content');?>

                <?php }?>
            </div>
        <?php if ($_smarty_tpl->getValue('grid')['omega']) {?></div><?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"grid:abt__content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
}
}
}
