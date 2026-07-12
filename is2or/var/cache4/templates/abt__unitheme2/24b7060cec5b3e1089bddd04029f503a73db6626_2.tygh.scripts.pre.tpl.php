<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:36
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/csc_live_search/hooks/index/scripts.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345280ebd542_25310583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24b7060cec5b3e1089bddd04029f503a73db6626' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/csc_live_search/hooks/index/scripts.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345280ebd542_25310583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cls.show_more','cls.show_all','cls.total_found','cls.featured_products','cls.found_products','cls.browse_products_by_category','cls.back_to_all_cats','cls.storefronts_categories','cls.text_pages_and_blog','cls.brand_pages','cls.vendor_pages','cls.porpose_correction','cls.popular_searches','cls.found_categories','cls.product_code','cls.enter_more_symbols','cls.nothing_found','search_results','cls.quick_view','cls.add_to_cart','cls.add_to_wishlist','cls.add_to_compare','cls.user_last_queries','cls.select_product_options','cls.auth_users_only','cls.show_more','cls.show_all','cls.total_found','cls.featured_products','cls.found_products','cls.browse_products_by_category','cls.back_to_all_cats','cls.storefronts_categories','cls.text_pages_and_blog','cls.brand_pages','cls.vendor_pages','cls.porpose_correction','cls.popular_searches','cls.found_categories','cls.product_code','cls.enter_more_symbols','cls.nothing_found','search_results','cls.quick_view','cls.add_to_cart','cls.add_to_wishlist','cls.add_to_compare','cls.user_last_queries','cls.select_product_options','cls.auth_users_only'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/csc_live_search/func.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/csc_live_search/compatibility.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('cls_settings', fn_cls_get_settings());?>

<?php $_smarty_tpl->_assignInScope('search_motivation', fn_csc_live_search_get_storefront_motivation());
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
						block_enter: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['block_enter_press'], ENT_QUOTES, 'UTF-8');?>
",
						characters_limit: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['characters_limit'], ENT_QUOTES, 'UTF-8');?>
,		
						currency: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'UTF-8');?>
",				
						curl: "<?php echo $_smarty_tpl->tpl_vars['config']->value['current_url'];?>
",
						runtime_company_id: "<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['runtime']->value['company_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
",
						runtime_storefront_id: "<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['runtime']->value['storefront_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
",
						sl: '<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
						url: '<?php echo htmlspecialchars((string) fn_get_cls_url(), ENT_QUOTES, 'UTF-8');?>
',
						clsm_redirect_category: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['clsm_redirect_category'], ENT_QUOTES, 'UTF-8');?>
",
						check_promotion: '<?php echo htmlspecialchars((string) fn_cls_is_active_promotions(), ENT_QUOTES, 'UTF-8');?>
',					
						warehouses: <?php if ($_smarty_tpl->tpl_vars['addons']->value['warehouses']['status'] == "A") {?>true<?php } else { ?>false<?php }?>,						
						clsm_motivation: <?php if ($_smarty_tpl->tpl_vars['search_motivation']->value) {?>JSON.parse('<?php echo $_smarty_tpl->tpl_vars['search_motivation']->value;?>
')<?php } else { ?>false<?php }?>,						
						result_ids: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['custom_result_ids'], ENT_QUOTES, 'UTF-8');?>
',
						timeout: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['search_delay'] ?? null)===null||$tmp==='' ? 500 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
						show_clear_btn:	'<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['show_clear_btn'] ?? null)===null||$tmp==='' ? 'Y' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',				
					}
				);
			}catch(e){
				console.log(e);
			}
			<?php if ($_smarty_tpl->tpl_vars['addons']->value['age_verification']['status'] == "A") {?>		
				$("form[name='search_form']:not(.clsInited)", context).append('<input type="hidden" name="age_verification" value="<?php echo htmlspecialchars((string) $_SESSION['auth']['age'], ENT_QUOTES, 'UTF-8');?>
">');
			<?php }?>		
		}
		$.extend(Tygh.lang, {
			clsShowMore: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.show_more")), ENT_QUOTES, 'UTF-8');?>
",
			clsShowAll: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.show_all")), ENT_QUOTES, 'UTF-8');?>
",
			clsTotalFound: "<?php echo $_smarty_tpl->__("cls.total_found");?>
",
			clsFeaturedProducts: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.featured_products")), ENT_QUOTES, 'UTF-8');?>
",
			clsFoundProducts: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.found_products")), ENT_QUOTES, 'UTF-8');?>
",
			clsBrowseByCategories: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.browse_products_by_category")), ENT_QUOTES, 'UTF-8');?>
",
			clsBackToCats: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.back_to_all_cats")), ENT_QUOTES, 'UTF-8');?>
",
			clsStorefrontsCats: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.storefronts_categories")), ENT_QUOTES, 'UTF-8');?>
",
			clsTextPages: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.text_pages_and_blog")), ENT_QUOTES, 'UTF-8');?>
",
			clsBrands: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.brand_pages")), ENT_QUOTES, 'UTF-8');?>
",
			clsVendors: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.vendor_pages")), ENT_QUOTES, 'UTF-8');?>
",
			clsPorposeCorrection: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.porpose_correction")), ENT_QUOTES, 'UTF-8');?>
",
			clsPopularSearchs: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.popular_searches")), ENT_QUOTES, 'UTF-8');?>
",
			clsCategories: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.found_categories")), ENT_QUOTES, 'UTF-8');?>
",
			clsProductCode: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.product_code")), ENT_QUOTES, 'UTF-8');?>
",
			clsEnterSymbols: "<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['characters_limit'], ENT_QUOTES, 'UTF-8');
$_prefixVariable40 = ob_get_clean();
echo $_smarty_tpl->__("cls.enter_more_symbols",array($_prefixVariable40));?>
",
			clsNothingFound: <?php if ($_smarty_tpl->tpl_vars['cls_settings']->value['search_products'] == "Y") {?>"<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.nothing_found")), ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>"<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("search_results")), ENT_QUOTES, 'UTF-8');?>
:"<?php }?>,
			clsQuickView: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.quick_view")), ENT_QUOTES, 'UTF-8');?>
",
			clsAddToCart: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.add_to_cart")), ENT_QUOTES, 'UTF-8');?>
",
			clsAddToWish: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.add_to_wishlist")), ENT_QUOTES, 'UTF-8');?>
",
			clsAddCompare: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.add_to_compare")), ENT_QUOTES, 'UTF-8');?>
",
			clsUserLastQueries: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.user_last_queries")), ENT_QUOTES, 'UTF-8');?>
",					
			clsSelectOptions: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.select_product_options")), ENT_QUOTES, 'UTF-8');?>
",
			clsAuthUsersOnly: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.auth_users_only")), ENT_QUOTES, 'UTF-8');?>
",
		});	
	  
	})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/hooks/index/scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_live_search/hooks/index/scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/csc_live_search/func.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/csc_live_search/compatibility.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('cls_settings', fn_cls_get_settings());?>

<?php $_smarty_tpl->_assignInScope('search_motivation', fn_csc_live_search_get_storefront_motivation());
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
						block_enter: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['block_enter_press'], ENT_QUOTES, 'UTF-8');?>
",
						characters_limit: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['characters_limit'], ENT_QUOTES, 'UTF-8');?>
,		
						currency: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'UTF-8');?>
",				
						curl: "<?php echo $_smarty_tpl->tpl_vars['config']->value['current_url'];?>
",
						runtime_company_id: "<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['runtime']->value['company_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
",
						runtime_storefront_id: "<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['runtime']->value['storefront_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
",
						sl: '<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
						url: '<?php echo htmlspecialchars((string) fn_get_cls_url(), ENT_QUOTES, 'UTF-8');?>
',
						clsm_redirect_category: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['clsm_redirect_category'], ENT_QUOTES, 'UTF-8');?>
",
						check_promotion: '<?php echo htmlspecialchars((string) fn_cls_is_active_promotions(), ENT_QUOTES, 'UTF-8');?>
',					
						warehouses: <?php if ($_smarty_tpl->tpl_vars['addons']->value['warehouses']['status'] == "A") {?>true<?php } else { ?>false<?php }?>,						
						clsm_motivation: <?php if ($_smarty_tpl->tpl_vars['search_motivation']->value) {?>JSON.parse('<?php echo $_smarty_tpl->tpl_vars['search_motivation']->value;?>
')<?php } else { ?>false<?php }?>,						
						result_ids: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['custom_result_ids'], ENT_QUOTES, 'UTF-8');?>
',
						timeout: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['search_delay'] ?? null)===null||$tmp==='' ? 500 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
						show_clear_btn:	'<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['show_clear_btn'] ?? null)===null||$tmp==='' ? 'Y' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',				
					}
				);
			}catch(e){
				console.log(e);
			}
			<?php if ($_smarty_tpl->tpl_vars['addons']->value['age_verification']['status'] == "A") {?>		
				$("form[name='search_form']:not(.clsInited)", context).append('<input type="hidden" name="age_verification" value="<?php echo htmlspecialchars((string) $_SESSION['auth']['age'], ENT_QUOTES, 'UTF-8');?>
">');
			<?php }?>		
		}
		$.extend(Tygh.lang, {
			clsShowMore: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.show_more")), ENT_QUOTES, 'UTF-8');?>
",
			clsShowAll: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.show_all")), ENT_QUOTES, 'UTF-8');?>
",
			clsTotalFound: "<?php echo $_smarty_tpl->__("cls.total_found");?>
",
			clsFeaturedProducts: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.featured_products")), ENT_QUOTES, 'UTF-8');?>
",
			clsFoundProducts: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.found_products")), ENT_QUOTES, 'UTF-8');?>
",
			clsBrowseByCategories: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.browse_products_by_category")), ENT_QUOTES, 'UTF-8');?>
",
			clsBackToCats: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.back_to_all_cats")), ENT_QUOTES, 'UTF-8');?>
",
			clsStorefrontsCats: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.storefronts_categories")), ENT_QUOTES, 'UTF-8');?>
",
			clsTextPages: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.text_pages_and_blog")), ENT_QUOTES, 'UTF-8');?>
",
			clsBrands: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.brand_pages")), ENT_QUOTES, 'UTF-8');?>
",
			clsVendors: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.vendor_pages")), ENT_QUOTES, 'UTF-8');?>
",
			clsPorposeCorrection: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.porpose_correction")), ENT_QUOTES, 'UTF-8');?>
",
			clsPopularSearchs: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.popular_searches")), ENT_QUOTES, 'UTF-8');?>
",
			clsCategories: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.found_categories")), ENT_QUOTES, 'UTF-8');?>
",
			clsProductCode: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.product_code")), ENT_QUOTES, 'UTF-8');?>
",
			clsEnterSymbols: "<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cls_settings']->value['characters_limit'], ENT_QUOTES, 'UTF-8');
$_prefixVariable41 = ob_get_clean();
echo $_smarty_tpl->__("cls.enter_more_symbols",array($_prefixVariable41));?>
",
			clsNothingFound: <?php if ($_smarty_tpl->tpl_vars['cls_settings']->value['search_products'] == "Y") {?>"<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.nothing_found")), ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>"<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("search_results")), ENT_QUOTES, 'UTF-8');?>
:"<?php }?>,
			clsQuickView: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.quick_view")), ENT_QUOTES, 'UTF-8');?>
",
			clsAddToCart: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.add_to_cart")), ENT_QUOTES, 'UTF-8');?>
",
			clsAddToWish: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.add_to_wishlist")), ENT_QUOTES, 'UTF-8');?>
",
			clsAddCompare: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.add_to_compare")), ENT_QUOTES, 'UTF-8');?>
",
			clsUserLastQueries: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.user_last_queries")), ENT_QUOTES, 'UTF-8');?>
",					
			clsSelectOptions: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.select_product_options")), ENT_QUOTES, 'UTF-8');?>
",
			clsAuthUsersOnly: "<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',$_smarty_tpl->__("cls.auth_users_only")), ENT_QUOTES, 'UTF-8');?>
",
		});	
	  
	})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
