<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:15
  from 'tygh:addons/vendor_locations/hooks/companies/featured_vendors.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96074eb665_87617733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940062b4a5dd0b72300b8a044d8f971cc21313fa' => 
    array (
      0 => 'addons/vendor_locations/hooks/companies/featured_vendors.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad96074eb665_87617733 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_locations/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_locations.nearby','vendor_locations.nearby'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ((true && (true && null !== ($_smarty_tpl->getValue('company')['distance'] ?? null)))) {?>
    <div class="ty-grid-list__company-distance">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-distance">
        <?php if (round((float) $_smarty_tpl->getValue('company')['distance'], (int) 2, (int) 1) > 1) {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-location-arrow"), $_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('company')['distance'], (int) 2, (int) 1)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['vendor_locations']['distance_unit']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.nearby", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/hooks/companies/featured_vendors.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_locations/hooks/companies/featured_vendors.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ((true && (true && null !== ($_smarty_tpl->getValue('company')['distance'] ?? null)))) {?>
    <div class="ty-grid-list__company-distance">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company')['company_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-distance">
        <?php if (round((float) $_smarty_tpl->getValue('company')['distance'], (int) 2, (int) 1) > 1) {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-location-arrow"), $_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('company')['distance'], (int) 2, (int) 1)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['vendor_locations']['distance_unit']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.nearby", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php }?>
    </div>
<?php }
}
}
}
