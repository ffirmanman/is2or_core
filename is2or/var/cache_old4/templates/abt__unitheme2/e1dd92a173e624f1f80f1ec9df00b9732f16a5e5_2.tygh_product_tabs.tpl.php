<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00a9f725_26246775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1dd92a173e624f1f80f1ec9df00b9732f16a5e5' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tabsbox.tpl' => 2,
  ),
))) {
function content_69fb4a00a9f725_26246775 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('product_details_in_tab', (($tmp = $_smarty_tpl->getValue('product_details_in_tab') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] ?? null : $tmp), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tabs'), 'tab', false, 'tab_id');
$foreach138DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab_id')->value => $_smarty_tpl->getVariable('tab')->value) {
$foreach138DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('tab')['show_in_popup'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('tab')['status'] === "A") {?>
            <?php $_smarty_tpl->assign('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->getValue('tab_id')), false, NULL);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'), null, null);?>
                <?php if ($_smarty_tpl->getValue('tab')['tab_type'] === "B") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('tab')['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->getValue('tab')['tab_type'] === "T") {?>
                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tab')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->getValue('tab')['html_id']), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture')))) {?> data-ca-accordion-is-active-scroll-to-elm=1<?php }?>><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));?>
</div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox_content", null, null);?>
    <?php if ($_smarty_tpl->getValue('product_details_in_tab') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox')), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('product_details_in_tab', (($tmp = $_smarty_tpl->getValue('product_details_in_tab') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] ?? null : $tmp), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tabs'), 'tab', false, 'tab_id');
$foreach139DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab_id')->value => $_smarty_tpl->getVariable('tab')->value) {
$foreach139DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('tab')['show_in_popup'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('tab')['status'] === "A") {?>
            <?php $_smarty_tpl->assign('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->getValue('tab_id')), false, NULL);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'), null, null);?>
                <?php if ($_smarty_tpl->getValue('tab')['tab_type'] === "B") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('tab')['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->getValue('tab')['tab_type'] === "T") {?>
                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tab')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->getValue('tab')['html_id']), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture')))) {?> data-ca-accordion-is-active-scroll-to-elm=1<?php }?>><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));?>
</div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox_content", null, null);?>
    <?php if ($_smarty_tpl->getValue('product_details_in_tab') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox')), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
