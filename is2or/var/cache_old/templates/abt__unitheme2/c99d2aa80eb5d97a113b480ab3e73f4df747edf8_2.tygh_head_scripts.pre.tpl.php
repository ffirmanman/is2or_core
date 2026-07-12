<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:30
  from 'tygh:addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9472213586_06533201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c99d2aa80eb5d97a113b480ab3e73f4df747edf8' => 
    array (
      0 => 'addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9472213586_06533201 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__lazy_load/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
 data-no-defer>
    window.lazySizesConfig =  {
        loadMode: 2,
        hFac: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__ll')['h_fac']), ENT_QUOTES, 'UTF-8');?>
,
        expand: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__ll')['expand']), ENT_QUOTES, 'UTF-8');?>
,
        expFactor: 1,
        preloadAfterLoad: false
    };
    document.addEventListener('lazybeforeunveil', function(e){
        let element = e.target;
        var bg = element.getAttribute('data-background-url');
        if(bg){
            var bgImg = $(new Image());
            bgImg.attr('src', bg);
            bgImg.on('load', function () {
                $(element).css({
                    'background-image': "url('" + bg + "')"
                }).removeAttr('data-background-url')
            });
        }
    });
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
 data-no-defer>
    window.lazySizesConfig =  {
        loadMode: 2,
        hFac: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__ll')['h_fac']), ENT_QUOTES, 'UTF-8');?>
,
        expand: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__ll')['expand']), ENT_QUOTES, 'UTF-8');?>
,
        expFactor: 1,
        preloadAfterLoad: false
    };
    document.addEventListener('lazybeforeunveil', function(e){
        let element = e.target;
        var bg = element.getAttribute('data-background-url');
        if(bg){
            var bgImg = $(new Image());
            bgImg.attr('src', bg);
            bgImg.on('load', function () {
                $(element).css({
                    'background-image': "url('" + bg + "')"
                }).removeAttr('data-background-url')
            });
        }
    });
<?php echo '</script'; ?>
><?php }
}
}
