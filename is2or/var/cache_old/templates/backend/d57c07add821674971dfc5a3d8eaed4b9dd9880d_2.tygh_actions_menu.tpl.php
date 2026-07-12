<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:components/menu/actions_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94607e5326_84252654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd57c07add821674971dfc5a3d8eaed4b9dd9880d' => 
    array (
      0 => 'components/menu/actions_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tools.tpl' => 1,
  ),
))) {
function content_69ad94607e5326_84252654 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
\Tygh\Languages\Helper::preloadLangVars(array('actions.more'));
if ($_smarty_tpl->getValue('items')) {
$_smarty_tpl->assign('actions_count_threshold_xl', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['actions_menu']['count_threshold_xl'] ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('actions_count_threshold_xxl', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['actions_menu']['count_threshold_xxl'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('actions_count_threshold_xxxl', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['actions_menu']['count_threshold_xxxl'] ?? null)===null||$tmp==='' ? 7 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('icon_prefix', "icon-", false, NULL);
$_smarty_tpl->assign('icon_prefix_length', strlen((string) $_smarty_tpl->getValue('icon_prefix')), false, NULL);
$_smarty_tpl->assign('button_characters_threshold', 30, false, NULL);
$_smarty_tpl->assign('button_characters_mobile_threshold', 20, false, NULL);
$_smarty_tpl->assign('actions_menu_btn_group_class', "actions-menu__btn-group", false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > $_smarty_tpl->getValue('actions_count_threshold_xxxl')) {
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > $_smarty_tpl->getValue('actions_count_threshold_xxl')) {
$_smarty_tpl->assign('actions_menu_btn_group_class', "actions-menu__btn-group--xxxl", false, NULL);
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > $_smarty_tpl->getValue('actions_count_threshold_xl')) {
$_smarty_tpl->assign('actions_menu_btn_group_class', "actions-menu__btn-group--xxl", false, NULL);
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) > 0) {
$_smarty_tpl->assign('actions_menu_btn_group_class', "actions-menu__btn-group--xl", false, NULL);
}
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'item_key');
$_smarty_tpl->getVariable('item')->iteration = 0;
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach19DoElse = false;
$_smarty_tpl->getVariable('item')->iteration++;
$foreach19Backup = clone $_smarty_tpl->getVariable('item');
$_smarty_tpl->assign('item_text', (($tmp = $_smarty_tpl->getValue('item')['text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('item_key'), [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_title', (($tmp = $_smarty_tpl->getValue('item')['title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_class', "btn actions-menu__btn ".((string)$_smarty_tpl->getValue('item')['class'])." ".((string)$_smarty_tpl->getValue('item')['meta']), false, NULL);
if ($_smarty_tpl->getVariable('item')->iteration > 0) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." actions-menu__btn--visible-xl", false, NULL);
}
if ($_smarty_tpl->getVariable('item')->iteration > $_smarty_tpl->getValue('actions_count_threshold_xl')) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." actions-menu__btn--visible-xxl", false, NULL);
}
if ($_smarty_tpl->getVariable('item')->iteration > $_smarty_tpl->getValue('actions_count_threshold_xxl')) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." actions-menu__btn--visible-xxxl", false, NULL);
}
if ($_smarty_tpl->getVariable('item')->iteration > $_smarty_tpl->getValue('actions_count_threshold_xxxl')) {
continue 1;
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "item_text", "item_text_html", null);
if (mb_strlen((string) $_smarty_tpl->getValue('item_text'), 'UTF-8') > $_smarty_tpl->getValue('button_characters_mobile_threshold')) {?><span class="mobile-hidden"><?php echo $_smarty_tpl->getValue('item_text');?>
</span><span class="mobile-visible"><?php echo htmlspecialchars((string) ((($tmp = ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['text_mobile'],$_smarty_tpl->getValue('button_characters_mobile_threshold'),'...',true,true)) ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item_text'),$_smarty_tpl->getValue('button_characters_mobile_threshold'),'...',true,true)) ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_text')), ENT_QUOTES, 'UTF-8');?>
</span><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if (mb_strlen((string) $_smarty_tpl->getValue('item_text'), 'UTF-8') > $_smarty_tpl->getValue('button_characters_threshold')) {
$_smarty_tpl->assign('item_title', $_smarty_tpl->getValue('item_text'), false, NULL);
$_smarty_tpl->assign('item_text', ((string)(substr((string) $_smarty_tpl->getValue('item_text'), (int) 0, (int) $_smarty_tpl->getValue('button_characters_threshold'))))."...", false, NULL);
}
$_smarty_tpl->assign('item_icon', '', false, NULL);
if ($_smarty_tpl->getValue('item')['icon']) {
$_smarty_tpl->assign('item_icon', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['icon']), false, NULL);
if (substr((string) $_smarty_tpl->getValue('item_icon'), (int) 0, (int) $_smarty_tpl->getValue('icon_prefix_length')) !== $_smarty_tpl->getValue('icon_prefix')) {
$_smarty_tpl->assign('item_icon', ((string)$_smarty_tpl->getValue('icon_prefix')).((string)$_smarty_tpl->getValue('item_icon')), false, NULL);
}
}
if ($_smarty_tpl->getValue('item')['wrapper_class']) {?><span class="shift-left shift-right <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['wrapper_class']), ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>(($tmp = $_smarty_tpl->getValue('item')['type'] ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'href'=>(($tmp = $_smarty_tpl->getValue('item')['href'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'text'=>$_smarty_tpl->getValue('item_text_html'),'title'=>$_smarty_tpl->getValue('item_title'),'id'=>(($_smarty_tpl->getValue('item')['id']) ? ((string)$_smarty_tpl->getValue('item')['id'])."_primary" : ''),'class'=>$_smarty_tpl->getValue('item_class'),'dispatch'=>(($tmp = $_smarty_tpl->getValue('item')['dispatch'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'form'=>(($tmp = $_smarty_tpl->getValue('item')['form'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'method'=>(($tmp = $_smarty_tpl->getValue('item')['method'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target'=>(($tmp = $_smarty_tpl->getValue('item')['target'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target_id'=>(($tmp = $_smarty_tpl->getValue('item')['target_id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'process'=>(($tmp = $_smarty_tpl->getValue('item')['process'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'onclick'=>(($tmp = $_smarty_tpl->getValue('item')['onclick'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'raw'=>true,'icon'=>$_smarty_tpl->getValue('item_icon'),'icon_first'=>true,'data'=>(($tmp = $_smarty_tpl->getValue('item')['data'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), true);
if ($_smarty_tpl->getValue('item')['wrapper_class']) {?></span><?php }
$_smarty_tpl->setVariable('item', $foreach19Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'item_key', 'actions', array (
));
$_smarty_tpl->getVariable('item')->iteration = 0;
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach20DoElse = false;
$_smarty_tpl->getVariable('item')->iteration++;
$foreach20Backup = clone $_smarty_tpl->getVariable('item');
$_smarty_tpl->assign('item_wrapper_class', $_smarty_tpl->getValue('item')['wrapper_class'], false, NULL);
if ($_smarty_tpl->getVariable('item')->iteration > $_smarty_tpl->getValue('actions_count_threshold_xxxl')) {
} elseif ($_smarty_tpl->getVariable('item')->iteration > $_smarty_tpl->getValue('actions_count_threshold_xxl')) {
$_smarty_tpl->assign('item_wrapper_class', ((string)$_smarty_tpl->getValue('item_wrapper_class'))." actions-menu__dropdown-item--hidden-xxxl", false, NULL);
} elseif ($_smarty_tpl->getVariable('item')->iteration > $_smarty_tpl->getValue('actions_count_threshold_xl')) {
$_smarty_tpl->assign('item_wrapper_class', ((string)$_smarty_tpl->getValue('item_wrapper_class'))." actions-menu__dropdown-item--hidden-xxl", false, NULL);
} elseif ($_smarty_tpl->getVariable('item')->iteration > 0) {
$_smarty_tpl->assign('item_wrapper_class', ((string)$_smarty_tpl->getValue('item_wrapper_class'))." actions-menu__dropdown-item--hidden-xl", false, NULL);
}
$_smarty_tpl->assign('item_text', (($tmp = $_smarty_tpl->getValue('item')['text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('item_key'), [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "item_text", "item_text_html", null);?><span><?php echo $_smarty_tpl->getValue('item_text');?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->assign('item_icon', '', false, NULL);
if ($_smarty_tpl->getValue('item')['icon']) {
$_smarty_tpl->assign('item_icon', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['icon']), false, NULL);
if (substr((string) $_smarty_tpl->getValue('item_icon'), (int) 0, (int) $_smarty_tpl->getValue('icon_prefix_length')) !== $_smarty_tpl->getValue('icon_prefix')) {
$_smarty_tpl->assign('item_icon', ((string)$_smarty_tpl->getValue('icon_prefix')).((string)$_smarty_tpl->getValue('item_icon')), false, NULL);
}
}?><li class="actions-menu__dropdown-item-wrapper <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_wrapper_class')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>(($tmp = $_smarty_tpl->getValue('item')['type'] ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'href'=>(($tmp = $_smarty_tpl->getValue('item')['href'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'text'=>$_smarty_tpl->getValue('item_text_html'),'title'=>(($tmp = $_smarty_tpl->getValue('item')['title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'id'=>(($tmp = $_smarty_tpl->getValue('item')['id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'class'=>"actions-menu__dropdown-item ".((string)$_smarty_tpl->getValue('item')['class'])." ".((string)$_smarty_tpl->getValue('item')['meta']),'dispatch'=>(($tmp = $_smarty_tpl->getValue('item')['dispatch'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'form'=>(($tmp = $_smarty_tpl->getValue('item')['form'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'method'=>(($tmp = $_smarty_tpl->getValue('item')['method'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target'=>(($tmp = $_smarty_tpl->getValue('item')['target'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target_id'=>(($tmp = $_smarty_tpl->getValue('item')['target_id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'process'=>(($tmp = $_smarty_tpl->getValue('item')['process'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'onclick'=>(($tmp = $_smarty_tpl->getValue('item')['onclick'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'raw'=>true,'icon'=>$_smarty_tpl->getValue('item_icon'),'icon_first'=>true,'data'=>(($tmp = $_smarty_tpl->getValue('item')['data'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), true);?>
</li><?php
$_smarty_tpl->setVariable('item', $foreach20Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "link_text_tools_list", null, null);?><span class="actions-menu__link-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("actions.more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_actions'=>true,'tools_list'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list'),'link_text'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'link_text_tools_list'),'icon'=>"icon-ellipsis-horizontal",'caret'=>true,'prefix'=>"actions_menu",'tool_meta'=>$_smarty_tpl->getValue('actions_menu_btn_group_class'),'override_meta'=>"btn actions-menu__dropdown-toggle"), (int) 0, $_smarty_current_dir);
}
}
}
