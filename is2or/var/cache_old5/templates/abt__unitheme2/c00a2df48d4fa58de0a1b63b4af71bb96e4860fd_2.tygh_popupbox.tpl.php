<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:55
  from 'tygh:common/popupbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6b98c917_02626490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c00a2df48d4fa58de0a1b63b4af71bb96e4860fd' => 
    array (
      0 => 'common/popupbox.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6b98c917_02626490 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('capture_link')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "link", null, null);
}?>


<?php if ($_smarty_tpl->getValue('text')) {?>
    <?php $_smarty_tpl->assign('dialog_title', $_smarty_tpl->getValue('text'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('title')) {?>
    <?php $_smarty_tpl->assign('dialog_title', $_smarty_tpl->getValue('title'), false, NULL);
}?>


<?php if ($_smarty_tpl->getValue('show_brackets')) {?>(<?php }?>
    <a id="opener_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_meta')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> href="#"<?php }?>
        data-ca-target-id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('edit_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('edit_onclick')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('dialog_title')) {?>data-ca-dialog-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dialog_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('dialog_additional_attrs'));?>

        rel="nofollow"
    >
        <?php if ($_smarty_tpl->getValue('link_icon') && $_smarty_tpl->getValue('link_icon_first')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('link_icon')), $_smarty_tpl);
}?>
        <span <?php if ($_smarty_tpl->getValue('link_text_meta')) {?>class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_text_meta')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getValue('link_text');?>
</span>
        <?php if ($_smarty_tpl->getValue('link_icon') && !$_smarty_tpl->getValue('link_icon_first')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('link_icon')), $_smarty_tpl);
}?>
    </a>
<?php if ($_smarty_tpl->getValue('show_brackets')) {?>)<?php }?>

<?php if ($_smarty_tpl->getValue('capture_link')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

<?php if (($_smarty_tpl->getValue('content') || $_smarty_tpl->getValue('href') || $_smarty_tpl->getValue('edit_picker')) && $_smarty_tpl->getValue('content') !== false) {?>
<div class="hidden<?php if ($_smarty_tpl->getValue('wysiwyg')) {?> ty-wysiwyg-content<?php }?>" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getValue('content');?>

</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/popupbox.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/popupbox.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('capture_link')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "link", null, null);
}?>


<?php if ($_smarty_tpl->getValue('text')) {?>
    <?php $_smarty_tpl->assign('dialog_title', $_smarty_tpl->getValue('text'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('title')) {?>
    <?php $_smarty_tpl->assign('dialog_title', $_smarty_tpl->getValue('title'), false, NULL);
}?>


<?php if ($_smarty_tpl->getValue('show_brackets')) {?>(<?php }?>
    <a id="opener_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_meta')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> href="#"<?php }?>
        data-ca-target-id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->getValue('edit_onclick')) {?>onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('edit_onclick')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('dialog_title')) {?>data-ca-dialog-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dialog_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('dialog_additional_attrs'));?>

        rel="nofollow"
    >
        <?php if ($_smarty_tpl->getValue('link_icon') && $_smarty_tpl->getValue('link_icon_first')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('link_icon')), $_smarty_tpl);
}?>
        <span <?php if ($_smarty_tpl->getValue('link_text_meta')) {?>class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_text_meta')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getValue('link_text');?>
</span>
        <?php if ($_smarty_tpl->getValue('link_icon') && !$_smarty_tpl->getValue('link_icon_first')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('link_icon')), $_smarty_tpl);
}?>
    </a>
<?php if ($_smarty_tpl->getValue('show_brackets')) {?>)<?php }?>

<?php if ($_smarty_tpl->getValue('capture_link')) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

<?php if (($_smarty_tpl->getValue('content') || $_smarty_tpl->getValue('href') || $_smarty_tpl->getValue('edit_picker')) && $_smarty_tpl->getValue('content') !== false) {?>
<div class="hidden<?php if ($_smarty_tpl->getValue('wysiwyg')) {?> ty-wysiwyg-content<?php }?>" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getValue('content');?>

</div>
<?php }
}
}
}
