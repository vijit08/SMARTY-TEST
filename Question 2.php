<?php

require '../libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->debugging=true;
$smarty->caching=true;
$smarty->cache_lifetime=120;
$smarty->assign('Para',"'lorem ipsum lorem ipsum lorem ipsum'"
                );

$smarty->display('Question 2.tpl');
?>