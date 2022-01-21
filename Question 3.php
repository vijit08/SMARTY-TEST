<?php

require '../libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->debugging=true;
$smarty->caching=true;
$smarty->cache_lifetime=120;
$smarty->assign('Number',5);

$smarty->display('Question 3.tpl');
?>