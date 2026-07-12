<?php
/* Smarty version 5.4.3, created on 2026-03-08 21:18:22
  from 'tygh:addons/is2or_size_charts/components/size_chart_content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adbd6e0124c6_97692987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '644af8832e5daf1de84b3710421332056afa3ab7' => 
    array (
      0 => 'addons/is2or_size_charts/components/size_chart_content.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69adbd6e0124c6_97692987 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_size_charts/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><h4><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chart')['title']), ENT_QUOTES, 'UTF-8');?>
</h4>

<?php if ($_smarty_tpl->getValue('chart')['recommendation']) {?>
    <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_size_charts.recommended_size', array('[size]'=>$_smarty_tpl->getValue('chart')['recommendation']['__name']), $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
<?php }?>

<?php if ($_smarty_tpl->getValue('show_texts')) {?>
<div><?php echo $_smarty_tpl->getValue('chart')['text_before'];?>
</div>
<?php }?>

<table class="ty-table" style="min-width: 300px; margin-top: 0;">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('size', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chart')['headers'], 'h');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('h')->value) {
$foreach0DoElse = false;
?>
            <th style="text-align: center;"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('h')), ENT_QUOTES, 'UTF-8');?>
</th>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tr>
    </thead>

    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chart')['rows'], 'r');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach1DoElse = false;
?>
        <tr>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('r'), 'c', false, 'k');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('c')->value) {
$foreach2DoElse = false;
?>
            <td <?php if ($_smarty_tpl->getValue('k') !== '__name') {?>style="text-align: center;"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('c')), ENT_QUOTES, 'UTF-8');?>
</td>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if ($_smarty_tpl->getValue('show_texts')) {?>
<div style="margin-top:10px; margin-bottom:10px;"><?php echo $_smarty_tpl->getValue('chart')['text_after'];?>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_size_charts/components/size_chart_content.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_size_charts/components/size_chart_content.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><h4><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chart')['title']), ENT_QUOTES, 'UTF-8');?>
</h4>

<?php if ($_smarty_tpl->getValue('chart')['recommendation']) {?>
    <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_size_charts.recommended_size', array('[size]'=>$_smarty_tpl->getValue('chart')['recommendation']['__name']), $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
<?php }?>

<?php if ($_smarty_tpl->getValue('show_texts')) {?>
<div><?php echo $_smarty_tpl->getValue('chart')['text_before'];?>
</div>
<?php }?>

<table class="ty-table" style="min-width: 300px; margin-top: 0;">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('size', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chart')['headers'], 'h');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('h')->value) {
$foreach3DoElse = false;
?>
            <th style="text-align: center;"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('h')), ENT_QUOTES, 'UTF-8');?>
</th>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tr>
    </thead>

    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chart')['rows'], 'r');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach4DoElse = false;
?>
        <tr>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('r'), 'c', false, 'k');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('c')->value) {
$foreach5DoElse = false;
?>
            <td <?php if ($_smarty_tpl->getValue('k') !== '__name') {?>style="text-align: center;"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('c')), ENT_QUOTES, 'UTF-8');?>
</td>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if ($_smarty_tpl->getValue('show_texts')) {?>
<div style="margin-top:10px; margin-bottom:10px;"><?php echo $_smarty_tpl->getValue('chart')['text_after'];?>
</div>
<?php }
}
}
}
