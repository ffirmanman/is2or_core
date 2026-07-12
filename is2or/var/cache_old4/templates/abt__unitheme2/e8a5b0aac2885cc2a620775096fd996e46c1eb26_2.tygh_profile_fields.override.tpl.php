<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:20
  from 'tygh:addons/is2or_spl_integration/hooks/profiles/profile_fields.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c4f34932_95286976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a5b0aac2885cc2a620775096fd996e46c1eb26' => 
    array (
      0 => 'addons/is2or_spl_integration/hooks/profiles/profile_fields.override.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb53c4f34932_95286976 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_spl_integration/hooks/profiles';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('field')['field_type'] == 'J') {?>
    <?php $_smarty_tpl->assign('disabled', $_smarty_tpl->getValue('shipping_flag') && !$_smarty_tpl->getValue('ship_to_another'), false, NULL);?>

    <div class="ty-control-group">
        <label class="ty-control-group__title <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?>" for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
:</label>
        <input type="text" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" class="input-medium" <?php echo $_smarty_tpl->getValue('disabled_param');?>
 />
        <button data-ca-element-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
" data-ca-element-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('section')), ENT_QUOTES, 'UTF-8');?>
" type="button" class="ty-btn ty-btn__primary is2or-spl-integration-generate-address" <?php if ($_smarty_tpl->getValue('disabled')) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_spl_integration.generate_address', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_spl_integration/hooks/profiles/profile_fields.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_spl_integration/hooks/profiles/profile_fields.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('field')['field_type'] == 'J') {?>
    <?php $_smarty_tpl->assign('disabled', $_smarty_tpl->getValue('shipping_flag') && !$_smarty_tpl->getValue('ship_to_another'), false, NULL);?>

    <div class="ty-control-group">
        <label class="ty-control-group__title <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required<?php }?>" for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
:</label>
        <input type="text" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" class="input-medium" <?php echo $_smarty_tpl->getValue('disabled_param');?>
 />
        <button data-ca-element-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
" data-ca-element-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('section')), ENT_QUOTES, 'UTF-8');?>
" type="button" class="ty-btn ty-btn__primary is2or-spl-integration-generate-address" <?php if ($_smarty_tpl->getValue('disabled')) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('is2or_spl_integration.generate_address', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
    </div>
<?php }
}
}
}
