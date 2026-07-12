<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:06
  from 'tygh:components/context_menu/context_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467a7cb836_05312636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c8be4ddb1f525164f2a95a0437a4228dac969b8' => 
    array (
      0 => 'components/context_menu/context_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae467a7cb836_05312636 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/context_menu';
?>
<div class="bulk-edit clearfix hidden <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('params')['class']), ENT_QUOTES, 'UTF-8');?>
"
     <?php if ($_smarty_tpl->getValue('context_menu_items')) {?>
         data-ca-bulkedit-expanded-object="true"
         data-ca-bulkedit-component="expandedObject"
     <?php } else { ?>
         data-ca-bulkedit-disabled="true"
     <?php }?>
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('status_selector')->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('statuses'=>$_smarty_tpl->getValue('status_selector')->getStatuses(),'elms_container'=>$_smarty_tpl->getValue('context_menu_id')), (int) 0, $_smarty_current_dir);
?>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('context_menu_items'), 'item', false, 'item_id');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach12DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('item')->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>$_smarty_tpl->getValue('item_id'),'item'=>$_smarty_tpl->getValue('item'),'data'=>$_smarty_tpl->getValue('item')->getData()), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>

</div>
<?php }
}
