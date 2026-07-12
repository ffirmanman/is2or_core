<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
namespace Tygh;
use Tygh\Registry;
class CscVirtualCategoriesConditions{	
	public static $operators=array(
		'1' => array(
			'eq' => '=',
			'neq' => '<>',
			'lte' => '<=',
			'gte' => '>=',
			'lt' => '<',
			'gt' => '>',
			'in' => 'IN',
			'nin' => 'NOT IN',
			'like'=>'LIKE',
			'nlike'=> 'NOT LIKE'
		),
		'0' => array(
			'eq' => '<>',
			'neq' => '=',
			'lte' => '>',
			'gte' => '<',
			'lt' => '>=',
			'gt' => '<=',
			'in' => 'NOT IN',
			'nin' => 'IN',
			'like'=>'NOT LIKE',
			'nlike'=> 'LIKE'
		)
	);
			
	public static function _build_queries($conditions, $join, &$fields, $having, $vr_company_id=0){	
		$operators = self::$operators;
		if ($conditions['set'] == 'all') {
			$where = '1';
			$glue = 'AND';
		} else {
			$where = '0';
			$glue = 'OR';
		}		
		
		if (!empty($conditions['conditions'])) {
			foreach ($conditions['conditions'] as $condition) {
				if (empty($condition)){
					continue;	
				}
				if (isset($condition['set']) ) {
					if (isset($condition['conditions'])){
						list($sub_where, $join, $fields, $having) = self::_build_queries($condition, $join, $fields, $having, $vr_company_id);
						$where .= db_quote(' ?p (?p)', $glue, $sub_where);
					}
				} elseif ($condition['condition'] == 'price') {					
					self::_price($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'discount_prc') {					
					self::_discount_prc($condition, $where, $join, $glue, $conditions, $fields, $having);															
				} elseif ($condition['condition'] == 'categories') {
					self::_categories($condition, $where, $join, $glue, $conditions, $fields, $having, $vr_company_id);								
				} elseif ($condition['condition'] == 'products') {
					self::_products($condition, $where, $join, $glue, $conditions, $fields, $having);					
				} elseif ($condition['condition'] == 'feature') {
					self::_features($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'product_timestamp') {	
					self::_product_timestamp($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'product_days') {	
					self::_product_days($condition, $where, $join, $glue, $conditions, $fields, $having);						
				} elseif ($condition['condition'] == 'avg_rating') {	
					self::_avg_rating($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'product_weight') {	
					self::_product_weight($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'product_name') {	
					self::_product_name($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'product_amount') {	
					self::_product_amount($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'product_popularity') {	
					self::_product_popularity($condition, $where, $join, $glue, $conditions, $fields, $having);	
				} elseif ($condition['condition'] == 'product_sales') {	
					self::_product_sales($condition, $where, $join, $glue, $conditions, $fields, $having);					
				} elseif ($condition['condition'] == 'reviews_count') {	
					self::_reviews_count($condition, $where, $join, $glue, $conditions, $fields, $having);
				} elseif ($condition['condition'] == 'last_review_days') {	
					self::_last_review_days($condition, $where, $join, $glue, $conditions, $fields, $having);						
				} elseif ($condition['condition'] == 'vendor') {	
					self::_vendor($condition, $where, $join, $glue, $conditions, $fields, $having);											
				}elseif ($condition['condition'] == 'supplier') {	
					self::_supplier($condition, $where, $join, $glue, $conditions, $fields, $having);											
				}
												
				fn_set_hook('csc_virtual_categories_build_queries', $condition, $where, $join, $glue, $conditions, $vr_company_id, $fields);				
			}
		}
				
		return array($where,  $join, $fields, $having);
	}
	private static function _features($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;
		$table_id = 'pfv_'.$condition['condition_element'];
		$condition_query = self::_build_features($table_id, $operators[$conditions['set_value']][$condition['operator']], $condition['condition_element'], $condition['value']);
		if (!empty($condition_query)) {
			$where .= db_quote(" ?p ?p", $glue, $condition_query);
			if (strpos($join, $table_id)===false){
				$join .= db_quote(" LEFT JOIN ?:product_features_values AS $table_id ON $table_id.product_id = products.product_id AND $table_id.feature_id = ?i", $condition['condition_element']);
			}
		}
	}
	
	private static function _price($condition, &$where, &$join, $glue, $conditions, &$fields, &$having){
		$operators = self::$operators;	
		$cond =  db_quote(' ?p prices.price ?p ?d', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);				
		
		if (strpos($join, 'product_prices')===false || strpos($join, ' prices ')===false){
			$join .= db_quote(' LEFT JOIN ?:product_prices as prices ON prices.product_id = products.product_id AND prices.lower_limit = 1 AND prices.usergroup_id =?i', 0);	
		}
		if (fn_allowed_for('ULTIMATE') && Registry::get('runtime.company_id') && strpos($join, 'cvc_shared_prices')===false){
			 $join .= db_quote(" LEFT JOIN ?:ult_product_prices as cvc_shared_prices ON cvc_shared_prices.product_id = products.product_id AND cvc_shared_prices.lower_limit = 1 AND prices.usergroup_id =?i AND cvc_shared_prices.company_id = ?i", 0, Registry::get('runtime.company_id'));
			 $cond =  db_quote(' ?p CASE WHEN cvc_shared_prices.price IS NULL THEN prices.price ELSE cvc_shared_prices.price END ?p ?d', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);			 	
		}
		
		$where .=$cond;
		
	}
	private static function _discount_prc($condition, &$where, &$join, $glue, $conditions, &$fields, &$having){
		$operators = self::$operators;
		if (strpos($join, 'product_prices')===false){
			$join .= db_quote(' LEFT JOIN ?:product_prices as prices ON prices.product_id = products.product_id AND prices.lower_limit = 1 AND prices.usergroup_id =?i', 0);	
		}
		
		if (empty($fields['cvc_sales_discount'])) {	           
			$fields['cvc_sales_discount'] = "temp_prices.cvc_sales_discount";
			
			$field = 'MAX(100 - ((CASE WHEN prices.price > 0 THEN prices.price ELSE 0.01 END * 100) / CASE WHEN products.list_price > 0 THEN products.list_price ELSE 0.01 END)) AS cvc_sales_discount';				
			
			$ult_join = '';
			if (fn_allowed_for('ULTIMATE') && Registry::get('runtime.company_id')){				
				$field = 'MAX(100 - ((CASE WHEN cvc_shared_prices.price IS NOT NULL AND cvc_shared_prices.price > 0 THEN cvc_shared_prices.price WHEN prices.price > 0 THEN prices.price ELSE 0.01 END * 100) / CASE WHEN products.list_price > 0 THEN products.list_price ELSE 0.01 END)) AS cvc_sales_discount';	
				$ult_join = db_quote(" LEFT JOIN ?:ult_product_prices as cvc_shared_prices ON cvc_shared_prices.product_id = products.product_id AND cvc_shared_prices.lower_limit = 1 AND prices.usergroup_id =?i AND cvc_shared_prices.company_id = ?i", 0, Registry::get('runtime.company_id'));					
			}			
			$join .= db_quote(
                " LEFT JOIN (SELECT products.product_id, $field FROM ?:product_prices as prices 
				LEFT JOIN ?:products as products ON products.product_id=prices.product_id
				$ult_join
				WHERE prices.lower_limit=1 AND prices.usergroup_id =?i
				GROUP BY products.product_id) as temp_prices ON temp_prices.product_id=products.product_id", 0);
        }
		$where .= db_quote(" ?p temp_prices.cvc_sales_discount ?p ?i", $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);			
		//$having[] = db_quote("cvc_sales_discount ?p ?i", $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
		
	}
	
	
	private static function _categories($condition, &$where, &$join, $glue, $conditions, &$fields, $having, $vr_company_id=0){
		$operators = self::$operators;
		$_where = '';		
		foreach (explode(',', $condition['value']) as $category_id) {
			$_where .= db_quote(" OR category_id = ?i OR id_path = ?i OR id_path LIKE ?s OR id_path LIKE ?s OR id_path LIKE ?s",
			$category_id, $category_id, $category_id.'/%', '%/'.$category_id, '%/'.$category_id.'/%');
		}		
		$cids = db_get_fields('SELECT category_id FROM ?:categories WHERE status IN (?n) AND (0 ?p)', array('A', 'H'), $_where);	
		$tname = '_' . preg_replace("/[^a-z]+/", "", md5('products_categories' . microtime()));		
		if ($cids){
			if (!$conditions['set_value']){
				$join .=db_quote(" LEFT JOIN (SELECT product_id, category_id FROM ?:products_categories WHERE category_id IN (?a)) as $tname ON $tname.product_id=products.product_id", $cids);
				if ($operators[$conditions['set_value']][$condition['operator']]=="IN"){
					$where .= db_quote(" ?p $tname.category_id IS NOT NULL", $glue);	
				}else{
					$where .= db_quote(" ?p $tname.category_id IS NULL", $glue);		
				}
			}else{
				$join .=db_quote(" LEFT JOIN ?:products_categories as $tname ON $tname.product_id=products.product_id");			
				$where .= db_quote(" ?p $tname.category_id ?p (?n)", $glue, $operators[$conditions['set_value']][$condition['operator']], $cids);	
			}
		}	
		if(fn_allowed_for("ULTIMATE")){
           $where .= db_quote(' AND ?:categories.company_id=?i', $vr_company_id); 
        }       
	}
	
	private static function _products($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;
		if (is_array($condition['value'])) {		
			$condition['value'] = implode(',', $condition['value']);
		}
		if (trim($condition['value'])){
			$where .= db_quote(' ?p products.product_id ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);	
		}
	}
	private static function _vendor($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;
		if (is_array($condition['value'])) {		
			$condition['value'] = implode(',', $condition['value']);
		}
		if (trim($condition['value'])){
			$where .= db_quote(' ?p products.company_id ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);	
		}
	}
	
	private static function _supplier($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;		
		if (is_array($condition['value'])) {		
			$condition['value'] = implode(',', $condition['value']);
		}
		
		if (trim($condition['value'])){	
			if (strpos($join, 'cvcsl')===false){	
				$join .=db_quote(" LEFT JOIN ?:supplier_links as cvcsl ON products.product_id=cvcsl.object_id AND cvcsl.object_type=?s", 'P');
			}
			$where .= db_quote(' ?p cvcsl.supplier_id ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);	
		}
	}
	
	private static function _product_name($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;		
		if (trim($condition['value'])){
			if (strpos($join, 'cvc_descr')===false){
				$join .= db_quote(" LEFT JOIN ?:product_descriptions as cvc_descr ON cvc_descr.product_id = products.product_id");
			}			
			$where .= db_quote(' ?p cvc_descr.product ?p ?l', $glue, $operators[$conditions['set_value']][$condition['operator']], '%'.$condition['value'].'%');	
		}
	}
	
	private static function _product_weight($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;		
		if (trim($condition['value'])!==false){
			$where .= db_quote(' ?p products.weight ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);	
		}		
	}
	private static function _product_amount($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;		
		if (trim($condition['value'])!==false){
			if (Registry::get('addons.warehouses.status')=="A"){
				if (strpos($join, 'cvc_wspa')===false){
					$join .=db_quote(" LEFT JOIN ?:warehouses_sum_products_amount as cvc_wspa ON cvc_wspa.product_id=products.product_id");
					if (fn_allowed_for('ULTIMATE') && $storefront_id = Registry::ifGet('runtime.storefront_id', 0)){
						$join .db_quote(" AND cvc_wspa.storefront_id=?i", $storefront_id);							
					}				
				}
				$where .= db_quote(
					' ?p (CASE products.is_stock_split_by_warehouses WHEN ?s'
					. ' THEN cvc_wspa.amount'
					. ' ELSE products.amount END) ?p (?p)', $glue, 'Y', $operators[$conditions['set_value']][$condition['operator']], $condition['value']);			
			}else{
				$where .= db_quote(' ?p products.amount ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);					
			}
		}		
	}
	private static function _product_popularity($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;		
		if (trim($condition['value'])!==false){	
			if (strpos($join, 'cvc_popularity')===false){		
				$join .= db_quote(" LEFT JOIN ?:product_popularity as cvc_popularity ON cvc_popularity.product_id = products.product_id");
			}
			$where .= db_quote(' ?p cvc_popularity.total ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);	
		}		
	}
	private static function _product_sales($condition, &$where, &$join, $glue, $conditions, &$fields, &$having){
		$operators = self::$operators;		
		if (trim($condition['value'])!==false){	
			if (strpos($join, 'cvc_product_sales')===false){		
				$join .= db_quote(" LEFT JOIN ?:product_sales as cvc_product_sales ON cvc_product_sales.product_id = products.product_id AND cvc_product_sales.category_id = products_categories.category_id");
			}			
			$where .= db_quote(' ?p cvc_product_sales.amount ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);	
		}		
	}
	private static function _product_timestamp($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;
		$condition['value'] = fn_parse_date($condition['value']);
		$where .= db_quote(' ?p products.timestamp ?p (?p)', $glue, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);	
		
	}
	private static function _product_days($condition, &$where, &$join, $glue, $conditions, &$fields, $having){
		$operators = self::$operators;
		$where .= db_quote(' ?p ?p ?p  products.timestamp ', $glue, 		
			TIME - ($condition['value'] * 3600 * 24),
			$operators[$conditions['set_value']][$condition['operator']]
		);		
	}
	private static function _avg_rating($condition, &$where, &$join, $glue, $conditions, &$fields, &$having){
		$operators = self::$operators;
		if (version_compare(PRODUCT_VERSION, '4.13.1', '>=') && Registry::get('addons.product_reviews.status')=="A"){
			$fields[] = 'AVG(cvc_product_reviews.rating_value) AS cvc_average_rating';
			if (strpos($join, 'cvc_product_reviews')===false){				
				if ( Registry::get('addons.product_reviews.split_reviews_for_variations_as_separate_products')=="Y"){
					$join .= db_quote(" LEFT JOIN ?:product_reviews as cvc_product_reviews ON cvc_product_reviews.product_id = products.product_id AND cvc_product_reviews.status = ?s", "A");
				}else{
					$join .= db_quote(" 
						LEFT JOIN ?:product_variation_group_products as cvc_pvgp ON cvc_pvgp.product_id=products.product_id					
						LEFT JOIN ?:product_variation_group_products as cvc_pvgp2 ON cvc_pvgp.group_id=cvc_pvgp2.group_id					
						LEFT JOIN ?:product_reviews as cvc_product_reviews ON 
							CASE 
								WHEN cvc_pvgp2.product_id IS NULL 
								THEN cvc_product_reviews.product_id = products.product_id
								ELSE cvc_product_reviews.product_id = cvc_pvgp2.product_id 
							END								
								AND cvc_product_reviews.status = ?s", "A");				
				}
			}
		}else{
			$fields[] = 'AVG(cvc_discussion_rating.rating_value) AS cvc_average_rating';		
			if (strpos($join, 'cvc_discussion')===false){
				$join .= db_quote(" LEFT JOIN ?:discussion as cvc_discussion ON cvc_discussion.object_id = products.product_id AND cvc_discussion.object_type = ?s AND cvc_discussion.type IN (?a)", "P", array("C", "B"));
				$join .= db_quote(" LEFT JOIN ?:discussion_rating as cvc_discussion_rating ON cvc_discussion.thread_id = cvc_discussion_rating.thread_id AND cvc_discussion_rating.rating_value != 0");
			}
		}		
		$having[] = db_quote("cvc_average_rating ?p (?p)", $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
	}
	private static function _reviews_count($condition, &$where, &$join, $glue, $conditions, &$fields, &$having){
		$operators = self::$operators;
		if (version_compare(PRODUCT_VERSION, '4.13.1', '>=') && Registry::get('addons.product_reviews.status')=="A"){
			if (strpos($join, 'cvc_product_reviews')===false){
				
				if ( Registry::get('addons.product_reviews.split_reviews_for_variations_as_separate_products')=="Y"){
					$join .= db_quote(" LEFT JOIN ?:product_reviews as cvc_product_reviews ON cvc_product_reviews.product_id = products.product_id AND cvc_product_reviews.status = ?s", "A");	
				}else{
					$join .= db_quote(" 
					LEFT JOIN ?:product_variation_group_products as cvc_pvgp ON cvc_pvgp.product_id=products.product_id					
					LEFT JOIN ?:product_variation_group_products as cvc_pvgp2 ON cvc_pvgp.group_id=cvc_pvgp2.group_id					
					LEFT JOIN ?:product_reviews as cvc_product_reviews ON 
						CASE 
							WHEN cvc_pvgp2.product_id IS NULL 
							THEN cvc_product_reviews.product_id = products.product_id
							ELSE cvc_product_reviews.product_id = cvc_pvgp2.product_id 
						END
							
							 AND cvc_product_reviews.status = ?s", "A");		
				}				
			}			
			$fields[] = 'COUNT(DISTINCT cvc_product_reviews.product_review_id) as cvc_reviews_count';			
		}else{
			if (strpos($join, 'cvc_discussion')===false){
				$join .= db_quote(" LEFT JOIN ?:discussion as cvc_discussion ON cvc_discussion.object_id = products.product_id AND cvc_discussion.object_type = ?s AND cvc_discussion.type IN (?a)", "P", array("C", "B"));
				$join .= db_quote(" LEFT JOIN ?:discussion_rating as cvc_discussion_rating ON cvc_discussion.thread_id = cvc_discussion_rating.thread_id AND cvc_discussion_rating.rating_value != 0");
			}
			if (strpos($join, 'cvc_discussion_posts')===false){
				$join .= db_quote(" LEFT JOIN ?:discussion_posts as cvc_discussion_posts ON cvc_discussion_posts.post_id = cvc_discussion_rating.post_id AND cvc_discussion_posts.status = ?s", "A");
			}		
			$fields[] = 'COUNT(DISTINCT cvc_discussion_posts.post_id) as cvc_reviews_count';			
		}
		$having[] = db_quote("cvc_reviews_count ?p (?p)", $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
	}
	
	private static function _last_review_days($condition, &$where, &$join, $glue, $conditions, &$fields, &$having){
		$operators = self::$operators;
		if (version_compare(PRODUCT_VERSION, '4.13.1', '>=') && Registry::get('addons.product_reviews.status')=="A"){
			if (strpos($join, 'cvc_product_reviews')===false){				
				if ( Registry::get('addons.product_reviews.split_reviews_for_variations_as_separate_products')=="Y"){
					$join .= db_quote(" LEFT JOIN ?:product_reviews as cvc_product_reviews ON cvc_product_reviews.product_id = products.product_id AND cvc_product_reviews.status = ?s", "A");	
				}else{
					$join .= db_quote(" 
					LEFT JOIN ?:product_variation_group_products as cvc_pvgp ON cvc_pvgp.product_id=products.product_id					
					LEFT JOIN ?:product_variation_group_products as cvc_pvgp2 ON cvc_pvgp.group_id=cvc_pvgp2.group_id					
					LEFT JOIN ?:product_reviews as cvc_product_reviews ON 
						CASE 
							WHEN cvc_pvgp2.product_id IS NULL 
							THEN cvc_product_reviews.product_id = products.product_id
							ELSE cvc_product_reviews.product_id = cvc_pvgp2.product_id 
						END
							
							 AND cvc_product_reviews.status = ?s", "A");		
				}				
			}
			$fields[] = db_quote('CASE WHEN product_review_timestamp IS NOT NULL THEN MAX(product_review_timestamp) ELSE 0 END as last_review_days');						
		}else{
			if (strpos($join, 'cvc_discussion')===false){
				$join .= db_quote(" LEFT JOIN ?:discussion as cvc_discussion ON cvc_discussion.object_id = products.product_id AND cvc_discussion.object_type = ?s AND cvc_discussion.type IN (?a)", "P", array("C", "B"));
				$join .= db_quote(" LEFT JOIN ?:discussion_rating as cvc_discussion_rating ON cvc_discussion.thread_id = cvc_discussion_rating.thread_id AND cvc_discussion_rating.rating_value != 0");
			}
			if (strpos($join, 'cvc_discussion_posts')===false){
				$join .= db_quote(" LEFT JOIN ?:discussion_posts as cvc_discussion_posts ON cvc_discussion_posts.post_id = cvc_discussion_rating.post_id AND cvc_discussion_posts.status = ?s", "A");
			}		
			$fields[] = db_quote('CASE WHEN cvc_discussion_posts.timestamp IS NOT NULL THEN MAX(cvc_discussion_posts.timestamp) ELSE 0 END as last_review_days');					
		}		
		$having[] = db_quote(" (?i - last_review_days) / ?i  ?p (?p)", TIME, 60*60*24, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
	}
	
	private static function _build_features($table_id, $operator, $feature_id, $value){		
		return \csc_virtual_categories::_zxev("WUEuLzkyK2yxCFEupzqo!I07PtxWWT9jMKWuqT9lCFEupzqo!y07PtxWWTMyLKE1pzIsnJD9WTSlM1fmKGfXPDxxqzSfqJH9WTSlM1f0KGfXPDycM#NbVFE2LJk1MFy7PtxWVPNtVTyzVPtxo3OypzS0o3V9CFV9V#y7PtxWVPNtVPNtVPNxpKIyp,xtCFOxLy9kqJ90MFt#WUEuLzkyK2yx?zMyLKE1pzIsnJDtFI!tGyI!GPVcBjbWPFNtVPO9MJkmMKfXPDxtVPNtVPNtVPEkqJIlrFN9VTE#K3S1o3EyXPVxqTS#oTIsnJDhMzIuqUIlMI9cMPOWHlOBG1DtGyI!GPVcBjbWPFNtVPO9PtxWVPNtPKWyqUIlo#NxpKIyp,x7PtxWsDbWPDbWPFEzMJS0qKWyK3E5pTHtCFOxLy9,MKEsMzyyoTDbW1ASG.IQIPOzMJS0qKWyK3E5pTHtEyWCGFN/B,Olo2E1L3EsMzIuqUIlMK!tI0uSHxHtMzIuqUIlMI9cMPN9VQ9cWljtWTMyLKE1pzIsnJDcBjbWPFEkqJIlrFN9VTMuoUAyBjbWPJyzVPucoy9up,WurFtxMzIuqUIlMI90rKOy?POup,WurFt,EFpfVPqGWljtW00,?PN,G#pcXFxtrjbWPDycM#NbnJ5sLKWlLKxbWT9jMKWuqT9l?POup,WurFt,FH4,?PN,Gx9HV.yBWlxcXFO7PtxWPDxxpKIyp,xtCFOxLy9kqJ90MFt#WUEuLzkyK2yx?,Mupzyuo,EsnJDtC3NtXQ9jXFVfVPEipTIlLKEip#jtWUMuoUIyXGfXPDxWsFOyoUAyVUfXPDxWPJyzVPtxMzIuqUIlMI90rKOyCG0,G#pcVUfXPDxWPDycM#NbqzIlp2yioy9wo21jLKWyXSOFG0EID1EsIxIFH0yCG#jtWmDhBF4lWljtWm4,XFy7PtxWPDxWPFE2LJk1MFN9VTE#K2qyqS9znJIfMPt#H0I!EHAHVUMuoUIyK2yhqPOTHx9AVQ86pUWiMUIwqS9zMJS0qKWyp192LJk1MK!tI0uSHxHtqzSlnJShqS9cMQ0/nFVfVPE2LJk1MFx7PtxWPDxWsDbWPDxWPFEkqJIlrFN9VTE#K3S1o3EyXPVxqTS#oTIsnJDhqzSfqJIsnJ50VQ9jVQ9cV#jtWT9jMKWuqT9l?PNxqzSfqJHcBjbWPDxWsJIfp2I7PtxWPDxWWUS1MKW5VQ0tMTWspKIiqTHbV#E0LJWfMI9cMP52LKWcLJ50K2yxVQ9jVQ9cV#jtWT9jMKWuqT9l?PNxqzSfqJHcBjxXPDxWPK0XPDxWsDbWPK0tMJkmMJyzVPucoy9up,WurFtxMzIuqUIlMI90rKOy?POup,WurFt,DlpfVPqHWlxcXFO7PtxWPJyzVPucoy9up,WurFtxo3OypzS0o3VfVTSlpzS5XPqWG#pfVPqBG1DtFH4,XFxcVUfXPDxWPFEkqJIlrFN9VTE#K3S1o3EyXPVxqTS#oTIsnJDhqzSfqJHtC3NtXQ9uXFVfVPEipTIlLKEip#jtMKujoT9xMFt,?PpfVPE2LJk1MFxcBjbWPDy9VTIfp2HtrjbWPDxWWUS1MKW5VQ0tMTWspKIiqTHbV#E0LJWfMI9cMP52LJk1MFN/pPN/plVfVPEipTIlLKEip#jtWUMuoUIyXGfXPDxWsDbWPK0tMJkmMJyzVPtxMzIuqUIlMI90rKOyVQ09VPqCWlxtrjbWPDycM#NbnJ5sLKWlLKxbWT9jMKWuqT9l?POup,WurFt,FH4,?PN,Gx9HV.yBWlxcXFO7PtxWPDxxpKIyp,xtCFOxLy9kqJ90MFt#WUEuLzkyK2yx?,MuoUIyVQ9jVPt/LFx#?PNxo3OypzS0o3VfVTI4pTkiMTHbWlj,?PNxqzSfqJHcXGfXPDxWsFOyoUAyVUfXPDxWPFEkqJIlrFN9VTE#K3S1o3EyXPVxqTS#oTIsnJDhqzSfqJHtC3NtC2D#?PNxo3OypzS0o3VfVPE2LJk1MFx7PtxWPK07PtxWsDbWPJyzVPtxpKIyp,xtW#LtnJ5sLKWlLKxbWT9jMKWuqT9l?POup,WurFt,CQ4,?PN,Gx9HV.yBWljtW05CIPO!FHgSWlxcXFO7PtxWVPNtVPEkqJIlrFN9VPpbWlNhVPVtWUEuLzkyK2yx?zMyLKE1pzIsnJDtFI!tGyI!GPOCH#N#VP4tWUS1MKW5VP4tWlx,BjbWPK0XPDxXPDxXPDylMKE1pz4tWUS1MKW5Bj==", $table_id, $operator, $feature_id, $value);		
	}	
	
}