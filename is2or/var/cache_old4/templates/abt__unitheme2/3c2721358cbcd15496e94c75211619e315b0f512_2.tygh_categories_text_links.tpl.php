<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:blocks/categories/categories_text_links.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a721c0982_26853001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c2721358cbcd15496e94c75211619e315b0f512' => 
    array (
      0 => 'blocks/categories/categories_text_links.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a721c0982_26853001 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks/categories';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('items')) {?>
<ul class="ty-text-links">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
    <li class="ty-text-links__item ty-level-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('category')['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('category')['active'] || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_is_active_menu_item')($_smarty_tpl->getValue('category'),$_smarty_tpl->getValue('block')['type'])) {?> ty-text-links__active<?php }?>">
        <a class="ty-text-links__a"
           href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('category'),$_smarty_tpl->getValue('block')['type'])), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>

        </a>
    </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_text_links.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/categories/categories_text_links.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('items')) {?>
<ul class="ty-text-links">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'category');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach1DoElse = false;
?>
    <li class="ty-text-links__item ty-level-<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('category')['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('category')['active'] || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_is_active_menu_item')($_smarty_tpl->getValue('category'),$_smarty_tpl->getValue('block')['type'])) {?> ty-text-links__active<?php }?>">
        <a class="ty-text-links__a"
           href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_form_dropdown_object_link')($_smarty_tpl->getValue('category'),$_smarty_tpl->getValue('block')['type'])), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category')['category']), ENT_QUOTES, 'UTF-8');?>

        </a>
    </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
}
