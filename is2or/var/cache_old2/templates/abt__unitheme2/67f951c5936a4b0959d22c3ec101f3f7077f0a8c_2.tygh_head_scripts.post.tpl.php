<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:07
  from 'tygh:addons/google_analytics/hooks/index/head_scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa7b86787_37894442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f951c5936a4b0959d22c3ec101f3f7077f0a8c' => 
    array (
      0 => 'addons/google_analytics/hooks/index/head_scripts.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa7b86787_37894442 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/google_analytics/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('src', "https://www.googletagmanager.com/gtag/js?id=".((string)$_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), false, NULL);
$_smarty_tpl->assign('load_script', true, false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"google_analytics:head_scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"google_analytics:head_scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('load_script')) {?>
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    // Global site tag (gtag.js) - Google Analytics
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
');
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('script_attrs'));?>
>
    (function(_, $) {
        // Setting up sending pageviews in Google analytics when changing the page dynamically(ajax)
        $.ceEvent('on', 'ce.history_load', function(url) {
            if (typeof(gtag) !== 'undefined') {

                // disabling page tracking by default
                gtag('config', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
', { send_page_view: false });

                // send pageview for google analytics
                gtag('event', 'page_view', {
                    page_path: url.replace('!', ''),
                    send_to: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
'
                });
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/google_analytics/hooks/index/head_scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/google_analytics/hooks/index/head_scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('src', "https://www.googletagmanager.com/gtag/js?id=".((string)$_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), false, NULL);
$_smarty_tpl->assign('load_script', true, false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"google_analytics:head_scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"google_analytics:head_scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('load_script')) {?>
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    // Global site tag (gtag.js) - Google Analytics
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
');
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('script_attrs'));?>
>
    (function(_, $) {
        // Setting up sending pageviews in Google analytics when changing the page dynamically(ajax)
        $.ceEvent('on', 'ce.history_load', function(url) {
            if (typeof(gtag) !== 'undefined') {

                // disabling page tracking by default
                gtag('config', '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
', { send_page_view: false });

                // send pageview for google analytics
                gtag('event', 'page_view', {
                    page_path: url.replace('!', ''),
                    send_to: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
'
                });
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
