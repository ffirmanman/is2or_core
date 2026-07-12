<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:views/block_manager/render/container.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5532e3c4c0_94273642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bfc5b48819061be3a235af0cc9ae8f517666dba' => 
    array (
      0 => 'views/block_manager/render/container.tpl',
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
function content_69fb5532e3c4c0_94273642 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/block_manager/render';
\Tygh\Languages\Helper::preloadLangVars(array('set_custom_configuration','use_default_block_configuration','insert_grid','insert_grid','container_options','enable_or_disable_container'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="device-specific-block container container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['width']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('container')['uses_default_content']) {?>container-lock<?php }?> <?php if ($_smarty_tpl->getValue('container')['status'] != "A") {?>container-off<?php }?>"
        data-ca-status="<?php if ($_smarty_tpl->getValue('container')['status'] != "A") {?>disabled<?php } else { ?>active<?php }?>"
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->getValue('container')), (int) 0, $_smarty_current_dir);
?>
        id="container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['container_id']), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php if ($_smarty_tpl->getValue('container')['linked_message']) {?>
            <p>
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['linked_message']), ENT_QUOTES, 'UTF-8');?>

                <a class="cm-post" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['set_custom_config_url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("set_custom_configuration", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </p>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('container')['has_displayable_content']) {?>
            <?php echo $_smarty_tpl->getValue('content');?>

        <?php }?>
        
        <div class="clearfix"></div>
        <div class="grid-control-menu bm-control-menu">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->getValue('container'),'wrapper_class'=>"pull-right"), (int) 0, $_smarty_current_dir);
?>

            <h4 class="grid-control-title">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('container')['position'], [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php if ($_smarty_tpl->getValue('container')['can_be_reset_to_default']) {?>
                    <a class="cm-post" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['set_default_config_url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("use_default_block_configuration", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                <?php }?>
            </h4>

            <?php if ($_smarty_tpl->getValue('container')['has_displayable_content'] && !$_smarty_tpl->getValue('dynamic_object')) {?>
                <div class="grid-control-menu-actions">
                    <div class="btn-group action">
                    <a href="#" class="dropdown-toggle cm-tooltip" data-toggle="dropdown" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"plus"), $_smarty_tpl);?>
</a>
                        <ul class="dropdown-menu droptop">
                            <li><a href="#" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_grid", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
                        </ul>
                    </div>
                    <div class="cm-tooltip cm-action bm-action-properties action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("container_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"cog"), $_smarty_tpl);?>
</div>
                    <div class="cm-action bm-action-switch cm-tooltip action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("enable_or_disable_container", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"off"), $_smarty_tpl);?>
</div>
                </div>
            <?php }?>
        </div>
    <!--container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')['container_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<hr />
<?php }
}
