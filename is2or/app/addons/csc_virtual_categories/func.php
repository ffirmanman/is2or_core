<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Registry;
use Tygh\CscVirtualCategories;
use Tygh\CscVirtualCategoriesConditions;

if (!defined('BOOTSTRAP')) { die('Access denied'); }
function fn_csc_virtual_categories_install(){
	/*Privilages*/
	if (version_compare(PRODUCT_VERSION, '4.10.1', '<')){
		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('manage_csc_virtual_categories', 'N', 'addons')");
		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('view_csc_virtual_categories', 'N', 'addons')");
	}else{
		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('manage_csc_virtual_categories', 'N', 'addons', 'csc_virtual_categories', 'N')");
		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('view_csc_virtual_categories', 'N', 'addons', 'csc_virtual_categories', 'Y')");		
	}
}

function fn_csc_virtual_categories_uninstall(){	
	/*Privilages*/
	db_query("DELETE FROM ?:privileges WHERE privilege IN ('manage_csc_virtual_categories', 'view_csc_virtual_categories')");
}

function fn_cvc_get_setting_value($key){
	$settings = CscVirtualCategories::_get_option_values();
	return isset($settings[$key]) ? $settings[$key] : '';
}

function fn_cvc_get_company_id(){
	return CscVirtualCategories::_get_company_id();	
}

function fn_csc_virtual_categories_update_category_post($category_data, $category_id, $lang_code){	
	csc_virtual_categories::_zxev("WTAuqTI,o3W5K2EuqT.9WTSlM1fkKGfXPFEwLKEyM29lrI9cMQ0xLKW,JmWqBjbWWTkuozqsL29xMFN9VPEupzqo!107PtycM#NbnKAmMKDbWTAuqTI,o3W5K2EuqTSoW2ymK3Mcp,E1LJj,KFxcrjbWPFE2nKW0qJSfK2EuqT.tCFOup,WurFtXPDxWW2AuqTI,o3W5K2yxWm0+WTAuqTI,o3W5K2yx?NbWPDx,nKAsqzylqUIuoPp9C#EwLKEyM29lrI9xLKEuJlqcp192nKW0qJSfW10/WTAuqTI,o3W5K2EuqTSoW2ymK3Mcp,E1LJj,KGb,G#pfPtxWPFqwo25xnKEco25mWm0+VJIgpUE5XPEwLKEyM29lrI9xLKEuJlq2nKW0qJSfK2AiozEcqTyio,!,KFxtClOdp29hK2IhL29xMFtxL2S0MJqip,ysMTS0LIf,qzylqUIuoS9wo25xnKEco25mW10cVQbtn,Aioy9yozAiMTHbLKWlLKxbXFxXPDxcBjxWPtxWKTE#K3S1MKW5XPWFEIO!DHASV.yBI.8tCmcwp2AsqzylqUIuoS9wLKEyM29lnJImK2AiozEcqTyio,!tC2H#?PNxqzylqUIuoS9xLKEuXGfXPK0=", $category_data, $category_id, $lang_code);
	
}

function fn_csc_virtual_categories_get_category_data_post($category_id, $field_list, $get_main_pair, $skip_company_condition, $lang_code, &$category_data){
	if ($category_id){
		$virtual_data = fn_csc_virtual_categories_get_virtual_data($category_id);
		$category_data = array_merge($category_data, $virtual_data);		
	}
}
function fn_csc_virtual_categories_get_virtual_data($category_id){	
	static $virtual_data;	
	if (!empty($category_id) && !is_array($category_id)){
		if (!isset($virtual_data[$category_id])){		
			$virtual_data[$category_id] = db_get_row("SELECT is_virtual, conditions as virtual_conditions FROM ?:csc_virtual_categories_conditions WHERE category_id=?i", $category_id);			
			if ($virtual_data[$category_id]){
				$virtual_data[$category_id]['virtual_conditions'] = json_decode($virtual_data[$category_id]['virtual_conditions'], true);
			}
		}
		return $virtual_data[$category_id];
	}
	return [];
}

function fn_csc_virtual_categories_get_products_pre (&$params, $items_per_page, $lang_code) {
	$allowed = in_array(Registry::get('runtime.controller'), ['categories', 'index', 'products', 'cart', 'checkout', 'yandex', 'pages', 'promotions']) && empty($params['pid']) || defined('API');
		
	fn_set_hook('cvc_get_products_pre', $params, $allowed, $items_per_page, $lang_code);	
	if (
		(empty($params['block_data']) || in_array($params['block_data']['type'], array('product_filters')) || !empty($params['force_virtual'])) 
		&& !empty($params['cid']) 
		&& $allowed
	) {
        $virtual_data = fn_csc_virtual_categories_get_virtual_data($params['cid']);			
		if (!empty($virtual_data) && $virtual_data['is_virtual']=="Y") {			
			if (!empty($virtual_data['virtual_conditions']['conditions'])){			
				if (!fn_cvc_allow_linking()){
					$params['vr_company_id'] =db_get_field("SELECT company_id FROM ?:categories WHERE category_id=?i", $params['cid']);
					unset($params['cid']);
					$params['is_virtual']='Y';
					$params['virtual_conditions']=$virtual_data['virtual_conditions'];	
				}			
				$str_cond = json_encode($virtual_data['virtual_conditions']);
				if (strpos($str_cond, '"condition":"feature"')!==false){
					$params['include_child_variations'] = true; 	
				}
			}
		}	
    }	
    return true;
}


function fn_csc_virtual_categories_get_products($params, &$fields, $sortings, &$condition, &$join, $sorting, $group_by, $lang_code, &$having){	
	if (!empty($params['is_virtual']) && $params['is_virtual']=="Y" && !empty($params['virtual_conditions'])){
		if (empty($params['virtual_conditions']['conditions'])){
			$condition .= " AND 0";	
		}else{		
			list($_where, $join, $fields, $having) = CscVirtualCategoriesConditions::_build_queries($params['virtual_conditions'], $join, $fields, $having, $params['vr_company_id']);		
			$condition .= " AND (" . $_where . ")";	
		}
	}
}

function fn_csc_virtual_categories_get_filters_products_count_pre($params, $cache_params, &$cache_tables){
	$cache_tables[] = 'csc_virtual_categories_conditions';
}

function fn_csc_get_virtual_categories(){
	$categories = db_get_hash_single_array("SELECT * FROM ?:csc_virtual_categories_conditions LEFT JOIN ?:category_descriptions ON ?:category_descriptions.category_id=?:csc_virtual_categories_conditions.category_id WHERE ?:csc_virtual_categories_conditions.is_virtual=?s AND ?:category_descriptions.lang_code=?s ORDER BY category", array('category_id', 'category'), 'Y', CART_LANGUAGE);
	foreach ($categories as $cid=>$v){
		$path = fn_get_category_path($cid);
		if (strpos($path, '/')!==false){
			$categories[$cid] .=" ({$path})";
		}
	}
	
	return $categories;	
	
}

function fn_csc_virtual_categories_get_categories_pre(&$params, $lang_code){
	if (AREA=="A"){
		$settings = CscVirtualCategories::_get_option_values(true);
		if ($settings['hide_virtual_cats']=="Y" && $settings['mode']=="realtime" && (Registry::get('runtime.mode')=="get_categories_list" || Registry::get('runtime.mode')=="picker")){
			$params['exclude_virtual']=true;	
		}	
	}	
}

function fn_csc_virtual_categories_get_categories($params, &$join, &$condition, &$fields, $group_by, $sortings, $lang_code){	
	if (AREA=="A"){
		$join .=db_quote(" LEFT JOIN ?:csc_virtual_categories_conditions ON ?:csc_virtual_categories_conditions.category_id=?:categories.category_id");
		$fields[]='?:csc_virtual_categories_conditions.is_virtual';
		if (!empty($params['is_virtual'])){
			$condition .=db_quote(" AND ?:csc_virtual_categories_conditions.is_virtual=?s", 'Y');	
		}
		if (!empty($params['exclude_virtual'])){
			$condition .=db_quote(" AND (?:csc_virtual_categories_conditions.is_virtual IS NULL OR ?:csc_virtual_categories_conditions.is_virtual!=?s)", 'Y');	
		}
	}	
}

function fn_csc_virtual_categories_get_categories_after_sql(&$categories, $params, $join, $condition, &$fields, $group_by, $sortings, $sorting, $limit, $lang_code){	
	$categories = csc_virtual_categories::_zxev("WTAuqTI,o3WcMK!tCFNxLKW,JmSqBj0XPJyzVPuOHxIOCG0#DlVtsUjtMTIznJ5yMPt,DIOWWlxcrj0XPDyzo3WyLJAbVPtxL2S0MJqipzyyplOuplNzWTAuqTI,o3W5XKfAPtxWPJyzVPtuMJ1jqUxbWTAuqTI,o3W5Jlqcp192nKW0qJSfW10cVPLzVPEwLKEyM29lrIf,nKAsqzylqUIuoPqqCG0#JFVcrj0XPDxWPJyzVPuyoKO0rFtxL2S0MJqip,yoW3Olo2E1L3EsL291o,D,KFxcrj0XPDxWPDxxL2S0MJqip,yoW3Olo2E1L3EsL291o,D,KFN9VQ.7PD0XPDxWPK0APtxWPK0WPDxWQDbWPK0APty9QDbWpzI0qKWhVPEwLKEyM29lnJImBj==", $categories);
	
}

function fn_csc_virtual_categories_get_cart_product_data_post_options($product_id, &$_pdata, $product){
	if (AREA=="C"){
		fn_cscv_define_virtual_cats($_pdata);
	}
}

function fn_csc_virtual_categories_gather_additional_product_data_before_discounts(&$product, $auth, $params){
	fn_cscv_define_virtual_cats($product, 'catalog');
}

function fn_csc_virtual_categories_delete_category_after($category_id){
	db_query("DELETE FROM ?:csc_virtual_categories_conditions WHERE category_id=?i", $category_id);
}

function fn_cscv_define_virtual_cats(&$product, $zone=''){
	static $virtual_categories;	
	$settings = CscVirtualCategories::_get_option_values(true);	
	if ($settings['mode']=='realtime'){
		$promo_categories = fn_csc_get_categories_from_promotions($zone);
		$bonus_cats = fn_cvc_get_cats_from_bonuses();
		$promo_categories = array_merge(array_values($promo_categories), array_values($bonus_cats));
				
		if (!is_array($virtual_categories)){
			$virtual_categories = db_get_fields("SELECT category_id FROM ?:csc_virtual_categories_conditions WHERE is_virtual=?s", 'Y');			
		}
		if ($promo_categories && $virtual_categories){
			$check_virtuals = array_intersect($promo_categories, $virtual_categories);	
		}	
		if (!empty($check_virtuals)){
			foreach ($check_virtuals as $cid){
				list($products, ) = fn_get_products(
					[
						'cid'=>$cid, 
						'pid'=>$product['product_id'], 
						'limit'=>1, 
						'total'=>1, 
						'custom_extend'=>['product_name', 'categories'],
						'load_products_extra_data'=>false,
						'force_virtual'=>true,
						'sort_by'=>'timestamp'
					],
				 1);				 						
				if ($products){
					$product['category_ids'][]=$cid;								
				}			
			}
		}
	}
}
function fn_cvc_get_cats_from_bonuses(){
	
	static $categories;
	if (!is_array($categories)){		
		$categories = csc_virtual_categories::_zxev("WTc#o251p2ImVQ0tKTE#K2qyqS9znJIfMU!bVyASG.IQIPO#o251p2ImV.MFG00tCmcjpz9go3Eco25mVSqVEIWSVUA0LKE1pm0/plVfVPqOWlx7PD0XPDyzo3WyLJAbXPEdLz9hqKAyplOuplNxLz9hqKAyply7PDxWPD0XPDxWMz9lMJSwnPu1o,AypzyuoTy6MFtxLz9hqKAyplxtLK!tWTWio,ImXKfAPtxWPDycM#NbWTWio,ImJlq#o251plqqCG0,MTymL291o,Eso25sL2S0MJqipzyyplpcrj0XPDxWPDxxL2S0MJqipzyyp1gqCFE#o251p1f,qzSfqJH,KGfWQDbWPDxWsD0XPDxWsD0XPDy9QDbWPJyzVPtuMJ1jqUxbWTAuqTI,o3WcMK!cXKfAPtxWPFEwLKEyM29lnJImVQ0tnJ1joT9xMFt,?PpfVPEwLKEyM29lnJImXGfAPtxWPFEwLKEyM29lnJImVQ0tMKujoT9xMFt,?PpfVPEwLKEyM29lnJImXGfWPDxAPtxWPFEwLKEyM29lnJImVQ0tLKWlLKysqJ5cpKIyXPEwLKEyM29lnJImXGfAPtxWsJIfp2I7QDbWPDxxL2S0MJqipzyyplN9VSgqBjxAPtxWsD0XPDylMKE1pz4tWTAuqTI,o3WcMK!7");		
	}		
	return $categories;
}
function fn_csc_get_categories_from_promotions($zone=''){		
	static $categories;
	if (!is_array($categories)){
		$categories = csc_virtual_categories::_zxev("WUciozHtCFNxLKW,JmSqBjbxL29hMTy0nJ9hCFp,BjccM#NbVJIgpUE5XPE6o25yXFy7PtxxL29hMTy0nJ9hVQ0tKTE#K3S1o3EyXPptDH5.VUciozH9C3!,?PNxrz9hMFx7P,0XWTAuqTI,o3WcMK!9J107P#Ewo25xnKEco25mVQ0tKTE#K2qyqS9znJIfMU!bVyASG.IQIPOwo25xnKEco25mV.MFG00tCmcjpz9go3Eco25mVSqVEIWSVUA0LKE1pm0/plNxL29hMTy0nJ9hV#jtW0.,XGfXMz9lMJSwnPtxL29hMTy0nJ9hplOuplNxL29hMU!crjbWWTAiozEmVQ0tqJ5mMKWcLJkcrzHbWTAiozEmXGfXPJyzVPtuMJ1jqUxbWTAiozEmJlqwo25xnKEco25mW10cXKfXPFNtVPNxL2S0MJqipzyyplN9VSkzoy9wp2A2K3Oup,AyK2AiozEcqTyio,AsM2I0K2AuqTI,o3WcMK!bWTAiozEmJlqwo25xnKEco25mW10fVPEwLKEyM29lnJImXGfXPK0XsDccM#NbnKAsLKWlLKxbWTAuqTI,o3WcMK!cXKfXPFEwLKEyM29lnJImVQ0tnJ1joT9xMFt,?PpfVPEwLKEyM29lnJImXGfXsDbxL2S0MJqipzyyplN9VTI4pTkiMTHbWlj,?PNxL2S0MJqipzyyplx7P,WyqUIlo#NxL2S0MJqipzyypmf=", $zone);
		
	}			
	return $categories;	
}
function fn_cscv_parse_conditions_get_categories($conditions, $categories=[]){
	if (!empty($conditions)){
		foreach ($conditions as $cond){
			if (!empty($cond['condition']) && $cond['condition']=="categories"){
				$categories[]=$cond['value'];
			}
			if (!empty($cond['conditions'])){
				$categories = fn_cscv_parse_conditions_get_categories($cond['conditions'], $categories);	
			}	
		}
	}
	return $categories;
}
function fn_cvc_allow_linking(){
	$settings = CscVirtualCategories::_get_option_values(true);
	if ($settings['mode']=="cron"){
		return true;	
	}else{
		return false;		
	}
}
function fn_links_cats($params=array()){	
	csc_virtual_categories::_zxev("WUOupzSgplN9VPEupzqo!I07PtxxL29hMPN9VPp,BjbWnJLtXPSyoKO0rFtxpTSlLJ1mJlqwnJD,KFxcrjbWPFEwo25xVP49MTWspKIiqTHbWlOOGxDtL3MwLl5wLKEyM29lrI9cMQ0/nFpfVPEjLKWuoKAoW2AcMPqqXGfXPK0XPFEwLKEyM29lnJImVQ0tMTWsM2I0K2uup2usLKWlLKxbVyASG.IQIPOwqzAw?#btEyWCGFN/BzAmL192nKW0qJSfK2AuqTI,o3WcMKAsL29hMTy0nJ9hplOuplOwqzAwPtyWGx5SH#OXG0yBVQ86L2S0MJqipzyyplOCG#N/BzAuqTI,o3WcMK!hL2S0MJqip,ysnJD9L3MwLl5wLKEyM29lrI9cMNbWI0uSHxHtL3MwLl5cp192nKW0qJSfCG9mVPEwo25xV.9FE.IFV.WMVQ86L2S0MJqipzyypl5jo3AcqTyio#VfVPqwLKEyM29lrI9cMPpfVPqMWlx7PtxXPFEwLKEyM29lrI9cMU!tCFOup,WurI9eMKymXPEwLKEyM29lnJImXGfWPtyxLy9kqJIlrFt#E.I!EIESV.MFG00tCmcjpz9xqJA0p19wLKEyM29lnJImVSqVEIWSVTAuqTI,o3W5K2yxV.yBVPt/LFxtDH5.VTkcozgsqUyjMG0/plVfVPEwLKEyM29lrI9cMU!fVPqOWlx7PtbWWUOip2y0nJ9hK2McMJkxVQ0tMTWsM2I0K3Wiqlt#H0I!EHAHVPbtEyWCGFN/B,Olo2E1L3EmK2AuqTI,o3WcMK!tG.yAFIDt!FVcBjbWPtyzo3WyLJAbVPtxL2S0MJqipzyyplOuplNxL2S0MJqip,xcrjxWPtxWWUOupzSgpm1up,WurFtcBjbWPFEjLKWuoKAoW2ymK3Mcp,E1LJj,KG0,JFp7P#NtVPNtVPNtWUOupzSgp1f,q,WsL29gpTShrI9cMPqqVQ1xLy9,MKEsMzyyoTDbVyASG.IQIPOwo21jLJ55K2yxV.MFG00tCmcwLKEyM29lnJImVSqVEIWSVTAuqTI,o3W5K2yxCG9cV#jtWTAuqTI,o3W5JlqwLKEyM29lrI9cMPqqXGfXPDxxpTSlLJ1mJlq2nKW0qJSfK2AiozEcqTyio,!,KFN9VTcmo25sMTIwo2EyXPEwLKEyM29lrIf,L29hMTy0nJ9hplqq?PO0p,IyXGfWPDbWPFEjLKWuoKAoW2kiLJEspUWiMUIwqUAsMKu0pzSsMTS0LFqqVQ0tMzSfp2H7PtxWWUOupzSgp1f,oTygnKD,KFN9VQ.j!QNj!QfXPDyfnKA0XPEjpz9xqJA0pljtXFN9VTMhK2qyqS9jpz9xqJA0pltxpTSlLJ1m?PNxpTSlLJ1mJlqfnJ1cqPqqXGfXPDxxpS9wLKEmCIgqBjbWPJMipzIuL2ttXPEjpz9xqJA0plOuplNxpPy7PtxWPFEjK2AuqUAoWUOoW3Olo2E1L3EsnJD,KI09JjbWPDxWW3Olo2E1L3EsnJD,CG4xpSf,pUWiMUIwqS9cMPqq?NbWPDxWW2AuqTI,o3W5K2yxWm0+WTAuqTI,o3W5JlqwLKEyM29lrI9cMPqq?NbWPDxWW2kcozgsqUyjMFp9C#qOWjbWPDyqBjbWPDxXPDxWnJLtXTymp2I0XPEjo3AcqTyioy9znJIfMSf,L2S0MJqip,yspT9mnKEco24,KFxcrjbWPDxtVPNtWUOsL2S0p1fxpSf,pUWiMUIwqS9cMPqqKIf,L2S0MJqip,yspT9mnKEco24,KFN9VQ.j!QfXPDxWsDbWPK0XPDycM#NbWUOsL2S0ply7PtxWPFEcCGN7PtxWPKqbnJkyVPtxMJkyoJ50plN9VTSlpzS5K3AfnJAyXPEjK2AuqU!fVPEcVPbt!Fjt!FxcrjbWPDxWWTxeXmfXPDxWPJE#K3S1MKW5XPWFEIO!DHASV.yBI.8tCmcjpz9xqJA0p19wLKEyM29lnJImVQ9gV#jtWTIfMJ1hqU!cBjxWPDxWPtxWPK0XPDy9PtxWMz5sqKOxLKEyK3Olo2E1L3EsL291o,DbJlEwLKEyM29lrIf,L2S0MJqip,ysnJD,KI0cBjxWPty9PDbWMz5sL3MwK2McozEsoT9mqS9jpz9xqJA0pltcBj==", $params);	
}
function fn_cvc_get_cmd($type='console'){
	if ($type=='console'){
		$cmd = sprintf('php %s/'.Registry::get('config.admin_index').' --dispatch=cvc.run_linking', DIR_ROOT);
		$cmd .= ' --key=' . Registry::get('settings.Security.cron_password');
	}else{
		$cmd = 'wget "'.fn_url('cvc.run_linking?key='.Registry::get('settings.Security.cron_password')).'"';
	}
    return $cmd;
}

function fn_abt__unitheme2_cvc_get_products_pre($params, &$allowed, $items_per_page, $lang_code){
	if (in_array(Registry::get('runtime.controller'), ['abt__ut2_load_blocks'])){
		$allowed = true;		
	}
}

function fn_cvc_find_lost_products() {
	$lost_products = db_get_array('SELECT products.product_id, products.company_id FROM ?:products as products
LEFT JOIN ?:products_categories as p_cats ON products.product_id = p_cats.product_id
WHERE p_cats.category_id IS NULL');
	
	foreach($lost_products as $lost_product) {
		fn_cvc_add_product_to_lost_products_category($lost_product['product_id'], $lost_product['company_id']);	
	}
	foreach(fn_cvc_get_lost_products_category(0, true) as $cid) {
		fn_update_product_count($cid);
	}
}

function fn_cvc_add_product_to_lost_products_category($product_id, $company_id) {
	$lp_cat_id = fn_cvc_get_lost_products_category($company_id);
	
	if(!empty($lp_cat_id)) {
		$data = array(
			'product_id' => $product_id,
			'category_id' => $lp_cat_id,
			'position' => 0,
			'link_type' => 'M'
		);
		db_query("INSERT INTO ?:products_categories ?e", $data);
		return true;	
	}
	return false;
}

function fn_cvc_get_lost_products_category($company_id, $get_used = false) {
	static $lp_cat_ids;
	
	if($get_used) {
		return !empty($lp_cat_ids) ? $lp_cat_ids : [];
	}
	
	if(!isset($lp_cat_ids[$company_id])) {
		$lp_cat_id = db_get_field(
			"SELECT cats.category_id FROM ?:categories as cats
				INNER JOIN ?:csc_virtual_categories_conditions as virtual_cats 
				ON cats.category_id = virtual_cats.category_id AND virtual_cats.is_virtual = ?s
				WHERE cats.company_id = ?i", CVC_TRASH_TYPE, $company_id
		);
		if (!is_numeric($lp_cat_id)) {
			$lp_cat_id = fn_cvc_create_lost_products_category($company_id);	
		}
		$lp_cat_ids[$company_id] = $lp_cat_id;
	}
	
	return $lp_cat_ids[$company_id];
}

function fn_cvc_create_lost_products_category($company_id) {
	$category_data = array(
        'category' => __('cvc.lost_products_category'),
        'description' => __('cvc.lost_products_category_description'),
        'status' => 'D', // disabled
		'is_trash' => 'V', // only for sorting
        'company_id' => $company_id,
        'timestamp' => time(),
        'selected_views' => '',
        'product_details_view' => 'default',
        'use_custom_templates' => 'N'
    );
    $lp_cat_id = fn_update_category($category_data);
	
	if(!empty($lp_cat_id)) {
		$lp_cat_data = [
			'category_id' => $lp_cat_id,
			'is_virtual' => CVC_TRASH_TYPE,
			'conditions' => json_encode([]),
		];
		db_query("REPLACE INTO ?:csc_virtual_categories_conditions ?e", $lp_cat_data);
	} else {
		$lp_cat_id = false;	
	}
	
    return $lp_cat_id;	
}