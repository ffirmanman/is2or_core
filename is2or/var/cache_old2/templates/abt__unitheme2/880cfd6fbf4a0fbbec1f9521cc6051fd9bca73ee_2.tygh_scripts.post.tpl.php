<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/is2or_product_notes/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9967661_70223737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880cfd6fbf4a0fbbec1f9521cc6051fd9bca73ee' => 
    array (
      0 => 'addons/is2or_product_notes/hooks/index/scripts.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa9967661_70223737 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_product_notes/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
(function(_, $) {
    $(_.doc).on('blur', ".product-notes__input", function() {
        const item_id = $(this).data('caItemId');
        const notes = $(this).val();

        $.ceAjax(
            'request',
            fn_url('product_notes.update'),
            {
                method: 'POST',
                data: {
                    item_id,
                    notes
                }
            }
        );
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_product_notes/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_product_notes/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
(function(_, $) {
    $(_.doc).on('blur', ".product-notes__input", function() {
        const item_id = $(this).data('caItemId');
        const notes = $(this).val();

        $.ceAjax(
            'request',
            fn_url('product_notes.update'),
            {
                method: 'POST',
                data: {
                    item_id,
                    notes
                }
            }
        );
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
