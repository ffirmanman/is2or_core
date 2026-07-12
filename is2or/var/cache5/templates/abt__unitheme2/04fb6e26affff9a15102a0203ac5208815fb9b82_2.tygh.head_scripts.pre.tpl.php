<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f505dcb4_56995157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fb6e26affff9a15102a0203ac5208815fb9b82' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f505dcb4_56995157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
 data-no-defer>
    window.lazySizesConfig =  {
        loadMode: 2,
        hFac: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__ll']->value['h_fac'], ENT_QUOTES, 'UTF-8');?>
,
        expand: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__ll']->value['expand'], ENT_QUOTES, 'UTF-8');?>
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
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__lazy_load/hooks/index/head_scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
 data-no-defer>
    window.lazySizesConfig =  {
        loadMode: 2,
        hFac: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__ll']->value['h_fac'], ENT_QUOTES, 'UTF-8');?>
,
        expand: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__ll']->value['expand'], ENT_QUOTES, 'UTF-8');?>
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
