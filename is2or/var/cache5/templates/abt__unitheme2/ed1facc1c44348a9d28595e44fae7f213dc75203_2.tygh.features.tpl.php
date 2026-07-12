<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_tabs/features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f657d744_45986602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1facc1c44348a9d28595e44fae7f213dc75203' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_tabs/features.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_features.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6835b9f657d744_45986602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__ut2.search_similar','ab__ut2.search_similar'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['product_features']) {?>
    <div class="abt__ut2--product-features">
        <div class="abt__ut2--product-features__container">
            <?php $_smarty_tpl->_assignInScope('ab__search_similar_in_category', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES"));?>
            <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value) {?>
            <div class="cm-ab-similar-filter-container <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>fg-two-col<?php }?>"
                 data-ca-base-url="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_search_similar.js"),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
                <div class="fg-two-col">
                    <?php }?>
                    <div class="abt__ut2--product-features__list">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['product']->value['product_features'],'details_page'=>true,'ab__search_similar_in_category'=>$_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value,'ab__features_count'=>smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['product_features'])), 0, false);
?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['ab__enable_similar_filter']->value) {?>
                        <div class="abt__ut2--product-features__utility">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("ab__ut2.search_similar"),'but_meta'=>"abt__ut2_search_similar_in_category_btn",'but_icon'=>"ut2-icon-filter-empty"), 0, false);
?>
                        </div>
                    <?php }?>
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value && !$_smarty_tpl->tpl_vars['ab__enable_similar_filter']->value) {?>
                <div class="outside-margin"></div>
            <?php }?>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/features.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/features.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['product_features']) {?>
    <div class="abt__ut2--product-features">
        <div class="abt__ut2--product-features__container">
            <?php $_smarty_tpl->_assignInScope('ab__search_similar_in_category', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES"));?>
            <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value) {?>
            <div class="cm-ab-similar-filter-container <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>fg-two-col<?php }?>"
                 data-ca-base-url="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_search_similar.js"),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
                <div class="fg-two-col">
                    <?php }?>
                    <div class="abt__ut2--product-features__list">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['product']->value['product_features'],'details_page'=>true,'ab__search_similar_in_category'=>$_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value,'ab__features_count'=>smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['product_features'])), 0, true);
?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['ab__enable_similar_filter']->value) {?>
                        <div class="abt__ut2--product-features__utility">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("ab__ut2.search_similar"),'but_meta'=>"abt__ut2_search_similar_in_category_btn",'but_icon'=>"ut2-icon-filter-empty"), 0, true);
?>
                        </div>
                    <?php }?>
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value && !$_smarty_tpl->tpl_vars['ab__enable_similar_filter']->value) {?>
                <div class="outside-margin"></div>
            <?php }?>
        </div>
    </div>
<?php }
}
}
}
