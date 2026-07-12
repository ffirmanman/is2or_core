<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:views/companies/components/company_name.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46791867d8_47977687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '107f393186ad2c47375f34accffb35fe9880bab4' => 
    array (
      0 => 'views/companies/components/company_name.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae46791867d8_47977687 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies/components';
$_smarty_tpl->assign('type', (($tmp = $_smarty_tpl->getValue('type') ?? null)===null||$tmp==='' ? "default" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_company_name', false, false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!$_smarty_tpl->getValue('runtime')['simple_ultimate'] && ($_smarty_tpl->getValue('object')['company_id'] || $_smarty_tpl->getValue('object')['company_name'])) {?>
    <?php if (!$_smarty_tpl->getValue('object')['company_name']) {?>
        <?php $_smarty_tpl->assign('_company_name', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('object')['company_id']), false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('show_hidden_input')) {?>
        <?php $_smarty_tpl->assign('show_company_name', true, false, NULL);?>
        <input type="hidden" id="company_id_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object')['product_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object')['company_id']), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" id="company_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object')['product_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('object')['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('_company_name') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) {?>
        <?php $_smarty_tpl->assign('show_company_name', true, false, NULL);?>
        <?php if ($_smarty_tpl->getValue('type') === "basic") {?>
            <span class="company-name <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('object')['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('_company_name') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } elseif ($_smarty_tpl->getValue('type') === "simple" || $_smarty_tpl->getValue('simple')) {?>
            <small class="muted company-name <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('object')['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('_company_name') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</small>
        <?php } else { ?>
                        <p class="muted company-name <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><small><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('object')['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('_company_name') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</small></p>
        <?php }?>
    <?php }
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->assign('show_company_name', $_smarty_tpl->getValue('show_company_name'), false, 2);
}
}
