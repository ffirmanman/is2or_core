<?php
use Tygh\Registry;

$schema= array(
    'section' => 'ceca_categories',
    'pattern_id' => 'ceca_categories',
    'name' => __('categories'),
    'key' => array('category_id'),
    'order' => 2,
    'table' => 'categories',
	'notes' => [        
    ],
    'permissions' => array(
        'import' => 'manage_csc_exim_categories',
        'export' => 'view_csc_exim_categories',
		'import_skip_db_processing' => true
    ),
	'references' => [
        'category_descriptions' => [
            'reference_fields' => ['category_id' => '#key', 'lang_code' => '#lang_code'],
            'join_type'        => 'LEFT'
        ],
		'images_links' => [
            'reference_fields'          => ['object_id' => '#key', 'object_type' => 'category', 'type' => 'M'],
            'join_type'                 => 'LEFT',
            'import_skip_db_processing' => true
        ],
		'companies' => [
            'reference_fields'          => ['company_id' => '&company_id'],
            'join_type'                 => 'LEFT',
            'import_skip_db_processing' => true
        ],
    ],
	'pre_processing' => [
        'backup' => [
            'function' => 'fn_ceca_categories_bckp',
            'args'     => ['@backup'],
        ],
       
    ],	
	'import_process_data' => [       
		'import_mode' => [
            'function'    => 'fn_ceca_check_import_mode',
            'args'        => ['$primary_object_id', '$object', '$pattern', '$options', '$processed_data', '$processing_groups', '$skip_record'],
            'import_only' => true,
        ],
	],	
    'condition' => array(
        'conditions' => array('is_trash' => 'N')		
    ),
	'range_options' => array(
        'selector_url' => 'categories.manage',
        'object_name' => __('categories'),
    ),
	'import_get_primary_object_id' => [
        'fill_products_alt_keys' => [
            'function'    => 'fn_ceca_import_fill_alt_keys',
            'args'        => ['$pattern', '$alt_keys', '$object', '$skip_get_primary_object_id'],
            'import_only' => true,
        ],
    ],
    'options' => array(
        'lang_code' => array(
            'title' => 'language',
            'type' => 'languages',
            'default_value' => array(DEFAULT_LANGUAGE),
        ),
		'backup' => [
            'title'         => 'ceca_backup_categories',
            'description'   => 'ceca_backup_categories_descr',
            'type'          => 'checkbox',
            'default_value' => 'Y',
            'position'      => 50,
			'import_only' => true,
        ],
		'ceca_import_mode' => [
            'title'         => 'ceca_import_mode',
            'description'   => 'ceca_import_mode_desc',
            'type'          => 'select',
			'import_only' => true,
			'variants'=>[
				'all'=>'all',
				'exist_only'=>'ceca_update_exists_only',
				'new_only'=>'ceca_create_new_only'
			],
            'default_value' => 'all',
            'position'      => 100,
        ],	
		'category_delimiter' => [
            'title'         => 'category_delimiter',
            'description'   => 'text_category_delimiter',
            'type'          => 'input',
            'default_value' => '///',
            'position'      => 500,
        ],
		
			
		
    ),
    'export_fields' => array(
		'CategoryCode' => [
            'db_field'  => 'category_code',
			'required'  => true,
            'alt_key'   => true,
            'alt_field' => 'category_id'
        ],
		'CategoryId' => [
            'db_field'  => 'category_id',
			'export_only'=>true
        ],
        'CategoryPath' => array(
			'linked' => false,			
			'process_get' => array('fn_ceca_get_category_path', '#key', '#lang_code', '@category_delimiter' ),
            'process_put' => ['fn_ceca_set_category_path', '#key', '#this', '@category_delimiter', '%Store%', '#counter', '#new'],
            'required' => true,
            'multilang' => true
        ),      
        'Language' => array(
			'table'       => 'category_descriptions',
            'db_field' => 'lang_code',            
            'required' => true,
            'multilang' => true,
			'type'      => 'languages',
        ),
		'DateAdded' => array(
            'db_field' => 'timestamp',
            'process_get' => array('fn_timestamp_to_date', '#this'),
            'convert_put' => array('fn_date_to_timestamp', '#this'),
			'export_only'=>true
        ),		
		'Status' => array(
            'db_field' => 'status'            
        ),
		'Position' => array(
            'db_field' => 'position'            
        ),
		'DetailedImageURL' => [
            'process_get' => ['fn_ceca_get_detailed_image_url', '#key', 'category', 'M', '#lang_code'],
			'process_put' => ['fn_ceca_import_images', '', '', '#this', '0', 'M', '#key', 'category'],
            'db_field'    => 'detailed_id',
            'table'       => 'images_links'        
		],	
		'Description' => [
            'table'       => 'category_descriptions',
            'db_field'    => 'description',
            'multilang'   => true           
        ],
		'ProductDetailsView' => array(
            'db_field' => 'product_details_view'            
        ),
		'UsergroupIds' => [          
            'db_field'    => 'usergroup_ids'           
        ],
		'PageTitle' => array(
            'db_field' => 'page_title',
			'table'       => 'category_descriptions',
			'multilang'   => true
        ),
		'MetaDescription' => array(
            'db_field' => 'meta_description',
			'table'       => 'category_descriptions',
			'multilang'   => true
        ),
		'MetaKeywords' => array(
            'db_field' => 'meta_keywords',
			'table'       => 'category_descriptions',
			'multilang'   => true
        ),
		'CategoryUrl' => array(
			'db_field'  => 'category_id',
			'process_get' => array('fn_ceca_get_url', '#this'),
			'export_only'=>true,
		),
    ),    
    'order_by' => 'categories.level, categories.category_id'
);

if (Registry::get('addons.seo.status')=="A"){
	include_once(Registry::get('config.dir.addons') . 'seo/schemas/exim/seo.functions.php');	
	$schema['references']['seo_names'] = array (
		'reference_fields' => array (
			'object_id' => '#key', 
			'type' => 'c', 
			'dispatch' => '', 
			'lang_code' => '#category_descriptions.lang_code', 
			'company_id'=>'&company_id'), 
		'join_type' => 'LEFT',
		'import_skip_db_processing' => true
	);
	$schema['export_fields']['SeoName'] = array (
		'table' => 'seo_names',
		'db_field' => 'name',
		'process_put' => array ('fn_ceca_create_import_seo_name', '#key', 'c', '#this', '%CategoryPath%', 0, '', '', '#lang_code', '%Store%', '@category_delimiter'),
	);
	if (Registry::get('addons.seo.single_url') == 'N') {
		$schema['export_fields']['SeoName']['multilang'] = true;
	}
}

if (fn_allowed_for('ULTIMATE')) {
	$schema['condition']['use_company_condition'] = true;
	$company_schema = [
		'table'       => 'companies',
		'db_field'    => 'company',
		'process_put' => ['fn_ceca_set_category_company_ult', '#row', '#key', '#this', '#counter'] 
	];
	$schema['export_fields']['Store'] = $company_schema;
	if (!Registry::get('runtime.company_id')) {
        $schema['export_fields']['Store']['required'] = true;		
	}
}elseif(version_compare(PRODUCT_VERSION, '4.13.10', '>')){ //Multivendor
	$company_schema = [
		'table'       => 'storefronts',
		'db_field'    => 'name',
		'process_put' => ['fn_ceca_set_category_company_mve', '#row', '#key', '#this', '#counter']
	];
	$schema['export_fields']['Store'] = $company_schema;
	$schema['references']['storefronts']=[
		 'reference_fields'          => ['storefront_id' => '&storefront_id'],
         'join_type'                 => 'LEFT',
         'import_skip_db_processing' => true
	];
}

if(Registry::get('addons.discussion.status') == 'A') {
	$schema['export_fields']['Discussion'] = array (
		'process_put' => array ('fn_ceca_exim_categories_discussion_import', '#key', '#this', '#new'),
		'process_get' => array ('fn_ceca_exim_categories_discussion_export', '#key'),
		'linked' => false,
	);
}

if(Registry::get('addons.vendor_categories_fee.status') == 'A' && fn_allowed_for('MULTIVENDOR')) {
	
	$params = [
		'lang_code' => DEFAULT_LANGUAGE,
	];
	
	$vendor_plan_model = new Tygh\Models\VendorPlan($params);
	$vendor_plans = $vendor_plan_model->findMany();
	
	foreach($vendor_plans as $vendor_plan) {
		$schema['export_fields']['Vendor categories fee - ' . $vendor_plan['plan']] = [
			'process_put' => array ('fn_ceca_exim_vendor_categories_fee_import', '#key', '#this', $vendor_plan['plan_id']),
			'process_get' => array ('fn_ceca_exim_vendor_categories_fee_export', '#key', $vendor_plan['plan_id']),
			'linked' => false,
		];	
	}
	
}

return $schema;

 
