<?php

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

fn_register_hooks(
    'update_product_post',
    'get_products',
    'get_product_features_pre',
    'update_product_features_value_post',
    'update_product_features_value_pre',
    'update_usergroup',
    'get_categories',
    'get_product_fields',
    'update_image',
    'update_image_pairs'
);
