<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:25
  from 'tygh:addons/is2or_spl_integration/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb211306099_15594950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a82777f7241240ffa260d071e5cbedde76c5b6a' => 
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
function content_69afb211306099_15594950 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_spl_integration/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('is2or_spl_integration.short_address_is_required','is2or_spl_integration.short_address_is_required'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
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
>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/is2or_spl_integration/func.js"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_spl_integration/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_spl_integration/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
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
>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/is2or_spl_integration/func.js"), $_smarty_tpl);
}
}
}
