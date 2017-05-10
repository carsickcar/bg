<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./lib/init.php');
//从地址栏中获取cat_id
$cat_id = $_GET['cat_id'];

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

	
if(empty($_POST)){
	$sql = "select * from cat where cat_id = $cat_id";
	$cat = mGetRow($sql);
	require('./view/admin/catedit.html');
} else {
	$catname = $_POST['catname'];
	$sql = "update cat set catname = '$catname' where cat_id = $cat[cat_id]";

	// $rs = mExec('cat',$cat,'update','cat_id = $cat_id');
	if (mQuery($sql)) {
		succ('修改成功');
	} else {
		error('修改失败');
	}
	
}


?>