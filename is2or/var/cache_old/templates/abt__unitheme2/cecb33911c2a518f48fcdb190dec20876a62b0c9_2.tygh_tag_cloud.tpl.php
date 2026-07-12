<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:15
  from 'tygh:addons/tags/blocks/tag_cloud.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9607a69ae3_67560094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cecb33911c2a518f48fcdb190dec20876a62b0c9' => 
    array (
      0 => 'addons/tags/blocks/tag_cloud.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9607a69ae3_67560094 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/tags/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('items')) {?>
<div class="ty-tag-cloud">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'tag');
$foreach42DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tag')->value) {
$foreach42DoElse = false;
?>
        <?php $_smarty_tpl->assign('tag_name', rawurlencode((string)$_smarty_tpl->getValue('tag')['tag']), false, NULL);?>
        <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("tags.view?tag=".((string)$_smarty_tpl->getValue('tag_name')));?>
" class="ty-tag-cloud__item ty-tag-level-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')['level']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')['tag']), ENT_QUOTES, 'UTF-8');?>
</a>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/blocks/tag_cloud.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/tags/blocks/tag_cloud.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('items')) {?>
<div class="ty-tag-cloud">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'tag');
$foreach43DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tag')->value) {
$foreach43DoElse = false;
?>
        <?php $_smarty_tpl->assign('tag_name', rawurlencode((string)$_smarty_tpl->getValue('tag')['tag']), false, NULL);?>
        <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("tags.view?tag=".((string)$_smarty_tpl->getValue('tag_name')));?>
" class="ty-tag-cloud__item ty-tag-level-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')['level']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')['tag']), ENT_QUOTES, 'UTF-8');?>
</a>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
}
