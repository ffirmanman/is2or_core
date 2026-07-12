<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:common/last_viewed_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed26c5b74_23564134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d4d18584694ffa60413128fd4a62875f333eba' => 
    array (
      0 => 'common/last_viewed_items.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed26c5b74_23564134 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_smarty_tpl->assign('show_last_viewed_items', (($tmp = $_smarty_tpl->getValue('show_last_viewed_items') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>
<div class="btn-group last-viewed-items" id="last_edited_items">
    <a class="btn last-viewed-items__back-link cm-back-link"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-arrow-left"), $_smarty_tpl);?>
</a>
    <?php if ($_smarty_tpl->getValue('show_last_viewed_items')) {?>
        <a class="btn btn-link last-viewed-items__dropdown dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('breadcrumbs')) >= 1) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('breadcrumbs'), 'bc', false, 'key', 'bcn', array (
));
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('bc')->value) {
$foreach17DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('bc')['link']) {?>
                    <li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('bc')['link'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bc')['title']), ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php } else { ?>
                    <li><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bc')['title']), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <li class="divider"></li>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('last_edited_items')) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('last_edited_items'), 'lnk');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lnk')->value) {
$foreach18DoElse = false;
?>
                <li><a <?php if ($_smarty_tpl->getValue('lnk')['icon']) {?>class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('lnk')['icon']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('lnk')['url'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('lnk')['name'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('lnk')['name']),40);?>
</a></li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <li><a><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
        <?php }?>
        </ul>
    <?php }?>
<!--last_edited_items--></div>
<?php }
}
