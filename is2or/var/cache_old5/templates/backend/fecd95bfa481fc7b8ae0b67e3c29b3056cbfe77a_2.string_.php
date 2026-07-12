<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'string:<p><img src="design/backend/media/images/custom_blocks/custom_blocks_2.svg" width="150" height="150" style="width: 150px; height: 150px; float: right; margin: 0px 0px 10px 10px;"></p><h4>2. Add your products</h4><p>List your products by hand or upload a CSV or XML file to import products in bulk.</p><p><a href="{'products.manage'|fn_url}" class="btn">Add one product</a> <a href="{'sync_data.update&sync_provider_id=shopify_import'|fn_url}" class="btn btn-link">Import from Shopify</a> <a href="{'import_presets.add&object_type=products'|fn_url}" class="btn btn-link">Import custom CSV or XML</a></p>' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee3705997_76917746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ee3705997_76917746 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '.';
?><p><img src="design/backend/media/images/custom_blocks/custom_blocks_2.svg" width="150" height="150" style="width: 150px; height: 150px; float: right; margin: 0px 0px 10px 10px;"></p><h4>2. Add your products</h4><p>List your products by hand or upload a CSV or XML file to import products in bulk.</p><p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('products.manage')), ENT_QUOTES, 'UTF-8');?>
" class="btn">Add one product</a> <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('sync_data.update&sync_provider_id=shopify_import')), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-link">Import from Shopify</a> <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('import_presets.add&object_type=products')), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-link">Import custom CSV or XML</a></p><?php }
}
