<?php
/***************************************************************************
 *                                                                         *
 *    Copyright (c) SoftSolid. All rights reserved.                        *
 *    https://cs-cart.pl, office@cs-cart.com.pl                            *
 *                                                                         *
 **************************************************************************/
use Tygh\ContextMenu\Items\ComponentItem;

defined('BOOTSTRAP') or die('Access denied!');

if (fn_ss_deepl_check_access()) {
    /** @var array $schema */
    $schema['items']['ss_deepl.ss_deepl'] = [
        'name'                => ['template' => 'ss_deepl'],
        'type'                => ComponentItem::class,
        'template'            => 'addons/ss_deepl/components/context_menu/categories/ss_deepl_categories.tpl',
        'permission_callback' => static function () {
            return true;
        },
        'position'            => 70,
    ];
} // end if

return $schema;