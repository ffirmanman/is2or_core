<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:25
  from 'tygh:addons/csc_live_search/hooks/index/scripts.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb211076e36_96519442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319c5ad74aa08d273be4c255f18a3955c99ccd5f' => 
    array (
      0 => 'addons/csc_live_search/hooks/index/scripts.pre.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb211076e36_96519442 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/csc_live_search/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('cls.show_more','cls.show_all','cls.total_found','cls.featured_products','cls.found_products','cls.browse_products_by_category','cls.back_to_all_cats','cls.storefronts_categories','cls.text_pages_and_blog','cls.brand_pages','cls.vendor_pages','cls.porpose_correction','cls.popular_searches','cls.found_categories','cls.product_code','cls.enter_more_symbols','cls.nothing_found','search_results','cls.quick_view','cls.add_to_cart','cls.add_to_wishlist','cls.add_to_compare','cls.user_last_queries','cls.select_product_options','cls.auth_users_only','cls.show_more','cls.show_all','cls.total_found','cls.featured_products','cls.found_products','cls.browse_products_by_category','cls.back_to_all_cats','cls.storefronts_categories','cls.text_pages_and_blog','cls.brand_pages','cls.vendor_pages','cls.porpose_correction','cls.popular_searches','cls.found_categories','cls.product_code','cls.enter_more_symbols','cls.nothing_found','search_results','cls.quick_view','cls.add_to_cart','cls.add_to_wishlist','cls.add_to_compare','cls.user_last_queries','cls.select_product_options','cls.auth_users_only'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/csc_live_search/func.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/csc_live_search/compatibility.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->assign('cls_settings', $_smarty_tpl->getSmarty()->getModifierCallback('fn_cls_get_settings')(), false, NULL);?>

<?php $_smarty_tpl->assign('search_motivation', $_smarty_tpl->getSmarty()->getModifierCallback('fn_csc_live_search_get_storefront_motivation')(), false, NULL);
echo '<script'; ?>
>
	(function (_, $) {
		$.ceEvent('on', 'ce.commoninit', function (context) {
			fn_cls_init_search(context);
		});
		function fn_cls_init_search(context){			
			try{	
				$("form[name='search_form']", context).csc_live_search(
					{		
						block_enter: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['block_enter_press']), ENT_QUOTES, 'UTF-8');?>
",
						characters_limit: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['characters_limit']), ENT_QUOTES, 'UTF-8');?>
,		
						currency: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('secondary_currency')), ENT_QUOTES, 'UTF-8');?>
",				
						curl: "<?php echo $_smarty_tpl->getValue('config')['current_url'];?>
",
						runtime_company_id: "<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('runtime')['company_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
",
						runtime_storefront_id: "<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('runtime')['storefront_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
",
						sl: '<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
',
						url: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_cls_url')()), ENT_QUOTES, 'UTF-8');?>
',
						clsm_redirect_category: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['clsm_redirect_category']), ENT_QUOTES, 'UTF-8');?>
",
						check_promotion: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_cls_is_active_promotions')()), ENT_QUOTES, 'UTF-8');?>
',					
						warehouses: <?php if ($_smarty_tpl->getValue('addons')['warehouses']['status'] == "A") {?>true<?php } else { ?>false<?php }?>,						
						clsm_motivation: <?php if ($_smarty_tpl->getValue('search_motivation')) {?>JSON.parse('<?php echo $_smarty_tpl->getValue('search_motivation');?>
')<?php } else { ?>false<?php }?>,						
						result_ids: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['custom_result_ids']), ENT_QUOTES, 'UTF-8');?>
',
						timeout: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['search_delay'] ?? null)===null||$tmp==='' ? 500 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
						show_clear_btn:	'<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['show_clear_btn'] ?? null)===null||$tmp==='' ? 'Y' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
',				
					}
				);
			}catch(e){
				console.log(e);
			}
			<?php if ($_smarty_tpl->getValue('addons')['age_verification']['status'] == "A") {?>		
				$("form[name='search_form']:not(.clsInited)", context).append('<input type="hidden" name="age_verification" value="<?php echo htmlspecialchars((string) ($_SESSION['auth']['age']), ENT_QUOTES, 'UTF-8');?>
">');
			<?php }?>		
		}
		$.extend(Tygh.lang, {
			clsShowMore: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.show_more", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsShowAll: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.show_all", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsTotalFound: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.total_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
",
			clsFeaturedProducts: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.featured_products", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsFoundProducts: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.found_products", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsBrowseByCategories: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.browse_products_by_category", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsBackToCats: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.back_to_all_cats", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsStorefrontsCats: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.storefronts_categories", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsTextPages: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.text_pages_and_blog", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsBrands: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.brand_pages", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsVendors: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.vendor_pages", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsPorposeCorrection: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.porpose_correction", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsPopularSearchs: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.popular_searches", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsCategories: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.found_categories", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsProductCode: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.product_code", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsEnterSymbols: "<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['characters_limit']), ENT_QUOTES, 'UTF-8');
$_prefixVariable12 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.enter_more_symbols", array($_prefixVariable12), $_smarty_tpl->getSmarty()->getLanguage());?>
",
			clsNothingFound: <?php if ($_smarty_tpl->getValue('cls_settings')['search_products'] == "Y") {?>"<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.nothing_found", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
"<?php } else { ?>"<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("search_results", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
:"<?php }?>,
			clsQuickView: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.quick_view", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAddToCart: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAddToWish: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.add_to_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAddCompare: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.add_to_compare", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsUserLastQueries: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.user_last_queries", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",					
			clsSelectOptions: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.select_product_options", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAuthUsersOnly: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.auth_users_only", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
		});	
	  
	})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/hooks/index/scripts.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/csc_live_search/hooks/index/scripts.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/csc_live_search/func.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/csc_live_search/compatibility.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->assign('cls_settings', $_smarty_tpl->getSmarty()->getModifierCallback('fn_cls_get_settings')(), false, NULL);?>

<?php $_smarty_tpl->assign('search_motivation', $_smarty_tpl->getSmarty()->getModifierCallback('fn_csc_live_search_get_storefront_motivation')(), false, NULL);
echo '<script'; ?>
>
	(function (_, $) {
		$.ceEvent('on', 'ce.commoninit', function (context) {
			fn_cls_init_search(context);
		});
		function fn_cls_init_search(context){			
			try{	
				$("form[name='search_form']", context).csc_live_search(
					{		
						block_enter: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['block_enter_press']), ENT_QUOTES, 'UTF-8');?>
",
						characters_limit: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['characters_limit']), ENT_QUOTES, 'UTF-8');?>
,		
						currency: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('secondary_currency')), ENT_QUOTES, 'UTF-8');?>
",				
						curl: "<?php echo $_smarty_tpl->getValue('config')['current_url'];?>
",
						runtime_company_id: "<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('runtime')['company_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
",
						runtime_storefront_id: "<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('runtime')['storefront_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
",
						sl: '<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
',
						url: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_cls_url')()), ENT_QUOTES, 'UTF-8');?>
',
						clsm_redirect_category: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['clsm_redirect_category']), ENT_QUOTES, 'UTF-8');?>
",
						check_promotion: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_cls_is_active_promotions')()), ENT_QUOTES, 'UTF-8');?>
',					
						warehouses: <?php if ($_smarty_tpl->getValue('addons')['warehouses']['status'] == "A") {?>true<?php } else { ?>false<?php }?>,						
						clsm_motivation: <?php if ($_smarty_tpl->getValue('search_motivation')) {?>JSON.parse('<?php echo $_smarty_tpl->getValue('search_motivation');?>
')<?php } else { ?>false<?php }?>,						
						result_ids: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['custom_result_ids']), ENT_QUOTES, 'UTF-8');?>
',
						timeout: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['search_delay'] ?? null)===null||$tmp==='' ? 500 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
						show_clear_btn:	'<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['show_clear_btn'] ?? null)===null||$tmp==='' ? 'Y' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
',				
					}
				);
			}catch(e){
				console.log(e);
			}
			<?php if ($_smarty_tpl->getValue('addons')['age_verification']['status'] == "A") {?>		
				$("form[name='search_form']:not(.clsInited)", context).append('<input type="hidden" name="age_verification" value="<?php echo htmlspecialchars((string) ($_SESSION['auth']['age']), ENT_QUOTES, 'UTF-8');?>
">');
			<?php }?>		
		}
		$.extend(Tygh.lang, {
			clsShowMore: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.show_more", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsShowAll: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.show_all", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsTotalFound: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.total_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
",
			clsFeaturedProducts: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.featured_products", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsFoundProducts: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.found_products", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsBrowseByCategories: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.browse_products_by_category", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsBackToCats: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.back_to_all_cats", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsStorefrontsCats: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.storefronts_categories", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsTextPages: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.text_pages_and_blog", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsBrands: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.brand_pages", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsVendors: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.vendor_pages", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsPorposeCorrection: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.porpose_correction", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsPopularSearchs: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.popular_searches", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsCategories: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.found_categories", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsProductCode: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.product_code", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsEnterSymbols: "<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('cls_settings')['characters_limit']), ENT_QUOTES, 'UTF-8');
$_prefixVariable13 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.enter_more_symbols", array($_prefixVariable13), $_smarty_tpl->getSmarty()->getLanguage());?>
",
			clsNothingFound: <?php if ($_smarty_tpl->getValue('cls_settings')['search_products'] == "Y") {?>"<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.nothing_found", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
"<?php } else { ?>"<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("search_results", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
:"<?php }?>,
			clsQuickView: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.quick_view", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAddToCart: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAddToWish: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.add_to_wishlist", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAddCompare: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.add_to_compare", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsUserLastQueries: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.user_last_queries", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",					
			clsSelectOptions: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.select_product_options", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
			clsAuthUsersOnly: "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getModifierCallback("__")("cls.auth_users_only", [], $_smarty_tpl->getSmarty()->getLanguage()));?>
",
		});	
	  
	})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
