<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:addons/cr_vendor_page_pro/blocks/static_templates/vendor_rating.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a72077c03_09926749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a6f1bb3d364219864772a11f3df7b36ebcb87fe' => 
    array (
      0 => 'addons/cr_vendor_page_pro/blocks/static_templates/vendor_rating.tpl',
      1 => 1776438348,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/cr_vendor_page_pro/components/stars.tpl' => 2,
  ),
))) {
function content_69fb4a72077c03_09926749 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('reviews','reviews'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('company_data')['discussion'] && $_smarty_tpl->getValue('company_data')['discussion']['type'] != "D") {?>
    <span class="ty-discussion__rating-wrapper" id="average_rating_company_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['company_id']), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('company_data')['average_rating']) {?>
            <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('company_data')['average_rating'], false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('company_data')['discussion']['average_rating']) {?>
            <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('company_data')['discussion']['average_rating'], false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('average_rating')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/cr_vendor_page_pro/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating')),'is_link'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('company_data')['discussion']['search']['total_items']) {?>
            <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('company_data')['discussion']['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <?php }?>
        <!--average_rating_company_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['company_id']), ENT_QUOTES, 'UTF-8');?>
--></span>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cr_vendor_page_pro/blocks/static_templates/vendor_rating.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cr_vendor_page_pro/blocks/static_templates/vendor_rating.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('company_data')['discussion'] && $_smarty_tpl->getValue('company_data')['discussion']['type'] != "D") {?>
    <span class="ty-discussion__rating-wrapper" id="average_rating_company_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['company_id']), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('company_data')['average_rating']) {?>
            <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('company_data')['average_rating'], false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('company_data')['discussion']['average_rating']) {?>
            <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('company_data')['discussion']['average_rating'], false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('average_rating')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/cr_vendor_page_pro/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating')),'is_link'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('company_data')['discussion']['search']['total_items']) {?>
            <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('company_data')['discussion']['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <?php }?>
        <!--average_rating_company_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_data')['company_id']), ENT_QUOTES, 'UTF-8');?>
--></span>
<?php }
}
}
}
