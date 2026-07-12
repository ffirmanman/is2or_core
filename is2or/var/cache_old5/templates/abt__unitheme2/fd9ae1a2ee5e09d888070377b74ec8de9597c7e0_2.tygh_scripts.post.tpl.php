<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:01
  from 'tygh:addons/ab__stickers/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f714407a9_75182870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9ae1a2ee5e09d888070377b74ec8de9597c7e0' => 
    array (
      0 => 'addons/ab__stickers/hooks/index/scripts.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f714407a9_75182870 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>(function (_, $) {const extend_obj = {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['controller']), ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['mode']), ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_sticker_is_cache_allowed')()), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_storage_data')("cache_id")), ENT_QUOTES, 'UTF-8');?>
',},settings: {abt__ut2: {less: <?php echo json_encode($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_unitheme_less_settings')(true));?>
}}}};if (_?.ab__stickers?.functions) {extend_obj.ab__stickers.functions = _.ab__stickers.functions;}$.extend(_, extend_obj);})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/func.js"), $_smarty_tpl);
$_smarty_tpl->assign('theme_name', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_theme_path')('[theme]'), false, NULL);
if ($_smarty_tpl->getValue('theme_name') === 'abt__unitheme2') {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/abt__ut2.js"), $_smarty_tpl);
} elseif ($_smarty_tpl->getValue('theme_name') === 'abt__youpitheme') {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/abt__yt.js"), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/responsive.js"), $_smarty_tpl);
}
if ($_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('ObjectStatuses::ACTIVE')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/ab__dotd.js"), $_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>(function (_, $) {const extend_obj = {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['controller']), ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['mode']), ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_sticker_is_cache_allowed')()), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_storage_data')("cache_id")), ENT_QUOTES, 'UTF-8');?>
',},settings: {abt__ut2: {less: <?php echo json_encode($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_unitheme_less_settings')(true));?>
}}}};if (_?.ab__stickers?.functions) {extend_obj.ab__stickers.functions = _.ab__stickers.functions;}$.extend(_, extend_obj);})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/func.js"), $_smarty_tpl);
$_smarty_tpl->assign('theme_name', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_theme_path')('[theme]'), false, NULL);
if ($_smarty_tpl->getValue('theme_name') === 'abt__unitheme2') {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/abt__ut2.js"), $_smarty_tpl);
} elseif ($_smarty_tpl->getValue('theme_name') === 'abt__youpitheme') {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/abt__yt.js"), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/responsive.js"), $_smarty_tpl);
}
if ($_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('ObjectStatuses::ACTIVE')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__stickers/ab__dotd.js"), $_smarty_tpl);
}
}
}
}
