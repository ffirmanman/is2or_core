<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:55:28
  from 'tygh:addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae8b004b79f6_92992293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60e01c25f75a14c6d390b271a38df0a194577711' => 
    array (
      0 => 'addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl' => 2,
  ),
))) {
function content_69ae8b004b79f6_92992293 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__deal_of_the_day/blocks';
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.page_action_period','active_promotions','ab__dotd.page_action_period','active_promotions'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ab__dotd_promotion <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>action-is-over<?php }?>">
    <div class="row-fluid ab__dotd_promotion-main_info">
        <?php if ($_smarty_tpl->getValue('promotion')['image']) {?>
            <div class="span8 ab__dotd_promotion-image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('promotion')['image']), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
        <div class="span8 ab__dotd_promotion-content">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <h1><?php echo (($tmp = $_smarty_tpl->getValue('promotion')['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('promotion')['name'] ?? null : $tmp);?>

                    <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>
                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_expired', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                    <?php } elseif ($_smarty_tpl->getValue('promotion')['ab__dotd_awaited']) {?>
                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_awaited', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                    <?php }?>
                </h1>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('promotion')['detailed_description'];?>
</div>
            <?php if ($_smarty_tpl->getValue('promotion')['show_counter_on_promotion_page'] === "Y" && (($_smarty_tpl->getValue('promotion')['ab__dotd_active'] && $_smarty_tpl->getValue('promotion')['to_date']) || $_smarty_tpl->getValue('promotion')['ab__dotd_awaited'])) {?>
                <div class="ab__dotd_promotion-timer">
                    <div class="ab__dotd_promotion-timer_title"><b><?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_awaited']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_awaited_left', [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());
}?>:</b></div>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>
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
            <?php if (!$_smarty_tpl->getValue('promotion')['ab__dotd_active']) {?>
                <div class="actions-link"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.list")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active_promotions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></div>
            <?php }?>
        </div>
    </div>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/blocks/ab__promotion_main_data.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ab__dotd_promotion <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>action-is-over<?php }?>">
    <div class="row-fluid ab__dotd_promotion-main_info">
        <?php if ($_smarty_tpl->getValue('promotion')['image']) {?>
            <div class="span8 ab__dotd_promotion-image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('promotion')['image']), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
        <div class="span8 ab__dotd_promotion-content">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <h1><?php echo (($tmp = $_smarty_tpl->getValue('promotion')['h1'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('promotion')['name'] ?? null : $tmp);?>

                    <?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_expired']) {?>
                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_expired', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                    <?php } elseif ($_smarty_tpl->getValue('promotion')['ab__dotd_awaited']) {?>
                        <span>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.promotion_awaited', [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
                    <?php }?>
                </h1>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__deal_of_the_day:promotion_page_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <div class="ab__dotd_promotion-description ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('promotion')['detailed_description'];?>
</div>
            <?php if ($_smarty_tpl->getValue('promotion')['show_counter_on_promotion_page'] === "Y" && (($_smarty_tpl->getValue('promotion')['ab__dotd_active'] && $_smarty_tpl->getValue('promotion')['to_date']) || $_smarty_tpl->getValue('promotion')['ab__dotd_awaited'])) {?>
                <div class="ab__dotd_promotion-timer">
                    <div class="ab__dotd_promotion-timer_title"><b><?php if ($_smarty_tpl->getValue('promotion')['ab__dotd_awaited']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_awaited_left', [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd_time_left', [], $_smarty_tpl->getSmarty()->getLanguage());
}?>:</b></div>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>
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
            <?php if (!$_smarty_tpl->getValue('promotion')['ab__dotd_active']) {?>
                <div class="actions-link"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("promotions.list")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active_promotions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
}
