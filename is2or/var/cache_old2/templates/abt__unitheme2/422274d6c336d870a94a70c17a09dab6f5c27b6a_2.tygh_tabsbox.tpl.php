<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:11
  from 'tygh:common/tabsbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafab32fc22_18198593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422274d6c336d870a94a70c17a09dab6f5c27b6a' => 
    array (
      0 => 'common/tabsbox.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/simple_scroller_init.tpl' => 2,
  ),
))) {
function content_69afafab32fc22_18198593 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('active_tab')) {?>
    <?php $_smarty_tpl->assign('active_tab', $_REQUEST['selected_section'], false, NULL);
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabsbox:ab__tabs_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('navigation')['tabs'] || $_smarty_tpl->getValue('navigation')[$_smarty_tpl->getValue('grid')['grid_id']]) {?>
    <?php $_smarty_tpl->assign('empty_tab_ids', $_smarty_tpl->getSmarty()->getModifierCallback('empty_tabs')($_smarty_tpl->getValue('content')), false, NULL);?>
    <?php $_smarty_tpl->assign('_tabs', false, false, NULL);?>
    <?php $_smarty_tpl->assign('abt__show_in_tabs', $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('grid')['abt__ut2_show_blocks_in_tabs'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITHOUT_LAZY_LOAD"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITH_LAZY_LOAD"))), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('top_order_actions')) {
echo $_smarty_tpl->getValue('top_order_actions');
}?>

    <?php $_smarty_tpl->assign('id', "simple_products_scroller_".((string)$_smarty_tpl->getValue('grid')['grid_id']), false, NULL);?>
    <?php $_smarty_tpl->assign('elements_to_scroll', 1, false, NULL);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/tabs.js"), $_smarty_tpl);?>


    <div class="ty-tabs cm-j-tabs<?php if ($_smarty_tpl->getValue('track')) {?> cm-track<?php }?> <?php if ($_smarty_tpl->getValue('abt__show_in_tabs')) {?>cm-j-tabs-disable-convertation<?php }?> ut2-scroll-container" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php if ($_smarty_tpl->getValue('abt__show_in_tabs')) {?><ul class="ty-tabs__list ut2-scroll-content"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')[$_smarty_tpl->getValue('grid')['grid_id']], 'tab', false, 'key', 'tabs', array (
));
$foreach80DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab')->key => $_smarty_tpl->getVariable('tab')->value) {
$foreach80DoElse = false;
$_smarty_tpl->assign('key', $_smarty_tpl->getVariable('tab')->key);
$foreach80Backup = clone $_smarty_tpl->getVariable('tab');
if (((!$_smarty_tpl->getValue('tabs_section') && !$_smarty_tpl->getValue('tab')['section']) || ($_smarty_tpl->getValue('tabs_section') == $_smarty_tpl->getValue('tab')['section'])) && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('empty_tab_ids')) && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('key'),'abt__ut2_grid_tab') !== false) {
if (!$_smarty_tpl->getValue('active_tab')) {
$_smarty_tpl->assign('active_tab', $_smarty_tpl->getValue('key'), false, NULL);
}
$_smarty_tpl->assign('_tabs', true, false, NULL);?><li id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
" data-block="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['block']), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('abt__show_in_tabs')) {?>abt__ut2_grid_tabs <?php }?>ty-tabs__item<?php if ($_smarty_tpl->getValue('tab')['js']) {?> cm-js<?php } elseif ($_smarty_tpl->getValue('tab')['ajax']) {?> cm-js<?php if ($_smarty_tpl->getValue('key') != $_smarty_tpl->getValue('active_tab')) {?> cm-ajax<?php }
}
if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('active_tab')) {?> active<?php }?> ut2-scroll-item"><span class="ty-tabs__span"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['title']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getVariable('tab')->key == 'discussion' && $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] > 0) {?> <bdi><i class="ut2-ti-<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('tab')->key), ENT_QUOTES, 'UTF-8');?>
"></i><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }?></span></li><?php }
$_smarty_tpl->setVariable('tab', $foreach80Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php } else { ?><ul class="ty-tabs__list ut2-scroll-content" <?php if ($_smarty_tpl->getValue('tabs_section')) {?>id="tabs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabs_section')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['tabs'], 'tab', false, 'key', 'tabs', array (
));
$foreach81DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab')->key => $_smarty_tpl->getVariable('tab')->value) {
$foreach81DoElse = false;
$_smarty_tpl->assign('key', $_smarty_tpl->getVariable('tab')->key);
$foreach81Backup = clone $_smarty_tpl->getVariable('tab');
if (((!$_smarty_tpl->getValue('tabs_section') && !$_smarty_tpl->getValue('tab')['section']) || ($_smarty_tpl->getValue('tabs_section') == $_smarty_tpl->getValue('tab')['section'])) && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('empty_tab_ids'))) {
if (!$_smarty_tpl->getValue('active_tab')) {
$_smarty_tpl->assign('active_tab', $_smarty_tpl->getValue('key'), false, NULL);
}
$_smarty_tpl->assign('_tabs', true, false, NULL);?><li id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
" class="ty-tabs__item<?php if ($_smarty_tpl->getValue('tab')['js']) {?> cm-js<?php } elseif ($_smarty_tpl->getValue('tab')['ajax']) {?> cm-js cm-ajax<?php }
if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('active_tab')) {?> active<?php }?> ut2-scroll-item"><a class="ty-tabs__a" <?php if ($_smarty_tpl->getValue('tab')['href']) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('tab')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['title']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
if ($_smarty_tpl->getVariable('tab')->key == "discussion" && $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] > 0) {?>&nbsp;<span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->getVariable('tab')->key == "product_reviews" && $_smarty_tpl->getValue('product')['product_reviews_count']) {?>&nbsp;<span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_reviews_count']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
}?></a></li><?php }
$_smarty_tpl->setVariable('tab', $foreach81Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php }?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button></div>

    <?php if ($_smarty_tpl->getValue('_tabs')) {?>
        <div class="cm-tabs-content ty-tabs__content clearfix"<?php if (!$_smarty_tpl->getValue('abt__show_in_tabs')) {?> id="tabs_content"<?php }?>>
            <?php echo $_smarty_tpl->getValue('content');?>

        </div>
    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>$_smarty_tpl->getValue('elements_to_scroll')), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('onclick')) {?>
        <?php echo '<script'; ?>
>
            var hndl = <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

            'tabs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabs_section')), ENT_QUOTES, 'UTF-8');?>
': <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('onclick')), ENT_QUOTES, 'UTF-8');?>

            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

        <?php echo '</script'; ?>
>
    <?php }
} else { ?>
    <?php echo $_smarty_tpl->getValue('content');?>

<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabsbox:ab__tabs_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/tabsbox.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/tabsbox.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('active_tab')) {?>
    <?php $_smarty_tpl->assign('active_tab', $_REQUEST['selected_section'], false, NULL);
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabsbox:ab__tabs_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('navigation')['tabs'] || $_smarty_tpl->getValue('navigation')[$_smarty_tpl->getValue('grid')['grid_id']]) {?>
    <?php $_smarty_tpl->assign('empty_tab_ids', $_smarty_tpl->getSmarty()->getModifierCallback('empty_tabs')($_smarty_tpl->getValue('content')), false, NULL);?>
    <?php $_smarty_tpl->assign('_tabs', false, false, NULL);?>
    <?php $_smarty_tpl->assign('abt__show_in_tabs', $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('grid')['abt__ut2_show_blocks_in_tabs'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITHOUT_LAZY_LOAD"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Abt_unitheme2\\BlockInTabsTypes::TABS_WITH_LAZY_LOAD"))), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('top_order_actions')) {
echo $_smarty_tpl->getValue('top_order_actions');
}?>

    <?php $_smarty_tpl->assign('id', "simple_products_scroller_".((string)$_smarty_tpl->getValue('grid')['grid_id']), false, NULL);?>
    <?php $_smarty_tpl->assign('elements_to_scroll', 1, false, NULL);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/tabs.js"), $_smarty_tpl);?>


    <div class="ty-tabs cm-j-tabs<?php if ($_smarty_tpl->getValue('track')) {?> cm-track<?php }?> <?php if ($_smarty_tpl->getValue('abt__show_in_tabs')) {?>cm-j-tabs-disable-convertation<?php }?> ut2-scroll-container" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php if ($_smarty_tpl->getValue('abt__show_in_tabs')) {?><ul class="ty-tabs__list ut2-scroll-content"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')[$_smarty_tpl->getValue('grid')['grid_id']], 'tab', false, 'key', 'tabs', array (
));
$foreach82DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab')->key => $_smarty_tpl->getVariable('tab')->value) {
$foreach82DoElse = false;
$_smarty_tpl->assign('key', $_smarty_tpl->getVariable('tab')->key);
$foreach82Backup = clone $_smarty_tpl->getVariable('tab');
if (((!$_smarty_tpl->getValue('tabs_section') && !$_smarty_tpl->getValue('tab')['section']) || ($_smarty_tpl->getValue('tabs_section') == $_smarty_tpl->getValue('tab')['section'])) && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('empty_tab_ids')) && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('key'),'abt__ut2_grid_tab') !== false) {
if (!$_smarty_tpl->getValue('active_tab')) {
$_smarty_tpl->assign('active_tab', $_smarty_tpl->getValue('key'), false, NULL);
}
$_smarty_tpl->assign('_tabs', true, false, NULL);?><li id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
" data-block="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['block']), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('abt__show_in_tabs')) {?>abt__ut2_grid_tabs <?php }?>ty-tabs__item<?php if ($_smarty_tpl->getValue('tab')['js']) {?> cm-js<?php } elseif ($_smarty_tpl->getValue('tab')['ajax']) {?> cm-js<?php if ($_smarty_tpl->getValue('key') != $_smarty_tpl->getValue('active_tab')) {?> cm-ajax<?php }
}
if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('active_tab')) {?> active<?php }?> ut2-scroll-item"><span class="ty-tabs__span"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['title']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getVariable('tab')->key == 'discussion' && $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] > 0) {?> <bdi><i class="ut2-ti-<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('tab')->key), ENT_QUOTES, 'UTF-8');?>
"></i><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }?></span></li><?php }
$_smarty_tpl->setVariable('tab', $foreach82Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php } else { ?><ul class="ty-tabs__list ut2-scroll-content" <?php if ($_smarty_tpl->getValue('tabs_section')) {?>id="tabs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabs_section')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['tabs'], 'tab', false, 'key', 'tabs', array (
));
$foreach83DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab')->key => $_smarty_tpl->getVariable('tab')->value) {
$foreach83DoElse = false;
$_smarty_tpl->assign('key', $_smarty_tpl->getVariable('tab')->key);
$foreach83Backup = clone $_smarty_tpl->getVariable('tab');
if (((!$_smarty_tpl->getValue('tabs_section') && !$_smarty_tpl->getValue('tab')['section']) || ($_smarty_tpl->getValue('tabs_section') == $_smarty_tpl->getValue('tab')['section'])) && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('empty_tab_ids'))) {
if (!$_smarty_tpl->getValue('active_tab')) {
$_smarty_tpl->assign('active_tab', $_smarty_tpl->getValue('key'), false, NULL);
}
$_smarty_tpl->assign('_tabs', true, false, NULL);?><li id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
" class="ty-tabs__item<?php if ($_smarty_tpl->getValue('tab')['js']) {?> cm-js<?php } elseif ($_smarty_tpl->getValue('tab')['ajax']) {?> cm-js cm-ajax<?php }
if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('active_tab')) {?> active<?php }?> ut2-scroll-item"><a class="ty-tabs__a" <?php if ($_smarty_tpl->getValue('tab')['href']) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('tab')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['title']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
if ($_smarty_tpl->getVariable('tab')->key == "discussion" && $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] > 0) {?>&nbsp;<span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->getVariable('tab')->key == "product_reviews" && $_smarty_tpl->getValue('product')['product_reviews_count']) {?>&nbsp;<span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_reviews_count']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
}?></a></li><?php }
$_smarty_tpl->setVariable('tab', $foreach83Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php }?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button></div>

    <?php if ($_smarty_tpl->getValue('_tabs')) {?>
        <div class="cm-tabs-content ty-tabs__content clearfix"<?php if (!$_smarty_tpl->getValue('abt__show_in_tabs')) {?> id="tabs_content"<?php }?>>
            <?php echo $_smarty_tpl->getValue('content');?>

        </div>
    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>$_smarty_tpl->getValue('elements_to_scroll')), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('onclick')) {?>
        <?php echo '<script'; ?>
>
            var hndl = <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

            'tabs_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tabs_section')), ENT_QUOTES, 'UTF-8');?>
': <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('onclick')), ENT_QUOTES, 'UTF-8');?>

            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

        <?php echo '</script'; ?>
>
    <?php }
} else { ?>
    <?php echo $_smarty_tpl->getValue('content');?>

<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabsbox:ab__tabs_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
