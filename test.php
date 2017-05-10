<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//require('./lib/init.php');

//echo ROOT;
//print_r($_SERVER);
//print_r($_COOKIE);
/*session_start();
print_r($_SESSION);*/

//var_dump(intval('123'));

//echo md5('123456uY(l:{s4');
/*echo 3 + t();

function t() {
	return 5;
}*/

//$sql = "select salt from user where user_id=1";
//echo mGetOne($sql),'<br>';
// echo 'L&#7sd":Ad';
// var_dump('L&#7sd":Ad');
// var_dump("&#7");
// echo "&#7";

// print_r(dirname(__DIR__)); echo "\n";
// print_r(__DIR__);
// print_r(__FILE__);
// print_r(getcwd());

// $str = 'asdfasfg,.\asfd/   asdfasdf09===';
// echo addslashes($str);

// require('/lib/init.php');
// mConn();
// print_r($conn);
// echo 111111;
// var_dump($conn);

require('./lib/init.php');

if (empty($_POST)){
	include(ROOT.'/view/admin/artadd11.html');
}
?>