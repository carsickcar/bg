<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');
//取出cat中所有行，保存结果到$rs里
$sql = "select * from cat";
$cat = mGetAll($sql);

//引入HTML
require(ROOT.'/view/admin/catlist.html');
?>