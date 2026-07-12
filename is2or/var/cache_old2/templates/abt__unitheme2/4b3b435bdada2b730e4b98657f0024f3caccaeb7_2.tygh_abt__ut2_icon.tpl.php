<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:common/abt__ut2_icon.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa6cc8f1_63188288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b3b435bdada2b730e4b98657f0024f3caccaeb7' => 
    array (
      0 => 'common/abt__ut2_icon.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaa6cc8f1_63188288 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('class')) {?><span 
        class="ut2-icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('id')) {?>
            id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>

        <?php }?>
        <?php if ($_smarty_tpl->getValue('title')) {?>
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>

        <?php if ($_smarty_tpl->getValue('data')) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'data_value', false, 'data_name');
$foreach46DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data_name')->value => $_smarty_tpl->getVariable('data_value')->value) {
$foreach46DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('data_value')) {?>
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_value')), ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
    ><?php if ($_smarty_tpl->getValue('icon_text')) {
echo $_smarty_tpl->getValue('icon_text');
}?></span><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/abt__ut2_icon.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/abt__ut2_icon.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('class')) {?><span 
        class="ut2-icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('id')) {?>
            id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>

        <?php }?>
        <?php if ($_smarty_tpl->getValue('title')) {?>
            title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>

        <?php if ($_smarty_tpl->getValue('data')) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'data_value', false, 'data_name');
$foreach47DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data_name')->value => $_smarty_tpl->getVariable('data_value')->value) {
$foreach47DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('data_value')) {?>
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_value')), ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
    ><?php if ($_smarty_tpl->getValue('icon_text')) {
echo $_smarty_tpl->getValue('icon_text');
}?></span><?php }
}
}
}
