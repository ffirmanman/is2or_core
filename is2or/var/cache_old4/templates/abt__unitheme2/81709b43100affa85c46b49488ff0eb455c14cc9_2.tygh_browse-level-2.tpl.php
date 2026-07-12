<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:38:19
  from 'tygh:addons/hw_infocenter/views/hw_infocenter/components/browse-level-2.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb525bc1c112_61241181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81709b43100affa85c46b49488ff0eb455c14cc9' => 
    array (
      0 => 'addons/hw_infocenter/views/hw_infocenter/components/browse-level-2.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/hw_infocenter/views/hw_infocenter/components/header.tpl' => 2,
    'tygh:addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl' => 2,
  ),
))) {
function content_69fb525bc1c112_61241181 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hw_infocenter/views/hw_infocenter/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/hw_infocenter/views/hw_infocenter/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="row-fluid">
    <div class="span5 hw-infocenter__sidebar hidden-phone hidden-phone">
        <nav>
            <ul>
                <li class="first"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('page')['parent_id']))), ENT_QUOTES, 'UTF-8');?>
">
                    <span class="icon"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 14.7753V16.8288C28 22.0948 28 24.728 26.4183 26.3639C24.8368 28 22.2911 28 17.2 28H11.8C6.70883 28 4.16325 28 2.58162 26.3639C1 24.728 1 22.0948 1 16.8288V14.7753C1 11.6859 1 10.1412 1.70092 8.8607C2.40184 7.58018 3.68238 6.78544 6.24344 5.19598L8.94344 3.52027C11.6507 1.84009 13.0043 1 14.5 1C15.9957 1 17.3493 1.84009 20.0566 3.52027L22.7566 5.19596C25.3177 6.78544 26.5982 7.58018 27.2991 8.8607" stroke-width="2" stroke-linecap="round"/><path d="M18.5501 22.6H10.4501" stroke-width="2" stroke-linecap="round"/></svg></span>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('infocenter.home', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </a></li>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('main_pages'), '_page');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach0DoElse = false;
?>
                <li <?php if ($_smarty_tpl->getValue('_page')['page_id'] == $_REQUEST['page_id']) {?>class="active"<?php }?>><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('_page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
">
                    <span class="icon arrow"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7.5H16M16 7.5L9.57143 1M16 7.5L9.57143 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('_page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
</span>
                </a></li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </nav>
    </div>
    
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> 
        
    <div class="span11">
        <div class="row-fluid hw-infocenter__choose">
        <?php $_smarty_tpl->assign('i', 0, false, NULL);?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), '_page', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('_page')->value) {
$foreach1DoElse = false;
?>
            <div class="span8 item">    
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('_page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
">
                    <span>
                        <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['main_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
" width="250" height="250" />
                                            </span>
                    <bdi <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('_page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
</bdi>
                </a>
            </div>
            <?php $_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);?>
            <?php if ($_smarty_tpl->getValue('i') == 2) {?>
                <?php $_smarty_tpl->assign('i', 0, false, NULL);?>
                </div>
                <div class="row-fluid hw-infocenter__choose">
            <?php }?>            
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>    
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hw_infocenter/views/hw_infocenter/components/browse-level-2.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hw_infocenter/views/hw_infocenter/components/browse-level-2.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/hw_infocenter/views/hw_infocenter/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="row-fluid">
    <div class="span5 hw-infocenter__sidebar hidden-phone hidden-phone">
        <nav>
            <ul>
                <li class="first"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('page')['parent_id']))), ENT_QUOTES, 'UTF-8');?>
">
                    <span class="icon"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 14.7753V16.8288C28 22.0948 28 24.728 26.4183 26.3639C24.8368 28 22.2911 28 17.2 28H11.8C6.70883 28 4.16325 28 2.58162 26.3639C1 24.728 1 22.0948 1 16.8288V14.7753C1 11.6859 1 10.1412 1.70092 8.8607C2.40184 7.58018 3.68238 6.78544 6.24344 5.19598L8.94344 3.52027C11.6507 1.84009 13.0043 1 14.5 1C15.9957 1 17.3493 1.84009 20.0566 3.52027L22.7566 5.19596C25.3177 6.78544 26.5982 7.58018 27.2991 8.8607" stroke-width="2" stroke-linecap="round"/><path d="M18.5501 22.6H10.4501" stroke-width="2" stroke-linecap="round"/></svg></span>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('infocenter.home', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </a></li>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('main_pages'), '_page');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach2DoElse = false;
?>
                <li <?php if ($_smarty_tpl->getValue('_page')['page_id'] == $_REQUEST['page_id']) {?>class="active"<?php }?>><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('_page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
">
                    <span class="icon arrow"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7.5H16M16 7.5L9.57143 1M16 7.5L9.57143 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    <span <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('_page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
</span>
                </a></li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </nav>
    </div>
    
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> 
        
    <div class="span11">
        <div class="row-fluid hw-infocenter__choose">
        <?php $_smarty_tpl->assign('i', 0, false, NULL);?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), '_page', false, 'key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('_page')->value) {
$foreach3DoElse = false;
?>
            <div class="span8 item">    
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("pages.view?page_id=".((string)$_smarty_tpl->getValue('_page')['page_id']))), ENT_QUOTES, 'UTF-8');?>
">
                    <span>
                        <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['main_pair']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
" width="250" height="250" />
                                            </span>
                    <bdi <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"page:page:".((string)$_smarty_tpl->getValue('_page')['page_id'])), $_smarty_tpl);?>
><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_page')['page']), ENT_QUOTES, 'UTF-8');?>
</bdi>
                </a>
            </div>
            <?php $_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);?>
            <?php if ($_smarty_tpl->getValue('i') == 2) {?>
                <?php $_smarty_tpl->assign('i', 0, false, NULL);?>
                </div>
                <div class="row-fluid hw-infocenter__choose">
            <?php }?>            
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>    
</div><?php }
}
}
