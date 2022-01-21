<?php

require '../libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->debugging=true;
$smarty->caching=true;
$smarty->cache_lifetime=120;
$smarty->assign('Contacts',
	array('fax' => '555-222-9876',
		'email' => 'swati.kesarwani@ucertify.com',
		'phone' => array('home' => '555-444-3333',
			'cell' => '555-111-1234'
		)
	),
	array('fax' => '555-222-8876',
		'email' => 'archana.singh@ucertify.com',
		'phone' => array('home' => '555-444-8888',
			'cell' => '555-111-9999'
		)
	)
);



$smarty->display('Question 6.tpl');
?>