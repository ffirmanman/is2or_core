<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/products_to_search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467907de46_56495667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5db2b8c390cd30db3c1f53514f36af4bb7293917' => 
    array (
      0 => 'common/products_to_search.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/picker.tpl' => 1,
  ),
))) {
function content_69ae467907de46_56495667 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('add','or_saved_search'));
if ($_smarty_tpl->getValue('search')['p_ids']) {?>
    <?php $_smarty_tpl->assign('product_ids', $_smarty_tpl->getSmarty()->getModifierCallback('explode')(",",$_smarty_tpl->getValue('search')['p_ids']), false, NULL);
}?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"added_products",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add", [], $_smarty_tpl->getSmarty()->getLanguage()),'item_ids'=>$_smarty_tpl->getValue('product_ids'),'input_name'=>"p_ids",'type'=>"links",'no_container'=>true,'picker_view'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->assign('views', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_views')("products"), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('views')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("or_saved_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:&nbsp;
    <select name="product_view_id">
        <option value="0">--</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('views'), 'f');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach5DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('f')['view_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('search')['product_view_id'] == $_smarty_tpl->getValue('f')['view_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('f')['name']), ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </select>
    <?php }
}
}
