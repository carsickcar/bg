<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');


if(empty($_POST)) {
	include(ROOT . '/view/admin/catadd.html');
} else {

	//检测栏目是否为空
	$cat['catname'] = trim($_POST['catname']);
	if (empty($cat['catname'])) {
		error("栏目名为空!");
	}  

	//检测栏目名是否已存在
	$sql = "select count(*) from cat where catname = '$cat[catname]'";
	$rs = mGetOne($sql);
	// print_r($rs);
	if ($rs!=0) {
		error("栏目名已存在");
	}
	
	//将栏目写入栏目表
	//$sql = "insert into cat (catname) values ('$cat[catname]')";
	// $sql = "insert into cat(catname) values ('$_POST[catname]')";
	// $rs = mQuery($sql);


	if(!mExec('cat',$cat)) {
		//echo '栏目插入失败';
		error("栏目插入失败!");
		
	} else {
		//echo '栏目插入成功';
		succ("栏目插入成功!");
		
	}
	
}





?>