<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:37
  from 'tygh:views/profiles/components/profiles_scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabdadaf47_40804902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eec8be3e482509d4468976f1356067d17684185' => 
    array (
      0 => 'views/profiles/components/profiles_scripts.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69adaabdadaf47_40804902 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/profiles/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '<?php echo strtr((string)$_smarty_tpl->getValue('settings')['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        states: <?php echo json_encode($_smarty_tpl->getValue('states'));?>

    });


    
    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        }
    });
    

    const selectors = [
        'input[name="user_data[firstname]"]',
        'input[name="user_data[lastname]"]'
    ];

    selectors.forEach(function (selector) {
        const $input = $(selector);
        const inputId = $input.attr('id');

        if (inputId) {
            const $label = $('label[for="' + inputId + '"]');
            $label.addClass('cm-text-validator');
        }
    });

    $(document).ready(function() {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-text-validator',
            message: _.tr('js_validator_not_valid_text_field'),
            func: function (id) {
                const value = $('#' + id).val().trim();

                if (value === '') return true;

                
                const regex = /^[\p{L}\p{M}\s'\-\d]+$/u;
                

                return regex.test(value);
            }
        });
    });

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profiles_scripts.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/profiles/components/profiles_scripts.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '<?php echo strtr((string)$_smarty_tpl->getValue('settings')['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        states: <?php echo json_encode($_smarty_tpl->getValue('states'));?>

    });


    
    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        }
    });
    

    const selectors = [
        'input[name="user_data[firstname]"]',
        'input[name="user_data[lastname]"]'
    ];

    selectors.forEach(function (selector) {
        const $input = $(selector);
        const inputId = $input.attr('id');

        if (inputId) {
            const $label = $('label[for="' + inputId + '"]');
            $label.addClass('cm-text-validator');
        }
    });

    $(document).ready(function() {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-text-validator',
            message: _.tr('js_validator_not_valid_text_field'),
            func: function (id) {
                const value = $('#' + id).val().trim();

                if (value === '') return true;

                
                const regex = /^[\p{L}\p{M}\s'\-\d]+$/u;
                

                return regex.test(value);
            }
        });
    });

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
