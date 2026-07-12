<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:common/tools.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460812ed7_11710698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ea4eb29b7e0b71e8d0d0c7280ef7fe7429b6cb8' => 
    array (
      0 => 'common/tools.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9460812ed7_11710698 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
if ($_smarty_tpl->getValue('skip_check_permissions') || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_html_view_permissions')($_smarty_tpl->getValue('tools_list'))) {
$_smarty_tpl->assign('icon_first_tools', (($tmp = $_smarty_tpl->getValue('icon_first_tools') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('icon_first', (($tmp = $_smarty_tpl->getValue('icon_first') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
<div class="btn-group <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tool_meta')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->getValue('hide_tools') && $_smarty_tpl->getValue('tools_list')) {?>
    <a class="<?php if ($_smarty_tpl->getValue('override_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('override_meta')), ENT_QUOTES, 'UTF-8');
} else { ?>btn<?php }?> btn dropdown-toggle" data-toggle="dropdown">
        <?php if ($_smarty_tpl->getValue('icon') && $_smarty_tpl->getValue('icon_first_tools')) {?>
            <span class="btn__icon <?php if ($_smarty_tpl->getValue('link_text')) {?>btn__icon--with-text<?php }?>">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('link_text')) {?>
            <?php echo $_smarty_tpl->getValue('link_text');?>

        <?php }?>
        <?php if ($_smarty_tpl->getValue('icon') && !$_smarty_tpl->getValue('icon_first_tools')) {?>
            <span class="btn__icon btn__icon--last <?php if ($_smarty_tpl->getValue('link_text')) {?>btn__icon--with-text<?php }?>">
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('caret')) {?><span class="caret"></span><?php }?>
    </a>
    <ul id="tools_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-menu cm-smart-position">
        <?php echo $_smarty_tpl->getValue('tools_list');?>

    </ul>
    <?php }?>
    <?php if (!$_smarty_tpl->getValue('hide_actions')) {?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('tool_href'))) {?>
            <a class="<?php if ($_smarty_tpl->getValue('tool_override_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('tool_override_meta')), ENT_QUOTES, 'UTF-8');
} else { ?>btn<?php }?> cm-tooltip" <?php if ($_smarty_tpl->getValue('tool_id')) {?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tool_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('tool_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('tool_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('tool_onclick')) {?> onclick="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tool_onclick')), ENT_QUOTES, 'UTF-8');?>
; return false;"<?php }?> <?php if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('meta_data')) {
echo $_smarty_tpl->getValue('meta_data');
}?>>
                <?php if ($_smarty_tpl->getValue('icon_first')) {?>
                    <span class="btn__icon <?php if ($_smarty_tpl->getValue('link_text')) {?>btn__icon--with-text<?php }?>">
                        <?php if ($_smarty_tpl->getValue('icon')) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-plus"), $_smarty_tpl);?>

                        <?php }?>
                    </span>
                <?php }?>
                <?php echo $_smarty_tpl->getValue('link_text');?>

                <?php if (!$_smarty_tpl->getValue('icon_first')) {?>
                    <span class="btn__icon btn__icon--last <?php if ($_smarty_tpl->getValue('link_text')) {?>btn__icon--with-text<?php }?>">
                        <?php if ($_smarty_tpl->getValue('icon')) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-plus"), $_smarty_tpl);?>

                        <?php }?>
                    </span>
                <?php }?>
            </a>
        <?php }?>
    <?php }?>
</div>
<?php }
}
}
