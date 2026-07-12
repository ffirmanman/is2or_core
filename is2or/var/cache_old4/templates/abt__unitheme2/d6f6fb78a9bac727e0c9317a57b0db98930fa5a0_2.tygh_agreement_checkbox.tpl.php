<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:21
  from 'tygh:addons/gdpr/componentes/agreement_checkbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c50c1f41_57601693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f6fb78a9bac727e0c9317a57b0db98930fa5a0' => 
    array (
      0 => 'addons/gdpr/componentes/agreement_checkbox.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
))) {
function content_69fb53c50c1f41_57601693 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gdpr/componentes';
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.full_agreement','gdpr.full_agreement'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('type') && $_smarty_tpl->getValue('app')["addons.gdpr.service"]->isNeeded($_smarty_tpl->getValue('type'))) {?>
    <?php $_smarty_tpl->assign('show_agreement', true, false, 2);?>
    <?php if (!$_smarty_tpl->getValue('tooltip_only')) {?>
        <?php $_smarty_tpl->assign('const_suffix', (($tmp = $_smarty_tpl->getValue('const_suffix') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php ob_start();
if ($_smarty_tpl->getValue('const_suffix')) {
echo "_";
echo (string)$_smarty_tpl->getValue('const_suffix');
}
$_prefixVariable1=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_prefix')) {
echo (string)$_smarty_tpl->getValue('obj_prefix');
}
$_prefixVariable2=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_id')) {
echo (string)$_smarty_tpl->getValue('obj_id');
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->assign('const_input_id', (($tmp = $_smarty_tpl->getValue('input_id') ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->getValue('type')).$_prefixVariable1.$_prefixVariable2.$_prefixVariable3 ?? null : $tmp), false, NULL);?>
        <?php ob_start();
if ($_smarty_tpl->getValue('suffix')) {
echo "_";
echo (string)$_smarty_tpl->getValue('suffix');
}
$_prefixVariable4=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_prefix')) {
echo (string)$_smarty_tpl->getValue('obj_prefix');
}
$_prefixVariable5=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_id')) {
echo (string)$_smarty_tpl->getValue('obj_id');
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->assign('input_id', (($tmp = $_smarty_tpl->getValue('input_id') ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->getValue('type')).$_prefixVariable4.$_prefixVariable5.$_prefixVariable6 ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('gdpr_target_elem', ((string)$_smarty_tpl->getValue('input_id'))."_label", false, NULL);?>
        <?php $_smarty_tpl->assign('is_accept_gdpr_agreements_checked', ($_smarty_tpl->getValue('user_data')[$_smarty_tpl->getValue('const_input_id')] === "Y"), false, NULL);?>
        <?php $_smarty_tpl->assign('link_popup_class', ((string)$_smarty_tpl->getValue('link_popup_class'))." ty-license-agreement__link", false, NULL);?>

        <div class="ty-gdpr-agreement <?php if ($_smarty_tpl->getValue('hidden')) {?>hidden<?php }?>" data-ca-gdpr-agreement="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
">
            <label
                for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
_label"
                class="cm-gdpr-agreement-label <?php if ($_smarty_tpl->getValue('agreement_required')) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
                <?php if ($_smarty_tpl->getValue('target_node')) {?>data-ca-gdpr-target-elem="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_node')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            >
                <input type="hidden" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>

                    name="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('input_name') ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->getValue('type'))."]" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>

                    value="N" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>

                    data-ca-lite-checkout-field="user_data.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('const_input_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-lite-checkout-auto-save="true"
                />
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('input_name') ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->getValue('type'))."]" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                    value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('input_value') ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->getValue('meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');
}?>"
                    <?php if ($_smarty_tpl->getValue('onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('onclick');?>
"<?php }?>
                    <?php if ($_smarty_tpl->getValue('checked') || $_smarty_tpl->getValue('is_accept_gdpr_agreements_checked')) {?>checked="checked"<?php }?>
                    data-ca-error-message-target-node="#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
_error_wrapper"
                    data-ca-lite-checkout-field="user_data.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('const_input_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-lite-checkout-auto-save="true"
            /></label>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "content_for_popup", null, null);?>
                <div class="ty-gdpr-popup" id="gdpr_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gdpr_target_elem')), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-gdpr-popup-content">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"gdpr:popup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <?php echo $_smarty_tpl->getValue('app')["addons.gdpr.service"]->getFullAgreement($_smarty_tpl->getValue('type'));?>

                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"gdpr:popup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                </div>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.full_agreement", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'content_for_popup'),'link_text'=>$_smarty_tpl->getValue('app')["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->getValue('type')),'link_meta'=>$_smarty_tpl->getValue('link_popup_class'),'id'=>"gdpr_popup_".((string)$_smarty_tpl->getValue('input_id'))."_label"), (int) 0, $_smarty_current_dir);
?>
            <div id="<?php echo $_smarty_tpl->getValue('input_id');?>
_error_wrapper"></div>
        </div>

        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")('gdpr.agreement_required_error', [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/componentes/agreement_checkbox.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gdpr/componentes/agreement_checkbox.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('type') && $_smarty_tpl->getValue('app')["addons.gdpr.service"]->isNeeded($_smarty_tpl->getValue('type'))) {?>
    <?php $_smarty_tpl->assign('show_agreement', true, false, 2);?>
    <?php if (!$_smarty_tpl->getValue('tooltip_only')) {?>
        <?php $_smarty_tpl->assign('const_suffix', (($tmp = $_smarty_tpl->getValue('const_suffix') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);?>
        <?php ob_start();
if ($_smarty_tpl->getValue('const_suffix')) {
echo "_";
echo (string)$_smarty_tpl->getValue('const_suffix');
}
$_prefixVariable7=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_prefix')) {
echo (string)$_smarty_tpl->getValue('obj_prefix');
}
$_prefixVariable8=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_id')) {
echo (string)$_smarty_tpl->getValue('obj_id');
}
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->assign('const_input_id', (($tmp = $_smarty_tpl->getValue('input_id') ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->getValue('type')).$_prefixVariable7.$_prefixVariable8.$_prefixVariable9 ?? null : $tmp), false, NULL);?>
        <?php ob_start();
if ($_smarty_tpl->getValue('suffix')) {
echo "_";
echo (string)$_smarty_tpl->getValue('suffix');
}
$_prefixVariable10=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_prefix')) {
echo (string)$_smarty_tpl->getValue('obj_prefix');
}
$_prefixVariable11=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('obj_id')) {
echo (string)$_smarty_tpl->getValue('obj_id');
}
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->assign('input_id', (($tmp = $_smarty_tpl->getValue('input_id') ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->getValue('type')).$_prefixVariable10.$_prefixVariable11.$_prefixVariable12 ?? null : $tmp), false, NULL);?>
        <?php $_smarty_tpl->assign('gdpr_target_elem', ((string)$_smarty_tpl->getValue('input_id'))."_label", false, NULL);?>
        <?php $_smarty_tpl->assign('is_accept_gdpr_agreements_checked', ($_smarty_tpl->getValue('user_data')[$_smarty_tpl->getValue('const_input_id')] === "Y"), false, NULL);?>
        <?php $_smarty_tpl->assign('link_popup_class', ((string)$_smarty_tpl->getValue('link_popup_class'))." ty-license-agreement__link", false, NULL);?>

        <div class="ty-gdpr-agreement <?php if ($_smarty_tpl->getValue('hidden')) {?>hidden<?php }?>" data-ca-gdpr-agreement="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
">
            <label
                for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
_label"
                class="cm-gdpr-agreement-label <?php if ($_smarty_tpl->getValue('agreement_required')) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
                <?php if ($_smarty_tpl->getValue('target_node')) {?>data-ca-gdpr-target-elem="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target_node')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            >
                <input type="hidden" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>

                    name="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('input_name') ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->getValue('type'))."]" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>

                    value="N" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>

                    data-ca-lite-checkout-field="user_data.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('const_input_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-lite-checkout-auto-save="true"
                />
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('input_name') ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->getValue('type'))."]" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                    value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('input_value') ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->getValue('meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');
}?>"
                    <?php if ($_smarty_tpl->getValue('onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('onclick');?>
"<?php }?>
                    <?php if ($_smarty_tpl->getValue('checked') || $_smarty_tpl->getValue('is_accept_gdpr_agreements_checked')) {?>checked="checked"<?php }?>
                    data-ca-error-message-target-node="#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
_error_wrapper"
                    data-ca-lite-checkout-field="user_data.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('const_input_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-lite-checkout-auto-save="true"
            /></label>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "content_for_popup", null, null);?>
                <div class="ty-gdpr-popup" id="gdpr_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('gdpr_target_elem')), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-gdpr-popup-content">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"gdpr:popup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <?php echo $_smarty_tpl->getValue('app')["addons.gdpr.service"]->getFullAgreement($_smarty_tpl->getValue('type'));?>

                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"gdpr:popup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                </div>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.full_agreement", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'content_for_popup'),'link_text'=>$_smarty_tpl->getValue('app')["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->getValue('type')),'link_meta'=>$_smarty_tpl->getValue('link_popup_class'),'id'=>"gdpr_popup_".((string)$_smarty_tpl->getValue('input_id'))."_label"), (int) 0, $_smarty_current_dir);
?>
            <div id="<?php echo $_smarty_tpl->getValue('input_id');?>
_error_wrapper"></div>
        </div>

        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")('gdpr.agreement_required_error', [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_id')), ENT_QUOTES, 'UTF-8');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }
}
}
}
}
