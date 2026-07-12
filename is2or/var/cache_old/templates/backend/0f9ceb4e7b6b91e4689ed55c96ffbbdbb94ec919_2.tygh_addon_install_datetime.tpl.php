<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/manage/addon_install_datetime.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc9b3dc1_98862196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9ceb4e7b6b91e4689ed55c96ffbbdbb94ec919' => 
    array (
      0 => 'views/addons/components/manage/addon_install_datetime.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9cc9b3dc1_98862196 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/manage';
$_smarty_tpl->assign('show_install_datetime', (($tmp = $_smarty_tpl->getValue('show_install_datetime') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('show_install_datetime')) {?>
        <div class="hidden"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('a')['install_datetime']), ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
