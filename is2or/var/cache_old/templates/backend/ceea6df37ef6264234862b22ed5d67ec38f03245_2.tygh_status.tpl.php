<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:06
  from 'tygh:views/orders/components/context_menu/status.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae467a81a732_66419935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceea6df37ef6264234862b22ed5d67ec38f03245' => 
    array (
      0 => 'views/orders/components/context_menu/status.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
))) {
function content_69ae467a81a732_66419935 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/orders/components/context_menu';
\Tygh\Languages\Helper::preloadLangVars(array('status','change_to_status'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <span class="caret mobile-hide"></span></span>

    <ul class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order_status_descr'), 'status_name', false, 'status');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('status')->value => $_smarty_tpl->getVariable('status_name')->value) {
$foreach14DoElse = false;
?>
            <li>
                <a class="cm-ajax cm-post cm-ajax-send-form"
                    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.m_update?status=".((string)$_smarty_tpl->getValue('status')))), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="pagination_contents"
                    data-ca-target-form="#orders_list_form"
                >
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("change_to_status", array("[status]"=>$_smarty_tpl->getValue('status_name')), $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify_customer_status'=>true,'notify_department_status'=>true,'notify_vendor_status'=>true,'name_prefix'=>"notify"), (int) 0, $_smarty_current_dir);
?>
    </ul>
</li>
<?php }
}
