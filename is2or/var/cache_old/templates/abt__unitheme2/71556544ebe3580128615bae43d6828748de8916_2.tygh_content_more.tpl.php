<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:common/content_more.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f5b12f9_03494890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71556544ebe3580128615bae43d6828748de8916' => 
    array (
      0 => 'common/content_more.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada21f5b12f9_03494890 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('show_more','show_more'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('text_limit', (($tmp = $_smarty_tpl->getValue('text_limit') ?? null)===null||$tmp==='' ? 600 ?? null : $tmp), false, NULL);
if (!$_smarty_tpl->getValue('display')) {?>
    <?php $_smarty_tpl->assign('display', (mb_strlen((string) $_smarty_tpl->getValue('text'), 'UTF-8') > $_smarty_tpl->getValue('text_limit')), false, NULL);
}
$_smarty_tpl->assign('text', (($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? "–" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('more_text', (($tmp = $_smarty_tpl->getValue('more_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_more", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

<div class="ty-content-more" data-ca-elem="contentMore">
    <div class="ty-content-more__text <?php echo $_smarty_tpl->getValue('meta');?>
" data-ca-elem="contentMoreText">
        <?php echo $_smarty_tpl->getValue('prefix');?>

        <?php echo $_smarty_tpl->getValue('text');?>

    </div>
    <div class="ty-content-more__btn-wrapper <?php if (!$_smarty_tpl->getValue('display')) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="ty-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->getValue('more_text');?>

        </button>
    </div>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/content_more.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/content_more.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('text_limit', (($tmp = $_smarty_tpl->getValue('text_limit') ?? null)===null||$tmp==='' ? 600 ?? null : $tmp), false, NULL);
if (!$_smarty_tpl->getValue('display')) {?>
    <?php $_smarty_tpl->assign('display', (mb_strlen((string) $_smarty_tpl->getValue('text'), 'UTF-8') > $_smarty_tpl->getValue('text_limit')), false, NULL);
}
$_smarty_tpl->assign('text', (($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? "–" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('more_text', (($tmp = $_smarty_tpl->getValue('more_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_more", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

<div class="ty-content-more" data-ca-elem="contentMore">
    <div class="ty-content-more__text <?php echo $_smarty_tpl->getValue('meta');?>
" data-ca-elem="contentMoreText">
        <?php echo $_smarty_tpl->getValue('prefix');?>

        <?php echo $_smarty_tpl->getValue('text');?>

    </div>
    <div class="ty-content-more__btn-wrapper <?php if (!$_smarty_tpl->getValue('display')) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="ty-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->getValue('more_text');?>

        </button>
    </div>
</div>
<?php }
}
}
