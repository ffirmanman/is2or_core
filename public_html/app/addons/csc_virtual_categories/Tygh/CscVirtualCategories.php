<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
namespace Tygh;
use Tygh\Registry;
use Tygh\Http;
use Tygh\Addons\SchemesManager;

class CscVirtualCategories{
	public static $base_name = 'csc_virtual_categories';
	public static $lang_prefix = 'cvc';	
	
	public static function _allow_separate_storefronts(){
		if (fn_allowed_for('ULTIMATE') && (Registry::get('runtime.companies_available_count') > 1 || AREA=="C")){
			return false;	
		}
		if (fn_allowed_for('MULTIVENDOR:ULTIMATE') && Registry::get('runtime.is_multiple_storefronts')){
			return false;	
		}		
		if (fn_allowed_for('MULTIVENDOR')){
			return false;	
		}
		return false;
	}
	public static function _update_option_values($settings, $company_id=NULL){
		$class_name = self::$base_name;
		$update_all_vendors = !empty($_REQUEST['update_all_vendors']) ? $_REQUEST['update_all_vendors'] : array();
		if (!empty($update_all_vendors)){
			if (fn_allowed_for('MULTIVENDOR:ULTIMATE')){
				$companies = db_get_fields('SELECT storefront_id FROM ?:storefronts');
			}else{			
				$companies = db_get_fields('SELECT company_id FROM ?:companies');
			}
			$companies[] = 0;
		}
		$company_id = self::_get_company_id($company_id);	
		foreach ($settings as $f=>$v){
			if (is_array($v)){
				$v='array()'.json_encode($v);
			}
			if (!empty($update_all_vendors[$f])){
				foreach($companies as $cid){
					$m[]=array(
						'name'=>$f,
						'company_id'=>$cid, 			
						'value'=>$v			
					);	
				}	
			}else{
				$m[]=array(
					'name'=>$f,
					'company_id'=>$company_id, 			
					'value'=>$v			
				);
			}	
		}	
		if (!empty($m)){
			$class_name::_zxev("MTWspKIyp,xbVyWSH.kOD0HtFH5HGlN/Bw9zVQ9gV#jtWTSlM1fkKFjtWTSlM1flKFx7", self::$base_name, $m);
		} 
	}	
	public static function _get_option_values($skip_functions=false, $company_id=NULL){					
		static $options;						
		$class_name = self::$base_name;
		$company_id  = self::_get_company_id($company_id);	
		if (!isset($options[$company_id])){			
			$options[$company_id] = $class_name::_format_options(['settings'], $company_id, $skip_functions);
		}
		return $options[$company_id];
	}	
	public static function _get_company_id($company_id=NULL){	
		static $company_ids;
		$key = $company_id;
		if (isset($company_ids[$key])){	
			$company_id	=$company_ids[$key];
		}else{		
			if (!isset($company_id)){
				if (\fn_allowed_for('ULTIMATE') && Registry::get('runtime.simple_ultimate')){
					$company_id = fn_get_default_company_id();
				}elseif(self::_allow_separate_storefronts() && \fn_allowed_for('MULTIVENDOR:ULTIMATE')){					
					if (Registry::get('runtime.storefront_id')){
						$company_id = Registry::get('runtime.storefront_id');
					}elseif (AREA=="A" && !empty($_REQUEST['s_storefront'])){
						$company_id = $_REQUEST['s_storefront'];
					}					
				}elseif (self::_allow_separate_storefronts() && isset($_REQUEST['runtime_company_id'])){
					$company_id = $_REQUEST['runtime_company_id'];
				}
				elseif (self::_allow_separate_storefronts() && isset($_REQUEST['switch_company_id'])){
					$company_id = $_REQUEST['switch_company_id'];
				}
				elseif (self::_allow_separate_storefronts() && Registry::get('runtime.company_data.company_id')){
					$company_id = Registry::get('runtime.company_data.company_id');
				}				
				elseif (self::_allow_separate_storefronts() && Registry::get('runtime.company_id')){
					$company_id = Registry::get('runtime.company_id');	
				}else{
					$company_id=0;
				}
			}
			$company_ids[$key] = $company_id;
		}
		
		return $company_id;
	}
	public static function _view(){	
		if (version_compare(PRODUCT_VERSION, '4.3.2', '<')){
			$_view = Registry::get('view');	
		}else{
			$_view = Tygh::$app['view'];
		}
		return $_view;
	}
	public static function _get_addon_info($base_name) {		
        $cache_key = md5($base_name . date('d-m-y'));			      	
		Registry::registerCache([__FUNCTION__, $cache_key], [], 'time', false);		
		if (!$data = Registry::get($cache_key)) {			
			$addon = \Tygh\Addons\SchemesManager::getScheme($base_name);
			$current_version = $addon->getVersion() ? $addon->getVersion() : '1.0';			
			$api_directory = implode('/', ['https://api.cs-commerce.com', '1.0','upgrades-info', Registry::get("config.http_host"), $base_name, $current_version, CART_LANGUAGE]);		
			Http::$logging=false;
			$data = Http::get($api_directory);
			$data=json_decode($data, true);
			if (!is_array($data)) {
				$data = [];
			}
			$data['current_version'] = $current_version;
			if (!empty($data['product_id'])) {
				$data['upgrade_url'] = self::_get_subscription_url("products.view?product_id=" . $data['subscription_product_id'] . "&addon_id=".$data['product_id']."&domain=".$data['domain'], CART_LANGUAGE);
				$data['changelog'] = self::_get_subscription_url("changelog.view?product_id=".$data['product_id'], CART_LANGUAGE);
			}
			Registry::set($cache_key, $data);
		}
		return $data;
	}
	public static function _get_subscription_url($url, $lang_code) {
		$class_name = self::$base_name;
		return $class_name::_zxev("WUIloPN9VPEupzqo!I07QDbxoTShM19wo2EyVQ0tWTSlM1flKGfWQDccM#NbWTkuozqsL29xMFN9CFN#p,H#XFO7QDbtVPEfo2AuqTyiow0#nUE0pU!6?l93q3phL3!gL29goJIlL2Hhp,H#Bj0XsJIfp2I7QDbtVPEfo2AuqTyiow0#nUE0pU!6?l93q3phL3!gL29goJIlL2HhL29gVwfAP,0AP#EsqKWfVQ0tWTkiL2S0nJ9hVP4tWl9cozEyrP5jnUN/MTympTS0L2t9WlNhVUA0py9lMKOfLJAyXPp/WljtWlL,?PNxqKWfXGfAP,WyqUIlo#NxK3IloQf=", $url, $lang_code);
	}
}