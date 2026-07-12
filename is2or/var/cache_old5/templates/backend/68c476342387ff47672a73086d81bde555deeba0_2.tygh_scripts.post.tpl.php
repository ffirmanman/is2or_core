<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:addons/is2or_spl_integration/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2f24320_73326176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68c476342387ff47672a73086d81bde555deeba0' => 
    array (
      0 => 'addons/is2or_spl_integration/hooks/index/scripts.post.tpl',
      1 => 1774787437,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2f24320_73326176 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/is2or_spl_integration/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('is2or_spl_integration.short_address_is_required','is2or_spl_integration.address_generated_successfully'));
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
        "is2or_spl_integration.address_generated_successfully": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("is2or_spl_integration.address_generated_successfully", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
    });

        <?php if ($_smarty_tpl->getValue('is2or_spl_building_no_fields')) {?>
    _.is2or_spl_integration.s_building_no_field_id = <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('is2or_spl_building_no_fields')['s'])), ENT_QUOTES, 'UTF-8');?>
;
    _.is2or_spl_integration.b_building_no_field_id = <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('is2or_spl_building_no_fields')['b'])), ENT_QUOTES, 'UTF-8');?>
;
    <?php }?>
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/is2or_spl_integration/func.js"), $_smarty_tpl);
}
}
