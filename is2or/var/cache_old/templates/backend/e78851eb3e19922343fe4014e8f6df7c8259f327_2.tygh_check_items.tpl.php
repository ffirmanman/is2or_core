<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:06
  from 'tygh:common/check_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467a801455_18966845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78851eb3e19922343fe4014e8f6df7c8259f327' => 
    array (
      0 => 'common/check_items.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae467a801455_18966845 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('select_all','unselect_all','check_uncheck_all','check_all','check_none'));
$_smarty_tpl->assign('check_data', '', false, NULL);
$_smarty_tpl->assign('container', ($_smarty_tpl->getValue('elms_container')) ? "data-ca-container=".((string)$_smarty_tpl->getValue('elms_container')) : '', false, NULL);
$_smarty_tpl->assign('show_checkbox', (($tmp = $_smarty_tpl->getValue('show_checkbox') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('check_target')) {?>
    <?php $_smarty_tpl->assign('check_data', "data-ca-target=\"".((string)$_smarty_tpl->getValue('check_target'))."\"", false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "check_items_checkbox", null, null);?>
    <?php if ($_smarty_tpl->getValue('style') == "links") {?>
        <a 
            <?php if ($_smarty_tpl->getValue('check_link')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('check_link')), ENT_QUOTES, 'UTF-8');?>
" <?php }?> 
            class="cm-check-items cm-on underlined" 
            <?php echo $_smarty_tpl->getValue('check_data');?>

        >
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </a> | <a 
            <?php if ($_smarty_tpl->getValue('check_link')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('check_link')), ENT_QUOTES, 'UTF-8');?>
" <?php }?> 
            class="cm-check-items cm-off underlined" 
            <?php echo $_smarty_tpl->getValue('check_data');?>

        >
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unselect_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </a>
    <?php } else { ?>
        <input 
            type="checkbox" 
            name="check_all" 
            value="Y" 
            title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("check_uncheck_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" 
            class="<?php if ($_smarty_tpl->getValue('check_statuses')) {?>pull-left<?php }?> cm-check-items <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" 
            <?php if ($_smarty_tpl->getValue('check_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('check_onclick')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> 
            <?php echo $_smarty_tpl->getValue('check_data');?>

            <?php if ($_smarty_tpl->getValue('checked')) {?>checked="checked"<?php }?>
            <?php if ($_smarty_tpl->getValue('is_check_disabled')) {?>disabled="disabled"<?php }?> 
        />
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if (($_smarty_tpl->getValue('check_statuses') || $_smarty_tpl->getValue('is_check_all_shown')) && !$_smarty_tpl->getValue('is_check_disabled')) {?> 
    <?php if (!$_smarty_tpl->getValue('wrap_select_actions_into_dropdown')) {?>
    <div class="btn-group btn-checkbox cm-check-items <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
">
        <a href="" data-toggle="dropdown" class="btn dropdown-toggle <?php if ($_smarty_tpl->getValue('show_checkbox')) {?>dropdown-toggle--show-checkbox<?php }?>">
            <span class="caret"></span>
        </a>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'check_items_checkbox');?>

    <?php }?>
        <ul class="dropdown-menu <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_menu_class')), ENT_QUOTES, 'UTF-8');?>
">
            <li><a class="cm-on" <?php echo $_smarty_tpl->getValue('check_data');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
 ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("check_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
            <li><a class="cm-off" <?php echo $_smarty_tpl->getValue('check_data');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
 ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("check_none", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('check_statuses'), 'title', false, 'status');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('status')->value => $_smarty_tpl->getVariable('title')->value) {
$foreach13DoElse = false;
?>
            <li><a <?php echo $_smarty_tpl->getValue('check_data');?>
 data-ca-status="<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('status'), 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
 ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    <?php if (!$_smarty_tpl->getValue('wrap_select_actions_into_dropdown')) {?>
    </div>
    <?php }
} else { ?>
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'check_items_checkbox');?>

    </div>
<?php }
}
}
