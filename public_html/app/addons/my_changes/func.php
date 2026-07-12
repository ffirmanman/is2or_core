<?php

use Tygh\Bootstrap;
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\Enum\SiteArea;
use Tygh\Tygh;


defined('BOOTSTRAP') or die('Access denied');


function  fn_my_changes_get_profile_fields_post($location, $_auth, $lang_code, $params, &$profile_fields, $sections)
{
    $storefront = Tygh::$app['storefront'];
    $storefront_id = $storefront->storefront_id;

    if(AREA == 'C' && $location == 'A' && $storefront_id > 1) {
        if(!empty($profile_fields['C'])) {
            foreach($profile_fields['C'] as $key => $field) {
                if (str_contains($field['class'], 'field-hide')) {
                    unset($profile_fields['C'][$key]);
                }
            }
        }
    }
}
