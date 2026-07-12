<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/

$schema['top']['addons']['items']['csc_addons']['href']='addons.manage?supplier[]=cs-commerce.com&supplier[]=CSCommerce';
$schema['top']['addons']['items']['csc_addons']['position']='1000';
$schema['top']['addons']['items']['csc_addons']['title']=__("cvc.csc_addons");

$schema['top']['addons']['items']['csc_addons']['subitems']['csc_virtual_categories'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'cvc.settings',	
    'position' => 300
);


return $schema;
