<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:11
  from 'tygh:addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafab029354_19869890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96b1f1a0d09d3737e5c32f2d910c532d2b0357b3' => 
    array (
      0 => 'addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__seo_product_tabs/views/components/tabs_content.tpl' => 2,
  ),
))) {
function content_69afafab029354_19869890 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_product_tabs/views/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO') && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
    <?php $_smarty_tpl->assign('tabs', (($tmp = $_smarty_tpl->getValue('tabs') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('ab__spt_tabs') ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('tabs')) {
$_smarty_tpl->assign('tabs_counter', 0, false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__spt_tabs_panel_items", null, null);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tabs'), 'tab');
$foreach78DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab')->value) {
$foreach78DoElse = false;
if ($_smarty_tpl->getValue('tab')['show_in_popup'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('tab')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('ObjectStatuses::ACTIVE') && $_smarty_tpl->getValue('tab')['ab__spt_add_tab_to_floating_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {
$_smarty_tpl->assign('capture_name', "ab__tab_content".((string)$_smarty_tpl->getValue('tab')['tab_id']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_product_tabs/views/components/tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabs'=>$_smarty_tpl->getValue('tabs'),'tab_id'=>$_smarty_tpl->getValue('tab')['tab_id']), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name')))) {
$_smarty_tpl->assign('tabs_counter', $_smarty_tpl->getValue('tabs_counter')+1, false, NULL);?><li class="ab-spt-anchors__item"><span data-ab-spt-target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:anchors__item_post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('tab')['html_id'],array('discussion','product_reviews'))) {
$_smarty_tpl->assign('reviews_count', (($tmp = $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['product_reviews_count'] ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('reviews_count') > 0) {?>&nbsp;(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('reviews_count')), ENT_QUOTES, 'UTF-8');?>
)<?php }
}?>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:anchors__item_post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                </span>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__spt_tabs_anchors", null, null);?>
                <?php if ($_smarty_tpl->getValue('tabs_counter') > 1) {?>
                    <ul class="ab-spt-anchors__wrap">
                        <li class="ab-spt-anchors__item">
                            <span class="active cm-external-click" data-ab-spt-target="tygh_main_container"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__spt.all_about_product', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                        </li>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__spt_tabs_panel_items');?>

                    </ul>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__spt_tabs_anchors'))) {?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "floating_panel_classes", null, null);?>
                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:panel_wrapper_classes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        ab-spt-floating-panel ab-spt-floating-position-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position']), ENT_QUOTES, 'UTF-8');?>

                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:panel_wrapper_classes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                <?php if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'after_h1') {?>
                <div id="ab-spt-heading-navigation-tab" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position']), ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                    <div id="ab-spt-floating-placeholder"></div>

                    <div class="<?php echo htmlspecialchars((string) (preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'floating_panel_classes'))), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:floating_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <div class="container-fluid<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('runtime')['layout']['theme_name'],'abt__') !== false) {?>-row<?php }?>">
                                <div class="row-fluid">
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__spt_tabs_anchors');?>

                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:floating_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                <?php if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'after_h1') {?>
                </div>
                <?php }?>
            <?php }?>
        <?php }?>
    
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO') && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
    <?php $_smarty_tpl->assign('tabs', (($tmp = $_smarty_tpl->getValue('tabs') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('ab__spt_tabs') ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('tabs')) {
$_smarty_tpl->assign('tabs_counter', 0, false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__spt_tabs_panel_items", null, null);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tabs'), 'tab');
$foreach79DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab')->value) {
$foreach79DoElse = false;
if ($_smarty_tpl->getValue('tab')['show_in_popup'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('tab')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('ObjectStatuses::ACTIVE') && $_smarty_tpl->getValue('tab')['ab__spt_add_tab_to_floating_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {
$_smarty_tpl->assign('capture_name', "ab__tab_content".((string)$_smarty_tpl->getValue('tab')['tab_id']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_product_tabs/views/components/tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabs'=>$_smarty_tpl->getValue('tabs'),'tab_id'=>$_smarty_tpl->getValue('tab')['tab_id']), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name')))) {
$_smarty_tpl->assign('tabs_counter', $_smarty_tpl->getValue('tabs_counter')+1, false, NULL);?><li class="ab-spt-anchors__item"><span data-ab-spt-target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:anchors__item_post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('tab')['html_id'],array('discussion','product_reviews'))) {
$_smarty_tpl->assign('reviews_count', (($tmp = $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['product_reviews_count'] ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('reviews_count') > 0) {?>&nbsp;(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('reviews_count')), ENT_QUOTES, 'UTF-8');?>
)<?php }
}?>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:anchors__item_post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                </span>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "ab__spt_tabs_anchors", null, null);?>
                <?php if ($_smarty_tpl->getValue('tabs_counter') > 1) {?>
                    <ul class="ab-spt-anchors__wrap">
                        <li class="ab-spt-anchors__item">
                            <span class="active cm-external-click" data-ab-spt-target="tygh_main_container"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__spt.all_about_product', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                        </li>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__spt_tabs_panel_items');?>

                    </ul>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__spt_tabs_anchors'))) {?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "floating_panel_classes", null, null);?>
                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:panel_wrapper_classes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        ab-spt-floating-panel ab-spt-floating-position-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position']), ENT_QUOTES, 'UTF-8');?>

                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:panel_wrapper_classes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                <?php if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'after_h1') {?>
                <div id="ab-spt-heading-navigation-tab" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position']), ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                    <div id="ab-spt-floating-placeholder"></div>

                    <div class="<?php echo htmlspecialchars((string) (preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'floating_panel_classes'))), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:floating_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <div class="container-fluid<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('runtime')['layout']['theme_name'],'abt__') !== false) {?>-row<?php }?>">
                                <div class="row-fluid">
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__spt_tabs_anchors');?>

                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__seo_product_tabs:floating_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                <?php if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'after_h1') {?>
                </div>
                <?php }?>
            <?php }?>
        <?php }?>
    
<?php }
}
}
}
