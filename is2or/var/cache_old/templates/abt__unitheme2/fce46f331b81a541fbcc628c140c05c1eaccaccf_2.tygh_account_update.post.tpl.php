<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:38
  from 'tygh:addons/is2or_categories_interest/hooks/profiles/account_update.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabe18cff4_21896284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce46f331b81a541fbcc628c140c05c1eaccaccf' => 
    array (
      0 => 'addons/is2or_categories_interest/hooks/profiles/account_update.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
))) {
function content_69adaabe18cff4_21896284 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_categories_interest/hooks/profiles';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('runtime')['mode'] == 'update') {
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_categories_interest.categories_interest', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable13=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable13), (int) 0, $_smarty_current_dir);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach26DoElse = false;
?>
    <div style="margin-bottom: 5px;">
        <input type="checkbox" class="categories-interest-checkbox" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" id="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" name="user_data[tags_group_interest][]" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('group')['group_id'],$_smarty_tpl->getValue('tags_group_interest'))) {?>checked<?php }?> />
        <label class="checkbox" for="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" style="display: inline-block; text-align: center">
                        <span style="text-align: center;"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_name']), ENT_QUOTES, 'UTF-8');?>
</span>
        </label>
    </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_categories_interest/hooks/profiles/account_update.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_categories_interest/hooks/profiles/account_update.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('runtime')['mode'] == 'update') {
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_categories_interest.categories_interest', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable14=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable14), (int) 0, $_smarty_current_dir);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach27DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach27DoElse = false;
?>
    <div style="margin-bottom: 5px;">
        <input type="checkbox" class="categories-interest-checkbox" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" id="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" name="user_data[tags_group_interest][]" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('group')['group_id'],$_smarty_tpl->getValue('tags_group_interest'))) {?>checked<?php }?> />
        <label class="checkbox" for="tags_group_interest_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_id']), ENT_QUOTES, 'UTF-8');?>
" style="display: inline-block; text-align: center">
                        <span style="text-align: center;"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group')['group_name']), ENT_QUOTES, 'UTF-8');?>
</span>
        </label>
    </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>

<?php }
}
}
