<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:addons/vendor_plans/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2e4bcd0_04657661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaed5773afb63c34e20e8e4f016f964a7a7df6f6' => 
    array (
      0 => 'addons/vendor_plans/hooks/index/scripts.post.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2e4bcd0_04657661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_plans/hooks/index';
if ($_smarty_tpl->getValue('vendor_plans_payments')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
Tygh.$(document).ready(function() {
    Tygh.$.get('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('vendor_plans.async?is_ajax=1','A','current');?>
');
});
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_plans/backend/plan_storefronts.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_plans/backend/plan_usergroups.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_plans/backend/plan_categories.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_plans/backend/vendor_storefronts.js"), $_smarty_tpl);?>

<?php }
}
