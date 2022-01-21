<?php

require '../libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->debugging=true;
$smarty->caching=true;
$smarty->cache_lifetime=120;
$smarty->assign('string_one',"VIJIT RAWAL");
$smarty->assign('string_two',"Works in Ucertify");

$smarty->display('Question 4.tpl');
?>