<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/ab__motivation_block/blocks/ab__motivation_block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ee506706_59930338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc2703f047a3a05e8feed402647e3153b19d9172' => 
    array (
      0 => 'addons/ab__motivation_block/blocks/ab__motivation_block.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->getValue(\'addons\')[\'ab__motivation_block\'][\'template_variant\']).".tpl' => 2,
  ),
))) {
function content_69ada1ee506706_59930338 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('ab__motivation_items')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__motivation_block:block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('ab__mb_id') ?? null)===null||$tmp==='' ? "ab__mb_id_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp), false, NULL);?>
    <div class="ab__motivation_block ab__<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['template_variant']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('ab__motivation_items')) {?> loaded<?php }?>" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" style="
        <?php if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['bg_color'] !== "#ffffff") {?>
            --ab-mb-bg-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['bg_color']), ENT_QUOTES, 'UTF-8');?>
;
            <?php if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['use_contrast_style_elements'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-mb-items-color: #ffffff;<?php }?>
        <?php }?>">
        <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
            <div class="ab__mb_items <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['appearance_type_styles']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['bg_color'] != "#ffffff") {?> colored<?php }
if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['use_contrast_style_elements'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> darken<?php } else { ?> lighten<?php }
if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?> ab-mb-live-editor<?php }?>">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->getValue('addons')['ab__motivation_block']['template_variant']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </div>
        <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__motivation_block:block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/blocks/ab__motivation_block.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__motivation_block/blocks/ab__motivation_block.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('ab__motivation_items')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__motivation_block:block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('ab__mb_id') ?? null)===null||$tmp==='' ? "ab__mb_id_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp), false, NULL);?>
    <div class="ab__motivation_block ab__<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['template_variant']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('ab__motivation_items')) {?> loaded<?php }?>" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" style="
        <?php if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['bg_color'] !== "#ffffff") {?>
            --ab-mb-bg-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['bg_color']), ENT_QUOTES, 'UTF-8');?>
;
            <?php if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['use_contrast_style_elements'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-mb-items-color: #ffffff;<?php }?>
        <?php }?>">
        <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
            <div class="ab__mb_items <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__motivation_block']['appearance_type_styles']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['bg_color'] != "#ffffff") {?> colored<?php }
if ($_smarty_tpl->getValue('addons')['ab__motivation_block']['use_contrast_style_elements'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> darken<?php } else { ?> lighten<?php }
if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?> ab-mb-live-editor<?php }?>">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->getValue('addons')['ab__motivation_block']['template_variant']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </div>
        <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ab__motivation_block:block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
