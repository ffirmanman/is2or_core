<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_header.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa92da16_03309547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '192704e6b9419337cf234a8369604d86abcb346b' => 
    array (
      0 => 'addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_header.override.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaa92da16_03309547 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_product_tabs/hooks/tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('tab')['ab__spt_activate_settings'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('product_details_in_tab') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO')) {?>
            <<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
 class="tab-list-title ab-spt-title" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__spt_generate_tab_name')(array('tab'=>$_smarty_tpl->getValue('tab'),'product'=>$_smarty_tpl->getValue('product')));?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_header.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_header.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('tab')['ab__spt_activate_settings'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('product_details_in_tab') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO')) {?>
            <<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
 class="tab-list-title ab-spt-title" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__spt_generate_tab_name')(array('tab'=>$_smarty_tpl->getValue('tab'),'product'=>$_smarty_tpl->getValue('product')));?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"tabs:ab__product_tabs_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
