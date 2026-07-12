<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:41
  from 'tygh:common/dynamic_navigation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cd642588_33635517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6ff21b7f7f55efb34356f748b3758f6c9f7568f' => 
    array (
      0 => 'common/dynamic_navigation.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9cd642588_33635517 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
if ($_smarty_tpl->getValue('navigation') && $_smarty_tpl->getValue('navigation')['dynamic'] && $_smarty_tpl->getValue('navigation')['dynamic']['sections']) {?>
    <div class="sidebar-row">
        <ul class="nav nav-list">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigation')['dynamic']['sections'], 'm', false, 's_id', 'first_level', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s_id')->value => $_smarty_tpl->getVariable('m')->value) {
$foreach5DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['total'];
?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:dynamic_menu_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if ($_smarty_tpl->getValue('m')['type'] == "divider") {?>
                        <li class="divider"></li>
                    <?php } else {
ob_start();
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('method') ?? null)===null||$tmp==='' ? "GET" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_prefixVariable25 = ob_get_clean();
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('m')['href'],$_prefixVariable25)) {?>
                        <li class="<?php if ($_smarty_tpl->getValue('m')['js'] == true) {?>cm-js<?php }
if (($_smarty_tpl->getValue('__smarty_foreach_first_level')['last'] ?? null)) {?> last-item<?php }
if ($_smarty_tpl->getValue('navigation')['dynamic']['active_section'] == $_smarty_tpl->getValue('s_id')) {?> active<?php }?>" id="elm_sidebar_nav_item_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('s_id')), ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('m')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m')['title']), ENT_QUOTES, 'UTF-8');?>
</a><!--elm_sidebar_nav_item_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('s_id')), ENT_QUOTES, 'UTF-8');?>
--></li>
                    <?php }}?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:dynamic_menu_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<hr><?php }
}
}
