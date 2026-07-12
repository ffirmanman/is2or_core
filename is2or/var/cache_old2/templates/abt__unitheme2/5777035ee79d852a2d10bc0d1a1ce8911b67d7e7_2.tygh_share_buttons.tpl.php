<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/social_buttons/blocks/components/share_buttons.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa96f1655_28679175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5777035ee79d852a2d10bc0d1a1ce8911b67d7e7' => 
    array (
      0 => 'addons/social_buttons/blocks/components/share_buttons.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa96f1655_28679175 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/social_buttons/blocks/components';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.addon_social_buttons.share','abt__ut2.addon_social_buttons.share'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('display_button_block') && $_smarty_tpl->getValue('abt__shareb_mute')) {?>
    <span class="ut2-pb__share">
        <a href="javascript:void(0)" rel="nofollow" role="button" id="sw_dropdown_sb" class="ut2-share-buttons-link cm-combination label"><i class="ut2-icon-share"></i>
            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.addon_social_buttons.share", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        </a>
        <div id="dropdown_sb" class="ut2-share-buttons cm-popup-box ty-dropdown-box__content caret cm-smart-position-h hidden">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_settings'), 'provider_data');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach6DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('provider_data') && $_smarty_tpl->getValue('provider_data')['template'] && $_smarty_tpl->getValue('provider_data')['data']) {?>
                    <?php $_smarty_tpl->renderSubTemplate("addons/social_buttons/providers/".((string)$_smarty_tpl->getValue('provider_data')['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </span>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/blocks/components/share_buttons.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/social_buttons/blocks/components/share_buttons.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('display_button_block') && $_smarty_tpl->getValue('abt__shareb_mute')) {?>
    <span class="ut2-pb__share">
        <a href="javascript:void(0)" rel="nofollow" role="button" id="sw_dropdown_sb" class="ut2-share-buttons-link cm-combination label"><i class="ut2-icon-share"></i>
            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.addon_social_buttons.share", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        </a>
        <div id="dropdown_sb" class="ut2-share-buttons cm-popup-box ty-dropdown-box__content caret cm-smart-position-h hidden">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('provider_settings'), 'provider_data');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach7DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('provider_data') && $_smarty_tpl->getValue('provider_data')['template'] && $_smarty_tpl->getValue('provider_data')['data']) {?>
                    <?php $_smarty_tpl->renderSubTemplate("addons/social_buttons/providers/".((string)$_smarty_tpl->getValue('provider_data')['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </span>
<?php }
}
}
}
