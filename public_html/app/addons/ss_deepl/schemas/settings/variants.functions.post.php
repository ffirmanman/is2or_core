<?php
/***************************************************************************
 *                                                                         *
 *    Copyright (c) SoftSolid. All rights reserved.                        *
 *    https://cs-cart.pl, office@cs-cart.com.pl                            *
 *                                                                         *
 **************************************************************************/
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Languages\Languages;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

/**
 * Pobranie listy słowniczków (glossaries)
 *
 * @return array
 */
function fn_settings_variants_addons_ss_deepl_ss_deepl_glossary_id()
{
    $glossaries = ['' => __('select')];
    $result = fn_ss_deepl_prepare_restapi_request("glossaries", array(), "GET", true, '', 'v3');
    if (isset($result) && !empty($result)) {
        foreach ($result[0]->glossaries as $glossary) {
            $glossaries[$glossary->glossary_id] = $glossary->name;
        } // end foreach
    } // end if

    return $glossaries;
} // end function fn_settings_variants_addons_ss_deepl_ss_deepl_glossary_id

/**
 * Pobranie listy języków dostępnych w sklepie
 *
 * @return array
 */
function fn_settings_variants_addons_ss_deepl_ss_deepl_from_language()
{
    $languages = fn_ss_deepl_ss_deepl_get_lang();

    return $languages;
} // end function fn_settings_variants_addons_ss_deepl_ss_deepl_from_language

/**
 * Pobranie listy storefrontów i ich nazw w sklepie
 *
 * @return array
 */
function fn_settings_variants_addons_ss_deepl_ss_deepl_from_storefront()
{
    $storefronts = db_get_hash_single_array("SELECT storefront_id, name FROM ?:storefronts", array("storefront_id", "name"));

    return $storefronts;
} // end function fn_settings_variants_addons_ss_deepl_ss_deepl_from_storefront

/**
 * Pobranie listy języków dostępnych w sklepie
 *
 * @return array
 */
function fn_settings_variants_addons_ss_deepl_ss_deepl_to_language()
{
    $languages = fn_ss_deepl_ss_deepl_get_lang();

    return $languages;
} // end function fn_settings_variants_addons_ss_deepl_ss_deepl_to_language

/**
 * Pobranie listy storefrontów i ich nazw w sklepie
 *
 * @return array
 */
function fn_settings_variants_addons_ss_deepl_ss_deepl_to_storefront()
{
    $storefronts = db_get_hash_single_array("SELECT storefront_id, name FROM ?:storefronts", array("storefront_id", "name"));

    return $storefronts;
} // end function fn_settings_variants_addons_ss_deepl_ss_deepl_to_storefront