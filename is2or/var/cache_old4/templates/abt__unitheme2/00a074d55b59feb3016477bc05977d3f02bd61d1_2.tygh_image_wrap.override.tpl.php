<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/is2or_product_360_images/hooks/products/image_wrap.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0014e5b9_40824825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a074d55b59feb3016477bc05977d3f02bd61d1' => 
    array (
      0 => 'addons/is2or_product_360_images/hooks/products/image_wrap.override.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a0014e5b9_40824825 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_product_360_images/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['360_images'] && $_smarty_tpl->getValue('no_images')) {?>
    <?php $_smarty_tpl->assign('first_360_image', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['360_images']), false, NULL);?>
    <div
        class="cloudimage-360"
        id="360ImagesContainer<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"
        data-folder="/images/360_images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
/"
        data-filename-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['prefix']), ENT_QUOTES, 'UTF-8');?>
-{index}.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['extension']), ENT_QUOTES, 'UTF-8');?>
"
        data-amount-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['360_images'])), ENT_QUOTES, 'UTF-8');?>
"
        data-drag-speed="120"
        data-lazy-load="true"
    ></div>
    <?php echo '<script'; ?>
 src="https://scaleflex.cloudimg.io/v7/plugins/js-cloudimage-360-view/latest/js-cloudimage-360-view.min.js?func=proxy"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        window.CI360.init();
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_product_360_images/hooks/products/image_wrap.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_product_360_images/hooks/products/image_wrap.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['360_images'] && $_smarty_tpl->getValue('no_images')) {?>
    <?php $_smarty_tpl->assign('first_360_image', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['360_images']), false, NULL);?>
    <div
        class="cloudimage-360"
        id="360ImagesContainer<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"
        data-folder="/images/360_images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
/"
        data-filename-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['prefix']), ENT_QUOTES, 'UTF-8');?>
-{index}.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['extension']), ENT_QUOTES, 'UTF-8');?>
"
        data-amount-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['360_images'])), ENT_QUOTES, 'UTF-8');?>
"
        data-drag-speed="120"
        data-lazy-load="true"
    ></div>
    <?php echo '<script'; ?>
 src="https://scaleflex.cloudimg.io/v7/plugins/js-cloudimage-360-view/latest/js-cloudimage-360-view.min.js?func=proxy"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        window.CI360.init();
    <?php echo '</script'; ?>
>
<?php }
}
}
}
