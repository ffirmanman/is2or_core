<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			https://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
if (!defined('BOOTSTRAP')) { die('Access denied'); }
$schema = array(
	'ceca.menu'=>array(
		'ceca_export_categories' => array(		
			'dispatch'=>'exim.export?section=ceca_categories'
		),
		'ceca_import_categories' => array(		
			'dispatch'=>'exim.import?section=ceca_categories'
		)
	)
);
return $schema;