<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:14
  from 'tygh:addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1fa8e97f8_91710743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d644d067a16c0d28c873a5b12c8a278be0f350' => 
    array (
      0 => 'addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__intelligent_accessories/views/components/product_list_templates/in_add_to_cart.tpl' => 2,
  ),
))) {
function content_69ada1fa8e97f8_91710743 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__intelligent_accessories/views/components';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ia.products_in_add_to_cart','ab__ia.products_in_add_to_cart'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('p_id', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_REQUEST['dispatch'],"checkout.add..",''), false, NULL);
if ($_smarty_tpl->getValue('p_id') > 0) {?>
    <?php $_smarty_tpl->assign('exclude_pid', $_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_SESSION['cart']['products'],'product_id')), false, NULL);?>
    <?php $_smarty_tpl->assign('d', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ia_get_join_list_by_product')(array('product_id'=>$_smarty_tpl->getValue('p_id')),"in_add_to_cart",(($tmp = $_smarty_tpl->getValue('addons')['ab__intelligent_accessories']['max_ia_tabs_in_added_to_cart'] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('d')[0] && is_array($_smarty_tpl->getValue('d')[0])) {?>
        <div class="ty-ab__ia_joins clearfix">
            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ia.products_in_add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/tabs.js"), $_smarty_tpl);?>

            <div class="ty-tabs cm-j-tabs cm-j-tabs-disable-convertation">
                <ul class="ty-tabs__list" style="padding-right:0">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d')[0], 'j');
$_smarty_tpl->getVariable('j')->index = -1;
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('j')->key => $_smarty_tpl->getVariable('j')->value) {
$foreach4DoElse = false;
$_smarty_tpl->getVariable('j')->index++;
$_smarty_tpl->getVariable('j')->first = !$_smarty_tpl->getVariable('j')->index;
$foreach4Backup = clone $_smarty_tpl->getVariable('j');
?>
                    <li id="ab__ia_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('j')->key), ENT_QUOTES, 'UTF-8');?>
" class="abt__ut2_grid_tabs ty-tabs__item cm-js <?php if ($_smarty_tpl->getVariable('j')->first) {?>active<?php }?>">
                        <span><?php echo $_smarty_tpl->getValue('j')['name'];?>
</span>
                    </li>
                <?php
$_smarty_tpl->setVariable('j', $foreach4Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>

            <div class="cm-tabs-content ty-tabs__content clearfix">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d')[0], 'j');
$_smarty_tpl->getVariable('j')->index = -1;
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('j')->key => $_smarty_tpl->getVariable('j')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getVariable('j')->index++;
$_smarty_tpl->getVariable('j')->first = !$_smarty_tpl->getVariable('j')->index;
$foreach5Backup = clone $_smarty_tpl->getVariable('j');
?>
                    <div id="content_ab__ia_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('j')->key), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/views/components/product_list_templates/in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_pagination'=>true,'no_sorting'=>true,'products'=>(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ia_get_products_by_join')(array('product_id'=>$_smarty_tpl->getValue('p_id'),'join_id'=>$_smarty_tpl->getValue('j')['join_id'],'exclude_pid'=>$_smarty_tpl->getValue('exclude_pid')),$_smarty_tpl->getValue('addons')['ab__intelligent_accessories']['max_products_of_ia_tab_in_added_to_cart']) ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php
$_smarty_tpl->setVariable('j', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            Tygh.$.commonInit('div.ty-ab__ia_joins.clearfix');
        <?php echo '</script'; ?>
>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('p_id', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_REQUEST['dispatch'],"checkout.add..",''), false, NULL);
if ($_smarty_tpl->getValue('p_id') > 0) {?>
    <?php $_smarty_tpl->assign('exclude_pid', $_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_SESSION['cart']['products'],'product_id')), false, NULL);?>
    <?php $_smarty_tpl->assign('d', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ia_get_join_list_by_product')(array('product_id'=>$_smarty_tpl->getValue('p_id')),"in_add_to_cart",(($tmp = $_smarty_tpl->getValue('addons')['ab__intelligent_accessories']['max_ia_tabs_in_added_to_cart'] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('d')[0] && is_array($_smarty_tpl->getValue('d')[0])) {?>
        <div class="ty-ab__ia_joins clearfix">
            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ia.products_in_add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/tabs.js"), $_smarty_tpl);?>

            <div class="ty-tabs cm-j-tabs cm-j-tabs-disable-convertation">
                <ul class="ty-tabs__list" style="padding-right:0">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d')[0], 'j');
$_smarty_tpl->getVariable('j')->index = -1;
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('j')->key => $_smarty_tpl->getVariable('j')->value) {
$foreach6DoElse = false;
$_smarty_tpl->getVariable('j')->index++;
$_smarty_tpl->getVariable('j')->first = !$_smarty_tpl->getVariable('j')->index;
$foreach6Backup = clone $_smarty_tpl->getVariable('j');
?>
                    <li id="ab__ia_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('j')->key), ENT_QUOTES, 'UTF-8');?>
" class="abt__ut2_grid_tabs ty-tabs__item cm-js <?php if ($_smarty_tpl->getVariable('j')->first) {?>active<?php }?>">
                        <span><?php echo $_smarty_tpl->getValue('j')['name'];?>
</span>
                    </li>
                <?php
$_smarty_tpl->setVariable('j', $foreach6Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>

            <div class="cm-tabs-content ty-tabs__content clearfix">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d')[0], 'j');
$_smarty_tpl->getVariable('j')->index = -1;
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('j')->key => $_smarty_tpl->getVariable('j')->value) {
$foreach7DoElse = false;
$_smarty_tpl->getVariable('j')->index++;
$_smarty_tpl->getVariable('j')->first = !$_smarty_tpl->getVariable('j')->index;
$foreach7Backup = clone $_smarty_tpl->getVariable('j');
?>
                    <div id="content_ab__ia_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('j')->key), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/views/components/product_list_templates/in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_pagination'=>true,'no_sorting'=>true,'products'=>(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ia_get_products_by_join')(array('product_id'=>$_smarty_tpl->getValue('p_id'),'join_id'=>$_smarty_tpl->getValue('j')['join_id'],'exclude_pid'=>$_smarty_tpl->getValue('exclude_pid')),$_smarty_tpl->getValue('addons')['ab__intelligent_accessories']['max_products_of_ia_tab_in_added_to_cart']) ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php
$_smarty_tpl->setVariable('j', $foreach7Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            Tygh.$.commonInit('div.ty-ab__ia_joins.clearfix');
        <?php echo '</script'; ?>
>
    <?php }
}
}
}
}
