<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:47
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bfefa9c0a4_08676197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7fbd37c2b88504a632827ad94d75ba5a847b57f' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/search_form.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/adaptive_object_selection.tpl' => 2,
    'tygh:pickers/companies/picker.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_6835bfefa9c0a4_08676197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','name','url','status','all','languages','currencies','countries','vendors','all_vendors'));
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
        <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>
<form name="storefronts_search_form"
      action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
      method="get"
      class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden"
           name="select_mode"
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_mode']->value, ENT_QUOTES, 'UTF-8');?>
"
    />

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


        <div class="sidebar-field">
            <label for="elm_name"
            ><?php echo $_smarty_tpl->__("name");?>
</label>
            <input type="text"
                   name="name"
                   id="elm_name"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
        <div class="sidebar-field">
            <label for="elm_url"
            ><?php echo $_smarty_tpl->__("url");?>
</label>
            <input type="text"
                   name="url"
                   id="elm_url"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
        <div class="sidebar-field">
            <label for="elm_status"
            ><?php echo $_smarty_tpl->__("status");?>
</label>
            <select name="status"
                    id="elm_status"
            >
                <option value=""
                ><?php echo $_smarty_tpl->__("all");?>
</option>
                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] === smarty_modifier_enum("StorefrontStatuses::OPEN")) {?>
                            selected
                        <?php }?>
                ><?php echo htmlspecialchars((string) "ON", ENT_QUOTES, 'UTF-8');?>
</option>
                <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] === smarty_modifier_enum("StorefrontStatuses::CLOSED")) {?>
                            selected
                        <?php }?>
                ><?php echo htmlspecialchars((string) "OFF", ENT_QUOTES, 'UTF-8');?>
</option>
            </select>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
        <div class="row-fluid">
            <div class="group span6 form-horizontal">
                <div class="control-group">
                    <label class="control-label"
                           for="elm_languages"
                    ><?php echo $_smarty_tpl->__("languages");?>
</label>
                    <div class="controls advanced_search__localization">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"language_ids",'input_id'=>"elm_languages",'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['language_ids'],'items'=>$_smarty_tpl->tpl_vars['languages']->value,'id_field'=>"lang_id",'name_field'=>"name",'type'=>"languages",'load_items_url'=>"languages.selector",'class_prefix'=>"localization",'close_on_select'=>"false"), 0, false);
?>
                    </div>
                </div>
            </div>
            <div class="group span6 form-horizontal">
                <div class="control-group">
                    <label class="control-label"
                           for="elm_currencies"
                    ><?php echo $_smarty_tpl->__("currencies");?>
</label>
                    <div class="controls advanced_search__localization">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"currency_ids",'input_id'=>"elm_currencis",'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['currency_ids'],'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'id_field'=>"currency_id",'name_field'=>"description",'type'=>"currencies",'load_items_url'=>"currencies.selector",'class_prefix'=>"localization",'close_on_select'=>"false"), 0, true);
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="group span12 form-horizontal">
                <div class="control-group">
                    <label for="elm_countries"
                           class="control-label"
                    ><?php echo $_smarty_tpl->__("countries");?>
</label>
                    <div class="controls">
                        <select name="country_codes[]"
                                multiple="multiple"
                                id="elm_countries"
                                size="10"
                        >
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_countries']->value, 'country', false, 'country_code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_code']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (in_array($_smarty_tpl->tpl_vars['country_code']->value,$_smarty_tpl->tpl_vars['search']->value['country_codes'])) {?>
                                            selected
                                        <?php }?>
                                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="group span12 form-horizontal">
                <div class="control-group">
                    <label for="elm_companies"
                           class="control-label"
                    ><?php echo $_smarty_tpl->__("vendors");?>
</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_ids'],'view_mode'=>"list",'input_name'=>"company_ids",'checkbox_name'=>"company_ids",'no_item_text'=>$_smarty_tpl->__("all_vendors")), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"storefronts",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value,'not_saved'=>true), 0, false);
?>
</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div>
<?php }
}
}
