<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:21
  from 'tygh:addons/cities/hooks/profiles/profile_fields.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c5014ef2_22050227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40cdc8de331c08f2f181fc577ae1d0f57ead358f' => 
    array (
      0 => 'addons/cities/hooks/profiles/profile_fields.post.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb53c5014ef2_22050227 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/cities/hooks/profiles';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('field')['autocomplete_type'] === "city") {?>
    <?php $_smarty_tpl->assign('country_field_value', (($tmp = $_smarty_tpl->getValue('profile_data')[((string)(mb_strtolower((string) $_smarty_tpl->getValue('section'), 'UTF-8')))."_country"] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Company']['company_country'] ?? null : $tmp), false, NULL);?>
    <div class="cm-abt--ut2-select-city-profile">
        <?php if ($_smarty_tpl->getValue('abt_ut2__checkout_cities')[$_smarty_tpl->getValue('country_field_value')]) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('abt_ut2__checkout_cities')[$_smarty_tpl->getValue('country_field_value')], 'predefined_city');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('predefined_city')->value) {
$foreach14DoElse = false;
?>
                <span data-ca-select-city="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['city']), ENT_QUOTES, 'UTF-8');?>
" data-ca-state-code="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['state_code']), ENT_QUOTES, 'UTF-8');?>
" data-ca-state="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['state']), ENT_QUOTES, 'UTF-8');?>
" class="city"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['city']), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cities/hooks/profiles/profile_fields.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cities/hooks/profiles/profile_fields.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('field')['autocomplete_type'] === "city") {?>
    <?php $_smarty_tpl->assign('country_field_value', (($tmp = $_smarty_tpl->getValue('profile_data')[((string)(mb_strtolower((string) $_smarty_tpl->getValue('section'), 'UTF-8')))."_country"] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Company']['company_country'] ?? null : $tmp), false, NULL);?>
    <div class="cm-abt--ut2-select-city-profile">
        <?php if ($_smarty_tpl->getValue('abt_ut2__checkout_cities')[$_smarty_tpl->getValue('country_field_value')]) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('abt_ut2__checkout_cities')[$_smarty_tpl->getValue('country_field_value')], 'predefined_city');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('predefined_city')->value) {
$foreach15DoElse = false;
?>
                <span data-ca-select-city="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['city']), ENT_QUOTES, 'UTF-8');?>
" data-ca-state-code="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['state_code']), ENT_QUOTES, 'UTF-8');?>
" data-ca-state="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['state']), ENT_QUOTES, 'UTF-8');?>
" class="city"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('predefined_city')['city']), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
<?php }
}
}
}
