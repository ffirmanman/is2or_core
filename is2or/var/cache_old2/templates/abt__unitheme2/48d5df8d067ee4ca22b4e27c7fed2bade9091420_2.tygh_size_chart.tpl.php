<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/is2or_size_charts/components/size_chart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaaea9876_27339490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48d5df8d067ee4ca22b4e27c7fed2bade9091420' => 
    array (
      0 => 'addons/is2or_size_charts/components/size_chart.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/is2or_size_charts/components/size_chart_content.tpl' => 2,
  ),
))) {
function content_69afafaaea9876_27339490 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_size_charts/components';
\Tygh\Languages\Helper::preloadLangVars(array('size_chart','size_chart','size_chart','size_chart','size_chart','size_chart'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('charts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_size_charts_get_product_charts')($_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('auth')['user_id']), false, NULL);
if ($_smarty_tpl->getValue('charts')) {?>
    <?php $_smarty_tpl->assign('is_popup', (($tmp = $_smarty_tpl->getValue('is_popup') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>
    
    <?php if ($_smarty_tpl->getValue('is_popup')) {?>
        <a title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("size_chart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
            data-ca-target-id="size_chart_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"
            class="cm-dialog-opener cm-dialog-auto-size"
            rel="nofollow"
        >
            <i class="ty-icon-docs"></i>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("size_chart", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </a>

        <div class="hidden" id="size_chart_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("size_chart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
    <?php }?>
    
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('charts'), 'chart');
$foreach76DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('chart')->value) {
$foreach76DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_size_charts/components/size_chart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('chart'=>$_smarty_tpl->getValue('chart')['chart']), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    
    <?php if ($_smarty_tpl->getValue('is_popup')) {?>
            <div class="margin-bottom:30px;">&nbsp;</div>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_size_charts/components/size_chart.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_size_charts/components/size_chart.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('charts', $_smarty_tpl->getSmarty()->getModifierCallback('fn_is2or_size_charts_get_product_charts')($_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('auth')['user_id']), false, NULL);
if ($_smarty_tpl->getValue('charts')) {?>
    <?php $_smarty_tpl->assign('is_popup', (($tmp = $_smarty_tpl->getValue('is_popup') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>
    
    <?php if ($_smarty_tpl->getValue('is_popup')) {?>
        <a title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("size_chart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
            data-ca-target-id="size_chart_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"
            class="cm-dialog-opener cm-dialog-auto-size"
            rel="nofollow"
        >
            <i class="ty-icon-docs"></i>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("size_chart", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </a>

        <div class="hidden" id="size_chart_dialog_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("size_chart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
    <?php }?>
    
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('charts'), 'chart');
$foreach77DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('chart')->value) {
$foreach77DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_size_charts/components/size_chart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('chart'=>$_smarty_tpl->getValue('chart')['chart']), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    
    <?php if ($_smarty_tpl->getValue('is_popup')) {?>
            <div class="margin-bottom:30px;">&nbsp;</div>
        </div>
    <?php }
}
}
}
}
