<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:27:34
  from 'tygh:views/profiles/components/multiple_profiles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae8476916af4_05820702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b8951e6ce79b138623fc0653174fab374296b4' => 
    array (
      0 => 'views/profiles/components/multiple_profiles.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ae8476916af4_05820702 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/profiles/components';
\Tygh\Languages\Helper::preloadLangVars(array('select_profile','select_profile','or','create_profile','create_profile','profile_name','new','main','main','select_profile','select_profile','or','create_profile','create_profile','profile_name','new','main','main'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['General']['user_multiple_profiles'] == "Y" && $_smarty_tpl->getValue('auth')['user_id']) {?>

<?php if ($_smarty_tpl->getValue('show_title')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("select_profile", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
}?>

<?php if (!$_smarty_tpl->getValue('hide_profile_select')) {?>
<div class="ty-control-group select-profile">
    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_profiles'), 'up', false, NULL, 'pfe', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('up')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['total'];
?>
        <?php if ($_smarty_tpl->getValue('up')['profile_id'] == $_smarty_tpl->getValue('profile_id')) {?>
        <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('up')['profile_name']), ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php } else { ?>
        <a <?php if ($_smarty_tpl->getValue('use_ajax')) {?>class="cm-ajax"<?php }?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"profile","selected_section"),"profile_id=".((string)$_smarty_tpl->getValue('up')['profile_id'])))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('up')['profile_name']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('up')['profile_type'] != "P" && !$_smarty_tpl->getValue('hide_profile_delete')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-confirm",'but_target_id'=>"checkout_steps,cart_items,checkout_totals",'but_role'=>"delete",'but_text'=>"&nbsp;",'but_href'=>"profiles.delete_profile?profile_id=".((string)$_smarty_tpl->getValue('up')['profile_id'])), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <?php if (!($_smarty_tpl->getValue('__smarty_foreach_pfe')['last'] ?? null)) {?>&nbsp;|&nbsp;<?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php if (!$_smarty_tpl->getValue('skip_create')) {?>
        &nbsp;&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("or", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;&nbsp;&nbsp;<?php if ($_REQUEST['profile'] == "new") {?><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong><?php } else { ?><a class="<?php if ($_smarty_tpl->getValue('use_ajax')) {?> cm-ajax<?php }?>" href="<?php if ($_smarty_tpl->getValue('create_href')) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('create_href'))), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"profile_id","selected_section"),"profile=new"))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?>
    <?php }?>
</div>
<?php }?>

<?php if (!$_smarty_tpl->getValue('hide_profile_name')) {?>
<div class="ty-control-group">
    <label for="elm_profile_id" class="cm-required"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
    <?php if ($_smarty_tpl->getValue('runtime')['action'] == "add_profile" || $_smarty_tpl->getValue('no_edit') != "Y") {?>
        <?php $_smarty_tpl->assign('profile_name', $_smarty_tpl->getSmarty()->getModifierCallback("__")("new", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('profile_name', $_smarty_tpl->getSmarty()->getModifierCallback("__")("main", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php }?>

    <input type="hidden" name="user_data[profile_id]" value="<?php echo (($tmp = $_smarty_tpl->getValue('profile_id') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp);?>
" />
    <input type="text" class="ty-input-text" id="elm_profile_id" name="user_data[profile_name]" size="32" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('user_data')['profile_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('profile_name') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }?>

<?php } else { ?>
    <input type="hidden" id="profile_name" name="user_data[profile_name]" value="<?php echo (($tmp = $_smarty_tpl->getValue('user_data')['profile_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("main", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
" />
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/multiple_profiles.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/profiles/components/multiple_profiles.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['General']['user_multiple_profiles'] == "Y" && $_smarty_tpl->getValue('auth')['user_id']) {?>

<?php if ($_smarty_tpl->getValue('show_title')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("select_profile", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
}?>

<?php if (!$_smarty_tpl->getValue('hide_profile_select')) {?>
<div class="ty-control-group select-profile">
    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_profiles'), 'up', false, NULL, 'pfe', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('up')->value) {
$foreach1DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_pfe']->value['total'];
?>
        <?php if ($_smarty_tpl->getValue('up')['profile_id'] == $_smarty_tpl->getValue('profile_id')) {?>
        <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('up')['profile_name']), ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php } else { ?>
        <a <?php if ($_smarty_tpl->getValue('use_ajax')) {?>class="cm-ajax"<?php }?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"profile","selected_section"),"profile_id=".((string)$_smarty_tpl->getValue('up')['profile_id'])))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('up')['profile_name']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('up')['profile_type'] != "P" && !$_smarty_tpl->getValue('hide_profile_delete')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-confirm",'but_target_id'=>"checkout_steps,cart_items,checkout_totals",'but_role'=>"delete",'but_text'=>"&nbsp;",'but_href'=>"profiles.delete_profile?profile_id=".((string)$_smarty_tpl->getValue('up')['profile_id'])), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <?php if (!($_smarty_tpl->getValue('__smarty_foreach_pfe')['last'] ?? null)) {?>&nbsp;|&nbsp;<?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php if (!$_smarty_tpl->getValue('skip_create')) {?>
        &nbsp;&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("or", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;&nbsp;&nbsp;<?php if ($_REQUEST['profile'] == "new") {?><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong><?php } else { ?><a class="<?php if ($_smarty_tpl->getValue('use_ajax')) {?> cm-ajax<?php }?>" href="<?php if ($_smarty_tpl->getValue('create_href')) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('create_href'))), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"profile_id","selected_section"),"profile=new"))), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="checkout_steps,cart_items,checkout_totals"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?>
    <?php }?>
</div>
<?php }?>

<?php if (!$_smarty_tpl->getValue('hide_profile_name')) {?>
<div class="ty-control-group">
    <label for="elm_profile_id" class="cm-required"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_name", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
    <?php if ($_smarty_tpl->getValue('runtime')['action'] == "add_profile" || $_smarty_tpl->getValue('no_edit') != "Y") {?>
        <?php $_smarty_tpl->assign('profile_name', $_smarty_tpl->getSmarty()->getModifierCallback("__")("new", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('profile_name', $_smarty_tpl->getSmarty()->getModifierCallback("__")("main", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php }?>

    <input type="hidden" name="user_data[profile_id]" value="<?php echo (($tmp = $_smarty_tpl->getValue('profile_id') ?? null)===null||$tmp==='' ? "0" ?? null : $tmp);?>
" />
    <input type="text" class="ty-input-text" id="elm_profile_id" name="user_data[profile_name]" size="32" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('user_data')['profile_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('profile_name') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }?>

<?php } else { ?>
    <input type="hidden" id="profile_name" name="user_data[profile_name]" value="<?php echo (($tmp = $_smarty_tpl->getValue('user_data')['profile_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("main", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
" />
<?php }
}
}
}
