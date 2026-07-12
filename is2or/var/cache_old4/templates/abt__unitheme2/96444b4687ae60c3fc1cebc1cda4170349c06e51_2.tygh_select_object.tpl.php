<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:37
  from 'tygh:common/select_object.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fdd53103_81629545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96444b4687ae60c3fc1cebc1cda4170349c06e51' => 
    array (
      0 => 'common/select_object.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fdd53103_81629545 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('select_descr_lang','select_descr_lang'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('language_text', (($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_descr_lang", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_group', (($tmp = $_smarty_tpl->getValue('show_group') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_button_text', (($tmp = $_smarty_tpl->getValue('show_button_text') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_button_symbol', (($tmp = $_smarty_tpl->getValue('show_button_symbol') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('style') == "graphic") {
if ($_smarty_tpl->getValue('text')) {?><div class="ty-select-block__txt hidden-phone hidden-tablet"><?php echo $_smarty_tpl->getValue('text');?>
:</div><?php }
if ($_smarty_tpl->getValue('show_group')) {?><div class="ty-btn-group <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
    <a class="ty-select-block__a ab__ut2--select-block__head cm-combination <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-toggle="dropdown" id="sw_select_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_id')), ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
">
                <span>
            <?php if ($_smarty_tpl->getValue('display_icons') == true) {?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-select-block__a-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['country_code'], 'UTF-8')))), $_smarty_tpl);?>

            <?php }?>

            <span class="ty-select-block__a-item ab__ut2--select-block__head__text <?php if ($_smarty_tpl->getValue('link_class')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');
}?>">
                <?php $_smarty_tpl->assign('ab__symbol_head', $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol'], false, NULL);?>
                <?php $_smarty_tpl->assign('ab__code_head', mb_strtoupper((string) $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['lang_code'] ?? '', 'UTF-8'), false, NULL);?>

                <?php if ($_smarty_tpl->getValue('show_button_text') && $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')][$_smarty_tpl->getValue('key_name')]) {?>

                    <?php if ($_smarty_tpl->getValue('ab__symbol_head')) {?>
                        <?php $_smarty_tpl->assign('ab__symbol_head', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__symbol_head'))."<ins>)</ins>", false, NULL);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('ab__code_head')) {?>
                        <?php $_smarty_tpl->assign('ab__code_head', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__code_head'))."<ins>)</ins>", false, NULL);?>
                    <?php }?>
                    <span class="ab__ut2--select-block__head__text__name">
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')][$_smarty_tpl->getValue('key_name')]), ENT_QUOTES, 'UTF-8');?>

                    </span>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_button_symbol') && $_smarty_tpl->getValue('ab__symbol_head')) {?>
                    <span class="ab__ut2--select-block__head__text__symbol">
                        <?php echo $_smarty_tpl->getValue('ab__symbol_head');?>

                    </span>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('ab__code_head')) {?>
                    <span class="ab__ut2--select-block__head__text__code">
                        <?php echo $_smarty_tpl->getValue('ab__code_head');?>

                    </span>
                <?php }?>
            </span>

                    </span>
    </a>

    <div id="select_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_id')), ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
" class="ty-select-block ab__ut2--select-block__popup cm-popup-box hidden">
        <ul class="cm-select-list ty-select-block__list ty-flags">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'id');
$foreach30DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach30DoElse = false;
?>

                <li class="ty-select-block__list-item ab__ut2--select-block__popup__item">
                    <a rel="nofollow" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('link_tpl')).((string)$_smarty_tpl->getValue('id')))), ENT_QUOTES, 'UTF-8');?>
" class="ty-select-block__list-a <?php if ($_smarty_tpl->getValue('selected_id') == $_smarty_tpl->getValue('id')) {?>is-active<?php }?> <?php if ($_smarty_tpl->getValue('suffix') == "live_editor_box") {?>cm-lang-link<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_link_class')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('display_icons') == true) {?>data-ca-country-code="<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('item')['country_code'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->getValue('item')['symbol']) {?>
                                data-ca-list-item-symbol="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['symbol']), ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                    >
                        <?php if ($_smarty_tpl->getValue('display_icons') == true) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('item')['country_code'], 'UTF-8')))), $_smarty_tpl);?>

                        <?php }?>
                        
                        <span class="ab__ut2--select-block__popup__text">
                            <?php $_smarty_tpl->assign('ab__symbol_popup', $_smarty_tpl->getValue('item')['symbol'], false, NULL);?>
                            <?php $_smarty_tpl->assign('ab__code_popup', mb_strtoupper((string) $_smarty_tpl->getValue('item')['lang_code'] ?? '', 'UTF-8'), false, NULL);?>

                            <?php if ($_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')]) {?>

                                <?php if ($_smarty_tpl->getValue('ab__symbol_popup')) {?>
                                    <?php $_smarty_tpl->assign('ab__symbol_popup', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__symbol_popup'))."<ins>)</ins>", false, NULL);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->getValue('ab__code_popup')) {?>
                                    <?php $_smarty_tpl->assign('ab__code_popup', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__code_popup'))."<ins>)</ins>", false, NULL);?>
                                <?php }?>

                                <span class="ab__ut2--select-block__popup__text__name">
                                    <?php echo $_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')];?>

                                </span>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('ab__symbol_popup')) {?>
                                <span class="ab__ut2--select-block__popup__text__symbol">
                                    <?php echo $_smarty_tpl->getValue('ab__symbol_popup');?>

                                </span>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('ab__code_popup')) {?>
                                <span class="ab__ut2--select-block__popup__text__code">
                                    <?php echo $_smarty_tpl->getValue('ab__code_popup');?>

                                </span>
                            <?php }?>
                        </span>
                        
                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <?php if ($_smarty_tpl->getValue('show_group')) {?></div><?php }
} else { ?>
    <?php if ($_smarty_tpl->getValue('text')) {?><label for="id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" class="ty-select-block__txt hidden-phone hidden-tablet"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
:</label><?php }?>
    <select id="id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.$.redirect(this.value);" class="ty-valign">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'id');
$foreach31DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach31DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('link_tpl')).((string)$_smarty_tpl->getValue('id')))), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('id') == $_smarty_tpl->getValue('selected_id')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')];?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </select>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/select_object.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/select_object.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('language_text', (($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_descr_lang", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_group', (($tmp = $_smarty_tpl->getValue('show_group') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_button_text', (($tmp = $_smarty_tpl->getValue('show_button_text') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_button_symbol', (($tmp = $_smarty_tpl->getValue('show_button_symbol') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('style') == "graphic") {
if ($_smarty_tpl->getValue('text')) {?><div class="ty-select-block__txt hidden-phone hidden-tablet"><?php echo $_smarty_tpl->getValue('text');?>
:</div><?php }
if ($_smarty_tpl->getValue('show_group')) {?><div class="ty-btn-group <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
    <a class="ty-select-block__a ab__ut2--select-block__head cm-combination <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-toggle="dropdown" id="sw_select_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_id')), ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
">
                <span>
            <?php if ($_smarty_tpl->getValue('display_icons') == true) {?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-select-block__a-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['country_code'], 'UTF-8')))), $_smarty_tpl);?>

            <?php }?>

            <span class="ty-select-block__a-item ab__ut2--select-block__head__text <?php if ($_smarty_tpl->getValue('link_class')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');
}?>">
                <?php $_smarty_tpl->assign('ab__symbol_head', $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['symbol'], false, NULL);?>
                <?php $_smarty_tpl->assign('ab__code_head', mb_strtoupper((string) $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')]['lang_code'] ?? '', 'UTF-8'), false, NULL);?>

                <?php if ($_smarty_tpl->getValue('show_button_text') && $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')][$_smarty_tpl->getValue('key_name')]) {?>

                    <?php if ($_smarty_tpl->getValue('ab__symbol_head')) {?>
                        <?php $_smarty_tpl->assign('ab__symbol_head', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__symbol_head'))."<ins>)</ins>", false, NULL);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('ab__code_head')) {?>
                        <?php $_smarty_tpl->assign('ab__code_head', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__code_head'))."<ins>)</ins>", false, NULL);?>
                    <?php }?>
                    <span class="ab__ut2--select-block__head__text__name">
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('selected_id')][$_smarty_tpl->getValue('key_name')]), ENT_QUOTES, 'UTF-8');?>

                    </span>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('show_button_symbol') && $_smarty_tpl->getValue('ab__symbol_head')) {?>
                    <span class="ab__ut2--select-block__head__text__symbol">
                        <?php echo $_smarty_tpl->getValue('ab__symbol_head');?>

                    </span>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('ab__code_head')) {?>
                    <span class="ab__ut2--select-block__head__text__code">
                        <?php echo $_smarty_tpl->getValue('ab__code_head');?>

                    </span>
                <?php }?>
            </span>

                    </span>
    </a>

    <div id="select_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('selected_id')), ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
" class="ty-select-block ab__ut2--select-block__popup cm-popup-box hidden">
        <ul class="cm-select-list ty-select-block__list ty-flags">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'id');
$foreach32DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach32DoElse = false;
?>

                <li class="ty-select-block__list-item ab__ut2--select-block__popup__item">
                    <a rel="nofollow" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('link_tpl')).((string)$_smarty_tpl->getValue('id')))), ENT_QUOTES, 'UTF-8');?>
" class="ty-select-block__list-a <?php if ($_smarty_tpl->getValue('selected_id') == $_smarty_tpl->getValue('id')) {?>is-active<?php }?> <?php if ($_smarty_tpl->getValue('suffix') == "live_editor_box") {?>cm-lang-link<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_item_link_class')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('display_icons') == true) {?>data-ca-country-code="<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('item')['country_code'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->getValue('item')['symbol']) {?>
                                data-ca-list-item-symbol="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['symbol']), ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                    >
                        <?php if ($_smarty_tpl->getValue('display_icons') == true) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-flag ty-flag-".((string)(mb_strtolower((string) $_smarty_tpl->getValue('item')['country_code'], 'UTF-8')))), $_smarty_tpl);?>

                        <?php }?>
                        
                        <span class="ab__ut2--select-block__popup__text">
                            <?php $_smarty_tpl->assign('ab__symbol_popup', $_smarty_tpl->getValue('item')['symbol'], false, NULL);?>
                            <?php $_smarty_tpl->assign('ab__code_popup', mb_strtoupper((string) $_smarty_tpl->getValue('item')['lang_code'] ?? '', 'UTF-8'), false, NULL);?>

                            <?php if ($_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')]) {?>

                                <?php if ($_smarty_tpl->getValue('ab__symbol_popup')) {?>
                                    <?php $_smarty_tpl->assign('ab__symbol_popup', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__symbol_popup'))."<ins>)</ins>", false, NULL);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->getValue('ab__code_popup')) {?>
                                    <?php $_smarty_tpl->assign('ab__code_popup', "<ins>(</ins>".((string)$_smarty_tpl->getValue('ab__code_popup'))."<ins>)</ins>", false, NULL);?>
                                <?php }?>

                                <span class="ab__ut2--select-block__popup__text__name">
                                    <?php echo $_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')];?>

                                </span>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('ab__symbol_popup')) {?>
                                <span class="ab__ut2--select-block__popup__text__symbol">
                                    <?php echo $_smarty_tpl->getValue('ab__symbol_popup');?>

                                </span>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('ab__code_popup')) {?>
                                <span class="ab__ut2--select-block__popup__text__code">
                                    <?php echo $_smarty_tpl->getValue('ab__code_popup');?>

                                </span>
                            <?php }?>
                        </span>
                        
                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <?php if ($_smarty_tpl->getValue('show_group')) {?></div><?php }
} else { ?>
    <?php if ($_smarty_tpl->getValue('text')) {?><label for="id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" class="ty-select-block__txt hidden-phone hidden-tablet"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
:</label><?php }?>
    <select id="id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var_name')), ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.$.redirect(this.value);" class="ty-valign">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'id');
$foreach33DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach33DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('link_tpl')).((string)$_smarty_tpl->getValue('id')))), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('id') == $_smarty_tpl->getValue('selected_id')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getValue('item')[$_smarty_tpl->getValue('key_name')];?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </select>
<?php }
}
}
}
