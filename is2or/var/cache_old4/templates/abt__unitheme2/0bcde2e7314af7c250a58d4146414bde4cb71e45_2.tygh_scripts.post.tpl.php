<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/ab__search_motivation/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01d55354_75557538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bcde2e7314af7c250a58d4146414bde4cb71e45' => 
    array (
      0 => 'addons/ab__search_motivation/hooks/index/scripts.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a01d55354_75557538 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__search_motivation/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('runtime')['mode'] == "search")) {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            'ab__sm.random_char': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__sm.random_char', [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });

        $.extend(_, {
            ab__sm: {
                phrases: <?php echo json_encode(($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__search_motivation_get_phrases')('')), (int) (defined('JSON_UNESCAPED_UNICODE') ? constant('JSON_UNESCAPED_UNICODE') : null));?>
,
                delay: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('addons')['ab__search_motivation']['delay'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*1000), ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__search_motivation/lib/theater.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__search_motivation/func.js"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__search_motivation/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__search_motivation/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('runtime')['mode'] == "search")) {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            'ab__sm.random_char': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__sm.random_char', [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });

        $.extend(_, {
            ab__sm: {
                phrases: <?php echo json_encode(($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__search_motivation_get_phrases')('')), (int) (defined('JSON_UNESCAPED_UNICODE') ? constant('JSON_UNESCAPED_UNICODE') : null));?>
,
                delay: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('addons')['ab__search_motivation']['delay'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*1000), ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__search_motivation/lib/theater.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__search_motivation/func.js"), $_smarty_tpl);?>

<?php }
}
}
}
