<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:addons/cr_vendor_page_pro/blocks/static_templates/vendor_contact_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a720e4b00_70370630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e6ea4574a3ddc90e9988a04f92f167f61f6622f' => 
    array (
      0 => 'addons/cr_vendor_page_pro/blocks/static_templates/vendor_contact_info.tpl',
      1 => 1776438348,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a720e4b00_70370630 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('contact_information','email','phone','fax','website','contact_information','email','phone','fax','website'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-company-detail__info-list ty-company-detail_info-first">
    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_information", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>
    <?php if ($_smarty_tpl->getValue('company_data')['email']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['email']), ENT_QUOTES, 'UTF-8');?>
</a></span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('company_data')['phone']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['phone']), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('company_data')['fax']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("fax", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['fax']), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('company_data')['url']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("website", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['url']), ENT_QUOTES, 'UTF-8');?>
</a></span>
        </div>
    <?php }?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cr_vendor_page_pro/blocks/static_templates/vendor_contact_info.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cr_vendor_page_pro/blocks/static_templates/vendor_contact_info.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-company-detail__info-list ty-company-detail_info-first">
    <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_information", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h5>
    <?php if ($_smarty_tpl->getValue('company_data')['email']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['email']), ENT_QUOTES, 'UTF-8');?>
</a></span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('company_data')['phone']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['phone']), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('company_data')['fax']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("fax", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['fax']), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('company_data')['url']) {?>
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("website", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <span><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['url']), ENT_QUOTES, 'UTF-8');?>
</a></span>
        </div>
    <?php }?>
</div><?php }
}
}
