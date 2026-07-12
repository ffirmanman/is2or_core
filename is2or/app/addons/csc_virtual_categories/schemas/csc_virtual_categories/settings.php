<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			https://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
if (!defined('BOOTSTRAP')) { die('Access denied'); }
$schema = array(   
	'general' => array(	
		'header_mode'=>array(
			'type'=>'title'			
		),		
		'mode'=>array(
			'type' => 'selectbox',
			'variants'=>['realtime'=>'cvc.realtime', 'cron'=>'cvc.cron_mode'],
			'default'=>'realtime',
			'tooltip'=>false	
		),
		'cron_command'=>array(
			'type' => 'template',
			'template'=>'addons/csc_virtual_categories/settings/setup_cron.tpl',		
			'show_when'=>['mode'=>['cron']]
		),
		'info'=>array(
			'type' => 'template',
			'template'=>'addons/csc_virtual_categories/settings/setup_desc.tpl',
			//'show_when'=>['mode'=>['cron']]
		),
		'settings'=>array(
			'show_when'=>['mode'=>['realtime']],
			'type'=>'title'			
		),
		'hide_virtual_cats'=>array(
			'type' => 'checkbox',			
			'tooltip'=>true,
			'show_when'=>['mode'=>['realtime']]
		),
		
	)		 	 	
);

return $schema;