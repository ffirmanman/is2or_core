<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:37:46
  from 'tygh:views/orders/search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea2fad367e7_25930694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f9769969f846784bb72407c10db0cfbae042687' => 
    array (
      0 => 'views/orders/search.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/orders/components/orders_search_form.tpl' => 2,
    'tygh:common/section.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:common/status.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 6,
  ),
))) {
function content_69aea2fad367e7_25930694 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/orders';
\Tygh\Languages\Helper::preloadLangVars(array('search_options','id','status','customer','date','total','actions','print_invoice','re_order','search_products','text_no_orders','orders','search_options','id','status','customer','date','total','actions','print_invoice','re_order','search_products','text_no_orders','orders'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "section", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->renderSubTemplate("tygh:common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'section_content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'section'),'class'=>"ty-search-form",'collapse'=>true), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"sort_by","sort_order"), false, NULL);
if ($_smarty_tpl->getValue('search')['sort_order'] == "asc") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'), $_smarty_tpl);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'), $_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->assign('ajax_class', "cm-ajax", false, NULL);?>

<?php }?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<table class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "order_id") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=status&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "status") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=customer&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("customer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "customer") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=date&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("date", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "date") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=total&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "total") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th class="ty-orders-search__header ty-orders-search__header--actions"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("actions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'o');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('o')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.details?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']))), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['order_id']), ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
            <td class="ty-orders-search__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->getValue('o')['status'],'display'=>"view"), (int) 0, $_smarty_current_dir);
?></td>
            <td class="ty-orders-search__item">
                <ul class="ty-orders-search__user-info">
                    <li class="ty-orders-search__user-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                    <li  class="ty-orders-search__user-mail"><a href="mailto:<?php echo rawurlencode((string)$_smarty_tpl->getValue('o')['email']);?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['email']), ENT_QUOTES, 'UTF-8');?>
</a></li>
                </ul>
            </td>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.details?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search__item-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('o')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</a></td>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <td class="ty-orders-search__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('o')['total']), (int) 0, $_smarty_current_dir);
?></td>
            <td class="ty-orders-search__item ty-orders-search__item--actions">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-new-window ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("print_invoice", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-print"), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("re_order", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search_products", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"products.search?search_performed=Y&order_ids=".((string)$_smarty_tpl->getValue('o')['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-search"), (int) 0, $_smarty_current_dir);
?>
            </td>
        </tr>
    <?php
}
if ($foreach0DoElse) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6">
                <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/search.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/orders/search.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "section", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->renderSubTemplate("tygh:common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'section_content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'section'),'class'=>"ty-search-form",'collapse'=>true), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"sort_by","sort_order"), false, NULL);
if ($_smarty_tpl->getValue('search')['sort_order'] == "asc") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'), $_smarty_tpl);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'), $_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->assign('ajax_class', "cm-ajax", false, NULL);?>

<?php }?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<table class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "order_id") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=status&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "status") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=customer&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("customer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "customer") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=date&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("date", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "date") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <th><a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=total&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('search')['sort_by'] === "total") {
echo $_smarty_tpl->getValue('sort_sign');
}?></th>
            <th class="ty-orders-search__header ty-orders-search__header--actions"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("actions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'o');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('o')->value) {
$foreach1DoElse = false;
?>
        <tr>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.details?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']))), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['order_id']), ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
            <td class="ty-orders-search__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->getValue('o')['status'],'display'=>"view"), (int) 0, $_smarty_current_dir);
?></td>
            <td class="ty-orders-search__item">
                <ul class="ty-orders-search__user-info">
                    <li class="ty-orders-search__user-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['lastname']), ENT_QUOTES, 'UTF-8');?>
</li>
                    <li  class="ty-orders-search__user-mail"><a href="mailto:<?php echo rawurlencode((string)$_smarty_tpl->getValue('o')['email']);?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('o')['email']), ENT_QUOTES, 'UTF-8');?>
</a></li>
                </ul>
            </td>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.details?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search__item-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('o')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</a></td>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"orders:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <td class="ty-orders-search__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('o')['total']), (int) 0, $_smarty_current_dir);
?></td>
            <td class="ty-orders-search__item ty-orders-search__item--actions">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-new-window ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("print_invoice", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-print"), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("re_order", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->getValue('o')['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn-icon",'but_role'=>"text",'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search_products", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_href'=>"products.search?search_performed=Y&order_ids=".((string)$_smarty_tpl->getValue('o')['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-search"), (int) 0, $_smarty_current_dir);
?>
            </td>
        </tr>
    <?php
}
if ($foreach1DoElse) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6">
                <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_orders", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("orders", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
