<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:01
  from 'tygh:addons/ab__scroll_to_top/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f71332f84_89312869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea85ec7d1c3efe155ad057ca544980a15feb3c84' => 
    array (
      0 => 'addons/ab__scroll_to_top/hooks/index/scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f71332f84_89312869 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__scroll_to_top/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            ab__stt: {
                settings: <?php echo json_encode($_smarty_tpl->getValue('addons')['ab__scroll_to_top']);?>
,
                units: '<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('addons')['ab__scroll_to_top']['units'] ?? null)===null||$tmp==='' ? 'px' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
',
                transition: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('addons')['ab__scroll_to_top']['transition'] ?? null)===null||$tmp==='' ? 600 ?? null : $tmp))), ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__scroll_to_top/common.js"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__scroll_to_top/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__scroll_to_top/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
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
            ab__stt: {
                settings: <?php echo json_encode($_smarty_tpl->getValue('addons')['ab__scroll_to_top']);?>
,
                units: '<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('addons')['ab__scroll_to_top']['units'] ?? null)===null||$tmp==='' ? 'px' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
',
                transition: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('addons')['ab__scroll_to_top']['transition'] ?? null)===null||$tmp==='' ? 600 ?? null : $tmp))), ENT_QUOTES, 'UTF-8');?>
,
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__scroll_to_top/common.js"), $_smarty_tpl);
}
}
}
