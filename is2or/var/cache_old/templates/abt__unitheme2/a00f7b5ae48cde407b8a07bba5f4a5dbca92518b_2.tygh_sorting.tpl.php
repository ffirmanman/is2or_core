<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:08:31
  from 'tygh:common/sorting.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9eff817039_24243996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00f7b5ae48cde407b8a07bba5f4a5dbca92518b' => 
    array (
      0 => 'common/sorting.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9eff817039_24243996 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.sort_by_','sort_by','abt__ut2.sort_by_','abt__ut2.sort_by_','sort_by','abt__ut2.sort_by_'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('element', (($tmp = $_smarty_tpl->getValue('element') ?? null)===null||$tmp==='' ? 'elm_sort_fields' ?? null : $tmp), false, NULL);?>
<div class="ty-sort-dropdown">
	<div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('sort_by', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
    <a id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')), ENT_QUOTES, 'UTF-8');?>
" class="ty-sort-dropdown__wrapper cm-combination"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sort_by_".((string)$_smarty_tpl->getValue('search')['sort_by'])."_".((string)$_smarty_tpl->getValue('search')['sort_order']), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-expand_more"></i></a>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')), ENT_QUOTES, 'UTF-8');?>
" class="ty-sort-dropdown__content cm-popup-box hidden">
        <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sorting'), 'value', false, 'option');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach15DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('search')['sort_by'] == $_smarty_tpl->getValue('option')) {?>
                    <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('search')['sort_order_rev'], false, NULL);?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->getValue('value')['default_order']) {?>
                        <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('value')['default_order'], false, NULL);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('sort_order', "asc", false, NULL);?>
                    <?php }?>
                <?php }?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sorting_orders'), 'sort_order');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sort_order')->value) {
$foreach16DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('search')['sort_by'] != $_smarty_tpl->getValue('option') || $_smarty_tpl->getValue('search')['sort_order_rev'] == $_smarty_tpl->getValue('sort_order')) {?>
                        <?php $_smarty_tpl->assign('sort_class', "sort-by-".((string)$_smarty_tpl->getValue('class_pref')).((string)$_smarty_tpl->getValue('option'))."-".((string)$_smarty_tpl->getValue('sort_order')), false, NULL);?>
                        <?php $_smarty_tpl->assign('sort_key', ((string)$_smarty_tpl->getValue('option'))."-".((string)$_smarty_tpl->getValue('sort_order')), false, NULL);?>
                        <?php if (!$_smarty_tpl->getValue('avail_sorting') || $_smarty_tpl->getValue('avail_sorting')[$_smarty_tpl->getValue('sort_key')] == 'Y') {?>
                        <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sort_class')), ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                            <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__selected_filters'))) {?> cm-ajax-full-render<?php }?> ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination_id')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('curl'))."&sort_by=".((string)$_smarty_tpl->getValue('option'))."&sort_order=".((string)$_smarty_tpl->getValue('sort_order')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sort_by_".((string)$_smarty_tpl->getValue('option'))."_".((string)$_smarty_tpl->getValue('sort_order')), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                        </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/sorting.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/sorting.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('element', (($tmp = $_smarty_tpl->getValue('element') ?? null)===null||$tmp==='' ? 'elm_sort_fields' ?? null : $tmp), false, NULL);?>
<div class="ty-sort-dropdown">
	<div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('sort_by', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
    <a id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')), ENT_QUOTES, 'UTF-8');?>
" class="ty-sort-dropdown__wrapper cm-combination"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sort_by_".((string)$_smarty_tpl->getValue('search')['sort_by'])."_".((string)$_smarty_tpl->getValue('search')['sort_order']), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-expand_more"></i></a>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')), ENT_QUOTES, 'UTF-8');?>
" class="ty-sort-dropdown__content cm-popup-box hidden">
        <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sort_by", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sorting'), 'value', false, 'option');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach17DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('search')['sort_by'] == $_smarty_tpl->getValue('option')) {?>
                    <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('search')['sort_order_rev'], false, NULL);?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->getValue('value')['default_order']) {?>
                        <?php $_smarty_tpl->assign('sort_order', $_smarty_tpl->getValue('value')['default_order'], false, NULL);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('sort_order', "asc", false, NULL);?>
                    <?php }?>
                <?php }?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sorting_orders'), 'sort_order');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sort_order')->value) {
$foreach18DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('search')['sort_by'] != $_smarty_tpl->getValue('option') || $_smarty_tpl->getValue('search')['sort_order_rev'] == $_smarty_tpl->getValue('sort_order')) {?>
                        <?php $_smarty_tpl->assign('sort_class', "sort-by-".((string)$_smarty_tpl->getValue('class_pref')).((string)$_smarty_tpl->getValue('option'))."-".((string)$_smarty_tpl->getValue('sort_order')), false, NULL);?>
                        <?php $_smarty_tpl->assign('sort_key', ((string)$_smarty_tpl->getValue('option'))."-".((string)$_smarty_tpl->getValue('sort_order')), false, NULL);?>
                        <?php if (!$_smarty_tpl->getValue('avail_sorting') || $_smarty_tpl->getValue('avail_sorting')[$_smarty_tpl->getValue('sort_key')] == 'Y') {?>
                        <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sort_class')), ENT_QUOTES, 'UTF-8');?>
 ty-sort-dropdown__content-item">
                            <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__selected_filters'))) {?> cm-ajax-full-render<?php }?> ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination_id')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('curl'))."&sort_by=".((string)$_smarty_tpl->getValue('option'))."&sort_order=".((string)$_smarty_tpl->getValue('sort_order')))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.sort_by_".((string)$_smarty_tpl->getValue('option'))."_".((string)$_smarty_tpl->getValue('sort_order')), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                        </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
