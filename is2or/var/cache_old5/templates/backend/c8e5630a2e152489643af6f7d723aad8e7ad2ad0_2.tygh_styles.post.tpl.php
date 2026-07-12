<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:21
  from 'tygh:addons/vendor_data_premoderation/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed15ee657_49927606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e5630a2e152489643af6f7d723aad8e7ad2ad0' => 
    array (
      0 => 'addons/vendor_data_premoderation/hooks/index/styles.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed15ee657_49927606 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_data_premoderation/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/vendor_data_premoderation/styles.less"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('addon')['addon'] == "vendor_data_premoderation") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/vendor_data_premoderation/vendor_data_premoderation.less"), $_smarty_tpl);?>

<?php }
}
}
