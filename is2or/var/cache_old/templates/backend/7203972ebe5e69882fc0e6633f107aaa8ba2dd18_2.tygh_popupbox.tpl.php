<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:common/popupbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460b17c43_40346997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7203972ebe5e69882fc0e6633f107aaa8ba2dd18' => 
    array (
      0 => 'common/popupbox.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ad9460b17c43_40346997 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','view','edit','edit','add'));
$_smarty_tpl->assign('method', (($tmp = $_smarty_tpl->getValue('method') ?? null)===null||$tmp==='' ? "POST" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('responsive_dialog_params', '', false, NULL);
if ((true && ($_smarty_tpl->hasVariable('title_start') && null !== ($_smarty_tpl->getValue('title_start') ?? null))) && (true && ($_smarty_tpl->hasVariable('title_end') && null !== ($_smarty_tpl->getValue('title_end') ?? null)))) {?>
    <?php $_smarty_tpl->assign('t_first', preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('title_start')), false, NULL);?>
    <?php $_smarty_tpl->assign('t_second', preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('title_end')), false, NULL);?>
    <?php $_smarty_tpl->assign('responsive_dialog_params', "data-ca-dialog-template=\"<span class='title__part-start mobile-hidden'>?: </span><span class='title__part-end'>?</span>\"", false, NULL);?>
    <?php $_smarty_tpl->assign('responsive_dialog_params', ((string)$_smarty_tpl->getValue('responsive_dialog_params'))." data-ca-dialog-text-first=\"".((string)($_smarty_tpl->getValue('t_first')))."\"", false, NULL);?>
    <?php $_smarty_tpl->assign('responsive_dialog_params', ((string)$_smarty_tpl->getValue('responsive_dialog_params'))." data-ca-dialog-text-second=\"".((string)($_smarty_tpl->getValue('t_second')))."\"", false, NULL);
}
$_smarty_tpl->assign('popup_params', " id=\"opener_".((string)$_smarty_tpl->getValue('id'))."\" data-ca-target-id=\"content_".((string)$_smarty_tpl->getValue('id'))."\"", false, NULL);
if (!$_smarty_tpl->getValue('content')) {
$_smarty_tpl->assign('popup_params', ((string)$_smarty_tpl->getValue('popup_params'))." ".((string)$_smarty_tpl->getValue('responsive_dialog_params'))." data-ca-dialog-title=\"".((string)($_smarty_tpl->getSmarty()->getModifierCallback('replace')((($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'"','')))."\"", false, NULL);
}
if (($_smarty_tpl->getValue('action') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('action'),$_smarty_tpl->getValue('method'))) || (!$_smarty_tpl->getValue('action') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_html_view_permissions')($_smarty_tpl->getValue('content'),$_smarty_tpl->getValue('method')))) {
if ($_smarty_tpl->getValue('act') == "edit") {?>
    <?php $_smarty_tpl->assign('_href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')((($tmp = $_smarty_tpl->getValue('href') ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), false, NULL);?>
    <?php $_smarty_tpl->assign('default_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('_href'))) {?>
        <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("view", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
        <?php $_smarty_tpl->assign('default_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("view", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php }?>
    <a <?php if ($_smarty_tpl->getValue('edit_onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('edit_onclick');?>
"<?php }?> class="hand <?php if (!$_smarty_tpl->getValue('no_icon_link')) {
if ($_smarty_tpl->getValue('update_controller') == "addons") {?>icon-cog<?php }
if ($_smarty_tpl->getValue('icon')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('icon')), ENT_QUOTES, 'UTF-8');
}
}?> <?php if (!$_smarty_tpl->getValue('is_promo')) {?>cm-dialog-opener<?php }
if ($_smarty_tpl->getValue('is_promo')) {?>cm-promo-popup<?php }?> <?php if ($_smarty_tpl->getValue('_href') && !$_smarty_tpl->getValue('is_promo')) {?> <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('opener_ajax_class') ?? null)===null||$tmp==='' ? 'cm-ajax' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('link_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('_href') && !$_smarty_tpl->getValue('is_promo')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_href')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo $_smarty_tpl->getValue('popup_params');?>
 title="<?php echo (($tmp = $_smarty_tpl->getValue('link_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
" <?php if ($_smarty_tpl->getValue('drop_left')) {?>data-placement="left"<?php }?>><?php if ($_smarty_tpl->getValue('icon')) {?><span class="btn__icon--with-text flex-inline top"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>
</span><?php }
echo (($tmp = $_smarty_tpl->getValue('link_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('default_link_text') ?? null : $tmp);?>
</a>
<?php } elseif ($_smarty_tpl->getValue('act') == "edit_outside") {?>
    <a <?php if ($_smarty_tpl->getValue('edit_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('edit_onclick')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="hand btn cm-tooltip cm-dialog-opener <?php if ($_smarty_tpl->getValue('_href')) {?> <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('opener_ajax_class') ?? null)===null||$tmp==='' ? 'cm-ajax' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('link_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_href')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo $_smarty_tpl->getValue('popup_params');?>
 title="<?php echo (($tmp = $_smarty_tpl->getValue('link_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
" <?php if ($_smarty_tpl->getValue('drop_left')) {?>data-placement="left"<?php }?>>
        <?php echo (($tmp = $_smarty_tpl->getValue('link_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('default_link_text') ?? null : $tmp);?>

    </a>
<?php } elseif ($_smarty_tpl->getValue('act') == "create") {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>$_smarty_tpl->getValue('edit_onclick'),'but_text'=>$_smarty_tpl->getValue('but_text'),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->getValue('id')),'but_meta'=>"btn cm-dialog-opener ".((string)$_smarty_tpl->getValue('but_meta')),'but_icon'=>$_smarty_tpl->getValue('icon')), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('act') == "notes") {?>
    <a <?php echo $_smarty_tpl->getValue('popup_params');?>
 class="cm-dialog-opener <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
"><span class="flex-inline top btn__icon"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>(($tmp = $_smarty_tpl->getValue('icon') ?? null)===null||$tmp==='' ? 'icon-question-sign' ?? null : $tmp)), $_smarty_tpl);?>
</span></a>
<?php } elseif ($_smarty_tpl->getValue('act') == "general") {?>
        <div class="btn-group <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
">
            <a class="btn cm-dialog-opener <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');?>
 cm-tooltip" <?php echo $_smarty_tpl->getValue('popup_params');?>
 <?php if ($_smarty_tpl->getValue('edit_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('edit_onclick')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('icon')) {?><span class="flex-inline top btn__icon <?php if ($_smarty_tpl->getValue('link_text')) {?>btn__icon--with-text<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>
</span><?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_text')), ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
<?php } elseif ($_smarty_tpl->getValue('act') == "button") {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getValue('link_text'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_role'=>$_smarty_tpl->getValue('but_role'),'but_id'=>"opener_".((string)$_smarty_tpl->getValue('id')),'but_onclick'=>((string)$_smarty_tpl->getValue('edit_onclick')),'but_target_id'=>"content_".((string)$_smarty_tpl->getValue('id')),'but_meta'=>"btn cm-dialog-opener ".((string)$_smarty_tpl->getValue('but_meta'))), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('act') == "link") {?>
    <a class="cm-dialog-opener <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getValue('popup_params');?>
 <?php if ($_smarty_tpl->getValue('edit_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('edit_onclick')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo (($tmp = $_smarty_tpl->getValue('link_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("add", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</a>
<?php } elseif ($_smarty_tpl->getValue('act') == "default") {?>
    <a<?php if ($_smarty_tpl->getValue('onclick')) {?> onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('onclick')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_text')), ENT_QUOTES, 'UTF-8');?>
</a>
<?php }?>

<?php if ($_smarty_tpl->getValue('content')) {?>
<div class="hidden <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>ufa<?php }?>" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getValue('content');?>

<!--content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php } else {
}
}
}
