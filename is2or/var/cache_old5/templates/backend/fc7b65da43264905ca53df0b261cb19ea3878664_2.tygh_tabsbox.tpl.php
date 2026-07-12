<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:common/tabsbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee37cfec6_43846563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7b65da43264905ca53df0b261cb19ea3878664' => 
    array (
      0 => 'common/tabsbox.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ee37cfec6_43846563 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/tabs.js"), $_smarty_tpl);
if (!$_smarty_tpl->getValue('active_tab')) {
$_smarty_tpl->assign('active_tab', $_REQUEST['selected_section'], false, NULL);
}
$_smarty_tpl->assign('empty_tab_ids', $_smarty_tpl->getSmarty()->getModifierCallback('empty_tabs')($_smarty_tpl->getValue('content'),$_smarty_tpl->getValue('navigation')['tabs']), false, NULL);
$_smarty_tpl->assign('show_tabs_navigation', (($tmp = $_smarty_tpl->getValue('show_tabs_navigation') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('tabs_count', 0, false, NULL);
$_smarty_tpl->assign('has_ajax_tab', false, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['tabs'], 'navigation_tab', false, 'navigation_tab_key');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('navigation_tab_key')->value => $_smarty_tpl->getVariable('navigation_tab')->value) {
$foreach13DoElse = false;
if ($_smarty_tpl->getValue('navigation_tab')['ajax']) {
$_smarty_tpl->assign('has_ajax_tab', true, false, NULL);
}
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('empty_tab_ids'), 'empty_tab_id');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('empty_tab_id')->value) {
$foreach14DoElse = false;
if ($_smarty_tpl->getValue('navigation_tab_key') === $_smarty_tpl->getValue('empty_tab_id')) {
$_smarty_tpl->assign('tabs_count', $_smarty_tpl->getValue('tabs_count')+1, false, NULL);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->assign('is_show_tab_items', ($_smarty_tpl->getValue('navigation')['tabs'] && ($_smarty_tpl->getValue('has_ajax_tab') || ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('navigation')['tabs'])-$_smarty_tpl->getValue('tabs_count')) > 1)), false, NULL);
$_smarty_tpl->assign('enable_fill', (($tmp = $_smarty_tpl->getValue('enable_fill') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('navigation')['tabs']) {
$_smarty_tpl->assign('with_conf', false, false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tab_items", null, null);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['tabs'], 'tab', false, 'key');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('tab')->value) {
$foreach15DoElse = false;
?>
        <?php if ((!$_smarty_tpl->getValue('tabs_section') || $_smarty_tpl->getValue('tabs_section') == $_smarty_tpl->getValue('tab')['section']) && ($_smarty_tpl->getValue('tab')['hidden'] || !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('empty_tab_ids')))) {?>
        <li id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_suffix')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('tab')['hidden'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>hidden <?php }
if ($_smarty_tpl->getValue('tab')['js']) {?>cm-js<?php } elseif ($_smarty_tpl->getValue('tab')['ajax']) {?>cm-js cm-ajax<?php if ($_smarty_tpl->getValue('tab')['ajax_onclick']) {?> cm-ajax-onclick<?php }
}
if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('active_tab')) {?> active<?php }?> <?php if ($_smarty_tpl->getValue('tab')['properties']) {?>extra-tab<?php }?>">
            <?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('active_tab')) {
echo $_smarty_tpl->getValue('active_tab_extra');
}?>

            <?php if ($_smarty_tpl->getValue('tab')['properties']) {?>
                <?php $_smarty_tpl->assign('with_conf', true, false, NULL);?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-ajax-force hand icon-cog",'title'=>$_smarty_tpl->getValue('tab')['properties']['title'],'target_id'=>"content_properties_".((string)$_smarty_tpl->getValue('key')).((string)$_smarty_tpl->getValue('id_suffix')),'href'=>$_smarty_tpl->getValue('tab')['properties']['href']), true);?>

            <?php }?>

            <a <?php if ($_smarty_tpl->getValue('tab')['href']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('tab')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['title']), ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabs_navigation", 'tabs_navigation', null);?>
<div class="cm-j-tabs<?php if ($_smarty_tpl->getValue('track')) {?> cm-track<?php }?> tabs <?php if (!$_smarty_tpl->getValue('is_show_tab_items')) {?>hidden<?php }?> <?php if ($_smarty_tpl->getValue('with_conf')) {?>tabs-with-conf<?php }?> <?php if ($_smarty_tpl->getValue('enable_fill')) {?>tabs--enable-fill<?php }?> tabs--count-<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('navigation')['tabs'])), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta_tabs')), ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tab_items');?>

    </ul>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('show_tabs_navigation')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabs_navigation');?>

<?php }?>
<div class="cm-tabs-content">
    <?php echo $_smarty_tpl->getValue('content');?>

</div>
<?php } else { ?>
    <?php echo $_smarty_tpl->getValue('content');?>

<?php }
if (!$_smarty_tpl->getValue('show_tabs_navigation')) {?>
        <?php $_smarty_tpl->assign('tabs_navigation', $_smarty_tpl->getValue('tabs_navigation'), false, 2);
}
}
}
