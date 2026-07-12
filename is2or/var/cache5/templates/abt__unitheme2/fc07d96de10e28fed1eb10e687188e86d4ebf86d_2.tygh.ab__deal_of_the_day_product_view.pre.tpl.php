<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f640ea76_53258547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc07d96de10e28fed1eb10e687188e86d4ebf86d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl' => 2,
  ),
),false)) {
function content_6835b9f640ea76_53258547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('period','ab__dotd.page_action_period','ab__dotd.detailed','ab__dotd.detailed','period','ab__dotd.page_action_period','ab__dotd.detailed','ab__dotd.detailed'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->_assignInScope('image_height', 50);?>
    <?php $_smarty_tpl->_assignInScope('promotions_ids', fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true)));?>
    <?php $_smarty_tpl->_assignInScope('promotion', fn_ab__dotd_get_cached_promotion_data($_smarty_tpl->tpl_vars['promotions_ids']->value[0]));?>

    <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
        <div class="ab__deal_of_the_day pd-dp">
            <div<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date'] && $_smarty_tpl->tpl_vars['promotion']->value['to_date'] > time()) {?> class="col1"<?php }?>>
                <div class="pd-promotion__img">
                    <i class="ut2-icon-local_activity"></i>
                </div>

                <div class="pd-promotion__content">
                    <a href="<?php echo htmlspecialchars((string) fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" class="pd-promotion__title" title="" target="_blank"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>

                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page'] === "N") {?>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date'] || $_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                            <div class="ab__dotd_promotion_date">
                                <small><?php echo $_smarty_tpl->__("period");?>
:
                                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                        <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],"%d.%m.%Y"), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                        <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],"%d.%m.%Y"), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </small>
                            </div>
                        <?php }?>
                    <?php }?>

                    <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                        <div class="pd-details-promo-link">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "promotion_info_popup_opener", null, null);?>
                                <div class="ab__dotd_promotion <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>action-is-over<?php }?>">
                                    <div class="row-fluid ab__dotd_promotion-main_info">
                                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
                                            <div class="span8 ab__dotd_promotion-image" style="aspect-ratio: 2/1.2;background-size: 100%;background-repeat: no-repeat;background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
');">
                                            </div>
                                        <?php }?>
                                        <div class="span8">
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__deal_of_the_day:promotion_page_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <div class="ty-subheader"><?php echo (($tmp = $_smarty_tpl->tpl_vars['promotion']->value['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['name'] ?? null : $tmp);?>

                                                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>
                                                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_expired');?>
)</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
                                                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_awaited');?>
)</span>
                                                    <?php }?>
                                                </div>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['detailed_description'];?>
</div>

                                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date'] || $_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                                <div class="ab__dotd_promotion_date">
                                                    <p><?php echo $_smarty_tpl->__("ab__dotd.page_action_period");?>

                                                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                                            <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                                            <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                    </p>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_in_products_lists'] === smarty_modifier_enum("YesNo::YES")) {?>
                                <div class="buttons-container">
                                    <a href="<?php echo htmlspecialchars((string) fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__outline" title="" target="_blank"><?php echo $_smarty_tpl->__('view_products');?>
</a>
                                </div>
                                <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("ab__dotd.detailed"),'link_text'=>$_smarty_tpl->__("ab__dotd.detailed"),'link_text_meta'=>"pd-promotion-info-popup",'link_icon'=>"ut2-icon-outline-info",'link_icon_first'=>false,'link_meta'=>"details-promo-link ut2-append-body",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'promotion_info_popup_opener')), 0, false);
?>
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['promotions_ids']->value) > 1) {?>
                                <a href="javascript:void(0)" class="also-in-promos-link cm-external-click"
                                   data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day" title=""><?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</a>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['promotion']->value['to_date'] && $_smarty_tpl->tpl_vars['promotion']->value['to_date'] > time()) {?>
                <div class="col2">
                    <span class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</span>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            <?php }?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->_assignInScope('image_height', 50);?>
    <?php $_smarty_tpl->_assignInScope('promotions_ids', fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true)));?>
    <?php $_smarty_tpl->_assignInScope('promotion', fn_ab__dotd_get_cached_promotion_data($_smarty_tpl->tpl_vars['promotions_ids']->value[0]));?>

    <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
        <div class="ab__deal_of_the_day pd-dp">
            <div<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date'] && $_smarty_tpl->tpl_vars['promotion']->value['to_date'] > time()) {?> class="col1"<?php }?>>
                <div class="pd-promotion__img">
                    <i class="ut2-icon-local_activity"></i>
                </div>

                <div class="pd-promotion__content">
                    <a href="<?php echo htmlspecialchars((string) fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" class="pd-promotion__title" title="" target="_blank"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>

                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page'] === "N") {?>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date'] || $_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                            <div class="ab__dotd_promotion_date">
                                <small><?php echo $_smarty_tpl->__("period");?>
:
                                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                        <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],"%d.%m.%Y"), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                        <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],"%d.%m.%Y"), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </small>
                            </div>
                        <?php }?>
                    <?php }?>

                    <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                        <div class="pd-details-promo-link">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "promotion_info_popup_opener", null, null);?>
                                <div class="ab__dotd_promotion <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>action-is-over<?php }?>">
                                    <div class="row-fluid ab__dotd_promotion-main_info">
                                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
                                            <div class="span8 ab__dotd_promotion-image" style="aspect-ratio: 2/1.2;background-size: 100%;background-repeat: no-repeat;background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
');">
                                            </div>
                                        <?php }?>
                                        <div class="span8">
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__deal_of_the_day:promotion_page_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <div class="ty-subheader"><?php echo (($tmp = $_smarty_tpl->tpl_vars['promotion']->value['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['name'] ?? null : $tmp);?>

                                                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>
                                                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_expired');?>
)</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
                                                        <span>(<?php echo $_smarty_tpl->__('ab__dotd.promotion_awaited');?>
)</span>
                                                    <?php }?>
                                                </div>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__deal_of_the_day:promotion_page_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['detailed_description'];?>
</div>

                                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date'] || $_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                                <div class="ab__dotd_promotion_date">
                                                    <p><?php echo $_smarty_tpl->__("ab__dotd.page_action_period");?>

                                                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                                            <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                                            <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                    </p>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_in_products_lists'] === smarty_modifier_enum("YesNo::YES")) {?>
                                <div class="buttons-container">
                                    <a href="<?php echo htmlspecialchars((string) fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__outline" title="" target="_blank"><?php echo $_smarty_tpl->__('view_products');?>
</a>
                                </div>
                                <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("ab__dotd.detailed"),'link_text'=>$_smarty_tpl->__("ab__dotd.detailed"),'link_text_meta'=>"pd-promotion-info-popup",'link_icon'=>"ut2-icon-outline-info",'link_icon_first'=>false,'link_meta'=>"details-promo-link ut2-append-body",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'promotion_info_popup_opener')), 0, true);
?>
                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['promotions_ids']->value) > 1) {?>
                                <a href="javascript:void(0)" class="also-in-promos-link cm-external-click"
                                   data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day" title=""><?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</a>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['promotion']->value['to_date'] && $_smarty_tpl->tpl_vars['promotion']->value['to_date'] > time()) {?>
                <div class="col2">
                    <span class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</span>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            <?php }?>
        </div>
    <?php }
}
}
}
}
