<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:01
  from 'tygh:addons/gdpr/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f71548863_00555898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c38f256ae88bf6981d7a7c122846155f01c42e29' => 
    array (
      0 => 'addons/gdpr/hooks/index/scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f71548863_00555898 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gdpr/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.klaro_accept_all','gdpr.klaro_accept_selected','gdpr.klaro_close','gdpr.klaro_consent_modal_description','gdpr.klaro_consent_modal_title','gdpr.klaro_consent_notice_change_description','gdpr.klaro_consent_notice_title','gdpr.klaro_consent_notice_description','gdpr.klaro_consent_notice_learn_more','gdpr.klaro_consent_notice_testing','gdpr.klaro_contextual_consent_accept_always','gdpr.klaro_contextual_consent_accept_once','gdpr.klaro_contextual_consent_description','gdpr.klaro_decline','gdpr.klaro_ok','gdpr.klaro_powered_by','gdpr.klaro_privacy_policy_title','gdpr.klaro_privacy_policy_name','gdpr.klaro_service','gdpr.klaro_services','gdpr.strictly_necessary_cookies_title','gdpr.strictly_necessary_cookies_description','gdpr.performance_cookies_title','gdpr.performance_cookies_description','gdpr.functional_cookies_title','gdpr.functional_cookies_description','gdpr.marketing_cookies_title','gdpr.marketing_cookies_description','gdpr.klaro_service_purpose','gdpr.klaro_service_purposes','gdpr.klaro_service_required_description','gdpr.eway_cookies_title','gdpr.eway_cookies_description','save','gdpr.disable_all_description','gdpr.disable_all_title','gdpr.opt_out_description','gdpr.opt_out_title','gdpr.klaro_service_required_title','gdpr.uk_cookies_law','gdpr.site_functionality_cookies_title','gdpr.site_functionality_cookies_description','gdpr.klaro_accept_all','gdpr.klaro_accept_selected','gdpr.klaro_close','gdpr.klaro_consent_modal_description','gdpr.klaro_consent_modal_title','gdpr.klaro_consent_notice_change_description','gdpr.klaro_consent_notice_title','gdpr.klaro_consent_notice_description','gdpr.klaro_consent_notice_learn_more','gdpr.klaro_consent_notice_testing','gdpr.klaro_contextual_consent_accept_always','gdpr.klaro_contextual_consent_accept_once','gdpr.klaro_contextual_consent_description','gdpr.klaro_decline','gdpr.klaro_ok','gdpr.klaro_powered_by','gdpr.klaro_privacy_policy_title','gdpr.klaro_privacy_policy_name','gdpr.klaro_service','gdpr.klaro_services','gdpr.strictly_necessary_cookies_title','gdpr.strictly_necessary_cookies_description','gdpr.performance_cookies_title','gdpr.performance_cookies_description','gdpr.functional_cookies_title','gdpr.functional_cookies_description','gdpr.marketing_cookies_title','gdpr.marketing_cookies_description','gdpr.klaro_service_purpose','gdpr.klaro_service_purposes','gdpr.klaro_service_required_description','gdpr.eway_cookies_title','gdpr.eway_cookies_description','save','gdpr.disable_all_description','gdpr.disable_all_title','gdpr.opt_out_description','gdpr.opt_out_title','gdpr.klaro_service_required_title','gdpr.uk_cookies_law','gdpr.site_functionality_cookies_title','gdpr.site_functionality_cookies_description'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "gdpr.klaro_accept_all": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_accept_all", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_accept_selected": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_accept_selected", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_close": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_close", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_modal_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_modal_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_modal_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_modal_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_change_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_change_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_learn_more": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_learn_more", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_testing": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_testing", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_contextual_consent_accept_always": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_contextual_consent_accept_always", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_contextual_consent_accept_once": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_contextual_consent_accept_once", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_contextual_consent_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_contextual_consent_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_decline": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_decline", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_ok": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_ok", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_powered_by": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_powered_by", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_privacy_policy_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_privacy_policy_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_privacy_policy_name": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_privacy_policy_name", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_services": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_services", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.strictly_necessary_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.strictly_necessary_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.strictly_necessary_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.strictly_necessary_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.performance_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.performance_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.performance_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.performance_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.functional_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.functional_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.functional_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.functional_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.marketing_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.marketing_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.marketing_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.marketing_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_purpose": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_purpose", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_purposes": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_purposes", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_required_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_required_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.eway_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.eway_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.eway_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.eway_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "save": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("save", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.disable_all_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.disable_all_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.disable_all_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.disable_all_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.opt_out_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.opt_out_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.opt_out_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.opt_out_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_required_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_required_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.uk_cookies_law": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.uk_cookies_law", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.site_functionality_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.site_functionality_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.site_functionality_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.site_functionality_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/gdpr/func.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gdpr/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "gdpr.klaro_accept_all": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_accept_all", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_accept_selected": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_accept_selected", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_close": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_close", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_modal_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_modal_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_modal_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_modal_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_change_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_change_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_learn_more": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_learn_more", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_consent_notice_testing": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_consent_notice_testing", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_contextual_consent_accept_always": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_contextual_consent_accept_always", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_contextual_consent_accept_once": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_contextual_consent_accept_once", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_contextual_consent_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_contextual_consent_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_decline": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_decline", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_ok": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_ok", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_powered_by": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_powered_by", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_privacy_policy_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_privacy_policy_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_privacy_policy_name": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_privacy_policy_name", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_services": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_services", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.strictly_necessary_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.strictly_necessary_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.strictly_necessary_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.strictly_necessary_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.performance_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.performance_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.performance_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.performance_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.functional_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.functional_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.functional_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.functional_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.marketing_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.marketing_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.marketing_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.marketing_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_purpose": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_purpose", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_purposes": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_purposes", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_required_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_required_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.eway_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.eway_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.eway_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.eway_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "save": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("save", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.disable_all_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.disable_all_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.disable_all_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.disable_all_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.opt_out_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.opt_out_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.opt_out_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.opt_out_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.klaro_service_required_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.klaro_service_required_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.uk_cookies_law": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.uk_cookies_law", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.site_functionality_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.site_functionality_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "gdpr.site_functionality_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("gdpr.site_functionality_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/gdpr/func.js"), $_smarty_tpl);?>

<?php }
}
}
