<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:47
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/list_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bfefa36240_27980394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45cc108e8599f68790854c590398c5fe753ef61' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/list_item.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
  ),
),false)) {
function content_6835bfefa36240_27980394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','default_storefront','url','tools','edit','delete','storefront_status'));
$_smarty_tpl->_assignInScope('show_text_storefront_names', (($tmp = $_smarty_tpl->tpl_vars['show_text_storefront_names']->value ?? null)===null||$tmp==='' ? (!fn_check_view_permissions("storefronts.update","GET")) ?? null : $tmp));?>
<tr class="storefront cm-longtap-target"
    data-ca-storefront-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['get_company_ids']->value) {?>
        data-ca-storefront-company-ids="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_language_ids']->value) {?>
        data-ca-storefront-language-ids="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['storefront']->value->getLanguageIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_currency_ids']->value) {?>
        data-ca-storefront-currency-ids="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCurrencyIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_country_codes']->value) {?>
        data-ca-storefront-country-codes="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCountryCodes()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    data-ca-longtap-action="setCheckBox"
    data-ca-longtap-target="input.cm-item"
    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
>
    <td data-th=""
        class="center <?php if (!$_smarty_tpl->tpl_vars['force_selector_display']->value) {?>mobile-hide<?php }?>"
    >
        <?php if ($_smarty_tpl->tpl_vars['select_mode']->value == "multiple") {?>
            <input type="checkbox"
                   name="storefront_ids[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
]"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-item storefront__selector storefront__selector--multiple hide"
            />
        <?php } elseif ($_smarty_tpl->tpl_vars['select_mode']->value == "single") {?>
            <input type="radio"
                   name="storefront_id"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-item storefront__selector storefront__selector--single hide"
            />
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>

    <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_text_storefront_names']->value) {?>
            <span class="storefront__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->name, ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } else { ?>
            <a class="storefront__name link--monochrome"
               href="<?php echo htmlspecialchars((string) fn_url("storefronts.update?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id)), ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['storefront']->value->is_default) {?>
            <span class="muted">(<?php echo $_smarty_tpl->__("default_storefront");?>
)</span>
        <?php }?>
    </td>

    <td width="45%" data-th="<?php echo $_smarty_tpl->__("url");?>
">
        <a class="storefront__url link--monochrome"
           href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront'] === smarty_modifier_enum("YesNo::NO")) {?>http://<?php } else { ?>https://<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->url, ENT_QUOTES, 'UTF-8');?>
"
           target="_blank"
        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->url, ENT_QUOTES, 'UTF-8');?>
</a>
    </td>

    <td width="5%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"storefronts:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"storefronts:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <li>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"storefronts.update?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'text'=>$_smarty_tpl->__("edit")), true);?>

                </li>
            <?php if (!$_smarty_tpl->tpl_vars['storefront']->value->is_default) {?>
                <li>
                    <?php ob_start();
echo $_smarty_tpl->__("delete");
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>"storefronts.delete?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'class'=>"cm-confirm",'text'=>$_prefixVariable1,'method'=>"POST"), true);?>

                </li>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"storefronts:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <div class="hidden-tools">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

        </div>
    </td>

    <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("storefront_status");?>
">
        <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>"company-switch-storefront-status-button storefront__status",'checked'=>$_smarty_tpl->tpl_vars['storefront']->value->status == smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-submit-url"=>'storefronts.update_status',"data-ca-storefront-id"=>$_smarty_tpl->tpl_vars['storefront']->value->storefront_id,"data-ca-opened-status"=>$_prefixVariable2,"data-ca-closed-status"=>$_prefixVariable3,"data-ca-return-url"=>$_smarty_tpl->tpl_vars['return_url']->value)), 0, false);
?>
    </td>
</tr>
<?php }
}
