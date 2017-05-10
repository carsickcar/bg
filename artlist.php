<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');

// if(!acc()) {
// 	//error('请登录');
// 	header('Location: login.php');
// }

//取出所有art
//print_r($arts);exit();

include(ROOT . '/view/admin/artlist.html');


?>