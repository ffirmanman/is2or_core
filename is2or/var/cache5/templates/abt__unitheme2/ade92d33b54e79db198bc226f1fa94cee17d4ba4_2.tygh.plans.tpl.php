<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:18:50
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/vendor_plans/views/companies/components/plans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbbacac369_53892018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ade92d33b54e79db198bc226f1fa94cee17d4ba4' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/vendor_plans/views/companies/components/plans.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 6,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6835bbbacac369_53892018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.best_choice','vendor_plans.','vendor_plans.choose','vendor_plans.products_limit_value','vendor_plans.products_limit_unlimited','vendor_plans.revenue_up_to_value','vendor_plans.revenue_up_to_unlimited','vendor_plans.transaction_fee_value','vendor_plans.vendor_store','vendor_plans.best_choice','vendor_plans.','vendor_plans.choose','vendor_plans.products_limit_value','vendor_plans.products_limit_unlimited','vendor_plans.revenue_up_to_value','vendor_plans.revenue_up_to_unlimited','vendor_plans.transaction_fee_value','vendor_plans.vendor_store'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><ul class="ty-vendor-plans<?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?> ty-vendor-plans-info cm-vendor-plans-info<?php }?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('hide', false);?>
        <?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?>
            <?php $_smarty_tpl->_assignInScope('hide', true);?>
            <?php if ((!$_smarty_tpl->tpl_vars['plan_id']->value && $_smarty_tpl->tpl_vars['plan']->value['is_default']) || $_smarty_tpl->tpl_vars['plan']->value['plan_id'] == $_smarty_tpl->tpl_vars['plan_id']->value) {?>
                <?php $_smarty_tpl->_assignInScope('hide', false);?>
            <?php }?>
        <?php }?>
        <li class="ty-vendor-plans__item <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> active<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }?>" data-ca-plan-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?>
                <div class="ty-vendor-plan-current-plan">
                   <?php echo $_smarty_tpl->__("vendor_plans.best_choice");?>

                </div>
            <?php }?>
            <div class="ty-vendor-plan-content<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> vendor-plan-current<?php }?>">
                
                <h3 class="ty-vendor-plan-header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</h3>
                
                <span class="ty-vendor-plan-price"><?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['price'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0, true);
} else {
echo $_smarty_tpl->__('free');
}?></span><?php if ($_smarty_tpl->tpl_vars['plan']->value['periodicity'] != 'onetime') {?><span class="ty-vendor-plan-price-period">/&nbsp;<?php echo $_smarty_tpl->__("vendor_plans.".((string)$_smarty_tpl->tpl_vars['plan']->value['periodicity']));?>
</span><?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['as_info']->value) {?>
                <div class="ty-vendor-plan-link">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("vendor_plans.choose"),'but_href'=>"companies.apply_for_vendor?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']),'but_role'=>"text",'but_meta'=>"ty-btn__secondary"), 0, true);
?>
                </div>
                <?php }?>
                
                <div class="ty-vendor-plan-params">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:vendor_plan_params"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:vendor_plan_params"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['products_limit']) {?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_value",array($_smarty_tpl->tpl_vars['plan']->value['products_limit']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['revenue_limit'])) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "revenue", null, null);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['revenue_limit']), 0, true);
?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_value",array("[revenue]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'revenue')));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php $_smarty_tpl->_assignInScope('commissionRound', $_smarty_tpl->tpl_vars['plan']->value->commissionRound());?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "fee_value", null, null);?>
                            <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value > 0) {?>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['commissionRound']->value, ENT_QUOTES, 'UTF-8');?>
%
                            <?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['plan']->value->fixed_commission > 0.0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value > 0) {?> + <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->fixed_commission), 0, true);
?>
                            <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if (($_smarty_tpl->tpl_vars['plan']->value->fixed_commission > 0.0) || ($_smarty_tpl->tpl_vars['commissionRound']->value > 0)) {?>
                            <?php ob_start();
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fee_value');
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->__("vendor_plans.transaction_fee_value",array("[value]"=>$_prefixVariable1));?>

                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?>
                        <p><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");?>
</p>
                    <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:vendor_plan_params"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['plan']->value['description']) {?>
                    <div class="ty-vendor-plan-descr"><?php echo (($tmp = $_smarty_tpl->tpl_vars['plan']->value['description'] ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
                <?php }?>

            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/views/companies/components/plans.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/views/companies/components/plans.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><ul class="ty-vendor-plans<?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?> ty-vendor-plans-info cm-vendor-plans-info<?php }?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('hide', false);?>
        <?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?>
            <?php $_smarty_tpl->_assignInScope('hide', true);?>
            <?php if ((!$_smarty_tpl->tpl_vars['plan_id']->value && $_smarty_tpl->tpl_vars['plan']->value['is_default']) || $_smarty_tpl->tpl_vars['plan']->value['plan_id'] == $_smarty_tpl->tpl_vars['plan_id']->value) {?>
                <?php $_smarty_tpl->_assignInScope('hide', false);?>
            <?php }?>
        <?php }?>
        <li class="ty-vendor-plans__item <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> active<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }?>" data-ca-plan-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?>
                <div class="ty-vendor-plan-current-plan">
                   <?php echo $_smarty_tpl->__("vendor_plans.best_choice");?>

                </div>
            <?php }?>
            <div class="ty-vendor-plan-content<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> vendor-plan-current<?php }?>">
                
                <h3 class="ty-vendor-plan-header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</h3>
                
                <span class="ty-vendor-plan-price"><?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['price'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0, true);
} else {
echo $_smarty_tpl->__('free');
}?></span><?php if ($_smarty_tpl->tpl_vars['plan']->value['periodicity'] != 'onetime') {?><span class="ty-vendor-plan-price-period">/&nbsp;<?php echo $_smarty_tpl->__("vendor_plans.".((string)$_smarty_tpl->tpl_vars['plan']->value['periodicity']));?>
</span><?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['as_info']->value) {?>
                <div class="ty-vendor-plan-link">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("vendor_plans.choose"),'but_href'=>"companies.apply_for_vendor?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']),'but_role'=>"text",'but_meta'=>"ty-btn__secondary"), 0, true);
?>
                </div>
                <?php }?>
                
                <div class="ty-vendor-plan-params">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:vendor_plan_params"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:vendor_plan_params"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['products_limit']) {?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_value",array($_smarty_tpl->tpl_vars['plan']->value['products_limit']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['revenue_limit'])) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "revenue", null, null);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['revenue_limit']), 0, true);
?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_value",array("[revenue]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'revenue')));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php $_smarty_tpl->_assignInScope('commissionRound', $_smarty_tpl->tpl_vars['plan']->value->commissionRound());?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "fee_value", null, null);?>
                            <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value > 0) {?>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['commissionRound']->value, ENT_QUOTES, 'UTF-8');?>
%
                            <?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['plan']->value->fixed_commission > 0.0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value > 0) {?> + <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->fixed_commission), 0, true);
?>
                            <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if (($_smarty_tpl->tpl_vars['plan']->value->fixed_commission > 0.0) || ($_smarty_tpl->tpl_vars['commissionRound']->value > 0)) {?>
                            <?php ob_start();
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fee_value');
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->__("vendor_plans.transaction_fee_value",array("[value]"=>$_prefixVariable2));?>

                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?>
                        <p><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");?>
</p>
                    <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:vendor_plan_params"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['plan']->value['description']) {?>
                    <div class="ty-vendor-plan-descr"><?php echo (($tmp = $_smarty_tpl->tpl_vars['plan']->value['description'] ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
</div>
                <?php }?>

            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
