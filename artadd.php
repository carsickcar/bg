<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');

//取出所有cats
$sql = "select * from cat";
$cats = mGetAll($sql);
// print_r($cats);exit();

if(empty($_POST)) {
	include(ROOT . '/view/admin/artadd.html');
}else {
	//检测标题是否为空
	$art['title'] = trim($_POST['title']);
	if (empty($art['title'])) {
		error('标题为空');
	}

	//检测栏目是否合法,id是否为数字
	
	$catname =  $_POST['catname'];
	if (!empty($catname)) {
		error('栏目名不合法');
	}


	//检测内容是否为空
	$art['content'] = trim($_POST['content']);
	if (empty($art['content'])) {
		error('内容为空');
	}

	//判断是否有图片上传 且 error 是否为0
	if ($_FILES['pic']['name']!=''&&$_FILES['pic']['error']==0) {
		$filename = createDir();
	}
	// if (!empty($pic)) {
	// 	$art['pic'] = $_POST['pic'];
	// }

	//插入发布时间
	$art['pubtime'] = time();

	//收集tag，采用‘,’作为分隔符
	$art['arttag'] = $_POST['tag'];

	// exit();


	//插入内容到art表
	if(!mExec(art,$art)) {
		
		error('文章发布失败');
	} else {
		//判断是否有tag
		if($art['tag'] == '') {
	// $a = explode(',', $tag);
	// foreach ($a as $v) {
	// 	$art['tag'] = $v;
	// 	// print_r($art['tag']."\n");
	// }
			//将cat 的 num 字段 当前栏目下的文章数 +1
			$art['num'] += 1;
			succ('文章添加成功');
		} else {
			//获取上次 insert 操作产生的主键id
			$id = getLastId();
			//插入tag 到tag表
			
			}
			$sql = rtrim($sql , ",");
			//echo $sql;
			if(mQuery($sql)) {
				//将cat 的 num 字段 当前栏目下的文章数 +1
				$art['num'] += 1;
				succ('文章添加成功');
			} else {
				//tag 添加失败 删除原文章

				if(1){
				//将cat 的 num 字段 当前栏目下的文章数 +1
				
				
					error('文章添加失败');
				}
			}
		}
	}
// }

?>
