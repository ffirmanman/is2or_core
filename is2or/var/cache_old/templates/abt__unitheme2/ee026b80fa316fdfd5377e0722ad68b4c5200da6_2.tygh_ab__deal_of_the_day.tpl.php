<?php
/* Smarty version 5.4.3, created on 2026-03-09 06:02:47
  from 'tygh:addons/ab__deal_of_the_day/blocks/ab__deal_of_the_day.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae385758a191_94114859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee026b80fa316fdfd5377e0722ad68b4c5200da6' => 
    array (
      0 => 'addons/ab__deal_of_the_day/blocks/ab__deal_of_the_day.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl' => 4,
    'tygh:addons/ab__deal_of_the_day/blocks/products/components/products_scroller_pd.tpl' => 4,
  ),
))) {
function content_69ae385758a191_94114859 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/blocks';
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.view_promotion','ab__dotd.view_promotion','ab__dotd.all_promotions_list','ab__dotd.all_promotions_list','ab__dotd.view_promotion','ab__dotd.view_promotion','ab__dotd.all_promotions_list','ab__dotd.view_promotion','ab__dotd.view_promotion','ab__dotd.all_promotions_list','ab__dotd.all_promotions_list','ab__dotd.view_promotion','ab__dotd.view_promotion','ab__dotd.all_promotions_list'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('promotion') && $_smarty_tpl->getValue('promotion')['status'] == 'A' && (!$_smarty_tpl->getValue('promotion')['to_date'] || $_smarty_tpl->getValue('promotion')['to_date'] > time()) && (!$_smarty_tpl->getValue('promotion')['from_date'] || $_smarty_tpl->getValue('promotion')['from_date'] < time())) {?>

    <?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_promotion_products')($_smarty_tpl->getValue('promotion'),$_smarty_tpl->getValue('block')['properties']), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('products')) {?>
        <div class="ab__deal_of_the_day <?php if ($_smarty_tpl->getValue('block')['properties']['product_full_width'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>pd-fullwidth<?php }?>">
            <?php if ($_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?>
                <div class="pd-block">
                    <div class="pd-promotion__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['name']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <div class="pd-promotion-descr">
                        <?php echo $_smarty_tpl->getValue('promotion')['short_description'];?>

                    </div>
                    <?php if ($_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || !$_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer']) {?>
                        <?php if ($_smarty_tpl->getValue('promotion')['to_date'] && $_smarty_tpl->getValue('promotion')['to_date'] > time()) {?>
                            <div class="time-left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                    <div class="pd-promotion__buttons">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-btn ty-btn__primary"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.list")), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.all_promotions_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-btn ty-btn__text"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.all_promotions_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                    </div>
                </div>
                <div class="pd-content-block">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/blocks/products/components/products_scroller_pd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('products')), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php } else { ?>
                <div class="pd-block">
                    <div class="pd-promotion__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['name']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <div class="pd-promotion-descr"><?php echo $_smarty_tpl->getValue('promotion')['short_description'];?>
</div>
                    <?php if ($_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || !$_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer']) {?>
                        <?php if ($_smarty_tpl->getValue('promotion')['to_date'] && $_smarty_tpl->getValue('promotion')['to_date'] > time()) {?>
                            <div class="time-left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                </div>
                <div class="pd-content-block">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/blocks/products/components/products_scroller_pd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('products')), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="pd-promotion__buttons">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-btn ty-btn__primary"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.list")), ENT_QUOTES, 'UTF-8');?>
" title="" class="ty-btn"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.all_promotions_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                </div>
            <?php }?>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/blocks/ab__deal_of_the_day.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/blocks/ab__deal_of_the_day.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('promotion') && $_smarty_tpl->getValue('promotion')['status'] == 'A' && (!$_smarty_tpl->getValue('promotion')['to_date'] || $_smarty_tpl->getValue('promotion')['to_date'] > time()) && (!$_smarty_tpl->getValue('promotion')['from_date'] || $_smarty_tpl->getValue('promotion')['from_date'] < time())) {?>

    <?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_promotion_products')($_smarty_tpl->getValue('promotion'),$_smarty_tpl->getValue('block')['properties']), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('products')) {?>
        <div class="ab__deal_of_the_day <?php if ($_smarty_tpl->getValue('block')['properties']['product_full_width'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>pd-fullwidth<?php }?>">
            <?php if ($_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?>
                <div class="pd-block">
                    <div class="pd-promotion__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['name']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <div class="pd-promotion-descr">
                        <?php echo $_smarty_tpl->getValue('promotion')['short_description'];?>

                    </div>
                    <?php if ($_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || !$_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer']) {?>
                        <?php if ($_smarty_tpl->getValue('promotion')['to_date'] && $_smarty_tpl->getValue('promotion')['to_date'] > time()) {?>
                            <div class="time-left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                    <div class="pd-promotion__buttons">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-btn ty-btn__primary"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.list")), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.all_promotions_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-btn ty-btn__text"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.all_promotions_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                    </div>
                </div>
                <div class="pd-content-block">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/blocks/products/components/products_scroller_pd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('products')), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php } else { ?>
                <div class="pd-block">
                    <div class="pd-promotion__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['name']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <div class="pd-promotion-descr"><?php echo $_smarty_tpl->getValue('promotion')['short_description'];?>
</div>
                    <?php if ($_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || !$_smarty_tpl->getValue('block')['properties']['ab__dotd_enable_countdown_timer']) {?>
                        <?php if ($_smarty_tpl->getValue('promotion')['to_date'] && $_smarty_tpl->getValue('promotion')['to_date'] > time()) {?>
                            <div class="time-left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                </div>
                <div class="pd-content-block">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/blocks/products/components/products_scroller_pd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->getValue('products')), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="pd-promotion__buttons">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-btn ty-btn__primary"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.view_promotion", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.list")), ENT_QUOTES, 'UTF-8');?>
" title="" class="ty-btn"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.all_promotions_list", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                </div>
            <?php }?>
        </div>
    <?php }
}
}
}
}
