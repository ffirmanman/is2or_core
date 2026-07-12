<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:46
  from 'tygh:common/abt__ut2_pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a06ee6120_85283206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c717ad3373bd0a2f2e69cc0113d31b03990733ab' => 
    array (
      0 => 'common/abt__ut2_pagination.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a06ee6120_85283206 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('p', $_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_pagination')($_smarty_tpl->getValue('search')), false, NULL);
$_smarty_tpl->assign('id', ((string)$_smarty_tpl->getValue('type'))."_pagination_contents", false, NULL);?>

<?php if ($_smarty_tpl->getValue('position') == 'top') {?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->getValue('position') == 'bottom') {?>
    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->getValue('p')['next_page'] > $_smarty_tpl->getValue('p')['current_page']) {?>
        <?php $_smarty_tpl->assign('load_more_mode', $_smarty_tpl->getValue('settings')['abt__ut2']['load_more']['mode'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST") && $_smarty_tpl->getValue('load_more_mode') === 'semi_auto') {?>
            <?php $_smarty_tpl->assign('load_more_mode', 'auto', false, NULL);?>
        <?php }?>

        <div class="ut2-load-more-container ut2-load-more-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('load_more_mode')), ENT_QUOTES, 'UTF-8');?>
" id="load_more_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->assign('show_more', $_smarty_tpl->getValue('p')['items_per_page'], false, NULL);?>
            <?php $_smarty_tpl->assign('left_products', $_smarty_tpl->getValue('p')['total_items']-($_smarty_tpl->getValue('p')['items_per_page']*$_smarty_tpl->getValue('p')['current_page']), false, NULL);?>
            <?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],'page'), false, NULL);?>
            <?php $_smarty_tpl->assign('lang_variable', "abt__ut2.load_more.show_more.clear.".((string)$_smarty_tpl->getValue('object')), false, NULL);?>

            <?php if ($_smarty_tpl->getValue('left_products') < $_smarty_tpl->getValue('p')['items_per_page']) {?>
                <?php $_smarty_tpl->assign('show_more', $_smarty_tpl->getValue('left_products'), false, NULL);?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['load_more']['show_products_num'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
                <?php $_smarty_tpl->assign('lang_variable', "abt__ut2.load_more.show_more.num.".((string)$_smarty_tpl->getValue('object')), false, NULL);?>
            <?php }?>

            <span class="ut2-load-more" data-ut2-load-more-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('p')['next_page']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ut2-load-more-result-ids="<?php echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('type'))."_pagination_contents"), ENT_QUOTES, 'UTF-8');?>
,load_more_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
_pagination_contents,ut2_pagination_block,ut2_pagination_block_bottom">
                <span class="loader-wrapper">
                    <i class="loader"></i>
                </span>
                <span class="loader-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('lang_variable'), array($_smarty_tpl->getValue('show_more')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </span>
        <!--load_more_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/abt__ut2_pagination.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/abt__ut2_pagination.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('p', $_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_pagination')($_smarty_tpl->getValue('search')), false, NULL);
$_smarty_tpl->assign('id', ((string)$_smarty_tpl->getValue('type'))."_pagination_contents", false, NULL);?>

<?php if ($_smarty_tpl->getValue('position') == 'top') {?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->getValue('position') == 'bottom') {?>
    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->getValue('p')['next_page'] > $_smarty_tpl->getValue('p')['current_page']) {?>
        <?php $_smarty_tpl->assign('load_more_mode', $_smarty_tpl->getValue('settings')['abt__ut2']['load_more']['mode'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("AJAX_REQUEST") && $_smarty_tpl->getValue('load_more_mode') === 'semi_auto') {?>
            <?php $_smarty_tpl->assign('load_more_mode', 'auto', false, NULL);?>
        <?php }?>

        <div class="ut2-load-more-container ut2-load-more-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('load_more_mode')), ENT_QUOTES, 'UTF-8');?>
" id="load_more_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->assign('show_more', $_smarty_tpl->getValue('p')['items_per_page'], false, NULL);?>
            <?php $_smarty_tpl->assign('left_products', $_smarty_tpl->getValue('p')['total_items']-($_smarty_tpl->getValue('p')['items_per_page']*$_smarty_tpl->getValue('p')['current_page']), false, NULL);?>
            <?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],'page'), false, NULL);?>
            <?php $_smarty_tpl->assign('lang_variable', "abt__ut2.load_more.show_more.clear.".((string)$_smarty_tpl->getValue('object')), false, NULL);?>

            <?php if ($_smarty_tpl->getValue('left_products') < $_smarty_tpl->getValue('p')['items_per_page']) {?>
                <?php $_smarty_tpl->assign('show_more', $_smarty_tpl->getValue('left_products'), false, NULL);?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['load_more']['show_products_num'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
                <?php $_smarty_tpl->assign('lang_variable', "abt__ut2.load_more.show_more.num.".((string)$_smarty_tpl->getValue('object')), false, NULL);?>
            <?php }?>

            <span class="ut2-load-more" data-ut2-load-more-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('p')['next_page']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ut2-load-more-result-ids="<?php echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('type'))."_pagination_contents"), ENT_QUOTES, 'UTF-8');?>
,load_more_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('type')), ENT_QUOTES, 'UTF-8');?>
_pagination_contents,ut2_pagination_block,ut2_pagination_block_bottom">
                <span class="loader-wrapper">
                    <i class="loader"></i>
                </span>
                <span class="loader-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('lang_variable'), array($_smarty_tpl->getValue('show_more')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </span>
        <!--load_more_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
}
}
}
}
