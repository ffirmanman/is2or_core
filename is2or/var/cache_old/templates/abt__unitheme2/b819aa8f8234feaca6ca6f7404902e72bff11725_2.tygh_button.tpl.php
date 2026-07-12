<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:31
  from 'tygh:buttons/button.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94736d5e90_98512870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b819aa8f8234feaca6ca6f7404902e72bff11725' => 
    array (
      0 => 'buttons/button.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94736d5e90_98512870 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('but_role') == "action") {?>
    <?php $_smarty_tpl->assign('suffix', "-action", false, NULL);?>
    <?php $_smarty_tpl->assign('file_prefix', "action_", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "act") {?>
    <?php $_smarty_tpl->assign('suffix', "-act", false, NULL);?>
    <?php $_smarty_tpl->assign('file_prefix', "action_", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "disabled_big") {?>
    <?php $_smarty_tpl->assign('suffix', "-disabled-big", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "big") {?>
    <?php $_smarty_tpl->assign('suffix', "-big", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "delete") {?>
    <?php $_smarty_tpl->assign('suffix', "-delete", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "tool") {?>
    <?php $_smarty_tpl->assign('suffix', "-tool", false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('suffix', '', false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('but_name') && $_smarty_tpl->getValue('but_role') != "text" && $_smarty_tpl->getValue('but_role') != "act" && $_smarty_tpl->getValue('but_role') != "delete") {?>     <button <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
 ty-btn" type="submit" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
"<?php }?> aria-label="<?php if ($_smarty_tpl->getValue('but_text')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');
} else { ?>Action button<?php }?>"><?php if ($_smarty_tpl->getValue('but_icon')) {?><span><i class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_icon')), ENT_QUOTES, 'UTF-8');?>
"></i><?php }
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }
if ($_smarty_tpl->getValue('but_icon')) {?></span><?php }?></button>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "text" || $_smarty_tpl->getValue('but_role') == "act" || $_smarty_tpl->getValue('but_role') == "edit") {?>     <a <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_extra')), ENT_QUOTES, 'UTF-8');?>
 class="ty-btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->getValue('but_name')) {?>cm-submit <?php }?>text-button<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('but_scroll')) {?>cm-scroll <?php }
if ($_smarty_tpl->getValue('but_tooltip') && !$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"<?php if ($_smarty_tpl->getValue('but_id')) {?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_scroll')) {?> data-ca-scroll="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_scroll')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
 return false;"<?php }
if ($_smarty_tpl->getValue('but_target')) {?> target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('but_icon')), $_smarty_tpl);
}
if ($_smarty_tpl->getValue('btn_nofilter')) {
echo $_smarty_tpl->getValue('but_text');
} else {
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }
}?></a>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "delete") {?>
    <a <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_extra')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
 return false;"<?php }
if ($_smarty_tpl->getValue('but_meta')) {?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target')) {?> target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</a>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "icon") {?>     <a <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_extra')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->getValue('but_target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }?></a>

<?php } else { ?> 
    <a <?php if ($_smarty_tpl->getValue('but_href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
 return false;"<?php }?> <?php if ($_smarty_tpl->getValue('but_target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
 <?php }?>" <?php if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('but_icon')), $_smarty_tpl);
}
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }?></a>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/button.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/button.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('but_role') == "action") {?>
    <?php $_smarty_tpl->assign('suffix', "-action", false, NULL);?>
    <?php $_smarty_tpl->assign('file_prefix', "action_", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "act") {?>
    <?php $_smarty_tpl->assign('suffix', "-act", false, NULL);?>
    <?php $_smarty_tpl->assign('file_prefix', "action_", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "disabled_big") {?>
    <?php $_smarty_tpl->assign('suffix', "-disabled-big", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "big") {?>
    <?php $_smarty_tpl->assign('suffix', "-big", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "delete") {?>
    <?php $_smarty_tpl->assign('suffix', "-delete", false, NULL);
} elseif ($_smarty_tpl->getValue('but_role') == "tool") {?>
    <?php $_smarty_tpl->assign('suffix', "-tool", false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('suffix', '', false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('but_name') && $_smarty_tpl->getValue('but_role') != "text" && $_smarty_tpl->getValue('but_role') != "act" && $_smarty_tpl->getValue('but_role') != "delete") {?>     <button <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
 ty-btn" type="submit" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
"<?php }?> aria-label="<?php if ($_smarty_tpl->getValue('but_text')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');
} else { ?>Action button<?php }?>"><?php if ($_smarty_tpl->getValue('but_icon')) {?><span><i class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_icon')), ENT_QUOTES, 'UTF-8');?>
"></i><?php }
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }
if ($_smarty_tpl->getValue('but_icon')) {?></span><?php }?></button>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "text" || $_smarty_tpl->getValue('but_role') == "act" || $_smarty_tpl->getValue('but_role') == "edit") {?>     <a <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_extra')), ENT_QUOTES, 'UTF-8');?>
 class="ty-btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->getValue('but_name')) {?>cm-submit <?php }?>text-button<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('but_scroll')) {?>cm-scroll <?php }
if ($_smarty_tpl->getValue('but_tooltip') && !$_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"<?php if ($_smarty_tpl->getValue('but_id')) {?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_scroll')) {?> data-ca-scroll="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_scroll')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
 return false;"<?php }
if ($_smarty_tpl->getValue('but_target')) {?> target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('but_icon')), $_smarty_tpl);
}
if ($_smarty_tpl->getValue('btn_nofilter')) {
echo $_smarty_tpl->getValue('but_text');
} else {
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }
}?></a>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "delete") {?>
    <a <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_extra')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_name')) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_name')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
 return false;"<?php }
if ($_smarty_tpl->getValue('but_meta')) {?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target')) {?> target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</a>

<?php } elseif ($_smarty_tpl->getValue('but_role') == "icon") {?>     <a <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_extra')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('but_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_href')) {?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
;<?php if (!$_smarty_tpl->getValue('allow_href')) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->getValue('but_target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }?></a>

<?php } else { ?> 
    <a <?php if ($_smarty_tpl->getValue('but_href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('but_href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_onclick')) {?> onclick="<?php echo $_smarty_tpl->getValue('but_onclick');?>
 return false;"<?php }?> <?php if ($_smarty_tpl->getValue('but_target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->getValue('but_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
 <?php }?>" <?php if ($_smarty_tpl->getValue('but_rel')) {?> rel="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_rel')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_external_click_id')) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_external_click_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_form')) {?> data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_form')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_target_id')) {?> data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_target_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('but_title')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->getValue('but_icon')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('but_icon')), $_smarty_tpl);
}
if ($_smarty_tpl->getValue('but_text')) {?><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_text')), ENT_QUOTES, 'UTF-8');?>
</bdi><?php }?></a>
<?php }
}
}
}
