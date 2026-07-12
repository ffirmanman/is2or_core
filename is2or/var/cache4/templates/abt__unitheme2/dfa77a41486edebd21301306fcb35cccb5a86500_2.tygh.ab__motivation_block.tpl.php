<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/blocks/ab__motivation_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c8d27b0_76502214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa77a41486edebd21301306fcb35cccb5a86500' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/blocks/ab__motivation_block.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->tpl_vars[\'addons\']->value[\'ab__motivation_block\'][\'template_variant\']).".tpl' => 2,
  ),
),false)) {
function content_6834571c8d27b0_76502214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__motivation_block:block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['ab__mb_id']->value ?? null)===null||$tmp==='' ? "ab__mb_id_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp));?>
    <div class="ab__motivation_block ab__<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?> loaded<?php }?>" data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" style="
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'] !== "#ffffff") {?>
            --ab-mb-bg-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');?>
;
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['use_contrast_style_elements'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-mb-items-color: #ffffff;<?php }?>
        <?php }?>">
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ab__mb_items <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['appearance_type_styles'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'] != "#ffffff") {?> colored<?php }
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['use_contrast_style_elements'] === smarty_modifier_enum("YesNo::YES")) {?> darken<?php } else { ?> lighten<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> ab-mb-live-editor<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/blocks/ab__motivation_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__motivation_block/blocks/ab__motivation_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__motivation_block:block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['ab__mb_id']->value ?? null)===null||$tmp==='' ? "ab__mb_id_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp));?>
    <div class="ab__motivation_block ab__<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?> loaded<?php }?>" data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" style="
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'] !== "#ffffff") {?>
            --ab-mb-bg-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');?>
;
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['use_contrast_style_elements'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-mb-items-color: #ffffff;<?php }?>
        <?php }?>">
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ab__mb_items <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['appearance_type_styles'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'] != "#ffffff") {?> colored<?php }
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['use_contrast_style_elements'] === smarty_modifier_enum("YesNo::YES")) {?> darken<?php } else { ?> lighten<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> ab-mb-live-editor<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
