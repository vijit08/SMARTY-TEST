<?php

require '../libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->debugging=true;
$smarty->caching=true;
$smarty->cache_lifetime=120;
$smarty->assign('string_one',"uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.");
$smarty->assign('string_two','At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.');
$smarty->display('Question 7.tpl');
?>