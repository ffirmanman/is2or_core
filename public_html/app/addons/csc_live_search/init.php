<?php

/*
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
*           http://www.cs-commerce.com/license-agreement.html                *
*                                                                            *
*/

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

fn_register_hooks(
    'get_route',
    'get_products_pre',
    'get_products_before_select',
    'get_products',
    'get_products_post',
    'get_users',
    'login_user_post',
    'update_product_post',
    'delete_product_pre',
    'delete_product_post'
);
