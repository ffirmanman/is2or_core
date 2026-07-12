<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:04:34
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a7221b147_53983530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf2993004eb6c553a69eb1ede127528c874693b' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_search.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 2,
  ),
))) {
function content_69fb4a7221b147_53983530 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors';
\Tygh\Languages\Helper::preloadLangVars(array('block_vendor_search','storefront_search_button','block_vendor_search','storefront_search_button'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><a href="javascript:void(0);" rel="nofollow" onclick="$(this).parent().next().toggleClass('hidden');$(this).next().toggleClass('view');$(this).toggleClass('hidden');" class="ut2-btn-search"><i class="ut2-icon-search"></i><i class="ut2-icon-baseline-close hidden"></i></a>
<div class="ty-search-block">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="status" value="A" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['category_id']), ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"vendor_search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"vendor_search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <input type="text" name="q" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['q']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_vendor_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-search-block__input cm-hint" /><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"companies.products",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_button", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
    </form>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_search.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/blocks/vendors/vendor_search.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><a href="javascript:void(0);" rel="nofollow" onclick="$(this).parent().next().toggleClass('hidden');$(this).next().toggleClass('view');$(this).toggleClass('hidden');" class="ut2-btn-search"><i class="ut2-icon-search"></i><i class="ut2-icon-baseline-close hidden"></i></a>
<div class="ty-search-block">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="status" value="A" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_id')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_data')['category_id']), ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"vendor_search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"vendor_search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <input type="text" name="q" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['q']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("block_vendor_search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-search-block__input cm-hint" /><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"companies.products",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_button", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
    </form>
</div>
<?php }
}
}
