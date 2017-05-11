<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./lib/init.php');
//取出所有的comment
$sql = "select * from comment";
$comms = mGetAll($sql);

// print_r($comm);

//引入html文件
require(ROOT.'/view/admin/commlist.html');
?>