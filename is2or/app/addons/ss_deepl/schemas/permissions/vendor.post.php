<?php
/***************************************************************************
 *                                                                         *
 *    Copyright (c) SoftSolid. All rights reserved.                        *
 *    https://cs-cart.pl, office@cs-cart.com.pl                            *
 *                                                                         *
 **************************************************************************/

$schema['controllers']['ss_deepl'] = array (
    'permissions' => true,
);

$schema['controllers']['ss_deepl_logger'] = array (
    'permissions' => true,
);

// permissiony potrzebne do możliwości masowego tłumaczenia z poziomu listy
 $schema['controllers']['ss_deepl'] = array (
    'modes' => array (
        'manage' => array(
            'permissions' => ['GET' => true, 'POST' => true],
        ),
        'mass_translate' => array(
            'permissions' => ['GET' => true, 'POST' => true],
        ),
        'translate' => array(
            'permissions' => ['GET' => true, 'POST' => true],
        ),
    )
);

return $schema;