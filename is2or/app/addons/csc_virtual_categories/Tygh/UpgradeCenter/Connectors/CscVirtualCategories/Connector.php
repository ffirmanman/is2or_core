<?php
namespace Tygh\UpgradeCenter\Connectors\CscVirtualCategories;
use Tygh\Addons\SchemesManager;
use Tygh\Http;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Tools\Url;
use Tygh\UpgradeCenter\Connectors\BaseAddonConnector;
use Tygh\UpgradeCenter\Connectors\IConnector;
if (class_exists('Tygh\UpgradeCenter\Connectors\BaseAddonConnector')){
	class Connector extends BaseAddonConnector implements IConnector
	{ 
		protected $addon_id;
		protected $addon_version;	
		protected $product_url;	
		protected $updates_server;
				
		public function __construct()
		{
			$this->addon_id= 'csc_virtual_categories';			
			parent::__construct();
			$this->updates_server = 'https://api.cs-commerce.com/';
			$addon = SchemesManager::getScheme($this->addon_id);
			$this->addon_version = $addon->getVersion() ? $addon->getVersion() : '1.0';			
			$this->product_url = Registry::get("config.http_host");	
		}	
		public function getConnectionData(){
			$cl = $this->addon_id;		
			$data = [            
				'pn'     => PRODUCT_NAME,
				'pv'  => PRODUCT_VERSION,
				'pb'    => PRODUCT_BUILD,
				'pe'  => PRODUCT_EDITION,
				'api_key'=> $cl::_api_key($this->addon_version)	
			];
			
			$headers = [];
			$api_directory = implode('/', ['1.0','upgrades-check', $this->product_url, $this->addon_id, $this->addon_version, CART_LANGUAGE]);		
			return [
				'method'  => 'get',
				'url'     => $this->updates_server.$api_directory,
				'data'    => $data,
				'headers' => $headers,
			];
		}
		public function downloadPackage($schema, $package_path){
			$cl = $this->addon_id;		
			$api_directory = implode('/', ['1.0','upgrades-get', $this->product_url, $this->addon_id, $this->addon_version, CART_LANGUAGE]);	
			$download_url = new Url($this->updates_server . $api_directory);
			$download_url->setQueryParams(array_merge($download_url->getQueryParams(), [
				'pn'=> PRODUCT_NAME,
				'pv'=> PRODUCT_VERSION,
				'pb'=> PRODUCT_BUILD,
				'pe'=> PRODUCT_EDITION,
				'api_key'=> $cl::_api_key($this->addon_version),            
						 
			]));
			$download_url = $download_url->build();
			$request_result = Http::get($download_url, [], [
				'write_to_file' => $package_path,
			]);
			if (!$request_result || strlen($error = Http::getError())) {
				$download_result = [false, __('text_uc_cant_download_package')];
				fn_rm($package_path);
			} else {
				$download_result = [true, ''];
			}
			return $download_result;
		}
		public function onSuccessPackageInstall($content_schema, $information_schema){
			
		}
		public function processServerResponse($response, $show_upgrade_notice){
		   $data = parent::processServerResponse($response, $show_upgrade_notice);	  
		   if (!empty($data)) {
				$data['name'] = str_replace(PRODUCT_NAME . ': ', '', $data['name']);
				$data['name']  = base64_decode('Q1MtQ29tbWVyY2UuY29tOiA='). $data['name'];
		   }	  
		   return $data;
		}
	}
}
