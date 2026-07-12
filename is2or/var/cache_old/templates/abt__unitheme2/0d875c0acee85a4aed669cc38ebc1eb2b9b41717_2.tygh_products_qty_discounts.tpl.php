<?php
/* Smarty version 5.4.3, created on 2026-03-10 01:34:59
  from 'tygh:views/products/components/products_qty_discounts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69af4b138ed519_03052576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d875c0acee85a4aed669cc38ebc1eb2b9b41717' => 
    array (
      0 => 'views/products/components/products_qty_discounts.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69af4b138ed519_03052576 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
\Tygh\Languages\Helper::preloadLangVars(array('text_qty_discounts','quantity','price','text_qty_discounts','quantity','price'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ut2-qd">
    <div class="ut2-qd__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_qty_discounts", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
    <div class="ut2-qd__wrap">
        <div class="ut2-qd__col">
	        <div class="ut2-qd__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
	        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['prices'], 'price');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('price')->value) {
$foreach0DoElse = false;
?>
	            <div class="ut2-qd__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('price')['lower_limit']), ENT_QUOTES, 'UTF-8');?>
+</div>
	        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        <div class="ut2-qd__col">
	        <div class="ut2-qd__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
	        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['prices'], 'price');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('price')->value) {
$foreach1DoElse = false;
?>
	            <div class="ut2-qd__price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('price')['price']), (int) 0, $_smarty_current_dir);
?></div>
	        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/products_qty_discounts.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/products_qty_discounts.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ut2-qd">
    <div class="ut2-qd__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_qty_discounts", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
    <div class="ut2-qd__wrap">
        <div class="ut2-qd__col">
	        <div class="ut2-qd__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
	        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['prices'], 'price');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('price')->value) {
$foreach2DoElse = false;
?>
	            <div class="ut2-qd__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('price')['lower_limit']), ENT_QUOTES, 'UTF-8');?>
+</div>
	        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        <div class="ut2-qd__col">
	        <div class="ut2-qd__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
	        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['prices'], 'price');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('price')->value) {
$foreach3DoElse = false;
?>
	            <div class="ut2-qd__price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('price')['price']), (int) 0, $_smarty_current_dir);
?></div>
	        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
}
