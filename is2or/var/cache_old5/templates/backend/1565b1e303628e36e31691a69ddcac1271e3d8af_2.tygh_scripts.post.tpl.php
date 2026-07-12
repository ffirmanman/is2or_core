<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:23
  from 'tygh:addons/tech_support_chat/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed305a507_69568642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1565b1e303628e36e31691a69ddcac1271e3d8af' => 
    array (
      0 => 'addons/tech_support_chat/hooks/index/scripts.post.tpl',
      1 => 1767831042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed305a507_69568642 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/tech_support_chat/hooks/index';
if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") && $_smarty_tpl->getValue('auth')['is_root'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('tech_support_chat_widget_id')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
        var __REPLAIN_ = '<?php echo strtr((string)$_smarty_tpl->getValue('tech_support_chat_widget_id'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
';
        
        (function (u) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = u;
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })('https://widget.replain.cc/dist/client.js');
        
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
