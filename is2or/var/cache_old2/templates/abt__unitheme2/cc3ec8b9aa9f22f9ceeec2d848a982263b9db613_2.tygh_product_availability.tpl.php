<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/warehouses/components/product_availability.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa4da9a6_25402929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc3ec8b9aa9f22f9ceeec2d848a982263b9db613' => 
    array (
      0 => 'addons/warehouses/components/product_availability.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaa4da9a6_25402929 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/warehouses/components';
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.product_in_stock','warehouses.product_available_if_ordered','warehouses.in_n_stores','warehouses.in_n_stores','warehouses.product_in_stock','warehouses.product_available_if_ordered','warehouses.in_n_stores','warehouses.in_n_stores'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('in_stock_stores_count') || $_smarty_tpl->getValue('available_stores_count')) {?>
    <div class="ty-warehouses-shipping__item">
        <div class="ty-warehouses-shipping__label">
            <a class="ty-warehouses-shipping__link cm-external-click"
               data-ca-warehouses-href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&selected_section=availability_in_stores#availability_in_stores")), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-warehouses-tab-anchor="#availability_in_stores"
               data-ca-warehouses-tab-selector=".ty-tabs__item#availability_in_stores"
               data-ca-warehouses-dialog-opener-selector=".cm-dialog-opener#availability_in_stores"
               data-ca-external-click-id="availability_in_stores"
            >
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cart"), $_smarty_tpl);?>

                <span class="ty-warehouses-shipping__link-text">
                    <?php if ($_smarty_tpl->getValue('in_stock_stores_count')) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.product_in_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.product_available_if_ordered", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php }?>
                </span>
            </a>
            <div class="ty-warehouses-shipping__value">
                <?php if ($_smarty_tpl->getValue('in_stock_stores_count')) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.in_n_stores", array($_smarty_tpl->getValue('in_stock_stores_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.in_n_stores", array($_smarty_tpl->getValue('available_stores_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php }?>
            </div>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/warehouses/components/product_availability.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/warehouses/components/product_availability.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('in_stock_stores_count') || $_smarty_tpl->getValue('available_stores_count')) {?>
    <div class="ty-warehouses-shipping__item">
        <div class="ty-warehouses-shipping__label">
            <a class="ty-warehouses-shipping__link cm-external-click"
               data-ca-warehouses-href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&selected_section=availability_in_stores#availability_in_stores")), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-warehouses-tab-anchor="#availability_in_stores"
               data-ca-warehouses-tab-selector=".ty-tabs__item#availability_in_stores"
               data-ca-warehouses-dialog-opener-selector=".cm-dialog-opener#availability_in_stores"
               data-ca-external-click-id="availability_in_stores"
            >
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cart"), $_smarty_tpl);?>

                <span class="ty-warehouses-shipping__link-text">
                    <?php if ($_smarty_tpl->getValue('in_stock_stores_count')) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.product_in_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.product_available_if_ordered", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <?php }?>
                </span>
            </a>
            <div class="ty-warehouses-shipping__value">
                <?php if ($_smarty_tpl->getValue('in_stock_stores_count')) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.in_n_stores", array($_smarty_tpl->getValue('in_stock_stores_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.in_n_stores", array($_smarty_tpl->getValue('available_stores_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php }?>
            </div>
        </div>
    </div>
<?php }
}
}
}
