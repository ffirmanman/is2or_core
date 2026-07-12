<?php
/***************************************************************************
 *                                                                         *
 *    Copyright (c) SoftSolid. All rights reserved.                        *
 *    https://cs-cart.pl, office@cs-cart.com.pl                            *
 *                                                                         *
 **************************************************************************/
use Tygh\Registry;

$addon_params = Registry::get('addons.ss_deepl');

if (isset($addon_params['ss_deepl_enable_logs']) && $addon_params['ss_deepl_enable_logs'] == "Y") {
    if (isset($schema["central"]["customers"]["items"]["ss_logger_menu"])) {
        $schema["central"]["customers"]["items"]["ss_logger_menu"]["subitems"]["ss_deepl_logger_menu"] = array("href" => "ss_deepl_logger.manage", "position" => 900);
    } else {
        $schema["central"]["customers"]["items"]["ss_logger_menu"] = array(
            "attrs" => array("class" => "is-addon"),
            "href" => "ss_deepl_logger.manage",
            "position" => 900,
            "subitems" => array(
                "ss_deepl_logger_menu" => array("href" => "ss_deepl_logger.manage","position" => 504),
            ),
        );
    } // end if
} // end if

return $schema;