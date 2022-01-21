<?php

require '../libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->debugging=true;
$smarty->caching=true;
$smarty->cache_lifetime=120;
$smarty->assign('Options',array(
                            1800 =>'VIJIT RAWAL',
                            9904=>'KUNAL',
                            2000=>'UCERTIFY')
                                );
$smarty->assign('select',1800);

$smarty->display('Question 1.tpl');
?>