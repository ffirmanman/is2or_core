<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:blocks/product_tabs/features.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00ba6088_00593179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf52ae4ee9718debf725994bc547cbc0b8f6907' => 
    array (
      0 => 'blocks/product_tabs/features.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_features.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69fb4a00ba6088_00593179 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_tabs';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ut2.search_similar','ab__ut2.search_similar'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['product_features']) {?>
    <div class="abt__ut2--product-features">
        <div class="abt__ut2--product-features__container">
            <?php $_smarty_tpl->assign('ab__search_similar_in_category', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category')) {?>
            <div class="cm-ab-similar-filter-container <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>fg-two-col<?php }?>"
                 data-ca-base-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('product')['main_category']))), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_search_similar.js"), $_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <div class="fg-two-col">
                    <?php }?>
                    <div class="abt__ut2--product-features__list">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->getValue('product')['product_features'],'details_page'=>true,'ab__search_similar_in_category'=>$_smarty_tpl->getValue('ab__search_similar_in_category'),'ab__features_count'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['product_features'])), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category')) {?>
                    <?php if ($_smarty_tpl->getValue('ab__enable_similar_filter')) {?>
                        <div class="abt__ut2--product-features__utility">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ut2.search_similar", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"abt__ut2_search_similar_in_category_btn disabled",'but_icon'=>"ut2-icon-filter-empty"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                </div>
                <?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category') && !$_smarty_tpl->getValue('ab__enable_similar_filter')) {?>
                <div class="outside-margin"></div>
            <?php }?>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/features.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_tabs/features.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['product_features']) {?>
    <div class="abt__ut2--product-features">
        <div class="abt__ut2--product-features__container">
            <?php $_smarty_tpl->assign('ab__search_similar_in_category', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['search_similar_in_category'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category')) {?>
            <div class="cm-ab-similar-filter-container <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>fg-two-col<?php }?>"
                 data-ca-base-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("categories.view?category_id=".((string)$_smarty_tpl->getValue('product')['main_category']))), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_search_similar.js"), $_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <div class="fg-two-col">
                    <?php }?>
                    <div class="abt__ut2--product-features__list">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->getValue('product')['product_features'],'details_page'=>true,'ab__search_similar_in_category'=>$_smarty_tpl->getValue('ab__search_similar_in_category'),'ab__features_count'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['product_features'])), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category')) {?>
                    <?php if ($_smarty_tpl->getValue('ab__enable_similar_filter')) {?>
                        <div class="abt__ut2--product-features__utility">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ut2.search_similar", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"abt__ut2_search_similar_in_category_btn disabled",'but_icon'=>"ut2-icon-filter-empty"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                </div>
                <?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features_in_two_col'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category') && !$_smarty_tpl->getValue('ab__enable_similar_filter')) {?>
                <div class="outside-margin"></div>
            <?php }?>
        </div>
    </div>
<?php }
}
}
}
