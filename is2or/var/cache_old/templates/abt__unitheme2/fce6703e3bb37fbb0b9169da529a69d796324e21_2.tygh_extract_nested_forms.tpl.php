<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:12
  from 'tygh:views/block_manager/extract_nested_forms.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29c168ef8_75327528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce6703e3bb37fbb0b9169da529a69d796324e21' => 
    array (
      0 => 'views/block_manager/extract_nested_forms.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea29c168ef8_75327528 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/block_manager';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "wrapper", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('wrapper'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>"&nbsp;"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'wrapper'),"<form") && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('content'),"<form")) {?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('explode')("<form",$_smarty_tpl->getValue('content')), 'form');
$_smarty_tpl->getVariable('form')->index = -1;
$foreach56DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('form')->value) {
$foreach56DoElse = false;
$_smarty_tpl->getVariable('form')->index++;
$_smarty_tpl->getVariable('form')->first = !$_smarty_tpl->getVariable('form')->index;
$foreach56Backup = clone $_smarty_tpl->getVariable('form');
?>
        <?php if ($_smarty_tpl->getVariable('form')->first) {?>
            <?php continue 1;?>
        <?php }?>

                <?php $_smarty_tpl->assign('form', "<form".((string)$_smarty_tpl->getValue('form')), false, NULL);?>
        <?php $_smarty_tpl->assign('start', $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form'),"<form"), false, NULL);?>
        <?php $_smarty_tpl->assign('form_content', substr((string) $_smarty_tpl->getValue('form'), (int) $_smarty_tpl->getValue('start'), (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form'),"</form")+7-$_smarty_tpl->getValue('start'))), false, NULL);?>
        <?php $_smarty_tpl->assign('form_tag', ((string)(substr((string) $_smarty_tpl->getValue('form_content'), (int) 0, (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form_content'),">")+1))))."</form>", false, NULL);?>
        <?php $_smarty_tpl->assign('form_id', substr((string) $_smarty_tpl->getValue('form_tag'), (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form_content'),"id=\"")+4)), false, NULL);?>
        <?php $_smarty_tpl->assign('form_id', substr((string) $_smarty_tpl->getValue('form_id'), (int) 0, (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form_id'),"\""))), false, NULL);?>

                <?php $_smarty_tpl->assign('content', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('content'),$_smarty_tpl->getValue('form_content'),($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('form_content'),"<form","<x-form"),"</form","</x-form"),"id=\"".((string)$_smarty_tpl->getValue('form_id'))."\">","id=\"".((string)$_smarty_tpl->getValue('form_id'))."_base\">"),"<input","<input form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""),"<select","<select form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""),"<textarea","<textarea form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""),"<button","<button form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""))), false, NULL);?>

                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('form_tag')," class=\""," class=\"hidden cm-outside-inputs ");?>


                <?php $_smarty_tpl->assign('content', $_smarty_tpl->getValue('content'), false, 2);?>
    <?php
$_smarty_tpl->setVariable('form', $foreach56Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/block_manager/extract_nested_forms.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/block_manager/extract_nested_forms.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "wrapper", null, null);?>
    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('wrapper'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>"&nbsp;"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'wrapper'),"<form") && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('content'),"<form")) {?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('explode')("<form",$_smarty_tpl->getValue('content')), 'form');
$_smarty_tpl->getVariable('form')->index = -1;
$foreach57DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('form')->value) {
$foreach57DoElse = false;
$_smarty_tpl->getVariable('form')->index++;
$_smarty_tpl->getVariable('form')->first = !$_smarty_tpl->getVariable('form')->index;
$foreach57Backup = clone $_smarty_tpl->getVariable('form');
?>
        <?php if ($_smarty_tpl->getVariable('form')->first) {?>
            <?php continue 1;?>
        <?php }?>

                <?php $_smarty_tpl->assign('form', "<form".((string)$_smarty_tpl->getValue('form')), false, NULL);?>
        <?php $_smarty_tpl->assign('start', $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form'),"<form"), false, NULL);?>
        <?php $_smarty_tpl->assign('form_content', substr((string) $_smarty_tpl->getValue('form'), (int) $_smarty_tpl->getValue('start'), (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form'),"</form")+7-$_smarty_tpl->getValue('start'))), false, NULL);?>
        <?php $_smarty_tpl->assign('form_tag', ((string)(substr((string) $_smarty_tpl->getValue('form_content'), (int) 0, (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form_content'),">")+1))))."</form>", false, NULL);?>
        <?php $_smarty_tpl->assign('form_id', substr((string) $_smarty_tpl->getValue('form_tag'), (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form_content'),"id=\"")+4)), false, NULL);?>
        <?php $_smarty_tpl->assign('form_id', substr((string) $_smarty_tpl->getValue('form_id'), (int) 0, (int) ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('form_id'),"\""))), false, NULL);?>

                <?php $_smarty_tpl->assign('content', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('content'),$_smarty_tpl->getValue('form_content'),($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('form_content'),"<form","<x-form"),"</form","</x-form"),"id=\"".((string)$_smarty_tpl->getValue('form_id'))."\">","id=\"".((string)$_smarty_tpl->getValue('form_id'))."_base\">"),"<input","<input form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""),"<select","<select form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""),"<textarea","<textarea form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""),"<button","<button form=\"".((string)$_smarty_tpl->getValue('form_id'))."\""))), false, NULL);?>

                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('form_tag')," class=\""," class=\"hidden cm-outside-inputs ");?>


                <?php $_smarty_tpl->assign('content', $_smarty_tpl->getValue('content'), false, 2);?>
    <?php
$_smarty_tpl->setVariable('form', $foreach57Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
