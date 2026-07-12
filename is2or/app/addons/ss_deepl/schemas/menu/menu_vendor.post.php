<?php
/***************************************************************************
 *                                                                         *
 *    Copyright (c) SoftSolid. All rights reserved.                        *
 *    https://cs-cart.pl, office@cs-cart.com.pl                            *
 *                                                                         *
 **************************************************************************/

if(fn_ss_deepl_check_access(1)) {
    $schema['central']['products']['items']['ss_deepl_menu'] = [
        'title' => __('ss_deepl_menu'),
        'href'  => 'ss_deepl_logger.manage',
        'position' => 200,
    ];
} // end if

return $schema;