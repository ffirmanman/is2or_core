<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:55:21
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683456a9691563_83479641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1584ef553346bd8221ae7ec1ba2ea5ac8eca34' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/list.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:views/storefronts/components/list_item_readonly.tpl' => 1,
    'tygh:views/storefronts/components/list_item.tpl' => 1,
  ),
),false)) {
function content_683456a9691563_83479641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','url','storefront_status','ttc_stores_status','no_data'));
if ($_smarty_tpl->tpl_vars['storefronts']->value) {?>
    <div class="table-responsive-wrapper longtap-selection">
        <table class="table table-middle table--relative table-responsive">
            <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th class="mobile-hide" width="1%">
                    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value === "multiple") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <input type="checkbox"
                               class="bulkedit-toggler hide"
                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    <?php }?>
                </th>
                <th>
                    <a class="cm-ajax"
                       href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['sort_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-target-id="pagination_contents"
                    >
                        <?php echo $_smarty_tpl->__("name");?>

                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "name") {?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_active_icon_class']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_dummy_icon_class']->value;?>

                        <?php }?>
                    </a>
                </th>

                <th>
                    <a class="cm-ajax"
                       href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['sort_url']->value)."&sort_by=url&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-target-id="pagination_contents"
                    >
                        <?php echo $_smarty_tpl->__("url");?>

                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "url") {?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_active_icon_class']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_dummy_icon_class']->value;?>

                        <?php }?>
                    </a>
                </th>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"storefronts:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"storefronts:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"storefronts:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php if (!$_smarty_tpl->tpl_vars['is_readonly']->value) {?>
                    <th width="5%" class="nowrap" >
                        &nbsp;
                    </th>
                <?php }?>

                <th width="15%" class="right">
                    <a class="cm-ajax"
                       href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['sort_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-target-id="pagination_contents"
                    >
                        <?php echo $_smarty_tpl->__("storefront_status");?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("ttc_stores_status")), 0, false);
?>
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "status") {?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_active_icon_class']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_dummy_icon_class']->value;?>

                        <?php }?>
                    </a>
                </th>
            </tr>
            </thead>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['storefronts']->value, 'storefront');
$_smarty_tpl->tpl_vars['storefront']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->value) {
$_smarty_tpl->tpl_vars['storefront']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['is_readonly']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/list_item_readonly.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('storefront'=>$_smarty_tpl->tpl_vars['storefront']->value,'select_mode'=>$_smarty_tpl->tpl_vars['select_mode']->value,'force_selector_display'=>$_smarty_tpl->tpl_vars['force_selector_display']->value,'get_company_ids'=>$_smarty_tpl->tpl_vars['get_company_ids']->value,'get_language_ids'=>$_smarty_tpl->tpl_vars['get_language_ids']->value,'get_currency_ids'=>$_smarty_tpl->tpl_vars['get_currency_ids']->value,'get_country_codes'=>$_smarty_tpl->tpl_vars['get_country_codes']->value), 0, true);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/list_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('storefront'=>$_smarty_tpl->tpl_vars['storefront']->value,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'select_mode'=>$_smarty_tpl->tpl_vars['select_mode']->value,'force_selector_display'=>$_smarty_tpl->tpl_vars['force_selector_display']->value,'get_company_ids'=>$_smarty_tpl->tpl_vars['get_company_ids']->value,'get_language_ids'=>$_smarty_tpl->tpl_vars['get_language_ids']->value,'get_currency_ids'=>$_smarty_tpl->tpl_vars['get_currency_ids']->value,'get_country_codes'=>$_smarty_tpl->tpl_vars['get_country_codes']->value), 0, true);
?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }
}
}
