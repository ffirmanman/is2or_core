<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/attachments/blocks/product_tabs/attachments.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaaaebf95_91837995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '857eaa3cdca990a3b14d64bfa0517710c2339534' => 
    array (
      0 => 'addons/attachments/blocks/product_tabs/attachments.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaaaebf95_91837995 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/attachments/blocks/product_tabs';
\Tygh\Languages\Helper::preloadLangVars(array('download','download'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('attachments_data')) {?>
    <div class="attachments" id="content_attachments">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('attachments_data'), 'file');
$foreach54DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach54DoElse = false;
?>
        <p class="attachment__item">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['description']), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['filename']), ENT_QUOTES, 'UTF-8');?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatfilesize')($_smarty_tpl->getValue('file')['filesize']);?>
) [<a class="attachment__a cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("attachments.getfile?attachment_id=".((string)$_smarty_tpl->getValue('file')['attachment_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("download", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>]
        </p>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/attachments/blocks/product_tabs/attachments.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/attachments/blocks/product_tabs/attachments.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('attachments_data')) {?>
    <div class="attachments" id="content_attachments">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('attachments_data'), 'file');
$foreach55DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach55DoElse = false;
?>
        <p class="attachment__item">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['description']), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['filename']), ENT_QUOTES, 'UTF-8');?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatfilesize')($_smarty_tpl->getValue('file')['filesize']);?>
) [<a class="attachment__a cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("attachments.getfile?attachment_id=".((string)$_smarty_tpl->getValue('file')['attachment_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("download", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>]
        </p>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
