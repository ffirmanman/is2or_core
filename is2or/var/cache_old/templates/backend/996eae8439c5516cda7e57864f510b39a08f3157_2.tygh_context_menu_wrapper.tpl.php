<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:06
  from 'tygh:common/context_menu_wrapper.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467a74da55_61586775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '996eae8439c5516cda7e57864f510b39a08f3157' => 
    array (
      0 => 'common/context_menu_wrapper.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae467a74da55_61586775 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('uniqid')()), ENT_QUOTES, 'UTF-8');
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? $_prefixVariable7 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('class', (($tmp = $_smarty_tpl->getValue('class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('attributes', (($tmp = $_smarty_tpl->getValue('attributes') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_tmp_array = $_smarty_tpl->getValue('attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-longtap"] = true;
$_smarty_tpl->assign('attributes', $_tmp_array, false, NULL);
$_smarty_tpl->assign('hook', (($tmp = $_smarty_tpl->getValue('hook') ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->getValue('object')).":context_menu" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('has_permission', (($tmp = $_smarty_tpl->getValue('has_permission') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('context_menu_class', (($tmp = $_smarty_tpl->getValue('context_menu_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>

<div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('attributes'))), ENT_QUOTES, 'UTF-8');?>
>
    <?php if ($_smarty_tpl->getValue('has_permission')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>$_smarty_tpl->getValue('hook')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('component')) {
throw new \Smarty\Exception('block tag \'component\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('component')->handle(array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->getValue('object'),'form'=>$_smarty_tpl->getValue('form'),'class'=>$_smarty_tpl->getValue('context_menu_class'),'context_menu_id'=>"#".((string)$_smarty_tpl->getValue('id')),'is_check_all_shown'=>$_smarty_tpl->getValue('is_check_all_shown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('component')->handle(array('name'=>"context_menu.context_menu",'object'=>$_smarty_tpl->getValue('object'),'form'=>$_smarty_tpl->getValue('form'),'class'=>$_smarty_tpl->getValue('context_menu_class'),'context_menu_id'=>"#".((string)$_smarty_tpl->getValue('id')),'is_check_all_shown'=>$_smarty_tpl->getValue('is_check_all_shown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>$_smarty_tpl->getValue('hook')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }?>

    <?php echo $_smarty_tpl->getValue('items');?>

</div>
<?php }
}
