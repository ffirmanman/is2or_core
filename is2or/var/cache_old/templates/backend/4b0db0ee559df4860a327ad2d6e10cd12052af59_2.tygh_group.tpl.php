<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:06
  from 'tygh:components/context_menu/items/group.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467a872668_66322960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b0db0ee559df4860a327ad2d6e10cd12052af59' => 
    array (
      0 => 'components/context_menu/items/group.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae467a872668_66322960 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/context_menu/items';
?>
<li <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('data')['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->getValue('data')['menu_item_attributes']['class']) {?>
        class="btn bulk-edit__btn bulk-edit__btn--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_id')), ENT_QUOTES, 'UTF-8');?>
 dropleft-mod <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data')['menu_item_class']), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('data')['name']['template'], $_smarty_tpl->getValue('data')['name']['params'], $_smarty_tpl->getSmarty()->getLanguage());?>
 <span class="caret mobile-hide"></span></span>

    <ul class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')->getItems(), 'subitem', false, 'item_id');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_id')->value => $_smarty_tpl->getVariable('subitem')->value) {
$foreach15DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('subitem')->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>$_smarty_tpl->getValue('item_id'),'item'=>$_smarty_tpl->getValue('subitem'),'data'=>$_smarty_tpl->getValue('subitem')->getData()), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</li>
<?php }
}
