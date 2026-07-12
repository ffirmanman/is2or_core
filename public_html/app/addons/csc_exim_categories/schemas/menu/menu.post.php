<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			https://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/

$schema['top']['addons']['items']['csc_addons']['type']='title';
$schema['top']['addons']['items']['csc_addons']['href']='csc_exim_categories.settings';
$schema['top']['addons']['items']['csc_addons']['position']='1200';
$schema['top']['addons']['items']['csc_addons']['title']=__("ceca.csc_addons");

$schema['top']['addons']['items']['csc_addons']['subitems']['csc_exim_categories'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'csc_exim_categories.settings',	
    'position' => 300
);

$schema['top']['administration']['items']['export_data']['subitems']['ceca_categories'] = array(
	'href' => 'exim.export?section=ceca_categories',
	'position' => 601
);

$schema['top']['administration']['items']['import_data']['subitems']['ceca_categories'] = array(
	'href' => 'exim.import?section=ceca_categories',
	'position' => 602
);
return $schema;

