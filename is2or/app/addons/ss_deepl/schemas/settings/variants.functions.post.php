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