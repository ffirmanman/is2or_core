<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:15
  from 'tygh:blocks/vendor_list_templates/featured_vendors.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96072595d9_16996373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '492819743d82ba490d60d8a5437850e025593d25' => 
    array (
      0 => 'blocks/vendor_list_templates/featured_vendors.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/company_data.tpl' => 2,
  ),
))) {
function content_69ad96072595d9_16996373 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks/vendor_list_templates';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_location', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_location'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);
$_smarty_tpl->assign('show_rating', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);
$_smarty_tpl->assign('show_vendor_rating', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_vendor_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);
$_smarty_tpl->assign('show_products_count', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_products_count'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);?>

<?php $_smarty_tpl->assign('columns', $_smarty_tpl->getValue('block')['properties']['number_of_columns'], false, NULL);
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);?>

<?php if ($_smarty_tpl->getValue('items')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('items'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"splitted_companies"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"cell_width"), $_smarty_tpl);?>


    <div class="grid-list ty-grid-vendors">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_companies'), 'scompanies', false, NULL, 'scomp', array (
));
$foreach38DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('scompanies')->value) {
$foreach38DoElse = false;
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scompanies'), 'company', false, NULL, 'scompanies', array (
));
$foreach39DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach39DoElse = false;
?><div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('company')) {
if ($_smarty_tpl->getValue('company')['logos']) {
$_smarty_tpl->assign('show_logo', true, false, NULL);
} else {
$_smarty_tpl->assign('show_logo', false, false, NULL);
}
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('company')['company_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('company')['company_id']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->getValue('company'),'show_links'=>true,'show_logo'=>$_smarty_tpl->getValue('show_logo'),'show_location'=>$_smarty_tpl->getValue('show_location')), (int) 0, $_smarty_current_dir);
?><div class="ty-grid-list__item"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:featured_vendors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ty-grid-list__company-logo"><?php $_smarty_tpl->assign('logo', "logo_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('logo'));?>
</div><?php $_smarty_tpl->assign('location', "location_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getValue('show_location') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location')))) {?><div class="ty-grid-list__item-location"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="company-location"><bdi><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location'));?>
</bdi></a></div><?php }
$_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating')) && $_smarty_tpl->getValue('show_rating')) {?><div class="grid-list__rating"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'));?>
</div><?php }?><div class="ty-grid-list__group"><?php $_smarty_tpl->assign('vendor_rating', "vendor_rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('vendor_rating')) && $_smarty_tpl->getValue('show_vendor_rating')) {?><div class="ty-grid-list__vendor_rating"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('vendor_rating'));?>
</div><?php }?><div class="ty-grid-list__total-products"><?php $_smarty_tpl->assign('products_count', "products_count_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('products_count')) && $_smarty_tpl->getValue('show_products_count')) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('products_count'));
}?></div></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:featured_vendors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendor_list_templates/featured_vendors.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/vendor_list_templates/featured_vendors.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_location', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_location'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);
$_smarty_tpl->assign('show_rating', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);
$_smarty_tpl->assign('show_vendor_rating', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_vendor_rating'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);
$_smarty_tpl->assign('show_products_count', (($tmp = $_smarty_tpl->getValue('block')['properties']['show_products_count'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y", false, NULL);?>

<?php $_smarty_tpl->assign('columns', $_smarty_tpl->getValue('block')['properties']['number_of_columns'], false, NULL);
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);?>

<?php if ($_smarty_tpl->getValue('items')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('items'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"splitted_companies"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "5" ?? null : $tmp),'assign'=>"cell_width"), $_smarty_tpl);?>


    <div class="grid-list ty-grid-vendors">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_companies'), 'scompanies', false, NULL, 'scomp', array (
));
$foreach40DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('scompanies')->value) {
$foreach40DoElse = false;
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scompanies'), 'company', false, NULL, 'scompanies', array (
));
$foreach41DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach41DoElse = false;
?><div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('company')) {
if ($_smarty_tpl->getValue('company')['logos']) {
$_smarty_tpl->assign('show_logo', true, false, NULL);
} else {
$_smarty_tpl->assign('show_logo', false, false, NULL);
}
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('company')['company_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('company')['company_id']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->getValue('company'),'show_links'=>true,'show_logo'=>$_smarty_tpl->getValue('show_logo'),'show_location'=>$_smarty_tpl->getValue('show_location')), (int) 0, $_smarty_current_dir);
?><div class="ty-grid-list__item"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:featured_vendors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ty-grid-list__company-logo"><?php $_smarty_tpl->assign('logo', "logo_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('logo'));?>
</div><?php $_smarty_tpl->assign('location', "location_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getValue('show_location') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location')))) {?><div class="ty-grid-list__item-location"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="company-location"><bdi><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('location'));?>
</bdi></a></div><?php }
$_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating')) && $_smarty_tpl->getValue('show_rating')) {?><div class="grid-list__rating"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'));?>
</div><?php }?><div class="ty-grid-list__group"><?php $_smarty_tpl->assign('vendor_rating', "vendor_rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('vendor_rating')) && $_smarty_tpl->getValue('show_vendor_rating')) {?><div class="ty-grid-list__vendor_rating"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('vendor_rating'));?>
</div><?php }?><div class="ty-grid-list__total-products"><?php $_smarty_tpl->assign('products_count', "products_count_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('products_count')) && $_smarty_tpl->getValue('show_products_count')) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('products_count'));
}?></div></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:featured_vendors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
