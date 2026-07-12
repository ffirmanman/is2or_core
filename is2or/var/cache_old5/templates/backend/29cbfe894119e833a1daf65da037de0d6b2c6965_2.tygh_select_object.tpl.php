<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:common/select_object.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2948842_79786694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29cbfe894119e833a1daf65da037de0d6b2c6965' => 
    array (
      0 => 'common/select_object.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2948842_79786694 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
if ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('items')) > 1) {
$_smarty_tpl->assign('is_submenu', (($tmp = $_smarty_tpl->getValue('is_submenu') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('button_style', ($_smarty_tpl->getValue('button_style') === false) ? '' : (($tmp = $_smarty_tpl->getValue('button_style') ?? null)===null||$tmp==='' ? "btn-link link--monochrome" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_button_text', (($tmp = $_smarty_tpl->getValue('show_button_text') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_button_symbol', (($tmp = $_smarty_tpl->getValue('show_button_symbol') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_caret', (($tmp = $_smarty_tpl->getValue('show_caret') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('pull_right', (($tmp = $_smarty_tpl->getValue('pull_right') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('style') == "graphic") {?><div class="btn-group <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('select_container_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_container_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <a class="btn dropdown-toggle <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_style')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_class')), ENT_QUOTES, 'UTF-8');?>
" id="sw_select_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_id')), ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown"><?php if ($_smarty_tpl->getValue('display_icons')) {
ob_start();
echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['country_code'], 'UTF-8')), ENT_QUOTES, 'UTF-8');
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->assign('icon_class', (($tmp = $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['icon_class'] ?? null)===null||$tmp==='' ? "flag flag-".$_prefixVariable19 ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('icon_class')) {
if ($_smarty_tpl->getValue('icon_deprecated') !== false && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('icon_class'),"flag") !== false) {
$_smarty_tpl->assign('icon_deprecated', true, false, NULL);
}
if ($_smarty_tpl->getValue('icon_deprecated')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon_deprecated.tpl",'class'=>$_smarty_tpl->getValue('icon_class'),'data'=>array("data-ca-target-id"=>"sw_select_".((string)$_smarty_tpl->getValue('selected_id'))."_wrap_".((string)$_smarty_tpl->getValue('suffix')))), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon_class'),'data'=>array("data-ca-target-id"=>"sw_select_".((string)$_smarty_tpl->getValue('selected_id'))."_wrap_".((string)$_smarty_tpl->getValue('suffix')))), $_smarty_tpl);
}
}
}
if ($_smarty_tpl->getValue('show_button_text')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')][$_smarty_tpl->getValue('key_name')]), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('show_button_symbol') && $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol'];?>
)<?php }
if ($_smarty_tpl->getValue('show_caret')) {?>&nbsp;<span class="caret"></span><?php }?></a>
        <?php if ($_smarty_tpl->getValue('key_name') == "company") {?>
            <input id="filter" class="input-text cm-filter" type="text" style="width: 85%"/>
        <?php }?>
        <ul class="dropdown-menu cm-select-list <?php if ($_smarty_tpl->getValue('display_icons')) {?>popup-icons<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_class')), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->getValue('extra_pre')) {
echo $_smarty_tpl->getValue('extra_pre');
}?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'id');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach21DoElse = false;
?>
                <li class="<?php if ($_smarty_tpl->getValue('id') == $_smarty_tpl->getValue('selected_id')) {?>active<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_class')), ENT_QUOTES, 'UTF-8');?>
">
                    <a name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
                       href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('link_tpl')).((string)$_smarty_tpl->getValue('id')))), ENT_QUOTES, 'UTF-8');?>
"
                       class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_link_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('target_id')) {?>cm-ajax<?php }?>"
                       <?php if ($_smarty_tpl->getValue('target_id')) {?>
                           data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_id')), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       <?php if ($_smarty_tpl->getValue('item')['symbol']) {?>
                           data-ca-list-item-symbol="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['symbol']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                    >
                        <?php if ($_smarty_tpl->getValue('display_icons')) {?>
                            <?php ob_start();
echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('item')['country_code'], 'UTF-8')), ENT_QUOTES, 'UTF-8');
$_prefixVariable20=ob_get_clean();
$_smarty_tpl->assign('icon_class', (($tmp = $_smarty_tpl->getValue('item')['icon_class'] ?? null)===null||$tmp==='' ? "flag flag-".$_prefixVariable20 ?? null : $tmp), false, NULL);?>
                            <?php if ($_smarty_tpl->getValue('icon_class')) {?>
                                <?php if ($_smarty_tpl->getValue('icon_deprecated') !== false && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('icon_class'),"flag") !== false) {?>
                                    <?php $_smarty_tpl->assign('icon_deprecated', true, false, NULL);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('icon_deprecated')) {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon_deprecated.tpl",'class'=>$_smarty_tpl->getValue('icon_class')), $_smarty_tpl);?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon_class')), $_smarty_tpl);?>

                                <?php }?>
                            <?php }?>
                        <?php }?>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')]), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->getValue('item')['symbol'];?>
)<?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->getValue('extra')) {
echo $_smarty_tpl->getValue('extra');
}?>
        </ul>
</div><?php } elseif ($_smarty_tpl->getValue('style') == "dropdown") {?>
    <li class="<?php if ($_smarty_tpl->getValue('is_submenu')) {?>dropdown-submenu<?php } else { ?>dropdown dropdown-top-menu-item<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('select_container_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_container_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <a class="<?php if ($_smarty_tpl->getValue('is_submenu')) {?>dropdown-submenu__link<?php } else { ?>dropdown-toggle<?php }?> cm-combination <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_class')), ENT_QUOTES, 'UTF-8');?>
"
           data-toggle="dropdown"
           id="sw_select_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_id')), ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->getValue('disable_dropdown_processing')) {?>data-disable-dropdown-processing="true"<?php }?>
        >
            <?php if ($_smarty_tpl->getValue('plain_name')) {?>
                <?php echo $_smarty_tpl->getValue('plain_name');?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->getValue('key_selected')) {?>
                    <?php if ($_smarty_tpl->getValue('is_submenu')) {?>
                        <?php if ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['name']) {?>
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['name']), ENT_QUOTES, 'UTF-8');?>

                        <?php } elseif ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['description']) {?>
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['description']), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol'];?>
)<?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol']) {?>
                            <?php echo $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol'];?>

                        <?php } else { ?>
                            <?php echo mb_strtoupper((string) $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')][$_smarty_tpl->getValue('key_selected')] ?? '', 'UTF-8');?>

                        <?php }?>
                    <?php }?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')][$_smarty_tpl->getValue('key_name')];?>

                <?php }?>
            <?php }?>

            <?php if (!$_smarty_tpl->getValue('is_submenu')) {?>
                <b class="caret"></b>
            <?php }?>
        </a>
        <ul class="dropdown-menu cm-select-list <?php if ($_smarty_tpl->getValue('pull_right')) {?>pull-right<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_class')), ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'id');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach22DoElse = false;
?>

                                <?php $_smarty_tpl->assign('link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('link_tpl')).((string)$_smarty_tpl->getValue('id'))), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('link_suffix')) {?>
                    <?php $_smarty_tpl->assign('link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('link'),((string)$_smarty_tpl->getValue('link_suffix')).((string)$_smarty_tpl->getValue('id'))), false, NULL);?>
                <?php }?>

                <li class="<?php if ($_smarty_tpl->getValue('id') == $_smarty_tpl->getValue('selected_id')) {?>active<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_class')), ENT_QUOTES, 'UTF-8');?>
">
                    <a name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link')), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_link_class')), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->getValue('display_icons')) {?>
                            <?php ob_start();
echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('item')['country_code'], 'UTF-8')), ENT_QUOTES, 'UTF-8');
$_prefixVariable21=ob_get_clean();
$_smarty_tpl->assign('icon_class', (($tmp = $_smarty_tpl->getValue('item')['icon_class'] ?? null)===null||$tmp==='' ? "flag flag-".$_prefixVariable21 ?? null : $tmp), false, NULL);?>
                            <?php if ($_smarty_tpl->getValue('icon_class')) {?>
                                <?php if ($_smarty_tpl->getValue('icon_deprecated') !== false && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('icon_class'),"flag") !== false) {?>
                                    <?php $_smarty_tpl->assign('icon_deprecated', true, false, NULL);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('icon_deprecated')) {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon_deprecated.tpl",'class'=>$_smarty_tpl->getValue('icon_class')), $_smarty_tpl);?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon_class')), $_smarty_tpl);?>

                                <?php }?>
                            <?php }?>
                        <?php }?>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')]), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->getValue('item')['symbol'];?>
)<?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </li>
<?php } elseif ($_smarty_tpl->getValue('style') == "field") {?>
<div class="cm-popup-box btn-group <?php if ($_smarty_tpl->getValue('class')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');
}?>">
    <?php if (!$_smarty_tpl->getValue('selected_key')) {?>
        <?php $_smarty_tpl->assign('selected_key', $_smarty_tpl->getSmarty()->getModifierCallback('key')($_smarty_tpl->getValue('items')), false, NULL);?>
    <?php }?>
    <?php if (!$_smarty_tpl->getValue('selected_name')) {?>
        <?php $_smarty_tpl->assign('selected_name', $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_key')], false, NULL);?>
    <?php }?>
    <input type="hidden"
           name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_container_name')), ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->getValue('select_container_id')) {?>
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_container_id')), ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_key')), ENT_QUOTES, 'UTF-8');?>
"
    />
    <a id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_container_name')), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle btn <?php if ($_smarty_tpl->getValue('text_wrap')) {?>dropdown-toggle--text-wrap<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_style')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_class')), ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown">
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_name')), ENT_QUOTES, 'UTF-8');?>

        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu cm-select <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_class')), ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'value', false, 'key');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach23DoElse = false;
?>
            <li class="<?php if ($_smarty_tpl->getValue('selected_key') == $_smarty_tpl->getValue('key')) {?>disabled<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_class')), ENT_QUOTES, 'UTF-8');?>
">
                <a class="<?php if ($_smarty_tpl->getValue('selected_key') == $_smarty_tpl->getValue('key')) {?>active<?php }?> cm-select-option <?php if ($_smarty_tpl->getValue('text_wrap')) {?>dropdown--text-wrap<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_link_class')), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-list-item="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo $_smarty_tpl->getValue('value');?>
</a></li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
}
}
