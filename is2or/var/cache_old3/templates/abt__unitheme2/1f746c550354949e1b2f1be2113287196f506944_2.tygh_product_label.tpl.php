<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:32
  from 'tygh:views/products/components/product_label.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb218705e73_73198498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f746c550354949e1b2f1be2113287196f506944' => 
    array (
      0 => 'views/products/components/product_label.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb218705e73_73198498 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('label_href')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_href')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_extra')), ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->getValue('label_mini')) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->getValue('label_rounded')) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->getValue('label_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_meta')), ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->getValue('label_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('label_icon'))." ty-product-labels__icon"), $_smarty_tpl);
}
echo $_smarty_tpl->getValue('label_text');?>
</div>
    </a>
<?php } else { ?>
        <div <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_extra')), ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->getValue('label_mini')) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->getValue('label_rounded')) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->getValue('label_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_meta')), ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->getValue('label_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('label_icon'))." ty-product-labels__icon"), $_smarty_tpl);
}
echo $_smarty_tpl->getValue('label_text');?>
</div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_label.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/product_label.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('label_href')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_href')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_extra')), ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->getValue('label_mini')) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->getValue('label_rounded')) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->getValue('label_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_meta')), ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->getValue('label_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('label_icon'))." ty-product-labels__icon"), $_smarty_tpl);
}
echo $_smarty_tpl->getValue('label_text');?>
</div>
    </a>
<?php } else { ?>
        <div <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_extra')), ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->getValue('label_mini')) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->getValue('label_rounded')) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->getValue('label_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_meta')), ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->getValue('label_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('label_icon'))." ty-product-labels__icon"), $_smarty_tpl);
}
echo $_smarty_tpl->getValue('label_text');?>
</div>
    </div>
<?php }
}
}
}
