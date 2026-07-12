<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:13
  from 'tygh:blocks/menu/text_links.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2050ae135_79403698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50807d05b03a58cd69b217fb6b6343efeaad2ff' => 
    array (
      0 => 'blocks/menu/text_links.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/menu/text_links.tpl' => 3,
  ),
))) {
function content_69afb2050ae135_79403698 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/menu';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('block')['properties']['show_items_in_line'] == 'Y') {?>
    <?php $_smarty_tpl->assign('inline', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('text_links_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('items')) {?>
    <?php if (!$_smarty_tpl->getValue('submenu')) {?>
    <div class="ty-text-links-wrapper">
        <div id="sw_text_links_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text_links_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-text-links-btn cm-combination">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-text-links-btn__arrow"), $_smarty_tpl);?>

        </div>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->getValue('submenu')) {?>id="text_links_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text_links_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="ty-text-links <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
cm-popup-box ty-text-links_show_inline<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'menu');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('menu')->value) {
$foreach2DoElse = false;
?><li class="ty-text-links__item <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-level-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('menu')['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu') && $_smarty_tpl->getValue('menu')['subitems']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__subitems<?php }
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--inline<?php }
if ($_smarty_tpl->getValue('inline') && $_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--submenu<?php }
if ($_smarty_tpl->getValue('menu')['class']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu')['class']), ENT_QUOTES, 'UTF-8');
}?>"><a class="ty-text-links__a <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--level-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('menu')['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu') && $_smarty_tpl->getValue('menu')['subitems']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--subitems<?php }
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--inline<?php }
if ($_smarty_tpl->getValue('inline') && $_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--submenu<?php }?>"<?php if ($_smarty_tpl->getValue('menu')['href']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('menu')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('menu')['new_window']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
target="_blank"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu')['item']), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->getValue('menu')['subitems']) {
$_smarty_tpl->renderSubTemplate("tygh:blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('menu')['subitems'],'submenu'=>true), (int) 0, $_smarty_current_dir);
}?></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul>

    <?php if (!$_smarty_tpl->getValue('submenu')) {?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/text_links.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/menu/text_links.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('block')['properties']['show_items_in_line'] == 'Y') {?>
    <?php $_smarty_tpl->assign('inline', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('text_links_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('items')) {?>
    <?php if (!$_smarty_tpl->getValue('submenu')) {?>
    <div class="ty-text-links-wrapper">
        <div id="sw_text_links_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text_links_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-text-links-btn cm-combination">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-text-links-btn__arrow"), $_smarty_tpl);?>

        </div>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->getValue('submenu')) {?>id="text_links_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text_links_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="ty-text-links <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
cm-popup-box ty-text-links_show_inline<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'menu');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('menu')->value) {
$foreach3DoElse = false;
?><li class="ty-text-links__item <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-level-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('menu')['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu') && $_smarty_tpl->getValue('menu')['subitems']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__subitems<?php }
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--inline<?php }
if ($_smarty_tpl->getValue('inline') && $_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--submenu<?php }
if ($_smarty_tpl->getValue('menu')['class']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu')['class']), ENT_QUOTES, 'UTF-8');
}?>"><a class="ty-text-links__a <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--level-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('menu')['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu') && $_smarty_tpl->getValue('menu')['subitems']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--subitems<?php }
if ($_smarty_tpl->getValue('inline') && !$_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--inline<?php }
if ($_smarty_tpl->getValue('inline') && $_smarty_tpl->getValue('submenu')) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--submenu<?php }?>"<?php if ($_smarty_tpl->getValue('menu')['href']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('menu')['href'])), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('menu')['new_window']) {?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
target="_blank"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu')['item']), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->getValue('menu')['subitems']) {
$_smarty_tpl->renderSubTemplate("tygh:blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('menu')['subitems'],'submenu'=>true), (int) 0, $_smarty_current_dir);
}?></li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul>

    <?php if (!$_smarty_tpl->getValue('submenu')) {?></div><?php }
}
}
}
}
