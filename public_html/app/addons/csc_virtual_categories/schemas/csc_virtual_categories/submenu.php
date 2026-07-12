<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			https://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
if (!defined('BOOTSTRAP')) { die('Access denied'); }
$schema = array(
	'cvc.menu'=>array(
		'cvc.settings' => array(		
			'dispatch'=>'cvc.settings'
		),
		'cvc.manage' => array(		
			'dispatch'=>'cvc.manage'
		)		
	)	
);
return $schema;