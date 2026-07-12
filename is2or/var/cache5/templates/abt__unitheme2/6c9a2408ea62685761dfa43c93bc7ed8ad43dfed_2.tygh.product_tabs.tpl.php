<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f6556443_60355335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c9a2408ea62685761dfa43c93bc7ed8ad43dfed' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tabsbox.tpl' => 2,
  ),
),false)) {
function content_6835b9f6556443_60355335 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.render_block.php','function'=>'smarty_function_render_block',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('product_details_in_tab', (($tmp = $_smarty_tpl->tpl_vars['product_details_in_tab']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] ?? null : $tmp));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tab_id');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_id']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['tab']->value['status'] === "A") {?>
            <?php $_smarty_tpl->_assignInScope('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value));?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] === "B") {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] === "T") {?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->tpl_vars['tab']->value['html_id']), 0, true);
?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__product_tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value))) {?> data-ca-accordion-is-active-scroll-to-elm=1<?php }?>><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value);?>
</div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox_content", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value === smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox')), 0, false);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('product_details_in_tab', (($tmp = $_smarty_tpl->tpl_vars['product_details_in_tab']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] ?? null : $tmp));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tab_id');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_id']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['tab']->value['status'] === "A") {?>
            <?php $_smarty_tpl->_assignInScope('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value));?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] === "B") {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] === "T") {?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->tpl_vars['tab']->value['html_id']), 0, true);
?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__product_tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value))) {?> data-ca-accordion-is-active-scroll-to-elm=1<?php }?>><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content_capture']->value);?>
</div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tabs:ab__tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox_content", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value === smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox')), 0, true);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
