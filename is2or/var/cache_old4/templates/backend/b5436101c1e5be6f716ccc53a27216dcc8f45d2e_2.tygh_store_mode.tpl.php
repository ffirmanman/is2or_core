<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:views/settings/store_mode.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fb8e2e92_70670331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5436101c1e5be6f716ccc53a27216dcc8f45d2e' => 
    array (
      0 => 'views/settings/store_mode.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_release_info.tpl' => 1,
  ),
))) {
function content_69fb49fb8e2e92_70670331 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/settings';
\Tygh\Languages\Helper::preloadLangVars(array('store_mode','choose_your_store_mode','full','product_state_description.','license_number','please_enter_license_here','licensed_product','trial','trial_mode_ult_disabled','trial_mode_mve_disabled','text_store_mode_trial','select'));
if ($_smarty_tpl->getValue('show')) {?>
    <a id="store_mode" class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable" data-ca-target-id="store_mode_dialog"></a>
<?php }?>

<div class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("store_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="store_mode_dialog">
    <?php if ($_smarty_tpl->getValue('store_mode_errors')) {?>
        <div class="alert alert-error notification-content">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('store_mode_errors'), 'message');
$foreach36DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('message')->value) {
$foreach36DoElse = false;
?>
            <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
:</strong> <?php echo $_smarty_tpl->getValue('message')['text'];?>
<br>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

    <form name="store_mode_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
">

        <span class="choice-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("choose_your_store_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>

            <ul class="store-mode inline">
                <li class="clickable <?php if ($_smarty_tpl->getValue('store_mode_errors')) {?> type-error<?php }?> item<?php if ($_smarty_tpl->getValue('store_mode') != "trial") {?> active<?php }?>">
                    <label for="store_mode_radio_full" class="radio">
                        <input type="radio" id="store_mode_radio_full" name="store_mode" value="full" <?php if ($_smarty_tpl->getValue('store_mode') != "trial") {?>checked="checked"<?php }?> class="cm-switch-class"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("full", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                    <div>
                        <?php $_smarty_tpl->assign('description_suffix', $_smarty_tpl->getValue('product_state_suffix'), false, NULL);?>
                        <?php if ($_smarty_tpl->getValue('store_mode') == "trial") {?>
                            <?php $_smarty_tpl->assign('description_suffix', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_state_suffix')("new"), false, NULL);?>
                        <?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_state_description.".((string)$_smarty_tpl->getValue('description_suffix')), array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[standard_license_url]"=>$_smarty_tpl->getValue('config')['resources']['standard_license_url'],"[ultimate_license_url]"=>$_smarty_tpl->getValue('config')['resources']['ultimate_license_url'],"[mve_plus_license_url]"=>$_smarty_tpl->getValue('config')['resources']['mve_plus_license_url'],"[mve_ultimate_license_url]"=>$_smarty_tpl->getValue('config')['resources']['mve_ultimate_license_url']), $_smarty_tpl->getSmarty()->getLanguage());?>

                    </div>
                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("license_number", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                    <input type="text" name="license_number" class="<?php if ($_smarty_tpl->getValue('store_mode_errors')) {?> type-error<?php }?>" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('store_mode_license')), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_enter_license_here", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php if ($_smarty_tpl->getValue('store_mode_license') && !$_smarty_tpl->getValue('store_mode_errors') && $_smarty_tpl->getValue('store_mode') != "trial") {?>
                        <p>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licensed_product", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_licensed_plan_name')($_smarty_tpl->getValue('license_plan'))), ENT_QUOTES, 'UTF-8');?>

                        </p>
                    <?php }?>
                </li>

                <li class="<?php if ($_smarty_tpl->getValue('store_mode') == "trial") {?>active<?php } elseif ($_smarty_tpl->getValue('store_mode') != "new") {?>disabled<?php }?>">
                    <label for="store_mode_radio_trial" class="radio">
                        <input type="radio" id="store_mode_radio_trial" name="store_mode" value="trial" <?php if ($_smarty_tpl->getValue('store_mode') == "trial") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->getValue('store_mode') != "new" && $_smarty_tpl->getValue('store_mode') != "trial") {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("trial", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                    <?php if ($_smarty_tpl->getValue('store_mode') != "new" && $_smarty_tpl->getValue('store_mode') != "trial") {?>
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>
                            <div><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("trial_mode_ult_disabled", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                        <?php } else { ?>
                            <div><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("trial_mode_mve_disabled", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                        <?php }?>
                    <?php } else { ?>
                        <div><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_store_mode_trial", array("[product_buy_url]"=>$_smarty_tpl->getValue('config')['resources']['product_buy_url']), $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                    <?php }?>
                </li>
            </ul>

        <div class="buttons-container">
            <span class="pull-left">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </span>

            <input name="dispatch[settings.change_store_mode]" type="submit" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="btn btn-primary">
        </div>
    </form>
</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
Tygh.$(document).ready(function()<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->getValue('show')) {?>
        Tygh.$('#store_mode').trigger('click');
    <?php }?>

    Tygh.$(document).on('click', '#store_mode_dialog li:not(.disabled)', function(){
        $('#store_mode_dialog li').removeClass('active');
        $(this).addClass('active').find('input[type="radio"]').prop('checked', true);
    });
<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
