{script src="js/addons/csc_live_search/func.js"}
{script src="js/addons/csc_live_search/compatibility.js"}
{assign var=cls_settings value= fn_cls_get_settings()}

{$search_motivation = fn_csc_live_search_get_storefront_motivation()}
<script>
	(function (_, $) {
		$.ceEvent('on', 'ce.commoninit', function (context) {
			fn_cls_init_search(context);
		});
		function fn_cls_init_search(context){			
			try{	
				$("form[name='search_form']", context).csc_live_search(
					{		
						block_enter: "{$cls_settings.block_enter_press}",
						characters_limit: {$cls_settings.characters_limit},		
						currency: "{$secondary_currency}",				
						curl: "{$config.current_url nofilter}",
						runtime_company_id: "{$runtime.company_id|default:0}",
						runtime_storefront_id: "{$runtime.storefront_id|default:0}",
						sl: '{$smarty.const.CART_LANGUAGE}',
						url: '{fn_get_cls_url()}',
						clsm_redirect_category: "{$cls_settings.clsm_redirect_category}",
						check_promotion: '{fn_cls_is_active_promotions()}',					
						warehouses: {if $addons.warehouses.status=="A"}true{else}false{/if},						
						clsm_motivation: {if $search_motivation}JSON.parse('{$search_motivation nofilter}'){else}false{/if},						
						result_ids: '{$cls_settings.custom_result_ids}',
						timeout: {$cls_settings.search_delay|default:500},
						show_clear_btn:	'{$cls_settings.show_clear_btn|default:'Y'}',				
					}
				);
			}catch(e){
				console.log(e);
			}
			{if $addons.age_verification.status=="A"}		
				$("form[name='search_form']:not(.clsInited)", context).append('<input type="hidden" name="age_verification" value="{$smarty.session.auth.age}">');
			{/if}		
		}
		$.extend(Tygh.lang, {
			clsShowMore: "{__("cls.show_more")|strip}",
			clsShowAll: "{__("cls.show_all")|strip}",
			clsTotalFound: "{__("cls.total_found")}",
			clsFeaturedProducts: "{__("cls.featured_products")|strip}",
			clsFoundProducts: "{__("cls.found_products")|strip}",
			clsBrowseByCategories: "{__("cls.browse_products_by_category")|strip}",
			clsBackToCats: "{__("cls.back_to_all_cats")|strip}",
			clsStorefrontsCats: "{__("cls.storefronts_categories")|strip}",
			clsTextPages: "{__("cls.text_pages_and_blog")|strip}",
			clsBrands: "{__("cls.brand_pages")|strip}",
			clsVendors: "{__("cls.vendor_pages")|strip}",
			clsPorposeCorrection: "{__("cls.porpose_correction")|strip}",
			clsPopularSearchs: "{__("cls.popular_searches")|strip}",
			clsCategories: "{__("cls.found_categories")|strip}",
			clsProductCode: "{__("cls.product_code")|strip}",
			clsEnterSymbols: "{__("cls.enter_more_symbols", [{$cls_settings.characters_limit}])}",
			clsNothingFound: {if $cls_settings.search_products=="Y"}"{__("cls.nothing_found")|strip}"{else}"{__("search_results")|strip}:"{/if},
			clsQuickView: "{__("cls.quick_view")|strip}",
			clsAddToCart: "{__("cls.add_to_cart")|strip}",
			clsAddToWish: "{__("cls.add_to_wishlist")|strip}",
			clsAddCompare: "{__("cls.add_to_compare")|strip}",
			clsUserLastQueries: "{__("cls.user_last_queries")|strip}",					
			clsSelectOptions: "{__("cls.select_product_options")|strip}",
			clsAuthUsersOnly: "{__("cls.auth_users_only")|strip}",
		});	
	  
	})(Tygh, Tygh.$);
</script>