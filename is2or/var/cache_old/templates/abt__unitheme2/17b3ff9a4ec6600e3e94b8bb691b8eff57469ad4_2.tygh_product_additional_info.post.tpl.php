<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:35:53
  from 'tygh:addons/is2or_product_notes/hooks/products/product_additional_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea28978a4f2_08969937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b3ff9a4ec6600e3e94b8bb691b8eff57469ad4' => 
    array (
      0 => 'addons/is2or_product_notes/hooks/products/product_additional_info.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea28978a4f2_08969937 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_product_notes/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_product_notes_is_allow_notes')($_smarty_tpl->getValue('product')['product_id']) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <div class="is2or-product-notes__wrapper">
        <?php $_smarty_tpl->assign('product_notes', $_smarty_tpl->getSmarty()->getModifierCallback('fn_product_notes_get_notes')($_smarty_tpl->getValue('product')['product_id'],"cart"), false, NULL);?>

        <div class="ty-control-group ty-product-options__item product-list-field clearfix">
            <label class="ty-control-group__label ty-product-options__item-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('notes', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <textarea class="product-notes__input" data-ca-item-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" rows="3"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_notes')), ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_product_notes/hooks/products/product_additional_info.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_product_notes/hooks/products/product_additional_info.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_product_notes_is_allow_notes')($_smarty_tpl->getValue('product')['product_id']) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <div class="is2or-product-notes__wrapper">
        <?php $_smarty_tpl->assign('product_notes', $_smarty_tpl->getSmarty()->getModifierCallback('fn_product_notes_get_notes')($_smarty_tpl->getValue('product')['product_id'],"cart"), false, NULL);?>

        <div class="ty-control-group ty-product-options__item product-list-field clearfix">
            <label class="ty-control-group__label ty-product-options__item-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('notes', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <textarea class="product-notes__input" data-ca-item-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" rows="3"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_notes')), ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
<?php }
}
}
}
