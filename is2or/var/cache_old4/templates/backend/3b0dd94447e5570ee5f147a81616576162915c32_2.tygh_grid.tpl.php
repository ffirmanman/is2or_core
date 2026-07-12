<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:views/block_manager/render/grid.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb55329aaca8_74103252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0dd94447e5570ee5f147a81616576162915c32' => 
    array (
      0 => 'views/block_manager/render/grid.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/device_availability_attributes.tpl' => 1,
    'tygh:views/block_manager/components/device_icons.tpl' => 1,
  ),
))) {
function content_69fb55329aaca8_74103252 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager/render';
\Tygh\Languages\Helper::preloadLangVars(array('grid','add_grid_block','insert_grid','insert_block','grid_options','enable_or_disable_grid','delete_grid','editing_grid','insert_grid','insert_block','grid_options','delete_grid','on_off'));
?>
<div class="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('default_class') ?? null)===null||$tmp==='' ? "device-specific-block grid" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('grid')['status'] != "A") {?>grid-off<?php }?> grid_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['width']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('grid')['offset']) {?>prefix_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['offset']), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->getValue('grid')['alpha']) {?>alpha<?php }?> <?php if ($_smarty_tpl->getValue('grid')['omega']) {?>omega<?php }?> <?php if ($_smarty_tpl->getValue('grid')['content_align'] == $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\BlockManager\Grid::ALIGN_RIGHT")) {?>bm-right-align<?php } elseif ($_smarty_tpl->getValue('grid')['content_align'] == $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\BlockManager\Grid::ALIGN_LEFT")) {?>bm-left-align<?php } else { ?>bm-full-width<?php }?>"
     data-ca-status="<?php if ($_smarty_tpl->getValue('grid')['status'] != "A") {?>disabled<?php } else { ?>active<?php }?>"
     <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->getValue('grid')), (int) 0, $_smarty_current_dir);
?>
     id="grid_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['grid_id']), ENT_QUOTES, 'UTF-8');?>
"
>
    <?php echo $_smarty_tpl->getValue('content');?>

    <div class="bm-full-menu grid-control-menu bm-control-menu <?php if ($_smarty_tpl->getValue('grid')['width'] <= 2) {?>hidden keep-hidden<?php }?>">
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->getValue('grid'),'wrapper_class'=>"pull-right"), (int) 0, $_smarty_current_dir);
?>
        <?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fixed") {?>
            <?php if ($_smarty_tpl->getValue('parent_grid')['width'] > 0) {?>
                <?php $_smarty_tpl->assign('fluid_width', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_grid_fluid_width')($_smarty_tpl->getValue('layout_data')['width'],$_smarty_tpl->getValue('parent_grid')['width'],$_smarty_tpl->getValue('grid')['width']), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('fluid_width', $_smarty_tpl->getValue('grid')['width'], false, NULL);?>
            <?php }?>
        <?php }?>
        <h4 class="grid-control-title <?php if ($_smarty_tpl->getValue('grid')['width'] <= 2) {?>hidden<?php }?>">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('grid')['width'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->getValue('layout_data')['layout_width'] != "fixed" && $_smarty_tpl->getValue('fluid_width') > 0) {?>
                <small class="muted">(span <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('fluid_width')), ENT_QUOTES, 'UTF-8');?>
)</small>
            <?php }?>
        </h4>
        <?php if ($_smarty_tpl->getValue('container')['default'] == 1 || $_smarty_tpl->getValue('container')['has_displayable_content'] && !$_smarty_tpl->getValue('dynamic_object') || $_smarty_tpl->getValue('show_menu') || $_smarty_tpl->getValue('container')['linked_to_default'] != "Y") {?>
                        <div class="grid-control-menu-actions">
                <div class="btn-group action">
                    <a href="#" class="dropdown-toggle cm-tooltip" data-toggle="dropdown" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_grid_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"plus"), $_smarty_tpl);?>
</a>
                    <ul class="dropdown-menu droptop">
                        <li><a href="" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                        <li><a href="" class="cm-action bm-action-add-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                    </ul>
                </div>
                <div class="cm-action bm-action-properties cm-tooltip action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("grid_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"cog"), $_smarty_tpl);?>

                </div>
                <div class="cm-action bm-action-switch cm-tooltip action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("enable_or_disable_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"off"), $_smarty_tpl);?>

                </div>
                <div class="cm-action bm-action-delete cm-tooltip pull-right extra action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"trash"), $_smarty_tpl);?>

                </div>
            </div>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->getValue('container')['default'] == 1 || $_smarty_tpl->getValue('container')['has_displayable_content'] && !$_smarty_tpl->getValue('dynamic_object') || $_smarty_tpl->getValue('show_menu') || $_smarty_tpl->getValue('container')['linked_to_default'] != "Y") {?>
        <div class="bm-compact-menu <?php if ($_smarty_tpl->getValue('grid')['width'] > 2) {?>hidden keep-hidden<?php }?> grid-control-menu bm-control-menu">
            <div class="action-showmenu">
                <div class="btn-group action">
                    <a href="#" class="dropdown-toggle cm-tooltip" data-toggle="dropdown" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"align_justify"), $_smarty_tpl);?>
</a>
                        <ul class="dropdown-menu droptop">
                            <li><a class="cm-action bm-action-add-grid hand"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                            <li><a class="cm-action bm-action-add-block hand"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_block", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                            <li><a class="cm-action bm-action-properties hand"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("grid_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                            <li><a class="cm-action bm-action-delete hand"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                            <li><a class="cm-action bm-action-switch hand"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("on_off", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                        </ul>
                </div>

            </div>
        </div>
    <?php }?>
<!--grid_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid')['grid_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->getValue('grid')['clear']) {?>
    <div class="clearfix"></div>
<?php }
}
}
