<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Registry;
use Tygh\CscEximCategories;
use Tygh\DataKeeper;

use Tygh\Enum\Addons\Discussion\DiscussionTypes;


if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_csc_exim_categories_install(){
	/*Privilages*/
	if (version_compare(PRODUCT_VERSION, '4.10.1', '<')){
		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('manage_csc_exim_categories', 'N', 'addons')");		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('view_csc_exim_categories', 'N', 'addons')");
	}else{
		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('manage_csc_exim_categories', 'N', 'addons', 'csc_exim_categories', 'N')");
		db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('view_csc_exim_categories', 'N', 'addons', 'csc_exim_categories', 'Y')");		
	}
	db_query("UPDATE ?:categories SET category_code=category_id WHERE category_code=''");
	
}
function fn_csc_exim_categories_uninstall(){	
	/*Privilages*/
	db_query("DELETE FROM ?:privileges WHERE privilege IN ('manage_csc_exim_categories', 'view_csc_exim_categories')");
}
function fn_ceca_get_setting_value($key){
	$settings = CscEximCategories::_get_option_values();
	return isset($settings[$key]) ? $settings[$key] : '';
}
function fn_ceca_get_category_path($category_id, $lang_code, $category_delimiter){	
	$path = fn_get_category_path($category_id, $lang_code, $category_delimiter);	
	if (!$path){
		$path = fn_get_category_name($category_id, $lang_code);
	}
	return $path;
}

function fn_ceca_set_category_company_ult(array $object, $category_id, $company_name, array &$processed_data){	
	$company_name = fn_ceca_validate_company_name($company_name);	
	$company_id = fn_exim_set_company('categories', 'category_id', $category_id, $company_name, $processed_data, true);	
	if (version_compare(PRODUCT_VERSION, '4.13.10', '>')){
		$storefront_id = db_get_field("SELECT storefront_id FROM ?:storefronts_companies WHERE company_id=?i", $company_id);
		db_query("UPDATE ?:categories SET storefront_id=?i WHERE category_id=?i", $storefront_id, $category_id);
	}
    return $company_id;
}
function fn_ceca_validate_company_name($company_name){
	if (is_array($company_name)){
		$company_name = reset($company_name);	
	}
	return $company_name;
}


function fn_ceca_set_category_company_mve(array $object, $category_id, $company_name, array &$processed_data){	
	$company_name = fn_ceca_validate_company_name($company_name);	
	$storefront_id = db_get_field("SELECT storefront_id FROM ?:storefronts WHERE name LIKE ?l", $company_name);
	db_query("UPDATE ?:categories SET storefront_id=?i WHERE category_id=?i", $storefront_id, $category_id);	
    return $storefront_id;
}

function fn_ceca_set_category_path($category_id, $categories_data, $category_delimiter,  $store_name = '',  array &$processed_data = [],  $is_new = false){	
	csc_exim_categories::_zxev("WTAuqTI,o3W5K2yxCFEupzqo!I07PtxxL2S0MJqipzyyp19xLKEuCFEupzqo!y07PtxxL2S0MJqip,ysMTIfnJ1cqTIlCFEupzqo!107Ptxxp3EipzIsozSgMFN9VPEupzqoAS07PtxxpUWiL2Imp2IxK2EuqT.tCFNxLKW,JmIqBjbWWTymK25yqlN9VPEupzqoAy07PtxXPFEmMKEsMTIfnJ1cqTIlVQ0tWmftWmfXPFEjLKEbplN9VTSlpzS5XPx7P#NtVPNxqKOxLKEyMS9wLKEyM29lnJImVQ0tLKWlLKxbXGfXPFEwo21jLJ55K2yxCGN7PtycM#NbKTMhK2SfoT93MJEsMz9lXPqIGSEWGHSHEFpcXKfXPDycM#NbIUy,nSkFMJqcp3ElrGb6M2I0XPqlqJ50nJ1y?zAioKOuo,ysnJD,XFy7PtxWPFEwo21jLJ55K2yxVQ0tIUy,nSkFMJqcp3ElrGb6M2I0XPqlqJ50nJ1y?zAioKOuo,ysnJD,XGfWPtxWsJIfp2I7PDxXPDxWWTAioKOuo,ysnJDtCFOpMz5sM2I0K2AioKOuo,ysnJEsL,ysozSgMFtxp3EipzIsozSgMFx7PtxWsDbWsDbWP#NtVPOzo3WyLJAbVPtxL2S0MJqipzyyp19xLKEuVTSmVPEfLJ5,VQ0+VPExLKEuXFO7P#NtVPNtVPNtWS9jLKEbplN9VUA0py9,MKEwp3LbWTEuqT.fVPEmMKEsMTIfnJ1cqTIl?PN#WlVcBjbtVPNtVPNtVTSlpzS5K3quoTfbWS9jLKEbpljtW2MhK3ElnJ1snTIfpTIlWlx7P#NtVPNtVPNtMz9lMJSwnPNbWS9jLKEbplOuplNxnlN9C#NxL2S0K3OuqTtcVUftVPNtVPNtVPNtVPNXVPNtVPNtVPNtVPNtWTAuqTI,o3W5VQ0tXUA0p,OipltxL2S0K3OuqTtfVPEwLKEyM29lrI9xMJkcoJy0MKVcVP.9CFOzLJkmMFxtClOyrUOfo2EyXPEwLKEyM29lrI9xMJkcoJy0MKVfVPEwLKEspTS0nPxtB#Oup,WurFtxL2S0K3OuqTtcBjbtVPNtVPNtVPNtVPOzo3WyLJAbVPtxL2S0MJqip,xtLK!tWTgyrI9wLKDtCG4tWTAuqPxtrjbtVPNtVPNtVPNtVPNtVPNtWUOuqTumJlEeKIfxn2I5K2AuqS1oWTkuozqqVQ0tWTAuqQfXVPNtVPNtVPNtVPNtsDbtVPNtVPNtVU0XVPNtVU0XPJMipzIuL2ttXPEjLKEbplOuplNxn2I5K3OuqTttCG4tWTAuqTI,o3WcMK!cVUfXVPNtVPNtVPOcM#NbVJIgpUE5XPEwLKEyM29lnJImXFxtrjbtVPNtVPNtVPNtVPNxpTSlMJ50K2yxVQ0tWmN,BjxWPDbWPDxxn2I5plN9VTSlpzS5K2gyrK!bWTAuqTI,o3WcMK!cBjbWPDxxoTSmqS9cqTIgVQ0tMJ5xXPEeMKymXGfWPDxXVPNtVPNtVPNtVPNtMz9lMJSwnPNbWTAuqTI,o3WcMK!tLK!tWTx9C#NxL2S0XFO7P#NtVPNtVPNtVPNtVPNtVPNxL2S0MJqip,ysL29hMTy0nJ9hVQ0tWlp7P#NtVPNtVPNtVPNtVPNtVPOcM#NbKTMhK2SfoT93MJEsMz9lXPqIGSEWGHSHEFpcXFO7P#NtVPNtVPNtVPNtVPNtVPNtVPEwLKEyM29lrI9wo25xnKEco24tCFOpMz5sM2I0K2AioKOuo,ysL29hMTy0nJ9hXPp/BzAuqTI,o3WcMK!hL29gpTShrI9cMPpfVUElqJHfVPEwo21jLJ55K2yxXGftVPNtVPNtVPNtVPNtVPNtVPNtVNbtVPNtVPNtVPNtVPNtVPNtsDxWPDxXVPNtVPNtVPNtVPNtVPNtVUWyp2I0XPEwLKDcBjxWPDxXVPNtVPNtVPNtVPNtVPNtVPEgLJyhK2kuozptCFOeMKxbWTAuqPx7PDxWPDxWP#NtVPNtVPNtVPNtVPNtVPNxK2AuqQ0xL2S0BjxWPDxWPDxXVPNtVPNtVPNtVPNtVPNtVPEgLJyhK2AuqPN9VTSlpzS5K3AbnJM0XPEsL2S0XGfWPDxWVNbWPDxWnJLtXPEcVG0xoTSmqS9cqTIgXKfXPDxWPDxtWT1unJ5sL2S0MJqip,ysnJDtCFOpMTWsM2I0K2McMJkxXNbWPDxWPDx,H0I!EHAHVQ86L2S0MJqipzyypl5wLKEyM29lrI9cMPOTHx9AVQ86L2S0MJqip,ysMTImL3WcpUEco25mVPpXPDxWPDxW?#N#FH5BEIVtFx9WG#N/BzAuqTI,o3WcMK!tG04tCmcwLKEyM29lnJIm?zAuqTI,o3W5K2yxVQ0tCmcwLKEyM29lrI9xMKAwpzyjqTyio,!hL2S0MJqip,ysnJDtVPVXPDxWPDxW?#N,I0uSHxHtCmcwLKEyM29lrI9xMKAwpzyjqTyio,!hL2S0MJqip,xtCFN/plOOGxDtoTShM19wo2EyVQ0tC3!tDH5.VUOupzIhqS9cMPN9VQ9cVPpt?#NxL2S0MJqip,ysL29hMTy0nJ9h?NbWPDxWPDxxoJScoy9wLKDfPtxWPDxWPFEgLJyhK2kuozpfPtxWPDxWPFEjLKWyo,EsnJDXPDxWPDxcBjbWPDxWPJyzVPtxoJScoy9wLKEyM29lrI9cMPy7PtxWPDxWPFEjLKWyo,EsnJD9WT1unJ5sL2S0MJqip,ysnJD7PtxWPDxWsJIfp2I7PtxWPDxWPIkzoy9mMKEsoz90nJMcL2S0nJ9hXPqKWljtK18bW3qupz5cozp,XFjtK18bW2AyL2.hpTSlMJ50K2AuqTI,o3W5K25iqS9yrTymqU!,XF4xoJScoy9wLKDcBjxXPDxWPDy9PDxWPDxWPDxWPDbWPDxWPJAio,Eco,IyBjbWPDxWsFNtVPNtPtxWPDycM#NbWTx9CFEfLKA0K2y0MJ0crjbWPDxWPFEwLKEyM29lrI9xLKEuVQ0tLKWlLKxbPtxWPDxWPFqjLKWyo,EsnJD,VQ0+VPEjLKWyo,EsnJDfPtxWPDxWPFqwLKEyM29lrFptCG4tVPEgLJyhK2AuqNxWPDxWPDxWPDbWPDxWPFx7PtxWPDxWnJLtXSkzoy9uoTkiq2IxK2Mip#t,IHkHFH1OI.H,XFxtrjbWPDxWPDxxL2S0MJqip,ysMTS0LIf,L29gpTShrI9cMPqqVQ0tWTAioKOuo,ysnJD7PtxWPDxWsDbWPDxWPFEwLKEyM29lrI9cMPN9VSkzoy91pTEuqTIsL2S0MJqip,xbWTAuqTI,o3W5K2EuqT.fVPEwLKEyM29lrI9cMPjtVPEgLJyhK2kuozpcBjbWPDxWPJyzVPtxnKAsozI3XKfXPDxWPDxWMz9lMJSwnPupMz5sM2I0K3ElLJ5moTS0nJ9hK2kuozq1LJqypltcVTSmVPEfLJ5,VQ0+VPEfLJ5,K2EuqT.crjbWPDxWPDxWWTAuqTI,o3W5K2EuqTSoW2AuqTI,o3W5W10tCFNxL2S0JlEgLJyhK2kuozqqBjbWPDxWPDxWKTMhK3IjMTS0MI9wLKEyM29lrFtxL2S0MJqip,ysMTS0LFjtWTAuqTI,o3W5K2yx?PNxoTShMlx7PDbWPDxWPDy9PDbWPDxWPK0XPDxWPDyzo3WyLJAbVPtxL2S0VTSmVPEfLJ5,VQ0+VPEwLKEsMTS0LFxtrjbWPDxWPDycM#NbVJIgpUE5XPEwLKEsMTS0LFxcrjbWPDxWPDxWWTAuqTI,o3W5K2EuqTSoW2AuqTI,o3W5W10tCFNxL2S0K2EuqT.7PtxWPDxWPDypMz5sqKOxLKEyK2AuqTI,o3W5XPEwLKEyM29lrI9xLKEu?PNxL2S0MJqip,ysnJDfVPEfLJ5,XGfXPDxWPDxWsDbWPDxWPK0WPDxWPDbWPDxWsDbtVPNtVPNtVPNtVPO9VPNtVPNtVPNtVPNtP#NtVPNtVPNtsDbtVPNtsD==", $category_id, $categories_data, $category_delimiter,  $store_name,  $processed_data, $is_new);
}


function fn_ceca_import_fill_alt_keys($pattern, &$alt_keys, &$object, &$skip_get_primary_object_id)
{
	if (fn_allowed_for('ULTIMATE')) {
		if (Registry::get('runtime.company_id')) {
			$alt_keys['company_id'] = Registry::get('runtime.company_id');	
		} elseif (!empty($object['company'])) {
			$company_id = fn_get_company_id_by_name($object['company']);		
			if ($company_id !== null) {
				$alt_keys['company_id'] = $company_id;
			} else {
				$skip_get_primary_object_id = true;
			}	
		}
	}
}

function fn_ceca_create_import_seo_name($object_id, $object_type = 'c', $object_name='', $product_name='', $index = 0, $dispatch = '', $company_id = '', $lang_code = CART_LANGUAGE, $company_name = '', $category_delimiter='///'){
	$company_name = fn_ceca_validate_company_name($company_name);		
	if (is_array($product_name)){
		foreach($product_name as &$n){
			$n = explode($category_delimiter, $n);
			$n = reset($n);
		}		
	}
	db_query("DELETE FROM ?:seo_names WHERE object_id=?i AND type=?s AND lang_code=?s AND company_id=?i", $object_id, $object_type, $lang_code, $company_id);	
	$result = fn_create_import_seo_name($object_id, $object_type, $object_name, $product_name, $index, $dispatch, $company_id, $lang_code, $company_name);
	return $result;
}

function fn_ceca_check_import_mode($primary_object_id, $object, $pattern, $options, &$processed_data, $processing_groups, &$skip_record){	
	if (empty($primary_object_id) && $options['ceca_import_mode'] == 'exist_only') {
        $skip_record = true;
		$processed_data['S']++;
    }
	if (!empty($primary_object_id) && $options['ceca_import_mode'] == 'new_only') {
        $skip_record = true;
		$processed_data['S']++;
    }
}


function fn_ceca_categories_bckp($backup){
	if ($backup=="Y"){	
		$tp = Registry::get('config.table_prefix');	
		$params = array(
			'db_filename' =>  'categories_backup_' . date('dMY_His', TIME) . '.sql',
			'db_tables' =>array(
				$tp.'categories', 
				$tp.'category_descriptions', 
				$tp.'seo_names'
			),
			'db_schema' => 'Y',
			'db_data' => 'Y',
			'db_compress' => 'zip',
			'move_progress'=>false
		  );
		$dump_file_path = DataKeeper::backupDatabase($params);
	}
	return ;
}

function fn_ceca_get_detailed_image_url($product_id, $object_type, $pair_type, $lang_code){
	$image_pair = fn_get_image_pairs($product_id, $object_type, $pair_type, false, true, $lang_code);
    $protocol = fn_get_storefront_protocol();
	
	$alt_data = db_get_hash_single_array("SELECT lang_code, description FROM ?:common_descriptions WHERE ?:common_descriptions.object_id = ?i AND ?:common_descriptions.object_holder = 'images'", array('lang_code', 'description'), $image_pair['detailed_id']);
        $alt_text = '#{';
        if (!empty($alt_data)) {
            foreach ($alt_data as $lang_code => $text) {
                $alt_text .= '[' . $lang_code . ']:' . $text . ';';
            }
        }
        $alt_text .= '}';

    return !empty($image_pair['detailed'][$protocol . '_image_path']) ? $image_pair['detailed'][$protocol . '_image_path'] . $alt_text : '';
	
}

function fn_ceca_import_images($prefix, $image_file, $detailed_file, $position, $type, $object_id, $object, $import_options = null){
	if (!empty($detailed_file)){	
		$filename = basename($detailed_file);
		list($filename, $image_alt) = explode('#', $filename);
		$old_file_name = db_get_field("SELECT image_path FROM ?:images LEFT JOIN ?:images_links ON ?:images_links.detailed_id=?:images.image_id WHERE object_type=?s AND object_id=?i AND type=?s", $object, $object_id, $type);		
		if ($old_file_name && $old_file_name==$filename){
			if (!empty($image_alt)) {
                preg_match_all('/\[([A-Za-z]+?)\]:(.*?);/', $image_alt, $matches);
                if (!empty($matches[1]) && !empty($matches[2])) {
                    $image_alt = array_combine(array_values($matches[1]), array_values($matches[2]));
                }
				if (!empty($image_alt)){
					$image_id = db_get_field("SELECT ?:images.image_id FROM ?:images LEFT JOIN ?:images_links ON ?:images_links.detailed_id=?:images.image_id WHERE object_type=?s AND object_id=?i AND type=?s", $object, $object_id, $type);
					
					foreach ($image_alt as $lc => $_v) {
						$_data = array (
							'object_id' => $image_id,
							'description' => empty($_v) ? '' : trim($_v),
							'lang_code' => $lc,
							'object_holder' => 'images'
						);
						db_query("REPLACE INTO ?:common_descriptions ?e", $_data);
					}	
				}
            }
			return;	
		}		
	}		
	return fn_exim_import_images($prefix, $image_file, $detailed_file, $position, $type, $object_id, $object, $import_options);	
}

function fn_ceca_get_url($category_id) {
	return fn_url('categories.view?category_id=' . $category_id, 'C');
}

function fn_ceca_exim_categories_discussion_export($category_id) {
	$data = fn_get_discussion($category_id, 'C');

    if (!empty($data['type'])) {
        $return = $data['type'];
    } else {
        $return = false;
    }
	
    return $return;
}

function fn_ceca_exim_categories_discussion_import($category_id, $d_type, $is_new_category)
{
	if(Registry::get('addons.discussion.status') == 'A') {
		
		if (isset($d_type)) { // field exists in the importing file
			$allowed_discussion_types = array_keys(DiscussionTypes::getAll());
	
			if (!in_array($d_type, $allowed_discussion_types)) {
				$d_type = DiscussionTypes::TYPE_DISABLED;
			}
		} elseif ($is_new_category) {
			$d_type = Registry::get('settings.discussion.categories.category_discussion_type');
		}
	
		if (!empty($d_type)) {
			$category_company_id = db_get_field('SELECT company_id FROM ?:categories WHERE category_id = ?i', $category_id);
	
			if (empty($category_company_id)
				&& $company_id = Registry::get('runtime.company_id')
			) {
				$category_company_id = $company_id;
			}
	
			$discussion = array(
				'object_type' => 'C',
				'object_id' => $category_id,
				'type' => $d_type,
				'company_id' => $category_company_id
			);
	
			fn_update_discussion($discussion);
	
		}
	}

    return true;
}

function fn_ceca_exim_vendor_categories_fee_import($category_id, $plan_fee, $plan_id) {
	$data[] = [
		'plan_id'      => $plan_id,
		'category_id'  => $category_id,
		'percent_fee'  => is_numeric($plan_fee) ? $plan_fee : null,
	];
	db_query('REPLACE INTO ?:vendor_categories_fee ?m', $data);
}

function fn_ceca_exim_vendor_categories_fee_export($category_id, $plan_id) {
	static $categories_fee;
	
	if(!isset($categories_fee[$category_id])) {
		$categories_fee[$category_id] = fn_vendor_categories_fee_get_category_fee($category_id);	
	}
	
	if(!empty($categories_fee[$category_id]) && !empty($categories_fee[$category_id][$plan_id])) {
		return $categories_fee[$category_id][$plan_id]['percent_fee'];
	} 
	return '';
}

function fn_csc_exim_categories_update_category_post($category_data, $category_id, $lang_code, $create) {
	if(isset($category_data['category_code']) && empty($category_data['category_code']) && !empty($category_id)) {
		db_query('UPDATE ?:categories SET category_code = ?s WHERE category_id = ?i', $category_id, $category_id);
	}
}
