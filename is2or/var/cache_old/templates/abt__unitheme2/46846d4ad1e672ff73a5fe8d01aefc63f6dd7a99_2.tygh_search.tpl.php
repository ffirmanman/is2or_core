<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:31
  from 'tygh:common/search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94732ff955_56087759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46846d4ad1e672ff73a5fe8d01aefc63f6dd7a99' => 
    array (
      0 => 'common/search.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 4,
  ),
))) {
function content_69ad94732ff955_56087759 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_general','search_products','storefront_search_general','storefront_search_general','storefront_search_general','search_products','storefront_search_general','storefront_search_general'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<a href="#" rel="nofollow" onclick="$(this).parent().next().toggleClass('hidden');$(this).next().toggleClass('view');$(this).toggleClass('hidden');" class="ut2-btn-search"><i class="ut2-icon-search"></i><i class="ut2-icon-baseline-close hidden"></i></a>


<div class="ty-search-block">
    
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_general", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_products", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?><input type="text" name="q" value="<?php echo $_smarty_tpl->getValue('search')['q'];?>
" id="search_input<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'search_input_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search_title')), ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_general", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_general", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
}?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "search_input_id", null, null);
echo $_smarty_tpl->getValue('block')['snapping_id'];
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    </form>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/search.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/search.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<a href="#" rel="nofollow" onclick="$(this).parent().next().toggleClass('hidden');$(this).next().toggleClass('view');$(this).toggleClass('hidden');" class="ut2-btn-search"><i class="ut2-icon-search"></i><i class="ut2-icon-baseline-close hidden"></i></a>


<div class="ty-search-block">
    
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_general", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else {
$_smarty_tpl->assign('search_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("search_products", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?><input type="text" name="q" value="<?php echo $_smarty_tpl->getValue('search')['q'];?>
" id="search_input<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'search_input_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search_title')), ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->getValue('settings')['General']['search_objects']) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_general", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_general", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
}?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "search_input_id", null, null);
echo $_smarty_tpl->getValue('block')['snapping_id'];
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    </form>
</div>
<?php }
}
}
