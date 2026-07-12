<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/buy_together/hooks/products/product_data.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ffc8bc73_52593688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5dcd38eae8f95dd4484ae8c62e2e1f47668b434' => 
    array (
      0 => 'addons/buy_together/hooks/products/product_data.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_options.tpl' => 2,
  ),
))) {
function content_69fb49ffc8bc73_52593688 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/buy_together/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('bt_chain') || $_smarty_tpl->getValue('bt_id')) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_chain')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <input type="hidden" name="appearance[show_product_options]" value="1" />
        <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_chain')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_product_options')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('disable_ids')) {?>
                <?php $_smarty_tpl->assign('_disable_ids', ((string)$_smarty_tpl->getValue('disable_ids')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('_disable_ids', '', false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('obj_id'),'product_options'=>$_smarty_tpl->getValue('product')['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->getValue('capture_options_vs_qty'),'disable_ids'=>$_smarty_tpl->getValue('_disable_ids'),'extra_id'=>$_smarty_tpl->getValue('obj_id')), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <!--buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_chain')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/buy_together/hooks/products/product_data.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/buy_together/hooks/products/product_data.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('bt_chain') || $_smarty_tpl->getValue('bt_id')) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_chain')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <input type="hidden" name="appearance[show_product_options]" value="1" />
        <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_chain')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_product_options')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('disable_ids')) {?>
                <?php $_smarty_tpl->assign('_disable_ids', ((string)$_smarty_tpl->getValue('disable_ids')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('_disable_ids', '', false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('obj_id'),'product_options'=>$_smarty_tpl->getValue('product')['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->getValue('capture_options_vs_qty'),'disable_ids'=>$_smarty_tpl->getValue('_disable_ids'),'extra_id'=>$_smarty_tpl->getValue('obj_id')), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <!--buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_chain')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bt_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
