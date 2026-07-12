<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:46
  from 'tygh:views/profiles/components/profiles_scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ae88af95_50116917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48545c20c84e8af5b9d7467e0163b317922ddda2' => 
    array (
      0 => 'views/profiles/components/profiles_scripts.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ae88af95_50116917 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/profiles/components';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
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
,
        states_are_optional: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('states_are_optional') ?? null)===null||$tmp==='' ? false ?? null : $tmp))), ENT_QUOTES, 'UTF-8');?>

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
    

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
