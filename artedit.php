<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./lib/init.php');
$art_id = $_GET['art_id'];

//判断地址栏传来的art_id是否合法


//是否有这篇文章


//查询出所有的栏目




if(empty($_POST)) {
	//取出该行
	include(ROOT . '/view/admin/artedit.html');
} else {
	//检测标题是否为空


	//检测栏目是否合法


	//检测内容是否为空


	//上次修改时间

	//执行
	if() {
		error('文章修改失败');
	} else {
		succ('文章修改成功');
		//删除tag表的所有tag 再insert插入新的tag
	}
}

?>