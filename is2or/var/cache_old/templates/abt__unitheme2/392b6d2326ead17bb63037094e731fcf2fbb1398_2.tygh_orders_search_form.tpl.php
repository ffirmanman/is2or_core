<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:37:46
  from 'tygh:views/orders/components/orders_search_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea2fad599d1_74132351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392b6d2326ead17bb63037094e731fcf2fbb1398' => 
    array (
      0 => 'views/orders/components/orders_search_form.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 2,
    'tygh:common/status.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69aea2fad599d1_74132351 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/orders/components';
\Tygh\Languages\Helper::preloadLangVars(array('order_id','total','order_status','storefront_search_button','order_id','total','order_status','storefront_search_button'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">

<div class="clearfix">
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['order_id']), ENT_QUOTES, 'UTF-8');?>
" size="10" class="ty-search-form__input" />
    </div>
    <?php }?>

    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;(<?php echo $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['symbol'];?>
)</label>
        <input type="text" name="total_sec_from" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_sec_from']), ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />&nbsp;&#8211;&nbsp;<input type="text" name="total_sec_to" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_sec_to']), ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />
    </div>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->getValue('search')['period'],'form_name'=>"orders_search_form"), (int) 0, $_smarty_current_dir);
?>
</div>

<hr>

<div class="ty-control-group">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->getValue('search')['status'],'display'=>"checkboxes",'name'=>"status",'checkboxes_meta'=>"ty-orders-search__options-status"), (int) 0, $_smarty_current_dir);
?>
</div>

<div class="buttons-container ty-search-form__buttons-container">
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_button", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>"dispatch[orders.search]"), (int) 0, $_smarty_current_dir);
?>
</div>
</form><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/orders_search_form.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/orders/components/orders_search_form.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">

<div class="clearfix">
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_id", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['order_id']), ENT_QUOTES, 'UTF-8');?>
" size="10" class="ty-search-form__input" />
    </div>
    <?php }?>

    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;(<?php echo $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['symbol'];?>
)</label>
        <input type="text" name="total_sec_from" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_sec_from']), ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />&nbsp;&#8211;&nbsp;<input type="text" name="total_sec_to" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_sec_to']), ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />
    </div>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->getValue('search')['period'],'form_name'=>"orders_search_form"), (int) 0, $_smarty_current_dir);
?>
</div>

<hr>

<div class="ty-control-group">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->getValue('search')['status'],'display'=>"checkboxes",'name'=>"status",'checkboxes_meta'=>"ty-orders-search__options-status"), (int) 0, $_smarty_current_dir);
?>
</div>

<div class="buttons-container ty-search-form__buttons-container">
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_button", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>"dispatch[orders.search]"), (int) 0, $_smarty_current_dir);
?>
</div>
</form><?php }
}
}
