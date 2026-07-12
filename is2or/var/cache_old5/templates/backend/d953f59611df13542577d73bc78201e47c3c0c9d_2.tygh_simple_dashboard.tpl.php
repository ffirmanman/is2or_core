<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:views/index/components/simple_dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee35f3460_17035971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd953f59611df13542577d73bc78201e47c3c0c9d' => 
    array (
      0 => 'views/index/components/simple_dashboard.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl' => 5,
    'tygh:views/index/components/todo_section/todo_section.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_section.tpl' => 1,
    'tygh:common/daterange_picker.tpl' => 1,
  ),
))) {
function content_6a133ee35f3460_17035971 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:simple_dashboard"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="simple-dashboard"
        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && $_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
            data-ca-block-manager="main"
            data-ca-block-manager-has-layout="0"
        <?php }?>
    id="simple_dashboard">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:simple_dashboard_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->getValue('custom_blocks_data')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::TOP_PANEL")],'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::TOP_PANEL"),'type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockTypes::BLOCK")), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/todo_section/todo_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->getValue('custom_blocks_data')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::HEADER")],'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::HEADER"),'type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockTypes::BLOCK")), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->getValue('custom_blocks_data')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::ONBOARDING")],'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::ONBOARDING"),'type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockTypes::BLOCK")), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->getValue('custom_blocks_data')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::CONTENT")],'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::CONTENT"),'type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockTypes::BLOCK")), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/analytics_section/analytics_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->getValue('custom_blocks_data')[$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::FOOTER")],'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockSections::FOOTER"),'type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("CustomBlockTypes::BLOCK")), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:simple_dashboard_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <!--simple_dashboard--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:simple_dashboard"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"dashboard_date_picker",'extra_class'=>"nav__actions-dashboard-date-picker pull-right",'data_url'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("index.index?storefront_id=".((string)$_smarty_tpl->getValue('storefront_id'))),'data_event'=>"ce.dashboard.daterange_picker",'result_ids'=>"simple_dashboard",'start_date'=>$_smarty_tpl->getValue('time_from'),'end_date'=>$_smarty_tpl->getValue('time_to'),'linked_calendars'=>false), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/dashboard/daterange_picker.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
