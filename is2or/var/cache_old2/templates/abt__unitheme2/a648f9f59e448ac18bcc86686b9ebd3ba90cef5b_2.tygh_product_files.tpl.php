<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:views/products/components/product_files.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaaab9dc8_88625917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a648f9f59e448ac18bcc86686b9ebd3ba90cef5b' => 
    array (
      0 => 'views/products/components/product_files.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaaab9dc8_88625917 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/products/components';
\Tygh\Languages\Helper::preloadLangVars(array('filename','filesize','licence_agreement','readme','filename','filesize','licence_agreement','readme'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('files')) {?>
<table class="ty-table">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("filename", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("filesize", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
        </tr>
    </thead>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file');
$foreach66DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach66DoElse = false;
?>
<tr>
    <td style="width: 80%">
        <a class="cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.get_file?file_id=".((string)$_smarty_tpl->getValue('file')['file_id'])."&preview=Y")), ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_name']), ENT_QUOTES, 'UTF-8');?>
</strong></a>
        <?php if ($_smarty_tpl->getValue('file')['readme'] || $_smarty_tpl->getValue('file')['license']) {?>
        <ul>
        <?php if ($_smarty_tpl->getValue('file')['license']) {?>
            <li><a onclick="Tygh.$('#license_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licence_agreement", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
            <div class="hidden" id="license_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('file')['license'];?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('file')['readme']) {?>
            <li><a onclick="Tygh.$('#readme_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("readme", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
            <div class="hidden" id="readme_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('file')['readme'];?>
</div>
        <?php }?>
        </ul>
        <?php }?>
    </td>
    <td class="ty-valign-top">
         <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatfilesize')($_smarty_tpl->getValue('file')['file_size']);?>
</strong>
    </td>
</tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_files.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/product_files.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('files')) {?>
<table class="ty-table">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("filename", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("filesize", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
        </tr>
    </thead>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file');
$foreach67DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach67DoElse = false;
?>
<tr>
    <td style="width: 80%">
        <a class="cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("orders.get_file?file_id=".((string)$_smarty_tpl->getValue('file')['file_id'])."&preview=Y")), ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_name']), ENT_QUOTES, 'UTF-8');?>
</strong></a>
        <?php if ($_smarty_tpl->getValue('file')['readme'] || $_smarty_tpl->getValue('file')['license']) {?>
        <ul>
        <?php if ($_smarty_tpl->getValue('file')['license']) {?>
            <li><a onclick="Tygh.$('#license_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licence_agreement", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
            <div class="hidden" id="license_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('file')['license'];?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('file')['readme']) {?>
            <li><a onclick="Tygh.$('#readme_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("readme", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
            <div class="hidden" id="readme_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['file_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('file')['readme'];?>
</div>
        <?php }?>
        </ul>
        <?php }?>
    </td>
    <td class="ty-valign-top">
         <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatfilesize')($_smarty_tpl->getValue('file')['file_size']);?>
</strong>
    </td>
</tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
}
}
