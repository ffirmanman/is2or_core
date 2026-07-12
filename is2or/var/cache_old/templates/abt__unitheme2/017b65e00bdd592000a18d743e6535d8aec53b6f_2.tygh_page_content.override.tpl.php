<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:addons/form_builder/hooks/pages/page_content.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae615239dd70_52774539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '017b65e00bdd592000a18d743e6535d8aec53b6f' => 
    array (
      0 => 'addons/form_builder/hooks/pages/page_content.override.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/calendar.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:common/fileuploader.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
  ),
))) {
function content_69ae615239dd70_52774539 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/form_builder/hooks/pages';
\Tygh\Languages\Helper::preloadLangVars(array('continue','select','select_country','select_state','submit','continue','select','select_country','select_state','submit'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('page')['page_type'] == (defined('PAGE_TYPE_FORM') ? constant('PAGE_TYPE_FORM') : null)) {?>
    <?php if ($_REQUEST['sent'] == "Y") {?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_sent"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->assign('form_submit_const', (defined('FORM_SUBMIT') ? constant('FORM_SUBMIT') : null), false, NULL);?>
        <p><?php echo $_smarty_tpl->getValue('page')['form']['general'][$_smarty_tpl->getValue('form_submit_const')];?>
</p>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_sent"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("continue", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__secondary",'but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"action"), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php } else { ?>

    <?php if ($_smarty_tpl->getValue('page')['description']) {?>
        <div class="ty-form-builder__description"><?php echo $_smarty_tpl->getValue('page')['description'];?>
</div>
    <?php }?>

<div class="ty-form-builder">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="forms_form" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="page_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page_id']), ENT_QUOTES, 'UTF-8');?>
" />

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('page')['form']['elements'], 'element', false, 'element_id', 'form_lements', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('element_id')->value => $_smarty_tpl->getVariable('element')->value) {
$foreach0DoElse = false;
?>

    <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>
        <hr class="ty-form-builder__separator" />
    <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_HEADER') ? constant('FORM_HEADER') : null)) {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('element')['description']), (int) 0, $_smarty_current_dir);
?>
    
    <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] != (defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null) && $_smarty_tpl->getValue('element')['element_type'] != (defined('FORM_REFERER') ? constant('FORM_REFERER') : null)) {?>
        <div class="ty-control-group <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>data-ca-phone-mask-group-id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <label for="<?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>type_<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('md5')("fb_files[".((string)$_smarty_tpl->getValue('element')['element_id'])."]")), ENT_QUOTES, 'UTF-8');
} else { ?>elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');
}?>" class="ty-control-group__title <?php if ($_smarty_tpl->getValue('element')['required'] == "Y") {?>cm-required<?php }
if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?> cm-email<?php }
if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?> cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>cm-multiple-checkboxes<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['description']), ENT_QUOTES, 'UTF-8');?>
</label>

            <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_SELECT') ? constant('FORM_SELECT') : null)) {?>
                <select id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__select" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach1DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] == $_smarty_tpl->getValue('var')['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_RADIO') ? constant('FORM_RADIO') : null)) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var', false, NULL, 'rd', array (
  'iteration' => true,
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach2DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration']++;
?>
                <label class="ty-form-builder__radio-label">
                    <input class="ty-form-builder__radio radio" <?php if ((!$_smarty_tpl->getValue('form_values') && ($_smarty_tpl->getValue('__smarty_foreach_rd')['iteration'] ?? null) == 1) || ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] == $_smarty_tpl->getValue('var')['element_id'])) {?>checked="checked"<?php }?> type="radio" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                </label>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null)) {?>
                <input type="hidden" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__checkbox checkbox" <?php if ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] == "Y") {?>checked="checked"<?php }?> type="checkbox" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="Y" />
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null)) {?>
                <select class="ty-form-builder__multiple-select" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
][]" multiple="multiple" >
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach3DoElse = false;
?>
                        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('var')['element_id'],$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')])) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>
                <div id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach4DoElse = false;
?>
                    <label class="ty-form-builder__checkbox-label">
                        <input class="ty-form-builder__checkbox" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('var')['element_id'],$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')])) {?>checked="checked"<?php }?> id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" />
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>

                    </label>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_INPUT') ? constant('FORM_INPUT') : null)) {?>
                <input id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__input-text ty-input-text <?php if ($_smarty_tpl->getValue('element')['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null)) {?>
                <textarea id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__textarea" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" cols="67" rows="10"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), ENT_QUOTES, 'UTF-8');?>
</textarea>

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_DATE') ? constant('FORM_DATE') : null)) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_name'=>"form_values[".((string)$_smarty_tpl->getValue('element')['element_id'])."]",'date_id'=>"elm_".((string)$_smarty_tpl->getValue('element')['element_id']),'date_val'=>$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), (int) 0, $_smarty_current_dir);
?>

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null) || $_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null)) {?>

                <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?>
                <input type="hidden" name="customer_email" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
                <input id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php if ($_smarty_tpl->getValue('element')['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_".((string)$_smarty_tpl->getValue('element')['element_id']),'name'=>"form_values[".((string)$_smarty_tpl->getValue('element')['element_id'])."]",'value'=>$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')],'class'=>($_smarty_tpl->getValue('element')['position'] === "1") ? "cm-focus" : '','show_control_group'=>false,'show_controls'=>false,'width'=>"full"), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null)) {?>
                <?php $_smarty_tpl->assign('_country', (($tmp = $_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_country'] ?? null : $tmp), false, NULL);?>

                <?php if (!$_smarty_tpl->getValue('k_country')) {?>
                    <?php $_smarty_tpl->assign('k_country', 1, false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('k_country', $_smarty_tpl->getValue('k_country')+1, false, NULL);?>
                <?php }?>

                <select id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" class="ty-form-builder__country cm-country cm-location-billing_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k_country')), ENT_QUOTES, 'UTF-8');?>
">
                    <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
                    <?php $_smarty_tpl->assign('countries', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_simple_countries')(1), false, NULL);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'code');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach5DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('code')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('_country') == $_smarty_tpl->getValue('code')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_STATES') ? constant('FORM_STATES') : null)) {?>
                <?php if (!$_smarty_tpl->getValue('k_state')) {?>
                    <?php $_smarty_tpl->assign('k_state', 1, false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('k_state', $_smarty_tpl->getValue('k_state')+1, false, NULL);?>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_all_states')(1)), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->assign('_state', (($tmp = $_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_state'] ?? null : $tmp), false, NULL);?>
                <select class="ty-form-builder__state cm-state cm-location-billing_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k_state')), ENT_QUOTES, 'UTF-8');?>
" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
                    <?php $_smarty_tpl->assign('states', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_all_states')(1), false, NULL);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')], 'state');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state')->value) {
$foreach6DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['code']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('_state') == $_smarty_tpl->getValue('state')['code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['state']), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                <input type="text" class="cm-state cm-location-billing_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k_state')), ENT_QUOTES, 'UTF-8');?>
 ty-input-text hidden" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
_d" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_state')), ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/fileuploader_scripts.js"), $_smarty_tpl);?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"fb_files[".((string)$_smarty_tpl->getValue('element')['element_id'])."]"), (int) 0, $_smarty_current_dir);
?>
            <?php }?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"form_builder"), (int) 0, $_smarty_current_dir);
?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:additional_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:additional_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("submit", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[pages.send_form]"), (int) 0, $_smarty_current_dir);
?>
    </div>

    </form>

</div>
<?php }?>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/form_builder/hooks/pages/page_content.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/form_builder/hooks/pages/page_content.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('page')['page_type'] == (defined('PAGE_TYPE_FORM') ? constant('PAGE_TYPE_FORM') : null)) {?>
    <?php if ($_REQUEST['sent'] == "Y") {?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_sent"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->assign('form_submit_const', (defined('FORM_SUBMIT') ? constant('FORM_SUBMIT') : null), false, NULL);?>
        <p><?php echo $_smarty_tpl->getValue('page')['form']['general'][$_smarty_tpl->getValue('form_submit_const')];?>
</p>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_sent"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("continue", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__secondary",'but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"action"), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php } else { ?>

    <?php if ($_smarty_tpl->getValue('page')['description']) {?>
        <div class="ty-form-builder__description"><?php echo $_smarty_tpl->getValue('page')['description'];?>
</div>
    <?php }?>

<div class="ty-form-builder">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="forms_form" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="page_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['page_id']), ENT_QUOTES, 'UTF-8');?>
" />

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('page')['form']['elements'], 'element', false, 'element_id', 'form_lements', array (
));
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('element_id')->value => $_smarty_tpl->getVariable('element')->value) {
$foreach7DoElse = false;
?>

    <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>
        <hr class="ty-form-builder__separator" />
    <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_HEADER') ? constant('FORM_HEADER') : null)) {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('element')['description']), (int) 0, $_smarty_current_dir);
?>
    
    <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] != (defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null) && $_smarty_tpl->getValue('element')['element_type'] != (defined('FORM_REFERER') ? constant('FORM_REFERER') : null)) {?>
        <div class="ty-control-group <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>data-ca-phone-mask-group-id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <label for="<?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>type_<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('md5')("fb_files[".((string)$_smarty_tpl->getValue('element')['element_id'])."]")), ENT_QUOTES, 'UTF-8');
} else { ?>elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');
}?>" class="ty-control-group__title <?php if ($_smarty_tpl->getValue('element')['required'] == "Y") {?>cm-required<?php }
if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?> cm-email<?php }
if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?> cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>cm-multiple-checkboxes<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['description']), ENT_QUOTES, 'UTF-8');?>
</label>

            <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_SELECT') ? constant('FORM_SELECT') : null)) {?>
                <select id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__select" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach8DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] == $_smarty_tpl->getValue('var')['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_RADIO') ? constant('FORM_RADIO') : null)) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var', false, NULL, 'rd', array (
  'iteration' => true,
));
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach9DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration']++;
?>
                <label class="ty-form-builder__radio-label">
                    <input class="ty-form-builder__radio radio" <?php if ((!$_smarty_tpl->getValue('form_values') && ($_smarty_tpl->getValue('__smarty_foreach_rd')['iteration'] ?? null) == 1) || ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] == $_smarty_tpl->getValue('var')['element_id'])) {?>checked="checked"<?php }?> type="radio" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                </label>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null)) {?>
                <input type="hidden" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__checkbox checkbox" <?php if ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] == "Y") {?>checked="checked"<?php }?> type="checkbox" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="Y" />
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null)) {?>
                <select class="ty-form-builder__multiple-select" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
][]" multiple="multiple" >
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach10DoElse = false;
?>
                        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('var')['element_id'],$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')])) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>
                <div id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['variants'], 'var');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach11DoElse = false;
?>
                    <label class="ty-form-builder__checkbox-label">
                        <input class="ty-form-builder__checkbox" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('var')['element_id'],$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')])) {?>checked="checked"<?php }?> id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['element_id']), ENT_QUOTES, 'UTF-8');?>
" />
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['description']), ENT_QUOTES, 'UTF-8');?>

                    </label>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
                
                
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_INPUT') ? constant('FORM_INPUT') : null)) {?>
                <input id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__input-text ty-input-text <?php if ($_smarty_tpl->getValue('element')['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null)) {?>
                <textarea id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__textarea" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" cols="67" rows="10"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), ENT_QUOTES, 'UTF-8');?>
</textarea>

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_DATE') ? constant('FORM_DATE') : null)) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_name'=>"form_values[".((string)$_smarty_tpl->getValue('element')['element_id'])."]",'date_id'=>"elm_".((string)$_smarty_tpl->getValue('element')['element_id']),'date_val'=>$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), (int) 0, $_smarty_current_dir);
?>

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null) || $_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null)) {?>

                <?php if ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?>
                <input type="hidden" name="customer_email" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
                <input id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php if ($_smarty_tpl->getValue('element')['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')]), ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_".((string)$_smarty_tpl->getValue('element')['element_id']),'name'=>"form_values[".((string)$_smarty_tpl->getValue('element')['element_id'])."]",'value'=>$_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')],'class'=>($_smarty_tpl->getValue('element')['position'] === "1") ? "cm-focus" : '','show_control_group'=>false,'show_controls'=>false,'width'=>"full"), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null)) {?>
                <?php $_smarty_tpl->assign('_country', (($tmp = $_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_country'] ?? null : $tmp), false, NULL);?>

                <?php if (!$_smarty_tpl->getValue('k_country')) {?>
                    <?php $_smarty_tpl->assign('k_country', 1, false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('k_country', $_smarty_tpl->getValue('k_country')+1, false, NULL);?>
                <?php }?>

                <select id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" class="ty-form-builder__country cm-country cm-location-billing_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k_country')), ENT_QUOTES, 'UTF-8');?>
">
                    <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
                    <?php $_smarty_tpl->assign('countries', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_simple_countries')(1), false, NULL);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'code');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach12DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('code')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('_country') == $_smarty_tpl->getValue('code')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>

            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_STATES') ? constant('FORM_STATES') : null)) {?>
                <?php if (!$_smarty_tpl->getValue('k_state')) {?>
                    <?php $_smarty_tpl->assign('k_state', 1, false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('k_state', $_smarty_tpl->getValue('k_state')+1, false, NULL);?>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_all_states')(1)), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->assign('_state', (($tmp = $_smarty_tpl->getValue('form_values')[$_smarty_tpl->getValue('element_id')] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_state'] ?? null : $tmp), false, NULL);?>
                <select class="ty-form-builder__state cm-state cm-location-billing_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k_state')), ENT_QUOTES, 'UTF-8');?>
" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
                    <?php $_smarty_tpl->assign('states', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_all_states')(1), false, NULL);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')], 'state');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state')->value) {
$foreach13DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['code']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('_state') == $_smarty_tpl->getValue('state')['code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['state']), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                <input type="text" class="cm-state cm-location-billing_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k_state')), ENT_QUOTES, 'UTF-8');?>
 ty-input-text hidden" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
_d" name="form_values[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element')['element_id']), ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_state')), ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            
            <?php } elseif ($_smarty_tpl->getValue('element')['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/fileuploader_scripts.js"), $_smarty_tpl);?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"fb_files[".((string)$_smarty_tpl->getValue('element')['element_id'])."]"), (int) 0, $_smarty_current_dir);
?>
            <?php }?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:form_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"form_builder"), (int) 0, $_smarty_current_dir);
?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:additional_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:additional_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("submit", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[pages.send_form]"), (int) 0, $_smarty_current_dir);
?>
    </div>

    </form>

</div>
<?php }?>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
