<?php

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

fn_register_hooks(
    'update_language_post',
    'delete_languages_post',
    'get_product_data_post',
    'delete_product_post',
    'check_and_update_product_sharing',
    'delete_company',
    'gather_additional_product_data_post'
);
