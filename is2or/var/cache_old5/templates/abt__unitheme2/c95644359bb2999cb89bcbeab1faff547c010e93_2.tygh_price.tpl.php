<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:35
  from 'tygh:common/price.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133edfe8dbd0_86622386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95644359bb2999cb89bcbeab1faff547c010e93' => 
    array (
      0 => 'common/price.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133edfe8dbd0_86622386 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['General']['alternative_currency'] == "use_selected_and_alternative") {?><span class="ut2-cost-multi"><span class="ut2-cost-base"><?php $_smarty_tpl->assign('temp', $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),false,$_smarty_tpl->getValue('live_editor_name'),$_smarty_tpl->getValue('live_editor_phrase')), false, NULL);
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_format_price')($_smarty_tpl->getValue('temp'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'));?>
</span><?php if ($_smarty_tpl->getValue('secondary_currency') != $_smarty_tpl->getValue('primary_currency')) {?>&#32;<span class="ut2-cost-opted"><?php if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>(<?php if ($_smarty_tpl->getValue('class')) {?></span><?php }
$_smarty_tpl->assign('value', $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),true,$_smarty_tpl->getValue('is_integer'),$_smarty_tpl->getValue('live_editor_name'),$_smarty_tpl->getValue('live_editor_phrase')), false, NULL);?><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'));?>
</bdi><?php if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>)<?php if ($_smarty_tpl->getValue('class')) {?></span><?php }?></span><?php }?></span><?php } else { ?><span class="ut2-cost-base"><?php $_smarty_tpl->assign('value', $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),true,$_smarty_tpl->getValue('live_editor_name'),$_smarty_tpl->getValue('live_editor_phrase')), false, NULL);?><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'));?>
</bdi></span><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/price.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/price.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['General']['alternative_currency'] == "use_selected_and_alternative") {?><span class="ut2-cost-multi"><span class="ut2-cost-base"><?php $_smarty_tpl->assign('temp', $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('primary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),false,$_smarty_tpl->getValue('live_editor_name'),$_smarty_tpl->getValue('live_editor_phrase')), false, NULL);
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_format_price')($_smarty_tpl->getValue('temp'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'));?>
</span><?php if ($_smarty_tpl->getValue('secondary_currency') != $_smarty_tpl->getValue('primary_currency')) {?>&#32;<span class="ut2-cost-opted"><?php if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>(<?php if ($_smarty_tpl->getValue('class')) {?></span><?php }
$_smarty_tpl->assign('value', $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),true,$_smarty_tpl->getValue('is_integer'),$_smarty_tpl->getValue('live_editor_name'),$_smarty_tpl->getValue('live_editor_phrase')), false, NULL);?><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'));?>
</bdi><?php if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>)<?php if ($_smarty_tpl->getValue('class')) {?></span><?php }?></span><?php }?></span><?php } else { ?><span class="ut2-cost-base"><?php $_smarty_tpl->assign('value', $_smarty_tpl->getSmarty()->getModifierCallback('format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'),true,$_smarty_tpl->getValue('live_editor_name'),$_smarty_tpl->getValue('live_editor_phrase')), false, NULL);?><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_format_price')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')],$_smarty_tpl->getValue('span_id'),$_smarty_tpl->getValue('class'));?>
</bdi></span><?php }
}
}
}
