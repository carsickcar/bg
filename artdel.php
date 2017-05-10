<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');

//get到art_id
$art_id = $_GET['art_id'];
//判断地址栏传来的art_id是否合法
if (!is_numeric($art_id)) {
	error('art_id不合法');
}

//是否有这篇文章
$sql = "select * from art where art_id=$art_id";
if (!mGetOne($sql)) {
	error('没有这篇文章');
}

//删除文章
$sql = "delete from art where art_id=$art_id";
if (!mQuery($sql)) {
	error('删除文章失败');
} else {
	// succ('删除文章成功');
	header('Location:artlist.php');
}

?>