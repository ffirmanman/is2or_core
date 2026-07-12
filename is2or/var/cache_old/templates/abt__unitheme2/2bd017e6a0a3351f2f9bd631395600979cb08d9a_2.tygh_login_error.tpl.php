<?php
/* Smarty version 5.4.3, created on 2026-03-10 07:53:50
  from 'tygh:addons/hybrid_auth/views/auth/login_error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afa3de1b23b7_00707277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bd017e6a0a3351f2f9bd631395600979cb08d9a' => 
    array (
      0 => 'addons/hybrid_auth/views/auth/login_error.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afa3de1b23b7_00707277 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hybrid_auth/views/auth';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
 data-no-defer>
    var target_window = opener || window;

    <?php if ($_smarty_tpl->getValue('redirect_url')) {?>
        var url = '<?php echo strtr((string)$_smarty_tpl->getValue('redirect_url'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'.replace(/\&amp;/g, '&');
        target_window.location.href = url;
    <?php } else { ?>
        target_window.location.reload();
    <?php }?>

    if (opener) {
        window.close();
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/views/auth/login_error.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hybrid_auth/views/auth/login_error.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
 data-no-defer>
    var target_window = opener || window;

    <?php if ($_smarty_tpl->getValue('redirect_url')) {?>
        var url = '<?php echo strtr((string)$_smarty_tpl->getValue('redirect_url'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'.replace(/\&amp;/g, '&');
        target_window.location.href = url;
    <?php } else { ?>
        target_window.location.reload();
    <?php }?>

    if (opener) {
        window.close();
    }
<?php echo '</script'; ?>
>
<?php }
}
}
