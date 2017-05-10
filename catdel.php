<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');
//从地址栏中获取cat_id
$cat_id = $_GET['cat_id'];
 // print_r($cat['catname']);


//检测 栏目id 是否为数字
if (!is_numeric($cat_id)) {
	error('id不是数字');
	exit();
}

//检测 栏目是否存在
$sql = "select * from cat where cat_id = $cat_id";
$rs = mGetOne($sql);
// var_dump($rs);
if (!$rs) {
	error('栏目不存在！');
	exit();
}


//检测栏目下是否有文章
$sql = "select * from art where cat_id = $cat_id";
$rs = mGetOne($sql);
if ($rs) {
	error('栏目下有文章！');
	exit();
}

//检测完毕,删除栏目
$sql ="delete from cat where cat_id = $cat_id";
$rs = mQuery($sql);
if ($rs) {
	succ('删除成功！');
} else {
	error('删除失败！');
}

?>