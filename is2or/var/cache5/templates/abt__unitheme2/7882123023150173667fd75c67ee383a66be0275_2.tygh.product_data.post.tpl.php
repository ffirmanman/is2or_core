<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/buy_together/hooks/products/product_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5e47596_59324303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7882123023150173667fd75c67ee383a66be0275' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/buy_together/hooks/products/product_data.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_options.tpl' => 2,
  ),
),false)) {
function content_6835b9f5e47596_59324303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['bt_chain']->value || $_smarty_tpl->tpl_vars['bt_id']->value) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_chain']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <input type="hidden" name="appearance[show_product_options]" value="1" />
        <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_chain']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_product_options']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_option_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['disable_ids']->value) {?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', ((string)$_smarty_tpl->tpl_vars['disable_ids']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', '');?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value,'disable_ids'=>$_smarty_tpl->tpl_vars['_disable_ids']->value,'extra_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_chain']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/buy_together/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/buy_together/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['bt_chain']->value || $_smarty_tpl->tpl_vars['bt_id']->value) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_chain']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <input type="hidden" name="appearance[show_product_options]" value="1" />
        <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_chain']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_product_options']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_option_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['disable_ids']->value) {?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', ((string)$_smarty_tpl->tpl_vars['disable_ids']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', '');?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value,'disable_ids'=>$_smarty_tpl->tpl_vars['_disable_ids']->value,'extra_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_chain']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bt_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
