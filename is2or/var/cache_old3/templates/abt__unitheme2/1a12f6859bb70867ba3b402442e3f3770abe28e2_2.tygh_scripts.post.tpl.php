<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:25
  from 'tygh:addons/is2or_changes/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2112f36a7_15523032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a12f6859bb70867ba3b402442e3f3770abe28e2' => 
    array (
      0 => 'addons/is2or_changes/hooks/index/scripts.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb2112f36a7_15523032 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_changes/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
(function(_, $) {
    $(document).on('blur', '.ty-vendor-communication-new-message__message textarea, [id^="new_thread_message_"] textarea', function() {
        const el = $(this);
        const value = el.val();

        const maskContactInfo = function(text) {
            
            const patterns = [
                // Obfuscated emails
                /\b[a-z0-9._%+-]+\s*(?:@|\[at\]|\(at\)|\sat\s)\s*[a-z0-9.-]+\s*(?:\.|\[dot\]|\(dot\)|\sdot\s)\s*[a-z]{2,}\b/gi,
                // Normal emails
                /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/gi,
                // Phone numbers
                /(\+?\d[\d\s\-]{7,14}\d)/g,
                // URLs
                /(https?:\/\/[^\s]+|www\.[^\s]+)/gi,
                // Messaging keywords
                /\b(whatsapp|telegram|wechat|line|viber)\b/gi
            ];
            

            let masked = text;
            patterns.forEach(regex => {
                masked = masked.replace(regex, '***');
            });

            return masked;
        }

        const masked = maskContactInfo(value);

        el.val(maskContactInfo(value));
    })
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_changes/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_changes/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
(function(_, $) {
    $(document).on('blur', '.ty-vendor-communication-new-message__message textarea, [id^="new_thread_message_"] textarea', function() {
        const el = $(this);
        const value = el.val();

        const maskContactInfo = function(text) {
            
            const patterns = [
                // Obfuscated emails
                /\b[a-z0-9._%+-]+\s*(?:@|\[at\]|\(at\)|\sat\s)\s*[a-z0-9.-]+\s*(?:\.|\[dot\]|\(dot\)|\sdot\s)\s*[a-z]{2,}\b/gi,
                // Normal emails
                /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/gi,
                // Phone numbers
                /(\+?\d[\d\s\-]{7,14}\d)/g,
                // URLs
                /(https?:\/\/[^\s]+|www\.[^\s]+)/gi,
                // Messaging keywords
                /\b(whatsapp|telegram|wechat|line|viber)\b/gi
            ];
            

            let masked = text;
            patterns.forEach(regex => {
                masked = masked.replace(regex, '***');
            });

            return masked;
        }

        const masked = maskContactInfo(value);

        el.val(maskContactInfo(value));
    })
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
