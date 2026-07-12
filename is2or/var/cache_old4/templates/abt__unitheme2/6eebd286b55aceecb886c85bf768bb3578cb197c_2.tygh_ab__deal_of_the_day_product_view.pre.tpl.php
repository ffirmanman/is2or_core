<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a004b0114_98484706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eebd286b55aceecb886c85bf768bb3578cb197c' => 
    array (
      0 => 'addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl',
      1 => 1777315994,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl' => 2,
  ),
))) {
function content_69fb4a004b0114_98484706 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('period','ab__dotd.page_action_period','ab__dotd.detailed','ab__dotd.detailed','period','ab__dotd.page_action_period','ab__dotd.detailed','ab__dotd.detailed'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['promotions']) {?>
    <?php $_smarty_tpl->assign('image_height', 50, false, NULL);?>
    <?php $_smarty_tpl->assign('promotions_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_filter_applied_promotions')($_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']),array("exclude_hidden"=>true)), false, NULL);?>
    <?php $_smarty_tpl->assign('promotion', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_cached_promotion_data')($_smarty_tpl->getValue('promotions_ids')[0]), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('promotion')) {?>
        <div class="ab__deal_of_the_day pd-dp">
            <div class="col1">
                <div class="pd-promotion__img">
                    <i class="ut2-icon-local_activity"></i>
                </div>

                <div class="pd-promotion__content">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" class="pd-promotion__title" title="" target="_blank"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['name']), ENT_QUOTES, 'UTF-8');?>
</a>

                    <?php if ($_smarty_tpl->getValue('promotion')['show_counter_on_product_page'] === "N") {?>
                        <?php if ($_smarty_tpl->getValue('promotion')['to_date'] || $_smarty_tpl->getValue('promotion')['from_date']) {?>
                            <div class="ab__dotd_promotion_date">
                                <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
                                    <?php if ($_smarty_tpl->getValue('promotion')['from_date']) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.from', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['from_date'],"%d.%m.%Y")), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('promotion')['to_date']) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.to', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['to_date'],"%d.%m.%Y")), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </small>
                            </div>
                        <?php }?>
                    <?php }?>

                    <?php if (!$_smarty_tpl->getValue('quick_view')) {?>
                        <div class="pd-details-promo-link">
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "promotion_info_popup_opener", null, null);?>
                                <div class="ab__dotd_promotion <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>action-is-over<?php }?>">
                                    <div class="ab__dotd_promotion-main_info">
                                        <?php if ($_smarty_tpl->getValue('promotion')['image']) {?>
                                            <div class="ab__dotd_promotion-image">
                                                <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['image']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
">
                                            </div>
                                        <?php }?>
                                        <div class="ab__dotd_promotion-content">
                                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                <div class="ty-subheader"><?php echo (($tmp = $_smarty_tpl->getValue('promotion')['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('promotion')['name'] ?? null : $tmp);?>

                                                    <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>
                                                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_expired', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                                                    <?php } elseif ($_smarty_tpl->getValue('promotion')['ab__dotd_awaited']) {?>
                                                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_awaited', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                                                    <?php }?>
                                                </div>
                                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('promotion')['detailed_description'];?>
</div>

                                            <?php if ($_smarty_tpl->getValue('promotion')['to_date'] || $_smarty_tpl->getValue('promotion')['from_date']) {?>
                                                <div class="ab__dotd_promotion_date">
                                                    <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.page_action_period", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                        <?php if ($_smarty_tpl->getValue('promotion')['from_date']) {?>
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.from', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['from_date'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getValue('promotion')['to_date']) {?>
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.to', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['to_date'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                    </p>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->getValue('promotion')['show_in_products_lists'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                <div class="buttons-container">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__outline" title="" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('view_products', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                </div>
                                <?php }?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.detailed", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.detailed", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text_meta'=>"pd-promotion-info-popup",'link_icon'=>"ut2-icon-outline-info",'link_icon_first'=>false,'link_meta'=>"details-promo-link ut2-append-body",'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'promotion_info_popup_opener')), (int) 0, $_smarty_current_dir);
?>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('promotions_ids')) > 1) {?>
                                <a href="javascript:void(0)" class="also-in-promos-link cm-external-click"
                                   data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day" title=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.all_promotions', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->getValue('promotion')['show_counter_on_product_page'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('promotion')['to_date'] && $_smarty_tpl->getValue('promotion')['to_date'] > time()) {?>
                <div class="col2">
                    <span class="time-left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['promotions']) {?>
    <?php $_smarty_tpl->assign('image_height', 50, false, NULL);?>
    <?php $_smarty_tpl->assign('promotions_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_filter_applied_promotions')($_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('product')['promotions']),array("exclude_hidden"=>true)), false, NULL);?>
    <?php $_smarty_tpl->assign('promotion', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_cached_promotion_data')($_smarty_tpl->getValue('promotions_ids')[0]), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('promotion')) {?>
        <div class="ab__deal_of_the_day pd-dp">
            <div class="col1">
                <div class="pd-promotion__img">
                    <i class="ut2-icon-local_activity"></i>
                </div>

                <div class="pd-promotion__content">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" class="pd-promotion__title" title="" target="_blank"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['name']), ENT_QUOTES, 'UTF-8');?>
</a>

                    <?php if ($_smarty_tpl->getValue('promotion')['show_counter_on_product_page'] === "N") {?>
                        <?php if ($_smarty_tpl->getValue('promotion')['to_date'] || $_smarty_tpl->getValue('promotion')['from_date']) {?>
                            <div class="ab__dotd_promotion_date">
                                <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
                                    <?php if ($_smarty_tpl->getValue('promotion')['from_date']) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.from', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['from_date'],"%d.%m.%Y")), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('promotion')['to_date']) {?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.to', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['to_date'],"%d.%m.%Y")), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </small>
                            </div>
                        <?php }?>
                    <?php }?>

                    <?php if (!$_smarty_tpl->getValue('quick_view')) {?>
                        <div class="pd-details-promo-link">
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "promotion_info_popup_opener", null, null);?>
                                <div class="ab__dotd_promotion <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>action-is-over<?php }?>">
                                    <div class="ab__dotd_promotion-main_info">
                                        <?php if ($_smarty_tpl->getValue('promotion')['image']) {?>
                                            <div class="ab__dotd_promotion-image">
                                                <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promotion')['image']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
">
                                            </div>
                                        <?php }?>
                                        <div class="ab__dotd_promotion-content">
                                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                <div class="ty-subheader"><?php echo (($tmp = $_smarty_tpl->getValue('promotion')['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('promotion')['name'] ?? null : $tmp);?>

                                                    <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>
                                                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_expired', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                                                    <?php } elseif ($_smarty_tpl->getValue('promotion')['ab__dotd_awaited']) {?>
                                                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_awaited', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                                                    <?php }?>
                                                </div>
                                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('promotion')['detailed_description'];?>
</div>

                                            <?php if ($_smarty_tpl->getValue('promotion')['to_date'] || $_smarty_tpl->getValue('promotion')['from_date']) {?>
                                                <div class="ab__dotd_promotion_date">
                                                    <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.page_action_period", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                        <?php if ($_smarty_tpl->getValue('promotion')['from_date']) {?>
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.from', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['from_date'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getValue('promotion')['to_date']) {?>
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.to', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('promotion')['to_date'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                    </p>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->getValue('promotion')['show_in_products_lists'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                <div class="buttons-container">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.view?promotion_id=".((string)$_smarty_tpl->getValue('promotion')['promotion_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__outline" title="" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('view_products', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                </div>
                                <?php }?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.detailed", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.detailed", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text_meta'=>"pd-promotion-info-popup",'link_icon'=>"ut2-icon-outline-info",'link_icon_first'=>false,'link_meta'=>"details-promo-link ut2-append-body",'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'promotion_info_popup_opener')), (int) 0, $_smarty_current_dir);
?>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('promotions_ids')) > 1) {?>
                                <a href="javascript:void(0)" class="also-in-promos-link cm-external-click"
                                   data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day" title=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.all_promotions', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->getValue('promotion')['show_counter_on_product_page'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('promotion')['to_date'] && $_smarty_tpl->getValue('promotion')['to_date'] > time()) {?>
                <div class="col2">
                    <span class="time-left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>
        </div>
    <?php }
}
}
}
}
