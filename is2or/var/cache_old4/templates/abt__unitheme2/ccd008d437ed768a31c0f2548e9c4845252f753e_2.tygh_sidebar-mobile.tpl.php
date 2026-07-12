<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:38:19
  from 'tygh:addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb525bc71ca0_30415650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd008d437ed768a31c0f2548e9c4845252f753e' => 
    array (
      0 => 'addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb525bc71ca0_30415650 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hw_infocenter/views/hw_infocenter/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="span5 hidden-desktop hidden-tablet">
    <div class="hw-infocenter__sidebar_mobile">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('id_path')[0]))), ENT_QUOTES, 'UTF-8');?>
"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 14.7753V16.8288C28 22.0948 28 24.728 26.4183 26.3639C24.8368 28 22.2911 28 17.2 28H11.8C6.70883 28 4.16325 28 2.58162 26.3639C1 24.728 1 22.0948 1 16.8288V14.7753C1 11.6859 1 10.1412 1.70092 8.8607C2.40184 7.58018 3.68238 6.78544 6.24344 5.19598L8.94344 3.52027C11.6507 1.84009 13.0043 1 14.5 1C15.9957 1 17.3493 1.84009 20.0566 3.52027L22.7566 5.19596C25.3177 6.78544 26.5982 7.58018 27.2991 8.8607" stroke="#09304C" stroke-width="2" stroke-linecap="round"/><path d="M18.5501 22.6H10.4501" stroke="#09304C" stroke-width="2" stroke-linecap="round"/></svg></a>
        <div>
            <select onchange="window.location.href = this.value;">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('main_pages'), '_page');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach6DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('_page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('_page')['page_id'] == $_REQUEST['page_id']) {?> selected<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>                
            </select>
        </div>
    </div>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="span5 hidden-desktop hidden-tablet">
    <div class="hw-infocenter__sidebar_mobile">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('id_path')[0]))), ENT_QUOTES, 'UTF-8');?>
"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 14.7753V16.8288C28 22.0948 28 24.728 26.4183 26.3639C24.8368 28 22.2911 28 17.2 28H11.8C6.70883 28 4.16325 28 2.58162 26.3639C1 24.728 1 22.0948 1 16.8288V14.7753C1 11.6859 1 10.1412 1.70092 8.8607C2.40184 7.58018 3.68238 6.78544 6.24344 5.19598L8.94344 3.52027C11.6507 1.84009 13.0043 1 14.5 1C15.9957 1 17.3493 1.84009 20.0566 3.52027L22.7566 5.19596C25.3177 6.78544 26.5982 7.58018 27.2991 8.8607" stroke="#09304C" stroke-width="2" stroke-linecap="round"/><path d="M18.5501 22.6H10.4501" stroke="#09304C" stroke-width="2" stroke-linecap="round"/></svg></a>
        <div>
            <select onchange="window.location.href = this.value;">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('main_pages'), '_page');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach7DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('_page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('_page')['page_id'] == $_REQUEST['page_id']) {?> selected<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>                
            </select>
        </div>
    </div>
</div><?php }
}
}
