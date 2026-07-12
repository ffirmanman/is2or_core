<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:32
  from 'tygh:addons/cities/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad947444ad07_54188288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34569932581b2fcfc88ccd87a15072f1e27a444a' => 
    array (
      0 => 'addons/cities/hooks/index/scripts.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad947444ad07_54188288 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/cities/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout" && $_smarty_tpl->getValue('runtime')['mode'] == "checkout") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/rus_cities_checout_cities.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        (function (_, $) {
            $.extend(_.abt__ut2, {
                checkout_cities: <?php echo json_encode($_smarty_tpl->getValue('abt_ut2__checkout_cities'));?>

            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cities/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cities/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout" && $_smarty_tpl->getValue('runtime')['mode'] == "checkout") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/rus_cities_checout_cities.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        (function (_, $) {
            $.extend(_.abt__ut2, {
                checkout_cities: <?php echo json_encode($_smarty_tpl->getValue('abt_ut2__checkout_cities'));?>

            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
}
}
}
