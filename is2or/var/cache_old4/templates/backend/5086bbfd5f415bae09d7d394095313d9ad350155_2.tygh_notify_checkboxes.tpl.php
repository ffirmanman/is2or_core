<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:common/notify_checkboxes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523e38925_73426828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5086bbfd5f415bae09d7d394095313d9ad350155' => 
    array (
      0 => 'common/notify_checkboxes.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5523e38925_73426828 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('notify_customer','notify_orders_department','notify_vendor'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"select_popup:notify_checkboxes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('name_prefix', (($tmp = $_smarty_tpl->getValue('name_prefix') ?? null)===null||$tmp==='' ? "__notify" ?? null : $tmp), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('notify')) {?>
        <li class="divider"></li>
        <li><a><label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_notify">
            <input type="checkbox" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name_prefix')), ENT_QUOTES, 'UTF-8');?>
_user" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_notify" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('notify_customer_status') == true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name_prefix')), ENT_QUOTES, 'UTF-8');?>
_user]').prop('checked', this.checked);" />
            <?php echo (($tmp = $_smarty_tpl->getValue('notify_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("notify_customer", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</label></a>
        </li>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('notify_department')) {?>
        <li><a><label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_notify_department">
            <input type="checkbox" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name_prefix')), ENT_QUOTES, 'UTF-8');?>
_department" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_notify_department" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('notify_department_status') == true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name_prefix')), ENT_QUOTES, 'UTF-8');?>
_department]').prop('checked', this.checked);" />
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notify_orders_department", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label></a>
        </li>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('notify_vendor')) {?>
        <li><a><label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_notify_vendor">
            <input type="checkbox" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name_prefix')), ENT_QUOTES, 'UTF-8');?>
_vendor" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_notify_vendor" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('notify_vendor_status') == true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name_prefix')), ENT_QUOTES, 'UTF-8');?>
_vendor]').prop('checked', this.checked);" />
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notify_vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label></a>
        </li>
    <?php }?>            
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"select_popup:notify_checkboxes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
