<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:views/tabs/components/product_popup_tabs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a007755a4_20543034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86365ba08329a603f79f24bdc874ab2a2d61a8b4' => 
    array (
      0 => 'views/tabs/components/product_popup_tabs.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a007755a4_20543034 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/tabs/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "popupsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tabs'), 'tab', false, 'tab_id');
$foreach126DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab_id')->value => $_smarty_tpl->getVariable('tab')->value) {
$foreach126DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('tab')['show_in_popup'] == "Y" && $_smarty_tpl->getValue('tab')['status'] == "A") {?>
            <?php $_smarty_tpl->assign('product_tab_id', "product_tab_".((string)$_smarty_tpl->getValue('tab')['tab_id']), false, NULL);?>
            <?php $_smarty_tpl->assign('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->getValue('tab_id')), false, NULL);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'), null, null);?>
                <?php if ($_smarty_tpl->getValue('tab')['tab_type'] == 'B') {?>
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('tab')['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->getValue('tab')['tab_type'] == 'T') {?>
                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tab')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->getValue('product_tab_id'),'force_ajax'=>true), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture')))) {?>
                <div class="ut2-pb__popup-tabs-item"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-popup ut2-pb__popup-tabs-icon"), $_smarty_tpl);?>
<a id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener" data-ca-target-id="content_block_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');?>
</a></div>
                <div id="content_block_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true">
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));?>

                </div>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "popupsbox_content", null, null);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'popupsbox'))) {?>
        <div class="ut2-pb__popup-tabs">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'popupsbox');?>

        </div>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/tabs/components/product_popup_tabs.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/tabs/components/product_popup_tabs.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "popupsbox", null, null);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tabs'), 'tab', false, 'tab_id');
$foreach127DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab_id')->value => $_smarty_tpl->getVariable('tab')->value) {
$foreach127DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('tab')['show_in_popup'] == "Y" && $_smarty_tpl->getValue('tab')['status'] == "A") {?>
            <?php $_smarty_tpl->assign('product_tab_id', "product_tab_".((string)$_smarty_tpl->getValue('tab')['tab_id']), false, NULL);?>
            <?php $_smarty_tpl->assign('tab_content_capture', "tab_content_capture_".((string)$_smarty_tpl->getValue('tab_id')), false, NULL);?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'), null, null);?>
                <?php if ($_smarty_tpl->getValue('tab')['tab_type'] == 'B') {?>
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('tab')['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->getValue('tab')['tab_type'] == 'T') {?>
                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tab')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab_id'=>$_smarty_tpl->getValue('product_tab_id'),'force_ajax'=>true), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture')))) {?>
                <div class="ut2-pb__popup-tabs-item"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-popup ut2-pb__popup-tabs-icon"), $_smarty_tpl);?>
<a id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['html_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener" data-ca-target-id="content_block_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');?>
</a></div>
                <div id="content_block_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab_id')), ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['name']), ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true">
                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));?>

                </div>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "popupsbox_content", null, null);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'popupsbox'))) {?>
        <div class="ut2-pb__popup-tabs">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'popupsbox');?>

        </div>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
