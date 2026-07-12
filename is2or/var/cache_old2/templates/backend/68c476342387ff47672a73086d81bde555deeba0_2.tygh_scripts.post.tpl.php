<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/is2or_spl_integration/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afc3ebd6_48275040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68c476342387ff47672a73086d81bde555deeba0' => 
    array (
      0 => 'addons/is2or_spl_integration/hooks/index/scripts.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afc3ebd6_48275040 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/is2or_spl_integration/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('is2or_spl_integration.short_address_is_required'));
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
    $.extend(_, {
        is2or_spl_integration: <?php echo json_encode($_smarty_tpl->getValue('addons')['is2or_spl_integration']);?>
    
    });

    _.tr({
        "is2or_spl_integration.short_address_is_required": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_spl_integration.short_address_is_required", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
    })
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/is2or_spl_integration/func.js"), $_smarty_tpl);
}
}
